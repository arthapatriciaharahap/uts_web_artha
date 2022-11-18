<?php session_start(); 
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

include_once("connection.php");
$tanggal = $_POST['tanggal'];
$jam_mulai = $_POST['jam_mulai'];
$jam_selesai = $_POST['jam_selesai'];
$kegiatan = $_POST['nama_kegiatan'];
$narasumber = $_POST['narasumber'];
$pic = $_POST['pic'];

$result = mysqli_query($mysqli, "INSERT INTO tab_kegiatan (
                                                            tanggal,
                                                            jam_mulai,
                                                            jam_selesai,
                                                            nama_kegiatan,
                                                            narasumber,
                                                            pic)
                                                        VALUES(
                                                            '$tanggal',
                                                            '$jam_mulai',
                                                            '$jam_selesai',
                                                            '$kegiatan',
                                                            '$narasumber',
                                                            '$pic')");   
	echo "<script language=javascript>
			alert('Simpan Berhasil');
			window.location='kegiatan.php';
			</script>";
?>