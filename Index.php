<?php
$pageTitle = "Azulis | Home";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <!-- Navigation Bar -->
    <header>
        <!-- Brand Logo -->
        <a href="Index.php" class="logo">
            <img src="Logo.png" alt="Azulis Logo">
        </a>

        <!-- Navigation Menu -->
        <nav>
            <a href="Index.php" class="active">Home</a>
            <a href="shop.php">Products</a>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact</a>
        </nav>

        <!-- Action Icons (Account, Search, Cart) -->
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

    <!-- Main Homepage Content -->
    <main>
        <section class="hero">
            <div class="hero-text">
                <div class="brand-name">— Azulis —</div>

                <h1>
                    Moira<br>
                    Collection
                </h1>

                <p>Everyday Elegance, Beautifully Carried</p>

                <a href="shop.php" class="button">
                    Shop Now →
                </a>
            </div>
        </section>
    </main>

    <?php include __DIR__ . '/footer.php'; ?>

</body>
</html>
