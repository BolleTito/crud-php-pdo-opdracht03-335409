<?php
// var_dump($_POST);exit();
include('config.php');

// DSN staat voor data sourcename.
$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    echo "Er is een verbinding met de database";
} catch(PDOException $e) {
    echo "Er is helaas geen verbinding met de database.<br>
          Neem contact op met de Administrator<br>";
    echo "Systeemmelding: " . $e->getMessage();
}
// Maak de sql query voor het inserten van een record
$sql = "INSERT INTO achtbaan (Id
                            ,NaamAchtbaan
                            ,NaamPretpark
                            ,Land
                            ,Topsnelheid
                            ,Hoogte
                            ,Datum
                            ,Cijfer)
        VALUES              (NULL
                            ,:NaamAchtbaan
                            ,:NaamPretpark
                            ,:Land
                            ,:Topsnelheid
                            ,:Hoogte
                            ,:Datum
                            ,:Cijfer);";
// Maak de query gereed met de prepare-method van het $pdo-object
$statement = $pdo->prepare($sql);
$statement->bindValue(':NaamAchtbaan', $_POST['NaamAchtbaan'], PDO::PARAM_STR);
$statement->bindValue(':NaamPretpark', $_POST['NaamPretpark'], PDO::PARAM_STR);
$statement->bindValue(':Land', $_POST['Land'], PDO::PARAM_STR);
$statement->bindValue(':Topsnelheid', $_POST['Topsnelheid'], PDO::PARAM_INT);
$statement->bindValue(':Hoogte', $_POST['Hoogte'], PDO::PARAM_INT);
$statement->bindValue(':Datum', $_POST['Datum'], PDO::PARAM_STR);
$statement->bindValue(':Cijfer', $_POST['Cijfer'], PDO::PARAM_STR);
// Vuur de query af op de database...
$statement->execute();

// Hiermee sturen we automatisch door naar de pagina read.php
header('Location: read.php');



