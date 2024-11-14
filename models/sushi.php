<?php
  function GetAllSushi(PDO $pdo) {
    try{
        $stm = $pdo->prepare('SELECT id,name,description,price,image,idCategory from items');
        $stm ->execute();
    return $stm ->fetchAll(PDO::FETCH_ASSOC);

    }catch(Exception $ex){
        throw new PDOException($ex->getMessage(),$ex->getCode());
    }
}

function GetAllCatégories(PDO $pdo) {
    try{
        $stm = $pdo->prepare('SELECT id,name from categories');
        $stm ->execute();
    return $stm ->fetchAll(PDO::FETCH_ASSOC);

    }catch(Exception $ex){
        throw new PDOException($ex->getMessage(),$ex->getCode());
    }
}
function getSushiById(PDO $pdo,$id){
    $sql ='SELECT id,name,description,price,image,idCategory from items where id=:id';
    try{
        $stm = $pdo->prepare($sql);

        $stm->bindValue('id', $id, PDO::PARAM_INT);

        $stm ->execute();

    return $stm ->fetchAll(PDO::FETCH_ASSOC);

    }catch(Exception $ex){
        throw new PDOException($ex->getMessage(),$ex->getCode());
    }
}
