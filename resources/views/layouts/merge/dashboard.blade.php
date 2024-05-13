<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SSCT</title>
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
    <link rel="stylesheet" href="/css/css/sweetalert2.min.css">
    <script src="/js/sweetalert/sweetalert2.all.min.js"></script>
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


    <script src="js/sweetalert/sweetalert2.all.min.js"></script>
    <script src="js/sweetalert/sweetalert.all.js"></script>


    @if (session('not_found'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Dado inexistente!',
                showConfirmButton: true
            })
        </script>
    @endif
    <script>
        function impreensao() {

            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "btn btn-success",
                    cancelButton: "btn btn-danger"
                },
                buttonsStyling: false
            });
            swalWithBootstrapButtons.fire({
                title: "Aguardando!",
                text: "Faça a impreesão, e depois clica em seguinte!",
                imageUrl: "/images/fingerprint.svg",
                imageWidth: 400,
                imageHeight: 200,
                showCancelButton: true,
                confirmButtonText: "Seguinte!",
                cancelButtonText: "Cancelar!",
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // alert("Confirmado");
                    // Fazendo a requisição com Fetch
                    fetch('/admin/taxistas/vertaxista', {
                            method: 'GET',
                        })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Erro ao fazer requisição');
                            }
                            return response.json();
                        })
                        .then(data => {
                            // Obtendo o ID da resposta
                            const id = data.idTaxista;

                            // Fazendo a segunda requisição com o ID recebido
                            fetch(`/admin/taxistas/${id}`, {
                                    method: 'GET',
                                })
                                .then(response => {
                                    if (!response.ok) {
                                        throw new Error(`Erro ao fazer requisição para /taxista/${id}`);
                                    }
                                    return response.text();
                                })
                                .then(data => {
                                    // Redirecionando para a rota com o ID do taxista
                                    window.location.href = `/admin/taxistas/${id}`;
                                })
                                .catch(error => {
                                    // Manipule os erros aqui
                                    Swal.fire({
                                        position: "center",
                                        icon: "error",
                                        title: "Não existe uma impressão",
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                });
                        })
                        .catch(error => {
                            // Manipule os erros aqui
                            Swal.fire({
                                position: "center",
                                icon: "error",
                                title: "Não existe uma impressão",
                                showConfirmButton: false,
                                timer: 1500
                            });
                            // console.error(error);
                        });
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire({
                        title: "Cancelado",
                        text: "Impreensão cancelada.",
                        icon: "error"
                    });
                }
            });
        }
    </script>


    <!-- <script src="/dist/assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
</body>

</html>
