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
        <label for="NaamAchtbaan">Naam Achtbaan:</label><br>
        <input type="text" name="NaamAchtbaan" id="NaamAchtbaan"><br><br>

        <label for="NaamPretpark">Naam Pretpark:</label><br>
        <input type="text" name="NaamPretpark" id="NaamPretpark"><br><br>

        <label for="Land">Naam Land:</label><br>
        <input type="text" name="Land" id="Land"><br><br>

        <label for="Topsnelheid">Topsnelheid (km/u):</label><br>
        <input type="number" name="Topsnelheid" id="Topsnelheid"><br><br>

        <label for="Hoogte">Hoogte (m):</label><br>
        <input type="number" name="Hoogte" id="Hoogte"><br><br>

        <label for="Datum">Datum eerste opening:</label><br>
        <input type="date" name="Datum" id="Datum"><br><br>

        <label for="Cijfer">Cijfer voor achtbaan:</label><br>
        <input type="range" min="1" max="10" step="0.1" name="Cijfer" id="Cijfer" onchange="showValue(this.value)"><br>
        <span id="score">5.5</span><br><br>

        <input type="submit" value="Sla Op" id="button">
    </form>
    
</body>
<script src="functions/functions.js"></script>
</html>