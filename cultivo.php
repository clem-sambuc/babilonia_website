<?php
  require("php/lang-cultivo.php");
?> 

<!DOCTYPE html>
<html lang=<?php echo TXT_LANG; ?> >
<head>
  <meta charset="utf-8" />
  <meta name="Clément Sambuc" content="Babilônia Website" />
  <title>Babilônia Cultivo Inteligente</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <!-- attach CSS styles -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style-cultivo.css" rel="stylesheet" />
  <link href="css/font-style.css" rel="stylesheet" />
  <link href="css/background-cultivo.css" rel="stylesheet" />
  <link href="css/scrolling-nav.css" rel="stylesheet">
  <link href="css/select-lang.css" rel="stylesheet">
  <link href="css/jquery.qtip.css" rel="stylesheet" />
  
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
                  <img class="hidden-xs hidden-sm hidden-md" src="img/logos/BABILONIA_CULTIVO_INTELIGENTE_Horizontal-noborder-scale40.png"/>
                  <img class="visible-xs visible-sm visible-md" src="img/logos/BABILONIA_CULTIVO_INTELIGENTE_Horizontal-noborder-scale30.png"/>
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
                    <li><a class="page-scroll" href="#solucao"> <?php echo TXT_SOLUCAO; ?></a></li>
                    <li><a class="page-scroll" href="#cultivo"><?php echo TXT_CULTIVO; ?> </a></li>
                    <li><a class="page-scroll" href="#agua"> <?php echo TXT_AGUA; ?> </a></li>
                    <li><a class="page-scroll" href="#luz"> <?php echo TXT_LUZ; ?> </a></li>
                     <li><a class="page-scroll" href="#adubo"> <?php echo TXT_ADUBO; ?> </a></li>
                    <li><a class="page-scroll" href="#aplicativo"> <?php echo TXT_APLICATIVO; ?> </a></li>
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

  <!-- second section - MISSAO -->
  <div id="nossa_missao" class="pad-section">
    <div class="container">
        <h2 class="text-center"> <?php echo TXT_MISSAO; ?> </h2> <hr />
        <div class="row text-center row-centered">
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <div class="grid">
                <figure class="effect-marley">
                  <img src="img/cultivo_inteligente/indoor_plants_confort2.jpg" alt="img25"/>
                  <figcaption>
                    <h2><span> <?php echo TXT_VIDAVERDE_TITLE; ?> </span></h2>
                    <p> <?php echo TXT_VIDAVERDE_BODY; ?> </p>
                  </figcaption>
                </figure>
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <div class="grid">
                <figure class="effect-marley">
                  <img src="img/cultivo_inteligente/plato_verde2.jpg" alt="img25"/>
                  <figcaption>
                    <h2><span> <?php echo TXT_SAUDAVEL_TITLE; ?> </span></h2>
                    <p><?php echo TXT_SAUDAVEL_BODY; ?> </p>
                  </figcaption>
                </figure>
              </div>
            </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">            
              <div class="grid">
                <figure class="effect-marley">
                  <img src="img/cultivo_inteligente/learn_gardening.jpg" alt="img25"/>
                  <figcaption>
                    <h2><span> <?php echo TXT_COMPARTILHAR_TITLE; ?> </span></h2>
                    <p> <?php echo TXT_COMPARTILHAR_BODY; ?> </p>
                  </figcaption>
                </figure>
              </div>
            
          </div>
        </div>
        <div id="text-center-thigh"> <h3 style="color:green"> <?php echo TXT_MISSAO_BODY1; ?> </h3></div>
        <p align="center"> <?php echo TXT_MISSAO_BODY2; ?> </p>
    </div>
  </div>
  <!-- /second section -->
  
  <div id="background1" class="pad-section">
    <div class="container">
    </div>
  </div>
  
  <div id="solucao" class="pad-section">
    <div class="container">
        <h2 class="text-center"> <?php echo TXT_SOLUCAO_TITLE; ?> </p> </h2> <hr />
<!--         <p align="center"> <?php echo TXT_SOLUCAO_TITLE; ?> </p>-->
         <p align="center"> <?php echo TXT_SOLUCAO_BODY2; ?> </p>
    </div>
    <img src="img/cultivo_inteligente/Fond_Site_Cuisine_Imagemap_Led_good2.jpg" class="map" usemap="#image-map" >
    <map name="image-map">
      
      <!--  area "luz1" -->
      <area shape="poly" id="activearea" alt="luz"
        data-mapid="1" class="group1"
        data-maphilight='{"groupBy":".group1","strokeColor":"FFEF93","fillColor":"FFFFA3","strokeWidth":2,"fillOpacity":0.3}'
        qtip-ref="pos-tooltip"
        qtip-classes="qtip-rounded qtip-shadow"
        qtip-title="<b>LUZ <img src='img/cultivo_inteligente/sun.png' style='position:absolute;top:-200%;left:90%;z-index:auto'></b>" qtip-content="<p>Sem luz do sol? Sem problema! Graças à <b>tecnologia LED</b>, suas plantas recebem a luz que precisam</p>"
        coords="1843,1244,1870,1260,1951,1229,1962,1113,1931,1098,1960,804,1964,802,1965,790,1684,695,1668,699,1667,710,1931,802,1900,1102,1844,1122,1843,1133,1851,1137"/>
        
      <!--  area "cultivo11" -->
      <area shape="poly" href="#cultivo" id="activearea"
        data-mapid="2" class="group2"
        data-maphilight='{"groupBy":".group2","strokeColor":"3F6219","fillColor":"CAED9E","strokeWidth":2,"fillOpacity":0.3}' 
        qtip-ref="pos-tooltip"
        qtip-classes="qtip-green qtip-rounded qtip-shadow"
        qtip-title="CULTIVO <img src='img/cultivo_inteligente/leaf.png' style='position:absolute;top:-200%;left:90%;z-index:auto'>" qtip-content="<p>Para dar um up na sua cozinha com lindas <b>plantas aromáticas</b> ou ornamentais, sempre fresquinhas e lindas!</p>"
        coords="1608,1108,1613,1013,1647,1004,1644,993,1635,984,1623,983,1614,974,1616,962,1614,954,1622,937,1619,915,1613,905,1616,890,1629,883,1624,878,1610,876,1610,873,1624,862,1623,858,1623,853,1611,844,1629,842,1630,835,1636,835,1646,837,1651,833,1655,832,1680,828,1689,835,1690,846,1697,850,1707,862,1720,860,1731,865,1744,872,1762,877,1781,895,1786,909,1782,918,1773,928,1780,942,1787,947,1799,947,1807,956,1810,962,1818,961,1829,953,1850,952,1857,959,1868,959,1872,953,1872,946,1880,940,1903,939,1912,950,1914,973,1906,985,1907,995,1909,1003,1917,1017,1916,1030,1916,1044,1916,1044,1917,1058,1914,1068,1906,1082,1899,1090,1899,1096,1933,1113,1925,1214,1844,1243" />
      
      <!--  area "cultivo12" -->
      <area shape="poly" href="#cultivo" id="activearea"
        data-mapid="2" class="group2"
        data-maphilight='{"groupBy":".group2","strokeColor":"3F6219","fillColor":"CAED9E","strokeWidth":2,"fillOpacity":0.3}' 
        qtip-ref="pos-tooltip"
        qtip-classes="qtip-green qtip-rounded qtip-shadow"
        qtip-title="CULTIVO <img src='img/cultivo_inteligente/leaf.png' style='position:absolute;top:-200%;left:90%;z-index:auto'>" qtip-content="<p>Para dar um up na sua cozinha com lindas <b>plantas aromáticas</b> ou ornamentais, sempre fresquinhas e lindas!</p>"
        coords="2020,1263,1926,1213,1934,1112,1954,1104,1962,1087,1956,1079,1944,1072,1956,1057,1977,1045,1992,1026,2003,1020,2034,1013,2060,1000,2078,998,2149,1016,2171,1030,2190,1022,2223,1022,2235,1029,2239,1036,2229,1051,2202,1055,2252,1074,2239,1175" />
      
      <!--  area "agua1" -->
      <area shape="poly" href="#agua" id="activearea"
        data-mapid="3" class="group3"
        data-maphilight='{"groupBy":".group3","strokeColor":"5E99BD","fillColor":"5E99BD","strokeWidth":2,"fillOpacity":0.3}'
        qtip-ref="pos-tooltip"
        qtip-classes="qtip-blue qtip-rounded qtip-shadow"
        qtip-title="ÁGUA <img src='img/cultivo_inteligente/drops.png' style='position:absolute;top:-200%;left:90%;z-index:auto'>" qtip-content="<p><b>Reservatórios inteligentes</b> para que suas plantinhas nunca faltem de água, mesmo quando você não está em casa!</p>"
        coords="1776,815,1918,782,2092,837,2059,1149,1907,1202,1756,1124" />
      
      <!--  area "cultivo13" -->
<!--
      <area shape="poly" href="#cultivo" id="activearea"
        data-mapid="2" class="group2"
        data-maphilight='{"groupBy":".group2","strokeColor":"3F6219","fillColor":"CAED9E","strokeWidth":2,"fillOpacity":0.3}' 
        qtip-ref="pos-tooltip"
        qtip-classes="qtip-green qtip-rounded qtip-shadow"
        qtip-title="01 SGUIBIDIBABAIBIBOUPPPP <img src='img/cultivo_inteligente/leaf.png' style='position:absolute;top:-200%;left:90%;z-index:auto'>" qtip-content="<p><b>Complex HTML</b> for your tooltip <i>here</i>!</p>"
        coords="2214,1010,2208,1080,2155,1100,1907,1002,1913,942,1961,928,2042,957,2038,936,2043,924,2039,906,2057,893,2067,884,2081,885,2095,894,2107,902,2114,884,2118,886,2124,888,2124,897,2125,920,2133,920,2137,896,2143,896,2149,912,2155,929,2165,942,2187,946,2182,967,2197,974,2192,983,2164,990" />
-->
      
      <!--  area "luz2" -->
      <area shape="poly" href="#luz" id="activearea"
        data-mapid="1" class="group1"
        data-maphilight='{"groupBy":".group1","strokeColor":"FFEF93","fillColor":"FFFFA3","strokeWidth":2,"fillOpacity":0.3}'
        qtip-ref="pos-tooltip"
        qtip-classes="qtip-rounded qtip-shadow" 
        qtip-title="LUZ <img src='img/cultivo_inteligente/sun.png' style='position:absolute;top:-200%;left:90%;z-index:auto'></b>" qtip-content="<p>Sem luz do sol? Sem problema! Graças à <b>tecnologia LED</b>, suas plantas recebem a luz que precisam</p>"
        coords="2197,806,2211,803,2212,792,1928,716,1916,718,1916,729,1919,730,1906,922,1903,923,1897,997,1906,1002,1956,985,1962,928,1968,930,1969,922,1941,912,1926,917,1941,735" />
      
      <!--  area "adubo" -->
      <area shape="poly" href="#adubo" id="activearea"
        data-mapid="4" class="group4"
        data-maphilight='{"groupBy":".group4","strokeColor":"77482e","fillColor":"CA9E92","strokeWidth":2,"fillOpacity":0.4}' 
        qtip-ref="pos-tooltip"
        qtip-classes="qtip-brown qtip-rounded qtip-shadow"
        qtip-title="ADUBO <img src='img/cultivo_inteligente/recycling-symbol.png' style='position:absolute;top:-150%;left:90%;z-index:auto'>" qtip-content="<p>Seu lixo orgânico vira <b>adubo verde</b>, cheio de bons nutrientes para otimizar a produção da sua hortinha!
</p>"
        coords="790,328,882,322,932,331,942,637,843,650,805,629" />
      
      <!--  area "remote1" -->
      <area shape="poly" href="#aplicativo" id="activearea"
        data-mapid="5" class="group5"
        data-maphilight='{"groupBy":".group5","strokeColor":"f1f1f1","fillColor":"ffffff","strokeWidth":2,"fillOpacity":0.4}' 
        qtip-ref="pos-tooltip"
        qtip-classes="qtip-light qtip-rounded qtip-shadow"
        qtip-title="CONEXÃO <img src='img/cultivo_inteligente/wifi.png' style='position:absolute;top:-150%;left:90%;z-index:auto'>" qtip-content="<p><b>Fique ligado na sua hortinha!</b> Pode controlar sua hortinha a distância e receber alertas através do nosso aplicativo
</p>"
        coords="983,1107,981,1110,981,1112,984,1115,1082,1152,1088,1153,1122,1166,1125,1169,1234,1210,1239,1211,1243,1211,1249,1210,1379,1126,1380,1119,1384,1117,1387,1114,1388,1109,1431,904,1432,899,1431,896,1429,892,1426,890,1181,830,1177,830,1173,831,1170,834,1129,1027,1129,1030,1129,1031,1126,1031,1121,1032,1116,1034" />
      
      <!--  area "remote2" -->
      <area shape="poly" href="#aplicativo" id="activearea"
        data-mapid="5" class="group5"
        data-maphilight='{"groupBy":".group5","strokeColor":"f1f1f1","fillColor":"ffffff","strokeWidth":2,"fillOpacity":0.4}' 
        qtip-ref="pos-tooltip"
        qtip-classes="qtip-light qtip-rounded qtip-shadow"
        qtip-title="CONEXÃO <img src='img/cultivo_inteligente/wifi.png' style='position:absolute;top:-150%;left:90%;z-index:auto'>" qtip-content="<p><b>Fique ligado na sua hortinha!</b> Pode controlar sua hortinha a distância e receber alertas através do nosso aplicativo
</p>"
        coords="1419,1189,1453,1247,1455,1250,1460,1252,1513,1248,1519,1245,1520,1239,1484,1182,1481,1179,1477,1176,1472,1175,1426,1179,1422,1180,1420,1182" />
      
      <!--  area "cultivo2" -->
      <area shape="poly" href="#cultivo" id="activearea"
        data-mapid="2" class="group2"
        data-maphilight='{"groupBy":".group2","strokeColor":"3F6219","fillColor":"CAED9E","strokeWidth":2,"fillOpacity":0.3}' 
        qtip-ref="pos-tooltip"
        qtip-classes="qtip-green qtip-rounded qtip-shadow"
        qtip-title="CULTIVO <img src='img/cultivo_inteligente/leaf.png' style='position:absolute;top:-200%;left:90%;z-index:auto'>" qtip-content="<p>Para dar um up na sua cozinha com lindas <b>plantas aromáticas</b> ou ornamentais, sempre fresquinhas e lindas!</p>"
        coords="1360,516,1360,560,1387,569,1494,556,1494,512,1475,507,1474,502,1470,500,1472,498,1481,497,1483,491,1477,475,1480,472,1490,465,1483,457,1473,449,1472,437,1471,429,1479,425,1479,421,1458,412,1439,413,1437,417,1430,423,1427,417,1415,411,1398,407,1396,398,1384,397,1368,409,1369,412,1383,416,1386,423,1386,428,1376,425,1371,428,1364,436,1369,444,1370,449,1360,446,1352,451,1350,459,1354,470,1354,483,1359,490,1374,496,1378,506,1374,515" />
      
      <!--  area "cultivo3" -->
      <area shape="poly" href="#cultivo" id="activearea"
        data-mapid="2" class="group2"
        data-maphilight='{"groupBy":".group2","strokeColor":"3F6219","fillColor":"CAED9E","strokeWidth":2,"fillOpacity":0.3}' 
        qtip-ref="pos-tooltip"
        qtip-classes="qtip-green qtip-rounded qtip-shadow"
        qtip-title="CULTIVO <img src='img/cultivo_inteligente/leaf.png' style='position:absolute;top:-200%;left:90%;z-index:auto'>" qtip-content="<p>Para dar um up na sua cozinha com lindas <b>plantas aromáticas</b> ou ornamentais, sempre fresquinhas e lindas!</p>"
        coords="1595,501,1594,543,1494,556,1469,549,1469,510,1484,508,1479,499,1483,491,1479,474,1482,469,1478,462,1481,455,1482,449,1481,437,1483,428,1488,419,1491,419,1496,428,1498,420,1501,420,1506,427,1502,437,1504,442,1508,438,1513,437,1515,432,1520,431,1522,439,1519,448,1519,466,1520,467,1522,471,1521,476,1519,490,1524,493,1531,492,1534,491,1539,487,1543,484,1546,486,1548,486,1550,483,1556,482,1558,483,1566,482,1571,481,1574,484,1580,482,1581,487,1583,490,1583,494,1581,497" />
      
      <!--  area "cultivo4" -->
      <area shape="poly" href="#cultivo" id="activearea"
        data-mapid="2" class="group2"
        data-maphilight='{"groupBy":".group2","strokeColor":"3F6219","fillColor":"CAED9E","strokeWidth":2,"fillOpacity":0.3}' 
        qtip-ref="pos-tooltip"
        qtip-classes="qtip-green qtip-rounded qtip-shadow"
        qtip-title="CULTIVO <img src='img/cultivo_inteligente/leaf.png' style='position:absolute;top:-200%;left:90%;z-index:auto'>" qtip-content="<p>Para dar um up na sua cozinha com lindas <b>plantas aromáticas</b> ou ornamentais, sempre fresquinhas e lindas!</p>"
        coords="1691,490,1689,531,1594,543,1571,536,1572,499,1585,497,1588,491,1583,485,1577,480,1579,475,1588,477,1594,471,1599,466,1603,467,1607,465,1614,466,1617,462,1618,458,1622,457,1625,463,1631,463,1634,460,1638,462,1648,462,1650,466,1657,463,1660,467,1667,466,1669,468,1669,470,1678,472,1675,476,1671,476,1673,479,1676,482,1673,484,1676,486" />      
        
      <!--  area "cultivo5" -->
      <area shape="poly" href="#cultivo" id="activearea"
        data-mapid="2" class="group2"
        data-maphilight='{"groupBy":".group2","strokeColor":"3F6219","fillColor":"CAED9E","strokeWidth":2,"fillOpacity":0.3}' 
        qtip-ref="pos-tooltip"
        qtip-classes="qtip-green qtip-rounded qtip-shadow"
        qtip-title="CULTIVO <img src='img/cultivo_inteligente/leaf.png' style='position:absolute;top:-200%;left:90%;z-index:auto'>" qtip-content="<p>Para dar um up na sua cozinha com lindas <b>plantas aromáticas</b> ou ornamentais, sempre fresquinhas e lindas!</p>"
        coords="1724,537,1723,530,1721,504,1721,477,1721,439,1721,411,1722,409,1727,407,1703,380,1731,403,1731,397,1704,368,1723,382,1727,380,1711,365,1702,353,1727,369,1711,352,1703,340,1729,360,1703,331,1730,352,1710,327,1707,314,1673,298,1636,287,1644,282,1665,284,1705,298,1724,311,1704,274,1714,280,1722,283,1710,229,1720,232,1696,190,1696,178,1699,175,1710,184,1729,210,1745,243,1750,250,1756,281,1762,285,1766,279,1767,271,1756,216,1731,173,1737,172,1748,177,1760,190,1771,215,1782,242,1787,238,1796,222,1804,204,1813,193,1824,179,1833,172,1841,176,1845,170,1852,171,1856,176,1870,173,1873,175,1864,186,1852,198,1841,212,1837,224,1828,243,1831,246,1825,254,1838,250,1821,265,1833,261,1819,273,1819,279,1830,273,1823,286,1839,271,1853,258,1867,247,1885,234,1896,229,1906,229,1900,235,1884,246,1852,273,1830,299,1815,320,1832,310,1813,329,1830,325,1815,338,1814,342,1836,332,1809,356,1806,364,1838,346,1817,364,1805,381,1837,364,1803,392,1801,399,1832,381,1802,408,1808,411,1808,416,1803,467,1798,501,1791,539,1788,541,1777,543,1766,543,1750,543,1740,542,1730,539" />
      
      <!--  area "tubo" -->
      <area shape="poly" href="#agua" id="activearea"
        data-mapid="3" class="group3"
        data-maphilight='{"groupBy":".group3","strokeColor":"5E99BD","fillColor":"5E99BD","strokeWidth":2,"fillOpacity":0.3}'
        qtip-ref="pos-tooltip"
        qtip-classes="qtip-blue qtip-rounded qtip-shadow"
        qtip-title="01 SGUIBIDIBABAIBIBOUPPPP <img src='img/cultivo_inteligente/drops.png' style='position:absolute;top:-200%;left:90%;z-index:auto'>" qtip-content="<p><b>Complex HTML</b> for your tooltip <i>here</i>!</p>"
        coords="1693,496,1689,496,1685,494,1682,493,1678,492,1669,491,1654,493,1642,497,1625,500,1611,500,1592,500,1579,501,1566,505,1550,508,1517,512,1502,513,1485,513,1477,514,1461,518,1433,521,1406,523,1388,523,1382,522,1381,520,1389,520,1393,520,1405,520,1427,519,1443,517,1459,515,1476,512,1485,510,1495,510,1503,510,1518,509,1537,507,1551,505,1565,502,1580,498,1591,497,1620,497,1625,497,1641,494,1651,491,1667,488,1677,489,1684,491,1689,493,1694,493,1697,491,1700,485,1702,477,1704,461,1705,440,1706,421,1707,416,1711,410,1719,404,1724,403,1730,404,1738,407,1750,409,1766,410,1783,409,1796,407,1803,407,1811,407,1822,409,1832,410,1841,410,1848,408,1854,404,1860,399,1866,392,1872,380,1874,369,1875,353,1876,338,1878,329,1881,322,1887,315,1894,312,1900,312,1905,312,1905,315,1895,315,1892,316,1889,317,1886,321,1883,325,1882,327,1881,332,1880,336,1879,343,1878,358,1877,374,1876,379,1872,388,1868,395,1862,402,1855,408,1848,412,1840,414,1829,414,1818,412,1809,410,1798,410,1791,411,1779,412,1761,413,1745,412,1735,410,1726,407,1721,407,1715,411,1711,416,1710,420,1709,430,1708,444,1707,462,1706,475,1704,483,1702,489,1698,495" />
      
      <!--  area "agua2" -->
      <area shape="poly" href="#agua" id="activearea"
        data-mapid="3" class="group3"
        data-maphilight='{"groupBy":".group3","strokeColor":"5E99BD","fillColor":"5E99BD","strokeWidth":2,"fillOpacity":0.3}'
        qtip-ref="pos-tooltip"
        qtip-classes="qtip-blue qtip-rounded qtip-shadow"
        qtip-title="ÁGUA <img src='img/cultivo_inteligente/drops.png' style='position:absolute;top:-200%;left:90%;z-index:auto'>" qtip-content="<p><b>Reservatórios inteligentes</b> para que suas plantinhas nunca faltem de água, mesmo quando você não está em casa!</p>"
        coords="1915,185,1905,327,1942,332,1971,330,1984,186,1950,184" />
        
      <!--  area "cultivo6" -->
      <area shape="poly" href="#cultivo" 
        data-mapid="2" class="group2"
        data-maphilight='{"groupBy":".group2","strokeColor":"3F6219","fillColor":"CAED9E","strokeWidth":2,"fillOpacity":0.3}' 
        qtip-ref="pos-tooltip"
        qtip-classes="qtip-green qtip-rounded qtip-shadow"
        qtip-title="CULTIVO <img src='img/cultivo_inteligente/leaf.png' style='position:absolute;top:-200%;left:90%;z-index:auto'>" qtip-content="<p>Para dar um up na sua cozinha com lindas <b>plantas aromáticas</b> ou ornamentais, sempre fresquinhas e lindas!</p>"
        coords="27,740,233,714,228,656,221,656,214,646,214,642,227,639,218,622,236,621,238,610,239,596,242,581,232,566,219,556,207,552,210,548,191,536,185,542,171,547,168,559,149,563,145,580,146,595,145,617,114,619,106,602,99,594,108,575,104,551,88,522,63,521,41,523,31,532,32,514,23,508,1,505,1,640,14,655,33,640,47,648,69,646,76,653,76,657,17,664" />
      
      <!--  area "luz3" -->
      <area shape="poly" href="#luz" id="activearea"
        data-mapid="1" class="group1"
        data-maphilight='{"groupBy":".group1","strokeColor":"FFEF93","fillColor":"FFFFA3","strokeWidth":2,"fillOpacity":0.3}'
        qtip-ref="pos-tooltip"
        qtip-classes="qtip-rounded qtip-shadow" 
        qtip-title="LUZ <img src='img/cultivo_inteligente/sun.png' style='position:absolute;top:-200%;left:90%;z-index:auto'></b>" qtip-content="<p class='lead'>Sem luz do sol? Sem problema! Graças à <b>tecnologia LED</b>, suas plantas recebem a luz que precisam</p>"
        coords="234,714,254,712,249,648,244,643,224,434,4,444,0,446,0,452,210,442,228,640,215,642,215,646,222,656,228,656" />
          
      
      <area shape="rect" id="pos-tooltip" coords="1218,595,1586,818" style="display:none" data-maphilight='{"fill":false,"stroke":false}'/>
<!--
      <area shape="rect" id="pos-cultivo2" coords="1011,122,1379,345" style="display:none" data-maphilight='{"fill":false,"stroke":false}'/>
      <area shape="rect" id="pos-adubo" coords="359,282,727,505" style="display:none" data-maphilight='{"fill":false,"stroke":false}'/>
      <area shape="rect" id="pos-remote" coords="687,788,1055,1011" style="display:none" data-maphilight='{"fill":false,"stroke":false}'/>
      <area shape="rect" id="pos-agua1" coords="1374,574,1742,797" style="display:none"data-maphilight='{"fill":false,"stroke":false}' />
      <area shape="rect" id="pos-cultivo1" coords="1218,595,1586,818" style="display:none" data-maphilight='{"fill":false,"stroke":false}'/>
      <area shape="rect" id="pos-luz" coords="1924,448,2292,671" style="display:none" data-maphilight='{"fill":false,"stroke":false}'/>
-->
      
      
    </map>

    
    
  </div>
  
  <div id="background2" class="pad-section">
    <div class="container">
    </div>
  </div>
  
  <!-- third section - CULTIVO -->
  <div id="cultivo" class="pad-section">
    <h2 class="text-center"> <?php echo TXT_CULTIVO; ?> </h2>
    <div class="container marketing">

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h3 class="featurette-heading" style="color:#3F6219;font-weight:900;"><?php echo TXT_CULTIVO_BODY1; ?> <span class="text-muted" style="font-weight:900;">It'll blow your mind.</span></h3>
          <p class="lead"> <?php echo TXT_CULTIVO_BODY2; ?> </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="img/cultivo_inteligente/gif-cultivo.gif" alt="Generic placeholder image">
        </div>
      </div>
    
    </div>
  </div>
  <!-- /third section -->
  
  <div id="background3" class="pad-section">
    <div class="container">
    </div>
  </div>

  <!-- fourth section - AGUA -->
  <div id="agua" class="pad-section">
    <h2 class="text-center"> <?php echo TXT_AGUA; ?> </h2>
    
    <div class="container marketing">
    
      <hr class="featurette-divider">
      
      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading" style="color:#5E99BD;font-weight:900;"><?php echo TXT_AGUA_BODY1; ?> <span class="text-muted" style="font-weight:900;">See for yourself.</span></h2>
          <p class="lead"><?php echo TXT_AGUA_BODY2; ?></p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="img/cultivo_inteligente/gif-agua.gif" alt="Generic placeholder image">
        </div>
      </div>
    
    </div>
    
    
  </div>
  <!-- /fourth section -->
  
  <!-- Imagem Eolica-->
  <div id="background4" class="pad-section">
    <div class="container">
    </div>
  </div>
  <!-- /Imagem Eolica-->
  
 <!-- fifth section - LUZ -->
  <div id="luz" class="pad-section">
    <h2 class="text-center"> <?php echo TXT_LUZ; ?> </h2>
    
    <div class="container marketing">

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h3 class="featurette-heading" style="color:#ffcc00;font-weight:900;"><?php echo TXT_LUZ_BODY1; ?> <span class="text-muted" style="font-weight:900;">It'll blow your mind.</span></h3>
          <p class="lead"> <?php echo TXT_LUZ_BODY2; ?> </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="img/cultivo_inteligente/gif-luz.gif" alt="Generic placeholder image">
        </div>
      </div>
    
    </div>
    
  </div>
  <!-- /fifth section -->
  
  <div id="background5" class="pad-section">
    <div class="container">
    </div>
  </div>
  
  <!-- sixth section - ADUBO -->
  <div id="adubo" class="pad-section">
    <h2 class="text-center"> <?php echo TXT_ADUBO; ?> </h2>
    
    <div class="container marketing">
    
      <hr class="featurette-divider">
      
      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading" style="color:#77482e;font-weight:900;"><?php echo TXT_ADUBO_BODY1; ?> <span class="text-muted" style="font-weight:900;">See for yourself.</span></h2>
          <p class="lead"><?php echo TXT_ADUBO_BODY2; ?></p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="img/cultivo_inteligente/gif-adubo.gif" alt="Generic placeholder image">
        </div>
      </div>
    
    </div>
    
  </div>
  <!-- /sixth section -->
  
  <div id="background6" class="pad-section">
    <div class="container">
    </div>
  </div>

    <!-- seventh section - APLICATIVO -->
  <div id="aplicativo" class="pad-section">
    <h2 class="text-center"> <?php echo TXT_APLICATIVO; ?> </h2>
    
    <div class="container marketing">

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h3 class="featurette-heading" style="color:#;font-weight:900;"><?php echo TXT_APLICATIVO_BODY1; ?> <span class="text-muted" style="font-weight:900;">It'll blow your mind.</span></h3>
          <p class="lead"> <?php echo TXT_APLICATIVO_BODY2; ?> </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="img/cultivo_inteligente/gif-aplicativo.gif" alt="Generic placeholder image">
        </div>
      </div>
    
    </div>
    
  </div>
  <!-- /sixth section -->
  
  <div id="background7" class="pad-section">
    <div class="container">
    </div>
  </div>
  
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
                </div>
            </div>
        </div>
    </div>
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
      <div class="text-right">Copyright &copy; 2021 Babilônia - Cultivo Inteligente</div>
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
  
  <script src="js/jquery.rwdImageMaps.js"></script>
  <script type="text/javascript" src="js/jquery.maphilight.js"></script>
  <script type="text/javascript" src="js/jquery.qtip.js"></script>
  <script type="text/javascript" src="js/mapping-tooltips.js"></script>

  <script src="js/jquery.easing.min.js"></script>
  <script src="js/scrolling-nav.js"></script>
  <script src="js/select-lang.js"></script>
  
</body>
</html>
