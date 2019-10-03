<html>
	<head>
	 <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
		<title> Zakat Fitrah </title>
	</head>
	
<body bgcolor="#66FF66">
<div class="judul">
	<h1 align="center">  Zakat Fitrah  </h1>
<br> 
</div>

<div class="container">
<p> <b> Perhitungan Zakat Fitrah dengan Menggunakan Uang </b> </p>
</div>

<div class="container">
  <form action="zakat-fitrah.php" method="post">
      <div class="form-group">
        <label for="jumlah">Jumlah Anggota Keluarga :</label>
        <div class="inpt input-group">
           <input type="number" class="form-control" id="jumlah" name="jumlah" aria-describedby="modal_">
           </div>
      </div>
	  
    <div class="form-group">
        <label for="harga">Harga Beras :</label>
        <div class="inpt input-group">
          <span class="input-group-addon" id="harga">Rp. </span>
          <input type="number" class="form-control" id="harga" name="harga" aria-describedby="modal_">
          <span class="input-group-addon" id="harga">/Kg </span>
        </div>
      </div>
				
		<div class="hit form-group">
    <input type="submit" class="btn_ btn btn-info" value="Hitung">
    </div>
	
		</form>

<?php
error_reporting (0);
$jumlah = $_POST[jumlah];
$harga = $_POST[harga];

$hasil = $jumlah * ($harga * 2.7);

if(empty($jumlah) || empty($harga)){
  echo "<div class='alert alert-danger'>Jumlah keluarga dan harga beras <b>tidak boleh kosong</b> !! </div>";
}else{
  echo "<div class='alert alert-info'>ZAKAT yang anda keluarkan sebesar <b>Rp. "  . $hasil . ",-</b>
      <br> Atau <b>" . $jumlah * 2.7 . " Kilogram </b> Beras </div>" ; 

}

?>


</div>

</body>
</head>
</html>