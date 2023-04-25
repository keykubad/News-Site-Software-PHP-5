<?php
	#Haber sitesi
	#Kodlama : Simgola -Keykubad
	//ob_start("ob_gzhandler");
	date_default_timezone_set('Europe/Istanbul');
	error_reporting(0);
#baglantı degiskenleri

	$host		="localhost";
	$kullanici	="creative_harberi";
	$sifre		="123qwe**";
	$veritabani	="creative_haberyaz";
	
#veritabani baglanti
	$baglan=mysql_connect($host,$kullanici,$sifre) or die (mysql_error());
#veritabani sec
	mysql_select_db($veritabani,$baglan) or die (mysql_error());
#karakter sec
	mysql_query("SET NAMES 'UTF8'");
	mysql_query("SET character_set_connection = 'UTF8'");
	mysql_query("SET character_set_client = 'UTF8'");
	mysql_query("SET character_set_results = 'UTF8'"); 
	


?>