<!DOCTYPE html>
<html>
<head>
	<title>Belajar array</title>
</head>
<body>

	<h1>Associative Array</h1>

	<?php 


				// Associative array
	// key => isi
	$data = array ("nama"   => "Bejo",
					"umur"  =>  20 ,
					"kerja" => "Ojek"
				);
	$data2 = array ("teman"    => "Bedu",
					"kegiatan" => "nganggur"
				);

	print_r($data);
echo "<br>";
	echo $data[nama];

	$data["nama"] = "Bejo subarjo"; //Contoh Cara untuk mengubah nilai pada array
echo "<br>";
	echo "Namanya adalah " . $data["nama"];

	 ?>

</body>
</html>