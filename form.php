<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats du Formulaire</title>
</head>
<body>
    <?php
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
    ?>

    <?php
        $host = "localhost";
        $user = "root";
        $password = "";
        $dbname = "herbierdesmots";

        $conn = new mysqli($host, $user, $password, $dbname);

        if ($conn->connect_error) {
            die("Erreur de connexion : " . $conn->connect_error);
        }

        $name = $conn->real_escape_string($_POST['name']);
        $service = intval($_POST['service-stars']);
        $ambiance = intval($_POST['ambiance-stars']);
        $food = intval($_POST['food-stars']);
        $situation = $conn->real_escape_string($_POST['situation']);
        $comment = $conn->real_escape_string($_POST['review']);

        $sql = "INSERT INTO review (review_name, review_service, review_ambiance, review_food, review_situation, review_comment)
            VALUES ('$name', '$service', '$ambiance', '$food', '$situation', '$comment')";
        
        if ($conn->query($sql) === TRUE) {
            echo "<b>Nouvel avis enregistré avec succès ! </b><br><br>";
        } else {
            echo "Erreur : " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
        
        echo '<b>Nom : </b>'.htmlspecialchars($_POST['name']).'<br>';
        echo '<b>Service : </b>'.$_POST['service-stars'].'⭐<br>';
        echo '<b>Ambience : </b>'.$_POST['ambiance-stars'].'⭐<br>';
        echo '<b>Nourriture : </b>'.$_POST['food-stars'].'⭐<br>';
        echo '<b>Situation : </b>'.$_POST['situation'].'<br>';
        echo '<b>Commentaire : </b>'.htmlspecialchars($_POST['review']);   
    ?>
</body>
</html>