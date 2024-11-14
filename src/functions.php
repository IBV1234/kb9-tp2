<?php
function uriPath() : string{

    $url = $_SERVER['REQUEST_URI'];

    $urlParts = parse_url($url);
    
    return $urlParts['path'];

}


function routeToController(string $path) : void {

    $validRouteController = false;

    if (array_key_exists($path, ROUTES)) {

        $filePath = 'controllers/' . ROUTES[$path];

        if ( file_exists($filePath) ) {

            $validRouteController = true;
            require $filePath;
            
        }

    } 

    if (! $validRouteController) {

        require "views/404.php";
        
    }

}

function urlActive(string|array $paths, string $class) : string
{

    $path = uriPath();

    if ( is_array($paths) && in_array($path, $paths) ) {
        return $class;
    } 
    
    if ( $path === $paths ) {
        return $class;
    }

    return "";

}

function redirect(string $path) : void 
{
    header('Location: ' . $path);
    exit;

}

function isPost() {
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function validateBookmarkToggle(bool|int $id) {

    if (isPost() && is_integer($id)) {
    
        bookmarkToggle($_POST['id']);
    
    }

}

// function qui affihe un alert

function alert($message){
    echo "<script type='text/javascript'>alert('$message');</script>";
    return false;
}

// cette fonction :addSushi() ajoute 1 sushi unique dans la session et affiche le nombre de sushi différent à côté de l'icône 
// du panier .Il incémente le nonmbre de fois cliquer dans la clé NbrSushi
function addSushi( array $Sushis,$id): void{
    $cpt = 0;

    if (!in_array($id, array_column($_SESSION['sushi'], 'id'))) {
        $_SESSION['sushi'][$id] = [
            'id'=>$id,
            'NbrSushi'=>$cpt 
        ];        
    }
    else{
        
        foreach ($_SESSION['sushi']as &$ids) {
            if ($ids['id'] == $id) {
               
              $ids['NbrSushi']++;
              break;
            }
        }
    }
                          

}
     

function DeleteSessionSushi(){ // cette fonction détrui la session sushi afin de faire de teste lorsqu'on recommancer à zéro
    if (isset($_SESSION['sushi']) && !empty($_SESSION['sushi'])) {
  unset($_SESSION['sushi']);
}
}
