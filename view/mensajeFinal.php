<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrusel de Fotos</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        .carousel {
            position: relative;
            width: 80%;
            max-width: 600px;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .carousel-images {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .carousel-images img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            font-size: 2rem;
            cursor: pointer;
            padding: 10px;
            border-radius: 5px;
            z-index: 1;
            user-select: none;
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }

        .indicators {
            position: absolute;
            bottom: 15px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
        }

        .indicator {
            width: 12px;
            height: 12px;
            background: #ccc;
            border-radius: 50%;
            cursor: pointer;
            transition: background 0.3s;
        }

        .indicator.active {
            background: #007BFF;
        }
    </style>
</head>

<body>

    <div class="carousel">
        <div class="carousel-images">
            <img src="../public/img/cedula1.png">
            <img src="../public/img/cedula1.png">
            <img src="../public/img/cedula1.png">
            <img src="../public/img/cedula1.png">
        </div>
        <button class="carousel-btn prev" onclick="prevSlide()">&#10094;</button>
        <button class="carousel-btn next" onclick="nextSlide()">&#10095;</button>
        <div class="indicators" id="indicators"></div>
    </div>

    <script>
        const images = document.querySelector('.carousel-images');
        const totalSlides = images.children.length;
        let currentIndex = 0;

        function showSlide(index) {
            if (index >= totalSlides) {
                currentIndex = 0;
            } else if (index < 0) {
                currentIndex = totalSlides - 1;
            } else {
                currentIndex = index;
            }
            images.style.transform = `translateX(-${currentIndex * 100}%)`;
            updateIndicators();
        }

        function nextSlide() {
            showSlide(currentIndex + 1);
        }

        function prevSlide() {
            showSlide(currentIndex - 1);
        }

        function updateIndicators() {
            const indicators = document.querySelectorAll('.indicator');
            indicators.forEach((dot, i) => {
                dot.classList.toggle('active', i === currentIndex);
            });
        }

        function createIndicators() {
            const indicatorsContainer = document.getElementById('indicators');
            for (let i = 0; i < totalSlides; i++) {
                const dot = document.createElement('div');
                dot.classList.add('indicator');
                dot.addEventListener('click', () => showSlide(i));
                indicatorsContainer.appendChild(dot);
            }
            updateIndicators();
        }

        createIndicators();

        // Carrusel automático cada 3 segundos
        setInterval(() => {
            nextSlide();
        }, 3000);
    </script>

</body>

</html>