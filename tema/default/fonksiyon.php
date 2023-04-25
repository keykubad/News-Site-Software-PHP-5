<?php
#####################Meta Taglar###############################
Function metatag($title,$des,$key){
			echo "<title>".$title."</title>";
			echo '
			<meta name="keywords" content="'.$key.'" />
			<meta name="description" content="'.$des.'" />
			';
}
#####################Meta Taglar###############################

#####################Modul Fonksiyonu###############################
Function modul($modulaktif,$modulid,$modulicerik){
	$modul	=mysql_query("select * from modul where durum='$modulaktif' and mid='$modulid' order by msira asc ");
		while($s=mysql_fetch_assoc($modul)){
		$modulaktif		=$s["durum"];
			if($modulaktif==1){
				$gelen	=$s[$modulicerik];
				echo $gelen;
			}
		}
}
#####################Modul Fonksiyonu###############################

#####################Modul Fonksiyonu Başlıklı Özel###############################
Function sagblokmodul($modulyeri){
	$modul	=mysql_query("select * from modul where durum='1' and modulyeri='$modulyeri' and sabitmodul='0' order by msira asc ");
		while($s=mysql_fetch_assoc($modul)){
		$modulaktif			=$s["durum"];
		$modulisim			=$s["misim"];
		$modulicerik		=$s["micerik"];
		
				$gelen	=$s[$modulicerik];
				echo '		<div class="row-fluid n_small_block">
						<div class="span12">
							<a class="n_metro_title n_bgcolor">
								<span><i class="icon-ok icon-2x"></i></span>
								<div style="margin-top:10px;font-size:12px;">'.$modulisim.'</div>
							</a>
							<ul class="n_blog_categories">
							<li>'.$modulicerik.'</li>
								
							</ul>
						</div>
					</div>';
		}
}
#####################Modul Fonksiyonu Başlıklı Özel###############################

#####################Reklam Modülü###############################
Function reklamlar($modulyeri){
	$reklam	=mysql_query("select * from reklamlar where reklamdurum='1' and reklamyeri='$modulyeri' order by reklamsira asc ");
		while($s=mysql_fetch_assoc($reklam)){
		$reklamyeri			=$s["reklamyeri"];
		$modulisim			=$s["misim"];
		$reklamicerik		=$s["reklamicerik"];
		
				echo $reklamicerik;
				
		}
}
#####################Reklam Modülü###############################

#####################Site Logosu###############################
Function logo (){
	$logom	=mysql_fetch_assoc(mysql_query("select resim from yonetici"));
		$logos	=$logom["resim"];
		return $logos;

}
#####################Site Logosu###############################

#####################Harf düzeltip büyütme###############################
function harfbuyu($veri) {
    return strtoupper (str_replace(array ('ı', 'i', 'ğ', 'ü', 'ş', 'ö', 'ç' ),array ('I', 'İ', 'Ğ', 'Ü', 'Ş', 'Ö', 'Ç' ),$veri));
}
#####################Harf düzeltip büyütme###############################

#####################Üst Menüler###############################
Function ustmenuler($kategoriArray , $ebeveyn = 0  , $kademe_pixel = 5 ,  $i = 0  ,  $menuler = NULL , $nested = FALSE )
{
			if( empty($kategoriArray) ){
				return;
			}
		 

			if( !$nested ){
			 
				foreach($kategoriArray as $row):
					$items[$row['ustkategori']][]=$row;
				endforeach;
			}else{
		 
				$items=$kategoriArray;
			}
		 

			foreach( $items[$ebeveyn] as $sayfa ){
		   
				$bosluk=str_repeat(' ',($i * $kademe_pixel));
		 
		  
				$menuler .= '<li><a href="index.php?sayfa=kategori&id='.$sayfa["id"].'">'.harfbuyu($sayfa["haberkatad"]).'</a>'.PHP_EOL;
				
			
			
				if(isset($items[$sayfa['id']])){
				
					
				$menuler .= '<div class="n_open_right n_menu_type_1">
											<ul class="clearfix">'.PHP_EOL;
				$menuler=ustmenuler($items,$sayfa['id'],$kademe_pixel,($i + 1),$menuler,TRUE);
						$menuler .= '</ul></div>';
				}
			
			}
			
								$menuler .	'</li>'.PHP_EOL;

			return $menuler;
}
#####################Üst Menüler###############################

#####################Ust Video Menu############################
Function videomenu($videoad,$gvideoresim,$sirala){
		$videocek	=mysql_query("select * from videogaleri");
			while($a=mysql_fetch_assoc($videocek)){
					if($sirala==1){
					$videoad		=$a["videogaleriad"];
					$gvideoresim	=$a["gvideoresim"];
						echo '<li><a href="#" data-menu-image="'.$gvideoresim.'" >'.$videoad.'</a></li>';
					}
				
					if($videoad==1){
					$videoad		=$a["videogaleriad"];
						return $videoad;
					}
					if($gvideoresim==1){
					$gvideoresim	=$a["gvideoresim"];
						return $gvideoresim;
					}
			}

}
#####################Ust Video Menu############################

#####################Ust Foto Galeri Menu############################
Function galerimenu($galeriad,$galeriresim,$sirala){
		$galericek	=mysql_query("select * from galeri");
			while($a=mysql_fetch_assoc($galericek)){
					if($sirala==1){
					$galeriad		=$a["galeriad"];
					$galeriresim	=$a["galeriresim"];
					$gid			=$a["gid"];
						echo '<li><a href="index.php?sayfa=galeri&id='.$gid.'" data-menu-image="'.$galeriresim.'" >'.$galeriad.'</a></li>';
					}
				
					if($galeriad==1){
					$galeriad		=$a["galeriad"];
						return $galeriad;
					}
					if($galeriresim==1){
					$galeriresim	=$a["galeriresim"];
						return $galeriresim;
					}
			}

}
#####################Ust Foto Galeri Menu############################

#####################Son Dakika Haber############################
Function sondakikahaber(){
		$habercek	=mysql_query("select * from haberler where sondakika='1' and aktif='1' order by tarihsaat desc limit 0,3 ");
			while($a=mysql_fetch_assoc($habercek)){
				$haberbaslik	=$a["hbaslik"];
				$haberkisa		=$a["hkisa"];
				$habid			=$a["hid"];
				$manset			=$a["hmanset"];
				$zaman			=$a["tarihsaat"];
				$hkat			=$a["haberkategori"];
				$okunmasay		=$a["okunmasayisi"];
				$habkat			=mysql_fetch_assoc(mysql_query("select * from haberkategori where id='$hkat'"));
				$habkatad		=$habkat["haberkatad"];
				echo'<div class="met_carousel_column" style="width:220px;">
									<div class="n_cat_list_image" style="width:220px;">
									<a href="index.php?sayfa=haberoku&id='.$habid.'"><h4 style="font-family:arial;">'.mb_substr($haberbaslik,0,25,'UTF-8').'...</h4></a>
										<a href="index.php?sayfa=haberoku&id='.$habid.'">
											<img src="'.$manset.'" alt="'.$haberbaslik.'" style="width:220px;height:150px;"/>
										</a>
										
									</div>
									
									<span class="n_little_date">'.$zaman.' <a href="#" class="n_link n_color"><b>'.$habkatad.'</b></a> <img src="'.URL.TEMA_URL.'/img/view-count.png" alt="" class="n_view_count"><span class="n_view_counter"> '.$okunmasay.'</span></span>
									<p class="n_short_descr">'.mb_substr($haberkisa,0,100,'UTF-8').'</p>
									
								</div>';
			}

}
#####################Son Dakika Haber###########################

#####################Manşet ve Slider alanı############################
Function mansetslider(){
		$habercek	=mysql_query("select * from haberler where mansetgoster='1' and aktif='1' order by tarihsaat desc limit 0,15");
			while($a=mysql_fetch_assoc($habercek)){
				$haberbaslik	=$a["hbaslik"];
				$mansetresim	=$a["hmanset"];
				$habid			=$a["hid"];
								echo'<div class="n_bgcolor">
							<a href="index.php?sayfa=haberoku&id='.$habid.'">
								<img src="'.$mansetresim.'"  style="width:770px;height:449px;" />
							</a>
							<a href="index.php?sayfa=haberoku&id='.$habid.'">'.$haberbaslik.'</a>
						</div>';
			}

}
#####################Manşet ve Slider alanı###########################

#####################SAG Slider alanı############################
Function sagslider(){
		$habercek	=mysql_query("select * from haberler where mansetgoster='1' and aktif='1' order by tarihsaat desc limit 0,15");
			while($a=mysql_fetch_assoc($habercek)){
				$haberbaslik	=$a["hbaslik"];
				$mansetresim	=$a["hmanset"];
				$habid			=$a["hid"];
	echo'	<li>
		<a href="index.php?sayfa=haberoku&id='.$habid.'"><img src="yuklenenler/modul/4dc5b6146a2904-et-01-r.jpg"  style="width:300px;height:441px;" /></a></li>
		<li><a href="index.php?sayfa=haberoku&id='.$habid.'"><img src="yuklenenler/modul/4dc5b6146a2904-et-01-r.jpg"  style="width:300px;height:441px;" /></a></li>
							';
			}

}
#####################SAG Slider alanı###########################


#####################Son Haberler 18 Adet############################
Function sonhaberler(){

	$sonhaberler	=mysql_query("select * from haberler where anasayfagoster='1' and aktif='1' order by tarihsaat desc limit 15,33");
		while($don=mysql_fetch_assoc($sonhaberler)){
			$haberbaslik	=$don["hbaslik"];
			$haberkisa		=$don["hkisa"];
			$haberid		=$don["haberkategori"];
			$haberresim		=$don["hmanset"];
			$habid			=$don["hid"];
		$kategorisi		=mysql_fetch_assoc(mysql_query("select haberkatad,id from haberkategori where id='$haberid'"));
			$haberkatad	=$kategorisi["haberkatad"];
			$iid		=$kategorisi["id"];
			echo '<div class="met_carousel_column n_classic_column">
			<a href="index.php?sayfa=haberoku&id='.$habid.'" class="n_title_link"><h5 >'.harfbuyu($haberbaslik).'</h5></a>
				<div class="n_category_list_item_image">
					<a href="index.php?sayfa=haberoku&id='.$habid.'" class="n_news_cat_list_preview">
						<img src="'.$haberresim.'" alt="'.$haberbaslik.'" style="width:220px;height:172px;"/>
					</a>
					
					<a href="index.php?sayfa=haberkategori&id='.$iid.'" class="n_link n_color"><b>'.$haberkatad.'</b></a> 
				<p class="n_short_descr" style="width:220px">'.mb_substr($haberkisa,0,100,'UTF-8').'...</p><br>
			
				<div class="n_latest_post_container clearfix">
				
				
					<div class="n_splitter_2" style="width:220px"><span class="n_bgcolor"></span></div>
				</div><br>
				</div>
				
				</div>';
		}

}
#####################Son Haberler 18 Adet###########################

#####################Galeri Fotograf bölümü 30 lu############################
Function galeriresimleri(){
	$galeriler	=mysql_query("select * from galeriresim limit 0,30");
	$say=mysql_num_rows($galeriler);
		while($a=mysql_fetch_assoc($galeriler)){
	$galerifoto	=$a["galerifoto"];
	$galeriyazi	=$a["galeriaciklama"];
	$galustid	=$a["galustid"];
	$galhit		=$a["galerihit"];
	$foto		=str_replace("../","",$galerifoto);
			$galkat		=mysql_fetch_assoc(mysql_query("select * from galeri where gid='$galustid'"));
			$galerikat	=$galkat["galeriad"];
			echo '
				<div class="met_carousel_column">
									<div class="n_cat_list_image">
										<a href="#" class="n_news_cat_list_preview">
											<img src="'.$foto.'" alt="" style="width:240px;height:118px;"/>
										</a>
										<a href="#" class="n_image_hover_bg"><img src="'.URL.TEMA_URL.'/img/img-hover-bg.png" alt="" /></a>
									</div>
									<a href="#" class="n_title_link"><p class="n_short_descr">'.substr($galeriyazi,0,80).'</p></a>
									
									<a href="#" class="n_link n_color"><b>'.$galerikat.'</b></a> <img src="'.URL.TEMA_URL.'/img/view-count.png" alt="" class="n_view_count"><span class="n_view_counter"> '.$galhit.'</span>
								</div>';
										
			
		}

}
#####################Galeri Fotograf bölümü 30 lu###########################

#####################Köşe yazarları bölümü###########################
Function koseyazari(){

	$koseyazarcek	=mysql_query("select * from koseyazarlari where kosaktif='1' limit 0,30");
		while($f=mysql_fetch_assoc($koseyazarcek)){
			$yazarresim		=$f["koseresim"];
			$adsoyad		=$f["adisoyadi"];
			$koseids		=$f["kosid"];
			
				$h	=mysql_fetch_assoc(mysql_query("select * from haberler where koseid='$koseids' order by tarihsaat desc"));
				
				$haberbaslik	=$h["hbaslik"];
				$hid			=$h["hid"];
				
				if($haberbaslik!=""){
					echo '<div class="n_latest_post_container clearfix" style="float:left;margin-left:5px;">
						<a class="n_latest_post_picture" style="margin-top:-8px;" href="index.php?sayfa=haberoku&id='.$hid.'"><img src="'.$yazarresim.'" alt="'.$haberbaslik.'" style="width:50px;height:50px;float:left;"/></a>
					</div>
					';
				}
		}

}
#####################Köşe yazarları bölümü###########################

#####################EN Çok Okunan Haberler###########################
Function cok_okunanlar(){
	$okunma		=mysql_query("select okunmasayisi,hmanset,hbaslik,hid from haberler order by okunmasayisi desc limit 0,4");
		while($e=mysql_fetch_assoc($okunma)){
		$hid		=$e["hid"];
		
			echo '<li style="margin-bottom:5px;"><a href="index.php?sayfa=haberoku&id='.$hid.'"><img src="'. $haberresim		=$e["hmanset"].'" style="width:375px;height:250px;"></a></li>';
			echo "<li style='margin-bottom:5px;'>".$hbaslik					=$e["hbaslik"]."</li>";
			echo "<li class='n_link n_color' style='margin-bottom:5px;'>Haberin okunma sayısı : ". $okunanlar	=$e["okunmasayisi"]."</li>";
			echo '<div class="pull-left n_splitter_2" style="margin-bottom:10px;"><span class="n_bgcolor"></span></div>';
		}

}
#####################EN Çok Okunan Haberler###########################

#####################EN Çok Okunan Yorumlananlar###########################
Function cok_yorumlananlar(){

	$okunma		=mysql_query("select * from yorumlar order by yorumokunma desc limit 0,4");
		while($e=mysql_fetch_assoc($okunma)){
		$haberid		=$e["haberid"];
		$yorumsayi		=$e["yorumokunma"];
		$haberi			=mysql_fetch_assoc(mysql_query("select * from haberler where hid='$haberid'"));
			echo '<li style="margin-bottom:5px;"><a href="index.php?sayfa=haberoku&id='.$hid=$haberi["hid"].'"><img src="'. $haberresim		=$haberi["hmanset"].'" style="width:175px;height:100px;"></a></li>';
			echo "<li style='margin-bottom:5px;'>".$hbaslik					=$haberi["hbaslik"]."</li>";
			echo "<li class='n_link n_color' style='margin-bottom:5px;'>Haberin yorum sayısı : ".$yorumsayi."</li>";
			echo '<div class="pull-left n_splitter_2" style="margin-bottom:10px;"><span class="n_bgcolor"></span></div>';
		}

}
#####################EN Çok Okunan Yorumlananlar###########################

#####################ANKET SORU Modülü Burada###########################
Function anket($sorusu,$anketcevaplar,$modulaktif){
global $modulaktif;
	$anketsoru		=mysql_fetch_assoc(mysql_query("select baslik,id from anketsoru order by id asc limit 0,1"));
	$anketid		=$anketsoru["id"];
	if($modulaktif==1){
		if($sorusu==1){
			echo $sorusu			=$anketsoru["baslik"];
		}
		if($anketcevaplar==1){
			$anketid		=$anketsoru["id"];
			$anketcevap		=mysql_query("select * from anketcevap where ankid='$anketid' order by id asc");
				while($w=mysql_fetch_assoc($anketcevap)){
				$cevapid	=$w["id"];
					echo '<li>  <label> <input type="radio" name="secim[]" value="'.$cevapid.'">'.$anketcevaplar=$w["cevaplar"].'</label></li>';
				}
				
		}
	}
}
#####################ANKET Cevap Modülü Burada###########################

#####################Doviz kuru çek###########################
Function dovizkuru($usd_satis,$euro_satis,$sterlin_satis){
	$open = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');

		if($usd_satis==1){
					// dolar
			$usd_alis = $open->Currency[0]->BanknoteBuying;
			$usd_satis = $open->Currency[0]->BanknoteSelling;
			echo $usd_satis;
		}
		if($euro_satis==1){
			// euro
			$euro_alis = $open->Currency[11]->BanknoteBuying;
			$euro_satis = $open->Currency[11]->BanknoteSelling;
			echo $euro_satis;
		}
		if($sterlin_satis==1){
			// euro
			$sterlin_alis = $open->Currency[12]->BanknoteBuying;
			$sterlin_satis = $open->Currency[12]->BanknoteSelling;
			echo $sterlin_satis;
		}
}
#####################Doviz kuru çek###########################

####################################################HABER İÇERİKLERİ BAŞLIYOR####################################################
####################################################Haber Okuma Kısmı####################################################
Function haberoku($haberid,$baslik,$resim,$yazi,$zaman,$yorum,$tametiket){
	$habercek		=mysql_fetch_assoc(mysql_query("select * from haberler where hid='$haberid'"));
		if($baslik==1){
			$baslik		=$habercek["hbaslik"];
			echo $baslik;
		}
		if($resim==1){
			$resim		=$habercek["hmanset"];
			echo $resim;
		}
		if($yazi==1){
			$yazi		=$habercek["hicerik"];
			echo $yazi;
		}
		if($zaman==1){
			$zaman		=$habercek["tarihsaat"];
			echo $zaman;
		}
		if($yorum==1){
			$yorumlar		=mysql_query("select yorumokunma,haberid from yorumlar where haberid='$haberid' and ydurum='1'");
			$yorum		=mysql_num_rows($yorumlar);
			echo $yorum;
		
		}
		if($tametiket==1){
			$etiketler			=mysql_query("select hetiket,hid,hbaslik from haberler where hid='$haberid'");
			while($w=mysql_fetch_assoc($etiketler)){
				$etiket				=$w["hetiket"];
				$idi				=$w["hid"];
				$title				=$w["hbaslik"];
				$etiket				=explode(",",$etiket);
				foreach($etiket as $tametiket){
					echo '<a href="index.php?sayfa=haberoku&id='.$idi.'" title="'.$title.'">'.$tametiket.'</a>';
				}
			}
		}
}
####################################################Haber Okuma Kısmı####################################################

####################################################Haber Okuma Kısmı Kategoriler#########################################
Function haberoku_kategoriler(){
	$haberkategori		=mysql_query("select haberkatad from haberkategori where ustkategori='0'");
		while($q=mysql_fetch_assoc($haberkategori)){
			$haberkat	=$q["haberkatad"];
			echo '<li><a href="#">'.$haberkat.' <i class="icon-angle-right"></i></a></li>';
		}


}
####################################################Haber Okuma Kısmı Kategoriler#########################################

####################################################Alt Kısım Sayfalar#########################################
Function sayfalar(){
		$sayfaal=mysql_query("select sayfabaslik,sayfaadres from sayfalar where altmenugor='1' and anasayfagor='1'");
		while($x=mysql_fetch_assoc($sayfaal)){
			$sbaslik	=$x["sayfabaslik"];
			$sadres		=$x["sayfaadres"];
			echo '<a href="'.$sadres.'">'.harfbuyu($sbaslik).'</a>';
		}

}
####################################################Alt Kısım Sayfalar#########################################

####################################################Alt Kısım Kategoriler#########################################
Function haberkatalt(){
		$sayfaal=mysql_query("select haberkatad,id from haberkategori where kataktif='1' and altgoster='1' and ustkategori='0' ");
		while($x=mysql_fetch_assoc($sayfaal)){
			$hbaslik	=$x["haberkatad"];
			$katid		=$x["id"];
			echo '<a href="'.$katid.'">'.harfbuyu($hbaslik).'</a>';
		}

}
####################################################Alt Kısım Kategoriler#########################################

####################################################Alt Kısım Foto Galeri Kategoriler#########################################
Function altfotogalerikategori(){
		$sayfaal=mysql_query("select galeriad,gid from galeri where galeridurum='1' limit 0,10 ");
		while($x=mysql_fetch_assoc($sayfaal)){
			$galad		=$x["galeriad"];
			$galid		=$x["gid"];
			echo '<a href="'.$galid.'">'.harfbuyu($galad).'</a>';
		}

}
####################################################Alt Kısım Foto Galeri Kategoriler#########################################

####################################################Alt Kısım Video Galeri Kategoriler#########################################
Function altvideogalerikategori(){
		$sayfaal=mysql_query("select videogaleriad,vid from videogaleri limit 0,10 ");
		while($x=mysql_fetch_assoc($sayfaal)){
			$vidad		=$x["videogaleriad"];
			$vid		=$x["vid"];
			echo '<a href="'.$vid.'">'.harfbuyu($vidad).'</a>';
		}

}
####################################################Alt Kısım Video Galeri Kategoriler#########################################

#####################Köşe yazarları bölümü HABER OKUMA KISMI###########################
Function haberokukoseyazar($limit){

	$koseyazarcek	=mysql_query("select * from koseyazarlari where kosaktif='1' limit 0,$limit");
		while($f=mysql_fetch_assoc($koseyazarcek)){
			$yazarresim		=$f["koseresim"];
			$adsoyad		=$f["adisoyadi"];
			$koseids		=$f["kosid"];
			
				$h	=mysql_fetch_assoc(mysql_query("select * from haberler where koseid='$koseids' order by tarihsaat desc"));
				
				$haberbaslik	=$h["hbaslik"];
				$hid			=$h["hid"];
				$tarih			=substr($h["tarihsaat"],0,10);
				
				echo '<li>
									<a href="index.php?sayfa=haberoku&id='.$hid.'">
										<img src="'.$yazarresim.'" alt="" />
										<h4>'.$adsoyad.'</h4>
										<p>'.$haberbaslik.'</p>
									</a>
								</li>';
		
		}

}
#####################Köşe yazarları bölümü HABER OKUMA KISMI###########################

#####################Kategori Slider alanı############################
Function kategorislider($buyuk,$kucuk){
$hkatid		=$_GET["id"];
		$habercek	=mysql_query("select * from haberler where haberkategori='$hkatid' and aktif='1' and mansetgoster='1' order by tarihsaat desc ");
			while($a=mysql_fetch_assoc($habercek)){
				$haberbaslik	=$a["hbaslik"];
				$mansetresim	=$a["hmanset"];
				$habid			=$a["hid"];
				if($buyuk==1){
					echo'<img src="'.$mansetresim.'" style="width:770;height:449px;" alt="'.$haberbaslik.'" data-href="index.php?sayfa=haberoku&id='.$habid.'" />';
				}
				if($kucuk==1){
				echo '<img src="'.$mansetresim.'" style="width:50;height:50px;" />';
				}
			}

}
#####################Kategori Slider alanı###########################

#####################Son Kategori Haberler 30 Adet############################
Function sonkategorihaberler(){
global $goster;
global $limit;
$hkatid	=$_GET["id"];
	$sonhaberler	=mysql_query("select * from haberler where haberkategori='$hkatid' and anasayfagoster='1' and aktif='1' order by tarihsaat desc limit $goster,$limit");
		while($don=mysql_fetch_assoc($sonhaberler)){
			$haberbaslik	=$don["hbaslik"];
			$haberkisa		=$don["hkisa"];
			$haberid		=$don["haberkategori"];
			$haberresim		=$don["hmanset"];
			$habid			=$don["hid"];
		$kategorisi		=mysql_fetch_assoc(mysql_query("select haberkatad,id from haberkategori where id='$hkatid' limit $goster,$limit"));
			$haberkatad	=$kategorisi["haberkatad"];
			$iid		=$kategorisi["id"];

				
					echo '<div class="met_carousel_column n_classic_column">
			<a href="index.php?sayfa=haberoku&id='.$habid.'" class="n_title_link"><h5>'.harfbuyu($haberbaslik).'</h5></a>
				<div class="n_category_list_item_image">
					<a href="index.php?sayfa=haberoku&id='.$habid.'" class="n_news_cat_list_preview">
						<img src="'.$haberresim.'" alt="'.$haberbaslik.'" style="width:241px;height:172px;"/>
					</a>
					
					<a href="index.php?sayfa=kategori&id='.$iid.'" class="n_link n_color"><b>'.$haberkatad.'</b></a> 
				<p class="n_short_descr">'.mb_substr($haberkisa,0,100,'UTF-8').'...</p><br>
			
				<div class="n_latest_post_container clearfix">
				
				
					<div class="n_splitter_2"><span class="n_bgcolor"></span></div>
				</div><br>
				</div>
				
				</div>';
				
		}

}
#####################Son Kategori Haberler 30 Adet###########################

#####################İlan Listeleme Kısmı###########################
Function ilanlar(){
	$ilan		=mysql_query("select * from ilanlar where ilandurum='1' order by ilantarih desc");
	while($s=mysql_fetch_assoc($ilan)){
	 $baslik	=$s["ilanbaslik"];
	 $tarih		=$s["ilantarih"];
	 $iid		=$s["ilanid"];
	 
		echo '<div>
						<h3><a href="index.php?sayfa=ilanoku&id='.$iid.'">'.$baslik.'</a></h3>
						<aside class="n_post_share_trigger n_color">+ Paylaş</aside>
						<span class="n_color n_comments"><i class="icon-comment-alt"></i> '.$tarih.'</span>
			
						<section class="n_post_share">
							<h4>İlanı Sosyal Medyada Paylaş</h4>
							<ul class="st_social-icons">
								<li class="st_social-twitter st_colored"><a href="#">Twitter</a></li>
								<li class="st_social-dribbble st_colored"><a href="#">Dribbble</a></li>
								<li class="st_social-facebook st_colored"><a href="#">Facebook</a></li>
							</ul>
						</section>

			
					</div>';
	
	}
}
#####################İlan Listeleme Kısmı###########################

#####################İlan Okuma Kısmı###########################
Function ilanoku(){
$idi	=$_GET["id"];
	$ilan		=mysql_query("select * from ilanlar where ilanid='$idi' and ilandurum='1' order by ilantarih desc");
	while($s=mysql_fetch_assoc($ilan)){
	 $baslik	=$s["ilanbaslik"];
	 $tarih		=$s["ilantarih"];
	 $icerik	=$s["ilanicerik"];
	 $iid		=$s["ilanid"];
	 
		echo '<div>
						<h3>'.$baslik.'</h3>
						<aside class="n_post_share_trigger n_color">+ Paylaş</aside>
						<span class="n_color n_comments"><i class="icon-comment-alt"></i> '.$tarih.'</span>
						<p>'.$icerik.'<p>
						<section class="n_post_share">
							<h4>İlanı Sosyal Medyada Paylaş</h4>
							<ul class="st_social-icons">
								<li class="st_social-twitter st_colored"><a href="#">Twitter</a></li>
								<li class="st_social-dribbble st_colored"><a href="#">Dribbble</a></li>
								<li class="st_social-facebook st_colored"><a href="#">Facebook</a></li>
							</ul>
						</section>

			
					</div>';
	
	}
}
#####################İlan Okuma Kısmı###########################

#####################Gündem Başlıkları modülü###########################
Function gundemonecikan(){
		
		$katkac		=mysql_query("select * from haberkategori where gundem='1' ");
		while($habkat=mysql_fetch_assoc($katkac)){
		$idsii	=$habkat["id"];
		$katad	=$habkat["haberkatad"];
		echo '<div class="row-fluid n_small_block">
						<div class="span12" >
							<a class="n_metro_title n_bgcolor">
								<span><i class="icon-th icon-large"></i></span>
								<span>'.$katad.'</span>
							</a><ul class="n_blog_categories">';
			$okunma		=mysql_query("select * from haberler where haberkategori='$idsii' order by tarihsaat desc limit 33,38 ");
			$saykat		=mysql_num_rows($okunma);
				while($e=mysql_fetch_assoc($okunma)){
				$hbaslik		=$e["hbaslik"];
				$hid			=$e["hid"];
				
		
							
				echo "<li><a href='index.php?sayfa=haberoku&id=".$hid."'>".$hbaslik."</a></li>";
					
			
			}
			echo '</ul>
						</div>
					</div>';
		}
		
}
#####################Gündem Başlıkları modülü###########################

#####################Yorum Listeleme Kısmı###########################
Function yorumlistele (){
global $goster;
global $limit;
	$id	=$_GET["id"];
	
	$yorumlar		=mysql_query("select * from yorumlar where haberid='$id' and ydurum='1' limit $goster,$limit");
		while($y=mysql_fetch_assoc($yorumlar)){
		$adsoyad		=$y["adsoyad"];
		$tarih			=$y["ytarih"];
		$yorumu			=$y["yorumu"];
			echo '
										<div class="n_comment_box">
						<div class="n_comment clearfix">
							<img src="'.URL.TEMA_URL.'/photos/commentPhotos/yorum.png" alt="" />
							<div class="clearfix">
								<h5>'.$adsoyad.'</h5>
								<span class="n_color">'.$tarih.'</span>
								<p>'.$yorumu.'</p>
								
							</div>
						</div>
				
					</div>
			';
		}

}
#####################Yorum Listeleme Kısmı###########################

#####################Arama Kısmı Aranan Kelime###########################
Function arama(){
global $goster;
global $limit;
		$aranan	=$_POST["arama"];
		$ara	= mysql_query("SELECT * FROM haberler WHERE hbaslik LIKE '%".$aranan."%' limit $goster,$limit");
			while ($s= mysql_fetch_array($ara)) { 
				$arandi	=$s["hbaslik"];
				$icerik	=$s["hkisa"];
			
				echo '	<div>			<h5><a href="#">'.$arandi.'</a></h5>
						<div>'.$icerik.'</div>
						</div>
					';
				}
				
			
}
#####################Arama Kısmı Aranan Kelime###########################

#####################Kategori Galeri ###########################
Function galeriresimler($getiket){
global $goster;
global $limit;
$galid	=$_GET["id"];

		$mysqlcek	=mysql_query("select * from galeriresim where galustid='$galid' limit $goster,$limit");
			while($e=mysql_fetch_assoc($mysqlcek)){
				$gresim			=$e["galerifoto"];
				$gbaslik		=$e["galeriaciklama"];
				$gresim			=str_replace("../","",$gresim);
				$katcek	=mysql_fetch_assoc(mysql_query("select * from galeri where gid='$galid'"));
	
				echo '<div class="met_carousel_column n_classic_column n_gallery_column">
						<div class="n_cat_list_image">
					<a href="'.$gresim.'"  class="highslide" onclick="return hs.expand(this)" ><img src="'.$gresim.'"  style="width:300px;height:200px;"/></a>  
						</div>
						<a href="#" class="n_title_link"><h5 class="n_little_title">'.$gbaslik.'</h5></a>
						<b>'.$gad=$katcek["galeriad"].'</b>
					</div>';
				

			}
			
}
#####################Kategori Galeri ###########################

#####################Galeri Etiketleri listeleme###########################
Function galerietiket(){
$gid	=$_GET["id"];
			$etiketler			=mysql_query("select galerietiket,gid,galeriad from galeri where gid='$gid'");
			while($w=mysql_fetch_assoc($etiketler)){
				$etiket				=$w["galerietiket"];
				$idi				=$w["gid"];
				$title				=$w["galeriad"];
				$etiket				=explode(",",$etiket);
				foreach($etiket as $tametiket){
					echo '<a href="index.php?sayfa=galeri&id='.$idi.'" title="'.$title.'">'.$tametiket.'</a>';
				}
			}
}
#####################Galeri Etiketleri listeleme###########################

####################################################Galeri Kategoriler#########################################
Function galeri_kategoriler(){
	$gkategori		=mysql_query("select galeriad,gid from galeri where galeridurum='1'");
		while($q=mysql_fetch_assoc($gkategori)){
			$kat	=$q["galeriad"];
			$gid	=$q["gid"];
			echo '<li><a href="index.php?sayfa=galeri&id='.$gid.'">'.$kat.' <i class="icon-angle-right"></i></a></li>';
		}


}
####################################################Galeri Kategoriler#########################################

#####################Galeri Slider alanı############################
Function galerislider($buyuk,$kucuk){
$katid		=$_GET["id"];
		$habercek	=mysql_query("select * from galeriresim where galustid='$katid' order by grid desc limit 0,10");
			while($a=mysql_fetch_assoc($habercek)){
				$haberbaslik	=$a["galeriaciklama"];
				$mansetresim	=$a["galerifoto"];
				$mansetresim	=str_replace("../","",$mansetresim);
				$habid			=$a["grid"];
				if($buyuk==1){
					echo'<img src="'.$mansetresim.'" style="width:770;height:449px;" alt="'.$haberbaslik.'" data-href="index.php?sayfa=galeri&id='.$habid.'" />';
				}
				if($kucuk==1){
				echo '<img src="'.$mansetresim.'" />';
				}
			}

}
#####################Galeri Slider alanı###########################

#####################Sabit Sayfalar Kısmı############################
Function sabitsayfalar($sbaslik,$sicerik,$key){
$id		=$_GET["id"];

$sayfacek		=mysql_fetch_assoc(mysql_query("select * from sayfalar where sid='$id'"));
			$sayfabaslik	    =$sayfacek["sayfabaslik"];
			$sayfaicerik	=stripslashes($sayfacek["sayfaicerik"]);
			$sayfakey		=$sayfacek["sayfakey"];
			if($sbaslik==1){
				echo "<h2>".$sayfabaslik."</h2>";
			}
			
			if($sicerik==1){
				echo "<p><br>".$sayfaicerik."</p>";
			}
			if($key==1){

				$etiket				=explode(",",$sayfakey);
				foreach($etiket as $tametiket){
					echo '<a href="index.php?sayfa=haberoku&id='.$idi.'" title="'.$title.'">'.$tametiket.'</a>';
				}
			}


}
#####################Sabit Sayfalar Kısmı###########################

?>