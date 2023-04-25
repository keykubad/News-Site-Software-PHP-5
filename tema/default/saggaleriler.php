 
	<div class="span4">



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
								<?php echo galeri_kategoriler();?>
							</ul>
						</div>
					</div><!-- Blog Category List Ends -->
					<?php } ?>
					
					<?php echo reklamlar(10);?>
					
					
						<!-- En Çok Okunan Haberler -->
			<?php
			//sabit modüller aktiflik pasiflik
			$md	=mysql_fetch_assoc(mysql_query("select durum,modulyeri from modul where mid='1' and durum='1' order by msira asc"));
				$moduldur	=$md["modulyeri"];
			if($moduldur==2){
			?>
					<div class="row-fluid n_small_block">
						<div class="span12">
							<a class="n_metro_title n_bgcolor">
								<span><i class="icon-time icon-2x"></i></span>
								<div style="margin-top:10px;font-size:12px;"><?php echo modul(1,1,"misim");?></div>
							</a>
							<ul class="cok_okunan" style="width:100%;">
							<?php echo cok_okunanlar(); ?>
								
							</ul>
						</div>
					</div>
		<?php } ?>
		<!-- En Çok Okunan Haberler -->
					<div class="row-fluid n_small_block">
						<div class="span12">
							<a class="n_metro_title n_bgcolor">
								<span><i class="icon-tag icon-2x"></i></span>
								<span>Etiketler</span>
							</a>
							<div class="n_tagcloud">
						<?php echo galerietiket(); ?>
							</div>
						</div>
					</div><!-- Recent Work Ends -->

				</div>
			</div><!-- Latest News Ends -->

		</div><!-- Mid Side Bar Area -->


				
	

		</div><!-- Right Side Bar Area -->

	</div>	