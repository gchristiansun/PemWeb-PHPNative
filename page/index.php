<?php
// Dummy data produk
$products = [
    [
        'name' => 'Sytherine',
        'description' => 'Stylish cafe chair',
        'price' => 'Rp 2.500.000',
        'image' => '../img/image2.png',
        'badge' => '-30%'
    ],
    [
        'name' => 'Leviosa',
        'description' => 'Stylish cafe chair',
        'price' => 'Rp 2.500.000',
        'image' => '../img/image2.png',
        'badge' => ''
    ],
    [
        'name' => 'Lolito',
        'description' => 'Luxury big sofa',
        'price' => 'Rp 7.000.000',
        'image' => '../img/image2.png',
        'badge' => '-20%'
    ],
    [
        'name' => 'Respira',
        'description' => 'Outdoor bar table',
        'price' => 'Rp 500.000',
        'image' => '../img/image2.png',
        'badge' => 'New'
    ],
    [
        'name' => 'Grifo',
        'description' => 'Night lamp',
        'price' => 'Rp 1.500.000',
        'image' => '../img/image2.png',
        'badge' => ''
    ],
    [
        'name' => 'Muggo',
        'description' => 'Small mug',
        'price' => 'Rp 150.000',
        'image' => '../img/image2.png',
        'badge' => ''
    ],
    [
        'name' => 'Muggo',
        'description' => 'Small mug',
        'price' => 'Rp 150.000',
        'image' => '../img/image2.png',
        'badge' => ''
    ],
    [
        'name' => 'Muggo',
        'description' => 'Small mug',
        'price' => 'Rp 150.000',
        'image' => '../img/image2.png',
        'badge' => ''
    ],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Beranda</title>
  <link rel="stylesheet" href="../style/style.css">
  <link rel="stylesheet" href="../style/popup.css">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins&display=swap" rel="stylesheet">
  <script src="../script/script.js" defer></script>
</head>
<body>
  <!-- Header -->
  <header class="navbar">
    <div class="container">
      <!-- Logo -->
      <div class="logo">
        <img src="../img/logo.png" alt="logo">
        <span class="text-logo">Furniro</span>
      </div>

      <!-- Navigation -->
      <nav class="nav-links">
        <a href="#">Home</a>
        <a href="#">Shop</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
      </nav>

      <!-- Icon -->
      <div class="icons">
        <span class="material-symbols-outlined">
          person_alert
        </span>
        <span class="material-symbols-outlined">
          search
        </span>
        <span class="material-symbols-outlined">
          favorite
        </span>
        <span class="material-symbols-outlined">
          shopping_cart
        </span>
      </div>
    </div>
  </header>

  <!-- Main content -->
  <main>
    <!-- Hero Section -->
    <div class="container-banner">
      <div class="box">
        <span>New Arrival</span>
        <h1>
          Dicover Our <br/>New Collection
        </h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis</p>

        <button>
          BUY NOW
        </button>
      </div>
    </div>

    <!-- Section 2: title -->
    <section>
      <h1>Browse The Range</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </section>

    <!-- Section 3: furtniture image -->
    <section>
      <div class="container-image">
        <img src="../img/image4.png" alt="">
        <h3>Dining</h3>
      </div>
      <div class="container-image">
        <img src="../img/image2.png" alt="">
        <h3>Living</h3>
      </div>
      <div class="container-image">
        <img src="../img/image1.png" alt="">
        <h3>Bedroom</h3>
      </div>
    </section>

    <!-- Section 4: title -->
    <section>
      <h1>Our Products</h1>
    </section>

    <!-- Section 5: Card products -->
    <section>
      <div class="grid">
        <?php foreach ($products as $product): ?>
          <a href="?popup=true" onclick="return openPopup(event)">
            <div class="card">
                <?php if ($product['badge']): ?>
                    <div class="badge"> <?= $product['badge'] ?> </div>
                <?php endif; ?>
                <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
                <h3><?= $product['name'] ?></h3>
                <p><?= $product['description'] ?></p>
                <p><strong><?= $product['price'] ?></strong></p>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- Show popup -->
    <div class="popup-overlay" id="popupOverlay">
        <div class="popup">
            <iframe src="" id="popupFrame"></iframe>
        </div>
    </div>
  </main>

  <!-- Footer -->
  <footer>
    <div class="footer-grid">
        <div>
            <h2>Funiro.</h2>
            <p>400 University Drive Suite 200 Coral Gables, <br>FL 33134 USA</p>
        </div>

        <div>
            <h3>Links</h3>
            <ul>
                <li>Home</li>
                <li>Shop</li>
                <li>About</li>
                <li>Contact</li>
            </ul>
        </div>

        <div>
            <h3>Help</h3>
            <ul>
                <li>Payment Options</li>
                <li>Returns</li>
                <li>Privacy Policies</li>
            </ul>
        </div>

        <div class="newsletter">
            <h3>Newsletter</h3>
            <input type="text" placeholder="Enter Your Email Address">
            <button>SUBSCRIBE</button>
        </div>
    </div>
    <div class="footer-bottom">
        2023 Funiro. All rights reserved
    </div>
  </footer>
</body>
</html>
