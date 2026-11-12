<?php
$pageTitle = "Azulis | Shop";

// Add products here to keep the catalog, filters, and quick view in sync.
$products = [
    [
        "id" => 1,
        "name" => "Moira Classic — Blush Pink",
        "category" => "handbags",
        "tag" => "Bestseller",
        "price" => 1299,
        "image" => "Moira_Pink.jpg",
        "dimensions" => "9.5\" × 7\" × 3.5\"",
        "material" => "Marikina Synthetic Leather",
        "description" => "Two-way structured handbag with top handles and detachable strap."
    ],
    [
        "id" => 2,
        "name" => "Moira Classic — Sage Green",
        "category" => "handbags",
        "tag" => "New Arrival",
        "price" => 1299,
        "image" => "Moira_Green.jpg",
        "dimensions" => "9.5\" × 7\" × 3.5\"",
        "material" => "Marikina Synthetic Leather",
        "description" => "Soft pastel sage finish crafted for effortless day-to-night styling."
    ],
    [
        "id" => 3,
        "name" => "Moira Classic — Powder Blue",
        "category" => "handbags",
        "tag" => "",
        "price" => 1299,
        "image" => "Moira_Blue.jpg",
        "dimensions" => "9.5\" × 7\" × 3.5\"",
        "material" => "Marikina Synthetic Leather",
        "description" => "Clean silhouette in serene powder blue with gold-tone hardware."
    ],
    [
        "id" => 4,
        "name" => "Maureen Crescent Bag",
        "category" => "crossbody",
        "tag" => "Featured",
        "price" => 1150,
        "image" => "crossbody2.jpg",
        "dimensions" => "8\" × 5\" × 3\"",
        "material" => "Textured Leather & Woven Strap",
        "description" => "Curved modern crescent silhouette with adjustable wide shoulder strap."
    ],
    [
        "id" => 9,
        "name" => "Maureen Crescent Bag — Cognac",
        "category" => "crossbody",
        "tag" => "",
        "price" => 1150,
        "image" => "crossbody1.jpg",
        "dimensions" => "8\" × 5\" × 3\"",
        "material" => "Textured Leather & Woven Strap",
        "description" => "The Maureen crescent bag in cognac with a contrasting woven strap."
    ],
    [
        "id" => 5,
        "name" => "Life Begins After Coffee Tote",
        "category" => "totes",
        "tag" => "",
        "price" => 1450,
        "image" => "Totebag1.jpg",
        "dimensions" => "14\" × 16\"",
        "material" => "Cotton Canvas",
        "description" => "A reusable canvas tote featuring a coffee-inspired design."
    ],
    [
        "id" => 6,
        "name" => "Be Yourself Tote",
        "category" => "totes",
        "tag" => "New Arrival",
        "price" => 1550,
        "image" => "Totebag2.jpg",
        "dimensions" => "14\" × 16\"",
        "material" => "Cotton Canvas",
        "description" => "A lightweight canvas tote with an original illustrated design."
    ],
    [
        "id" => 7,
        "name" => "Good Things Take Time Tote",
        "category" => "totes",
        "tag" => "",
        "price" => 1450,
        "image" => "Totebag3.jpg",
        "dimensions" => "14\" × 16\"",
        "material" => "Cotton Canvas",
        "description" => "A roomy canvas tote with a cheerful printed message."
    ],
    [
        "id" => 8,
        "name" => "Dream Big Tote",
        "category" => "totes",
        "tag" => "",
        "price" => 1550,
        "image" => "Totebag4.jpg",
        "dimensions" => "14\" × 16\"",
        "material" => "Cotton Canvas",
        "description" => "An everyday canvas tote with an uplifting printed design."
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="shop.css?v=20261112-3">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <a href="Index.php" class="logo"><img src="Logo.png" alt="Azulis Logo"></a>
        <nav>
            <a href="Index.php">Home</a>
            <a href="shop.php" class="active">Products</a>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact</a>
        </nav>
        <div class="icons">
            <a href="login.php" title="Log In" aria-label="Log In"><svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></a>
            <a href="shop.php#searchInput" title="Search" aria-label="Search"><svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg></a>
            <a href="#cart" class="cart-link" title="Cart" aria-label="Open shopping cart"><svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg><span class="cart-badge" id="cartCount" aria-live="polite"></span></a>
        </div>
    </header>

    <section class="shop-hero">
        <div class="shop-hero-inner">
            <p class="eyebrow">Marikina-Crafted Pieces</p>
            <h1>Shop All Bags</h1>
            <p class="shop-subtitle">Thoughtfully designed silhouettes crafted for everyday elegance and lasting durability.</p>
        </div>
    </section>

    <main class="shop-container">
        <div class="shop-toolbar" id="search-bar">
            <div class="filter-tabs">
                <button type="button" class="filter-btn active" data-filter="all" aria-pressed="true">All Bags</button>
                <button type="button" class="filter-btn" data-filter="handbags" aria-pressed="false">Handbags</button>
                <button type="button" class="filter-btn" data-filter="crossbody" aria-pressed="false">Crossbody</button>
                <button type="button" class="filter-btn" data-filter="totes" aria-pressed="false">Totes</button>
            </div>
            <div class="search-box">
                <input type="search" id="searchInput" placeholder="Search bag name..." aria-label="Search bags">
            </div>
        </div>

        <div class="product-grid" id="productGrid">
            <?php foreach ($products as $item): ?>
                <?php
                    $safeProduct = htmlspecialchars(json_encode($item), ENT_QUOTES, 'UTF-8');
                    $safeName = htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8');
                ?>
                <article class="product-card" data-category="<?= htmlspecialchars($item['category'], ENT_QUOTES, 'UTF-8') ?>" data-name="<?= htmlspecialchars(strtolower($item['name']), ENT_QUOTES, 'UTF-8') ?>">
                    <div class="product-image-wrap">
                        <?php if ($item['tag']): ?><span class="product-badge"><?= htmlspecialchars($item['tag'], ENT_QUOTES, 'UTF-8') ?></span><?php endif; ?>
                        <img src="<?= htmlspecialchars($item['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= $safeName ?>" loading="lazy">
                        <button type="button" class="quick-view-btn" data-action="quick-view" data-product="<?= $safeProduct ?>">Quick View</button>
                    </div>
                    <div class="product-info">
                        <span class="product-cat"><?= ucfirst(htmlspecialchars($item['category'], ENT_QUOTES, 'UTF-8')) ?></span>
                        <h2 class="product-title"><?= $safeName ?></h2>
                        <p class="product-price">₱<?= number_format($item['price'], 2) ?></p>
                        <button type="button" class="add-to-cart-btn" data-action="add-to-cart" data-product="<?= $safeProduct ?>">Add to Cart</button>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
        <p class="no-results" id="noResults" hidden>No bags matched your search.</p>
    </main>

    <div class="modal-overlay" id="quickViewModal" aria-hidden="true">
        <div class="modal-card" role="dialog" aria-modal="true" aria-labelledby="mTitle">
            <button type="button" class="modal-close" id="closeQuickView" aria-label="Close quick view">&times;</button>
            <div class="modal-body">
                <div class="modal-img"><img id="mImg" src="" alt=""></div>
                <div class="modal-details">
                    <p class="eyebrow" id="mCat"></p>
                    <h2 id="mTitle"></h2>
                    <p class="modal-price" id="mPrice"></p>
                    <p class="modal-desc" id="mDesc"></p>
                    <ul class="modal-specs">
                        <li><strong>Dimensions:</strong> <span id="mDim"></span></li>
                        <li><strong>Material:</strong> <span id="mMat"></span></li>
                        <li><strong>Origin:</strong> Handcrafted in Marikina, PH</li>
                    </ul>
                    <button type="button" class="add-to-cart-btn" id="mCartBtn">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

    <div class="cart-overlay" id="cartOverlay" aria-hidden="true"></div>
    <aside class="cart-drawer" id="cartDrawer" role="dialog" aria-modal="true" aria-label="Shopping cart" aria-hidden="true">
        <div class="cart-drawer-header">
            <h2>Your Shopping Bag</h2>
            <button type="button" class="cart-close" id="closeCartBtn" aria-label="Close shopping cart">&times;</button>
        </div>
        <div class="cart-items" id="cartItemsContainer"></div>
        <div class="cart-footer" id="cartFooter" hidden>
            <div class="cart-subtotal"><span>Subtotal</span><strong id="cartSubtotal">₱0.00</strong></div>
            <p>Shipping and taxes calculated at checkout.</p>
        </div>
    </aside>

    <div class="toast" id="toastMsg">Added to cart!</div>
    <?php include __DIR__ . '/footer.php'; ?>

    <script>
        (() => {
            const products = document.getElementById('productGrid');
            const cards = [...document.querySelectorAll('.product-card')];
            const search = document.getElementById('searchInput');
            const filterButtons = [...document.querySelectorAll('.filter-btn')];
            const noResults = document.getElementById('noResults');
            const cartBadge = document.getElementById('cartCount');
            const cartDrawer = document.getElementById('cartDrawer');
            const cartOverlay = document.getElementById('cartOverlay');
            const cartItems = document.getElementById('cartItemsContainer');
            const cartFooter = document.getElementById('cartFooter');
            const quickView = document.getElementById('quickViewModal');
            let activeCategory = 'all';
            let lastFocusedElement;
            let toastTimer;
            let cart = loadCart();

            function loadCart() {
                const savedCart = localStorage.getItem('azulis_cart');
                if (!savedCart) return [];

                try {
                    const parsedCart = JSON.parse(savedCart);
                    if (!Array.isArray(parsedCart)) {
                        throw new TypeError('Saved cart must be a list.');
                    }

                    return parsedCart.filter(item =>
                        item &&
                        typeof item.name === 'string' &&
                        typeof item.image === 'string' &&
                        Number.isFinite(Number(item.price)) &&
                        Number.isInteger(Number(item.qty)) &&
                        Number(item.qty) > 0
                    ).map(item => ({
                        name: item.name,
                        image: item.image,
                        price: Number(item.price),
                        qty: Number(item.qty)
                    }));
                } catch (error) {
                    console.error('Unable to load the saved shopping cart.', error);
                    localStorage.removeItem('azulis_cart');
                    return [];
                }
            }

            function saveCart() {
                try {
                    localStorage.setItem('azulis_cart', JSON.stringify(cart));
                } catch (error) {
                    console.error('Unable to save the shopping cart.', error);
                    showToast('Your cart could not be saved in this browser.');
                }
            }

            function formatPrice(price) {
                return Number(price).toLocaleString('en-PH', { minimumFractionDigits: 2 });
            }

            function renderCart() {
                saveCart();
                cartItems.replaceChildren();

                const totalQuantity = cart.reduce((total, item) => total + item.qty, 0);
                cartBadge.textContent = totalQuantity > 99 ? '99+' : (totalQuantity || '');
                document.querySelector('.cart-link').setAttribute(
                    'aria-label',
                    `Open shopping cart, ${totalQuantity} ${totalQuantity === 1 ? 'item' : 'items'}`
                );
                cartFooter.hidden = cart.length === 0;

                if (cart.length === 0) {
                    const emptyMessage = document.createElement('p');
                    emptyMessage.className = 'empty-cart-msg';
                    emptyMessage.textContent = 'Your bag is currently empty.';
                    cartItems.append(emptyMessage);
                    return;
                }

                let subtotal = 0;
                cart.forEach((item, index) => {
                    subtotal += item.price * item.qty;

                    const row = document.createElement('article');
                    row.className = 'cart-item';

                    const image = document.createElement('img');
                    image.src = item.image;
                    image.alt = item.name;

                    const details = document.createElement('div');
                    details.className = 'cart-item-info';

                    const title = document.createElement('h3');
                    title.className = 'cart-item-title';
                    title.textContent = item.name;

                    const price = document.createElement('p');
                    price.className = 'cart-item-price';
                    price.textContent = `₱${formatPrice(item.price)}`;

                    const controls = document.createElement('div');
                    controls.className = 'cart-qty-controls';
                    controls.innerHTML = `
                        <button type="button" class="qty-btn" data-cart-action="decrease" data-index="${index}" aria-label="Decrease quantity">−</button>
                        <span>${item.qty}</span>
                        <button type="button" class="qty-btn" data-cart-action="increase" data-index="${index}" aria-label="Increase quantity">+</button>
                        <button type="button" class="remove-item-btn" data-cart-action="remove" data-index="${index}">Remove</button>
                    `;

                    details.append(title, price, controls);
                    row.append(image, details);
                    cartItems.append(row);
                });

                document.getElementById('cartSubtotal').textContent = `₱${formatPrice(subtotal)}`;
            }

            function setCartOpen(isOpen) {
                const wasOpen = cartDrawer.classList.contains('open');
                cartDrawer.classList.toggle('open', isOpen);
                cartOverlay.classList.toggle('open', isOpen);
                cartDrawer.setAttribute('aria-hidden', String(!isOpen));
                cartOverlay.setAttribute('aria-hidden', String(!isOpen));
                document.body.classList.toggle('cart-open', isOpen);

                if (isOpen) {
                    document.getElementById('closeCartBtn').focus();
                } else if (wasOpen) {
                    document.querySelector('.cart-link').focus();
                }
            }

            function showToast(message) {
                const toast = document.getElementById('toastMsg');
                toast.textContent = message;
                toast.classList.add('show');
                window.clearTimeout(toastTimer);
                toastTimer = window.setTimeout(() => toast.classList.remove('show'), 2500);
            }

            function addToCart(product) {
                const existing = cart.find(item => item.name === product.name);
                if (existing) {
                    existing.qty++;
                } else {
                    cart.push({
                        name: product.name,
                        image: product.image,
                        price: Number(product.price),
                        qty: 1
                    });
                }

                renderCart();
                showToast(`"${product.name}" added to cart`);
            }

            function openQuickView(product, trigger) {
                lastFocusedElement = trigger;
                document.getElementById('mImg').src = product.image;
                document.getElementById('mImg').alt = product.name;
                document.getElementById('mCat').textContent = product.category;
                document.getElementById('mTitle').textContent = product.name;
                document.getElementById('mPrice').textContent = `₱${formatPrice(product.price)}`;
                document.getElementById('mDesc').textContent = product.description;
                document.getElementById('mDim').textContent = product.dimensions;
                document.getElementById('mMat').textContent = product.material;
                document.getElementById('mCartBtn').onclick = () => {
                    addToCart(product);
                    closeQuickView();
                };
                quickView.classList.add('open');
                quickView.setAttribute('aria-hidden', 'false');
                document.getElementById('closeQuickView').focus();
            }

            function closeQuickView() {
                quickView.classList.remove('open');
                quickView.setAttribute('aria-hidden', 'true');
                if (lastFocusedElement) {
                    lastFocusedElement.focus();
                }
            }

            function filterProducts() {
                const query = search.value.trim().toLowerCase();
                let visibleCount = 0;

                cards.forEach(card => {
                    const matchesCategory = activeCategory === 'all' || card.dataset.category === activeCategory;
                    const matchesSearch = card.dataset.name.includes(query);
                    card.hidden = !(matchesCategory && matchesSearch);
                    if (!card.hidden) visibleCount++;
                });

                noResults.hidden = visibleCount > 0;
            }

            products.addEventListener('click', event => {
                const button = event.target.closest('button[data-action]');
                if (!button) return;

                const product = JSON.parse(button.dataset.product);
                if (button.dataset.action === 'quick-view') {
                    openQuickView(product, button);
                } else {
                    addToCart(product);
                }
            });

            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    activeCategory = button.dataset.filter;
                    filterButtons.forEach(filterButton => {
                        const isActive = filterButton === button;
                        filterButton.classList.toggle('active', isActive);
                        filterButton.setAttribute('aria-pressed', String(isActive));
                    });
                    filterProducts();
                });
            });

            search.addEventListener('input', filterProducts);
            document.querySelector('.cart-link').addEventListener('click', event => {
                event.preventDefault();
                setCartOpen(true);
            });
            document.getElementById('closeCartBtn').addEventListener('click', () => setCartOpen(false));
            cartOverlay.addEventListener('click', () => setCartOpen(false));
            cartItems.addEventListener('click', event => {
                const button = event.target.closest('[data-cart-action]');
                if (!button) return;

                const index = Number(button.dataset.index);
                const item = cart[index];
                if (!item) return;

                if (button.dataset.cartAction === 'remove' || (button.dataset.cartAction === 'decrease' && item.qty === 1)) {
                    cart.splice(index, 1);
                } else if (button.dataset.cartAction === 'decrease') {
                    item.qty--;
                } else {
                    item.qty++;
                }

                renderCart();
            });
            document.getElementById('closeQuickView').addEventListener('click', closeQuickView);
            quickView.addEventListener('click', event => {
                if (event.target === quickView) closeQuickView();
            });
            document.addEventListener('keydown', event => {
                if (event.key === 'Escape') {
                    setCartOpen(false);
                    if (quickView.classList.contains('open')) closeQuickView();
                }
            });

            if (window.location.hash === '#searchInput') {
                search.focus();
            }

            renderCart();
        })();
    </script>
</body>
</html>
