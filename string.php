<!DOCTYPE html>
<html>
<head>
	<title>Belajar string</title>
</head>
<body>

	<h1>String method</h1>

<?php 

			// String method
		// strlen && str_word_count
		// str_replace(find,replace,string)
		// str_repeat(text, times); str_shuffle(text)
	$text = "Halo semuanya";
	echo strlen($text);
echo "<br>";
	echo str_word_count($text);
echo "<br>";
	echo str_replace("Halo", "Hai" ,$text);
echo "<br>";
	echo str_repeat("Hai ", 10);
echo "<br>";
	$teks = str_repeat("Hai ", 10);
	echo strlen($teks);

 ?>

</body>
</html>