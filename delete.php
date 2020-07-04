<?php
require "config.php";
session_start();
$user = $manager->get($_SESSION['user']);

$user = new User(array('user'=>$_SESSION['user']));
$manager->delete($user);
$success3 = true;
if($success3){
    echo '<META http-equiv="refresh" content="1; URL=index.php"> ';
}
