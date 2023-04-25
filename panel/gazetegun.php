<?php
	if ($_SESSION["kullanici"]==""){
		git("index.php",3);
		die ('<meta charset="utf-8" />hop nereye? Dön başa bakalım :)');
		
	
	}

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js" type="text/javascript"></script>

    <script>
       $(function() {
          $( "#kutu" ).datepicker();
       });
    </script>

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
                <li class="active">Galeri ekle</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Sitenize ait gazete sayılarını bu bölümden oluşturabilirsiniz.</span>
        </div><!--uyarıyı burdan ver-->
<?php
			if($_POST){
				$gazetetarih	=$_POST["gazetetarih"];
				
				$gazekle	=mysql_query("insert into gazetetarih (gtarih) values ('$gazetetarih')");
					if($gazekle){
						uyari("Gazete Tarihi başarıyla eklendi");
						git("ana.php?git=gazete",3);
					}else{
						hata("Gazete Tarihi eklenemedi!");
						git("ana.php?git=gazete",3);
					}
										
					}
			
?>
   <div class="maincontent">
        	<div class="contentinner content-dashboard">
                <div class="row-fluid">
<h4 class="widgettitle nomargin shadowed">Gazete sayısı ekleme menüsü</h4>
                <div class="widgetcontent bordered shadowed nopadding">
                    <form class="stdform stdform2" method="post" action="" enctype="multipart/form-data">                   
							   <p>
                                <label>Gazete Tarih</label>
                                <span class="field"><input type="text" name="gazetetarih" id="kutu" class="input-xxlarge" /></span>
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