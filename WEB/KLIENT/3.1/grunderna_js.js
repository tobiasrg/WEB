/*Skapar en array med djur och skriver sedan ut denna med document.write*/
var djur  = ["Hund", "Katt", "Häst", "Gris", "Elefant", "Fågel", "Höna"];
document.write("Array med djur: " + djur + "<br>");

/*Skapar en boolean med värdet 1. Variabeln används sedan i en boolean för att se om denna är sann eller inte. I detta fall kommer boolean att vara true*/
var x = 0
document.write("Boolean: " + Boolean(x==0) + "<br>");

/*Skapar en ny date-instans av Date-objektet genom new Date(). Denna skriver sedan ut det aktuella datumet genom getDate()*/
var d = new Date();
document.write("Dag i månaden: " + d.getDate() + "<br>");

/*Skriver ut PI med hjälp av Math.PI*/
document.write("PI: " + Math.PI + "<br>");

/*Skapar en sträng och skriver ut denna*/
var testString = "En sträng" + "<br>";
document.write(testString);

/*Skapar variabeln false och konverterar sedan denna till ett nummer. Värdet för false är 0 och det är därför detta som bör skrivas ut*/
var test = false;
document.write("true konverterat till ett nummer: " + Number(test) + "<br>");

/*Skapar ett reguljärt utryck och skriver ut detta*/
var re = new RegExp("[^abc]")
document.write(re + "<br>");

/*Skapar en sträng och använder Number.isNaN(sträng) om detta är ett nummer. Number.isNaN är en global funktion i JavaScript*/
var numberString = "hejsan";
document.write("Variabel = nummer? " + Number.isNaN(numberString));
