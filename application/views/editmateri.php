<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Materi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Edit Materi</h1>
        <?php if (!empty($materi) && is_object($materi)) { ?>
        <form action="<?php echo base_url('materi/update'); ?>" method="post">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($materi->id); ?>">
            <div class="form-group">
                <label for="id_kursus">ID Kursus</label>
                <input type="text" name="id_kursus" class="form-control" id="id_kursus" value="<?php echo htmlspecialchars($materi->id_kursus); ?>" required>
            </div>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control" id="judul" value="<?php echo htmlspecialchars($materi->judul); ?>" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi" required><?php echo htmlspecialchars($materi->deskripsi); ?></textarea>
            </div>
            <div class="form-group">
                <label for="link_embed">Link Embed</label>
                <input type="text" name="link_embed" class="form-control" id="link_embed" value="<?php echo htmlspecialchars($materi->link_embed); ?>" required>
            </div>
            <div class="form-group">
                <label for="dibuat_pada">Dibuat Pada</label>
                <input type="text" name="dibuat_pada" class="form-control" id="dibuat_pada" value="<?php echo htmlspecialchars($materi->dibuat_pada); ?>" readonly>
            </div>
            <div class="form-group">
                <label for="diperbarui_pada">Diperbarui Pada</label>
                <input type="text" name="diperbarui_pada" class="form-control" id="diperbarui_pada" value="<?php echo date('Y-m-d H:i:s'); ?>" readonly>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
        <?php } else { ?>
        <p>Data materi tidak ditemukan.</p>
        <?php } ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
