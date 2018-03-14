<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!--insérer la carte blanche avec logo -->
    <?php
        require 'card.php';
    ?>
    
    <h1>LE STOCK</h1>
    <!--fouiller le stock -->
    <?php
        require 'fouille.php';
    ?>

    <h2>DERNIERS OBJETS</h2>
<!-- le stock -->
    <?php
        require 'stock.php';
    ?>
<!--fouiller le stock 2 -->
    <?php
        require 'fouille.php';
    ?>
<!-- catalogue -->
    <?php
        require 'catalogue.php';
    ?>
<!-- la citation -->
    <div class="quote-container">
        <p>"L'ennui naquit un jour de l'uniformité"</p>
        <p class="author">- Antoine Houdar de la Motte -</p>
    </div>
    
    <footer>
        <?php
            require 'footer.php';
        ?>    
    </footer>
</body>
</html>