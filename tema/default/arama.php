<?php

$tid		=$_GET["id"];
################################sayfalama kısmım burda ##############################
$sayfa            	= @intval($_GET['s']);
					if(!$sayfa) $sayfa = 1;
$toplam           	= mysql_num_rows(mysql_query("select * from haberler where aktif='1'"));
$limit            	= 5;
$sayfa_sayisi    	= ceil($toplam/$limit);
					if($sayfa > $sayfa_sayisi) $sayfa = 1;
$goster            	= $sayfa * $limit - $limit;
 

$gorunen        = 3;
 
    if($sayfa > 1){
        $onceki    = $sayfa - 1;
        $sayfalamaYaz.= '<li><a href="index.php?sayfa=arama" class="active">İLK</a></li>';
        $sayfalamaYaz.= '<li><a href="index.php?sayfa=arama&s='.$onceki.'">Önceki</a></li>';
							
    }
 
    for($i= $sayfa - $gorunen; $i < $sayfa + $gorunen + 1; $i++){
 
        if($i > 0 and $i <= $sayfa_sayisi){
                if($i == $sayfa){
                   $sayfalamaYaz.= "<li><a>".$i."</a></li>";
				   
            }else{
                $sayfalamaYaz.= "<li><a href='index.php?sayfa=arama&s=".$i."'>".$i."</a></li>";
				
            }
        }
    }
 
    if($sayfa != $sayfa_sayisi){
        $sonraki     = $sayfa +1;
        $sayfalamaYaz.= "<li><a href='index.php?sayfa=arama&s=".$sonraki."'>İleri</a></li>";
		
        $sayfalamaYaz.= '<li><a href="index.php?sayfa=arama&s='.$sayfa_sayisi.'" class="active">SON</a></li>';
		
    }   
?>	

<div class="n_content clearfix">

	<div class="row-fluid">
			<div class="span12">
				<div class="n_search_results">
					<h2><?php echo $araas	=$_POST["arama"]; ?> arama sonuçları</h2>
			
					<?php echo arama();?>
			
					<section class="pagination n_pagination">
						<ul>
			<?php echo $sayfalamaYaz;?>
						</ul>
					</section>
				</div>
			</div>
		</div>

	
		</div>
		</div></div></div>