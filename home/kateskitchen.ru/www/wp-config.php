<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'bubasik');

/** Имя пользователя MySQL */
define('DB_USER', 'kateskit');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'Otpusk2015$');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'mKa[GJTyWO/UE42|x(0|Gn)D{`RP<w+4C_LCdJ4P~dO$KIkk]c?)CKu7PjupEd5e');
define('SECURE_AUTH_KEY',  '|g}cgZoP{Mr>3]QAdSkNH<p^?Yl-j8,R]~Nn|+f|6(@M:(YoPimGJ-?g*FyTT2$O');
define('LOGGED_IN_KEY',    'Tab#KiEB/<|]n]2C56v@7i/x|1Chdq/}`~WHQ[.V9Z.+;kVM^}+f|5|kBAlUScoP');
define('NONCE_KEY',        '&kRDdF(a/)R>z=6CH-9MS+qmye#b}1s+pZeG@z;+{T(C*9z>;,*e!:l&rZ7T|O(j');
define('AUTH_SALT',        '&1g0I4ug(r-I?8BsUSNs,]*$__xRD>,Q`ZC7)Md{-{=OP^kfcNAe qp8N$`JyZkh');
define('SECURE_AUTH_SALT', 'jBzYGulaXN1,%s6=q+W.+|/GdT;OyPZs#=e1>#Y$,X0M*GQ~)X-W!+R.a}/7P%.e');
define('LOGGED_IN_SALT',   '/<F%&6:ij9GMUV1ja%(^3]~+K>1?4Of3wTYYhCdl];;nPXA<Nw2B4*rS8|5.0x09');
define('NONCE_SALT',       '4O91oSvf^X-%dx6cs46ak3b-^[kaTon2nak.A/Oh&98{r^;$Kr}kskuQHNpE]?sV');

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
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
