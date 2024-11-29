<?php

$data_mahasiswa = [
	[1, "D212111002","Cahya Julianti"],
	[2, "D212111003","Dasimah Seftiani"],
	[3, "D212111004","Desi Syifa Fitria"],
	[4, "D212111012","Puspa Dewi Kusumawati"],
	[5, "D212111025","Aspiya Huwaida"],
	[6, "D212111026","Aura Maliya"],
	[7, "D212111028","Fanisa Tri Agna Fata"],
	[8, "D212111029","Ineu Rahmawati"],
	[9, "D212111030", "Muhammad Reza A"],
	[10, "D212111035","Zaltin"]
];

echo"<table border='1' cellspacing='0'>";
echo"<tr>
		<th>NO</th>
		<th>NIM</th>
		<th>NAMA</th>
	</tr>";

foreach ($data_mahasiswa as $dm) {
	echo"<tr>";
	echo"<td>".$dm[0]."</td>";
	echo"<td>".$dm[1]."</td>";
	echo"<td>".$dm[2]."</td>";
	echo"</tr>";
}

echo"</table>";
?>