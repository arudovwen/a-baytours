<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'abaytour_wp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'abaytour_wp' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Richard2018' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ZN}umoRg{|?$B8d&|b7Q ^};hU3HhSM~]4lNjO?Q8Ojqo>n6@;s/G<YGCzUcHJEv' );
define( 'SECURE_AUTH_KEY',  'YU==QcCBj`mp=4uu$eQF/Gs/<nm{]m[+22H}q?;,+{+Z(gJhXnDx}RM?(iP&<u^x' );
define( 'LOGGED_IN_KEY',    'y5}ZHT+[d;YY!Bb9K%^gNYJz2_$eM?75fyt~;g;02R(9G8U O`&7o2II&`G3-0oK' );
define( 'NONCE_KEY',        'aWjusVg*58[ k.t YhhyB)PYn^o1NX`!i+#Cll:$1`D2c/4&!M+?Sgm&u3iW(h|x' );
define( 'AUTH_SALT',        'Te-HX;_C$yIk[1GXgy5o-7=Dt/g=_8MP|Esq{Yt4[a|L/Ow3POz#|bu`5.P!+, !' );
define( 'SECURE_AUTH_SALT', 'Vq4Z4omZlo%cxDdLDjjVU_yWs^F./b):8q vzkVo(Y/VO6PHU~:$RF(<t[l-HsPy' );
define( 'LOGGED_IN_SALT',   'G#02T&j?lD;-%kh:?Q.&I*W2,t]p-&V)RGS:6Izh)(1ub@mKbrZM!<w?]kxyT5K6' );
define( 'NONCE_SALT',       'U.K>K0!-V;X;t1[|1sjX`Arv-6TwZ@@|lFf^&dQ(;VR=zoNh*Npg./z]|v,3i|*O' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
