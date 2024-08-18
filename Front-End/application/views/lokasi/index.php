<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Lokasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 5rem;
        }
        .card {
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Dashboard Lokasi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('proyek'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('proyek/tambah'); ?>">Tambah Proyek</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo site_url('lokasi'); ?>">Lokasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('lokasi/tambah'); ?>">Tambah Lokasi</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Lokasi</h3>
                    </div>
                    <div class="card-body">
                        <a href="<?php echo site_url('lokasi/tambah'); ?>" class="btn btn-primary mb-3">Tambah Lokasi</a>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Lokasi</th>
                                    <th>Negara</th>
                                    <th>Provinsi</th>
                                    <th>Kota</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($lokasi)): ?>
                                    <?php foreach ($lokasi as $item): ?>
                                        <tr>
                                            <td><?php echo htmlspecialchars($item['id']); ?></td>
                                            <td><?php echo htmlspecialchars($item['namaLokasi']); ?></td>
                                            <td><?php echo htmlspecialchars($item['negara']); ?></td>
                                            <td><?php echo htmlspecialchars($item['provinsi']); ?></td>
                                            <td><?php echo htmlspecialchars($item['kota']); ?></td>
                                            <td>
                                                <a href="<?php echo site_url('lokasi/edit/' . $item['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="<?php echo site_url('lokasi/hapus/' . $item['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus?')">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="6" class="text-center">Tidak ada data lokasi</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
