<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<!-- Custom styles for this page -->
<link href="<?php echo base_url('sb admin') ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<!-- Page Heading -->
<div class="container">
    <h1 class="h4 mb-2 text-gray-800">Sales Order</h1>

    <!-- Topbar Search -->
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="row mb-3">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search by order" aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

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
                                <td><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm mb-2">
                                Progress</a></td>
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

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('sb admin') ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url('sb admin') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('sb admin') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('sb admin') ?>/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url('sb admin') ?>/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('sb admin') ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url('sb admin') ?>/js/demo/datatables-demo.js"></script>