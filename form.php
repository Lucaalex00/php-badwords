<?php
//Make variables with method "GET"
$paragraph = $_GET['paragraph'];
$censoredWord = $_GET['word'];

/* "Stamp in page" */
echo "<h1>Paragraph: </h1>";
echo "<p>$paragraph</p>";
echo "<p>Paragraph length: " . strlen($paragraph) . "</p>";

//Replace with str_ireplace to modify censoredWord in censoredParagraph
$censoredParagraph = str_replace($censoredWord, '***', $paragraph);
//WARNING: str_replace is CASE SENSITIVE....to avoid that trouble use str_ireplace

/* Stamp in page with censored paragraph's word */
echo "<h1>Censored Paragraph: </h1>";
echo "<p>$censoredParagraph</p>";
echo "<p>Censored Paragraph length : " . strlen($censoredParagraph) . "</p>";