<html>
<?php require 'database.php';?>
<head>
 	<title>Rozpoczęcia doświadczenia</title>
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
		$idpowierzchnia = $_POST['powierzchnia'];
		$podpowierzchnia = $_POST['podpowierzchnia'];
		$idroslina = $_POST['roslina'];
		$idnawoz = $_POST['nawoz'];
		$rozmiar = $_POST['rozmiar'];

		$sql = "INSERT INTO podpowierzchnie VALUES ('', '" . $podpowierzchnia . "', '". $rozmiar . "', '" . $idpowierzchnia . "', '" . $idroslina . "', '" . $idnawoz . "')";

		if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}

?>
<h1>Pole zostało zasiane, kombajn nadjeżdża!</h1>
	

</body>
</html>