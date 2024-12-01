<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document_PHP</title>
    
    <style>
        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
        }

        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            width: 30%;
            padding: 10px 0;
            border: 1px solid black;
            border-radius: 10px;
            align-items: center;
            justify-content: start;
            display: flex;
            flex-direction: column;
        }
        hr {
            width: 300px;
            margin: 10px 0;
        }
        form h2 {
            text-transform: capitalize;
        }
        form .info {
            width: 100%;
            display: flex;
            flex-direction: column;
            padding: 5px 0;
        }
    </style>
</head>
<body>
    <form action="neutre.php" method="post" enctype="multipart/form-data">
        <h2>un formulaire</h2>pour accéder à l'autre page
        <hr>
        <div class="info">
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" placeholder="Votre nom">
            </div>
            <div>
                <label for="passwd">Mot de passe</label>
                <input type="password" name="passwd" id="passwd" placeholder="Simple mot de passe">
            </div>
            <div>
                <p>Mettre un fichier ici si vous voulez :</p>
                <input type="file" name="monfichier" id="fichier">
            </div>
        </div>
        <input type="submit" value="Envoyer">
    </form>
    <!-- <a href="neutre.php?nom=anarana&prenom=fanampiny">passer dans l'autre page</a> -->
    
</body>
</html>