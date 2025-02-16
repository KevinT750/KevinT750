$(document).ready(function () {
  // Ayuda para el usuario
  $("#ayudaUsu").click(function (e) {
    e.preventDefault(); // Prevenir el envío del formulario
    Swal.fire({
      title: "¡Necesitas ayuda!",
      text: "En la oscuridad me encontrarás, sin rostro y alto, me verás. Me enojo si me miras fijamente, pero me teletransporto rápidamente. ¿Quién soy?",
      icon: "question", // Icono de pregunta
      confirmButtonText: "¡Genial!",
      background: "#f8f9fa", // Fondo claro para la alerta
      confirmButtonColor: "#28a745", // Botón verde para resaltar
      customClass: {
        title: "fs-4 fw-bold text-primary", // Estilo del título con fuente grande y color
        text: "text-dark", // Texto oscuro para mejorar la legibilidad
      },
    });
  });

  // Ayuda para la contraseña
  $("#ayudaPass").click(function (e) {
    e.preventDefault(); // Prevenir el envío del formulario
    Swal.fire({
      title: "¡Necesitas ayuda!",
      text: "Nuestra primera cita fue un momento especial, mucho tiempo te esperé, sin pensar en el final. Una hora pasó y yo ahí me quedé, hasta que al fin te vi llegar, mi corazón latió otra vez. Un beso robado después de tanto esperar, y al despedirnos, un 'te quiero' te logré mandar. ¿En dónde ocurrió todo esto, que hizo mi alma vibrar?",
      icon: "question", // Icono de pregunta
      confirmButtonText: "¡Entendido!",
      background: "#f8f9fa", // Fondo claro para la alerta
      confirmButtonColor: "#007bff", // Botón azul para resaltar
      customClass: {
        title: "fs-4 fw-bold text-primary", // Estilo del título con fuente grande y color
        text: "text-dark", // Texto oscuro para mejorar la legibilidad
      },
    });
  });

  $("#enviar").click(function (e) {
    e.preventDefault();

    // Obtener los valores de los campos
    var password = $("#password").val().toLowerCase(); // Convertir a minúsculas para hacer la comparación insensible a mayúsculas/minúsculas
    var usuario = $("#usuario").val().toLowerCase(); // Convertir a minúsculas para hacer la comparación insensible a mayúsculas/minúsculas

    // Verificar si los campos están vacíos
    if (password === "" || usuario === "") {
      Swal.fire({
        title: "Advertencia",
        text: "Usuario o contraseña están vacíos, complete para poder continuar",
        icon: "warning",
        confirmButtonText: "¡Entendido!",
        background: "#f8f9fa",
        confirmButtonColor: "#007bff",
        customClass: {
          title: "fs-4 fw-bold text-primary",
          text: "text-dark",
        },
      });
    } else if (usuario !== "enderman") {
      // Comparar en minúsculas
      Swal.fire({
        title: "Advertencia",
        text: "No acertaste en la adivinanza para el usuario",
        icon: "warning",
        confirmButtonText: "¡Entendido!",
        background: "#f8f9fa",
        confirmButtonColor: "#007bff",
        customClass: {
          title: "fs-4 fw-bold text-primary",
          text: "text-dark",
        },
      });
    } else if (password !== "angla") {
      // Comparar en minúsculas
      Swal.fire({
        title: "Advertencia",
        text: "No acertaste en la adivinanza para la contraseña",
        icon: "warning",
        confirmButtonText: "¡Entendido!",
        background: "#f8f9fa",
        confirmButtonColor: "#007bff",
        customClass: {
          title: "fs-4 fw-bold text-primary",
          text: "text-dark",
        },
      });
    } else {
      // Si el usuario y la contraseña son correctos
      Swal.fire({
        title: "¡Felicidades!",
        text: "Has acertado en el usuario y la contraseña.",
        icon: "success",
        confirmButtonText: "Continuar",
        background: "#f8f9fa",
        confirmButtonColor: "#28a745", // Verde para éxito
        customClass: {
          title: "fs-4 fw-bold text-success", // Título en verde
          text: "text-dark",
        },
      }).then((result) => {
        if (result.isConfirmed) {
          // Acción a tomar cuando el usuario hace clic en "Continuar"
          window.location.href = "view/Pregunta1.php"; // Redirigir a otra página, por ejemplo
        }
      });
    }
  });
});
