<?php

require "src/GetDataBase.php";
require "models/bookmark.php";
require "models/sushi.php";

sessionStart();

$dbConfig = CONFIGURATIONS['database'];
$pdo = GetDataBase($dbConfig,DB_PARAMS);

$Sushis = GetAllSushi($pdo);
$Catégories = GetAllCatégories($pdo);

if(!isset($_SESSION["sushi"])){
    $_SESSION["sushi"] = [];
}

$id = $_GET['id'] ?? "";

//DeleteSessionSushi();

if (!empty($Sushis ) && $id!== "") {

    addSushi($Sushis,$id);   
}

$NombreSushsiPanier = count($_SESSION['sushi']);


//routeToController($PanierLink);

require "views/index.php";