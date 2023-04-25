<?php
	if ($_SESSION["kullanici"]==""){
		git("index.php",3);
		die ('<meta charset="utf-8" />hop nereye? Dön başa bakalım :)');
		
	
	}
$idi=$_GET["id"];
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
                <li class="active">Yorum Düzenle</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Sitenizde haberlere yapılan yorumları bu bölümden düzenleyebilirsiniz.</span>
        </div><!--pagetitle-->
<?php
			if($_POST){
				$adsoyadi	=$_POST["adisoyadi"];	
				$emaili		=$_POST["email"];	
				$yorumum	=$_POST["yorumu"];	
				$aktifmi	=$_POST["aktif"];	
					$guncel		=mysql_query("update yorumlar set adsoyad='$adsoyadi',email='$emaili',yorumu='$yorumum',ydurum='$aktifmi'
					where yid='$idi'");
						if($guncel){
							uyari("Yorum başarıyla güncellendi!");
							git("ana.php?git=yorumlar","3");
						}else{
							hata("Yorum güncellenemedi!!!");
							git("ana.php?git=yorumlar","3");
						}
			}
?>
        <div class="maincontent">
        	<div class="contentinner content-dashboard">

                <div class="row-fluid">
<h4 class="widgettitle nomargin shadowed">Yorum Düzenleme</h4>
                <div class="widgetcontent bordered shadowed nopadding">
                    <form class="stdform stdform2" method="post" action="" enctype="multipart/form-data">
					<?php
							$yorum	=mysql_fetch_assoc(mysql_query("select * from yorumlar where yid='$idi'"));
								$adsoyad	=$yorum["adsoyad"];
								$email		=$yorum["email"];
								$yorumu		=$yorum["yorumu"];
								$durumu		=$yorum["ydurum"];
					?>
                         <p>
                                <label>Adı Soyadı</label>
                       <span class="field"><input type="text" name="adisoyadi"  class="input-xxlarge" value="<?php echo $adsoyad;?>" /></span>
						</p>
                        <p>
                                <label>Email</label>
                                <span class="field"><input type="text" name="emaili"  class="input-xxlarge" value="<?php echo $email;?>" /></span>
                            </p>
                            <p>
                                <label>Üye Yorumu</label>
                                <span class="field"><textarea cols="80" rows="5" name="yorumu" class="span9"><?php echo $yorumu;?></textarea></span>
                            </p>

                                <p>
                                <label>Yorum Aktifmi ?</label>
                                <span class="field"><select name="aktif" id="selection2" class="uniformselect">
								<option value="1" selected>Aktif</option>
								<option value="0">Pasif</option>
								  </select></span>
								</p>
							
                            
                            <p class="stdformbutton">
                                <button class="btn btn-primary">Yorum Güncelle</button>
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