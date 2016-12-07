<?php
#startar sessionen
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session</title>
</head>
<body>

<?php
#skriver ut sessionsvariabler för föregående sida
echo "Färg: " . $_SESSION["färg"] . ".<br>";
echo "Ort: " . $_SESSION["ort"] . ".";
?>

</body>
</html>