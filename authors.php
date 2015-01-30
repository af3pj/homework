<html>

<head>

	<title>Dead Victorians</title>

</head>

<body>

	<h3>Dulce et Decorum Est</h3>
<p>

<?php 

$authors = array(
	'Charles Dickens',
	'William Thackeray',
	'Anthony Trollope',
	'Gerard Manley Hopkins'
	);

$years = array(
	'1870'
	'1863'
	'1882'
	'1889'
	);

foreach($years as $year) {
	echo $year;

}

foreach ($authors as $code => $author) {
	echo "$code died in $year";

}


?>

</p>

</body>

</html>