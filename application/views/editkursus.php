<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, materialpro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, materialpro admin lite design, materialpro admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Material Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Kursus</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/materialpro-lite/" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">

    <!-- CDN links -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/chartist/0.11.4/chartist.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/chartist/0.11.4/chartist-plugin-tooltip.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/c3/0.7.20/c3.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">

    <style>
        /* Custom styles */
        .navbar-header {
            transition: all 0.3s ease;
        }

        .navbar-header:hover {
            background-color: #34495E;
        }

        .nav-toggler:hover i {
            color: #1ABC9C;
            transform: scale(1.2);
            transition: transform 0.3s ease;
        }

        .card-body {
            padding: 20px;
        }

        .page-title {
            font-family: 'Roboto', sans-serif;
            color: #34495E;
            margin-bottom: 20px;
        }

        .breadcrumb-item a {
            color: #3498DB;
            text-decoration: none;
        }

        .breadcrumb-item a:hover {
            color: #2980B9;
        }

        .table-responsive {
            margin-top: 20px;
        }

        table {
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #2980B9;
            color: white;
        }

        td {
            background-color: #ECF0F1;
        }

        .footer {
            padding: 20px;
            background-color: #34495E;
            color: #ECF0F1;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <!-- Main wrapper -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

       
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
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
<!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> Surianti Hadori </a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="assets/plugins/d3/d3.min.js"></script>
    <script src="assets/plugins/c3-master/c3.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/pages/dashboards/dashboard1.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>