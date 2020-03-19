<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'siteen' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'siteen_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'AmRS88CIamLo' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'r!Qs3H~^6U1by:9]>l:%<oS$[B7uhZI;sVxZAB8Z:Lbw<u|l*EF`fd[lO-,*Eh5J' );
define( 'SECURE_AUTH_KEY',  'i~c$|f=A/@_TNxwNx:iPvFo}J|y@S|V s|Wsg,}Ee?>[R^g$/9.]=^Dfj;.6c /M' );
define( 'LOGGED_IN_KEY',    'bUO?]Z{g_T!h0+[8PxS*qu&RoZL(X?#uB`~lAFrI0d#8Mq|LG9{%y@VAx.h.^FK=' );
define( 'NONCE_KEY',        '(W19*.ER$}=Q/%L;I0ps*@TR}]sRUNhF|/Bb+wS]-!lW~X%ZXr=9f<qVm^b*` Yr' );
define( 'AUTH_SALT',        '9K!YMg1Zu^SBp~7_+#?-q$$kQ!`mlZw3#a)H<kN/!5,j0sjjBG*~zUDCzJ{[#8{D' );
define( 'SECURE_AUTH_SALT', '*k*f|U;8IE@1+?f|?{f?M%m7/$&VBvm9|!ZZKzBg0x*mb5Y1apj]VDF-|(g7){@3' );
define( 'LOGGED_IN_SALT',   '3C{Y)*m/ (qfWVGs|]*hV:KDriz*|.m=34OtvkirXm~%qmJ`~*N8}eQ%}%<8b;Zb' );
define( 'NONCE_SALT',       'UUK/*t=dn@]Dkgu}E5`vG}l1?#R]&mURA4JFnwXWuZVs(7a;Ab2vG6RCR(GniAX@' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
