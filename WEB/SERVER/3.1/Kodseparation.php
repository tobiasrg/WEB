<?php

$räknare_namn = "counter.txt";

if (!file_exists($räknare_namn)) {
    $f = fopen($räknare_namn, "w");
    fwrite($f, "0");
    fclose($f);
}


$f = fopen($räknare_namn, "r");
$räknareVärde = fread($f, filesize($räknare_namn));
fclose($f);


if (!isset($_SESSION['harBesokt'])) {
    $_SESSION['harBesökt'] = "ja";
    $räknareVärde++;
    $f = fopen($räknare_namn, "w");
    fwrite($f, $räknareVärde);
    fclose($f);
}

$html = file_get_contents("Example.html");
$html = str_replace('---$hits---', $räknareVärde, $html);
echo $html;

