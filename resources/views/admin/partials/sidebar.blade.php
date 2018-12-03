<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="/admin">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-user-shield"></i>
            <span>Administradores</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="adminDropdown">
            <a class="dropdown-item" href="#">Listado de Administradores</a>
            <a class="dropdown-item" href="#">Agregar Administrador</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="admin">
            <i class="fas fa-fw fa-users"></i>
            <span>Usuarios</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="productosDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-store"></i>
            <span>Productos</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="productosDropdown">
            <a class="dropdown-item" href="/admin/products">Listado de Productos</a>
            <a class="dropdown-item" href="/admin/products/create">Agregar Producto</a>
        </div>
    </li>
    <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="categoriasDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-list"></i>
                <span>Categorías</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="categoriasDropdown">
                <a class="dropdown-item" href="/admin/categories">Listado de Categorías</a>
                <a class="dropdown-item" href="/admin/categories/create">Agregar Categoría</a>
            </div>
        </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cart-arrow-down"></i>
            <span>Ventas</span></a>
    </li>
</ul>