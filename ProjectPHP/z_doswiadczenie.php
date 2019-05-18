<html>
<?php require 'database.php';?>
<head>
 	<title>Zakończenie doświadczenia</title>
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
		$iddoswiadczenia = $_POST['z_doswiadczenie'];
		$status = 0;

		$sql = "UPDATE doswiadczenie SET status = '" . $status . "' WHERE idd = " . $iddoswiadczenia . "";

		if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}

?>
	

</body>
</html>