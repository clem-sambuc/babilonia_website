<?php
  require("php/lang-index.php");
?> 
<!DOCTYPE html>
<html lang=<?php echo TXT_LANG; ?> >
<head>
  <meta charset="utf-8" />
  <meta name="Clément Sambuc" content="Babilônia Website" />
  <title>Babilônia Homepage - Cultivo Inteligente, Engenharia Acústica e Business Development em São Paulo</title>
  <meta name="description" content="Nós somos uma empresa de engenharia com foco em meio ambiente. Desenvolvemos soluções inovadoras e ecológicas para melhorar a qualidade de vida das pessoas e tornar o mundo mais verde e sustentável.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <!-- attach CSS styles -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style_landing_page.css" rel="stylesheet" />
  <link href="css/select-lang.css" rel="stylesheet">
   
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" />
  <link href="file:///css/bootstrap-social.css" rel="stylesheet" />
  
</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top">
  
  <div class="container" align="right">
    <div class="dropdown">
      <div style="font-family:'Sansation Light'"><font size="3"><?php echo TXT_ESCOLHE_LINGUA; ?></font>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img id="imgNavSel" src="" alt="" class="img-thumbnail icon-small"><span class="caret"></span></a>
        <ul class="dropdown-menu dropdown-menu-right" role="menu">
          <li><a id="navBr" href="index?lang=pt" class="language"> <img id="imgNavBr" src="" alt="" class="img-thumbnail icon-small">  <span id="lanNavBr">Português</span></a></li>
          <li><a id="navFra" href="index?lang=fr" class="language"><img id="imgNavFra" src="" alt="" class="img-thumbnail icon-small">  <span id="lanNavFra">Français</span></a></li>
          <li><a id="navEng" href="index?lang=en" class="language"><img id="imgNavEng" src="" alt="" class="img-thumbnail icon-small">  <span id="lanNavEng">English</span></a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- first section - Home -->
  <div id="home" class="home">
    <div class="container bottom-top-space">
    <div class="text-vcenter">
      <img class="img-responsive center-block img-scaled" src="img/logos/babilonia_logo.png"/>
      
      <p align="center"><?php echo TXT_QUEM_SOMOS; ?></p>
      </div>
    </div>
  </div>
  <!-- /first section -->

  <!-- second section - Nossa missão -->
  <div id="selection">
    <div class="container">
<!--
        <div class="row text-center row-centered">
-->
            <p align="center"> <font size="3"><?php echo TXT_ATIVIDADES; ?></font></p>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-centered padding-bottom">
              <a href="cultivo.html"><button class="btn btn-default">
                <img src="img/logos/BABILONIA_CULTIVO_INTELIGENTE2_Vertical.png" width="70%" />
              </button></a>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-centered padding-bottom">
              <a href="acustica?lang=<?php echo TXT_LANG; ?>"><button class="btn btn-default">
                <img src="img/logos/BABILONIA_ENGENHARIA_ACÚSTICA2_Vertical.png" width="70%" />
              </button></a>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-centered padding-bottom">
              <a href="business-dev.html"><button class="btn btn-default">
                <img src="img/logos/BABILONIA_BUSINESS_DEVELOPMENT2_Vertical.png" width="70%" />
              </button></a>
            </div>
          </div>
        </div>
  </div>
  <!-- /second section -->


  <!-- attach JavaScripts -->
  <!-- jQuery -->
  <!--
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
-->
  <script src="js/jquery.js"></script>
  
  <script src="js/bootstrap.min.js"></script>
  
  <script src="js/select-lang.js"></script>
</body>
</html>
