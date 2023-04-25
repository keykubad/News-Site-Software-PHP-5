<?php
	if ($_SESSION["kullanici"]==""){
		git("index.php",3);
		die ('<meta charset="utf-8" />hop nereye? Dön başa bakalım :)');
		
	
	}

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
                <li class="active">Köşe yazarı ekle</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Sitenizin köşe yazarlarını bu bölümden ekleyebilirsiniz.</span>
        </div><!--uyarıyı burdan ver-->
<?php
			if($_POST){
					$adsoyad			=$_POST["adsoyad"];
					$tel				=$_POST["tel"];
					$adres				=$_POST["adres"];
					$ozgecmis			=$_POST["ozgecmis"];
					$kosaktif			=$_POST["aktif"];
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
									$kategorikayit	=mysql_query("insert into koseyazarlari
									(adisoyadi,telefon,adres,ozgecmis,kosaktif)
									values('$adsoyad','$tel',
									'$adres','$ozgecmis','$kosaktif') ");
										if($kategorikayit){
											uyari("AYARLAR","Başarıyla kaydedildi!!");
											git("ana.php?git=koseyazariekle",1);
										}else{
											uyari("HATA!!!","Ayarlar kaydedilemedi!");
											git("ana.php?git=koseyazariekle",1);
										
										
										}
										
						
									
								}else{
									$kategorikayit	=mysql_query("insert into koseyazarlari
									(adisoyadi,telefon,adres,ozgecmis,koseresim,kosaktif)
									values('$adsoyad','$tel',
									'$adres','$ozgecmis','$yuklenenresim','$kosaktif') ");
										if($kategorikayit){
											uyari("AYARLAR","Başarıyla kaydedildi!!");
											git("ana.php?git=koseyazariekle",1);
										}else{
											uyari("HATA!!!","Ayarlar kaydedilemedi!");
										git("ana.php?git=koseyazariekle",1);
										
										}
								
								
								}
										
					}
			}
?>
   <div class="maincontent">
        	<div class="contentinner content-dashboard">
                <div class="row-fluid">
<h4 class="widgettitle nomargin shadowed">Köşe yazarı ekle</h4>
                <div class="widgetcontent bordered shadowed nopadding">
                    <form class="stdform stdform2" method="post" action="" enctype="multipart/form-data">                
                               <p>
                                <label>Adı soyadı</label>
                                <span class="field"><input type="text" name="adsoyad" id="email2" class="input-xxlarge" /></span>
                            </p>
							
							<p>
                                <label>Telefon</label>
                                <span class="field"><input type="text" name="tel" id="email2" class="input-xxlarge" /></span>
                            </p>
                            <p>
                                <label>Adres</label>
                              <textarea cols="80" rows="5" name="adres" class="span9"></textarea>
                            </p>
							<p>
							 <label>Özgeçmiş <small>Köşe yazarına ait özgeçmişi buraya ekleyiniz.<br>Eğer metinde oynama yada HTML eklemek isterseniz,editörü kullanınız.</small></label>
                            <textarea id="elm1" name="ozgecmis" rows="15" cols="80" style="width: 80%" class="tinymce">
                       
                            </textarea>
                        </p>
						<p>
                            <label>Köşe yazarı resmi<small>1MB'dan büyük resim yüklenemez</small></label>
							
                            <span class="field">
                            	<input type="file" class="uniform-file" name="koseresim" />
                            </span>
                        </p>
							
								<p>
                        	<label>Köşe Yazarı Aktif mi ?</label>
                            <span class="formwrapper">
                            	<input type="checkbox" name="aktif" value="1" /> Aktif<br />
                          
                            </span>
                        </p>
                                                    
                            <p class="stdformbutton">
                                <button class="btn btn-primary">Kaydet</button>
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