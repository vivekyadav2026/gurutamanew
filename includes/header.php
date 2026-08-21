<?php
if (!defined('COMPANY_FULL_NAME')) {
    include_once __DIR__ . '/../config.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Gurutma Financial Services Pvt. Ltd. | Reliable & Transparent Financial Solutions'; ?></title>
    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Gurutma Financial Services Pvt. Ltd. is dedicated to providing reliable, transparent, and customer-centric financial solutions, loan sourcing, tele-collections, NPA recovery, and field verification.'; ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- AOS.js CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css?v=1.2.0">
    <?php if (isset($extraHead)) echo $extraHead; ?>
</head>
<body class="<?php echo isset($bodyClass) ? $bodyClass : 'bg-canvas'; ?>">

    <!-- Top Corporate Utility Bar -->
    <div class="top-utility-bar d-block">
        <div class="container-fluid px-3 px-lg-4">
            <!-- Desktop Layout -->
            <div class="d-none d-lg-flex justify-content-between align-items-center w-100">
                <div class="d-flex align-items-center gap-3 flex-shrink-0 text-white-50 small">
                    <span><i class="fa-solid fa-shield-halved text-success me-1"></i> RBI Fair Practices Compliant</span>
                    <span class="opacity-25">|</span>
                    <span><i class="fa-solid fa-headset text-warning me-1"></i> Dedicated Financial Support</span>
                </div>
                
                <!-- Middle Side: News & Regulatory Ticker -->
                <div class="news-ticker-container d-flex align-items-center mx-4 flex-grow-1">
                    <div class="news-ticker-badge">
                        <i class="fa-solid fa-bolt me-1"></i> Corporate Updates
                    </div>
                    <div class="news-ticker-content">
                        <div class="news-ticker-scroll">
                            <span>Gurutma Financial Services Pvt. Ltd. | GSTIN: 09AANCG1128P1Z3</span>
                            <span class="ticker-separator"></span>
                            <span>Micro Finance, Business Loans, Personal Loans, Home Loans, Vehicle Loans & MSME Credit Sourcing</span>
                            <span class="ticker-separator"></span>
                            <span>Prompt Service Response & Customer Sourcing Across UP, MP, Bihar, Jharkhand & Chhattisgarh</span>
                        </div>
                    </div>
                </div>
                
                <!-- Right Side: Phone & Contact -->
                <div class="top-contact-info d-flex align-items-center gap-3 flex-shrink-0">
                    <a href="tel:+917390040402" class="text-white text-decoration-none fw-bold d-flex align-items-center gap-2 text-nowrap" style="font-size: 0.9rem;">
                        <i class="fa-solid fa-phone text-success"></i> +91 73900 40402
                    </a>
                    <a href="https://wa.me/917390040402" target="_blank" class="top-social-icon bg-success text-white" aria-label="WhatsApp Support">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
            
            <!-- Mobile Layout -->
            <div class="d-lg-none d-flex flex-column gap-2 py-1">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-success text-white" style="font-size:0.7rem;"><i class="fa-solid fa-shield-halved me-1"></i> RBI Compliant</span>
                        <a href="https://wa.me/917390040402" target="_blank" class="top-social-icon bg-success text-white" style="width: 26px; height: 26px; font-size: 0.8rem;" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    </div>
                    <div class="top-contact-info d-flex align-items-center">
                        <a href="tel:+917390040402" class="text-white text-decoration-none fw-bold d-flex align-items-center gap-2 text-nowrap" style="font-size: 0.85rem;">
                            <i class="fa-solid fa-phone text-success"></i> +91 73900 40402
                        </a>
                    </div>
                </div>
                <div class="news-ticker-container d-flex align-items-center w-100" style="height: 28px;">
                    <div class="news-ticker-badge px-2" style="font-size: 0.7rem; height: 100%;">
                        <i class="fa-solid fa-bolt me-1"></i> Updates
                    </div>
                    <div class="news-ticker-content">
                        <div class="news-ticker-scroll" style="animation-duration: 22s;">
                            <span>Gurutma Financial Services Pvt. Ltd. | GSTIN: 09AANCG1128P1Z3</span>
                            <span class="ticker-separator"></span>
                            <span>Loan Sourcing, Micro Finance, Business & MSME Financial Solutions</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top py-2">
        <div class="container-fluid px-3 px-lg-4">
            <a class="navbar-brand-custom d-flex align-items-center gap-3 text-decoration-none" href="index.php">
                <img src="images/gurutma_logo.jpg" alt="Gurutma Logo" class="brand-logo-img" style="height: 68px; width: auto; max-width: 280px; object-fit: contain;">
                <div class="brand-text-block border-start border-2 border-success ps-3 ms-1 text-start">
                    <span class="fw-extrabold tracking-tight d-block lh-1 font-heading" style="font-size: 1.55rem; color: #046A38;">GURUTMA</span>
                    <small class="text-success fw-bold text-uppercase d-block mt-1" style="font-size: 0.72rem; letter-spacing: 1px;">Financial Services Pvt. Ltd.</small>
                </div>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link <?php echo (isset($activePage) && $activePage === 'home') ? 'active' : ''; ?>" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo (isset($activePage) && $activePage === 'about') ? 'active' : ''; ?>" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo (isset($activePage) && $activePage === 'coverage') ? 'active' : ''; ?>" href="services.php">Geographical Coverage</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo (isset($activePage) && $activePage === 'compliance') ? 'active' : ''; ?>" href="compliance.php">Regulatory Compliance</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo (isset($activePage) && $activePage === 'careers') ? 'active' : ''; ?>" href="careers.php">Careers</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo (isset($activePage) && $activePage === 'management') ? 'active' : ''; ?>" href="management.php">Management</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo (isset($activePage) && $activePage === 'contact') ? 'active' : ''; ?>" href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
