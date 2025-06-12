<?php  
include("includes/user.php");
include("includes/bdd.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css?v=3" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <title>Mon compte - Jok'hair</title>
</head>
<body>
  <?php include("includes/header.php") ?>

  <main class="lux-wrapper">
    <section class="lux-form-container">
      <h1 class="lux-title">Mon espace personnel</h1>

      <form class="lux-form" method="post">
        <div class="lux-field">
          <label for="name">Nom</label>
          <input type="text" id="name" name="name" placeholder="Votre nom">
        </div>

        <div class="lux-field">
          <label for="firstName">Prénom</label>
          <input type="text" id="firstName" name="firstName" placeholder="Votre prénom">
        </div>

        <div class="lux-field">
          <label for="email">Adresse email</label>
          <input type="email" id="email" name="email" placeholder="exemple@domaine.com">
        </div>

        <div class="lux-field">
          <label for="password">Mot de passe</label>
          <input type="password" id="password" name="password" placeholder="••••••••">
        </div>

        <button type="submit" class="lux-submit">Mettre à jour</button>
      </form>
    </section>
  </main>
  <?php include("includes/footer.php") ?>
</body>
</html>
