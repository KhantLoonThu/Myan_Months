
<?php
//  This page is for ajax data sending with post method
session_start();
$id = $_POST['id'];
$_SESSION['id'] = $id;
echo "Success";
?>