<div class="mediaWrapper row-fluid">
	<div class="span5 imginfo">
	<?php


				if ($_SESSION["kullanici"]==""){
					git("index.php",3);
					die ('<meta charset="utf-8" />hop nereye? Dön başa bakalım :)');
					
	
			}
		
			$resimal	=mysql_fetch_assoc(mysql_query("select * from galeriresim"));
				$resimi	=$resimal["galerifoto"];
	?>
    	<img src="<?php echo $resimi;?>" alt="" class="imgpreview img-polaroid" />
        <p style="margin-top: 10px;"><a href="" class="btn"><span class="icon-pencil"></span> Resim Düzenle</a></p>
        <p>
        	<strong>Filename:</strong> Image1.png <br />
        	<strong>File Type:</strong> image/png <br />
        	<strong>Upload Date:</strong> Dec 21, 2012 <br />
        	<strong>Resolution:</strong> 500x450 <br />
        	<strong>Uploaded by:</strong> <a href="">katniss</a>
        </p>
    </div><!--span3-->
    <div class="span7 imgdetails">
    	<p>
        	<label>Name:</label>
            <input type="text" class="input-block-level" value="Cat1.png" />
        </p>
        <p>
        	<label>Alt Text:</label>
            <input type="text" class="input-block-level" value="cat" />
        </p>
        <p>
        	<label>Description:</label>
            <textarea class="input-block-level"></textarea>
        </p>
        <p>
        	<label>Link URL:</label>
            <input type="text" class="input-block-level" value="http://themepixels.com/themes/demo/webpage/katniss/img/preview/image1.png" />
        </p>
        <br />
        <p>
        	<button class="btn btn-primary">Save Changes</button>
        </p>
    </div><!--span3-->
</div><!--imageWrapper-->
