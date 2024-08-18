<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Proyek</title>
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
        <a class="navbar-brand" href="#">Dashboard Proyek</a>
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
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Proyek</h3>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo site_url('proyek/simpan'); ?>" method="post">
                            <div class="form-group">
                                <label for="namaProyek">Nama Proyek</label>
                                <input type="text" class="form-control" id="namaProyek" name="namaProyek" required>
                            </div>
                            <div class="form-group">
                                <label for="client">Client</label>
                                <input type="text" class="form-control" id="client" name="client" required>
                            </div>
                            <div class="form-group">
                                <label for="tglMulai">Tanggal Mulai</label>
                                <input type="datetime-local" class="form-control" id="tglMulai" name="tglMulai" required>
                            </div>
                            <div class="form-group">
                                <label for="tglSelesai">Tanggal Selesai</label>
                                <input type="datetime-local" class="form-control" id="tglSelesai" name="tglSelesai">
                            </div>
                            <div class="form-group">
                                <label for="pimpinanProyek">Pimpinan Proyek</label>
                                <input type="text" class="form-control" id="pimpinanProyek" name="pimpinanProyek" required>
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan Proyek</button>
                        </form>
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
