<?php

include("includes/bdd.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST['email'] ?? '');
    $pass = trim($_POST['password'] ?? '');
    $confirm = trim($_POST['confirm_password'] ?? '');

    if (empty($email) || empty($pass) || empty($confirm)) {
        $error = "Veuillez remplir tous les champs.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Adresse email invalide.";
    } elseif ($pass !== $confirm) {
        $error = "Les mots de passe ne correspondent pas.";
    } else {
        $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO users (firstname, name, email, password) VALUES ('', '', ?, ?)");
        $stmt->bind_param("ss", $email, $hashed_password);

        if ($stmt->execute()) {
            header("Location: homePage.php");
            exit();
        } else {
            $error = "Erreur lors de l'inscription : " . $conn->error;
        }
        $stmt->close();
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
    <title>Inscription - Jok'hair</title>
</head>
<body>
    <div class="container3">
        <div class="leftSign">
            <div class="black"></div>
            <img src="img/salon.jpg" class="signIn" alt="">
        </div>
        <a href="login.php"><img src="img/icons8-flèche-100.png" alt="" class="goBack"></a>
        <div class="right">
            <form class="form" method="post" action="">
                <h1>Create your account</h1>

                <?php if (!empty($error)) : ?>
                    <div class="error" style="color: red;"><?= htmlspecialchars($error) ?></div>
                <?php endif; ?>
                <?php if (!empty($success)) : ?>
                    <div class="success" style="color: green;"><?= htmlspecialchars($success) ?></div>
                <?php endif; ?>

                <div class="flex-column">
                    <label>Email</label>
                </div>
                <div class="inputForm">
                    <input type="text" name="email" class="input" placeholder="Enter your Email" required>
                </div>

                <div class="flex-column">
                    <label>Password</label>
                </div>
                <div class="inputForm">
                    <input type="password" name="password" class="input" placeholder="Enter your Password" required>
                </div>

                <div class="flex-column">
                    <label>Confirm password</label>
                </div>
                <div class="inputForm">
                    <input type="password" name="confirm_password" class="input" placeholder="Confirm your Password" required>
                </div>

                <div class="flex-row">
                    <div>
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember me</label>
                    </div>
                </div>

                <button type="submit" class="button-submit">Sign In</button>

                <p class="p line">Or With</p>

                <div class="flex-row">
                    <button class="btn google">Google</button>
                    <button class="btn apple">Apple</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
