<?php
session_start();
include 'BDD.php';
unset($_SESSION['botique']);
unset($_SESSION['client']);
header("location: ../index.php");
