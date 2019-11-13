<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'HUxidcoLcp4fstpMN9hcVzAAe6S5Ywy+GPb13deg+L2r5xsTHvIh669wYo1+MvPqEkSJNOg8o1g69uFUmN3OiA==');
define('SECURE_AUTH_KEY',  'YfncfUPIUv3PKJYSL1NbH3rjJ5NrbAcJD3DQJoiQssAqgzWjNfNR/6shX1Qpdsv9jQ5ED0lDFYsl2VNvYytotg==');
define('LOGGED_IN_KEY',    'ox3Q63qhl/EiJGAb3SxiVOVxjiLKfCyzLCxL5k3OrAjofA1WXcYOICtwnr3CRLoNqkPumRO5oTvMrMxmru0RQQ==');
define('NONCE_KEY',        'bitY2FA2etrfOhq8HpjlgDj3uDJflAnc3TziZtCkvtC840bE3GY+ivPtZdyhmtk8m5ZcXxSvJ6KIoJ97frBdSQ==');
define('AUTH_SALT',        'hx7iN1u2Qer3HXY0qkl98zXFEzTmWAeHBf2HtCA3PUEFozhEDb+PgHdjrcqdXwC6U4Ua308arOUGzJgEoi3ksg==');
define('SECURE_AUTH_SALT', 'euLtBvlbTrWDS71j9YnL+Gxs8Iil/9eXjsgaMhExuBUeXM/ukPMKwKJLTci8KKUNNTYusFZNjqhjaj7fKfu3rQ==');
define('LOGGED_IN_SALT',   'kpPizlP8MTMwZR1jlhOO2Nb1TIThWkKLdPr6bhOLelprpU/HKdwrTdRA9h1O0sJyHvcqsMSk9485Zd7/iy0gYA==');
define('NONCE_SALT',       'q1H6VOZQHqBuPZLbGTucTC0X+/i4S/HIAw8cWiagFWYvx9hp1m+o2P02GePj7tLMXp5S3g1m7V5QWpxWei73WA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
