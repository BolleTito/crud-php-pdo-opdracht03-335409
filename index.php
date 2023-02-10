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

    <form action="create.php" method="post">
        <label for="Naam Achtbaan">Naam Achtbaan:</label><br>
        <input type="text" name="Naam Achtbaan" id="Naam Achtbaan"><br><br>

        <label for="Naam Pretpark">Naam Pretpark:</label><br>
        <input type="text" name="Naam Pretpark" id="Naam Pretpark"><br><br>

        <label for="Naam Land">Naam Land:</label><br>
        <input type="text" name="Naam Land" id="Naam Land"><br><br>

        <label for="Topsnelheid">Topsnelheid (km/u):</label><br>
        <input type="number" name="Topsnelheid" id="Topsnelheid"><br><br>

        <label for="Hoogte">Hoogte (m):</label><br>
        <input type="number" name="Hoogte" id="Hoogte"><br><br>

        <label for="Datum">Datum eerste opening:</label><br>
        <input type="date" name="Datum" id="Datum"><br><br>

        <label for="Cijfer">Cijfer voor achtbaan:</label><br>
        <input type="range" value="5.5" min="1" max="10" step="0.1" name="Cijfer" id="Cijfer"><br><br>

        <input type="submit" value="Sla Op">
    </form>
    
</body>
</html>

<!-- <form action="create.php" method="post">
        <label for="firstname">Voornaam:</label><br>
        <input type="text" name="firstname" id="firstname"><br>

        <label for="infix">Tussenvoegsel:</label><br>
        <input type="text" name="infix" id="infix"><br>

        <label for="lastname">Achternaam:</label><br>
        <input type="text" name="lastname" id="lastname"><br>

        <label for="phonenumber">Telefoonnummer:</label><br>
        <input type="text" name="phonenumber" id="phonenumber"><br>

        <label for="streetname">Straatnaam:</label><br>
        <input type="text" name="streetname" id="streetname"><br>

        <label for="housenumber">Huisnummer:</label><br>
        <input type="text" name="housenumber" id="housenumber"><br>

        <label for="residence">Woonplaats:</label><br>
        <input type="text" name="residence" id="residence"><br>

        <label for="postalcode">Postcode:</label><br>
        <input type="text" name="postalcode" id="postalcode"><br>

        <label for="country">Landnaam:</label><br>
        <input type="text" name="country" id="country"><br>

        <input type="submit" value="Verstuur">
    </form> -->