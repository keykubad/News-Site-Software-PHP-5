			<script type="text/javascript" src="<?php echo URL.TEMA_URL;?>/highslide/highslide-with-gallery.js"></script>


<link rel="stylesheet" type="text/css" href="<?php echo URL.TEMA_URL;?>/highslide/highslide.css" />

<script type="text/javascript">

	hs.graphicsDir = '<?php echo URL.TEMA_URL;?>/highslide/graphics/';

	hs.align = 'center';

	hs.transitions = ['expand', 'crossfade'];

	hs.wrapperClassName = 'dark borderless floating-caption';

	hs.fadeInOut = true;

	hs.dimmingOpacity = .75;



	// Add the controlbar

	if (hs.addSlideshow) hs.addSlideshow({

		//slideshowGroup: 'group1',

		interval: 5000,

		repeat: false,

		useControls: true,

		fixedControls: 'fit',

		overlayOptions: {

			opacity: .6,

			position: 'bottom center',

			hideOnMouseOut: true

		}

	});

</script>
<?php

$tid		=$_GET["id"];
################################sayfalama kısmım burda ##############################
$sayfa            	= @intval($_GET['s']);
					if(!$sayfa) $sayfa = 1;
$toplam           	= mysql_num_rows(mysql_query("select * from galeriresim where galustid='$tid'"));
$limit            	= 8;
$sayfa_sayisi    	= ceil($toplam/$limit);
					if($sayfa > $sayfa_sayisi) $sayfa = 1;
$goster            	= $sayfa * $limit - $limit;
 

$gorunen        = 5;
 
    if($sayfa > 1){
        $onceki    = $sayfa - 1;
        $sayfalamaYaz.= '<li><a href="index.php?sayfa=galeri&id='.$tid.'" class="active">İLK</a></li>';
        $sayfalamaYaz.= '<li><a href="index.php?sayfa=galeri&id='.$tid.'&s='.$onceki.'">Önceki</a></li>';
							
    }
 
    for($i= $sayfa - $gorunen; $i < $sayfa + $gorunen + 1; $i++){
 
        if($i > 0 and $i <= $sayfa_sayisi){
                if($i == $sayfa){
                   $sayfalamaYaz.= "<li><a>".$i."</a></li>";
				   
            }else{
                $sayfalamaYaz.= "<li><a href='index.php?sayfa=galeri&id=".$tid."&s=".$i."'>".$i."</a></li>";
				
            }
        }
    }
 
    if($sayfa != $sayfa_sayisi){
        $sonraki     = $sayfa +1;
        $sayfalamaYaz.= "<li><a href='index.php?sayfa=galeri&id=".$tid."&s=".$sonraki."'>İleri</a></li>";
		
        $sayfalamaYaz.= '<li><a href="index.php?sayfa=galeri&id='.$tid.'&s='.$sayfa_sayisi.'" class="active">SON</a></li>';
		
    }   
?>	
			<div class="row-fluid">
				<div class="span12">

<?php echo galeriresimler();?>
	





				</div>
							<div class="pagination n_pagination">
				<ul>
		<?php echo $sayfalamaYaz;?>
				</ul>
			</div>
			</div>
			
			</div>