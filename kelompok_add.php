<?php
include('header.php');
?>
<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="">
                <h3 class="mb-4"><b>Nama Kelompok Paswa 2022</b></h3>
                <form method="post" action="kelompok_pro_add.php">
                    <div class="mb-3">
                        <label class="form-label">Nama Kelompok</label>
                        <input type="text" class="form-control" name="nama_kelompok" placeholder="Nama Kelompok" required aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                    <a href="kelompok.php" class="btn btn-primary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Form End -->

<?php
include('footer.php');
?>