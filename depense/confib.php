<?php include('controller/connexion.inc.php');
$reef=$_GET['ref'];
$req=$connexion->query("DELETE FROM depense where ref=$reef");
$req=$connexion->query("DELETE FROM relation where refdepense=$reef");
header('location:./search.php'); ?>