					<nav class="n_main_menu pull-left">
						<a href="#" class="n_menu_home pull-left"><i class="icon-home icon-large"></i></a>
						<ul class="pull-left">
							<?php
								$sql_kategori=mysql_query("SELECT * FROM haberkategori order by id ASC");
								$kategori_list=array();
								$i=0;
								while($row_kategori=mysql_fetch_object($sql_kategori)){
								
									$kategori_list[$i]['id']=$row_kategori->id;
									$kategori_list[$i]['haberkatad']=$row_kategori->haberkatad;
									$kategori_list[$i]['ustkategori']=$row_kategori->ustkategori;
									$i++;
									
								}
									echo  ustmenuler($kategori_list);
							?>
						</ul><!-- Head menu search form ends -->
						<div class="pull-right n_bgcolor n_menu_search_wrapper">
							<form class="n_menu_search" method="post" action="index.php?sayfa=arama">
								<input type="text" name="arama" class="n_menu_search_text" required placeholder="Haber Ara">
								<div class="n_menu_search_submit"></div>
							</form>
						</div><!-- In menu search form ends -->
					</nav>

					<nav class="n_sub_menu pull-left">
						<ul class="n_sub_menu_items n_bgcolor pull-left">
							<li>
								<a href="#">VIDEOLAR</a>
								<div>
									<img src="<?php echo videomenu(0,1,0);?>" width="210" height="303"/>
									<ul>
										
									<?php echo videomenu(0,0,1);?>
				
									</ul>
								</div>
							</li>
							<li>
								<a href="#">FOTOĞRAFLAR</a>
								<div>
								<img src="<?php echo galerimenu(0,1,0);?>" width="210" height="303"/>
									<ul>
										
									<?php echo galerimenu(0,0,1);?>
				
									</ul>
								</div>
							</li>
	
						</ul><!-- Bottom Menu Ends -->
						
						<ul class="n_under_menu_misc">
							<?php
								//sabit modüller aktiflik pasiflik
								$md	=mysql_fetch_assoc(mysql_query("select durum,modulyeri from modul where mid='6' order by msira asc"));
									$moduldur	=$md["modulyeri"];
								if($moduldur==5){
								?>
							<li><span class="n_block">Dollar:&nbsp;&nbsp;  </span><span class="n_block n_up"></span>  <span class="n_block">&nbsp;&nbsp;  <?php echo "&nbsp;&nbsp;".dovizkuru(1,0,0);?></span></li>
							<li><span class="n_block">Euro:&nbsp;&nbsp;  </span><span class="n_block n_down"></span>  <span class="n_block">&nbsp;&nbsp;  <?php echo "&nbsp;&nbsp;".dovizkuru(0,1,0);?></span></li>
							<li><span class="n_block">Sterlin:&nbsp;&nbsp;  </span><span class="n_block n_down"></span>  <span class="n_block">&nbsp;&nbsp;  <?php echo "&nbsp;&nbsp;".dovizkuru(0,0,1);?></span></li>
							<?php } ?>
							<li><?php echo reklamlar(2);?></li>
							
						</ul>
								
					</nav>
			<hr class="n_main_menuyeni"></hr>
			<div class="row-fluid carousel_block">
				<div class="span12">
					<div class="n_news_cat_list clearfix" style="width:700px;">
						
				
						<div class="met_carousel_wrap">
							<div class="met_carousel clearfix">
								<?php echo sondakikahaber();?>
							</div>
						</div>
						
					</div>
					
				</div>
					
			</div><!-- REKLAMLAR -->
				<div style="float:right;margin-top:-272px;"><?php echo reklamlar(9);?></div>
							
			<hr class="n_main_menuyeni"></hr>
				</div>
			</div>

		</div>

		<div class="n_top_line n_bgcolor"></div>

	</header><!-- Header Ends --><div class="n_content clearfix">
	<div class="row-fluid">
		<div class="row-fluid">

	<div class="span8">