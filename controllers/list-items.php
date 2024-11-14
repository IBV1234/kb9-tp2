<?php
require "src/GetDataBase.php";
require "models/bookmark.php";
require "models/sushi.php";

$dbConfig = CONFIGURATIONS['database'];
$pdo = GetDataBase($dbConfig,DB_PARAMS);

$Sushis = GetAllSushi($pdo);

require "views/list-items.php";