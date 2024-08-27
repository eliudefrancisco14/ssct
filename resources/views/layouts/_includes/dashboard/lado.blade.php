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

        @if(auth()->user()->funcao == "Administrador")
        
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#companhia" aria-expanded="false"
                aria-controls="companhia">

                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">Taxistas Vinculados</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="companhia">
                <ul class="nav flex-column sub-menu">
                   
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.placas.entrar', ['id'=>$placa->id])}}"> Listar </a></li>
                </ul>
            </div>
        </li>


        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#rota" aria-expanded="false" aria-controls="rota">
                <i class="menu-icon mdi mdi-chart-line"></i>
                <span class="menu-title">Gráfios de Acesso</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="rota">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.titulos.create')}}"> Mostrar </a></li>
                  
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav link btn btn-primary" href="{{route('admin.placas.infor', $placa->id)}}">
                <i class="menu-icon mdi mdi-fingerprint"></i>
                <span class="menu-title">Dados da Placa</span>
            </a>
        </li>

        @endif

       
    </ul>
</nav>
