<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Magic Beauty</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #fff0f6, #fce4ec);
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

        .hero {
            min-height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 50px 20px;
        }

        .hero-contenido {
            max-width: 800px;
        }

        .hero h1 {
            color: #d63384;
            font-size: 55px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hero h2 {
            color: #842029;
            margin-bottom: 20px;
        }

        .hero p {
            color: #555;
            font-size: 19px;
            margin-bottom: 30px;
        }

        .btn-magic {
            background-color: #d63384;
            color: white;
            padding: 12px 25px;
            border-radius: 25px;
            font-weight: bold;
            text-decoration: none;
            margin: 5px;
            display: inline-block;
        }

        .btn-magic:hover {
            background-color: #b02a6b;
            color: white;
        }

        .btn-productos {
            background-color: #198754;
            color: white;
            padding: 12px 25px;
            border-radius: 25px;
            font-weight: bold;
            text-decoration: none;
            margin: 5px;
            display: inline-block;
        }

        .btn-productos:hover {
            background-color: #157347;
            color: white;
        }

        .tarjetas {
            padding: 30px 20px 60px;
        }

        .tarjeta {
            background: white;
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            height: 100%;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        .tarjeta h3 {
            color: #d63384;
            margin-bottom: 15px;
        }

        footer {
            background-color: #d63384;
            color: white;
            text-align: center;
            padding: 20px;
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

<section class="hero">

    <div class="hero-contenido">

        <h1>Magic Beauty </h1>

        <h2>Tu espacio de belleza y cuidado personal</h2>

        <p>
            Descubre nuestros productos de maquillaje,
            cuidado personal y belleza.
        </p>

        <a href="{{ route('categorias.index') }}"
           class="btn-magic">
             Ver categorías
        </a>

        <a href="{{ route('productos.index') }}"
           class="btn-productos">
            Ver productos
        </a>

    </div>

</section>

<section class="tarjetas">

    <div class="container">

        <div class="row g-4">

            <div class="col-md-4">
                <div class="tarjeta">
                    <div style="font-size: 45px;">💋</div>
                    <h3>Maquillaje</h3>
                    <p>
                        Productos para resaltar tu belleza
                        y crear diferentes estilos.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="tarjeta">
                    <div style="font-size: 45px;">✨</div>
                    <h3>Belleza</h3>
                    <p>
                        Encuentra productos pensados
                        para tu cuidado personal.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="tarjeta">
                    <div style="font-size: 45px;">💖</div>
                    <h3>Magic Beauty</h3>
                    <p>
                        Administra fácilmente nuestras
                        categorías y productos.
                    </p>
                </div>
            </div>

        </div>

    </div>

</section>

<footer>
    <p class="mb-0">
        © {{ date('Y') }} Magic Beauty - Todos los derechos reservados.
    </p>
</footer>

</body>
</html>