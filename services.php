<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css?v=2" />
    <title>Services - Jok'hair</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
</head>
<body>
    <div class="container">
        <?php include("includes/header.php") ?>
        <section class="carousel-section">
        <h2 class="carousel-heading">Nos réalisations</h2>
            <div class="carousel-wrapper">
                <div class="carousel-track" id="carouselTrack">
                <div class="carousel-slide"><img src="https://placehold.co/600x350" alt="Réalisation 1"></div>
                <div class="carousel-slide"><img src="https://placehold.co/600x350" alt="Réalisation 2"></div>
                <div class="carousel-slide"><img src="https://placehold.co/600x350" alt="Réalisation 3"></div>
                <div class="carousel-slide"><img src="https://placehold.co/600x350" alt="Réalisation 3"></div>
                </div>
                <button class="carousel-btn prev" id="prevBtn">‹</button>
                <button class="carousel-btn next" id="nextBtn">›</button>
            </div>
            <div class="carousel-dots" id="carouselDots"></div>
        </section>
        <a href="#contact" class="luxury-button"><span>Prendre rendez-vous</span></a>
        <?php include("includes/footer.php") ?>
    </div>
    <script src="script.js"></script>
</body>