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
                <li class="active">Video ekle</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Sitenize bu bölümden video ekleyebilirsiniz.</span>
        </div><!--pagetitle-->
<?php
			if($_POST){
					$vidad				=$_POST["vidad"];
					$vidbaslik			=$_POST["vidbaslik"];
					$vidaciklama		=addslashes($_POST["vidaciklama"]);
					$vidkod				=addslashes($_POST["vidkod"]);
					$vidaktif			=$_POST["vidaktif"];
					$videtiket			=$_POST["videtiket"];
					$resimf				= $_FILES["vidresim"]["tmp_name"];
					$resimadioyna	=rand(0,10000);
					$resimyuklenme	=$resimadioyna."_".$_FILES['vidresim']['name'];
					$resimboyut		=$_FILES['vidresim']['size'];
					$resimtipi		=$_FILES['vidresim']['type'];
					//resim kontrol
					if($resimboyut>1000000 || strpos($resimtipi,"php")){
						uyari("HATA!!","Yüklediğiniz resim 1MB dan büyük yada resim değil!");
						exit();
					}else{
					
						$yuklenenresim	 = "../yuklenenler/video/" .$resimyuklenme;
						copy($resimf,$yuklenenresim);
						if ($yuklenenresim){
						 $yuklenenresim=str_replace("../","",$yuklenenresim);
						}
								if($resimf==""){
									$vidkayit	=mysql_query("insert into videolar
									(videobaslik,videoaciklama,videoembed,vidustid,videodurum,videoetiket)
									values('$vidbaslik',
									'$vidaciklama','$vidkod','$vidad','$vidaktif','$videtiket') ");
										if($vidkayit){
											uyari("AYARLAR","Başarıyla kaydedildi!!");
											git("ana.php?git=videoekle",1);
										}else{
											uyari("HATA!!!","Ayarlar kaydedilemedi!");
											git("ana.php?git=videoekle",1);
										
										
										}
										
						
									
								}else{
									$vidkayit	=mysql_query("insert into videolar
									(videobaslik,videoaciklama,videoembed,vidustid,videodurum,videoresim,videoetiket)
									values('$vidbaslik',
									'$vidaciklama','$vidkod','$vidad','$vidaktif','$yuklenenresim','$videtiket') ");
										if($vidkayit){
											uyari("AYARLAR","Başarıyla kaydedildi!!");
											git("ana.php?git=videoekle",1);
										}else{
											uyari("HATA!!!","Ayarlar kaydedilemedi!");
											git("ana.php?git=videoekle",1);
										
										
										}
										
								
								
								}
										
					}
			}
?>
        <div class="maincontent">
        	<div class="contentinner content-dashboard">

                <div class="row-fluid">
<h4 class="widgettitle nomargin shadowed">Video Ekleme Menüsü</h4>
                <div class="widgetcontent bordered shadowed nopadding">
                    <form class="stdform stdform2" method="post" action="" enctype="multipart/form-data">
                         <p>
                                <label>Video Galeri Adı</label>
                                <span class="field"><select name="vidad" id="selection2" class="uniformselect">
								<?php
										$videogal	=mysql_query("select * from videogaleri");
											while($d=mysql_fetch_assoc($videogal)){
												$vidi	=$d["vid"];
												$vidbas	=$d["videogaleriad"];
								?>
								<option value="<?php echo $vidi;?>" selected><?php echo $vidbas;?></option>
								<?php 
								}
								?>
								  </select></span>
						</p>
                        <p>
                                <label>Video Başlık</label>
                                <span class="field"><input type="text" name="vidbaslik"  class="input-xxlarge" /></span>
                            </p>
							 <p>
                                <label>Video Etiket</label>
                                <span class="field"><input type="text" name="videtiket"  class="input-xxlarge" /></span>
                            </p>
                            <p>
                                <label>Video Açıklama<small>Videonuzda yer alacak açıklama bu bölüme</small></label>
                                <span class="field"><textarea cols="80" rows="5" name="vidaciklama" class="span9"><?php echo $seodesc;?></textarea></span>
                            </p>
							<p>
                                <label>Video Embed Kodu<small>Videonuzun kodlarını bu alana yapıştırınız.</small></label>
                                <span class="field"><textarea cols="80" rows="5" name="vidkod" class="span9"><?php echo $seodesc;?></textarea></span>
                            </p>
								<p>
                                <p>
                                <label>Video Aktifmi ?</label>
                                <span class="field"><select name="vidaktif" id="selection2" class="uniformselect">
								<option value="1" selected>Evet</option>
								<option value="0">Hayır</option>
								  </select></span>
								</p>
							
                            	<p>
                            <label>Video resmi<small>1MB'dan büyük resim yüklenemez</small></label>
							
                            <span class="field">
                            	<input type="file" class="uniform-file" name="vidresim" />
                            </span>
                        </p>                       
                            <p class="stdformbutton">
                                <button class="btn btn-primary">Video Ekle</button>
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