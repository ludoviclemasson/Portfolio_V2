<?php 

    spl_autoload_register(); 

    $controller = new Controller();
    // si on n'a pas de paramètre dans l'URL par defaut c'est l'accueil.  
    if (empty($_GET['page'])){
        $controller->acceuil();
    }
    elseif($_GET['page'] == 'cgu'){
        $controller->cgu();
    }
    elseif($_GET['page'] == 'mecontacter'){
        $controller->mecontacter();
    }
    elseif($_GET['page'] == 'cursus'){
        $controller->cursus();
    }
    elseif($_GET['page'] == 'portfolio'){
        $controller->portfolio();
    }
    // si la page n'est pas trouvé
    else {
        $controller->fourofour();
    }
?>

