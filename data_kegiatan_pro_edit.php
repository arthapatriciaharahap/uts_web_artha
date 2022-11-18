<?php session_start(); 
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

include_once("connection.php");
$id = $_POST['id'];
$tanggal = $_POST['tanggal'];
$jam_mulai = $_POST['jam_mulai'];
$jam_selesai = $_POST['jam_selesai'];
$kegiatan = $_POST['nama_kegiatan'];
$narasumber = $_POST['narasumber'];
$pic = $_POST['pic'];

$result = mysqli_query($mysqli, "UPDATE tab_kegiatan SET tanggal='$tanggal',
                                                         jam_mulai='$jam_mulai',
                                                         jam_selesai='$jam_selesai',
                                                         nama_kegiatan='$kegiatan',
                                                         narasumber='$narasumber',
                                                         pic='$pic' WHERE id='$id' ");  
echo "<script language=javascript>
			alert('Simpan Berhasil');
			window.location='kegiatan.php';
			</script>";
?>