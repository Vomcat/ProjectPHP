<html>
<?php require 'database.php';?>
<head>
 	<title>Dodaj Laboranta</title>
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
		$laborant = $_POST['addlaborant'];
	

		$sql = "INSERT INTO laborant VALUES ('','" . $laborant . "')";

		if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}

?>

	

</body>
</html>