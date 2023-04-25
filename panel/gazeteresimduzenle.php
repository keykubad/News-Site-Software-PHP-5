<?php
	if ($_SESSION["kullanici"]==""){
		git("index.php",3);
		die ('<meta charset="utf-8" />hop nereye? Dön başa bakalım :)');
		
	
	}
$id	=$_GET["id"];

################################sayfalama kısmım burda ##############################
$sayfa            	= @intval($_GET['s']);
					if(!$sayfa) $sayfa = 1;
$toplam           	= mysql_num_rows(mysql_query("select * from gazete"));
$limit            	= 2;
$sayfa_sayisi    	= ceil($toplam/$limit);
					if($sayfa > $sayfa_sayisi) $sayfa = 1;
$goster            	= $sayfa * $limit - $limit;
 

$gorunen        = 2;
                  
    if($sayfa > 1){
        $onceki    = $sayfa - 1;
       // $sayfalamaYaz.= "<a href='tumhaberler.html'>İlk</a>";
        $sayfalamaYaz.= '<li><a href="ana.php?git=gazeteresimduzenle&id='.$id.'&s='.$onceki.'" class="btn prev prev_disabled"><span class="icon-chevron-left"></span></a></li>';
		
    }
 
    for($i= $sayfa - $gorunen; $i < $sayfa + $gorunen + 1; $i++){
 
        if($i > 0 and $i <= $sayfa_sayisi){
                if($i == $sayfa){
                   //$sayfalamaYaz.= "<a>$i</a>";
				   
            }else{
               // $sayfalamaYaz.= "<a href='tumhaberler-$i-sayfala.html' class='page-numbers'>$i</a>";
				
            }
        }
    }
 
    if($sayfa != $sayfa_sayisi){
        $sonraki     = $sayfa +1;
        $sayfalamaYaz.= '<li><a class="btn next" href="ana.php?git=gazeteresimduzenle&id='.$id.'&s='.$sonraki.'"><span class="icon-chevron-right"></span></a></li>';
		
        //$sayfalamaYaz.= "<a href='tumhaberler-$sayfa_sayisi-sayfala.html' class='next page-numbers'>Son</a>";

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
                <li><a href="karsilama.php">Anasayfa</a> <span class="divider">/</span></li>
                <li class="active">Gazete Resimleri</li>
            </ul>
        </div><!--breadcrumbs-->
        <div class="pagetitle">
        	<h1>Gazete resimlerini düzenleme</h1> <span>Bu Bölümden gazetenize ait resimleri silebilir yada düzenleyebilirsiniz.</span>
        </div><!--pagetitle-->
      <?php
					$toplu	=$_POST["toplu"];
					$sil	=$_POST["sil"];
			if(isset($_POST["sil"])){
					foreach ($toplu as $toplusec){
					
						$silme	=mysql_query("DELETE FROM gazete where gazid='$toplusec'");
				
						
					}
						if($silme){
							uyari("Tüm seçilen resimler başarıyla silindi");
							git("ana.php?git=gazeteresimduzenle&id=$id","3");
						}else{
							hata("Seçilen resimler silinemedi!");
							git("ana.php?git=gazeteresimduzenle&id=$id","3");
						}
			}
		?>	  
			<form method="post">
        <div class="maincontent">
        	<div class="contentinner">
            	
                <div class="mediamgr">
            	<div class="mediamgr_left">
                	<div class="mediamgr_head">
                    	<ul class="mediamgr_menu">
					<?php echo $sayfalamaYaz;?>

                           
                            <li class="marginleft5 trashbtn"> <button name="sil" class="btn btn-info" style="float:right;margin-left:5px;" title="Toplu Sil">
    <i class="iconsweets-trashcan iconsweets-white" ></i>
</button>&nbsp;</li>

                            <li class="right newfilebtn"><a href="ana.php?git=gazete" class="btn btn-primary">Yeni resim ekle</a></li>
                        </ul>
                        <span class="clearall"></span>
                    </div><!--mediamgr_head-->
                    
                    <div class="mediamgr_category">
                    	<ul>
                        
                            <li><span class="pagenuminfo">Toplam 
							<?php 
							$kac	=mysql_query("select * from gazete where gazeteust='$id'");
							$kacadet=mysql_num_rows($kac);
							echo $kacadet;
							
							?> resim bulunuyor</span></li>
                        </ul>
                    </div><!--mediamgr_category-->
                    
                    <div class="mediamgr_content">
						
                    <small><em>Not: Resimleri CTRL tuşuna basılı tutarak seçip silebilirsiniz yada iki kez tıklayıp düzenleyebilirsiniz.</em></small>
                        
                    <br /><br />
					     <ul class="listfile">
                    	<?php
								$dosyalar	=mysql_query("select * from gazete where gazeteust='$id' limit $goster,$limit");
									while($a=mysql_fetch_assoc($dosyalar)){
										$galerifoto		=$a["gazeteresim"];
								
										$gridi			=$a["gazid"];
						?>
					
                        	<li style="width:100px;height:130px;">
							<input type="checkbox" name="toplu[]" value="<?php echo $gridi;?>">
                                <a href="gazetegit.php?resim=resimler&id=<?php echo $gridi;?>" data-rel="image" ><img src="<?php echo $galerifoto;?>" alt="" width="100" height="100"/></a>
                        
                            </li>
						 	  
								<?php } ?>
                        </ul>
                        	</form>
                        <br class="clearall" />
                        
                    </div><!--mediamgr_content-->
                    
                </div><!--mediamgr_left -->
                
       
                <br class="clearall" />
            </div><!--mediamgr-->
                
            </div><!--contentinner-->
        </div><!--maincontent-->
        
    </div><!--mainright-->
    <!-- END OF RIGHT PANEL -->
    
    <div class="clearfix"></div>