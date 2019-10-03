<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
  <title>Zakat Pertanian</title>
</head>
<body>
<div class="judul">
<h1>Zakat Pertanian</h1>
<br><br>
</div>
<div class="container">
  <form action="zakat-pertanian.php" method="post">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="hasil_tani">Hasil Tani :</label>
        <div class="inpt selectContainer">
            <select class="form-control" name="tani" onchange="run();">
                <option value="">Pilih Hasil Tani</option>
                <option value="gabah">Gabah</option>
                <option value="beras">Beras</option>
                <option value="beras">Makanan pokok lain</option>
                <option value="lain">Buah</option>
                <option value="lain">Sayur</option>
            </select>
        </div>
      </div>
      <div class="form-group">
        <label for="air">Jenis Pengairan :</label>
        <div class="inpt selectContainer">
            <select id="air" class="form-control" name="air">
                <option value="">Pilih cara Pengairan</option>
                <option value="disiram">Disiram</option>
                <option value="alam">Diairi secara alami</option>
            </select>
        </div>
      </div>
      <div class="form-group">
        <label for="jumlah">Jumlah hasil panen :</label>
        <div class="inpt input-group">
          <input type="number" class="form-control" id="jumlah" name="jumlah" aria-describedby="jumlah">
          <span class="input-group-addon" id="jumlah">Kg</span>
        </div>
      </div>
    </div>
    <div cal-md-6>
      <div class="form-group">
        <label for="harga_lain">Harga hasil panen anda :</label>
        <div class="inpt input-group">
            <span class="input-group-addon">Rp. </span>
            <input type="number" class="inpt form-control" id="harga_lain" name="harga_lain">
            <span class="input-group-addon">/Kg</span>
        </div>
      </div>
      <div class="form-group">
        <label for="harga">Harga makanan pokok saat ini :</label>
        <div class="inpt input-group">
         <span class="input-group-addon">Rp. </span>
          <input type="number" class="inpt form-control" id="harga" name="harga">
          <span class="input-group-addon">/Kg</span>
        </div>
      </div>
    </div>
  </div>

    <div class="hit form-group">
    <input type="submit" class="btn_ btn btn-info" name="hitung" value="Hitung">
    </div>
</form>
</div>

<?php
  error_reporting(0);

  $tani = $_POST[tani];
  $air = $_POST[air];
  $jumlah = $_POST[jumlah];
  $harga = $_POST[harga];
  $harga_lain = $_POST[harga_lain];

  if (empty($tani) && empty($air)) {
      $ket = "<div class='alert alert-danger'>Mohon pilih <b>jenis hasil tani dan cara pengairan</b> !! </div>";
    } 
      elseif (empty($air)) {
          $ket = "<div class='alert alert-danger'>Mohon pilih <b>jenis cara pengairan</b> !! </div>";
      }
      elseif (empty($tani)) {
          $ket = "<div class='alert alert-danger'>Mohon pilih <b>jenis hasil tani</b> !! </div>";
      }
      elseif (empty($jumlah) || empty($harga) ) {
          $ket = "<div class='alert alert-danger'>Jumlah hasil panen dan harga makanan pokok <b>Tidak boleh kosong</b> !!</div>";
      }
      elseif ($tani == "lain" && empty($harga_lain) ) {
          $ket = "<div class='alert alert-danger'>Harga hasil panen <b>Tidak boleh kosong</b> !!</div>";
      }
    else{
          if ($tani == 'gabah' && $air == 'disiram') {
              if($jumlah >= 653){
                $zakat = ($jumlah * $harga) * 5/100;
                $ket  = "<div class='alert alert-info'>Zakat yang harus anda bayar senilai <b>Rp. " . $zakat . ",- </b>
                <br><br>Atau setara dengan <b>" . $jumlah * 5/100 . " Kg gabah</b>.</div>
                <br> *Zakat dibayarkan setiap masa panen";
              }else{
                $ket = "<div class='alert alert-info'><b> Anda Belum Wajib Bayar Zakat </b></div>
                <br> *Anda bayar zakat jika sudah mencapai nisab 653 Kg gabah";
              }
          }
            elseif ($tani == 'gabah' && $air == 'alam') {
                if($jumlah >= 653){
                  $zakat = ($jumlah * $harga) * 10/100;
                  $ket  = "<div class='alert alert-info'>Zakat yang harus anda bayar senilai <b>Rp. " . $zakat . ",- </b>
                  <br><br>Atau setara dengan <b>" . $jumlah * 10/100 . " Kg gabah</b>.</div>
                  <br> *Zakat dibayarkan setiap masa panen";
                }else{
                  $ket = "<div class='alert alert-info'><b> Anda Belum Wajib Bayar Zakat </b></div>
                  <br> *Anda bayar zakat jika sudah mencapai nisab 653 Kg gabah";
                }
            }
            elseif ($tani == 'beras' && $air == 'disiram') {
                if($jumlah >= 520){
                  $zakat = ($jumlah * $harga) * 5/100;
                  $ket  = "<div class='alert alert-info'>Zakat yang harus anda bayar senilai <b>Rp. " . $zakat . ",- </b>
                  <br><br>Atau setara dengan <b>" . $jumlah * 5/100 . " Kg beras</b>.</div>
                  <br> *Zakat dibayarkan setiap masa panen";
                }else{
                  $ket = "<div class='alert alert-info'><b> Anda Belum Wajib Bayar Zakat </b></div>
                  <br> *Anda bayar zakat jika sudah mencapai nisab 520 Kg beras";
                }   
            }
            elseif ($tani == 'beras' && $air == 'alam'){
                if($jumlah >= 520){
                  $zakat = ($jumlah * $harga) * 10/100;
                  $ket  = "<div class='alert alert-info'>Zakat yang harus anda bayar senilai <b>Rp. " . $zakat . ",- </b>
                  <br><br>Atau setara dengan <b>" . $jumlah * 10/100 . " Kg beras</b>.</div>
                  <br> *Zakat dibayarkan setiap masa panen";
                }else{
                  $ket = "<div class='alert alert-info'><b> Anda Belum Wajib Bayar Zakat </b></div>
                  <br> *Anda bayar zakat jika sudah mencapai nisab 520 Kg beras";
                }  
            }
            elseif ($tani == 'lain' && $air == 'disiram') {
                if( $harga_lain * $jumlah >= $harga * 520 ){
                  $zakat = ($jumlah * $harga_lain) * 5/100;
                  $ket  = "<div class='alert alert-info'>Zakat yang harus anda bayar senilai <b>Rp. " . $zakat . ",- </b>
                  <br><br>Atau setara dengan <b>" . ($harga_lain / $harga * $jumlah) * 5/100 . " Kg beras / makanan pokok lain</b>.</div>
                  <br> *Zakat dibayarkan setiap masa panen";
                }else{
                  $ket = "<div class='alert alert-info'><b> Anda Belum Wajib Bayar Zakat </b></div>
                  <br> *Anda bayar zakat jika sudah mencapai nisab harga panen setara dengan 520 Kg beras/ makanan pokok lain";
                }
            }
            elseif ($tani == 'lain' && $air == 'alam') {
                if( $harga_lain * $jumlah >= $harga * 520 ){
                  $zakat = ($jumlah * $harga_lain) * 10/100;
                  $ket  = "<div class='alert alert-info'>Zakat yang harus anda bayar senilai <b>Rp. " . $zakat . ",- </b>
                  <br><br>Atau setara dengan <b>" . ($harga_lain / $harga * $jumlah) * 10/100 . " Kg beras / makanan pokok lain</b>.</div>
                  <br> *Zakat dibayarkan setiap masa panen";
                }else{
                  $ket = "<div class='alert alert-info'><b> Anda Belum Wajib Bayar Zakat </b></div>
                  <br> *Anda bayar zakat jika sudah mencapai nisab harga panen setara dengan 520 Kg beras/ makanan pokok lain";
                }
            }

    }
  
?>

<div class="container">
<div> <?php echo $ket; ?> </div>
</div>

</div>
</body>
</html>