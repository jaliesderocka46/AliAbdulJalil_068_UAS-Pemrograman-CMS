<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Animate.css -->
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
<nav class="navbar navbar-dark bg-dark shadow">
    <div class="container">
        <span class="navbar-brand fw-bold">Data Mahasiswa Universitas Trunojoyo Madura</span>
    </div>
</nav>

<!-- CONTENT -->
<div class="container my-5 animate__animated animate__fadeIn">
    <div class="card shadow-lg">
        <div class="card-header bg-warning text-dark">
            <h5 class="mb-0">Edit Data Mahasiswa</h5>
        </div>

        <div class="card-body">
            <form action="<?= base_url('mahasiswa/update') ?>" method="post">

                <input type="hidden" name="id" value="<?= $mahasiswa->id ?>">

                <div class="mb-3">
                    <label class="form-label">NIM</label>
                    <input type="text" name="nim" class="form-control" value="<?= $mahasiswa->nim ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?= $mahasiswa->nama ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" value="<?= $mahasiswa->jurusan ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" rows="3" required><?= $mahasiswa->alamat ?></textarea>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="<?= base_url('mahasiswa') ?>" class="btn btn-secondary">
                        Kembali
                    </a>
                    <button type="submit" class="btn btn-warning">
                        Update
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- FOOTER -->
<footer class="text-center py-3 mt-auto">
    <small>© <?= date('Y') ?> Ali Abdul Jalil| 230631100068</small>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
