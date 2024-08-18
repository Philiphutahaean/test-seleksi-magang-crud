<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Lokasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 5rem;
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
            <div class="col-md-6">
                <h3>Edit Lokasi</h3>
                <form action="<?php echo site_url('lokasi/update/' . $lokasi['id']); ?>" method="post">
                    <div class="form-group">
                        <label for="namaLokasi">Nama Lokasi</label>
                        <input type="text" name="namaLokasi" id="namaLokasi" class="form-control" value="<?php echo htmlspecialchars($lokasi['namaLokasi']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="negara">Negara</label>
                        <input type="text" name="negara" id="negara" class="form-control" value="<?php echo htmlspecialchars($lokasi['negara']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="provinsi">Provinsi</label>
                        <input type="text" name="provinsi" id="provinsi" class="form-control" value="<?php echo htmlspecialchars($lokasi['provinsi']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="kota">Kota</label>
                        <input type="text" name="kota" id="kota" class="form-control" value="<?php echo htmlspecialchars($lokasi['kota']); ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
