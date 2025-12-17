<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Animate.css (animasi ringan) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            min-height: 100vh;
        }
        .card {
            border-radius: 15px;
        }
        footer {
            background-color: #2c2c2c;
            color: #ffffff;
        }
    </style>
</head>
<body>

<!-- HEADER -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container">
        <span class="navbar-brand fw-bold">Data Mahasiswa Universitas Trunojoyo Madura</span>
    </div>
</nav>

<!-- CONTENT -->
<div class="container my-5 animate__animated animate__fadeIn">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Data Mahasiswa</h5>
            <a href="<?= base_url('mahasiswa/tambah') ?>" class="btn btn-light btn-sm">
                + Tambah Data
            </a>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-striped table-hover text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1; foreach ($mahasiswa as $mhs): ?>
                    <tr class="animate__animated animate__fadeInUp">
                        <td><?= $no++ ?></td>
                        <td><?= $mhs->nim ?></td>
                        <td><?= $mhs->nama ?></td>
                        <td><?= $mhs->jurusan ?></td>
                        <td><?= $mhs->alamat ?></td>
                        <td>
                            <a href="<?= base_url('mahasiswa/edit/'.$mhs->id) ?>" class="btn btn-warning btn-sm">
                                Edit
                            </a>
                            <a href="<?= base_url('mahasiswa/hapus/'.$mhs->id) ?>"
                               onclick="return confirm('Yakin hapus?')"
                               class="btn btn-danger btn-sm">
                                Hapus
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- FOOTER -->
<footer class="text-center py-3 mt-auto">
    <small>© <?= date('Y') ?> Ali Abdul Jalil| 230631100068 </small>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
