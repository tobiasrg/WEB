<!DOCTYPE html>
<?php
#skapar cookies
$cookie_name = "Cookie";
$cookie_name2 = "Tid";
$cookie_time = date("d-m-Y h:i:s");

setcookie($cookie_name, "Cookie", time() +10800);
setcookie($cookie_name2, $cookie_time, time() + 10800);
?>
<html>
<body>
<!-- går till cookies1 för att läsa av cookies-->
<a href='cookies1.php'>Läs cookies</a>
</body>
</html>





