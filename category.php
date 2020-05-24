<?php 
require_once("includes/header.php");

if(!isset($_GET["id"])) {
    ErrorMessage::show("No id passed into page");
}

$preview = new PreviewProvider($con, $userLoggedIn);
echo $preview->createCategoryPreviewVideo($_GET["id"]);

$containers = new CategoryContainers($con, $userLoggedIn);
echo $containers->showCategories($_GET["id"]);
?>