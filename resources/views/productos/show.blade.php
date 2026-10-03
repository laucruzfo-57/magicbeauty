<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Producto - Magic Beauty</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #fff0f6, #fce4ec);
            font-family: Arial, sans-serif;
        }

        .contenedor {
            max-width: 750px;
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
            font-size: 20px;
        }

        .dato {
            border-bottom: 1px solid #eee;
            padding: 15px 5px;
        }

        .dato:last-child {
            border-bottom: none;
        }

        .etiqueta {
            font-weight: bold;
            color: #842029;
        }

        .precio {
            color: #d63384;
            font-weight: bold;
            font-size: 20px;
        }

        .btn-editar {
            background-color: #ffc107;
            color: black;
            font-weight: bold;
        }

        .btn-volver {
            background-color: #343a40;
            color: white;
        }
    </style>
</head>

<body>

<div class="container contenedor">

    <h1 class="titulo"> Magic Beauty</h1>

    <div class="card">

        <div class="card-header">
             Información del producto
        </div>

        <div class="card-body p-4">

            <div class="dato">
                <div class="etiqueta">ID</div>
                <div>{{ $producto->id }}</div>
            </div>

            <div class="dato">
                <div class="etiqueta">Nombre</div>
                <div>{{ $producto->nombre }}</div>
            </div>

            <div class="dato">
                <div class="etiqueta">Precio</div>
                <div class="precio">
                    Bs. {{ number_format($producto->precio, 2) }}
                </div>
            </div>

            <div class="dato">
                <div class="etiqueta">Stock</div>
                <div>{{ $producto->stock }} unidades</div>
            </div>

            <div class="dato">
                <div class="etiqueta">Descripción</div>
                <div>
                    {{ $producto->descripcion ?? 'Sin descripción' }}
                </div>
            </div>

            <div class="dato">
                <div class="etiqueta">Categoría</div>
                <div>
                    @if($producto->categoria)
                        <span class="badge bg-secondary">
                            {{ $producto->categoria->nombre }}
                        </span>
                    @else
                        Sin categoría
                    @endif
                </div>
            </div>

            <div class="mt-4 d-flex gap-2">

                <a href="{{ route('productos.edit', $producto) }}"
                   class="btn btn-editar">
                    Editar
                </a>

                <a href="{{ route('productos.index') }}"
                   class="btn btn-volver">
                    ← Volver
                </a>

            </div>

        </div>
    </div>

</div>

</body>
</html>