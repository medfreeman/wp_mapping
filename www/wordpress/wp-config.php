<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// define('WP_CACHE', false); //Added by WP-Cache Manager
// define( 'WPCACHEHOME', '/www/wordpress/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */

define( 'WPDB_DRIVER', 'pdo_mysql' );

define( 'DB_NAME', 'map_wp_sites' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'map_db_usr_777' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'chEcreTRU9ajuCHu' );

/** Adresse de l'hébergement MySQL. */
define( 'DB_HOST', 'mariadb' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8' );

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@gI|{/=u<U@dLhn/LU8iFUZO#gY+*ryFI-+hx>Iu~?CJa_PU8J!;Y{+&lydK5Eu$'); 
define('SECURE_AUTH_KEY',  '7K.pZviG8AG263IP1% -4PfJg:jVcMP`l3%D(}&Ggdf@|A)|uYZfJ,Q/-,dUb<yW'); 
define('LOGGED_IN_KEY',    '.UvQ,+O6>3o$(=-{cRJ)MOKYU|c{BbQVt--Pds]`Qj$a}Wy;/p|3A|O|x$=V7&Xu'); 
define('NONCE_KEY',        'uD!m~Xm`;z%bbd9(t}QNO/]f=UFd&oi2ZagG{J#Qe@4.qA[.[8[id|lw|Saow?%.'); 
define('AUTH_SALT',        't7E?j+-~5miL?e:OQ}2]YHrRO+IPl))5k_tc-|(G)h<c^Z&szc=yOD|N~*fn_.n{'); 
define('SECURE_AUTH_SALT', '13j-U+`]Btj)){bC.fajw {V{kStYNzYJ!-0x)F`$E]i=,Skk`Ql;)Yj9#26~f<e'); 
define('LOGGED_IN_SALT',   '~lyT+z[@OqWqK,;ns?GD7#&/JjT_bC08|25X|.jgXGWvsQfwI(bLf~O 8I J+[eI'); 
define('NONCE_SALT',       '!eDb|L7l p[}KL7G:+AuuOG;@sE~6ZBxFhTOo8m8Cl6xuQv?2UpFFa 8q.*]90/U'); 
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'map_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define ('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

define( 'WP_CACHE', false );

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'www.mappingfestival.com' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

define('ADMIN_COOKIE_PATH', '/');
/*define('COOKIE_DOMAIN', '');*/
define('COOKIEPATH', '');
define('SITECOOKIEPATH', '');

define('FORCE_SSL_ADMIN', true);
define('FORCE_SSL_LOGIN', true);
if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
       $_SERVER['HTTPS']='on';

//echo $_SERVER['REQUEST_URI'];
//die();

define('WPMU_ACCEL_REDIRECT', true);
/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
