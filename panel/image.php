	
<div class="mediaWrapper row-fluid">
	<div class="span5 imginfo">
		
	<?php

				if ($_SESSION["kullanici"]==""){
					git("index.php",3);
					die ('<meta charset="utf-8" />hop nereye? Dön başa bakalım :)');
					
	
			}
			$idgit	=$_GET["id"];
			$resimal	=mysql_fetch_assoc(mysql_query("select * from galeriresim where grid='$idgit'"));
				$resimi		=$resimal["galerifoto"];
				$aciklama	=$resimal["galeriaciklama"];
				$gustidi	=$resimal["galustid"];
				$grid		=$resimal["grid"];
				

	?>

    	<img src="<?php echo $resimi;?>" alt="" class="imgpreview img-polaroid" />
  

    </div><!--span3-->
<form method="post" action="ana.php?git=cek&id=<?php echo $idgit;?>" enctype="multipart/form-data">
    <div class="span7 imgdetails">
	
               <p>
                                <label>Üst Galeri</label>
                                <span class="field"><select name="ustgaleri" id="selection2" class="uniformselect">
								<option value="0" selected>Hiçbiri</option>
								<?php
										$gal	=mysql_query("select * from galeri");
											while($d=mysql_fetch_assoc($gal)){
												$vidi	=$d["gid"];
												$vidbas	=$d["galeriad"];
								?>
								<option value="<?php echo $vidi;?>" <?php if($vidi==$gustidi){echo "selected";}?>><?php echo $vidbas;?></option>
								<?php 
								}
								?>
								  </select></span>
						</p> 

        <p>
        	<label>Açıklama:</label>
            <textarea class="input-block-level" name="aciklama"><?php echo $aciklama;?></textarea>
        </p>
		<p>
                            <label>Galeri Resim Güncelle<small>1MB'dan büyük resim yüklenemez</small></label>
							
                            <span class="field">
                            	<input type="file" class="uniform-file" name="galeriresim" />
                            </span>
                        </p>
        <br />
        <p>
        	<button class="btn btn-primary">Güncelle</button>
        </p>
		</form>
		    </div><!--span3-->
</div><!--imageWrapper-->

	
		

