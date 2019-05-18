<?php 

$sql = "SELECT DISTINCT d.nazwa, w.data_pomiaru, w.ilosc_roslin, l.nazwisko, pp.podpowierzchnia, pp.rozmiar, p.powierzchnia, r.roslina, n.nawoz
						FROM wyniki w
						LEFT JOIN doswiadczenie d ON (d.idd=w.idd)
						LEFT JOIN podpowierzchnie pp ON (d.podpowierzchnia=pp.idpp)
						LEFT JOIN powierzchnie p ON (pp.idp=p.idp)
						LEFT JOIN rosliny r ON (r.idr=pp.idr)
						LEFT JOIN nawozy n ON (n.idn=pp.idn)
						LEFT JOIN laborant l ON (l.idl=w.laborant)";
$result = $conn->query($sql);
?>

<div class="divTable">
<div class="divTableBody">
<div class="divTableRow">
<div class="divTableCellHead">Laborant</div>
<div class="divTableCellHead">Nazwa doświadczenia</div>
<div class="divTableCellHead">Data pomiaru</div>
<div class="divTableCellHead">Ilość roślin</div>
<div class="divTableCellHead">Powierchnia</div>
<div class="divTableCellHead">Podpowierzchnia</div>
<div class="divTableCellHead">Rozmiar podpowierzchni</div>
<div class="divTableCellHead">Roślina</div>
<div class="divTableCellHead">Nawóz</div>
</div>
<?php
while($row = $result->fetch_assoc())
{
	echo '<div class="divTableRow"><div class="divTableCell">' . $row["nazwisko"] . '</div><div class="divTableCell">' . $row["nazwa"] . '</div><div class="divTableCell">' . $row["data_pomiaru"] . '</div><div class="divTableCell">' . $row["ilosc_roslin"] . '</div><div class="divTableCell">' . $row["powierzchnia"] . '</div><div class="divTableCell">' . $row["podpowierzchnia"] . '</div><div class="divTableCell">' . $row["rozmiar"] . ' m<sib>2</sib></div><div class="divTableCell">' . $row["roslina"] . '</div><div class="divTableCell">' . $row["nawoz"] . '</div></div>';
}
?>

</div>
</div>





