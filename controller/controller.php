<?php 
    if($page == 'home') {
        echo "home";
        require('views/presentation.php');
        require('views/stock.php');
        require('views/contact.php');
        }
        elseif ($page == 'contact') {
            require('views/header.php');
            require('views/contact.php');
            require('views/footer.php');
        }
        elseif ($page == 'stock') {
            require('views/header.php');
            require('views/stock.php');
            require('views/catalogue.php');
            require('views/footer.php');
        }
        elseif ($page == 'presentation') {
            require('views/header.php');
            require('views/presentation.php');
            require('views/footer.php');
        }

?>