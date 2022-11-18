<?php session_start(); 
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

include_once("connection.php");
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$semester = $_POST['semester'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$jabatan = $_POST['jabatan'];

$result = mysqli_query($mysqli, "INSERT INTO tab_panitia (
                                                            nim,
                                                            nama,
                                                            kelas,
                                                            semester,
                                                            email,
                                                            no_hp,
                                                            jabatan)
                                                        VALUES(
                                                            '$nim',
                                                            '$nama',
                                                            '$kelas',
                                                            '$semester',
                                                            '$email',
                                                            '$no_hp',
                                                            '$jabatan')");   
	echo "<script language=javascript>
			alert('Simpan Berhasil');
			window.location='panitia.php';
			</script>";
?>