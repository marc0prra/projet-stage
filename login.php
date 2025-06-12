<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'includes/bdd.php';

$email = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');

$email_error = '';
$password_error = '';
$general_error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($email)) {
        $email_error = "Veuillez entrer votre adresse email.";
    }

    if (empty($password)) {
        $password_error = "Veuillez entrer votre mot de passe.";
    }

    if (empty($email_error) && empty($password_error)) {
        $sql = "SELECT id, password, role FROM users WHERE email = ?";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                $stmt->bind_result($id, $hashed_password, $role);
                $stmt->fetch();

                if (password_verify($password, $hashed_password)) {
                    $_SESSION['user_id'] = $id;
                    $_SESSION['user_role'] = $role;
                    $_SESSION['success_message'] = "Connecté avec succès !";

                    header("Location: " . ($role === 'admin' ? "homePage.php" :"homePage.php"));
                    exit();
                } else {
                    $general_error = "Mot de passe incorrect.";
                }
            } else {
                $general_error = "Aucun compte avec cette adresse email.";
            }

            $stmt->close();
        } else {
            $general_error = "Erreur lors de la préparation de la requête.";
        }
    }
}
?>

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
    <title>Connexion - Jok'hair</title>
</head>
<body>
    <div class="container3">
        <div class="leftLogin">
            <div class="black"></div>
            <img src="img/setmore-client-barber-haircut.png" alt="" class="connexion">
        </div>
        <div class="right">
            <div class="form">
                <h2 style="text-align: center; margin-bottom: 10px;">Connexion à <strong>Jok'hair</strong></h2>

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
    </div>
</body>
</html>
