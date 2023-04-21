<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'dwwm2020-1' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:8888' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'w|>p1Ss-.RDYHjfn=OMSWl~z/Ji.c=xH@M<%}uX:,5)h@QaD@5B[bgWsK!VGbMtr' );
define( 'SECURE_AUTH_KEY',  'kX7nPmo4b^^%H_SThd(F 3vE_2)dt>(+D]q?*.?*u~NL}qqkKnJy`#t@Dc5U=Mex' );
define( 'LOGGED_IN_KEY',    'SzU@8Yz8}5K88@_=:ev]$3!L(TG(Bm.fzdIf06>%59kn0.Qr{_%;!Y<qpys9R*PH' );
define( 'NONCE_KEY',        'c0@Y;T&Fof;HB14s5%?aK>NAZ8&+l_[/sbe/QjxO6N{L/.D[}y^0%fdkj48+<q+v' );
define( 'AUTH_SALT',        'J6[o+9^)P)<hHrxPy8G<X,K-1SC^l~;#z&k.l2dbG6-8Y{5=3r%QfN^x5q l324(' );
define( 'SECURE_AUTH_SALT', '-7q:W?:haNB`q0/fTBdxJn65p2ia^]!lIouYfP`YpFt$a^AsmrPA rXwiwvsL`;9' );
define( 'LOGGED_IN_SALT',   '%)+b#!!Dy$q s-|BXSj3+pGo.hyjXX])!@Y-J-U`:StG7rvVHT~XlP,r8Ad0+ &;' );
define( 'NONCE_SALT',       'Z>FW@]{GxFyUfHj}B.$=.O[xAY @QY]-z7t dEad_4( lW0pWo>F:4m:qP+V<dw<' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'mm_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
