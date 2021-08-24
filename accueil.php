<?php
include('php/connexion.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="images/logo.jpg" />
    <link rel="stylesheet" href="css/accueil.css">
    <title>Yokke</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>

    <script>
        
      
$(document).ready(function()
{
        $("#btn1").click(function(){
            $("#premierformulaire").show();
        });

     
        $("#btn2").click(function(){
          $("#secondformulaire").show();
        
        
        });

        $("#btn3").click(function(){
          $("#troisiemeformulaire").show();
        
        
        });

        $("#btn4").click(function(){
          $("#quatrièmeformulaire").show();
        
        
        });
});
        </script>
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
            
            <img src="images/banniere.jpg" alt="">

        </div>
        
        
        <div id="container-galerie">
            
                    <div class="box">
                        <button id="btn1"><a href="#premierformulaire">Curl debout</a></button>
                        <img src="images/curl_debout.jpg"  alt="">
                    </div>
                    
                    <div class="box">
                        <button id="btn2"><a href="#secondformulaire">Développé couché</a></button>
                        <img src="images/developpe_couché.jpg"  alt="">
                    </div>
                    
                    <div class="box">
                        <button id="btn3"><a href="#troisiemeformulaire">Développement des épaules</a></button>
                        <img src="images/shoulders_development.jpg"  alt="">
                    </div>
                    
                    <div class="box">
                        <button id="btn4"><a href="#quatrièmeformulaire">Développement des triceps</a></button>
                        <img src="images/triceps_development.jpg"  alt="">
                    </div>
            
                </div>
                
                <!-- Formulaire -->
        <?php
        
                include('formulaires/formulaire_curl_debout.php');
                include('formulaires/formulaire_développé_couché.php');
                include('formulaires/formulaire_développement_épaules.php');
                include('formulaires/formulaire_développement_des_triceps.php');
        
        ?>

        <div id="footer">
                    
                    <footer>
                        <p>©2021 Yokke,INC. Tous droits réservés</p>
                        
                    </footer>
        </div>

    </div>
        
    </body>
</html>