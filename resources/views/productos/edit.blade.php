<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto - Magic Beauty</title>

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

        .form-label {
            font-weight: bold;
            color: #842029;
        }

        .btn-actualizar {
            background-color: #ffc107;
            color: black;
            font-weight: bold;
        }

        .btn-actualizar:hover {
            background-color: #e0a800;
            color: black;
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
             Editar producto
        </div>

        <div class="card-body p-4">

            @if($errors->any())
                <div class="alert alert-danger">
                    <strong>Hay algunos errores:</strong>

                    <ul class="mb-0 mt-2">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('productos.update', $producto) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nombre" class="form-label">
                        Nombre del producto
                    </label>

                    <input
                        type="text"
                        name="nombre"
                        id="nombre"
                        class="form-control"
                        value="{{ old('nombre', $producto->nombre) }}"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="precio" class="form-label">
                        Precio (Bs.)
                    </label>

                    <input
                        type="number"
                        name="precio"
                        id="precio"
                        class="form-control"
                        value="{{ old('precio', $producto->precio) }}"
                        step="0.01"
                        min="0"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="stock" class="form-label">
                        Stock
                    </label>

                    <input
                        type="number"
                        name="stock"
                        id="stock"
                        class="form-control"
                        value="{{ old('stock', $producto->stock) }}"
                        min="0"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">
                        Descripción
                    </label>

                    <textarea
                        name="descripcion"
                        id="descripcion"
                        class="form-control"
                        rows="4"
                    >{{ old('descripcion', $producto->descripcion) }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="categoria_id" class="form-label">
                        Categoría
                    </label>

                    <select
                        name="categoria_id"
                        id="categoria_id"
                        class="form-select"
                        required
                    >
                        <option value="">-- Selecciona una categoría --</option>

                        @foreach($categorias as $categoria)
                            <option
                                value="{{ $categoria->id }}"
                                {{ old('categoria_id', $producto->categoria_id) == $categoria->id ? 'selected' : '' }}
                            >
                                {{ $categoria->nombre }}
                            </option>
                        @endforeach

                    </select>
                </div>

                <div class="d-flex gap-2">

                    <button type="submit" class="btn btn-actualizar">
                        Actualizar producto
                    </button>

                    <a href="{{ route('productos.index') }}"
                       class="btn btn-volver">
                        ← Volver
                    </a>

                </div>

            </form>

        </div>
    </div>

</div>

</body>
</html>