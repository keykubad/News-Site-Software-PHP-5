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
                <li class="active">Haber ekle</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Sitenize Haberlerinizi bu bölümden ekleyebilirsiniz.</span>
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
			$koseyazarim 		=$_POST["yazarid"];
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
						$haberekle	=mysql_query("insert into haberler (tarihsaat,haberkategori,hbaslik,hetiket,
						hkisa,hicerik,videokod,aktif,mansetgoster,anasayfagoster,ustmanset,sondakika,flash,
						yorumakapa,koseid) values ('$sonrakitarihsaat','$haberkat','$hbaslik','$hetiket','$hkisa','$hicerik',
						'$videokod','$haktif','$mansetgoster','$anasayfagoster','$ustmanset','$sondakika','$flash',
						'$yorumkapa','$koseyazarim') ");
							if($haberekle){
								uyari("Köşe Yazısı Başarıyla Eklendi!!");
								git("ana.php?git=haberekle","1");
							}else{
								hata("Haber Eklenemedi!!");
								git("ana.php?git=haberekle","1");
							
							}
						
						
					}else{
						$yuklenenresim	 = "../yuklenenler/haberler/" .$resimyuklenme;
						copy($hmanset,$yuklenenresim);
							if ($yuklenenresim){
								$yuklenenresim=str_replace("../","",$yuklenenresim);
							}
					
						$haberekle	=mysql_query("insert into haberler (tarihsaat,haberkategori,hbaslik,hetiket,
						hkisa,hicerik,videokod,aktif,mansetgoster,anasayfagoster,ustmanset,sondakika,flash,
						yorumakapa,hmanset,koseid) values ('$sonrakitarihsaat','$haberkat','$hbaslik','$hetiket','$hkisa','$hicerik',
						'$videokod','$haktif','$mansetgoster','$anasayfagoster','$ustmanset','$sondakika','$flash',
						'$yorumkapa','$yuklenenresim','$koseyazarim') ");
							if($haberekle){
								uyari("Köşe Yazısı Başarıyla Eklendi!!");
								git("ana.php?git=haberekle","1");
							}else{
								hata("Köşe yazısı Eklenemedi!!");
								git("ana.php?git=haberekle","1");
							
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
								$gunu=date("d");
								$date=0;
								while($date!=31){
								$date++;
						 ?>  	
                       
                            	<option value="<?php echo zaman($date); ?>" <?php if($date==$gunu){ echo "selected";} ?>><?php echo zaman($date); ?></option>	
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
                          
                           
                            	<option value="<?php echo zaman($month); ?>" <?php if($month==$ayi){ echo "selected";} ?>><?php echo zaman($month); ?></option>
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
                          
                           
                            	<option value="<?php echo $year; ?>" <?php if($year==$yili){ echo "selected";} ?>><?php echo $year; ?></option>
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
                       
                            	<option value="<?php echo zaman($saatilk); ?>" <?php if($saatilk==$saatilki){ echo "selected";} ?>><?php echo zaman($saatilk); ?></option>	
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
                          
                           
                            	<option value="<?php echo zaman($saatiki); ?>" <?php if($saatiki==$saatikisi){ echo "selected";} ?>><?php echo zaman($saatiki); ?></option>
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
                          
                           
                            	<option value="<?php echo zaman($saatuc); ?>" <?php if($saatuc==$saatucu){ echo "selected";} ?>><?php echo zaman($saatuc); ?></option>
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
								$haberkate		=mysql_query("select * from haberkategori");
									while($haberdon=mysql_fetch_assoc($haberkate)){
										$habid		=$haberdon["id"];
										$haberkat	=$haberdon["haberkatad"];
									
						
						?>

                               <option value="<?php echo $habid;?>"><?php echo $haberkat;?></option>
                        <?php
						}
						?>
                                </select></span>
                            </p> 
							
													 <p>
                                <label>Köşe yazarı seç</label>
                                <span class="field"><select name="yazarid" id="selection2" class="uniformselect">
						<?php
								$kosecek		=mysql_query("select * from koseyazarlari");
									while($kos=mysql_fetch_assoc($kosecek)){
										$kosid		=$kos["kosid"];
										$kosadi		=$kos["adisoyadi"];
									
						
						?>

                               <option value="<?php echo $kosid;?>"><?php echo $kosadi;?></option>
                        <?php
						}
						?>
                                </select></span>
                            </p>
							  <p>
                                <label>Haber Başlığı</label>
                                <span class="field"><input type="text" name="hbaslik" id="email2" class="input-xxlarge" /></span>
                            </p>
						<p>
                        	<label>Haber Etiketleri<small>Habere ait anahtar kelimeleri giriniz.</label>
                            <span class="field">
                            	<textarea cols="80" rows="5" name="hetiket" class="span9"></textarea>
                            </span>
                        </p>
							
                            <p>
                                <label>Kısa [Spot] Haber <small>Haberin kısa açıklamasını giriniz.</small></label>
                                <span class="field"><textarea cols="80" rows="5" name="hkisa" class="span9"></textarea></span>
                            </p>
							<p>
							 <label>Haber İçeriği <small>Haberin tam metnini buraya ekleyiniz.<br>Eğer metinde oynama yada HTML eklemek isterseniz,editörü kullanınız.</small></label>
                            <textarea id="elm1" name="hicerik" rows="15" cols="80" style="width: 80%" class="tinymce">
                       
                            </textarea>
                        </p>
							<p>
                            <label>Manşet Resmi<small>Maksimum 1MB olmalıdır.</label>
                            <span class="field">
                            	<input type="file" class="uniform-file" name="hmanset" />
                            </span>
                        </p>
						
						   <p>
                                <label>Video Kodu [Embed] <small>Habere ait video eklenecekse bu alana kodunu ekleyiniz..</small></label>
                                <span class="field"><textarea cols="80" rows="5" name="videokod" class="span9"></textarea></span>
                            </p>
									<p>
                        	<label>Ek Özellikler</label>
                            <span class="formwrapper">
                            	<input type="checkbox" name="aktif" value="1" /> Aktif<br />
                            	<input type="checkbox" name="mansetgoster" value="1" />Anasayfa manşette göster <br />
								<input type="checkbox" name="anasayfagoster" value="1" />Anasayfada göster <br />
								<input type="checkbox" name="ustmanset" value="1" />Üst manşet'te göster <br />
								<input type="checkbox" name="sondakika" value="1" />Son dakika haberlerde göster <br />
								<input type="checkbox" name="flash" value="1" />Flash haberlerde göster <br />
								<input type="checkbox" name="yorumakapa" value="1" />Yoruma Kapat <br />
                               
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