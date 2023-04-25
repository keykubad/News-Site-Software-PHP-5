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
                <li class="active">İlan ekle</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Bu bölümde sitenize ilan ekleyebilir,düzenleyebilir yada silebilirsiniz.</span>
        </div><!--uyarıyı burdan ver-->
<?php
		if($_POST){
		$aktif		=$_POST["ilandurum"];
		$baslik		=addslashes($_POST["ilanbaslik"]);
		$ilanno		=$_POST["ilanno"];
		$ilanicerik	=addslashes($_POST["ilanicerik"]);
		$ilantarih	=date("d-m-Y H:i:s");
		
			$kayitla	=mysql_query("insert into ilanlar (ilanbaslik,ilantarih,ilanno,ilanicerik,ilandurum) 
			values ('$baslik','$ilantarih','$ilanno','$ilanicerik','$aktif') ");
				if($kayitla){
					uyari("İlan başarıyla kayıt edildi!");
					git("ana.php?git=ilan","3");
				}else{
					hata("İlan kayıt edilemedi!!!");
					git("ana.php?git=ilanlar","3");
				}
		}
?>
   <div class="maincontent">
        	<div class="contentinner content-dashboard">
                <div class="row-fluid">
<h4 class="widgettitle nomargin shadowed">İlan ekleme menüsü</h4>
                <div class="widgetcontent bordered shadowed nopadding">
                    <form class="stdform stdform2" method="post" action="" enctype="multipart/form-data">                
                    <p>
                                <label>İlan Aktifmi ?</label>
                                <span class="field"><select name="ilandurum" id="selection2" class="uniformselect">
                                    <option value="1" checked>Aktif</option>
									<option value="0">Pasif</option>

                                </select></span>
                            </p>
                            <p>
                                <label>İlan başlık</label>
                             <span class="field"><input type="text" name="ilanbaslik" id="email2" class="input-xxlarge" /></span>
                            </p>
							  <p>
                                <label>İlan no</label>
                             <span class="field"><input type="text" name="ilanno" id="email2" class="input-xxlarge" /></span>
                            </p>
						<p>
							 <label>İlan İçeriği <small>ilan içeriğini buraya ekleyiniz.<br>Eğer metinde oynama yada HTML eklemek isterseniz,editörü kullanınız.</small></label>
                            <span class="field"> <textarea id="elm1" name="ilanicerik" rows="15" cols="80" style="width: 80%" class="tinymce">
                       
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