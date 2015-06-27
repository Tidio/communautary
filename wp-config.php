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
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '=Ig8z)r30jp9C(|%(f`|+9c[]L_j{Szmv[$Gr;mmF+zcs||E_{%lxQ$pcus5r$bE');
define('SECURE_AUTH_KEY',  '=`BBg b@c~w/YB IzqpTQz=V}-r7RTppg04Sr~ *fHC(LBP2vw C?nuek0l10g&U');
define('LOGGED_IN_KEY',    '.7JT2-UMPZiV,WYNplJ<I[qqP-/P<~5Aa+91#{IQ$q]gJVSXB~xY,;oM{T5B8lHr');
define('NONCE_KEY',        'Roew,iwAA,o9bY*q4`e}9mmpQsS@%.zI+<u.X$EW$vE|#t:)`rpw],goy,9-?FgO');
define('AUTH_SALT',        'grW;{&j[Byx;k3-8xX5[jR|A@p0rDE8hAT^cz`QWtghs]:EX+f8SoH0RhHHq6%@5');
define('SECURE_AUTH_SALT', ';sbIxEMJYie{i>4L+~*csrq`+niWsrl+:yn&up=gYT|(;[qpr8n|Jnc@@c+nV$uf');
define('LOGGED_IN_SALT',   'U?86~?ACB6%?LW|xk5DW7Mkod{r<Li<DJz1ZRrU<Jy8]0cq2d-HE[sLl,##)P?jB');
define('NONCE_SALT',       'NDQHE8b/2KnSw)@>8:.Rsyp%=VxowDtQm]-(0|^$@nQ}hr1/{;T%mZ@fu+IjCwOR');
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