"use strict"

$("#formulario").on("submit", function(e){
    e.preventDefault();
    let serializedData=$(this).serialize();
    $.post('index.php', serializedData,
    function(response){
        $("p").html(response);
        //document.querySelector(".container").innerHTML=response;
        
    });
});