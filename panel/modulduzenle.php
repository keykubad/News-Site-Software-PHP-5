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
                <li class="active">Modül düzenle</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Bu bölümde sitenize modül ekleyebilir,düzenleyebilir yada silebilirsiniz.</span>
        </div><!--uyarıyı burdan ver-->
<?php
		if($_POST){
		$aktif			=$_POST["mdurum"];
		$modulyer		=$_POST["modulyer"];
		$modulsira		=$_POST["modulsira"];
		$modulisim		=$_POST["modulisim"];
		$modulicerik	=addslashes($_POST["modulicerik"]);
		
			$kayitla	=mysql_query("update modul set durum='$aktif',modulyeri='$modulyer',msira='$modulsira',micerik='$modulicerik',misim='$modulisim' where mid='$idsi' ");
				if($kayitla){
					uyari("Modül başarıyla güncellendi!");
					git("ana.php?git=modulduzen","3");
				}else{
					hata("Modül güncellenemedi!!!");
					git("ana.php?git=modulduzen","3");
				}
		}
?>
   <div class="maincontent">
        	<div class="contentinner content-dashboard">
                <div class="row-fluid">
<h4 class="widgettitle nomargin shadowed">Modül düzenleme menüsü</h4>
                <div class="widgetcontent bordered shadowed nopadding">
                    <form class="stdform stdform2" method="post" action="" enctype="multipart/form-data">
					<?php
						$mcek		=mysql_fetch_assoc(mysql_query("select * from modul where mid='$idsi'"));
						$durum		=$mcek["durum"];
						$misim		=$mcek["misim"];
						$msira		=$mcek["msira"];
						$micerik	=$mcek["micerik"];
						$modulyer	=$mcek["modulyeri"];
						
					?>
                    <p>
                                <label>Modül Aktifmi ?</label>
                                <span class="field"><select name="mdurum" id="selection2" class="uniformselect">
                                    <option value="1" <?php if($durum==1){ echo "selected";} ?>>Aktif</option>
									<option value="0" <?php if($durum==0){ echo "selected";} ?>>Pasif</option>

                                </select></span>
                            </p>
							    <p>
                                <label>Modül Yeri <?php echo $modulyer;?></label>
                                <span class="field"><select name="modulyer" id="selection2" class="uniformselect">
                                    <option value="1" <?php if($modulyer==1){ echo "selected";} ?>>Sağ Blok</option>
									<option value="2" <?php if($modulyer==2){ echo "selected";} ?>>Manşet Altı</option>
									<option value="3" <?php if($modulyer==3){ echo "selected";} ?>>Üst Ara Kısım</option>
									<option value="4" <?php if($modulyer==4){ echo "selected";} ?>>Haber Okuma</option>

                                </select></span>
                            </p>
                            <p>
                                <label>Modül Sırası</label>
                             <span class="field"><input type="text" name="modulsira" id="email2" class="input-xxlarge" value="<?php echo $msira;?>"/></span>
                            </p>
							   <p>
                                <label>Modül İsim</label>
                             <span class="field"><input type="text" name="modulisim" id="email2" class="input-xxlarge" value="<?php echo $misim;?>" /></span>
                            </p>
						<p>
							 <label>Modül İçeriği <small>Modül içeriğini buraya ekleyiniz.<br>Eğer metinde oynama yada HTML eklemek isterseniz,editörü kullanınız.</small></label>
                            <span class="field"> <textarea id="elm1" name="modulicerik" rows="15" cols="80" style="width: 80%" class="tinymce">
							<?php echo $micerik;?>
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