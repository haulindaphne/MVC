<?php 

    if($page=='home.php') {
        //echo "home";
        //require_once('views/presentation.php');
        //require_once('views/stock.php');
        //require_once('views/contact.php');
        }
        elseif ($page=='contact.php') {
            require_once('views/header.php');
            require_once('views/contact.php');
            require_once('views/footer.php');
        }
        elseif ($page=='stock.php') {
            require_once('views/header.php');
            require_once('views/stock.php');
            require_once('views/catalogue.php');
            require_once('views/footer.php');
        }
        elseif ($page=='views/presentation.php') {
            require_once('views/header.php');
            require_once('views/presentation.php');
            require_once('views/footer.php');
        }
        else {
            require_once('views/home.php');
        }

?>