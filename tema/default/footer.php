



	<div class="n_splitter"><span class="n_bgcolor"></span></div>
	<div class="row-fluid">
		<div class="span12">
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=216551661819310";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
			<div class="fb-like" data-href="https://www.facebook.com/EgeTelgrafGazetesi" data-send="true" data-width="" data-show-faces="true" data-font="arial"></div>
		</div>
	</div>

</div><!-- Middle Content Ends -->
<footer class="clearfix">

		<div class="n_footer_head">
			<div class="n_content clearfix">
				<a href="#" class="n_footer_logo pull-left"><!--<img src="<?php echo URL.TEMA_URL;?>/img/footer-logo.png" alt="" width="172" height="17" /> --></a>
				<a href="#" class="n_footer_back_to_top pull-right"><i class="icon-caret-up"></i>&nbsp;&nbsp;Back to top</a>
			</div>
		</div>

		<div class="n_content clearfix">


			<div class="n_footer_titles">
				<span>Sayfalarımız</span><br>
				<span>Haber Kategorileri</span><br>
				<span>Galeri Kategorilerimiz</span><br>
				<span>Video Kategorilerimiz</span><br>

			</div>

			<div class="n_footer_link">
				<div class="n_footer_link_line">
			<?php echo sayfalar();?>
				</div>
				<div class="n_footer_link_line">
				<?php echo haberkatalt();?>
				</div>
				<div class="n_footer_link_line">
			<?php echo altfotogalerikategori();?>
				</div>
				<div class="n_footer_link_line">
			<?php echo altvideogalerikategori();?>
				</div>
				
		
			</div>

		</div>

	</footer><!-- Footer Ends -->

</div>

</body>

</html>