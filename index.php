<?php
  require 'php/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>RLR | Developer</title>
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="script/jquery.backgroundMove.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <!-- Jumbo font -->
  <link href="https://fonts.googleapis.com/css?family=Oswald:600" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"> 
  <!-- Animate -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- imgHover -->
  <link rel="stylesheet" href="css/style1.css">
  <link rel="stylesheet" href="css/style_common.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<script>
  
</script>

<script>
	$('.header').backgroundMove({
	  movementStrength:'50'
	});


</script>

<style>
	
</style>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="80">
 <nav id="navbar" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" style="font-size: 12px;" id="logo"><p><Strong>RAFAEL LUIZ REHN</Strong> | Developer</p></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myCarousel">HOME</a></li>
        <li><a href="#aboutme">ABOUT</a></li>
        <li><a href="#mySkills">SKILLS</a></li>
        <li><a href="#projects">PROJECTS</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav> 

<div id="myCarousel">hey</div>

<div class="carousel slide text-center header" data-ride="carousel" data-interval="2600" style="margin-top: 8%;">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active ">
    <h1 id="ani1" class="jumbo">LOOKING AT NEW STUFF?</h1>
    </div>
    <div class="item">
      <h1 id="ani2" class="jumbo">NICE TO MEET YOU</h1>
    </div>
    <div class="item">
      <h1 id="ani3" class="jumbo">I'M RAFAEL LUIZ REHN</h1>
    </div>
    <div class="item">
      <h1 id="ani4" class="jumbo">A RISING DEVELOPER!</h1>
    </div>
  </div>

  <!-- Left and right controls 
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  -->
</div>

<div id="begin" class="container-fluid text-center" style="margin: 3% 0;">
	<a href="#aboutme"><i class="fa fa-play-circle fa-5x" aria-hidden="true"></i></a>
</div>

<!--
<div id="me" class="container">	
	<div class="row">
		<div class="col-sm-4">
			<div class="thumbnail">
				<img src="img/me.png">
			</div>
		</div>
		<div class="col-sm-8">
			<h2 style="">RAFAEL LUIZ REHN</h2>
			<h4>Técnido de Informática</h4>
			<h3>Engenheiro de Computação</h3>	
		</div>		
	</div>
	<div class="row">
		<div class="col-sm-12" style="height: 60px; background-color: #091D34;"></div>
	</div>
</div>
-->
<div id="aboutme" class="container-fluid text-center slideanimup">
	<h2>ABOUT ME</h2>
	<div class="container">
		<div class="row">
			<div id="about1" class="col-sm-4 slideanimright">
				<p>Olá meu nome é Rafael, sou Técnico em informática e recém  graduado Eng. de Computação. Gosto de trabalhar tanto nas áreas de TI como eletrônica!<p>
			</div>
			<div id="about2" class="col-sm-4 slideanimup">
				<p>Natural de Três de Maio, RS, tive meu primeiro contato com computadores logo aos 9 anos de idade e sempre gostei da "coisa", a partir daí eu era o cara que resolvia os problemas do computador. Com o tempo fui procurando ganhar conhecimento e então fiz o curso técnico em informática na escola junto com o ensino médio. Trabalhei um pouco com design e sistemas e então após um período de muitas dúvídas resolvi entrar para o ensino superior, foi então que prestei vestibular na a Univeridade Federal de Santa Maria para o curso de Bacharel em Engenharia da Computação</p>
				<p>Na faculdade sempre participei de projetos e laboratórios, aprendi muito sobre sevidores e sistemas operacionais Linux e Mac OS, além é claro de <b>muita programação</b>. Por muito tempo dei suporte a aulas de ensino a distância através da plataforma Moodle. Participei e organizei congressos entre outras atividades extracurriculares.</p>
				<p>Hoje como muitos sei de tudo um pouco, divido meu tempo de estudo entre programação hardware e web!</p>
				<p>Desde pequeno sempre gostei do lado do design (talvez no futuro faça alguma especialização na área), por conta disso trabalho com as ferramentas Photoshop e Corel mas dou preferência para o CorelDraw.</p>		
				<p>Além de habilidades no Fifa e no CounterStrike também tenho bons conhecimentos em programação! C, Java, Javascript, HTML, PHP, SQL são algumas da linguagem que gosto de aprender!</p>
			</div>
			<div id="about3" class="col-sm-4 slideanimleft">
				<img src="img/coffee.png ">
				<p>"Nada que um pouco de café e muita persistência nao resolvam os problemas!"</p>
				<P style="font-size: 16px;">-Me.</P>
			</div>
		</div>
	</div>		
</div>

<style>

	/* #E1ECF9 #609CE1 #236AB9 #133863 #091D34  */
</style>

<div id="mySkills" class="container-fluid">
	<div class="text-center blue slideanimup">
		<h2 class="blueh2">MY SKILLS</h2>
		<h3 class="blueh3">I'm constantly upgrading my skills</h3>
	</div>
  <div class="row" style="padding: 3% 0;">
    <div class="col-sm-2 slideanimup">
      <div class="panel panel-default text-center">
        <div class="panel-body">
        	<div class="thumbnail">
        		<img src="img/html5.png">
        	</div>
        </div>
        <div class="panel-footer">
          <h4>HTML 5</h4>
          <p>Modern web coding</p>
        </div>
      </div>
    </div>
    <div class="col-sm-2 slideanimup">
      <div class="panel panel-default text-center">
        <div class="panel-body">
        	<div class="thumbnail">
        		<img src="img/css3.png">
        	</div>
        </div>
        <div class="panel-footer">
          <h4>CSS 3</h4>
          <p>Cool visual effects</p>
        </div>
      </div>
    </div>
   <div class="col-sm-2 slideanimup">
      <div class="panel panel-default text-center">
        <div class="panel-body">
        	<div class="thumbnail">
        		<img src="img/bootstrap.png">
        	</div>
        </div>
        <div class="panel-footer">
          <h4>Bootstrap</h4>
          <p>Responsive layout</p>
        </div>
      </div>
    </div>
      <div class="col-sm-2 slideanimup">
      <div class="panel panel-default text-center">
        <div class="panel-body">
        	<div class="thumbnail">
        		<img src="img/angular.png">
        	</div>
        </div>
        <div class="panel-footer">
          <h4>Angular</h4>
          <p>Single page aplication</p>
        </div>
      </div>
    </div>
      <div class="col-sm-2 slideanimup">
      <div class="panel panel-default text-center">
        <div class="panel-body">
        	<div class="thumbnail">
        		<img src="img/php.png">
        	</div>
        </div>
        <div class="panel-footer">
          <h4>PHP</h4>
          <p>Dinamic web page</p>
        </div>
      </div>
    </div>
      <div class="col-sm-2 slideanimup">
      <div class="panel panel-default text-center">
        <div class="panel-body">
        	<div class="thumbnail">
        		<img src="img/sql.png">
        	</div>
        </div>
        <div class="panel-footer">
          <h4>SQL</h4>
          <p>Database storage</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="projects" class="container">
	<div class="text-center blue slideanimleft">
		<h2 class="blueh2">MY PROJECT TREE</h2>
		<h3 class="blueh3">Under developing...</h3>
	</div>
	<div class="row slideanimright">
		<div class="col-sm-4 ">
			<div class="thumbnail">
				<img src="img/angular.png">
			</div>
		</div>
		<div class="col-sm-8">
			<h3>Project name</h3>
			<h4>Layout resume</h4>
			<p>Project description</p>
		</div>
	</div>
	<div class="row slideanimleft">
		<div class="col-sm-8">
			<h3>Project name</h3>
			<h4>Layout resume</h4>
			<p>Project description</p>
		</div>
		<div class="col-sm-4">			
			<div class="thumbnail">
				<img src="img/angular.png">
			</div>
		</div>
	</div>
	<div class="row slideanimright">
		<div class="col-sm-4">
			<div class="thumbnail">
				<img src="img/angular.png">
			</div>
		</div>
		<div class="col-sm-8">
			<h3>Project name</h3>
			<h4>Layout resume</h4>
			<p>Project description</p>
		</div>
	</div>
</div>

<div class="container-fluid" id="contact">
	<div class="container bounceInAnim">
		<h3 class="text-center blueh3 bounceInAnim">Contact Me</h3>
		<p class="text-center" style="color: #091D34;"><em>Keep in toutch!</em></p>
		<div class="row">
		    <div class="col-sm-12">
				<form>
			  	<div class="form-group">		    
			    	<input type="text" id="usuario" class="form-control bounceInAnim" placeholder="Name" required>
			 	</div>
			  	<div class="form-group">		    
			    	<input type="email" id="email" required class="form-control bounceInAnim" placeholder="Email" required="">
			  	</div>
			  	<textarea id="comment" class="form-control bounceInAnim" id="exampleFormControlTextarea1" placeholder="Comment" rows="5" required=""></textarea>	 
			  	<button id="send" class="btn pull-right bounceInAnim" type="submit">Send</button>
				</form>
			</div>		
		</div>
	</div>
</div>

<script>

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
</script>

<div id="alert" class="container-fluid alert alert-success alert-dismissable text-center" style="margin-top: 20px;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Your message has been sent successfully.
</div>

<script>
  $(document).ready(function(){
    $("#alert").hide();
  });
</script>

<footer>
	<div id="faicons" class="container">
		<div class="text-center .blue">
			<div class="row">
				<div class="col-sm-4">
					<div id="superrow" class="row">
						<ul>
							<li id="fa1"><a href="https://www.facebook.com/rafael.rehn" target="_blank"><i id="fa" class="fa fa-facebook fa-3x" aria-hidden="true"></i></a></li>
							<li id="fa1"><a href="rafaelluizrehn@gmail.com" target="_blank"><i id="fa" class="fa fa-skype fa-3x" aria-hidden="true"></i></a></li>
							<li id="fa1"><a href="https://www.instagram.com/rafael_rehn/" target="_blank"><i id="fa" class="fa fa-instagram fa-3x" aria-hidden="true"></i></a></li>

						</ul>
					</div>
					<div id="superrow" class="row">
						<ul>
							<li id="fa1"><a href="https://github.com/tjolex" target="_blank"><i id="fa" class="fa fa-github fa-3x" aria-hidden="true"></i></a></li>
							<li id="fa1"><a href="mailto:rafaelluizrehn@gmail.com" target="_blank" title="rafaelluizrehn@gmail.com"><i id="fa" class="fa fa-envelope fa-3x" aria-hidden="true"></i></a></li>
							<li id="fa1"  data-toggle="tooltip" title="Meu Currículo!"><a href="https://docs.google.com/document/d/1fYomDNV4xqvGI9DrYQJPOnoWW16yrOu9kwuSqWHpyVc/edit?usp=sharing" target="_blank"><i id="fa" class="fa fa-file-text-o fa-3x" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4" style="padding: 1%;">
					<p>Email: rafaelluizrehn@gmail.com</p>
					<p>Phone: (55) 9 9653 2212</p>
					<p>Três de Maio - RS</p>
				</div>
				<div class="col-sm-4" style="padding: 1% 0;">
					<a id="topo" href="#myCarousel" title="Para o topo"><i id="fa" class="fa fa-angle-double-up fa-3x" aria-hidden="true"></i></a>
					<p>&copy Rafael Luiz Rehn 2018</p>
				</div>				
			</div>
		</div>
	</div>
</footer>



<script>
	$('.header').backgroundMove({
	  movementStrength:'30'
	});
</script>

<script>
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
</script>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>

<script>

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

</script>
</body>
</html> 