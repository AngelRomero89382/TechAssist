-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 20, 2024 at 11:29 PM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u409226135_tech_assist`
--

-- --------------------------------------------------------

--
-- Table structure for table `historial_usuarios`
--

CREATE TABLE `historial_usuarios` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `tipo_cambio` enum('login','logout','registro','modificacion','eliminacion','intento-eliminacion') NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `estado_sesion` enum('Activa','Cerrada','Eliminada') DEFAULT 'Cerrada',
  `fecha_cambio` timestamp NULL DEFAULT current_timestamp(),
  `dispositivo` varchar(255) DEFAULT NULL,
  `navegador` varchar(255) DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `historial_usuarios`
--

INSERT INTO `historial_usuarios` (`id`, `usuario_id`, `tipo_cambio`, `descripcion`, `estado_sesion`, `fecha_cambio`, `dispositivo`, `navegador`, `ip_address`) VALUES
(1, 1, 'registro', 'Registro nuevo usuario - Nivel: 2', 'Cerrada', '2024-11-20 07:32:13', NULL, NULL, NULL),
(2, 1, 'login', 'Inicio de sesion - Exitoso', 'Activa', '2024-11-20 07:32:26', 'PC', 'Google Chrome', NULL),
(3, 1, 'login', 'Inicio de sesion - Exitoso', 'Activa', '2024-11-20 07:33:17', 'Móvil', 'Google Chrome', NULL),
(4, 1, 'login', 'Cookie de sesión permanente creada', 'Activa', '2024-11-20 07:34:45', 'Móvil', 'Google Chrome', NULL),
(5, 1, 'login', 'Inicio de sesion - Exitoso', 'Activa', '2024-11-20 07:34:45', 'Móvil', 'Google Chrome', NULL),
(6, 1, 'login', 'Inicio de sesion - Exitoso', 'Activa', '2024-11-20 07:39:32', 'Móvil', 'Google Chrome', NULL),
(7, 1, 'logout', 'Cierre de sesión', 'Cerrada', '2024-11-20 08:23:31', 'PC', 'Google Chrome', NULL),
(8, 1, 'login', 'Inicio de sesion - Exitoso', 'Activa', '2024-11-20 08:24:07', 'PC', 'Google Chrome', NULL),
(9, 1, 'login', 'Inicio de sesion - Exitoso', 'Activa', '2024-11-20 13:36:13', 'PC', 'Google Chrome', NULL),
(10, 1, 'logout', 'Cierre de sesión', 'Cerrada', '2024-11-20 13:37:35', 'Móvil', 'Google Chrome', NULL),
(11, 1, 'login', 'Cookie de sesión permanente creada', 'Activa', '2024-11-20 13:38:25', 'PC', 'Google Chrome', NULL),
(12, 1, 'login', 'Inicio de sesion - Exitoso', 'Activa', '2024-11-20 13:38:25', 'PC', 'Google Chrome', NULL),
(13, 1, 'login', 'Inicio de sesion - Exitoso', 'Activa', '2024-11-20 13:39:35', 'PC', 'Google Chrome', NULL),
(14, 1, 'login', 'Inicio de sesion - Exitoso', 'Activa', '2024-11-20 13:40:39', 'PC', 'Google Chrome', NULL),
(15, 1, 'logout', 'Cierre de sesión', 'Cerrada', '2024-11-20 13:41:23', 'PC', 'Google Chrome', NULL),
(16, 1, 'login', 'Cookie de sesión permanente creada', 'Activa', '2024-11-20 13:41:40', 'PC', 'Google Chrome', NULL),
(17, 1, 'login', 'Inicio de sesion - Exitoso', 'Activa', '2024-11-20 13:41:40', 'PC', 'Google Chrome', NULL),
(18, 1, 'login', 'Inicio de sesion - Exitoso', 'Activa', '2024-11-20 13:42:18', 'PC', 'Google Chrome', NULL),
(19, 1, 'login', 'Cookie de sesión permanente creada', 'Activa', '2024-11-20 13:42:53', 'PC', 'Google Chrome', NULL),
(20, 1, 'login', 'Inicio de sesion - Exitoso', 'Activa', '2024-11-20 13:42:53', 'PC', 'Google Chrome', NULL),
(21, 1, 'logout', 'Cierre de sesión', 'Cerrada', '2024-11-20 13:43:32', 'PC', 'Google Chrome', NULL),
(22, 1, 'login', 'Inicio de sesion - Exitoso', 'Activa', '2024-11-20 13:43:49', 'PC', 'Google Chrome', NULL),
(23, 1, 'login', 'Cookie de sesión permanente creada', 'Activa', '2024-11-20 13:44:27', 'PC', 'Google Chrome', NULL),
(24, 1, 'login', 'Inicio de sesion - Exitoso', 'Activa', '2024-11-20 13:44:27', 'PC', 'Google Chrome', NULL),
(25, 1, 'login', 'Inicio de sesion - Exitoso', 'Activa', '2024-11-20 15:38:18', 'PC', 'Google Chrome', NULL),
(26, 2, 'registro', 'Registro nuevo usuario - Nivel: 1', 'Cerrada', '2024-11-20 18:42:08', NULL, NULL, NULL),
(27, 2, 'login', 'Cookie de sesión permanente creada', 'Activa', '2024-11-20 18:42:36', 'PC', 'Google Chrome', NULL),
(28, 2, 'login', 'Inicio de sesion - Exitoso', 'Activa', '2024-11-20 18:42:36', 'PC', 'Google Chrome', NULL),
(29, 2, 'logout', 'Cierre de sesión', 'Cerrada', '2024-11-20 18:44:32', 'PC', 'Google Chrome', NULL),
(30, 1, 'login', 'Inicio de sesion - Exitoso', 'Activa', '2024-11-20 23:23:30', 'PC', 'Google Chrome', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tokens_sesion`
--

CREATE TABLE `tokens_sesion` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `activo` tinyint(1) DEFAULT 1,
  `fecha_expiracion` timestamp NULL DEFAULT NULL,
  `fecha_creacion` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tokens_sesion`
--

INSERT INTO `tokens_sesion` (`id`, `usuario_id`, `token`, `activo`, `fecha_expiracion`, `fecha_creacion`) VALUES
(1, 1, 'c30c2ab6c3c4b7a53f6942ed4ea70490b09609fb38c5175f71c37621cdfa1fbf', 1, '2025-11-20 07:34:45', '2024-11-20 07:34:45'),
(2, 1, '092a30fa4d568a07c2bd83795e437ca0270e0fa9f879df11d17af7acde2c2703', 1, '2025-11-20 07:35:19', '2024-11-20 07:35:19'),
(3, 1, '1930ddd7b14a4c6e9e4ace4a0e30631e5e8ebde5b7317550c45824e67a2e3186', 0, '2025-11-20 08:21:16', '2024-11-20 08:21:16'),
(4, 1, '351d037b07b06030a055bba10d8abb457912e1011ce831945e7f65d7a87188ad', 1, '2025-11-20 13:38:25', '2024-11-20 13:38:25'),
(5, 1, '5ba60e194b1002411e286b532d91ee051a235a2109c91e67aafc280d04ae21d0', 0, '2025-11-20 13:41:40', '2024-11-20 13:41:40'),
(6, 1, 'df1321e920eccd8ff99cca801af3e34f9796f3edcb5ff26593901c03e26dc356', 1, '2025-11-20 13:42:53', '2024-11-20 13:42:53'),
(7, 1, '08e84815f3ddb40764f9bb7f4542cbdbcfe099070fd1e0bf6297f80310ab71af', 1, '2025-11-20 13:43:08', '2024-11-20 13:43:08'),
(8, 1, 'cb1a316b7baddd4013a320953b69396264cb32cf4d249b2e208ebba2d23ba217', 0, '2025-11-20 13:43:27', '2024-11-20 13:43:27'),
(9, 1, '5119430b29edd8ecf47e45f60a9d84b6de271ac78020e23b4bc1f07875f8a32a', 1, '2025-11-20 13:44:27', '2024-11-20 13:44:27'),
(10, 1, '064413a62500df38fa3318ef63f75b0f27e4d227de96de1fb5bf5bb60a4fa7cf', 0, '2025-11-20 14:50:07', '2024-11-20 14:50:07'),
(11, 2, '409399d11e7c2b12694c3a6b8f546f6347515f90eb7f187b8b7abfe57dadc326', 0, '2025-11-20 18:42:36', '2024-11-20 18:42:36');

--
-- Triggers `tokens_sesion`
--
DELIMITER $$
CREATE TRIGGER `before_token_insert` BEFORE INSERT ON `tokens_sesion` FOR EACH ROW BEGIN
    SET NEW.fecha_expiracion = DATE_ADD(NOW(), INTERVAL 1 YEAR);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nivel` tinyint(4) DEFAULT 1,
  `fecha_registro` timestamp NULL DEFAULT current_timestamp(),
  `ultima_sesion` timestamp NULL DEFAULT NULL,
  `estado_sesion` enum('Activa','Cerrada','Eliminada') DEFAULT 'Cerrada'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `email`, `nivel`, `fecha_registro`, `ultima_sesion`, `estado_sesion`) VALUES
(1, 'a', 'TechAssist@hotmail.com', 2, '2024-11-20 07:32:13', '2024-11-20 23:23:30', 'Activa'),
(2, 'Luis12007', 'anhell620@gmail.com', 1, '2024-11-20 18:42:08', '2024-11-20 18:42:36', 'Cerrada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `historial_usuarios`
--
ALTER TABLE `historial_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_historial_usuario` (`usuario_id`),
  ADD KEY `idx_historial_fecha` (`fecha_cambio`);

--
-- Indexes for table `tokens_sesion`
--
ALTER TABLE `tokens_sesion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_tokens_usuario` (`usuario_id`),
  ADD KEY `idx_tokens_activos` (`activo`,`fecha_expiracion`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `idx_user_email` (`email`),
  ADD KEY `idx_user_status` (`estado_sesion`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `historial_usuarios`
--
ALTER TABLE `historial_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tokens_sesion`
--
ALTER TABLE `tokens_sesion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `historial_usuarios`
--
ALTER TABLE `historial_usuarios`
  ADD CONSTRAINT `historial_usuarios_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tokens_sesion`
--
ALTER TABLE `tokens_sesion`
  ADD CONSTRAINT `tokens_sesion_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`u409226135_TechAssistRoot`@`127.0.0.1` EVENT `clean_expired_tokens` ON SCHEDULE EVERY 1 DAY STARTS '2024-11-20 07:30:22' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN
    DELETE FROM tokens_sesion 
    WHERE fecha_expiracion < NOW() OR activo = FALSE;
END$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
