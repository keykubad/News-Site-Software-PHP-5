<?php
	if ($_SESSION["kullanici"]==""){
		git("index.php",3);
		die ('<meta charset="utf-8" />hop nereye? Dön başa bakalım :)');
		
	
	}
$aid		=$_GET["id"];
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
                <li class="active">Anket Düzenle</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Sitenizin anketlerini buradan ekleyip düzenleyebilirsiniz.</span>
        </div><!--pagetitle-->

        <div class="maincontent">
        	<div class="contentinner content-dashboard">
			<?php 
			if($_POST){
		
			$cevabi	=$_POST["cevap"];
			$sorusu	=$_POST["anketsorusu"];
			$cekid	=mysql_query("select * from anketcevap where ankid=$aid");
						while($s=mysql_fetch_assoc($cekid)){
						$anid=$s["id"];
						}

						
		$tempQuery = mysql_query("select id from anketcevap where ankid=$aid order by id asc");
					while($tmp = mysql_fetch_array($tempQuery))
					{
						$ids[]=$tmp["id"];
					}
						for($x=0;$x<count($cevabi);$x++){		
							
							$updateCommand = "update anketcevap set cevaplar='$cevabi[$x]' where id = $ids[$x]";
							mysql_query($updateCommand);
						}
				
				
						if($guncelle){
							uyari("Anket başarıyla güncellendi");
					
						}else{
							uyari("Anket güncellenmedi!!!");
						
						}

						
				
			$aktif	=$_POST["anketaktif"];
			
					$kayitcevap	=mysql_query("update anketsoru set baslik='$sorusu',durum='$aktif' where id='$aid'");
						if($kayitcevap){
							uyari("Anket başarıyla güncellendi");
							
						}else{
							uyari("Anket güncellenmedi!!!");
							
						}
			}
			?>
                <div class="row-fluid">
<h4 class="widgettitle nomargin shadowed">Anket Düzenleme Menüsü</h4>
                <div class="widgetcontent bordered shadowed nopadding">
                    <form class="stdform stdform2" method="post" action="">
                           <?php
								$anketci	=mysql_fetch_assoc(mysql_query("select * from anketsoru where id='$aid'"));
								$anketid	=$anketci["id"];
								$anketbaslik=$anketci["baslik"];
						   ?>
                            
                            <p>
                                <label>Anket Sorusu<small>Ankete ait soru</small></label>
                                <span class="field"><textarea cols="80" rows="5" name="anketsorusu" class="span9"><?php echo $anketbaslik;?></textarea></span>
                            </p>
							<?php 
								$anketcevap	=mysql_query("select * from anketcevap where ankid='$anketid'");
								$say	=mysql_num_rows($anketcevap);
								$i		=1;
									while($al=mysql_fetch_assoc($anketcevap)){
									$cevaplar	=$al["cevaplar"];
										
							?>
							    <p>
                                <label>Cevaplar <?php echo $i;?></label>
                                <span class="field"><input type="text" name="cevap[]"  class="input-xxlarge" value="<?php echo $cevaplar; ?>" /></span>
                            </p>
									<?php 
									 $i++;
									}
									?>
								<p>
                                <p>
                                <label>Anket Aktifmi ?</label>
                                <span class="field"><select name="anketaktif" id="selection2" class="uniformselect">
								<option value="1" selected>Evet</option>
								<option value="2">Hayır</option>
								  </select></span>
								</p>
							
                                                    
                            <p class="stdformbutton">
                                <button class="btn btn-primary" name="ilk">Güncelle</button>
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