<?php

// Checi ii la methode de requete est POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Reccuperer les données du formulaire
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Validation du formulaire
  if (empty($name)) {
    // Envoyer un message d'erreur si le nom n'est pas valide
    $error_message = "Nom requis";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Envoyer un message d'erreur si l'email n'est pas valide 
    $error_message = "adresses email invalide";
  } elseif (strlen($password) < 8) {
    //mettre un message d'erreur si la longueur du mot de passe est inférieur à 8 caratères
    $error_message = "PLe mot de passe doit contenir plus de 8 caractères";
  } else {
    // envoyer un message de succes 
    $success_message = "Formulaire envoyé avec succès!";
  }
}

?>
<!-- HFormulaire utilisateur -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<input type="text" id="name" name="name" placeholder="Nom" required >
<input type="email" id="email" name="email" placeholder="Adresse Email" required>
<input type="password" id="password" name="password" placeholder="Mot de passe" required>
  <!-- Submit button -->
  <input type="submit" value="Submit">
</form>
<!-- Display error message if any -->
<?php if (isset($error_message)): ?>
  <p style='color:red;'>Error: <?php echo $error_message; ?></p>
<?php endif; ?>
<!-- Display success message if any -->
<?php if (isset($success_message)): ?>
  <p style='color:green;'><?php echo $success_message; ?></p>
<?php endif; ?>