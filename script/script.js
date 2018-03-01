
	$('.header').backgroundMove({
	  movementStrength:'30'
	});

$(document).ready(function(){

  $(".navbar a, footer a[href='#myPage'] , #begin a , #topo").on('click', function(event) {

  if (this.hash !== "") {

    event.preventDefault(); 

    var hash = this.hash;

    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      window.location.hash = hash;
      });
    }
  });
})



$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});


	$(window).scroll(function() {
  $(".slideanimup").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slideup");
    }
  });
}); 	

	$(window).scroll(function() {
  $(".slideanimright").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slideright");
    }
  });
}); 	

	$(window).scroll(function() {
  $(".slideanimleft").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slideleft");
    }
  });
}); 

	$(window).scroll(function() {
  $(".bounceInAnim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 800) {
      $(this).addClass("bounceIn");
    }
  });
}); 		



  $("#send").click(function(){

    if ($('#usuario').val()!='' &&  $('#email').val() != '' && $('#comment').val() != '') {

        var usuario = $('#usuario').val();
        var email = $('#email').val();
        var comment = $('#comment').val();

        $.post("addmessage.php", {usuario,email,comment}, function( data ) {
            console.log(data);
        });

        $("#alert").fadeIn("slow");

        $('#usuario').val('')
        $('#email').val('')
        $('#comment').val('')

        }
  });


    $(document).ready(function(){
    $("#alert").hide();
  });
