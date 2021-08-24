<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('php/connexion.php');
        ?>
        <form id="secondformulaire" action="Redirection/développé_couché_post.php" method="POST">
        <fieldset>
                    <legend>Développé couché</legend>
    
                <p>
                    <label for="pseudo">Veuillez entrez votre pseudo :  </label>
                    <input type="text" name="pseudo" id="pseudo" placeholder="Uther" required>
                </p>
                
                <p>
                    <label for="nom_exercice">Veuillez saisir le nom de l'exercice effectué :  </label>
                    <input type="text" name="nom_exercice" id="nom_exercice" placeholder="Rowing" required>
                </p>
    
                <p>
                    <label for="nombre_de_serie">Veuillez saisir le nombre de série effectué : </label>
                    <input type="number" name="nombre_de_serie" id="nombre_de_serie" placeholder="80" required>
                </p>
                
    
                <p>
                    <label for="nombre_de_repetitions">Veuillez saisir le nombre de répétitions effectué : </label>
                    <input type="number" name="nombre_de_repetitions" id="nombre_de_repetitions" placeholder="80" required>
                </p>
    
                <p>
                    <label for="date_de_création">Veuillez saisir la date à laquelle les exercices ont été effectués: </label>
                    <input type="datetime-local" name="date_de_création" id="date_de_création" placeholder="80" required>
                </p>
    
                <input type="submit" id="envoyer" required>
                
            </fieldset>
            </form>
    
</body>
</html>
