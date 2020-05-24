<?php 
ob_start(); // Turn on output buffering
session_start();

date_default_timezone_set("Asia/Ho_Chi_Minh");

try {
    $con = new PDO("mysql:dbname=netflix;host=localhost:3306", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch(PDOException $e) {
    exit("Connection failed: " . $e->getMessage());
}
?>