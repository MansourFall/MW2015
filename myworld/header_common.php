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

$language_selected='English';//we set it as default
$language_selected_label='Language:';//we set it as default

switch ($lang) {
  case 'en':
  $lang_file = 'lang.en.php';
  $language_selected='English';
  $language_selected_label='Language:'; 
  break;

  case 'es':
  	$lang_file = 'lang.es.php';
  	$language_selected='Español';
  	$language_selected_label='Idioma:';
  	break;
  
  case 'fr':
	$lang_file = 'lang.fr.php';
	$language_selected='Français';
	$language_selected_label='Langue:';
  	break;
  	
  case 'ru':
 	$lang_file = 'lang.ru.php';
 	$language_selected='Pусский';
 	$language_selected_label='Язык:';
  	break;

  case 'ar':
  	$lang_file ='lang.ar.php';
  	$language_selected='العربية';
  	$language_selected_label='اللغة:';
  	break;
  	
  case 'ch':
  	$lang_file = 'lang.ch.php';
  	$language_selected='中文';
  	$language_selected_label='语言：';
  	break;
  	
  case 'kr':
  	$lang_file = 'lang.kr.php';
  	$language_selected='한국어';
  	$language_selected_label='언어:';
  	break;
  	
  case 'pr':
  	$lang_file = 'lang.pr.php';
  	$language_selected='Português';
  	$language_selected_label='Idioma:';
  	break;
  	
  case 'th':
  	$lang_file = 'lang.th.php';
  	$language_selected='ภาษาไทย';
  	$language_selected_label='ภาษา:';
  	break;
  	
  case 'bi':
  	$lang_file = 'lang.bi.php';
  	$language_selected='Bahasa Indonesia';
  	$language_selected_label='Bahasa:';
  	break;
  	
  case 'vt':
  	$lang_file = 'lang.vt.php';
  	$language_selected='Tiếng Việt';
  	$language_selected_label='Ngôn ngữ';
  	break;
  	
  case 'bl':
  	$lang_file = 'lang.bl.php';
 	$language_selected='Беларуская';
  	$language_selected_label='Мова:';
  	break;
  	
  case 'al':
  	$lang_file = 'lang.al.php';
  	$language_selected='Albania';
  	$language_selected_label='Gjuhë';
  	break;
  	
  case 'bs':
  	$lang_file = 'lang.bs.php';
  	$language_selected='Bisaya';
  	$language_selected_label='Lengguwahe';
  	break;

  default:
  $lang_file = 'lang.en.php';
  

}


include_once 'site_url.php';//contains the web site base url 

/* --- FORCE ENGLISH FOR NOW ----*/
       $lang_file = 'lang.en.php';


include_once 'headers/'.$lang_file;

//Define content to be added
$post =get_post($post->ID);
$page = strtolower($post->post_title);

include_once 'page_title/'.$page.".".$lang_file;

?>
