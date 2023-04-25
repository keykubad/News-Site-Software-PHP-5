


<?php



	if ($_SESSION["kullanici"]==""){
		git("index.php",3);
		die ('<meta charset="utf-8" />hop nereye? Dön başa bakalım :)');
		
	
	}


	require "analytics.class.php";
					$cekayar		=	mysql_query("select * from analiz where anid='1'");
						while($al	=	mysql_fetch_assoc($cekayar)){
								$kadim	=$al["analizadi"];
								$ansifre=$al["analizsifre"];
								$anprof	=$al["analizprof"];
						
						}

	try {
	
		$analytics = new analytics($kadim, $ansifre);
		$analytics->useCache();
		
		# Profil id'sini ayarlayalım
		$analytics->setProfileById('ga:'.$anprof.'');
		
		# Tarih Aralığını Belirtelim
		$analytics->setMonth(date("m"), date("Y"));
		
		# Tekil ve Çoğul Hitleri Alalım
		$tekil = $analytics->getVisitors();
		$cogul = $analytics->getPageviews();
	
	} catch (Exception $hata){
		echo "Hata: ".$hata->getMessage();
	}

?>


 



	<!--Sayac-->
<div class="breadcrumbwidget">
        	<ul class="skins">
                <li><a href="default" class="skin-color default"></a></li>
                <li><a href="orange" class="skin-color orange"></a></li>
                <li><a href="dark" class="skin-color dark"></a></li>
                <li>&nbsp;</li>
                <li class="fixed"><a href="" class="skin-layout fixed"></a></li>
                <li class="wide"><a href="" class="skin-layout wide"></a></li>
            </ul><!--skins-->
        	<ul class="breadcrumb">
                <li><a href="ana.php">Anasayfa</a> <span class="divider">/</span></li>
                <li class="active">Karşılama</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Açıklama</h1> <span>Bu bölümde sitenizle ilgili özet bilgileri görüntüleyebilir, son eklediğiniz içerikleri görüntüleyebilirsiniz. </span>
        </div><!--pagetitle-->

        <div class="maincontent">
        	<div class="contentinner content-dashboard">
            	<div class="alert alert-info">
                	<button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Hoşgeldiniz!</strong>  İstatistiksel Bilgileriniz aşağıdadır.
                </div><!--alert-->
                
                <div class="row-fluid">
                	<div class="span8">
                         	<ul class="widgeticons row-fluid">
                        	<li class="one_fifth"><a href="ana.php?git=haberekle"><span><img class="" alt="" src="img/gemicon/edit.png"></img>Haber Ekle</span></a></li>
							<li class="one_fifth"><a href="ana.php?git=videogaleriekle"><span><img class="" alt="" src="img/gemicon/notify.png"></img>Video Galeri</span></a></li>
							<li class="one_fifth"><a href="ana.php?git=anketekle"><span><img class="" alt="" src="img/gemicon/reports.png"></img>Anket Ekle</span></a></li>
                           <li class="one_fifth"><a href="ana.php?git=anketekle"><span><img class="" alt="" src="img/gemicon/image.png"></img>Galeri Ekle</span></a></li>
						   <li class="one_fifth"><a href="ana.php?git=yorumlar"><span><img class="" alt="" src="img/gemicon/users.png"></img>Yorumlar</span></a></li>
						  
		
                        </ul>
                        
  
                        <div class="widgetcontent">
                    	<h4 class="widgettitle">Real Time Chart</h4>
                 <div id="container" style="max-width: 700px; height: 400px; margin: 0 auto"></div>      
                        
                    </div>
                        
                        
                    </div><!--span8-->
                    <div class="span4">
                                   <h4 class="widgettitle">İstatistikler</h4>
                        <div class="widgetcontent">
                        	<div id="accordion" class="accordion">
                                    <h3><a href="#">Yorumlar</a></h3>
                                    <div>
                                        <p>
                                    Sitemizde Toplam <strong>68</strong> onaylanmış yorum var
                                        </p>
										      <p>
                                    Sitemizde Toplam <strong>2</strong> onaylanmamış yorum var
                                        </p>
                                    </div>
                                    <h3><a href="#">Donec et ante phasellus eu ligula</a></h3>
                                    <div>
                                        <p>
                                        Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                                        purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                                        velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                                        suscipit faucibus urna.
                                        </p>
                                    </div>
                                    <h3><a href="#">Quam ante aliquam nisi</a></h3>
                                    <div>
                                        <p>
                                        Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                                        Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                                        ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                                        lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                                        </p>
                                        <ul class="margin1020">
                                            <li>List item one</li>
                                            <li>List item two</li>
                                            <li>List item three</li>
                                        </ul>
                                    </div>
                                    <h3><a href="#">Pellentesque habitant morbi</a></h3>
                                    <div>
                                        <p>
                                        Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                                        et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                                        faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                                        mauris vel est.
                                        </p>
                                        <p>
                                        Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                        inceptos himenaeos.
                                        </p>
                        	       </div>
                        	</div><!--#accordion-->
                        </div><!--widgetcontent-->
                        
               
                        
                       <!--widgetcontent-->
                    </div><!--span4-->
                </div><!--row-fluid-->
            </div><!--contentinner-->
        </div><!--maincontent-->
        
    </div><!--mainright-->
    <!-- END OF RIGHT PANEL -->
    
    <div class="clearfix"></div>
