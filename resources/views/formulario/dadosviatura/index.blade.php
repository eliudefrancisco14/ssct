<!doctype html>
<html lang="pt">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta charset="utf-8">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

    <title>SSCT</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap"
        rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="/css/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="/css/css/responsive.css" rel="stylesheet" />

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/themify-icons/themify-icons.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="/css/css/sweetalert2.min.css">
    <script src="/js/sweetalert/sweetalert2.all.min.js"></script>

    <style>
        @media (max-width: 992px) {

            .theme {
                visibility: hidden;
                display: none;
            }
        }

        #mainNav {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            background-color: #fff;
            transition: background-color 0.2s ease;
        }

        #mainNav .navbar-brand {
            font-family: "Merriweather Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-weight: 700;
            color: white;
        }

        #mainNav .navbar-nav .nav-item .nav-link {
            color: #6c757d;
            font-family: "Merriweather Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-weight: 700;
            font-size: 0.9rem;
            padding: 0.75rem 0;
        }

        #mainNav .navbar-nav .nav-item .nav-link:hover,
        #mainNav .navbar-nav .nav-item .nav-link:active {
            color: white;
            border-bottom: 2px solid white;
            transition: width 0.2s ease;
        }

        #mainNav .navbar-nav .nav-item .nav-link.active {
            color: white !important;
            border-bottom: 2px solid white;
            transition: width 0.2s ease;
        }

        #mainNav .navbar-nav .nav-item .nav-link:hover::after,
        #mainNav .navbar-nav .nav-item .nav-link:active::after {
            width: 100%;
        }

        #mainNav .navbar-nav .nav-item .nav-link.active::after {
            width: 100%;
        }

        #mainNav.navbar-shrink .navbar-nav .nav-item .nav-link:hover::after {
            width: 100%;
        }

        @media (min-width: 992px) {
            #mainNav {
                box-shadow: none;
                background-color: transparent;
            }

            #mainNav .navbar-nav .nav-item .nav-link:hover::after,
            #mainNav .navbar-nav .nav-item .nav-link:active::after {
                width: 100%;
            }

            #mainNav .navbar-nav .nav-item .nav-link.active::after {
                width: 100%;
            }

            #mainNav.navbar-shrink .navbar-nav .nav-item .nav-link:hover::after {
                width: 100%;
            }

            #mainNav .navbar-brand {
                color: rgba(255, 255, 255, 0.7);
            }

            #mainNav .navbar-brand:hover {
                color: #fff;

                border-bottom: 2px solid white;
                transition: width 0.2s ease;
            }

            #mainNav .navbar-nav .nav-item .nav-link {
                color: rgba(255, 255, 255, 0.7);
                padding: 0 1rem;
            }

            #mainNav .navbar-nav .nav-item .nav-link:hover {
                color: #fff;

                border-bottom: 2px solid white;
                transition: width 0.2s ease;
            }

            #mainNav .navbar-nav .nav-item:last-child .nav-link {
                padding-right: 0;
            }

            #mainNav.navbar-shrink {
                box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
                background-color: #E0DFDA;
            }

            #mainNav.navbar-shrink .navbar-brand {
                color: #212529;
            }

            #mainNav.navbar-shrink .navbar-brand:hover {
                color: #f4623a;
            }

            #mainNav.navbar-shrink .navbar-nav .nav-item .nav-link {
                color: #212529;
            }

            #mainNav.navbar-shrink .navbar-nav .nav-item .nav-link:hover {
                color: white;

                border-bottom: 2px solid white;
                transition: width 0.2s ease;
            }
        }
    </style>
</head>

<body>

    <div class="flex">
        <header class="header_section">
            <div class="header_bottom">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
                        <div class="container-fluid d-flex justify-content-between align-items-center">
                            <div class="text-start">
                                <a href="/">
                                    <h1 class="mt-3">
                                        <strong>SSCT</strong>
                                    </h1>
                                </a>
                            </div>

                            <div class="mt-4 text-end">
                                <div class="collapse navbar-collapse" id="navbarResponsive">
                                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                                        <li class="nav-item"><a class="nav-link" href="/">Início</a></li>
                                        <li class="nav-item"><a class="nav-link" href="/#services">Serviços</a></li>
                                        <li class="nav-item"><a class="nav-link" href="/#about">Acerca</a></li>
                                        @auth
                                            <li class="nav-item">
                                                <a href="{{ route('admin.dashboard') }}" class="nav-link">Painel</a>
                                            </li>
                                        @else
                                            <li class="nav-item">
                                                <a href="{{ route('login') }}" class="nav-link">Entrar</a>
                                            </li>
                                            {{-- @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                                                </li>
                                            @endif --}}
                                        @endauth

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>

                    <script>
                        window.addEventListener('DOMContentLoaded', event => {
                            // Navbar shrink function
                            var navbarShrink = function() {
                                const navbarCollapsible = document.body.querySelector('#mainNav');
                                if (!navbarCollapsible) {
                                    return;
                                }
                                if (window.scrollY === 0) {
                                    navbarCollapsible.classList.remove('navbar-shrink')
                                } else {
                                    navbarCollapsible.classList.add('navbar-shrink')
                                }

                            };

                            // Shrink the navbar 
                            navbarShrink();

                            // Shrink the navbar when page is scrolled
                            document.addEventListener('scroll', navbarShrink);

                            // Activate Bootstrap scrollspy on the main nav element
                            const mainNav = document.body.querySelector('#mainNav');
                            if (mainNav) {
                                new bootstrap.ScrollSpy(document.body, {
                                    target: '#mainNav',
                                    rootMargin: '0px 0px -40%',
                                });
                            };

                            // Collapse responsive navbar when toggler is visible
                            const navbarToggler = document.body.querySelector('.navbar-toggler');
                            const responsiveNavItems = [].slice.call(
                                document.querySelectorAll('#navbarResponsive .nav-link')
                            );
                            responsiveNavItems.map(function(responsiveNavItem) {
                                responsiveNavItem.addEventListener('click', () => {
                                    if (window.getComputedStyle(navbarToggler).display !== 'none') {
                                        navbarToggler.click();
                                    }
                                });
                            });
                        });

                        function toggleColorMode() {
                            const currentColorScheme = document.body.getAttribute("data-bs-theme");

                            if (currentColorScheme === "dark") {
                                document.body.setAttribute("data-bs-theme", "light");
                                const navLight = document.getElementsByClassName("navbar-dark");
                                const allLight = document.querySelectorAll(".bg-dark");
                                const buttons = document.querySelectorAll(".btn-dark");
                                for (const button of buttons) {
                                    button.classList.remove("btn-dark");
                                    button.classList.add("btn-light");
                                }

                                navLight.classList.remove("navbar-dark");
                                navLight.classList.add("navbar-light");

                                for (const element of allLight) {
                                    element.classList.remove("bg-dark");
                                    element.classList.add("bg-light");
                                }
                            } else {
                                document.body.setAttribute("data-bs-theme", "dark");
                                const navLight = document.getElementsByClassName("navbar-light");
                                const allLight = document.querySelectorAll(".");
                                const buttons = document.querySelectorAll(".btn-light");
                                for (const button of buttons) {
                                    button.classList.remove("btn-light");
                                    button.classList.add("btn-dark");
                                }

                                navLight.classList.remove("navbar-light");
                                navLight.classList.add("navbar-dark");

                                for (const element of allLight) {
                                    element.classList.remove("bg-light");
                                    element.classList.add("bg-dark");
                                }
                            }
                        }
                    </script>
                </div>
            </div>
        </header>

    </div>

    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container-card">
            <h2>Cadastre se</h2>
            <form method="POST" action="{{ route('site.store') }}" id="signup-form" class="signup-form"
                enctype="multipart/form-data">
                @csrf
                <h3>
                    <span class="icon"><i class="ti-user"></i></span>
                    <span class="title_text">Dados Pessoais</span>
                </h3>
                <fieldset>
                    <legend>
                        <span class="step-heading">Informação Pessoal: </span>
                        <span class="step-number">Step 1 / 3</span>
                    </legend>
                    <div class="form-group">
                        <label for="nome" class="form-label required">Nome Completo</label>
                        <input type="text" name="nome" id="nome" value="{{ old('nome') }}" />
                    </div>

                    <div class="form-group">
                        <label for="ndebi" class="form-label required">Número de Bilhete</label>
                        <input type="text" name="ndebi" id="ndebi" value="{{ old('ndebi') }}" />
                    </div>
                    <div class="">
                        <label for="genero">
                            <span>Gênero</span>
                            <select name="genero" id="genero" type="text">
                                <option value="">Selecciona...</option>
                                <option value="masculino">Masculino</option>
                                <option value="femenino">Feminino</option>
                            </select></label>

                    </div>
                    <div class="form-group">
                        <div class="form-date">
                            <label for="data" class="form-label">Data de Nascimento</label>
                            <div class="form-date-group">
                                <input type="date" name="data" id="data"><br>
                            </div>
                        </div><br>
                        <div class="form-group">
                            <label for="numerotelefone" class="form-label required">Número de Telefone</label>
                            <input type="text" name="numerotelefone" id="numerotelefone"
                                value="{{ old('numerotelefone') }}" />
                        </div>

                        <div class="form-group">
                            <label for="documentostaxista">Documentos da Viatura</label>
                            <input type="file" name="documentostaxista" id="documentostaxista"
                                value="{{ old('documentostaxista') }}">
                        </div>
                        <div class="form-group">
                            <span class="text-gray-700 dark:text-gray-400">Placa</span>
                            <select name="placa_id" required>
                                <option value=""> --Selecione o Placa</option>
                                @foreach ($placas as $placa)
                                    <option value="{{ $placa->id }}">{{ $placa->nome }}</option>
                                @endforeach
                            </select>
                        </div>

                </fieldset>

                <h3>
                    <span class="icon"><i class="ti-email"></i></span>
                    <span class="title_text">Livretes</span>
                </h3>
                <fieldset>
                    <legend>
                        <span class="step-heading">Informação do Livrete: </span>
                        <span class="step-number">Step 2 / 3</span>
                    </legend>

                    <div class="form-group">

                    <div class="form-group">
                        <label for="matricula" class="form-label required">Matrícula</label>
                        <input type="text" name="matricula" id="matricula" value="{{ old('matricula') }}" />
                    </div>

                    <div class="form-group">
                        <label for="modelo" class="form-label required">Modelo Viatura</label>
                        <input type="text" name="modelo" id="modelo" value="{{ old('modelo') }}" />
                    </div>
                    <div class="form-group">
                        <label for="ndemotor" class="form-label required">Número de Motor</label>
                        <input type="text" name="ndemotor" id="ndemotor" value="{{ old('ndemotor') }}" />
                    </div>
                    <div class="form-group">
                        <label for="servico" class="form-label required">Serviço</label>
                        <input type="text" name="servico" id="servico" value="{{ old('servico') }}" />
                    </div>

                        <label for="documentoslivrete" class="form-label required">Documentos da
                            Viatura</label>
                        <input type="file" name="documentoslivrete" id="documentoslivrete"
                            value="{{ old('documentoslivrete') }}">

                        <div class="form-group">
                            <span class="text-gray-700 dark:text-gray-400">Proprietário da Viatura</span>
                            <select name="proprietario" required>
                                <option value=""> --Selecione um opção</option>
                                <option value="Sim">Sim</option>
                                <option value="Nao">Não</option>
                            </select>
                        </div>

                    </div>

                </fieldset>

                <h3>
                    <span class="icon"><i class="ti-credit-card"></i></span>
                    <span class="title_text">Títulos</span>
                </h3>
                <fieldset>
                    <legend>
                        <span class="step-heading">Informação do Título: </span>
                        <span class="step-number">Step 3 / 3</span>
                    </legend>
                    <div class="form-group">

                        <div class="form-group">
                            <label for="dataemissao" class="required">Data de Emissão</label>
                            <input type="date" name="dataemissao" id="dataemissao" />
                        </div>

                        <div class="form-group">
                            <label for="ndetitulo" class="form-label required">Número de Título</label>
                            <input type="text" name="ndetitulo" id="ndetitulo" value="{{ old('ndetitulo') }}" />
                        </div>

                </fieldset>
            </form>
        </div>

    </section>
    <footer class="position-relative fixed-bottom">


        <section class="info_section ">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="info_logo">
                            <a class="navbar-brand" href="index.html">
                                <span>
                                    ANATA
                                </span>
                            </a>
                            <p>
                                Aumente seus lucros sem sacrificar sua jornada. Com nosso sistema de subvenção de
                                combustível, você pode economizar enquanto continua dirigindo.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-6">
                        <div class="info_links">
                            <h5>
                                SSCT
                            </h5>
                            <ul>
                                <li>
                                    <a href="">
                                        Transforme cada viagem em uma economia. inteligente de economizar dinheiro.
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        Nossa plataforma de subvenção de combustível oferece aos taxistas uma maneira
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        inteligente de economizar dinheiro.
                                    </a>

                                </li>
                                <li>
                                    <a href="">
                                        quisdotempor incididunt r
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- end info_section -->
        <div class="container-fluid footer_section">
            <!-- footer section -->
            <p>
                &copy; <span id="currentYear"></span> All Rights Reserved.
                <a href="https://themewagon.com">SSCT</a>
            </p>
        </div>


    </footer>
    <!-- footer section -->

    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    {{--  <script src="js/custom.js"></script> --}}

    <footer>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
        <script src="vendor/jquery-steps/jquery.steps.min.js"></script>
        <script src="vendor/minimalist-picker/dobpicker.js"></script>
        <script src="js/main.js"></script>

        <script src="js/sweetalert/sweetalert2.all.min.js"></script>
        <script src="js/sweetalert/sweetalert.all.js"></script>

    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

@if (session('create'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Cadastrado com sucesso!',
        showConfirmButton: true
    })
</script>
@endif

</body>

</html>
