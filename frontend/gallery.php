
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <meta name="description" content="...Tailored Experiences...">
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

<!-- SimpleLightbox CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.14.2/simple-lightbox.min.css" />

<style>
    /* --- OVERLAP LOGIC --- */
    .page-hero {
        padding-bottom: 5rem !important;
    }

    .gallery-overlap-section {
        margin-top: -6rem;
        position: relative;
        z-index: 20;
    }

    /* --- SKELETON LOADER ANIMATION --- */
    @keyframes skeleton-loading {
        0% { background-position: 200% 0; }
        100% { background-position: -200% 0; }
    }

    /* --- THUMBNAIL GRID --- */
    .gallery-wrapper {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        cursor: pointer;
        height: 250px;
        background: linear-gradient(90deg, #f5f5f5 25%, #ebebeb 50%, #f5f5f5 75%);
        background-size: 200% 100%;
        animation: skeleton-loading 1.5s infinite;
        border: 4px solid #fff;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        display: block; /* Important for anchor tag */
    }

    /* WHEN IMAGE IS LOADED */
    .gallery-wrapper.image-loaded {
        animation: none;
        background: #fafafa;
    }

    .gallery-wrapper:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        border-color: var(--color-safari-gold, #c5a059);
    }

    /* IMAGE STYLING WITH FADE-IN EFFECT */
    .gallery-thumb-img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Changed to cover for better grid consistency */
        display: block;
        opacity: 0;
        transition: opacity 0.5s ease-in-out, transform 0.5s ease;
    }

    .gallery-wrapper:hover .gallery-thumb-img {
        transform: scale(1.05);
    }

    .gallery-thumb-img.loaded {
        opacity: 1;
    }

    /* Hover Overlay */
    .gallery-overlay {
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: rgba(0,0,0,0.3);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s;
        z-index: 5;
    }

    .gallery-wrapper:hover .gallery-overlay {
        opacity: 1;
    }

    .overlay-icon {
        color: white;
        font-size: 1.5rem;
        background: rgba(0,0,0,0.6);
        padding: 12px;
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .gallery-wrapper:hover .overlay-icon {
        transform: scale(1.1) rotate(10deg);
    }

    /* --- RESPONSIVE --- */
    @media (max-width: 768px) {
        .gallery-wrapper {
            height: 200px;
        }
    }

    /* --- SKELETON LOADER ANIMATION --- */
    @keyframes skeleton-loading {
        0% { background-position: 200% 0; }
        100% { background-position: -200% 0; }
    }

    /* Gold spinner for lightbox */
    .sl-spinner {
        border: 4px solid rgba(197,160,89,0.3);
        border-top: 4px solid #C5A059;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        animation: spin 0.8s linear infinite;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 9999;
    }
    @keyframes spin {
        0% { transform: translate(-50%, -50%) rotate(0deg); }
        100% { transform: translate(-50%, -50%) rotate(360deg); }
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
                <li class="nav-item"><a class="nav-link active" href="gallery.php">Gallery</a></li>
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
                    <h1 class="hero-title-text" data-aos="zoom-in">Gallery</h1>
                    <p class="hero-desc-text" data-aos="fade-up" data-aos-delay="200">...Tailored Experiences...</p>
                </div>
                <div class="chalk-track">
                    <div class="chalk-line"></div>
                    <div class="scissors-mover"><i class="fas fa-scissors scissors-icon"></i></div>
                </div>
            </div>
        </div>
    </section>

<!-- THUMBNAIL GRID (OVERLAPPING) -->
<section class="gallery-overlap-section pb-5">
    <div class="container">

            <div class="row g-3 gallery-container">
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="Assets/IMG_4550.JPG.jpeg"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="Assets/IMG_4550.JPG.jpeg"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="Assets/Gal.jpg"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="Assets/Gal.jpg"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="Assets/IMG_4559.JPG.jpeg"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="Assets/IMG_4559.JPG.jpeg"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="Assets/IMG_4560.JPG.jpeg"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="Assets/IMG_4561.JPG.jpeg"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="Assets/IMG_4562.JPG.jpeg"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="Assets/IMG_4562.JPG.jpeg"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="Assets/IMG_4563.JPG.jpeg"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="Assets/IMG_4564.JPG.jpeg"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="Assets/IMG_4565.JPG.jpeg"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="Assets/IMG_4553.JPG.jpeg"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="Assets/IMG_4567.JPG.jpeg"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="Assets/IMG_4567.JPG.jpeg"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="Assets/IMG_4568.JPG.jpeg"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="Assets/IMG_4568.JPG.jpeg"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="Assets/IMG_4569.JPG.jpeg"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="Assets/IMG_4570.JPG.jpeg"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="Assets/IMG_4556.JPG.jpeg"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="Assets/IMG_4556.JPG.jpeg"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="Assets/IMG_4557.JPG.jpeg"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="Assets/IMG_4557.JPG.jpeg"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="Assets/IMG_4552.JPG.jpeg"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="Assets/IMG_4552.JPG.jpeg"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="Assets/IMG_4549.JPG.jpeg"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="Assets/IMG_4549.JPG.jpeg"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="Assets/IMG_4547.JPG.jpeg"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="Assets/IMG_4547.JPG.jpeg"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="Assets/WhatsApp%20Image%202026-02-23%20at%2012.03.57.jpeg"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="Assets/WhatsApp%20Image%202026-02-23%20at%2012.03.57.jpeg"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/9a257896faa2a87afceb7377b3c9fb3b.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/9a257896faa2a87afceb7377b3c9fb3b.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/8aebdff36a5a6fff88d87b8e166099b9.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/8aebdff36a5a6fff88d87b8e166099b9.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/c8ffbbb06d19b00535fc213b603d2758.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/c8ffbbb06d19b00535fc213b603d2758.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/5e8c4e4ae069a11bd924ca4da0cdd222.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/5e8c4e4ae069a11bd924ca4da0cdd222.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/2c34f1c58ce0019870556eb8dcd5b2a6.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/2c34f1c58ce0019870556eb8dcd5b2a6.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/f7c44453967dd62f669f80b8148d2ee5.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/f7c44453967dd62f669f80b8148d2ee5.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/e743215864eb8c35c94307f92fbfe99d.jpg"
                           class="gallery-wrapper"
                           title="Wedding">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/e743215864eb8c35c94307f92fbfe99d.jpg"
                                 alt="Wedding"
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/33bf3576881d50aed1a4e9b12852903f.jpg"
                           class="gallery-wrapper"
                           title="wedding">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/33bf3576881d50aed1a4e9b12852903f.jpg"
                                 alt="wedding"
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/1f61fb9d33875d470ef89c1ddfae2cd3.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/1f61fb9d33875d470ef89c1ddfae2cd3.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/bf5a1461edb0536346bbb52306112790.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/bf5a1461edb0536346bbb52306112790.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/fe24bdf38b18bd82f8eb635bfa14beb4.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/fe24bdf38b18bd82f8eb635bfa14beb4.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/e47c9790f9adea037abeabd354a6715a.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/e47c9790f9adea037abeabd354a6715a.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/e563560c744ef8499c5406cb0cb221a1.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/e563560c744ef8499c5406cb0cb221a1.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/ac339e6b639c688faf30ceb1deed4c5f.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/ac339e6b639c688faf30ceb1deed4c5f.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/1dd72382aed14461c14d3d2cc2f01ccc.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/1dd72382aed14461c14d3d2cc2f01ccc.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/1a17a402a79ae149cf2a141c7f6e2cb8.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/1a17a402a79ae149cf2a141c7f6e2cb8.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/c6ce2e2aa149344dcfb9f7231dfd7cb8.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/c6ce2e2aa149344dcfb9f7231dfd7cb8.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/a3b687bde17840f7e46c741da377bede.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/a3b687bde17840f7e46c741da377bede.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/108e596823f566356a7b6dc68671e728.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/108e596823f566356a7b6dc68671e728.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/13bbfd0cbc41fec0771f4accd17a3c0f.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/13bbfd0cbc41fec0771f4accd17a3c0f.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/a5e5fc5c880ecb769bd298647796db1a.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/a5e5fc5c880ecb769bd298647796db1a.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/f4bac72659915f0734eb17aec9c20590.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/f4bac72659915f0734eb17aec9c20590.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/d6aff7c711f10b26f5a14972383a6f50.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/d6aff7c711f10b26f5a14972383a6f50.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/f63b4dd231e1c6f3f563399d8fb9f918.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/f63b4dd231e1c6f3f563399d8fb9f918.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/07418eadb161a915ba5d1086798d78f2.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/07418eadb161a915ba5d1086798d78f2.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/9f700ad54a934254517cd1e937c86573.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/9f700ad54a934254517cd1e937c86573.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/4a1e519443fffbc6ff4e6b81823d6478.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/4a1e519443fffbc6ff4e6b81823d6478.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/5711200e17a8f4602ecc87e219f456b8.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/5711200e17a8f4602ecc87e219f456b8.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/fc168d4ee2488a2b9321141b903056b2.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/fc168d4ee2488a2b9321141b903056b2.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/a2b1016095aaaeb820ebf2aa6618d02d.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/a2b1016095aaaeb820ebf2aa6618d02d.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/da2d24a286766a02fe0362832dcaab16.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/da2d24a286766a02fe0362832dcaab16.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/c029d3f68438067240222e85e75073ad.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/c029d3f68438067240222e85e75073ad.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/bdd737816795b15ecdb792176d887d75.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/bdd737816795b15ecdb792176d887d75.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/2a89b6ac5f0cea8d08185e8ec90e02fd.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/2a89b6ac5f0cea8d08185e8ec90e02fd.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/8465f87842f41834a08744800faf3f65.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/8465f87842f41834a08744800faf3f65.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/514d48167dcb155867faa1155fc43306.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/514d48167dcb155867faa1155fc43306.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/c4630e909c909c4b669b230b98d733c9.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/c4630e909c909c4b669b230b98d733c9.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/4fde61275e09e1595af6af93fdd9e055.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/4fde61275e09e1595af6af93fdd9e055.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/0039a3f83f088d53d967e274711854ff.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/0039a3f83f088d53d967e274711854ff.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/45340e060f6a207983228bf15ee148ec.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/45340e060f6a207983228bf15ee148ec.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/e31011ce16937729270b6ffd6c7c7be8.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/e31011ce16937729270b6ffd6c7c7be8.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/fac071e15720d6de7fc70202eb8efadd.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/fac071e15720d6de7fc70202eb8efadd.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/c9b9df8f05b580c38028f5e418a208d6.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/c9b9df8f05b580c38028f5e418a208d6.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/892849a80fd4eebbf48fc380217988dc.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/892849a80fd4eebbf48fc380217988dc.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/a34867bb16d653dcae2bb93ae6e0b31e.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/a34867bb16d653dcae2bb93ae6e0b31e.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/27ac075c8277ecd3a7cc77196623d428.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/27ac075c8277ecd3a7cc77196623d428.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/2e3bb0de8e8f6513be1abd7f39f9cc54.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/2e3bb0de8e8f6513be1abd7f39f9cc54.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/748866d35aee2bc02cd7a787b081b8c6.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/748866d35aee2bc02cd7a787b081b8c6.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/61f2239d56137314ad5ce1f3541b4442.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/61f2239d56137314ad5ce1f3541b4442.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/d571e142c0440a357acb07e5457c074a.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/d571e142c0440a357acb07e5457c074a.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/d0e8fd91ef385a60c39473dbd5e3ceaa.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/d0e8fd91ef385a60c39473dbd5e3ceaa.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/8c26eaa5dfd8b007e31e2e67df39d7ac.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/8c26eaa5dfd8b007e31e2e67df39d7ac.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/c59eaf8bde7cc3d99ec51f2d0231fdb9.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/c59eaf8bde7cc3d99ec51f2d0231fdb9.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/b7052a727a1dfa3eb684f63944d8e6e7.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/b7052a727a1dfa3eb684f63944d8e6e7.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">

                        <!--
                           Standard Lightbox Link Structure:
                           href = Full Image URL
                           src = Thumbnail URL
                        -->
                        <a href="uploads/gallery/81c5ff28b124e22ae769d93fe7c65c4c.webp"
                           class="gallery-wrapper"
                           title="">

                            <!-- Lazy loaded thumbnail image -->
                            <img src="uploads/gallery/81c5ff28b124e22ae769d93fe7c65c4c.webp"
                                 alt=""
                                 class="gallery-thumb-img"
                                 loading="lazy"
                                 decoding="async"
                                 onload="this.classList.add('loaded'); this.parentElement.classList.add('image-loaded');">

                            <!-- Overlay with expand icon -->
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus overlay-icon"></i>
                            </div>
                        </a>

                    </div>
                            </div>

            </div>
</section>

<!-- LIGHTBOX SCRIPT -->
<!-- Using SimpleLightbox for robust zooming and smooth transitions -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.14.2/simple-lightbox.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {

        // Add loading spinner to body
        var spinner = document.createElement('div');
        spinner.className = 'sl-spinner';
        spinner.style.display = 'none';
        document.body.appendChild(spinner);

        // Initialize SimpleLightbox
        var gallery = new SimpleLightbox('.gallery-container a', {
            overlayOpacity: 0.95,
            animationSpeed: 250,
            fadeSpeed: 200,
            showCounter: true,
            loop: true,
            docClose: true,
            swipeClose: true,
            scrollZoom: false,
            captions: true,
            captionSelector: 'self',
            captionType: 'attr',
            captionAttribute: 'title',
            captionPosition: 'bottom',
            captionDelay: 250,
        });

        // Show spinner when image starts loading
        gallery.on('show.simplelightbox', function() {
            spinner.style.display = 'block';
        });

        // Hide spinner when image is loaded
        gallery.on('shown.simplelightbox', function() {
            spinner.style.display = 'none';
        });

        // Hide spinner on close
        gallery.on('close.simplelightbox', function() {
            spinner.style.display = 'none';
        });

        // Handle lazy loaded thumbnails
        document.querySelectorAll('img[loading="lazy"]').forEach(img => {
            if(img.complete && img.naturalWidth > 0) {
                img.classList.add('loaded');
                img.parentElement.classList.add('image-loaded');
            }
            img.addEventListener('load', function() {
                this.classList.add('loaded');
                this.parentElement.classList.add('image-loaded');
            });
            img.addEventListener('error', function() {
                this.parentElement.classList.add('image-loaded');
                this.style.opacity = '0.3';
            });
        });
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.14.2/simple-lightbox.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {

        // Add loading spinner to body
        var spinner = document.createElement('div');
        spinner.className = 'sl-spinner';
        spinner.style.display = 'none';
        document.body.appendChild(spinner);

        // Initialize SimpleLightbox
        var gallery = new SimpleLightbox('.gallery-container a', {
            overlayOpacity: 0.95,
            animationSpeed: 250,
            fadeSpeed: 200,
            showCounter: true,
            loop: true,
            docClose: true,
            swipeClose: true,
            scrollZoom: false,
            captions: true,
            captionSelector: 'self',
            captionType: 'attr',
            captionAttribute: 'title',
            captionPosition: 'bottom',
            captionDelay: 250,
        });

        // Show spinner when image starts loading
        gallery.on('show.simplelightbox', function() {
            spinner.style.display = 'block';
        });

        // Hide spinner when image is loaded
        gallery.on('shown.simplelightbox', function() {
            spinner.style.display = 'none';
        });

        // Hide spinner on close
        gallery.on('close.simplelightbox', function() {
            spinner.style.display = 'none';
        });

        // Handle lazy loaded thumbnails
        document.querySelectorAll('img[loading="lazy"]').forEach(img => {
            if(img.complete && img.naturalWidth > 0) {
                img.classList.add('loaded');
                img.parentElement.classList.add('image-loaded');
            }
            img.addEventListener('load', function() {
                this.classList.add('loaded');
                this.parentElement.classList.add('image-loaded');
            });
            img.addEventListener('error', function() {
                this.parentElement.classList.add('image-loaded');
                this.style.opacity = '0.3';
            });
        });
    });
</script>


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