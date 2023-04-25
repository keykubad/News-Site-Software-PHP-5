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
                <li class="active">Reklam duzenle</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Bu bölümde sitenize reklam ekleyebilir,düzenleyebilir yada silebilirsiniz.</span>
        </div><!--uyarıyı burdan ver-->
<?php
		if($_POST){
		$aktif			=$_POST["rdurum"];
		$reklamyer		=$_POST["reklamyer"];
		$reklamsira		=$_POST["reklamsira"];
		$reklamicerik	=$_POST["reklamicerik"];
		$ilantarih	=date("d-m-Y H:i:s");
		
			$kayitla	=mysql_query("insert into reklamlar (reklamdurum,reklamyeri,reklamsira,reklamicerik) 
			values ('$aktif','$reklamyer','$reklamsira','$reklamicerik') ");
				if($kayitla){
					uyari("Reklam başarıyla kayıt edildi!");
					git("ana.php?git=reklamlar","3");
				}else{
					hata("Reklam kayıt edilemedi!!!");
					git("ana.php?git=reklamlar","3");
				}
		}
?>
   <div class="maincontent">
        	<div class="contentinner content-dashboard">
                <div class="row-fluid">
<h4 class="widgettitle nomargin shadowed">Reklam düzenleme menüsü</h4>
                <div class="widgetcontent bordered shadowed nopadding">
                    <form class="stdform stdform2" method="post" action="" enctype="multipart/form-data">
				<?php
						$mcek		=mysql_fetch_assoc(mysql_query("select * from reklamlar where rid='$idsi'"));
						$durum			=$mcek["reklamdurum"];
						$reklamyer		=$mcek["reklamyeri"];
						$reklamsira		=$mcek["reklamsira"];
						$reklamicerik	=$mcek["reklamicerik"];
						
						
					?>					
                    <p>
                                <label>Reklam Aktifmi ?</label>
                                <span class="field"><select name="rdurum" id="selection2" class="uniformselect">
									<option value="1" <?php if($durum==1){ echo "selected";} ?>>Aktif</option>
									<option value="0" <?php if($durum==0){ echo "selected";} ?>>Pasif</option>

                                </select></span>
                            </p>
							    <p>
                                <label>Reklam Yeri </label>
                                <span class="field"><select name="reklamyer" id="selection2" class="uniformselect">
                                    <option value="1" <?php if($reklamyer==1){ echo "selected";} ?>>Üst kısım reklamları</option>
									<option value="2" <?php if($reklamyer==2){ echo "selected";} ?>>Manşet altı reklam</option>
									<option value="3" <?php if($reklamyer==3){ echo "selected";} ?>>Son Haberler Altı</option>
									<option value="4" <?php if($reklamyer==4){ echo "selected";} ?>>Galeri reklam</option>

                                </select></span>
                            </p>
                            <p>
                                <label>Reklam Sırası</label>
                             <span class="field"><input type="text" name="reklamsira" id="email2" class="input-xxlarge" value="<?php echo $reklamsira;?>" /></span>
                            </p>
							   
						<p>
							 <label>Reklam İçeriği <small>Reklam içeriğini buraya ekleyiniz.<br>Eğer metinde oynama yada HTML eklemek isterseniz,editörü kullanınız.</small></label>
                            <span class="field"> <textarea id="elm1" name="reklamicerik" rows="15" cols="80" style="width: 80%" class="tinymce">
						<?php echo $reklamicerik;?>
                            </textarea></span>
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