<?php

include("../ayar.php");
include("fonksiyon.php");
	if ($_SESSION["kullanici"]==""){
		git("index.php",3);
		die ('<meta charset="utf-8" />hop nereye? Dön başa bakalım :)');
		
	
	}


include("header.php");
		$sayfa	= $_GET["git"];
			switch($sayfa){
				default:
				include("karsilama.php");
				break;
				case genelayar:
				include("genelayar.php");
				break;
				case seoayar:
				include("seoayar.php");
				break;
				case haberkategori:
				include("haberkategori.php");
				break;
				case haberkategoriduzen:
				include("haberkategoriduzen.php");
				break;
				case haberkategoriduzenle:
				include("haberkategoriduzenle.php");
				break;
				case haberkategorisil:
				$ids	=$_GET["id"];
				$kategorisil	=mysql_query("DELETE FROM haberkategori  where id='$ids'");
					if($kategorisil){
						uyari("Haber kategorisi başarıyla silindi!");
						git("ana.php?git=haberkategoriduzen","1");
					}else{
						hata("Haber kategorisi silinemedi!!!");
						git("ana.php?git=haberkategoriduzen","3");
					}
				break;
				case haberekle:
				include("haberekle.php");
				break;
				case haberduzen:
				include("haberduzen.php");
				break;
				case haberduzenle:
				include("haberduzenle.php");
				break;
				case koseyazariekle:
				include("koseyazariekle.php");
				break;
				case koseyazarduzen:
				include("koseyazarduzen.php");
				break;
				case koseyazarduzenle:
				include("koseyazarduzenle.php");
				break;
				case cikis:
					if(session_destroy()){
						uyari("Başarıyla çıkış yapılıyor!");
						git("index.php","1");
					}else{
						hata("Çıkış yapılamadı session çalışmıyor!!!");
						git("index.php","5");
					}
				break;
				case koseyazisiekle:
				include("koseyazisiekle.php");
				break;
				case koseyaziduzen:
				include("koseyaziduzen.php");
				break;
				case koseyazisiduzenle:
				include("koseyazisiduzenle.php");
				break;
				case anketekle:
				include("anketekle.php");
				break;
				case anketduzen:
				include("anketduzen.php");
				break;
				case anketduzenle:
				include("anketduzenle.php");
				break;
				case anketsil:
				$ids	=$_GET["id"];
				$anketsil	=mysql_query("DELETE FROM anketsoru  where id='$ids'");
				$ansil		=mysql_query("DELETE FROM anketcevap  where ankid='$ids'");
					if($anketsil and $ansil){
						uyari("Anket başarıyla silindi!");
						git("ana.php?git=anketduzen","1");
					}else{
						hata("Anket silinemedi!!!");
						git("ana.php?git=anketduzen","3");
					}
				break;
				case videogaleriekle:
				include("videogaleriekle.php");
				break;
				break;
				case videogaleriduzen:
				include("videogaleriduzen.php");
				break;
				case videogaleriduzenle:
				include("videogaleriduzenle.php");
				break;
				case videoekle:
				include("videoekle.php");
				break;
				case videoduzen:
				include("videoduzen.php");
				break;
				case videoduzenle:
				include("videoduzenle.php");
				break;
				case galeriekle:
				include("galerikategori.php");
				break;
				case galeriduzen:
				include("galeriduzen.php");
				break;
				case galeriduzenle:
				include("galeriduzenle.php");
				break;
				case galeriresim:
				include("galeriresim.php");
				break;
				case galeriresimduzen:
				include("galeriresimduzen.php");
				break;
				case galeriresimduzenle:
				include("galeriresimduzenle.php");
				break;
				case resimler:
				include("image.php");
				break;
				case cek:
				include("resimkayit.php");
				break;
				case sayfaekle:
				include("sayfaekle.php");
				break;
				case sayfaduzen:
				include("sayfaduzen.php");
				break;
				case sayfaduzenle:
				include("sayfaduzenle.php");
				break;
				case yorumlar:
				include("yorumlar.php");
				break;
				case yorumduzen:
				include("yorumduzenle.php");
				break;
				case analiz:
				include("analiz.php");
				break;
				case ilanlar:
				include("ilanekle.php");
				break;
				case ilanduzen:
				include("ilanduzen.php");
				break;
				case ilanduzenle:
				include("ilanduzenle.php");
				break;
				case moduller:
				include("modulekle.php");
				break;
				case modulduzen:
				include("modulduzen.php");
				break;
				case modulduzenle:
				include("modulduzenle.php");
				break;
				case reklamlar:
				include("reklamekle.php");
				break;
				case reklamduzen:
				include("reklamduzen.php");
				break;
				case reklamduzenle:
				include("reklamduzenle.php");
				break;
				case gazete:
				include("gazetegun.php");
				break;
				case gazetesayi:
				include("gazetesayiekle.php");
				break;
				case gazeteduzen:
				include("gazeteresimduzen.php");
				break;
				case gazeteresimduzenle:
				include("gazeteresimduzenle.php");
				break;
				case resimlergazete:
				include("resimlergazete.php");
				break;
				case cekgazete:
				include("gazetekayit.php");
				break;
			}
include("footer.php");
?>