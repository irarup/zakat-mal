<html>
	<head>
	  <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
		<title> Zakat Tabungan </title>
	</head>
	
<body>

<div class="judul">
	<h1 align="center">  Zakat Tabungan </h1>
	<br> 
</div>

<div class="container">
  <form action="zakat-tabungan.php" method="post">
			<div class="form-group">
				<label for="simpanan">Jumlah simpanan :</label>
				<div class="inpt input-group">
					<span class="input-group-addon" id="simpanan">Rp.  </span>
					<input type="number" class="form-control" id="simpanan" name="simpanan" aria-describedby="simpanan">
				</div>
			</div>

			<div class="form-group">
				<label for="nisab">Harga emas saat ini :</label>
				<div class="inpt input-group">
					<span class="input-group-addon" id="nisab">Rp.  </span>
					<input type="number" class="form-control" id="nisab" name="nisab" aria-describedby="nisab">
					<span class="input-group-addon" id="nisab">/gram  </span>
				</div>
			</div>
	  
		<div class="hit form-group">
			<input type="submit" class="btn_ btn btn-info" value="Hitung">
		</div>
	</form>		
</div>		
	
	

<div class="container">	
<?php
error_reporting (0);
$simpanan = $_POST[simpanan];
$nisab = $_POST[nisab];

$nisab_ = 85 * $nisab;

if (empty($simpanan) || empty($nisab)) {
	echo "<div class='alert alert-danger'>Jumlah simpanan dan harga emas <b>tidak boleh kosong</b> !! </div>";
}
elseif ($simpanan >= $nisab_) {
	$zakat = $simpanan * 2.5/100;
	echo "<div class='alert alert-info'> ZAKAT yang anda keluarkan sebesar <b>Rp. " . $zakat . ",- </b></div>
	<br> *ZAKAT dibayar jika telah mencapai nisab 85 Gram emas dan mencapai haul 1 tahun";
}
else {
	echo"<div class='alert alert-info'><b> Anda belum wajib mengeluarkan ZAKAT </b></div>
	<br>*Anda wajib bayar zakat jika jumlah tabungan mencapai nisab 85 Gram emas dan mencapai haul 1 tahun";
}

?>
</div>

</body>
</head>
</html>`