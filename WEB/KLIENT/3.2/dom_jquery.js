$(document).ready(function(){

    /*Ändra en egenskap för ett HTML-elementet*/
    $("#change").click(function(){
        $("#change-p").html("<h1>Rubrik</h1>");
    });

    /*Lägga till nytt innehåll till ett HTML-elementet*/
    $("#add").click(function(){
        $("#list").append("<li>Ny</li>");
    });

    /*Ta bort ett HTML-element*/
    $("#delete").click(function(){
        $("#delete-p").remove();
    });

    /*Utvinna information från ett HTML-element*/
    $("#getText").click(function(){
        alert("Hämtat: " + $("h2").text());
    });

    $("#deleteAttr").click(function(){
        $(".btn").removeAttr("type");
    });

    $("#addAttr").click(function(){
        $(".btn").attr("type", "button");
    });


});

