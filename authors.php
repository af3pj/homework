<html>

<head>

	<title>Dead Victorians</title>

</head>

<body>

	<h3>Dulce et Decorum Est</h3>
<ul>

<?php 

$authors = array(
	"1870" => "Charles Dickens",
	"1863" => "William Thackeray",
	"1882" => "Anthony Trollope",
	"1889" => "Gerard Manley Hopkins"
	);


foreach ($authors as $year => $author) {
	echo "$author died in $year.<br>";

}


?>

</ul>

</body>

</html>