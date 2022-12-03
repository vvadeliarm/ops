<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Layanan SKM</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column" style="background-color: white">
        <!-- Main Content -->
        <div id="content">
            <button type="hidden" class="but" data-toggle="modal" data-target="#disetujuiModal"></button>
        </div>

        <!-- Modal Disetujui -->
        <div class="modal fade" id="disetujuiModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: red; color: White; ">
                        <h5 class="modal-title" style="text-align: center;">Peringatan</h5>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3">
                            <div class="col-md-12">
                                <div id="notifications"><?php echo session()->getFlashdata('msg'); ?></div>
                            </div>
                        </form>
                    </div>
                    <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-end" margin:0px;> -->
                    <div class="modal-footer">
                        <a href="javascript:window.history.go(-1);"><button type="button" class="btn btn-primary center-block" style="background-color: green;">OK</button></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="/vendor/jquery/jquery.min.js"></script>
        <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="/js/sb-admin-2.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.but').trigger('click');
            })
        </script>
</body>

</html>