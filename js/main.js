$(document).ready(function(){
    $('.ui.sticky').sticky();
    $('.ui.rating').rating();
    $('.rating.naoAlteravel').rating('disable');


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
        
})