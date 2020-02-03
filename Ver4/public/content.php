<div class="ImageC">
	<!--<img class="ImgC" id="" src="./gpx/mex3.jpg" alt="Arlice Skills">-->
	<?php 
		//echo "B: ".$_POST['B']."<br>";
		if(isset($_POST['B'])) {
		   $_POST['page']=$_POST['B'];
		}else{
			$_POST['page']=1;
		}
		include('../private/php/createPageCont.php'); 
	?>	
</div>