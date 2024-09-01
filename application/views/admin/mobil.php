<div class="container">
    <div class="page-header">
        <h3>Data Mobil</h3>
    </div>
    <a href="<?php echo base_url() . 'admin/mobil_add'; ?>" class="btn btn-primary btn-sm"><span
            class="glyphicon glyphicon-plus"></span> Mobil Baru</a>
    <br /><br />

    <!-- Input form untuk pencarian -->
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" id="searchInput" placeholder="Cari mobil...">
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover" id="table-datatable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Merk Mobil</th>
                    <th>Plat</th>
                    <th>Warna</th>
                    <th>Tahun Pembuatan</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mobil as $m) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $m->mobil_merk ?></td>
                    <td><?php echo $m->mobil_plat ?></td>
                    <td><?php echo $m->mobil_warna ?></td>
                    <td><?php echo $m->mobil_tahun ?></td>
                    <td>
                        <?php
                            if ($m->mobil_status == "1") {
                                echo "Tersedia";
                            } else if ($m->mobil_status == "2") {
                                echo "Sedang Di Rental";
                            }
                            ?>
                    </td>
                    <td>
                        <a class="btn btn-warning btn-sm"
                            href="<?php echo base_url() . 'admin/mobil_edit/' . $m->mobil_id; ?>"><span
                                class="glyphicon glyphicon-plus"></span> Edit</a>
                        <a class="btn btn-danger btn-sm"
                            href="<?php echo base_url() . 'admin/mobil_hapus/' . $m->mobil_id; ?>"><span
                                class="glyphicon glyphicon-trash"></span> Hapus</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- js untuk mencari data mobil -->

    <script>
    $(document).ready(function() {
        $("#searchInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#table-datatable tbody tr").filter(function() {
                $(this).toggle($(this).text().toLocaleLowerCase().indexOf(value) > -1)
            });
        });
    });
    </script>


</div>