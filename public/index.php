<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualités des Kevin</title>
    <style>
        body {
            background-color: black;
            color: lime;
            font-family: 'Press Start 2P', cursive;
            text-align: center;
            padding: 50px;
        }
        h1 {
            font-size: 3em;
            text-shadow: 2px 2px 0px #ff00ff, 4px 4px 0px #00ffff;
        }
        .news {
            border: 2px solid lime;
            padding: 20px;
            margin: 20px;
            box-shadow: 0 0 10px lime;
        }
        a {
            color: #ff00ff;
            text-decoration: none;
        }
        a:hover {
            text-shadow: 0 0 5px #ff00ff;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>
    <h1>Bienvenue sur le site des Kevin</h1>
    <?php //include 'header.php'; ?>
    <div class="news">
        <h2>Dernières actualités</h2>
        <p>Découvrez les dernières nouvelles concernant les Kevin du monde entier !</p>
        <a href="#">Lire plus...</a>
    </div>
    <div class="news">
        <h2>Événements à venir</h2>
        <p>Ne manquez pas les événements spéciaux organisés pour les Kevin !</p>
        <a href="#">Voir les événements</a>
    </div>
</body>
</html> 