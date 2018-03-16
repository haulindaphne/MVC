<?php 


    define('views', "views/"); //déclaration du dossier views
    define('controller', "controller/"); //déclaration du dossier controller

    require_once(views . 'home.php'); //
   
    $action = isset($_GET['action']) ? htmlentities($_GET['action']) : 'default';
    $controller = '';

    switch ($action) {
        case 'presentation':
            require_once(CONTROLLER . 'presentationController.php');
            $controller = new presentationContoller();
            break;
        case 'stock' :
            require_once(CONTROLLER . 'stockController.php');
            $controller = new stockController();
            break;
        case 'contact' :
            require_once(CONTROLLER . 'contactController.php');
            $controller = new contactController();
            break;

        default:
            require_once(CONTROLLER . 'homeController.php');
            $controller = new homeController();
            break;
    }
    $controller->run();

    






    /*
    if(isset($action)){ //si les conditions sont remplies alors affichage
        if ($action == "presentation") {//si on action sur presentation
            //on va chercher le controller presenation
            require controller."presentation.php";
            $page = new presentation();

        }
        elseif ($action == "stock") {//si on action sur stock
            //on va chercher le controller stock
            require controller."stock.php";
            $page = new stock();

        }
        elseif ($action == "contact") {//si on action sur contact
            //on va chercher le controller contact
            require controller."contact.php";
            $page = new contact();

        }
        else {//si on ne action sur aucun des boutons
            //on appel la page d'accueil 'home'
            require controller."home.php";
            $page = new home();
        }

    }*/
    $page->run();
    require views."footer.php";







?>