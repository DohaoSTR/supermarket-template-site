<?php
	$database = new PDO('mysql:host=s1.kts.tu-bryansk.ru;dbname=IAS18_MuzES','IAS18.MuzES','E!n7aN8-6s');
	
	$database->exec("DELETE FROM Product WHERE Id = '$_GET[IdRow]'; ");
	
	header("location:ProductsPage.html");
?>