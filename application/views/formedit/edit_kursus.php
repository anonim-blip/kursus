<!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Kursus</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="welcome">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tabel Kursus</li>
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
            <div class="container-fluid"><div class="row">
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h1>Edit Kursus</h1>
                    <h4>Edit Data</h4>
                </div>
                <div class="card-body">
                    <?php foreach($kursus as $k){ ?>
                    <form id="kursusForm" action="<?php echo base_url(). 'kursus/update'; ?>" method="post">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="hidden" name="id" value="<?php echo $k->id; ?>">
                            <input type="text" name="judul" class="form-control" id="judul" value="<?php echo $k->judul; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" id="deskripsi" required><?php echo $k->deskripsi; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="durasi">Durasi</label>
                            <input type="text" name="durasi" class="form-control" id="durasi" value="<?php echo $k->durasi; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="dibuat_pada">Dibuat Pada</label>
                            <input type="text" name="dibuat_pada" class="form-control" id="dibuat_pada" value="<?php echo $k->dibuat_pada; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="diperbarui_pada">Diperbarui Pada</label>
                            <input type="text" name="diperbarui_pada" class="form-control" id="diperbarui_pada" value="<?php echo date('Y-m-d H:i:s'); ?>" readonly>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="Simpan" class="btn btn-primary">
                        </div>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
