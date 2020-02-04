<nav class="Menu">
	<?php 
		//Sets the page internal id (Clare.element.pageCode) being used. 1->Administrator User Options.
		if(isset($_POST['B'])) {
		   $_POST['page']=$_POST['B'];
		}else{
			$_POST['page']=1;
		}
		include('../private/php/createPageNav.php'); //Get page navigation elements and construct the page navigation bar
	?>	
</nav>