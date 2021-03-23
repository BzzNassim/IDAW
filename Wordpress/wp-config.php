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
define( 'DB_NAME', 'nassim_bouaziz' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Ym:2b<4QeSe,(T2Y5TXLJ/%MErYS|T$FXIWoP#_e6doP4i-0>U<R#(#H4ArEQ&bt' );
define( 'SECURE_AUTH_KEY',  ')pvH{+,b_^Jtu=%]3.(+<V5xo;({r=[k<1K:8C_IC <}s]i A8QE%BsZ~IA$L|HR' );
define( 'LOGGED_IN_KEY',    'b<+%?4cFJ0=7m_fv%lrDwD<#&~n&|$oN0FKl$g|}P7E06r;9=,i 3) B<@6oQn*]' );
define( 'NONCE_KEY',        'OK`l@&^UZ82z!&WpW 0DQ_J>J+{VK!J2~E,9t4Ru?Nrr/6IFz/.uGB9:46q:f.Xa' );
define( 'AUTH_SALT',        'XPzu w=DHOn{=r*V^YN]#|$_H?t9q}wqV: &>[Ny5pQO`LSg&p/cXVg2UlaO(&M(' );
define( 'SECURE_AUTH_SALT', 'V5,LN5Z!I5SZ9NrKB,B4Bq-J|[ldj,.FhOEgPcHl+-Ghm/U*1]f_BC]oZbT?M~Cb' );
define( 'LOGGED_IN_SALT',   '*?1CD& &J6(6VbasKu%;7/ihEz3nl~?L,Eo-J}+Sw,s9!WR/rr^Mm~ ^WiX}pvbL' );
define( 'NONCE_SALT',       '?H6V,_G60Ya[ *Vr}u{D >U3qvbGK4ARxro;af7vD]rX!N|^17A 9h+<UG3#5<PA' );
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
