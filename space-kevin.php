<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Kevin</title>
    <style>
        body {
            background-color: #0b0c10;
            color: #66fcf1;
            font-family: 'Orbitron', sans-serif;
            text-align: center;
            padding: 50px;
            overflow: hidden;
        }
        h1 {
            font-size: 3em;
            color: #45a29e;
            text-shadow: 0 0 10px #45a29e, 0 0 20px #66fcf1;
        }
        .content {
            max-width: 800px;
            margin: 0 auto;
            background-color: rgba(11, 12, 16, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px #66fcf1;
            position: relative;
            z-index: 10;
        }
        h2 {
            color: #c5c6c7;
            text-shadow: 0 0 5px #c5c6c7;
        }
        p {
            line-height: 1.6;
        }
        a {
            color: #66fcf1;
            text-decoration: none;
        }
        a:hover {
            text-shadow: 0 0 5px #66fcf1;
        }
        .stars, .planets {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }
        .stars div, .planets div {
            position: absolute;
            background-color: white;
            border-radius: 50%;
            opacity: 0.8;
            animation: move 20s linear infinite;
        }
        .stars div {
            width: 2px;
            height: 2px;
            background-color: #fff;
        }
        .planets div {
            width: 20px;
            height: 20px;
            background-color: #45a29e;
        }
        @keyframes move {
            from {
                transform: translateY(0);
            }
            to {
                transform: translateY(100vh);
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="stars">
        <!-- Générer plusieurs étoiles -->
        <div style="left: 10%; animation-duration: 15s;"></div>
        <div style="left: 20%; animation-duration: 20s;"></div>
        <div style="left: 30%; animation-duration: 25s;"></div>
        <div style="left: 40%; animation-duration: 30s;"></div>
        <div style="left: 50%; animation-duration: 35s;"></div>
        <div style="left: 60%; animation-duration: 40s;"></div>
        <div style="left: 70%; animation-duration: 45s;"></div>
        <div style="left: 80%; animation-duration: 50s;"></div>
        <div style="left: 90%; animation-duration: 55s;"></div>
    </div>
    <div class="planets">
        <!-- Générer plusieurs planètes -->
        <div style="left: 15%; animation-duration: 30s;"></div>
        <div style="left: 35%; animation-duration: 40s;"></div>
        <div style="left: 55%; animation-duration: 50s;"></div>
        <div style="left: 75%; animation-duration: 60s;"></div>
    </div>
    <div class="content">
        <h1>Space Kevin</h1>
        <h2>Les Kevin dans l'Univers</h2>
        <p>Explorez les aventures des Kevin à travers l'univers. Des Kevin astronautes aux explorateurs interstellaires, découvrez comment les Kevin ont conquis l'espace !</p>
        <ul>
            <li><strong>Kevin l'Astronaute</strong> - Premier Kevin à marcher sur la lune.</li>
            <li><strong>Kevin le Cosmonaute</strong> - Connu pour ses missions sur la Station Spatiale Internationale.</li>
            <li><strong>Kevin l'Explorateur</strong> - A découvert de nouvelles galaxies et planètes.</li>
        </ul>
        <p>Pour en savoir plus sur les Kevin, visitez notre <a href="index.php">page d'accueil</a> ou <a href="contact.php">contactez-nous</a>.</p>
    </div>
</body>
</html> 