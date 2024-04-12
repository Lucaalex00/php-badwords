<?php
//Make variables with method "GET"
$paragraph = $_GET['paragrafo'];
$censoredWord = $_GET['parola'];

/* "Stamp in page" */
echo "<h2>Paragrafo:</h2>";
echo "<p>$paragrafo</p>";
echo "<p>Lunghezza del paragrafo: " . strlen($paragrafo) . "</p>";

