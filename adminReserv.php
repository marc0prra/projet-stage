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
    <div class="container">
        <?php include("includes/header.php");?>
        <div class="makeRsv">
            <div class="file">
                <label for="images" class="drop-container" id="dropcontainer">
                <span class="drop-title">Drop files here</span>
                or
                <input type="file" id="images" accept="image/*" required>
                </label>
            </div>
            <div class="description">
                <label>
                    Veuillez saisir un nom de coupe.
                </label>
                <input type="text">
                <label>
                    Veuillez sasir le prix.
                </label>
                <input type="text">
                <button type="submit" class="send">Envoyer</button>
            </div>
        </div>
    </div>

    <script src="/script.js"></script>
</body>