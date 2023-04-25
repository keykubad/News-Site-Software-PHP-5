<?php
	if ($_SESSION["kullanici"]==""){
		git("index.php",3);
		die ('<meta charset="utf-8" />hop nereye? Dön başa bakalım :)');
		
	
	}
$ids	=$_GET["id"];
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
                <li class="active">Haber kategorisi Düzenle</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Sitenizdeki haberlere ait kategorileri düzenlemek için bu bölümü kullanınız.</span>
        </div><!--uyarıyı burdan ver-->
<?php
			if($_POST){
					$haberkategorisi	=$_POST["habkate"];
					$haberkategoriadi	=$_POST["katisim"];
					$habersira			=$_POST["sirano"];
					$altmenugoster		=$_POST["altmenugoster"];
					$ustmenugoster		=$_POST["ustmenugoster"];
					$yorumkapat			=$_POST["yorumkapat"];
					$kataktifi			=$_POST["kataktif"];
					$resimf				= $_FILES["katresim"]["tmp_name"];
					$resimadioyna	=rand(0,10000);
					$resimyuklenme	=$resimadioyna."_".$_FILES['katresim']['name'];
					$resimboyut		=$_FILES['katresim']['size'];
					$resimtipi		=$_FILES['katresim']['type'];
			
					if($resimboyut>2000000 || strpos($resimtipi,"php")){
						uyari("HATA!!","Yüklediğiniz resim 2MB dan büyük yada resim değil!");
						exit();
					}else{
					
						$yuklenenresim	 = "../yuklenenler/haber/" .$resimyuklenme;
						copy($resimf,$yuklenenresim);
						if ($yuklenenresim){
						 $yuklenenresim=str_replace("../","",$yuklenenresim);
						}
								if($resimf==""){
									$kategorikayit	=mysql_query("update haberkategori set
									haberkatad='$haberkategoriadi',
									habersira='$habersira',altgoster='$altmenugoster',
									ustgoster='$ustmenugoster',yorumkapat='$yorumkapat',
									ustkategori='$haberkategorisi',kataktif='$kataktifi'
									where id='$ids' ");
										if($kategorikayit){
											uyari("AYARLAR","Başarıyla kaydedildi!!");
											git("ana.php?git=haberkategoriduzenle&id=$ids","1");
										}else{
											uyari("HATA!!!","Ayarlar kaydedilemedi!");
										
										
										}
										
						
									
								}else{
								$kategorikayit	=mysql_query("update haberkategori set
									haberkatad='$haberkategoriadi',
									habersira='$habersira',altgoster='$altmenugoster',
									ustgoster='$ustmenugoster',yorumkapat='$yorumkapat',
									ustkategori='$haberkategorisi',haberresim='$yuklenenresim',kataktif='$kataktifi'
									where id='$ids' ");
										if($kategorikayit){
											uyari("AYARLAR","Başarıyla kaydedildi!!");
											git("ana.php?git=haberkategoriduzenle&id=$ids","1");
										}else{
											uyari("HATA!!!","Ayarlar kaydedilemedi!");
										
										
										}
								
								
								}
										
					}
			}
?>
   <div class="maincontent">
        	<div class="contentinner content-dashboard">
                <div class="row-fluid">
<h4 class="widgettitle nomargin shadowed">Haber kategorisi ekle</h4>
                <div class="widgetcontent bordered shadowed nopadding">
                    <form class="stdform stdform2" method="post" action="" enctype="multipart/form-data">
                               <p>
                                <label>Üst Kategori Seç</label>
                                <span class="field"><select name="habkate" id="selection2" class="uniformselect">
                                  
							<?php
								$kati	= mysql_fetch_assoc(mysql_query("select * from haberkategori where id='$ids' "));
								$ustid=$kati["ustkategori"];

						
									$ustkategori	= mysql_fetch_assoc(mysql_query("select * from haberkategori where id='$ustid'"));
									$ustidsi=$ustkategori["ustkategori"];
									$katadi=$ustkategori["haberkatad"];
										if($ustid=="0"){
											echo '<option value="0" selected>Hiçbiri</option>';
										}else{
											echo '<option value="'.$ustidsi.'" selected>'.$katadi.'</option>';
										}
									
									$katlist	=mysql_query("select * from haberkategori");
										while($cek=mysql_fetch_assoc($katlist)){
											$haberkat	=$cek["haberkatad"];
											$hid		=$cek["id"];
											$ustkat		=$cek["ustkategori"];
							?>
                                    <option value="<?php echo $hid;?>">
									<?php
										if($ustkat>0){
											echo "+".$haberkat;
										}else{
											echo $haberkat;
										}
									
									?></option>
									
							<?php
										}
										$haberkatbilgi=mysql_fetch_assoc(mysql_query("select * from haberkategori where id='$ids'"));
										$haberkategoriadi	=$haberkatbilgi["haberkatad"];
										$habersirano		=$haberkatbilgi["habersira"];
										$hyorumkapat		=$haberkatbilgi["yorumkapat"];
										$hustad				=$haberkatbilgi["ustgoster"];
										$haltad				=$haberkatbilgi["altgoster"];
										$habres				=$haberkatbilgi["haberresim"];
										$aktifmi			=$haberkatbilgi["kataktif"];
										$gundem	 			=$haberkatbilgi["gundem"];
							?>	
                                </select></span>
                            </p>
                            
                               <p>
                                <label>Kategori Adı</label>
                                <span class="field"><input type="text" name="katisim" id="email2" class="input-xxlarge" value="<?php echo $haberkategoriadi;?>" /></span>
                            </p>
							
							<p>
                                <label>Sıra No</label>
                                <span class="field"><input type="text" name="sirano" id="email2" class="input-small" value="<?php echo $habersirano;?>" /></span>
                            </p>
                            
						<p>
                            <label>Kategori Resmi<small>2MB'dan büyük resim yüklenemez</small></label>
							
                            <span class="field">
                            	<input type="file" class="uniform-file" name="katresim" />
								<span><img src="<?php echo "../".$habres;?>" width="100" height="100"></span>
                            </span>
							
                        </p>
							
						<p>
                        	<label>Ek Özellikler</label>
                            <span class="formwrapper">
							<input type="checkbox" name="kataktif" value="1" <?php if($aktifmi=="1"){ echo "checked";}?>/> Kategori Aktif mi?<br />
                            	<input type="checkbox" name="altmenugoster" value="1" <?php if($haltad=="1"){ echo "checked";}?>/> Alt menüde göster<br />
                            	<input type="checkbox" name="ustmenugoster" value="1" <?php if($hustad=="1"){ echo "checked";}?>/>Üst menüde göster <br />
								<input type="checkbox" name="yorumkapat" value="1" <?php if($hyorumkapat=="1"){ echo "checked";}?>/>Yoruma kapat <br />
                               <input type="checkbox" name="gundem" value="1" <?php if($gundem=="1"){ echo "checked";}?>/>Gündem bölümünde göster <br />
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