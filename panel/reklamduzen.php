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
                <li class="active">Reklam düzenle</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Bu bölümde sitenize reklam ekleyebilir,düzenleyebilir yada silebilirsiniz.</span>
        </div><!--uyarıyı burdan ver-->
<?php
			$onay	=$_POST["onay"];
			$onaysiz=$_POST["onaysiz"];
			$sil	=$_POST["sil"];
			$toplu	=$_POST["toplu"];
			if(isset($_POST["sil"])){
		
					foreach ($toplu as $toplusec){
					
						$silme	=mysql_query("DELETE FROM reklamlar where rid='$toplusec'");
						
					}
						if($silme){
							uyari("Tüm seçilen reklamlar başarıyla silindi");
							git("ana.php?git=reklamduzen","3");
						}else{
							hata("Seçilen reklamlar silinemedi!");
							git("ana.php?git=reklamduzen","3");
						}
			}
			if(isset($_POST["onay"])){
		
					foreach ($toplu as $toplusec){
					
						$onaylan	=mysql_query("update reklamlar set reklamdurum='1' where rid='$toplusec'");
			
						
					}
						if($onaylan){
							uyari("Tüm seçilen moduller onaylandı");
							git("ana.php?git=reklamduzen","3");
						}else{
							hata("Seçilen moduller onaylanamadı!");
							git("ana.php?git=reklamduzen","3");
						}
			}
			if(isset($_POST["onaysiz"])){
		
					foreach ($toplu as $toplusec){
					
						$onaylan	=mysql_query("update reklamlar set reklamdurum='0' where rid='$toplusec'");
			
						
					}
						if($onaylan){
							uyari("Tüm seçilen içerikler pasif edildi");
							git("ana.php?git=reklamduzen","3");
						}else{
							hata("Seçilen içerikler pasif yapılamadı!");
							git("ana.php?git=reklamduzen","3");
						}
			}

?>


 	<form method="post">
	             		<div style="padding-right:15px;padding-top:15px;">

 <button name="sil" class="btn btn-info" style="float:right;margin-left:5px;" title="Toplu Sil">
    <i class="iconsweets-trashcan iconsweets-white" ></i>
</button>&nbsp;
&nbsp;
 <button name="onay" class="btn btn-info" href="" style="float:right;margin-left:5px;" title="Toplu Onayla">
    <i class="iconsweets-refresh4 iconsweets-white" title="Onayla"></i>
</button>
 <button name="onaysiz" class="btn btn-info" href="" style="float:right;" title="Toplu Onay Kaldır">
    <i class="iconsweets-denied iconsweets-white"></i>
</button>

</div>
 
        
        <div class="maincontent">
        	<div class="contentinner">
            
            	<h4 class="widgettitle">Reklam düzenle</h4>
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
                            <th class="head0">Reklam durum</th>
                            <th class="head1">Reklam sırası</th>
                            <th class="head0">Reklam yeri</th>
							<th class="head1">İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
							$modullistele	=mysql_query("select * from reklamlar order by rid desc");
								while($al=mysql_fetch_assoc($modullistele)){
									$id					=$al["rid"];
									$reklamdurum			=$al["reklamdurum"];
									$reklamsira				=$al["reklamsira"];
									$reklamyer				=$al["reklamyeri"];
									
						?>
                        <tr class="gradeX">
                        <td class="aligncenter"><span class="center">
					
                            <input type="checkbox" name="toplu[]" value="<?php echo $id;?>"/>
						
                          </span></td>
                            <td width="150"><center>
							<?php
							
							if($reklamdurum==1){
								echo "Aktif";
							}else{
								echo "Pasif";
							}
							
							?></center></td>
                            <td><center><?php echo $reklamsira;?></center></td>
                            <td><center>
							<?php 
							
								echo $reklamyer;
							?></center></td>

                  
							<td><center><a href="ana.php?git=reklamduzenle&id=<?php echo $id;?>" title="DUZENLE"><img class="icon-edit"></a>   <a href="ana.php?git=reklamsil&id=<?php echo $id;?>" title="SİL"><img class="icon-remove" style="margin-left:40px;"></a></center></td>
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