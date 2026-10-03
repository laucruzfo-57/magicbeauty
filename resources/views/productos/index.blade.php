<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - Magic Beauty</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #fff0f6, #fce4ec);
            font-family: Arial, sans-serif;
        }

        .contenedor {
            max-width: 1200px;
            margin: 50px auto;
        }

        .titulo {
            color: #d63384;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }

        .card {
            border: none;
            border-radius: 18px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.10);
            overflow: hidden;
        }

        .card-header {
            background: #d63384;
            color: white;
            font-weight: bold;
            padding: 18px;
        }

        .table th {
            background-color: #f8d7e8;
            color: #842029;
        }

        .btn-nuevo {
            background-color: #198754;
            color: white;
            font-weight: bold;
        }

        .btn-nuevo:hover {
            background-color: #157347;
            color: white;
        }

        .btn-ver {
            background-color: #0d6efd;
            color: white;
        }

        .btn-editar {
            background-color: #ffc107;
            color: black;
        }

        .btn-eliminar {
            background-color: #dc3545;
            color: white;
        }

        .btn-volver {
            background-color: #343a40;
            color: white;
        }

        .acciones {
            display: flex;
            gap: 5px;
            flex-wrap: wrap;
        }

        .precio {
            font-weight: bold;
            color: #d63384;
        }

        .stock {
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container contenedor">

    <h1 class="titulo">Magic Beauty</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">
            <span>Lista de Productos</span>

            <a href="{{ route('productos.create') }}" class="btn btn-nuevo">
                + Nuevo producto
            </a>
        </div>

        <div class="card-body">

            @if($productos->count() > 0)

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
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($productos as $producto)

                                <tr>

                                    <td>
                                        {{ $producto->id }}
                                    </td>

                                    <td>
                                        <strong>{{ $producto->nombre }}</strong>
                                    </td>

                                    <td class="precio">
                                        Bs. {{ number_format($producto->precio, 2) }}
                                    </td>

                                    <td class="stock">
                                        {{ $producto->stock }}
                                    </td>

                                    <td>
                                        {{ $producto->descripcion ?? 'Sin descripción' }}
                                    </td>

                                    <td>
                                        @if($producto->categoria)
                                            <span class="badge bg-secondary">
                                                {{ $producto->categoria->nombre }}
                                            </span>
                                        @else
                                            <span class="text-muted">
                                                Sin categoría
                                            </span>
                                        @endif
                                    </td>

                                    <td>

                                        <div class="acciones">

                                            <a href="{{ route('productos.show', $producto) }}"
                                               class="btn btn-sm btn-ver">
                                                Ver
                                            </a>

                                            <a href="{{ route('productos.edit', $producto) }}"
                                               class="btn btn-sm btn-editar">
                                                Editar
                                            </a>

                                            <form action="{{ route('productos.destroy', $producto) }}"
                                                  method="POST"
                                                  onsubmit="return confirm('¿Seguro que deseas eliminar este producto?');">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                        class="btn btn-sm btn-eliminar">
                                                    Eliminar
                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            @else

                <div class="alert alert-info text-center">
                    No hay productos registrados todavía.
                </div>

            @endif

            <div class="mt-3">
                <a href="{{ route('categorias.index') }}"
                   class="btn btn-volver">
                    ← Volver a categorías
                </a>
            </div>

        </div>
    </div>

</div>

</body>
</html>