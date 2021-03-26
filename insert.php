<?php

include_once '../PHP/connectDB.php';

if(isset($_POST['insert'])){

  // récupérer les valeurs 
  $nom = $_POST['nom'];
  $race = $_POST['race'];

  // Requête mysql pour insérer des données
  $sql = "INSERT INTO `chien`(`nom`, `race`) VALUES (:nom,:race)";

  $res = $bdd->prepare($sql);
  $exec = $res->execute(array(":nom"=>$nom,":race"=>$race));
  // vérifier si la requête d'insertion a réussi
  if($exec){
    header('Location: ../PHP/displayDogs.php');
  }else{
    echo "Échec de l'opération d'insertion";
  }
}
?>