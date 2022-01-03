<?php
// Check If form submitted, insert form data into users table.
if (isset($_POST['Submit'])) {
  $namapengirim = $_POST['namapengirim'];
  $alamat = $_POST['alamat'];
  $namapenerima = $_POST['namapenerima'];
  $deskripsi = $_POST['deskripsi'];
  $barang = implode(",", $_POST['barang']);

  // include database connection file
  include_once("../config.php");

  // Insert user data into table
  $result = mysqli_query($mysqli, "INSERT INTO tb_send(namapengirim,alamat,namapenerima,deskripsi,barang) VALUES('$namapengirim','$alamat','$namapenerima','$deskripsi','$barang')");

  // Show message when user added
  echo "Order successfully.Wait For Driver Contact you <a href='../index.php'></a>";
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
  <title>SEND</title>
</head>

<body>
  <a class="back" href="../index.php"><i class="bi bi-arrow-left"></i><br>Back</a>
  <h2 style="text-align : center;">SEND</h2>
  <p style="text-align : center;">Mau mengirimkan barang ke seseorang yang special? tapi anda mager untuk keluar? <br> Durkos-Send solusinya... Serahkan semuanya kepada kami, Maka Paket anda akan sampai ke tujuan dalam waktu secepat-cepatnya </p>
  <br>

  <!-- Input Form -->
  <section>
    <form action="send.php" method="post" name="send">
      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Pengirim</label>
        <div class="col-sm-5">
          <input type="Text" class="form-control" name="namapengirim">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat Penerima</label>
        <div class="col-sm-5">
          <input type="Text" class="form-control" name="alamat">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Penerima</label>
        <div class="col-sm-5">
          <input type="Text" class="form-control" name="namapenerima">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi</label>
        <div class="col-sm-5">
          <input type="Text" class="form-control" name="deskripsi">
        </div>
      </div>
      <label for="jenis barang"> Jenis barang? </label>
      <br>
      <input type="checkbox" name="barang[]" value="mudah pecah" /> Mudah Pecah <br />
      <input type="checkbox" name="barang[]" value="tahan banting" /> Tahan Banting <br />
      <input type="checkbox" name="barang[]" value="gampang lecet" /> Gampang Lecet <br />
      <input type="checkbox" name="barang[]" value="gampang meledak" /> Gampang Meledak <br />
      <br>
      <div class="col-12">
        <button type="Submit" name="Submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </section>
  <br>

  <!-- Footer -->
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