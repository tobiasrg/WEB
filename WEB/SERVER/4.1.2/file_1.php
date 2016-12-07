
<?php

#hämtar namnet skrivet i formulärfältet "name" och sparar i variabel
$name = $_POST['name'];

#Hämtar innehåll från html_2
$html2 = file_get_contents("html_2.html");

#ersätter ---$name--- i html_2 med "name"(som nu är sparad i $name) från html_1"
$html2 = str_replace('---$name---', $name, $html2);

#skriver ut html_2 med ersättning
echo $html2;