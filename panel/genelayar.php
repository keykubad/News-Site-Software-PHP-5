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
                <li class="active">Genel ayarlar</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Sitenizin genel ayarlarını bu bölümden yapabilirsiniz.</span>
        </div><!--pagetitle-->
        
        <div class="maincontent">
        	<div class="contentinner content-dashboard">
			<?php
			##################Sİte ayarlarını çekiyoruz###############################
				$cekayar		=	mysql_query("select * from yonetici");
						while($al	=	mysql_fetch_assoc($cekayar)){
								$sitebaslik	= $al["siteadi"];
								$siteadres	= $al["siteadres"];
								$sitetema	= $al["sitetema"];
								$sitemail	= $al["email"];
								$adminadi	= $al["adminad"];
								$adminsifre	= $al["adminsifre"];
								
						}
					
								
								
			?>
            
      <?php

	if($_POST){
								$sitebaslikf	= $_POST["baslik"];
								$siteadresf 	= $_POST["siteadres"];
								$sitetemaf  	= $_POST["sitetema"];
								$sitemailf	    = $_POST["email"];
								$adminadif		= $_POST["adminadi"];
								$adminsifref	= md5($_POST["adminsifre"]);
								$adminresimf	= $_POST["email"];
								$temaf			= $_POST["tema"];
								$resimf			= $_FILES["logo"]["tmp_name"];
								$resimadioyna	=rand(0,1000);
								$resimyuklenme	=$resimadioyna."_".$_FILES['logo']['name'];
								$yuklenenresim	 = "../yuklenenler/resimler/" .$resimyuklenme;
										copy($resimf,$yuklenenresim);
										if ($yuklenenresim){
												$yuklenenresim=str_replace("../","",$yuklenenresim);
										}
									if($resimf==""){
												$kaydet	= mysql_query("update yonetici set siteadi='$sitebaslikf',
										siteadres='$siteadresf',sitetema='$sitetemaf',email='$sitemailf',
										adminad='$adminadif',adminsifre='$adminsifref',sitetema='$temaf'
										where id='1'");
											if($kaydet){
												uyari("AYARLAR","Başarıyla kaydedildi.!");
											}else{
												uyari("HATA!!!","İşlem kaydedilemedi.!");
											}
									}else{
												$kaydet	= mysql_query("update yonetici set siteadi='$sitebaslikf',
										siteadres='$siteadresf',sitetema='$sitetemaf',email='$sitemailf',
										adminad='$adminadif',adminsifre='$adminsifref',resim='$yuklenenresim',sitetema='$temaf'
										where id='1'");
										
									
										if($kaydet){
												uyari("AYARLAR","Başarıyla kaydedildi.!");
										}else{
												uyari("HATA!!!","İşlem kaydedilemedi.!");
										}
										
										}								
	}
?>                      
        
               
                    
                        
                      <h4 class="widgettitle nomargin shadowed">Genel Ayarlar</h4>
                <div class="widgetcontent bordered shadowed nopadding">
                    <form class="stdform stdform2" method="post" action="" enctype="multipart/form-data">
                            <p>
                                <label>Site Başlık</label>
                                <span class="field"><input type="text" name="baslik" class="input-xxlarge" value="<?php echo $sitebaslik;?>"/></span>
                            </p>
                            
                            <p>
                                <label>Site Adres</label>
                                <span class="field"><input type="text" name="siteadres"  class="input-xxlarge" value="<?php echo $siteadres;?>" /></span>
                            </p>
                            
                            <p>
                                <label>Yönetici Email</label>
                                <span class="field"><input type="text" name="email" class="input-xxlarge" value="<?php echo $sitemail;?>" /></span>
                            </p>
							 <p>
                                <label>Yönetici Kullanıcı Adı</label>
                                <span class="field"><input type="text" name="adminadi" class="input-xxlarge" value="<?php echo $adminadi;?>" /></span>
                            </p>
							 <p>
                                <label>Yönetici Şifre</label>
                                <span class="field"><input type="password" name="adminsifre"  class="input-xxlarge"  /></span>
                            </p>
                            
              
                            <p>
                                <label>Site Tema</label>
                                <span class="field"><select name="tema" id="selection2" class="uniformselect">
                                   <?php klasor_listele("../tema");?>
                          
                                </select></span>
                            </p>
							<p>
                            <label>Site Logosu</label>
                            <span class="field">
                            	<input type="file" class="uniform-file" name="logo" />
                            </span>
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