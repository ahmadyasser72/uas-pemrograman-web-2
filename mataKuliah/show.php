<h4>Tambah Data Mata Kuliah</h4>
<a href="?page=mataKuliahAdd" class="btn btn-primary mb-4">Tambah Data</a>
<a href="?page=mataKuliahCetak" class="btn btn-warning mb-4" target="_blank">Cetak</a>

<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>Kode Mata Kuliah</th>
      <th>Nama Mata Kuliah</th>
      <th>SKS</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include 'connection.php';
    $query = mysqli_query($con, "SELECT * FROM mata_kuliah");
    while ($data = mysqli_fetch_array($query)) {
      ?>
      <tr>
        <td><?php echo $data['kode_mk']; ?></td>
        <td><?php echo $data['nama_mk']; ?></td>
        <td><?php echo $data['sks']; ?></td>
        <td>
          <a class="btn btn-sm btn-success" href="?page=mataKuliahEdit&id=<?= $data['id']; ?>">Edit</a>
          <a class="btn btn-sm btn-danger" href="?page=mataKuliahDelete&id=<?= $data['id']; ?>"
            onclick="return confirm('Lanjutkan menghapus data ?')">Hapus </a>
        </td>
      </tr>
      <?php
    }
    ?>
  </tbody>
</table>
