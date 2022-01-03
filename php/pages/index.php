<?php
include_once('../config.php');

session_start();


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Admin Pages</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');

        * {
            box-sizing: border-box;
        }

        body {
            font-family: Poppins, sans-serif;
            display: flex;
            line-height: 1.7;
            margin: 0;
            padding: 0;
        }

        main header,
        nav header {
            font-weight: 700;
            font-size: 1.5em;
        }

        /* Nav */
        nav {
            border-right: 1px solid #333;
            width: 300px;
        }

        nav header {
            padding: 5px;
        }

        nav a {
            display: block;
            border-top: 1px solid #333;
            padding: 15px;
            text-decoration: none;
            color: #333;
        }

        /* Main */
        main {
            padding: 20px;
            height: 100vh;
            overflow-y: scroll;
            padding-bottom: 500px;
        }

        code pre {
            background-color: #eee;
            padding: 20px;
        }

        /* Media Query */
        @media only screen and (max-width: 576px) {
            body {
                flex-direction: column;
            }

            nav {
                border-bottom: 3px solid #333;
                overflow-y: scroll;
                height: 300px;
            }

            main {
                overflow-y: unset;
            }
        }
    </style>
</head>

<body>
    <nav id="navbar">
        <header>ADMIN PAGES</header>
        <a href="#durkosbike" class="nav-link">DURKOS-BIKE</a>
        <a href="#durkosfood" class="nav-link">DURKOS-FOOD</a>
        <a href="#durkosrent" class="nav-link">DURKOS-RENT</a>
        <a href="#durkossend" class="nav-link">DURKOS-SEND</a>
        <a href="#durkosshop" class="nav-link">DURKOS-SHOP</a>
        <a href="#durkostravel" class="nav-link">DURKOS-TRAVEL</a>
        <a href="#user" class="nav-link">User</a>

        <a href="../logout.php" class="nav-link">logout</a>
    </nav>
    <main id="main-doc">
        <section class="main-section" id="durkosbike">
            <header>DURKOS-BIKE</header>
            <header>TABLE</header>
            <table width='100%' border="2">
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>NO HANDPHONE</th>
                    <th>ALAMAT JEMPUT</th>
                    <th>ALAMAT TUJUAN</th>
                    <th>option</th>
                </tr>
                <?php
                $result = mysqli_query($mysqli, "SELECT * FROM tb_bike ORDER BY id DESC");
                while ($user_data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $user_data['id'] . "</td>";
                    echo "<td>" . $user_data['nama'] . "</td>";
                    echo "<td>" . $user_data['no'] . "</td>";
                    echo "<td>" . $user_data['alamat_jemput'] . "</td>";
                    echo "<td>" . $user_data['alamat_tujuan'] . "</td>";
                    echo "<td><a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                }
                ?>
            </table>
        </section>

        <section class="main-section" id="durkosfood">
            <header>DURKOS-FOOD</header>
            <header>TABLE</header>
            <table width='100%' border="2">
                <tr>
                    <th>NO</th>
                    <th>ALAMAT</th>
                    <th>NAMA</th>
                    <th>Pesanan</th>
                    <th>option</th>
                </tr>
                <?php
                $result = mysqli_query($mysqli, "SELECT * FROM tb_food ORDER BY id DESC");
                while ($user_data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $user_data['id'] . "</td>";
                    echo "<td>" . $user_data['nama'] . "</td>";
                    echo "<td>" . $user_data['alamat'] . "</td>";
                    echo "<td>" . $user_data['makanan'] . "</td>";
                    echo "<td><a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                }
                ?>
            </table>
        </section>

        <section class="main-section" id="durkosrent">
            <header>DURKOS-RENT</header>
            <header>TABLE</header>
            <table width='100%' border="2">
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>TANGGAL SEWA</th>
                    <th>TANGGAL BALIK</th>
                    <th>JAMINAN</th>
                    <th>JENIS MOBIL</th>
                    <th>option</th>
                </tr>
                <?php
                $result = mysqli_query($mysqli, "SELECT * FROM tb_rent ORDER BY id DESC");
                while ($user_data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $user_data['nama'] . "</td>";
                    echo "<td>" . $user_data['alamat'] . "</td>";
                    echo "<td>" . $user_data['tanggal_sewa'] . "</td>";
                    echo "<td>" . $user_data['tanggal_balik'] . "</td>";
                    echo "<td>" . $user_data['jaminan'] . "</td>";
                    echo "<td>" . $user_data['jenismobil'] . "</td>";
                    echo "<td><a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                }
                ?>
            </table>
        </section>

        <section class="main-section" id="durkossend">
            <header>DURKOS-SEND</header>
            <header>TABLE</header>
            <table width='100%' border="2">
                <tr>
                    <th>NO</th>
                    <th>NAMA PENGIRIM</th>
                    <th>ALAMAT</th>
                    <th>NAMA PENERIMA</th>
                    <th>DESKRIPSI </th>
                    <th>BARANG</th>
                    <th>option</th>
                </tr>
                <?php
                $result = mysqli_query($mysqli, "SELECT * FROM tb_send ORDER BY id DESC");
                while ($user_data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $user_data['namapengirim'] . "</td>";
                    echo "<td>" . $user_data['alamat'] . "</td>";
                    echo "<td>" . $user_data['namapenerima'] . "</td>";
                    echo "<td>" . $user_data['deskripsi'] . "</td>";
                    echo "<td>" . $user_data['barang'] . "</td>";
                    echo "<td><a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                }
                ?>
            </table>
        </section>

        <section class="main-section" id="durkosshop">
            <header>DURKOS-SHOP</header>
            <header>TABLE</header>
            <table width='100%' border="2">
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>NO HANDPHONE</th>
                    <th>PENGIRIMAN</th>
                    <th>PRDUK</th>
                    <th>option</th>
                </tr>
                <?php
                $result = mysqli_query($mysqli, "SELECT * FROM tb_shop ORDER BY id DESC");
                while ($user_data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $user_data['nama'] . "</td>";
                    echo "<td>" . $user_data['alamat'] . "</td>";
                    echo "<td>" . $user_data['nohp'] . "</td>";
                    echo "<td>" . $user_data['pengiriman'] . "</td>";
                    echo "<td>" . $user_data['produk'] . "</td>";
                    echo "<td><a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                }
                ?>
            </table>
        </section>
        <section class="main-section" id="durkostravel">
            <header>DURKOS-TRAVEL</header>
            <header>TABLE</header>
            <table width='100%' border="2">
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>NO HANDPHONE</th>
                    <th>ASAL</th>
                    <th>TUJUAN</th>
                    <th>TANGGAL</th>
                    <th>DURASI</th>
                    <th>option</th>
                </tr>
                <?php
                $result = mysqli_query($mysqli, "SELECT * FROM tb_travel ORDER BY id DESC");
                while ($user_data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $user_data['nama'] . "</td>";
                    echo "<td>" . $user_data['no_hp'] . "</td>";
                    echo "<td>" . $user_data['asal'] . "</td>";
                    echo "<td>" . $user_data['tujuan'] . "</td>";
                    echo "<td>" . $user_data['tanggal'] . "</td>";
                    echo "<td>" . $user_data['durasi'] . "</td>";
                    echo "<td><a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                }
                ?>
            </table>
        </section>
        <section class="main-section" id="user">
            <header>USER</header>
            <header>TABLE</header>
            <table width='100%' border="2">
                <tr>
                    <th>NO</th>
                    <th>Email</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>option</th>
                </tr>
                <?php
                $result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
                while ($user_data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $user_data['id'] . "</td>";
                    echo "<td>" . $user_data['email'] . "</td>";
                    echo "<td>" . $user_data['username'] . "</td>";
                    echo "<td>" . $user_data['password'] . "</td>";

                    echo "<td><a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                }
                ?>
            </table>
        </section>
    </main>
</body>

</html>