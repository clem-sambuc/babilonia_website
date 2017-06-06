 <?php

if(isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
} else {
    // si aucune langue n'est déclarée on tente de reconnaitre la langue par défaut du navigateur
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2); 
}

if ($_GET['lang']=='pt') {
include('php/lang/index_pt.php');
} 

else if ($_GET['lang']=='fr') {
include('php/lang/index_fr.php');
}

else if ($_GET['lang']=='es') {
include('php/lang/index_es.php');
}

else if ($_GET['lang']=='en') {
include('php/lang/index_en.php');
}

else {                       // si aucune langue n'est déclarée on inclut le fichier fr-lang.php par défaut
include('php/lang/index_pt.php');
}


//définition de la durée du cookie (1 an)
$expire = 365*24*3600; 

//enregistrement du cookie au nom de lang
setcookie('lang', $lang, time() + $expire);  

?> 
