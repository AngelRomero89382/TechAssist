<!--
 * TechAssist - Sistema de Aprendizaje Interactivo
 * Copyright (c) 2024 TechAssist
 * Autor: Angel Jesús Romero Pérez
 * 
 * Este archivo es parte de TechAssist y está protegido por derechos de autor.
 * Uso no autorizado de este código está prohibido.
-->

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
                        <a onclick="PcMenu()" class="nav-link" href="#"><i class="bi bi-pc-display"></i> PCs-Escritorio</a>
                    </li>
                    <li class="nav-item">
                        <a id="logoutBtn" class="nav-link" style="cursor: pointer;">
                            <i class="bi bi-box-arrow-right"></i> Cerrar Sesión
                        </a>
                    </li>

                </ul>
            </div>
    </nav>


    <div id="userLevel" class="userLevel">que honda</div>
    </div>

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
                                <button type="button" class="btn btn-outline-light" onclick="PcMenu()">PCs-Escritorio</button>
                            </div>
                            <br>
                            <div class="hero-actions">
                                <button type="button" class="btn btn-outline-light" onclick="PhoneMenu()">Smartphones</button>
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


                    <!-- CPU -->
                    <div class="card contenedor_base" id="principiante">
                        <img src="../../public/assets/images/Rizen 7 5700x.png" onclick="showCPUContainer(this)" class="card-img-top size-img" alt="Procesador">
                        <div class="card-body">
                            <h5 class="card-title beginner">Procesador - Beginner</h5>
                            <p class="card-text beginner" id="option-processor">El procesador es el cerebro de la computadora que hace funcionar la computadora.</p>
                        </div>
                    </div>

                    <div class="card contenedor_base">
                        <img src="../../public/assets/images/Rizen 7 5700x.png" class="card-img-top size-img" alt="Procesador">
                        <div class="card-body">
                            <h5 class="card-title intermediate">Procesador - Intermediate</h5>
                            <p class="card-text intermediate" id="option-processor">Es un componente clave que ejecuta instrucciones, asegúrate de monitorear su temperatura para evitar sobrecalentamientos.</p>
                        </div>
                    </div>

                    <div class="card contenedor_base" id="experto">
                        <img src="../../public/assets/images/Rizen 7 5700x.png" class="card-img-top size-img" alt="Procesador">
                        <div class="card-body">
                            <h5 class="card-title expert">Procesador - Expert</h5>
                            <p class="card-text expert" id="option-processor">Realiza overclocking seguro para maximizar el rendimiento, monitoreando las frecuencias y voltajes.</p>
                        </div>
                    </div>


                    <!-- RAM -->
                    <div class="card contenedor_base" id="principiante">
                        <img src="../../public/assets/images/Corsair Dominator Platinum.webp" class="card-img-top size-img" alt="Memoria RAM">
                        <div class="card-body">
                            <h5 class="card-title beginner">Memoria RAM - Beginner</h5>
                            <p class="card-text beginner" id="option-RAM">La memoria RAM es la memoria que la computadora usa para trabajar más rápido.</p>
                        </div>
                    </div>

                    <div class="card contenedor_base">
                        <img src="../../public/assets/images/Corsair Dominator Platinum.webp" class="card-img-top size-img" alt="Memoria RAM">
                        <div class="card-body">
                            <h5 class="card-title intermediate">Memoria RAM - Intermediate</h5>
                            <p class="card-text intermediate" id="option-RAM">Monitorea el uso de memoria para asegurarte de que tu sistema tiene suficiente capacidad disponible.</p>
                        </div>
                    </div>

                    <div class="card contenedor_base" id="experto">
                        <img src="../../public/assets/images/Corsair Dominator Platinum.webp" class="card-img-top size-img" alt="Memoria RAM">
                        <div class="card-body">
                            <h5 class="card-title expert">Memoria RAM - Expert</h5>
                            <p class="card-text expert" id="option-RAM">Configura perfiles avanzados como XMP/EXPO para optimizar su rendimiento.</p>
                        </div>
                    </div>


                    <!-- Motherboard -->
                    <div class="card contenedor_base" id="principiante">
                        <img src="../../public/assets/images/Rog Strix B550-f Wifi 2.jpg" class="card-img-top size-img" alt="Tarjeta Madre">
                        <div class="card-body">
                            <h5 class="card-title beginner">Tarjeta Madre - Beginner</h5>
                            <p class="card-text beginner" id="option-motherboard">La tarjeta madre es donde se conectan todos los componentes para que funcionen.</p>
                        </div>
                    </div>

                    <div class="card contenedor_base">
                        <img src="../../public/assets/images/Rog Strix B550-f Wifi 2.jpg" class="card-img-top size-img" alt="Tarjeta Madre">
                        <div class="card-body">
                            <h5 class="card-title intermediate">Tarjeta Madre - Intermediate</h5>
                            <p class="card-text intermediate" id="option-motherboard">Asegúrate de actualizar el BIOS regularmente para mantener la compatibilidad con componentes nuevos.</p>
                        </div>
                    </div>

                    <div class="card contenedor_base" id="experto">
                        <img src="../../public/assets/images/Rog Strix B550-f Wifi 2.jpg" class="card-img-top size-img" alt="Tarjeta Madre">
                        <div class="card-body">
                            <h5 class="card-title expert">Tarjeta Madre - Expert</h5>
                            <p class="card-text expert" id="option-motherboard">Optimiza la configuración del BIOS para un rendimiento máximo en sistemas avanzados.</p>
                        </div>
                    </div>


                    <!-- Case -->
                    <div class="card contenedor_base" id="principiante">
                        <img src="../../public/assets/images/H9 Elite NZXT.png" class="card-img-top size-img" alt="Gabinete">
                        <div class="card-body">
                            <h5 class="card-title beginner">Gabinete - Beginner</h5>
                            <p class="card-text beginner" id="option-case">El gabinete es la caja que protege las partes de la computadora.</p>
                        </div>
                    </div>

                    <div class="card contenedor_base">
                        <img src="../../public/assets/images/H9 Elite NZXT.png" class="card-img-top size-img" alt="Gabinete">
                        <div class="card-body">
                            <h5 class="card-title intermediate">Gabinete - Intermediate</h5>
                            <p class="card-text intermediate" id="option-case">Mantén una gestión de cables ordenada para mejorar el flujo de aire interno.</p>
                        </div>
                    </div>

                    <div class="card contenedor_base" id="experto">
                        <img src="../../public/assets/images/H9 Elite NZXT.png" class="card-img-top size-img" alt="Gabinete">
                        <div class="card-body">
                            <h5 class="card-title expert">Gabinete - Expert</h5>
                            <p class="card-text expert" id="option-case">Optimiza el flujo de aire con configuraciones avanzadas de ventiladores y sistemas de refrigeración líquida.</p>
                        </div>
                    </div>


                    <!-- PSU -->
                    <div class="card contenedor_base" id="principiante">
                        <img src="../../public/assets/images/Corsair RM750e.avif" class="card-img-top size-img" alt="Fuente De Poder">
                        <div class="card-body">
                            <h5 class="card-title beginner">Fuente De Poder - Beginner</h5>
                            <p class="card-text beginner" id="option-powerSource">La fuente de poder da energía a todas las partes de la computadora.</p>
                        </div>
                    </div>

                    <div class="card contenedor_base">
                        <img src="../../public/assets/images/Corsair RM750e.avif" class="card-img-top size-img" alt="Fuente De Poder">
                        <div class="card-body">
                            <h5 class="card-title intermediate">Fuente De Poder - Intermediate</h5>
                            <p class="card-text intermediate" id="option-powerSource">Asegúrate de que la fuente de poder tenga suficiente capacidad para todos tus componentes y mantén sus cables organizados.</p>
                        </div>
                    </div>

                    <div class="card contenedor_base" id="experto">
                        <img src="../../public/assets/images/Corsair RM750e.avif" class="card-img-top size-img" alt="Fuente De Poder">
                        <div class="card-body">
                            <h5 class="card-title expert">Fuente De Poder - Expert</h5>
                            <p class="card-text expert" id="option-powerSource">Selecciona una fuente modular de alta eficiencia (80 Plus Gold o superior) y verifica la calidad de sus conectores PCIe.</p>
                        </div>
                    </div>


                    <!-- Cooler -->
                    <div class="card contenedor_base" id="principiante">
                        <img src="../../public/assets/images/kraken 240mm z53.webp" class="card-img-top size-img" alt="Enfriamiento De La CPU">
                        <div class="card-body">
                            <h5 class="card-title beginner">Enfriamiento De La CPU - Beginner</h5>
                            <p class="card-text beginner" id="option-cooler">Mantiene el procesador a una temperatura adecuada.</p>
                        </div>
                    </div>

                    <div class="card contenedor_base">
                        <img src="../../public/assets/images/kraken 240mm z53.webp" class="card-img-top size-img" alt="Enfriamiento De La CPU">
                        <div class="card-body">
                            <h5 class="card-title intermediate">Enfriamiento De La CPU - Intermediate</h5>
                            <p class="card-text intermediate" id="option-cooler">Revisa la limpieza de los ventiladores y el radiador regularmente para evitar obstrucciones.</p>
                        </div>
                    </div>

                    <div class="card contenedor_base" id="experto">
                        <img src="../../public/assets/images/kraken 240mm z53.webp" class="card-img-top size-img" alt="Enfriamiento De La CPU">
                        <div class="card-body">
                            <h5 class="card-title expert">Enfriamiento De La CPU - Expert</h5>
                            <p class="card-text expert" id="option-cooler">Configura perfiles de velocidad en el software del cooler y verifica la posición correcta de la bomba para sistemas de refrigeración líquida.</p>
                        </div>
                    </div>

                    <!-- GPU -->
                    <div class="card contenedor_base" id="principiante">
                        <img src="../../public/assets/images/rx 6750xt.jfif" class="card-img-top size-img" alt="Tarjeta Gráfica">
                        <div class="card-body">
                            <h5 class="card-title beginner">Tarjeta Gráfica - Beginner</h5>
                            <p class="card-text beginner" id="option-graphicCard">Se encarga de mostrar imágenes detalladas en la pantalla.</p>
                        </div>
                    </div>

                    <div class="card contenedor_base">
                        <img src="../../public/assets/images/rx 6750xt.jfif" class="card-img-top size-img" alt="Tarjeta Gráfica">
                        <div class="card-body">
                            <h5 class="card-title intermediate">Tarjeta Gráfica - Intermediate</h5>
                            <p class="card-text intermediate" id="option-graphicCard">Mantén los drivers actualizados para garantizar el mejor rendimiento en los juegos y aplicaciones.</p>
                        </div>
                    </div>

                    <div class="card contenedor_base" id="experto">
                        <img src="../../public/assets/images/rx 6750xt.jfif" class="card-img-top size-img" alt="Tarjeta Gráfica">
                        <div class="card-body">
                            <h5 class="card-title expert">Tarjeta Gráfica - Expert</h5>
                            <p class="card-text expert" id="option-graphicCard">Realiza ajustes en las configuraciones de overclock y control térmico para maximizar el rendimiento.</p>
                        </div>
                    </div>


                    <!-- SSD -->
                    <div class="card contenedor_base" id="principiante">
                        <img src="../../public/assets/images/SSD-Crucial-T500-NVMe-2TB.webp" class="card-img-top size-img" alt="Disco Duro">
                        <div class="card-body">
                            <h5 class="card-title beginner">Disco Duro - Beginner</h5>
                            <p class="card-text beginner" id="option-drive">Es donde se guarda todo, los archivos y programas de forma permanente.</p>
                        </div>
                    </div>

                    <div class="card contenedor_base">
                        <img src="../../public/assets/images/SSD-Crucial-T500-NVMe-2TB.webp" class="card-img-top size-img" alt="Disco Duro">
                        <div class="card-body">
                            <h5 class="card-title intermediate">Disco Duro - Intermediate</h5>
                            <p class="card-text intermediate" id="option-drive">Verifica regularmente el estado de salud del disco utilizando software especializado.</p>
                        </div>
                    </div>

                    <div class="card contenedor_base" id="experto">
                        <img src="../../public/assets/images/SSD-Crucial-T500-NVMe-2TB.webp" class="card-img-top size-img" alt="Disco Duro">
                        <div class="card-body">
                            <h5 class="card-title expert">Disco Duro - Expert</h5>
                            <p class="card-text expert" id="option-drive">Configura discos en RAID para mejorar velocidad o redundancia, y optimiza el sistema de archivos.</p>
                        </div>
                    </div>


                    <!-- Pasta Térmica -->
                    <div class="card contenedor_base" id="principiante">
                        <img src="../../public/assets/images/Artic MX-4.png" onclick="a()" class="card-img-top size-img" alt="Pasta Térmica">
                        <div class="card-body">
                            <h5 class="card-title beginner">Pasta Térmica - Beginner</h5>
                            <p class="card-text beginner" id="option-thermalPaste">Es una sustancia que se coloca entre el procesador y el enfriamiento para evitar que se caliente demasiado.</p>
                        </div>
                    </div>

                    <div class="card contenedor_base">
                        <img src="../../public/assets/images/Artic MX-4.png" onclick="a()" class="card-img-top size-img" alt="Pasta Térmica">
                        <div class="card-body">
                            <h5 class="card-title intermediate">Pasta Térmica - Intermediate</h5>
                            <p class="card-text intermediate" id="option-thermalPaste">Asegúrate de cambiar la pasta térmica cada 1-2 años para mantener un buen rendimiento térmico.</p>
                        </div>
                    </div>

                    <div class="card contenedor_base" id="experto">
                        <img src="../../public/assets/images/Artic MX-4.png" onclick="a()" class="card-img-top size-img" alt="Pasta Térmica">
                        <div class="card-body">
                            <h5 class="card-title expert">Pasta Térmica - Expert</h5>
                            <p class="card-text expert" id="option-thermalPaste">Utiliza pastas térmicas de alto rendimiento y aplica de manera uniforme para maximizar la disipación de calor.</p>
                        </div>
                    </div>


                    <!-- Accesorios -->
                    <div class="card contenedor_base" id="principiante">
                        <img src="../../public/assets/images/Gigabyte G24F 2.png" class="card-img-top size-img" alt="Accesorios">
                        <div class="card-body">
                            <h5 class="card-title beginner">Accesorios - Beginner</h5>
                            <p class="card-text beginner" id="option-accessories">Los accesorios de una PC añaden funciones: monitor (pantalla), teclado, ratón, altavoces, y cámara web.</p>
                        </div>
                    </div>

                    <div class="card contenedor_base">
                        <img src="../../public/assets/images/Gigabyte G24F 2.png" class="card-img-top size-img" alt="Accesorios">
                        <div class="card-body">
                            <h5 class="card-title intermediate">Accesorios - Intermediate</h5>
                            <p class="card-text intermediate" id="option-accessories">Invierte en accesorios de buena calidad, como un monitor con alta frecuencia de actualización y un teclado mecánico.</p>
                        </div>
                    </div>

                    <div class="card contenedor_base" id="experto">
                        <img src="../../public/assets/images/Gigabyte G24F 2.png" class="card-img-top size-img" alt="Accesorios">
                        <div class="card-body">
                            <h5 class="card-title expert">Accesorios - Expert</h5>
                            <p class="card-text expert" id="option-accessories">Configura periféricos avanzados, como un monitor dual y sistemas de sonido envolvente para experiencias inmersivas.</p>
                        </div>
                    </div>


                    <!-- Recomendaciones -->
                    <div class="card contenedor_base" id="principiante">
                        <img src="../../public/assets/images/Pc-Recomendadas.webp" class="card-img-top size-img" alt="Recomendaciones">
                        <div class="card-body">
                            <h5 class="card-title beginner">Recomendaciones - Beginner</h5>
                            <p class="card-text beginner" id="option-recommendation">
                                Compra computadoras según lo que necesitas, compara precios y conoce lo básico para saber si es lo que realmente necesitas.
                            </p>
                        </div>
                    </div>

                    <div class="card contenedor_base">
                        <img src="../../public/assets/images/Pc-Recomendadas.webp" class="card-img-top size-img" alt="Recomendaciones">
                        <div class="card-body">
                            <h5 class="card-title intermediate">Recomendaciones - Intermediate</h5>
                            <p class="card-text intermediate" id="option-recommendation">
                                Investiga benchmarks de rendimiento antes de comprar, prioriza componentes según tus necesidades y equilibra el presupuesto entre CPU, GPU y RAM.
                            </p>
                        </div>
                    </div>

                    <div class="card contenedor_base" id="experto">
                        <img src="../../public/assets/images/Pc-Recomendadas.webp" class="card-img-top size-img" alt="Recomendaciones">
                        <div class="card-body">
                            <h5 class="card-title expert">Recomendaciones - Expert</h5>
                            <p class="card-text expert" id="option-recommendation">
                                Considera configuraciones avanzadas como RAID, overclocking y refrigeración líquida para maximizar rendimiento y personalización.
                            </p>
                        </div>
                    </div>


                    <!-- Cuidados -->
                    <div class="card contenedor_base" id="principiante">
                        <img src="../../public/assets/images/Pc-CuidadosPrincipiante.png" class="card-img-top size-img " alt="Cuidados Principiante">
                        <div class="card-body">
                            <h5 class="card-title">Cuidados</h5>
                            <p class="card-text">
                                Son tareas simples como tener tu computadora en un lugar fresco, evitar infectar tu computadora de un virus, apagar correctamente la PC que significa cada cable de tu PC.
                            </p>
                        </div>
                    </div>

                    <div class="card contenedor_base">
                        <img src="../../public/assets/images/Pc-CuidadosPromedio.avif" class="card-img-top size-img " alt="Cuidados Promedio">
                        <div class="card-body">
                            <h5 class="card-title intermediate">Cuidados</h5>
                            <p class="card-text intermediate">
                                Limpieza interna y externa, monitoreo de temperaturas, flujo de aire, actualización de drivers y cambio de pasta térmica.
                            </p>
                        </div>
                    </div>

                    <div class="card contenedor_base" id="experto">
                        <img src="../../public/assets/images/Pc-CuidadosExperto.webp" class="card-img-top size-img" alt="Cuidados Experto" onclick="showCuidadosContainer(this)">
                        <div class="card-body">
                            <h5 class="card-title expert">Cuidados</h5>
                            <p class="card-text expert">
                                Overclock seguro, actualización de BIOS, activación perfil EXPO o XMP, undervolting, posicionamiento correcto de la bomba del radiador y gestión adecuada de cables PCIe con 3 o más conectores (6 u 8 pines).
                            </p>
                        </div>
                    </div>




                </div>
            </div>
        </section>


        <div id="containerCPU" class="containerDinamico" style="display: none;">
            <div class="dynamic-card" onclick="resetCPU()">

                <!-- Cards -->
                <div class="card  contenedor_base" id="principiante">
                    <img src="../../public/assets/images/Rizen 7 5700x.png" onclick="showCPUContainer(this)" class="card-img-top size-img" alt="Procesador">
                    <div class="card-body">
                        <h5 class="card-title beginner">Procesador - Beginner</h5>
                        <p class="card-text beginner" id="option-processor">El procesador es el cerebro de la computadora que hace funcionar la computadora.</p>
                    </div>
                </div>


                <div class="card contenedor_base" id="experto">
                    <img src="../../public/assets/images/Rizen 7 5700x.png" class="card-img-top size-img" alt="Procesador">
                    <div class="card-body">
                        <h5 class="card-title expert">Procesador - Expert</h5>
                        <p class="card-text expert" id="option-processor">Realiza overclocking seguro para maximizar el rendimiento, monitoreando las frecuencias y voltajes.</p>
                    </div>
                </div>



                <div class="content-container">
                    <div class="inner-container">
                        <!-- Contenido específico de CPU -->
                    </div>
                </div>
            </div>



            <div id="containerCuidados" class="containerDinamico" style="display: none;">
                <div class="dynamic-card" onclick="resetCuidados()">
                    <div class="card">
                        <img src="../../public/assets/images/Pc-CuidadosExperto.webp" class="card-img-top size-img" alt="Cuidados Experto">
                        <div class="card-body">
                            <h5 class="card-title expert">Cuidados</h5>
                            <p class="card-text expert">
                                Overclock seguro, actualización de BIOS...
                            </p>
                        </div>
                    </div>
                </div>

                <div class="content-container">
                    <div class="inner-container">

                    </div>

                    <div class="inner-container">
                        <!-- Contenido del segundo container -->
                    </div>
                </div>
            </div>

            <script>
                // Variables para cada componente
                let originalCPUCard;
                let originalRAMCard;
                let originalMotherboardCard;
                // etc...

                // CPU
                function showCPUContainer(triggerElement) {
                    const container = document.getElementById('containerCPU');
                    const card = triggerElement.closest('.card');

                    originalCPUCard = card;
                    card.style.display = 'none';
                    container.style.display = 'block';

                    requestAnimationFrame(() => {
                        container.classList.remove('hiding');
                    });

                    container.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }

                function resetCPU() {
                    const container = document.getElementById('containerCPU');

                    container.classList.add('hiding');

                    setTimeout(() => {
                        if (originalCPUCard) {
                            originalCPUCard.style.display = 'block';
                        }
                        container.style.display = 'none';
                    }, 500);
                }

                // RAM
                function showRAMContainer(triggerElement) {
                    const container = document.getElementById('containerRAM');
                    const card = triggerElement.closest('.card');

                    originalRAMCard = card;
                    card.style.display = 'none';
                    container.style.display = 'block';

                    requestAnimationFrame(() => {
                        container.classList.remove('hiding');
                    });

                    container.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }

                function resetRAM() {
                    const container = document.getElementById('containerRAM');

                    container.classList.add('hiding');

                    setTimeout(() => {
                        if (originalRAMCard) {
                            originalRAMCard.style.display = 'block';
                        }
                        container.style.display = 'none';
                    }, 500);
                }

                // Motherboard
                function showMotherboardContainer(triggerElement) {
                    const container = document.getElementById('containerMotherboard');
                    const card = triggerElement.closest('.card');

                    originalMotherboardCard = card;
                    card.style.display = 'none';
                    container.style.display = 'block';

                    requestAnimationFrame(() => {
                        container.classList.remove('hiding');
                    });

                    container.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }

                function resetMotherboard() {
                    const container = document.getElementById('containerMotherboard');

                    container.classList.add('hiding');

                    setTimeout(() => {
                        if (originalMotherboardCard) {
                            originalMotherboardCard.style.display = 'block';
                        }
                        container.style.display = 'none';
                    }, 500);
                }

                // Y así sucesivamente para cada componente...
            </script>





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
                </div>
                <div class="modal-body d-flex align-items-center">
                    <i class="bi bi-exclamation-triangle warning-icon" style="color:red;"></i>
                    <span id="errorMsg"></span>
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
                <h3 class="footer__title">Secciones</h3>
                <div class="footer__links">
                    <a href="#" class="footer__link"><i class="bi bi-pc-display"></i> PCs-Escritorio </a>
                    <a href="#" class="footer__link"><i class="bi bi-code-square"></i> Software</a>
                    <a href="#" class="footer__link"><i class="bi bi-people"></i> Recomendaciones</a>
                    <a href="#" class="footer__link"><i class="bi bi-tools"></i> Componentes</a>
                    <a href="#" class="footer__link"><i class="bi bi-hdd-network"></i> Hardware</a>

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
                Pérez, Luis Angel Martinez Ponce de Leon, .
            </p>
        </div>
    </footer>


    <script src="../../public/assets/js/animation/pc.js"></script>
    <script src="../../public/assets/js/animation/slider.js"></script>
    <script src="../../public/assets/js/animation/nav.js"></script>
    <script src="../../public/assets/js/logic/getUserLevel.js"></script>
    <script src="../../public/assets/js/logic/logout.js"></script>
    <script src="../../public/assets/js/logic/deleteAccount.js"></script>
    <script src="../../public/assets/js/logic/containerLogic.js"></script>
    <script src="../../public/assets/js/logic/accountInfo.js"></script>
    <script src="../../public/assets/js/logic/userLevelChange.js"></script>
    <script src="../../public/assets/js/bootstrap/bootstrap.bundle.min.js"></script>



</body>

</html>