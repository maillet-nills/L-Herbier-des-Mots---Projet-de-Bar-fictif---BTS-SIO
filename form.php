<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats du Formulaire</title>
</head>
<body>
    <?php
        echo '<b>Service : </b>'.htmlspecialchars($_POST['service-stars']).'⭐<br>';
        echo '<b>Ambience : </b>'.htmlspecialchars($_POST['ambiance-stars']).'⭐<br>';
        echo '<b>Nourriture : </b>'.htmlspecialchars($_POST['food-stars']).'⭐<br>';
        echo '<b>Situation : </b>'.htmlspecialchars($_POST['situation']).'<br>';
        echo '<b>Commentaire : </b>'.htmlspecialchars($_POST['review']);
    ?>
</body>
</html>