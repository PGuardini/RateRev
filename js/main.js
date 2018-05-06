$(document).ready(function(){
    $('.ui.sticky').sticky();
    $('.ui.rating').rating();
    
    $(".modalAbrir").click(function(){
        $('.ui .modal').modal('setting', {
            autofocus: false
        }).modal('show');
    }); 
})


