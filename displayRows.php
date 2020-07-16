<?php
	$database = new PDO('mysql:host=s1.kts.tu-bryansk.ru;dbname=IAS18_MuzES','IAS18.MuzES','E!n7aN8-6s');
	
	$table = $database->query('SELECT * FROM Product');

	while($row = $table->fetch(PDO::FETCH_ASSOC)) 
	{
		echo "<tr><td>". $row['Name'] . "</td><td>" . $row['Description'] . "</td><td>" . $row['ExpirationDate']  . 
			"</td><td>" . $row['NetWeight'] . "</td><td>" . $row['GrossWeight'] . "</td><td>" . 
			(float)$row['PurchasePrice'] . "</td><td><a href=deleteRow.php?IdRow=" . $row['Id'] . ">Удалить запись</a></td></tr>";    
	}
?>