$( document ).ready(function() {
    $( ".colorbox li" ).hover(
	  function() {
	    $( this ).removeClass("transparent");
	  }, 
	  function() {
	    $( this ).addClass("transparent");
	  }
	);
	
	
	
	$( ".socialIcons a" ).hover(
	  //var imgUrl = $(this).children();
	  function() {
	  	var imgUrl = $(this).children().attr("src");
	  	$(this).children().attr("src", imgUrl.replace(".png", "_colored.png"));	    
	  }, 
	  function() {
	  	var imgUrl = $(this).children().attr("src");
	    $(this).children().attr("src", imgUrl.replace("_colored.png", ".png"));
	  }
	);
	
});