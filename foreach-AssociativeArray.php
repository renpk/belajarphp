<!DOCTYPE html>
<html>
<head>
	<title>Belajar foreach</title>
</head>
<body>

	<h1>Foreach</h1>

<?php 

$data = [	'Nama  '  => 'Bedu', 
		    'Umur  '  =>  15, 
	   	    'Sifat '  => 'malas'];

	foreach($data as $key => $value)
	{
		echo $key . "<br>";
	}



 ?>


</body>
</html>