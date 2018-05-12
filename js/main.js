$(document).ready(function(){
    $('.ui.sticky').sticky();
    $('.ui.rating').rating();
    $('.ui.checkbox').checkbox();
    
    $(".modalAbrir").click(function(){
        $('.ui .modal').modal('setting', {
            autofocus: false
        }).modal('show');
    }); 
})