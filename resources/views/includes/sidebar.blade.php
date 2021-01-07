<div class="sidebar-header">
    <img class="img-fluid" src="{{asset('logo.png')}}">
    
    <span id="sidebarCollapse" class="float-right">
        <span> <i class="icon-white" data-feather="menu"></i> </span>
    </span>
</div>


<ul class="list-unstyled components">
    <li>
        <a href="{{ route('dashboard') }}"><i data-feather="home"></i> Dashboard</a>
    </li>

    <li>
        <a href="#"><i data-feather="package"></i> Medicamentos</a>
    </li>

    <li>
        <a href="#"><i data-feather="archive"></i> Estoque</a>
    </li>

    <li class="active">
        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i data-feather="tag"></i>
        Categorias
        </a>
        <ul class="collapse list-unstyled" id="homeSubmenu">
            <li>
                <a href="#">Home 1</a>
            </li>
            <li>
                <a href="#">Home 2</a>
            </li>
            <li>
                <a href="#">Home 3</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="{{ route('dashboard.colaborador') }}"><i data-feather="user"></i> Colaboradores</a>
    </li>
    <li>
        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i data-feather="tool"></i> Configurações</a>
        <ul class="collapse list-unstyled" id="pageSubmenu">
            <li>
                <a href="#">Perfil</a>
            </li>
            <li>
                <a href="#">Page 2</a>
            </li>
            <li>
                <a href="#">Page 3</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#"><i data-feather="users"></i> Usuários</a>
    </li>

    <li>
        <a href="#"><i data-feather="bookmark"></i> Solicitações</a>
    </li>

    <li>
        <a href="#"><i data-feather="map-pin"></i> Rastreio</a>
    </li>
</ul>