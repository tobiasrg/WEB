<?php


#om cookies finns med namn "Cookie" och "Tid" skrivs värdet för dessa ut
if(isset($_COOKIE["Cookie"]) and isset($_COOKIE["Tid"])) {
    echo "Namn= " . $_COOKIE["Cookie"] . "<br>";
    echo "Tid= " . $_COOKIE["Tid"];
}
