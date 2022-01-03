<?php
// Check If form submitted, insert form data into users table.
if (isset($_POST['Submit'])) {
  $nama = $_POST['nama'];
  $no_hp = $_POST['no_hp'];
  $asal = $_POST['asal'];
  $tujuan = $_POST['tujuan'];
  $tanggal = $_POST['tanggal'];
  $durasi = $_POST['durasi'];

  // include database connection file
  include_once("../config.php");

  // Insert user data into table
  $result = mysqli_query($mysqli, "INSERT INTO tb_travel(nama,no_hp,asal,tujuan,tanggal,durasi) VALUES('$nama','$no_hp','$asal','$tujuan','$tanggal','$durasi')");

  // Show message when user added
  echo "Order Sucsess.Tunggu Sebentar Kami akan menghubungi anda <a href='../index.php'></a>";
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <!-- Option 1: Include in HTML -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <title>Travel</title>
</head>

<body>
  <a class="back" href="../index.php"><i class="bi bi-arrow-left"></i><br>Back</a>
  <h2 style="text-align : center;">Travel</h2>
  <p style="text-align : center;">Anda Bingung mau Liburan Kemana? Serahkan Saja ke Durkos-Travel </p>

  <section>
    <form action="travel.php" method="post" name="Travel">
      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-5">
          <input type="Text" class="form-control" name="nama">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputnohp" class="col-sm-2 col-form-label">Nomor HP</label>
        <div class="col-sm-5">
          <input type="number" class="form-control" name="no hp">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputasal" class="col-sm-2 col-form-label">Asal Keberangkatan</label>
        <div class="col-sm-5">
          <input type="Text" class="form-control" name="asal">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputtujuan" class="col-sm-2 col-form-label">Tujuan</label>
        <div class="col-sm-5">
          <input type="Text" class="form-control" name="tujuan">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputtanggal" class="col-sm-2 col-form-label">Tanggal Keberangkatan</label>
        <div class="col-sm-5">
          <input type="date" class="form-control" name="tanggal">
        </div>
      </div>
      <div class="row mb-3">
        <label for="durasi" class="col-sm-2 col-form-label">Durasi liburan</label>
        <div class="col-sm-5">
          <select class="form-select" aria-label="Default select example" name="durasi">
            <option value="3">3 Hari</option>
            <option value="7">7 Hari</option>
            <option value="14">14 Hari</option>
          </select><br>
        </div>
      </div>
      <div class="col-12">
        <button type="Submit" name="Submit" class="btn btn-primary">Submit</button>
      </div>
      <br>
    </form>
  </section>

  <section>
    <footer>
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Durkosjek</span></strong>.
        </div>
        <div class="credits">
          Designed by <a href="#">Durkosjek Team</a>
        </div>
      </div>
    </footer>
  </section>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>