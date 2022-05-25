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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'database' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
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
define( 'AUTH_KEY',         '3cmvhMr0vB~mw}K?`fcpB!NR]!5iUv..LQN=_Dhc[k(*>/V(x;Rr|IerB/ru{r*z' );
define( 'SECURE_AUTH_KEY',  '[GoYCEL_eOVzTDkE*ILP);%=}__=Es!b%MNZWTzl!ekdp0cI4@cqr2%V[`< BAcC' );
define( 'LOGGED_IN_KEY',    '<x)N2bIn1u);?UuWW3P^FN*7*AlW5Lkx4)0,pG+rrM0Ld8^6GCs[VsSfRR#/@}64' );
define( 'NONCE_KEY',        '*iaqTzg[J42lQI+A:U!]Fc}6m.gt|(+Kx_Z1-;,L7Eo5O]9Vkf)+{a05r(qwE_!v' );
define( 'AUTH_SALT',        '-=cxw[4!TKRb&mq~aS`Gwa|$nLbV6zw;DgOLEx.Bo8R0#D$k>=~D{K0]pzCYrK!]' );
define( 'SECURE_AUTH_SALT', 'v=q =$wp{-Zjvl877^-3uRA1P-lp=FJ<n-UOa!*Z)xC?f1^{3w.BLZB47?aGdPff' );
define( 'LOGGED_IN_SALT',   'M,!qRY5:Lv.aH8@>o.K)9Cw/Wvd.1$9+y$;hH!PxU{6u4-_Pp<|)a}N*#F[-`qor' );
define( 'NONCE_SALT',       '@^Kmgop4nFTcp9IgnGQn0KNiN4riMS@f5T!^En_Mpc:4k^]f_GL5e+k,x` Y}.R|' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
