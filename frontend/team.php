
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team</title>
    <meta name="description" content="...Tailored Experience...">
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

        .text-gold { color: #C5A059 !important; }
        .text-dark-green { color: #1a3a2a !important; }
        .bg-dark-green { background-color: #1a3a2a !important; }
        .bg-gold { background-color: #C5A059 !important; }


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
    </head>
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
                    <a class="nav-link dropdown-toggle " href="#" id="tailoringDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tailoring
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="tailoringDropdown">
                        <li><a class="dropdown-item " href="tailored_experience.php">...Tailored Experience...</a></li>
                        <li><a class="dropdown-item " href="process.php">How We Work</a></li>
                        <li><a class="dropdown-item " href="pricing.php">Starting Prices</a></li>
                        <li><a class="dropdown-item active" href="team.php">Our Team</a></li>
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
                    <h1 class="hero-title-text" data-aos="zoom-in">Our Team</h1>
                    <p class="hero-desc-text" data-aos="fade-up" data-aos-delay="200">...Tailored Experience...</p>
                </div>
                <div class="chalk-track">
                    <div class="chalk-line"></div>
                    <div class="scissors-mover"><i class="fas fa-scissors scissors-icon"></i></div>
                </div>
            </div>
        </div>
    </section>

<style>
    /* Hero Section */
    .team-hero-container {
        position: relative;
        margin-bottom: 5rem;
    }
    .team-hero-img {
        width: 100%;
        max-height: 80vh;
        object-fit: cover;
        object-position: center;
        border-bottom: 5px solid var(--color-safari-gold, #c5a059);
    }

    /* Individual Cards */
    .team-card {
        border: none;
        background: transparent;
        transition: transform 0.3s ease;
        text-align: center;
        margin-bottom: 3rem;
    }
    .team-card:hover {
        transform: translateY(-5px);
    }
    .team-img-wrapper {
        width: 100%;
        aspect-ratio: 3 / 4; /* Portrait ratio */
        overflow: hidden;
        border-radius: 4px;
        margin-bottom: 1.5rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    .team-member-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease, filter 0.5s ease;
        filter: grayscale(10%);
    }
    .team-card:hover .team-member-img {
        transform: scale(1.03);
        filter: grayscale(0%);
    }
    .team-name {
        font-family: 'Playfair Display', serif;
        font-size: 1.5rem;
        margin-bottom: 0.5rem;
        color: #222;
    }
    .team-designation {
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 2px;
        color: var(--color-safari-gold, #c5a059);
        font-weight: 600;
    }

    /* Responsive adjustment */
    @media (max-width: 768px) {
        .team-hero-img { height: 50vh; }
    }
</style>

<!-- HERO SECTION -->
<div class="team-hero-container">
            <img src="Assets/WhatsApp%20Image%202026-02-23%20at%2012.04.09.jpeg" class="team-hero-img" alt="Our Team">

    <div class="container mt-5 text-center" data-aos="fade-up">
        <h1 class="display-4 font-serif mb-3">Our Team</h1>
                    <p class="lead text-muted fst-italic">The people behind the craftsmanship</p>
                <div class="mx-auto mt-4" style="width: 60px; height: 3px; background-color: var(--color-safari-gold, #c5a059);"></div>
    </div>
</div>

<!-- MEMBERS GRID -->
<section class="pb-5">
    <div class="container">
        <div class="row justify-content-center">
                                                <div class="col-sm-6 col-lg-3" data-aos="fade-up">
                        <div class="team-card">
                            <div class="team-img-wrapper">
                                <img src="Assets/WhatsApp%20Image%202026-02-23%20at%2012.04.07.jpeg" alt="Nelson Mandela" class="team-member-img" loading="lazy">
                            </div>
                            <h3 class="team-name">Nelson Mandela</h3>
                            <div class="team-designation">CEO</div>
                        </div>
                    </div>
                                    <div class="col-sm-6 col-lg-3" data-aos="fade-up">
                        <div class="team-card">
                            <div class="team-img-wrapper">
                                <img src="Assets/cover.jpg" alt="John Mdoe" class="team-member-img" loading="lazy">
                            </div>
                            <h3 class="team-name">John Mdoe</h3>
                            <div class="team-designation">Tailor</div>
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