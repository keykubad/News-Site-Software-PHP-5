<?php
$katid		=$_GET["id"];
################################sayfalama kısmım burda ##############################
$sayfa            	= @intval($_GET['s']);
					if(!$sayfa) $sayfa = 1;
$toplam           	= mysql_num_rows(mysql_query("select * from haberler where haberkategori='$katid' and anasayfagoster='1' and aktif='1'"));
$limit            	= 4;
$sayfa_sayisi    	= ceil($toplam/$limit);
					if($sayfa > $sayfa_sayisi) $sayfa = 1;
$goster            	= $sayfa * $limit - $limit;
 

$gorunen        = 3;
 
    if($sayfa > 1){
        $onceki    = $sayfa - 1;
        $sayfalamaYaz.= '<li><a href="index.php?sayfa=kategori&id='.$katid.'" class="active">İLK</a></li>';
        $sayfalamaYaz.= '<li><a href="index.php?sayfa=kategori&id='.$katid.'&s='.$onceki.'">Önceki</a></li>';
							
    }
 
    for($i= $sayfa - $gorunen; $i < $sayfa + $gorunen + 1; $i++){
 
        if($i > 0 and $i <= $sayfa_sayisi){
                if($i == $sayfa){
                   $sayfalamaYaz.= "<li><a>".$i."</a></li>";
				   
            }else{
                $sayfalamaYaz.= "<li><a href='index.php?sayfa=kategori&id=".$katid."&s=".$i."'>".$i."</a></li>";
				
            }
        }
    }
 
    if($sayfa != $sayfa_sayisi){
        $sonraki     = $sayfa +1;
        $sayfalamaYaz.= "<li><a href='index.php?sayfa=kategori&id=".$katid."&s=".$sonraki."'>İleri</a></li>";
		
        $sayfalamaYaz.= '<li><a href="index.php?sayfa=kategori&id='.$katid.'&s='.$sayfa_sayisi.'" class="active">SON</a></li>';
		
    }   
?>	
	
	<div class="row-fluid">
		<div class="span12">
<?php echo sonkategorihaberler(); ?>

			<div class="n_news_small_boxes">
			
				<div class="n_latest_post_container clearfix">
				
				

				</div>
	

</div>
</div>
</div>
		<div class="pagination n_pagination">
			<ul>
			<?php echo $sayfalamaYaz;?>
			</ul>
		</div>
		<br>
<?php echo reklamlar(4);?>

</div>