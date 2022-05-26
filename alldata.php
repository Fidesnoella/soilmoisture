<?php

require_once('config.php');
require_once('connection.php');
require_once('SoilModal.php');

$sm = new SoilModal();
$allRecords = $sm->search($_GET['searchq']);
echo json_encode($allRecords);


?>