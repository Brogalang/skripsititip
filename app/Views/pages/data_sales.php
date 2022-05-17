<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Page Heading -->
<div class="container">
    <h1 class="h4 mb-2 text-gray-800">Data Sales Force</h1>
    <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-2" href="<?= base_url('/pages/add'); ?>"> <i class="fas fa-plus"></i> Add New Sales </a>

    <!-- DataTables Customer -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">User ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Witel</th>
                            <th scope="col">Telp</th>
                            <th scope="col">Mitra</th>
                            <th scope="col">Posisi</th>
                            <th scope="col">Aktif</th>
                            <th scope="col">SPV</th>
                            <th colspan="3" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($sales as $row) {
                            echo '
                                <tr>
                                <td>' . $row['id_sales'] . '</td>
                                <td>' . $row['userID'] . '</td>
                                <td>' . $row['nama_sales'] . '</td>
                                <td>' . $row['witel'] . '</td>
                                <td>' . $row['no_telp'] . '</td>
                                <td>' . $row['mitra'] . '</td>
                                <td>' . $row['posisi'] . '</td>
                                <td>' . $row['tgl_aktif'] . '</td>
                                <td>' . $row['spv'] . '</td>
                                <td><a href="#" class="btn btn-danger btn-sm btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </a></td>
                                <td><a href="'.base_url('edit-view/'.$row['id_sales']).'" class="btn btn-danger btn-sm btn-circle">
                                        <i class="fas fa-pen"></i>
                                    </a></td>
                            </tr>
                                ';
                        }
                        ?>
                    </tbody>
                </table>
                <div class> </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>