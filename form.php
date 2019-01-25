<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
    <form action="proses.php" method="post">
        <table align="center">
            <tr bgcolor="lightgreen">
                <td colspan="3" align="center"><h2>Selamat Belanja!</h2></td>
            </tr>
            <tr>
                <td>Daftar Barang</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="barang[]" value="AGV K3SV Rp. 3.000.000">AGV K3SV Rp. 3.000.000<br>
                    <input type="checkbox" name="barang[]" value="AGV K5 Rp. 5.000.000">AGV K5 Rp. 5.000.000<br>
                    <input type="checkbox" name="barang[]" value="AGV Corsa R Rp. 8.000.000">AGV Corsa R Rp. 8.000.000<br>
                    <input type="checkbox" name="barang[]" value="AGV Pista GPR Rp. 16.000.000">AGV Pista GPR Rp. 16.000.000
                </td>
            </tr>
            <tr>
                <td>Jenis Pengiriman</td>
                <td>:</td>
                <td>
                    <input type="radio" name="pengiriman" value="JNE Reguler">JNE Reguler
                    <input type="radio" name="pengiriman" value="JNE YES">JNE YES
                    <input type="radio" name="pengiriman" value="JNE OKE">JNE OKE
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <input type="hidden" name="tanggal" value="<?php echo date("Y/m/d"); ?>">
                <td colspan="3" align="center"><input type="submit" value="Beli"></td>
            </tr>
        </table>
    </form>
</body>
</html>