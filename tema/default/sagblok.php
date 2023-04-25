	<SCRIPT TYPE="text/javascript">
<!--
function popupform(myform, windowname)
{
if (! window.focus)return true;
window.open('', windowname, 'height=200,width=400,scrollbars=yes');
myform.target=windowname;
return true;
}
//-->
</SCRIPT> 
	<div class="span4">

<?php include("sagslider.php");?>
<!-- Köşe yazarları sabit modül -->
			<?php
			//sabit modüller aktiflik pasiflik
			$md	=mysql_fetch_assoc(mysql_query("select durum,modulyeri from modul where mid='9' order by msira asc"));
				$moduldur	=$md["modulyeri"];
			if($moduldur==2){
			?>
		<div class="row-fluid n_small_block">
			<div class="span12">
				<a class="n_metro_title n_bgcolor">
								<span><i class="icon-time icon-2x"></i></span>
								<div style="margin-top:10px;font-size:12px;">Köşe Yazıları</div>
							</a>
						<div style="margin-top:60px;"></div>
	<?php echo koseyazari();?>
				
			</div>
		</div>
		<?php } ?>
<!-- Köşe yazarları sabit modül -->

			<?php echo reklamlar(9);?>
			
			<!-- Kategoriler -->
	
						<?php
							$m	=mysql_fetch_assoc(mysql_query("select durum from modul where mid='8'"));
								$modulaktif	=$m["durum"];
							if($modulaktif==1){
						?>
			
								<?php echo gundemonecikan();?>
	
					<?php } ?>
					
	


<!-- Kategoriler -->


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
		
		
	<!-- En Çok Yorumlananlar -->
			<?php
			//sabit modüller aktiflik pasiflik
			$md	=mysql_fetch_assoc(mysql_query("select durum,modulyeri from modul where mid='2'and durum='1' order by msira asc"));
				$moduldur	=$md["modulyeri"];
			if($moduldur==1){
			?>
					<div class="row-fluid n_small_block">
						<div class="span12">
							<a class="n_metro_title n_bgcolor">
								<span><i class="icon-time icon-2x"></i></span>
								<div style="margin-top:10px;font-size:12px;"><?php echo modul(1,2,"misim");?></div>
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
			$md	=mysql_fetch_assoc(mysql_query("select modulyeri,durum from modul where mid='7' and durum='1' order by msira asc"));
				$modulaktif	=$md["modulyeri"];
			if($modulaktif==1){
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
								<li><center><input class="n_button n_bgcolor" type="submit" value="Oy kullan" style="width:200px"></input></center></li>
							
								</form>
							</ul>
								</div>
						</div>
					</div>
			<?php } ?>
	<!-- Anket kısmı gelicek -->
	<?php echo reklamlar(7);?>

					<?php
			//başlıklı modüller aktiflik pasiflik
			$m	=mysql_fetch_assoc(mysql_query("select durum from modul"));
				$modulaktifmi	=$m["durum"];
			if($modulaktifmi==1){
			?>
			<!-- baslıklı modul -->
			<?php echo sagblokmodul(1);?>
			<?php } ?>
			
			<!-- baslıklı modul -->

<?php echo reklamlar(8);?>

				
		</div>

		</div><!-- Right Side Bar Area -->

	</div>	