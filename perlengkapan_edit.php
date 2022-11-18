<?php
include('header.php');
?>
<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class=" rounded h-100 p-4">
                <h3 class="mb-4"><b>Perlengkapan Paswa 2022</b></h3>
                <form method="post" action="perlengkapan_pro_edit.php">
                    <div class="mb-3">
                        <?php
                        include_once("connection.php");
                        $id = $_GET['id'];
                        $result_data = mysqli_query($mysqli, "SELECT * FROM tab_perlengkapan WHERE id= '$id' ");

                        while ($res = mysqli_fetch_array($result_data)) {
                            $perlengkapan = $res['perlengkapan'];
                            $kategori = $res['kategori'];
                        }
                        ?>
                        <input type="hidden" class="form-control" name="id" placeholder="id" required value="<?php echo $_GET['id']; ?>" aria-describedby="emailHelp">
                        <label class="form-label">Perlengkapan</label>
                        <input type="text" class="form-control" name="perlengkapan" placeholder="Perlengkapan" required value="<?php echo $perlengkapan; ?>" aria-describedby="emailHelp">
                        <label class="form-label">Kategori</label>
                        <input type="text" class="form-control" name="kategori" placeholder="Kategori" required value="<?php echo $kategori; ?>" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
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