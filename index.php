<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="img/icon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/reset.css" type="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<title>Ленопак v2.0</title>
</head>
<body>
	<div class="wrapper">

		<header>
			<div class="HeaderText">
				<h1 class="Welcome">Добро <br> пожаловать <br> </h1>
				<h1 class="Welcome" style="text-align: left;">в</h1>
				<h1 class="Logo"> Ленопак </h1>
				<h3 style="text-align: right; color:#a4a5a6; margin-right:0%">v 2.0</h3>
			</div>
		</header>

		<div class="Description">
			<h2 class="DescriptionText">Сайт с изображениями любимой Леночки</h2>
		</div>

		<div class="clearfix mosaicflow" data-min-item-width="220">
	 		<?php 
	 			$dir = "img/Lena"; 				
   				$filelist = scandir($dir);
    			foreach ($filelist as $filename)
    			{
    				if($filename != "." && $filename != "..")
        			{
        				/*
        				<div class='mosaicflow__item'> 
        					<a href="%dir/$filename" target="_blank">
        						<img src="$dir/$filename"></a>
        					</a>
						</div>
        				*/
        				echo "<div class='mosaicflow__item'> 
        					<a href='";
        				echo $dir;
   						echo "/";
        				echo $filename;
        				echo "' ";
        				echo "target=_blank> <img src='";
   						echo $dir;
   						echo "/";
   						echo $filename;

   						echo"'>";
   						echo "</a>";
   						echo "</div>\n\r";
   					}
   				}
   			?>
		</div>
	</div>
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="jquery.mosaicflow.min.js"></script>
</html>
