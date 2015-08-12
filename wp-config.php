<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'lvtranco_wordpress274');

/** MySQL database username */
define('DB_USER', 'lvtranco_word274');

/** MySQL database password */
define('DB_PASSWORD', 'JWXc6HgBt7Qx');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', 'kK*O}/^xd;F{?TbJry^z+A!SRmIEkyLIEqv[xHlZLE]?iAeJO)ghc%LNKiG>(j&_X}_pBoC-gVrskFE/RhNk!r?R(|N<o<Qb&hz^i|O;s)cWbXJ@{fdr-N{olH(b>d%U');
define('SECURE_AUTH_KEY', 'ps@;Colm>&{Fky>OfXiDpKoRa/<;v&H+LRG!A<&u(y[FbS)pF]YV!R@v*NAtZiH)>%y@BLdJ[%uW&X[k][YFr!Mo+Yft;QPTrr%<_eL{p-?%ev$krO(wqV(X+^KuSQYi');
define('LOGGED_IN_KEY', '%+gjMtf/CVvbmVhbmGY{OUgRXvOPS{EeRlz/I*rH;mCyrjjQFY)es&P$$oqvtvERQgQL@HZxD$IO*VHEzLnvD{JZ{{>P;k;HFZRzpLtD;R>DWsr&EQziGzH[Elv}jO+k');
define('NONCE_KEY', '-?ZEd>iIJOUORi[)Wh}pvfkKUHIxHPHvfSyPB*ZQXWf](t-;)/tKzSOtxLscEfYAJ%{jSDVG+PszQouHtE;RqhND}$NZ%>L(!N)QG[qNcnNzbE%<JMp<d<-<-^UJt!AP');
define('AUTH_SALT', '=T}zZ(^cfgn/SI)DH!X/AwRfsBcVyAOGfz;%!^|hLZ)V-GHq<IrK%+lPZ)WR^FDx[i;{dlpN;/LRlG>rmN^[{MAMU$Ek[DTlH(&(MhQlO)nOkk%j?O(ps_VCUr=wK()Y');
define('SECURE_AUTH_SALT', 'bixaM|Mr/Vq-qUnWmvxA_dj/-%yTw)XbQw|?g@)RQO^+oSX_nFXJE;?GCF)Vj%Nwh***MDcHQN<>JgeEd]JQ-*r-T%G;wYuI*+&a!-aTUuknYiR^J+i]ROGxBh$}ueY}');
define('LOGGED_IN_SALT', 'Mt*[_n/Fr^XZlCv<lU+gwe<=*pm)nEEjNf)WZZnuu>L_SXuEh!)lKYf}yF<^Cqkat(||;OkLe>UTnv[))gvtoi&&Lfw^Z)Kuy{aQALu-niIx%;QRQC!Ojg(ARAMAk[u(');
define('NONCE_SALT', 'cg>[c%CxsX@m*qe=Ks<JIdj*<Mpg!}Sm(;w!$OiQaxLbeI!(A?VQj>yADf?zcsfKuNipyiAW&EmayK[g_S_R_vnQsQC]tJOl{WTb=|Rqx>GfaN$X&O$fcR>LdXoWU-Ji');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_vqua_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
