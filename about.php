<?php
$pageTitle = "Azulis | About Us";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="about.css?v=20261112-2">
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <!-- Navigation Bar -->
    <header>
        <a href="Index.php" class="logo">
            <img src="Logo.png" alt="Azulis Logo">
        </a>

        <nav>
            <a href="Index.php">Home</a>
            <a href="shop.php">Products</a>
            <a href="about.php" class="active">About Us</a>
            <a href="contact.php">Contact</a>
        </nav>

        <div class="icons">
            <a href="login.php" title="Log In" aria-label="Log In">
                <svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
            </a>

            <a href="shop.php#searchInput" title="Search" aria-label="Search">
                <svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
            </a>

            <a href="shop.php" title="Shopping Cart" aria-label="Shopping Cart">
                <svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="9" cy="21" r="1"></circle>
                    <circle cx="20" cy="21" r="1"></circle>
                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                </svg>
            </a>
        </div>
    </header>

    <!-- Hero Banner -->
    <section class="about-hero">
        <div class="hero-content">
            <span class="star">✦</span>
            <p class="hero-label">About Us</p>
            <h1>The Art of<br>Everyday Elegance</h1>
        </div>
    </section>

    <!-- Main About Content -->
    <main class="about-content">

        <!-- Unified Two-Column Layout: Left (Intro + Portrait) & Right (Story, Mission, Vision) -->
        <div class="about-main-grid">

            <!-- Left Column -->
            <div class="about-left-col">
                <div class="intro">
                    <p class="section-label">Who We Are</p>
                    <h2>Elegance, style, and functionality.</h2>
                </div>

                <div class="about-portrait">
                    <img src="handbag.jpg" alt="Model carrying Azulis Crescent Bag">
                </div>
            </div>

            <!-- Right Column -->
            <div class="about-right-col">
                <div class="story">
                    <p class="section-label">Our Heritage</p>
                    <h2>Our Story</h2>
                    <p>
                        Proudly inspired by Marikina, the shoe and leathercraft capital of the Philippines, Azulis creates durable, quality-made handbags designed to last. Our collections feature thoughtfully crafted silhouettes that effortlessly complement different outfits, occasions, and personal styles.
                    </p>
                </div>

                <div class="mission">
                    <p class="section-label">Our Mission</p>
                    <h2>Beautiful bags for everyday life.</h2>
                    <p>
                        Our mission is to offer fashionable and versatile handbags while providing customers with a simple, convenient, and enjoyable online shopping experience. We value quality, practicality, and timeless style.
                    </p>
                </div>

                <div class="vision">
                    <p class="section-label">Our Vision</p>
                    <h2>Confidence in every carry.</h2>
                    <p>
                        Our vision is to become a trusted destination for handbag lovers by offering stylish designs that inspire confidence and express individuality, while showcasing the durability of Marikina-made bags.
                    </p>
                </div>
            </div>

        </div>

               <!-- Bottom Row: 3 Brand Pillars -->
        <div class="pillars-wrapper">
            <div class="pillars-header">
                <p class="section-label">Why Azulis</p>
                <h2>Crafted with Purpose</h2>
            </div>

            <div class="pillars-grid">
                <div class="pillar">
                    <p class="pillar-num">01.</p>
                    <h3>Marikina Craftsmanship</h3>
                    <p>Constructed with meticulous stitching and durable materials built for daily wear.</p>
                </div>

                <div class="pillar">
                    <p class="pillar-num">02.</p>
                    <h3>Versatile Silhouettes</h3>
                    <p>Designed to transition seamlessly from casual errands to polished evening outings.</p>
                </div>

                <div class="pillar">
                    <p class="pillar-num">03.</p>
                    <h3>Timeless Appeal</h3>
                    <p>Clean lines and curated tones that stay in style season after season.</p>
                </div>
            </div>
        </div>


    </main>

    <?php include __DIR__ . '/footer.php'; ?>

</body>
</html>
