<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'elodie');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Y[CCyl|j!36*|f,B3F%QX0Ik(KE|9Q>=8JyS)[UnsR`jaIPD<0Ydt}=sNj[4%^JM');
define('SECURE_AUTH_KEY',  '9y+6U++ZTjt|{nr!SBmjy4dawiJ_|n5VgB^&+Y7/=GSv3B=bAl|+h>5<h`T*(`1S');
define('LOGGED_IN_KEY',    'kZW$Z~=>GI<<[FBXch?0b/ICr*h@V(rl6i5/>S{uK{[/Q^)6%_&oZ>FR?`dJ4L[=');
define('NONCE_KEY',        'vS&>$> H[RB:seITo)#{|vJRScFC1&S%2mvl.}WpBy|6(o|S%vL<>U Z03iZl]g~');
define('AUTH_SALT',        ')UdX3Xsk*i-$B1O}?tPR2F4TLR&l5vR~j*|VBn}&lG#<cyJUT1I|?x)eIUn5E%gI');
define('SECURE_AUTH_SALT', 'T4cNsuT%B4Sduu:z}`[y]Gt+jn^[}4s~D,-AYm[zlU[bQrxNBH}p4|->lET>8v&}');
define('LOGGED_IN_SALT',   '!2rB0qW1q2IlY_/+7F~}Q.P4I-O:7.hCnHkn,l)SS4E#g|.W>,iE`@kHa#*,R]SI');
define('NONCE_SALT',       'i1UAsCf0gT-b9~Y&V;G4m<~/?% +ZJ#agK*wvX+Yojjsg!!NFzVn9Tn&*oq]~nA+');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');