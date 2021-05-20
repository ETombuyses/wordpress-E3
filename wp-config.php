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
define( 'DB_NAME', 'wordpress_WEB3' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'W%d4F{.s+[?GG(L@{P++O(*FQ}7/F&{Rt^~z6ghVU}<oZZQjv5vpuZ=@?lmeO^aQ' );
define( 'SECURE_AUTH_KEY',  'T7#8*Rb;{NJqvQXi0W4$`T![t :D4O|h(Vo%>!W-}%iO;[yq8_v}?S4$je(g;ZMQ' );
define( 'LOGGED_IN_KEY',    '=J[~QCvf<=VlME(#bjLAhx]v_<IaZTDN(Er{fWGD8F%~%k`0zVxc~s6]/v/ s}s~' );
define( 'NONCE_KEY',        '3^tOJM/Uo@5)Q>k{w5KtI-d7sh3VAuWApK);=86^dgw&pClhoBX@qq_ChL3m>3cI' );
define( 'AUTH_SALT',        'P*tt`{}rtgY+,(7OFU>7-$)1R&+J&t)m(CC6M.b&xg*{bCgQC-3J)6a0^^q_v[?E' );
define( 'SECURE_AUTH_SALT', '{E$d1i{FJN y0g+,)f?d,yo3r>n.@-5Z?og;9z1{ _:)}CJS)oFg#ZYT_L.9@8]k' );
define( 'LOGGED_IN_SALT',   'dnsU$ydjR#qx4B@zk{KXvsSzn`A30WX.o2iwa^_^9>qJi46p#Y+~Ea4I?|v]B[V=' );
define( 'NONCE_SALT',       ' 5Zd;<d06NnGSThZekq4On%j-8Tv(#EK8] q|V,H./CsJiHFLO0fKI1bIsAa{Cy}' );
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