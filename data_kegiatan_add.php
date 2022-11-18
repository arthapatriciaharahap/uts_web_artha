<?php
    include('header.php');
?>
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="">
                            <h3 class="mb-4"><b>Kegiatan Paswa 2022</b></h3>
                            <form method="post" action="data_kegiatan_pro_add.php">
                                <div class="mb-3">
                                    <label  class="form-label">Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal" placeholder="Tanggal" required>
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Jam Mulai</label>
                                    <input type="time" class="form-control" name="jam_mulai" placeholder="Jam Mulai" required>
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Jam Selesai</label>
                                    <input type="time" class="form-control" name="jam_selesai" placeholder="Jam Selesai" required>
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Kegiatan</label>
                                    <input type="text" class="form-control" name="nama_kegiatan" placeholder="Kegiatan" required>
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Narasumber</label>
                                    <input type="text" class="form-control" name="narasumber" placeholder="Narasumber" required>
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">PIC</label>
                                    <input type="text" class="form-control" name="pic" placeholder="PIC" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Add</button>
                                <a href="data_kegiatan.php" class="btn btn-primary">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form End -->
    
<?php
    include('footer.php');
?>