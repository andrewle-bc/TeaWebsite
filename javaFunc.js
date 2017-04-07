$(function(){


    $('.fadein p:gt(0)').hide();

  

    setInterval(function(){$('.fadein > :first-child').fadeOut(3000).next('p').fadeIn(3000)
    	.end().appendTo('.fadein');}, 5000);

});


