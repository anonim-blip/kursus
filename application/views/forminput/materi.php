<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="admin dashboard, bootstrap 5, HTML CSS">
    <meta name="description" content="Admin Dashboard">
    <meta name="robots" content="noindex,nofollow">
    <title>Materi</title>
    <link rel="canonical" href="https://www.yoursite.com" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        .page-title {
            font-family: 'Roboto', sans-serif;
            color: #34495E;
        }
        .form-control {
            margin-bottom: 15px;
        }
        .btn-custom {
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Form Materi</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="welcome">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Materi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Materi</h4>
                        <form action="<?php echo base_url().'materi/tambah_aksi'; ?>" method="post">
                            <div class="mb-3">
                                <label for="id_kursus" class="form-label">ID Kursus</label>
                                <input type="text" class="form-control" id="id_kursus" name="id_kursus" value="<?php echo isset($materi) ? $materi->id_kursus : ''; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul" value="<?php echo isset($materi) ? $materi->judul : ''; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required><?php echo isset($materi) ? $materi->deskripsi : ''; ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="link_embed" class="form-label">Link Embed</label>
                                <input type="text" class="form-control" id="link_embed" name="link_embed" value="<?php echo isset($materi) ? $materi->link_embed : ''; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="dibuat_pada" class="form-label">Dibuat Pada</label>
                                <input type="text" class="form-control" id="dibuat_pada" name="dibuat_pada" value="<?php echo isset($materi) ? $materi->dibuat_pada : ''; ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="diperbarui_pada" class="form-label">Diperbarui Pada</label>
                                <input type="text" class="form-control" id="diperbarui_pada" name="diperbarui_pada" value="<?php echo isset($materi) ? $materi->diperbarui_pada : ''; ?>" readonly>
                            </div>
                            <button type="submit" class="btn btn-success btn-custom">Simpan</button>
                            <a href="<?php echo base_url().'materi'; ?>" class="btn btn-secondary btn-custom">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
