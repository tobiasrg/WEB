$(document).ready(function(){

    //Exempel på defaultStatus och Status.
    //Sätter defaultStatus till ett värde och ändrar Status med en funktion.
    window.defaultStatus = "Default status text";
    $("#statusExempel").mouseover(function(){
        window.status = "Ändrad status text";
    })

    //Exempel på screenLeft, screenTop, screenX och screenY
    $("#screenLeft").text(window.screenLeft);
    $("#screenTop").text(window.screenTop);
    $("#screenX").text(window.screenX);
    $("#screenY").text(window.screenY);

    //Exempel på innerWidth/Height och outerWidth/Height.
    //Skapar en funktion som skriver ut värdena. Denna funktion anropas.
    //För varje windown.resize event så sker funktionsanropet för att skriva ut igen.
    outputSize();
    function outputSize(){
        $("#innerWidth").text(window.innerWidth);
        $("#innerHeight").text(window.innerHeight);
        $("#outerWidth").text(window.outerWidth);
        $("#outerHeight").text(window.outerHeight);
    }
    $(window).resize(function(){
        outputSize();
    });

    //Exempel på pageX/YOffset, scroll(), scrollTo och scrollBy.
    //Skriver ut offset.
    //Skriver ut offset igen när en scrollning händer.
    //Scrollar till top/vänster position när en knapp trycks.
    //Scrollar ett angivet värde.
    outputScroll();
    function outputScroll(){
        $("#scrollX").text(window.pageXOffset);
        $("#scrollY").text(window.pageYOffset);
    }
    $(window).scroll(function(){
        outputScroll();
    });
    $("#scrollTop").click(function(){
        window.scrollTo(0,0);
    });
    $("#scrollBy").click(function(){
        var y = parseInt($("#scrollIn").val());
        window.scrollBy(0,y);
    });

    //Exempel på open och close.
    //Exempel på blur och focus.
    //Exempel på prompt, confirm och alert.
    //Öppnar ny, ofokuserad, sida med innehåll angivet i en prompt.
    //Stänger samma sida med en knapp.
    //Diverse confirm och alert fönster när klick sker.
    var newWindow;
    $("#openWindow").click(function(){
        var text = prompt("Ange text för nya sidan");
        if(text === ""){
            alert("Ingen text angiven!");
        }else{
            newWindow = window.open("", "newWindow");
            newWindow.document.write(text);
            newWindow.blur();
            windown.focus();
        }
    });
    $("#closeWindow").click(function(){
        if(confirm("Är du säker?")){
            newWindow.close();
        }
    });

    //Exempel på setInterval, clearInterval, setTimeout och clearTimeout.
    //Startar en räknare som skrivs ut med setInterval.
    //Startar samtidigt en nedräkning med setTimeout.
    //När nedräkningen är över visas en alert.
    var y = 3000;
    var countdown;
    var inter;
    $("#countdown").text(y);
    function subtractOne(){
        y -= 50;
        $("#countdown").text(y);
    }
    $("#startCountdown").click(function(){
        y = 3000;
        clearTimeout(countdown);
        clearInterval(inter);
        countdown = setTimeout(function(){alert("Väntade för länge!")}, 3000);
        inter = setInterval(function(){subtractOne()}, 50);
    });
    $("#stopCountdown").click(function(){
        clearTimeout(countdown);
        clearInterval(inter);
    });



    //Exempel på moveBy, moveTo, resizeBy och resizeTo.
    //Öppnar nytt fönster som flyttar sig själv och växer.
    //En knapp används för att flytta tillbaka fönstret till övre vänster hörn samt återställer storlek.
    //Exemplifierar också: focus, setInterval och open.
    var moveWindow;
    var moveInter;
    function moveWin(){
        moveWindow.moveBy(50,50);
        moveWindow.resizeBy(25,25);
    }
    $("#moveEx").click(function(){
        clearInterval(moveInter);
        moveWindow = window.open("", "moveWindow", "width= 200, height=200");
        moveInter = setInterval(function(){moveWin()}, 750);
        moveWindow.focus();
    });
    $("#resetWindow").click(function(){
        moveWindow.moveTo(0,0);
        moveWindow.resizeTo(200, 200);
        moveWindow.focus();
    });

    //Exempel på screen: width, height, availWidth och availHeight
    //Skriver ut skärmens höjd och bredd.
    //Skriver ut mellanskillnaden mellan width och availWidth. Samma med height.
    $("#screenSize").text("Bredd: "+screen.width+", Höjd: "+screen.height);
    $("#interfaceSize").text("Bredd: "+(screen.width - screen.availWidth)+", Höjd: "+(screen.height - screen.availHeight));

    $("#printEx").click(function(){
        var printWindow = window.open("", "print this");
        printWindow.document.write("Text på nya sidan som ska skrivas ut");
        printWindow.print();
    });

    //Exempel på colorDepth och pixelDepth.
    //Skriver ut båda.
    $("#colorDepth").text(screen.colorDepth+" bits per pixel");
    $("#pixelDepth").text(screen.pixelDepth+" bits per pixel");

    //Exempel på navigator.
    //Skriver ut all info som krävs.
    $("#appName").text(navigator.appName);
    $("#codeName").text(navigator.appCodeName);
    $("#appVer").text(navigator.appVersion);
    $("#agent").text(navigator.userAgent);
    if(!navigator.cookieEnabled){
        $("#cookies").text(" inte");
    }

    //Exempel på location.
    //Skriver ut host, hostname och port.
    var test = location.host;
    $("#host").text(location.host);
    $("#hostName").text(location.hostname);
    $("#port").text(location.port);

    //Exempel på reload, assign och replace.
    //Laddar om sidan med tvingan hämtning från servern.
    //Laddar in DSV's hemsida.
    //Ersätter dokumentet med DSV's hemsida.
    $("#reload").click(function(){
        location.reload(true);
    })
    $("#assign").click(function(){
        location.assign("http://www.dsv.su.se");
    })
    $("#replace").click(function(){
        location.replace("http://www.dsv.su.se");
    })
});