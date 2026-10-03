<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Categoría | Magic Beauty</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #fff0f6, #fce4ec);
            min-height: 100vh;
            font-family: Arial, sans-serif;
        }

        .contenedor {
            max-width: 700px;
            margin: 50px auto;
        }

        .tarjeta {
            background: white;
            border-radius: 20px;
            padding: 35px;
            box-shadow: 0 8px 25px rgba(194, 24, 91, 0.12);
        }

        .titulo {
            color: #c2185b;
            font-weight: bold;
            text-align: center;
            margin-bottom: 8px;
        }

        .subtitulo {
            text-align: center;
            color: #777;
            margin-bottom: 30px;
        }

        .form-label {
            font-weight: bold;
            color: #555;
        }

        .btn-guardar {
            background: #198754;
            color: white;
            border: none;
        }

        .btn-guardar:hover {
            background: #157347;
            color: white;
        }

        .btn-volver {
            background: #343a40;
            color: white;
            border: none;
        }

        .btn-volver:hover {
            background: #212529;
            color: white;
        }
    </style>
</head>

<body>

<div class="container contenedor">

    <div class="tarjeta">

        <h1 class="titulo">Magic Beauty</h1>
        <p class="subtitulo">Registrar nueva categoría</p>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Por favor, corrige los siguientes errores:</strong>

                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('categorias.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="nombre" class="form-label">
                    Nombre de la categoría
                </label>

                <input
                    type="text"
                    name="nombre"
                    id="nombre"
                    class="form-control"
                    value="{{ old('nombre') }}"
                    placeholder="Ej: Maquillaje"
                    required
                >
            </div>

            <div class="mb-4">
                <label for="descripcion" class="form-label">
                    Descripción
                </label>

                <textarea
                    name="descripcion"
                    id="descripcion"
                    class="form-control"
                    rows="4"
                    placeholder="Describe la categoría..."
                >{{ old('descripcion') }}</textarea>
            </div>

            <div class="d-flex gap-2">

                <button type="submit" class="btn btn-guardar">
                     Guardar categoría
                </button>

                <a href="{{ route('categorias.index') }}" class="btn btn-volver">
                    ← Volver
                </a>

            </div>

        </form>

    </div>

</div>

</body>
</html>