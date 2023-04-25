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
                <li class="active">Seo ayarları</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Sitenizin anasayfa seo ayarlarını bu bölümden yapabilirsiniz.</span>
        </div><!--pagetitle-->
<?php
		$seoayar	=mysql_fetch_assoc(mysql_query("select * from seogenel"));
					$seodesc	=$seoayar["descr"];
					$seokeyw	=$seoayar["keyw"];
					$seohead	=$seoayar["head"];
					$seoanaly	=stripslashes($seoayar["analytics"]);

?>      
        <div class="maincontent">
        	<div class="contentinner content-dashboard">
<?php
				if($_POST){
					$desc	=$_POST["desc"];
					$keyw	=$_POST["keyw"];
					$head	=$_POST["header"];
					$analy	=addslashes($_POST["analy"]);
					
				
				$seokaydet	= mysql_query("update seogenel set descr='$desc',keyw='$keyw',
				head='$head',analytics='$analy' where id='1'");
				
						if($seokaydet){
							uyari("AYARLAR","Başarıyla kaydedildi!");

						}else{
							uyari("HATA!","Ayarlar kaydedilemedi!");

					    }
				}
?>				
                <div class="row-fluid">
<h4 class="widgettitle nomargin shadowed">Genel seo ayarı</h4>
                <div class="widgetcontent bordered shadowed nopadding">
                    <form class="stdform stdform2" method="post" action="">
                           
                            
                            <p>
                                <label>Meta Description <small>Site hakkında google aramalarında çıkması için açıklama giriniz.</small></label>
                                <span class="field"><textarea cols="80" rows="5" name="desc" class="span9"><?php echo $seodesc;?></textarea></span>
                            </p>
							
							 <p>
                                <label>Meta Keywords <small>Site hakkında google aramalarında çıkması için anahtar kelimeler giriniz.</small></label>
                                <span class="field"><textarea cols="80" rows="5" name="keyw" class="span9"><?php echo $seokeyw;?></textarea></span>
                            </p>
                            
							 <p>
                                <label>Header Kodu <small>Site hakkında google veya diğer arama motorları için ayar kodları tanıtma kodları için kullanılır.</small></label>
                                <span class="field"><textarea cols="80" rows="5" name="header" class="span9"><?php echo $seohead;?></textarea></span>
                            </p>
							
							 <p>
                                <label>Google Analytics <small>Google analiz kodunuzu oluşturup bu bölüme yapıştırınız.</small></label>
                                <span class="field"><textarea cols="80" rows="5" name="analy" class="span9"><?php echo $seoanaly;?></textarea></span>
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