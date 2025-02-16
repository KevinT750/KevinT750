<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Trivia sobre la Amistad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: #fff;
            font-family: 'Arial', sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .container {
            max-width: 500px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1, h3 {
            color: #333;
        }

        h1 {
            font-size: 2rem;
            font-weight: bold;
        }

        h3 {
            font-size: 1.25rem;
            font-weight: normal;
        }

        .form-label {
            font-weight: bold;
            color: #333;
        }

        .input-group {
            margin-bottom: 1rem;
        }

        .btn-outline-secondary {
            border-color: #6c757d;
            color: #6c757d;
        }

        .btn-outline-secondary:hover {
            background-color: #6c757d;
            color: #fff;
        }

        .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .text-center {
            text-align: center;
        }

        .mb-4 {
            margin-bottom: 1.5rem;
        }

        .d-grid {
            display: grid;
        }

        .gap-2 {
            gap: 0.5rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center mb-4">¡Hola Emily, Bienvenida a este juego!</h1>
        <h3 class="text-center mb-4">
            Para comenzar, tenemos una pantalla de inicio de sesión en la cual deberás ingresar tu usuario y contraseña.
            Si no sabes cómo hacerlo, simplemente haz clic en el botón junto a la barra de texto para recibir ayuda.
        </h3>

        <form>
            <div class="text-center mb-4">
                <img src="public/img/pregunta.png" alt="Imagen de bienvenida" class="img-fluid">
            </div>
            
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="usuario" placeholder="Ingrese el usuario" aria-label="Usuario">
                    <button type="button" class="btn btn-outline-secondary" id="ayudaUsu">Ayuda</button>
                </div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="password" placeholder="Ingrese la contraseña" aria-label="Contraseña">
                    <button type="button" class="btn btn-outline-secondary" id="ayudaPass">Ayuda</button>
                </div>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" id="enviar">Enviar</button>
            </div>
        </form>
    </div>
    <script src="public/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="public/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="view/script/index.js"></script>
</body>

</html>
