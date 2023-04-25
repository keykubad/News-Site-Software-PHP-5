	
<div class="mediaWrapper row-fluid">
	<div class="span5 imginfo">
		
	<?php

				if ($_SESSION["kullanici"]==""){
					git("index.php",3);
					die ('<meta charset="utf-8" />hop nereye? Dön başa bakalım :)');
					
	
			}
			$idgit	=$_GET["id"];
			$resimal	=mysql_fetch_assoc(mysql_query("select * from gazete where gazid='$idgit'"));
				$resimi		=$resimal["gazeteresim"];
			$isid		=$resimal["gazid"];
	
				

	?>

    	<img src="<?php echo $resimi;?>" alt="" class="imgpreview img-polaroid" />
  

    </div><!--span3-->
<form method="post" action="ana.php?git=cekgazete&id=<?php echo $idgit;?>" enctype="multipart/form-data">
    <div class="span7 imgdetails">
	
      

<input type="hidden" class="uniform-file" name="gresim" />
		<p>
                            <label>Galeri Resim Güncelle<small>1MB'dan büyük resim yüklenemez</small></label>
							
                            <span class="field">
                            	<input type="file" class="uniform-file" name="resim" />
                            </span>
                        </p>
        <br />
        <p>
        	<button class="btn btn-primary">Güncelle</button>
        </p>
		</form>
		    </div><!--span3-->
</div><!--imageWrapper-->

	
		

