<!DOCTYPE html>
<html>
<head>
<title>Form Pendaftaran Anggota</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2>Form Pendaftaran Anggota BEM Politeknik Kampar</h2>
    <form action="simpan-pendaftaran.php" method="post">
        <div class="form-group">
            <label>Nim:</label>
            <input type="text" name="Nim" class="form-control" placeholder="Masukan Nim" />
        </div>
		<div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" />
        </div>
		<div class="form-group">
			<label>Alamat:</label>
			<textarea name="alamat" class="form-control" rows="5"placeholder="Masukan Alamat" ></textarea>
		</div> 
		<div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Masukan Email" />
        </div>
		<div class="form-group">
            <label>No HP:</label>
            <input type="text" name="no_hp" class="form-control" placeholder="Masukan No HP" />
        </div>
		<div class="form-group">
            <label>Jurusan:</label>
            <input type="text" name="jurusan" class="form-control" placeholder="Masukan jurusan" />
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
</body>
</html>