<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                <span class="icon-menu"></span>
            </button>
        </div>
        <div>
            <a class="navbar-brand brand-logo" href="/admin">
                <img class="img-fluid" src="/dist/assets/images/logo.png" alt="logo" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="/admin">
                <img class="img-fluid" src="/dist/assets/images/logo-mini.pgn" alt="logo" />
            </a>
        </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav">
            <li class="nav-item fw-semibold d-none d-lg-block ms-0">
                <h1 class="welcome-text">Bem-Vindo, <span class="text-black fw-bold">ANATA</span></h1>
                <h3 class="welcome-sub-text">Painel administrativo do sistema </h3>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">

            <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="img-xs rounded-circle" src="/dist/assets/images/faces/face8.png" alt="Profile image">
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <div class="dropdown-header text-center">
                        <img class="img-md rounded-circle" src="/dist/assets/images/faces/face8.png"
                            alt="Profile image">
                        <p class="mb-1 mt-3 fw-semibold">{{ auth()->user()->name }}</p>
                        <p class="fw-light text-muted mb-0">{{ auth()->user()->funcao }}</p>
                    </div>
                    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); // Evento para não processar a página
                                                     this.closest('form').submit();" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Terminar
                            Sessão</a>
                    </form>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
