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
                <li class="active">Video galeri düzenle</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Sitenizin video galeri kategorilerini ve resmini bu bölümden düzenleyebilirsiniz.</span>
        </div><!--uyarıyı burdan ver-->

 <?php
			$sil	=$_POST["sil"];
			$toplu	=$_POST["toplu"];
			if(isset($_POST["sil"])){
		
					foreach ($toplu as $toplusec){
					
						$silme	=mysql_query("DELETE FROM videogaleri where vid='$toplusec'");
			
						
					}
						if($silme){
							uyari("Tüm seçilen video galeriler başarıyla silindi");
							git("ana.php?git=videogaleriduzen","3");
						}else{
							hata("Seçilen haberler silinemedi!");
							git("ana.php?git=videogaleriduzen","3");
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
            
            	<h4 class="widgettitle">Video Galeri Düzenleme Bölümü</h4>
            	<table class="table table-bordered" id="dyntable">
                    <colgroup>
					<col class="con0" style="align: center; width: 4%" />
                        <col class="con0" />
                        <col class="con1" />
         
					<col class="con1" />
                    </colgroup>
                    <thead>
                        <tr>
                          	<th class="head0 nosort"><input type="checkbox" class="checkall" /></th>
                            <th class="head0">Video galeri resmi</th>
							<th class="head1">Video galeri adı</th>
                            <th class="head1">Sıra</th>
							<th class="head1">İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
							$videolistele	=mysql_query("select * from videogaleri");
								while($val=mysql_fetch_assoc($videolistele)){
									$videoad		=$val["videogaleriad"];
									$videoresim		=$val["gvideoresim"];
									$videosira		=$val["videosira"];
									$vid			=$val["vid"];
						?>
                        <tr class="gradeX">
                           <td class="aligncenter"><span class="center">
					
                            <input type="checkbox" name="toplu[]" value="<?php echo $hid;?>"/>
						
                          </span></td>
                            <td width="150"><center><img src="<?php echo "../".$videoresim;?>" style="width:100px;height:100px;"></center></td>
                            <td><center><?php echo $videoad;?></center></td>
							<td><center><?php echo $videosira;?></center></td>

                  
							<td><center><a href="ana.php?git=videogaleriduzenle&id=<?php echo $vid;?>" title="DUZENLE"><img class="icon-edit"></a>   <a href="ana.php?git=videogalerisil&id=<?php echo $hid;?>" title="SİL"><img class="icon-remove" style="margin-left:40px;"></a></center></td>
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