<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>
<body>
    <h2>Insert a Paragraph and a Word that you want ***CENSORED***</h2>
    <form action="./form.php" method="GET">
        <label for="paragraph">Paragraph:</label><br>
        <textarea name="paragraph" rows="2" cols="30"></textarea><br>
        <label for="word">Censored Word :</label><br>
        <input type="text" name="word"><br>
        <button type="submit" > SEND </button>
    </form>
</body>
</html>
