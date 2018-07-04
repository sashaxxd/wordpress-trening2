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
define('DB_NAME', 'wordpress-trening2');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/-.-t/iqI2tGeY@rw>,>D[c`.FQ=#$xTG|hXi ;7OfYyI<!R@Q7#0Oe/&h_]_vKr');
define('SECURE_AUTH_KEY',  'G/NX|wRI].Uj&GrDI*)7,cNNaG~tsCCvV;621^|}xfy!+1BF*(jW?f~n9S}OvuD=');
define('LOGGED_IN_KEY',    'gnib]YLL@.3CG{M%?4SI-}g^Qv>cLDmLKdcprumQ,VH<eg5U;H5W%k2 aZ90x2N_');
define('NONCE_KEY',        'pN!$T5eMuD  c}pAHOd:Z3o$|Ome;&~7GvU(RWv938x:wYLS3C{%sE-dOI.<(c,V');
define('AUTH_SALT',        'K:;5:w>Z:gfkpMDbWf(F8BxT uHNRQ#I-]j]HjLzG,,9wu*PSL,u@ri@hB)jplEX');
define('SECURE_AUTH_SALT', '.!{5~8?vS/y3{&NL5DY44lx=FxBDIbQ0f@m:64-p:+&Ta?>EWIRm{x&^Dv@N,w~k');
define('LOGGED_IN_SALT',   'Ma]6O@eu<*oih_ng(ChRfbzmrRLa5VjB+[|z;dTY`y4Dd}@~GY}dji6VTe3WbA%i');
define('NONCE_SALT',       'g6;BGd/5A,um@21Onzvx ,9nYDJMm-xTa|UHlqM65y;FKQk:Yo[D.Pr3Ju=CjF67');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
