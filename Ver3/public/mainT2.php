<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/exam.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="Banner">
		<img class="Logo" id="Logo1" src="./gpx/UoS.png" alt="Arlice Skills">
		<span class="ExamName">Arlice</span>
	</div>
	<nav class="Menu">
		<?php 
			//echo "B: ".$_POST['B']."<br>";
			if(isset($_POST['B'])) {
			   $_POST['page']=$_POST['B'];
			}else{
				$_POST['page']=1;
			}
			include('createPageNav.php'); 
		?>	
	</nav>
	<div class="ImageC">
		<!--<img class="ImgC" id="" src="./gpx/mex3.jpg" alt="Arlice Skills">-->
		<?php 
			//echo "B: ".$_POST['B']."<br>";
			if(isset($_POST['B'])) {
			   $_POST['page']=$_POST['B'];
			}else{
				$_POST['page']=1;
			}
			include('createPageCont.php'); 
		?>	
	</div>
</body>