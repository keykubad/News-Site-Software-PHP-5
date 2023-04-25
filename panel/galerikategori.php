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
                <li class="active">Galeri ekle</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Sitenize ait galeri kategorilerini bu bölümden oluşturabilirsiniz.</span>
        </div><!--uyarıyı burdan ver-->
<?php
			if($_POST){
					$ustad			=$_POST["ustad"];
					$galeriad		=$_POST["galeriad"];
					$galerietiket	=$_POST["galetiket"];
					$galeriaktif	=$_POST["aktif"];
					$galanaac		=addslashes($_POST["galanaac"]);
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
						if ($yuklenenresim){
						 $yuklenenresim=str_replace("../","",$yuklenenresim);
						}
						if($resimf==""){
									$kategorikayit	=mysql_query("insert into galeri
									(galeriad,galerietiket,gustid,galeridurum,galerianayazi)
									values('$galeriad','$galerietiket','$ustad','$galeriaktif','$galanaac') ");
										if($kategorikayit){
											uyari("AYARLAR","Başarıyla kaydedildi!!");
											git("ana.php?git=galeriekle",1);
										}else{
											uyari("HATA!!!","Ayarlar kaydedilemedi!");
											git("ana.php?git=galeriekle",1);
										
										
										}
										
						
									
								}else{

									$kategorikayit	=mysql_query("insert into galeri
									(galeriad,galerietiket,gustid,galeridurum,galeriresim,galerianayazi)
									values('$galeriad','$galerietiket','$ustad','$galeriaktif','$yuklenenresim','$galanaac') ");
										if($kategorikayit){
											uyari("AYARLAR","Başarıyla kaydedildi!!");
											git("ana.php?git=galeriekle",1);
										}else{
											uyari("HATA!!!","Ayarlar kaydedilemedi!");
											git("ana.php?git=galeriekle",1);
										
										
										}
								
								
								}
										
					}
			}
?>
   <div class="maincontent">
        	<div class="contentinner content-dashboard">
                <div class="row-fluid">
<h4 class="widgettitle nomargin shadowed">Galeri ekleme menüsü</h4>
                <div class="widgetcontent bordered shadowed nopadding">
                    <form class="stdform stdform2" method="post" action="" enctype="multipart/form-data">                
                          <p>
                                <label>Üst Galeri</label>
                                <span class="field"><select name="ustad" id="selection2" class="uniformselect">
								<option value="0" selected>Hiçbiri</option>
								<?php
										$gal	=mysql_query("select * from galeri");
											while($d=mysql_fetch_assoc($gal)){
												$vidi	=$d["gid"];
												$vidbas	=$d["galeriad"];
								?>
								<option value="<?php echo $vidi;?>"><?php echo $vidbas;?></option>
								<?php 
								}
								?>
								  </select></span>
						</p>     
							   
							   <p>
                                <label>Galeri Adı</label>
                                <span class="field"><input type="text" name="galeriad" id="video" class="input-xxlarge" /></span>
                                       </p>
                                      <p>
                                <label>Galeri Ana Açıklama<small>Galeri kategorisine ait ana açıklama buraya girilecek.</small></label>
                                <span class="field"><textarea cols="80" rows="5" name="galanaac" class="span9"><?php echo $seodesc;?></textarea></span>
                            </p>
							
							</p>
                                      <p>
                                <label>Galeri Etiket<small>Galeriye ait etiketler buraya girilecek.</small></label>
                                <span class="field"><textarea cols="80" rows="5" name="galetiket" class="span9"><?php echo $seodesc;?></textarea></span>
                            </p>
				
						<p>
                            <label>Galeri Ana Resimi<small>1MB'dan büyük resim yüklenemez</small></label>
							
                            <span class="field">
                            	<input type="file" class="uniform-file" name="galeriresim" />
                            </span>
                        </p>    
							<p>
                        	<label>Galeri Aktif mi ?</label>
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