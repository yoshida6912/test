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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
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
define( 'DB_NAME', 'seiuchi' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'sanma0609' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#)H:;R^PU:j-Iu1ACI9O/,s=}f${zaHOl5(U/Ymw~v|W ?:ogwib-mh^^e].xH|U' );
define( 'SECURE_AUTH_KEY',  '>CY-/B2G%(-s],Qze+ot_xU_f2?}_c@)!QErJlrhaUn/c&e~Js~b7k0wJI{I5Py4' );
define( 'LOGGED_IN_KEY',    's@TE*I:BO#=fg$d1XtIC_4[FU4aP*iR898odK3V;t=,O+ltG$E.bN`jP)^9xwY?u' );
define( 'NONCE_KEY',        ')ugQV*C#tDmMWs#H]XD>DJ6c#ye}3 K@HdKT!]M;kR>&!0)8FFXliTawwqxvlV,1' );
define( 'AUTH_SALT',        'AJ@t*B/MHnGE%6B*h/MR/M~HBGj^Sno)X|A|+NG6Hd1_Kn5Zc-&gQN^qqYa)`]gB' );
define( 'SECURE_AUTH_SALT', 'DMHX+~wus$8HR,J/}-6)ZtZ2`v5Lg|)aj< K.E7WtyD+`rV0xC{2 L:rtr%;8DK%' );
define( 'LOGGED_IN_SALT',   'a#J{(o;XRtndi}8s+GKy8 -Te?Uqsoo-??;<a/=WB%s)5V0&lXMq +ybE<6hpfV}' );
define( 'NONCE_SALT',       '*i#3Nv5%T6i,1n|>eb oBwYjZX9#}o]oWxf}m.6e9F8ji&8Sv=w%Z&eOGG}tkDZ4' );

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
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
