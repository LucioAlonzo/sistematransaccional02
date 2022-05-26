<!doctype html>
<html lang="en">

<head>
    <title>OneClickSales1</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.0.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<style>
    body {
        background-color: lightblue;
    }
    h1 {
        color: blue;
    }
    p {
        color: red;
    }
    .navbar {
        background-color: #57A9BA;
    }
</style>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm border-bottom box-shadow mb-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="/redencion/login.php"><i class="bi bi-cursor"></i>OneClickSales01</a>
                <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between">
                    <ul class="nav nav-tabs flex-grow-1">
                        <!--DROPDOWN DE Soporte-->
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="soporte2.php">Soporte</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container d-flex justify-content-center align-items-center mt-5">
        <div>
            <form  action="validacion.php" method="POST">
                <div class="mb-3">
                    <label  class="form-label">Usuario</label>
                    <input type="text" class="form-control" name="txtusuario">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Contrasena</label>
                    <input type="password" class="form-control" name="txtpass">
                </div>
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </form>
        </div>
    </div>
    <footer class="border-top footer text-muted fixed-bottom">
        <div class="container">
            &copy; 2022 - SistemaTransaccionalVentas01 - <a asp-area="" asp-controller="Home" asp-action="Privacy">Privacy</a>
        </div>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>