<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$param = key($_REQUEST);
require_once('controllers/uploadController.php');


if ($param =="upload") {
    $uploadForm = new uploadController();
}else{
    echo "<h1>Bienvenue</h1>";
}


