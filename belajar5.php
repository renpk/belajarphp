<!DOCTYPE html>
<html>
<head>
	<title>Belajar Tipe data angka PHP</title>
</head>
<body>

	<h1>Operator aritmatik</h1>
	
	<?php 

	$angka = 20
	$angka2 = 5,7
	$angka3 = 10

// round (membulatkan angka) ,rand (Mengacak angka)(min, max),max min(mengeluarkan angka yg terkecil/terbesar)
	echo round ($angka2);
echo "<br>";	
	echo "Angka hari ini adalah ". rand  (1, 10);
echo "<br>";
	echo "Angka yg lebih kecil adalah ". min ([6 ,7 ,8, 4, 5]) ; 
	echo " dan yang terbesar ". max(8, 9, 15, 1, 5);
	

	 ?>

</body>
</html>