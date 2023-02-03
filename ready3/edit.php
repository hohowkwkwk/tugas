<?php

include("koneksii.php");


if( !isset($_GET['id_barang']) ){
    header('Location: tampil.php');
}



$id = $_GET['id_barang'];
$sql = "SELECT * FROM tb_barang WHERE id_barang=$id";
$query = mysqli_query($db, $sql);
$tb_barang = mysqli_fetch_assoc($query);


if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
<html>
   <head>
   </head>
   <body>
       <center>
       <h1>Edit</h1>
       <form action="proses-edit.php" method="POST">
       <input type="hidden" name="id_barang" value="<?php echo $tb_barang['id_barang']?>" />
    <label for="nama_karyawan">Nama karyawan :</label>
    <input type="text" name="nama_karyawan">
<br>
<br>
    <td><label for="nama_barang">Nama barang  :</label></td>
    <td><input type="text" name="nama_barang"></td>
<br>
<br>
    <td><label for="divisi">Divisi :</label></td>
    <td><input type="text" name="divisi"></td>
<br>
<br>
    <td><label for="jabatan">Jabatan :</label></td>
    <td><input text="text" name="jabatan"></td>
<br>
<br>
    <td><label for="kategori_barang">Kategori barang :</label></td>
    <td><input type="text" name="kategori_barang"></td>
<br>
<br>

<td><input type="submit" name="edit" value="edit"></td>

</center>

</form>
</body>
</html>  