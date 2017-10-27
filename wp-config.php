<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', '_kindred');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', ''); 

//define( 'WP_DEBUG', true );
define('JETPACK_DEV_DEBUG', true);  


if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')

    $_SERVER['HTTPS'] = 'on';

define('AUTH_KEY',         '<:ga|TG]$}w+hP-g0TC]+!KFjE!A}[X)e|J`C7*dITF(jY-@9;+.[w6j<o+=^#/Q');
define('SECURE_AUTH_KEY',  'X%h.c3O#Lm~5LjFd#[oy%HypQ0Yt{|`o0RQ9Oyy6JbNu(o@-Q,DfbNVx}V7HZd>6');
define('LOGGED_IN_KEY',    'W=knR)urwYgA;8q%sa-iPi2LU;f,|`1JS[9Y$+NGIp<<Zgetp)r_(?u6{k?0KW`$');
define('NONCE_KEY',        'n~;mL}Mk)~NQuaosaQ0nhx@9>]>^$Wng-NIDKw41uvkI?F7|r:7s13#sjPh*~9p0');
define('AUTH_SALT',        '-P9U AU$-[&rs6Glv=(smtvr=c*;{{OmetCA6aiz)Fu$R%Lca2ED@c0(d-zYq_@~');
define('SECURE_AUTH_SALT', 'FHt`{6)`:d6Wb~@b7Xk{77n4Lb.]jt1*UorQv|(YG_-wjnA-^R/tM5{!vmG[owfC');
define('LOGGED_IN_SALT',   ']%mY20T<2 n8t<v~pI~F{@3e8=>qO_`u?IGP(0Z_{^t^/FQ.mz&RhO[hva)%XQE!');
define('NONCE_SALT',       'r-YFHkb=QV+gIN;3|mrgZup}Ouos8B6SOngn5{!n|_Mo8?p4QU*MK?5@6biJm<+x');


$table_prefix = 'wp_i1s8k7_';

define('WPLANG', '');


/* Allows SSL request to pass through nginx proxy */
#if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
#$_SERVER['HTTPS']='on';


define( 'AUTOSAVE_INTERVAL', 300 );
define( 'WP_POST_REVISIONS', 5 );
define( 'EMPTY_TRASH_DAYS', 7 );
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
