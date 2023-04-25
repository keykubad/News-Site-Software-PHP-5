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
                <li class="active">Gazete resim ekle</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Sitenizin gazete kategorilerine bu alandan resim ekleyebilirsiniz.</span>
        </div><!--pagetitle-->
				<?php
			if(isset($_POST["iki"])){
								
							
						$dosya_sayi=count($_FILES['gazresim']['name']); 
						for($sa=0;$sa<$dosya_sayi;$sa++){
							$gazkat	=$_POST["gazkat"];	
							
							
					$dosyasi=$_FILES['gazresim']['tmp_name'][$sa];		
					$resimadioyna	=rand(0,100000000);
					$resimyuklenme	=$resimadioyna."_".$_FILES['gazresim']['name'][$sa];
					$resimboyut		=$_FILES['gazresim']['size'][$sa];
					$resimtipi		=$_FILES['gazresim']['type'][$sa];
						$yuklenenresim	 = "../yuklenenler/gazete/" .$resimyuklenme;
						copy($dosyasi,$yuklenenresim);
					//resim kontrol
					if($resimboyut>1000000 || strpos($resimtipi,"php")){
						uyari("HATA!!","Yüklediğiniz resim 1MB dan büyük yada resim değil!");
						exit();
					}else{
					
					
								$galerikayit	=mysql_query("insert into gazete (gazeteresim,gazeteust) 
								values ('$yuklenenresim','$gazkat')");
									if($galerikayit){
										uyari("Gazete resimleri başarıyla eklendi");
										git("ana.php?git=gazetesayi",2);
									}else{
										hata("Gazete resimleri eklenemedi!!");
										git("ana.php?git=gazetesayi",2);
									
									}
					}
							}
						
					}	
			?>	
        <div class="maincontent">
        	<div class="contentinner content-dashboard">

                <div class="row-fluid">
<h4 class="widgettitle nomargin shadowed">Gazete İçerikleri Ekleme Menüsü</h4>
                <div class="widgetcontent bordered shadowed nopadding">

				<?php
					if(empty($_POST)){
				
				?>
                    <form class="stdform stdform2" method="post" action="">
			
							<p>
                                <label>Kaç Adet Resim Yüklenecek ?<small>Kaç adet resim yüklemesi yapacağınızı yazıp bir sonraki aşamaya geçin</label>
                                <span class="field"><input type="text" name="sayi"  class="input-xxlarge" /></span>
                            </p>
                                                    
                            <p class="stdformbutton">
                                <button class="btn btn-primary" name="ilk">Aşama 2</button>
                                <button type="reset" class="btn">Temizle</button>
                            </p>
                        </form>
					<?php
					
					}
					?>
							<?php

								if(isset($_POST["ilk"])){
						                            echo'<form class="stdform stdform2" method="post" enctype="multipart/form-data">    
													<p>
                                <label>Gazete Tarihi Seçin</label>
                                <span class="field"><select name="gazkat" id="selection2" class="uniformselect">
							
							';
									$gazete	=mysql_query("select * from gazetetarih");
										while($x=mysql_fetch_assoc($gazete)){
										$gaztar		=$x["gtarih"];
										$gidd		=$x["gazid"];
							?>
								<option value="<?php echo $gidd;?>" selected><?php echo $gaztar;?></option>
							<?php
										}
							?>
								
								  </select>
								  </span>
								  
								</p>
						<?php
						
								$sayi		=$_POST["sayi"];
								
								
										for($x=1;$x<=$sayi;$x++){
											echo '		<p>
                            <label>Gazete sayfaları ['.$x.']<small>1MBdan büyük resim yüklenemez.</small></label>
							
                            <span class="field">
                            	<input type="file" class="uniform-file" name="gazresim[]" /><br><br>
							
						
                            </span>
								</p> ';

										}
								echo '                            <p class="stdformbutton">
                                <button class="btn btn-primary" name="iki">Yükle</button>
                                <button type="reset" class="btn">Temizle</button>
                            </p></form>';
							
								
								
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