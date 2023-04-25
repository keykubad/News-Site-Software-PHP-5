<?php
$habid	=$_GET["id"];

$hit		=mysql_query("update haberler set okunmasayisi=okunmasayisi+1 where hid='$habid'");

	 
?>
<div class="n_content clearfix">

	<div class="row-fluid">

		<div class="span9">
			<div class="row-fluid">
				<div class="span12 n_blog_list n_post">
					<div href="#" class="n_blog_img"><img src="<?php echo haberoku($habid,0,1,0,0,0,0); ?>" alt="<?php echo haberoku($habid,1,0,0,0,0,0); ?>" style="height:450px;"/></div>
					<div>
						<h1><?php echo haberoku($habid,1,0,0,0,0,0); ?></h1>
						<aside class="n_post_share_trigger n_color">+ Paylaş</aside>
						<aside class="n_post_tags_trigger">+ Etiketler</aside>
						<span class="n_little_date"><?php echo haberoku($habid,0,0,0,1,0,0); ?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<span class="n_color n_comments"><i class="icon-comment-alt"></i> <?php echo haberoku($habid,0,0,0,0,1,0); ?></span>
			
						<section class="n_post_share">
							<h4>Haberi Sosyal Medya'da Paylaş</h4>
							<ul class="st_social-icons">
								<li class="st_social-twitter st_colored"><a href="#">Twitter</a></li>
								<li class="st_social-dribbble st_colored"><a href="#">Dribbble</a></li>
								<li class="st_social-facebook st_colored"><a href="#">Facebook</a></li>
							</ul>
						</section>
						<section class="n_post_tags clearfix">
							<h4>Haber Etiketleri</h4>
							<div class="n_tagcloud">
						<?php echo haberoku($habid,0,0,0,0,0,1); ?>
							</div>
						</section>
						<div>
			<?php echo haberoku($habid,0,0,1,0); ?>
						</div>
					</div>
				</div>
			</div><!-- Post Details Ends -->

			<?php include("yorumsayfa.php");?>

			<?php include("yorumyaz.php");?>

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
							<?php echo haberokukoseyazar(5);?>
						
					
							</ul>
						</div>
					</div><!-- Recent Posts Ends -->



					<div class="row-fluid n_small_block">
						<div class="span12">
							<a class="n_metro_title n_bgcolor">
								<span><i class="icon-tag icon-2x"></i></span>
								<span>Etiketler</span>
							</a>
							<div class="n_tagcloud">
						<?php echo haberoku($habid,0,0,0,0,0,1); ?>
							</div>
						</div>
					</div><!-- Recent Work Ends -->

				</div>
			</div><!-- Latest News Ends -->

		</div><!-- Mid Side Bar Area -->

	</div>




</div><!-- Middle Content Ends -->
</div>

</div></div>
