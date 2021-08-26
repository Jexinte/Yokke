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

    <div id="partie_curl">

    
                <button id="btn-curl_debout"><a href="#curl">Curl debout</a></button>

                <script>

                        $(document).ready(function(){
                            $("#btn-curl_debout").click(function(){
                                $("#curl").slideDown("slow");
                            });
                        });

                </script> 

                <!-- Exercices Curl debout  -->
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
    <!-- Fin Exercices Curl -->

    <!-- Exercices Développé couché -->
    <div id="partie_développé_couché">

                    <? 
                            $recuperation_de_donnees1 = $bdd->query("SELECT Pseudo,Nom_exercice,Nombre_de_serie,Nombre_de_repetitions,DATE_FORMAT(Date_de_creation,'%d/%m/%Y à %Hh%i') AS Date_de_creation
                            FROM développé_couché");
                    ?>
                            
                            <button id="btn-developpe_couche"><a href="#développé_couché">Développé couché</a></button>

                            <script>

                            $(document).ready(function(){

                                $("#btn-developpe_couche").click(function(){
                                    $("#développé_couché").slideDown("slow");
                                });

                            });

                        </script> 
                            

                            <table id="développé_couché">
                                
                                        <thead>
                                            
                                            <th>Pseudo</th>
                                            <th>Nom_exercice</th>
                                            <th>Nombre_de_serie</th>
                                            <th>Nombre_de_repetitions</th>
                                            <th>Date_de_Réalisation</th>
                                            
                                        </thead>
                                        
                                        
                                        <tbody>
                    <?
                                while($donnees = $recuperation_de_donnees1->fetch()){
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
                                            $recuperation_de_donnees1->CloseCursor();
                    ?>
                                            </tr>
                                        </tbody>
                            </table>

</div>
<!-- Fin Exercices Développé couché -->  


<!-- Exercies Développement des épaules -->
<div id="partie_développement_des_épaules">

                    <? 

                    $recuperation_de_donnees2= $bdd->query("SELECT Pseudo,Nom_exercice,Nombre_de_serie,Nombre_de_repetitions,DATE_FORMAT(Date_de_creation,'%d/%m/%Y à %Hh%i') AS Date_de_creation
                     FROM développement_des_épaules");

                     ?>
                        <button id="btn-developpement_des_epaules"><a href="#développement_des_épaules">Développement des épaules</a></button>

                        <script>

                         $(document).ready(function(){

                        $("#btn-developpement_des_epaules").click(function(){
                            $("#développement_des_épaules").slideDown("slow");
                        });
                                                     });

                         </script> 
                        

                        <table id="développement_des_épaules">
                            
                                    <thead>
                                        
                                        <th>Pseudo</th>
                                        <th>Nom_exercice</th>
                                        <th>Nombre_de_serie</th>
                                        <th>Nombre_de_repetitions</th>
                                        <th>Date_de_Réalisation</th>
                                        
                                    </thead>
                                    
                                    
                                    <tbody>
                     <?
                            while($donnees = $recuperation_de_donnees2->fetch()){
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
                                        $recuperation_de_donnees2->CloseCursor();
                    ?>
                                        </tr>
                                    </tbody>
                        </table>
</div>
<!-- Fin Exercies Développement des épaules -->


<div id="partie_développement_des_triceps">

                     <?
                         $recuperation_de_donnees3= $bdd->query("SELECT Pseudo,Nom_exercice,Nombre_de_serie,Nombre_de_repetitions,DATE_FORMAT(Date_de_creation,'%d/%m/%Y à %Hh%i') AS Date_de_creation
                        FROM développement_des_triceps");

                     ?>

                        <button id="btn-developpement_des_triceps"><a href="#développement_des_triceps">Développement des triceps</a></button>

                        <script>

                        $(document).ready(function(){

                        $("#btn-developpement_des_triceps").click(function(){
                            $("#développement_des_triceps").slideDown("slow");
                        });

                    });

                        </script> 
                        

                        <table id="développement_des_triceps">
                            
                                    <thead>
                                        
                                        <th>Pseudo</th>
                                        <th>Nom_exercice</th>
                                        <th>Nombre_de_serie</th>
                                        <th>Nombre_de_repetitions</th>
                                        <th>Date_de_Réalisation</th>
                                        
                                    </thead>
                                    
                                    
                                    <tbody>
                        <?
                            while($donnees = $recuperation_de_donnees3->fetch()){
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
                                        $recuperation_de_donnees3->CloseCursor();
                                        ?>
                                        </tr>
                                    </tbody>
                        </table>
</div>


<div id="footer">
                    
                    <footer>
                        <p>©2021 Yokke,INC. Tous droits réservés</p>
                        
                    </footer>
        </div>
</div>

</body>
</html>