<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css?v=2" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <title>Modifier mot de passe - Jok'hair</title>
</head>
<body>
    <div class="container">
        <div class="resetPswd">
            <div class="form">

            <?php if (!empty($general_error)) : ?>
                <div class="error"><?= htmlspecialchars($general_error) ?></div>
            <?php endif; ?>

            <form method="post" action="">
                <div class="flex-column">
                    <label for="email">Adresse email</label>
                    <div class="inputForm">
                        <input class="input" type="email" name="email" id="email" value="<?= htmlspecialchars($email ?? '') ?>" required>
                    </div>
                    <?php if (!empty($email_error)) : ?>
                        <div class="error"><?= htmlspecialchars($email_error) ?></div>
                    <?php endif; ?>
                </div>

                <div class="flex-column">
                    <label for="password">Mot de passe</label>
                    <div class="inputForm">
                        <input class="input" type="password" name="password" id="password" required>
                    </div>
                    <div class="forgot" style="justify-content: center;">
                        <p>Mot de passe oublié ?</p>
                        <a href="#">Cliquez ici</a>
                    </div>
                    <?php if (!empty($password_error)) : ?>
                        <div class="error"><?= htmlspecialchars($password_error) ?></div>
                    <?php endif; ?>
                </div>

                <button type="submit" class="button-submit">Connexion</button>
                <div class="newAccount">
                    <p>Vous n'avez pas de compte ?</p>
                    <a href="newAccount.php">Créez en un</a>
                </div>
            </form>
        </div>
    </div>
</body>