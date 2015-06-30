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
define('DB_NAME', 'project');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         'Y+9PUj|/ZkxYYhHy#-#(R-[ddied,>g@<uf/FLlj8H8j9Z<D41z>IJ<q9I;K-D|9');
define('SECURE_AUTH_KEY',  'BuziSm%wm(bMNA3e!7Vowq40PV(Kym/r|eR$G@EJzPh- fn-,A4kpHuLo<wCA5t@');
define('LOGGED_IN_KEY',    'Srrhi@;Mo@)53zJfXBb /G{?agpF<I_hYkz;m#OooXP~a.tI#i0vZ~a]w0+-AL/t');
define('NONCE_KEY',        'JXPDy+/Ya@&L XY=dU.Zo),~ZeuqdA+|GW;mHMP>w)Kx-TqN2DM:UG<M[8p=(Xd{');
define('AUTH_SALT',        'j<c?`N.o)yye;/=h Mb<6Yf=+A%~=O*}SH$rjyVU-et|dyC=B9r| =Y{3TXn,i*Q');
define('SECURE_AUTH_SALT', '[YE+7UeUC@7E4,pYGWs)GSN/^0k|6I@Qo/ei`F|:j5*p}UviJY->LI;I$Zu|HigL');
define('LOGGED_IN_SALT',   ')8x*,kFpaIbz[t(isK.6{_a,DCZ8y_ky;b{VJaKcVm1+-^hjZ09%f4F*B>WK l^,');
define('NONCE_SALT',       '_fjEsu%**k/#+C/oBk||+.RK?G/,[zElqPp^}^8l;{.r?x{KRF`*/Gb=z8sf|3n+');

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
define('FS_METHOD','direct');
/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
