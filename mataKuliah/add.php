<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $kode_mk = $_POST['kode_mk'];
    $nama_mk = $_POST['nama_mk'];
    $sks = $_POST['sks'];

    $result = mysqli_query($con, "INSERT INTO mata_kuliah(kode_mk,nama_mk,sks) VALUES('$kode_mk','$nama_mk','$sks')");

    echo "<script>window.location.href ='?page=mataKuliah';</script>";
}
?>

<h4 class="mb-5">Tambah Data Mata Kuliah</h4>

<form method="post">
    <div class="mb-3 row">
        <label for="kode_mk" class="col-sm-2 col-form-label">Kode Mata Kuliah</label>
        <div class="col-sm-10">
            <input type="text" name="kode_mk" class="form-control" placeholder="Masukan kode mata kuliah...">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama_mk" class="col-sm-2 col-form-label">Nama Mata Kuliah</label>
        <div class="col-sm-10">
            <input type="text" name="nama_mk" class="form-control" placeholder="Masukan nama mata kuliah...">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="sks" class="col-sm-2 col-form-label">SKS</label>
        <div class="col-sm-10">
            <input type="number" name="sks" class="form-control" placeholder="Masukan jumlah SKS...">
        </div>
    </div>

    <div class="row">
        <div class="offset-md-2">
            <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
            <a href="?page=mataKuliah" class="btn btn-warning">Kembali</a>
        </div>
    </div>
</form>
