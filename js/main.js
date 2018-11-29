$(document).ready(function(){
    $('.ui.sticky').sticky();
    $('.ui.rating').rating();
    $('.rating.naoAlteravel').rating('disable');
    
    // function rate(rating){
    //     console.log(rating);
    //     return rating;
    // }
    // function processRate(rating){
    //     // var rating = rate();
        
    // }
    $('.formStar').rating('setting', 'onRate', function(rating){
        $.ajax({
            url: "salvaEstrela.php",
            method: "post",
            dataType: "json",
            data: {'estrelas':rating},
            success: function( data, textStatus, jQxhr ){
                console.log( data );
            },
            error: function( jqXhr, textStatus, errorThrown ){
                console.log( errorThrown );
            }
        });
    });



    $('.ui.checkbox').checkbox();
    $('.ui.dropdown').dropdown();


    $(".modalAbrir").click(function(){
        $('.ui.modal').modal('setting', {
            autofocus: false
        }).modal('show');
    });


    $('.ui.accordion').accordion();
    
    let aux = true;
    $("#trocaLista").click(function(){
        let grid = $("#trocaLista");
        if (aux){
            aux=false;
            grid.text("Grade");
        }else{
            aux = true;
            grid.text("Lista");
        }
        $("#grid-1").toggleClass("escondido");
        $("#grid-2").toggleClass("escondido");

    });

    // $("#removeModal").click(function() {
    //     var id = $(this).data(id);
    //     //var titulo  = $('#'+id).children("div").find("a").text();
    //     var caminhoImg  = $('#'+id).find('img[data-target=imgResenha]').value();
    //     alert(caminhoImg);
    //
    //     $('#modalExclusao').modal('setting', {
    //         autofocus: false
    //     }).modal('show');
    // })

    $("#remove").click(function() {
        /*$.ajax({
            url: "salvaEstrela.php",
            method: "post",
            dataType: "json",
            data: {'estrelas':rating},
            success: function( data, textStatus, jQxhr ){
                console.log( data );
            },
            error: function( jqXhr, textStatus, errorThrown ){
                console.log( errorThrown );
            }
        });*/
    })
        
})