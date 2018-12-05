<!DOCTYPE html>
<html lang="eng">
<head>
	<title>CRUD</title>
	<meta charset="utf-8">
</head>
<body>
	<button><a href="logout.php">Logout</a></button>
	<center><table border="1" cellspacing="0">
		<thead>
			<th>Nim</th>
			<th>Nama</th>
			<th>Umur</th>
			<th>Tempat Lahir</th>
			<th>IPK</th>
			<th>Aksi</th>
		</thead>
		<tbody>

<?php
include_once "conn.php";

$result=mysqli_query($conn, "SELECT * FROM mahasiswa_ilkom");

while ($row=mysqli_fetch_row($result)) { ?>
	<tr>
	<td><?php echo "$row[0]"; ?></td>
	<td><?php echo "$row[1]"; ?></td>
	<td><?php echo "$row[2]"; ?></td>
	<td><?php echo "$row[3]"; ?></td>
	<td><?php echo "$row[4]"; ?></td>
	<td><a href="edit_peserta.php?id_siswa=<?php echo $data['id_siswa'];?>" >edit</a>|<a href="delete.php?0=<?php echo $row[0];?>" onClick = "return confirm('Apakah Anda ingin mengapus  <?php echo $row[0]; ?>?')" >hapus</a></td>
	<?php } ?>
	</tr>
	</tbody>
	</table></center>
</body>
</html>