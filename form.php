<?php
//Make variables with method "GET"
$paragraph = $_GET['paragrafo'];
$censoredWord = $_GET['parola'];

/* "Stamp in page" */
echo "<h1>Paragrafo: </h1> $paragraph";
echo "<p>$paragrafo</p>";
echo "<p>Lunghezza del paragrafo: " . strlen($paragraph) . "</p>";

//Replace with str_ireplace to modify censoredWord in censoredParagraph
$censoredParagraph = str_replace($censoredWord, '***', $paragraph);
//WARNING: str_replace is CASE SENSITIVE....to avoid that trouble use str_ireplace

/* Stamp in page with censored paragraph's word */
echo "<h1>Paragrafo censurato: </h1>";
echo "<p>$censoredParagraph</p>";
echo "<p>Lunghezza del paragrafo censurato: " . strlen($censoredParagraph) . "</p>";