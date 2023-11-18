

<header class="contenedor">
         
<nav class="navbar navbar-expand-lg navigation">
        <div class="contenedor__img navbar-brand">
            <img src="./img/logo.png" alt="logo">
        </div>
    
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="bi bi-list"></i></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- <li class="nav-item"><a class="nav-link" href="./login/login.html">Iniciar Sesión</a></li> -->
                <li class="nav-item"><i class="bi bi-person-circle" onclick="openPopup()"></i></li>
                <li class="nav-item"><a class="nav-link" href="./tienda.php">Tienda</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Beer Truck</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Caracol Negro</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
            </ul>
        </div>
    
        <div class="contenedor-redes-carrito">
            <div class="redes">
                <a href="#" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="#" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="#" target="_blank"><i class="bi bi-whatsapp"></i></a>
            </div>
            <div class="carrito">
                <a href="">
                    <i class="bi bi-cart cart"></i>
                </a>
            </div>
        </div>
    </nav>
    <!-- Pop-up de inicio de sesión -->
    <div class="popup" id="loginPopup">
        <div class="popup-content">
            <span class="close" onclick="closePopup()">&times;</span>
            <h2>Iniciar Sesión</h2>
            <form action="./login.php" method="post">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required>
                
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
                
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </form>
        </div>
    </div>  
        

        <!-- Swipe -->
        <!-- Estructura básica de Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="./img/fondo1.jpg" alt="Imagen 1">
                    <div class="slide-content">
                        <h2 class="slide-content__title">Tradición y Pasión en Cada Gota</h2>
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
