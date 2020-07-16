<?php 
	$database = new PDO('mysql:host=s1.kts.tu-bryansk.ru;dbname=IAS18_MuzES','IAS18.MuzES','E!n7aN8-6s');

	$database->exec("INSERT INTO Product (Name, Description, ExpirationDate, NetWeight, GrossWeight, PurchasePrice) 
    VALUES ('$_POST[Name]','$_POST[Description]','$_POST[ExpirationDate]','$_POST[NetWeight]','$_POST[GrossWeight]','$_POST[PurchasePrice]');");

	header("location:ProductsPage.html");
 ?>