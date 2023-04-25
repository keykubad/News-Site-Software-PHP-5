<?php
				if ($_SESSION["kullanici"]==""){
					git("index.php",3);
					die ('<meta charset="utf-8" />hop nereye? Dön başa bakalım :)');
					
	
			}
$idgit=$_GET["id"];
			if($_POST){
				
				
					$resimf			=$_FILES["resim"]["tmp_name"];
					$resimadioyna	=rand(0,10000);
					$resimyuklenme	=$resimadioyna."_".$_FILES['resim']['name'];
					$resimboyut		=$_FILES['resim']['size'];
					$resimtipi		=$_FILES['resim']['type'];
					//resim kontrol
					if($resimboyut>1000000 || strpos($resimtipi,"php")){
						uyari("HATA!!","Yüklediğiniz resim 1MB dan büyük yada resim değil!");
						exit();
					}else{
					
						$yuklenenresim	 = "../yuklenenler/gazete/" .$resimyuklenme;
						copy($resimf,$yuklenenresim);
					
							

									$kategorikayit	=mysql_query("update gazete set
									gazeteresim='$yuklenenresim' where gazid='$idgit' ");
										if($kategorikayit){
											uyari("AYARLAR","Başarıyla kaydedildi!!");
											git("ana.php?git=gazeteduzen","3");
										}else{
											uyari("HATA!!!","Ayarlar kaydedilemedi!");
											git("ana.php?git=gazeteduzen","3");
										
										
										}
								
				
										
					}
			}

?>
   </div><!--mainright-->
    <!-- END OF RIGHT PANEL -->
    
    <div class="clearfix"></div>