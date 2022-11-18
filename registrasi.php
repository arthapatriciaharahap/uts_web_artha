<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> PASWA 2022 </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
</head>


<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-24 col-sm-16 col-md-12 col-lg-10 col-xl-8">
                    <div class=" rounded p-4 p-sm-5 my-4 mx-3">
                    <form method="post" action="data_peserta.php" enctype="multipart/form-data">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.php" class=""></a>
                            <h3>Form Registrasi Peserta Paswa</h3>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="number" name="nim" class="form-control" id="floatingText" placeholder="jhondoe">
                            <label for="floatingText">NIM</label>
                        </div>
                        <div class="form-floating mb-0">
                            <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Nama Lengkap</label>
                        </div>
                            <label class="form-label"><b>Program Studi</b></label>
                                    <select class="form-control" Placeholder="Program Studi" name="prodi">
                                        <option value="0">--Pilih--</option>
                                        <option value="Teknik Informatika">Teknik Informatika</option>
                                        <option value="Sistem Informasi">Sistem Informasi</option>
                                    </select>
                            <label class="form-label">Semester</label>
                                    <select class="form-control form-control-user" Placeholder="Semester" name="semester">
                                        <option value="0">--Pilih--</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
                            <label class="form-label"><b>Kelas</b></label>
                                    <select class="form-control" Placeholder="Kelas" name="kelas">
                                        <option value="0">--Pilih--</option>
                                        <option value="Reguler Pagi">Reguler Pagi</option>
                                        <option value="Reguler Malam">Reguler Malam</option>
                                        <option value="Sabtu">Sabtu</option>
                                        <option value="Minggu">Minggu</option>
                                    </select>
                        <br>
                        <div class="form-floating mb-2">
                            <input type="number" name="no_hp" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">No Handphone</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="text" name="alamat" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Alamat</label>
                        </div>
                        <label class="form-label"><b>Jenis Kelamin</b></label>
                                <select class="form-control" Placeholder="PJenis Kelamin" name="jenis_kelamin">
                                    <option value="0">--Pilih--</option>
                                    <option value="Laki Laki">Laki Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            <label class="form-label"><b>Masukan Foto</b></label>
                            <input type="file" name="foto" class="form-control" id="floatingInput" placeholder="Masukan Foto">                           
                                <label class="form-label"><b>Agama</b></label>
                                        <select class="form-control" Placeholder="Agama" name="agama">
                                            <option value="0">--Pilih--</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen Protestan">Kristen Protestan</option>
                                            <option value="Kristen Katholik">Kristen Katholik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budhha">Budhha</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                        <div class="form-floating mb-2">
                            <input type="text" name="tempat_lahir" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Tempat Lahir</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="date" name="tanggal_lahir" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Tanggal Lahir</label>
                        </div>
                        <input type="submit" class="btn btn-primary py-3 w-100 mb-4"></input>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>

     <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="asset/lib/chart/chart.min.js"></script>
    <script src="asset/lib/easing/easing.min.js"></script>
    <script src="asset/lib/waypoints/waypoints.min.js"></script>
    <script src="asset/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="asset/lib/tempusdominus/js/moment.min.js"></script>
    <script src="asset/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="asset/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="asset/js/main.js"></script>
</body>

</html>