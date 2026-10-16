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
define( 'DB_NAME', 'test' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'Admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'giveme5' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'E(K(mtT-+HZs5 5$isyas1HV:<>V|;(&Xhd^rT]0GQKVD9kB}9c>P=_-vBKf9xHy' );
define( 'SECURE_AUTH_KEY',  ';6|J1uBiB1$_KgDJxFvl,U3j3I=buem8pvR|FT17w;:|3,(KN-$iBH|W8=#(#,L7' );
define( 'LOGGED_IN_KEY',    '5Hl:UyM0!ZCTDP8YW%hj2,J(qLDCoOpzLuK@oatpT=oJb5)Hry2FPs(vTH0&d)wS' );
define( 'NONCE_KEY',        '2dG!}>%n#aS#G0K.e>y2%[1[ZsIY:tbkVP^*Uz?&2&qxYXh;9(NSq`mb01}S~0JD' );
define( 'AUTH_SALT',        '9bY2`7Q2~^4ku3[pT*DjDiJ2RcXjIv~o%cB=V<U~S_7QG~5Hej7,R4i/D:/*i?DX' );
define( 'SECURE_AUTH_SALT', 'YN9XGeGASMZZ1>fH_z$pJEQ^/]FVvV:H5!v88%w?k&i@HT |zEY($]p?0+|4cavx' );
define( 'LOGGED_IN_SALT',   '6AO?(9WhF!7./WB:ROk(I/ ;r9p%<$uGku2OT7BU[_`1KO!#6xm/Q$&4sAh[(6s3' );
define( 'NONCE_SALT',       'XpT#Kas:keI0of_s+QS6]I~Dl!Bg8fa@$XXjPfSG8dnVm7zN9(.1XA^)GgTXaLEt' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
