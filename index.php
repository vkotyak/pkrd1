<?php
require_once ('Model.php');
require_once ('View.php');

$model = new Model();
$view = new View();
$task ='startPage';
$indata = [];
//print_r($_POST);
//print_r($_GET);
//print_r($_REQUEST);

if (isset($_POST['textField'])) {
    $indata['fromUser'] = filter_var ( $_POST['textField'], FILTER_SANITIZE_STRING);
    $task = 'getUserData';
}

switch ($task) {
    case 'getUserData':
        $data = $model->haveUserData( $indata['fromUser']);
        $result = $view->createResultPage($data);    
    break;
    default:
    $data = $model->startPage();
    $result = $view->createStartPage($data);    
}


$result = $view->viewPage($result);
