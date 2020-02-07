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
define( 'DB_NAME', 'Jarditou_wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ' CjdA}A]S J`/ehIGb9u)s&<Fs@&[YD14?t|}{Anj466~g^TuZN%/NZs%* qnl W' );
define( 'SECURE_AUTH_KEY',  '|`b[!x`j]um*QfSWk>BXiXy+3NSra6@KW^o 7_wq_,(VYI5l9 DHUELq_0x$mK8D' );
define( 'LOGGED_IN_KEY',    '/:Ic{dF^?{/5zt>ij78e5A/fa!t9/@.,fvs,o3#ovpcyeVW% q<+*wI2sF<+J=@Y' );
define( 'NONCE_KEY',        'Szs4i(<%&=D<9!S1A&Y^n0&QU8gkC=Z&+-K^[Xg)^TuL:51B)hx.)T=r]%)6CEuq' );
define( 'AUTH_SALT',        'ph` EG+7$P]fsyD]cn}%[NtMxy:v/#`~38QWuGaA%G)9w*6>W7w?&Elx 0:j8_uZ' );
define( 'SECURE_AUTH_SALT', '._7@{Ss*D>+KhkK*;-3K6c/RT86DAffYMiL8z:KIM#N36Va({#7uD!C;j!C>x2q?' );
define( 'LOGGED_IN_SALT',   'z73MNaW+^dc@)LjzO(Jf^8)e&t2sZ:sbD!r8o<up`(l052gqt!`n]vP4#}S0H)A[' );
define( 'NONCE_SALT',       'D])ulyE@fPS$#F1+A#Vj!]1J$c-+1VCUx,nsl!<k!2@$VJOPrcKdWCS06spTdrh4' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'arf_';

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
