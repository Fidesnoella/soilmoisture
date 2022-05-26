<?php
require_once('config.php');
require_once('connection.php');
require_once('SoilModal.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if(isset($_POST['soil_type'], $_POST['moisture'])){
    $sm = new SoilModal($_POST['soil_type'], $_POST['moisture']);
    $sm->save();
}

?>



