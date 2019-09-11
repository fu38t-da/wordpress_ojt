<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'ojt' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'password' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=qHH9w7amjqTZ.S1 ;3|QVd`m`<xtuq- ?1LKL<GvFO/ov-/O$ru%ub,#JqxaVPQ' );
define( 'SECURE_AUTH_KEY',  'qi;xxN_t4j>!XK,P*2SF[&p8L]_S)pF_C-Kl1u;NEZ*h2Wr&`QqP#Ul|!#b2[hyU' );
define( 'LOGGED_IN_KEY',    '@K3sZ<z*/wNhiEyc$Mu7A$t>}i7@lbwboPK;x:To+x(>tdPLE``P)hiQ!*vPb{L}' );
define( 'NONCE_KEY',        ';!`s,oiNGES;!V$&u?}udmQv+99JG}.s1M=Hu8E_v2JLWuAZ^K`pw|U^LTIs2@m3' );
define( 'AUTH_SALT',        '7|e=.]/-y3Ipi0yP3V]K_k%^{GG;sfq.CS3,>wW+@?rpAj1i4+B`^}{yIQ8f}cce' );
define( 'SECURE_AUTH_SALT', 'lZ,2b7<WOx`kY(JSA8oxxbM52)k0(>@:12qd^D]/p`gxpa5er]&2@07+2VU>!4n9' );
define( 'LOGGED_IN_SALT',   '-o:o[+I8DI1zU=/G;7m?!VfA[h%O542D0r$J|T.9eX%+(J.r(rA7YBvmD}t>P*%}' );
define( 'NONCE_SALT',       '0%B+QZD[SMgqeBC)B|UN&$(qf8(6Z[C2gEiSDS}O38G6}V|8Ii!_NvBXd02gw*-o' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);
define('DISALLOW_FILE_EDIT', true);



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
