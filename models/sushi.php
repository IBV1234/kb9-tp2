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

function getCategoryNameBySushiIdCategory(PDO $pdo, $idCategory){
    $sql = 'SELECT C.name from categories C inner join items I on C.id = I.idCategory where C.id=:idCategory;';

    try{
    $stm = $pdo->prepare($sql);

    $stm->bindValue('idCategory',$idCategory,PDO::PARAM_INT);

    $stm ->execute();

    $result = $stm ->fetch(PDO::FETCH_ASSOC);

    return $result['name'];

    }catch(Exception $ex){
        throw new PDOException($ex->getMessage(),$ex->getCode());
    }
}
