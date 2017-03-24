<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'udemy');

/** Nome utente del database MySQL */
define('DB_USER', 'root');

/** Password del database MySQL */
define('DB_PASSWORD', 'da522la');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8mb4');

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'zF}Hc2C&~ =[aZ+D<nEJ?+}gs=rnbgR-Jgu;e-L#I92S($U+BcLlA%.[&1o_q@Ii');
define('SECURE_AUTH_KEY',  'Z&d)*JT|(k6h]$p!/+)@9q-9L06>c%UA(ZG&yYZj.7GNwBG<b*[+|T3h|MQG8DCj');
define('LOGGED_IN_KEY',    'Ep],TrCv&.g;(JFWsALygc=<,TB&7m_H.ig HrndHKXyZ&OQw)R3v4>$HPn%6|~)');
define('NONCE_KEY',        '%5kJ@{I<b+/.d!R:Hm:tP2GiNJVc,miMj:%>1+2*3{JzDlN]Na?tMTv>UmpEPZNF');
define('AUTH_SALT',        '<oPI3TUh_/6m8&q#rFMc(41KLuNt,Vy_l&Mo`]9)EoOaTQk41.q0uL#-c6lBo8;-');
define('SECURE_AUTH_SALT', '<}ndDTdo+!13F-Jct;_6N>nQl3#M6A}23)T`M}gpMO1{(t5_:$t[aeCGrOCRLSK+');
define('LOGGED_IN_SALT',   ':N4]}K^2d:lAJ~s]xCK]FA)]cO-5HL:LeLV,-JJ`h=Yq(x!!:2+&kNc ?,InaV%J');
define('NONCE_SALT',       'Vn2&`ns?jC(eHAZD,lJits1]*VGn>*{O%j ]>B+zT>EP-NcczBYWG#~OtwkUk2I+');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
