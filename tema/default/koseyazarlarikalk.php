
<div class="span2">
<!-- Köşe yazarları sabit modül -->
			<?php
			//sabit modüller aktiflik pasiflik
			$md	=mysql_fetch_assoc(mysql_query("select durum,modulyeri from modul where mid='9' and durum='1' order by msira desc"));
				$moduldur	=$md["modulyeri"];
			if($moduldur==2){
			?>
		<div class="row-fluid">
			<div class="span12">
				<h4 class="n_news_cat_list_title">KÖŞE YAZILARI</h4>

		<?php echo koseyazari();?>
				
			</div>
		</div>
		<?php } ?>
<!-- Köşe yazarları sabit modül -->
						<!-- En Çok Okunan Haberler -->
			<?php
			//sabit modüller aktiflik pasiflik
			$md	=mysql_fetch_assoc(mysql_query("select durum,modulyeri from modul where mid='1' and durum='1' order by msira desc"));
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
		<!-- baslıklı modul -->
					<?php
			//başlıklı modüller aktiflik pasiflik
			$m	=mysql_fetch_assoc(mysql_query("select durum from modul"));
				$modulaktifmi	=$m["durum"];
			if($modulaktifmi==1){
			?>
			<!-- baslıklı modul -->
			<?php echo sagblokmodul(2);?>
			<?php } ?>
			


									<!-- En Çok Yorumlananlar -->
			<?php
			//sabit modüller aktiflik pasiflik
			$md	=mysql_fetch_assoc(mysql_query("select durum,modulyeri from modul where mid='2' and durum='1' order by msira desc"));
				$moduldur	=$md["modulyeri"];
			if($moduldur==2){
			?>
					<div class="row-fluid n_small_block">
						<div class="span12">
							<a class="n_metro_title n_bgcolor">
								<span><i class="icon-time icon-2x"></i></span>
								<div style="margin-top:18px;font-size:12px;"><?php echo modul(1,2,"misim");?></div>
							</a>
							<ul class="cok_okunan" style="width:100%;">
							<?php echo cok_yorumlananlar(); ?>
								
							</ul>
						</div>
					</div>
		<?php } ?>
		<!-- En Çok Yorumlananlar -->
		
			<!-- Anket kısmı gelicek -->
			<?php
			//sabit modüller aktiflik pasiflik
			$md	=mysql_fetch_assoc(mysql_query("select durum,modulyeri from modul where mid='7' order by msira asc"));
				$moduldur	=$md["modulyeri"];
			if($moduldur==2){
			?>
					<div class="row-fluid n_small_block n_text_align_center">
						<div class="span12">
						<div class="pull-left">
							<a class="n_metro_title n_bgcolor">
								<span><i class="icon-time icon-2x"></i></span>
								<span>Anket</span>
							</a>
							<ul class="n_recent_posts" style="width:100%;">
							<form method="post" onSubmit="popupform(this, 'join')" action="tema/default/anketekle.php">
							<li><?php echo anket (1,0);?></li>
								<?php echo anket (0,1);?>
								<li><center><input class="n_button n_bgcolor" type="submit" value="Oy kullan"></input></center></li>
							
								</form>
							</ul>
								</div>
						</div>
					</div>
			<?php } ?>
	<!-- Anket kısmı gelicek -->
	
		
<?php echo reklamlar(6);?>

	</div>
