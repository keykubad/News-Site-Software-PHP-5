<?php
include("../ayar.php");
include("fonksiyon.php");
	if ($_SESSION["kullanici"]==""){
		git("index.php",3);
		die ('<meta charset="utf-8" />hop nereye? Dön başa bakalım :)');
		
	
	}


		$sayfa	= $_GET["resim"];
			switch($sayfa){
				case resimler:
				include("image.php");
				break;
			}

?>