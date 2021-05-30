<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$nim=$_POST["nim"];
$nama=$_POST["nama"];
$alamat=$_POST["alamat"];
$email=$_POST["email"];
$no_hp=$_POST["no_hp"];
$jurusan=$_POST["jurusan"];


//Query input menginput data kedalam tabel anggota
  $sql="insert into anggota (nim,nama,alamat,email,no_hp,jurusan) values
		('$nim','$nama','$alamat','$email','$no_hp','$jurusan')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($kon,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Berhasil simpan data anggota";
	exit;
  }
else {
	echo "Gagal simpan data anggota";
	exit;
}  

?>