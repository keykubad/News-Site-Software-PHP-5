<?php
				if ($_SESSION["kullanici"]==""){
					git("index.php",3);
					die ('<meta charset="utf-8" />hop nereye? Dön başa bakalım :)');
					
	
			}
$idgit=$_GET["id"];
			if($_POST){
					$ustad			=$_POST["ustgaleri"];
					$aciklamas		=addslashes($_POST["aciklama"]);
				
					$resimf			=$_FILES["galeriresim"]["tmp_name"];
					$resimadioyna	=rand(0,10000);
					$resimyuklenme	=$resimadioyna."_".$_FILES['galeriresim']['name'];
					$resimboyut		=$_FILES['galeriresim']['size'];
					$resimtipi		=$_FILES['galeriresim']['type'];
					//resim kontrol
					if($resimboyut>1000000 || strpos($resimtipi,"php")){
						uyari("HATA!!","Yüklediğiniz resim 1MB dan büyük yada resim değil!");
						exit();
					}else{
					
						$yuklenenresim	 = "../yuklenenler/galeri/" .$resimyuklenme;
						copy($resimf,$yuklenenresim);
				
						if($resimf==""){
									$kategorikayit	=mysql_query("update galeriresim set
									galustid='$ustad',galeriaciklama='$aciklamas' where grid='$idgit' ");
										if($kategorikayit){
											uyari("AYARLAR","Başarıyla kaydedildi!!");
											git("ana.php?git=galeriresimduzenle&id=$ustad","3");
										}else{
											uyari("HATA!!!","Ayarlar kaydedilemedi!");
										git("ana.php?git=galeriresimduzenle&id=$ustad","3");
										
										
										}
										
						
									
								}else{

									$kategorikayit	=mysql_query("update galeriresim set
									galustid='$ustad',galeriaciklama='$aciklamas',galerifoto='$yuklenenresim' where grid='$idgit' ");
										if($kategorikayit){
											uyari("AYARLAR","Başarıyla kaydedildi!!");
											git("ana.php?git=galeriresimduzenle&id=$ustad","3");
										}else{
											uyari("HATA!!!","Ayarlar kaydedilemedi!");
											git("ana.php?git=galeriresimduzenle&id=$ustad","3");
										
										
										}
								
								
								}
										
					}
			}

?>
   </div><!--mainright-->
    <!-- END OF RIGHT PANEL -->
    
    <div class="clearfix"></div>