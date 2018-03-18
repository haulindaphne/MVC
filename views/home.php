<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/headfoot.css">
</head>
<body>
    <div class="home">
        <div class="blackBand"></div>

        <header>
            <div class="homeCard">
    <!--insérer la carte blanche avec logo -->
            <?php
                require 'card.php';
            ?>
            </div>
        </header>
    
<!-- le stock -->
    <?php
        require 'stockHome.php';
    ?>
        <h2>DERNIERS OBJETS</h2>

<!--fouiller le stock 2 -->
    <?php
        require 'fouille.php';
    ?>
<!-- catalogue -->
    <?php
        require 'catalogue.php';
    ?>

    <div class="home">
    <?php 
        require 'citation.php'; 
    ?>
<!-- la citation -->
     </div>
</div>


    <footer>
        <?php
            require 'footer.php';
        ?>    
    </footer>
</body>
</html>