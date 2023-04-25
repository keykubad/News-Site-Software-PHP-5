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
                <li class="active">Galeri resim düzenle</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Sitenizin gazete sayılarını ve tüm resimlerini bu bölümden düzenleyebilirsiniz.</span>
        </div><!--uyarıyı burdan ver-->

 <?php
			$sil	=$_POST["sil"];
			$toplu	=$_POST["toplu"];
			if(isset($_POST["sil"])){
		
					foreach ($toplu as $toplusec){
					
						$silme	=mysql_query("DELETE FROM gazetetarih where gazid='$toplusec'");
			
						
					}
						if($silme){
							uyari("Tüm seçilen galeriler başarıyla silindi");
							git("ana.php?git=gazeteduzen","3");
						}else{
							hata("Seçilen haberler silinemedi!");
							git("ana.php?git=gazeteduzen","3");
						}
			}
					
		
?>


 	<form method="post">
	             		<div style="padding-right:15px;padding-top:15px;">

 <button name="sil" class="btn btn-info" style="float:right;margin-left:5px;" title="Toplu Sil">
    <i class="iconsweets-trashcan iconsweets-white" ></i>
</button>&nbsp;



</div>
        
        <div class="maincontent">
        	<div class="contentinner">
            
            	<h4 class="widgettitle">Gazete Resim Düzenleme Bölümü</h4>
            	<table class="table table-bordered" id="dyntable">
                    <colgroup>
					<col class="con0" style="align: center; width: 4%" />
                        <col class="con0" />
                        <col class="con1" />

                    </colgroup>
                    <thead>
                        <tr>
                          	<th class="head0 nosort"><input type="checkbox" class="checkall" /></th>
                            <th class="head0">Gazete Tarih</th>
                            <th class="head1">Gazete sayfa adedi</th>
							<th class="head1">İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
							$gazetelistele	=mysql_query("select * from gazetetarih order by gazid desc");
								while($val=mysql_fetch_assoc($gazetelistele)){
									$gaztar		=$val["gtarih"];
									$gazid		=$val["gazid"];
							
						?>
                        <tr class="gradeX">
                           <td class="aligncenter"><span class="center">
					
                            <input type="checkbox" name="toplu[]" value="<?php echo $gazid;?>"/>
						
                          </span></td>
                            <td><center><?php echo $gaztar;?></center></td>
							<td><center>
							<?php
							
							$galerresimler	=mysql_query("select * from gazete where gazeteust='$gazid'");
							$resimsay=mysql_num_rows($galerresimler);
							echo "Gazeteye ait toplam ".$resimsay." adet resim bulundu";
							
							?>
							</center></td>

                  
							<td><center><a href="ana.php?git=gazeteresimduzenle&id=<?php echo $gazid;?>" title="DUZENLE"><img class="icon-edit"></a>   <a href="ana.php?git=gazeteresimsil&id=<?php echo $gazid;?>" title="SİL"><img class="icon-remove" style="margin-left:40px;"></a></center></td>
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