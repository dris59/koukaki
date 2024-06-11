<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'koukaki' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=%sMUzc<Nn/,b&C$G%cugmF/uB;YoFUqv&a+0UQ`)GnSy`kuAimzpHC]Tc9rs46R' );
define( 'SECURE_AUTH_KEY',  '=3[cXgn@4)F%8X)~mM-=I{/0Y=5C =|^]^zuGjTPzeCD-R67++; EdfC ;^yo]e$' );
define( 'LOGGED_IN_KEY',    '%RjjORbOdIr;T$al8P5e^-[&~7+bS`P(bH@JIn)5:T Oql^D@lM[`>n7,GgbRw[/' );
define( 'NONCE_KEY',        '{1O73-ttHx@8r/(:q~Ijl3`IcXz`ZXY+cNPj+Y7*+lryr%@,2Ao4WQcV~$k2=FSZ' );
define( 'AUTH_SALT',        'XS]sXlt8{YnZSKuOS!6sQ&#8r4oLv_TG[~I^t{!1p3[3J2l:ZA>sG9.%PI8:*82|' );
define( 'SECURE_AUTH_SALT', 'Swse>8Hyr.3nc`a(!v7uWv>*Ht (qFY-f*d)F:%MkO:r~b<9U)]MoE*$T$qI$ UY' );
define( 'LOGGED_IN_SALT',   ',AzN`=^xj[6jNyRJzsN>Z9_iR.&QrX!__,wi_/-i~>jF1e@-6LF]q,IN,Ym}mg_:' );
define( 'NONCE_SALT',       ')F:E*f|P2scq1}V]k<6~ol(Hp<E)x|5=50QR@9}oP{Pw;U#K{Ok7Oc@9Bx]nX!E6' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
