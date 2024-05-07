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
	$target_dir = "upload/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 0;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".<br>\n";
					
			$success=copy($_FILES["fileToUpload"]["tmp_name"], "$target_file");
			if($success){
				echo "$target_file upload ok<br>\n";
				$uploadOk = 1;
				list($width, $height, $type, $attr) = getimagesize($target_file);
				echo "宽度为：" . $width;
				echo "高度为：" . $height;
				echo "类型为：" . $type;
				echo "属性：" . $attr;
			}else
				echo "$target_file upload fail<br>\n";
			
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
	}
	
	if($uploadOk==1){
		echo "<form action='Show' method=post>";
		echo "<input type=hidden name=img value='$target_file'>\n";		
		if($width>=$height){
			echo "<input type=radio value='w1' name=frame><img src='w1.png' width='80%' /><input type=submit value=OK /><br>\n";
			echo "<input type=radio value='w2' name=frame><img src='w2.png' width='80%' /><input type=submit value=OK /><br>\n";
			echo "<input type=radio value='w3' name=frame><img src='w3.png' width='80%' /><input type=submit value=OK /><br>\n";
			echo "<input type=radio value='w4' name=frame><img src='w4.png' width='80%' /><input type=submit value=OK /><br>\n";
		}else{
			echo "<input type=radio value='l1' name=frame><img src='l1.png'><br>\n";
			echo "<input type=radio value='l2' name=frame><img src='l2.png'><br>\n";						
		}				
		echo "</form>";
	}
?>	
		
<?php
	
	
?>
</body>
</html>
