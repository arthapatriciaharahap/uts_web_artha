<?php
    include('header.php');
?>
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h3 class="mb-4"><b>Tata Tertib Paswa 2022</b></h3>
                            <form method="post" action="tata_tertib_pro_edit.php">
                                <div class="mb-3">
                                <?php 
                                    include_once("connection.php");
                                    $id = $_GET['id'];
                                    $result_data = mysqli_query($mysqli, "SELECT * FROM tab_tata_tertib WHERE id= '$id' ");
                                    
                                    while ($res = mysqli_fetch_array($result_data)) {
                                        $tata_tertib = $res['tata_tertib'];
                                    }
                                    ?>
                                        <input type="hidden" class="form-control" name="id" placeholder="id" required 
                                        value="<?php echo $_GET['id'];?>"
                                        aria-describedby="emailHelp">
                                    <label  class="form-label">Tata Tertib Paswa 2022</label>
                                    <input type="text" class="form-control" name="tata_tertib" placeholder="Tata Tertib"required
                                    value="<?php echo $tata_tertib; ?>"
                                        aria-describedby="emailHelp">
                                </div>
                                <button type="submit" class="btn btn-primary">Edit</button>
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