<?php
define('CONCATENATE_SCRIPTS', false);
define('DISALLOW_FILE_EDIT', true);
define('WP_AUTO_UPDATE_CORE', true);// Essa configuração é necessária para garantir que as atualizações do WordPress possam ser gerenciadas adequadamente no WordPress Toolkit. Remova esta linha caso este website do WordPress não seja mais gerenciada pelo WordPress Toolkit.
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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'lbm');

/** MySQL database username */
define('DB_USER', 'radiolarox_dbo');

/** MySQL database password */
define('DB_PASSWORD', '23Lour@nt&*1979');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'c^F@9wNiZpeg*argloQeyT#DBw0qTQ8wV)De)2uZ&AQglybAq2!k*^G7wS!9D5o^');
define('SECURE_AUTH_KEY',  'l^qfyn*@CzsQMKVzg@nm8hCNM3D6VcsIrKKUL1YRO*8M)whQQ*!vip0)w6hjo*&d');
define('LOGGED_IN_KEY',    'gOhp@8Ejwch(q(R6WM6J#ZTm&sqy*5ruflNuqp4mLM3DYc#dJOTP@PeG1EChHqDy');
define('NONCE_KEY',        'o^(WPr95FMh72kWCwCqQ1Xz84EW4WfG(7GQf@*peamqV7p6&&wESYKsVGVn0hk8S');
define('AUTH_SALT',        '(ApKGvf1VEtFcsG&X6HaQC0dtvo)N7qw5pJssMaJn^!3f#9JQ0obtiHzPNiv^4Lt');
define('SECURE_AUTH_SALT', 'yPU27Q%EJSG9l!rk@H#*!bLFphwhLXYmOU6HJ@d6YJNst@gX*p07qoiw7x07ttq(');
define('LOGGED_IN_SALT',   'Q*URA2Jk4O#ypm2ALeIdLaq3e^cc)MpgEmbZrvJiRB1cR6j#jybrOaV#E836XA%w');
define('NONCE_SALT',       'mH*kFvG8DQ&^wjhIBOG4el2iV88YTi#mLXtCTVxNP#mdnbVsp8xF(G4(JYM&z62a');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lbm_wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
