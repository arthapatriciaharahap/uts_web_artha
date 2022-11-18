<?php
include('header.php');
?>

<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-white rounded h-100 p-4">


                <div class="table-responsive">
                    <!-- <table class="table" id="datatable">
                        <thead>
                            <tr>
                                <td class="text-dark"> No.</td>
                                <td class="text-dark"> Nama Kelompok</td>
                                <td class="text-dark"> Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once("connection.php");
                            $no = 0;
                            $result = mysqli_query($mysqli, "SELECT * FROM tab_kelompok");
                            while ($row = mysqli_fetch_array($result)) {
                                $no++;
                                echo "<tr>";
                                echo "<td class='text-dark'>" . $no . "</td>";
                                echo "<td class='text-dark'>" . $row['nama_kelompok'] . "</td>";
                                echo "<td class='text-dark'> <a href=\"kelompok_edit.php?id=$row[id]\">Edit</a> | 
                        <a href=\"kelompok_pro_delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table> -->

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Kelompok Paswa 2022</h6>
                            <a href="kelompok_add.php" class="btn btn-primary">Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> entries</label></div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 20px;">No</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 248px;">Nama Kelompok</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 115px;">Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                    include_once("connection.php");
                                                    $no = 0;
                                                    $result = mysqli_query($mysqli, "SELECT * FROM tab_kelompok");
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        $no++;
                                                        echo "<tr class='even'>";
                                                        echo "<td class='sorting_1'>" . $no . "</td>";
                                                        echo "<td class='sorting_1'>" . $row['nama_kelompok'] . "</td>";
                                                        echo "<td class='sorting_1'> <a href=\"kelompok_edit.php?id=$row[id]\">Edit</a> | 
                        <a href=\"kelompok_pro_delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                                                        echo "</tr>";
                                                    }
                                                    ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->
<?php
include('footer.php');
?>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

<script language="javascript" type="text/javascript">
    $(document).ready(function() {
        $('#datatable').dataTable({
            "pagingType": "full_numbers"
        });
    });
</script>