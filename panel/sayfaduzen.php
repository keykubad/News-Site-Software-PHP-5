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
                <li class="active">Sayfa düzenle</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Bu bölümde sitenize sayfa ekleyebilir, çıkartabilir, düzenleyebilirsiniz..</span>
        </div><!--uyarıyı burdan ver-->
<?php
			$onay	=$_POST["onay"];
			$onaysiz=$_POST["onaysiz"];
			$sil	=$_POST["sil"];
			$toplu	=$_POST["toplu"];
			if(isset($_POST["sil"])){
		
					foreach ($toplu as $toplusec){
					
						$silme	=mysql_query("DELETE FROM sayfalar where sid='$toplusec'");
						
					}
						if($silme){
							uyari("Tüm seçilen sayfalar başarıyla silindi");
							git("ana.php?git=sayfaduzen","3");
						}else{
							hata("Seçilen sayfalar silinemedi!");
							git("ana.php?git=sayfaduzen","3");
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
            
            	<h4 class="widgettitle">Sayfa düzenle</h4>
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
                            <th class="head0">Sıra</th>
                            <th class="head1">Sayfa başlık</th>
                            <th class="head0">Sayfa adres</th>
							<th class="head1">İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
							$sayfalistele	=mysql_query("select * from sayfalar order by sid desc");
								while($al=mysql_fetch_assoc($sayfalistele)){
									$sid			=$al["sid"];
									$sbaslik		=$al["sayfabaslik"];
									$sayadres		=$al["sayfaadres"];
									$saysira		=$al["sayfasira"];
									
						?>
                        <tr class="gradeX">
                        <td class="aligncenter"><span class="center">
					
                            <input type="checkbox" name="toplu[]" value="<?php echo $sid;?>"/>
						
                          </span></td>
                            <td width="150"><center><?php echo $saysira;?></center></td>
                            <td><center><?php echo $sbaslik;?></center></td>
                            <td><center>
							<?php 
							
								echo $sayadres;
							?></center></td>

                  
							<td><center><a href="ana.php?git=sayfaduzenle&id=<?php echo $sid;?>" title="DUZENLE"><img class="icon-edit"></a>   <a href="ana.php?git=sayfasil&id=<?php echo $sid;?>" title="SİL"><img class="icon-remove" style="margin-left:40px;"></a></center></td>
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