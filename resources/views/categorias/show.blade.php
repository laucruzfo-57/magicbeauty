<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Categoría | Magic Beauty</title>

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
        }

        .subtitulo {
            text-align: center;
            color: #777;
            margin-bottom: 30px;
        }

        .dato {
            background: #fff0f6;
            border-radius: 12px;
            padding: 15px;
            margin-bottom: 15px;
        }

        .dato strong {
            color: #c2185b;
        }

        .btn-editar {
            background: #ffc107;
            color: #212529;
            border: none;
        }

        .btn-editar:hover {
            background: #ffca2c;
            color: #212529;
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

        <h1 class="titulo">💄 Magic Beauty</h1>
        <p class="subtitulo">Información de la categoría</p>

        <div class="dato">
            <strong>ID:</strong>
            {{ $categoria->id }}
        </div>

        <div class="dato">
            <strong>Nombre:</strong>
            {{ $categoria->nombre }}
        </div>

        <div class="dato">
            <strong>Descripción:</strong>
            {{ $categoria->descripcion ?? 'Sin descripción' }}
        </div>

        <div class="d-flex gap-2 mt-4">

            <a href="{{ route('categorias.edit', $categoria) }}"
               class="btn btn-editar">
                 Editar
            </a>

            <a href="{{ route('categorias.index') }}"
               class="btn btn-volver">
                ← Volver
            </a>

        </div>

    </div>

</div>

</body>
</html>