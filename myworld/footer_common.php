<?php
session_start();
header('Cache-control: private'); // IE 6 FIX

if(isSet($_GET['lang']))
{
   $lang = $_GET['lang'];

// register the session and set the cookie
   $_SESSION['lang'] = $lang;

   setcookie("lang", $lang, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
   $lang = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
   $lang = $_COOKIE['lang'];
}
else
{
   $lang = 'en';
}

switch ($lang) {
  case 'en':
  $lang_file = 'lang.en.php';
  break;

  case 'es':
  	$lang_file = 'lang.es.php';
  	break;
  
  case 'fr':
	$lang_file = 'lang.fr.php';
  	break;
  	
  case 'ru':
 	$lang_file = 'lang.ru.php';
  	break;

  case 'ar':
  	$lang_file ='lang.ar.php';
  	break;
  	
  case 'ch':
  	$lang_file = 'lang.ch.php';
  	break;
  	
  case 'kr':
  	$lang_file = 'lang.kr.php';
  	break;
  	
  case 'pr':
  	$lang_file = 'lang.pr.php';
  	break;
  	
  case 'th':
  	$lang_file = 'lang.th.php';
  	break;
  	
  case 'bi':
  	$lang_file = 'lang.bi.php';
  	break;
  	
  case 'vt':
  	$lang_file = 'lang.vt.php';
  	break;
  	

  default:
  $lang_file = 'lang.en.php';

}
  /* --- FORCE ENGLISH FOR NOW ----*/
       $lang_file = 'lang.en.php';

include_once 'footers/'.$lang_file;
?>
