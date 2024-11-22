<!--
 * TechAssist - Sistema de Aprendizaje Interactivo
 * Copyright (c) 2024 TechAssist
 * Autor: Angel Jesús Romero Pérez
 * 
 * Este archivo es parte de TechAssist y está protegido por derechos de autor.
 * Uso no autorizado de este código está prohibido.
-->
 
<?php
require_once 'app/config/conn.php';
require_once 'app/models/AuthModel.php';

// Verificar si necesitamos forzar un logout
if (isset($_GET['logout'])) {
    $database = new Database();
    $authModel = new AuthModel($database);
    $authModel->forceLogout();
    header('Location: index.php');
    exit;
}

// Solo verificar autenticación, no redirigir automáticamente
$database = new Database();
$authModel = new AuthModel($database);

// Si está autenticado y específicamente en index.php, redirigir
if ($authModel->checkAuth() && basename($_SERVER['PHP_SELF']) === 'index.php') {
    header('Location: app/views/dashboard.php');
    exit;
}
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
  <link href="./public/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
  <!-- Iconos -->
  <link href='./public/assets/icons/bootstrap/bootstrap-icons.min.css' rel='stylesheet'>
  <link href='./public/assets/icons/bootstrap/boxicons.min.css' rel='stylesheet'>


  <!-- Assets -->
  <link rel="shortcut icon" href="./public/assets/favicon/TechAssist-favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="./public/assets/css/index.css">
  <link rel="stylesheet" href="./public/assets/css/main.css">




</head>

<body>

  <!-- Navbar -->
  <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="#"><span class="title-main-1">T</span>ech<span class="title-main-1">A</span>ssist <img src="./public/assets/favicon/TechAssist-favicon.png" class="favicon" alt=""></a>
      <button class="navbar-toggler" style="color:#ff7143 !important;" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="index.php"><i class="bi bi-house"></i> Inicio</a>
          </li>
          <li class="nav-item">
            <a id="login-triggerLayer" class="nav-link" style="cursor: pointer;"><i class="bi bi-person-fill"></i> Iniciar
              Sesión</a>
          </li>
          <li class="nav-item">
            <a id="register-triggerLayer" class="nav-link" style="cursor: pointer;"><i class="bi bi-person-fill-add"></i>
              Registrar</a>
          </li>
        </ul>
      </div>
  </nav>



  <!-- Main Header -->
  <header class="hero" id="inicio">
    <section class="hero__container container">
      <h1 class="hero_title">Aprende sobre PCs de escritorio, SmartPhones & Mas</h1>
      <p class="hero_pg">!Aquí aprenderás la parte interna y externa de computadoras de escritorio, telfonos y mas.¡</p>
<p><i class="bi bi-pc-display" style="font-size: 75px !important;"></i><i class="bi bi-phone-fill" style="font-size: 75px !important; color: var(--orange);"></i></p>

    </section>
  </header>



  <!-- Slider -->
  <section class="object">
    <div class="object__container">
      <img src="./public/assets/icons/leftarrow.svg" class="object__arrow" id="before">

      <section class="object__body object__body--show" data-id="1">
        <div class="object__texts">
          <h2 class="subtitle">Xiaomi Poco X5 Pro 5G Dual SIM 256 GB negro 8 GB RAM, <span
              class="object__course">¡Excelente opción en gama media con gran relación
              calidad-precio!</span></h2>
          <p class="object__review">
          <p>Pantalla: AMOLED de 6.67" a 120Hz</p>
          <p>Procesador: Qualcomm Snapdragon 778G</p>
          <p>Memoria: 8GB RAM, 256GB almacenamiento</p>
          <p>Cámara: Trasera: 108MP + 8MP + 2MP; Frontal: 16MP</p>
          <p>Batería: 5000mAh con carga rápida de 67W</p>
          <br>
          <p>Otras: 5G, WiFi 6, Bluetooth 5.2, NFC, USB-C, sensor de huellas, IP53, altavoces estéreo</p>
          <p>Sin ranura microSD ni jack de 3.5mm</p>
          <p>No compatible con carga inalámbrica</p>
          </p>
        </div>

        <figure class="object__picture">
          <img src="./public/assets/images/PocoX5.png" class="object__img">
        </figure>
      </section>

      <section class="object__body" data-id="2">
        <div class="object__texts">
          <h2 class="subtitle">MSI Thin GF63 15.6" 144Hz i7 12th
            GeForce RTX 4050, 16GB DDR4, 512GB NVMe SSD, Cooler Boost 5, Win11 Home,<span class="object__course">¡Un
              portátil versátil, con un buen
              rendimiento a un precio accesible!, muy recomendable para gamers casuales y
              estudiantes.</span></h2>
          <p class="object__review">
          <p>Procesador: Intel Core i7 de 12ª generación (Alder Lake)</p>
          <p>Gráfica: NVIDIA GeForce RTX 4050</p>
          <p>Memoria RAM: 16GB DDR4</p>
          <p>Almacenamiento: 512GB NVMe SSD</p>
          <p>Pantalla: 15.6" 144Hz</p>
          <p>Conectividad: Type-C</p>
          <p>Refrigeración: Cooler Boost 5</p>
          <p>Sistema operativo: Windows 11 Home</p>
          <br>
          <p>Consideraciones:</p>
          <br>
          <p>Peso y duración de la batería no especificados.</p>
          <p>Variedad en la calidad de teclado y trackpad según modelo.</p>
          <p>Comparar con otros portátiles similares antes de comprar.</p>
          </p>
        </div>

        <figure class="object__picture">
          <img src="./public/assets/images/msi GF63.png" class="object__img">
        </figure>
      </section>

      <section class="object__body" data-id="3">
        <div class="object__texts">
          <h2 class="subtitle">PowerColor Hellhound Spectral AMD Radeon RX 7900 XTX Tarjeta gráfica para
            Juegos, <span class="object__course">¡Una tarjeta gráfica poderosa!, ideal para gaming y para usuarios
              exigentes </span></h2>
          <p>Memoria de vídeo: 24 GB GDDR6</p>
          <p>Procesador de corriente: 6144 unidades</p>
          <p>Reloj del motor: Juego 2330 MHz (OC) / 2270 MHz (silencioso), Boost 2525 MHz (OC) / 2500 MHz
            (silencioso)</p>
          <p>Reloj de memoria: 20.0 Gbps</p>
          <p>Conectores de visualización: 1 x HDMI 2.1 , 3 x DisplayPort 2.1</p>
          <br>
          <br>
          <p>El tope de gama en tarjetas gráficas de AMD.</p>
          <p>La radeon 7900 XTX es la competencia directa de la 4080 de NVIDIA.</p>
          <p>Con un consumo de 15 W menos que la RTX 4080 y 94 W menos que la RTX 4090.</p>
          <p>Su precio ronda los $28,000-$32,000 pesos mexicanos.</p>
          <p>Lo único a tener a Consideración es que la tecnología FSR 3 de AMD tiende a ofrecer una
            calidad de imagen inferior que la tecnología DLLS 3 de NVIDIA, pero sin embargo, el FSR 3 ha
            mejorado notablemente, ofreciendo una calidad más que aceptable, especialmente en juegos
            donde el movimiento rápido es constante.</p>
        </div>

        <figure class="object__picture">
          <img src="./public/assets/images/Rx 7800xt spectral.webp" class="object__img">
        </figure>
      </section>

      <section class="object__body" data-id="4">
        <div class="object__texts">
          <h2 class="subtitle">Xiaomi Mi 11T Pro 5G 128GB o 256GB ROM, 8GB o 12GB RAM, Snapdragon 888,
            6.67 pulgadas 120Hz AMOLED, 120W Xiaomi HyperCharge 5000mAh, 108MP HDR10+, <span class="object__course">¡Un
              teléfono ideal para los que les gusta tomar buenas fotos y
              jugar videojuegos</span></h2>
          <p class="object__review">
          <p>Pantalla: 6.67" AMOLED, 2400x1080 píxeles, 120Hz, HDR10+</p>
          <p>Procesador: Qualcomm Snapdragon 888, 5nm</p>
          <p>RAM: 8GB o 12GB</p>
          <p>Almacenamiento: 128GB o 256GB (UFS 3.1)</p>
          <p>Cámara Trasera:
            Principal: 108MP
            Ultra gran angular: 8MP
            Telemacro: 5MP</p>
          <p>Cámara Frontal: 16MP</p>
          <p>Batería: 5000mAh, carga rápida 120W</p>
          <p>Sistema Operativo: MIUI 12.5 (Android 11)</p>
          <p>Conectividad: 5G, Wi-Fi 6, Bluetooth 5.2, NFC, USB-C</p>
          <br>
          <p>Otros:
            Altavoces estéreo Harman Kardon
            Lector de huellas lateral
            Gorilla Glass Victus
            Dimensiones: 164.1 x 76.9 x 8.8 mm
            Peso: 204 g</p>
          <br>
          <p>Contras:
            Sin expansión de almacenamiento
            Sin certificación IP
            Peso de 204 g
            MIUI puede no gustar a todos</p>
          </p>
        </div>

        <figure class="object__picture">
          <img src="./public/assets/images/Xiaomi 11T Pro.jpg" class="object__img">
        </figure>
      </section>

      <section class="object__body" data-id="5">
        <div class="object__texts">
          <h2 class="subtitle">AMD Procesador Ryzen™ 5 5600G - 6 núcleos de CPU - Socket-AM4-3.90GHz - 16MB L3 Cache,
            <span class="object__course">¡Un teléfono ideal para los que les gusta tomar buenas fotos y
              jugar videojuegos!</span>
          </h2>
          <p class="object__review">
            Ryzen™ 5 5600G:
          <p>Diseño de CPU:</p>
          <p>Núcleos: 6 núcleos</p>
          <p>Hilos: 12 hilos (gracias a AMD Simultaneous Multithreading)</p>
          <p>Frecuencia base: 3.9 GHz</p>
          <p>Frecuencia turbo máxima: 4.4 GHz</p>
          <p>Caché L3: 16 MB</p>
          <p>Gráficos Integrados:</p>
          <p>GPU: Radeon RX Vega 7</p>
          <p>Unidades de ejecución: 7</p>
          <p>Frecuencia de reloj de la GPU: 1900 MHz</p>
          <p>Tecnología de Fabricación:</p>
          <p>Proceso de producción: 7 nm</p>
          <p>Transistores: Aproximadamente 10,700 millones</p>
          <p>El Ryzen 5 5600G ofrece un rendimiento sólido con sus 6 núcleos y 12 hilos, junto con gráficos integrados
            Radeon RX Vega 7, es decir que no se necesita una gráfica dedicada, a no ser que se necesite un mayor
            rendimiento.</p>
        </div>

        <figure class="object__picture">
          <img src="./public/assets/images/Rizen 5 5600G.png" class="object__img">
        </figure>
      </section>

      <section class="object__body" data-id="6">
        <div class="object__texts">
          <h2 class="subtitle">MacBook Air 13" MGN63LA/A Chip M1 CPU8 GPU7 8GB 256GB, <span class="object__course">¡Un
              portátil muy bueno para usuarios que buscan un equilibrio entre rendimiento, portabilidad y precio!</span>
          </h2>
          <p class="object__review">
          <p>Pantalla: 13 pulgadas, Retina Display, 2560 x 1600 píxeles, 400 nits, P3</p>
          <p>Procesador: Chip M1 de Apple, CPU de 8 núcleos, GPU de 7 núcleos</p>
          <p>Memoria: 8 GB de RAM (configurable a 16 GB)</p>
          <p>Almacenamiento: 256 GB de almacenamiento SSD (configurable a 512 GB, 1 TB o 2 TB)</p>
          <p>Cámara: Cámara FaceTime HD de 720p</p>
          <p>Conectividad: Wi-Fi 6 (802.11ax), Bluetooth 5.0, 2 puertos Thunderbolt 3 (USB-C)</p>
          <p>Batería: Hasta 15 horas de navegación web o reproducción de video</p>
          <p>Sistema Operativo: macOS Big Sur (actualizable a versiones posteriores)</p>
          <p>Otros: Teclado Magic Keyboard, Touch ID integrado, altavoces estéreo, micrófonos de alta calidad</p>

        </div>

        <figure class="object__picture">
          <img src="./public/assets/images/MackBook Air 8gb.webp" class="object__img">
        </figure>
      </section>

      <img src="./public/assets/icons/rightarrow.svg" class="object__arrow" id="next">
    </div>
  </section>



  <!-- Info Container -->
  <section class="knowledge">
    <div class="knowledge__container container">
      <div class="knowledege__texts">
        <h2 class="subtitle">¡Aquí aprenderás lo necesario para elegir los componentes y configuraciones
          al
          comprar una PC de escritorio!</h2>
        <p class="knowledge__paragraph">Te explicamos la importancia del procesador y cómo elegir el
          adecuado según tus necesidades. Te describimos las opciones de tarjetas gráficas para juegos
          y
          diseño, y te asesoramos sobre la cantidad de memoria RAM necesaria. Comparamos discos duros
          y
          unidades de estado sólido para que elijas el almacenamiento correcto. Te ayudamos a
          seleccionar
          una placa base compatible y una fuente de alimentación confiable. También te orientamos
          sobre
          sistemas de enfriamiento y te recomendamos periféricos esenciales como monitores, teclados y
          ratones. Nuestro objetivo es que tomes decisiones informadas y personalizadas para tu PC de
          escritorio ideal.</p>
        <a href="#" class="cta-2">Iniciar Sesión</a>
      </div>

      <figure class="knowledge__picture">
        <img src="./public/assets/images/Pc Inside.png" class="knowledge__img">
      </figure>
    </div>
  </section>



  <!-- Register Form -->
  <div id="register-shadowLayer" class="shadowLayer vanish">
    <button class="register-exitTrigger exitTrigger" aria-label="Cerrar">
      <i class="bi bi-x"></i>
    </button>
    <form id="registerForm">
      <div class="form-container">
        <div class="reg-panel">
          <h2 class="main-heading">Registro de Usuario</h2>
          <form id="registerForm" onsubmit="return validateForm(event)">
            <div class="mb-4">
              <label for="username" class="input-tag">Nombre de usuario</label>
              <input type="text" class="form-control form-field" id="username">
              <div id="usernameRegisError" class="alert-message">
                Por favor ingrese su nombre de usuario.
              </div>
            </div>

            <div class="mb-4">
              <label for="userEmail" class="input-tag">Correo electrónico</label>
              <input type="email" class="form-control form-field" id="userEmail">
              <div id="emailRegisError" class="alert-message">
                Por favor ingrese un correo válido (@gmail.com, @hotmail.com, @outlook.com o @yahoo.com).
              </div>
              <div id="emailempyRegisError" class="alert-message">
                Por favor ingrese su correo.
              </div>
            </div>

            <div class="section-break"></div>

            <div class="mb-4">
              <h5 class="form-subtitle">Nivel de conocimiento en tecnología</h5>
              <p class="text-center text-muted mb-3">¿Qué tan familiarizado estás con dispositivos electrónicos?</p>
              <div class="d-flex justify-content-between gap-2">
                <button type="button" class="level-button" onclick="selectLevel('level-basic', this)">
                  Principiante
                </button>
                <button type="button" class="level-button" onclick="selectLevel('level-medium', this)">
                  Promedio
                </button>
                <button type="button" class="level-button" onclick="selectLevel('level-advanced', this)">
                  Experto
                </button>
              </div>
            </div>

            <div class="section-break"></div>


            <div class="mb-4 nav-links d-flex justify-content-between">
              <a id="register-exitTrigger" href="#">¿Ya tienes cuenta? Iniciar sesión</a>
            </div>

            <div class="text-end">
              <button type="submit" class="send-button">Registrarme</button>
            </div>
          </form>
        </div>
      </div>
    </form>
  </div>



  <!-- Login Form -->

  <div id="login-shadowLayer" class="shadowLayer vanish">
    <button class="login-exitTrigger exitTrigger" aria-label="Cerrar">
      <i class="bi bi-x"></i>
    </button>
    <form id="loginForm">
      <div class="form-container" style="width: 600px !important; height: 600px !important;">
        <div class="reg-panel">
          <h2 class="main-heading">Inicio de Sesión</h2>

          <form id="loginForm">
            <div class="mb-4">
              <label class="input-tag">Correo electrónico</label>
              <input type="email" id="loginEmail" class="form-field w-100">
              <div id="emailLoginError" class="alert-message">
                Por favor ingrese un correo válido (@gmail.com, @hotmail.com, @outlook.com o @yahoo.com)
              </div>
              <div id="emailemptyLoginError" class="alert-message">
                Por favor ingrese un correo electrónico.
              </div>
            </div>

            <div class="mb-4">
              <label class="input-tag">Nombre de usuario</label>
              <input type="text" id="loginUsername" class="form-field w-100">
              <div id="usernameLoginError" class="alert-message">
                Por favor ingrese su nombre de usuario.
              </div>
            </div>

            <div class="section-break"></div>

            <div class="mb-4 form-check">
              <input type="checkbox" id="rememberLogin" class="remember-check">
              <label for="rememberLogin" class="input-tag">Recordarme</label>
            </div>

            <div class="mb-4 nav-links d-flex justify-content-between">
              <a id="login-exitTrigger" href="#">¿No tienes cuenta? Registrar</a>
            </div>

            <div class="text-end">
              <button type="submit" class="send-button">Iniciar Sesión</button>
            </div>
          </form>
        </div>
      </div>
    </form>
  </div>



  <!--   Success Modals -->

<!-- Success Register Modal -->
<div id="registerSuccessModal" 
     class="modal fade" 
     tabindex="-1" 
     role="dialog"
     aria-labelledby="registerSuccessTitle">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header modal-top successModal">
                <h5 class="modal-title" id="registerSuccessTitle">¡Registro Exitoso!</h5>
                <button type="button" 
                        class="btn-close" 
                        data-bs-dismiss="modal" 
                        aria-label="Cerrar"></button>
            </div>
            <div class="modal-body d-flex align-items-center">
                <i class="bi bi-check-circle text-success me-2" 
                   aria-hidden="true"></i>
                <span>Te has registrado correctamente. ¡Bienvenido a TechAssist!</span>
            </div>
            <div class="modal-footer border-0">
                <button type="button" 
                        class="accept-btn successModal" 
                        data-bs-dismiss="modal"
                        onclick="hideRegisterContainers()">
                    Aceptar
                </button>
            </div>
        </div>
    </div>
</div>

  <!--  Login Success -->
  <div id="loginSuccessModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header modal-top successModal">
          <h5 class="modal-title">¡Inicio de Sesión Exitoso!</h5>
        </div>
        <div class="modal-body d-flex align-items-center"><i class="bi bi-check-circle text-success me-2"></i>
          Te has identificado correctamente. ¡Bienvenido a TechAssist!
        </div>
        <div class="modal-footer border-0">
          <button type="button" class="btn accept-btn successModal" id="loginSuccessBtn" data-bs-dismiss="modal">
            Aceptar
          </button>
        </div>
      </div>
    </div>
  </div>



  <!--  Error Modals -->



  <!-- Error Register -->
  <div id="errorModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header modal-top errorModal">
          <h5 class="modal-title">Error de Validación</h5>
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

  <!-- Error Login -->
  <div id="loginErrorModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header modal-top errorModal">
          <h5 class="modal-title">Error de Validación</h5>
        </div>
        <div class="modal-body d-flex align-items-center">
          <i class="bi bi-exclamation-triangle warning-icon"></i>
          <span id="loginErrorMsg"></span>
        </div>
        <div class="modal-footer border-0">
          <button type="button" class="accept-btn errorModal" data-bs-dismiss="modal">Aceptar</button>
        </div>
      </div>
    </div>
  </div>



  <!-- Otros Modals -->

  <!-- Loading -->
  <div id="loadingOverlay" class="shadowLayer vanish">
    <div class="reg-panel p-4 text-center" style="width: auto !important; height: auto !important;">
      <div class="spinner-border text-primary mb-2" role="status">
        <span class="visually-hidden">Cargando...</span>
      </div>
      <div class="mt-2">Procesando solicitud...</div>
    </div>
  </div>



  <!-- Footer -->
  <footer class="footer">

    <div class="footer__container">
      <div class="footer__section">
        <h3 class="footer__title"><span style="color: aliceblue !important;">Tech</span>Assist <img src="./public/assets/favicon/TechAssist-favicon.png" class="favicon" alt=""></h3>
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
        <h3 class="footer__title">Secciones</h3>
        <div class="footer__links">
                    <a href="#" class="footer__link"><i class="bi bi-pc-display"></i> PCs-Escritorio </a>
                    <a href="#" class="footer__link"><i class="bi bi-people"></i> Recomendaciones</a>
                    <a href="#" class="footer__link"><i class="bi bi-tools"></i> Componentes</a>

        </div>
      </div>

      <div class="footer__section">
        <h3 class="footer__title">Síguenos</h3>
        <div class="footer__social">
          <a href="https://www.facebook.com/profile.php?id=61568955356110" class="footer__social-icon" aria-label="Facebook">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="https://github.com/AngelRomero89382/TechAssist" class="footer__social-icon" aria-label="github">
            <i class="bi bi-github"></i>
          </a>
        </div>
      </div>
    </div>

    <div class="footer__bottom">
      <div class="footer__divider"></div>
      <p class="footer__copyright">
        © <span id="currentYear"></span> TechAssist - Todos los derechos reservados | Diseñado por Angel Jesús Romero
        Pérez & Luis Angel Martinez Ponce de Leon.
      </p>
    </div>
  </footer>



  <!-- Scripts -->
  <script>
    document.getElementById('currentYear').textContent = new Date().getFullYear();
  </script>
  <script src="./public/assets/js/animation/nav.js"></script>
  <script src="./public/assets/js/animation/slider.js"></script>
  <script src="./public/assets/js/logic/FormLogin.js"></script>
  <script src="./public/assets/js/logic/FormRegis.js"></script>
  <!-- Import Bootstrap -->
  <script src="./public/assets/js/bootstrap/bootstrap.bundle.min.js"></script>

</body>

</html>