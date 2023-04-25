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
                <li class="active">Video galeri düzenle</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Sitenize ait video galeriyi bu bölümden düzenleyebilirsiniz.</span>
        </div><!--uyarıyı burdan ver-->
<?php
			if($_POST){
					$videoad			=$_POST["videogaleri"];
					$vidsirasi			=$_POST["sira"];
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
					
						$yuklenenresim	 = "../yuklenenler/videogaleri/" .$resimyuklenme;
						copy($resimf,$yuklenenresim);
						if ($yuklenenresim){
						 $yuklenenresim=str_replace("../","",$yuklenenresim);
						}
								if($resimf==""){
									$kategorikayit	=mysql_query("update videogaleri set
									videogaleriad='$videoad',videosira='$vidsirasi' where vid='$koseid'");
										if($kategorikayit){
											uyari("AYARLAR","Başarıyla kaydedildi!!");
											git("ana.php?git=videogaleriduzenle&id=$koseid",1);
										}else{
											uyari("HATA!!!","Ayarlar kaydedilemedi!");
											git("ana.php?git=videogaleriduzenle&id=$koseid",1);
										
										
										}
										
						
									
								}else{
									$kategorikayit	=mysql_query("update videogaleri set
									videogaleriad='$videoad',videosira='$vidsirasi',gvideoresim='$yuklenenresim' where vid='$koseid'");
										if($kategorikayit){
											uyari("AYARLAR","Başarıyla kaydedildi!!");
											git("ana.php?git=videogaleriduzenle&id=$koseid",1);
										}else{
											uyari("HATA!!!","Ayarlar kaydedilemedi!");
											git("ana.php?git=videogaleriduzenle&id=$koseid",1);
										
										
										}
								
								
								}
										
					}
			}
			
//kose yazarı cekiyoruz
$vidcek	=mysql_fetch_assoc(mysql_query("select * from videogaleri where vid='$koseid'"));
$vidad		=$vidcek["videogaleriad"];
$vsira		=$vidcek["videosira"];
$vidresim	=$vidcek["gvideoresim"];

?>
   <div class="maincontent">
        	<div class="contentinner content-dashboard">
                <div class="row-fluid">
<h4 class="widgettitle nomargin shadowed">Video Galeri Düzenle</h4>
                <div class="widgetcontent bordered shadowed nopadding">
                    <form class="stdform stdform2" method="post" action="" enctype="multipart/form-data">                
                               <p>
                                <label>Video Galeri İsmi</label>
                                <span class="field"><input type="text" name="videogaleri" id="video" class="input-xxlarge" value="<?php echo $vidad;?>"/></span>
                            </p>
							
                            <p>
                                <label>Sırası</label>
                             <span class="field"><input type="text" name="sira" id="email2" class="input-xxlarge" value="<?php echo $vsira;?>" /></span>
                            </p>  
						<p>
                            <label>Köşe yazarı resmi<small>1MB'dan büyük resim yüklenemez</small></label>
							
                            <span class="field">
                            	<input type="file" class="uniform-file" name="vidresim" /><br><br>
								<img src="<?php echo "../".$vidresim; ?>" width="100" height="100">
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