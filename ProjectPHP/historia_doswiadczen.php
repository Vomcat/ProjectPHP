<?php 

$sql = "SELECT DISTINCT d.idd, d.nazwa, d.data_rozpoczecia, pp.podpowierzchnia, pp.rozmiar, p.powierzchnia, r.roslina, n.nawoz
						FROM doswiadczenie d
						LEFT JOIN podpowierzchnie pp ON (pp.idpp = d.podpowierzchnia)
						LEFT JOIN powierzchnie p ON (p.idp = pp.idp)
						LEFT JOIN rosliny r ON (r.idr = pp.idr)
						LEFT JOIN nawozy n ON (n.idn = pp.idn)
						WHERE d.status=0";
$result = $conn->query($sql);
?>

<div class="divTable">
<div class="divTableBody">
<div class="divTableRow">
<div class="divTableCellHead">Nazwa doświadczenia</div>
<div class="divTableCellHead">Data rozpoczęcia</div>
<div class="divTableCellHead">Powierchnia</div>
<div class="divTableCellHead">Podpowierzchnia</div>
<div class="divTableCellHead">Rozmiar</div>
<div class="divTableCellHead">Roślina</div>
<div class="divTableCellHead">Nawóz</div>
</div>
<?php
while($row = $result->fetch_assoc())
{
	echo '<div class="divTableRow"><div class="divTableCell">' . $row["nazwa"] . '</div><div class="divTableCell">' . $row["data_rozpoczecia"] . '</div><div class="divTableCell">' . $row["powierzchnia"] . '</div><div class="divTableCell">' . $row["podpowierzchnia"] . '</div><div class="divTableCell">' . $row["rozmiar"] . ' m<sib>2</sib></div><div class="divTableCell">' . $row["roslina"] . '</div><div class="divTableCell">' . $row["nawoz"] . '</div></div>';
}
?>

</div>
</div>

