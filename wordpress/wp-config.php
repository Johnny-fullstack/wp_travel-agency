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
define( 'DB_NAME', 'bdd_travel_agency' );
/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );
/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );
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
define( 'AUTH_KEY',         ' ~%@>t?z)fzf<<v!en=B+$aV?=c$mKV@wOtQclEq[t]%M!=zcL0]NE?>_i=2BC){' );
define( 'SECURE_AUTH_KEY',  '`{pjzMpjoFpX[BKI^my%=;as.3wu6%P%}&9Q[?vQLdtjA3aQ&o7FDKsV +:^I-.D' );
define( 'LOGGED_IN_KEY',    'Aty>TX{K89N?Yq!Em6&2Zlh4+dJOD;2lbBd(&~@X;Q{$e*IN<.eJ8e;R,?=+_dA0' );
define( 'NONCE_KEY',        'pyO%9mh^tC:)n3E}-wtHE%o;7%.UTYc.rR]WL9 ^cUs2x)T{PrW7I)fzvBSah&4m' );
define( 'AUTH_SALT',        'oM!I?q0YvVs* hrm8Y23K%sQ,ERE~min2,3gs|--V|`eW}[u( &*c1a{j-1$wU&z' );
define( 'SECURE_AUTH_SALT', '3P, j$ikSa<lc@J}}0F9*>|l.5P,(>q`1oV#}q:EDQ?=:72k4kn>VDrtj(=4c7eE' );
define( 'LOGGED_IN_SALT',   'UZ*:<Ao}={q,FvIC!c(|`<vWM?tj2HNI.)6m>tL5)m*rXt~X$lSd(bKpQ h%rKcy' );
define( 'NONCE_SALT',       'Osmq;DK.EI&V [e~7cOt0Vq.W.lJ=FzTEU&1n]c|^L^v*2Izg8E=R|N6RZi7NyKd' );
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
