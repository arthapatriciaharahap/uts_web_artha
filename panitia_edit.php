<?php
    include('header.php');
?>
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h3 class="mb-4"><b>Nama Panitia Paswa 2022</b></h3>
                            <form method="post" action="panitia_pro_edit.php">
                                <div class="mb-3">
                                <?php 
                                    include_once("connection.php");
                                    $nim = $_GET['nim'];
                                    $result_data = mysqli_query($mysqli, "SELECT * FROM tab_panitia WHERE nim= '$nim' ");
                                    
                                    while ($res = mysqli_fetch_array($result_data)) {
                                        $nim = $res['nim'];
                                        $nama = $res['nama'];
                                        $kelas = $res['kelas'];
                                        $semester = $res['semester'];
                                        $email = $res['email'];
                                        $no_hp = $res['no_hp'];
                                        $jabatan = $res['jabatan'];
                                    }
                                    ?>
                                    <label  class="form-label">NIM</label>
                                    <input type="text" class="form-control" name="nim" placeholder="NIM" required 
                                    value="<?php echo $_GET['nim'];?>">
                                    <label  class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Nama" required
                                    value="<?php echo $nama; ?>">
                                    <label  class="form-label">Kelas</label>
                                    <select class="form-control" Placeholder="Kelas" name="kelas" required>
                                        <option value="0">--Pilih--</option>
                                        <option value="Reguler Pagi" <?php if($kelas == "Reguler Pagi"){ echo "selected=selected";} ?> >Reguler Pagi</option>
                                        <option value="Reguler Malam" <?php if($kelas == "Reguler Malam"){ echo "selected=selected";} ?> >Reguler Malam</option>
                                        <option value="Sabtu" <?php if($kelas == "Sabtu"){ echo "selected=selected";} ?> >Sabtu</option>
                                        <option value="Minggu" <?php if($kelas == "Minggu"){ echo "selected=selected";} ?> >Minggu</option>
                                    </select>
                                    <label  class="form-label">Semester</label>
                                        <select class="form-control form-control-user" Placeholder="Semester" name="semester" required>
                                            <option value="0">--Pilih--</option>
                                            <option value="1"<?php if($semester == "1"){ echo "selected=selected";} ?> >1</option>
                                            <option value="2"<?php if($semester == "2"){ echo "selected=selected";} ?> >2</option>
                                            <option value="3"<?php if($semester == "3"){ echo "selected=selected";} ?> >3</option>
                                            <option value="4"<?php if($semester == "4"){ echo "selected=selected";} ?> >4</option>
                                            <option value="5"<?php if($semester == "5"){ echo "selected=selected";} ?> >5</option>
                                            <option value="6"<?php if($semester == "6"){ echo "selected=selected";} ?> >6</option>
                                            <option value="7"<?php if($semester == "7"){ echo "selected=selected";} ?> >7</option>
                                            <option value="8"<?php if($semester == "8"){ echo "selected=selected";} ?> >8</option>
                                        </select>
                                    <label  class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email" required
                                    value="<?php echo $email; ?>">
                                    <label  class="form-label">No Handphone</label>
                                    <input type="text" class="form-control" name="no_hp" placeholder="No Handphone" required
                                    value="<?php echo $no_hp; ?>">
                                    <label  class="form-label">Jabatan</label>
                                    <input type="text" class="form-control" name="jabatan" placeholder="Jabatan" required
                                    value="<?php echo $jabatan; ?>">
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