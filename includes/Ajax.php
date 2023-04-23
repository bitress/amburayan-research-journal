<?php

if (isset($_POST['action'])){

    $action = $_POST['action'];

    switch($action){
        case 'userLogin':
            $auth = new Authentication();
            $auth->userLogin();
            break;
        default:
            echo "Unknown action";
            break;
    }

}