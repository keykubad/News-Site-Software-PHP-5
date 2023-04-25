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
                <li class="active">Anket ekle</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Sitenizin anketlerini buradan ekleyip düzenleyebilirsiniz.</span>
        </div><!--pagetitle-->

        <div class="maincontent">
        	<div class="contentinner content-dashboard">

                <div class="row-fluid">
<h4 class="widgettitle nomargin shadowed">Anket Ekleme Menüsü</h4>
                <div class="widgetcontent bordered shadowed nopadding">
                    <form class="stdform stdform2" method="post" action="">
                           
                            
                            <p>
                                <label>Anket Sorusu<small>Ankete ait soruyu buraya yazınız</small></label>
                                <span class="field"><textarea cols="80" rows="5" name="anketsorusu" class="span9"><?php echo $seodesc;?></textarea></span>
                            </p>
							    <p>
                                <label>Cevap Sayısı</label>
                                <span class="field"><input type="text" name="cevapsayi"  class="input-xxlarge" /></span>
                            </p>
								<p>
                                <p>
                                <label>Anket Aktifmi ?</label>
                                <span class="field"><select name="anketaktif" id="selection2" class="uniformselect">
								<option value="1" selected>Evet</option>
								<option value="2">Hayır</option>
								  </select></span>
								</p>
							
                                                    
                            <p class="stdformbutton">
                                <button class="btn btn-primary" name="ilk">Aşama 2</button>
                                <button type="reset" class="btn">Temizle</button>
                            </p>
                        </form>
					
							<?php

								if(isset($_POST["ilk"])){
								$anketsorusu	=$_POST["anketsorusu"];
								$cevap			=$_POST["cevapsayi"];
								$anketaktif		=$_POST["anketaktif"];
									$anketsoru	=mysql_query("insert into anketsoru (baslik,durum) values('$anketsorusu','$anketaktif') ");
												if($anketsoru){
													uyari("Anket Sorusu Eklendi Sonraki Aşamada Cevaplarınızı Giriniz<br>");
												}else{
													hata("Anket Sorusu eklenemedi!!<br>");
												}
								
								echo ' <form class="stdform stdform2" method="post" action="">';
								
										for($x=1;$x<=$cevap;$x++){
											echo '<p>
											<label>Cevap '.$x.'</label>
											<span class="field"><input type="text" name="cevap'.$x.'"  class="input-xxlarge" />
											<input type="hidden" name="sayitasi"  class="input-xxlarge" value="'.$cevap.'"/>
											</span>
										</p>';

										}
								echo '                            <p class="stdformbutton">
                                <button class="btn btn-primary" name="iki">Ekle</button>
                                <button type="reset" class="btn">Temizle</button>
                            </p></form>';
								
								}
								if(isset($_POST["iki"])){
								$sayitasi	=$_POST["sayitasi"];
										for($i=1;$i<=$sayitasi;$i++){
											//ANKET İD Sİ ÇEKİYORUZ
											$ankesoruid	=mysql_fetch_array(mysql_query("select * from anketsoru order by id desc"));
											$aidd	=$ankesoruid["id"];
											$anketcevap	=$_POST["cevap".$i.""];
											$anketcevabi	=mysql_query("insert into anketcevap (cevaplar,ankid) values('$anketcevap','$aidd') ");
												if($anketcevabi){
													uyari("Anket Cevapları Eklendi!!<br>");
												}else{
													hata("Anket cevapları eklenemedi!!<br>");
												}
										}
								}
								
								?>
						
						
				
                    </div><!--widgetcontent-->
                <!--span4-->
                </div><!--row-fluid-->
            </div><!--contentinner-->
        </div><!--maincontent-->
        
    </div><!--mainright-->
    <!-- END OF RIGHT PANEL -->
    
    <div class="clearfix"></div>