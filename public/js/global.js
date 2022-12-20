$( document ).ready(function() {

    $.get( "https://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=bbe94fa37a1d44ed9adc03ee8053017f", function(data) {
        $('.spinner-border').css('display','none');

        $.each(data.articles, function(i, item) {
            $("#artigos").append('<li>'+
            '<img class="mb-3" src="'+item.urlToImage+'" width="636" height="318">'+
            '<h4><a href="'+item.url+'">'+item.title+'</a></h4>'+
            '<span>Autor: '+item.author+'</span>'+
            '<p>'+item.description+'</p>'+
            '<a href='+item.url+' class="btn btn-primary" target="_blank">Leia mais</a>'+
            '</li>');
        });

        
    
    })    
    .fail(function() {
        alert( "Não foi possível carregar os artigos" );
    });
});
