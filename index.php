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

  <script src="script/script.js"></script>

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
				<p>Olá meu nome é Rafael, sou Engenheiro de Computação e trabalho tanto nas áreas de TI como eletrônica!<p>
			</div>
			<div id="about2" class="col-sm-4 slideanimup">
				<p>Natural de Três de Maio, RS, tive meu primeiro contato com computadores logo aos 9 anos de idade e sempre gostei da "coisa", a partir daí eu era o cara que resolvia os problemas do computador. Com o tempo fui procurando ganhar conhecimento e então fiz o curso técnico em informática na escola junto com o ensino médio. Trabalhei um pouco com design e sistemas e então após um período de muitas dúvidas resolvi entrar para o ensino superior, foi então que prestei vestibular na a Univeridade Federal de Santa Maria para o curso de Bacharel em Engenharia da Computação</p>
				<p>Na faculdade sempre participei de projetos e laboratórios, aprendi muito sobre servidores e sistemas operacionais Linux e Mac OS, além é claro de <b>muita programação</b>. Por muito tempo dei suporte a aulas de ensino a distância através da plataforma Moodle. Participei e organizei congressos entre outras atividades extracurriculares.</p>
				<p>Hoje como muitos sei de tudo um pouco, divido meu tempo de estudo entre programação hardware e web!</p>
				<p>Desde pequeno sempre gostei do lado do design (talvez no futuro faça alguma especialização na área), por conta disso trabalho com as ferramentas Photoshop e Corel mas dou preferência para o CorelDraw.</p>		
				<p>Além de habilidades no Fifa e no CounterStrike também tenho bons conhecimentos em programação! C, Java, Javascript, HTML, PHP, SQL são algumas da linguagem que gosto de desenvolver!</p>
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
          <h4>AngularJS</h4>
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
				<img src="img/projects/gestorPainel.png">
			</div>
		</div>
		<div class="col-sm-8">
			<h3>Gestor</h3>
			<h4>Projeto de um sistema ERP</h4>
			<p>Sistema ERP desenvolvido através da plataforma CakePHP. Possui cadastros de entradas e saídas, clientes e fornecedores, gráficos e etc. Frontend baseado no framework Bootstrap. Mais informações pode-se acompanhar através do meu repositório Github.</p>      
      <button id="botao" class="btn" data-toggle="modal" data-target="#myModalGestor">Mais Info</button>
		</div>
	</div>
	<div class="row slideanimleft">
		<div class="col-sm-8">
			<h3>LazyGame</h3>
			<h4>Jogo Viral em JavaScript</h4>
			<p>Jogo viral experimental utilizando JavaScript e AngularJS, o objetivo do jogo é manter o maior tempo possível o botão start apertado enquanto contabiliza o tempo.</p>
      <button id="botao" class="btn" data-toggle="modal" data-target="#myModalLazy">Mais Info</button>
		</div>
		<div class="col-sm-4">			
			<div class="thumbnail">
				<img src="img/projects/lazyPlay.png">
			</div>
		</div>
	</div>
	<div class="row slideanimright">
		<div class="col-sm-4">
			<div class="thumbnail">
				<img src="img/projects/loremHome.png">
			</div>
		</div>
		<div class="col-sm-8">
			<h3>Lorem Ipsum Festas</h3>
			<h4>Layout FrontEnd para site insipirado em Festas</h4>
			<p>FrontEnd para site inspirado em festas utilizando framework Bootstrap. Conta com script de upload de arquivos/fotos JsFileUploader.</p>      
      <button id="botao" class="btn" data-toggle="modal" data-target="#myModalLorem">Mais Info</button>
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
			  	<button id="botao" class="btn pull-right bounceInAnim" type="submit">Send</button>
				</form>
			</div>		
		</div>
	</div>
</div>


<div id="alert" class="container-fluid alert alert-success alert-dismissable text-center" style="margin-top: 20px;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Your message has been sent successfully.
</div>

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


<!-- Modal Gestor -->
<div id="myModalGestor" class="modal fade " role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Gestor</h4>
      </div>
      <div class="modal-body">
        <!--Carousel-->

        <div id="myCarouselGestor" class="carousel slide" data-ride="carousel">          

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="img/projects/gestorPainel.png" alt="Painel Gestor">
            </div>

            <div class="item">
              <img src="img/projects/gestorClientes.png" alt="Clientes Gestor">
            </div>

            <div class="item">
              <img src="img/projects/gestorSaidas.png" alt="Saidas Gestor">
            </div>

            <div class="item">
              <img src="img/projects/gestorSaidas2.png" alt="Saidas Gestor">
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarouselGestor" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="right carousel-control" href="#myCarouselGestor" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Próxima</span>
          </a>
        </div>

        <!--EndCarousel-->
      </div>
      <div class="modal-footer">
        <button id="botao" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<!-- Modal LoremIpsumFestas -->
<div id="myModalLorem" class="modal fade " role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Lorem Ipsum Festas</h4>
      </div>
      <div class="modal-body">
        <!--Carousel-->

        <div id="myCarouselLorem" class="carousel slide" data-ride="carousel">          

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="img/projects/loremHome.png" alt="Lorem Home">
            </div>

            <div class="item">
              <img src="img/projects/loremFestas.png" alt="Lorem Festas">
            </div>

            <div class="item">
              <img src="img/projects/loremFotos.png" alt="Lorem Fotos">
            </div>

            <div class="item">
              <img src="img/projects/loremContato.png" alt="Lorem Contato">
            </div>

            <div class="item">
              <img src="img/projects/loremJsFileUploader.png" alt="Lorem JsFileUploader">
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarouselLorem" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="right carousel-control" href="#myCarouselLorem" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Próxima</span>
          </a>
        </div>

        <!--EndCarousel-->
      </div>
      <div class="modal-footer">
        <button id="botao" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<!-- Modal LazyGame -->
<div id="myModalLazy" class="modal fade " role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">LazyGame</h4>
      </div>
      <div class="modal-body">
        <!--Carousel-->

        <div id="myCarouselLazy" class="carousel slide" data-ride="carousel">          

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="img/projects/lazyPlay.png" alt="Lazy Play">
            </div>

            <div class="item">
              <img src="img/projects/lazyRanking.png" alt="Lazy Rankinkg">
            </div>

            <div class="item">
              <img src="img/projects/lazyAbout.png" alt="Lazy About">
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarouselLazy" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="right carousel-control" href="#myCarouselLazy" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Próxima</span>
          </a>
        </div>

        <!--EndCarousel-->
      </div>
      <div class="modal-footer">
        <button id="botao" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</body>
</html> 