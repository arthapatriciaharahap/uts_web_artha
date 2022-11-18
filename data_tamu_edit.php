<?php
    include('header.php');
?>
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h3 class="mb-4"><b>Data Tamu Paswa 2022</b></h3>
                            <form method="post" action="data_tamu_pro_edit.php">
                                <div class="mb-3">
                                <?php 
                                    include_once("connection.php");
                                    $id = $_GET['id'];
                                    $result_data = mysqli_query($mysqli, "SELECT * FROM tab_tamu WHERE id= '$id' ");
                                    
                                    while ($res = mysqli_fetch_array($result_data)) {
                                        $nama_tamu = $res['nama_tamu'];
                                        $jabatan = $res['jabatan'];
                                    }
                                    ?>
                                        <input type="hidden" class="form-control" name="id" placeholder="id" required 
                                        value="<?php echo $_GET['id'];?>"
                                        aria-describedby="emailHelp">
                                    <label  class="form-label">Nama Tamu</label>
                                    <input type="text" class="form-control" name="nama_tamu" placeholder="Nama Tamu"required
                                    value="<?php echo $nama_tamu; ?>"
                                        aria-describedby="emailHelp">
                                        <label  class="form-label">Jabatan</label>
                                    <input type="text" class="form-control" name="jabatan" placeholder="Jabatan"required
                                    value="<?php echo $jabatan; ?>"
                                        aria-describedby="emailHelp"><br>
                                </div>
                                <button type="submit" class="btn btn-primary">Edit</button>
                                <a href="data_tamu.php" class="btn btn-primary">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form End -->
    
<?php
    include('footer.php');
?>