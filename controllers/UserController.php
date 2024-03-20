<?php

function UserDetail($id){
    $user = Get_User_By_Id($id);
    
    require_once PATH_VIEW . 'users/detail.php';
}

?>