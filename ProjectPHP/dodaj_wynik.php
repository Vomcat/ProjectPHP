<html>
<?php require 'database.php';?>
<head>
 	<title>Dodanie wyniku</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<?php

	if(empty($_POST))
	{
		echo 'Nie można rozpocząć doświadczenia.';
	}
	else
	{
		$idlaborant = $_POST['laborant'];
		$iddoswiadczenie = $_POST['doswiadczenie'];
		$ilosc_roslin = $_POST['ilosc_roslin'];
		$data = date("Y-m-d H:i");

		$sql = "INSERT INTO wyniki VALUES ('', '" . $iddoswiadczenie . "', " . $ilosc_roslin . ", '" . $data . "', " . $idlaborant . ")";

		if (mysqli_query($conn, $sql)) {
			echo "Wynik dodano";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}

?>
	

</body>
</html>