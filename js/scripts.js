$(function(){
	var an = '';
	$("#subs-form").submit(function() {
		var url = "mails.php",
			eml = $("#subs-form input[tyoe=email]");
		$.ajax({
			   type: "POST",
			   url: url,
			   data: $("#subs-form").serialize(),
			   success: function(data)
			   {
				  if(data == 1)
					$('.error').slideDown(300);
				  else{
					$('.error, #subs-form').slideUp(300);
					$('.success').slideDown(300);
				  }
			   }
			 });
		return false;
	});

	jQuery("").animate({
      backgroundColor: "#abcdef"
  }, 1500 );
  

$( ".subscribe-form input[type=submit]" ).hover(
  function() {
    $( this ).animate({      backgroundColor: "#272727", color: 'white'  }, 300 );
  }, function() {
    $( this ).animate({      backgroundColor: "rgba(0, 0, 0, .05)", color: "#272727"  }, 300 );
  }
);
  
});







