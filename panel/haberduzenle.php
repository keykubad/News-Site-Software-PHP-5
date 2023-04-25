<?php
	if ($_SESSION["kullanici"]==""){
		git("index.php",3);
		die ('<meta charset="utf-8" />hop nereye? Dön başa bakalım :)');
		
	
	}
$idsi		=$_GET["id"];
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
                <li class="active">Haber düzenle </li>
				
            </ul>
</div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Sitenize ait haberleri bu bölümden düzenleyebilirsiniz.</span>
        </div><!--pagetitle-->

        <div class="maincontent">
        	<div class="contentinner content-dashboard">
		<?php
			//ekleme işlemleri
		if($_POST){
			$gun				=$_POST["day"];
			$ay					=$_POST["month"];
			$yil				=$_POST["year"];
			$saatilk			=$_POST["saatilk"];
			$saatiki			=$_POST["saatiki"];
			$saatuc 			=$_POST["saatuc"];
			$haberkat 			=$_POST["haberkat"];
			$hbaslik 			=addslashes($_POST["hbaslik"]);
			$hetiket 			=addslashes($_POST["hetiket"]);
			$hkisa	 			=addslashes($_POST["hkisa"]);
			$hicerik 			=addslashes($_POST["hicerik"]);
			$videokod 			=addslashes($_POST["videokod"]);
			$haktif 			=$_POST["aktif"];
			$mansetgoster 		=$_POST["mansetgoster"];
			$anasayfagoster 	=$_POST["anasayfagoster"];
			$ustmanset		 	=$_POST["ustmanset"];
			$sondakika		 	=$_POST["sondakika"];
			$flash			 	=$_POST["flash"];
			$yorumkapa		 	=$_POST["yorumakapa"];
			$sonrakitarihsaat	=date("".$gun."/".$ay."/".$yil." ".$saatilk.":".$saatiki.":".$saatuc."");
			$hmanset				= $_FILES["hmanset"]["tmp_name"];
					$resimadioyna	=rand(0,1000000);
					$resimyuklenme	=$resimadioyna."_".$_FILES['hmanset']['name'];
					$resimboyut		=$_FILES['hmanset']['size'];
					$resimtipi		=$_FILES['hmanset']['type'];
					//resim kontrol
					if($resimboyut>1000000 || strpos($resimtipi,"php")){
						hata("HATA!!","Yüklediğiniz resim 1MB dan büyük yada resim değil!");
						exit();
					}else{
					
				
					if($hmanset==""){
						$haberekle	=mysql_query("update haberler set tarihsaat='$sonrakitarihsaat',haberkategori='$haberkat',
						hbaslik='$hbaslik',hetiket='$hetiket',hkisa='$hkisa',hicerik='$hicerik',videokod='$videokod',
						aktif='$haktif',mansetgoster='$mansetgoster',anasayfagoster='$anasayfagoster',
						ustmanset='$ustmanset',sondakika='$sondakika',flash='$flash',yorumakapa='$yorumkapa' where hid='$idsi'");
							if($haberekle){
								uyari("Haber Başarıyla Güncellendi!!");
								git("ana.php?git=haberduzenle&id=$idsi","1");
							}else{
								hata("Haber Güncellenemedi!!");
								git("ana.php?git=haberduzenle&id=$idsi","1");
							
							}
						
						
					}else{
						$yuklenenresim	 = "../yuklenenler/haberler/" .$resimyuklenme;
						copy($hmanset,$yuklenenresim);
							if ($yuklenenresim){
								$yuklenenresim=str_replace("../","",$yuklenenresim);
							}
					
						$haberekle	=mysql_query("update haberler set tarihsaat='$sonrakitarihsaat',haberkategori='$haberkat',
						hbaslik='$hbaslik',hetiket='$hetiket',hkisa='$hkisa',hicerik='$hicerik',videokod='$videokod',
						aktif='$haktif',mansetgoster='$mansetgoster',anasayfagoster='$anasayfagoster',
						ustmanset='$ustmanset',sondakika='$sondakika',flash='$flash',yorumakapa='$yorumkapa',hmanset='$yuklenenresim' where hid='$idsi'");
							if($haberekle){
								uyari("Haber Başarıyla Düzenlendi!!");
								git("ana.php?git=haberekle&id=$idsi","1");
							}else{
								hata("Haber Eklenemedi!!");
								git("ana.php?git=haberekle&id=$idsi","1");
							
							}
					
					}
							
			
				
					}

				
		}
		?>
                <div class="row-fluid">
<h4 class="widgettitle nomargin shadowed">Haber ekle</h4>
                <div class="widgetcontent bordered shadowed nopadding">
                    <form class="stdform stdform2" method="post" action="" enctype="multipart/form-data">
					      <p>
							 	<label>Tarih/Saat <small>Haberin ekleneceği tarih ve saati buradan seçebilirsiniz.</small></label>
                            <span class="field">
                           TARİH -<select name="day" class="uniformselect" style="width:50px;">
						 	
                         <?php
								$kategoricek		=mysql_fetch_array(mysql_query("select * from haberler where hid='$idsi'"));
								
								//tarih ve saat parçalayıp denkleme yaptık
								$vgun		=substr($kategoricek["tarihsaat"],0,2);
								$vay		=substr($kategoricek["tarihsaat"],3,5);
								$vyil		=substr($kategoricek["tarihsaat"],6,10);
								$vsaatilk	=substr($kategoricek["tarihsaat"],10,12);
								$vsaatiki	=substr($kategoricek["tarihsaat"],14,16);
								$vsaatuc	=substr($kategoricek["tarihsaat"],17,19);
								$gunu=date("d");
								$date=0;
								while($date!=31){
								$date++;
						 ?>  	
                       
                            	<option value="<?php echo zaman($date); ?>" <?php if($date==$vgun){ echo "selected";} ?>><?php echo zaman($date); ?></option>	
						<?php
							
							}
						?>
                        
                            </select>
                            
							
							   <select name="month" class="uniformselect" style="width:50px;">
						 <?php
								$ayi=date("m");
								$month=0;
								while($month!=12){
								$month++;
						 ?>  	
                          
                           
                            	<option value="<?php echo zaman($month); ?>" <?php if($month==$vay){ echo "selected";} ?>><?php echo zaman($month); ?></option>
                        <?php
							
							}
						?>
                            </select>
							
					    <select name="year" class="uniformselect" style="width:60px;">
						 <?php
								$yili=date("Y");
								$year="1999";
								while($year!=2100){
								$year++;
						 ?>  
                          
                           
                            	<option value="<?php echo $year; ?>" <?php if($year==$vyil){ echo "selected";} ?>><?php echo $year; ?></option>
                        <?php
							
							}
						?>
                            </select>
						&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SAAT -
						<select name="saatilk" class="uniformselect" style="width:50px;">
                         <?php
								$saatilki=date("H");
								$saatilk=0;
								while($saatilk!=24){
								$saatilk++;
						 ?>  
                       
                            	<option value="<?php echo zaman($saatilk); ?>" <?php if($saatilk==$vsaatilk){ echo "selected";} ?>><?php echo zaman($saatilk); ?></option>	
						<?php
							
							}
						?>
                        
                            </select>
                            
							
							    <select name="saatiki" class="uniformselect" style="width:50px;">
						 <?php
								$saatikisi=date("i");
								$saatiki=-1;
								while($saatiki!=59){
								$saatiki++;
						 ?>  
                          
                           
                            	<option value="<?php echo zaman($saatiki); ?>" <?php if($saatiki==$vsaatiki){ echo "selected";} ?>><?php echo zaman($saatiki); ?></option>
                        <?php
							
							}
						?>
                            </select>
							
					    <select name="saatuc" class="uniformselect" style="width:50px;">
						 <?php
								$saatucu=date("s");
								$saatuc=-1;
								while($saatuc!=59){
								$saatuc++;
						 ?>  
                          
                           
                            	<option value="<?php echo zaman($saatuc); ?>" <?php if($saatuc==$vsaatuc){ echo "selected";} ?>><?php echo zaman($saatuc); ?></option>
                        <?php
							
							}
						?>
                            </select>
							
							
							
                            </span>
                          
                               </p>
							   
						 <p>
                                <label>Haber Kategorisi</label>
                                <span class="field"><select name="haberkat" id="selection2" class="uniformselect">
						<?php
						//haber içerikleri çekiyoruz
						$haberki		=mysql_fetch_array(mysql_query("select * from haberler where hid='$idsi'"));
						$baslikhaber	=$haberki["hbaslik"];
						$hetiketi		=$haberki["hetiket"];
						$hkisas			=$haberki["hkisa"];
						$hiceriks		=$haberki["hicerik"];
						$hmanseti		=$haberki["hmanset"];
						$hvideo			=$haberki["videokod"];
						$haktif			=$haberki["aktif"];
						$hmansetgoster	=$haberki["mansetgoster"];
						$hanasayfagoster=$haberki["anasayfagoster"];
						$hustmanset		=$haberki["ustmanset"];
						$hsondakika		=$haberki["sondakika"];
						$hflash			=$haberki["flash"];
						$hyorumakapat	=$haberki["yorumakapa"];
						
						
								$haberkate		=mysql_query("select * from haberkategori");
									while($haberdon=mysql_fetch_assoc($haberkate)){
										$habid		=$haberdon["id"];
										$haberkat	=$haberdon["haberkatad"];
									
						
						?>

                               <option value="<?php echo $habid;?>" <?php if($habid==$haberki["haberkategori"]){ echo "selected";} ?>><?php echo $haberkat;?></option>
                        <?php
						}
						?>
                                </select></span>
                            </p> 
							  <p>
                                <label>Haber Başlığı</label>
                                <span class="field"><input type="text" name="hbaslik" id="email2" class="input-xxlarge" value="<?php echo $baslikhaber;?>" /></span>
                            </p>
						<p>
                        	<label>Haber Etiketleri<small>Habere ait anahtar kelimeleri giriniz.</label>
                            <span class="field">
                            	<textarea cols="80" rows="5" name="hetiket" class="span9"><?php echo $hetiketi;?></textarea>
                            </span>
                        </p>
							
                            <p>
                                <label>Kısa [Spot] Haber <small>Haberin kısa açıklamasını giriniz.</small></label>
                                <span class="field"><textarea cols="80" rows="5" name="hkisa" class="span9" ><?php echo $hkisas;?></textarea></span>
                            </p>
							<p>
							 <label>Haber İçeriği <small>Haberin tam metnini buraya ekleyiniz.<br>Eğer metinde oynama yada HTML eklemek isterseniz,editörü kullanınız.</small></label>
                            <textarea id="elm1" name="hicerik" rows="15" cols="80" style="width: 80%" class="tinymce">
								<?php echo $hiceriks;?>
                            </textarea>
                        </p>
							<p>
                            <label>Manşet Resmi<small>Maksimum 1MB olmalıdır.</label>
                            <span class="field">
                            	<input type="file" class="uniform-file" name="hmanset" /><br><br>
								<img src="<?php echo "../".$hmanseti;?>" width="150" height="120">
                            </span>
							
                        </p>
						
						   <p>
                                <label>Video Kodu [Embed] <small>Habere ait video eklenecekse bu alana kodunu ekleyiniz..</small></label>
                                <span class="field"><textarea cols="80" rows="5" name="videokod" class="span9"><?php echo $hvideo;?></textarea></span>
                            </p>
									<p>
                        	<label>Ek Özellikler</label>
                            <span class="formwrapper">
                            	<input type="checkbox" name="aktif" value="<?php if($haktif=="0"){echo "1";}else{echo $haktif;} ?>" <?php if($haktif=="1"){echo "checked";}?> /> Aktif<br />
                            	<input type="checkbox" name="mansetgoster" value="<?php if($hmansetgoster=="0"){echo "1";}else{echo $hmansetgoster;} ?>" <?php if($hmansetgoster=="1"){echo "checked";}?>/>Anasayfa manşette göster <br />
								<input type="checkbox" name="anasayfagoster" value="<?php if($hanasayfagoster=="0"){echo "1";}else{echo $hanasayfagoster;} ?>" <?php if($hanasayfagoster=="1"){echo "checked";}?> />Anasayfada göster <br />
								<input type="checkbox" name="ustmanset" value="<?php if($hustmanset=="0"){echo "1";}else{echo $hustmanset;} ?>" <?php if($hustmanset=="1"){echo "checked";}?>/>Üst manşet'te göster <br />
								<input type="checkbox" name="sondakika" value="<?php if($hsondakika=="0"){echo "1";}else{echo $hsondakika;} ?>" <?php if($hsondakika=="1"){echo "checked";}?>/>Son dakika haberlerde göster <br />
								<input type="checkbox" name="flash" value="<?php if($hflash=="0"){echo "1";}else{echo $hflash;} ?>" <?php if($hflash=="1"){echo "checked";}?>/>Flash haberlerde göster <br />
								<input type="checkbox" name="yorumakapa" value="<?php if($hyorumakapat=="0"){echo "1";}else{echo $hyorumakapat;} ?>" <?php if($hyorumakapat=="1"){echo "checked";}?>/>Yoruma Kapat <br />
                               
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