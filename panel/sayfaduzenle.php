<?php
	if ($_SESSION["kullanici"]==""){
		git("index.php",3);
		die ('<meta charset="utf-8" />hop nereye? Dön başa bakalım :)');
		
	
	}
$ids=$_GET["id"];
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
                <li class="active">Sayfa düzenle</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Bu bölümde sitenize sayfa ekleyebilir, çıkartabilir, düzenleyebilirsiniz.</span>
        </div><!--uyarıyı burdan ver-->
<?php
		if($_POST){
		$ustsayfa		=$_POST["ustsayfa"];
		$sira			=$_POST["sira"];
		$sayfabas		=addslashes($_POST["sayfabas"]);
		$sayfaadres		=$_POST["sayfaadres"];
		$sayfabas		=$_POST["sayfabas"];
		$sayetiket		=addslashes($_POST["sayetiket"]);
		$sayacik		=addslashes($_POST["sayacik"]);
		$sayicerik		=addslashes($_POST["sayicerik"]);
		$ustmenugor		=$_POST["ustmenugoster"];
		$altmenugor		=$_POST["altmenugoster"];
		$anasayfagor	=$_POST["anasayfagoster"];
		$iletisimgor	=$_POST["iletisimgoster"];
		
			$kayitla	=mysql_query("update sayfalar set  sustid='$ustsayfa',sayfasira='$sira',sayfabaslik='$sayfabas',
			sayfaadres='$sayfaadres',sayfakey='$sayetiket',sayfadesc='$sayacik',sayfaicerik='$sayicerik',
			ustmenugor='$ustmenugor',altmenugor='$altmenugor',anasayfagor='$anasayfagor',iletisimgor='$iletisimgor' where sid='$ids'");
				if($kayitla){
					uyari("Sayfa başarıyla güncellendi!");
					git("ana.php?git=sayfaduzenle&id=$ids","3");
				}else{
					hata("Sayfa kayıt edilemedi!!!");
					git("ana.php?git=sayfaduzenle&id=$ids","3");
				}
		}
?>
   <div class="maincontent">
        	<div class="contentinner content-dashboard">
                <div class="row-fluid">
<h4 class="widgettitle nomargin shadowed">Statik sayfa ekleme menüsü</h4>
                <div class="widgetcontent bordered shadowed nopadding">
                    <form class="stdform stdform2" method="post" action="" enctype="multipart/form-data">                
                    <p>
                                <label>Üst Kategori Seç</label>
                                <span class="field"><select name="ustsayfa" id="selection2" class="uniformselect">
                                    <option value="0" checked>Hiçbiri</option>
							<?php
									$sayfa	= mysql_query("select * from sayfalar");
										while($cek=mysql_fetch_assoc($sayfa)){
											$sustid		=$cek["sustid"];
											$sayfabas	=$cek["sayfabaslik"];
									
							?>
                                    <option value="<?php echo $sustid;?>" <?php if($sustid==$ids){echo "selected";}?>>
									<?php
										if($sustid>0){
											echo "+".$sayfabas;
										}else{
											echo $sayfabas;
										}
									
									?></option>
									
							<?php
										}
										
								$ce	=mysql_fetch_assoc(mysql_query("select * from sayfalar where sid='$ids'"));
								$sira		=$ce["sayfasira"];
								$sbas		=$ce["sayfabaslik"];
								$sadres		=$ce["sayfaadres"];
								$setiket	=$ce["sayfakey"];
								$sacik		=$ce["sayfadesc"];
								$sicerik	=$ce["sayfaicerik"];
								$ust		=$ce["ustmenugor"];
								$alt		=$ce["altmenugor"];
								$ana		=$ce["anasayfagor"];
								$ilet		=$ce["iletisimgor"];
							?>	
                                </select></span>
                            </p>
                            <p>
                                <label>Sıra numarası</label>
                             <span class="field"><input type="text" name="sira" id="email2" class="input-xxlarge" value="<?php echo $sira;?>"/></span>
                            </p>
							  <p>
                                <label>Sayfa başlık</label>
                             <span class="field"><input type="text" name="sayfabas" id="email2" class="input-xxlarge" value="<?php echo $sbas;?>"/></span>
                            </p>
								  <p>
                                <label>Sayfa adresi</label>
                             <span class="field"><input type="text" name="sayfaadres" id="email2" class="input-xxlarge" value="<?php echo $sadres;?>" /></span>
                            </p>
			<p>
                        	<label>Sayfa Etiketleri<small>sayfa ait anahtar kelimeleri giriniz.</label>
                            <span class="field">
                            	<textarea cols="80" rows="5" name="sayetiket" class="span9"><?php echo $setiket;?></textarea>
                            </span>
                        </p>
							<p>
                        	<label>Sayfa Açıklama<small>sayfaya ait açıklama giriniz.</label>
                            <span class="field">
                            	<textarea cols="80" rows="5" name="sayacik" class="span9"><?php echo $sacik;?></textarea>
                            </span>
                        </p>
						<p>
							 <label>Sayfa İçeriği <small>Sayfa içeriğini buraya ekleyiniz.<br>Eğer metinde oynama yada HTML eklemek isterseniz,editörü kullanınız.</small></label>
                            <span class="field"></span> <textarea id="elm1" name="sayicerik" rows="15" cols="80" style="width: 80%" class="tinymce">
                       <?php echo $sicerik;?>
                            </textarea>
                        </p>
		                   	<p>
                        	<label>Ek Özellikler</label>
                            <span class="formwrapper">
                            	<input type="checkbox" name="ustmenugoster" value="<?php if($ust=="0"){echo "1";}else{echo $ust;} ?>" <?php if($ust=="1"){echo "checked";}?> /> Üstmenüde göster<br />
                            	<input type="checkbox" name="altmenugoster" value="<?php if($alt=="0"){echo "1";}else{echo $alt;} ?>" <?php if($alt=="1"){echo "checked";}?> /> Alt menü göster <br />
								<input type="checkbox" name="anasayfagoster" value="<?php if($ana=="0"){echo "1";}else{echo $ana;} ?>" <?php if($ana=="1"){echo "checked";}?> />Anasayfada göster <br />
								<input type="checkbox" name="iletisimgoster" value="<?php if($ilet=="0"){echo "1";}else{echo $ilet;} ?>" <?php if($ilet=="1"){echo "checked";}?> />İletişimde göster <br />
		
                               
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