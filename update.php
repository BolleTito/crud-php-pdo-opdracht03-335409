<?php
// Voeg de database-gegevens
require('config.php');

// Maak de $dsn oftewel de data sourcename string
$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    // Maak een nieuw PDO object zodat je verbinding hebt met de mysql database
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    if ($pdo) {
        // echo "Verbinding is gelukt";
    } else {
        echo "Interne server-error";
    }
} catch (PDOException $e) {
    $e->getMessage();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    try {
        // Maak een update query voor het updaten van een record
        $sql = "UPDATE achtbaan
                SET NaamAchtbaan = :NaamAchtbaan,
                    NaamPretpark = :NaamPretpark,
                    Land = :Land,
                    Topsnelheid = :Topsnelheid,
                    Hoogte = :Hoogte,
                    Datum = :Datum,
                    Cijfer = :Cijfer
                WHERE Id = :Id";

        // Roep de prepare-method aan van het PDO-object $pdo
        $statement = $pdo->prepare($sql);

        // We moeten de placeholders een waarde geven in de sql-query
        $statement->bindValue(':Id', $_POST['Id'], PDO::PARAM_INT);
        $statement->bindValue(':NaamAchtbaan', $_POST['NaamAchtbaan'], PDO::PARAM_STR);
        $statement->bindValue(':NaamPretpark', $_POST['NaamPretpark'], PDO::PARAM_STR);
        $statement->bindValue(':Land', $_POST['Land'], PDO::PARAM_STR);
        $statement->bindValue(':Topsnelheid', $_POST['Topsnelheid'], PDO::PARAM_INT);
        $statement->bindValue(':Hoogte', $_POST['Hoogte'], PDO::PARAM_INT);
        $statement->bindValue(':Datum', $_POST['Datum'], PDO::PARAM_STR);
        $statement->bindValue(':Cijfer', $_POST['Cijfer'], PDO::PARAM_STR);

        // We gaan de query uitvoeren op de mysql-server
        $statement->execute();

        echo "Het record is geupdate";
        header("Refresh:3; read.php");

    } catch(PDOException $e) {
        echo "Het record is niet geupdate";
        header("Refresh:3; read.php");
    }
    exit();
}

// Maak een select-query
$sql = "SELECT * FROM achtbaan 
        WHERE Id = :Id";

// Voorbereiden van de query
$statement = $pdo->prepare($sql);

$statement->bindValue(':Id', $_GET['Id'], PDO::PARAM_INT);

$statement->execute();

$result = $statement->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Pdo Crud Opdracht 3</title>
</head>
<body>
    <h1>Invoer Achtbaan</h1>

    <form action="update.php" method="post">
        <label for="NaamAchtbaan">Naam Achtbaan:</label><br>
        <input type="text" name="NaamAchtbaan" id="NaamAchtbaan" value="<?php echo $result->NaamAchtbaan; ?>"><br><br>

        <label for="NaamPretpark">Naam Pretpark:</label><br>
        <input type="text" name="NaamPretpark" id="NaamPretpark" value="<?php echo $result->NaamPretpark; ?>"><br><br>

        <label for="Land">Naam Land:</label><br>
        <input type="text" name="Land" id="Land" value="<?php echo $result->Land; ?>"><br><br>

        <label for="Topsnelheid">Topsnelheid (km/u):</label><br>
        <input type="number" name="Topsnelheid" id="Topsnelheid" value="<?php echo $result->Topsnelheid; ?>"><br><br>

        <label for="Hoogte">Hoogte (m):</label><br>
        <input type="number" name="Hoogte" id="Hoogte" value="<?php echo $result->Hoogte; ?>"><br><br>

        <label for="Datum">Datum eerste opening:</label><br>
        <input type="date" name="Datum" id="Datum" value="<?php echo $result->Datum; ?>"><br><br>

        <label for="Cijfer">Cijfer voor achtbaan:</label><br>
        <input type="range" value="5.5" min="1" max="10" step="0.1" name="Cijfer" id="Cijfer" value="<?php echo $result->Cijfer; ?>"><br><br>

        <input type="hidden" name="Id" value="<?php echo $result->Id; ?>">

        <input type="submit" value="Sla Op" id="button">
    </form>
    
</body>
</html>