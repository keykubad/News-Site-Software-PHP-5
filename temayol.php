<?php

//klasorleri listele
function klasor_listele($dizin){
		$dizinAc = opendir($dizin) or die ("Dizin Bulunamadý!");
		while ($dosya = readdir($dizinAc)){
			if (is_dir($dizin."/".$dosya) && $dosya != '.' && $dosya != '..'){
			
				echo $dosya;
			}
		}
}
		$ayar		=mysql_fetch_assoc(mysql_query("select * from yonetici"));
		//sabit tema ayarlarým
		define("PATH", realpath("."));
		define("URL", $ayar["siteadres"]);
		define("TEMA_URL","tema/".$ayar["sitetema"]);
		define("TEMA", PATH."tema/".$ayar["sitetema"]);
		define("TEMA_DIR", $ayar["sitetema"]);
		define("EPOSTA", $yonetici["email"]);
?>