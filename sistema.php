<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    }
    $result = $conexao->query($sql);
    ?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel="stylesheet" href="./style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mate&family=Patua+One&display=swap" rel="stylesheet">
    <title>Home</title>
    <style>
      .box{
        padding: 0.5em;
      }

      .box a{
        text-decoration: none;
        color: white;
        border: 3px solid darkorange;
        padding: 10px;
        border-radius: 1em;
      }

      .box a:hover{
        text-decoration: none;
        color: darkorange;
        border: 3px solid white;
        padding: 10px;
        border-radius: 1em;
      }
    </style>
</head>



<body>	

	<div class="navigation-wrap bg-light start-header start-style">
		<div class="mMenu">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-light">
					
						<a class="navbar-brand" href="/" target="_blank"><img src="img/Bingolim.png" alt=""></a>	
						
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto py-4 py-md-0">
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
									<a class="nav-link" href="index.html">Home</a>
								</li>
								
								
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Modelos</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="catalogo.html">Jovem Aprendiz
                                        </a>
										<a class="dropdown-item" href="catalogo.html">Primeiro Emprego</a>
										<a class="dropdown-item" href="catalogo.html">Profissional</a>
										
									</div>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="blog.html">Blog</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 espc">
									<a class="nav-link" href="sobre.html">Sobre nós</a>
								</li>

             
							</ul>
              
              <div class="box">
              <a href="sair.php">Sair</a>
            </div>
              
            </div>
						
					</nav>		
				</div>
			</div>
		</div>
	</div>
	
			
              <div>
                <main>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/doubt.webp" alt="" class="img-fluid">
       
    

        <div class="container">
          <div class="carousel-caption text-left vidro">
            <h1>Problemas montando o próprio currículo?</h1>
            <p class="corB">Não seja por isso! Conheça o Facilitated Curriculum: Escolha e personalize o curriculo dos seus sonhos! Disponha de uma variedade de templates, para todos os gostos e preferências. Pois é... Nunca foi tão fácil fazer um currículo! </p>
            <p><a class="btn btn-lg btn-primary" href="formulario.html" role="button">Criar Currículo</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/8-melhores-modelos-formas-curriculo-celular-2023.jpg" alt="" class="img-fluid">
        </svg>

        <div class="container">
          <div class="carousel-caption vidro">
            <h1>Conheça nossos modelos</h1>
            <p class="corB">Desfrute de uma variedade de templates de currículos para alavancar sua competitividade no mercado de trabalho.Dê uma olhada em nossos modelos predefinidos. É só escolher um e preencher com seus dados, simples assim!</p>
            <p><a class="btn btn-lg btn-primary" href="catalogo.html" role="button">Modelos</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/man-g130ecdd20_1280.jpg" alt="" class="img-fluid">

        <div class="container">
          <div class="carousel-caption text-right vidro">
            <h1>Não sabe por onde começar?</h1>
            <p  class="corB">Não seja por isso!
              Acesse nosso blog e veja dicas de como montar um currículo campeão e dê aquele impulso na corrida por aquela vaga de emprego.
              </p>
            <p><a class="btn btn-lg btn-primary" href="blog.html" role="button">Dicas</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
                
                </div>
<div class="container marketing">
  <h2 class="centro" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; margin-bottom: 2em; margin-top: 2em;">Crie um currículo online. Comece escolhendo um modelo:</h2>

    <!-- Three columns of text below the carousel -->
    <div class="linha">
      <div class="col-lg-4 bloco_curriculo">
        <a href="formulario.html">
        <img src="img/WhatsApp Image 2023-05-14 at 14.38.43.jpeg" class="logo1" alt=""></a>

        <h2> Jovem Aprendiz</h2>
        
        <p><a class="btn btn-secondary" href="catalogo.html" role="button">Veja Mais &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4 bloco_curriculo">
        <a href="formulario.html">
        <img src="img/WhatsApp Image 2023-05-14 at 14.38.20 (1).jpeg" class="logo1" alt=""></a>

        <h2>Primeiro Emprego</h2>
        
        <p><a class="btn btn-secondary" href="catalogo.html" role="button">Veja Mais &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4 bloco_curriculo">
        <a href="formulario.html">
        <img src="img/WhatsApp Image 2023-05-14 at 14.37.50.jpeg" class="logo1" alt=""></a>

        <h2>Profissional</h2>
        
        <p><a class="btn btn-secondary" href="catalogo.html" role="button">Veja Mais &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">
    <h2 class="centro" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; margin-bottom: 0.5em; margin-top: 2em;">Como funciona:</h2>
    <div class="row featurette aline spacePad">
      <div class="col-md-7">
        <h2 class="featurette-heading">Escolha um Modelo. </h2>
        <p class="lead">Selecione um modelo de curriculos</p>
      </div>
      <div class="col-md-5 centro">
        
        <img src="img/Design_sem_nome-removebg-preview.png" alt="" class="imgdicas">
     
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette aline spacePad">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Preenha seus dados </h2>
        <p class="lead">Preenha os campos destacados para o preenchimento do curriculo</p>
      </div>
      <div class="col-md-5 order-md-1 centro">
        <img src="img/Monte_seu_Currículo__4_-removebg-preview.png" alt="" class="imgdicas">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette aline   spacePad">
      <div class="col-md-7">
        <h2 class="featurette-heading">Faça o download</h2>
        <p class="lead">Personalize o seu currículo com seu próprio estilo e Baixe seu currículo em PDF</p>
      </div>
      <div class="col-md-5 centro">
        <img src="img/Monte_seu_Currículo__6_-removebg-preview.png" alt="" class="imgdicas">

      </div>
    </div>

    <hr class="featurette-divider">

		</div>

	<div class="teste">
    
    <h2 style="padding: 4em;">Experimente montar currículo com a Facilitated Curriculum agora</h2>
   
    <button type="submit" class="bbotao" style="margin-bottom: 4em;"> Escolha um dos modelos</button>
  
  </div>



<!--/.section-->

      <!--/.row--> 
    </div>
<!--/.container--> 
    <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 500" xmlns="http://www.w3.org/2000/svg" class="wave"><defs><linearGradient id="gradient" x1="0%" y1="50%" x2="100%" y2="50%"><stop offset="5%" stop-color="#abb8c388"></stop><stop offset="95%" stop-color="#abb8c388"></stop></linearGradient></defs><path d="M 0,500 C 0,500 0,166 0,166 C 82.09569377990434,144.22966507177034 164.19138755980867,122.45933014354065 272,129 C 379.8086124401913,135.54066985645935 513.3301435406697,170.39234449760767 612,186 C 710.6698564593303,201.60765550239233 774.488038277512,197.9712918660287 850,180 C 925.511961722488,162.0287081339713 1012.7177033492824,129.7224880382775 1113,125 C 1213.2822966507176,120.2775119617225 1326.6411483253587,143.13875598086125 1440,166 C 1440,166 1440,500 1440,500 Z" stroke="none" stroke-width="0" fill="url(#gradient)" class="transition-all duration-    300 ease-in-out delay-150 path-0"></path><defs><linearGradient id="gradient" x1="0%" y1="50%" x2="100%" y2="50%"><stop offset="5%" stop-color="#abb8c3ff"></stop><stop offset="95%" stop-color="#abb8c3ff"></stop></linearGradient></defs><path d="M 0,500 C 0,500 0,333 0,333 C 86.72727272727272,343.76555023923447 173.45454545454544,354.53110047846894 266,363 C 358.54545454545456,371.46889952153106 456.9090909090909,377.6411483253588 553,371 C 649.0909090909091,364.3588516746412 742.909090909091,344.9043062200957 852,325 C 961.090909090909,305.0956937799043 1085.4545454545455,284.74162679425837 1186,286 C 1286.5454545454545,287.25837320574163 1363.2727272727273,310.12918660287085 1440,333 C 1440,333 1440,500 1440,500 Z" stroke="none" stroke-width="0" fill="url(#gradient)" class="transition-all duration-300 ease-in-out delay-150 path-1"></path></svg>
  </div>
</div>
  <!--/.section-->
  <div class="rodape">
    <div class="contRodape">
      <img src="img/Bingolim.png" alt="" class="logo">
      <p style="color: white">Copyright © 2023</p>
      <p style="color: white">Todos os direitos reservados</p>
    </div>
    <div class="contRodape"> 
      <h4>Curriculos</h4>
      <p><a href="#">Criar curriculo</a></p>
      <p><a href="#">Modelos</a></p>
      <p><a href="#">Dicas</a></p>
    </div>
    <div class="contRodape">
      <h4> Suporte</h4>
      <p><a href="#">Termos de uso</a></p>
      <p><a href="#">Privacidade</a></p>
      <p><a href="#">Contato</a></p>
    </div>
  </div>
  </body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
<script  src="funcao.js"></script>
</html>