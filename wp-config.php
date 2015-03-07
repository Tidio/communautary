<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'communautary');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '[.!yq Q]M%*z.oEG|.-4z $kL-F}71iBB1j$.eOwf}cc6E|5-^kJ+3cJe!gGXNO;');
define('SECURE_AUTH_KEY',  'tS;?}z!u+@$,e(claQDV}QDHd;vWJ62uDhdVTjw1gqo<y}L;!hT|v4.f.]qtq:R6');
define('LOGGED_IN_KEY',    'kP{} +<*Bj-3r|qZF}l7-X3tR-+B|_@XZ/t.YV|.<Y83#Mz8-y},Gs*BG1qdeR}t');
define('NONCE_KEY',        '`[M+|T/m1nz.=Fgb6#:u0||rj i*Y2ne(zalk~PB-yx|}nqu|b`@KEPKGI1a5+@d');
define('AUTH_SALT',        'y8:sqXb#^*uQFyK^v4~:hYw,:gC@[RvK+6oxCp>oj9MRp6+)$`.#Rl-o7j|tjS:y');
define('SECURE_AUTH_SALT', 'A`gv!9G2bt45`c%l1vY92KG&;e>kFf#%CDz^<z>cY9y[}n^>~2;Q1p.R~:kSpf-@');
define('LOGGED_IN_SALT',   '>B4E{YppC2AItPjun[ycRa33zBsnuMr?e~4DUg7rtV/dAW1x5]eC$&0^hnfTPWb:');
define('NONCE_SALT',       '[a->wI3QLiu1-3KNSM5&>;9; GO4Dj$uLr3K*g{MI,2u*s!oiX;SZq @a|Kc)@0X');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'co_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');