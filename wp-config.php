<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //

/** 要执行请求的操作，WordPress需要访问您网页服务器的权限。 请输入您的FTP登录凭据以继续。 如果您忘记了您的登录凭据（如用户名、密码），请联系您的主机提供商。 */
/** 插入三行，插入在任何第一define下面即可 */
/** define("FS_METHOD", "direct"); */
/** define("FS_CHMOD_DIR", 0777); */
/** define("FS_CHMOD_FILE", 0777); */

/** The name of the database for WordPress */
define( 'DB_NAME', 'freedbtech_wpimnooutlook' );

/** MySQL database username */
define( 'DB_USER', 'freedbtech_wpimnooutlook' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Lxg2008@008' );

/** MySQL hostname */
define( 'DB_HOST', 'freedb.tech' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2qScJeQ_,e9*Rrq,pvca]0BbUBp9?-h] ,*s]aSb3nfA<wPc+HxI: t~`wc`8N^T' );
define( 'SECURE_AUTH_KEY',  '[$$%5:I%6*1i=Cai?,6C}o!Sp2<|E8ZKL<Kpy?$ki)VovVw%&<&,`*h,lzkYX^dH' );
define( 'LOGGED_IN_KEY',    'lbgQ{MDqn}]UIj(8[7K4k0ol ..O7VCqGR0V5;UDZ}KHb3FHF-OPe[V=pf%ae+xd' );
define( 'NONCE_KEY',        'Rg][g;As-bK#XlR!vWNUGa$G*u/D9?Ec$6xJb!ZhpjQWV@Y}CTKE7Hs6GW>6;@u&' );
define( 'AUTH_SALT',        'f&~`#u.c0$y})d:8RJS.a-5k3)}NpU<5i9W7_;a8#}k:]l HRejZ4.TOsxgt?lKZ' );
define( 'SECURE_AUTH_SALT', 'fzA:K*I#[O]Stt1c t|?yRsQ}~gU,nJB!~%&?U_NP?6sK2r^WnKofSU%YLtC5GGc' );
define( 'LOGGED_IN_SALT',   '7>qVS9-UR!R*0N-1-wF]XxCGE3^S0p)(HwJabn=FV[mWhygg5m:?Ns?GSaS,2ewq' );
define( 'NONCE_SALT',       'kU:5T0CIJp^Y<mH#5jU:*`b5G@~2e.2F@EFbQ3YI4oOAYS-i=_40DS4Ao$?ayx:z' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** “无法将上传的文件移动至wp-content/uploads/” */
/** 搜索 require_once ABSPATH . 'wp-settings.php'; 在搜索的代码上方，添加以下语句：“define( 'CONCATENATE_SCRIPTS', false );” */
/** define( 'CONCATENATE_SCRIPTS', false );*/

/** I can’t find the “Store uploads in this folder” field in my Media Settings page?
* If you can’t find the field in your media settings page you can solve the problem by adding the following code in your “wp-config.php” file:
* define( 'UPLOADS', 'wp-content/uploads' );
* just before this line:
* require_once(ABSPATH . 'wp-settings.php');
*/
define( 'UPLOADS', 'wp-content/uploads' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/** “无法将上传的文件移动至wp-content/uploads/” */
/** 搜索 require_once ABSPATH . 'wp-settings.php'; 在搜索的代码上方，添加以下语句：“define( 'CONCATENATE_SCRIPTS', false );” */
/** define( 'CONCATENATE_SCRIPTS', false ); */
/** define('FTP_PUBKEY','/home/wp-user/wp_rsa.pub');
* define('FTP_PRIKEY','/home/wp-user/wp_rsa');
* define('FTP_USER','wp-user');
* define('FTP_PASS','');
* define('FTP_HOST','127.0.0.1:21');
*/

/**
* 开发者专用：WordPress 调试模式。
*
* 将这个值改为“true”，WordPress 将显示所有用于开发的提示。
* 强烈建议插件开发者在开发环境中启用本功能。
*/
define(‘WP_DEBUG’, ture);
// 如果需要输出调试信息到日志文件（前提是开启了调试模式），在下面加一句
define( 'WP_DEBUG_LOG', true );
// 如果并不需要在页面显示调试信息，那么你可以加上这一句
define( 'WP_DEBUG_DISPLAY', false );
/**
* 修改静态脚本
* 如果你需要调试 WordPress 的 CSS 和 Javascript 代码，那么你可以加这一句
* 来调用完整版代码（默认调用的都是压缩版，压缩版根本没法看，通常都是修改完整版代码）。
*/
define( 'SCRIPT_DEBUG', true );
/**
* 记录数据查询
* 如果你需要记录页面都进行了哪些数据库查询，那么你可以加这一句
* 来实现，然后读取全局变量 $wpdb->queries 就可以知道有哪些查询了。
*/
define( 'SAVEQUERIES', true );


/* That's all, stop editing! Happy blogging. */
