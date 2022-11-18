<?php
include('header.php');
?>
<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="">
                <h3 class="mb-4"><b>Perlengkapan Paswa 2022</b></h3>
                <form method="post" action="perlengkapan_pro_add.php">
                    <div class="mb-3">
                        <label class="form-label">Perlengkapan</label>
                        <input type="text" class="form-control" name="perlengkapan" placeholder="Perlengkapan" required>
                    </div>
                    <label class="form-label"><b>Kategori</b></label>
                    <select class="form-control" Placeholder="Kategori" name="kategori">
                        <option value="0">--Pilih--</option>
                        <option value="Laki Laki">Laki Laki</option>
                        <option value="Perempuan">Perempuan</option>
                        <option value="Laki dan Perempuan">Laki dan Perempuan</option>
                    </select><br>
                    <button type="submit" class="btn btn-primary">Add</button>
                    <a href="perlengkapan.php" class="btn btn-primary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Form End -->

<?php
include('footer.php');
?>