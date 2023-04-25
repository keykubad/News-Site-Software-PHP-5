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
                <li class="active">Galeri resim ekle</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Sitenizin galeri kategorilerine bu alandan resim ekleyebilirsiniz.</span>
        </div><!--pagetitle-->
				<?php
			if(isset($_POST["iki"])){
								
							
						$dosya_sayi=count($_FILES['galeriresim']['name']); 
						for($sa=0;$sa<$dosya_sayi;$sa++){
							$galerikat	=$_POST["galerikat"];	
							$galacik	=addslashes($_POST["galacik"][$sa]);
							
					$dosyasi=$_FILES['galeriresim']['tmp_name'][$sa];		
					$resimadioyna	=rand(0,100000000);
					$resimyuklenme	=$resimadioyna."_".$_FILES['galeriresim']['name'][$sa];
					$resimboyut		=$_FILES['galeriresim']['size'][$sa];
					$resimtipi		=$_FILES['galeriresim']['type'][$sa];
						$yuklenenresim	 = "../yuklenenler/galeri/" .$resimyuklenme;
						copy($dosyasi,$yuklenenresim);
					//resim kontrol
					if($resimboyut>1000000 || strpos($resimtipi,"php")){
						uyari("HATA!!","Yüklediğiniz resim 1MB dan büyük yada resim değil!");
						exit();
					}else{
					
					
								$galerikayit	=mysql_query("insert into galeriresim (galustid,galerifoto,galeriaciklama) 
								values ('$galerikat','$yuklenenresim','$galacik')");
									if($galerikayit){
										uyari("Galeri resimleri başarıyla eklendi");
										git("ana.php?git=galeriresim",2);
									}else{
										hata("Galeri resimleri eklenemedi!!");
										git("ana.php?git=galeriresim",2);
									
									}
					}
							}
						
					}	
			?>	
        <div class="maincontent">
        	<div class="contentinner content-dashboard">

                <div class="row-fluid">
<h4 class="widgettitle nomargin shadowed">Galeri Resim Ekleme Menüsü</h4>
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
                                <label>Anket Aktifmi ?</label>
                                <span class="field"><select name="galerikat" id="selection2" class="uniformselect">
							
							';
									$galeriler	=mysql_query("select * from galeri");
										while($x=mysql_fetch_assoc($galeriler)){
										$galeriad	=$x["galeriad"];
										$gidd		=$x["gid"];
							?>
								<option value="<?php echo $gidd;?>" selected><?php echo $galeriad;?></option>
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
                            <label>Galeri Ana Resimi ['.$x.']<small>1MBdan büyük resim yüklenemez.<br>Açıklama girilmeyecekse boş bırakınız</small></label>
							
                            <span class="field">
                            	<input type="file" class="uniform-file" name="galeriresim[]" /><br><br>
							
								 <textarea cols="80" rows="5" name="galacik[]" class="span9"></textarea>
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