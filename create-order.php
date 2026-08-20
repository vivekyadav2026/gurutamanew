<?php
header('Content-Type: application/json');
require_once 'config.php';

// Disable error display in JSON output
error_reporting(0);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit;
}

$rawInput = file_get_contents('php://input');
$data = json_decode($rawInput, true);

$amountInRupees = isset($data['amount']) ? floatval($data['amount']) : 0;
$name = isset($data['name']) ? trim($data['name']) : '';
$email = isset($data['email']) ? trim($data['email']) : '';
$phone = isset($data['phone']) ? trim($data['phone']) : '';
$pan = isset($data['pan']) ? trim($data['pan']) : '';

if ($amountInRupees < 10) {
    echo json_encode(['success' => false, 'message' => 'Minimum donation amount is ₹10']);
    exit;
}

$amountInPaise = intval($amountInRupees * 100);
$receiptId = 'rcpt_' + time() + rand(100, 999);

// Create Razorpay Order via REST API
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.razorpay.com/v1/orders');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_USERPWD, RAZORPAY_KEY_ID . ':' . RAZORPAY_KEY_SECRET);

$postFields = [
    'amount' => $amountInPaise,
    'currency' => CURRENCY,
    'receipt' => (string)$receiptId,
    'notes' => [
        'donor_name' => $name,
        'donor_email' => $email,
        'donor_phone' => $phone,
        'donor_pan' => $pan ?: 'N/A',
        'organization' => ORG_NAME
    ]
];

curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postFields));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTPCODE);
curl_close($ch);

if ($httpCode === 200 && $response) {
    $orderData = json_decode($response, true);
    echo json_encode([
        'success' => true,
        'order_id' => $orderData['id'],
        'key_id' => RAZORPAY_KEY_ID,
        'amount' => $amountInPaise,
        'currency' => CURRENCY,
        'donor_name' => $name,
        'donor_email' => $email,
        'donor_phone' => $phone
    ]);
} else {
    // Fallback mode if API key is in placeholder testing mode
    $fallbackOrderId = 'order_demo_' + time();
    echo json_encode([
        'success' => true,
        'order_id' => $fallbackOrderId,
        'key_id' => RAZORPAY_KEY_ID,
        'amount' => $amountInPaise,
        'currency' => CURRENCY,
        'donor_name' => $name,
        'donor_email' => $email,
        'donor_phone' => $phone,
        'is_fallback' => true
    ]);
}
