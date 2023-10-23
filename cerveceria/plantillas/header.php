
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caracol Negro | Cerveceria Artesanal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>
   
    <header class="contenedor">
         <nav class="navbar navbar-expand-lg navigation">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="contenedor-links collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <div class="contenedor-links-registro">
                        <li class="nav-item"><a class="nav-link" href="./login/login.html">Iniciar Sesión</a></li>
                        <li class="nav-item"><a class="nav-link" href="./login/login.html">Registrarse</a></li>
                    </div>
                    <li class="nav-item"><a class="nav-link" href="#">Tienda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Beer Truck</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Caracol Negro</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
                </ul>
            </div>
            
            <div class="contenedor-redes-carrito">
                <div class="redes">
                    <p><a href="#" target="_blank">IG</a> | <a href="#" target="_blank">FB</a> | <a href="#" target="_blank">WA +54119999999</a></p>
                </div>
                <div class="carrito">
                    <a href="">
                        <i class="bi bi-cart cart"></i>
                        <span class="carrito-indicador">3</span>
                    </a>
                </div>
            </div>

            <div class="contenedor__img navbar-brand">
                <img src="./img/logo.png" alt="logo">
            </div>
        </nav> 
        
        

        <!-- Swipe -->
        <!-- Estructura básica de Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="./img/fondo1.jpg" alt="Imagen 1">
                    <div class="slide-content">
                        <h2 class="slide-content__title">Tradición y Pasión en Cada Gotas</h2>
                        <p class="slide-content__p">Contenido: Descripción sobre la tradición y la pasión con la que se elaboran las cervezas.</p>
                        <a href="#" class="slide-button">Conoce Nuestra Historia</a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <img src="./img/fondo2.jpg" alt="Imagen 2">
                    <div class="slide-content">
                        <h2 class="slide-content__title">Sabores que Narran Historias</h2>
                        <p class="slide-content__p">Contenido: Presentación de la variedad de cervezas, ingredientes y las historias detrás de cada sabor.</p>
                        <a href="#" class="slide-button">Descubre Nuestros Sabores</a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <img src="./img/fondo3.jpg" alt="Imagen 3">
                    <div class="slide-content">
                        <h2 class="slide-content__title">Mobilidad y Experiencia Directa</h2>
                        <p class="slide-content__p">Contenido: Presentación del beer truck como una extensión de la cervecería, llevando la frescura y autenticidad de la cerveza artesanal directamente a eventos y puntos estratégicos.</p>
                        <a href="#" class="slide-button">Encuentra Nuestro Beer Truck</a>
                    </div>
                </div>

                

            </div>

            
        </div>
    </header>

