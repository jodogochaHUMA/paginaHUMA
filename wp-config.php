<?php

// BEGIN Solid Security - No modifiques ni borres esta línea
// Solid Security Config Details: 2
define( 'FORCE_SSL_ADMIN', true ); // Redirigir todas las solicitud de páginas HTTP a HTTPS - Seguridad > Ajustes > Forzar SSL
define( 'DISALLOW_FILE_EDIT', true ); // Desactivar editor de archivos - Seguridad > Ajustes > Ajustes WordPress > Editor de archivos
// END Solid Security - No modifiques ni borres esta línea

define( 'WP_CACHE', false ); // Boost Cache Plugin

define( 'ITSEC_ENCRYPTION_KEY', 'L3VlYFJwR1VGUmoxW0A5N0ZUWCFeL1hSd11icFhlM3RxQlNvcEJ0cUM7T1QveFYrK3lxdCMjczFBWz1tez0pMg==' );

/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'humanidades_db');
/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');
/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');
/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');
/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');
/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');
define('WP_ALLOW_REPAIR', true);

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'EjESDfODe&&J}I2ew~KSy{X`IP;nlpx&^$ol8rTG|0HSYa}UO-C&`MGvBr|X!if|');
define('SECURE_AUTH_KEY', 'ed_;Z(/#L0 F01R1bS!+|U ueHbwm=CLw2Dj^yWZfF_bWlB|ewYFZEa1P+JAAy,M');
define('LOGGED_IN_KEY', '.JH3TR=S06OXw^2EZvi{]o|443fFmVqsi=gt3tA9YGfj2Ui8m-%ZDEo.RTn~LT>V');
define('NONCE_KEY', '}9[na7/>vZkE@U_O%!>RO%xEaGe<U9iA>]7E$y-K,Vsw;kWZ/}gWGl{Or/X+`kFS');
define('AUTH_SALT', 'ElN&W,64<bUE<n@i|q*:g[w7?+CS*q(Prcp9WX&u){Xraxi2HD$@HCGq;etm`2Iy');
define('SECURE_AUTH_SALT', '_}~weix@u}-?=8<fDVREb[`oL^P$A,SU)RaICt|A_T9@c9yF u=(yviF m*vxy[h');
define('LOGGED_IN_SALT', 'zqHa(U}Wanl@ef,|5wA/s37<}A(h/cQD-,NO5#kP,<?4hA47YwC.Cm~MMBfcPkF`');
define('NONCE_SALT', 'W X,?F>cj0 q3Z98Vft7Cd{haXs2.@ 65O`Qh`chPj*n,zqLm3/*ENqew+LMzV9r');
/**#@-*/
/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'v3_';
/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);
/* ¡Eso es todo, deja de editar! Feliz blogging */
/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD', 'direct');

define('WP_HTTP_BLOCK_EXTERNAL', true);
define('WP_ACCESSIBLE_HOSTS', 'api.wordpress.org');
