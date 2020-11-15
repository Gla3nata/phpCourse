<?php

  $dir1 = "small"; 
  $dir2 = "big";
  

  $files1 = array_slice(scandir($dir1), 2);
  ?> 


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Галерея картинок</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
     </head>

<body>
<div id="main">
	<div class="post_title"><h2>Галерея картинок</h2></div>
	<div class="gallery">

<?php 
for ($i = 0; $i < count($files1); $i++) { ?>
  <a rel="gallery" class="photo" href="<?=$dir2."/".$files2[$i]?>" target="_blank"><img src="<?=$dir1."/".$files1[$i]?>" alt="" /></a>
<?php } ?>	
	</div>
</div>

</body>
</html>