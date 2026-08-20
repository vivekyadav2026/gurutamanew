<?php
$pageTitle = "Gurutma Financial Services Pvt. Ltd. | Rural Financial Inclusion & Microfinance";
$pageDescription = "Gurutma Financial Services Pvt. Ltd. empowers rural India across UP, MP, Bihar, Jharkhand & Chhattisgarh. Offering Micro Finance, Business Loans, Personal Loans, Financial Sourcing, Vehicle Loans, Home Loans & MSME Loans.";
$activePage = "home";
include 'includes/header.php';
?>

    <!-- Top Geo-Tag & Coverage Highlight Bar -->
    <div class="bg-dark text-white py-1.5 border-bottom border-secondary" style="font-size:0.85rem;">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
                <div class="d-flex align-items-center gap-2">
                    <span class="geo-pulse-pin"></span>
                    <span class="fw-bold text-success"><i class="fa-solid fa-location-dot me-1"></i> GEO-TAGGED HQ:</span>
                    <span class="font-monospace text-warning fw-bold">26.273414 N, 83.118347 E</span>
                    <span class="text-white-50 ms-2 d-none d-md-inline">(Pasipur, Maharajganj, Azamgarh, UP)</span>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <span class="fw-bold text-white-50"><i class="fa-solid fa-map-location-dot me-1 text-primary"></i> States Covered:</span>
                    <span class="badge bg-primary text-white">UP</span>
                    <span class="badge bg-success text-white">MP</span>
                    <span class="badge bg-danger text-white">BIHAR</span>
                    <span class="badge bg-warning text-dark">JHARKHAND</span>
                    <span class="badge bg-info text-dark">CHHATTISGARH</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Generated Image Hero Banner Slider (Carousel) -->
    <div id="heroBannerSlider" class="carousel slide carousel-fade shadow-sm" data-bs-ride="carousel" data-bs-interval="4500">
        <div class="carousel-indicators mb-2">
            <button type="button" data-bs-target="#heroBannerSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroBannerSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroBannerSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#heroBannerSlider" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>

        <div class="carousel-inner">
            <!-- Slide 1: Micro Finance & JLG Groups -->
            <div class="carousel-item active">
                <div class="carousel-img-wrap" style="background-image: linear-gradient(rgba(11, 30, 20, 0.65), rgba(11, 30, 20, 0.75)), url('images/banner_jlg_slider.png');"></div>
                <div class="carousel-caption-custom container text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-xl-8">
                            <span class="badge bg-success text-white rounded-pill px-3 py-1.5 mb-2 fw-bold text-uppercase fs-7 shadow">
                                <i class="fa-solid fa-people-group me-1"></i> Micro Finance & JLG Model
                            </span>
                            <h1 class="display-5 text-white fw-extrabold mb-2 font-heading">Empowering Rural Women & Self-Reliance</h1>
                            <p class="text-white-50 mb-3 fs-6 lh-relaxed d-none d-md-block">Doorstep Joint Liability Group (JLG) micro-loans across UP, MP, Bihar, Jharkhand & Chhattisgarh.</p>
                            <div class="d-flex flex-wrap justify-content-center gap-2">
                                <a href="contact.php?practice=MicroFinance#case-filing" class="btn btn-pill btn-pill-accent btn-md shadow-sm"><i class="fa-solid fa-paper-plane me-1"></i> Apply Micro Finance</a>
                                <a href="#our-services" class="btn btn-pill btn-pill-outline-light btn-md"><i class="fa-solid fa-images me-1"></i> View Visual Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Business Loan & MSME Growth -->
            <div class="carousel-item">
                <div class="carousel-img-wrap" style="background-image: linear-gradient(rgba(11, 30, 20, 0.65), rgba(11, 30, 20, 0.75)), url('images/banner_business_slider.png');"></div>
                <div class="carousel-caption-custom container text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-xl-8">
                            <span class="badge bg-primary text-white rounded-pill px-3 py-1.5 mb-2 fw-bold text-uppercase fs-7 shadow">
                                <i class="fa-solid fa-briefcase me-1"></i> Business & MSME Loans
                            </span>
                            <h1 class="display-5 text-white fw-extrabold mb-2 font-heading">Fueling Small Business & Regional Enterprise</h1>
                            <p class="text-white-50 mb-3 fs-6 lh-relaxed d-none d-md-block">Working capital and business expansion finance for rural traders, shopkeepers, and cottage industries.</p>
                            <div class="d-flex flex-wrap justify-content-center gap-2">
                                <a href="contact.php?practice=BusinessLoan#case-filing" class="btn btn-pill btn-pill-accent btn-md shadow-sm"><i class="fa-solid fa-building me-1"></i> Apply Business Loan</a>
                                <a href="contact.php?practice=MSME#case-filing" class="btn btn-pill btn-pill-outline-light btn-md"><i class="fa-solid fa-gears me-1"></i> Apply MSME Credit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Doorstep Financial Sourcing -->
            <div class="carousel-item">
                <div class="carousel-img-wrap" style="background-image: linear-gradient(rgba(11, 30, 20, 0.65), rgba(11, 30, 20, 0.75)), url('images/banner_doorstep_slider.png');"></div>
                <div class="carousel-caption-custom container text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-xl-8">
                            <span class="badge bg-info text-dark rounded-pill px-3 py-1.5 mb-2 fw-bold text-uppercase fs-7 shadow">
                                <i class="fa-solid fa-user-check me-1"></i> Doorstep Financial Sourcing
                            </span>
                            <h1 class="display-5 text-white fw-extrabold mb-2 font-heading">DRA-Certified Field Network & Verification</h1>
                            <p class="text-white-50 mb-3 fs-6 lh-relaxed d-none d-md-block">Pre-qualified borrower files, KYC logging, address verification, and clean file handover.</p>
                            <div class="d-flex flex-wrap justify-content-center gap-2">
                                <a href="contact.php#case-filing" class="btn btn-pill btn-pill-accent btn-md shadow-sm"><i class="fa-solid fa-file-shield me-1"></i> Enquiry Desk (ENQ-06)</a>
                                <a href="compliance.php" class="btn btn-pill btn-pill-outline-light btn-md"><i class="fa-solid fa-shield-halved me-1"></i> Compliance Standards</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 4: Home Loan & Vehicle Credit -->
            <div class="carousel-item">
                <div class="carousel-img-wrap" style="background-image: linear-gradient(rgba(11, 30, 20, 0.65), rgba(11, 30, 20, 0.75)), url('images/banner_housing_slider.png');"></div>
                <div class="carousel-caption-custom container text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-xl-8">
                            <span class="badge bg-warning text-dark rounded-pill px-3 py-1.5 mb-2 fw-bold text-uppercase fs-7 shadow">
                                <i class="fa-solid fa-house-chimney me-1"></i> Home & Vehicle Loans
                            </span>
                            <h1 class="display-5 text-white fw-extrabold mb-2 font-heading">Building Housing & Mobility Across Rural India</h1>
                            <p class="text-white-50 mb-3 fs-6 lh-relaxed d-none d-md-block">Affordable home construction, structural renovation, tractor, and commercial loader vehicle financing.</p>
                            <div class="d-flex flex-wrap justify-content-center gap-2">
                                <a href="contact.php?practice=HomeLoan#case-filing" class="btn btn-pill btn-pill-accent btn-md shadow-sm"><i class="fa-solid fa-house me-1"></i> Apply Home Loan</a>
                                <a href="contact.php?practice=VehicleLoan#case-filing" class="btn btn-pill btn-pill-outline-light btn-md"><i class="fa-solid fa-truck-pickup me-1"></i> Apply Vehicle Loan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Prev & Next Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroBannerSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon p-2.5 bg-dark bg-opacity-50 rounded-circle" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroBannerSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon p-2.5 bg-dark bg-opacity-50 rounded-circle" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Geo-Tag & Verified Corporate Overview Strip -->
    <section class="py-3 bg-canvas border-bottom">
        <div class="container">
            <div class="row g-3 align-items-center">
                <div class="col-lg-7 text-center text-lg-start">
                    <h2 class="h4 fw-extrabold text-dark mb-1">Empowering Rural India Through Doorstep Financial Services</h2>
                    <p class="text-muted mb-0 small lh-relaxed">
                        Gurutma Financial Services Pvt. Ltd. provides transparent microfinance, Joint Liability Group (JLG) loans, business loans, personal loans, vehicle loans, home loans, and MSME loans across <strong>UP, MP, Bihar, Jharkhand & Chhattisgarh</strong>.
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

                        <div class="mb-2">
                            <small class="text-white-50 d-block fw-bold text-uppercase" style="font-size:0.7rem;">REGISTERED OFFICE LOCATION</small>
                            <p class="small text-white mb-0 fw-semibold lh-tight" style="font-size:0.78rem;">
                                Khata No. 170, Pasipur, Maharajganj, Azamgarh, UP - 276137
                            </p>
                        </div>

                        <div>
                            <a href="https://maps.google.com/?q=26.273414,83.118347" target="_blank" class="btn btn-sm btn-outline-light w-100 fw-bold py-1" style="font-size:0.78rem;">
                                <i class="fa-solid fa-map-pin text-warning me-1"></i> View Live Google Maps Coordinates
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- IMAGE SHOWCASE GALLERY GRID (Samparna 4-Photo Showcase Layout) -->
    <section class="section-padding bg-white border-top">
        <div class="container">
            <div class="text-center mb-3.5" data-aos="fade-up">
                <span class="eyebrow-tag mx-auto d-table">RURAL IMPACT GALLERY</span>
                <h2 class="h3 fw-extrabold text-dark mb-1">Grassroots Financial Inclusion In Action</h2>
                <div class="mx-auto" style="width: 40px; height: 3px; background: var(--primary); border-radius: var(--radius-pill);"></div>
            </div>

            <div class="row g-3" data-aos="fade-up">
                <!-- Image 1 -->
                <div class="col-6 col-md-3">
                    <div class="card h-100 border-0 rounded-4 overflow-hidden shadow-sm transition-all hover-translate-up">
                        <img src="images/rural_jlg_meeting.png" class="w-100 object-fit-cover" style="height: 240px;" alt="Micro Finance JLG Group Meeting">
                        <div class="card-body p-3 bg-canvas text-start">
                            <span class="badge bg-success text-white mb-1" style="font-size:0.68rem;">Micro Finance</span>
                            <h4 class="h6 fw-bold text-dark mb-0">JLG Group Meetings</h4>
                            <small class="text-muted" style="font-size:0.75rem;">Doorstep credit for rural women</small>
                        </div>
                    </div>
                </div>

                <!-- Image 2 -->
                <div class="col-6 col-md-3">
                    <div class="card h-100 border-0 rounded-4 overflow-hidden shadow-sm transition-all hover-translate-up">
                        <img src="images/rural_doorstep_agent.png" class="w-100 object-fit-cover" style="height: 240px;" alt="Doorstep Loan Form Filling">
                        <div class="card-body p-3 bg-canvas text-start">
                            <span class="badge bg-primary text-white mb-1" style="font-size:0.68rem;">Doorstep Service</span>
                            <h4 class="h6 fw-bold text-dark mb-0">Field Verification</h4>
                            <small class="text-muted" style="font-size:0.75rem;">DRA-certified field assistance</small>
                        </div>
                    </div>
                </div>

                <!-- Image 3 -->
                <div class="col-6 col-md-3">
                    <div class="card h-100 border-0 rounded-4 overflow-hidden shadow-sm transition-all hover-translate-up">
                        <img src="images/rural_dairy_microloan.png" class="w-100 object-fit-cover" style="height: 240px;" alt="Rural Micro Enterprise Dairy">
                        <div class="card-body p-3 bg-canvas text-start">
                            <span class="badge bg-warning text-dark mb-1" style="font-size:0.68rem;">Micro Enterprise</span>
                            <h4 class="h6 fw-bold text-dark mb-0">Livelihood Loans</h4>
                            <small class="text-muted" style="font-size:0.75rem;">Dairy & livestock self-reliance</small>
                        </div>
                    </div>
                </div>

                <!-- Image 4 -->
                <div class="col-6 col-md-3">
                    <div class="card h-100 border-0 rounded-4 overflow-hidden shadow-sm transition-all hover-translate-up">
                        <img src="images/rural_msme_workshop.png" class="w-100 object-fit-cover" style="height: 240px;" alt="MSME Workshop Credit">
                        <div class="card-body p-3 bg-canvas text-start">
                            <span class="badge bg-danger text-white mb-1" style="font-size:0.68rem;">MSME Loans</span>
                            <h4 class="h6 fw-bold text-dark mb-0">Cottage Industries</h4>
                            <small class="text-muted" style="font-size:0.75rem;">Small manufacturing growth</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR SERVICES SECTION (7 Visual Cards with Generated Images Header) -->
    <section class="section-padding bg-canvas border-top text-start" id="our-services">
        <div class="container">
            <div class="text-center mb-4" data-aos="fade-up">
                <span class="eyebrow-tag mx-auto d-table">VISUAL PRODUCTS</span>
                <h2 class="h3 fw-extrabold text-dark mb-1">Our 7 Loan Services & Visual Portfolio</h2>
                <div class="mx-auto" style="width: 40px; height: 3px; background: var(--primary); border-radius: var(--radius-pill);"></div>
            </div>

            <div class="row g-4">
                <!-- 1. Micro Finance -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="card h-100 border-0 rounded-4 overflow-hidden shadow-sm transition-all hover-translate-up bg-white">
                        <div class="position-relative" style="height:190px;">
                            <img src="images/rural_jlg_meeting.png" class="w-100 h-100 object-fit-cover" alt="Micro Finance JLG">
                            <span class="badge bg-success position-absolute top-0 end-0 m-3 px-3 py-1.5 fw-bold shadow-sm">Micro Finance</span>
                        </div>
                        <div class="card-body p-4 text-start">
                            <h3 class="h4 fw-bold text-dark mb-2">1. Micro Finance</h3>
                            <p class="text-muted small lh-relaxed mb-3">
                                Joint Liability Group (JLG) micro-loans empowering rural women self-help groups for livestock rearing & income generation.
                            </p>
                            <a href="contact.php?practice=MicroFinance#case-filing" class="btn btn-pill-outline btn-sm fw-bold w-100">Apply Micro Finance <i class="fa-solid fa-arrow-right me-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 2. Business Loan -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 rounded-4 overflow-hidden shadow-sm transition-all hover-translate-up bg-white">
                        <div class="position-relative" style="height:190px;">
                            <img src="images/banner_business_slider.png" class="w-100 h-100 object-fit-cover" alt="Business Loan">
                            <span class="badge bg-primary position-absolute top-0 end-0 m-3 px-3 py-1.5 fw-bold shadow-sm">Business Loan</span>
                        </div>
                        <div class="card-body p-4 text-start">
                            <h3 class="h4 fw-bold text-dark mb-2">2. Business Loan</h3>
                            <p class="text-muted small lh-relaxed mb-3">
                                Working capital and credit expansion for rural merchants, shop owners, and small service enterprises.
                            </p>
                            <a href="contact.php?practice=BusinessLoan#case-filing" class="btn btn-pill-outline btn-sm fw-bold w-100">Apply Business Loan <i class="fa-solid fa-arrow-right me-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 3. Personal Loan -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="150">
                    <div class="card h-100 border-0 rounded-4 overflow-hidden shadow-sm transition-all hover-translate-up bg-white">
                        <div class="position-relative" style="height:190px;">
                            <img src="images/rural_personal_loan.png" class="w-100 h-100 object-fit-cover" alt="Personal Loan">
                            <span class="badge bg-info text-dark position-absolute top-0 end-0 m-3 px-3 py-1.5 fw-bold shadow-sm">Personal Loan</span>
                        </div>
                        <div class="card-body p-4 text-start">
                            <h3 class="h4 fw-bold text-dark mb-2">3. Personal Loan</h3>
                            <p class="text-muted small lh-relaxed mb-3">
                                Collateral-free personal credit for medical emergencies, children's education, and domestic requirements.
                            </p>
                            <a href="contact.php?practice=PersonalLoan#case-filing" class="btn btn-pill-outline btn-sm fw-bold w-100">Apply Personal Loan <i class="fa-solid fa-arrow-right me-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 4. Financial Consultancy & Business Sourcing -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 border-0 rounded-4 overflow-hidden shadow-sm transition-all hover-translate-up bg-white">
                        <div class="position-relative" style="height:190px;">
                            <img src="images/rural_consultancy.png" class="w-100 h-100 object-fit-cover" alt="Financial Sourcing">
                            <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-3 px-3 py-1.5 fw-bold shadow-sm">BC Sourcing</span>
                        </div>
                        <div class="card-body p-4 text-start">
                            <h3 class="h4 fw-bold text-dark mb-2">4. Financial Consultancy & Sourcing</h3>
                            <p class="text-muted small lh-relaxed mb-3">
                                Business Correspondent (BC) sourcing linking banks & NBFCs with pre-qualified borrower files and field audits.
                            </p>
                            <a href="contact.php?practice=Sourcing#case-filing" class="btn btn-pill-outline btn-sm fw-bold w-100">Consult Sourcing <i class="fa-solid fa-arrow-right me-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 5. Vehicle Loan -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="250">
                    <div class="card h-100 border-0 rounded-4 overflow-hidden shadow-sm transition-all hover-translate-up bg-white">
                        <div class="position-relative" style="height:190px;">
                            <img src="images/rural_tractor_loan.png" class="w-100 h-100 object-fit-cover" alt="Vehicle Loan Tractor">
                            <span class="badge bg-danger position-absolute top-0 end-0 m-3 px-3 py-1.5 fw-bold shadow-sm">Vehicle Loan</span>
                        </div>
                        <div class="card-body p-4 text-start">
                            <h3 class="h4 fw-bold text-dark mb-2">5. Vehicle Loan</h3>
                            <p class="text-muted small lh-relaxed mb-3">
                                Affordable vehicle financing for tractors, commercial loaders, two-wheelers, and transport vehicles.
                            </p>
                            <a href="contact.php?practice=VehicleLoan#case-filing" class="btn btn-pill-outline btn-sm fw-bold w-100">Apply Vehicle Loan <i class="fa-solid fa-arrow-right me-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 6. Home Loan -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 border-0 rounded-4 overflow-hidden shadow-sm transition-all hover-translate-up bg-white">
                        <div class="position-relative" style="height:190px;">
                            <img src="images/rural_housing_loan.png" class="w-100 h-100 object-fit-cover" alt="Home Loan Housing">
                            <span class="badge bg-success position-absolute top-0 end-0 m-3 px-3 py-1.5 fw-bold shadow-sm">Home Loan</span>
                        </div>
                        <div class="card-body p-4 text-start">
                            <h3 class="h4 fw-bold text-dark mb-2">6. Home Loan</h3>
                            <p class="text-muted small lh-relaxed mb-3">
                                Long-term housing credit for rural house construction, structural renovation, and roof upgrades.
                            </p>
                            <a href="contact.php?practice=HomeLoan#case-filing" class="btn btn-pill-outline btn-sm fw-bold w-100">Apply Home Loan <i class="fa-solid fa-arrow-right me-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 7. MSME Loan -->
                <div class="col-12" data-aos="fade-up" data-aos-delay="350">
                    <div class="card border-0 rounded-4 overflow-hidden shadow-lg bg-dark text-white">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-5" style="height:260px;">
                                <img src="images/rural_msme_workshop.png" class="w-100 h-100 object-fit-cover" alt="MSME Workshop Loan">
                            </div>
                            <div class="col-md-7 p-4 p-md-5 text-start">
                                <span class="badge bg-accent text-white px-3 py-1.5 fw-bold mb-2">Service 7</span>
                                <h3 class="display-6 fw-extrabold text-white mb-2">7. MSME Loans (Micro, Small & Medium)</h3>
                                <p class="text-white-50 mb-3 small lh-relaxed">
                                    Financing for cottage industries, agro-processing units, local manufacturing plants, and small enterprises across UP, MP, Bihar, Jharkhand & Chhattisgarh.
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

    <!-- STATE COVERAGE Section (5 States) -->
    <section class="section-padding bg-white border-top text-center" id="states-covered">
        <div class="container">
            <span class="eyebrow-tag mx-auto d-table">REGIONAL NETWORK</span>
            <h2 class="h3 fw-extrabold text-dark mb-1">5 States Regional Network Coverage</h2>
            <p class="text-muted mx-auto small mb-3" style="max-width: 600px;">Providing doorstep microfinance and business sourcing across regional India.</p>

            <div class="d-flex flex-wrap align-items-center justify-content-center gap-3">
                <div class="state-coverage-pill">
                    <i class="fa-solid fa-map-pin text-danger"></i> UTTAR PRADESH (UP)
                </div>
                <div class="state-coverage-pill">
                    <i class="fa-solid fa-map-pin text-primary"></i> MADHYA PRADESH (MP)
                </div>
                <div class="state-coverage-pill">
                    <i class="fa-solid fa-map-pin text-success"></i> BIHAR
                </div>
                <div class="state-coverage-pill">
                    <i class="fa-solid fa-map-pin text-warning"></i> JHARKHAND
                </div>
                <div class="state-coverage-pill">
                    <i class="fa-solid fa-map-pin text-info"></i> CHHATTISGARH
                </div>
            </div>
        </div>
    </section>

    <!-- Case Filing & Contact Desk Form (ENQ-06) -->
    <section class="section-padding bg-canvas border-top" id="case-filing">
        <div class="container">
            <div class="row g-4 g-lg-5 align-items-center">
                <div class="col-lg-5 pe-lg-4 text-start" data-aos="fade-right">
                    <span class="eyebrow-tag">File Code: ENQ-06</span>
                    <h2 class="fw-extrabold text-dark mb-3">Client Case Filing & Sourcing Desk</h2>
                    <p class="text-muted mb-3 lh-lg">
                        Submit your loan sourcing requirements, microfinance mandates, or credit portfolio details through our 256-bit encrypted filing desk.
                    </p>

                    <div class="geo-tag-box p-4 mb-4">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span class="geo-pulse-pin"></span>
                            <span class="geo-tag-title"><i class="fa-solid fa-circle-check text-warning me-1"></i> GEO-COORDINATES VERIFIED</span>
                        </div>
                        <span class="font-monospace text-warning fw-bold fs-5 d-block mb-1">26.273414, 83.118347</span>
                        <p class="small geo-tag-title mb-0 lh-relaxed">Pasipur, Maharajganj, Azamgarh, Uttar Pradesh - 276137</p>
                    </div>

                    <div class="d-flex align-items-center gap-3">
                        <a href="tel:+917390040402" class="btn btn-pill-outline btn-md fw-bold">
                            <i class="fa-solid fa-phone text-success me-2"></i> +91 73900 40402
                        </a>
                        <a href="https://wa.me/917390040402" target="_blank" class="btn btn-pill-primary btn-md fw-bold">
                            <i class="fab fa-whatsapp me-2"></i> WhatsApp Desk
                        </a>
                    </div>
                </div>

                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">
                    <div class="contact-form-card text-start">
                        <div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom">
                            <div>
                                <span class="badge bg-primary text-white mb-1">Code: ENQ-06</span>
                                <h3 class="h4 fw-bold text-dark mb-0"><i class="fa-solid fa-file-shield text-success me-2"></i> Encrypted Sourcing Desk</h3>
                            </div>
                            <span class="badge bg-success bg-opacity-10 text-success border border-success px-3 py-1.5 fw-bold">256-Bit SSL Encrypted</span>
                        </div>
                        
                        <?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
                            <div class="alert alert-success d-flex align-items-center gap-2 rounded-3 mb-3">
                                <i class="fa-solid fa-circle-check fs-4"></i>
                                <div>
                                    <strong>Enquiry Submitted Successfully!</strong><br>
                                    Our practice team will contact you within 1 business day under NDA terms.
                                </div>
                            </div>
                        <?php endif; ?>

                        <form action="contact.php?status=success#case-filing" method="POST" class="row g-3">
                            <input type="hidden" name="form_type" value="enquiry_desk">
                            
                            <div class="col-md-6">
                                <label class="form-label-custom">Full Name <span class="text-danger">*</span></label>
                                <div class="input-icon-group">
                                    <i class="fa-solid fa-user input-icon"></i>
                                    <input type="text" name="name" class="form-control form-control-custom" placeholder="Your Name" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label-custom">Institution / Firm Name <span class="text-danger">*</span></label>
                                <div class="input-icon-group">
                                    <i class="fa-solid fa-building input-icon"></i>
                                    <input type="text" name="institution" class="form-control form-control-custom" placeholder="Bank / Firm / Individual" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label-custom">Phone Number <span class="text-danger">*</span></label>
                                <div class="input-icon-group">
                                    <i class="fa-solid fa-phone input-icon"></i>
                                    <input type="tel" name="phone" class="form-control form-control-custom" placeholder="+91 73900 40402" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label-custom">Official Email <span class="text-danger">*</span></label>
                                <div class="input-icon-group">
                                    <i class="fa-solid fa-envelope input-icon"></i>
                                    <input type="email" name="email" class="form-control form-control-custom" placeholder="name@domain.com" required>
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label-custom">Select Service Needed <span class="text-danger">*</span></label>
                                <div class="input-icon-group">
                                    <i class="fa-solid fa-layer-group input-icon"></i>
                                    <select name="practice_area" class="form-select form-select-custom" required>
                                        <option value="" selected disabled>-- Select Service --</option>
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

                            <div class="col-12">
                                <label class="form-label-custom">Requirement Details <span class="text-danger">*</span></label>
                                <div class="input-icon-group">
                                    <i class="fa-solid fa-message input-icon" style="top:18px;"></i>
                                    <textarea name="message" class="form-control form-control-custom" rows="4" placeholder="Briefly describe your loan requirement..." required></textarea>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-pill-primary btn-lg w-100 shadow-md">
                                    <i class="fa-solid fa-shield-halved me-2"></i> Submit Encrypted Enquiry (SLA &lt; 1 Business Day)
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
