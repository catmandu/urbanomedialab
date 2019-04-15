<?php 
	if(isset($_GET["selLang"]) && $_GET["selLang"] != ""){
		$_SESSION["language"] = $_GET["selLang"];
	}else{
		$_SESSION["language"] = "es";
	}	
	
	echo 'session current value: '.$_SESSION["language"];
	
	$currLang = $_SESSION["language"];
	require_once("languages/{$currLang}.php");
	/*switch($currLang) { 
	    case "en": 
			define("CHARSET","ISO-8859-1"); 
			define("LANGCODE", "en");
			require_once("languages/en.php");
		break; 
		case "es": 
			define("CHARSET","ISO-8859-1"); 
			define("LANGCODE", "es");
			require_once("languages/es.php");
		break; 
		case "de": 
			define("CHARSET","ISO-8859-1"); 
			define("LANGCODE", "de");
			require_once("languages/de.php");
		break; 
		case "ja": 
			define("CHARSET","UTF-8"); 
			define("LANGCODE", "ja");
			require_once("languages/ja.php");
		break; 
		default: 
			define("CHARSET","ISO-8859-1"); 
			define("LANGCODE", "en");
			require_once("languages/en.php");
		break; 
	}
	header("Content-Type: text/html;charset=".CHARSET); 
	header("Content-Language: ".LANGCODE); */
?> 