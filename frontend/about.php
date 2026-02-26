
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <meta name="description" content="Experience Unique Craftsmanship - LogicalCity">
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


        /* ADD THE NEW CLASSES RIGHT HERE */
        .text-gold { color: #C5A059 !important; }

        /* --- NAVBAR STYLES --- */
        .navbar {
            transition: background-color 0.4s ease, padding 0.4s ease, box-shadow 0.4s ease;
            padding: 1.5rem 0;
        }

        .navbar-solid { background-color: var(--color-black) !important; box-shadow: 0 4px 12px rgba(0,0,0,0.1); }

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
    /* Hero Override */
    .page-hero {
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        padding-bottom: 5rem;
    }

    /* Overlap Card Styling (Main Intro) */
    .about-overlap-card {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        padding: 3rem;
        margin-top: -5rem; /* Pulls content up over hero */
        position: relative;
        z-index: 10;
        border-top: 5px solid var(--color-gold);
    }

    /* Story/Intro Section Images */
    .intro-img-container {
        position: relative;
        padding: 1rem;
    }
    .intro-img {
        border-radius: 4px;
        box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        border: 8px solid #fff;
        width: 100%;
        object-fit: cover;
    }
    .intro-badge {
        position: absolute;
        bottom: -20px;
        right: -20px;
        background: var(--color-gold);
        color: #fff;
        padding: 1.5rem;
        border-radius: 50%;
        width: 120px;
        height: 120px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        font-weight: bold;
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        font-family: "Playfair Display", serif;
        font-size: 1rem;
        line-height: 1.2;
    }

    /* CEO Section */
    .ceo-section {
        background-color: #f8f9fa;
        position: relative;
        overflow: hidden;
    }
    .ceo-img-wrapper {
        position: relative;
        overflow: hidden;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    .ceo-img {
        width: 100%;
        height: auto;
        transition: transform 0.5s ease;
    }
    .ceo-img-wrapper:hover .ceo-img {
        transform: scale(1.03);
    }
    .ceo-quote {
        border-left: 4px solid var(--color-gold);
        font-style: italic;
        color: #555;
        background: #fff;
        padding: 20px;
        border-radius: 0 8px 8px 0;
        margin-top: 20px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    /* Values Cards (Why Choose Us) */
    .value-card {
        background: #fff;
        padding: 2rem 1.5rem;
        border-bottom: 3px solid var(--color-gold);
        height: 100%;
        transition: transform 0.3s ease;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        display: flex;
        flex-direction: column;
        justify-content: space-between; /* Pushes image to bottom */
    }
    .value-card:hover {
        transform: translateY(-10px);
    }
    .value-img-container {
        margin-top: 1.5rem;
        overflow: hidden;
        border-radius: 8px;
        height: 180px; /* Fixed height for consistency */
    }
    .value-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Responsive adjustments */
    @media (max-width: 991px) {
        .page-hero { padding-bottom: 6rem; }
        .about-overlap-card { margin-top: -4rem; padding: 2rem 1.5rem; }
        .intro-badge { width: 90px; height: 90px; font-size: 0.8rem; right: 0; }
    }
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
                <li class="nav-item"><a class="nav-link active" href="about.php">About Us</a></li>

                <!-- Tailoring Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" id="tailoringDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                    <h1 class="hero-title-text" data-aos="zoom-in">About Us</h1>
                    <p class="hero-desc-text" data-aos="fade-up" data-aos-delay="200">Experience Unique Craftsmanship - LogicalCity</p>
                </div>
                <div class="chalk-track">
                    <div class="chalk-line"></div>
                    <div class="scissors-mover"><i class="fas fa-scissors scissors-icon"></i></div>
                </div>
            </div>
        </div>
    </section>

<!-- 2. MAIN INTRO (Overlapping Split Layout) -->
<section class="pb-5">
    <div class="container">
        <!-- The Overlap Card Wrapper -->
        <div class="about-overlap-card">
            <div class="row align-items-center g-5">
                <!-- Text Side -->
                <div class="col-lg-6" data-aos="fade-right">
                    <!-- Clean Gold Header -->
                    <h2 class="display-5 text-dark font-heading mb-4">We are Logical City</h2>

                    <div class="story-content text-secondary">
                        <p><br data-start="265" data-end="268">
We are a luxury bespoke tailoring house based in <strong data-start="317" data-end="335">Nairobi, Kenya</strong>, specializing in <b>Bespoke Tailored Garments </b>and accessories for both men and women. From custom-fit suits and shirts to sophisticated blazers, trousers and curated accessories, we are the brand of choice for individuals who seek refinement, quality, and a truly <b>...<em data-start="592" data-end="613">Tailored Experience..</em>. .</b> At Logical City, opulence isn’t an add-on — it’s the foundation of everything we do. We combine meticulous craftsmanship with a deep understanding of style so that every piece we create reflects not just a perfect fit but a distinct personality and confidence. Logical City has built long-standing relationships with clients locally and abroad, working closely with individuals of diverse orientations, culture, body shapes, styles, and sartorial aspirations to create garments that feel as personal as persona. Every piece is <b>EXCEPTIONAL.</b></p> <!-- HTML Allowed -->
                    </div>
                </div>

                <!-- Image Side -->
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="intro-img-container">
                        <!-- Use image from DB if available, else default -->
                        <img src="Assets/WhatsApp%20Image%202026-02-23%20at%2012.01.58.jpeg" alt="LogicalCity Workshop" class="intro-img">
                        <div class="intro-badge">
                            <span">...<br>Tailored<br>Experience<br>...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. MEET THE CEO -->
<section class="ceo-section py-5">
    <div class="container py-lg-4">
        <div class="row align-items-center g-5">

            <!-- CEO Image (Now on Left) -->
            <div class="col-lg-5" data-aos="fade-right">
                <div class="ceo-img-wrapper">
                    <img src="Assets/CEO.jpg" alt="Mandela - CEO" class="ceo-img">
                </div>
            </div>

            <!-- CEO Content (Now on Right) -->
            <div class="col-lg-7" data-aos="fade-left">
                <!-- Clean Gold Header -->
                <h2>Meet the CEO,</h2>
                <h2 class="font-heading display-6 text-dark mb-4">&#039;NELSON MANDELA&#039;</h2>

                <div class="text-secondary mb-4">
                    <p>Nelson Mandela, the CEO of Logical City, is a dynamic fashion entrepreneur and textile industry leader with a strong vision for redefining contemporary African clothing through quality craftsmanship, innovation, and authentic design. Under his leadership, Logical City has established itself as a growing clothing brand known for producing stylish, well-tailored garments that blend modern trends with African-inspired aesthetics, catering to both local and international markets. Nelson is deeply involved in every stage of the production process, from design and fabric selection to quality control and brand development, ensuring that every piece reflects the company’s commitment to opulence. He is passionate about empowering local artisans and supporting sustainable manufacturing practices, working closely with skilled tailors and suppliers to build a value chain that benefits the community while maintaining high production standards. Through strategic marketing, customer-focused service, and continuous product innovation, Nelson continues to steer Logical City toward becoming a recognizable fashion label that represents Kenya’s creativity and entrepreneurial spirit on the global stage.</p>                </div>

                <div class="ceo-quote">
                    "Fashion is not just about what you wear, it is a statement of who you are without having to speak. At LogicalCity, we craft that statement with precision."
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. WHY CHOOSE US (Values with Images Below Text) -->
<section class="py-5 my-lg-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h6 class="text-gold text-uppercase fw-bold">The LogicalCity Difference</h6>
            <h2 class="font-heading display-6">Why Choose Us?</h2>
        </div>

        <div class="row g-4">

            <!-- Value 4 (New Section) -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="value-card">
                    <div>
                        <h4 class="font-heading mb-3" style="font-size: 1.25rem;">Ethics and Professionalism</h4>
                        <div class="text-muted small">
                            At Logical City, integrity is woven into the very fabric of our business. We adhere to the highest standards of transparency in pricing, fair labor practices for our skilled artisans, and honest communication with our clients. We believe that true luxury is not just about the final look, but the dignified process behind its creation, ensuring respect for both the craft and the community.                        </div>
                    </div>
                    <!-- Image at Bottom -->
                    <div class="value-img-container shadow-sm">
                        <img src="Assets/WhatsApp%20Image%202026-02-23%20at%2012.04.06.jpeg" alt="Value 4" class="value-img">
                    </div>
                </div>
            </div>

            <!-- Value 3 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="value-card">
                    <div>
                        <h4 class="font-heading mb-3" style="font-size: 1.25rem;">Superior Craftsmanship and Long-Term Value</h4>
                        <div class="text-muted small">
                            Logical City delivers garments made with attention to detail, quality fabrics, and skilled craftsmanship. Unlike mass-produced clothing that wears out quickly, tailored pieces are built for durability and timeless style. For individuals seeking value for money, this means fewer replacements, better longevity, and garments that maintain their structure and elegance over time—making the ...Tailored Experience... a sage long-term investment in personal style.                        </div>
                    </div>
                    <!-- Image at Bottom -->
                    <div class="value-img-container shadow-sm">
                        <img src="Assets/Visit%20us-%20Suit%20635,%206th%20Floor,%20Kaunda%20Street,%20Jubilee%20Exchange%20Building📱%20Call%20us-%200727%20678%20190🀮jpg" alt="Value 3" class="value-img">
                    </div>
                </div>
            </div>

            <!-- Value 2 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="value-card">
                    <div>
                        <h4 class="font-heading mb-3" style="font-size: 1.25rem;">Personalized Style That Reflects Identity and Occasion</h4>
                        <div class="text-muted small">
                            At Logical City we understand that clothing is a form of personal expression. Our ...Tailored Experience... goes beyond measurements to include one-on-one image consultation, helping clients choose fabrics, cuts, colors, and designs that match their personality, profession, and occasion. Whether it’s a corporate suit, wedding attire, or statement outfit, this personalized approach ensures the final piece aligns with the client’s lifestyle and cultural context, rather than following generic fashion trends.                        </div>
                    </div>
                    <!-- Image at Bottom -->
                    <div class="value-img-container shadow-sm">
                        <img src="Assets/NAVY%20BLUE%20PINSTRIPED%20DOUBLE%20BREASTED%20A%20navy%20blue%20pinstripe%20double-breasted%20suit%20is%20a%20classic%20and.jpg" alt="Value 2" class="value-img">
                    </div>
                </div>
            </div>

            <!-- Value 1 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="value-card">
                    <div>
                        <h4 class="font-heading mb-3" style="font-size: 1.25rem;">Perfect Fit Designed for Individual Body Types</h4>
                        <div class="text-muted small">
                            Logical City prioritizes precision and individuality, ensuring each garment is crafted to fit the client’s unique body shape and posture. In Kenya, where ready-made clothing often follows generic sizing that rarely fits perfectly, Logical City eliminates this challenge by taking detailed measurements and refining the fit through expertized bespoke tailoring. This helps to achieve enhanced comfort, confidence, and mature image appearance—making the wearer look polished and feel completely at ease as well as complete ownership of the outfit.                        </div>
                    </div>
                    <!-- Image at Bottom -->
                    <div class="value-img-container shadow-sm">
                        <img src="Assets/Tailored%20EXPERIENCE..jpg" alt="Value 1" class="value-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


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