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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         'B(I=f!#ss?h_?Y<9f)uv|aO3#MYNqpGVr;Px7vY/q^AX+MMs|N{EYj~#}DHO%x6_' );
define( 'SECURE_AUTH_KEY',  'wMy8JWJHRCtWZdm;-oisP/! JuX&FQ{epWHgn(ZnK!R%CV8*R6E5%JutqM_LHOaM' );
define( 'LOGGED_IN_KEY',    'YRLJk,o#_op%jCc9xs+L7<,OaTk ]W|5:e_yd_<V C<wrg0:`g5On`D_/@-x|K<r' );
define( 'NONCE_KEY',        ';;a@0ZaNF^zC)cZk*o Xv^9f]*Z)Db*goiOwa-B1fxZ+JD3RjDl,DT*]@Q[vGKLv' );
define( 'AUTH_SALT',        'Y:sk-~Z<[pVQh@!dcF.:V!-W1k8 lI@2R80^]#|e7fh-[AKc9lHF<G%z4v:E1Q2`' );
define( 'SECURE_AUTH_SALT', '4.QCYiFhJfI+9]9Lc].PyyM_fQI5^Bl3*OMx11RA^xUa* a7:5Cvt21^5CYDTr~.' );
define( 'LOGGED_IN_SALT',   ']!RCgDy_*q/#pYeV~7;Id>0;Z<{>N}^0P1FGE1(@=0Ui|H:F[o~b%(S/One!po9:' );
define( 'NONCE_SALT',       'yzeVA>#e65OtiG_B34-Aq*(mtg,3[Xx;l s%-9=%JVNn(*[W5?+vy,JRwn|h^gQm' );
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
