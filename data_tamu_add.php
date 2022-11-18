<?php
    include('header.php');
?>
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="">
                            <h3 class="mb-4"><b>Data Tamu Paswa 2022</b></h3>
                            <form method="post" action="data_tamu_pro_add.php">
                                <div class="mb-3">
                                    <label  class="form-label">Nama Tamu</label>
                                    <input type="text" class="form-control" name="nama_tamu" placeholder="Nama Tamu" required>
                                </div>
                                <div class="mb-3">
                                    <label  class="forsm-label">Jabatan</label>
                                    <input type="text" class="form-control" name="jabatan" placeholder="Jabatan" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Add</button>
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