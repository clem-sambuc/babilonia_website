<?php
  require("php/lang/lang-acustica.php");
?> 
<!DOCTYPE html>
<html lang=<?php echo TXT_LANG; ?> >
<head>
  <meta charset="utf-8" />
  <meta name="Clément Sambuc" content="Babilônia Website" />
  <title>Babilônia Engenharia Acústica em São Paulo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <!-- attach CSS styles -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style-acustica.css" rel="stylesheet" />
  <link href="css/font-style.css" rel="stylesheet" />
  <link href="css/background-acustica.css" rel="stylesheet" />
  <link href="css/scrolling-nav.css" rel="stylesheet">
  <link href="css/select-lang.css" rel="stylesheet">
  
  <link rel="stylesheet" type="text/css" href="css/hover-style.css" />
  
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" />
  <link href="file:///css/bootstrap-social.css" rel="stylesheet" />
  
</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

  <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header page-scroll">
                <a class="navbar-brand page-scroll" rel="canonical" href="index?lang=<?php echo TXT_LANG; ?>">
                  <img class="hidden-xs hidden-sm hidden-md" src="img/logos/BABILONIA_ENGENHARIA_ACÚSTICA2_Horizontal-noborder-scale40.png"/>
                  <img class="visible-xs visible-sm visible-md" src="img/logos/BABILONIA_ENGENHARIA_ACÚSTICA2_Horizontal-noborder-scale30.png"/>
                </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only"><?php echo TXT_NAV; ?></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden"><a class="page-scroll" href="#"></a></li>
                    <li><a class="page-scroll" href="#nossa_missao"> <?php echo TXT_MISSAO; ?> </a></li>
                    <li><a class="page-scroll" href="#servicos"> <?php echo TXT_SERVICOS; ?></a></li>
                    <li><a class="page-scroll" href="#mercados"><?php echo TXT_MERCADOS; ?> </a></li>
                    <li><a class="page-scroll" href="#ferramentas"> <?php echo TXT_FERRAMENTAS; ?> </a></li>
                    <li><a class="page-scroll" href="#sobre_nos"> <?php echo TXT_SOBRE_NOS; ?> </a></li>
                    <li><a class="page-scroll" href="#contato"> <?php echo TXT_CONTATO; ?> </a></li>
                </ul>
                <!-- languages and social media icons -->
                <ul class="nav navbar-nav navbar-right social">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img id="imgNavSel" src="" alt="..." class="img-thumbnail icon-small">  <span id="lanNavSel"></span> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a id="navBr" href="acustica?lang=pt" class="language"> <img id="imgNavBr" src="" alt="..." class="img-thumbnail icon-small">  <span id="lanNavBr">Português</span></a></li>
                          <li><a id="navFra" href="acustica?lang=fr" class="language"><img id="imgNavFra" src="" alt="..." class="img-thumbnail icon-small">  <span id="lanNavFra">Français</span></a></li>
                          <li><a id="navEng" href="acustica?lang=en" class="language"><img id="imgNavEng" src="" alt="..." class="img-thumbnail icon-small">  <span id="lanNavEng">English</span></a></li>
<!--
                          <li><a id="navEs" href="#" class="language"> <img id="imgNavEs" src="" alt="..." class="img-thumbnail icon-small">  <span id="lanNavEs">Español</span></a></li>
-->
                      </ul>
                    </li>
                    
                    
                    <li><a href="http://www.facebook.com/babilonia.eco"><i class="fa fa-sm fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/babilonia_eco"><i class="fa fa-sm fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/babil%C3%B4nia---jardins-suspensos?trk=company_logo"><i class="fa fa-sm fa-linkedin"></i></a></li>
                    <li><a href="https://instagram.com/babilonia.eco"><i class="fa fa-sm fa-instagram"></i></a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

  <!-- first section - Home -->
  <div id="home" class="home">
    <div class="text-vcenter">
      <img class="img-responsive center-block img-scaled" src="img/logos/babilonia_logo_blanc.png"/>
<!--
      <h1><font color="white">Babilônia</font></h1>
      <h2><font color="white">Jardins suspensos</font></h2>
-->
      </div>
  </div>
  <!-- /first section -->

  <!-- second section - Nossa missão -->
  <div id="nossa_missao" class="pad-section">
    <div class="container">
        <h2 class="text-center"> <?php echo TXT_MISSAO; ?> </h2> <hr />
        <div class="row text-center row-centered">
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <div class="grid">
                <figure class="effect-marley">
                  <img src="img/acustica/conforto.jpg" alt="img25"/>
                  <figcaption>
                    <h2><span> <?php echo TXT_CONFORTO_TITLE; ?> </span></h2>
                    <p> <?php echo TXT_CONFORTO_BODY; ?> </p>
                  </figcaption>
                </figure>
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <div class="grid">
                <figure class="effect-marley">
                  <img src="img/acustica/producao.jpg" alt="img25"/>
                  <figcaption>
                    <h2><span> <?php echo TXT_OPERACAO_TITLE; ?> </span></h2>
                    <p><?php echo TXT_OPERACAO_BODY; ?> </p>
                  </figcaption>
                </figure>
              </div>
            </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">            
              <div class="grid">
                <figure class="effect-marley">
                  <img src="img/acustica/conscientizacao.jpg" alt="img25"/>
                  <figcaption>
                    <h2><span> <?php echo TXT_CONSCIENT_TITLE; ?> </span></h2>
                    <p> <?php echo TXT_CONSCIENT_BODY; ?> </p>
                  </figcaption>
                </figure>
              </div>
            
          </div>
        </div>
        <div id="text-center-thigh"> <h3 style="color:red"> <?php echo TXT_MISSAO_BODY1; ?> </h3></div>
        <p align="center"> <?php echo TXT_MISSAO_BODY2; ?> </p>
    </div>
  </div>
  <!-- /second section -->
  
  <!-- Imagem Roof Measurement -->
  <div id="im-roof-measurement" class="pad-section">
    <div class="container">
    </div>
  </div>
  <!-- /Imagem Heliponto 1 -->
  
  <!-- third section - Servicos -->
  <div id="servicos" class="pad-section">
    <div class="container">
        <h2 class="text-center"> <?php echo TXT_SERVICOS; ?> </h2> <hr />
        
        <div class="row extra-bottom-padding">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="padding-top-lg">
              <h3 class="text-center" style="color:#6677c4;font-weight:900;"><?php echo TXT_DIAGNOSTICAR_TITLE; ?></h3>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 float-right">
            <img class="img-responsive center-block" src="img/acustica/Serviços - Diagnosticar.jpg"/>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="padding-top-sm">
              <p align="center"><strong> <?php echo TXT_DIAGNOSTICAR_BODY1; ?> </strong></p>
              <p align="left"><?php echo TXT_DIAGNOSTICAR_BODY2; ?> </p>
            </div>
          </div>
        </div>
        
        <div class="row extra-bottom-padding">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 float-right">
            <div class="padding-top-lg">
              <h3 class="text-center" style="color:#6677c4;font-weight:900;"> <?php echo TXT_PREVER_TITLE; ?> </h3>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <img class="img-responsive center-block" src="img/acustica/Serviços - Prever.png"/>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 float-right">
            <div class="padding-top-sm">
              <p align="center"><strong> <?php echo TXT_PREVER_BODY1; ?> </strong></p>
              <p align="left"> <?php echo TXT_PREVER_BODY2; ?> </p>
            </div>
          </div>
        </div>
        
        <div class="row extra-bottom-padding">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="padding-top-lg">
              <h3 class="text-center" style="color:#6677c4;font-weight:900;"> <?php echo TXT_CONTROLAR_TITLE; ?> </h3>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 float-right">
            <img class="img-responsive center-block" src="img/acustica/Serviços - Controlar.jpg"/>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="padding-top-sm">
              <p align="center"><strong> <?php echo TXT_CONTROLAR_BODY1; ?> </strong></p>
              <p align="left"><?php echo TXT_CONTROLAR_BODY2; ?> </p>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 float-right">
            <div class="padding-top-lg">
              <h3 class="text-center" style="color:#6677c4;font-weight:900;"> <?php echo TXT_COMPARTILHAR_TITLE; ?> </h3>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <img class="img-responsive center-block" src="img/acustica/Serviços - Compartilhar.jpg"/>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 float-right">
            <div class="padding-top-sm">
              <p align="center"><strong> <?php echo TXT_COMPARTILHAR_BODY1; ?> </strong></p>
              <p align="left"> <?php echo TXT_COMPARTILHAR_BODY2; ?> </p>
            </div>
          </div>
        </div>
        
    </div>
  </div>
  <!-- /third section -->
  
  <!-- Imagem Escavadeira-->
  <div id="im-escavadeira" class="pad-section">
    <div class="container">
    </div>
  </div>
  <!-- /Imagem Heliponto 2-->

  <!-- fourth section - Mercados -->
  <div id="mercados" class="pad-section">
    <div class="container">
      <h2 class="text-center"> <?php echo TXT_MERCADOS; ?> </h2> <hr />
      
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 padding-0">
          <div class="grid">
            <figure class="effect-ming">
              <img src="img/acustica/Mercado - Meio ambiente-scaled.jpeg" alt="img25"/>
              <figcaption>
                <h2><span> <?php echo TXT_MEIO_AMBIENTE; ?> </span></h2>
                <p> <?php echo TXT_MEIO_AMBIENTE_BODY; ?> </p>
              </figcaption>
            </figure>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 padding-0">
          <div class="grid">
            <figure class="effect-ming">
              <img src="img/acustica/Mercado - Infraestruturas.jpg" alt="img25"/>
              <figcaption>
                <h2><span> <?php echo TXT_INFRAESTRUTURAS; ?> </span></h2>
                <p><?php echo TXT_INFRAESTRUTURAS_BODY; ?> </p>
              </figcaption>
            </figure>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 padding-0">
          <div class="grid">
            <figure class="effect-ming">
              <img src="img/acustica/Mercado - Energia-scaled.jpg" alt="img25"/>
              <figcaption>
                <h2><span> <?php echo TXT_ENERGIA; ?> </span></h2>
                <p> <?php echo TXT_ENERGIA_BODY; ?> </p>
              </figcaption>
            </figure>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 padding-0">
          <div class="grid">
            <figure class="effect-ming">
              <img src="img/acustica/Mercado - Arquitetônico-scaled.jpg" alt="img25"/>
              <figcaption>
                <h2><span> <?php echo TXT_ARQUITETONICA; ?> </span></h2>
                <p> <?php echo TXT_ARQUITETONICA_BODY; ?> </p>
              </figcaption>
            </figure>
          </div>
        </div>
        
    </div>
  </div>
  <!-- /fourth section -->
  
  <!-- Imagem Eolica-->
  <div id="im-eolica" class="pad-section">
    <div class="container">
    </div>
  </div>
  <!-- /Imagem Eolica-->
  
  <!-- fifth section - Ferramentas -->
  <div id="ferramentas" class="pad-section">
    <div class="container">
      <h2 class="text-center"> <?php echo TXT_FERRAMENTAS; ?> </h2> <hr />
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 padding-0">
          <div class="grid">
            <figure class="effect-lily">
              <img src="img/acustica/Soft_Insul.png" alt="img25"/>
              <figcaption>
                <p> <?php echo TXT_INSUL; ?> </p>
              </figcaption>
            </figure>
          </div>
        </div>
<!--
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 padding-0">
          <div class="grid">
            <figure class="effect-lily">
              <img src="img/acustica/Soft_01dB.png" alt="img25"/>
              <figcaption>
                <p>Medições pontuais e monitoramentos permanentes de ruído e vibração</p>
              </figcaption>
            </figure>
          </div>
        </div>
-->
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 padding-0">
          <div class="grid">
            <figure class="effect-lily">
              <img src="img/acustica/Soft_catt.png" alt="img25"/>
              <figcaption>
                <p> <?php echo TXT_CATT; ?> </p>
              </figcaption>
            </figure>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 padding-0">
          <div class="grid">
            <figure class="effect-lily">
              <img src="img/acustica/Soft_CadnaA.png" alt="img25"/>
              <figcaption>
                <p> <?php echo TXT_CADNAA; ?> </p>
              </figcaption>
            </figure>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 padding-0">
          <div class="grid">
            <figure class="effect-lily">
              <img src="img/acustica/Soft_CadnaR.png" alt="img25"/>
              <figcaption>
                <p> <?php echo TXT_CADNAR; ?> </p>
              </figcaption>
            </figure>
          </div>
        </div>
<!--
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 padding-0">
          <div class="grid">
            <figure class="effect-lily">
              <img src="img/acustica/Soft_Actran.png" alt="img25"/>
              <figcaption>
                <p>Vibroacústica e aeroacústica por elementos finitos (FEM)</p>
              </figcaption>
            </figure>
          </div>
        </div>
-->
    </div>
  </div>
  <!-- /fifth section -->
  
  <!-- Imagem anechoic-->
  <div id="im-anechoic" class="pad-section">
    <div class="container">
    </div>
  </div>
  <!-- /Imagem anechoic-->
  
  <!-- sixth section - Sobre Nos -->
  <div id="sobre_nos" class="pad-section">
    <div class="container">
      <h2 class="text-center"> <?php echo TXT_SOBRE_NOS; ?> </h2> <hr />
      <div class="row text-center row-centered">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-centered">
              <img class="img-responsive center-block" src="img/acustica/Sobre nos - Vico.png" style="width:60%"/>
              <div class="padding-top">
                <p><strong> <?php echo TXT_VICTOR_TITLE; ?> </strong></p>
                <p align="left"> <?php echo TXT_VICTOR_BODY; ?> </p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-centered">
              <div class="padding-top-sm">
                <img class="img-responsive center-block" src="img/acustica/Sobre nos - Clem.png" style="width:60%"/>
                <div class="padding-top">
                  <p><strong> <?php echo TXT_CLEMENT_TITLE; ?> </strong></p>
                  <p align="left"> <?php echo TXT_CLEMENT_BODY; ?> </p>
                </div>
              </div>
            </div>
        </div>
    </div>
  </div>
  <!-- /sixth section -->
  
  <!-- fourth section - closing -->
<!--
  <div id="closing">
    <div class="text-vcenter">
      <img class="img-responsive center-block img-scaled" src="img/Logo_Babilonia_Jardins_Suspensos.png"/>
    </div>
  </div>
-->

  
  <!-- last section -->
  <div id="contato" class="pad-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2> <?php echo TXT_CONTATO; ?> </h2> <hr />
          <p> <?php echo TXT_CONTATO_BODY; ?> </p>
        </div>
      </div>
    </div>
  </div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div>
                <div class="panel panel-default">
                        <div id="google_map" class="map"></div>
                        <!-- <div id="map" style="width:50%;height:50%"></div> -->
                </div>
            </div>
        </div>
       <!--  <div class="col-md-6">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Contato</legend>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="fname" name="name" type="text" placeholder="Nome" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" name="email" type="text" placeholder="Email" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="phone" name="phone" type="text" placeholder="Telefone" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="assunto" name="assunto" type="text" placeholder="Assunto" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <textarea class="form-control" id="message" name="message" placeholder="Messagem" rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
 -->    </div>
</div>

<!-- /last section -->
  <span id="top-link-block" class="hidden">
    <a href="#" class="well well-sm"  onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
        <i class="glyphicon glyphicon-arrow-up"></i>
    </a>
  </span>
  <!-- /top-link-block -->

  <!-- footer -->
  <footer>
    <hr />
    <div class="container">
      <div class="text-right">Copyright &copy; 2018 Babilônia - Engenharia acústica</div>
    </div>
  </footer>
  <!-- /footer -->

  <!-- attach JavaScripts -->
  <!-- jQuery -->
  <!--
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
-->
  <script src="js/jquery.js"></script>
  
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBoq5iully1du16DcDCEuOZXaq16ZkhnlI"></script>
  
  <script src="js/bootstrap.min.js"></script>
  <script src="js/map.js"></script>
  <!-- Scrolling Nav JavaScript -->
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/scrolling-nav.js"></script>
  
  <script src="js/select-lang.js"></script>
  
</body>
</html>
