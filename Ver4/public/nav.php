<nav class="Menu">
	<?php 
		//echo "B: ".$_POST['B']."<br>";
		if(isset($_POST['B'])) {
		   $_POST['page']=$_POST['B'];
		}else{
			$_POST['page']=1;
		}
		include('../private/php/createPageNav.php'); 
	?>	
</nav>