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

?>