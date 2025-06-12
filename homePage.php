<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="style.css?v=2" />
    <link rel="icon" href="img/MW_logo.png" type="image/png"> 
 
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <title>Accueil</title>
</head>
<body>
    <?php include("includes/header.php") ?>
    <div class="middle">
        <h1 class="title">
            <span style="--i:0">J</span>
            <span style="--i:1">O</span>
            <span style="--i:2">K</span>
            <span style="--i:3">'</span>
            <span style="--i:4">H</span>
            <span style="--i:5">A</span>
            <span style="--i:6">I</span>
            <span style="--i:7">R</span>
        </h1>
        <h2>Bienvenue sur notre site</h2>
        <div class="link">
            <a href="services.php">Nos Services</a>
            <a href="reservation.php">Réserver</a>
        </div>
        <div class="presentation"><p>Voici quelques présentations de nos chefs d'oeuvres</p></div>
        <div class="hover-carousel">
            <div class="carousel-items">
            <div class="carousel-item">
                <img src="https://placehold.co/600x350" alt="Réalisation 1">
                <div class="overlay">
                <p>Coupe - 15€</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://placehold.co/600x350" alt="Réalisation 2">
                <div class="overlay">
                <p>Barbe + Coupe - 20€</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://placehold.co/600x350" alt="Réalisation 3">
                <div class="overlay">
                <p>Coupe + Soin - 30€</p>
                </div>
            </div>
            </div>
            <a href="#">Voir plus de photos ></a>
        </div>
    </div>
    <?php include("includes/footer.php") ?>
</body>