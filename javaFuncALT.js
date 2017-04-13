$(document).ready(function(){

  

  var scrollTop = 0;
  $(window).scroll(function(){





  	$("stickyNav").addClass("transEnabl");
    scrollTop = $(window).scrollTop();
     $('.counter').html(scrollTop);
    
    if (scrollTop >= 100) {
     	  $("indexCover").addClass("fadeOut");
    }
    
  
  
  });
});