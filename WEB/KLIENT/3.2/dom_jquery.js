$(document).ready(function(){

    /*Ändra en egenskap för ett HTML-elementet*/
    $("#ändra").click(function(){
        $("#ändraText").html("<h1>Rubrik</h1>");
    });

    /*Lägga till nytt innehåll till ett HTML-elementet*/
    $("#läggTill").click(function(){
        $("#lista").append("<li>Ny</li>");
    });

    /*Ta bort ett HTML-element*/
    $("#taBort").click(function(){
        $("#taBortText").remove();
    });

    /*Utvinna information från ett HTML-element*/
    $("#hämtaText").click(function(){
        alert("Hämtat: " + $("h2").text());
    });

    $("#bortAttribut").click(function(){
        $(".btn").removeAttr("type");
    });

    $("#läggTillAttribut").click(function(){
        $(".btn").attr("type", "button");
    });


});

