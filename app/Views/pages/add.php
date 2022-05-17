<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<!-- Page Heading -->
<div class="container">
    <h1 class="h4 mb-2 text-gray-800">Add New Sales</h1>

    <form action="<?php echo site_url('/submit-form'); ?>" method="post">
        <div class="form-group row mb-3">
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">ID Sales</span>
                <input type="number" name="userID" class="form-control" id="userID" placeholder="DS123**">
            </div>
            <div class="col-xl-3 col-sm-6">
                <span class="text-xs">Fullname</span>
                <input type="text" name="nama_sales" class="form-control" id="nama_sales">
            </div>
        </div>
        <div class="form-group row mb-3">
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">Witel</span>
                <input type="text" name="witel" class="form-control form-control-user" id="witel" placeholder="Bekasi">
            </div>
            <div class="col-xl-3 col-sm-6">
                <span class="text-xs">Nomor Telepon</span>
                <input type="number" name="no_telp" class="form-control form-control-user" id="no_telp" placeholder="0822**">
            </div>
        </div>
        <div class="form-group row mb-3">
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">Mitra</span>
                <input type="text" name="mitra" class="form-control form-control-user" id="mitra" placeholder="MCP">
            </div>
            <div class="col-xl-3 col-sm-6">
                <span class="text-xs">Posisi</span>
                <input type="text" name="posisi" class="form-control form-control-user" id="posisi" placeholder="Sales Force">
            </div>
        </div>
        <div class="form-group row mb-3">
            <div class="col-xl-3 col-sm-6 ">
                <span class="text-xs">Tanggal Aktif</span>
                <input type="date" name="tgl_aktif" class="form-control" id="tgl_aktif">
            </div>
            <div class="col-xl-3 col-sm-6">
                <span class="text-xs">SPV</span>
                <input type="text" name="spv" class="form-control form-control-user" id="spv" placeholder="Dewi Puspa">
            </div>
        </div>
        <a class="d-none d-sm-inline-block btn btn-sm shadow-sm mb-2" href="<?= site_url('pages/data_sales'); ?>"> Cancel</a>
        <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-2" > Add New</button>
</div>

<?= $this->endSection(); ?>

