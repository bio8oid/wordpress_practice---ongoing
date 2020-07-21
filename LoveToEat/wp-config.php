<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Ten plik zawiera konfiguracje: ustawień MySQL-a, prefiksu tabel
 * w bazie danych, tajnych kluczy, używanej lokalizacji WordPressa
 * i ABSPATH. Więćej informacji znajduje się na stronie
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Kodeksu. Ustawienia MySQL-a możesz zdobyć
 * od administratora Twojego serwera.
 *
 * Ten plik jest używany przez skrypt automatycznie tworzący plik
 * wp-config.php podczas instalacji. Nie musisz korzystać z tego
 * skryptu, możesz po prostu skopiować ten plik, nazwać go
 * "wp-config.php" i wprowadzić do niego odpowiednie wartości.
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'lovetoeat');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'admino');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', 'rowerek');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'localhost');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iS?Fwx]NHYeZ=6/T`5KqYi[z~*PtWB rS)&k%*$~,fKcTAdc6HW:!Y%dK|TQlq,H');
define('SECURE_AUTH_KEY',  '5/U8@D!h$OdbY%`j+SsboN-b<Kp~be!f<tU+nVnbAEdx+}2r%kmbd-1}?q1x.Hps');
define('LOGGED_IN_KEY',    'lH=4=ya6@}|P76N$hH^mw#,54_woJP,O4g,GRX:b-ASP[/y)K.]y%_bSw&~QA^C^');
define('NONCE_KEY',        'x-EiTHq1i^N^~DqCadXK<h3/v}+LFuQlP^n(1mq/%P{@I<]sgP5lTer*B.2BGUAw');
define('AUTH_SALT',        'kW`CwuZ~*?zIdZWmQ$[_7?1v5$YblFU]ue5!Pr2_2w)5Q6f6)pavq:D~QH>Q@xF3');
define('SECURE_AUTH_SALT', 'C[fIRooqDib(K<=n!Mnd&LC_rkn36^bt]`el9eJA^~If)GH3DxPX%V_nfw9?iJR%');
define('LOGGED_IN_SALT',   '>db?.VnJKLr4Eb[H;&bnMi~JBkX194QE;xibJEnD(>53wFT M@&j9T~L-xff?`sB');
define('NONCE_SALT',       'ga_Lhl:[{{#`thdCXuK6{djLNTUO7Td 0j!Hf~BK;n_HO>>J~RY({-B+GJ6_RwKL');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'lte_';

/**
 * Kod lokalizacji WordPressa, domyślnie: angielska.
 *
 * Zmień to ustawienie, aby włączyć tłumaczenie WordPressa.
 * Odpowiedni plik MO z tłumaczeniem na wybrany język musi
 * zostać zainstalowany do katalogu wp-content/languages.
 * Na przykład: zainstaluj plik de_DE.mo do katalogu
 * wp-content/languages i ustaw WPLANG na 'de_DE', aby aktywować
 * obsługę języka niemieckiego.
 */
define('WPLANG', 'pl_PL');

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie ostrzeżeń
 * podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG w miejscach pracy nad nimi.
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
