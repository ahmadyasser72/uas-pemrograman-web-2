<?php
include 'connection.php';
$id = $_GET['id'];

// select data
$query = mysqli_query($con, "SELECT * FROM mata_kuliah WHERE id = $id");
$data = mysqli_fetch_array($query);

// update data
if (isset($_POST['submit'])) {
    $kode_mk = $_POST['kode_mk'];
    $nama_mk = $_POST['nama_mk'];
    $sks = $_POST['sks'];

    mysqli_query($con, "UPDATE mata_kuliah SET kode_mk='$kode_mk',nama_mk='$nama_mk',sks='$sks' WHERE id=$id");

    echo "<script>window.location.href ='?page=mataKuliah';</script>";
}
?>

<h4 class="mb-5">Edit Data Mata Kuliah</h4>

<form action="" method="post">
    <div class="mb-3 row">
        <label for="kode_mk" class="col-sm-2 col-form-label">Kode MK</label>
        <div class="col-sm-10">
            <input type="text" name="kode_mk" class="form-control" placeholder="Masukan kode mata kuliah..."
                value="<?= $data['kode_mk']; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama_mk" class="col-sm-2 col-form-label">Nama Mata Kuliah</label>
        <div class="col-sm-10">
            <input type="text" name="nama_mk" class="form-control" placeholder="Masukan nama mata kuliah..."
                value="<?= $data['nama_mk']; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="sks" class="col-sm-2 col-form-label">SKS</label>
        <div class="col-sm-10">
            <input type="number" name="sks" class="form-control" placeholder="Masukan jumlah SKS..."
                value="<?= $data['sks']; ?>">
        </div>
    </div>

    <div class="row">
        <div class="offset-md-2">
            <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
            <a href="?page=mataKuliah" class="btn btn-warning">Kembali</a>
        </div>
    </div>
</form>
