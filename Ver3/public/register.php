<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./css/exam.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="Banner">
		<img class="Logo" id="Logo1" src="./gpx/UoS.png" alt="Arlice Skills">
		<span class="ExamName">Arlice</span>
	</div>
	<div class="Nav">
		<div class="Reference">
			<div class="BTitle">Reference #</div>
			dsv3423
		</div>
		<div class="Timer">
			<div class="BTitle">Timer</div>
			200 sec
		</div>
		<div class="Foward">-></div>
		<div class="Back"><-</div>
		<div class="Help">?</div>
	</div>
	<div class="ImageC" style="overflow: auto;">
		<?php 
			//echo "B: ".$_GET['B']."<br>";
			if(isset($_GET['B'])) {
			   $_GET['page']=$_GET['B'];
			}else{
				$_GET['page']=1;
			}
			include('registerE.html'); 
		?>	
	</div>
	<div class="Scenario">
		<div class="BTitle">Close </div>
		Is this a button?
	</div>
</body>