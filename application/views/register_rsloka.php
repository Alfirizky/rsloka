<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<title>Halaman Registrasi</title>
</head>
<body>
	
	<div class="container" style="margin-top: 60px;">
		<h3 class="text-center" style="margin-bottom: 30px;">Halaman Registrasi</h3>
		<form action="<?php echo base_url()?>rsloka/registrasi" method="post">
			<div class="form-group row">
				<div class="col-md-3"></div>
				<div class="col-md-2" style="margin-left:30px;">
					<label class="col-form-label">Nama</label>
				</div>
				<div class="col-md-4">			
					<input class="form-control" type="text" name="nama" autocomplete="off">
				</div>
			</div>
			<div class="form-group row">
				<div class="col-md-3"></div>
				<div class="col-md-2" style="margin-left:30px;">
					<label class="col-form-label">Email</label>
				</div>
				<div class="col-md-4">			
					<input class="form-control" type="email" name="email" autocomplete="off">
				</div>
			</div>
			<div class="form-group row">
				<div class="col-md-3"></div>
				<div class="col-md-2" style="margin-left:30px;">
					<label class="col-form-label">Username</label>
				</div>
				<div class="col-md-4">			
					<input class="form-control" type="text" name="username" autocomplete="off">
				</div>
			</div>
			<div class="form-group row">
				<div class="col-md-3"></div>
				<div class="col-md-2" style="margin-left:30px;">
					<label class="col-form-label">Password</label>
				</div>
				<div class="col-md-4">			
					<input class="form-control" type="password" name="password">
				</div>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-8" style="margin-left: 30px;">
					<label>Jenis Kelamin</label>
				</div>
				<div class="col-md-3"></div>
				<div class="col-md-2" style="margin-left: 50px; margin-top: 5px; margin-bottom: 30px;">			
					<input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki">
					<label class="form-check-label">Laki-laki</label>
				</div>
				<div class="col-md-1" style="margin-top: 5px; margin-bottom: 30px;">			
					<input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
					<label class="form-check-label">Perempuan</label>
				</div>
			</div>
			<center>
				<button class="btn btn-success" type="submit" style="margin-right: 30px;">Daftar</button>
				<a class="btn btn-primary text-light" data-toggle="modal" data-target="#Login" style="margin-left: 30px;">Login</a>
			</center>
		</form>
	</div>

</body>
</html>