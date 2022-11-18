<?php session_start();
include_once("connection.php");

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$semester = $_POST['semester'];
$kelas = $_POST['kelas'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];


if (empty($_FILES['foto']['name'])) { 
$result = mysqli_query($mysqli, "UPDATE tab_peserta SET 
                                                        
                                                        nama='$nama',
                                                        prodi='$prodi',
                                                        semester='$semester',
                                                        kelas='$kelas',
                                                        no_hp='$no_hp',
                                                        email='$email',
                                                        alamat='$alamat',
                                                        jenis_kelamin='$jenis_kelamin',
                                                        agama='$agama',
                                                        tempat_lahir='$tempat_lahir',
                                                        tanggal_lahir='$tanggal_lahir' WHERE nim='$nim'");
} else {
    $tempdir = "gambar/";
    if (!file_exists($tempdir)) {
        mkdir($tempdir, 0755);
    }

    $target_path = $tempdir . basename($_FILES['foto']['name']);
    $nama_gambar = $_FILES['foto']['name'];
    $ekstensi =  array('png', 'jpg', 'jpeg');
    $ukuran_gambar = $_FILES['foto']['size'];
    $ext = pathinfo($nama_gambar, PATHINFO_EXTENSION);
    $fileinfo = @getimagesize($_FILES["foto"]["tmp_name"]);
    if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_path)) {

       
        $result = mysqli_query($mysqli, "UPDATE tab_peserta SET                                                             
                                                            nama='$nama',
                                                            prodi='$prodi',
                                                            semester='$semester',
                                                            kelas='$kelas',
                                                            no_hp='$no_hp',
                                                            email='$email',
                                                            alamat='$alamat',
                                                            foto='$nama_gambar',
                                                            jenis_kelamin='$jenis_kelamin',
                                                            agama='$agama',
                                                            tempat_lahir='$tempat_lahir',
                                                            tanggal_lahir='$tanggal_lahir' WHERE nim='$nim'");

    }

    
}
echo "<script language=javascript>
                    alert('Simpan Berhasil');
                    window.location='peserta.php';
                  </script>";