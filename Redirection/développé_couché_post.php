<?php
include('../php/connexion.php');
$insertion_de_donnees = $bdd->prepare("INSERT INTO développé_couché(Pseudo,Nom_exercice,
Nombre_de_serie,Nombre_de_repetitions,Date_de_creation) VALUES(?,?,?,?,?)");
$insertion_de_donnees->execute(array($_POST['pseudo'],$_POST['nom_exercice'],$_POST['nombre_de_serie'],
$_POST['nombre_de_repetitions'],$_POST['date_de_creation']));
header('Location:../accueil.php');

?>