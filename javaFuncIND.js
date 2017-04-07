$(document).ready(function(){

  $("#logoTitle").hide();
  $("#logo").hide();

  setTimeout(function(){
  	$("#logoTitle").delay(1000).removeClass("transEnabl").fadeIn(2000); 
  	$("#logo").removeClass("transEnabl").fadeIn(2000); 
  }, 100);

   	$("#logoTitle").addClass("transEnabl");
  	$("#logo").addClass("transEnabl");

  var scrollTop = 0;
  $(window).scroll(function(){
  	$("stickyNav").addClass("transEnabl");
    scrollTop = $(window).scrollTop();
     $('.counter').html(scrollTop);
    
    if (scrollTop >= 100) {
   	  $("#logoTitle").addClass("transEnabl");
  	  $("#logo").addClass("transEnabl");
      $('#stickyNav').addClass('scrolled-nav');
    } else if (scrollTop < 100) {
    	$("#logoTitle").addClass("transEnabl");
  		$("#logo").addClass("transEnabl");
      	$('#stickyNav').removeClass('scrolled-nav');
    } 
    
  }); 
  
});