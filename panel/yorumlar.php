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
                <li class="active">Yorumları düzenle</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Bu bölümde sitenize ait yorumları onaylayabilir veya silebilirsiniz..</span>
        </div><!--uyarıyı burdan ver-->
<?php
			$onay	=$_POST["onay"];
			$onaysiz=$_POST["onaysiz"];
			$sil	=$_POST["sil"];
			$toplu	=$_POST["toplu"];
			if(isset($_POST["sil"])){
		
					foreach ($toplu as $toplusec){
					
						$silme	=mysql_query("DELETE FROM yorumlar where yid='$toplusec'");
			
						
					}
						if($silme){
							uyari("Tüm seçilen yorumlar başarıyla silindi");
							git("ana.php?git=yorumduzen","3");
						}else{
							hata("Seçilen yorumlar silinemedi!");
							git("ana.php?git=yorumduzen","3");
						}
			}
			if(isset($_POST["onay"])){
		
					foreach ($toplu as $toplusec){
					
						$onaylan	=mysql_query("update yorumlar set ydurum='1' where yid='$toplusec'");
			
						
					}
						if($onaylan){
							uyari("Tüm seçilen yorumlar onaylandı");
							git("ana.php?git=yorumduzen","3");
						}else{
							hata("Seçilen yorumlar onaylanamadı!");
							git("ana.php?git=yorumduzen","3");
						}
			}
			if(isset($_POST["onaysiz"])){
		
					foreach ($toplu as $toplusec){
					
						$onaylan	=mysql_query("update yorumlar set ydurum='0' where yid='$toplusec'");
			
						
					}
						if($onaylan){
							uyari("Tüm seçilen yorumlar pasif edildi");
							git("ana.php?git=yorumduzen","3");
						}else{
							hata("Seçilen yorumlar pasif yapılamadı!");
							git("ana.php?git=yorumduzen","3");
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

</div>
 
        
        <div class="maincontent">
        	<div class="contentinner">
            
            	<h4 class="widgettitle">Yorumlar</h4>
            	<table class="table table-bordered" id="dyntable">
                    <colgroup>
					<col class="con0" style="align: center; width: 4%" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
					<col class="con1" />
					<col class="con0" />
                    </colgroup>
                    <thead>
                        <tr>
                          	<th class="head0 nosort"><input type="checkbox" class="checkall" /></th>
                            <th class="head0">Ad soyad</th>
                            <th class="head1">Email</th>
                            <th class="head0">Yorum</th>
							 <th class="head0">İp No</th>
							<th class="head1">İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
							$sayfalistele	=mysql_query("select * from yorumlar order by yid desc");
								while($al=mysql_fetch_assoc($sayfalistele)){
									$yid			=$al["yid"];
									$adsoy			=$al["adsoyad"];
									$mail			=$al["email"];
									$yorumu			=$al["yorumu"];
									$ipno			=$al["ipno"];
									$ydurum			=$al["ydurum"];
									
						?>
                        <tr class="gradeX">
                        <td class="aligncenter"><span class="center">
					
                            <input type="checkbox" name="toplu[]" value="<?php echo $yid;?>" <?php if($ydurum=="0"){ echo "checked";}?>/>
						
                          </span></td>
                            <td width="150"><center><?php echo $adsoy;?></center></td>
                            <td><center><?php echo $mail;?></center></td>
                            <td><center>
							<?php 
							
								echo substr($yorumu,0,30);
							?></center></td>
								 <td><center><?php echo $ipno;?></center></td>
                  
							<td><center><a href="ana.php?git=yorumduzen&id=<?php echo $yid;?>" title="DUZENLE"><img class="icon-edit"></a>   <a href="ana.php?git=yorumduzen&id=<?php echo $yid;?>" title="SİL"><img class="icon-remove" style="margin-left:40px;"></a></center></td>
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