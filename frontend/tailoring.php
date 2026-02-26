
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailoring</title>
    <meta name="description" content="Sharp Cuts | Legacy Stiches | Quiet dominance.">
    <link rel="icon" type="image/png" href="uploads/logo_1767762447.png">

    <!-- CSS Libraries -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Raleway:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="hero-shared-styles.css">

    <style>
        :root {
            --color-black: #000000;
            --color-gold: #C5A059;
            --color-grey: #555555;
            --color-white: #ffffff;
        }

        /* --- NAVBAR STYLES --- */
        .navbar {
            transition: background-color 0.4s ease, padding 0.4s ease, box-shadow 0.4s ease;
            padding: 1.5rem 0;
        }
        .navbar-transparent { background-color: transparent !important; box-shadow: none; }
        .navbar-solid { background-color: var(--color-black) !important; box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
        .navbar.scrolled { background-color: var(--color-black) !important; padding: 0.8rem 0; box-shadow: 0 4px 15px rgba(0,0,0,0.3); }

        .navbar-nav .nav-link {
            position: relative;
            color: rgba(255,255,255,0.85) !important;
            font-weight: 900;
            font-size: 0.95rem;
            letter-spacing: 0.5px;
            padding-bottom: 5px;
            transition: color 0.3s ease;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .navbar-nav .nav-link:hover, .navbar-nav .nav-link.active { color: var(--color-gold) !important; }

        /* DROPDOWN STYLES */
        .dropdown-menu {
            background-color: var(--color-black);
            border: 1px solid var(--color-gold);
            margin-top: 15px;
            border-radius: 0;
        }
        .dropdown-item {
            color: #fff;
            padding: 10px 20px;
            font-size: 0.9rem;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        .dropdown-item:last-child { border-bottom: none; }
        .dropdown-item:hover, .dropdown-item:focus {
            background-color: var(--color-gold);
            color: var(--color-black);
            font-weight: 600;
        }

        /* --- HERO STYLES (Copied from previous) --- */
        .fabric-hero {
            background-color: #111;
            position: relative;
            overflow: hidden;
            padding-top: 85px;
            padding-bottom: 2rem;
            border-bottom: 4px solid var(--color-gold);
        }
        .fabric-pinstripe {
            position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0;
            background-color: #1a1a1a;
            background-image: repeating-linear-gradient(45deg, transparent, transparent 10px, rgba(255, 255, 255, 0.03) 10px, rgba(255, 255, 255, 0.03) 11px);
        }
        .hero-line-frame { position: relative; max-width: 100%; padding: 1.5rem 0; }
        .hero-center-text { text-align: center; padding: 1rem 0; position: relative; z-index: 10; }
        .hero-title-text { font-weight: 700; text-transform: uppercase; letter-spacing: 2px; margin: 0 0 0.25rem 0; color: #fff; text-shadow: 0 4px 10px rgba(0,0,0,0.8); font-size: 2.8rem; line-height: 1.1; }
        .hero-desc-text { font-family: 'Raleway', sans-serif; color: var(--color-gold); margin: 0; font-size: 0.9rem; font-weight: 400; letter-spacing: 1px; }
        .hero-logo-left { position: absolute; left: 5%; top: 50%; transform: translateY(-50%); z-index: 20; pointer-events: none; }
        .tailor-hero-logo { height: 150px; width: auto; object-fit: contain; filter: drop-shadow(0 6px 18px rgba(0,0,0,0.85)); }
        .chalk-track { position: relative; height: 4px; width: 300vw; left: 50%; margin-left: -150vw; z-index: 5; }
        .chalk-line { width: 100%; height: 100%; background-image: linear-gradient(to right, rgba(255, 255, 255, 0.7) 75%, rgba(255, 255, 255, 0) 0%); background-position: bottom; background-size: 15px 1px; background-repeat: repeat-x; filter: drop-shadow(0 0 2px rgba(255,255,255,0.4)); }
        .scissors-mover { position: absolute; top: -14px; left: 50%; transform: translateX(-50%); }
        .scissors-icon { font-size: 1.8rem; color: var(--color-gold); }
        @media (max-width: 991px) {
            .hero-logo-left { display: none !important; }
            .hero-title-text { font-size: 2rem; }
        }
    </style>

    <style>
        /* --- HERO & OVERLAP --- */
        .page-hero { padding-bottom: 5rem !important; position: relative; }
        .main-content-wrapper { margin-top: -5rem; position: relative; z-index: 20; }

        /* --- ZIG-ZAG MAIN CONTAINER --- */
        .tailoring-main-container {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.08);
            overflow: hidden;
            /* Removed bottom margin here, handled by the new divider */
        }

        /* --- ROW STYLING (Alternating + Stitching) --- */
        .tailoring-row-wrapper {
            padding: 0;
            margin: 0;
            /* STITCHING EFFECT SEPARATOR */
            border-bottom: 1px dashed rgba(197, 160, 89, 0.5);
        }
        .tailoring-row-wrapper:last-child { border-bottom: none; }

        /* Alternating Backgrounds */
        .tailoring-row-wrapper:nth-child(odd) { background-color: #ffffff; }
        .tailoring-row-wrapper:nth-child(even) { background-color: #fcfcfc; }

        /* Remove inner backgrounds */
        .tailoring-img-col, .tailoring-text-col { background-color: transparent !important; }

        /* --- IMAGE COLUMN --- */
        .tailoring-img-col {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 4rem;
            min-height: 450px;
        }

        /* --- THE IMAGE (Border on Image) --- */
        .tailoring-img {
            max-width: 100%;
            max-height: 450px;
            width: auto;
            height: auto;
            object-fit: contain;

            /* GOLD BORDER */
            border: 3px solid var(--color-gold, #c5a059);
            border-radius: 2px;

            display: block;
            background: #fff;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            transition: transform 0.5s ease;
        }
        .tailoring-row-wrapper:hover .tailoring-img { transform: scale(1.02); }

        /* --- TEXT COLUMN --- */
        .tailoring-text-col {
            padding: 5rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        @media (max-width: 991px) {
            .tailoring-text-col { padding: 3rem 1.5rem; }
            .tailoring-img-col { padding: 2rem; min-height: 350px; }
        }

        .tailor-subtitle { color: var(--color-gold, #c5a059); font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 1rem; display: block; }
        .tailor-title { font-size: 2.2rem; font-weight: 300; color: #111; margin-bottom: 1.5rem; line-height: 1.2; }
        .tailor-desc { color: #555; font-size: 1.05rem; line-height: 1.8; font-weight: 300; }
        .tailor-desc p { margin-bottom: 1rem; }

        /* --- ELEGANT SECTION DIVIDER (Between ZigZag and Pricing) --- */
        .elegant-divider {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 4rem 0;
            position: relative;
        }
        .divider-line {
            flex-grow: 1;
            height: 1px;
            background: linear-gradient(to right, transparent, #e0e0e0, transparent);
        }
        .divider-icon-box {
            padding: 0 20px;
            color: var(--color-gold, #c5a059);
            font-size: 1.2rem;
            position: relative;
        }
        /* Small diamonds on sides of icon */
        .divider-icon-box::before, .divider-icon-box::after {
            content: "◆";
            font-size: 10px;
            color: #e0e0e0;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }
        .divider-icon-box::before { left: 0; }
        .divider-icon-box::after { right: 0; }


        /* --- SPLIT SECTION (Process & Pricing) --- */
        .info-split-section {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.08);
            overflow: hidden;
            margin-bottom: 5rem;
            border: 1px solid #eee;
        }

        /* Toggle Header */
        .toggle-header { padding: 3rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center; transition: background-color 0.3s; border-bottom: 1px solid transparent; }
        .toggle-btn[aria-expanded="true"] { border-bottom: 1px solid #eee; background-color: #fafafa; }
        .toggle-header:hover { background-color: rgba(0,0,0,0.02); }

        .header-content h3 { font-size: 1.75rem; font-weight: 300; margin: 0; color: #222; }
        .header-content span { font-size: 0.85rem; text-transform: uppercase; color: var(--color-gold); letter-spacing: 1px; font-weight: 700; display: block; margin-bottom: 5px; }

        .toggle-icon { transition: transform 0.3s ease; color: #aaa; font-size: 1.2rem; }
        .toggle-btn[aria-expanded="true"] .toggle-icon { transform: rotate(180deg); color: var(--color-gold); }

        /* Toggle Body */
        .toggle-body { padding: 2rem 3rem 3rem 3rem; }
        @media (max-width: 768px) {
            .toggle-header { padding: 2rem 1.5rem; }
            .toggle-body { padding: 1.5rem; }
        }

        /* Stepper & Pricing Styles */
        .stepper-wrapper { position: relative; padding-left: 1rem; margin-top: 1rem; }
        .stepper-wrapper::before { content: ""; position: absolute; top: 15px; bottom: 0; left: 28px; width: 1px; background: #e0e0e0; z-index: 1; }
        .stepper-item { position: relative; display: flex; align-items: flex-start; margin-bottom: 2.5rem; z-index: 2; }
        .stepper-item:last-child { margin-bottom: 0; }
        .step-counter { flex-shrink: 0; width: 36px; height: 36px; background: var(--color-gold, #c5a059); color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.9rem; margin-right: 1.5rem; box-shadow: 0 0 0 5px #fff; }
        .step-content h5 { font-size: 1.1rem; margin-bottom: 0.5rem; }
        .text-gold { color: var(--color-gold, #c5a059); }

        .cta-tailoring { background: #111; color: #fff; padding: 6rem 0; text-align: center; }
    </style></head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg fixed-top navbar-dark navbar-solid">
    <div class="container-fluid px-lg-5">
        <a class="navbar-brand" href="index.php">
            <div style="display:flex; align-items:center; gap:8px;">
                <img src="uploads/logo_1767762447.png" height="60px" alt="Logo">
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item"><a class="nav-link " href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link " href="about.php">About Us</a></li>

                <!-- Tailoring Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="tailoringDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tailoring
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="tailoringDropdown">
                        <li><a class="dropdown-item " href="tailored_experience.php">...Tailored Experience...</a></li>
                        <li><a class="dropdown-item " href="process.php">How We Work</a></li>
                        <li><a class="dropdown-item " href="pricing.php">Starting Prices</a></li>
                        <li><a class="dropdown-item " href="team.php">Our Team</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link " href="bespoke.php">Bespoke Suits</a></li>

                <!-- Switched Gallery and Testimonials -->
                <li class="nav-item"><a class="nav-link " href="gallery.php">Gallery</a></li>
                <li class="nav-item"><a class="nav-link " href="testimonials.php">Testimonials</a></li>

                <li class="nav-item"><a class="nav-link " href="contact.php">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO SECTION (CONDITIONAL) -->
<section class="page-hero fabric-hero position-relative">
    <div class="fabric-pinstripe"></div>
    <div class="container-fluid position-relative z-2 px-0">
        <div class="hero-line-frame">
            <div class="hero-logo-left d-none d-lg-block">
                <img src="uploads/logo_1767762447.png" alt="Brand" class="tailor-hero-logo">
            </div>
            <div class="chalk-track"><div class="chalk-line"></div></div>
            <div class="hero-center-text">
                <h1 class="hero-title-text" data-aos="zoom-in">Tailoring</h1>
                <p class="hero-desc-text" data-aos="fade-up" data-aos-delay="200">Sharp Cuts | Legacy Stiches | Quiet dominance.</p>
            </div>
            <div class="chalk-track">
                <div class="chalk-line"></div>
                <div class="scissors-mover"><i class="fas fa-scissors scissors-icon"></i></div>
            </div>
        </div>
    </div>
</section>

<div class="main-content-wrapper">
    <div class="container">

        <!-- 2. ZIG-ZAG SECTIONS (Unified) -->
        <div class="tailoring-main-container">

            <div class="tailoring-row-wrapper" data-aos="fade-up">
                <div class="row g-0">

                    <!-- IMAGE COLUMN -->
                    <div class="col-lg-6 tailoring-img-col order-lg-1 order-1">
                        <img src="Assets/IMG_4551.JPG.jpeg" alt="The Logical City Philosophy" class="tailoring-img">
                    </div>

                    <!-- TEXT COLUMN -->
                    <div class="col-lg-6 tailoring-text-col order-lg-2 order-2">
                        <div>
                            <span class="tailor-subtitle">MADE IN KENYA, WORLD-CLASS STANDARDS</span>

                            <h3 class="tailor-title">The Logical City Philosophy</h3>

                            <div class="tailor-desc">
                                <p>At LogicalCity, we believe that true elegance is not about standing out, but being remembered. In the bustling heart of Nairobi, a suit is not just clothing—it is your armor. We blend traditional Savile Row tailoring techniques with a modern African aesthetic.</p><p>Whether you are commanding a boardroom in Westlands or attending a wedding in Karen, our goal is to create a garment that is authentically yours, constructed with precision and passion right here in Kenya.</p>                                    </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="tailoring-row-wrapper" data-aos="fade-up">
                <div class="row g-0">

                    <!-- IMAGE COLUMN -->
                    <div class="col-lg-6 tailoring-img-col order-lg-2 order-1">
                        <img src="Assets/Screen2.jpg" alt="The Fabric Selection" class="tailoring-img">
                    </div>

                    <!-- TEXT COLUMN -->
                    <div class="col-lg-6 tailoring-text-col order-lg-1 order-2">
                        <div>
                            <span class="tailor-subtitle">SOURCED GLOBALLY, TAILORED LOCALLY</span>

                            <h3 class="tailor-title">The Fabric Selection</h3>

                            <div class="tailor-desc">
                                <p>The foundation of any great suit is the fabric. We have curated an exclusive collection of cloths suited for the unique East African climate. We offer breathable linens perfect for the coastal heat of Mombasa, and crisp, lightweight Italian wools ideal for Nairobi’s temperate weather.</p><p>Choose from over 500 swatches including Super 120s wools, Egyptian cottons, and luxury blends from the world’s finest mills including Vitale Barberis Canonico and Holland & Sherry.</p>                                    </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="tailoring-row-wrapper" data-aos="fade-up">
                <div class="row g-0">

                    <!-- IMAGE COLUMN -->
                    <div class="col-lg-6 tailoring-img-col order-lg-1 order-1">
                        <img src="Assets/Screen1.jpg" alt="The Finer Details" class="tailoring-img">
                    </div>

                    <!-- TEXT COLUMN -->
                    <div class="col-lg-6 tailoring-text-col order-lg-2 order-2">
                        <div>
                            <span class="tailor-subtitle">PERSONALIZATION IS KEY</span>

                            <h3 class="tailor-title">The Finer Details</h3>

                            <div class="tailor-desc">
                                <p>What separates a LogicalCity suit from the rest is the attention to detail. This is where your personality shines through. You have full control over the finishing touches:</p><ul><li>Contrast buttonhole stitching</li><li>Monogramming your initials on the cuff or inside pocket</li><li>Vibrant, custom linings (Ankara prints or silk solids)</li><li>Functional cuff buttons (surgeon&apos;s cuffs)</li></ul><p>These subtle signatures are the mark of a true bespoke garment.</p>                                    </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="tailoring-row-wrapper" data-aos="fade-up">
                <div class="row g-0">

                    <!-- IMAGE COLUMN -->
                    <div class="col-lg-6 tailoring-img-col order-lg-2 order-1">
                        <img src="Assets/Screen3.jpg" alt="The Consultation and Measure" class="tailoring-img">
                    </div>

                    <!-- TEXT COLUMN -->
                    <div class="col-lg-6 tailoring-text-col order-lg-1 order-2">
                        <div>
                            <span class="tailor-subtitle">ENGINEERING YOUR PERFECT FIT</span>

                            <h3 class="tailor-title">The Consultation and Measure</h3>

                            <div class="tailor-desc">
                                Ready-to-wear is made for everyone; Made-to-Measure is made for you. Our process begins with a personal consultation to understand your lifestyle, your posture, and your preferences. We take over 20 distinct body measurements and assess your profile to ensure the garment complements your silhouette. We discuss lapel widths, button placements, and pant breaks to ensure the final fit is contemporary yet timeless.                                    </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- NEW: ELEGANT DIVIDER -->
        <div class="elegant-divider" data-aos="fade-up">
            <div class="divider-line"></div>
            <div class="divider-icon-box">
                <i class="fas fa-cut"></i> <!-- Can be fa-cut, fa-gem, fa-star -->
            </div>
            <div class="divider-line"></div>
        </div>

        <!-- 3. SPLIT SECTION (Process & Pricing) -->
        <div class="info-split-section" data-aos="fade-up">
            <div class="row g-0">

                <!-- COLUMN 1: PRICING -->
                <div class="col-lg-4 border-end">
                    <div class="bg-white h-100">
                        <div class="toggle-header toggle-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapsePricing" aria-expanded="false">
                            <div class="header-content">
                                <span>Investment</span>
                                <h3>Starting Prices</h3>
                            </div>
                            <i class="fas fa-chevron-down toggle-icon"></i>
                        </div>
                        <div id="collapsePricing" class="collapse">
                            <div class="toggle-body">
                                <div class="table-responsive">
                                    <table class="table table-hover align-middle mb-0">
                                        <tbody>
                                        <tr>
                                            <td class="py-3">
                                                <span class="d-block fw-bold text-dark">2-Piece Suit (Classic)</span>
                                                <small class="text-muted d-block" style="line-height:1.2; font-size:0.85rem; margin-top:3px;">Wool Blend / Super 100s</small>
                                            </td>
                                            <td class="text-end py-3 fw-bold text-gold small text-nowrap">From KES 25,000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-3">
                                                <span class="d-block fw-bold text-dark">2-Piece Suit (Premium)</span>
                                                <small class="text-muted d-block" style="line-height:1.2; font-size:0.85rem; margin-top:3px;">Pure Italian Wool / Super 120s</small>
                                            </td>
                                            <td class="text-end py-3 fw-bold text-gold small text-nowrap">From KES 45,000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-3">
                                                <span class="d-block fw-bold text-dark">Bespoke Shirt</span>
                                                <small class="text-muted d-block" style="line-height:1.2; font-size:0.85rem; margin-top:3px;">100% Egyptian Cotton</small>
                                            </td>
                                            <td class="text-end py-3 fw-bold text-gold small text-nowrap">From KES 4,000</td>
                                        </tr>
                                        <tr>
                                            <td class="py-3">
                                                <span class="d-block fw-bold text-dark">Wedding Package</span>
                                                <small class="text-muted d-block" style="line-height:1.2; font-size:0.85rem; margin-top:3px;">Suit, Shirt, Bowtie and Square</small>
                                            </td>
                                            <td class="text-end py-3 fw-bold text-gold small text-nowrap">From KES 55,000</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <p class="text-muted small mt-3 border-top pt-2"><em>*Prices vary by fabric selection. 50% deposit required.</em></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- COLUMN 2: PROCESS -->
                <div class="col-lg-8">
                    <div class="bg-white h-100">
                        <div class="toggle-header toggle-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseProcess" aria-expanded="false">
                            <div class="header-content">
                                <span>The Journey</span>
                                <h3>How We Work</h3>
                            </div>
                            <i class="fas fa-chevron-down toggle-icon"></i>
                        </div>
                        <div id="collapseProcess" class="collapse">
                            <div class="toggle-body">
                                <div class="stepper-wrapper">
                                    <div class="stepper-item">
                                        <div class="step-counter">01</div>
                                        <div class="step-content">
                                            <h5 class="fw-bold">Book an Appointment</h5>
                                            <p class="text-muted mb-0">Contact us by Phone, WhatsApp or Email to schedule your bespoke tailoring consultation at your convenience.</p>
                                        </div>
                                    </div>
                                    <div class="stepper-item">
                                        <div class="step-counter">02</div>
                                        <div class="step-content">
                                            <h5 class="fw-bold">Style &amp; Lifestyle Consultation</h5>
                                            <p class="text-muted mb-0">We carry out a lifestyle and personality analysis to guide fabric selection and garment design. <br />
                                                For bespoke pieces, design details and construction options are fully customizable.</p>
                                        </div>
                                    </div>
                                    <div class="stepper-item">
                                        <div class="step-counter">03</div>
                                        <div class="step-content">
                                            <h5 class="fw-bold">Measuring &amp; Posture Analysis</h5>
                                            <p class="text-muted mb-0">Comprehensive measurements are taken, including body structure and posture. Bespoke garments allow for pattern adjustments tailored precisely to your unique physique.</p>
                                        </div>
                                    </div>
                                    <div class="stepper-item">
                                        <div class="step-counter">04</div>
                                        <div class="step-content">
                                            <h5 class="fw-bold">Invoice &amp; Confirmation</h5>
                                            <p class="text-muted mb-0">An invoice is issued after the consultation. A 80% deposit is required to begin work. For bespoke orders, timelines and fittings may vary depending on design complexity.</p>
                                        </div>
                                    </div>
                                    <div class="stepper-item">
                                        <div class="step-counter">05</div>
                                        <div class="step-content">
                                            <h5 class="fw-bold">The Crafting</h5>
                                            <p class="text-muted mb-0">Once the deposit is received, production begins. Standard turnaround is approximately four weeks, with flexibility for bespoke garments based on fabric and detailing.</p>
                                        </div>
                                    </div>
                                    <div class="stepper-item">
                                        <div class="step-counter">06</div>
                                        <div class="step-content">
                                            <h5 class="fw-bold">Fittings &amp; Collection</h5>
                                            <p class="text-muted mb-0">An initial fitting is conducted at around 80% completion, with further fittings added as required for bespoke pieces. Final fitting and collection follow once perfection is achieved.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>



<!-- 6. FOOTER -->
<footer id="contact" class="text-white pt-5 pb-3" style="background-color: black;">
    <div class="container">
        <div class="row g-5 mb-5">

            <!-- COLUMN A: Business Address & Hours -->
            <div class="col-lg-4 col-md-6">
                <h5 class="text-gold font-heading text-uppercase mb-4">Visit Us</h5>

                <!-- Physical Address (WYSIWYG) -->
                <div class="mb-3 text-white-50">
                    <i class="fas fa-map-marker-alt text-gold me-2"></i>
                    <span class="d-inline-block text-white align-top">
                            <p>Kaunda Street</p><p>Jubilee Exchange Building</p><p>6th Floor, Suite 635</p>                        </span>
                </div>

                <!-- Business Hours -->
                <div class="mb-2">
                    <i class="far fa-clock text-gold me-2"></i>
                    <span class="text-white">Mon - Sat 8.00am - 6.30pm</span>
                </div>

                <!-- Appointment Only Badge -->
                <div class="mt-2">
                        <span class="badge border border-warning text-warning bg-transparent">
                            Available by Appointment Only
                        </span>
                </div>
            </div>

            <!-- COLUMN B: Contact Info & Socials -->
            <div class="col-lg-4 col-md-6">
                <h5 class="text-gold font-heading text-uppercase mb-4">Contact Info</h5>

                <!-- Postal Address -->
                <div class="mb-3 text-white">
                    <i class="fas fa-mail-bulk text-gold me-2"></i>
                    <span class="d-inline-block align-top">
                            P.O. BOX 66178&nbsp; -&nbsp; 00800, Westlands<br>Nairobi, Kenya<p></p>                        </span>
                </div>

                <!-- Phone -->
                <p class="mb-2">
                    <i class="fas fa-phone text-gold me-2"></i>
                    <a href="tel:+254727678190" class="text-white text-decoration-none">
                        +254727678190                        </a>
                </p>

                <!-- Email -->
                <p class="mb-4">
                    <i class="fas fa-envelope text-gold me-2"></i>
                    <a href="mailto:logicalclothing1@gmail.com" class="text-white text-decoration-none">
                        logicalclothing1@gmail.com                        </a>
                </p>

                <!-- Follow Us (Socials) -->
                <h6 class="text-gold font-heading text-uppercase mb-3">Follow Us</h6>
                <div class="social-icons d-flex gap-3">
                    <a href="https://www.facebook.com/logicalcity254/about" target="_blank" title="Facebook" class="text-white fs-5 hover-gold transition-all">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/logicalcity254/?hl=en" target="_blank" title="Instagram" class="text-white fs-5 hover-gold transition-all">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://twitter.com/emaludestinations" target="_blank" title="Twitter" class="text-white fs-5 hover-gold transition-all">
                        <i class="fab fa-x-twitter"></i>
                    </a>
                    <a href="https://www.pinterest.com/logicalcity/" target="_blank" title="Pintrest" class="text-white fs-5 hover-gold transition-all">
                        <i class="fab fa-pinterest"></i>
                    </a>
                    <a href="https://www.tiktok.com/@logicalcity_254" target="_blank" title="TikTok" class="text-white fs-5 hover-gold transition-all">
                        <i class="fab fa-tiktok"></i>
                    </a>
                </div>
            </div>

            <!-- COLUMN C: Quick Links -->
            <div class="col-lg-4 col-md-12">
                <h5 class="text-gold font-heading text-uppercase mb-4">Quick Links</h5>
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="index.php" class="text-white text-decoration-none hover-gold"><i class="fas fa-angle-right me-2 small"></i>Home</a></li>
                            <li class="mb-2"><a href="about.php" class="text-white text-decoration-none hover-gold"><i class="fas fa-angle-right me-2 small"></i>About Us</a></li>
                            <li class="mb-2"><a href="tailoring.php" class="text-white text-decoration-none hover-gold"><i class="fas fa-angle-right me-2 small"></i>Tailoring</a></li>
                            <li class="mb-2"><a href="gallery.php" class="text-white text-decoration-none hover-gold"><i class="fas fa-angle-right me-2 small"></i>Gallery</a></li>
                            <li class="mb-2"><a href="testimonials.php" class="text-white text-decoration-none hover-gold"><i class="fas fa-angle-right me-2 small"></i>Testimonials</a></li>
                            <li class="mb-2"><a href="contact.php" class="text-white text-decoration-none hover-gold"><i class="fas fa-angle-right me-2 small"></i>Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>


        <!-- Footer Bottom -->
        <div class="border-top border-secondary pt-4 d-flex flex-column flex-md-row justify-content-between align-items-center small text-white-50">
            <div class="mb-2 mb-md-0">
                Copyright &copy; 2026 Logical Clothing Ltd | All Rights Reserved.
            </div>


            <!-- Legal Pages Links -->
            <div>
                <a href="policy.php?page=privacy-policy" class="text-white-50 text-decoration-none me-3 hover-gold">
                    Privacy Policy                            </a>
                <a href="policy.php?page=terms-conditions" class="text-white-50 text-decoration-none me-3 hover-gold">
                    Terms and Conditions                            </a>
            </div>
        </div>
    </div>
</footer>

<!-- Floating WhatsApp Button -->
<a href="https://wa.me/254727678190?text=Hello+Logical+City%21" target="_blank" class="whatsapp-float" title="Chat with us on WhatsApp">
    <i class="fab fa-whatsapp"></i>
</a>


<!-- Back to Top Button -->
<a href="#" class="back-to-top" id="backToTop" title="Back to top">
    <i class="fas fa-chevron-up"></i>
</a>

<!-- ======================================================= -->
<!-- COOKIE CONSENT BANNER (Hidden by default) -->
<!-- ======================================================= -->
<div id="cookieConsentBanner" class="cookie-consent-bar">
    <div class="container">
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
            <div class="cookie-text">
                <p class="mb-0 text-white small">
                    We use cookies to ensure you get the best experience on our website.
                    By continuing to use this site, you agree to our
                    <a href="policy.php?page=privacy-policy" class="text-gold text-decoration-none">Privacy Policy</a>.
                </p>
            </div>
            <div class="cookie-actions d-flex gap-2">
                <button id="acceptCookiesBtn" class="btn btn-gold btn-sm fw-bold px-4 rounded-pill">Accept</button>
                <button id="declineCookiesBtn" class="btn btn-outline-light btn-sm px-3 rounded-pill">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- STYLES FOR COOKIE BANNER -->
<style>
    .cookie-consent-bar {
        position: fixed;
        bottom: -100%; /* Hidden off-screen initially */
        left: 0;
        width: 100%;
        background-color: #0e1c17; /* Darker shade of theme green */
        border-top: 3px solid #c5a059; /* Gold border on top */
        padding: 1rem 0;
        box-shadow: 0 -5px 25px rgba(0,0,0,0.3);
        z-index: 9999;
        transition: bottom 0.6s cubic-bezier(0.19, 1, 0.22, 1); /* Smooth slide up */
    }

    .cookie-consent-bar.show {
        bottom: 0;
    }
    /* Helper for hover effects */
    .hover-gold:hover { color: #c5a059 !important; transition: 0.3s; }
    /* Remove default margins from WYSIWYG paragraphs in footer */
    footer p { margin-bottom: 0.5rem; }
</style>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    // Init Animation
    AOS.init({
        offset: 100,
        duration: 1000,
        once: true
    });

    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        // Check if navbar exists first (good practice)
        if(navbar) {
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                // Only remove solid background if we are on index.php (handled by CSS class check mostly, but safe here)
                navbar.classList.remove('scrolled');
            }
        }
    });

    // Back to Top Button
    const backToTopBtn = document.getElementById('backToTop');
    if(backToTopBtn){
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopBtn.classList.add('visible');
            } else {
                backToTopBtn.classList.remove('visible');
            }
        });

        backToTopBtn.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // ----------------------------------------------------------------
    // COOKIE CONSENT LOGIC
    // ----------------------------------------------------------------
    document.addEventListener('DOMContentLoaded', function() {
        const cookieBanner = document.getElementById('cookieConsentBanner');
        const acceptBtn = document.getElementById('acceptCookiesBtn');
        const declineBtn = document.getElementById('declineCookiesBtn');

        // Check if user has already accepted (LocalStorage)
        if (!localStorage.getItem('emalu_cookie_consent')) {
            // Not accepted yet - wait 2 seconds then slide up
            setTimeout(() => {
                cookieBanner.classList.add('show');
            }, 2000);
        }

        // Handle Accept
        if(acceptBtn) {
            acceptBtn.addEventListener('click', () => {
                localStorage.setItem('emalu_cookie_consent', 'true');
                cookieBanner.classList.remove('show');
            });
        }

        // Handle Decline/Close (Just hides it for this session)
        if(declineBtn) {
            declineBtn.addEventListener('click', () => {
                cookieBanner.classList.remove('show');
            });
        }
    });

</script>
</body>
</html>
