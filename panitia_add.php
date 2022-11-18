<?php
include('header.php');
?>
<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="">
                <h3 class="mb-4"><b>Nama Panitia Paswa 2022</b></h3>
                <form method="post" action="panitia_pro_add.php">
                    <div class="mb-3">
                        <label class="form-label">Nim</label>
                        <input type="text" class="form-control" name="nim" placeholder="NIM" required aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama" required aria-describedby="emailHelp">
                    </div>

                    <label class="form-label">Kelas</label>
                    <select class="form-control" Placeholder="Kelas" name="kelas">
                        <option value="0">--Pilih--</option>
                        <option value="Reguler Pagi">Reguler Pagi</option>
                        <option value="Reguler Malam">Reguler Malam</option>
                        <option value="Sabtu">Sabtu</option>
                        <option value="Minggu">Minggu</option>
                    </select>
                    <label class="form-label">Semester</label>
                    <select class="form-control form-control-user" Placeholder="Semester" name="semester">
                        <option value="0">--Pilih--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No Handphone</label>
                        <input type="text" class="form-control" name="no_hp" placeholder="No Handphone" required aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jabatan</label>
                        <input type="text" class="form-control" name="jabatan" placeholder="Jabatan" required aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
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