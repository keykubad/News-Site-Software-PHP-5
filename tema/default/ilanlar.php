<?php

$tid		=$_GET["id"];
################################sayfalama kısmım burda ##############################
$sayfa            	= @intval($_GET['s']);
					if(!$sayfa) $sayfa = 1;
$toplam           	= mysql_num_rows(mysql_query("select * from ilanlar where ilandurum='1'"));
$limit            	= 35;
$sayfa_sayisi    	= ceil($toplam/$limit);
					if($sayfa > $sayfa_sayisi) $sayfa = 1;
$goster            	= $sayfa * $limit - $limit;
 

$gorunen        = 3;
 
    if($sayfa > 1){
        $onceki    = $sayfa - 1;
        $sayfalamaYaz.= '<li><a href="index.php?sayfa=ilanlar&id='.$tid.'" class="active">İLK</a></li>';
        $sayfalamaYaz.= '<li><a href="index.php?sayfa=ilanlar&id='.$tid.'&s='.$onceki.'">Önceki</a></li>';
							
    }
 
    for($i= $sayfa - $gorunen; $i < $sayfa + $gorunen + 1; $i++){
 
        if($i > 0 and $i <= $sayfa_sayisi){
                if($i == $sayfa){
                   $sayfalamaYaz.= "<li><a>".$i."</a></li>";
				   
            }else{
                $sayfalamaYaz.= "<li><a href='index.php?sayfa=ilanlar&id=".$tid."&s=".$i."'>".$i."</a></li>";
				
            }
        }
    }
 
    if($sayfa != $sayfa_sayisi){
        $sonraki     = $sayfa +1;
        $sayfalamaYaz.= "<li><a href='index.php?sayfa=ilanlar&id=".$tid."&s=".$sonraki."'>İleri</a></li>";
		
        $sayfalamaYaz.= '<li><a href="index.php?sayfa=ilanlar&id='.$tid.'&s='.$sayfa_sayisi.'" class="active">SON</a></li>';
		
    }   
?>	
<div class="n_content clearfix">

	<div class="row-fluid">

		<div class="span9">
			<div class="row-fluid">
				<div class="span12 n_blog_list n_post">
		<?php echo ilanlar();?>
		

			
					
				</div>
			</div><!-- Post Details Ends -->



			<div class="pagination n_pagination">
				<ul>
		<?php echo $sayfalamaYaz;?>
				</ul>
			</div>



		</div><!-- Big Content Area -->

		<div class="span3">

			<div class="row-fluid">
				<div class="span12">
						<?php
							$m	=mysql_fetch_assoc(mysql_query("select durum from modul where mid='8'"));
								$modulaktif	=$m["durum"];
							if($modulaktif==1){
						?>
					<div class="row-fluid n_small_block">
						<div class="span12">
							<a class="n_metro_title n_bgcolor">
								<span><i class="icon-th icon-large"></i></span>
								<span>Haber Kategorileri</span>
							</a>
							<ul class="n_blog_categories">
								<?php echo haberoku_kategoriler();?>
							</ul>
						</div>
					</div><!-- Blog Category List Ends -->
					<?php } ?>
				
					<div class="row-fluid n_small_block">
						<div class="span12">
							<a class="n_metro_title n_bgcolor">
								<span><i class="icon-time icon-2x"></i></span>
								<span>Köşe Yazarları</span>
							</a>
							<ul class="n_recent_posts">
							<?php echo haberokukoseyazar(10);?>
						
					
							</ul>
						</div>
					</div><!-- Recent Posts Ends -->





				</div>
			</div><!-- Latest News Ends -->

		</div><!-- Mid Side Bar Area -->

	</div>




</div><!-- Middle Content Ends -->
</div>
