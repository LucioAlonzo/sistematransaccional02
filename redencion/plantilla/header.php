<!doctype html>
<html lang="es">

<head>
    <title>OneClickSales1</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<style>

/* ESTE CODIGO LO HICE YO  */
    body {
        background-color: #17A589;
        
    }

    h1 {
        color: blue;
    }

    .navbar {
        background-color: #ABCCD3;
    }
/* ESTE CODIGO LO HICE YO 

    header {
        width: 100%;
        position: fixed;
        z-index: 10;
    }

*/



</style>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm  border-bottom box-shadow mb-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="/redencion/index.php"><i class="bi bi-cursor"></i>OneClickSales01</a>
                <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between">
                    <ul class="nav nav-tabs flex-grow-1">
                        <!--DROPDOWN DE ADMINISTRACION-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false"><i class="bi bi-building"></i> Administracion</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-file-pdf"></i> Reportes</a></li>
                                <li><a class="dropdown-item" href="../../redencion/vistas/usuarios.php"><i class="bi bi-person-video2"></i> Usuarios</li></a>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil"></i> Inventario</a></li>
                            </ul>
                        </li>
                        <!--DROPDOWN DE ARTICULOS Y CATEGORIAS-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="bi bi-columns"></i> Productos</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../../redencion/vistas/articulo.php"><i class="bi bi-cup"></i> Articulos</a></li>
                                <li><a class="dropdown-item" href="../../redencion/vistas/categorias.php"><i class="bi bi-columns-gap"></i> Categorias</a>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-search"></i> Busqueda</a></li>
                            </ul>
                        </li>
                        <!--DROPDOWN DE FACTURACION-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="bi bi-cart4"></i> Facturacion</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../../redencion/vistas/facturacion.php"><i class="bi bi-cart-plus"></i> Nueva Factura</a></li>
                                <a class="nav-link text-dark" asp-area="" asp-controller="Categorias" asp-action="Index"><i class="bi bi-search"></i> Busqueda</a>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-file-pdf"></i> Reportes</a></li>
                            </ul>
                        </li>
                        <!--DROPDOWN DE PROVEEDORES-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="bi bi-boxes"></i> Proveedores</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../../redencion/vistas/proveedor.php"><i class="bi bi-node-plus"></i> Nuevo Proveedor</a></li>
                                <a class="nav-link text-dark" asp-area="" asp-controller="Categorias" asp-action="Index"><i class="bi bi-search"></i> Busqueda</a>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-file-pdf"></i> Reportes</a></li>
                            </ul>
                        </li>
                        <!--DROPDOWN DE CLIENTES-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"><i class="bi bi-person-bounding-box"></i> Clientes</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../../redencion/vistas/clientes.php"><i class="bi bi-node-plus"></i> Nuevo Cliente</a></li>
                                <a class="nav-link text-dark" asp-area="" asp-controller="Categorias" asp-action="Index"><i class="bi bi-search"></i> Busqueda</a>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-file-pdf"></i> Reportes</a></li>
                            </ul>
                        </li>
                        <!--DROPDOWN DE Soporte-->
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="../../redencion/vistas/soporte.php">Soporte</a>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle"></i> Usuario</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Perfil</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="../config/cerrarsesion.php">Salir</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>