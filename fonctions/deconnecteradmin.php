<?php
session_start();
include 'BDD.php';
// Fermer la session user et afficher l'interface connexion
unset($_SESSION['user']);
header("location: ../admin/connexion.php");
