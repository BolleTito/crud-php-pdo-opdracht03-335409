<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Pdo Crud Opdracht 3</title>
</head>
<body>
    <h1>Invoer Achtbaan</h1>

    <form action="create.php" method="post">
        <input type="text" name="Naam Achtbaan" id="Naam Achtbaan">
        <label for="Naam Achtbaan">Naam Achtbaan:</label>

        <input type="text" name="Naam Pretpark" id="Naam Pretpark">
        <label for="Naam Pretpark">Naam Pretpark:</label>

        <input type="text" name="Naam Land" id="Naam Land">
        <label for="Naam Land">Naam Land:</label>

        <input type="number" name="Topsnelheid" id="Topsnelheid">
        <label for="Topsnelheid">Topsnelheid (km/u):</label>

        <input type="number" name="Hoogte" id="Hoogte">
        <label for="Hoogte">Hoogte (m):</label>

        <input type="date" name="Datum" id="Datum">
        <label for="Datum">Datum eerste opening:</label>

        <input type="range" value="5.5" min="1" max="10" step="0.1" name="Cijfer" id="Cijfer">
        <label for="Cijfer">Cijfer voor achtbaan:</label>
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