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
		$nazwa_doswiadczenia = $_POST['nazwa_doswiadczenia'];
		$idpodpowierzchnia = $_POST['podpowierzchnia'];
		$data = date("Y-m-d H:i");
		$status = 1;

		$sql = "INSERT INTO doswiadczenie VALUES ('', '" . $nazwa_doswiadczenia . "', " . $idpodpowierzchnia . ", '" . $data . "', " . $status . ")";

		if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}

?>
	

</body>
</html>