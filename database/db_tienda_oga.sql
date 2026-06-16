-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               12.2.2-MariaDB - MariaDB Server
-- Server OS:                    Win64
-- HeidiSQL Version:             12.14.0.7165
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table tienda_oga.cache: ~2 rows (approximately)
INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
	('laravel-cache-admin@oga.com|127.0.0.1', 'i:1;', 1781486473),
	('laravel-cache-admin@oga.com|127.0.0.1:timer', 'i:1781486473;', 1781486473);

-- Dumping data for table tienda_oga.cache_locks: ~0 rows (approximately)

-- Dumping data for table tienda_oga.categorias: ~4 rows (approximately)
INSERT INTO `categorias` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
	(1, 'seguridad', NULL, NULL),
	(2, 'hogar', NULL, NULL),
	(3, 'climatizacion', NULL, NULL),
	(4, 'televisores', NULL, NULL);

-- Dumping data for table tienda_oga.consultas: ~2 rows (approximately)
INSERT INTO `consultas` (`id`, `nombre`, `email`, `telefono`, `mensaje`, `created_at`, `updated_at`) VALUES
	(1, 'Christian', 'cassgamer320@gmail.com', '42342', 'HOLAAAAAAaa', '2026-06-16 07:21:33', '2026-06-16 07:21:33'),
	(3, 'Christian', 'cassgamer320@gmail.com', '373293782893', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjj', '2026-06-16 08:03:01', '2026-06-16 08:03:01');

-- Dumping data for table tienda_oga.failed_jobs: ~0 rows (approximately)

-- Dumping data for table tienda_oga.job_batches: ~0 rows (approximately)

-- Dumping data for table tienda_oga.jobs: ~0 rows (approximately)

-- Dumping data for table tienda_oga.migrations: ~10 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2026_05_10_010420_create_categorias_table', 1),
	(5, '2026_05_10_010430_create_productos_table', 1),
	(6, '2026_05_11_025438_add_rol_to_users_table', 1),
	(7, '2026_05_11_035243_create_consultas_table', 1),
	(8, '2026_06_14_225640_add_porcentaje_descuento_to_productos_table', 1),
	(9, '2026_06_14_230000_create_pedidos_table', 1),
	(10, '2026_06_15_001411_create_pedido_producto_table', 1),
	(11, '2026_06_16_025819_create_reseñas_table', 2),
	(12, '2026_06_16_000000_create_favoritos_table', 3);

-- Dumping data for table tienda_oga.password_reset_tokens: ~0 rows (approximately)

-- Dumping data for table tienda_oga.pedido_producto: ~3 rows (approximately)
INSERT INTO `pedido_producto` (`id`, `pedido_id`, `producto_id`, `cantidad`, `precio_unitario`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 1, 60000.00, '2026-06-15 04:20:04', '2026-06-15 04:20:04'),
	(2, 2, 2, 1, 45000.00, '2026-06-15 21:14:24', '2026-06-15 21:14:24'),
	(3, 3, 2, 1, 45000.00, '2026-06-16 05:11:27', '2026-06-16 05:11:27'),
	(4, 4, 2, 3, 45000.00, '2026-06-16 05:23:03', '2026-06-16 05:23:03'),
	(5, 5, 2, 2, 45000.00, '2026-06-16 06:05:48', '2026-06-16 06:05:48'),
	(6, 6, 2, 1, 45000.00, '2026-06-16 07:13:41', '2026-06-16 07:13:41'),
	(7, 7, 2, 1, 45000.00, '2026-06-16 09:24:16', '2026-06-16 09:24:16'),
	(8, 8, 2, 6, 45000.00, '2026-06-16 09:27:04', '2026-06-16 09:27:04'),
	(9, 9, 2, 1, 45000.00, '2026-06-16 09:50:07', '2026-06-16 09:50:07'),
	(10, 10, 1, 1, 60000.00, '2026-06-16 10:19:13', '2026-06-16 10:19:13');

-- Dumping data for table tienda_oga.pedidos: ~3 rows (approximately)
INSERT INTO `pedidos` (`id`, `user_id`, `total`, `metodo_pago`, `estado`, `created_at`, `updated_at`) VALUES
	(1, 2, 60000.00, 'tarjeta', 'pagado', '2026-06-15 04:20:04', '2026-06-15 04:20:04'),
	(2, 1, 45000.00, 'efectivo', 'pagado', '2026-06-15 21:14:24', '2026-06-15 21:14:24'),
	(3, 1, 45000.00, 'efectivo', 'pagado', '2026-06-16 05:11:27', '2026-06-16 05:11:27'),
	(4, 1, 135000.00, 'efectivo', 'pagado', '2026-06-16 05:23:03', '2026-06-16 05:23:03'),
	(5, 2, 90000.00, 'efectivo', 'pagado', '2026-06-16 06:05:48', '2026-06-16 06:05:48'),
	(6, 3, 45000.00, 'efectivo', 'pagado', '2026-06-16 07:13:41', '2026-06-16 07:13:41'),
	(7, 3, 45000.00, 'efectivo', 'pagado', '2026-06-16 09:24:16', '2026-06-16 09:24:16'),
	(8, 3, 270000.00, 'efectivo', 'pagado', '2026-06-16 09:27:04', '2026-06-16 09:27:04'),
	(9, 4, 45000.00, 'efectivo', 'pagado', '2026-06-16 09:50:07', '2026-06-16 09:50:07'),
	(10, 1, 60000.00, 'efectivo', 'pagado', '2026-06-16 10:19:13', '2026-06-16 10:19:13');

-- Dumping data for table tienda_oga.productos: ~2 rows (approximately)
INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `porcentaje_descuento`, `stock`, `imagen`, `categoria_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'Camara LUO e126 Doble visor', 'Vision nocturna, etc etc', 60000.00, 25, 2, '1781485914_1781186691_seguridad-removebg-preview.png', 1, NULL, '2026-06-15 04:11:54', '2026-06-16 10:19:13'),
	(2, 'Camara LUO e107 Doble visor', 'Doble visor, vision nocturna, audio bidireccional', 45000.00, 25, 0, '1781486936_1781014845_camaraseguridade107-removebg-preview.png', 1, NULL, '2026-06-15 04:28:56', '2026-06-16 10:04:22');

-- Dumping data for table tienda_oga.sessions: ~3 rows (approximately)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('0v7gvZdiqbg00Jvq0DLiBfzQCvwljBcpiQhWM57s', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJyYWFKTElDQW5NNVUzRmlpRWwyUnhBU3c1VXlnTjVFU2cxaEtIbXJMIiwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJfcHJldmlvdXMiOnsidXJsIjoiaHR0cDpcL1wvcHJveWVjdG8tdGllbmRhLW9nYS50ZXN0XC9pbmljaW8iLCJyb3V0ZSI6ImluaWNpbyJ9LCJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI6MSwiYXV0aCI6eyJwYXNzd29yZF9jb25maXJtZWRfYXQiOjE3ODE1OTM0NTN9LCJjYXJyaXRvIjpbXX0=', 1781597730);

-- Dumping data for table tienda_oga.users: ~2 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `rol`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Christian Gomez', 'cassgamer320@gmail.com', 'admin', NULL, '$2y$12$mMoDuq2l8aTkQlVixdDGROcHpWkIaldG.C5pM51UwPlXRGGnLvJRq', 'tb8rAaIo6TnHMGZDWn8vGrnMPGNHiKUHI6Zldoj4aqnNpCDvcTqsdm2c2SpW', '2026-06-15 04:10:56', '2026-06-15 04:10:56'),
	(2, 'Agustina', 'agustina123@gmail.com', 'cliente', NULL, '$2y$12$HvP1BmFBbpCb.ViFwfqrYu2BIJFvY32my9W4Lfc3l6uF8QapPGFO.', NULL, '2026-06-15 04:12:14', '2026-06-15 04:12:14'),
	(3, 'Domingo Ibalo', 'domingo123@gmail.com', 'cliente', NULL, '$2y$12$jq2Ubr614W5HUTJ78j8eKOqMFG4GranyBXP8rqfCRnTaN5txoLnmy', NULL, '2026-06-16 06:22:40', '2026-06-16 06:22:40'),
	(4, 'Karen Ibalo', 'karen123@gmail.com', 'cliente', NULL, '$2y$12$jDo6UWzf350ABATd39S8NujVzKvWsbg3Aj59Xni3oEqUxaty8z0vq', NULL, '2026-06-16 09:31:24', '2026-06-16 09:31:24');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
