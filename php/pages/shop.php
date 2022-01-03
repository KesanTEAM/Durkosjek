<?php
include_once("../config.php");

if (isset($_POST['Submit'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $pengiriman = $_POST['pengiriman'];
    $produk = implode(",", $_POST['produk']);

    $result = mysqli_query($mysqli, "INSERT INTO tb_shop(nama,alamat,nohp,pengiriman,produk) VALUES('$nama','$alamat','$nohp','$pengiriman','$produk')");

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="style.css">
    <title>Shop!</title>
</head>

<body class="body">
    <a class="back" href="../index.php"><i class="bi bi-arrow-left"></i><br>Back</a>
    <h2 style="text-align: center;">Shop</h2>
    <p style="text-align: center;">Anda Kalah Dalam bermain game,Ayo Upgrade Gear Gaming anda dengan Berbelanja di Durkos-Shop</p>

    <!-- gambar barang -->
    <section class="services" id="services">
        <div class="service">
            <div class="icon"><img src="https://www.astrocomputer.com/image-product/img2143-1631960496.png" alt="Mechanical Keyboard" style="width: 80%;"></div>
            <h2>Rp. 500.000</h2>
            <h4>KEYBOARD MECHANICAL DAREU EK810</h4>
            <p>Product Name: EK810 <br>
                Switch: Brown/Red/Blue Mechanical D-SwitchKey
                Fields: 3 BlocksDimensions: 436*128*35mm
                Interface: USB 2.0 (1.8m)
                Material: ABS <br>
                Compatibility: Windows XP/Win 7/Win 8/Win 10
                Available Color: Pink, White Pink, Black
                <br><br>
                FEATURES

                Fullsize Gaming Keyboard
                Borderless Design Keyboard
                108 Keys Layout with Mechanical D-Switch
                N-Key Rollover & Spill Resistant
                ABS Material
            </p>
        </div>
        <div class="service">
            <div class="icon"><img src="https://www.jakartanotebook.com/images/products/40/1020/49010/2/alloyseed-mouse-gaming-wireless-rgb-honeycomb-3-dpi-gear-2.4ghz-bm600-black-38.jpg" alt="Mouse gaming" style="width: 80%;"></div>
            <h2>Rp. 180.000</h2>
            <h4>K-SNAKE Mouse Gaming Wireless RGB Honeycomb 3 DPI Gear 2.4GHz - BM600 - Black</h4>
            <p>Mouse Type Nirkabel
                Connection 2.4GHz Koneksi Nirkabel
                Mouse Acceleration DPI: 3 Gigi, 800 - 1200 - 1600 DPI
                Battery Capacity 400 MA
                Dimension 123 x 72 x 46 mm
                Others Koneksi Dengan Komputer: Nirkabel
                <br>
                Pencahayaan: RGB
                <br><br>
                Pengisian: Isi Ulang

                Jumlah Tombol: 7 Tombol
            </p>
        </div>
        <div class="service">
            <div class="icon"><img src="https://cf.shopee.co.id/file/162ecc742af4f5f51deb3c9865186194" alt="Headphone Gaming" style="width: 80%;"></div>
            <h2>Rp. 2.840.000</h2>
            <h4>Headphone Steelseries Arctis Pro</h4>
            <p>Speaker Driver
                Drivers : 40mm Neodymium
                Frequency Response : 10-40000 Hz
                Sensitivity : 102db
                Impedance : 32 Ohm
                Total Harmonic Distortion : 3% Volume Control : On Ear Cup Microphone Frequency Response : 100Hz 10000Hz Pattern : Bidirectional Sensitivity : -38 db Impedance : 2200 Ohm Noise Cancellation : Yes Microphone Location : Retractable Mute Toggle : On Ear Cup <br><br>
                Compatibility : Windows/MAC, PS/XBox/Nintendo Switch, Mobile USB or dual 3.5mm, 4-Pole Plug via included adapter Cable Length : 3m, 10ft
                <br><br>
                Cable Material : Rubber Adapter : Single 3.5mm, 4-Pole Plug Share Jack : Yes Detachable Cable : Yes Headband : Aluminum alloy and steel construction
            </p>
            </p>
        </div>
    </section>

    <!-- Input Form -->'
    <h3>Pemesanan</h3>
    <section id="Input">
        <form action="shop.php" method="post" name="Shop">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nama">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Alamat tujuan (Detail)</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="alamat">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">No Handphone</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nohp">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputpengiriman" class="col-sm-2 col-form-label">Pengiriman</label>
                <div class="col-sm-5">
                    <select class="form-select" aria-label="Default select example" name="pengiriman">
                        <option value="Durkos-send" name="pengiriman">Durkos-send</option>
                        <option value="J&T" name="pengiriman">J&T</option>
                        <option value="Sicepat" name="pengiriman">Sicepat</option>
                    </select><br>
                </div>
            </div>
            <label for="produk"> choose Produk You want a buy </label>
            <br><br>
            <input type="checkbox" name="produk[]" value="keyboard" /> Keyboard <br />
            <input type="checkbox" name="produk[]" value="mouse" /> Mouse <br />
            <input type="checkbox" name="produk[]" value="headphone" /> Headphone <br />
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
    <!-- Vendor JS Files -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>