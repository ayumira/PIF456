<html>
<head><title>Export & Import</title></head>
<body>
<?php
 //menggunakan class phpExcelReader
 include "excel_reader2.php";
 
//koneksi ke db mysql
 mysql_connect("localhost","root","");
 mysql_select_db("mysql");
 
//membaca file excel yang diupload
 $data = new Spreadsheet_Excel_Reader($_FILES['userfile']['tmp_name']);
 //membaca jumlah baris dari data excel
 $baris = $data->rowcount($sheet_index=0);
 
//nilai awal counter jumlah data yang sukses dan yang gagal diimport
 $sukses = 0;
 $gagal = 0;
 
//import data excel dari baris kedua, karena baris pertama adalah nama kolom
 for ($i=2; $i<=$baris; $i++) {
 $nim = $data->val($i,1);
 $nama = $data->val($i,2);
 $alamat = $data->val($i,3);
 $alamat = $data->val($i,4);
 
//setelah data dibaca, sisipkan ke dalam tabel pegawai
 $query = "INSERT INTO mahasiswa values ('$nim','$nama','$alamat')";
 $hasil = mysql_query($query);
 
//menambah counter jika berhasil atau gagal
 if($hasil) $sukses++;
 else $gagal++;
 
}
 //tampilkan report hasil import
 echo "<h3>Import Data Mahasiswa Selesai</h3>";
 echo "<p>Jumlah data yang sukses diimport : ".$sukses."<br>";
 echo "Jumlah data gagal import : ".$gagal."<p>";
 
?>
<form method="post" enctype="multipart/form-data" action="indexdd.php">
Hasil <br/>
<input name="upload" type="submit" value="unduh">
</body>
</html>