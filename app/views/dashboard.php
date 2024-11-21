<?php
require_once __DIR__ . '/../controllers/protect.php';
require_once __DIR__ . '/../config/conn.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Core Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#2091F9">
    <title>TechAssist</title>
    <!-- Bootstrap Assets -->
    <link href="../../public/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Iconos -->
    <link href='../../public/assets/icons/bootstrap/bootstrap-icons.min.css' rel='stylesheet'>
    <link href='../../public/assets/icons/bootstrap/boxicons.min.css' rel='stylesheet'>


    <!-- Assets -->
    <link rel="shortcut icon" href="../../public/assets/favicon/TechAssist-favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../public/assets/css/index.css">
    <link rel="stylesheet" href="../../public/assets/css/main.css">
    <link rel="stylesheet" href="../../public/assets/css/dashboard.css">





</head>

<body>

    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="title-main-1">T</span>ech<span class="title-main-1">A</span>ssist <img src="../../public/assets/favicon/TechAssist-favicon.png" class="favicon" alt=""></a>
            <button class="navbar-toggler" style="color:#ff7143 !important;" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="../../index.php"><i class="bi bi-house"></i> Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-gear"></i> Cuenta
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="nav-link" id="showAccountData" href="#">
                                    <i class="bi bi-eye"></i> Datos De La Cuenta
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">
                                    <i class="bi bi-pencil-square"></i> Modificar Cuenta
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" id="showHistory" href="#">
                                    <i class="bi bi-clock-history"></i> Historial
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="nav-link text-danger" style="cursor: pointer;" id="deleteAccountBtn">
                                    <i class="bi bi-trash"></i> Eliminar Cuenta
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-motherboard-fill"></i> Hardware</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-code-square"></i> Software</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-phone-fill"></i> Teléfonos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-laptop"></i> Portátiles</a>
                    </li>
                    <li class="nav-item">
                        <a onclick="PcMenu()" class="nav-link" href="#"><i class="bi bi-pc-display"></i> PCs-Escritorio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-controller"></i> Consolas</a>
                    </li>
                    <li class="nav-item">
                        <a id="logoutBtn" class="nav-link" style="cursor: pointer;">
                            <i class="bi bi-box-arrow-right"></i> Cerrar Sesión
                        </a>
                    </li>

                </ul>
            </div>
    </nav>




    <main>
        <header class="hero_main">
            <div class="hero-video">
                <video autoplay muted loop id="bgVideo">
                    <source src="../../public/assets/media/PcBanner.mp4" type="video/mp4">
                </video>
            </div>
            <div class="hero_container">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 text-center">
                            <h1 class="hero-title">¡<span style="color: #ff7143;">Aprende</span> como funciona una <span style="color: #ff7143;">computadora</span>!</h1>
                            <p class="hero_text">Aprende como es desde su interior y cual es la mejor para ti</p>
                            <div class="hero-actions">
                                <button type="button" class="btn btn-outline-light" onclick="PcMenu()">Menu</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>



        <!-- Quick Access Cards -->
        <section class="PcMenu" id="PcMenu">
            <div class="container">
                <div class="quick-grid">
                    <div class="card">
                        <img src="../../public/assets/images/Rizen 7 5700x.png" class="card-img-top size-img" alt="Procesador">
                        <div class="card-body">
                            <h5 class="card-title">Procesador</h5>
                            <p class="card-text" id="option-processor">El procesador es el cerebro de la computadora que hace funcionar la computadora.</p>
                        </div>
                    </div>

                    <div class="card">
                        <img src="../../public/assets/images/Corsair Dominator Platinum.webp" class="card-img-top size-img" alt="Memoria RAM">
                        <div class="card-body">
                            <h5 class="card-title">Memoria RAM</h5>
                            <p class="card-text" id="option-RAM">La memoria RAM es la memoria que la computadora usa para trabajar mas rápido.</p>
                        </div>

                    </div>

                    <div class="card">
                        <img src="../../public/assets/images/Rog Strix B550-f Wifi 2.jpg" class="card-img-top size-img" alt="Tarjeta Madre">
                        <div class="card-body">
                            <h5 class="card-title">Tarjeta Madre</h5>
                            <p class="card-text" id="option-motherboard">La tarjeta madre es en donde se conectan todos los componentes para que funcionen.</p>
                        </div>
                    </div>

                    <div class="card">
                        <img src="../../public/assets/images/H9 Elite NZXT.png" class="card-img-top size-img" alt="Gabinete">
                        <div class="card-body">
                            <h5 class="card-title">Gabinete</h5>
                            <p class="card-text" id="option-case">El gabinete es la caja que protege las partes de la computadora.</p>
                        </div>
                    </div>

                    <div class="card">
                        <img src="../../public/assets/images/Corsair RM750e.avif" class="card-img-top size-img" alt="Fuente De Poder">
                        <div class="card-body">
                            <h5 class="card-title">Fuente De Poder</h5>
                            <p class="card-text" id="option-powerSource">La fuente de poder da energía todas las partes de la computadora.</p>
                        </div>
                    </div>

                    <div class="card">
                        <img src="../../public/assets/images/kraken 240mm z53.webp" class="card-img-top size-img" alt="Enfriamiento De La CPU">
                        <div class="card-body">
                            <h5 class="card-title">Enfriamiento De La CPU</h5>
                            <p class="card-text" id="option-cooler">Mantiene el procesador a una temperatura adecuada.</p>
                        </div>
                    </div>

                    <div class="card">
                        <img src="../../public/assets/images/rx 6750xt.jfif" class="card-img-top size-img" alt="Tarjeta Gráfica">
                        <div class="card-body">
                            <h5 class="card-title">Tarjeta Gráfica</h5>
                            <p class="card-text" id="option-graphicCard">Se encarga de mostrar imágenes detalladas en la pantalla.</p>
                        </div>
                    </div>

                    <div class="card">
                        <img src="../../public/assets/images/SSD-Crucial-T500-NVMe-2TB.webp" class="card-img-top size-img" alt="Disco Duro">
                        <div class="card-body">
                            <h5 class="card-title">Disco Duro</h5>
                            <p class="card-text" id="option-drive">Es donde se guarda todo, los archivos y programas de forma permanente.</p>
                        </div>
                    </div>

                    <div class="card">
                        <img src="../../public/assets/images/Artic MX-4.png" onclick="a()" class="card-img-top size-img" alt="Pasta Térmica">
                        <div class="card-body">
                            <h5 class="card-title">Pasta Térmica</h5>
                            <p class="card-text" id="option-thermalPaste"> Es una sustancia que se coloca entre el procesador y el enfriamiento para evitar que se caliente demasiado.</p>
                        </div>
                    </div>

                    <div class="card">
                        <img src="../../public/assets/images/Gigabyte G24F 2.png" class="card-img-top size-img" alt="Accesorios">
                        <div class="card-body">
                            <h5 class="card-title">Accesorios</h5>
                            <p class="card-text" id="option-accessories">Los accesorios de una PC que añaden funciones: monitor (pantalla), teclado, ratón, altavoces, y cámara web.</p>
                        </div>
                    </div>

                    <div class="card">
                        <img src="../../public/assets/images/Pc-Recomendadas.webp" class="card-img-top size-img" alt="Accesorios">
                        <div class="card-body">
                            <h5 class="card-title">Recomendaciones</h5>
                            <p class="card-text" id="option-accessories">Los accesorios de una PC que añaden funciones: monitor (pantalla), teclado, ratón, altavoces, y cámara web.</p>
                        </div>
                    </div>

                    <div class="card">
                        <img src="../../public/assets/images/Pc-CuidadosPrincipiante.png" class="card-img-top size-img" alt="Accesorios">
                        <div class="card-body">
                            <h5 class="card-title">Cuidados</h5>
                            <p class="card-text" id="option-accessories">Los accesorios de una PC que añaden funciones: monitor (pantalla), teclado, ratón, altavoces, y cámara web.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Component Explorer -->
        <section class="component-explorer">
            <div class="container">
                <div class="section-header">
                    <h2>Explorador de Componentes</h2>
                    <p>Interactúa y aprende sobre cada parte de tu PC</p>
                </div>

                <div class="explorer-container">
                    <div class="pc-viewport">
                        <div class="pc-3d">
                            <img src="" alt="PC 3D" class="pc-model">
                            <div class="hotspots">
                                <div class="hotspot" data-component="cpu" style="top: 30%; left: 40%">
                                    <div class="hotspot-dot"></div>
                                    <div class="hotspot-label">CPU</div>
                                </div>
                                <div class="hotspot" data-component="gpu" style="top: 50%; left: 60%">
                                    <div class="hotspot-dot"></div>
                                    <div class="hotspot-label">GPU</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="component-info">
                        <div class="info-card active" data-component="cpu">
                            <h3>Procesador (CPU)</h3>
                            <div class="info-content">
                                <div class="info-basics">
                                    <h4>Función Principal</h4>
                                    <p>El cerebro de tu PC, procesa todas las instrucciones</p>
                                </div>
                                <div class="info-specs">
                                    <h4>Características Clave</h4>
                                    <ul>
                                        <li>Núcleos y hilos</li>
                                        <li>Frecuencia base y boost</li>
                                        <li>Cache y TDP</li>
                                    </ul>
                                </div>
                                <div class="info-recommendations">
                                    <h4>Recomendaciones</h4>
                                    <ul>
                                        <li>Gaming: Intel i5/i7, Ryzen 5/7</li>
                                        <li>Trabajo: i7/i9, Ryzen 7/9</li>
                                        <li>Básico: i3, Ryzen 3</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Modal para eliminar cuenta -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header modal-top errorModal">
                    <h5 class="modal-title">Eliminar Cuenta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <i class="bi bi-exclamation-triangle warning-icon"></i>
                    <span>¿Estás seguro de que deseas eliminar tu cuenta? Esta acción no se puede deshacer.</span>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="accept-btn errorModal" id="confirmDelete">
                        Eliminar Cuenta
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de error -->
    <div class="modal fade" id="errorModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header modal-top errorModal">
                    <h5 class="modal-title">Error</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <i class="bi bi-exclamation-triangle warning-icon"></i>
                    <span id="errorMsg"></span>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="accept-btn errorModal" data-bs-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Overlay de carga -->
    <div id="loadingOverlay" class="shadowLayer vanish">
        <div class="reg-panel p-4 text-center" style="width: auto !important; height: auto !important;">
            <div class="spinner-border text-primary mb-2" role="status">
                <span class="visually-hidden">Cargando...</span>
            </div>
            <div class="mt-2">Procesando solicitud...</div>
        </div>
    </div>

    <div id="userLevel" class="userLevel">que honda</div>
    </div>



    <!-- Modal de verificación antes de eliminar -->
    <div id="verifyDeleteModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="verifyDeleteTitle">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header modal-top errorModal">
                    <h5 class="modal-title" id="verifyDeleteTitle">Verificar Cuenta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <p>Por seguridad, verifica tu cuenta antes de eliminarla:</p>
                    <div class="mb-3">
                        <label class="input-tag">Correo electrónico</label>
                        <input type="email" id="verifyEmail" class="form-field w-100">
                        <div id="verifyEmailError" class="alert-message">
                            Por favor ingresa tu correo electrónico.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="input-tag">Nombre de usuario</label>
                        <input type="text" id="verifyUsername" class="form-field w-100">
                        <div id="verifyUsernameError" class="alert-message">
                            Por favor ingresa tu nombre de usuario.
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="accept-btn errorModal" id="verifyDeleteBtn">
                        Verificar
                    </button>
                </div>
            </div>
        </div>
    </div>

<!-- Modal Datos de la Cuenta -->
<div class="modal fade" id="accountDataModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header modal-top" style="background: var(--turquoise)">
                <h5 class="modal-title">
                    <i class="bi bi-person-circle me-2"></i>
                    Datos de la Cuenta
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body px-4 py-3">
                <div class="account-info">
                    <div class="info-item">
                        <span class="info-label"><i class="bi bi-person"></i> Usuario:</span>
                        <span id="accountUsername" class="info-value"></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label"><i class="bi bi-envelope"></i> Email:</span>
                        <span id="accountEmail" class="info-value"></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label"><i class="bi bi-star"></i> Nivel:</span>
                        <span id="accountLevel" class="info-value"></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label"><i class="bi bi-calendar"></i> Registro:</span>
                        <span id="accountRegDate" class="info-value"></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label"><i class="bi bi-clock"></i> Última sesión:</span>
                        <span id="accountLastLogin" class="info-value"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Historial -->
<!-- Modal Historial -->
<div class="modal fade" id="historyModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-top" style="background: var(--blue)">
                <h5 class="modal-title">
                    <i class="bi bi-clock-history me-2"></i>
                    Historial de Actividad
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-0">
                <div class="history-list">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Fecha y Hora</th>
                                <th>Actividad</th>
                                <th>Dispositivo</th>
                                <th>Navegador</th>
                            </tr>
                        </thead>
                        <tbody id="historyTableBody">
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer border-top-0">
                <div class="d-flex gap-3 justify-content-center w-100">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-shield-check text-info me-2"></i>
                        <small>Sesión Permanente</small>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="bi bi-box-arrow-in-right text-success me-2"></i>
                        <small>Inicio Sesión</small>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="bi bi-box-arrow-right text-warning me-2"></i>
                        <small>Cierre Sesión</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Footer -->
    <footer class="footer">

        <div class="footer__container">
            <div class="footer__section">
                <h3 class="footer__title"><span style="color: aliceblue !important;">Tech</span>Assist <img src="../../public/assets/favicon/TechAssist-favicon.png" class="favicon" alt=""></h3>
                <div class="footer__content">
                    <p></p>
                    <div class="footer__contact">
                        <p><i class="bi bi-telephone"></i><a href="tel:+52 777 439 5441" style="color: inherit; text-decoration: none;">+52 777 439 5441</a></p>
                        <p><i class="bi bi-envelope"></i><a href="mailto:support@techassistpro.pro" style="color: inherit; text-decoration: none;">support@techassistpro.pro</a></p>
                    </div>
                </div>
            </div>

            <div class="footer__section">
                <h3 class="footer__title">Enlaces</h3>
                <div class="footer__links">
                    <a href="#inicio" class="footer__link"><i class="bi bi-chevron-right"></i> Inicio</a>
                    <a href="#inicio" class="footer__link"><i class="bi bi-chevron-right"></i> Iniciar Sesion</a>
                    <a href="#inicio" class="footer__link"><i class="bi bi-chevron-right"></i> Registrar</a>
                </div>
            </div>

            <div class="footer__section">
                <h3 class="footer__title">Servicios</h3>
                <div class="footer__links">
                    <a href="#" class="footer__link"><i class="bi bi-pc-display"></i> PCs-Escritorio </a>
                    <a href="#" class="footer__link"><i class="bi bi-code-square"></i> Software</a>
                    <a href="#" class="footer__link"><i class="bi bi-people"></i> Recomendaciones</a>
                    <a href="#" class="footer__link"><i class="bi bi-tools"></i> Ensambles</a>
                    <a href="#" class="footer__link"><i class="bi bi-hdd-network"></i> Otros</a>

                </div>
            </div>

            <div class="footer__section">
                <h3 class="footer__title">Síguenos</h3>
                <div class="footer__social">
                    <a href="https://www.facebook.com/profile.php?id=61568955356110" class="footer__social-icon" aria-label="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="footer__social-icon" aria-label="Twitter">
                        <i class="bi bi-twitter-x"></i>
                    </a>
                    <a href="#" class="footer__social-icon" aria-label="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#" class="footer__social-icon" aria-label="LinkedIn">
                        <i class="bi bi-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="footer__bottom">
            <div class="footer__divider"></div>
            <p class="footer__copyright">
                © <span id="currentYear"></span> TechAssist - Todos los derechos reservados | Diseñado por Angel Jesús Romero
                Pérez.
            </p>
        </div>
    </footer>
    </script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>

    <script src="../../public/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="../../public/assets/js/animation/pc.js"></script>
<script src="../../public/assets/js/animation/nav.js"></script>
<script src="../../public/assets/js/logic/getUserLevel.js"></script>
<script src="../../public/assets/js/logic/logout.js"></script>
<script src="../../public/assets/js/logic/deleteAccount.js"></script>
<!-- Agrega este nuevo script al final -->
<script src="../../public/assets/js/logic/accountInfo.js"></script>


</body>

</html>