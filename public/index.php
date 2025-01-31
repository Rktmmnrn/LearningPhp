<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/main.css">
  <link href="/css/styles.css" rel="stylesheet">
  <title>Document_PHP</title>
</head>

<body>
  <main class="flex flex-col items-center justify-center">
    <form action="acceuil.php" method="post" enctype="multipart/form-data" class="form">
      <div>
        <h1 class="text-3xl font-medium">Bienvenue sur mon app en PHP</h1>
        <p>"pour accéder à l'autre page"</p>
      </div>
      <div class="form-info">
        <h2>Entrer votre informations</h2>
        <div>
          <label for="nom">Nom :</label>
          <input type="text" name="nom" id="nom" placeholder="Votre nom">
        </div>
        <div>
          <label for="passwd">Mot de passe :</label>
          <input type="password" name="passwd" id="passwd" placeholder="Simple mot de passe">
        </div>
        <div>
          <label for="fonction">Fonction</label>
          <input type="text" name="fonction" id="fonction" placeholder="Fonction dans l'entreprise">
        </div>
        <div class="form-info-fichier">
          <p>Mettre un fichier ici si vous voulez :</p>
          <input type="file" name="monfichier" id="fichier">
        </div>
      </div>
      <input type="submit" value="Envoyer">
    </form>
    <!-- <a href="neutre.php?nom=anarana&prenom=fanampiny">passer dans l'autre page</a> -->
  </main>
  <script src="js/main.js"></script>
</body>

</html>

<!-- 
'composer'

minimum stability => 'stable', 'dev'

echo __DIR__;
echo __FILE__; ::autoload

namespace:: mba ts hifankahita, eviter les conflic(s)
 -->