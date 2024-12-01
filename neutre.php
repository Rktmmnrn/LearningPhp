<?php
// commencer la session
session_start();
$_SESSION['nom'] = $_POST['nom'];
$_SESSION['mdp'] = $_POST['passwd'];
$Nom = $_SESSION['nom']; // Stocker le nom dans une variable
$mdp = $_SESSION['mdp']; // Stocker le mot de passe
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pageNeutre</title>
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
        }
    </style>
</head>
<body>
    <div style="border: 1px solid black; width: 50%; padding: 10px; border-radius: 5px; ">
        <?php
        // Vérification si le méthode est bien post
        if ($_SERVER['REQUEST_METHOD'] != 'POST' || empty ($_POST['passwd']) || empty ($_POST['nom'])) {
            echo "Veuillez remplir le formulaire précédent <br>";
            echo "<script> alert('Mot de passe et/ou nom vide...') </script>"; // Message qui empêche l'access a ce site
            // exit;
        } else {
            // condition pour voir si les valeurs dans _post sont vide ou non !
            // la superglobal '$_POST' s'affiche pas dans la bare de navigateur et plus securisé que '$_GET'
            if (!empty ($_POST['nom'])) {
                echo "Bonjour '<span style='font-weight: bold; color: blue'>".htmlspecialchars($Nom)."</span>' soyez le bienvenue sur ce site.";
                echo "<br>";
            } else {
                echo "Y a personne dans les paramètre(s)... <br>";
            }

            // information sur le fichier envoyer
            if (!empty ($_FILES['monfichier']['name'])) {
                echo "<br> Des informations sur le fichier envoyer : <br>";
                echo "Son nom : ".$_FILES['monfichier']['name'];
                echo "<br>";
                echo "Sa taille : ".$_FILES['monfichier']['size']."<br>";
                echo "L'erreur s'il y en a : ".$_FILES['monfichier']['error'];
            } else {
                echo "Aucun fichier !<br>";
            }
        }

        // print_r($_SESSION);

        ?>
    </div>
    <a href="mypage.php">revenir</a>
</body>
</html>