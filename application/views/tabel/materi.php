<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="page-title mb-0 p-0">Materi</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="welcome">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tabel Materi</li>
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
                    <h4 class="card-title">Data Materi</h4>
                    <a href="<?php echo base_url().'tambahmateri'; ?>" class="btn btn-success mb-3">Tambah Materi</a>
                    <div class="table-responsive">
                        <table class="table user-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>ID Kursus</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Link Embed</th>
                                    <th>Dibuat Pada</th>
                                    <th>Diperbarui Pada</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($materi as $m) : ?>
                                    <tr>
                                        <td><?php echo $m->id; ?></td>
                                        <td><?php echo $m->id_kursus; ?></td>
                                        <td><?php echo $m->judul; ?></td>
                                        <td><?php echo $m->deskripsi; ?></td>
                                        <td><?php echo $m->link_embed; ?></td>
                                        <td><?php echo $m->dibuat_pada; ?></td>
                                        <td><?php echo $m->diperbarui_pada; ?></td>
                                        <td>
                                            <a href="<?php echo base_url().'materi/edit/'.$m->id; ?>" class="btn btn-warning">Edit</a>
                                            <a href="<?php echo base_url().'materi/hapus/'.$m->id; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus materi ini?');">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
