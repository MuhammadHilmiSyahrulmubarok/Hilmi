
<?php
include "koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($koneksi, "insert into barang set  
kode_barang = '$_POST[kode_barang]',
nama_barang = '$_POST[nama_barang]',
harga_barang = '$_POST[harga_barang]'");

echo "Data barang baru telah tersimpan";

}

?>

