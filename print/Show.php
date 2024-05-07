<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7"/>
	<META content="text/html; charset=utf-8" http-equiv="Content-Type"/>  	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Photo Frame</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			background-color: #f0f0f0;
		}
		.photo-frame {
			position: relative;
			max-width: 80%; /* 調整圖片最大寬度 */
		}
		.photo-frame img {
			display: block;
			max-width: 100%;
			/* height: auto; 自動調整圖片高度 */
		}
		.photo-frame .frame {
			position: absolute;
			top: 0;
			left: 0;
		}
	</style>	
</head>
<body>		
<?php
	$img=$_POST['img'];
	$frame=$_POST['frame'];
	echo "img is $img<br>\n";
	echo "frame is $frame<br>\n";	
?>	
		
<?php
	
	
?>
</body>
</html>
