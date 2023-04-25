<?php

$sayfa	=$_GET["sayfa"];

switch($sayfa){
	default:
	$anameta	=mysql_fetch_assoc(mysql_query("select * from seogenel inner join yonetici siteadi"));
		$title	=$anameta["siteadi"];
		$des	=$anameta["descr"];
		$key	=$anameta["keyw"];
	require_once(TEMA_URL."/ust.php");
	require_once(TEMA_URL."/ustmenu.php");
	require_once(TEMA_URL."/slider.php");
	require_once(TEMA_URL."/sonhaberler.php");

	require_once(TEMA_URL."/sagblok.php");
	require_once(TEMA_URL."/footer.php");
	break;
	case haberoku:
	$id	=$_GET["id"];
		$anameta	=mysql_fetch_assoc(mysql_query("select	hkisa,hbaslik,hetiket from haberler where hid='$id'"));
		$title	=$anameta["hbaslik"];
		$des	=$anameta["hkisa"];
		$des	=str_replace('"',"",$des);
		$key	=$anameta["hetiket"];
	require_once(TEMA_URL."/ust.php");
	require_once(TEMA_URL."/ustmenu.php");
	require_once(TEMA_URL."/haberoku.php");
	require_once(TEMA_URL."/footer.php");
	break;
	case kategori:
	$id	=$_GET["id"];
		$anameta	=mysql_fetch_assoc(mysql_query("select * from haberkategori where id='$id'"));
		$anameta1	=mysql_fetch_assoc(mysql_query("select * from seogenel"));
		$title	=$anameta["haberkatad"];
		$des	=$anameta1["descr"]." Haberleri";
		$key	=$anameta1["keyw"];
	require_once(TEMA_URL."/ust.php");
	require_once(TEMA_URL."/ustmenu.php");
	require_once(TEMA_URL."/kategorislider.php");
	require_once(TEMA_URL."/sonkategorihaberler.php");
	require_once(TEMA_URL."/sagblok.php");
	require_once(TEMA_URL."/footer.php");
	break;
	case ilanlar:
	$id	=$_GET["id"];
		$anameta	=mysql_fetch_assoc(mysql_query("select	hkisa,hbaslik,hetiket from haberler where hid='$id'"));
		$title	=$anameta["hbaslik"];
		$des	=$anameta["hkisa"];
		$des	=str_replace('"',"",$des);
		$key	=$anameta["hetiket"];
	require_once(TEMA_URL."/ust.php");
	require_once(TEMA_URL."/ustmenu.php");
	require_once(TEMA_URL."/ilanlar.php");
	require_once(TEMA_URL."/footer.php");
	break;
	case ilanoku:
	$id	=$_GET["id"];
		$anameta	=mysql_fetch_assoc(mysql_query("select	hkisa,hbaslik,hetiket from haberler where hid='$id'"));
		$title	=$anameta["hbaslik"];
		$des	=$anameta["hkisa"];
		$des	=str_replace('"',"",$des);
		$key	=$anameta["hetiket"];
	require_once(TEMA_URL."/ust.php");
	require_once(TEMA_URL."/ustmenu.php");
	require_once(TEMA_URL."/ilanoku.php");
	require_once(TEMA_URL."/footer.php");
	break;
	case arama:
	$aranan=$_POST["arama"];
	$anameta	=mysql_fetch_assoc(mysql_query("select * from seogenel inner join yonetici siteadi"));
		$title	=$aranan. "Arama Sonuçları";
		$des	=$anameta["descr"];
		$des	=str_replace('"',"",$des);
		$key	=$anameta["keyw"];
	require_once(TEMA_URL."/ust.php");
	require_once(TEMA_URL."/ustmenu.php");
	require_once(TEMA_URL."/arama.php");
	require_once(TEMA_URL."/footer.php");
	break;
	case galeri:
	$id	=$_GET["id"];
		$anameta	=mysql_fetch_assoc(mysql_query("select * from galeri where gid='$id'"));
		$title	=$anameta["galeriad"];
		$des	=$anameta1["galerianayazi"];
		$key	=$anameta1["galerietiket"];
	require_once(TEMA_URL."/ust.php");
	require_once(TEMA_URL."/ustmenu.php");
	require_once(TEMA_URL."/galerislider.php");
	require_once(TEMA_URL."/galeri.php");
	require_once(TEMA_URL."/saggaleriler.php");
	require_once(TEMA_URL."/footer.php");
	break;
	
	case sabitsayfalar:
	$id	=$_GET["id"];
		$anameta	=mysql_fetch_assoc(mysql_query("select * from sayfalar where sid='$id'"));
		$title	=$anameta["sayfabaslik"];
		$des	=$anameta1["sayfadesc"];
		$key	=$anameta1["sayfakey"];
	require_once(TEMA_URL."/ust.php");
	require_once(TEMA_URL."/ustmenu.php");
	require_once(TEMA_URL."/sabitsayfa.php");
	require_once(TEMA_URL."/sayfasagkisim.php");
	require_once(TEMA_URL."/footer.php");
	break;
}

?>