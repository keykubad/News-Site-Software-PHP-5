<?php


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
                <li><a href="ana.php">Home</a> <span class="divider">/</span></li>
                <li class="active">Google Analiz ve Site Ziyaret Grafiği</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Sitenizin ziyaretçi akışını aylık olarak görmek için bu bölümden ayar yapabilirsiniz.</span>
        </div><!--pagetitle-->
        
        <div class="maincontent">
        	<div class="contentinner content-dashboard">
			<?php
			##################Sİte ayarlarını çekiyoruz###############################
				$cekayar		=	mysql_query("select * from analiz where anid='1'");
						while($al	=	mysql_fetch_assoc($cekayar)){
								$kadim	=$al["analizadi"];
								$ansifre=$al["analizsifre"];
								$anprof	=$al["analizprof"];
								$ankod	=$al["analizkod"];
								$anstil	=$al["analizstil"];
						}
					
								
								
			?>
            
      <?php

	if($_POST){
			$gkadi		=$_POST["gkadi"];	
			$gsifre		=$_POST["gsifre"];
			$gprof		=$_POST["gprof"];
			$kod		=$_POST["kod"];
			$stil		=$_POST["stil"];
				$guncellet	=mysql_query("update analiz set analizadi='$gkadi',analizsifre='$gsifre',analizprof='$gprof',
				analizkod='$kod',analizstil='$stil' where anid='1'");
					if($guncellet){
						uyari("Analiz profil değerleri başarıyla kaydedildi!");
						git("ana.php?git=analiz","3");
					
					}else{
						hata("Analiz profil değerleri kaydedilemedi!!!");
						git("ana.php?git=analiz","3");
					}
	}
?>                      
        
               
                    
                        
                      <h4 class="widgettitle nomargin shadowed">Google Analytics  Bilgiler</h4>
                <div class="widgetcontent bordered shadowed nopadding">
                    <form class="stdform stdform2" method="post" action="" enctype="multipart/form-data">
                            <p>
                                <label>Kullanıcı Adı</label>
                                <span class="field"><input type="text" name="gkadi" class="input-xxlarge" value="<?php echo $kadim;?>"/></span>
                            </p>
                            
                            <p>
                                <label>Şifre</label>
                                <span class="field"><input type="password" name="gsifre"  class="input-xxlarge" value="<?php echo $ansifre;?>" /></span>
                            </p>
                             <p>
                                <label>Profil ID</label>
                                <span class="field"><input type="text" name="gprof" class="input-xxlarge" value="<?php echo $anprof;?>" /></span>
                            </p>
                            <p>
                                <label>Analiz Kodu</label>
                                <span class="field"><textarea cols="80" rows="5" name="kod" class="span7"><?php echo $ankod;?></textarea></span>
                            </p>
							 <p>
                                <label>Stil Seç<small>line veya area ziyaret istatistiklerinin görünümü değiştirmek için burayı kullanın</label>
                                <span class="field"><select name="stil" id="selection2" class="uniformselect">
                               <option value="line" <?php if ($anstil=="line"){echo "selected";}?>>Line</option>
							   <option value="area" <?php if ($anstil=="area"){echo "selected";}?>>Area</option>
                                </select></span>
                            </p> </span>
                            </p>
					
	
					
                                                    
                            <p class="stdformbutton">
                                <button class="btn btn-primary">Kaydet</button>
                                <button type="reset" class="btn">Temizle</button>
                            </p>
                        </form>
                    </div><!--widgetcontent-->
            <!--contentinner-->
       <!--maincontent-->
                        
       
                        
                    
                        
                        
                    </div><!--span8-->
               
                </div><!--row-fluid-->
      
        
    </div><!--mainright-->
    <!-- END OF RIGHT PANEL -->
    
    <div class="clearfix"></div>