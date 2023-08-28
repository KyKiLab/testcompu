<?php





/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', "mir09_tky" );

/** Имя пользователя базы данных */
define( 'DB_USER', "mir09_tky" );

/** Пароль к базе данных */
define( 'DB_PASSWORD', "&V6!93nsMt" );

/** Имя сервера базы данных */
define( 'DB_HOST', "mir09.mysql.tools" );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'C{^f}vyDQrW]la4aW!$UFn6DcqID&7EY*h6T(fUgSJ<pWinn>*Kc*Itf1^cG}M,d' );
define( 'SECURE_AUTH_KEY',  'RFs{ Au2kuLtg-:S//)uQF>Hd*w2B{Iba2Yy1=j,W3~6x10K8wL9]IM&CI$#)M#w' );
define( 'LOGGED_IN_KEY',    '8.#m8O{ VGOC50Of6}&>9N#W{[zrlE5v]tGUT+8~;-4l ;RW{o(w6@;Wt&3f~eQA' );
define( 'NONCE_KEY',        '7NLQ5~=v:Db@@!IFn]-2^a?L)Tfw8mQr6g4Y:b@^X{P#7y/>Qel#l-c7xxt)&/(s' );
define( 'AUTH_SALT',        ':b6URF|?hk$eBX_<|VD3SLJM]?B0$eCLbB.0t_VhP2~5m65NRvV<s$Y6{,W);LdR' );
define( 'SECURE_AUTH_SALT', '4RwnG3pNRFu&nphh7t>GV7h (7 2A@fFQpiRiO)pIdc0#D}JbZ*B[nG33_AHar?X' );
define( 'LOGGED_IN_SALT',   '!T)6:|x7h4D(]:o#wr(WHgkoAVfYt[vxQN%H{EI7&*4!,e+K!_Tl,M/,Vt6~2[Hg' );
define( 'NONCE_SALT',       '}~kfOgQ&8tAIgJ.IXiKi+-TAA[}GS1`$p{_Y`hg!tm5Y#c]6j;?6BX(VQ?T,TAP>' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define('WPCF7_AUTOP', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
define( 'WP_SITEURL', 'https://test.kykilab.com/' );
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
