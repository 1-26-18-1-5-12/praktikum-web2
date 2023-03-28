<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   $_kode = $_POST['kode'];
   $_nama = $_POST['nama'];
   $_jk = $_POST['jk'];
   $_tmp_lahir = $_POST['stok'];
   $_minstok = $_POST['min_stok'];
   $_jenis = $_POST['jenis'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_kode; // ? 1
   $ar_data[]=$_nama; // ? 2
   $ar_data[]=$_jk;// 3
   $ar_data[]= 1.2 * $_jk;
   $ar_data[]=$_tmp_lahir;
   $ar_data[]=$_minstok;
   $ar_data[]=$_jenis; // ? 7

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO produk (kode,nama,jk,harga_jual,stok,
    min_stok,jenis_produk_id) VALUES (?,?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE produk SET kode=?,nama=?,jk=?,harga_jual=?,
    stok=?,min_stok=?,jenis_produk_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:list_produk.php');
?>