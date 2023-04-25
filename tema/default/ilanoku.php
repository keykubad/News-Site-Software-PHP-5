
<div class="n_content clearfix">

	<div class="row-fluid">

		<div class="span9">
			<div class="row-fluid">
				<div class="span12 n_blog_list n_post">
		<?php echo ilanoku();?>		
				</div>
			</div><!-- Post Details Ends -->


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
