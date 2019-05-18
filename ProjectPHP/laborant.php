<html>
<?php require 'database.php';?>
<head>
 	<title>Laborant</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

	<div class="laborant">
		<h1>Panel Laboranta</h1>
			<form action="index.php">
		<button type="submit">Strona główna</button>
	</form>
		<form action="dodaj_wynik.php" method="POST" class="f_nadz_form">
			<label>Laborant</label>
			<select name="laborant">
				<option value="brak"></option>
				<?php 
					$sql = "SELECT * FROM laborant";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc())
					{
        				echo "<option value='" . $row["idl"] . "'>" . $row["nazwisko"]. "</option>";
					}
				?>
			</select>
			<label>Doświadczenie</label>
			<select name="doswiadczenie">
				<option value="brak"></option>
				<?php 
					$sql = "SELECT * FROM doswiadczenie";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc())
					{
        				echo "<option value='" . $row["idd"] . "'>" . $row["nazwa"]. "</option>";
					}
				?>
			</select>
			
			<label>Ilość roślin</label>
			<input type="text" name="ilosc_roslin">
			<button type="submit">Dodaj wynik</button>
		</form>
			

		
			


	</div>
<div class="doswww">
	<div class="wyniki_dos">
		<h1>Wyniki doświadczeń</h1>
		<?php include 'wyniki.php'; ?>
	</div>
	<div class="trw_dos">
		<h1>Trwające doświadczenia</h1>
		<?php include 'trwajace_doswiadczenia.php';?>
	</div>
</div>

</body>
</html>