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
    <link href="./css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/acceuil.css">
    <title>pageOutput</title>
</head>

<body>
    <header>
        <div>logo</div>
        <nav>
            <a href="#">Here is the nav Bar if we need that things</a>
        </nav>
        <div>search</div>
    </header>

    <main class="content">
        <aside class="flex flex-col items-center justify-center">
            <div>here is the aside bar</div>
            <a href="index.php">revenir</a>
        </aside>
        <section class='content-user'>
            <?php
            // $bdd = new PDO('mysql:host=localhost;dbname=Client','root',''); // base de données
            
            // Vérification si le méthode est bien 'post'
            if ($_SERVER['REQUEST_METHOD'] != 'POST' || empty($_POST['passwd']) || empty($_POST['nom'])) {
                echo "
                <div class='content-empty'>
                    <h1>Erroooor, videe</h1>
                    <p>veuillez remplir le formulaire svp</p>
                    <script> alert('Mot de passe et/ou nom vide...') </script>
                </div>
                ";
                // exit;
            } else {

                // condition pour voir si les valeurs dans _post sont vide ou non !
                // la superglobal '$_POST' s'affiche pas dans la bare de navigateur et plus securisé que '$_GET'
                if (!empty($_POST['nom'])) {
                    echo "<p>Bonjour '<span style='font-weight: bold; color: blue; text-transform: uppercase'>" . htmlspecialchars($Nom) . "</span>' soyez le bienvenue sur ce site.</p>";
                    // echo "<br>";
                } else {
                    echo "<p>Y a personne dans les paramètre(s)...</p> <br>";
                }
            
                // information sur le fichier envoyer
                if (!empty($_FILES['monfichier']['name'])) {
                    echo "
                        <div class='content-fichier'>
                            <span>Information sur le fichier :</span>
                            <p>Son nom : {$_FILES['monfichier']['name']} </p>
                            <p>Sa taille : {$_FILES['monfichier']['size']} Octets</p>
                            <p>L'erreur s'il y en a : {$_FILES['monfichier']['error']}</p>
                        </div>
                    ";
                } else {
                    echo "Aucun fichier !<br>";
                }
            }

            // print_r($_SESSION);        
            ?>
        </section>
    </main>
</body>

</html>