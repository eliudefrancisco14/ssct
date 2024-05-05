<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 </title>
    <!-- plugins:css -->
    
    <link rel="stylesheet" href="/dist/assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="/dist/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/dist/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/dist/assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/dist/assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="/dist/assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="/dist/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/dist/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/dist/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="/dist/assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/dist/assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/dist/assets/images/favicon.png" />
</head>

<body class="with-welcome-text">
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('layouts._includes.dashboard.nav')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            @include('layouts._includes.dashboard.aside')
            <!-- partial -->
            <div class="main-panel">
                @yield('content')
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                @include('layouts._includes.dashboard.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/dist/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="/dist/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/dist/assets/vendors/chart.js/chart.umd.js"></script>
    <script src="/dist/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/dist/assets/js/off-canvas.js"></script>
    {{-- <script src="/dist/assets/js/template.js"></script> --}}
    <script src="/dist/assets/js/settings.js"></script>
    <script src="/dist/assets/js/hoverable-collapse.js"></script>
    <script src="/dist/assets/js/todolist.js"></script> --}}
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="/dist/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="/dist/assets/js/dashboard.js"></script>

    <script src="/dist/assets/vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="/dist/assets/vendors/datatables/Portuguese-Brasil.json"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                language: {
                    url: "/dist/assets/vendors/datatables/Portuguese-Brasil.json"
                }
            });
        });
    </script>

    <script src="/dist/assets/vendors/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- <script src="/dist/assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
</body>

</html>
