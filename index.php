<?php
    require "class/db.php";
    $DB = new DB();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>systeme panier</title>
</head>
<body>
    <a href="panier.php" class="link">Panier<span>8</span></a>
    <div class="list_produits">
        <?php
            $products = $DB->query('SELECT * FROM produit');
        ?>
        <?php foreach($products as $product): ?>
            <form action="" class="produit">
                <div class="image_product">
                    <img src="images/<?= $product->img ?>" alt="">
                </div>
                <div class="content">
                    <h4 class="name"><?= $product->name ?></h4>
                    <h2 class="price"><?= number_format($product->price, 2,',','') ?>€</h2>
                    <a href="#" class="id_product">Ajouter au panier</a>
                </div>
            </form>
        <?php endforeach ?>
    </div>
</body>
</html>