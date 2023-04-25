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
                <li class="active">Haber düzenle</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Sitenizin haberlerini bu bölümden düzenleyebilirsiniz.</span>

        </div><!--uyarıyı burdan ver-->
<?php
			$onay	=$_POST["onay"];
			$onaysiz=$_POST["onaysiz"];
			$sil	=$_POST["sil"];
			$toplu	=$_POST["toplu"];
			if(isset($_POST["sil"])){
		
					foreach ($toplu as $toplusec){
					
						$silme	=mysql_query("DELETE FROM haberler where hid='$toplusec'");
			
						
					}
						if($silme){
							uyari("Tüm seçilen haberler başarıyla silindi");
							git("ana.php?git=haberduzen","3");
						}else{
							hata("Seçilen haberler silinemedi!");
							git("ana.php?git=haberduzen","3");
						}
			}
			if(isset($_POST["onay"])){
		
					foreach ($toplu as $toplusec){
					
						$onaylan	=mysql_query("update haberler set aktif='1' where hid='$toplusec'");
			
						
					}
						if($onaylan){
							uyari("Tüm seçilen içerikler onaylandı");
							git("ana.php?git=haberduzen","3");
						}else{
							hata("Seçilen içerikler onaylanamadı!");
							git("ana.php?git=haberduzen","3");
						}
			}
			if(isset($_POST["onaysiz"])){
		
					foreach ($toplu as $toplusec){
					
						$onaylan	=mysql_query("update haberler set aktif='0' where hid='$toplusec'");
			
						
					}
						if($onaylan){
							uyari("Tüm seçilen içerikler pasif edildi");
							git("ana.php?git=haberduzen","3");
						}else{
							hata("Seçilen içerikler pasif yapılamadı!");
							git("ana.php?git=haberduzen","3");
						}
			}
?>


 	<form method="post">
	             		<div style="padding-right:15px;padding-top:15px;">

 <button name="sil" class="btn btn-info" style="float:right;margin-left:5px;" title="Toplu Sil">
    <i class="iconsweets-trashcan iconsweets-white" ></i>
</button>&nbsp;
 <button name="onay" class="btn btn-info" href="" style="float:right;margin-left:5px;" title="Toplu Onayla">
    <i class="iconsweets-refresh4 iconsweets-white" title="Onayla"></i>
</button>
 <button name="onaysiz" class="btn btn-info" href="" style="float:right;" title="Toplu Onay Kaldır">
    <i class="iconsweets-denied iconsweets-white"></i>
</button>

</div>
        <div class="maincontent">
        	<div class="contentinner">

            	<h4 class="widgettitle">Haber Düzenle</h4>
				
            	<table class="table table-bordered" id="dyntable">
                    <colgroup>
					<col class="con0" style="align: center; width: 4%" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
						<col class="con0" />
                    </colgroup>
					
                    <thead>
                        <tr>
						<th class="head0 nosort"><input type="checkbox" class="checkall" /></th>
                          	<th class="head0">Haber Resmi</th>
                            <th class="head1">Haber Tarihi</th>
                            <th class="head0">Haber Başlığı</th>
                            <th class="head1">Haber Kategorisi</th>
                            <th class="head0">Yorum Sayısı</th>
                            <th class="head1">Okunma Sayısı</th>
							<th class="head0">Düzenleme</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
							$haberlistele	=mysql_query("select * from haberler order by hid desc");
								while($haberal=mysql_fetch_assoc($haberlistele)){
									$haberbaslik	=$haberal["hbaslik"];
									$tarihsaat		=$haberal["tarihsaat"];
									$habermresim	=$haberal["hmanset"];
									$haberyorum		=$haberal["yorumsayisi"];
									$haberokunma	=$haberal["okunmasayisi"];
									$hid			=$haberal["haberkategori"];
									$id				=$haberal["hid"];
						?>
                        <tr class="gradeX">
						    <td class="aligncenter"><span class="center">
					
                            <input type="checkbox" name="toplu[]" value="<?php echo $id;?>"/>
						
                          </span></td>
                        <td width="160"><center><img src="<?php echo "../".$habermresim;?>" width="150" height="120"></center></td>
                            <td width="75"><center><?php echo $tarihsaat;?></center></td>
                            <td width="350"><?php echo $haberbaslik;?></td>
							 <td width="150"><center><?php 
									$haberkategorisi=mysql_query("select * from haberkategori where id='$hid'");
										while($hal=mysql_fetch_assoc($haberkategorisi)){
												$haberkategoriadi=$hal["haberkatad"];
													echo $haberkategoriadi;
										}
							 
							 ?></center></td>
                            <td class="center" width="50">
							<?php 
							echo $haberyorum;
							
							?>
							
							</td>
                            <td class="center" width="50">
							<?php 
							
								echo $haberokunma;
						
							
							?></td>
							<td>   <a href="ana.php?git=haberduzenle&id=<?php echo $id;?>" title="DUZENLE"><img class="icon-edit"></a>   <a href="ana.php?git=habersil&id=<?php echo $id;?>" title="SİL"><img class="icon-remove" style="margin-left:20px;"></a></td>
                        </tr>
						<?php } ?>
        
            
 
                      
                       
                    </tbody>
                </table>
      </form>
                <div class="divider15"></div>
                 
            
            </div><!--contentinner-->
        </div><!--maincontent-->
        
</div>
    <!-- END OF RIGHT PANEL -->
    

        

    <!-- END OF RIGHT PANEL -->
    
    <div class="clearfix"></div>