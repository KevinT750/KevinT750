<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pregunta Quiz</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f0f8ff;
      font-family: 'Arial', sans-serif;
    }

    .question-card {
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      background-color: #ffffff;
      padding: 30px;
      margin-top: 50px;
    }

    .btn-custom {
      background-color: #007bff;
      color: white;
      border-radius: 50px;
      padding: 12px 30px;
      font-size: 16px;
    }

    .btn-custom:hover {
      background-color: #0056b3;
    }

    .option {
      border-radius: 5px;
      margin: 10px 0;
      background-color: #f8f9fa;
      cursor: pointer;
    }

    .option:hover {
      background-color: #007bff;
      color: white;
    }

    img {
      max-width: 100%; /* Asegura que la imagen no exceda el ancho de su contenedor */
      height: auto; /* Mantiene las proporciones de la imagen */
      margin-bottom: 20px; /* Agrega un espacio debajo de la imagen */
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card question-card">
          <h3 class="text-center mb-4">Pregunta 1</h3>
          <p class="text-center mb-4">¿Cuál es el proceso por el cual las plantas convierten la luz solar en energía?</p>
          <img src="../public/img/fotosin.jpg">
          <div class="form-check option">
            <input class="form-check-input" type="radio" name="respuesta" id="opcion1" value="opcion1">
            <label class="form-check-label" for="opcion1">Opción 1: Fotosíntesis</label>
          </div>
          <div class="form-check option">
            <input class="form-check-input" type="radio" name="respuesta" id="opcion2" value="opcion2">
            <label class="form-check-label" for="opcion2">Opción 2: Respiración celular</label>
          </div>
          <div class="form-check option">
            <input class="form-check-input" type="radio" name="respuesta" id="opcion3" value="opcion3">
            <label class="form-check-label" for="opcion3">Opción 3: Fermentación</label>
          </div>
          <div class="form-check option">
            <input class="form-check-input" type="radio" name="respuesta" id="opcion4" value="opcion4">
            <label class="form-check-label" for="opcion4">Opción 4: Transpiración</label>
          </div>
          <div class="text-center mt-4">
            <button class="btn btn-custom" id="enviar">Enviar</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    document.getElementById("enviar").addEventListener("click", function() {
      // Leer el archivo JSON de vidas
      fetch('vidas.json')
        .then(response => response.json())
        .then(data => {
          let intentos = data.intentos;
          let ultimoIntento = new Date(data.ultimoIntento);
          let tiempoRestante = 10 * 60 * 1000; // 10 minutos en milisegundos

          // Verificar si el tiempo de bloqueo ha pasado
          if (intentos >= 5 && (Date.now() - ultimoIntento) < tiempoRestante) {
            Swal.fire({
              title: "¡Bloqueado!",
              text: "Has alcanzado el límite de intentos. Por favor, espera 10 minutos.",
              icon: "error",
              confirmButtonText: "Aceptar",
            });
            return;
          }

          // Verificar si se ha seleccionado una opción
          var selectedOption = document.querySelector('input[name="respuesta"]:checked');
          if (selectedOption) {
            if (selectedOption.value === "opcion1") {
              // Respuesta correcta
              Swal.fire({
                title: "¡Respuesta Correcta!",
                text: "¡Felicitaciones! Has respondido correctamente.",
                icon: "success",
                confirmButtonText: "Aceptar",
              }).then(function() {
                window.location.href = "pregunta2.php";
              });
            } else {
              // Respuesta incorrecta, disminuir intentos
              intentos++;
              updateIntentos(intentos);
              Swal.fire({
                title: "¡Respuesta Incorrecta!",
                text: `Intentos restantes: ${5 - intentos}`,
                icon: "error",
                confirmButtonText: "Aceptar",
              });
            }
          } else {
            // No se ha seleccionado ninguna opción
            Swal.fire({
              title: "¡Advertencia!",
              text: "Por favor, selecciona una opción antes de enviar.",
              icon: "warning",
              confirmButtonText: "Aceptar",
            });
          }
        });
    });

    function updateIntentos(intentos) {
      let data = {
        intentos: intentos,
        ultimoIntento: new Date().toISOString()
      };

      // Actualizar el archivo JSON
      fetch('update.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(data)
      });
    }
  </script>

</body>

</html>
