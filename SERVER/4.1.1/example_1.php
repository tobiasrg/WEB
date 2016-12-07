<?php
#Hämtar "name" från Dokument 1 och sparar strängen i en variabel
$name = $_GET["name"];

#laddar in Dokument 2 och sparar i variabel
$html2 = file_get_contents("Dokument2.html");

#ersätter --$name-- i Dokument 2 med $name
$html2 = str_replace('--$name--', $name, $html2);

#skriver ut hela Dokument 2
echo $html2;
