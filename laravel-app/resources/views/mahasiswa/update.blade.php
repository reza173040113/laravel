<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	</head>
	<body>
		<right><a href="/mahasiswa" class="btn btn-info"><< KEMBALI</a></right>
		<center><h1>UBAH DATA MAHASISWA</h1></center>
		<table class="table table-bordered">
			<form action="" method="post">
				<input type="hidden" name="id" value="{{$mahasiswa->id}}">
				<thead>
					<tr>
						<th>Nama</th>
						<th>:</th>
						<th><input type="text" name="kode" required id="kode" value="{{$mahasiswa->nama}}" /></th>
					</tr>
					<tr>
						<th>Nrp</th>
						<th>:</th>
						<th><input type="text" name="judul" required id="judul" value="{{$mahasiswa->nrp}}"/></th>
					</tr>
					<tr>
						<th>Email</th>
						<th>:</th>
						<th>
							<input type="text" name="genre" required id="genre" value="{{$mahasiswa->email}}"/>
						</th>
					</tr>
					<tr>
						<th>Jurusan</th>
						<th>:</th>
						<th>
							<input type="text" name="tahun_terbit" required id="tahun_terbit" value="{{$mahasiswa->jurusan}}}"/>
						</th>
					</tr>
					<tr>
						<th colspan="3"><center><input type="submit" value="UBAH DATA" /></center></th>
					</tr>
				</thead>
			</form>
		</table>
	</body>
</html>
