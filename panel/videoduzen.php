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
                <li class="active">Video düzenle</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Sitenizin videolarını bu bölümden düzenleyebilirsiniz.</span>
        </div><!--uyarıyı burdan ver-->

<?php
			$onay	=$_POST["onay"];
			$onaysiz=$_POST["onaysiz"];
			$sil	=$_POST["sil"];
			$toplu	=$_POST["toplu"];
			if(isset($_POST["sil"])){
		
					foreach ($toplu as $toplusec){
					
						$silme	=mysql_query("DELETE FROM videolar where vidid='$toplusec'");
			
						
					}
						if($silme){
							uyari("Tüm seçilen videolar başarıyla silindi");
							git("ana.php?git=videoduzen","3");
						}else{
							hata("Seçilen haberler silinemedi!");
							git("ana.php?git=videoduzen","3");
						}
			}
			if(isset($_POST["onay"])){
		
					foreach ($toplu as $toplusec){
					
						$onaylan	=mysql_query("update videolar set videodurum='1' where vidid='$toplusec'");
			
						
					}
						if($onaylan){
							uyari("Tüm seçilen içerikler onaylandı");
							git("ana.php?git=videoduzen","3");
						}else{
							hata("Seçilen içerikler onaylanamadı!");
							git("ana.php?git=videoduzen","3");
						}
			}
			if(isset($_POST["onaysiz"])){
		
					foreach ($toplu as $toplusec){
					
						$onaylan	=mysql_query("update videolar set videodurum='0' where vidid='$toplusec'");
			
						
					}
						if($onaylan){
							uyari("Tüm seçilen içerikler pasif edildi");
							git("ana.php?git=videoduzen","3");
						}else{
							hata("Seçilen içerikler pasif yapılamadı!");
							git("ana.php?git=videoduzen","3");
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
            
            	<h4 class="widgettitle">VideoDüzenleme Bölümü</h4>
            	<table class="table table-bordered" id="dyntable">
                    <colgroup>
					<col class="con0" style="align: center; width: 4%" />
                        <col class="con0" />
                        <col class="con1" />
         <col class="con0" />
					<col class="con1" />
                    </colgroup>
                    <thead>
                        <tr>
                          	<th class="head0 nosort"><input type="checkbox" class="checkall" /></th>
                            <th class="head0">Video resmi</th>
							<th class="head1">Video başlık</th>
                            <th class="head1">Video kategorisi</th>
							<th class="head1">Video durum</th>
							<th class="head1">İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
							$videolistele	=mysql_query("select * from videolar order by vidid desc");
								while($val=mysql_fetch_assoc($videolistele)){
									$videoad		=$val["videobaslik"];
									$videoresim		=$val["videoresim"];
									$videodurum		=$val["videodurum"];
									$vid			=$val["vidid"];
						?>
                        <tr class="gradeX">
                           <td class="aligncenter"><span class="center">
					
                            <input type="checkbox" name="toplu[]" value="<?php echo $vid;?>"/>
						
                          </span></td>
                            <td width="150"><center><img src="<?php echo "../".$videoresim;?>" style="width:100px;height:100px;"></center></td>
                            <td><center>
							<?php 
							
							echo $videoad;
							
							?></center></td>
							<td><center>
							<?php 
							$vidgal	=mysql_fetch_assoc(mysql_query("select * from videogaleri where vid='$vid'"));
							echo $vidgal["videogaleriad"];
							
							?></center></td>
							<td><center><?php
							if($videodurum==1){
							echo "Aktif";
							}else{
							echo "Pasif";
							}
							?></center></td>
                  
							<td><center><a href="ana.php?git=videoduzenle&id=<?php echo $vid;?>" title="DUZENLE"><img class="icon-edit"></a>   <a href="ana.php?git=videosil&id=<?php echo $hid;?>" title="SİL"><img class="icon-remove" style="margin-left:40px;"></a></center></td>
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