<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Formulaire.css">
    <title>Facebook</title>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <form method="POST" action="insertFormData.php" enctype="multipart/form-data">
                <input type="text" placeholder="Quelle est l'équipe 1 ?" name="equipe1" required>
                <input type="text" placeholder="Quelle est l'équipe 2 ?" name="equipe2" required>
                <input type="text" placeholder="Quel est votre pronostique ?" name="prono" required>
                <input type="date" placeholder="Quelle est la date du match ?" name="date" required>
                <label for="logo1">Choisissez le logo de l'équipe 1</label>
                <input type="file" class="fichier_logo_one" id="logo1" name="logo_one" required>
                <label for="logo2">Choisissez le logo de l'équipe 1</label>
                <input type="file" class="fichier_logo_two" id="logo2" name="logo_two" required>
                <button class="sign-in-btn">Soumettre</button>
            </form>
            <footer>
                <h4>Faites-nous parvenir vos pronostiques </h4>
            </footer>
        </div>
    </div>
</body>
</html>