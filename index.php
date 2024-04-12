<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>
<body>
    <h2>Inserisci il paragrafo e la parola da censurare</h2>
    <form action="form.php" method="GET">
        <label for="paragrafo">Paragrafo:</label><br>
        <textarea id="paragrafo" name="paragrafo" rows="4" cols="50"></textarea><br><br>
        <label for="parola">Parola da censurare:</label><br>
        <input type="text" id="parola" name="parola"><br><br>
        <input type="submit" value="Invia">
    </form>
</body>
</html>
