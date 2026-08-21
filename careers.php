<?php
$pageTitle = "Careers & Opportunities | Gurutma Financial Services Pvt. Ltd.";
$pageDescription = "Explore career opportunities at Gurutma Financial Services Pvt. Ltd. Join our growing team across field operations, credit sourcing, and management.";
$activePage = "careers";

$submissionSuccess = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $position = isset($_POST['position']) ? trim($_POST['position']) : '';
    $experience = isset($_POST['experience']) ? trim($_POST['experience']) : '';
    $details = isset($_POST['details']) ? trim($_POST['details']) : '';

    $waMessage = "💼 *NEW JOB APPLICATION - GURUTMA CAREERS*\n";
    $waMessage .= "------------------------------------------\n";
    $waMessage .= "👤 *Applicant Name:* " . $name . "\n";
    $waMessage .= "📞 *Phone Number:* " . $phone . "\n";
    $waMessage .= "✉️ *Email:* " . $email . "\n";
    $waMessage .= "🎯 *Position Applied For:* " . $position . "\n";
    $waMessage .= "⏳ *Experience:* " . $experience . "\n";
    $waMessage .= "💬 *Brief Profile:* " . $details . "\n";
    $waMessage .= "------------------------------------------\n";
    $waMessage .= "⏰ *Submitted At:* " . date('d-m-Y h:i A');

    $targetWhatsappPhone = "917390040402";
    $waUrl = "https://api.whatsapp.com/send?phone=" . $targetWhatsappPhone . "&text=" . urlencode($waMessage);

    header("Location: " . $waUrl);
    exit;
}

include 'includes/header.php';
?>

    <!-- Page Header Hero -->
    <section class="bg-dark text-white py-5 position-relative overflow-hidden">
        <div class="container text-center py-2">
            <span class="badge bg-success text-white rounded-pill px-4 py-2 mb-3 fw-bold text-uppercase fs-7 shadow">
                <i class="fa-solid fa-briefcase me-2"></i> Careers & Growth
            </span>
            <h1 class="display-5 fw-extrabold text-white mb-2">Build Your Career With Gurutma</h1>
            <p class="lead text-white-50 mx-auto small mb-0" style="max-width: 700px;">
                Join a dynamic, value-driven team dedicated to financial inclusion, ethical credit sourcing, and economic empowerment across regional India.
            </p>
        </div>
    </section>

    <!-- Why Join Us Section -->
    <section class="section-padding bg-white">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="eyebrow-tag mx-auto d-table">WHY JOIN US</span>
                <h2 class="display-6 fw-extrabold text-dark mb-2">Why Build Your Future With Gurutma?</h2>
                <p class="text-muted small mx-auto mb-0" style="max-width: 600px;">
                    We empower our employees with continuous learning, competitive growth pathways, and a collaborative work culture.
                </p>
                <div class="mx-auto mt-3" style="width: 50px; height: 3px; background: var(--primary); border-radius: var(--radius-pill);"></div>
            </div>

            <div class="row g-4 text-start">
                <div class="col-md-6 col-lg-3" data-aos="fade-up">
                    <div class="p-4 bg-canvas rounded-4 border shadow-sm h-100 transition-all hover-translate-up">
                        <div class="contact-info-icon icon-emerald mb-3">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <h4 class="h5 fw-bold text-dark mb-2">Rapid Career Growth</h4>
                        <p class="text-muted small lh-relaxed mb-0">
                            Clear performance-based promotions and leadership opportunities across regional branch networks.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-4 bg-canvas rounded-4 border shadow-sm h-100 transition-all hover-translate-up">
                        <div class="contact-info-icon icon-green mb-3">
                            <i class="fa-solid fa-sack-dollar"></i>
                        </div>
                        <h4 class="h5 fw-bold text-dark mb-2">Competitive Pay</h4>
                        <p class="text-muted small lh-relaxed mb-0">
                            Industry-standard fixed salary packages along with attractive incentive structures and rewards.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="150">
                    <div class="p-4 bg-canvas rounded-4 border shadow-sm h-100 transition-all hover-translate-up">
                        <div class="contact-info-icon icon-gold mb-3">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <h4 class="h5 fw-bold text-dark mb-2">Supportive Work Culture</h4>
                        <p class="text-muted small lh-relaxed mb-0">
                            Respectful, inclusive environment fostering teamwork, ethical practices, and open communication.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-4 bg-canvas rounded-4 border shadow-sm h-100 transition-all hover-translate-up">
                        <div class="contact-info-icon icon-emerald mb-3">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <h4 class="h5 fw-bold text-dark mb-2">Skill Development</h4>
                        <p class="text-muted small lh-relaxed mb-0">
                            Comprehensive training on credit evaluation, customer relationship management, and financial compliance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Open Positions & Career Application Form -->
    <section class="section-padding bg-canvas border-top">
        <div class="container">
            <div class="row g-4 g-lg-5 align-items-center">
                <!-- Left: Career Openings -->
                <div class="col-lg-5 pe-lg-4 text-start" data-aos="fade-right">
                    <span class="eyebrow-tag">CURRENT OPENINGS</span>
                    <h2 class="fw-extrabold text-dark mb-3">Explore Opportunities</h2>
                    <p class="text-muted mb-4 small lh-relaxed">
                        We are actively recruiting passionate professionals for field operations, credit sourcing, and client management.
                    </p>

                    <div class="d-flex flex-column gap-3">
                        <div class="p-3 bg-white rounded-3 border shadow-xs">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="h6 fw-bold text-dark mb-0">Field Sourcing Executive</h4>
                                <span class="badge bg-success text-white">Full Time</span>
                            </div>
                            <small class="text-muted" style="font-size:0.78rem;">Location: UP, MP, Bihar & Regional Branches</small>
                        </div>

                        <div class="p-3 bg-white rounded-3 border shadow-xs">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="h6 fw-bold text-dark mb-0">Credit Verification Officer</h4>
                                <span class="badge bg-primary text-white">Full Time</span>
                            </div>
                            <small class="text-muted" style="font-size:0.78rem;">Location: Azamgarh Corporate / Regional Office</small>
                        </div>

                        <div class="p-3 bg-white rounded-3 border shadow-xs">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="h6 fw-bold text-dark mb-0">Branch Relationship Manager</h4>
                                <span class="badge bg-warning text-dark">Urgent</span>
                            </div>
                            <small class="text-muted" style="font-size:0.78rem;">Location: District Head Offices</small>
                        </div>
                    </div>
                </div>

                <!-- Right: Career Application Form -->
                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="100">
                    <div class="contact-form-card text-start">
                        <div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom">
                            <div>
                                <span class="badge bg-success text-white mb-1">CAREER INQUIRY</span>
                                <h3 class="h4 fw-bold text-dark mb-0"><i class="fa-solid fa-user-plus text-success me-2"></i> Submit Your Career Application</h3>
                            </div>
                        </div>

                        <form action="careers.php" method="POST" class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label-custom">Full Name <span class="text-danger">*</span></label>
                                <div class="input-icon-group">
                                    <i class="fa-solid fa-user input-icon"></i>
                                    <input type="text" name="name" class="form-control form-control-custom" placeholder="e.g. Amit Kumar" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label-custom">Mobile Number <span class="text-danger">*</span></label>
                                <div class="input-icon-group">
                                    <i class="fa-solid fa-phone input-icon"></i>
                                    <input type="tel" name="phone" class="form-control form-control-custom" placeholder="e.g. +91 9876543210" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label-custom">Email Address <span class="text-danger">*</span></label>
                                <div class="input-icon-group">
                                    <i class="fa-solid fa-envelope input-icon"></i>
                                    <input type="email" name="email" class="form-control form-control-custom" placeholder="e.g. name@example.com" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label-custom">Position Applied For <span class="text-danger">*</span></label>
                                <div class="input-icon-group">
                                    <i class="fa-solid fa-briefcase input-icon"></i>
                                    <select name="position" class="form-select form-control-custom" required>
                                        <option value="Field Sourcing Executive">Field Sourcing Executive</option>
                                        <option value="Credit Verification Officer">Credit Verification Officer</option>
                                        <option value="Branch Relationship Manager">Branch Relationship Manager</option>
                                        <option value="Tele-Collection Executive">Tele-Collection Executive</option>
                                        <option value="Other Career Role">Other General Application</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label-custom">Total Work Experience <span class="text-danger">*</span></label>
                                <div class="input-icon-group">
                                    <i class="fa-solid fa-clock-rotate-left input-icon"></i>
                                    <select name="experience" class="form-select form-control-custom" required>
                                        <option value="Fresher (0 Years)">Fresher (0 Years)</option>
                                        <option value="1 - 2 Years">1 - 2 Years</option>
                                        <option value="3 - 5 Years">3 - 5 Years</option>
                                        <option value="5+ Years">5+ Years</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label-custom">Brief Profile / Qualification Details <span class="text-danger">*</span></label>
                                <div class="input-icon-group">
                                    <i class="fa-solid fa-comment-dots input-icon" style="top:18px;"></i>
                                    <textarea name="details" class="form-control form-control-custom" rows="3" placeholder="Mention your qualification, current location, and key skills..." required></textarea>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-pill-primary btn-lg w-100 shadow-md bg-success border-0 py-3">
                                    <i class="fa-brands fa-whatsapp me-2 fs-4"></i> Submit & Send Career Application via WhatsApp
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
