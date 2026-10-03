
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Productos - Magic Beauty</title>

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
            padding-bottom: 40px;
        }

        .titulo {
            color: #d63384;
            font-weight: bold;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.10);
        }

        .table thead {
            background: #d63384;
            color: white;
        }

        .btn-nuevo {
            background: #198754;
            color: white;
            font-weight: bold;
        }

        .btn-nuevo:hover {
            background: #157347;
            color: white;
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

<div class="container contenido">

    <div class="card p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h1 class="titulo mb-0">
                 Productos
            </h1>

            <a href="{{ route('productos.create') }}"
               class="btn btn-nuevo">
                Nuevo producto
            </a>

        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Descripción</th>
                        <th>Categoría</th>
                        <th width="300">Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($productos as $producto)

                        <tr>

                            <td>{{ $producto->id }}</td>

                            <td>
                                <strong>{{ $producto->nombre }}</strong>
                            </td>

                            <td>
                                Bs. {{ number_format($producto->precio, 2) }}
                            </td>

                            <td>
                                {{ $producto->stock }}
                            </td>

                            <td>
                                {{ $producto->descripcion ?? 'Sin descripción' }}
                            </td>

                            <td>
                                {{ $producto->categoria->nombre ?? 'Sin categoría' }}
                            </td>

                            <td>

                                <a href="{{ route('productos.show', $producto) }}"
                                   class="btn btn-primary btn-sm">
                                     Ver
                                </a>

                                <a href="{{ route('productos.edit', $producto) }}"
                                   class="btn btn-warning btn-sm">
                                    Editar
                                </a>

                                <form action="{{ route('productos.destroy', $producto) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('¿Deseas eliminar este producto?');">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-danger btn-sm">
                                        Eliminar
                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="7" class="text-center">
                                No hay productos registrados.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

        <div class="mt-3">

            <a href="{{ url('/') }}"
               class="btn btn-secondary">
                ⬅ Volver al inicio
            </a>

        </div>

    </div>

</div>

</body>
</html>