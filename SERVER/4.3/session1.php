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
#sätter sessionsvariabler
$_SESSION["färg"] = "röd";
$_SESSION["ort"] = "Stockholm";
#länk till nästa sida där variabler skrivs ut
echo "Variabler är nu satta, klicka " . "<a href='session2.php'>här</a>" . " för att se dessa";
?>

</body>
</html>