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
            </div>
            <div class="content-container">
                <div class="inner-container">
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
                </div>
   


                <div class="content-container contenedor_base" id="experto">
    <div class="inner-container">
        <!-- Contenido específico de Enfriamiento de la CPU para Nivel Experto -->
        <h2 class="subtitle">Optimización del Enfriamiento de la CPU</h2>
        <p>
            Asegurar una refrigeración adecuada en sistemas avanzados es fundamental para mantener un alto rendimiento y prolongar la vida útil de los componentes. Aquí se abordan configuraciones avanzadas y técnicas de mantenimiento para sistemas de refrigeración líquida.
        </p>

        <h3 class="section-title">Configuración del Software</h3>
        <p>
            - Usa software dedicado como **NZXT CAM**, **Corsair iCUE**, o el propio BIOS para ajustar perfiles de velocidad.<br>
            - Configura curvas personalizadas de ventiladores para optimizar el rendimiento en cargas altas y minimizar el ruido en reposo.<br>
            - Monitorea las temperaturas de la CPU y los líquidos del sistema en tiempo real para evitar sobrecalentamientos.
        </p>

        <h3 class="section-title">Mantenimiento de Sistemas de Refrigeración Líquida</h3>
        <p>
            - Asegúrate de que la bomba esté instalada correctamente, generalmente con el logotipo orientado hacia arriba para evitar burbujas de aire.<br>
            - Cambia el líquido de enfriamiento según las especificaciones del fabricante (si es un sistema custom loop).<br>
            - Inspecciona las conexiones y los tubos regularmente para detectar posibles fugas.
        </p>

        <h3 class="section-title">Técnicas Avanzadas</h3>
        <p>
            - Aplica pasta térmica de alta calidad (como **Thermal Grizzly Kryonaut**) y distribúyela uniformemente en la CPU.<br>
            - Utiliza ventiladores de alta presión estática para radiadores más gruesos y sistemas push-pull para mejorar la disipación de calor.<br>
            - Evalúa los flujos de aire en tu gabinete y asegúrate de que haya un equilibrio entre entradas y salidas de aire.
        </p>

        <h3 class="section-title">Preguntas Frecuentes</h3>
        <p>
            <strong>¿Cómo ajusto el rendimiento del cooler desde el software?</strong> Cada fabricante ofrece su propia solución: NZXT CAM, iCUE, etc. Consulta el manual de tu sistema.<br>
            <strong>¿Cuándo debo reemplazar mi sistema AIO?</strong> Los sistemas AIO suelen durar de 5 a 7 años, dependiendo de la calidad de la bomba y los líquidos.
        </p>
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
                </div>


                <div class="content-container contenedor_base" id="principiante">
    <div class="inner-container">
        <!-- Contenido específico de Tarjeta Gráfica para Nivel Principiante -->
        <h2 class="subtitle">Introducción a las Tarjetas Gráficas</h2>
        <p>
            La tarjeta gráfica es un componente esencial que se encarga de generar las imágenes que ves en la pantalla de tu computadora. Es especialmente importante si disfrutas de jugar videojuegos, editar videos o ver contenido en alta resolución.
        </p>

        <h3 class="section-title">¿Qué Hace una Tarjeta Gráfica?</h3>
        <p>
            - Convierte los datos de tu computadora en imágenes que aparecen en el monitor.<br>
            - Mejora la calidad de los gráficos en juegos y videos.<br>
            - Hace que los programas de diseño y edición funcionen más rápido.
        </p>

        <h3 class="section-title">Cuidados Básicos</h3>
        <p>
            - Coloca tu computadora en un lugar fresco para evitar que la tarjeta gráfica se caliente.<br>
            - Limpia el interior de tu computadora cada pocos meses para evitar la acumulación de polvo.<br>
            - No toques los componentes internos sin apagar primero tu PC.
        </p>

        <h3 class="section-title">Recomendaciones para Uso Básico</h3>
        <p>
            - Si usas la computadora para tareas básicas como navegar por internet o ver videos, una tarjeta gráfica integrada puede ser suficiente.<br>
            - Si deseas jugar videojuegos o ver contenido en 4K, considera una tarjeta gráfica dedicada.
        </p>

        <h3 class="section-title">Preguntas Frecuentes</h3>
        <p>
            <strong>¿Cómo sé si mi computadora tiene una tarjeta gráfica?</strong> Puedes verificarlo en las especificaciones del sistema o buscar el modelo en el Administrador de Dispositivos.<br>
            <strong>¿Necesito una tarjeta gráfica para ver videos?</strong> No necesariamente, pero mejora la calidad de la imagen y la velocidad.
        </p>
    </div>
</div>



                <div class="content-container contenedor_base" id="promedio">
    <div class="inner-container">
        <!-- Contenido específico de Tarjeta Gráfica para Nivel Promedio -->
        <h2 class="subtitle">Optimización y Cuidados para Tarjetas Gráficas</h2>
        <p>
            Las tarjetas gráficas son cruciales para juegos, diseño y otras tareas gráficamente intensivas. Aquí tienes algunos consejos para usuarios con conocimientos intermedios.
        </p>

        <h3 class="section-title">Mantén los Drivers Actualizados</h3>
        <p>
            - Visita regularmente el sitio oficial de tu fabricante (**AMD** o **NVIDIA**) para descargar los controladores más recientes.<br>
            - Usa herramientas como **GeForce Experience** o **AMD Adrenalin** para actualizaciones automáticas.<br>
            - Verifica que los nuevos drivers no causen problemas de compatibilidad con tus juegos o aplicaciones.
        </p>

        <h3 class="section-title">Monitoreo del Rendimiento</h3>
        <p>
            - Usa programas como **MSI Afterburner** para monitorear la temperatura, uso de la GPU y velocidad de los ventiladores.<br>
            - Mantén las temperaturas por debajo de 80°C para un rendimiento óptimo y mayor vida útil.
        </p>

        <h3 class="section-title">Limpieza y Mantenimiento</h3>
        <p>
            - Limpia los ventiladores y disipadores cada 3-6 meses para evitar acumulación de polvo.<br>
            - Asegúrate de que tu gabinete tenga un buen flujo de aire para mantener la GPU fresca.
        </p>

        <h3 class="section-title">Configuración del Software</h3>
        <p>
            - Ajusta configuraciones gráficas en juegos para equilibrar rendimiento y calidad visual.<br>
            - Habilita tecnologías como **DLSS** (NVIDIA) o **FSR** (AMD) para aumentar los FPS en juegos compatibles.<br>
            - Prueba diferentes configuraciones en el panel de control de la GPU para personalizar el rendimiento.
        </p>

        <h3 class="section-title">Recomendaciones Adicionales</h3>
        <p>
            - No hagas overclock si no tienes experiencia; enfócate primero en optimizar el sistema.<br>
            - Si notas caídas de rendimiento, considera limpiar la instalación de los drivers con herramientas como **DDU** (Display Driver Uninstaller) antes de reinstalarlos.
        </p>

        <h3 class="section-title">Preguntas Frecuentes</h3>
        <p>
            <strong>¿Cómo saber si mi tarjeta gráfica está funcionando correctamente?</strong> Usa pruebas como **3DMark** para verificar el rendimiento.<br>
            <strong>¿Qué hacer si la GPU se calienta mucho?</strong> Revisa el flujo de aire del gabinete y aumenta la velocidad de los ventiladores desde el software de la GPU.
        </p>
    </div>
</div>


                <div class="content-container contenedor_base" id="experto">
    <div class="inner-container">
        <!-- Contenido específico de Tarjeta Gráfica para Nivel Experto -->
        <h2 class="subtitle">Configuraciones Avanzadas para Tarjetas Gráficas</h2>
        <p>
            Las tarjetas gráficas son esenciales para tareas intensivas como juegos, edición de video y renderizado 3D. Como experto, aquí tienes recomendaciones avanzadas para maximizar su rendimiento.
        </p>

        <h3 class="section-title">Overclocking Seguro</h3>
        <p>
            - Usa herramientas como **MSI Afterburner** o el software de tu fabricante.<br>
            - Incrementa el reloj del núcleo y la memoria en pequeños pasos para evitar inestabilidad.<br>
            - Monitorea las temperaturas con herramientas como **HWMonitor** o **GPU-Z**.
        </p>

        <h3 class="section-title">Control Térmico</h3>
        <p>
            - Asegúrate de que el flujo de aire en tu gabinete sea óptimo.<br>
            - Revisa y limpia regularmente los ventiladores y disipadores de tu GPU.<br>
            - Considera cambiar la pasta térmica de la GPU cada 2-3 años si experimentas temperaturas altas.
        </p>

        <h3 class="section-title">Configuración del Driver</h3>
        <p>
            - Usa los drivers más recientes disponibles en sitios como **AMD Adrenalin** o **NVIDIA GeForce Experience**.<br>
            - Ajusta opciones avanzadas como **Anti-Aliasing**, **Anisotropic Filtering** y **DLSS/FSR** según tus necesidades.<br>
            - Habilita el **Modo de Rendimiento** para juegos competitivos o el **Modo de Calidad** para gráficos intensivos.
        </p>

        <h3 class="section-title">Recomendaciones de Hardware</h3>
        <p>
            - Asegúrate de que tu fuente de poder tenga suficiente capacidad para soportar tu tarjeta gráfica (ejemplo: RX 6750 XT requiere al menos 650W con un conector PCIe de 8 pines).<br>
            - Usa cables PCIe de alta calidad para garantizar estabilidad en el suministro de energía.
        </p>

        <h3 class="section-title">Software Adicional</h3>
        <p>
            - **CapFrameX** o **Rivatuner Statistics Server**: Para monitorear FPS y estabilidad.<br>
            - **Blender Benchmark** o **SPECviewperf**: Para evaluar el rendimiento en tareas específicas como renderizado.
        </p>

        <h3 class="section-title">Gestión de Configuración</h3>
        <p>
            - Crea perfiles personalizados para juegos o aplicaciones con configuraciones específicas.<br>
            - Optimiza el consumo de energía con undervolting si necesitas eficiencia térmica y energética.
        </p>

        <h3 class="section-title">Preguntas Frecuentes</h3>
        <p>
            <strong>¿Cómo saber si el overclock es estable?</strong> Realiza pruebas de estrés con herramientas como **FurMark** o **3DMark**.<br>
            <strong>¿Qué hacer si experimento artefactos gráficos?</strong> Reduce el overclock del núcleo o memoria hasta que desaparezcan.
        </p>
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
                </div>

                <div class="content-container contenedor_base" id="principiante">
    <div class="inner-container">
        <!-- Contenido específico de Disco Duro para Nivel Principiante -->
        <h2 class="subtitle">¿Qué es un Disco Duro o SSD?</h2>
        <p>
            El disco duro o SSD es el lugar donde se almacenan todos los datos de tu computadora. Esto incluye:
        </p>
        <ul>
            <li>Fotos, videos y documentos importantes.</li>
            <li>Programas como navegadores y aplicaciones.</li>
            <li>El sistema operativo que hace funcionar tu PC.</li>
        </ul>

        <h3 class="section-title">Tipos de Almacenamiento</h3>
        <p>
            - **Disco Duro (HDD):** Más lento pero con mayor capacidad por un precio más bajo. Perfecto para guardar muchos archivos grandes.<br>
            - **SSD (Unidad de Estado Sólido):** Más rápido y silencioso. Hace que la computadora encienda más rápido y que los programas abran en segundos.
        </p>

        <h3 class="section-title">Consejos Básicos</h3>
        <p>
            - No apagues tu computadora directamente del botón de encendido, ya que esto puede dañar los archivos en el disco.<br>
            - Siempre instala tu computadora en una superficie plana y estable para proteger los discos duros mecánicos (HDD).
        </p>

        <h3 class="section-title">Cuidado Diario</h3>
        <p>
            - Mantén tu computadora en un lugar fresco y limpio.<br>
            - Borra archivos que ya no necesitas para liberar espacio.<br>
            - Usa herramientas básicas como "Liberador de Espacio en Disco" en Windows.
        </p>

        <h3 class="section-title">¿Qué pasa si se llena el disco?</h3>
        <p>
            Si tu disco está lleno, la computadora puede ponerse lenta. Libera espacio eliminando programas que no usas o transfiriendo archivos grandes a una memoria externa.
        </p>

        <h3 class="section-title">Preguntas Frecuentes</h3>
        <p>
            <strong>¿Qué tamaño de disco necesito?</strong> Si solo usas la computadora para tareas básicas, un disco de 500GB o 1TB es suficiente.<br>
            <strong>¿Cómo saber si es SSD o HDD?</strong> Puedes revisarlo en la configuración del sistema o preguntarle a quien armó tu computadora.
        </p>
    </div>
</div>



                <div class="content-container contenedor_base" id="promedio">
    <div class="inner-container">
        <!-- Contenido específico de Disco Duro para Nivel Promedio -->
        <h2 class="subtitle">Mantenimiento y Monitoreo de Discos Duros y SSD</h2>
        <p>Conocer y cuidar tus discos de almacenamiento es esencial para garantizar un buen rendimiento y prolongar su vida útil. Sigue estas recomendaciones:</p>

        <h3 class="section-title">1. Monitorea el Estado de Salud del Disco</h3>
        <p>
            - Utiliza herramientas como **CrystalDiskInfo**, **HD Sentinel** o el software oficial de tu marca de disco.<br>
            - Revisa regularmente los indicadores de salud como **S.M.A.R.T.** (Self-Monitoring, Analysis, and Reporting Technology).
        </p>

        <h3 class="section-title">2. Mantenimiento Básico</h3>
        <p>
            - Evita apagar la computadora de manera abrupta, ya que puede dañar los datos en discos HDD.<br>
            - Desfragmenta los discos duros mecánicos (HDD) ocasionalmente para mejorar el acceso a los archivos.<br>
            - Los SSD no necesitan desfragmentación, pero asegúrate de que el sistema operativo tenga habilitada la función **TRIM**.
        </p>

        <h3 class="section-title">3. Organización de Archivos</h3>
        <p>
            - Mantén suficiente espacio libre en tus discos (al menos un 20%) para evitar que el rendimiento disminuya.<br>
            - Crea carpetas organizadas y limpia los archivos temporales o basura regularmente.
        </p>

        <h3 class="section-title">4. Respaldos Periódicos</h3>
        <p>
            - Usa herramientas como **Google Drive**, **OneDrive**, o discos externos para hacer copias de seguridad.<br>
            - Configura un respaldo automático para tus archivos importantes.
        </p>

        <h3 class="section-title">5. Uso de Software Especializado</h3>
        <p>
            - Programas como **Samsung Magician** o **Western Digital Dashboard** ofrecen diagnósticos y actualizaciones de firmware para SSD.<br>
            - Revisa las temperaturas y asegúrate de que no superen los 70°C en cargas pesadas.
        </p>

        <h3 class="section-title">Consejos Finales</h3>
        <p>
            - Si notas que tu disco comienza a fallar (ruidos extraños, archivos corruptos, lentitud), respalda tus datos y considera reemplazarlo.<br>
            - Actualiza los drivers del sistema y el firmware del disco para evitar problemas de compatibilidad.<br>
            - Evita mover físicamente discos HDD mientras están en uso para prevenir daños mecánicos.
        </p>
    </div>
</div>



                <div class="content-container contenedor_base" id="experto">
    <div class="inner-container">
        <!-- Contenido específico de Disco Duro para Nivel Experto -->
        <h2 class="subtitle">Optimización Avanzada de Discos Duros y SSD</h2>
        <p>Para usuarios avanzados, el manejo y configuración del almacenamiento pueden marcar una gran diferencia en el rendimiento y la seguridad de los datos. Aquí tienes consejos para aprovechar al máximo tus discos:</p>

        <h3 class="section-title">1. Configuración en RAID</h3>
        <p>
            - **RAID 0 (Striping):** Mejora la velocidad al dividir los datos entre múltiples discos, ideal para tareas que requieren acceso rápido a archivos.<br>
            - **RAID 1 (Mirroring):** Duplica los datos entre dos discos para mayor seguridad. Perfecto para proteger información importante.<br>
            - **RAID 5 y 10:** Opciones avanzadas para combinar velocidad y redundancia en sistemas con tres o más discos.
        </p>

        <h3 class="section-title">2. Optimización del Sistema de Archivos</h3>
        <p>
            - Usa sistemas de archivos como **NTFS** en Windows o **ext4** en Linux, optimizados para diferentes usos.<br>
            - Desactiva servicios innecesarios, como la indexación de archivos en discos secundarios, para maximizar el rendimiento.
        </p>

        <h3 class="section-title">3. Monitoreo y Mantenimiento</h3>
        <p>
            - Utiliza herramientas como **CrystalDiskInfo** o **Samsung Magician** para monitorear la salud de tus discos.<br>
            - Actualiza el firmware de tus SSD regularmente para mejorar la estabilidad y el rendimiento.<br>
            - Evita llenar más del 80% de la capacidad del SSD, ya que puede afectar su velocidad.
        </p>

        <h3 class="section-title">4. Configuración Avanzada</h3>
        <p>
            - Habilita **TRIM** en tu SSD para mantener un rendimiento óptimo a largo plazo.<br>
            - Considera particionar tus discos para organizar mejor los datos y asignar espacios específicos para sistemas operativos o programas.
        </p>

        <h3 class="section-title">5. Enfriamiento y Estabilidad</h3>
        <p>
            - Asegúrate de que tus discos NVMe tengan disipadores térmicos si se usan en tareas intensivas.<br>
            - Coloca los discos en áreas bien ventiladas dentro de tu gabinete para evitar sobrecalentamientos.
        </p>

        <h3 class="section-title">Consejos Finales</h3>
        <p>
            - Planifica la estructura de almacenamiento según tus necesidades (trabajo, gaming, edición de video).<br>
            - Haz copias de seguridad regulares, incluso con configuraciones RAID, para protegerte contra fallos inesperados.<br>
            - Experimenta con soluciones híbridas (SSD para sistema operativo y HDD para almacenamiento masivo).
        </p>
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

                </div>


                <div class="content-container contenedor_base" id="principiante">
    <div class="inner-container">
        <!-- Contenido específico de Pasta Térmica para Principiantes -->
        <h2 class="subtitle">¿Qué es la Pasta Térmica?</h2>
        <p>La pasta térmica es un material que ayuda a transferir el calor del procesador (CPU) o la tarjeta gráfica (GPU) al sistema de enfriamiento. Esto es importante para mantener tu computadora funcionando a una temperatura adecuada.</p>

        <h3 class="section-title">1. ¿Por qué es importante?</h3>
        <p>
            - Sin pasta térmica, el procesador podría sobrecalentarse y dañar tu computadora.<br>
            - Ayuda a que el disipador de calor o el enfriador funcionen de manera eficiente.
        </p>

        <h3 class="section-title">2. ¿Dónde se usa?</h3>
        <p>
            - Se coloca entre el procesador (una pequeña pieza cuadrada o rectangular) y el disipador de calor.<br>
            - También puede usarse en tarjetas gráficas avanzadas que generan mucho calor.
        </p>

        <h3 class="section-title">3. ¿Qué necesitas saber?</h3>
        <p>
            - No necesitas cambiarla frecuentemente, solo cuando reemplaces el disipador o después de varios años.<br>
            - Es fácil de aplicar, pero solo se necesita una pequeña cantidad, del tamaño de un grano de arroz.
        </p>

        <h3 class="section-title">4. Consejos básicos</h3>
        <p>
            - Si necesitas cambiarla, pide ayuda a alguien con experiencia o busca tutoriales confiables.<br>
            - Usa marcas conocidas como Arctic MX-4, que son fáciles de usar y seguras para principiantes.<br>
            - No te preocupes si no sabes mucho, tu computadora probablemente ya tiene pasta térmica instalada si es nueva.
        </p>
    </div>
</div>




                <div class="content-container contenedor_base" id="promedio">
    <div class="inner-container">
        <!-- Contenido específico de Pasta Térmica para Nivel Intermedio -->
        <h2 class="subtitle">Mantenimiento de la Pasta Térmica</h2>
        <p>La pasta térmica es esencial para mantener la temperatura adecuada de tu procesador y tarjeta gráfica. Aquí tienes recomendaciones prácticas:</p>

        <h3 class="section-title">1. ¿Por qué cambiar la pasta térmica?</h3>
        <p>
            - Con el tiempo, la pasta térmica pierde efectividad debido al secado o desgaste.<br>
            - Mantener una pasta térmica en buen estado ayuda a evitar sobrecalentamientos y prolonga la vida útil de tu CPU o GPU.
        </p>

        <h3 class="section-title">2. ¿Cuándo reemplazarla?</h3>
        <p>
            - Reemplaza la pasta térmica cada 1-2 años, especialmente si usas tu PC para tareas exigentes como gaming o edición de video.<br>
            - Monitorea las temperaturas de tu procesador con herramientas como HWMonitor o Core Temp. Si notas aumentos significativos, podría ser momento de cambiarla.
        </p>

        <h3 class="section-title">3. Cómo cambiar la pasta térmica</h3>
        <p>
            - Apaga tu computadora y desconéctala de la corriente antes de iniciar.<br>
            - Retira el disipador del procesador con cuidado, siguiendo las instrucciones del fabricante.<br>
            - Limpia los restos de pasta térmica antigua con un paño sin pelusa y alcohol isopropílico (preferiblemente al 99%).<br>
            - Aplica una pequeña cantidad de pasta térmica nueva en el centro del procesador y coloca nuevamente el disipador.
        </p>

        <h3 class="section-title">4. Tipos de pasta térmica recomendados</h3>
        <p>
            - Para usuarios promedio, las pastas cerámicas como Arctic MX-4 o Noctua NT-H1 ofrecen una excelente relación calidad-precio.<br>
            - Estas pastas son fáciles de aplicar y no son conductoras eléctricas, lo que reduce riesgos.
        </p>

        <h3 class="section-title">Consejos Finales</h3>
        <p>
            - No apliques demasiada pasta térmica; una capa fina es suficiente.<br>
            - Al instalar el disipador, asegúrate de que quede bien ajustado para maximizar el contacto térmico.<br>
            - Mantén el disipador limpio y revisa regularmente las temperaturas de tu sistema.
        </p>
    </div>
</div>




                <div class="content-container contenedor_base" id="experto">
    <div class="inner-container">
        <!-- Contenido específico de Pasta Térmica para Expertos -->
        <h2 class="subtitle">Pasta Térmica para Usuarios Avanzados</h2>
        <p>La pasta térmica es un componente crucial para la disipación de calor entre el procesador (CPU) o la tarjeta gráfica (GPU) y el sistema de refrigeración. Aquí tienes recomendaciones avanzadas:</p>

        <h3 class="section-title">1. Selección de la pasta térmica</h3>
        <p>
            - Opta por pastas térmicas de alto rendimiento, como compuestos de metal líquido (por ejemplo, Conductonaut) para máxima conductividad térmica.<br>
            - Alternativamente, elige compuestos cerámicos de calidad como Arctic MX-4 o Noctua NT-H2 para una aplicación más segura y de larga duración.<br>
            - Considera factores como durabilidad, viscosidad y facilidad de aplicación al seleccionar la pasta térmica.
        </p>

        <h3 class="section-title">2. Aplicación uniforme</h3>
        <p>
            - Limpia cuidadosamente el procesador y la base del disipador antes de aplicar la pasta. Usa alcohol isopropílico al 99% y un paño sin pelusa.<br>
            - Aplica una cantidad adecuada: una gota del tamaño de un grano de arroz en el centro o utiliza el método de esparcido para garantizar una capa uniforme.<br>
            - Evita aplicar demasiada pasta para prevenir que se derrame y afecte otros componentes.
        </p>

        <h3 class="section-title">3. Mantenimiento y reemplazo</h3>
        <p>
            - Reemplaza la pasta térmica cada 1-2 años para garantizar un rendimiento óptimo.<br>
            - Si utilizas pasta de metal líquido, asegúrate de que sea compatible con tu disipador y de que no entre en contacto con otros componentes, ya que es conductora.<br>
            - Monitorea las temperaturas de la CPU y la GPU con software como HWMonitor o MSI Afterburner para verificar la efectividad de la pasta térmica.
        </p>

        <h3 class="section-title">4. Consideraciones avanzadas</h3>
        <p>
            - En configuraciones de overclocking, utiliza pasta térmica de alto rendimiento para manejar cargas térmicas adicionales.<br>
            - Si trabajas con sistemas de refrigeración líquida personalizada, la calidad de la pasta térmica puede marcar una diferencia significativa en el rendimiento.<br>
            - Algunas pastas térmicas tienen un período de "curado" de 24-48 horas; tenlo en cuenta para obtener el rendimiento máximo.
        </p>

        <h3 class="section-title">Consejos Finales</h3>
        <p>
            - Sigue siempre las instrucciones del fabricante para garantizar una instalación adecuada.<br>
            - Guarda la pasta térmica en un lugar fresco y seco para evitar su deterioro.<br>
            - Si usas metal líquido, evita el uso en componentes con bases de aluminio, ya que puede causar corrosión.
        </p>
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
            </div>


            <div class="content-container contenedor_base" id="principiante">
    <div class="inner-container">
        <!-- Contenido específico de Accesorios para Principiantes -->
        <h2 class="subtitle">Accesorios Básicos para Mejorar tu PC</h2>
        <p>Los accesorios son elementos importantes que añaden funcionalidad y comodidad a tu computadora. Aquí tienes algunos que deberías considerar:</p>

        <h3 class="section-title">1. Monitor</h3>
        <p>
            - Es la pantalla donde ves todo lo que haces en tu computadora.<br>
            - Asegúrate de que sea lo suficientemente grande para trabajar o estudiar cómodamente.<br>
            - Busca opciones con buena resolución (por ejemplo, Full HD) para imágenes más nítidas.
        </p>

        <h3 class="section-title">2. Teclado y ratón</h3>
        <p>
            - El teclado es esencial para escribir y realizar tareas básicas.<br>
            - Un ratón te ayudará a moverte fácilmente por la pantalla y hacer clic en lo que necesitas.<br>
            - Para empezar, un teclado y ratón simples son suficientes, pero asegúrate de que sean cómodos.
        </p>

        <h3 class="section-title">3. Altavoces o audífonos</h3>
        <p>
            - Si usas tu computadora para ver videos o escuchar música, unos altavoces básicos son útiles.<br>
            - Alternativamente, unos audífonos te permitirán disfrutar del sonido sin molestar a otros.
        </p>

        <h3 class="section-title">4. Cámara web</h3>
        <p>
            - Si necesitas hacer videollamadas para clases o trabajo, una cámara web es muy útil.<br>
            - Muchas laptops ya tienen cámara integrada, pero para computadoras de escritorio puede ser necesario comprar una.
        </p>

        <h3 class="section-title">Consejos Finales</h3>
        <p>
            - Antes de comprar, verifica que los accesorios sean compatibles con tu computadora.<br>
            - Empieza con lo básico y, conforme aprendas más, podrás invertir en accesorios más avanzados.<br>
            - Busca ofertas o paquetes que incluyan varios accesorios por un buen precio.
        </p>
    </div>
</div>



            <div class="content-container contenedor_base" id="promedio">
    <div class="inner-container">
        <!-- Contenido específico de Accesorios para Usuarios Intermedios -->
        <h2 class="subtitle">Accesorios de Calidad para Mejorar tu Experiencia</h2>
        <p>Si buscas mejorar el rendimiento y comodidad de tu PC, estos accesorios te ofrecerán un equilibrio entre calidad y precio:</p>

        <h3 class="section-title">1. Monitor con alta frecuencia de actualización</h3>
        <p>
            - Elige un monitor con al menos 120Hz o 144Hz para disfrutar de una experiencia fluida en juegos y tareas visuales.<br>
            - Opta por una resolución de 1080p o 1440p, dependiendo de tu presupuesto y necesidades.<br>
            - Busca monitores con tecnología de sincronización adaptativa como FreeSync o G-Sync para evitar el tearing en juegos.
        </p>

        <h3 class="section-title">2. Teclado mecánico</h3>
        <p>
            - Invierte en un teclado mecánico que ofrezca una respuesta más rápida y durabilidad frente a los teclados tradicionales.<br>
            - Explora interruptores (switches) como los táctiles (Brown) o lineales (Red) para adaptarse a tu estilo de escritura o gaming.<br>
            - Considera opciones con iluminación RGB si prefieres personalización estética.
        </p>

        <h3 class="section-title">3. Otros accesorios útiles</h3>
        <p>
            - <strong>Mouse con DPI ajustable:</strong> Ideal para tareas específicas como gaming o edición de gráficos.<br>
            - <strong>Altavoces o audífonos:</strong> Escoge equipos de calidad para una mejor experiencia de audio.<br>
            - <strong>Alfombrilla grande:</strong> Mejora la precisión del mouse y protege tu escritorio.
        </p>

        <h3 class="section-title">Consejos Finales</h3>
        <p>
            - Asegúrate de que los accesorios sean compatibles con tu setup actual.<br>
            - Mantén un equilibrio entre funcionalidad y estética; no gastes en características innecesarias.<br>
            - Consulta reseñas de usuarios y expertos para tomar decisiones informadas.
        </p>
    </div>
</div>



            <div class="content-container contenedor_base" id="experto">
    <div class="inner-container">
        <!-- Contenido específico de Accesorios para Expertos -->
        <h2 class="subtitle">Accesorios Avanzados para Experiencias Inmersivas</h2>
        <p>Si buscas maximizar tu experiencia con tu PC, estos accesorios avanzados son esenciales para un entorno profesional o de entretenimiento de alta calidad:</p>

        <h3 class="section-title">1. Configuración de monitores duales</h3>
        <p>
            - Utiliza dos monitores para mejorar la productividad en tareas como edición de video, diseño gráfico o multitarea.<br>
            - Elige monitores con alta resolución (2K o 4K) y frecuencias de actualización de al menos 120Hz para gaming o trabajo gráfico.<br>
            - Configura el segundo monitor como una extensión de tu escritorio principal para organizar mejor tu espacio de trabajo.
        </p>

        <h3 class="section-title">2. Sistemas de sonido envolvente</h3>
        <p>
            - Invierte en altavoces 5.1 o 7.1 para una experiencia de audio envolvente en juegos, películas o música.<br>
            - Asegúrate de que tu tarjeta de sonido o placa base sea compatible con configuraciones avanzadas de audio.<br>
            - Alternativamente, considera audífonos de gama alta con soporte para audio espacial o surround virtual.
        </p>

        <h3 class="section-title">3. Otros periféricos avanzados</h3>
        <p>
            - <strong>Teclado mecánico:</strong> Elige interruptores personalizables según tus preferencias (lineales, táctiles o clicky).<br>
            - <strong>Mouse ergonómico:</strong> Con DPI ajustable para tareas específicas como gaming o diseño.<br>
            - <strong>Panel de control externo:</strong> Útil para creadores de contenido que manejan múltiples herramientas simultáneamente.
        </p>

        <h3 class="section-title">Consejos Finales</h3>
        <p>
            - Verifica que tu setup tenga suficiente espacio físico y una buena gestión de cables para evitar desorden.<br>
            - Mantén los drivers de tus periféricos actualizados para garantizar compatibilidad y rendimiento óptimo.<br>
            - Experimenta con configuraciones personalizadas en software para sacar el máximo provecho a tus accesorios.
        </p>
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
            </div>

            <div class="content-container contenedor_base" id="principiante">
    <div class="inner-container">
        <!-- Contenido específico de Recomendaciones para Principiantes -->
        <h2 class="subtitle">Recomendaciones Básicas para Elegir una Computadora</h2>
        <p>Si estás empezando y no tienes mucha experiencia, estas recomendaciones te ayudarán a hacer una buena elección:</p>

        <h3 class="section-title">1. Compra según tus necesidades</h3>
        <p>
            - Piensa para qué vas a usar tu computadora: ¿trabajo, estudios, entretenimiento o gaming?<br>
            - No gastes de más en características que no vas a utilizar, como una tarjeta gráfica de alta gama si solo usarás programas básicos.
        </p>

        <h3 class="section-title">2. Compara precios</h3>
        <p>
            - Busca ofertas en tiendas confiables y compara precios en línea.<br>
            - Asegúrate de que el precio incluya garantía y soporte técnico.<br>
            - Evita comprar computadoras usadas si no sabes cómo verificar su estado.
        </p>

        <h3 class="section-title">3. Aprende lo básico</h3>
        <p>
            - Investiga sobre componentes como el procesador (CPU), la memoria RAM y el almacenamiento (HDD/SSD).<br>
            - Asegúrate de que la computadora tenga suficiente espacio para tus archivos y que sea rápida para tus actividades.<br>
            - Familiarízate con términos como "sistema operativo" y "puertos" para saber qué necesitas.
        </p>

        <h3 class="section-title">Consejos Finales</h3>
        <p>
            - Si tienes dudas, pide ayuda a alguien con experiencia para elegir la mejor opción.<br>
            - Antes de comprar, verifica que la computadora sea compatible con el software o aplicaciones que necesitas usar.<br>
            - Recuerda que siempre puedes aprender más con tutoriales en línea.
        </p>
    </div>
</div>



                <div class="content-container contenedor_base" id="promedio">
    <div class="inner-container">
        <!-- Contenido específico de Recomendaciones para Usuarios Intermedios -->
        <h2 class="subtitle">Recomendaciones Intermedias para Elegir Componentes</h2>
        <p>Para usuarios con conocimientos moderados, estas recomendaciones te ayudarán a elegir y equilibrar tus componentes de manera efectiva:</p>

        <h3 class="section-title">1. Investiga benchmarks de rendimiento</h3>
        <p>
            - Antes de comprar componentes, revisa sitios de referencia como PassMark, UserBenchmark o YouTube para comparar el rendimiento.<br>
            - Busca comparativas entre modelos de CPU y GPU que se ajusten a tu presupuesto y necesidades.<br>
            - Analiza los resultados en escenarios similares a los que usarás tu PC, como juegos, edición de video o diseño.
        </p>

        <h3 class="section-title">2. Prioriza componentes según tus necesidades</h3>
        <p>
            - Si te enfocas en gaming, invierte más en una tarjeta gráfica potente (GPU) y elige un procesador equilibrado.<br>
            - Para tareas como edición de video o diseño, prioriza un buen procesador (CPU) y suficiente memoria RAM.<br>
            - Evalúa si necesitas almacenamiento rápido (SSD) para mejorar tiempos de carga en tus aplicaciones.
        </p>

        <h3 class="section-title">3. Equilibra el presupuesto</h3>
        <p>
            - Divide tu presupuesto de manera inteligente:
            <ul>
                <li><strong>CPU:</strong> 20-30% del presupuesto si no necesitas gaming extremo.</li>
                <li><strong>GPU:</strong> 30-50% del presupuesto si buscas un rendimiento gráfico alto.</li>
                <li><strong>RAM y Almacenamiento:</strong> 20-30% dependiendo de tus necesidades.</li>
            </ul>
            - No te excedas en un solo componente si sacrificarás el rendimiento de otros.
        </p>

        <h3 class="section-title">Consejos Finales</h3>
        <p>
            - Considera la posibilidad de actualizar en el futuro; elige una motherboard compatible con nuevas generaciones de hardware.<br>
            - Compra componentes de marcas confiables y revisa las reseñas antes de decidir.<br>
            - Consulta guías o tutoriales en línea para asegurarte de que los componentes sean compatibles entre sí.
        </p>
    </div>
</div>



                <div class="content-container contenedor_base" id="experto">
    <div class="inner-container">
        <!-- Contenido específico de Recomendaciones para Expertos -->
        <h2 class="subtitle">Recomendaciones Avanzadas para Expertos</h2>
        <p>Si eres un usuario avanzado, estas recomendaciones te ayudarán a maximizar el rendimiento y personalización de tu PC:</p>

        <h3 class="section-title">1. Configuración de RAID</h3>
        <p>
            - Considera utilizar RAID (Redundant Array of Independent Disks) para mejorar el rendimiento y/o la redundancia de tus discos.<br>
            - Configuraciones comunes incluyen:
            <ul>
                <li><strong>RAID 0:</strong> Mejora la velocidad combinando dos o más discos.</li>
                <li><strong>RAID 1:</strong> Duplica los datos para mayor seguridad en caso de fallos.</li>
                <li><strong>RAID 5:</strong> Combina velocidad y redundancia, ideal para configuraciones avanzadas.</li>
            </ul>
            - Usa controladores RAID o placas base compatibles para configurarlo.
        </p>

        <h3 class="section-title">2. Overclocking</h3>
        <p>
            - Realiza overclocking en tu CPU, GPU o RAM para obtener más potencia.<br>
            - Utiliza software como MSI Afterburner (GPU) o realiza ajustes directamente desde el BIOS para la CPU y RAM.<br>
            - Prueba la estabilidad con herramientas como Prime95 o 3DMark después de cada ajuste.<br>
            - Monitorea las temperaturas constantemente para evitar sobrecalentamiento.
        </p>

        <h3 class="section-title">3. Refrigeración Líquida</h3>
        <p>
            - Instala un sistema de refrigeración líquida (AIO o personalizado) para mantener las temperaturas bajas.<br>
            - Asegúrate de que el radiador esté correctamente colocado, y las mangueras no tengan restricciones.<br>
            - Mantén el sistema limpio para evitar obstrucciones y revisa regularmente el nivel de líquido en sistemas personalizados.<br>
            - Consulta guías avanzadas para sistemas de refrigeración líquida personalizados, si buscas la mejor personalización.
        </p>

        <h3 class="section-title">Consejos Finales</h3>
        <p>
            - Investiga y planifica antes de realizar configuraciones avanzadas.<br>
            - Realiza backups de datos importantes antes de implementar RAID o overclocking.<br>
            - Invierte en herramientas de monitoreo y mantenimiento de calidad, como sondas térmicas y software especializado.
        </p>
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
            </div>
                <div class="content-container contenedor_base" id="experto">
                    <div class="inner-container">
                        <!-- Contenido específico de Cuidados Expertos -->
                        <h2 class="subtitle">Cuidados Avanzados para tu PC</h2>
                        <p>Para usuarios expertos, estos consejos te ayudarán a optimizar el rendimiento de tu computadora al máximo.</p>

                        <h3 class="section-title">1. Overclock seguro</h3>
                        <p>
                            - Utiliza herramientas confiables como el BIOS de la motherboard o software como MSI Afterburner.<br>
                            - Realiza incrementos graduales en la frecuencia y verifica la estabilidad con pruebas de estrés (e.g., Prime95, Cinebench).<br>
                            - Monitorea temperaturas y voltajes para evitar daños a largo plazo.
                        </p>

                        <h3 class="section-title">2. Actualización de BIOS</h3>
                        <p>
                            - Consulta la página oficial del fabricante de tu motherboard para obtener la última versión del BIOS.<br>
                            - Sigue las instrucciones paso a paso para evitar problemas durante la actualización.<br>
                            - Una actualización de BIOS puede mejorar la compatibilidad con hardware nuevo y optimizar el rendimiento.
                        </p>

                        <h3 class="section-title">3. Activación de perfiles EXPO o XMP</h3>
                        <p>
                            - Entra al BIOS y habilita el perfil EXPO (AMD) o XMP (Intel) para aprovechar al máximo la velocidad de tu RAM.<br>
                            - Asegúrate de que tu motherboard y procesador sean compatibles con estas configuraciones.<br>
                            - Esto puede mejorar significativamente el rendimiento en tareas intensivas y juegos.
                        </p>

                        <h3 class="section-title">4. Undervolting</h3>
                        <p>
                            - Reduce los voltajes de la CPU o GPU para disminuir el consumo energético y las temperaturas.<br>
                            - Usa herramientas como ThrottleStop (CPU) o MSI Afterburner (GPU).<br>
                            - Realiza pruebas de estabilidad para asegurarte de que el sistema funciona correctamente.
                        </p>

                        <h3 class="section-title">5. Posicionamiento correcto de la bomba del radiador</h3>
                        <p>
                            - Si usas refrigeración líquida, instala la bomba del radiador de manera que el aire no quede atrapado en ella.<br>
                            - Asegúrate de que las mangueras estén orientadas hacia abajo o hacia los lados para evitar problemas de flujo.<br>
                            - Consulta las recomendaciones del fabricante para una instalación óptima.
                        </p>

                        <h3 class="section-title">6. Gestión adecuada de cables PCIe</h3>
                        <p>
                            - Para tarjetas gráficas de alto consumo (como las que requieren 3 o más conectores PCIe de 6 u 8 pines), usa cables individuales en lugar de dividir un único cable.<br>
                            - Esto asegura una distribución estable de energía y previene sobrecalentamientos.<br>
                            - Mantén los cables organizados para mejorar el flujo de aire dentro del gabinete.
                        </p>

                        <h3 class="section-title">Consejos Finales</h3>
                        <p>
                            - Monitorea regularmente el rendimiento y la salud del sistema usando herramientas avanzadas como HWInfo.<br>
                            - Invierte en componentes de calidad para garantizar estabilidad en configuraciones extremas.<br>
                            - Ten un plan de respaldo para tus datos en caso de fallos durante configuraciones avanzadas.
                        </p>
                    </div>

                </div>

                <div class="content-container contenedor_base" id="promedio">
                    <div class="inner-container">
                        <!-- Contenido específico de Cuidados Intermedios -->
                        <h2 class="subtitle">Cuidados Intermedios para tu PC</h2>
                        <p>Para usuarios con conocimientos intermedios, estos pasos te ayudarán a mantener tu computadora en óptimas condiciones.</p>

                        <h3 class="section-title">1. Limpieza interna y externa</h3>
                        <p>
                            - Limpia el interior de tu PC cada 2-3 meses utilizando aire comprimido.<br>
                            - Asegúrate de apagar y desconectar tu computadora antes de limpiarla.<br>
                            - Limpia el exterior de tu PC con un paño suave y seco para evitar la acumulación de polvo.
                        </p>

                        <h3 class="section-title">2. Monitoreo de temperaturas</h3>
                        <p>
                            - Utiliza software como HWMonitor o MSI Afterburner para verificar las temperaturas de la CPU y GPU.<br>
                            - Mantén las temperaturas bajo carga dentro de los rangos recomendados: <strong>CPU</strong> (< 85°C) y <strong>GPU</strong> (< 80°C).<br>
                                    - Si notas temperaturas altas, verifica el flujo de aire y realiza mantenimiento preventivo.
                        </p>

                        <h3 class="section-title">3. Flujo de aire adecuado</h3>
                        <p>
                            - Asegúrate de que los ventiladores estén correctamente configurados (entrada y salida de aire).<br>
                            - Usa ventiladores adicionales si tu gabinete lo permite para mejorar la circulación.<br>
                            - Mantén un espacio mínimo de 10-15 cm entre el gabinete y cualquier obstrucción.
                        </p>

                        <h3 class="section-title">4. Actualización de drivers</h3>
                        <p>
                            - Mantén los drivers de la GPU, chipset y otros dispositivos actualizados.<br>
                            - Descarga los controladores desde las páginas oficiales de los fabricantes.<br>
                            - Realiza estas actualizaciones regularmente para mejorar el rendimiento y la estabilidad.
                        </p>

                        <h3 class="section-title">5. Cambio de pasta térmica</h3>
                        <p>
                            - Cambia la pasta térmica de la CPU y GPU cada 1-2 años dependiendo del uso.<br>
                            - Usa pastas térmicas de calidad como Arctic MX-4 o Noctua NT-H1.<br>
                            - Limpia cuidadosamente los restos antiguos con alcohol isopropílico antes de aplicar la nueva pasta.
                        </p>

                        <h3 class="section-title">Consejos Finales</h3>
                        <p>
                            - Monitorea regularmente el estado de tu hardware para detectar problemas a tiempo.<br>
                            - Consulta tutoriales confiables si no estás seguro de cómo realizar una tarea.<br>
                            - Invierte en herramientas básicas como destornilladores, aire comprimido y alcohol isopropílico para el mantenimiento.
                        </p>
                    </div>
                </div>

                <div class="content-container contenedor_base" id="principiante">
                    <div class="inner-container">
                        <!-- Contenido específico de Cuidados -->
                        <h2 class="subtitle">Cuidados Básicos para tu PC</h2>
                        <p>Para principiantes, es fundamental realizar tareas simples pero importantes para mantener tu computadora en buen estado.</p>

                        <h3 class="section-title">1. Mantén tu PC en un lugar fresco</h3>
                        <p>
                            - Evita colocarla cerca de fuentes de calor como ventanas con luz directa o radiadores.<br>
                            - Asegúrate de que el flujo de aire no esté obstruido por muebles o paredes.<br>
                            - Limpia las rejillas y ventiladores con aire comprimido al menos cada dos meses.
                        </p>

                        <h3 class="section-title">2. Evita infecciones por virus</h3>
                        <p>
                            - Instala un antivirus confiable, como Windows Defender o Avast.<br>
                            - Mantén tu sistema operativo y programas actualizados.<br>
                            - Descarga archivos solo de sitios web confiables y desconfía de correos sospechosos.
                        </p>

                        <h3 class="section-title">3. Apaga correctamente tu PC</h3>
                        <p>
                            - Usa siempre la opción de apagado del sistema (`Inicio > Apagar`).<br>
                            - Evita desconectarla directamente de la toma de corriente mientras está encendida.<br>
                            - Cierra todos los programas abiertos antes de apagar para evitar errores futuros.
                        </p>

                        <h3 class="section-title">4. Aprende qué significa cada cable</h3>
                        <p>
                            - <strong>Cable de alimentación:</strong> Conecta tu PC a la corriente eléctrica.<br>
                            - <strong>Cable HDMI o DisplayPort:</strong> Transmite imagen y sonido al monitor.<br>
                            - <strong>Cable Ethernet:</strong> Proporciona una conexión a Internet más estable.<br>
                            - <strong>Cables USB:</strong> Usados para conectar teclados, ratones y otros dispositivos.<br>
                            - <strong>Cables de audio:</strong> Jack de 3.5 mm (verde para auriculares, rosa para micrófono).
                        </p>

                        <h3 class="section-title">Consejos Finales</h3>
                        <p>
                            - Organiza y etiqueta tus cables para identificarlos fácilmente.<br>
                            - Consulta los manuales de tus dispositivos para aprender más sobre su uso.<br>
                            - Sé paciente: revisa las conexiones antes de buscar soporte técnico.
                        </p>
                    </div>
                </div>


            </div>
        </div>







        <!-- Slider -->
        <section class="object ">
            <div class="object__container">
                <img src="../../public/assets/icons/leftarrow.svg" class="object__arrow" id="before">

                <!-- Id 1 -->

                <section class="object__body object__body--show " data-id="1">
                    <!-- Teléfono para uso básico -->
                    <div class=" contenedor_base" id="principiante">
                        <div class="object__texts>
                        <h2 class=" subtitle">Redmi Note 12, <span class="object__course">¡Ideal para redes sociales y llamadas!</span></h2>
                            <p class="object__review">
                            <p>Un teléfono práctico que permite usar WhatsApp, ver videos y tomar fotos sin problemas.</p>
                            <p>Cuenta con una pantalla clara y una batería que dura todo el día.</p>
                            <br>
                            <p>Perfecto para quienes necesitan un celular confiable y fácil de usar.</p>
                            </p>
                        </div>
                        <figure class="object__picture>
                        <img src=" ../../public/assets/images/RedmiNote12.png" class="object__img">
                        </figure>
                    </div>

                    <!-- Teléfono para gamers casuales -->

                    <div class="object__texts contenedor_base" id="promedio">
                        <h2 class="subtitle">POCO X6 5G, <span class="object__course">¡Un teléfono potente en gama media, ideal para gaming casual y uso diario!</span></h2>
                        <p class="object__review">
                        <p>Pantalla: AMOLED de 6.67" a 120Hz</p>
                        <p>Procesador: Qualcomm Snapdragon 778G+</p>
                        <p>Memoria: 8GB RAM, 128GB o 256GB almacenamiento</p>
                        <p>Cámara: Trasera: 64MP + 8MP + 2MP; Frontal: 16MP</p>
                        <p>Batería: 5000mAh con carga rápida de 67W</p>
                        <p>Conectividad: 5G, Wi-Fi 6E, Bluetooth 5.3</p>
                        <br>
                        <p>Consideraciones:
                            Excelente rendimiento en juegos casuales.
                            Sin carga inalámbrica ni ranura microSD.
                        </p>
                        </p>
                    </div>
                    <figure class="object__picture contenedor_base" id="promedio">
                        <img src="../../public/assets/images/PocoX6.png" class="object__img">
                    </figure>

                    <!-- Teléfono para entusiastas de la fotografía -->

                    <div class="object__texts contenedor_base" id="experto">
                        <h2 class="subtitle">Sony Xperia 1 V, <span class="object__course">¡El mejor teléfono para fotografía profesional y contenido multimedia!</span></h2>
                        <p class="object__review">
                        <p>Pantalla: OLED 4K de 6.5", relación 21:9, HDR y 120Hz para una experiencia visual cinematográfica.</p>
                        <p>Procesador: Qualcomm Snapdragon 8 Gen 2 con 12GB de RAM.</p>
                        <p>Cámara: Triple sensor de 48MP con óptica Zeiss y soporte para grabación en 4K HDR a 120 fps.</p>
                        <p>Batería: 5000mAh con carga rápida de 30W y carga inalámbrica.</p>
                        <p>Otros: Jack de 3.5mm, resistencia IP68, y herramientas avanzadas de edición de fotos y videos.</p>
                        <br>
                        <p>Consideraciones:
                            Diseño pensado para creadores de contenido.
                            Precio premium, pero justificado por su tecnología única.
                        </p>
                        </p>
                    </div>
                    <figure class="object__picture contenedor_base" id="experto">
                        <img src="../../public/assets/images/Xperia1V.png" class="object__img">
                    </figure>
                </section>






                <!-- Id 2 -->

                <!-- Teléfono económico para fotos y redes -->
                <section class="object__body" data-id="2">
                    <div class="object__texts">
                        <h2 class="subtitle">Samsung Galaxy A14, <span class="object__course">¡Sencillo y con buena cámara para fotos casuales!</span></h2>
                        <p class="object__review">
                        <p>Un teléfono pensado para quienes disfrutan de compartir fotos y navegar en redes sociales.</p>
                        <p>Tiene una batería duradera y un diseño fácil de manejar.</p>
                        <br>
                        <p>Una excelente opción para usar Instagram, Facebook y llamadas.</p>
                        </p>
                    </div>
                    <figure class="object__picture">
                        <img src="../../public/assets/images/SamsungA14.png" class="object__img">
                    </figure>
                </section>

                <!-- Teléfono básico para el día a día -->
                <section class="object__body" data-id="3">
                    <div class="object__texts">
                        <h2 class="subtitle">Realme C55, <span class="object__course">¡Perfecto para WhatsApp y videos!</span></h2>
                        <p class="object__review">
                        <p>Con este teléfono puedes estar conectado todo el día y disfrutar de videos y llamadas.</p>
                        <p>Es ligero, sencillo y tiene una batería que aguanta horas de uso continuo.</p>
                        <br>
                        <p>Un teléfono práctico para tareas diarias y entretenimiento ligero.</p>
                        </p>
                    </div>
                    <figure class="object__picture">
                        <img src="../../public/assets/images/RealmeC55.png" class="object__img">
                    </figure>
                </section>

                <!-- Teléfono resistente y fácil de usar -->
                <section class="object__body" data-id="4">
                    <div class="object__texts">
                        <h2 class="subtitle">Nokia G22, <span class="object__course">¡Duradero y práctico para el día a día!</span></h2>
                        <p class="object__review">
                        <p>Un teléfono diseñado para quienes buscan algo sencillo y resistente.</p>
                        <p>Su batería dura todo el día y es ideal para llamadas y aplicaciones básicas.</p>
                        <br>
                        <p>Perfecto para quienes necesitan un celular confiable y fácil de usar.</p>
                        </p>
                    </div>
                    <figure class="object__picture">
                        <img src="../../public/assets/images/NokiaG22.png" class="object__img">
                    </figure>
                </section>

                <!-- Teléfono para jóvenes y entretenimiento -->
                <section class="object__body" data-id="5">
                    <div class="object__texts">
                        <h2 class="subtitle">Motorola Moto G23, <span class="object__course">¡Fácil de usar y con buena pantalla para ver videos!</span></h2>
                        <p class="object__review">
                        <p>Ideal para jóvenes que quieren ver series, usar redes sociales y chatear todo el día.</p>
                        <p>Es cómodo de llevar y tiene una pantalla grande para disfrutar contenido multimedia.</p>
                        <br>
                        <p>Un teléfono accesible con todo lo necesario para entretenimiento diario.</p>
                        </p>
                    </div>
                    <figure class="object__picture">
                        <img src="../../public/assets/images/MotoG23.png" class="object__img">
                    </figure>
                </section>

                <!-- Teléfono económico y ligero -->
                <section class="object__body" data-id="6">
                    <div class="object__texts">
                        <h2 class="subtitle">Infinix Zero 20, <span class="object__course">¡Perfecto para llamadas y fotos casuales!</span></h2>
                        <p class="object__review">
                        <p>Un celular básico pero eficiente para tomar fotos, chatear y hacer llamadas.</p>
                        <p>Es ligero, fácil de usar y con una batería que dura todo el día.</p>
                        <br>
                        <p>Ideal para quienes buscan un teléfono funcional y económico.</p>
                        </p>
                    </div>
                    <figure class="object__picture">
                        <img src="../../public/assets/images/InfinixZero20.png" class="object__img">
                    </figure>
                </section>

                <img src="../../public/assets/icons/rightarrow.svg" class="object__arrow" id="next">
            </div>
        </section>















        <!-- Slider -->
        <section class="object">
            <div class="object__container">
                <img src="../../public/assets/icons/leftarrow.svg" class="object__arrow" id="before">



                <!-- Teléfono para gamers no casuales -->
                <section class="object__body" data-id="2">
                    <div class="object__texts">
                        <h2 class="subtitle">ASUS ROG Phone 7, <span class="object__course">¡El mejor teléfono para gamers exigentes, con características premium para jugar como un profesional!</span></h2>
                        <p class="object__review">
                        <p>Pantalla: AMOLED de 6.78" a 165Hz</p>
                        <p>Procesador: Qualcomm Snapdragon 8 Gen 2</p>
                        <p>Memoria: 12GB o 16GB RAM, 256GB o 512GB almacenamiento</p>
                        <p>Cámara: Trasera: 50MP + 13MP + 5MP; Frontal: 32MP</p>
                        <p>Batería: 6000mAh con carga rápida de 65W</p>
                        <p>Conectividad: 5G, Wi-Fi 6E, Bluetooth 5.3</p>
                        <br>
                        <p>Consideraciones:
                            Incluye gatillos ultrasonidos personalizables para juegos.
                            Más pesado y caro que los smartphones promedio.
                        </p>
                        </p>
                    </div>
                    <figure class="object__picture">
                        <img src="../../public/assets/images/ROGPhone7.png" class="object__img">
                    </figure>
                </section>

                <!-- Teléfono para uso general y comunicación -->
                <section class="object__body" data-id="3">
                    <div class="object__texts">
                        <h2 class="subtitle">Samsung Galaxy A54 5G, <span class="object__course">¡Un teléfono confiable y versátil, ideal para tareas del día a día!</span></h2>
                        <p class="object__review">
                        <p>Pantalla: AMOLED de 6.4" a 120Hz</p>
                        <p>Procesador: Exynos 1380</p>
                        <p>Memoria: 8GB RAM, 128GB o 256GB almacenamiento (ampliable con microSD)</p>
                        <p>Cámara: Trasera: 50MP + 12MP + 5MP; Frontal: 32MP</p>
                        <p>Batería: 5000mAh con carga rápida de 25W</p>
                        <p>Conectividad: 5G, Wi-Fi 6, Bluetooth 5.3</p>
                        <br>
                        <p>Consideraciones:
                            Diseño premium con resistencia al agua (IP67).
                            Carga rápida limitada a 25W.
                        </p>
                        </p>
                    </div>
                    <figure class="object__picture">
                        <img src="../../public/assets/images/SamsungA54.png" class="object__img">
                    </figure>
                </section>

                <!-- Teléfono para fotografía y multitarea -->
                <section class="object__body" data-id="4">
                    <div class="object__texts">
                        <h2 class="subtitle">Google Pixel 7, <span class="object__course">¡Un teléfono para amantes de la fotografía y la multitarea eficiente!</span></h2>
                        <p class="object__review">
                        <p>Pantalla: OLED de 6.3" a 90Hz</p>
                        <p>Procesador: Google Tensor G2</p>
                        <p>Memoria: 8GB RAM, 128GB o 256GB almacenamiento</p>
                        <p>Cámara: Trasera: 50MP + 12MP; Frontal: 10.8MP</p>
                        <p>Batería: 4355mAh con carga rápida de 30W y carga inalámbrica</p>
                        <p>Conectividad: 5G, Wi-Fi 6E, Bluetooth 5.2</p>
                        <br>
                        <p>Consideraciones:
                            Destacado por su cámara y software optimizado.
                            Pantalla con frecuencia de actualización más baja que la competencia.
                        </p>
                        </p>
                    </div>
                    <figure class="object__picture">
                        <img src="../../public/assets/images/Pixel7.png" class="object__img">
                    </figure>
                </section>

                <!-- Teléfono premium para trabajo y rendimiento -->
                <section class="object__body" data-id="5">
                    <div class="object__texts">
                        <h2 class="subtitle">iPhone 14 Pro Max, <span class="object__course">¡Una opción premium para trabajo, diseño y contenido multimedia!</span></h2>
                        <p class="object__review">
                        <p>Pantalla: Super Retina XDR de 6.7" con ProMotion a 120Hz</p>
                        <p>Procesador: Apple A16 Bionic</p>
                        <p>Memoria: 6GB RAM, 128GB, 256GB, 512GB o 1TB almacenamiento</p>
                        <p>Cámara: Trasera: 48MP + 12MP + 12MP; Frontal: 12MP</p>
                        <p>Batería: Hasta 29 horas de reproducción de video</p>
                        <p>Conectividad: 5G, Wi-Fi 6, Bluetooth 5.3</p>
                        <br>
                        <p>Consideraciones:
                            Calidad y durabilidad excepcionales.
                            Precio elevado comparado con otras opciones.
                        </p>
                        </p>
                    </div>
                    <figure class="object__picture">
                        <img src="../../public/assets/images/iPhone14ProMax.png" class="object__img">
                    </figure>
                </section>

                <!-- Teléfono calidad-precio -->
                <section class="object__body" data-id="6">
                    <div class="object__texts">
                        <h2 class="subtitle">Realme GT 2 Pro, <span class="object__course">¡Un teléfono que equilibra características premium y precio accesible!</span></h2>
                        <p class="object__review">
                        <p>Pantalla: AMOLED de 6.7" a 120Hz</p>
                        <p>Procesador: Qualcomm Snapdragon 8 Gen 1</p>
                        <p>Memoria: 8GB o 12GB RAM, 128GB o 256GB almacenamiento</p>
                        <p>Cámara: Trasera: 50MP + 50MP + lente microscópico; Frontal: 32MP</p>
                        <p>Batería: 5000mAh con carga rápida de 65W</p>
                        <p>Conectividad: 5G, Wi-Fi 6, Bluetooth 5.2</p>
                        <br>
                        <p>Consideraciones:
                            Excelente cámara y pantalla de alta calidad.
                            Sin carga inalámbrica ni resistencia al agua.
                        </p>
                        </p>
                    </div>
                    <figure class="object__picture">
                        <img src="../../public/assets/images/RealmeGT2Pro.png" class="object__img">
                    </figure>
                </section>

                <img src="../../public/assets/icons/rightarrow.svg" class="object__arrow" id="next">
            </div>
        </section>




        <!-- Slider -->
        <section class="object">
            <div class="object__container">
                <img src="../../public/assets/icons/leftarrow.svg" class="object__arrow" id="before">



                <!-- Teléfono gaming extremo -->
                <section class="object__body" data-id="2">
                    <div class="object__texts">
                        <h2 class="subtitle">Nubia RedMagic 8S Pro+, <span class="object__course">¡El tope de gama para gamers exigentes!</span></h2>
                        <p class="object__review">
                        <p>Pantalla: AMOLED de 6.8" con tasa de refresco de 120Hz y respuesta táctil de 960Hz.</p>
                        <p>Procesador: Qualcomm Snapdragon 8 Gen 2 Overclock Edition con 16GB de RAM.</p>
                        <p>Sistema de enfriamiento activo con ventilador integrado para sesiones prolongadas de gaming.</p>
                        <p>Cámara: Trasera de 50MP y cámara frontal invisible bajo la pantalla.</p>
                        <p>Batería: 6000mAh con carga rápida de 165W.</p>
                        <p>Otros: Botones táctiles personalizables, sistema de audio DTS:X Ultra.</p>
                        <br>
                        <p>Consideraciones:
                            Diseño agresivo enfocado en el rendimiento.
                            Excelente para gaming, pero menos versátil en otras áreas.</p>
                        </p>
                    </div>
                    <figure class="object__picture">
                        <img src="../../public/assets/images/RedMagic8SProPlus.png" class="object__img">
                    </figure>
                </section>

                <!-- Teléfono con equilibrio premium -->
                <section class="object__body " data-id="3">
                    <div class="object__texts">
                        <h2 class="subtitle">Vivo X90 Pro+, <span class="object__course">¡La elección para fotografía, rendimiento y diseño premium!</span></h2>
                        <p class="object__review">
                        <p>Pantalla: AMOLED LTPO4 de 6.78" con 120Hz y soporte Dolby Vision.</p>
                        <p>Procesador: Qualcomm Snapdragon 8 Gen 2 con 12GB de RAM.</p>
                        <p>Cámara: Sensor principal de 50MP tipo 1” co-desarrollado con Zeiss, teleobjetivo de 90mm.</p>
                        <p>Batería: 4700mAh con carga rápida de 80W y carga inalámbrica de 50W.</p>
                        <p>Otros: Resistencia IP68, altavoces estéreo, y software optimizado para fotografía nocturna.</p>
                        <br>
                        <p>Consideraciones:
                            Ideal para fotógrafos y usuarios que buscan una experiencia premium completa.</p>
                        </p>
                    </div>
                    <figure class="object__picture">
                        <img src="../../public/assets/images/VivoX90ProPlus.png" class="object__img">
                    </figure>
                </section>

                <!-- Teléfono plegable de alta gama -->
                <section class="object__body " data-id="4">
                    <div class="object__texts">
                        <h2 class="subtitle">Honor Magic Vs, <span class="object__course">¡El mejor plegable para productividad y entretenimiento!</span></h2>
                        <p class="object__review">
                        <p>Pantalla principal: OLED de 7.9" con soporte HDR10+.</p>
                        <p>Pantalla externa: OLED de 6.45" con 120Hz.</p>
                        <p>Procesador: Qualcomm Snapdragon 8+ Gen 1 con 12GB de RAM.</p>
                        <p>Cámara: Triple sensor de 50MP con ultra gran angular y macro.</p>
                        <p>Batería: 5000mAh con carga rápida de 66W.</p>
                        <p>Otros: Chasis ultraligero, software optimizado para multitarea.</p>
                        <br>
                        <p>Consideraciones:
                            Experiencia premium, pero con mayor fragilidad debido al diseño plegable.</p>
                        </p>
                    </div>
                    <figure class="object__picture">
                        <img src="../../public/assets/images/HonorMagicVs.png" class="object__img">
                    </figure>
                </section>

                <!-- Teléfono con gran relación calidad-precio -->
                <section class="object__body" data-id="5">
                    <div class="object__texts">
                        <h2 class="subtitle">Realme GT Neo 5, <span class="object__course">¡El equilibrio perfecto entre precio y rendimiento avanzado!</span></h2>
                        <p class="object__review">
                        <p>Pantalla: AMOLED de 6.74" con 144Hz y HDR10+.</p>
                        <p>Procesador: Qualcomm Snapdragon 8+ Gen 1 con 12GB de RAM.</p>
                        <p>Cámara: Sensor principal de 50MP con estabilización óptica.</p>
                        <p>Batería: 4600mAh con carga ultrarrápida de 240W (carga completa en menos de 10 minutos).</p>
                        <p>Otros: Diseño llamativo con luces LED traseras, ideal para gaming y uso diario.</p>
                        <br>
                        <p>Consideraciones:
                            Excelente precio para sus características premium.</p>
                        </p>
                    </div>
                    <figure class="object__picture">
                        <img src="../../public/assets/images/RealmeGTNeo5.png" class="object__img">
                    </figure>
                </section>

                <!-- Teléfono ultra premium -->
                <section class="object__body " data-id="6">
                    <div class="object__texts">
                        <h2 class="subtitle">Xiaomi 13 Ultra, <span class="object__course">¡La experiencia más avanzada en cámaras y diseño!</span></h2>
                        <p class="object__review">
                        <p>Pantalla: AMOLED LTPO de 6.73" con resolución 2K, 120Hz y Dolby Vision.</p>
                        <p>Procesador: Qualcomm Snapdragon 8 Gen 2 con 16GB de RAM.</p>
                        <p>Cámara: Sistema cuádruple con sensor principal de 50MP tipo 1", ultra gran angular y zoom periscópico.</p>
                        <p>Batería: 5000mAh con carga rápida de 90W y carga inalámbrica de 50W.</p>
                        <p>Otros: Acabado de cuero ecológico, IP68, optimización para fotografía profesional.</p>
                        <br>
                        <p>Consideraciones:
                            Compite directamente con los mejores teléfonos de fotografía del mercado.</p>
                        </p>
                    </div>
                    <figure class="object__picture">
                        <img src="../../public/assets/images/Xiaomi13Ultra.png" class="object__img">
                    </figure>
                </section>

                <img src="../../public/assets/icons/rightarrow.svg" class="object__arrow" id="next">
            </div>
        </section>





        <!-- Info Container -->
        <section class="knowledge contenedor_base" id="principiante">
            <div class="knowledge__container container ">
                <div class="knowledge__texts">
                    <h2 class="subtitle">¡Aprende sobre los puertos y cables traseros de una PC!</h2>
                    <p class="knowledge__paragraph">
                        Al conectar tu PC, es importante entender para qué sirve cada puerto y cable. Aquí tienes una descripción rápida de los más comunes:
                    </p>
                    <ul>
                        <li>
                            <strong>Puerto Ethernet</strong>: Se utiliza para conectar tu computadora a Internet mediante un cable de red.
                            <a href="https://www.google.com/search?q=puerto+ethernet" target="_blank">¿Qué es un puerto Ethernet?</a>
                        </li>
                        <li>
                            <strong>Puerto HDMI</strong>: Sirve para transmitir video y audio de alta definición desde tu PC a un monitor o televisor.
                            <a href="https://www.google.com/search?q=puerto+HDMI" target="_blank">Más sobre HDMI</a>
                        </li>
                        <li>
                            <strong>Puerto DisplayPort</strong>: Similar al HDMI, pero diseñado especialmente para monitores con altas tasas de refresco y resolución.
                            <a href="https://www.google.com/search?q=puerto+DisplayPort" target="_blank">Más sobre DisplayPort</a>
                        </li>
                        <li>
                            <strong>Puertos USB</strong>: Se usan para conectar dispositivos como teclados, ratones, memorias USB, y más. Existen variaciones como USB 2.0, 3.0, y USB-C.
                            <a href="https://www.google.com/search?q=puertos+USB" target="_blank">Conoce más sobre los USB</a>
                        </li>
                        <li>
                            <strong>Puerto Jack de 3.5 mm</strong>: Conecta auriculares o micrófonos a tu PC. A menudo hay diferentes colores que indican su función (verde para audio, rosa para micrófono).
                            <a href="https://www.google.com/search?q=puerto+jack+3.5mm" target="_blank">Detalles sobre el puerto Jack</a>
                        </li>
                        <li>
                            <strong>Puerto VGA</strong>: Un conector más antiguo para monitores, aún presente en algunas PCs.
                            <a href="https://www.google.com/search?q=puerto+VGA" target="_blank">¿Qué es un puerto VGA?</a>
                        </li>
                        <li>
                            <strong>Puerto PS/2</strong>: Se utiliza para teclados y ratones antiguos. Generalmente son circulares y de color púrpura o verde.
                            <a href="https://www.google.com/search?q=puerto+PS/2" target="_blank">Aprende sobre el puerto PS/2</a>
                        </li>
                        <li>
                            <strong>Puerto de alimentación</strong>: Es donde conectas el cable de corriente para encender la PC.
                            <a href="https://www.google.com/search?q=puerto+de+alimentación" target="_blank">¿Qué es un puerto de alimentación?</a>
                        </li>
                    </ul>
                    <p class="knowledge__paragraph">
                        Estos puertos y cables son fundamentales para que tu computadora funcione correctamente. Explora los enlaces para aprender más sobre cada uno.
                    </p>
                </div>

                <figure class="knowledge__picture">
                    <img src="../../public/assets/images/Rog Strix z390 e ports.png" class="knowledge__img" alt="Puertos traseros de una PC">
                </figure>
            </div>
        </section>


        <!-- Info Container -->
        <section class="knowledge contenedor_base" id="promedio">
            <div class="knowledge__container container">
                <div class="knowledge__texts">
                    <h2 class="subtitle">¡Mejora tus conocimientos sobre PCs con estos consejos!</h2>
                    <p class="knowledge__paragraph">
                        Si ya conoces lo básico, aquí tienes algunos consejos para optimizar el rendimiento de tu computadora y aprovechar mejor sus componentes:
                    </p>
                    <ul>
                        <li>
                            <strong>Actualización de BIOS</strong>: Mantener el BIOS de tu motherboard actualizado es esencial para garantizar la compatibilidad con hardware nuevo y mejorar la estabilidad del sistema.
                            <a href="https://www.google.com/search?q=como+actualizar+el+BIOS+de+mi+PC" target="_blank">¿Cómo actualizar el BIOS?</a>
                        </li>
                        <li>
                            <strong>Configuración de perfiles XMP/EXPO</strong>: Si tienes memoria RAM compatible, activa los perfiles XMP (Intel) o EXPO (AMD) desde el BIOS para que funcionen a su velocidad máxima.
                            <a href="https://www.google.com/search?q=como+activar+XMP+o+EXPO" target="_blank">Más sobre XMP/EXPO</a>
                        </li>
                        <li>
                            <strong>Gestión de almacenamiento</strong>: Usa herramientas como "Optimizar unidades" en Windows para desfragmentar discos duros y garantizar un rendimiento estable. En los SSD, evita la desfragmentación y revisa su salud con software como CrystalDiskInfo.
                            <a href="https://www.google.com/search?q=optimizar+disco+duro+Windows" target="_blank">Aprende a optimizar tu almacenamiento</a>
                        </li>
                        <li>
                            <strong>Control de temperaturas</strong>: Monitorea la temperatura de tu CPU y GPU con herramientas como HWMonitor o MSI Afterburner. Una buena refrigeración asegura que tu PC funcione sin problemas.
                            <a href="https://www.google.com/search?q=como+monitorear+temperaturas+PC" target="_blank">Guía para monitorear temperaturas</a>
                        </li>
                        <li>
                            <strong>Overclocking básico</strong>: Experimenta con overclocking moderado en tu GPU o CPU para obtener un rendimiento extra. Utiliza herramientas como MSI Afterburner para la GPU o las opciones del BIOS para la CPU.
                            <a href="https://www.google.com/search?q=overclocking+para+principiantes" target="_blank">Introducción al overclocking</a>
                        </li>
                        <li>
                            <strong>Puertos y conexiones</strong>: Asegúrate de usar cables y conexiones de alta calidad para maximizar la experiencia, como cables HDMI 2.1 para monitores 4K o DisplayPort 1.4 para tasas de refresco altas.
                            <a href="https://www.google.com/search?q=mejores+cables+para+monitores" target="_blank">Revisa qué cables necesitas</a>
                        </li>
                        <li>
                            <strong>Software de mantenimiento</strong>: Limpia regularmente tu sistema de archivos temporales y programas innecesarios con herramientas como CCleaner o la limpieza de disco integrada de Windows.
                            <a href="https://www.google.com/search?q=limpieza+de+disco+en+Windows" target="_blank">Cómo limpiar tu PC</a>
                        </li>
                    </ul>
                    <p class="knowledge__paragraph">
                        Estos consejos te ayudarán a sacar el máximo provecho de tu PC, manteniendo un buen equilibrio entre rendimiento y estabilidad.
                    </p>
                </div>

                <figure class="knowledge__picture">
                    <img src="../../public/assets/images/expo & xmp.png" class="knowledge__img" alt="Consejos para usuarios intermedios de PC">
                </figure>
            </div>
        </section>


        <!-- Info Container -->
        <section class="knowledge contenedor_base" id="experto">
            <div class="knowledge__container container">
                <div class="knowledge__texts">
                    <h2 class="subtitle">Optimiza tu PC con consejos avanzados</h2>
                    <p class="knowledge__paragraph">
                        Si eres un usuario experimentado, aquí tienes algunos temas técnicos y configuraciones avanzadas para maximizar el rendimiento y la eficiencia de tu sistema:
                    </p>
                    <ul>
                        <li>
                            <strong>Undervolting</strong>: Reduce el voltaje de tu CPU o GPU para disminuir temperaturas y consumo energético sin perder rendimiento. Utiliza herramientas como ThrottleStop o MSI Afterburner para lograrlo.
                            <a href="https://www.google.com/search?q=undervolting+CPU+GPU" target="_blank">Guía sobre undervolting</a>
                        </li>
                        <li>
                            <strong>RAID Configurations</strong>: Configura discos en RAID 0 para mayor velocidad o en RAID 1 para redundancia de datos. Es ideal para servidores o estaciones de trabajo de alto rendimiento.
                            <a href="https://www.google.com/search?q=configuración+RAID+0+y+1" target="_blank">Más sobre configuraciones RAID</a>
                        </li>
                        <li>
                            <strong>Optimización del flujo de aire</strong>: Diseña un esquema de ventilación eficiente para maximizar el enfriamiento. Usa ventiladores de presión estática para radiadores y de alto flujo para ventilación general.
                            <a href="https://www.google.com/search?q=diseño+de+flujo+de+aire+en+PC" target="_blank">Más sobre flujo de aire</a>
                        </li>
                        <li>
                            <strong>Perfiles avanzados de memoria</strong>: Más allá de XMP o EXPO, ajusta manualmente los timings de la RAM para lograr una latencia más baja y un mejor rendimiento en tareas críticas.
                            <a href="https://www.google.com/search?q=ajustar+timings+RAM+manualmente" target="_blank">Ajustes avanzados de RAM</a>
                        </li>
                        <li>
                            <strong>Overclocking extremo</strong>: Experimenta con refrigeración líquida customizada o incluso enfriamiento por nitrógeno para llevar tu CPU/GPU a sus límites. Utiliza benchmarks como Cinebench o 3DMark para validar la estabilidad.
                            <a href="https://www.google.com/search?q=overclocking+extremo" target="_blank">Guía sobre overclocking extremo</a>
                        </li>
                        <li>
                            <strong>Gestión avanzada de energía</strong>: Configura opciones de ahorro energético en la BIOS o desde el sistema operativo para equilibrar rendimiento y eficiencia en estaciones de trabajo.
                            <a href="https://www.google.com/search?q=configuración+avanzada+de+energía+en+PC" target="_blank">Optimiza el consumo de energía</a>
                        </li>
                        <li>
                            <strong>Creación de máquinas virtuales</strong>: Usa software como VMware Workstation o VirtualBox para ejecutar múltiples sistemas operativos en tu PC. Es ideal para pruebas de software o simulaciones.
                            <a href="https://www.google.com/search?q=crear+máquinas+virtuales+en+PC" target="_blank">Aprende sobre máquinas virtuales</a>
                        </li>
                        <li>
                            <strong>Configuraciones de red avanzadas</strong>: Configura VLANs, Quality of Service (QoS), y un servidor NAS para optimizar el rendimiento de tu red local y compartir recursos entre dispositivos.
                            <a href="https://www.google.com/search?q=QoS+y+configuración+de+VLANs" target="_blank">Configura tu red avanzada</a>
                        </li>
                    </ul>
                    <p class="knowledge__paragraph">
                        Estas configuraciones y ajustes avanzados te ayudarán a aprovechar al máximo tu hardware y personalizar tu sistema para tareas específicas de alto rendimiento.
                    </p>
                </div>

                <figure class="knowledge__picture">
                    <img src="../../public/assets/images/overclock.png" class="knowledge__img" alt="Consejos técnicos avanzados para PC">
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
                Pérez, Luis Angel Martinez Ponce de Leon, Osvaldo Yamil Juárez Reyes, Gustavo Castañeda Peña & Iker Gael Torres Hernandez .
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