
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page - LogicalCity | ...Tailored Experience...</title>
    <meta name="description" content="Home Page - LogicalCity | ...Tailored Experience...">
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
<nav class="navbar navbar-expand-lg fixed-top navbar-dark navbar-transparent">
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
                <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
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

<!-- 1. HERO SECTION WITH SMART LOADER - FULL PAGE -->
<header class="hero-section d-flex align-items-center justify-content-center text-center" style="height: 100vh; min-height: 100vh;">

    <div class="video-wrapper" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">

        <!-- A. Fallback/Preloader Background (Creative Placeholder) -->
        <div id="video-loader" class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center"
             style="background: radial-gradient(circle at center, #1a1a1a 0%, #000 100%); z-index: 5; transition: opacity 1s ease;">
            <div class="text-center">
                <!-- Pulsing Icon/Logo placeholder -->
                <i class="fas fa-crown text-gold fa-3x mb-3 animate-pulse"></i>
                <p class="text-white-50 text-uppercase letter-spacing-3 small mb-0">Loading Experience...</p>
            </div>
        </div>

        <!-- B. The Video -->
        <!-- Added 'opacity-0' to start hidden, JS fades it in -->
        <video autoplay muted loop playsinline class="bg-video opacity-0" id="heroVideo" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
            <source src="uploads/video_1767964694.mp4" type="video/mp4">
        </video>

        <!-- C. Text Overlay (Always on top) -->
        <div class="overlay" style="z-index: 10;"></div>
    </div>

    <div class="scroll-down-indicator" data-aos="fade-down" data-aos-delay="1000" style="z-index: 11; position: absolute; bottom: 30px;">
        <i class="fas fa-chevron-down text-white fa-2x"></i>
    </div>

    <style>
        /* Pulse Animation for Loader */
        @keyframes pulse-gold {
            0% { opacity: 0.5; transform: scale(0.95); }
            50% { opacity: 1; transform: scale(1.05); text-shadow: 0 0 15px var(--color-gold); }
            100% { opacity: 0.5; transform: scale(0.95); }
        }
        .animate-pulse { animation: pulse-gold 2s infinite ease-in-out; }

        /* Smooth Video Fade In */
        .bg-video { transition: opacity 1.5s ease-in-out; }

        /* Full Page Hero */
        .hero-section {
            position: relative;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }
    </style>

    <script>
        // Smoothly reveal video once enough data has loaded
        document.addEventListener("DOMContentLoaded", function() {
            var vid = document.getElementById("heroVideo");
            var loader = document.getElementById("video-loader");

            // Function to handle reveal
            function revealVideo() {
                loader.style.opacity = '0'; // Fade out loader
                vid.classList.remove('opacity-0'); // Fade in video

                // Remove loader from DOM after transition to free resources
                setTimeout(function(){ loader.style.display = 'none'; }, 1000);
            }

            // Check if already ready (cached) or wait for event
            if (vid.readyState >= 3) {
                revealVideo();
            } else {
                vid.addEventListener('loadeddata', revealVideo);
            }
        });
    </script>
</header>

<!-- 1.5 MAIN INTRO (Contact Description + Intro Image) -->
<section class="py-5 position-relative bg-white" style="margin-top: 0; z-index: 20;">
    <div class="container">
        <div class="card border-0 shadow-lg overflow-hidden">
            <div class="row g-0 align-items-center">

                <!-- Image Side (From About Section) -->
                <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                    <div class="h-100 position-relative p-4" style="min-height: 400px;">
                        <img src="Assets/WhatsApp%20Image%202026-02-23%20at%2012.01.58.jpeg" alt="LogicalCity Atelier"
                             class="w-100 h-100 luxury-frame" style="object-fit: cover;">
                    </div>
                </div>

                <!-- Text Side (From Contact Info Description) -->
                <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                    <div class="p-5">
                        <small class="text-gold text-uppercase fw-bold ls-2 mb-2 d-block">The Essence</small>
                        <h2 class="font-heading display-6 mb-4 text-dark-green">
                            Welcome to Logical City                        </h2>

                        <div class="text-muted mb-4" style="line-height: 1.8;">
                            <!-- Display Contact Description -->
                            We are a luxury bespoke tailoring house based in Nairobi, Kenya, specializing in tailor-made garments and accessories for both men and women. From custom-fit suits and shirts to sophisticated blazers, trousers and curated accessories, we are the brand of choice for individuals who seek refinement, quality, and a truly ...Tailored Experience... . At Logical City, excellence isn’t an add-on — it’s the foundation of everything we do. We combine meticulous craftsmanship with a deep understanding of style so that every piece we create reflects not just a perfect fit but a distinct personality and confidence. Logical City has built long-standing relationships with clients locally and beyond, working closely with individuals of diverse body shapes, styles, and sartorial aspirations to create garments that feel as personal as they are exceptional.                        </div>

                        <a href="about.php" class="btn btn-outline-dark rounded-0 px-4 py-2 text-uppercase ls-1" style="font-size: 0.85rem;">
                            Discover More
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
    /* Luxury Frame for Intro Image */
    .luxury-frame {
        border: 12px solid #fff; /* Thick white mat */
        /* Inset gold line and outer shadow */
        box-shadow:
            inset 0 0 0 1px #c5a059,
            0 15px 40px rgba(0,0,0,0.15);
        transition: transform 0.3s ease;
    }
    .luxury-frame:hover {
        transform: scale(1.01);
    }
</style>

<!-- 2. PRODUCTS / SIGNATURE COLLECTIONS -->
<section id="products" class="py-5 bg-white">
    <div class="container py-4">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="font-heading display-4 text-dark-green">Signature Collections</h2>
            <div class="divider mx-auto mt-3 mb-2"></div>
            <p class="text-muted">Handcrafted excellence, designed for the modern era.</p>
        </div>

        <div class="row g-4">
                        <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
                <div class="card h-100 border-0 shadow-sm fancy-product-card">

                    <!-- IMAGE AREA (CAROUSEL OR STATIC) -->
                    <div class="overflow-hidden position-relative rounded-top" style="padding-bottom: 125%; background-color: #f8f9fa;">

                                                    <!-- SLIDER -->
                            <div id="carousel-home-1" class="carousel slide carousel-fade position-absolute top-0 start-0 w-100 h-100" data-bs-ride="carousel" data-bs-interval="5960">
                                <div class="carousel-inner w-100 h-100">
                                                                            <div class="carousel-item w-100 h-100 active">
                                            <img src="Assets/IMG_4566.JPG.jpeg" class="d-block w-100 h-100 product-img" alt="Tailored Suits" style="object-fit: cover;">
                                        </div>
                                                                            <div class="carousel-item w-100 h-100 ">
                                            <img src="Assets/IMG_4558.JPG.jpeg" class="d-block w-100 h-100 product-img" alt="Tailored Suits" style="object-fit: cover;">
                                        </div>
                                                                            <div class="carousel-item w-100 h-100 ">
                                            <img src="Assets/WhatsApp%20Image%202026-02-23%20at%2012.03.57.jpeg" class="d-block w-100 h-100 product-img" alt="Tailored Suits" style="object-fit: cover;">
                                        </div>
                                                                    </div>

                                <!-- Controls -->
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-home-1" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel-home-1" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>


                    </div>

                    <!-- CARD BODY -->
                    <div class="card-body text-center d-flex flex-column justify-content-center py-4 bg-white">
                        <a href="tailoring.php" class="text-decoration-none">
                            <h5 class="font-heading text-dark-green mb-2 card-title" style="font-weight: 700; font-size: 1.1rem; letter-spacing: 1px;">Tailored Suits</h5>
                        </a>
                                            </div>

                    <div class="card-footer p-0 border-0 bg-gold" style="height: 3px; transform: scaleX(0); transition: transform 0.4s ease; transform-origin: center;"></div>
                </div>
            </div>
                        <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm fancy-product-card">

                    <!-- IMAGE AREA (CAROUSEL OR STATIC) -->
                    <div class="overflow-hidden position-relative rounded-top" style="padding-bottom: 125%; background-color: #f8f9fa;">

                                                    <!-- SINGLE STATIC IMAGE -->
                            <img src="Assets/African.jpg" alt="African" class="position-absolute top-0 start-0 w-100 h-100 product-img" style="object-fit: cover;">

                    </div>

                    <!-- CARD BODY -->
                    <div class="card-body text-center d-flex flex-column justify-content-center py-4 bg-white">
                        <a href="tailoring.php" class="text-decoration-none">
                            <h5 class="font-heading text-dark-green mb-2 card-title" style="font-weight: 700; font-size: 1.1rem; letter-spacing: 1px;">African</h5>
                        </a>
                                            </div>

                    <div class="card-footer p-0 border-0 bg-gold" style="height: 3px; transform: scaleX(0); transition: transform 0.4s ease; transform-origin: center;"></div>
                </div>
            </div>
                        <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm fancy-product-card">

                    <!-- IMAGE AREA (CAROUSEL OR STATIC) -->
                    <div class="overflow-hidden position-relative rounded-top" style="padding-bottom: 125%; background-color: #f8f9fa;">

                                                    <!-- SLIDER -->
                            <div id="carousel-home-3" class="carousel slide carousel-fade position-absolute top-0 start-0 w-100 h-100" data-bs-ride="carousel" data-bs-interval="5115">
                                <div class="carousel-inner w-100 h-100">
                                                                            <div class="carousel-item w-100 h-100 active">
                                            <img src="Assets/WhatsApp%20Image%202026-02-23%20at%2012.04.07.jpeg" class="d-block w-100 h-100 product-img" alt="Tailored Shirt" style="object-fit: cover;">
                                        </div>
                                                                            <div class="carousel-item w-100 h-100 ">
                                            <img src="Assets/Shirts.webp" class="d-block w-100 h-100 product-img" alt="Tailored Shirt" style="object-fit: cover;">
                                        </div>
                                                                    </div>

                                <!-- Controls -->
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-home-3" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel-home-3" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>


                    </div>

                    <!-- CARD BODY -->
                    <div class="card-body text-center d-flex flex-column justify-content-center py-4 bg-white">
                        <a href="tailoring.php" class="text-decoration-none">
                            <h5 class="font-heading text-dark-green mb-2 card-title" style="font-weight: 700; font-size: 1.1rem; letter-spacing: 1px;">Tailored Shirt</h5>
                        </a>
                                            </div>

                    <div class="card-footer p-0 border-0 bg-gold" style="height: 3px; transform: scaleX(0); transition: transform 0.4s ease; transform-origin: center;"></div>
                </div>
            </div>
                        <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm fancy-product-card">

                    <!-- IMAGE AREA (CAROUSEL OR STATIC) -->
                    <div class="overflow-hidden position-relative rounded-top" style="padding-bottom: 125%; background-color: #f8f9fa;">

                                                    <!-- SINGLE STATIC IMAGE -->
                            <img src="Assets/WhatsApp%20Image%202026-02-23%20at%2012.04.09.jpeg" alt="Wedding" class="position-absolute top-0 start-0 w-100 h-100 product-img" style="object-fit: cover;">

                    </div>

                    <!-- CARD BODY -->
                    <div class="card-body text-center d-flex flex-column justify-content-center py-4 bg-white">
                        <a href="tailoring.php" class="text-decoration-none">
                            <h5 class="font-heading text-dark-green mb-2 card-title" style="font-weight: 700; font-size: 1.1rem; letter-spacing: 1px;">Wedding</h5>
                        </a>
                                            </div>

                    <div class="card-footer p-0 border-0 bg-gold" style="height: 3px; transform: scaleX(0); transition: transform 0.4s ease; transform-origin: center;"></div>
                </div>
            </div>
                    </div>

        <div class="text-center mt-5" data-aos="fade-up">
            <a href="tailoring.php" class="btn btn-outline-green btn-lg px-5 py-2" style="border-width: 2px; letter-spacing: 2px;">EXPLORE TAILORING</a>
        </div>
    </div>

    <style>
        .fancy-product-card { transition: transform 0.4s ease, box-shadow 0.4s ease; cursor: pointer; }
        .fancy-product-card:hover { transform: translateY(-10px); box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important; }

        /* Image zoom effect on hover */
        .product-img { transition: transform 0.8s ease; }
        .fancy-product-card:hover .product-img { transform: scale(1.05); }

        /* Title color change on hover */
        .fancy-product-card:hover .card-title { color: var(--color-gold) !important; transition: color 0.3s ease; }

        /* Gold Line Animation */
        .fancy-product-card:hover .card-footer { transform: scaleX(1) !important; }

        /* Carousel Arrows styling */
        .carousel-control-prev, .carousel-control-next { width: 15%; opacity: 0; transition: opacity 0.3s; }
        .carousel-control-prev-icon, .carousel-control-next-icon { background-color: rgba(0,0,0,0.5); border-radius: 50%; padding: 0.8rem; background-size: 50%; }
        /* Show arrows on hover */
        .fancy-product-card:hover .carousel-control-prev,
        .fancy-product-card:hover .carousel-control-next { opacity: 1; }
    </style>
</section>

<!-- 3. FEATURED VIDEO (DIAGONAL PINSTRIPE) -->
<section id="featured-video" class="py-5 position-relative overflow-hidden"
         style="
            background-color: #f2f2f2;
            /* Diagonal Repeating Gradient: 45deg, 1px line, 40px spacing */
            background-image: repeating-linear-gradient(
                45deg,
                rgba(0, 0, 0, 0.06) 0,
                rgba(0, 0, 0, 0.06) 1px,
                transparent 1px,
                transparent 40px
            );
         ">

    <!-- Subtle vignette to focus the eye -->
    <div class="position-absolute start-0 top-0 w-100 h-100"
         style="background: radial-gradient(circle, transparent 60%, rgba(0,0,0,0.05) 100%); pointer-events:none;"></div>

    <div class="container position-relative z-2 py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">

                                    <div class="mb-4" data-aos="fade-up">
                        <small class="text-gold text-uppercase letter-spacing-3 fw-bold">Featured Story</small>
                        <h2 class="font-heading display-5 mt-2 text-dark-green">Logical City Profile Video</h2>
                    </div>

                    <!-- Video Container -->
                    <div class="ratio ratio-16x9 shadow-lg" data-aos="zoom-in"
                         style="border: 4px solid #fff; box-shadow: 0 10px 40px rgba(0,0,0,0.15) !important;">
                        <!-- RAW OUTPUT FOR EMBED CODE -->
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/9ntD2GX9cec?si=wkvi-sUG7NxU0N57&amp;controls=0" title="LogicalCity Profile Video" frameborder="0" allow="autoplay; encrypted-media; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/R_RAnQT2PQI?si=jnBi4Y926zXU9_um&amp;start=40" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>


            </div>
        </div>
    </div>
</section>

<!-- 4. TESTIMONIALS -->
<section id="testimonials" class="py-5 position-relative" style="background: linear-gradient(135deg, #f0f3f7, #dbe2e9);">
    <div class="container position-relative z-2">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="font-heading display-4 text-dark-green">Every Client Has a Story</h2>
            <p class="text-gold fs-5">Hear from clients whose stories are stitched into every garment we make.</p>
        </div>

        <div class="row g-4 justify-content-center position-relative">
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="testimonial-card bg-white shadow-lg rounded-4 p-4 position-relative"
                     style="transform: rotate(2deg);">
                    <div class="quote-icon position-absolute" style="top: -10px; left: -10px; font-size:2rem; color:#f1c40f;">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="text-muted mb-4" style="font-style: italic;">"They have nice outfits for both gents and ladies, so coporatic and Logical in real sense with full blown sense of fashion"</p>
                    <h6 class="text-dark-green mb-1">Frank Palmer</h6>
                    <small class="text-gold">Client</small>
                    <div class="mt-2">
                                                    <i class="fas fa-star text-gold small"></i>
                                                    <i class="fas fa-star text-gold small"></i>
                                                    <i class="fas fa-star text-gold small"></i>
                                                    <i class="fas fa-star text-gold small"></i>
                                                    <i class="fas fa-star text-gold small"></i>
                                            </div>
                </div>
            </div>
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonial-card bg-white shadow-lg rounded-4 p-4 position-relative"
                     style="transform: rotate(-2deg);">
                    <div class="quote-icon position-absolute" style="top: -10px; left: -10px; font-size:2rem; color:#f1c40f;">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="text-muted mb-4" style="font-style: italic;">"Top notch brand, suits made to fit the body and meet customer&#039;s specification. Never disappoints."</p>
                    <h6 class="text-dark-green mb-1">Ronnie Omuga</h6>
                    <small class="text-gold">Client</small>
                    <div class="mt-2">
                                                    <i class="fas fa-star text-gold small"></i>
                                                    <i class="fas fa-star text-gold small"></i>
                                                    <i class="fas fa-star text-gold small"></i>
                                                    <i class="fas fa-star text-gold small"></i>
                                                    <i class="fas fa-star text-gold small"></i>
                                            </div>
                </div>
            </div>
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="testimonial-card bg-white shadow-lg rounded-4 p-4 position-relative"
                     style="transform: rotate(2deg);">
                    <div class="quote-icon position-absolute" style="top: -10px; left: -10px; font-size:2rem; color:#f1c40f;">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="text-muted mb-4" style="font-style: italic;">"you are fashion design oriented"</p>
                    <h6 class="text-dark-green mb-1">Elisha Otieno</h6>
                    <small class="text-gold">Client</small>
                    <div class="mt-2">
                                                    <i class="fas fa-star text-gold small"></i>
                                                    <i class="fas fa-star text-gold small"></i>
                                                    <i class="fas fa-star text-gold small"></i>
                                                    <i class="fas fa-star text-gold small"></i>
                                                    <i class="fas fa-star text-gold small"></i>
                                            </div>
                </div>
            </div>
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="testimonial-card bg-white shadow-lg rounded-4 p-4 position-relative"
                     style="transform: rotate(-2deg);">
                    <div class="quote-icon position-absolute" style="top: -10px; left: -10px; font-size:2rem; color:#f1c40f;">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="text-muted mb-4" style="font-style: italic;">"Cute clothing done here for men"</p>
                    <h6 class="text-dark-green mb-1">Sophie Riziki</h6>
                    <small class="text-gold">Client</small>
                    <div class="mt-2">
                                                    <i class="fas fa-star text-gold small"></i>
                                                    <i class="fas fa-star text-gold small"></i>
                                                    <i class="fas fa-star text-gold small"></i>
                                                    <i class="fas fa-star text-gold small"></i>
                                                    <i class="fas fa-star text-gold small"></i>
                                            </div>
                </div>
            </div>
                    </div>

        <div class="text-center mt-5" data-aos="fade-up">
            <a href="testimonials.php" class="btn btn-gold btn-lg rounded-pill fw-bold shadow" style="text-transform:none">View All Testimonials</a>
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