<?php 
$idsi		=$_GET["id"];
session_start();

// Güvenlik kodu için rastgele 2 sayı üretiliyor
    $sayi1 = rand(1,9);
    $sayi2 = rand(1,9);

// Bu sayıların toplamı alınıyor
    $toplam_sayi = $sayi1+$sayi2;

// Toplam sayı güvenlik kodu olarak sessiona atanıyor
    $_SESSION['koruma'] = "$toplam_sayi";
	
	if($_POST){
		$adsoyad		=$_POST["adsoyad"];
		$email			=$_POST["email"];
		$yorum			=$_POST["yorum"];
		$koruma			=$_POST["koruma"];
		if(($adsoyad=="") || ($email=="") || ($yorum=="") || ($koruma=="") ){
			echo "Lütfen Boş alanları doldurup tekrar deneyiniz!";
			exit();
		}else{
			 //Güvenlik kodu kontrol ediliyor
				if($_SESSION['koruma'] == $koruma) {
					echo '<center><span class="hata"><b>Hata:</b> Güvenlik kodunu hatalı girdiniz! Lütfen tekrar deneyiniz..</center> ';
				}else{
				
					$yorumekle	=mysql_query("insert into yorumlar (adsoyad,email,yorumu,ydurum,haberid) values ('$adsoyad','$email','$yorum','0','$idsi')");
						if($yorumekle){
							echo "Yorum başarıyla eklendi.";
						
						}else{
							echo "HATA Yorum eklenemedi..!";
						}
				
				}
		
		}
		
	}
	
?>



			<form method="post" action="" class="n_form n_post_comment">
				<h4>Haber Hakkında Yorum Yaz</h4>
				<input type="text" class="n_input n_input_long" name="adsoyad" placeholder="Adınız Soyadınız" required="" />
				<input type="text" class="n_input n_input_long" name="email" placeholder="Email adresiniz" required="" />
				<textarea class="n_textarea" name="yorum" placeholder="Yorumunuzu buraya yazınız..." required=""></textarea>
				Güvenlik kodu: <?php echo $sayi1;?> + <?php echo $sayi2;?><input type="text" class="n_input n_input_long" value="" name="koruma" required=""/>
				<input type="submit" class="n_button pull-right n_bgcolor" value="Gönder">
			</form>