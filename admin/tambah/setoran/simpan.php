<?php
// detail identitas
$penyetor = $_POST['nip'];
$bulan = $_POST['bulan']."-01";
$tanggal = $_POST['tanggal'];
$admin = $_POST['admin'];

// sp
$spnominal = $_POST['sp-nominal'];
$spket = $_POST['sp-keterangan'];

// sw
$swnominal = $_POST['sw-nominal'];
$swket = $_POST['sw-keterangan'];

// tab
$tabnominal = $_POST['tab-nominal'];
$tabket = $_POST['tab-keterangan'];

// sr
$srnominal = $_POST['sr-nominal'];
$srket = $_POST['sr-keterangan'];

// usp
$pokokUSPNom = $_POST['usp-pokok-nominal'];
$pokokUSPKet = $_POST['usp-pokok-keterangan'];
$jasaUSPNom = $_POST['usp-jasa-nominal'];
$jasaUSPKet = $_POST['usp-jasa-keterangan'];

// bke
$pokokBKENom = $_POST['bke-pokok-nominal'];
$pokokBKEKet = $_POST['bke-pokok-keterangan'];
$jasaBKENom = $_POST['bke-jasa-nominal'];
$jasaBKEKet = $_POST['bke-jasa-keterangan'];

// ekstra
$pokokEkstraNom = $_POST['ekstra-pokok-nominal'];
$pokokEkstraKet = $_POST['ekstra-pokok-keterangan'];
$jasaEkstraNom = $_POST['ekstra-jasa-nominal'];
$jasaEkstraKet = $_POST['ekstra-jasa-keterangan'];

// toko
$pokokTokoNom = $_POST['toko-pokok-nominal'];
$pokokTokoKet = $_POST['toko-pokok-keterangan'];
$jasaTokoNom = $_POST['toko-jasa-nominal'];
$jasaTokoKet = $_POST['toko-jasa-keterangan'];

// haji
$pokokHajiNom = $_POST['haji-pokok-nominal'];
$pokokHajiKet = $_POST['haji-pokok-keterangan'];
$jasaHajiNom = $_POST['haji-jasa-nominal'];
$jasaHajiKet = $_POST['haji-jasa-keterangan'];

// arisan dan seragam
$arisanNominal = $_POST['arisan-nominal'];
$arisanKet = $_POST['arisan-keterangan'];
$seragamNominal = $_POST['seragam-nominal'];
$seragamKet = $_POST['seragam-keterangan'];

$jumlah = $_POST['jumlah-nominal'];

if($jumlah == null){
    ?>
    <script>alert('Data Kosong'); window.open('http://127.0.0.1:80/kpri/admin/tambah/setoran/', '_SELF');</script>
    <?php
} else {
    require_once('../../../config.php');
    $sql = "INSERT INTO transaksi (penyetor, bulan, jumlah, tanggal, admin) values (
        ".$penyetor.", '".$bulan."', ".$jumlah.", '".$tanggal."', ".$admin."
    )";
    $result = $con->query($sql);
    if(!$result) {
        ?>
            <script type="text/javascript">alert('Gagal menambah data.'); window.open('<?php echo $siteurl; ?>admin/tambah/setoran', '_SELF');</script>
        <?php
    } else {
        
        ?>
            <script type="text/javascript">alert('Berhasil menambah data.'); window.open('<?php echo $siteurl; ?>admin/', '_SELF');</script>
        <?php
    }
}
?>