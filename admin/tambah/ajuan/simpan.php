<?php
session_start();
require("../../../config.php");
// info dasar
$admin = $_SESSION['nip'];
$nip = $_POST['nip'];
$tanggal = date("Y-m-d");
$jenis = $_POST['jenis'];
$jumlah = $_POST['jumlah'];
$tempo = $_POST['tempo'];
$penghasilan = $_POST['penghasilan'];
$diangsur = 1;
$status = 5;

$sql = 'INSERT INTO `ajuan`(`peminjam`, `tanggal`, `jenis`, `jumlah`, `diangsur`, `mulai`, `penghasilan`, `slip`, `status`, `admin`) VALUES ('.$nip.',"'.$tanggal.'",'.$jenis.','.$jumlah.','.$diangsur.',"'.$tanggal.'",'.$penghasilan.',"null",'.$status.','.$admin.')';

try{
require("../../../config.php");
$con->query($sql);
?>
<script>alert('Berhasil menyimpan data.');window.open('<?php echo $siteurl; ?>admin/tambah/pinjaman/', '_SELF');</script>
<?php
} catch (Error $e) {
?>
<script>alert('Gagal menambah data!');window.open('<?php echo $siteurl; ?>admin/tambah/pinjaman/', '_SELF');</script>
<?php
}
?>