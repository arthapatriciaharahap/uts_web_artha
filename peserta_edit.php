<?php
include('header.php');
?>
<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class=" rounded h-100 p-4">
                <h3 class="mb-4"><b>Nama Peserta Paswa 2022</b></h3>
                <form method="post" action="peserta_pro_edit.php" enctype="multipart/form-data">
                    <div class="mb-3">
                        <?php
                        include_once("connection.php");
                        $nim = $_GET['nim'];
                        $result_data = mysqli_query($mysqli, "SELECT * FROM tab_peserta WHERE nim= '$nim' ");

                        while ($res = mysqli_fetch_array($result_data)) {
                            $nim = $res['nim'];
                            $nama = $res['nama'];
                            $prodi = $res['prodi'];
                            $semester = $res['semester'];
                            $kelas = $res['kelas'];
                            $no_hp = $res['no_hp'];
                            $email = $res['email'];
                            $alamat = $res['alamat'];
                            $jenis_kelamin = $res['jenis_kelamin'];
                            $foto = $res['foto'];
                            $agama = $res['agama'];
                            $tempat_lahir = $res['tempat_lahir'];
                            $tanggal_lahir = $res['tanggal_lahir'];
                        }
                        ?>
                        <label class="form-label">NIM</label>
                        <input type="text" class="form-control" name="nim" placeholder="NIM" required value="<?php echo $_GET['nim']; ?>">

                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama" required value="<?php echo $nama; ?>">

                        <label class="form-label"><b>Program Studi</b></label>
                        <select class="form-control" Placeholder="Program Studi" name="prodi">
                            <option value="0">--Pilih--</option>
                            <option value="Teknik Informatika" <?php if ($prodi == "Teknik Informatika") {
                                                                    echo "selected=selected";
                                                                } ?>>Teknik Informatika</option>
                            <option value="Sistem Informasi" <?php if ($prodi == "Sistem Informasi") {
                                                                    echo "selected=selected";
                                                                } ?>>Sistem Informasi</option>
                        </select>

                        <label class="form-label">Semester</label>
                        <select class="form-control form-control-user" Placeholder="Semester" name="semester" required>
                            <option value="0">--Pilih--</option>
                            <option value="1" <?php if ($semester == "1") {
                                                    echo "selected=selected";
                                                } ?>>1</option>
                            <option value="2" <?php if ($semester == "2") {
                                                    echo "selected=selected";
                                                } ?>>2</option>
                            <option value="3" <?php if ($semester == "3") {
                                                    echo "selected=selected";
                                                } ?>>3</option>
                            <option value="4" <?php if ($semester == "4") {
                                                    echo "selected=selected";
                                                } ?>>4</option>
                            <option value="5" <?php if ($semester == "5") {
                                                    echo "selected=selected";
                                                } ?>>5</option>
                            <option value="6" <?php if ($semester == "6") {
                                                    echo "selected=selected";
                                                } ?>>6</option>
                            <option value="7" <?php if ($semester == "7") {
                                                    echo "selected=selected";
                                                } ?>>7</option>
                            <option value="8" <?php if ($semester == "8") {
                                                    echo "selected=selected";
                                                } ?>>8</option>
                        </select>

                        <label class="form-label">Kelas</label>
                        <select class="form-control" Placeholder="Kelas" name="kelas" required>
                            <option value="0">--Pilih--</option>
                            <option value="Reguler Pagi" <?php if ($kelas == "Reguler Pagi") {
                                                                echo "selected=selected";
                                                            } ?>>Reguler Pagi</option>
                            <option value="Reguler Malam" <?php if ($kelas == "Reguler Malam") {
                                                                echo "selected=selected";
                                                            } ?>>Reguler Malam</option>
                            <option value="Sabtu" <?php if ($kelas == "Sabtu") {
                                                        echo "selected=selected";
                                                    } ?>>Sabtu</option>
                            <option value="Minggu" <?php if ($kelas == "Minggu") {
                                                        echo "selected=selected";
                                                    } ?>>Minggu</option>
                        </select>

                        <label class="form-label">No Handphone</label>
                        <input type="text" class="form-control" name="no_hp" placeholder="No Handphone" required value="<?php echo $no_hp; ?>">

                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required value="<?php echo $email; ?>">

                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat" required value="<?php echo $alamat; ?>">

                        <label class="form-label"><b>Jenis Kelamin</b></label>
                        <select class="form-control" Placeholder="Jenis Kelamin" name="jenis_kelamin">
                            <option value="0">--Pilih--</option>
                            <option value="Laki Laki" <?php if ($jenis_kelamin == "Laki Laki") {
                                                            echo "selected=selected";
                                                        } ?>>Laki Laki</option>
                            <option value="Perempuan" <?php if ($jenis_kelamin == "Perempuan") {
                                                            echo "selected=selected";
                                                        } ?>>Perempuan</option>
                        </select>

                        <label class="form-label"><b>Masukan Foto</b></label>
                        <input type="file" name="foto" class="form-control" placeholder="Masukan Foto">
                        <img src="<?php echo "gambar/" . $foto; ?>" width="120px"><br>

                        <label class="form-label"><b>Agama</b></label>
                        <select class="form-control" Placeholder="Agama" name="agama">
                            <option value="0">--Pilih--</option>
                            <option value="Islam" <?php if ($agama == "Islam") {
                                                        echo "selected=selected";
                                                    } ?>>Islam</option>
                            <option value="Kristen Protestan" <?php if ($agama == "Kristen Protestan") {
                                                                    echo "selected=selected";
                                                                } ?>>Kristen Protestan</option>
                            <option value="Kristen Katholik" <?php if ($agama == "Kristen Katholik") {
                                                                    echo "selected=selected";
                                                                } ?>>Kristen Katholik</option>
                            <option value="Hindu" <?php if ($agama == "Hindu") {
                                                        echo "selected=selected";
                                                    } ?>>Hindu</option>
                            <option value="Budhha" <?php if ($agama == "Buddha") {
                                                        echo "selected=selected";
                                                    } ?>>Budhha</option>
                            <option value="Konghucu" <?php if ($agama == "Konghucu") {
                                                            echo "selected=selected";
                                                        } ?>>Konghucu</option>
                        </select>

                        <div class="form-floating mb-2">
                            <input type="text" name="tempat_lahir" class="form-control" id="floatingInput" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>">
                            <label for="floatingInput">Tempat Lahir</label>
                        </div>

                        <div class="form-floating mb-2">
                            <input type="date" name="tanggal_lahir" class="form-control" id="floatingInput" placeholder="Tanggal Lahir" value="<?php echo $tanggal_lahir; ?>">
                            <label for="floatingInput">Tanggal Lahir</label>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <a href="panitia.php" class="btn btn-primary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Form End -->

<?php
include('footer.php');
?>