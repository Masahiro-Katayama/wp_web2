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
define( 'DB_NAME', 'wp3' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'f u!5Jg,uq-|/z6:XF=-P|TiQJ9-D%UpS)&F0mk m+i!Ub;)Pn!F`;wQ}ZtmK**!' );
define( 'SECURE_AUTH_KEY',  'pKs|xt#ZYkC+aYm{--Kq6tU?yj-)~W2;`O=-.h})6U8gxVlxJ<P#1x{{@zbM/jD-' );
define( 'LOGGED_IN_KEY',    'A[4io6|9Y V,)R6f#:DJUQUHD~flso,rQ?ukz@K?M9DMY^2})!>WaDqjI,uy$ww(' );
define( 'NONCE_KEY',        'q:grTQ!3&r8#agU0kwzz3/rE Pqk(0l+YeqC,y@}_ySusqf0AoWDvW[^(WUyLxP^' );
define( 'AUTH_SALT',        'qd7dXrHg6u1OTtK&zig<%u2c8nBmwhOPCYtH;YG(fR`^hfm0IZ:2AT4a1{@5k!wY' );
define( 'SECURE_AUTH_SALT', '7YF;h/0*p8E&9q40.%F8z0mDiXe#j[SrYIrn@8o!HunU(rS@_)G=Or}3mc&AA~>j' );
define( 'LOGGED_IN_SALT',   'QPk^Df=aE66rX_K7F_siK2|*/(}@dXN]$oq`NeN&UJEUJ?[HF}{pZvx7``za)JFX' );
define( 'NONCE_SALT',       'L]Dq@W9B(C6R,q!^yUGXH]2)RE8vNxpSeiYp_cL>5>X55HCVwu.d=PxZZA``mR!e' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp3_';

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

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
