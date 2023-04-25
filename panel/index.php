<?php

	#Kurumsal Firma Sitesi
	#Kodlama : Keykubad
	require_once("../ayar.php");
	require_once("fonksiyon.php");



?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Haber sitesi Yönetim Paneli</title>
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
</head>

<body class="loginbody">
<?php
if(empty($_SESSION["kullanici"])){

?>
<div class="loginwrapper">
	<div class="loginwrap zindex100 animate2 bounceInDown">
	<h1 class="logintitle"><span class="iconfa-lock"></span> Merhaba <span class="subtitle">Admin Paneline girmek için Lütfen bilgilerinizi yazınız</span></h1>
        <div class="loginwrapperinner">
            <form id="loginform" action="" method="post">
                <p class="animate4 bounceIn"><input type="text" id="username" name="username" placeholder="Username" /></p>
                <p class="animate5 bounceIn"><input type="password" id="password" name="password" placeholder="Password" /></p>
                <p class="animate6 bounceIn"><button class="btn btn-default btn-block">Gonder</button></p>
       
            </form>
			
<?php
}else{
git("ana.php","1");

} 
	if ($_POST){
		$kadi=$_POST["username"];
		$pass=md5($_POST["password"]);
		if(!$kadi || !$pass){
		echo '<div id="hata"><a>Hata :</a> Kullanıcı adı ve şifre boş olamaz!</div>';
		
		}else{
		$bak=mysql_query("select * from yonetici where adminad='$kadi' && adminsifre='$pass'");
			$kontrolet	=mysql_fetch_assoc($bak);
				if($kontrolet){
	
					$_SESSION["kullanici"]=$kadi;
					git("ana.php","1");
					
				
				}else{
				
				echo '<div id="hata"><a>Hata :</a> Kullanıcı adı veya şifre yanlış!</div>';
				
				}
			
		}
	
	
	}


?>
        </div><!--loginwrapperinner-->
    </div>
    <div class="loginshadow animate3 fadeInUp"></div>
</div><!--loginwrapper-->

<script type="text/javascript">
jQuery.noConflict();

jQuery(document).ready(function(){
	
	var anievent = (jQuery.browser.webkit)? 'webkitAnimationEnd' : 'animationend';
	jQuery('.loginwrap').bind(anievent,function(){
		jQuery(this).removeClass('animate2 bounceInDown');
	});
	
	jQuery('#username,#password').focus(function(){
		if(jQuery(this).hasClass('error')) jQuery(this).removeClass('error');
	});
	
	jQuery('#loginform button').click(function(){
		if(!jQuery.browser.msie) {
			if(jQuery('#username').val() == '' || jQuery('#password').val() == '') {
				if(jQuery('#username').val() == '') jQuery('#username').addClass('error'); else jQuery('#username').removeClass('error');
				if(jQuery('#password').val() == '') jQuery('#password').addClass('error'); else jQuery('#password').removeClass('error');
				jQuery('.loginwrap').addClass('animate0 wobble').bind(anievent,function(){
					jQuery(this).removeClass('animate0 wobble');
				});
			} else {
				jQuery('.loginwrapper').addClass('animate0 fadeOutUp').bind(anievent,function(){
					jQuery('#loginform').submit();
				});
			}
			return false;
		}
	});
});
</script>
</body>
</html>
