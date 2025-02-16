<!DOCTYPE html>
<html lang="en">

<style>
.client_section {
    padding: 50px 0;
    background-color: #f7f7f7;
    color: #333;
}

.heading_container {
    text-align: center;
    margin-bottom: 40px;
}

.heading_container h2 {
    font-size: 32px;
    margin-bottom: 10px;
}

.testimonial-card {
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    margin-bottom: 20px;
}

.card {
    display: flex;
    align-items: center;
    justify-content: center;
}

.card-content {
    display: grid;
    grid-template-columns: auto 1fr;
    gap: 20px;
    padding: 20px;
}

.img-box {
    display: flex;
    align-items: center;
    justify-content: center;
}

.img-box img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
}

.text-content {
    text-align: left;
}

.text-content h6 {
    font-size: 18px;
    margin-bottom: 5px;
    font-weight: 600;
}

.location {
    font-size: 14px;
    color: #666;
    margin-bottom: 10px;
}

.testimonial-text {
    font-size: 14px;
    line-height: 1.6;
}

@media (max-width: 768px) {
    .card-content {
        grid-template-columns: 1fr;
        text-align: center;
    }

    .img-box {
        justify-content: center;
        margin-bottom: 15px;
    }
}

</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>POLINUS</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="hold-transition login-page">
<?php
session_start();
include_once 'navbar.php';

// Fungsi untuk redirect ke halaman login jika belum login
function redirectToLoginIfNotLoggedIn() {
    if (!isset($_SESSION['username'])) {
        header("Location: loginAdmin.php");
        exit;
    }
}

?>
<div class="container-fluid flex flex-col justify-center items-center text-white p-5"
     style="height: 400px; background-image: url('assets/images/bg1.png'); background-size: cover; background-position: center; position: relative;">
     <div style="background-color: rgba(255, 255, 255, 0.8); padding: 15px; border-radius: 8px; text-align: center;">
         <h1 class="font-weight-bold mb-3" style="color: black; margin: 0;">Selamat Datang di Polinus</h1>
     </div>
</h5>
    <marquee style="position: absolute; bottom: 0; left: 0; background-color: rgba(0,0,0,0.5); color: white; width: 100%; padding: 10px;">
    Hidup sehat adalah investasi terbaik untuk masa depan yang lebih baik
    </marquee>
</div>
    <div class="container mt-5">
        <div class="row justify-content-lg-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-hospital-user fa-fw mb-3 text-primary" style="font-size: 34px;"></i>
                        <h3 class="">Pasien</h3>
                        <p class="card-text">Raih hidup sehat bersama POLINUS. Segera Jadwalkan pemeriksaan Anda!</p>
                        <a href="loginPasien.php" class="btn btn-primary btn-block">Masuk</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-stethoscope fa-fw mb-3 text-success" style="font-size: 34px;"></i>
                        <h3 class="">Dokter</h3>
                        <p class="card-text">Untuk mahasiswa dan masyarakat, POLINUS siap mendukung kesehatan Anda!</p>
                        <div class="d-grid">
                            <a href="loginUser.php" class="btn btn-success btn-block">Masuk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.login-box -->
        <section class="client_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Testimoni</h2>
        </div>
        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .heading_container {
            text-align: center;
            margin-bottom: 20px;
        }

        .heading_container h2 {
            font-size: 24px;
            color: #333;
        }

        .testimonial-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 15px;
            max-width: 500px;
            padding: 15px;
            margin-left: auto;
            margin-right: auto;
        }

        .card-content {
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 15px;
            padding: 15px;
        }

        .img-box img {
            width: 60px; /* Ukuran gambar lebih kecil */
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
        }

        .text-content h6 {
            font-size: 16px; /* Nama lebih kecil */
            margin-bottom: 5px;
            font-weight: 600;
        }

        .text-content .location {
            font-size: 14px; /* Lokasi lebih kecil */
            color: #666;
            margin-bottom: 5px;
        }

        .text-content .testimonial-text {
            font-size: 14px; /* Teks testimoni lebih kecil */
            color: #444;
        }
    </style>
        <!-- Customer 1 -->
        <div class="testimonial-card my-4">
            <div class="card">
                <div class="card-content">
                    <div class="img-box">
                        <img src="assets/images/Russel.jpg" alt="Client 1">
                    </div>
                    <div class="text-content">
                        <h6>Russel</h6>
                        <p class="location">Semarang</p>
                        <p class="testimonial-text">Terimakasih! dengan adanya POLINUS periksa jadi lebih mudah</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Customer 2 -->
        <div class="testimonial-card my-4">
            <div class="card">
                <div class="card-content">
                    <div class="img-box">
                        <img src="assets/images/Sainz.jpg" alt="Client 2">
                    </div>
                    <div class="text-content">
                        <h6>Sainz</h6>
                        <p class="location">Semarang</p>
                        <p class="testimonial-text">Berkat POLINUS aku ga bingung untuk daftar periksa dan janji temu dokter</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>



        <!-- jQuery -->
        <script src="assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="assets/dist/js/adminlte.min.js"></script>
</body>

</html>