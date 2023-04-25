<?php
include("../../ayar.php");
$gelenoysecimi			=	$_POST["secim"];
$ziyaretcininipadresi	=	$_SERVER["REMOTE_ADDR"];
$zamandamgasi			=	time();
$okunurtarih			=	date("d.m.Y H:i:s");
$oykullanmasuresi		=	86000;	// Saniye
$zamanigerial			=	$zamandamgasi-$oykullanmasuresi;

$oykullananlarisor			=	mysql_query("SELECT * FROM anketip WHERE ipno='$ziyaretcininipadresi' AND damga>=$zamanigerial ORDER BY aid DESC");
$oykullananlarisortoplam	=	mysql_num_rows($oykullananlarisor);
	if($oykullananlarisortoplam>0){
		echo	"<center>Sayýn Ziyaretçimiz Daha Önce Bu Ankete Oy Kullanmýþsýnýz...!<br />Tekrar Oy Kullanamazsýnýz.<br /></center></a>.";
	}else{
		foreach ($gelenoysecimi as $sonoy){
			
		}
		echo $sonoy;
			$oykaydet	=mysql_query("update anketcevap set oy=oy+1 where id='$sonoy'");
	
				if($oykaydet){
					echo "<center>Oyunuz baþarýyla kaydedildi!!</center>";
				}else{
					echo "<center>Oyunuz kaydedilemedi!!</center>";
				}
			
	$ipkaydet		=	@mysql_query("INSERT INTO anketip (ipno,damga,tarih) values ('$ziyaretcininipadresi', '$zamandamgasi', '$okunurtarih')");
	
	}

?>