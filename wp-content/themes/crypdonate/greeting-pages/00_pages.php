<?php 

	$url = "http://localhost/CheekyWP/wp-content/themes/crypdonate";
	if( isset($_POST['page'])){
		echo "ddd";
		header("Location:".$url."/greeting-pages/02_specialty.php");
		exit;

	}
?>