<?php
/**
 * Grundeinstellungen für WordPress
 *
 * Zu diesen Einstellungen gehören:
 *
 * * MySQL-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * Mehr Informationen zur wp-config.php gibt es auf der
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Zugangsdaten für die MySQL-Datenbank
 * bekommst du von deinem Webhoster.
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als wp-config.php mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * @package WordPress
 */

// ** MySQL-Einstellungen ** //
/**   Diese Zugangsdaten bekommst du von deinem Webhoster. **/

/**
 * Ersetze datenbankname_hier_einfuegen
 * mit dem Namen der Datenbank, die du verwenden möchtest.
 */
define('DB_NAME', 'kbtest');

/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem MySQL-Datenbank-Benutzernamen.
 */
define('DB_USER', 'kbtest');

/**
 * Ersetze passwort_hier_einfuegen mit deinem MySQL-Passwort.
 */
define('DB_PASSWORD', 'eivaeY3difaichei');

/**
 * Ersetze localhost mit der MySQL-Serveradresse.
 */
define('DB_HOST', 'localhost');

/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define('DB_CHARSET', 'utf8');

/**
 * Der Collate-Type sollte nicht geändert werden.
 */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'O=*9k-v|idu,}L-#j%3A!BU<e+^Yj$mQ]Y/m>e`_ne pWG1^V[ib}$!f^&[%d8hC');
define('SECURE_AUTH_KEY',  '-_cx(J)kbB+6;H#<dA~&-/a+tLW`@+Sc-i|(}P0Y`-rg1#-rBfG$o{+rOG8|e5(5');
define('LOGGED_IN_KEY',    'k;<=lTI0Z,eZ]XygWk?+4WGY;cxx`| W(0N6AJB{Z3f#9@6Uy#&|FO~>RNOdL%z2');
define('NONCE_KEY',        'K-di[4jChu*JH%`/f34#L,8:T^11 SYxql6mTer,{qJ;-|gVxNgftH CC9J|j ~c');
define('AUTH_SALT',        ')r%WxyJ]NdYH8p/Rd=Au7<Ia So2OtD,|c}%Rj>C&IO^w -y-whuGetiR^:IvqxU');
define('SECURE_AUTH_SALT', 'u9Fq&1/442CEmWCiPgj79|bT-JLG7uB^yirh+ih@Fp|81#~cc=$xn$TZ>cqpcz0c');
define('LOGGED_IN_SALT',   'B`;xVOONo1-~4D}[Y|(%Kpl~wh6zPkq2_EAUt6hQN`1Szb*?0L oB[-/(<[sGdTD');
define('NONCE_SALT',       '-R(S%F9zsScgY.-Io!9GjAy~XWyeb52~ :Pu]+mnfR_9M,cCzC(SP71xPkTfzs8e');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix  = 'wp_kbtest1_';

/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/**
 * Für Entwickler: Verwendung der unkomprimierten Version von JavaScripts
 * und Stylesheets aktivieren.
 *
 * define('SCRIPT_DEBUG', true);
 */


/**
 * Deaktivierung des Editors für Themes und Plugins
 *
 * Zum Schutz vor Änderungen von Theme- oder Plugin-Dateien durch
 * Eindringlinge. Erschwert es, Schadcode zu hinterlassen.
 * Allerdings können damit auch keine automatischen Updates
 * gemacht werden und auch keine neuen Plugins oder Themes
 * installiert werden.
 */
define('DISALLOW_FILE_MODS', true);

/**
 * Login nur über verschlüsselte Verbindung einfordern
 *
 */
define( 'FORCE_SSL_ADMIN', true );

/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß beim Bloggen. */
/* That's all, stop editing! Happy blogging. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once(ABSPATH . 'wp-settings.php');
