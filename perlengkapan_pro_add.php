<?php session_start(); 
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

include_once("connection.php");
$perlengkapan = $_POST['perlengkapan'];
$kategori = $_POST['kategori'];
	
	$result = mysqli_query($mysqli, "INSERT INTO tab_perlengkapan (
                                                                    perlengkapan,
                                                                    kategori)
                                                        VALUES('$perlengkapan',
                                                                '$kategori')");   
	echo "<script language=javascript>
			alert('Simpan Berhasil');
			window.location='perlengkapan.php';
			</script>";
?>