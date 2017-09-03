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
define('DB_NAME', 'travel');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'travel');

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
define('AUTH_KEY',         'r%9&RMR-0r8`k/a$fxr|VG|2L3D,[GK(6,`6%u5XR/Fo}(~dp4@x[i;Cipc?9j2[');
define('SECURE_AUTH_KEY',  '9@70Cz#=KI;bY845z}}A?A&6T5)a>3wVQ7fBbFgFNy#ERMZ_FPDokN7/x:FbsPwh');
define('LOGGED_IN_KEY',    'B=az:>^B_KL~t),I(`yIi#0m+hoeKdFv:QP$ qcJh|uCy%/<%O*o|j8ENuS2LLfW');
define('NONCE_KEY',        '9V`jM.l/Ai6x!>E.zKc%z9vm]kC~y9H5@@|]P: vzE/1<%{3GK9o&GL|Yn,8Df88');
define('AUTH_SALT',        'Nj^*6+ xNIjq9mPyI)XE7(=qfurd7Q$!F6o[O7U.)@nQ7i<UDI8.!ErO-xR53$*%');
define('SECURE_AUTH_SALT', '~TivEtsUEE:>Y%^HEmivl9:mo!OT?4]|E2i@`{JFZPTa-|wM}]fLK36 ?YzO}qm0');
define('LOGGED_IN_SALT',   'Y-P|1T`OoK[/-u2Dr3|-6E7*!_JUBi]kkjY1Pib4_ ;URK k`X`eS!@`/w4Z!AD3');
define('NONCE_SALT',       'mC1a1|UoY+@K.e[#4RHD<5V]1EW,~Z&KTj*T]%F7ANDX6w*mqZ($E.pY.m-7<)&/');

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
