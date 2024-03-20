<?php

function Get_All_User(){
    try{
        $sql = 'SELECT * FROM users';

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    }catch(\Exception $e){
        debug($e);
    }
}

function Get_User_By_Id($id){
    try{
        $sql = 'SELECT * FROM users WHERE id = :id';

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        return $stmt->fetch();
    }catch(\Exception $e){
        debug($e);
    }
}

?>