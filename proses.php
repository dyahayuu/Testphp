<?php
session_start();

$user = $_SESSION["user"];
$barang = $_POST["barang"];
$pengiriman = $_POST["pengiriman"];
$alamat = $_POST["alamat"];
$tglbeli = $_POST["tanggal"];
$harga = 0;
$hargakirim = 0;

for ($i=0;$i<count($barang);$i++) { 
    if ($barang[$i] == "AGV K3SV Rp. 3.000.000")
        $harga += 3000000;
    else if ($barang[$i] == "AGV K5 Rp. 5.000.000") 
        $harga += 5000000;
    else if ($barang[$i] == "AGV Corsa R Rp. 8.000.000")
        $harga += 8000000;
    else if ($barang[$i] == "AGV Pista GPR Rp. 16.000.000")
        $harga += 16000000;
}

if($pengiriman == "JNE Reguler")
    $hargakirim = 10000;
if($pengiriman == "JNE YES")
    $hargakirim = 15000;
if($pengiriman == "JNE OKE")
    $hargakirim = 20000;

function total($a, $b) {
    return $a + $b;
}
?>
<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
    <table align="center">
        <tr>
            <td colspan="3" align="center" bgcolor="lightgreen"><h2>Daftar Belanjaan Anda</h2></td>
        </tr>
        <tr>
            <td>Tanggal Submit</td>
            <td>:</td>
            <td><?php echo $tglbeli; ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $user["nama"]; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $alamat; ?></td>
        </tr>
        <tr>
            <td>Barang yang dibeli</td>
            <td>:</td>
            <td>
                <?php
                foreach ($barang as $barang_b) {
                    echo $barang_b . "<br>";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Pengiriman</td>
            <td>:</td>
            <td><?php echo $pengiriman . " " . $hargakirim; ?></td>
        </tr>
        <tr>
            <td>Total</td>
            <td>:</td>
            <td><?php echo total($harga, $hargakirim); ?></td>
        </tr>
    </table>
</body>
</html>