<?php
include('header.php');
?>
<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="">
                <h3 class="mb-4"><b>Tata Tertib Paswa 2022</b></h3>
                <form method="post" action="tata_tertib_pro_add.php">
                    <div class="mb-3">
                        <label class="form-label">Tata Tertib</label>
                        <input type="text" class="form-control" name="tata_tertib" placeholder="Tata Tertib" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                    <a href="tata_tertib.php" class="btn btn-primary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Form End -->

<?php
include('footer.php');
?>