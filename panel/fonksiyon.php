<?php
session_start();
#yonlendirme işlemi
function git($git,$sure){
	echo '<meta http-equiv="refresh" content="'.$sure.';URL='.$git.'">';
	
}
	#session olusturma yapıyoruz
function session($don){
	foreach($don as $anahtar => $deger){
	$_SESSION[$anahtar]=$deger;
	}
}

################uyarı bandı büyük####################
function uyari($uyari,$ufakuyari){
echo 			'<div class="alert alert-success">
                	<button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>'.$uyari.'</strong> '.$ufakuyari.'
                </div><!--alert-->';
}

################uyarı bandı hata####################
function hata($uyari,$ufakuyari){
echo 			'<div class="alert alert-error">
                	<button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>'.$uyari.'</strong> '.$ufakuyari.'
                </div><!--alert-->';
}


################Tema listesi çekme####################
function klasor_listele($dizin){
		$dizinAc = opendir($dizin) or die ("Dizin Bulunamadı!");
		while ($dosya = readdir($dizinAc)){
			if (is_dir($dizin."/".$dosya) && $dosya != '.' && $dosya != '..'){
				echo "<option ";
				echo $dosya == TEMA_DIR ? 'selected' : null;
				echo " value='{$dosya}'>{$dosya}</option>";
			}
		}
}


################Saat ay duzeltme#######################
function zaman($zaman){
			if($zaman<=9){
				echo "0".$zaman;
								
			}else{
				echo $zaman;
			}
		

}
?>