<?php
$pageTitle = "Contact & Client Sourcing Desk (ENQ-06) | Gurutma Financial Services Pvt. Ltd.";
$pageDescription = "Connect with Gurutma Financial Services Pvt. Ltd. Submit institutional enquiries, loan sourcing mandates, and recovery portfolios via our 256-bit encrypted filing desk.";
$activePage = "contact";

$submissionSuccess = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $submissionSuccess = true;
}

include 'includes/header.php';
?>

    <!-- Page Header Hero -->
    <section class="bg-dark text-white py-4 position-relative overflow-hidden">
        <div class="container text-center py-2">
            <span class="badge bg-accent text-white rounded-pill px-4 py-2 mb-2 fw-bold text-uppercase fs-7 shadow">
                <i class="fa-solid fa-headset me-2"></i> Practice Code: ENQ-06
            </span>
            <h1 class="display-5 fw-extrabold text-white mb-2">Client Enquiry & Sourcing Desk</h1>
            <p class="lead text-white-50 mx-auto small mb-0" style="max-width: 700px;">
                Strict NDA protection & guaranteed callback response within 1 business day for all institutional mandates & loan requirements.
            </p>
        </div>
    </section>

    <!-- Top Geo-Tag & Direct Communication Strip -->
    <section class="py-3 bg-canvas border-bottom">
        <div class="container">
            <div class="row g-3 align-items-center">
                <div class="col-lg-7 text-center text-lg-start">
                    <h2 class="h4 fw-extrabold text-dark mb-1">Direct Communication & Registered Office</h2>
                    <p class="text-muted mb-0 small lh-relaxed">
                        Dedicated desks for banking credit teams, financial institutions, micro-entrepreneurs, and retail loan applicants.
                    </p>
                </div>
                <div class="col-lg-5">
                    <div class="geo-tag-box text-start p-3">
                        <div class="d-flex align-items-center justify-content-between mb-1.5 pb-1.5 border-bottom border-secondary">
                            <div class="d-flex align-items-center gap-2">
                                <span class="geo-pulse-pin"></span>
                                <span class="geo-tag-title"><i class="fa-solid fa-circle-check text-warning me-1"></i> GEO-COORDINATES VERIFIED</span>
                            </div>
                            <span class="badge bg-success text-white" style="font-size:0.7rem;">GPS Live</span>
                        </div>
                        <div class="mb-1">
                            <small class="text-white-50 d-block fw-bold text-uppercase" style="font-size:0.7rem;">GPS LATITUDE & LONGITUDE</small>
                            <span class="font-monospace fw-extrabold text-warning fs-6">26.273414, 83.118347</span>
                        </div>
                        <p class="small text-white mb-0 fw-semibold lh-tight" style="font-size:0.78rem;">
                            Khata No. 170, Pasipur, Maharajganj, Azamgarh, UP - 276137
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Contact & Intake Form Section -->
    <section class="section-padding bg-white" id="case-filing">
        <div class="container">
            <div class="row g-4 g-lg-5">
                <!-- Left Column: Direct Desk Cards + Image Card -->
                <div class="col-lg-5 text-start" data-aos="fade-right">
                    <span class="eyebrow-tag">DIRECT CHANNELS</span>
                    <h2 class="h3 fw-extrabold text-dark mb-3">Corporate Desk Particulars</h2>

                    <!-- Image Showcase Card -->
                    <div class="card border-0 rounded-4 overflow-hidden shadow-sm mb-4">
                        <img src="images/rural_consultancy.png" class="w-100 object-fit-cover" style="height: 200px;" alt="Financial Sourcing Advisor">
                        <div class="card-body p-3 bg-canvas">
                            <span class="badge bg-success text-white mb-1"><i class="fa-solid fa-clock me-1"></i> Customer SLA Desk</span>
                            <h4 class="h6 fw-bold text-dark mb-0">Guaranteed SLA: &lt; 1 Business Day</h4>
                            <small class="text-muted" style="font-size:0.75rem;">100% NDA protection & direct response</small>
                        </div>
                    </div>

                    <div class="d-flex flex-column gap-3">
                        <!-- Address Card -->
                        <div class="p-3.5 bg-canvas rounded-4 border shadow-xs d-flex align-items-center gap-3">
                            <div class="contact-info-icon icon-emerald">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div>
                                <h4 class="h6 fw-bold text-dark mb-1">Registered Office Address</h4>
                                <p class="small text-muted mb-0 lh-relaxed">
                                    Khata No. 170, Bhairav Baba Road, Pasipur, Maharajganj, Azamgarh, Uttar Pradesh - 276137
                                </p>
                            </div>
                        </div>

                        <!-- Phone Support -->
                        <div class="p-3.5 bg-canvas rounded-4 border shadow-xs d-flex align-items-center gap-3">
                            <div class="contact-info-icon icon-green">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>
                                <h4 class="h6 fw-bold text-dark mb-0.5">Phone & Call Support</h4>
                                <a href="tel:+917390040402" class="fw-bold text-success text-decoration-none d-block">+91 73900 40402</a>
                                <small class="text-muted" style="font-size:0.75rem;">Mon – Sat, 9:30 AM – 6:30 PM IST</small>
                            </div>
                        </div>

                        <!-- WhatsApp Support -->
                        <div class="p-3.5 bg-canvas rounded-4 border shadow-xs d-flex align-items-center gap-3">
                            <div class="contact-info-icon icon-green">
                                <i class="fa-brands fa-whatsapp"></i>
                            </div>
                            <div>
                                <h4 class="h6 fw-bold text-dark mb-0.5">Instant WhatsApp Desk</h4>
                                <a href="https://wa.me/917390040402" target="_blank" class="fw-bold text-success text-decoration-none d-block">+91 73900 40402</a>
                                <small class="text-muted" style="font-size:0.75rem;">Instant mandate query response</small>
                            </div>
                        </div>

                        <!-- Email Card -->
                        <div class="p-3.5 bg-canvas rounded-4 border shadow-xs d-flex align-items-center gap-3">
                            <div class="contact-info-icon icon-gold">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="h6 fw-bold text-dark mb-0.5">Official Email</h4>
                                <a href="mailto:support@gurutma.in" class="fw-bold text-primary text-decoration-none d-block">support@gurutma.in</a>
                                <small class="text-muted" style="font-size:0.75rem;">Response SLA &lt; 1 Business Day</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Premium Custom Form (ENQ-06) -->
                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="100">
                    <div class="contact-form-card text-start">
                        <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom">
                            <div>
                                <span class="badge bg-primary text-white mb-1">Code: ENQ-06</span>
                                <h3 class="h4 fw-bold text-dark mb-0"><i class="fa-solid fa-lock text-warning me-2"></i> Encrypted Sourcing Desk</h3>
                            </div>
                            <span class="badge bg-success bg-opacity-10 text-success border border-success px-3 py-2 fw-bold"><i class="fa-solid fa-shield-halved me-1"></i> 256-Bit SSL Encrypted</span>
                        </div>

                        <?php if ($submissionSuccess): ?>
                            <div class="alert alert-success p-4 rounded-4 mb-4 text-start shadow-sm border border-success">
                                <div class="d-flex align-items-center gap-3 mb-1">
                                    <i class="fa-solid fa-circle-check text-success fs-3"></i>
                                    <h4 class="h5 fw-bold mb-0 text-dark">Requirement Submitted Successfully!</h4>
                                </div>
                                <p class="mb-0 text-muted small lh-relaxed">
                                    A senior desk manager from Gurutma Financial Services Pvt. Ltd. will contact you within <strong>1 Business Day</strong> under strict NDA terms.
                                </p>
                            </div>
                        <?php endif; ?>

                        <p class="small text-muted mb-4">
                            Please fill in your details below to submit loan requirements, microfinance mandates, or institutional sourcing files.
                        </p>

                        <form action="contact.php?status=success#case-filing" method="POST" class="row g-3">
                            <input type="hidden" name="form_type" value="enquiry_desk">

                            <!-- Full Name -->
                            <div class="col-md-6">
                                <label class="form-label-custom">Full Name <span class="text-danger">*</span></label>
                                <div class="input-icon-group">
                                    <i class="fa-solid fa-user input-icon"></i>
                                    <input type="text" name="name" class="form-control form-control-custom" placeholder="e.g. Rahul Sharma" required>
                                </div>
                            </div>

                            <!-- Institution / Firm Name -->
                            <div class="col-md-6">
                                <label class="form-label-custom">Institution / Firm Name <span class="text-danger">*</span></label>
                                <div class="input-icon-group">
                                    <i class="fa-solid fa-building input-icon"></i>
                                    <input type="text" name="institution" class="form-control form-control-custom" placeholder="Bank / Enterprise / Individual" required>
                                </div>
                            </div>

                            <!-- Phone Number -->
                            <div class="col-md-6">
                                <label class="form-label-custom">Phone Number <span class="text-danger">*</span></label>
                                <div class="input-icon-group">
                                    <i class="fa-solid fa-phone input-icon"></i>
                                    <input type="tel" name="phone" class="form-control form-control-custom" placeholder="+91 73900 40402" required>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <label class="form-label-custom">Official Email <span class="text-danger">*</span></label>
                                <div class="input-icon-group">
                                    <i class="fa-solid fa-envelope input-icon"></i>
                                    <input type="email" name="email" class="form-control form-control-custom" placeholder="name@domain.com" required>
                                </div>
                            </div>

                            <!-- Select Service Needed -->
                            <div class="col-12">
                                <label class="form-label-custom">Select Service Needed <span class="text-danger">*</span></label>
                                <div class="input-icon-group">
                                    <i class="fa-solid fa-list-check input-icon"></i>
                                    <select name="practice_area" class="form-select form-select-custom" required>
                                        <option value="" selected disabled>-- Select Loan Product / Service --</option>
                                        <option value="Micro Finance">1. Micro Finance (JLG / Group Loans)</option>
                                        <option value="Business Loan">2. Business Loan (Working Capital)</option>
                                        <option value="Personal Loan">3. Personal Loan (Collateral Free)</option>
                                        <option value="Financial Sourcing">4. Financial Consultancy & Business Sourcing</option>
                                        <option value="Vehicle Loan">5. Vehicle Loan (Tractors & Commercial)</option>
                                        <option value="Home Loan">6. Home Loan (Rural Housing Credit)</option>
                                        <option value="MSME Loan">7. MSME Loans (Cottage & Industry)</option>
                                        <option value="ENQ-06">General Enquiry Sourcing Desk (ENQ-06)</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Message / Requirement Details -->
                            <div class="col-12">
                                <label class="form-label-custom">Requirement Details <span class="text-danger">*</span></label>
                                <div class="input-icon-group">
                                    <i class="fa-solid fa-comment-dots input-icon" style="top:18px;"></i>
                                    <textarea name="message" class="form-control form-control-custom" rows="4" placeholder="Briefly describe your loan requirement, sourcing mandate, or portfolio details..." required></textarea>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12">
                                <button type="submit" class="btn btn-pill-primary btn-lg w-100 shadow-md">
                                    <i class="fa-solid fa-paper-plane me-2"></i> Submit Encrypted Enquiry (SLA &lt; 1 Business Day)
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
