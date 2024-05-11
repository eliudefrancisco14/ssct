<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="/admin">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Painel</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/" target="_blank">
                <i class="mdi mdi-web menu-icon"></i>
                <span class="menu-title">Site</span>
            </a>
        </li>
        <li class="nav-item nav-category">Elementos</li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#companhia" aria-expanded="false"
                aria-controls="companhia">

                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">Taxistas</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="companhia">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.taxistas.create')}}"> Cadastrar </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.taxistas')}}"> Listar </a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#agencia" aria-expanded="false" aria-controls="agencia">
                <i class="menu-icon mdi mdi-card-text-outline"></i>
                <span class="menu-title">Livretes</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="agencia">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.livretes.create')}}"> Cadastrar </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.livretes')}}"> Listar </a>
                    </li>
                </ul>
            </div>
        </li>


        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#rota" aria-expanded="false" aria-controls="rota">
                <i class="menu-icon mdi mdi-chart-line"></i>
                <span class="menu-title">Títulos</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="rota">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.titulos.create')}}"> Cadastrar </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.titulos')}}"> Listar
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        @if(auth()->user()->funcao == "Administrador")

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#placa" aria-expanded="false" aria-controls="placa">
                <i class="menu-icon mdi mdi-car"></i>
                <span class="menu-title">Placas</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="placa">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.placas.create')}}"> Cadastrar </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.placas')}}"> Listar
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#user" aria-expanded="false" aria-controls="user">
                <i class="menu-icon mdi mdi-account-circle-outline"></i>
                <span class="menu-title">Usuários</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="user">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.users.create')}}"> Cadastrar </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.users')}}"> Listar </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.logs')}}">
                <i class="menu-icon mdi mdi-alert"></i>
                <span class="menu-title">Logs</span>
            </a>
        </li>

        @endif

    </ul>
</nav>
