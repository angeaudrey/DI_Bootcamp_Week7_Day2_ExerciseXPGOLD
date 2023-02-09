<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Sum Of Numbers</title>
</head>

<body>
    <!-- Creer un formulaire avec une methode POST pour la soumission -->
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <input type="text" id="numero1" name="numero1" placeholder="Numero 1">
    <input type="text" id="num2ero" name="numero2" placeholder="Numero 2">
    <input type="submit" value="Additionner">
  </form>

  <!-- code PHP pour ajouter les deux nombres -->
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Reccuperation des données provenant du formulaire
      $nombre1 = $_POST["numero1"];
      $nombre2 = $_POST["numero2"];

      // Addition des deux nombres
      $resultat = $nombre1 + $nombre2;

      if (isset($resultat)) {
        echo "<h3> Resultat : $resultat </h3>";
      }
    }
  ?>
  
</body>

</html>