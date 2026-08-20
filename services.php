<?php
$pageTitle = "Services & Loan Portfolio | Gurutma Financial Services Pvt. Ltd.";
$pageDescription = "Explore Gurutma Financial Services Pvt. Ltd. loan products: Micro Finance, Business Loans, Personal Loans, Financial Consultancy, Vehicle Loans, Home Loans & MSME Loans across UP, MP, Bihar, Jharkhand & Chhattisgarh.";
$activePage = "services";
include 'includes/header.php';
?>

    <!-- Page Header Hero -->
    <section class="bg-dark text-white py-4 position-relative overflow-hidden">
        <div class="container text-center py-2">
            <span class="badge bg-primary text-white rounded-pill px-4 py-2 mb-2 fw-bold text-uppercase fs-7 shadow">
                <i class="fa-solid fa-layer-group me-2"></i> Financial Inclusion Portfolio
            </span>
            <h1 class="display-5 fw-extrabold text-white mb-2">Our Services & Loan Products</h1>
            <p class="lead text-white-50 mx-auto small mb-0" style="max-width: 700px;">
                Visual breakdown of Micro Finance, Business Loans, Personal Loans, Financial Consultancy, Vehicle Loans, Home Loans & MSME Loans across UP, MP, Bihar, Jharkhand & Chhattisgarh.
            </p>
        </div>
    </section>

    <!-- Jump Navigation Bar -->
    <div class="bg-white border-bottom sticky-top py-2.5 shadow-sm" style="top: 70px; z-index: 990;">
        <div class="container">
            <div class="d-flex align-items-center justify-content-start justify-content-md-center gap-2 overflow-x-auto text-nowrap">
                <a href="#micro-finance" class="btn btn-sm btn-outline-success fw-bold rounded-pill px-3">Micro Finance</a>
                <a href="#business-loan" class="btn btn-sm btn-outline-primary fw-bold rounded-pill px-3">Business Loan</a>
                <a href="#personal-loan" class="btn btn-sm btn-outline-info text-dark fw-bold rounded-pill px-3">Personal Loan</a>
                <a href="#sourcing" class="btn btn-sm btn-outline-warning text-dark fw-bold rounded-pill px-3">Financial Sourcing</a>
                <a href="#vehicle-loan" class="btn btn-sm btn-outline-danger fw-bold rounded-pill px-3">Vehicle Loan</a>
                <a href="#home-loan" class="btn btn-sm btn-outline-success fw-bold rounded-pill px-3">Home Loan</a>
                <a href="#msme-loan" class="btn btn-sm btn-primary fw-bold rounded-pill px-3">MSME Loans</a>
            </div>
        </div>
    </div>

    <!-- 7 Visual Loan Product Cards (Image-First Design) -->
    <section class="section-padding bg-canvas text-start">
        <div class="container">
            <div class="text-center mb-4" data-aos="fade-up">
                <span class="eyebrow-tag mx-auto d-table">VISUAL PRODUCTS</span>
                <h2 class="h3 fw-extrabold text-dark mb-1">7 Dedicated Loan & Sourcing Services</h2>
                <div class="mx-auto" style="width: 40px; height: 3px; background: var(--primary); border-radius: var(--radius-pill);"></div>
            </div>

            <div class="row g-4">
                <!-- 1. Micro Finance -->
                <div class="col-lg-6" id="micro-finance" data-aos="fade-up">
                    <div class="card border-0 rounded-4 overflow-hidden shadow-sm h-100 bg-white">
                        <div class="position-relative" style="height:220px;">
                            <img src="images/rural_jlg_meeting.png" class="w-100 h-100 object-fit-cover" alt="Micro Finance JLG">
                            <span class="badge bg-success position-absolute top-0 end-0 m-3 px-3 py-2 fw-bold shadow">JLG Group Model</span>
                        </div>
                        <div class="card-body p-4">
                            <h3 class="h3 fw-bold text-dark mb-2">1. Micro Finance</h3>
                            <p class="text-muted small lh-relaxed mb-3">
                                Joint Liability Group (JLG) micro-loans enabling rural women self-help groups to start micro-businesses, buy livestock, and establish self-employment ventures.
                            </p>
                            <ul class="small text-muted mb-4 ps-3 lh-relaxed">
                                <li>Group responsibility & mutual collateral support</li>
                                <li>Weekly/Monthly doorstep repayment collection</li>
                            </ul>
                            <a href="contact.php?practice=MicroFinance#case-filing" class="btn btn-pill-success btn-sm fw-bold px-3">Apply Micro Finance <i class="fa-solid fa-arrow-right me-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 2. Business Loan -->
                <div class="col-lg-6" id="business-loan" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 rounded-4 overflow-hidden shadow-sm h-100 bg-white">
                        <div class="position-relative" style="height:220px;">
                            <img src="images/banner_business_slider.png" class="w-100 h-100 object-fit-cover" alt="Business Loan Shop">
                            <span class="badge bg-primary position-absolute top-0 end-0 m-3 px-3 py-2 fw-bold shadow">Working Capital</span>
                        </div>
                        <div class="card-body p-4">
                            <h3 class="h3 fw-bold text-dark mb-2">2. Business Loan</h3>
                            <p class="text-muted small lh-relaxed mb-3">
                                Working capital and business expansion credit for rural traders, store owners, wholesalers, and service providers across UP, MP, Bihar, Jharkhand & Chhattisgarh.
                            </p>
                            <ul class="small text-muted mb-4 ps-3 lh-relaxed">
                                <li>Flexible tenure options (12 to 60 months)</li>
                                <li>Fast-track document verification & credit check</li>
                            </ul>
                            <a href="contact.php?practice=BusinessLoan#case-filing" class="btn btn-pill-primary btn-sm fw-bold px-3">Apply Business Loan <i class="fa-solid fa-arrow-right me-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 3. Personal Loan -->
                <div class="col-lg-6" id="personal-loan" data-aos="fade-up" data-aos-delay="150">
                    <div class="card border-0 rounded-4 overflow-hidden shadow-sm h-100 bg-white">
                        <div class="position-relative" style="height:220px;">
                            <img src="images/rural_personal_loan.png" class="w-100 h-100 object-fit-cover" alt="Personal Loan Family">
                            <span class="badge bg-info text-dark position-absolute top-0 end-0 m-3 px-3 py-2 fw-bold shadow">Collateral Free</span>
                        </div>
                        <div class="card-body p-4">
                            <h3 class="h3 fw-bold text-dark mb-2">3. Personal Loan</h3>
                            <p class="text-muted small lh-relaxed mb-3">
                                Instant collateral-free personal credit for medical requirements, children's education fees, household needs, and family emergencies.
                            </p>
                            <ul class="small text-muted mb-4 ps-3 lh-relaxed">
                                <li>Minimal documentation & digital screening</li>
                                <li>Transparent interest rates & zero hidden fees</li>
                            </ul>
                            <a href="contact.php?practice=PersonalLoan#case-filing" class="btn btn-pill-info text-dark btn-sm fw-bold px-3">Apply Personal Loan <i class="fa-solid fa-arrow-right me-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 4. Financial Consultancy & Business Sourcing -->
                <div class="col-lg-6" id="sourcing" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 rounded-4 overflow-hidden shadow-sm h-100 bg-white">
                        <div class="position-relative" style="height:220px;">
                            <img src="images/rural_consultancy.png" class="w-100 h-100 object-fit-cover" alt="Financial Sourcing Desk">
                            <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-3 px-3 py-2 fw-bold shadow">BC Sourcing</span>
                        </div>
                        <div class="card-body p-4">
                            <h3 class="h3 fw-bold text-dark mb-2">4. Financial Consultancy & Sourcing</h3>
                            <p class="text-muted small lh-relaxed mb-3">
                                Institutional Business Correspondent (BC) sourcing linking banks & NBFCs with pre-qualified borrower files and field audit services.
                            </p>
                            <ul class="small text-muted mb-4 ps-3 lh-relaxed">
                                <li>Pre-qualified borrower file handover (LS-01)</li>
                                <li>KYC verification & credit score pull</li>
                            </ul>
                            <a href="contact.php?practice=Sourcing#case-filing" class="btn btn-pill-warning text-dark btn-sm fw-bold px-3">Consult Sourcing <i class="fa-solid fa-arrow-right me-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 5. Vehicle Loan -->
                <div class="col-lg-6" id="vehicle-loan" data-aos="fade-up" data-aos-delay="250">
                    <div class="card border-0 rounded-4 overflow-hidden shadow-sm h-100 bg-white">
                        <div class="position-relative" style="height:220px;">
                            <img src="images/rural_tractor_loan.png" class="w-100 h-100 object-fit-cover" alt="Vehicle Loan Tractor">
                            <span class="badge bg-danger position-absolute top-0 end-0 m-3 px-3 py-2 fw-bold shadow">Vehicle Mobility</span>
                        </div>
                        <div class="card-body p-4">
                            <h3 class="h3 fw-bold text-dark mb-2">5. Vehicle Loan</h3>
                            <p class="text-muted small lh-relaxed mb-3">
                                Comprehensive vehicle financing for tractors, commercial loaders, two-wheelers, and transport vehicles to boost rural mobility and trade.
                            </p>
                            <ul class="small text-muted mb-4 ps-3 lh-relaxed">
                                <li>Up to 90% vehicle on-road financing</li>
                                <li>Easy EMI options for commercial vehicles</li>
                            </ul>
                            <a href="contact.php?practice=VehicleLoan#case-filing" class="btn btn-pill-danger btn-sm fw-bold px-3">Apply Vehicle Loan <i class="fa-solid fa-arrow-right me-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 6. Home Loan -->
                <div class="col-lg-6" id="home-loan" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-0 rounded-4 overflow-hidden shadow-sm h-100 bg-white">
                        <div class="position-relative" style="height:220px;">
                            <img src="images/rural_housing_loan.png" class="w-100 h-100 object-fit-cover" alt="Rural Housing Loan">
                            <span class="badge bg-success position-absolute top-0 end-0 m-3 px-3 py-2 fw-bold shadow">Rural Housing</span>
                        </div>
                        <div class="card-body p-4">
                            <h3 class="h3 fw-bold text-dark mb-2">6. Home Loan</h3>
                            <p class="text-muted small lh-relaxed mb-3">
                                Long-term housing loans for rural house construction, structural renovation, roof repair, and additional room construction in rural locations.
                            </p>
                            <ul class="small text-muted mb-4 ps-3 lh-relaxed">
                                <li>Longer repayment tenure up to 20 years</li>
                                <li>Property title verification assistance</li>
                            </ul>
                            <a href="contact.php?practice=HomeLoan#case-filing" class="btn btn-pill-success btn-sm fw-bold px-3">Apply Home Loan <i class="fa-solid fa-arrow-right me-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 7. MSME Loan -->
                <div class="col-12" id="msme-loan" data-aos="fade-up" data-aos-delay="350">
                    <div class="card border-0 rounded-4 overflow-hidden shadow-lg bg-dark text-white">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-5" style="height:280px;">
                                <img src="images/rural_msme_workshop.png" class="w-100 h-100 object-fit-cover" alt="MSME Workshop Loan">
                            </div>
                            <div class="col-md-7 p-4 p-md-5 text-start">
                                <span class="badge bg-accent text-white px-3 py-1.5 fw-bold mb-2">Service 7</span>
                                <h3 class="display-6 fw-extrabold text-white mb-2">7. MSME Loans (Micro, Small & Medium)</h3>
                                <p class="text-white-50 mb-3 small lh-relaxed">
                                    Structured financing tailored for cottage industries, agro-processing units, local manufacturing plants, and small enterprises across UP, MP, Bihar, Jharkhand & Chhattisgarh.
                                </p>
                                <a href="contact.php?practice=MSME#case-filing" class="btn btn-pill-accent btn-md fw-bold px-4">
                                    <i class="fa-solid fa-paper-plane me-1"></i> Apply MSME Loan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
