<html>
<?php require 'database.php';?>
<head>
 	<title>Nadzorca</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

	<div class="nadzorca">
		<h1>Panel Nadzorcy</h1>
			<form action="index.php">
		<button type="submit">Strona główna</button>
	</form>
		<form action="dodaj_laboranta.php" method="POST" class="f_nadz_form">
			<label>Dodaj laboranta</label>
			<input type="text" name="addlaborant">
			<button type="submit">Dodaj</button>
		</form>

		<form action="zasiej.php" method="POST" class="nadz_form">
			<label>Powierzchnia</label>
			<select name="powierzchnia">
				<option value="brak"></option>
				<?php 
					$sql = "SELECT * FROM powierzchnie";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc())
					{
        				echo "<option value='" . $row["idp"] . "'>" . $row["powierzchnia"]. "</option>";
					}
				?>
			</select> 
			<label>Podpowierzchnia: </label>
			<select name="podpowierzchnia">
				<option value="brak"></option>
				<option value="Podpowierzchnia 1">Podpowierzchnia 1</option>
				<option value="Podpowierzchnia 2">Podpowierzchnia 2</option>
				<option value="Podpowierzchnia 3">Podpowierzchnia 3</option>
				<option value="Podpowierzchnia 4">Podpowierzchnia 4</option>
			</select>
			<label>Roślina</label>
			<select name="roslina">
				<option value="brak"></option>
				<?php 
					$sql = "SELECT * FROM rosliny";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc())
					{
        				echo "<option value='" . $row["idr"] . "'>" . $row["roslina"]. "</option>";
					}
				?>
			</select>
			<label>Nawóz</label>
			<select name="nawoz">
				<option value="brak"></option>
				<?php 
					$sql = "SELECT * FROM nawozy";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc())
					{
        				echo "<option value='" . $row["idn"] . "'>" . $row["nawoz"]. "</option>";
					}
				?>
			</select>
			<label>Rozmiar obszaru(m<sib>2</sib>)</label>
			<input type="text" name="rozmiar">

			<button type="submit">Zasiej</button>
		</form>

		<form action="doswiadczenie.php" method="POST" class="nadz_form">
			<label>Nazwa doświadczenia</label>
			<input type="text" name="nazwa_doswiadczenia">
			<label>Podpowerzchnia</label>
			<select name="podpowierzchnia">
				<option value="brak"></option>
				<?php 
					$sql = "SELECT * FROM podpowierzchnie";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc())
					{
        				echo "<option value='" . $row["idpp"] . "'>" . $row["podpowierzchnia"]. "</option>";
					}
				?>
			</select>
			<button type="submit">Rozpocznij doświadczenie</button>


		</form>

		<form action="z_doswiadczenie.php" method="POST" class="nadz_form">
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
			<button type="submit">Zakończ doświadczenie</button>
		</form>
	</div>


<div class="doswww">
	<div class="trw_dos">
		<h1>Trwające doświadczenia</h1>
		<?php include 'trwajace_doswiadczenia.php';?>
	</div>
	<div class="wyniki_dos">
		<h1>Wyniki doświadczeń</h1>
		<?php include 'wyniki.php'; ?>
	</div>
	<div class="hist_dos">
		<h1>Historia doświadczeń</h1>
		<?php include 'historia_doswiadczen.php';?>
	</div>
</div>

				
</body>
</html>