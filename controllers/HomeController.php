<?php

function Home_Index(){

    $data_User = Get_All_User();
    debug($data_User);

    require_once PATH_VIEW . 'home.php';
}

?>