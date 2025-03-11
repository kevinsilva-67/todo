<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        body {
            background-color: black;
            color: lime;
            font-family: 'Press Start 2P', cursive;
            text-align: center;
            padding: 50px;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: black;
            border: 2px solid lime;
            box-shadow: 0 0 10px lime;
            border-radius: 8px;
        }
        h1 {
            font-size: 2.5em;
            text-shadow: 2px 2px 0px #ff00ff, 4px 4px 0px #00ffff;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label {
            margin-top: 10px;
            font-weight: bold;
            color: #ff00ff;
        }
        input, textarea {
            width: 80%;
            padding: 10px;
            margin-top: 5px;
            border: 2px solid lime;
            background-color: black;
            color: lime;
            font-family: 'Press Start 2P', cursive;
            border-radius: 4px;
            box-shadow: 0 0 5px lime;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #ff00ff;
            color: black;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-family: 'Press Start 2P', cursive;
            box-shadow: 0 0 5px #ff00ff;
        }
        button:hover {
            background-color: #00ffff;
            box-shadow: 0 0 5px #00ffff;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <h1>Contactez-nous</h1>
        <form action="#" method="post">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="info">Info sur la personne</label>
            <textarea id="info" name="info" rows="4" required></textarea>

            <label for="demande">Demande</label>
            <textarea id="demande" name="demande" rows="4" required></textarea>

            <button type="submit">Envoyer</button>
        </form>
    </div>
</body>
</html> 