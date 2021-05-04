<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 


				// 3.while & do while
	//while(syarat)

	$hewan = ['kambing','ayam', 'sapi', 'ikan'];

	$i = 0;

	while( $i < count($hewan) ){
		echo $hewan[$i]. "<br>";
		$i++;
	}

	do{
	 	echo $hewan[$i] . "<br>";
		$i++;		
	}while( $i < count($hewan));


	 ?>

</body>
</html>