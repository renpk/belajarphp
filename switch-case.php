<!DOCTYPE html>
<html>
<head>
	<title>Belajar Switch Case</title>
</head>
<body>

	<h1>Switch case</h1>

	<?php 

	//switch case (case = nilai yg mau dites)

	$benda = 'Meja';

	switch ($benda) {
		case 'kursi':
			echo "apakah ini kursi";
			break;
		case 'Meja':
			echo "apakah ini Meja";
			break;
		case 'buku':
			echo "apakah ini buku";
			break;		
		
		default:
			echo "Semua itu salah";
			break;
	}
	
	 ?>

</body>
</html>