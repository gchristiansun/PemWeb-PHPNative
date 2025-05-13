<?php
// Dummy data produk
$products = [
    [
        'name' => 'Sytherine',
        'description' => 'Stylish cafe chair',
        'price' => 'Rp 2.500.000',
        'image' => 'image1.jpg',
        'badge' => '-30%'
    ],
    [
        'name' => 'Leviosa',
        'description' => 'Stylish cafe chair',
        'price' => 'Rp 2.500.000',
        'image' => 'image2.jpg',
        'badge' => ''
    ],
    [
        'name' => 'Lolito',
        'description' => 'Luxury big sofa',
        'price' => 'Rp 7.000.000',
        'image' => 'image3.jpg',
        'badge' => '-20%'
    ],
    [
        'name' => 'Respira',
        'description' => 'Outdoor bar table and stool',
        'price' => 'Rp 500.000',
        'image' => 'image4.jpg',
        'badge' => 'New'
    ],
    [
        'name' => 'Grifo',
        'description' => 'Night lamp',
        'price' => 'Rp 1.500.000',
        'image' => 'image5.jpg',
        'badge' => ''
    ],
    [
        'name' => 'Muggo',
        'description' => 'Small mug',
        'price' => 'Rp 150.000',
        'image' => 'image6.jpg',
        'badge' => ''
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Product Cards</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .card {
            position: relative;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease;
        }
        .card:hover {
            transform: scale(1.02);
        }
        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .card .badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: red;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
        }
        .card h3 {
            margin: 15px;
            font-size: 18px;
        }
        .card p {
            margin: 0 15px 15px;
            color: gray;
        }
    </style>
</head>
<body>

<div class="grid">
    <?php foreach ($products as $product): ?>
        <div class="card">
            <?php if ($product['badge']): ?>
                <div class="badge"> <?= $product['badge'] ?> </div>
            <?php endif; ?>
            <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
            <h3><?= $product['name'] ?></h3>
            <p><?= $product['description'] ?></p>
            <p><strong><?= $product['price'] ?></strong></p>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>
