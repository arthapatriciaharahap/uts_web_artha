<?php
    include('header.php');
?>


            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-white rounded h-100 p-4">
                            <h6 class="mb-4 text-dark">Data Kelompok Paswa 2022</h6>
                            <div class="table-responsive">
                                <table class="table " id="datatable">
                                <thead>
                        <tr>
                            
                            <td  class="text-dark"> No.</td>
                            <td class="text-dark"> Nama Kelompok</td>
                            <td class="text-dark"> Nama Peserta</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("connection.php");
                        $no = 0;
                        $result = mysqli_query($mysqli, "SELECT * FROM tab_kelompok");
                        while ($row = mysqli_fetch_array($result)) {
                            $id_kelompok = $row['id'];
                            $no++;
                            echo "<tr>";
                            echo "<td class='text-dark'>" . $no . "</td>";
                            echo "<td class='text-dark'>" . $row['nama_kelompok'] . "</td>";

                        $result_peserta = mysqli_query($mysqli, "select b.nama from tab_peserta_kelompok as a left join tab_peserta as b on a.nim = b.nim where a.id_kelompok = '$id_kelompok' ");
                        $rowx = mysqli_fetch_assoc($result_peserta);
                        if(!empty($rowx)){
                            echo "<td>";
                            $peserta = mysqli_query($mysqli, "select b.nama from tab_peserta_kelompok as a left join tab_peserta as b on a.nim = b.nim where a.id_kelompok = '$id_kelompok' ");
                            while ($pesertax =  mysqli_fetch_array($peserta)){
                                echo "<li>".$pesertax['nama']."</li><br>";
                            }
                            echo "</td>";
                            } else{
                                echo "<td><a href='set_kelompok.php?id=$id_kelompok' class= 'btn btn-info'>Set Kelompok</a></td>";
                            } 
                        
                        }
                        ?>
                    </tbody>
                                </table>
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