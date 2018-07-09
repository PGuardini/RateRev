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


  $('.ui.accordion')
  .accordion()
    ;
})