<?php	
	require_once("lib/streams.php");
	require_once("lib/gettext.php");

	ini_set('arg_separator.output', '&amp;');
	ini_set("url_rewriter.tags","a=href,area=href,frame=src,iframe=src,input=src");

	session_start();
	header('Cache-control: private'); // IE 6 FIX

	if(isset($_GET['lang']))
	{
		$locale_lang = $_GET['lang'];
		
		// register the session and set the cookie
		$_SESSION['lang'] = $locale_lang;

		setcookie('lang', $locale_lang, time() + (3600 * 24 * 30));
	}
	elseif(isset($_SESSION['lang']))
	{
		$locale_lang = $_SESSION['lang'];
	}
	elseif(isset($_COOKIE['lang']))
	{
		$locale_lang = $_COOKIE['lang'];
	}
	else
	{
		$locale_lang = 'es';
	}
	
	$title = array(
		0 => "Inicio | MIAPatents",
		1 => "La Firma | MIAPatents",
		2 => "Servicios | MIAPatents",
		3 => "Documentación | MIAPatents",
		4 => "Contacto | MIAPatents",
		10 => "MIAPatents in english coming soon",
	);
	
	$description = array(
		0 => "Manuel Illescas Asociados (MIAPatents) es una firma de propiedad industrial que ofrece a sus clientes un asesoramiento integral, individualizado y personal.",
		1 => "Prestamos especial atención a las patentes de los sectores biotecnológico, farmacéutico, químico, biomédico, energético, medioambiental e informático (protección software-hardware).",
		2 => "MIAPatents es una firma involucrada con los proyectos y los problemas de sus clientes, capaz de ofrecer un asesoramiento, a nivel mundial, en materia de propiedad industrial",
		3 => "Noticias de interés, enlaces, documentos. Todo lo que necesitas para conocer sobre la legalidad en el ámbito de patentes.",
		4 => "Contáctanos. Puede ser el inicio de algo grande.",
		10 => "This translation is in progress."
	);
	
	$keywords = array(
		0 => "MIAPatents, patentes, manuel illescas asociados, marcas, modelos, biotechnology, biotecnologia, patents, models",
	);
	
	if(strcmp($locale_lang,'es') != 0){
		$lang = "en";
	}
	else{
		$lang = "es";
	}

	$locale_file = new FileReader("locale/$locale_lang/LC_MESSAGES/default.mo");

	$locale_fetch = new gettext_reader($locale_file);

	function translator($text){
		global $locale_fetch;

		return $locale_fetch->translate($text);
	}
?>