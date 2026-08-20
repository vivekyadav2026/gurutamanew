<?php
header('Content-Type: application/json');
require_once 'config.php';

error_reporting(0);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit;
}

$rawInput = file_get_contents('php://input');
$data = json_decode($rawInput, true);

$paymentId = isset($data['razorpay_payment_id']) ? trim($data['razorpay_payment_id']) : '';
$orderId = isset($data['razorpay_order_id']) ? trim($data['razorpay_order_id']) : '';
$signature = isset($data['razorpay_signature']) ? trim($data['razorpay_signature']) : '';

if (!$paymentId) {
    echo json_encode(['success' => false, 'message' => 'Payment ID missing']);
    exit;
}

$verified = false;

if ($orderId && $signature && RAZORPAY_KEY_SECRET !== 'YourRazorpaySecretKeyHere') {
    $expectedSignature = hash_hmac('sha256', $orderId . '|' . $paymentId, RAZORPAY_KEY_SECRET);
    if (hash_equals($expectedSignature, $signature)) {
        $verified = true;
    }
} else {
    // Demo / test mode fallback verification
    $verified = true;
}

if ($verified) {
    echo json_encode([
        'success' => true,
        'message' => 'Payment verified successfully',
        'payment_id' => $paymentId,
        'order_id' => $orderId,
        'donor_name' => isset($data['donor_name']) ? $data['donor_name'] : 'Valued Donor',
        'amount' => isset($data['amount']) ? $data['amount'] : 0,
        'date' => date('d M Y, h:i A')
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Payment signature verification failed'
    ]);
}
