<?php
  require("php/lang/lang-cultivo.php");
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
    <img src="img/cultivo_inteligente/Fond_Site_Cuisine_Imagemap_Led_good.jpg" class="map" usemap="#image-map" >
    <map name="image-map">
      
      <!--  area "luz1" -->
      <area shape="poly" id="activearea" alt="luz"
        data-mapid="1" class="group1"
        data-maphilight='{"groupBy":".group1","strokeColor":"FFEF93","fillColor":"FFFFA3","strokeWidth":2,"fillOpacity":0.3}'
        qtip-ref="pos-tooltip"
        qtip-classes="qtip-rounded qtip-shadow"
        qtip-title="<b>LUZ <img src='img/cultivo_inteligente/sun.png' style='position:absolute;top:-200%;left:90%;z-index:auto'></b>" qtip-content="<p>Sem luz do sol? Sem problema! Graças à <b>tecnologia LED</b>, suas plantas recebem a luz que precisam</p>"
        coords="1841,1240,1868,1256,1949,1225,1960,1109,1929,1094,1958,768,1677,681,1661,684,1661,694,1920,778,1893,1102,1842,1118,1841,1129,1849,1133" />
        
      <!--  area "cultivo11" -->
      <area shape="poly" href="#cultivo" id="activearea"
        data-mapid="2" class="group2"
        data-maphilight='{"groupBy":".group2","strokeColor":"3F6219","fillColor":"CAED9E","strokeWidth":2,"fillOpacity":0.3}' 
        qtip-ref="pos-tooltip"
        qtip-classes="qtip-green qtip-rounded qtip-shadow"
        qtip-title="CULTIVO <img src='img/cultivo_inteligente/leaf.png' style='position:absolute;top:-200%;left:90%;z-index:auto'>" qtip-content="<p>Para dar um up na sua cozinha com lindas <b>plantas aromáticas</b> ou ornamentais, sempre fresquinhas e lindas!</p>"
        coords="1605,1105,1610,1010,1644,1001,1641,990,1632,981,1620,980,1611,971,1613,959,1611,951,1619,934,1616,912,1610,902,1613,887,1626,880,1621,875,1607,873,1607,870,1621,859,1620,855,1620,850,1608,841,1626,839,1627,832,1633,832,1643,834,1648,830,1652,829,1677,825,1686,832,1687,843,1694,847,1704,859,1717,857,1728,862,1741,869,1759,874,1778,892,1783,906,1779,915,1770,925,1777,939,1784,944,1796,944,1804,953,1807,959,1815,958,1826,950,1847,949,1854,956,1865,956,1869,950,1869,943,1877,937,1900,936,1909,947,1911,970,1903,982,1904,992,1906,1000,1914,1014,1913,1027,1913,1041,1913,1041,1914,1055,1911,1065,1903,1079,1896,1087,1896,1093,1930,1110,1922,1211,1841,1240" />
      
      <!--  area "cultivo12" -->
      <area shape="poly" href="#cultivo" id="activearea"
        data-mapid="2" class="group2"
        data-maphilight='{"groupBy":".group2","strokeColor":"3F6219","fillColor":"CAED9E","strokeWidth":2,"fillOpacity":0.3}' 
        qtip-ref="pos-tooltip"
        qtip-classes="qtip-green qtip-rounded qtip-shadow"
        qtip-title="CULTIVO <img src='img/cultivo_inteligente/leaf.png' style='position:absolute;top:-200%;left:90%;z-index:auto'>" qtip-content="<p>Para dar um up na sua cozinha com lindas <b>plantas aromáticas</b> ou ornamentais, sempre fresquinhas e lindas!</p>"
        coords="2016,1261,1922,1211,1930,1110,1950,1102,1958,1085,1952,1077,1940,1070,1952,1055,1973,1043,1988,1024,1999,1018,2030,1011,2056,998,2074,996,2145,1014,2167,1028,2186,1020,2219,1020,2232,1017,2235,1019,2231,1027,2235,1034,2225,1049,2198,1053,2248,1072,2235,1173" />
      
      <!--  area "agua1" -->
      <area shape="poly" href="#agua" id="activearea"
        data-mapid="3" class="group3"
        data-maphilight='{"groupBy":".group3","strokeColor":"5E99BD","fillColor":"5E99BD","strokeWidth":2,"fillOpacity":0.3}'
        qtip-ref="pos-tooltip"
        qtip-classes="qtip-blue qtip-rounded qtip-shadow"
        qtip-title="ÁGUA <img src='img/cultivo_inteligente/drops.png' style='position:absolute;top:-200%;left:90%;z-index:auto'>" qtip-content="<p><b>Reservatórios inteligentes</b> para que suas plantinhas nunca faltem de água, mesmo quando você não está em casa!</p>"
        coords="1773,813,1915,780,2089,835,2056,1147,1904,1200,1753,1122" />
      
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
        coords="2197,814,2211,811,2212,800,1931,718,1918,722,1897,997,1906,1002,1956,985,1962,928,1968,930,1969,922,1941,912,1932,912,1945,740" />
      
      <!--  area "adubo" -->
      <area shape="poly" href="#adubo" id="activearea"
        data-mapid="4" class="group4"
        data-maphilight='{"groupBy":".group4","strokeColor":"77482e","fillColor":"CA9E92","strokeWidth":2,"fillOpacity":0.4}' 
        qtip-ref="pos-tooltip"
        qtip-classes="qtip-brown qtip-rounded qtip-shadow"
        qtip-title="ADUBO <img src='img/cultivo_inteligente/recycling-symbol.png' style='position:absolute;top:-150%;left:90%;z-index:auto'>" qtip-content="<p>Seu lixo orgânico vira <b>adubo verde</b>, cheio de bons nutrientes para otimizar a produção da sua hortinha!
</p>"
        coords="791,327,883,321,933,330,943,636,844,649,806,628" />
      
      <!--  area "remote1" -->
      <area shape="poly" href="#aplicativo" id="activearea"
        data-mapid="5" class="group5"
        data-maphilight='{"groupBy":".group5","strokeColor":"f1f1f1","fillColor":"ffffff","strokeWidth":2,"fillOpacity":0.4}' 
        qtip-ref="pos-tooltip"
        qtip-classes="qtip-light qtip-rounded qtip-shadow"
        qtip-title="CONEXÃO <img src='img/cultivo_inteligente/wifi.png' style='position:absolute;top:-150%;left:90%;z-index:auto'>" qtip-content="<p><b>Fique ligado na sua hortinha!</b> Pode controlar sua hortinha a distância e receber alertas através do nosso aplicativo
</p>"
        coords="981,1103,979,1106,979,1108,982,1111,1080,1148,1086,1149,1120,1162,1123,1165,1232,1206,1237,1207,1241,1207,1247,1206,1377,1122,1378,1115,1382,1113,1385,1110,1386,1105,1429,900,1430,895,1429,892,1427,888,1424,886,1179,826,1175,826,1171,827,1168,830,1127,1023,1127,1026,1127,1027,1124,1027,1119,1028,1114,1030" />
      
      <!--  area "remote2" -->
      <area shape="poly" href="#aplicativo" id="activearea"
        data-mapid="5" class="group5"
        data-maphilight='{"groupBy":".group5","strokeColor":"f1f1f1","fillColor":"ffffff","strokeWidth":2,"fillOpacity":0.4}' 
        qtip-ref="pos-tooltip"
        qtip-classes="qtip-light qtip-rounded qtip-shadow"
        qtip-title="CONEXÃO <img src='img/cultivo_inteligente/wifi.png' style='position:absolute;top:-150%;left:90%;z-index:auto'>" qtip-content="<p><b>Fique ligado na sua hortinha!</b> Pode controlar sua hortinha a distância e receber alertas através do nosso aplicativo
</p>"
        coords="1418,1184,1452,1242,1454,1245,1459,1247,1512,1243,1518,1240,1519,1234,1483,1177,1480,1174,1476,1171,1471,1170,1425,1174,1421,1175,1419,1177" />
      
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
        coords="1723,535,1722,528,1720,502,1720,475,1720,437,1720,409,1721,407,1726,405,1702,378,1730,401,1730,395,1703,366,1722,380,1726,378,1710,363,1701,351,1726,367,1710,350,1702,338,1728,358,1702,329,1729,350,1709,325,1706,312,1672,296,1635,285,1643,280,1664,282,1704,296,1723,309,1703,272,1713,278,1721,281,1709,227,1719,230,1695,188,1695,176,1698,173,1709,182,1728,208,1744,241,1749,248,1755,279,1761,283,1765,277,1766,269,1755,214,1730,171,1736,170,1747,175,1759,188,1770,213,1781,240,1786,236,1795,220,1803,202,1812,191,1823,177,1832,170,1840,174,1844,168,1851,169,1855,174,1869,171,1872,173,1863,184,1851,196,1840,210,1836,222,1827,241,1830,244,1824,252,1837,248,1820,263,1832,259,1818,271,1818,277,1829,271,1822,284,1838,269,1852,256,1866,245,1884,232,1895,227,1905,227,1899,233,1883,244,1851,271,1829,297,1814,318,1831,308,1812,327,1829,323,1814,336,1813,340,1835,330,1808,354,1805,362,1837,344,1816,362,1804,379,1836,362,1802,390,1800,397,1831,379,1801,406,1807,409,1807,414,1802,465,1797,499,1790,537,1787,539,1776,541,1765,541,1749,541,1739,540,1729,537" />
      
      <!--  area "tubo" -->
      <area shape="poly" href="#agua" id="activearea"
        data-mapid="3" class="group3"
        data-maphilight='{"groupBy":".group3","strokeColor":"5E99BD","fillColor":"5E99BD","strokeWidth":2,"fillOpacity":0.3}'
        qtip-ref="pos-tooltip"
        qtip-classes="qtip-blue qtip-rounded qtip-shadow"
        qtip-title="01 SGUIBIDIBABAIBIBOUPPPP <img src='img/cultivo_inteligente/drops.png' style='position:absolute;top:-200%;left:90%;z-index:auto'>" qtip-content="<p><b>Complex HTML</b> for your tooltip <i>here</i>!</p>"
        coords="1692,494,1688,494,1684,492,1681,491,1677,490,1668,489,1653,491,1641,495,1624,498,1610,498,1591,498,1578,499,1565,503,1549,506,1516,510,1501,511,1484,511,1476,512,1460,516,1432,519,1405,521,1387,521,1381,520,1380,518,1388,518,1392,518,1404,518,1426,517,1442,515,1458,513,1475,510,1484,508,1494,508,1502,508,1517,507,1536,505,1550,503,1564,500,1579,496,1590,495,1619,495,1624,495,1640,492,1650,489,1666,486,1676,487,1683,489,1688,491,1693,491,1696,489,1699,483,1701,475,1703,459,1704,438,1705,419,1706,414,1710,408,1718,402,1723,401,1729,402,1737,405,1749,407,1765,408,1782,407,1795,405,1802,405,1810,405,1821,407,1831,408,1840,408,1847,406,1853,402,1859,397,1865,390,1871,378,1873,367,1874,351,1875,336,1877,327,1880,320,1886,313,1893,310,1899,310,1904,310,1904,313,1894,313,1891,314,1888,315,1885,319,1882,323,1881,325,1880,330,1879,334,1878,341,1877,356,1876,372,1875,377,1871,386,1867,393,1861,400,1854,406,1847,410,1839,412,1828,412,1817,410,1808,408,1797,408,1790,409,1778,410,1760,411,1744,410,1734,408,1725,405,1720,405,1714,409,1710,414,1709,418,1708,428,1707,442,1706,460,1705,473,1703,481,1701,487,1697,493" />
      
      <!--  area "agua2" -->
      <area shape="poly" href="#agua" id="activearea"
        data-mapid="3" class="group3"
        data-maphilight='{"groupBy":".group3","strokeColor":"5E99BD","fillColor":"5E99BD","strokeWidth":2,"fillOpacity":0.3}'
        qtip-ref="pos-tooltip"
        qtip-classes="qtip-blue qtip-rounded qtip-shadow"
        qtip-title="ÁGUA <img src='img/cultivo_inteligente/drops.png' style='position:absolute;top:-200%;left:90%;z-index:auto'>" qtip-content="<p><b>Reservatórios inteligentes</b> para que suas plantinhas nunca faltem de água, mesmo quando você não está em casa!</p>"
        coords="1913,183,1903,325,1940,330,1969,328,1982,184,1948,182" />
          
      
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
          <img class="featurette-image img-responsive center-block" src="img/cultivo_inteligente/modulo_agua_animacao.gif" alt="Generic placeholder image">
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
          <img class="featurette-image img-responsive center-block" src="img/cultivo_inteligente/modulo_agua_animacao.gif" alt="Generic placeholder image">
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
