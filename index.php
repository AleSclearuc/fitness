<?php include("funcoes.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Fitness</title>
    <meta name="description" content="" />
    <meta name="keywords" content= ""/>
    <meta name="abstract" content=""/>
    <meta name="rating" content="general" />
    <meta name="Language" content="PT-BR" />
    <meta name="owner" content="Fitness" />
    <meta name="author" content="http://alesclearuc.com.br" />
    <meta name="url" content="http://fitness.com.br/" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito|Open+Sans|Nunito+Sans|Varela+Round|Lato" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link rel="shortcut icon" href="favicon.ico" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    
    <script src="https://use.fontawesome.com/acce729b06.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/js.js"></script>
    <script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
</head>

<body>
<div class="banner">
    <div class="container-fluid menu">
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1 class="logo" title="Fitness"><a class="navbar-brand" href="?pagina=home" title="Fitness"><img src="img/fitness.png" height="47" width="151" alt="Fitness" border="0" /></a></h1>
                </div>
                    
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="?pagina=about"<?php if($_GET['pagina'] == 'about') {echo 'class="active"';} ?> title="About">about</a></li>
                    <li><a href="?pagina=howitworks"<?php if($_GET['pagina'] == 'howitworks') {echo 'class="active"';} ?> title="How It Works">how it works</a></li>
                    <li><a href="?pagina=services"<?php if($_GET['pagina'] == 'services') {echo 'class="active"';} ?> title="Services">Services</a></li>
                    <li><a href="?pagina=faq"<?php if($_GET['pagina'] == 'faq') {echo 'class="active"';} ?> title="FAQ">faq</a></li>
                    <li><a href="?pagina=contact"<?php if($_GET['pagina'] == 'contact') {echo 'class="active"';} ?> title="Contact">contact</a></li>
                </ul>
            </div>
            <div id="busca">
                <form method="post" action="">
                    <input type="text" name="pesquisa" class="field-busca" placeholder="Busca"/>
                    <input type="submit" value="&#xf002;" title="Buscar" class="btn-busca"/>
                </form>
            </div>
        </nav>
    </div>
    <img src="img/banner.jpg" width="100%" height="auto" />
</div>

<?php QueryString($_GET['pagina'], "home", "conteudos"); ?>

<div class="container-fluid footer">
    <div class="container">
        <div class="row footer-sec">
            <div class="col-xs-12 col-sm-4">
            	<h3>Resources</h3>
            	<p>Easily manage your inspiration and work-in-progress by dragging images into projects and sharable client groups. work-in-progress by dragging images into projects and sharable client group</p>
            </div>
            <div class="col-xs-12 col-sm-5">
            	<h3>About Us</h3>
                <p>Easily manage your inspiration and work-in-progress by dragging images into projects and sharable client groups. work-in-progress by dragging images into projects and sharable client group</p>
            </div>
            <div class="clearfix visible-xs-block"></div>
            <div class="col-xs-12 col-sm-3">
            	<h3>Stay in Touch</h3>
                <ul class="social">
                	<li><a href="#" title=""><i class="fa fa-facebook fb-ico fa-lg"></i></a></li>
                    <li><a href="#" title=""><i class="fa fa-twitter tw-ico fa-lg"></i></a></li>
                    <li><a href="#" title=""><i class="fa fa-youtube-play yt-ico fa-lg"></i></a></li>
                    <li><a href="#" title=""><i class="fa fa-linkedin in-ico fa-lg"></i></a></li>
                </ul>
            </div>
    	</div>
        <div class="row">
          <div class="col-xs-6 col-md-4"></div>
          <div class="col-xs-12 col-sm-6 col-md-8">
            <form id="form-news" name="f1" action="enviar_news.php" method="POST" onSubmit="return checkrequired(this)">
                <div class="row">
                  <div class="col-md-4">
                  	<input type="text" id="nome" name="requirednome" class="field-news" placeholder="Your Name" />
                  </div>
                  <div class="col-md-5">
                  	<input type="text" id="emails" name="requiredemail" class="field-news" onblur="validacaoEmail(f1.emails)" placeholder="Your Email" /><div id="msgemail"></div>
                  </div>
                  <div class="col-md-3">
                  	<input type="submit" class="btn-news" value="Join Newsletter   &#xf138;" title="Join Newsletter" />
                  </div>
                </div>
            </form>
          </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="fim">Copyright <?php echo date("Y"); ?> &reg; - Fitness - Todos os Direitos Reservados . WebDesign por <a href="http://alesclearuc.com.br" title="AleSclearuc - WebSite Solutions" target="_blank"><strong>AleSclearuc</strong></a></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>