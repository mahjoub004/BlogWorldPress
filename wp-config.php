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
define( 'DB_NAME', 'blog_wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'blog' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'blog' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '7@IlI?bmUxOt2eub.w:sY*|fQ.s6I;)@&V&.%PiQKc/Fd]ZNZ_sSIX-G[BxgmQ(z' );
define( 'SECURE_AUTH_KEY',  'C3_V^.Z3HYi@SRXC0S=A^cxKH~PGASmNnXYiD lsg4SlhX.{0A8^&>e.v&~hVmBl' );
define( 'LOGGED_IN_KEY',    'IQV#ijO]{IF=J:Y/$9Hx6=OF^1XZ $EJzG6$B#Y<iy8h4dN-[;Jf.]3Fp=6E4<z]' );
define( 'NONCE_KEY',        '*f (QO!ATd`,HI$sqB#N)>I/[XQmI~3`MjP3Q f4B^8rX@/U]C8h])o_(?QAC|Z6' );
define( 'AUTH_SALT',        'U(TLrjGQ pofM;$WT3k)BWJN<Q>mx;FP~U2z.[)Ur<rQGL21hj?m^%iaWz#O(5:~' );
define( 'SECURE_AUTH_SALT', 'Dm=F-5uYSl.`}GB{.LL|rXl:J[x.B86A8r``Elho_r==.O??2U$+]R=1$|v1uva}' );
define( 'LOGGED_IN_SALT',   'LW0l%%:qNiN(<%?_KhV}A@]PCtYzc<{1n/Vji[JKTZHJq(;{8]6NMS-/_Kt+*?9.' );
define( 'NONCE_SALT',       ';f>{D-%9gFX>=.#r7|}p7LOg[Za)uGl8qY.Z2hf.D7d;O7U_y^S@N]4@8}?Av4`X' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'blog_';

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
