<?php
include "connection.php";

function jumlah_data($table)
{
    global $con;
    $result = mysqli_query($con, "SELECT * FROM $table");
    return mysqli_num_rows($result);
}
?>

<div class="row my-5">
    <h1 class="text-primary">Rekap Data</h1>
    <div class="col-md-4">
        <div class="card text-bg-default mb-3 text-center text-secondary">
            <div class="card-header"><strong>Data Mahasiswa</strong></div>
            <div class="card-body">
                <i class="fa fa-user-graduate fa-3x"></i>
                <h4 class="card-title mt-4">
                    <?= jumlah_data("mahasiswa") ?> Data
                </h4>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-bg-default mb-3 text-center text-secondary">
            <div class="card-header"><strong>Data Dosen</strong></div>
            <div class="card-body">
                <i class="fa fa-users fa-3x"></i>
                <h4 class="card-title mt-4">
                    <?= jumlah_data("dosen") ?> Data
                </h4>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-bg-default mb-3 text-center text-secondary">
            <div class="card-header"><strong>Data Mata Kuliah</strong></div>
            <div class="card-body">
                <i class="fa fa-book fa-3x"></i>
                <h4 class="card-title mt-4">
                    <?= jumlah_data("mata_kuliah") ?> Data
                </h4>
            </div>
        </div>
    </div>
</div>
<div class="row my-5">
    <h1 class="text-primary">Profil</h1>
    <div class="col-lg-2">
        <div class="card border-default mb-3">
            <div class="card-header text-center text-secondary"><strong>Foto</strong></div>
            <div class="card-body text-center">
                <img src="assets/img/foto-profile.jpg" alt="Ahmad Yasser" width="128" height="128"
                    class="rounded-circle" style="object-fit: cover">
            </div>
        </div>
    </div>

    <div class="col-lg-2">
        <div class="card border-default mb-3">
            <div class="card-header text-center text-secondary"><strong>Media Sosial</strong></div>
            <div class="card-body text-center">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="https://github.com/ahmadyasser72" target="_blank"
                            class="btn btn-link">Github</a></li>
                    <li class="list-group-item"><a href="https://instagr.am/another.yasser" target="_blank"
                            class="btn btn-link">Instagram</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card border-default mb-3">
            <div class="card-header text-center text-secondary"><strong>Biodata</strong></div>
            <div class="card-body text-center">
                <table class="table" style="width:100%; margin:0 auto;">
                    <tbody>
                        <tr>
                            <td align="right" width="30%"><strong>NIK / NPM :</strong></td>
                            <td align="left" width="70%">6306020001 / 2210010525</td>
                        </tr>
                        <tr>
                            <td align="right" width="30%"><strong>Nama Lengkap :</strong></td>
                            <td align="left" width="70%">Ahmad Yasser</td>
                        </tr>
                        <tr>
                            <td align="right" width="30%"><strong>Fakultas :</strong></td>
                            <td align="left" width="70%">Teknologi Informasi</td>
                        </tr>
                        <tr>
                            <td align="right" width="30%"><strong>Program Studi :</strong></td>
                            <td align="left" width="70%">Teknik Informatika</td>
                        </tr>
                        <tr>
                            <td align="right" width="30%"><strong>Tempat Lahir :</strong></td>
                            <td align="left" width="70%">Kandangan</td>
                        </tr>
                        <tr>
                            <td align="right" width="30%"><strong>Tanggal Lahir :</strong></td>
                            <td align="left" width="70%">17 Desember 2003</td>
                        </tr>
                        <tr>
                            <td align="right" width="30%"><strong>Telepon :</strong></td>
                            <td align="left" width="70%">0887 4350 34436</td>
                        </tr>
                        <tr>
                            <td align="right" width="30%"><strong>email :</strong></td>
                            <td align="left" width="70%">ahmadyasser72@smk.belajar.id</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
