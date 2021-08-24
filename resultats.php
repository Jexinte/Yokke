<?php
include('php/connexion.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
   
    <link rel="icon" type="image/jpg" href="images/logo.jpg" />
    <link type="text/css" rel="stylesheet" href="css/resultats.css">

    <title>Yokke</title>
</head>
<body>
<div id="blocpage">

<header>
    
    <div id="container-navigation">
        
        <nav>
            
            <a href="accueil.php">Accueil</a>
            <a href="accueil.php"><img id="logo" src="images/logo.jpg" height="90" width="90"alt="Logo"></a>
            <a href="resultats.php">Résultats</a>
            
        </nav>
        
    </div>
    
</header>


<div id="container-banner">
    
    <img src="images/banniere_resultats.jpg" alt="">

</div>

<div id="resultats">
<button id="btn-curl_debout"><a href="#curl">Curl debout</a></button>

<script>
$(document).ready(function(){
    $("#btn-curl_debout").click(function(){
        $("#curl").slideDown("slow");
    });
});
</script> 

    <?php
    include('php/connexion.php');
    /*$recuperation_de_donnees = $bdd->query('SELECT SUM(Nombre_de_repetitions) as sum_score FROM curl_debout');*/
    $recuperation_de_donnees = $bdd->query("SELECT Pseudo,Nom_exercice,Nombre_de_serie,Nombre_de_repetitions,DATE_FORMAT(Date_de_creation,'%d/%m/%Y à %Hh%i') AS Date_de_creation
    FROM curl_debout");
    ?>
    <table id="curl">

        <thead>
            
            <th>Pseudo</th>
            <th>Nom_exercice</th>
            <th>Nombre_de_serie</th>
            <th>Nombre_de_repetitions</th>
            <th>Date_de_Réalisation</th>

        </thead>

    
        <tbody>
<?
while($donnees = $recuperation_de_donnees->fetch()){
    ?>
            <tr>
                <td><?php echo $donnees['Pseudo'];?></td>
                <td><?php echo $donnees['Nom_exercice'];?></td>
                <td><?php echo $donnees['Nombre_de_serie'];?></td>
                <td><?php echo $donnees['Nombre_de_repetitions'];?></td>
                <td><?php echo $donnees['Date_de_creation'];?></td>
                <?
                /* Fin de boucle */
            }
            ?>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>