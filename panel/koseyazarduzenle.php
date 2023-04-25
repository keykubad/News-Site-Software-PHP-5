<?php
	if ($_SESSION["kullanici"]==""){
		git("index.php",3);
		die ('<meta charset="utf-8" />hop nereye? Dön başa bakalım :)');
		
	
	}
$koseid		=$_GET["id"];
?>
<div class="breadcrumbwidget">
        	<ul class="skins">
                <li><a href="default" class="skin-color default"></a></li>
                <li><a href="orange" class="skin-color orange"></a></li>
                <li><a href="dark" class="skin-color dark"></a></li>
                <li>&nbsp;</li>
                <li class="fixed"><a href="" class="skin-layout fixed"></a></li>
                <li class="wide"><a href="" class="skin-layout wide"></a></li>
            </ul><!--skins-->
        	<ul class="breadcrumb">
                <li><a href="ana.php">Anasayfa</a> <span class="divider">/</span></li>
                <li class="active">Köşe yazarı düzenle</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Sitenizin köşe yazarlarını bu bölümden düzenleyebilirsiniz.</span>
        </div><!--uyarıyı burdan ver-->
<?php
			if($_POST){
					$adsoyad			=$_POST["adsoyad"];
					$tel				=$_POST["tel"];
					$adres				=$_POST["adres"];
					$ozgecmis			=$_POST["ozgecmis"];
					$resimf				= $_FILES["koseresim"]["tmp_name"];
					$resimadioyna	=rand(0,10000);
					$resimyuklenme	=$resimadioyna."_".$_FILES['koseresim']['name'];
					$resimboyut		=$_FILES['koseresim']['size'];
					$resimtipi		=$_FILES['koseresim']['type'];
					//resim kontrol
					if($resimboyut>1000000 || strpos($resimtipi,"php")){
						uyari("HATA!!","Yüklediğiniz resim 1MB dan büyük yada resim değil!");
						exit();
					}else{
					
						$yuklenenresim	 = "../yuklenenler/koseyazar/" .$resimyuklenme;
						copy($resimf,$yuklenenresim);
						if ($yuklenenresim){
						 $yuklenenresim=str_replace("../","",$yuklenenresim);
						}
								if($resimf==""){
									$kategorikayit	=mysql_query("update koseyazarlari set
									adisoyadi='$adsoyad',telefon='$tel',adres='$adres',ozgecmis='$ozgecmis' where kosid='$koseid'");
										if($kategorikayit){
											uyari("AYARLAR","Başarıyla kaydedildi!!");
											git("ana.php?git=koseyazariekle&id=$koseid",1);
										}else{
											uyari("HATA!!!","Ayarlar kaydedilemedi!");
											git("ana.php?git=koseyazariekle&id=$koseid",1);
										
										
										}
										
						
									
								}else{
									$kategorikayit	=mysql_query("update koseyazarlari set
									adisoyadi='$adsoyad',telefon='$tel',adres='$adres',ozgecmis='$ozgecmis',koseresim='$yuklenenresim' where kosid='$koseid'");
										if($kategorikayit){
											uyari("AYARLAR","Başarıyla kaydedildi!!");
											git("ana.php?git=koseyazariekle&id=$koseid",1);
										}else{
											uyari("HATA!!!","Ayarlar kaydedilemedi!");
										git("ana.php?git=koseyazariekle&id=$koseid",1);
										
										}
								
								
								}
										
					}
			}
			
//kose yazarı cekiyoruz
$koseyazaricek	=mysql_fetch_assoc(mysql_query("select * from koseyazarlari where kosid='$koseid'"));
$adsoy	=$koseyazaricek["adisoyadi"];
$tel	=$koseyazaricek["telefon"];
$ozgec	=$koseyazaricek["ozgecmis"];
$koresim=$koseyazaricek["koseresim"];
$adres	=$koseyazaricek["adres"];
?>
   <div class="maincontent">
        	<div class="contentinner content-dashboard">
                <div class="row-fluid">
<h4 class="widgettitle nomargin shadowed">Haber kategorisi ekle</h4>
                <div class="widgetcontent bordered shadowed nopadding">
                    <form class="stdform stdform2" method="post" action="" enctype="multipart/form-data">                
                               <p>
                                <label>Adı soyadı</label>
                                <span class="field"><input type="text" name="adsoyad" id="email2" class="input-xxlarge" value="<?php echo $adsoy;?>" /></span>
                            </p>
							
							<p>
                                <label>Telefon</label>
                                <span class="field"><input type="text" name="tel" id="email2" class="input-xxlarge" value="<?php echo $tel;?>"/></span>
                            </p>
                            <p>
                                <label>Adres</label>
                              <textarea cols="80" rows="5" name="adres" class="span9"><?php echo $adres;?></textarea>
                            </p>
							<p>
							 <label>Özgeçmiş <small>Köşe yazarına ait özgeçmişi buraya ekleyiniz.<br>Eğer metinde oynama yada HTML eklemek isterseniz,editörü kullanınız.</small></label>
                            <textarea id="elm1" name="ozgecmis" rows="15" cols="80" style="width: 80%" class="tinymce">
						<?php echo $ozgec;?>
                            </textarea>
                        </p>
						<p>
                            <label>Köşe yazarı resmi<small>1MB'dan büyük resim yüklenemez</small></label>
							
                            <span class="field">
                            	<input type="file" class="uniform-file" name="koseresim" /><br><br>
								<img src="<?php echo "../".$koresim; ?>" width="100" height="100">
                            </span>
                        </p>
							
				
                                                    
                            <p class="stdformbutton">
                                <button class="btn btn-primary">Güncelle</button>
                                <button type="reset" class="btn">Temizle</button>
                            </p>
                        </form>
                    </div><!--widgetcontent-->
                <!--span4-->
                </div><!--row-fluid-->
            </div><!--contentinner-->
        </div><!--maincontent-->
        
    </div><!--mainright-->
    <!-- END OF RIGHT PANEL -->
    
    <div class="clearfix"></div>