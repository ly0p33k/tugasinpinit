<?php

include_once "conn.php";

$nim = $_GET[0];

$del = mysqli_query($conn, "DELETE from mahasiswa_ilkom WHERE nim='$nim'");

if ($del) {
echo "<script>alert('data berhasil dihapus');
document.location.href='tampil.php'</script>\n";
} else {
echo "<script>alert('data gagal dihapus');
document.location.href='peserta.php'</script>\n";
}
?>