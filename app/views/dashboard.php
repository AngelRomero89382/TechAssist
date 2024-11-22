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

                    <div class="card contenedor_base" id="promedio">
                        <img src="../../public/assets/images/Rizen 7 5700x.png" onclick="showCPUContainer(this)" class="card-img-top size-img" alt="Procesador">
                        <div class="card-body">
                            <h5 class="card-title intermediate">Procesador - Intermediate</h5>
                            <p class="card-text intermediate" id="option-processor">Es un componente clave que ejecuta instrucciones, asegúrate de monitorear su temperatura para evitar sobrecalentamientos.</p>
                        </div>
                    </div>

                    <div class="card contenedor_base" id="experto">
                        <img src="../../public/assets/images/Rizen 7 5700x.png" onclick="showCPUContainer(this)" class="card-img-top size-img" alt="Procesador">
                        <div class="card-body">
                            <h5 class="card-title expert">Procesador - Expert</h5>
                            <p class="card-text expert" id="option-processor">Realiza overclocking seguro para maximizar el rendimiento, monitoreando las frecuencias y voltajes.</p>
                        </div>
                    </div>


                    <!-- RAM -->
                    <!-- Principiante -->
                    <div class="card contenedor_base" id="principiante">
                        <img src="../../public/assets/images/Corsair Dominator Platinum.webp" onclick="showRAMContainer(this)" class="card-img-top size-img" alt="Memoria RAM">
                        <div class="card-body">
                            <h5 class="card-title beginner">Memoria RAM - Beginner</h5>
                            <p class="card-text beginner" id="option-RAM">
                                La memoria RAM es la memoria que la computadora usa para trabajar más rápido.
                            </p>
                        </div>
                    </div>

                    <!-- Promedio -->
                    <div class="card contenedor_base" id="promedio">
                        <img src="../../public/assets/images/Corsair Dominator Platinum.webp" onclick="showRAMContainer(this)" class="card-img-top size-img" alt="Memoria RAM">
                        <div class="card-body">
                            <h5 class="card-title intermediate">Memoria RAM - Intermediate</h5>
                            <p class="card-text intermediate" id="option-RAM">
                                Monitorea el uso de memoria para asegurarte de que tu sistema tiene suficiente capacidad disponible.
                            </p>
                        </div>
                    </div>

                    <!-- Experto -->
                    <div class="card contenedor_base" id="experto">
                        <img src="../../public/assets/images/Corsair Dominator Platinum.webp" onclick="showRAMContainer(this)" class="card-img-top size-img" alt="Memoria RAM">
                        <div class="card-body">
                            <h5 class="card-title expert">Memoria RAM - Expert</h5>
                            <p class="card-text expert" id="option-RAM">
                                Configura perfiles avanzados como XMP/EXPO para optimizar su rendimiento.
                            </p>
                        </div>
                    </div>


                    <!-- Motherboard -->
                    <!-- Principiante -->
                    <div class="card contenedor_base" id="principiante">
                        <img src="../../public/assets/images/Rog Strix B550-f Wifi 2.jpg" onclick="showMotherboardContainer(this)" class="card-img-top size-img" alt="Tarjeta Madre">
                        <div class="card-body">
                            <h5 class="card-title beginner">Tarjeta Madre - Beginner</h5>
                            <p class="card-text beginner" id="option-motherboard">
                                La tarjeta madre es donde se conectan todos los componentes para que funcionen.
                            </p>
                        </div>
                    </div>

                    <!-- Promedio -->
                    <div class="card contenedor_base" id="promedio">
                        <img src="../../public/assets/images/Rog Strix B550-f Wifi 2.jpg" onclick="showMotherboardContainer(this)" class="card-img-top size-img" alt="Tarjeta Madre">
                        <div class="card-body">
                            <h5 class="card-title intermediate">Tarjeta Madre - Intermediate</h5>
                            <p class="card-text intermediate" id="option-motherboard">
                                Asegúrate de actualizar el BIOS regularmente para mantener la compatibilidad con componentes nuevos.
                            </p>
                        </div>
                    </div>

                    <!-- Experto -->
                    <div class="card contenedor_base" id="experto">
                        <img src="../../public/assets/images/Rog Strix B550-f Wifi 2.jpg" onclick="showMotherboardContainer(this)" class="card-img-top size-img" alt="Tarjeta Madre">
                        <div class="card-body">
                            <h5 class="card-title expert">Tarjeta Madre - Expert</h5>
                            <p class="card-text expert" id="option-motherboard">
                                Optimiza la configuración del BIOS para un rendimiento máximo en sistemas avanzados.
                            </p>
                        </div>
                    </div>


                    <!-- Case -->
                    <!-- Principiante -->
                    <div class="card contenedor_base" id="principiante">
                        <img src="../../public/assets/images/H9 Elite NZXT.png" onclick="showCaseContainer(this)" class="card-img-top size-img" alt="Gabinete">
                        <div class="card-body">
                            <h5 class="card-title beginner">Gabinete - Beginner</h5>
                            <p class="card-text beginner" id="option-case">
                                El gabinete es la caja que protege las partes de la computadora.
                            </p>
                        </div>
                    </div>

                    <!-- Promedio -->
                    <div class="card contenedor_base" id="promedio">
                        <img src="../../public/assets/images/H9 Elite NZXT.png" onclick="showCaseContainer(this)" class="card-img-top size-img" alt="Gabinete">
                        <div class="card-body">
                            <h5 class="card-title intermediate">Gabinete - Intermediate</h5>
                            <p class="card-text intermediate" id="option-case">
                                Mantén una gestión de cables ordenada para mejorar el flujo de aire interno.
                            </p>
                        </div>
                    </div>

                    <!-- Experto -->
                    <div class="card contenedor_base" id="experto">
                        <img src="../../public/assets/images/H9 Elite NZXT.png" onclick="showCaseContainer(this)" class="card-img-top size-img" alt="Gabinete">
                        <div class="card-body">
                            <h5 class="card-title expert">Gabinete - Expert</h5>
                            <p class="card-text expert" id="option-case">
                                Optimiza el flujo de aire con configuraciones avanzadas de ventiladores y sistemas de refrigeración líquida.
                            </p>
                        </div>
                    </div>


                    <!-- PSU -->
                    <!-- Principiante -->
                    <div class="card contenedor_base" id="principiante">
                        <img src="../../public/assets/images/Corsair RM750e.avif" onclick="showPSUContainer(this)" class="card-img-top size-img" alt="Fuente De Poder">
                        <div class="card-body">
                            <h5 class="card-title beginner">Fuente De Poder - Beginner</h5>
                            <p class="card-text beginner" id="option-powerSource">
                                La fuente de poder da energía a todas las partes de la computadora.
                            </p>
                        </div>
                    </div>

                    <!-- Promedio -->
                    <div class="card contenedor_base" id="promedio">
                        <img src="../../public/assets/images/Corsair RM750e.avif" onclick="showPSUContainer(this)" class="card-img-top size-img" alt="Fuente De Poder">
                        <div class="card-body">
                            <h5 class="card-title intermediate">Fuente De Poder - Intermediate</h5>
                            <p class="card-text intermediate" id="option-powerSource">
                                Asegúrate de que la fuente de poder tenga suficiente capacidad para todos tus componentes y mantén sus cables organizados.
                            </p>
                        </div>
                    </div>

                    <!-- Experto -->
                    <div class="card contenedor_base" id="experto">
                        <img src="../../public/assets/images/Corsair RM750e.avif" onclick="showPSUContainer(this)" class="card-img-top size-img" alt="Fuente De Poder">
                        <div class="card-body">
                            <h5 class="card-title expert">Fuente De Poder - Expert</h5>
                            <p class="card-text expert" id="option-powerSource">
                                Selecciona una fuente modular de alta eficiencia (80 Plus Gold o superior) y verifica la calidad de sus conectores PCIe.
                            </p>
                        </div>
                    </div>


                    <!-- Cooler -->
                    <!-- Principiante -->
                    <div class="card contenedor_base" id="principiante">
                        <img src="../../public/assets/images/kraken 240mm z53.webp" onclick="showCoolerContainer(this)" class="card-img-top size-img" alt="Enfriamiento De La CPU">
                        <div class="card-body">
                            <h5 class="card-title beginner">Enfriamiento De La CPU - Beginner</h5>
                            <p class="card-text beginner" id="option-cooler">
                                Mantiene el procesador a una temperatura adecuada.
                            </p>
                        </div>
                    </div>

                    <!-- Promedio -->
                    <div class="card contenedor_base" id="promedio">
                        <img src="../../public/assets/images/kraken 240mm z53.webp" onclick="showCoolerContainer(this)" class="card-img-top size-img" alt="Enfriamiento De La CPU">
                        <div class="card-body">
                            <h5 class="card-title intermediate">Enfriamiento De La CPU - Intermediate</h5>
                            <p class="card-text intermediate" id="option-cooler">
                                Revisa la limpieza de los ventiladores y el radiador regularmente para evitar obstrucciones.
                            </p>
                        </div>
                    </div>

                    <!-- Experto -->
                    <div class="card contenedor_base" id="experto">
                        <img src="../../public/assets/images/kraken 240mm z53.webp" onclick="showCoolerContainer(this)" class="card-img-top size-img" alt="Enfriamiento De La CPU">
                        <div class="card-body">
                            <h5 class="card-title expert">Enfriamiento De La CPU - Expert</h5>
                            <p class="card-text expert" id="option-cooler">
                                Configura perfiles de velocidad en el software del cooler y verifica la posición correcta de la bomba para sistemas de refrigeración líquida.
                            </p>
                        </div>
                    </div>

                    <!-- GPU -->
                    <!-- Principiante -->
                    <div class="card contenedor_base" id="principiante">
                        <img src="../../public/assets/images/rx 6750xt.jfif" onclick="showGPUContainer(this)" class="card-img-top size-img" alt="Tarjeta Gráfica">
                        <div class="card-body">
                            <h5 class="card-title beginner">Tarjeta Gráfica - Beginner</h5>
                            <p class="card-text beginner" id="option-graphicCard">
                                Se encarga de mostrar imágenes detalladas en la pantalla.
                            </p>
                        </div>
                    </div>

                    <!-- Promedio -->
                    <div class="card contenedor_base" id="promedio">
                        <img src="../../public/assets/images/rx 6750xt.jfif" onclick="showGPUContainer(this)" class="card-img-top size-img" alt="Tarjeta Gráfica">
                        <div class="card-body">
                            <h5 class="card-title intermediate">Tarjeta Gráfica - Intermediate</h5>
                            <p class="card-text intermediate" id="option-graphicCard">
                                Mantén los drivers actualizados para garantizar el mejor rendimiento en los juegos y aplicaciones.
                            </p>
                        </div>
                    </div>

                    <!-- Experto -->
                    <div class="card contenedor_base" id="experto">
                        <img src="../../public/assets/images/rx 6750xt.jfif" onclick="showGPUContainer(this)" class="card-img-top size-img" alt="Tarjeta Gráfica">
                        <div class="card-body">
                            <h5 class="card-title expert">Tarjeta Gráfica - Expert</h5>
                            <p class="card-text expert" id="option-graphicCard">
                                Realiza ajustes en las configuraciones de overclock y control térmico para maximizar el rendimiento.
                            </p>
                        </div>
                    </div>


                    <!-- SSD -->
                    <!-- Principiante -->
                    <div class="card contenedor_base" id="principiante">
                        <img src="../../public/assets/images/SSD-Crucial-T500-NVMe-2TB.webp" onclick="showStorageContainer(this)" class="card-img-top size-img" alt="Disco Duro">
                        <div class="card-body">
                            <h5 class="card-title beginner">Disco Duro - Beginner</h5>
                            <p class="card-text beginner" id="option-drive">
                                Es donde se guarda todo, los archivos y programas de forma permanente.
                            </p>
                        </div>
                    </div>

                    <!-- Promedio -->
                    <div class="card contenedor_base" id="promedio">
                        <img src="../../public/assets/images/SSD-Crucial-T500-NVMe-2TB.webp" onclick="showStorageContainer(this)" class="card-img-top size-img" alt="Disco Duro">
                        <div class="card-body">
                            <h5 class="card-title intermediate">Disco Duro - Intermediate</h5>
                            <p class="card-text intermediate" id="option-drive">
                                Verifica regularmente el estado de salud del disco utilizando software especializado.
                            </p>
                        </div>
                    </div>

                    <!-- Experto -->
                    <div class="card contenedor_base" id="experto">
                        <img src="../../public/assets/images/SSD-Crucial-T500-NVMe-2TB.webp" onclick="showStorageContainer(this)" class="card-img-top size-img" alt="Disco Duro">
                        <div class="card-body">
                            <h5 class="card-title expert">Disco Duro - Expert</h5>
                            <p class="card-text expert" id="option-drive">
                                Configura discos en RAID para mejorar velocidad o redundancia, y optimiza el sistema de archivos.
                            </p>
                        </div>
                    </div>


                    <!-- Pasta Térmica -->
                    <!-- Principiante -->
                    <div class="card contenedor_base" id="principiante">
                        <img src="../../public/assets/images/Artic MX-4.png" onclick="showThermalPasteContainer(this)" class="card-img-top size-img" alt="Pasta Térmica">
                        <div class="card-body">
                            <h5 class="card-title beginner">Pasta Térmica - Beginner</h5>
                            <p class="card-text beginner" id="option-thermalPaste">
                                Es una sustancia que se coloca entre el procesador y el enfriamiento para evitar que se caliente demasiado.
                            </p>
                        </div>
                    </div>

                    <!-- Promedio -->
                    <div class="card contenedor_base" id="promedio">
                        <img src="../../public/assets/images/Artic MX-4.png" onclick="showThermalPasteContainer(this)" class="card-img-top size-img" alt="Pasta Térmica">
                        <div class="card-body">
                            <h5 class="card-title intermediate">Pasta Térmica - Intermediate</h5>
                            <p class="card-text intermediate" id="option-thermalPaste">
                                Asegúrate de cambiar la pasta térmica cada 1-2 años para mantener un buen rendimiento térmico.
                            </p>
                        </div>
                    </div>

                    <!-- Experto -->
                    <div class="card contenedor_base" id="experto">
                        <img src="../../public/assets/images/Artic MX-4.png" onclick="showThermalPasteContainer(this)" class="card-img-top size-img" alt="Pasta Térmica">
                        <div class="card-body">
                            <h5 class="card-title expert">Pasta Térmica - Expert</h5>
                            <p class="card-text expert" id="option-thermalPaste">
                                Utiliza pastas térmicas de alto rendimiento y aplica de manera uniforme para maximizar la disipación de calor.
                            </p>
                        </div>
                    </div>


                    <!-- Accesorios -->
                    <!-- Principiante -->
                    <div class="card contenedor_base" id="principiante">
                        <img src="../../public/assets/images/Gigabyte G24F 2.png" onclick="showAccessoriesContainer(this)" class="card-img-top size-img" alt="Accesorios">
                        <div class="card-body">
                            <h5 class="card-title beginner">Accesorios - Beginner</h5>
                            <p class="card-text beginner" id="option-accessories">
                                Los accesorios de una PC añaden funciones: monitor (pantalla), teclado, ratón, altavoces, y cámara web.
                            </p>
                        </div>
                    </div>

                    <!-- Promedio -->
                    <div class="card contenedor_base" id="promedio">
                        <img src="../../public/assets/images/Gigabyte G24F 2.png" onclick="showAccessoriesContainer(this)" class="card-img-top size-img" alt="Accesorios">
                        <div class="card-body">
                            <h5 class="card-title intermediate">Accesorios - Intermediate</h5>
                            <p class="card-text intermediate" id="option-accessories">
                                Invierte en accesorios de buena calidad, como un monitor con alta frecuencia de actualización y un teclado mecánico.
                            </p>
                        </div>
                    </div>

                    <!-- Experto -->
                    <div class="card contenedor_base" id="experto">
                        <img src="../../public/assets/images/Gigabyte G24F 2.png" onclick="showAccessoriesContainer(this)" class="card-img-top size-img" alt="Accesorios">
                        <div class="card-body">
                            <h5 class="card-title expert">Accesorios - Expert</h5>
                            <p class="card-text expert" id="option-accessories">
                                Configura periféricos avanzados, como un monitor dual y sistemas de sonido envolvente para experiencias inmersivas.
                            </p>
                        </div>
                    </div>


                    <!-- Recomendaciones -->
                    <!-- Principiante -->
                    <div class="card contenedor_base" id="principiante">
                        <img src="../../public/assets/images/Pc-Recomendadas.webp" onclick="showRecommendationsContainer(this)" class="card-img-top size-img" alt="Recomendaciones">
                        <div class="card-body">
                            <h5 class="card-title beginner">Recomendaciones - Beginner</h5>
                            <p class="card-text beginner" id="option-recommendation">
                                Compra computadoras según lo que necesitas, compara precios y conoce lo básico para saber si es lo que realmente necesitas.
                            </p>
                        </div>
                    </div>

                    <!-- Promedio -->
                    <div class="card contenedor_base" id="promedio">
                        <img src="../../public/assets/images/Pc-Recomendadas.webp" onclick="showRecommendationsContainer(this)" class="card-img-top size-img" alt="Recomendaciones">
                        <div class="card-body">
                            <h5 class="card-title intermediate">Recomendaciones - Intermediate</h5>
                            <p class="card-text intermediate" id="option-recommendation">
                                Investiga benchmarks de rendimiento antes de comprar, prioriza componentes según tus necesidades y equilibra el presupuesto entre CPU, GPU y RAM.
                            </p>
                        </div>
                    </div>

                    <!-- Experto -->
                    <div class="card contenedor_base" id="experto">
                        <img src="../../public/assets/images/Pc-Recomendadas.webp" onclick="showRecommendationsContainer(this)" class="card-img-top size-img" alt="Recomendaciones">
                        <div class="card-body">
                            <h5 class="card-title expert">Recomendaciones - Expert</h5>
                            <p class="card-text expert" id="option-recommendation">
                                Considera configuraciones avanzadas como RAID, overclocking y refrigeración líquida para maximizar rendimiento y personalización.
                            </p>
                        </div>
                    </div>


                    <!-- Cuidados -->

                    <!-- Principiante -->
                    <div class="card contenedor_base" id="principiante">
                        <img src="../../public/assets/images/Pc-CuidadosPrincipiante.png" onclick="showCuidadosContainer(this)" class="card-img-top size-img" alt="Cuidados Principiante">
                        <div class="card-body">
                            <h5 class="card-title beginner">Cuidados - Beginner</h5>
                            <p class="card-text beginner">
                                Son tareas simples como tener tu computadora en un lugar fresco, evitar infectar tu computadora de un virus, apagar correctamente la PC que significa cada cable de tu PC.
                            </p>
                        </div>
                    </div>

                    <!-- Promedio -->
                    <div class="card contenedor_base" id="promedio">
                        <img src="../../public/assets/images/Pc-CuidadosPromedio.avif" onclick="showCuidadosContainer(this)" class="card-img-top size-img" alt="Cuidados Promedio">
                        <div class="card-body">
                            <h5 class="card-title intermediate">Cuidados - Intermediate</h5>
                            <p class="card-text intermediate">
                                Limpieza interna y externa, monitoreo de temperaturas, flujo de aire, actualización de drivers y cambio de pasta térmica.
                            </p>
                        </div>
                    </div>

                    <!-- Experto -->
                    <div class="card contenedor_base" id="experto">
                        <img src="../../public/assets/images/Pc-CuidadosExperto.webp" onclick="showCuidadosContainer(this)" class="card-img-top size-img" alt="Cuidados Experto">
                        <div class="card-body">
                            <h5 class="card-title expert">Cuidados - Expert</h5>
                            <p class="card-text expert">
                                Overclock seguro, actualización de BIOS, activación perfil EXPO o XMP, undervolting, posicionamiento correcto de la bomba del radiador y gestión adecuada de cables PCIe con 3 o más conectores (6 u 8 pines).
                            </p>
                        </div>
                    </div>


                </div>
            </div>
        </section>






        <!-- Dynamic Containers -->


        <!-- CPU -->
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


                <div class="card contenedor_base" id="promedio">
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



                <div class="content-container">
                    <div class="inner-container">
                        <!-- Contenido específico de CPU -->
                    </div>
                </div>
            </div>

        </div>

        <div id="containerRAM" class="containerDinamico" style="display: none;">
            <div class="dynamic-card" onclick="resetRAM()">
                <div class="card contenedor_base" id="principiante">
                    <img src="../../public/assets/images/Corsair Dominator Platinum.webp" class="card-img-top size-img" alt="Memoria RAM">
                    <div class="card-body">
                        <h5 class="card-title beginner">Memoria RAM - Beginner</h5>
                        <p class="card-text beginner" id="option-RAM">La memoria RAM es la memoria que la computadora usa para trabajar más rápido.</p>
                    </div>
                </div>

                <div class="card contenedor_base" id="promedio">
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

                <div class="content-container">
                    <div class="inner-container">
                        <!-- Contenido específico de CPU -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Motherboard -->
        <div id="containerMotherboard" class="containerDinamico" style="display: none;">
            <div class="dynamic-card" onclick="resetMotherboard()">
                <div class="card contenedor_base" id="principiante">
                    <img src="../../public/assets/images/Rog Strix B550-f Wifi 2.jpg" class="card-img-top size-img" alt="Tarjeta Madre">
                    <div class="card-body">
                        <h5 class="card-title beginner">Tarjeta Madre - Beginner</h5>
                        <p class="card-text beginner" id="option-motherboard">La tarjeta madre es donde se conectan todos los componentes para que funcionen.</p>
                    </div>
                </div>

                <div class="card contenedor_base" id="promedio">
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

                <div class="content-container">
                    <div class="inner-container">
                        <!-- Contenido específico de CPU -->
                    </div>
                </div>
            </div>
        </div>


        <!-- Case -->
        <div id="containerCase" class="containerDinamico" style="display: none;">
            <div class="dynamic-card" onclick="resetCase()">
                <div class="card contenedor_base" id="principiante">
                    <img src="../../public/assets/images/H9 Elite NZXT.png" class="card-img-top size-img" alt="Gabinete">
                    <div class="card-body">
                        <h5 class="card-title beginner">Gabinete - Beginner</h5>
                        <p class="card-text beginner" id="option-case">El gabinete es la caja que protege las partes de la computadora.</p>
                    </div>
                </div>

                <div class="card contenedor_base" id="promedio">
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
                <div class="content-container">
                    <div class="inner-container">
                        <!-- Contenido específico de CPU -->
                    </div>
                </div>
            </div>
        </div>


        <!-- PSU -->
        <div id="containerPSU" class="containerDinamico" style="display: none;">
            <div class="dynamic-card" onclick="resetPSU()">
                <div class="card contenedor_base" id="principiante">
                    <img src="../../public/assets/images/Corsair RM750e.avif" class="card-img-top size-img" alt="Fuente De Poder">
                    <div class="card-body">
                        <h5 class="card-title beginner">Fuente De Poder - Beginner</h5>
                        <p class="card-text beginner" id="option-powerSource">La fuente de poder da energía a todas las partes de la computadora.</p>
                    </div>
                </div>

                <div class="card contenedor_base" id="promedio">
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
                <div class="content-container">
                    <div class="inner-container">
                        <!-- Contenido específico de CPU -->
                    </div>
                </div>
            </div>
        </div>


        <!-- Cooler -->
        <div id="containerCooler" class="containerDinamico" style="display: none;">
            <div class="dynamic-card" onclick="resetCooler()">
                <div class="card contenedor_base" id="principiante">
                    <img src="../../public/assets/images/kraken 240mm z53.webp" class="card-img-top size-img" alt="Enfriamiento De La CPU">
                    <div class="card-body">
                        <h5 class="card-title beginner">Enfriamiento De La CPU - Beginner</h5>
                        <p class="card-text beginner" id="option-cooler">Mantiene el procesador a una temperatura adecuada.</p>
                    </div>
                </div>

                <div class="card contenedor_base" id="promedio">
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
                <div class="content-container">
                    <div class="inner-container">
                        <!-- Contenido específico de CPU -->
                    </div>
                </div>
            </div>
        </div>


        <!-- GPU -->
        <div id="containerGPU" class="containerDinamico" style="display: none;">
            <div class="dynamic-card" onclick="resetGPU()">
                <div class="card contenedor_base" id="principiante">
                    <img src="../../public/assets/images/rx 6750xt.jfif" class="card-img-top size-img" alt="Tarjeta Gráfica">
                    <div class="card-body">
                        <h5 class="card-title beginner">Tarjeta Gráfica - Beginner</h5>
                        <p class="card-text beginner" id="option-graphicCard">Se encarga de mostrar imágenes detalladas en la pantalla.</p>
                    </div>
                </div>

                <div class="card contenedor_base" id="promedio">
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
                <div class="content-container">
                    <div class="inner-container">
                        <!-- Contenido específico de CPU -->
                    </div>
                </div>
            </div>
        </div>


        <!-- Storage -->
        <div id="containerStorage" class="containerDinamico" style="display: none;">
            <div class="dynamic-card" onclick="resetStorage()">

                <!-- Principiante -->
                <div class="card contenedor_base" id="principiante">
                    <img src="../../public/assets/images/SSD-Crucial-T500-NVMe-2TB.webp" class="card-img-top size-img" alt="Disco Duro">
                    <div class="card-body">
                        <h5 class="card-title beginner">Disco Duro - Beginner</h5>
                        <p class="card-text beginner" id="option-drive">
                            Es donde se guarda todo, los archivos y programas de forma permanente.
                        </p>
                    </div>
                </div>

                <!-- Promedio -->
                <div class="card contenedor_base" id="promedio">
                    <img src="../../public/assets/images/SSD-Crucial-T500-NVMe-2TB.webp" class="card-img-top size-img" alt="Disco Duro">
                    <div class="card-body">
                        <h5 class="card-title intermediate">Disco Duro - Intermediate</h5>
                        <p class="card-text intermediate" id="option-drive">
                            Verifica regularmente el estado de salud del disco utilizando software especializado.
                        </p>
                    </div>
                </div>

                <!-- Experto -->
                <div class="card contenedor_base" id="experto">
                    <img src="../../public/assets/images/SSD-Crucial-T500-NVMe-2TB.webp" class="card-img-top size-img" alt="Disco Duro">
                    <div class="card-body">
                        <h5 class="card-title expert">Disco Duro - Expert</h5>
                        <p class="card-text expert" id="option-drive">
                            Configura discos en RAID para mejorar velocidad o redundancia, y optimiza el sistema de archivos.
                        </p>
                    </div>
                </div>
                <div class="content-container">
                    <div class="inner-container">
                        <!-- Contenido específico de CPU -->
                    </div>
                </div>
            </div>
        </div>



        <!-- Pasta Térmica -->
        <div id="containerThermalPaste" class="containerDinamico" style="display: none;">
            <div class="dynamic-card" onclick="resetThermalPaste()">
                <!-- Principiante -->
                <div class="card contenedor_base" id="principiante">
                    <img src="../../public/assets/images/Artic MX-4.png" class="card-img-top size-img" alt="Pasta Térmica">
                    <div class="card-body">
                        <h5 class="card-title beginner">Pasta Térmica - Beginner</h5>
                        <p class="card-text beginner" id="option-thermalPaste">
                            Es una sustancia que se coloca entre el procesador y el enfriamiento para evitar que se caliente demasiado.
                        </p>
                    </div>
                </div>

                <!-- Promedio -->
                <div class="card contenedor_base" id="promedio">
                    <img src="../../public/assets/images/Artic MX-4.png" class="card-img-top size-img" alt="Pasta Térmica">
                    <div class="card-body">
                        <h5 class="card-title intermediate">Pasta Térmica - Intermediate</h5>
                        <p class="card-text intermediate" id="option-thermalPaste">
                            Asegúrate de cambiar la pasta térmica cada 1-2 años para mantener un buen rendimiento térmico.
                        </p>
                    </div>
                </div>

                <!-- Experto -->
                <div class="card contenedor_base" id="experto">
                    <img src="../../public/assets/images/Artic MX-4.png" class="card-img-top size-img" alt="Pasta Térmica">
                    <div class="card-body">
                        <h5 class="card-title expert">Pasta Térmica - Expert</h5>
                        <p class="card-text expert" id="option-thermalPaste">
                            Utiliza pastas térmicas de alto rendimiento y aplica de manera uniforme para maximizar la disipación de calor.
                        </p>
                    </div>
                </div>
                <div class="content-container">
                    <div class="inner-container">
                        <!-- Contenido específico de CPU -->
                    </div>
                </div>
            </div>
        </div>


        <!-- Accesorios -->
        <div id="containerAccessories" class="containerDinamico" style="display: none;">
            <div class="dynamic-card" onclick="resetAccessories()">
                <div class="card contenedor_base" id="principiante">
                    <img src="../../public/assets/images/Gigabyte G24F 2.png" class="card-img-top size-img" alt="Accesorios">
                    <div class="card-body">
                        <h5 class="card-title beginner">Accesorios - Beginner</h5>
                        <p class="card-text beginner" id="option-accessories">
                            Los accesorios de una PC añaden funciones: monitor (pantalla), teclado, ratón, altavoces, y cámara web.
                        </p>
                    </div>
                </div>

                <!-- Promedio -->
                <div class="card contenedor_base" id="promedio">
                    <img src="../../public/assets/images/Gigabyte G24F 2.png" class="card-img-top size-img" alt="Accesorios">
                    <div class="card-body">
                        <h5 class="card-title intermediate">Accesorios - Intermediate</h5>
                        <p class="card-text intermediate" id="option-accessories">
                            Invierte en accesorios de buena calidad, como un monitor con alta frecuencia de actualización y un teclado mecánico.
                        </p>
                    </div>
                </div>

                <!-- Experto -->
                <div class="card contenedor_base" id="experto">
                    <img src="../../public/assets/images/Gigabyte G24F 2.png" class="card-img-top size-img" alt="Accesorios">
                    <div class="card-body">
                        <h5 class="card-title expert">Accesorios - Expert</h5>
                        <p class="card-text expert" id="option-accessories">
                            Configura periféricos avanzados, como un monitor dual y sistemas de sonido envolvente para experiencias inmersivas.
                        </p>
                    </div>
                </div>
                <div class="content-container">
                    <div class="inner-container">
                        <!-- Contenido específico de CPU -->
                    </div>
                </div>
            </div>
        </div>


        <!-- Recommendations -->
        <div id="containerRecommendations" class="containerDinamico" style="display: none;">
            <div class="dynamic-card" onclick="resetRecommendations()">

                <!-- Cards -->
                <div class="card contenedor_base" id="principiante">
                    <img src="../../public/assets/images/Pc-Recomendadas.webp" class="card-img-top size-img" alt="Recomendaciones">
                    <div class="card-body">
                        <h5 class="card-title beginner">Recomendaciones - Beginner</h5>
                        <p class="card-text beginner" id="option-recommendation">
                            Compra computadoras según lo que necesitas, compara precios y conoce lo básico para saber si es lo que realmente necesitas.
                        </p>
                    </div>
                </div>

                <div class="card contenedor_base" id="promedio">
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
                <div class="content-container">
                    <div class="inner-container">
                        <!-- Contenido específico de CPU -->
                    </div>
                </div>
            </div>
        </div>


        <!-- Cuidados -->
        <div id="containerCuidados" class="containerDinamico" style="display: none;">
            <div class="dynamic-card" onclick="resetCuidados()">

                <!-- Cards -->
                <div class="card contenedor_base" id="principiante">
                    <img src="../../public/assets/images/Pc-CuidadosPrincipiante.png" class="card-img-top size-img" alt="Cuidados Principiante">
                    <div class="card-body">
                        <h5 class="card-title beginner">Cuidados - Beginner</h5>
                        <p class="card-text beginner">
                            Son tareas simples como tener tu computadora en un lugar fresco, evitar infectar tu computadora de un virus, apagar correctamente la PC que significa cada cable de tu PC.
                        </p>
                    </div>
                </div>

                <div class="card contenedor_base" id="promedio">
                    <img src="../../public/assets/images/Pc-CuidadosPromedio.avif" class="card-img-top size-img" alt="Cuidados Promedio">
                    <div class="card-body">
                        <h5 class="card-title intermediate">Cuidados - Intermediate</h5>
                        <p class="card-text intermediate">
                            Limpieza interna y externa, monitoreo de temperaturas, flujo de aire, actualización de drivers y cambio de pasta térmica.
                        </p>
                    </div>
                </div>

                <div class="card contenedor_base" id="experto">
                    <img src="../../public/assets/images/Pc-CuidadosExperto.webp" class="card-img-top size-img" alt="Cuidados Experto" onclick="showCuidadosContainer(this)">
                    <div class="card-body">
                        <h5 class="card-title expert">Cuidados - Expert</h5>
                        <p class="card-text expert">
                            Overclock seguro, actualización de BIOS, activación perfil EXPO o XMP, undervolting, posicionamiento correcto de la bomba del radiador y gestión adecuada de cables PCIe con 3 o más conectores (6 u 8 pines).
                        </p>
                    </div>
                </div>

                <div class="content-container">
                    <div class="inner-container">
                        <!-- Contenido específico de Cuidados -->
                    </div>
                </div>

            </div>
        </div>

        <!-- Slider -->
        <section class="object">
            <div class="object__container">
                <img src="../../public/assets/icons/leftarrow.svg" class="object__arrow" id="before">

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
                        <img src="../../public/assets/images/PocoX5.png" class="object__img">
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
                        <img src="../../public/assets/images/msi GF63.png" class="object__img">
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
                        <img src="../../public/assets/images/Rx 7800xt spectral.webp" class="object__img">
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
                        <img src="../../public/assets/images/Xiaomi 11T Pro.jpg" class="object__img">
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
                        <img src="../../public/assets/images/Rizen 5 5600G.png" class="object__img">
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
                        <img src="../../public/assets/images/MackBook Air 8gb.webp" class="object__img">
                    </figure>
                </section>

                <img src="../../public/assets/icons/rightarrow.svg" class="object__arrow" id="next">
            </div>
        </section>



        <!-- Questions Section -->
        <section id="faq" class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Preguntas Frecuentes</h2>

                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1"
                                aria-expanded="true" aria-controls="collapse1">
                                ¿Cuánta potencia necesito?
                            </button>
                        </h3>
                        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Depende de los componentes de tu sistema. Las tarjetas gráficas y CPUs de alta gama requieren más energía.
                                Usa una calculadora de potencia para obtener una estimación.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                ¿Qué son los rieles de 12V?
                            </button>
                        </h3>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Los rieles de 12V suministran energía a tus componentes más importantes, como la CPU y la GPU. Las PSU de
                                mejor calidad tienen rieles de 12V separados para una entrega de energía más estable.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                ¿Qué es la modulación?
                            </button>
                        </h3>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Las PSUs modulares permiten desconectar los cables que no necesitas, mejorando la gestión de cables y el
                                flujo de aire en tu caso. Las PSUs semi-modulares tienen algunos cables fijos y algunos desmontables.
                            </div>
                        </div>
                    </div>
                </div>
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
                    <img src="../../public/assets/images/Pc Inside.png" class="knowledge__img">
                </figure>
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