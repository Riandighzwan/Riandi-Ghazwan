<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Website Galeri Foto</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="index.php">Website Galeri Foto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
      <div class="navbar-nav me-auto">
       
      </div>
      <a href="register.php" class="btn btn-outline-primary m-1">Daftar</a>
      <a href="login.php" class="btn btn-outline-success m-1">Masuk</a>
    </div>
  </div>
</nav>

<div class="container py-5">
	<div class="row justify-content-center">
		<div class="col-md-4">
			<div class="card">
				<dic class="card-body bg-light">
					<div class="text-center">
						<h5>Daftar akun</h5>
					</div>
					<form action="config/aksi_register.php" method="POST">
						<label class="form-label">Username</label>
						<input type="text" name="username" class="form-control" required>
						<label class="form-label">Password</label>
						<input type="password" name="password" class="form-control" required>
						<div class="d-grid mt-2">
                        <label class="form-label">email</label>
						<input type="email" name="email" class="form-control" required>
                        <label class="form-label">nama lengkap</label>
						<input type="text" name="namalengkap" class="form-control" required>
                        <label class="form-label">alamat</label>
						<input type="text" name="alamat" class="form-control" required>
							<button class="btn btn-primary" type="submit" name="kirim">daftar</button>
						</div>
					</form>
					<hr>
					<p>Sudah Punya Akun?? <a href="login.php">Masuk Disini!!</a></p>
				</dic>	
			</div>
		</div>
	</div>
</div>

<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
<p>&copy;Jevan Panjaitan </p>
</footer>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>