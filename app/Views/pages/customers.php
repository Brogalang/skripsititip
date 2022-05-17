<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Page Heading -->
<div class="container">
    <h1 class="h4 mb-2 text-gray-800">Customers</h1>
    <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-2" href="<?= base_url('/pages/customers'); ?>"> <i class="fas fa-plus"></i> Add New Customer </a>

    <!-- DataTables Customer -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Date Input</th>
                            <th scope="col">No Order</th>
                            <th scope="col">Nama</th>
                            <th scope="col">STO</th>
                            <th scope="col">Mitra</th>
                            <th scope="col">PIC</th>
                            <th scope="col">Status</th>
                            <th scope="col">Paket</th>
                            <th scope="col">Speed</th>
                            <th scope="col">Abonemen</th>
                            <th colspan="3" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($customer as $row) {
                            echo '
                                <tr>
                                <td>' . $row['id_customer'] . '</td>
                                <td>' . $row['date_input'] . '</td>
                                <td>' . $row['no_order'] . '</td>
                                <td>' . $row['nama_cust'] . '</td>
                                <td>' . $row['sto'] . '</td>
                                <td>' . $row['mitra'] . '</td>
                                <td>' . $row['pic'] . '</td>
                                <td>' . $row['status'] . '</td>
                                <td>' . $row['paket'] . '</td>
                                <td>' . $row['speed'] . '</td>
                                <td>' . $row['abonemen'] . '</td>
                                <td><a href="#" class="btn btn-danger btn-sm btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </a></td>
                                <td><a href="#" class="btn btn-danger btn-sm btn-circle">
                                        <i class="fas fa-pen"></i>
                                    </a></td>
                            </tr>
                                ';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>