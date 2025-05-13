<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/popup.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins&display=swap" rel="stylesheet">
    <script src="../script/script.js" defer></script>
    <title>Document</title>
</head>
<body>
    <?php if (isset($_GET['popup']) && $_GET['popup'] == 'true'): ?>
        <button class="close-btn" onclick="parent.closePopup()">
            <span class="material-symbols-outlined">
                close
            </span>
        </button>
        <div class="container-popup">
            <h2>lorem ipsum</h2>
            <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
            </P>
            <h3>IDR 150.000</h3>
        </div>
        <span class="material-symbols-outlined icon">
            add_shopping_cart
        </span>
    <?php endif; ?>
</body>
</html>