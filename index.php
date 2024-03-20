<?php

// Require file trong commons
require_once './commons/env.php';
require_once './commons/helper.php';
require_once './commons/connect-db.php';


// Require file trong controllers và models
require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);

// Điều hướng
$act = $_GET['act'] ?? '/';

match($act){
    '/' => Home_Index(),
    'user-detail' => UserDetail($_GET['id']),
};

require_once './commons/disconnect-db.php';

?>