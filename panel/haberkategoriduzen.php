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
                <li class="active">Haber kategorisi Düzenle</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Sitenizin haberlere ait kategorilerini bu bölümden düzenleyebilirsiniz.</span>
        </div><!--uyarıyı burdan ver-->
<?php
			$onay	=$_POST["onay"];
			$onaysiz=$_POST["onaysiz"];
			$sil	=$_POST["sil"];
			$toplu	=$_POST["toplu"];
			if(isset($_POST["sil"])){
		
					foreach ($toplu as $toplusec){
					
						$silme	=mysql_query("DELETE FROM haberkategori where id='$toplusec'");
			
						
					}
						if($silme){
							uyari("Tüm seçilen haberler başarıyla silindi");
							git("ana.php?git=haberkategoriduzen","3");
						}else{
							hata("Seçilen haberler silinemedi!");
							git("ana.php?git=haberkategoriduzen","3");
						}
			}
			if(isset($_POST["onay"])){
		
					foreach ($toplu as $toplusec){
					
						$onaylan	=mysql_query("update haberkategori set kataktif='1' where id='$toplusec'");
			
						
					}
						if($onaylan){
							uyari("Tüm seçilen içerikler onaylandı");
							git("ana.php?git=haberkategoriduzen","3");
						}else{
							hata("Seçilen içerikler onaylanamadı!");
							git("ana.php?git=haberkategoriduzen","3");
						}
			}
			if(isset($_POST["onaysiz"])){
		
					foreach ($toplu as $toplusec){
					
						$onaylan	=mysql_query("update haberkategori set kataktif='0' where id='$toplusec'");
			
						
					}
						if($onaylan){
							uyari("Tüm seçilen içerikler pasif edildi");
							git("ana.php?git=haberkategoriduzen","3");
						}else{
							hata("Seçilen içerikler pasif yapılamadı!");
							git("ana.php?git=haberkategoriduzen","3");
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
            
            	<h4 class="widgettitle">Haber Kategorisi Düzenle</h4>
            	<table class="table table-bordered" id="dyntable">
                    <colgroup>
					<col class="con0" style="align: center; width: 4%" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                    </colgroup>
                    <thead>
                        <tr>
                          	<th class="head0 nosort"><input type="checkbox" class="checkall" /></th>
                            <th class="head0">Haber Kategori Adı</th>
                            <th class="head1">Haber Kategori Sırası</th>
                            <th class="head0">Haber Kategori Resmi</th>
                            <th class="head1">Yorum Durumu</th>
                            <th class="head0">Üst Kategorimi ?</th>
							<th class="head0">Düzenleme</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
							$haberkategorilistele	=mysql_query("select * from haberkategori");
								while($haberal=mysql_fetch_assoc($haberkategorilistele)){
									$haberkatadi	=$haberal["haberkatad"];
									$haberkatsira	=$haberal["habersira"];
									$haberkresim	=$haberal["haberresim"];
									$haberkyorum	=$haberal["yorumkapat"];
									$haberkust		=$haberal["ustkategori"];
									$hid			=$haberal["id"];
						?>
                        <tr class="gradeX">
                        					    <td class="aligncenter"><span class="center">
					
                            <input type="checkbox" name="toplu[]" value="<?php echo $hid;?>"/>
						
                          </span></td>
                            <td><?php echo $haberkatadi;?></td>
                            <td><?php echo $haberkatsira;?></td>
                            <td><?php 
							if($haberkresim==""){
								echo "Haber kategori resmi yok";
							}else{
								echo $haberkresim;
							}
							
							?></td>
                            <td class="center">
							<?php 
							if($haberkyorum=="0"){
								echo "Kapalı";
							}else{
								echo "Açık";
							}
							
							?>
							
							</td>
                            <td class="center">	
							<?php 
							if($haberkust>0){
								echo "Hayır";
							}else{
								echo "Evet";
							}
							
							?></td>
							<td>   <a href="ana.php?git=haberkategoriduzenle&id=<?php echo $hid;?>" title="DUZENLE"><img class="icon-edit"></a>   <a href="ana.php?git=haberkategorisil&id=<?php echo $hid;?>" title="SİL"><img class="icon-remove" style="margin-left:40px;"></a></td>
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