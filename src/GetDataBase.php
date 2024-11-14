<?php
function GetDataBase(array $dataConfig,array $dbParams){

    try {
        return new PDO("mysql:host=".$dataConfig['hostname'].";dbname=".$dataConfig['database'],
    $dataConfig['username'],
    $dataConfig['password'],
    $dbParams);
        
    }catch(Exception $ex){
        throw new Exception($ex->getMessage(),$ex->getCode());
    }
}