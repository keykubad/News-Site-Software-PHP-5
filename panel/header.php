<?php

	if ($_SESSION["kullanici"]==""){
		git("index.php",3);
		die ('<meta charset="utf-8" />hop nereye? Dön başa bakalım :)');
		
	
	}


?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Haber Yönetim Paneli</title>
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<link rel="stylesheet" href="prettify/prettify.css" type="text/css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.js"></script>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>

<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="prettify/prettify.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/jquery.flot.min.js"></script>
<script type="text/javascript" src="js/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="js/charCount.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/media.js"></script>
<script type="text/javascript" src="js/ui.spinner.min.js"></script>
<script type="text/javascript" src="js/bootstrap-fileupload.min.js"></script>
<script type="text/javascript" src="js/chosen.jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/tinymce/jquery.tinymce.js"></script>
<script type="text/javascript" src="js/wysiwyg.js"></script>
<script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
</head>

<body>

<div class="mainwrapper">
	
    <!-- START OF LEFT PANEL -->
    <div class="leftpanel">
    	
        <div class="logopanel">
        	<h1><a href="ana.php">Haber <span>Yazılımı</span></a></h1>
        </div><!--logopanel-->
        
        <div class="datewidget">Bugün <?php echo date("d-m-Y  H:i:s");?></div>
    
 
        

        
        <div class="leftmenu">        
            <ul class="nav nav-tabs nav-stacked">
            	<li class="nav-header">ANA MENÜ</li>
                <li class="dropdown"><a href="#"><span class="icon-briefcase"></span> Ayarlar</a>
                	<ul>
                    	<li><a href="ana.php?git=genelayar">Genel ayarlar</a></li>
                        <li><a href="ana.php?git=seoayar">Seo ayarları</a></li>
                    </ul>
                </li>
                
                <li class="dropdown"><a href="#"><span class="icon-pencil"></span> Haberler</a>
                	<ul>
                    	<li><a href="ana.php?git=haberkategori">Haber kategorisi ekle</a></li>
                        <li><a href="ana.php?git=haberkategoriduzen">Haber kategorisi düzenle</a></li>
						<li><a href="ana.php?git=haberekle">Haber Ekle</a></li>
						<li><a href="ana.php?git=haberduzen">Haber Düzenle</a></li>
                    </ul>
                </li>
				<li class="dropdown"><a href="#"><span class="icon-text-height"></span> Köşe Yazıları</a>
                	<ul>
                    	<li><a href="ana.php?git=koseyazariekle">Köşe yazarı ekle</a></li>
                        <li><a href="ana.php?git=koseyazarduzen">Köşe yazarı düzenle</a></li>
						<li><a href="ana.php?git=koseyazisiekle">Köşe yazısı ekle</a></li>
						<li><a href="ana.php?git=koseyaziduzen">Köşe yazısı düzenle</a></li>
                    </ul>
                </li>
				<li class="dropdown"><a href="#"><span class="icon-signal"></span> Anketler</a>
                	<ul>
                    	<li><a href="ana.php?git=anketekle">Anket Ekle</a></li>
						<li><a href="ana.php?git=anketduzen">Anket Duzenle</a></li>
                    
                    </ul>
                </li>
               	<li class="dropdown"><a href="#"><span class="icon-play"></span> Videolar</a>
                	<ul>
                <li><a href="ana.php?git=videogaleriekle">Video Galeri Ekle</a></li>
				<li><a href="ana.php?git=videogaleriduzen">Video Galeri Düzenle</a></li>
				<li><a href="ana.php?git=videoekle">Video Ekle</a></li>
				<li><a href="ana.php?git=videoduzen">Video Düzenle</a></li>
					</ul>
                </li>
		 	<li class="dropdown"><a href="#"><span class="icon-picture"></span> Galeri</a>
                	<ul>
                <li><a href="ana.php?git=galeriekle">Galeri Ekle</a></li>
				<li><a href="ana.php?git=galeriduzen">Galeri Düzenle</a></li>
				<li><a href="ana.php?git=galeriresim">Galeri Resim Ekle</a></li>
				<li><a href="ana.php?git=galeriresimduzen">Galeri Resim Düzenle</a></li>
      </ul>
                </li>
						 	<li class="dropdown"><a href="#"><span class="icon-book"></span> Sayfalar</a>
                	<ul>
                <li><a href="ana.php?git=sayfaekle">Sayfa Ekle</a></li>
				<li><a href="ana.php?git=sayfaduzen">Sayfa Düzenle</a></li>
      </ul>
                </li>
<li><a href="ana.php?git=yorumlar"><span class="icon-comment"></span> Yorumlar</a>
		<li><a href="ana.php?git=analiz"><span class="icon-indent-left"></span> Analiz Ayarları</a>	</li>	
			<li class="dropdown"><a href="#"><span class="icon-file"></span> İlan Modülü</a>	
			<ul>
			<li><a href="ana.php?git=ilanlar">İlan Ekle</a></li>
			<li><a href="ana.php?git=ilanduzen">İlanları Düzenle</a></li>
			
			</ul>
			
			</li>	
			<li class="dropdown"><a href="#"><span class="icon-th-list"></span>Modüller</a>	
			<ul>
			<li><a href="ana.php?git=moduller">Modül Ekle</a></li>
			<li><a href="ana.php?git=modulduzen">Modülleri Düzenle</a></li>
			
			</ul>
			
			</li>
			<li class="dropdown"><a href="#"><span class="icon-globe"></span>Reklamlar</a>	
			<ul>
			<li><a href="ana.php?git=reklamlar">Reklam Ekle</a></li>
			<li><a href="ana.php?git=reklamduzen">Reklam Düzenle</a></li>
			
			</ul>
			<li class="dropdown"><a href="#"><span class="icon-folder-open"></span>Gazete Sayfaları</a>	
			<ul>
			<li><a href="ana.php?git=gazete">Gazete Sayısı Ekle</a></li>
			<li><a href="ana.php?git=gazetesayi">Gazete İçerikleri Ekle</a></li>
			<li><a href="ana.php?git=gazeteduzen">Gazete Düzenle</a></li>
			
			</ul>
			
			</li>			
				
        </div><!--leftmenu-->
        
    </div><!--mainleft-->
    <!-- END OF LEFT PANEL -->
    
    <!-- START OF RIGHT PANEL -->
    <div class="rightpanel">
    	<div class="headerpanel">
        	<a href="" class="showmenu"></a>
            
            <div class="headerright">
            	<div class="dropdown notification">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="/page.html">
                    	<span class="iconsweets-globe iconsweets-white"></span>
                    </a>
                    <ul class="dropdown-menu">
                    	<li class="nav-header">Notifications</li>
                        <li>
                        	<a href="">
                        	<strong>3 people viewed your profile</strong><br />
                            <img src="img/thumbs/thumb1.png" alt="" />
                            <img src="img/thumbs/thumb2.png" alt="" />
                            <img src="img/thumbs/thumb3.png" alt="" />
                            </a>
                        </li>
                        <li><a href=""><span class="icon-envelope"></span> New message from <strong>Jack</strong> <small class="muted"> - 19 hours ago</small></a></li>
                        <li><a href=""><span class="icon-envelope"></span> New message from <strong>Daniel</strong> <small class="muted"> - 2 days ago</small></a></li>
                        <li><a href=""><span class="icon-user"></span> <strong>Bruce</strong> is now following you <small class="muted"> - 2 days ago</small></a></li>
                        <li class="viewmore"><a href="">View More Notifications</a></li>
                    </ul>
                </div><!--dropdown-->
                
    			<div class="dropdown userinfo">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="/page.html">Merhaba, <?php echo $_SESSION["kullanici"];?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="editprofile.html"><span class="icon-edit"></span> Edit Profile</a></li>
                        <li><a href=""><span class="icon-wrench"></span> Account Settings</a></li>
                        <li><a href=""><span class="icon-eye-open"></span> Privacy Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="ana.php?git=cikis"><span class="icon-off"></span> Çıkış Yap</a></li>
                    </ul>
                </div><!--dropdown-->
    		
            </div><!--headerright-->
            
    	</div><!--headerpanel-->
		
		<?php
		
		?>