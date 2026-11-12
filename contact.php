<?php
$pageTitle = "Azulis | Contact Us";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <!-- NAVIGATION BAR -->
    <header>
        <a href="index.php" class="logo">
            <img src="Logo.png" alt="Azulis Logo">
        </a>

        <nav>
            <a href="index.php">Home</a>
            <a href="shop.php">Products</a>
            <a href="about.php">About Us</a>
            <a href="contact.php" class="active">Contact</a>
        </nav>

        <div class="icons">
            <a href="login.php" title="Log In">
                <i class="fa-regular fa-user"></i>
            </a>
            <a href="shop.php#searchInput" title="Search" aria-label="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </a>
            <a href="shop.php" title="Shopping Cart">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>
        </div>
    </header>

    <!-- CONTACT HERO -->
    <section class="contact-hero">
        <div class="hero-text">
            <p class="eyebrow">GET IN TOUCH</p>
            <h1>Contact Us</h1>
            <p class="hero-subtitle">We’d love to hear from you.</p>
            <p class="hero-description">
                Whether you have a question, feedback, or need assistance,
                our team is here to help. Reach out to us anytime!
            </p>
        </div>
    </section>

    <!-- CONTACT DETAILS, FORM AND MAP -->
    <main class="contact-section">

        <section class="contact-details">
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div>
                    <h3>Phone</h3>
                    <p>+63 2 645 8027</p>
                </div>
            </div>

            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div>
                    <h3>Address</h3>
                    <p>
                        Block 4, Lot 9, Kabayani Road,<br>
                        Paradise, Marikina City, 1800,<br>
                        Metro Manila, Philippines
                    </p>
                </div>
            </div>

            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div>
                    <h3>Email</h3>
                    <a href="mailto:support@azulis.com">
                        support@azulis.com
                    </a>
                </div>
            </div>

        
            <div class="social-section">
                <h3>Follow Us</h3>
                           <!-- Follow Us -->
<div class="social-links">
    <a href="https://www.facebook.com/AzulisBagCollection"
       target="_blank" rel="noopener noreferrer"
       aria-label="Visit Azulis on Facebook">
        <i class="fa-brands fa-facebook-f"></i>
    </a>

    <a href="https://www.instagram.com/azulisbag/"
       target="_blank" rel="noopener noreferrer"
       aria-label="Visit Azulis on Instagram">
        <i class="fa-brands fa-instagram"></i>
    </a>

    <a href="https://www.tiktok.com/@azulisbagcollection"
       target="_blank" rel="noopener noreferrer"
       aria-label="Visit Azulis on TikTok">
        <i class="fa-brands fa-tiktok"></i>
    </a>
</div>
            </div>
        </section>

        <!-- CONTACT FORM -->
        <section class="message-section">
            <h2 class="form-heading">Send Us a Message</h2>
            <p class="form-description">
                We’ll get back to you as soon as possible.
            </p> 

            <form class="contact-form" action="#" method="post">
                <div class="form-row">
                    <input type="text" name="full_name"
                           placeholder="Full Name *" required>

                    <input type="email" name="email"
                           placeholder="Email Address *" required>
                </div>

                <select name="subject" required>
                    <option value="">Select a Subject *</option>
                    <option value="product">Product Inquiry</option>
                    <option value="order">Order Assistance</option>
                    <option value="return">Returns and Exchanges</option>
                    <option value="feedback">Feedback</option>
                    <option value="other">Other</option>
                </select>

                <textarea name="message"
                          placeholder="Your Message *"
                          required></textarea>

                <button type="submit" class="send-button">
                    SEND MESSAGE
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </form>
        </section>

        <!-- GOOGLE MAP -->
        <section class="map-container">
            <iframe
                src="https://maps.google.com/maps?q=Block%204%20Lot%209%20Kabayani%20Road%20Marikina%20City%20Philippines&t=&z=15&ie=UTF8&iwloc=&output=embed"
                loading="lazy"
                title="Azulis Location Map"
                allowfullscreen>
            </iframe>
        </section>

    </main>

    <?php include __DIR__ . '/footer.php'; ?>

</body>
</html>