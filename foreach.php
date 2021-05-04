<!DOCTYPE html>
<html>
<head>
	<title>Belajar foreach</title>
</head>
<body>

	<h1>Foreach</h1>

<?php 

			// 2.foreach artinya untuk setiap list
	$hewan = ['kambing','ayam', 'sapi', 'ikan'];

	foreach($hewan as $h)
	{
		echo "------------";
		echo $h;
		echo "------------<br>";	
	}



 ?>


</body>
</html>