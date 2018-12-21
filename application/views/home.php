<!DOCTYPE html>
<html>
	<head>
		<title>BELAJAR BOOTSRAP</title>
		
		<!-- link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" -->

		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url ("assets/vendor/Bootstrap v4.1.1/css/bootstrap.min.css") ?>">
		
	</head>
	<body>
		
		<!--Bagian Header -->
		<header>
			<center>
			<a name="logo">
				<img src="<?php echo base_url ("assets/img/css3.jpg"); ?>" width="200px" height="200px" alt="gambar css">
			</a>
			<h1>CSS 3</h1>
			</center>
			<br>
		</header>
		<hr class="panjang" id="panjang">
		<nav>
			<table class="container" id="css-border">
				<div class="row">
				<tr>
					<th>
						<a href="#panjang-garis" class="btn btn-primary btn-lg btn-block" role="button">Form</a>
					</th>
					<th>
						<a href="#panjang-garis-bawah" class="btn btn-primary btn-lg btn-block" role="button">Tabel</a>
					</th>
				</tr>
			</div>
			</table>
		</nav>
		<hr class="panjang-garis" id="panjang-garis">
		<a name="panjang-garis">
		</a>
		
		<!-- Bagian Form -->
		<main class="container">
			<section id="sec-form">
				<h1>FORM</h1>
				<form method="post" action="home.php" id="form-daftar">
					<table class="form-group">
						<tr>
							<td><label for="input-nama">Nama</label></td>
							<td>:</td>
							<td><input type="text" class="form-control" id="input-nama" name="input-nama"></td>
						</tr>
						<tr>
							<td><label for="input-email">Email</label></td>
							<td>:</td>
							<td><input type="email" class="form-control"  id="input-email" aria-describedby="emailHelp" name="input-nama"></td>
						</tr>
						<tr>
							<td><label for="input-password">Password</label></td>
							<td>:</td>
							<td>
								<div class="row no-gutters">
									<div class="col-md-7">
										<input type="Password" id="input-password" name="input-password" class="form-control">
									</div>
								</div>
							</td>
						</tr>
					</table>
					<br>
					<button class="btn btn-primary btn-lg" type="submit" id="btn-simpan">Simpan</button>
					<button class="btn btn-warning btn-lg" type="reset" id="btn-reset">Reset</button>
				</form>
				<br>
			</section>
			<hr class="panjang-garis-bawah" id="panjang-garis-bawah">
			<a name="panjang-garis-bawah">
			</a>
			
			<!-- Isi Tabel-->
			<section id="sec-form">
				<h1>TABEL</h1>
				<table class="table">
					<thead class="bg-dark text-light">
						<tr>
							<th class="text-center" scope="col">NO</th>
							<th class="text-center" scope="col">NAMA</th>
							<th class="text-center" scope="col">JENIS</th>
							<th class="text-center" scope="col">QTY</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="font-weight-bold text-center">1</td>
							<td class="Kemeja-Topten">Kemeja Topten</td>
							<td class="Atasan">Atasan</td>
							<td class="text-right">3</td>
						</tr>
						<tr>
							<td class="font-weight-bold text-center">2</td>
							<td class="syal">Syal</td>
							<td class="Aksesoris">Aksesoris</td>
							<td class="text-right">11</td>
						</tr>
						<tr>
							<td class="font-weight-bold text-center">3</td>
							<td class="Celana-jeans">Celana Jeans</td>
							<td class="Bawahan">Bawahan</td>
							<td class="text-right">7</td>
						</tr>
					</tbody>
				</table>
			</section>
		</main>
		<hr class="panjang-garis-footer" id="panjang-garis-footer">
		
		<!-- Isi Footer -->
		<footer class="footer container bg-secondary text-white">
			Baruna, 15 Desember 2018 &copy; Baruna IT
		</footer>
		<!-- Javascript -->
		<script src="<?php echo base_url ("assets/vendor/jQuery 3.3.1/jquery.min.js") ?>"></script>
		<!-- Jquery -->
		<script src="<?php echo base_url ("assets/vendor/Bootstrap v4.1.1/js/bootstrap.bundle.min.js") ?>"></script>
	</body>
</html>