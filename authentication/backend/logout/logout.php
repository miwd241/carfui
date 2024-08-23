<?php
session_start();


//header('location:../../authentication/login.php');

session_unset();

header('location:../../authentication/login.php');
?>