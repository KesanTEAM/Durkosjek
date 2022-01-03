<?php
include_once('config.php');

session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Durkosjek</title>
    <meta content="Durkosjek adalah layanan ojek online Daerah durikosambi,Jakarta barat,Indonesia" name="description" />
    <meta content="Ojek online,Durkosjek" name="keywords" />

    <!-- Favicons -->
    <link href="images/logo.jpeg" rel="icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Krub:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <img src="../images/logofix.png" alt="logo Ojek" class="rounded-image" style="width: 50px" />
            <h1 class="logo"><a href="../index.html">Durkosjek</a></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#services">service</a></li>
                    <li><a class="nav-link scrollto" href="#team">About us</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a href="logout.php" class="form-inline my-2 my-lg-0 btn">Logout</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="
          container
          d-flex
          flex-column
          align-items-center
          justify-content-center
        " data-aos="fade-up">
            <h1>Durkosjek</h1>
            <h2>Pelanggan Senang Hati Pun Tenang</h2>
            <img src="../images/bg.jpeg" class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150" />
        </div>
    </section>
    <!-- End Hero -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="service">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] . "!" . "</h1>"; ?>
                <h2>Service</h2>
                <p>
                    Kami siap melayani anda dengan sepenuh hati.
                </p>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 align-self-center" style="text-align: center;">
                <div class="col">
                    <div class="card">
                        <a href=" pages/bike.php"><img src="../images/ojek.jpeg" alt="food" style="height: 150px;" /></a>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <a href="pages/send.php"><img src="../images/sendfix.jpg" alt="food" style="height: 150px;" /></a>

                    </div>
                </div>
                <div class=" col">
                    <div class="card">
                        <a href="pages/food.php"><img src="../images/foodfix.jpg" alt="food" style="width: 180px;" /></a>

                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <a href="pages/Rent.php"><img src="../images/rent.jpeg" alt="food" /></a>

                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <a href="pages/shop.php"><img src="../images/shop.jpeg" alt="food" /></a>

                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <a href="pages/Travel.php"><img src="../images/travel.jpeg" alt="food" /></a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Testimonial ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Testimoni</h2>
                <p>Berikut Testimoni.</p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Terobosan yang sangat bagus dari Mahasiswa kami Jurusan Informatika,Kami harapkan Terobosan ini bisa membantu Masyarakat setempat.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="../images/profiwa.jpg" class="testimonial-img" alt="" />
                            <h3>Prof. Dr. Ir. Iwa Garniwa Mulyana K., MT</h3>
                            <h4>Rektor IT-PLN</h4>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Pemesanan sangat mudah dan driver cepat sampenya...semoga sukses selalu untuk durkosjek.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="../images/cartun cewe.jpg" class="testimonial-img" alt="" />
                            <h3>Sara</h3>
                            <h4>Kosjekers</h4>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Sangat bagus aplikasi responsive dan sangat membantu masyarakat setempat....mudah digunakan tidak canggung untuk orang tua.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="../images/cartun cewe.jpg" class="testimonial-img" alt="" />
                            <h3>Indah</h3>
                            <h4>Kosjekers</h4>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Pemesananannya sangat mudah sekali...Semoga fitur fitur dari durkosjek akan berkembang terus dan semakin banyak dikenal warga.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="../images/cartun.jpg" class="testimonial-img" alt="" />
                            <h3>Brandon</h3>
                            <h4>Kosjekers &amp; Freelancer</h4>
                        </div>
                    </div>
                    <!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- End Testimonial-->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Team</h2>
                <img src="../images/logo itpln.jpg" alt="logopln" style="width: 200px" />
                <div id="menu-slide" class="detail" style="position: relative">
                    <p style="align-self: center">
                        IT-PLN
                        <a href="https://instagram.com/itpln?utm_medium=copy_link"><i class="bi bi-instagram"></i></a><br />
                        (Institut Teknologi Perusahaan Listrik Negara)<br />
                        Pada awalanya IT-PLN bernama STT-PLN.Yang mana kampus ini
                        dibawah naungan Yayasan Pendidikan dan Kesejahteraan PLN<br />
                        yang disingkat sebagai YPK-PLN.<br />
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <img src="../images/lead.jpg" class="img-fluid" alt="" />
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Muhammad Hasan Basri</h4>
                                <span>CO Founder of Durkosjek</span>
                            </div>
                            <div class="social">
                                <a href="https://www.instagram.com/hsanbsri_/"><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <img src="../images/A1.jpeg" class="img-fluid" alt="" style="height: 260px" />
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Muhamad Gilang Fauzan</h4>
                                <span>Chief Operating Officer</span>
                            </div>
                            <div class="social">
                                <a href="https://www.instagram.com/gilanggfzn/"><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <img src="../images/A2.jpeg" class="img-fluid" alt="" style="height: 260px" />
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Muhammad Ihsan</h4>
                                <span>Chief Marketing Officer</span>
                            </div>
                            <div class="social">
                                <a href="https://www.instagram.com/muhammad_ihsaan13/"><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="member">
                        <img src="../images/A3.jpeg" class="img-fluid" alt="" style="height: 260px" />
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Naufal Nurhidayat</h4>
                                <span>Chief Financial Officer</span>
                            </div>
                            <div class="social">
                                <a href="https://www.instagram.com/nfl.hdyt/"><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Contact</h2>
                <p>
                    Jika ada kendala dan pertanyaan Silahkan Hubungi Kami via
                    Email.<br />
                    Jika ada saran silahkan isi Form yang sudah disediakan
                </p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Alamat Kami</h3>
                                <p>Gg. H. Abdul Hadi, RT.5/RW.1,<br> Duri Kosambi, Kecamatan Cengkareng, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11750</p>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.6797901426125!2d106.72135342915139!3d-6.168348666380229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f827c04ee177%3A0x270db98ccee772e7!2sGg.%20H.%20Abdul%20Hadi%2C%20RT.5%2FRW.1%2C%20Duri%20Kosambi%2C%20Kecamatan%20Cengkareng%2C%20Kota%20Jakarta%20Barat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2011750!5e0!3m2!1sid!2sid!4v1636939175261!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy">
                                </iframe>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <a href="mailto:kesanteam4@gmail.com?subject=KESAN%20%26%20PESAN"><i class="bx bx-envelope"></i>
                                    <h3>Email</h3>
                                    <p>kesanteam4@gmail.com</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <a href="https://api.whatsapp.com/send?phone=82253526659&text=Halo%20Durkosjek,Saya%20Mau%20bertanya"><i class="bx bx-phone-call"></i>
                                    <h3>Hubungi Kami</h3>
                                    <p>+62 822-5352-6659</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
                                <strong>Terimakasih!</strong> pesan anda sudah kami terima.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <form name="hsanbsri-contact-form">
                                <h4 style="text-align: center;">Form</h4>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="name" name="nama" required />
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="email" name="email" required />
                                </div>
                                <div class="mb-3">
                                    <label for="Pesan class=" form-label">Pesan</label>
                                    <textarea class="form-control" id="Pesan" rows="3" name="pesan"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-kirim">Kirim</button>

                                <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Loading...
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
    </section>
    <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Durkosjek</h3>
                        <p>
                            Jl.Duri Kosambi Gg. H. Abdul Hadi<br>
                            Cengkareng, Jakarta Barat<br />
                            Indonesia, 11750 <br /><br />
                            <a href="https://api.whatsapp.com/send?phone=82253526659&text=Halo%20Durkosjek,Saya%20Mau%20bertanya"><strong>Phone:</strong> +62 822-5352-6659<br /></a>
                            <a href="mailto:kesanteam4@gmail.com?subject=KESAN%20%26%20PESAN"><strong>Email:</strong> kesanteam4@gmail.com<br /></a>
                            <strong>Supported By : IT-PLN</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Durkosjek</span></strong>.
                </div>
                <div class="credits">
                    Designed by <a href="#">Durkosjek Team</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <?php
    if (isset($_GET['pesan'])) {
        $pesan = $_GET['pesan'];
        if ($pesan == "input") {
            echo "Data berhasil di input.";
        } else if ($pesan == "update") {
            echo "Data berhasil di update.";
        } else if ($pesan == "hapus") {
            echo "Data berhasil di hapus.";
        }
    }
    ?>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template JS File -->
    <script src="../assets/js/main.js"></script>

    <!-- Backend submit form -->
    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbyDumS91O2bits_7VHB6V9sgz3LOavc3cVWuba2DxeEwO7vkCqsmMcv8ioNWW_o4Snp/exec'
        const form = document.forms['hsanbsri-contact-form']
        const btnkirim = document.querySelector('.btn-kirim');
        const btnloading = document.querySelector('.btn-loading');
        const myAlert = document.querySelector('.my-alert');

        form.addEventListener('submit', e => {
            e.preventDefault()
            // ketika tombol submit di klik
            // tampilkan tombol kirim , hilangkan tombol loading
            btnloading.classList.toggle('d-none');
            btnkirim.classList.toggle('d-none');

            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then((response) => {
                    //tampilkan tombol kirim , hilangkan tombol loading

                    btnloading.classList.toggle('d-none');
                    btnkirim.classList.toggle('d-none');

                    //tampilkan alert

                    myAlert.classList.toggle('d-none');

                    //reset form

                    form.reset();
                    console.log('Success!', response);
                })
                .catch(error => console.error('Error!', error.message))
        })
    </script>
</body>

</html>