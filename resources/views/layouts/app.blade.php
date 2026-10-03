<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Magic Beauty')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #fff0f6, #fce4ec);
            font-family: Arial, sans-serif;
            min-height: 100vh;
        }

        .navbar-magic {
            background: linear-gradient(90deg, #d63384, #e83e8c);
            box-shadow: 0 3px 10px rgba(0,0,0,0.15);
        }

        .navbar-brand {
            color: white !important;
            font-weight: bold;
            font-size: 22px;
        }

        .nav-link {
            color: white !important;
            font-weight: bold;
            margin-left: 10px;
        }

        .nav-link:hover {
            color: #ffe4f0 !important;
        }

        .contenido {
            padding-top: 30px;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-magic">

    <div class="container">

        <a class="navbar-brand" href="{{ url('/') }}">
            Magic Beauty
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menuNavegacion">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="menuNavegacion">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">
                        Inicio
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categorias.index') }}">
                        Categorías
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('productos.index') }}">
                        Productos
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>

<div class="contenido">
    @yield('content')
</div>

</body>
</html>