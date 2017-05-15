<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: sqlpatch.php 19537 2011-09-20 17:14:44Z drbyte $
 */
 
  define('HEADING_TITLE','Esecutore Query SQL');
  define('HEADING_WARNING','PRIMA DI APPLICARE DEGLI SCRIPT IN QUESTO SPAZIO ASSICURARSI DI AVER ESEGUITO UN BACKUP COMPLETO DEL DATABASE');
  define('HEADING_WARNING2','Chi installa contributi di una terza parte lo fa a proprio rischio.<br />Zen Cart&trade; non rilascia garanzie quanto alla sicurezza di script forniti da terzi. Testare prima di utilizzarli su un database in uso!');
    define('HEADING_WARNING_INSTALLSCRIPTS', 'NOTA: Gli scripts di upgrade del database di Zen Cart non dovrebbero essere eseguiti tramite questa pagina.<br />Trasferisci via FTP la nuova cartella <strong>zc_install</strong> ed esegui l\'upgrade da l&igrave;.');
  define('TEXT_QUERY_RESULTS','Risultati query:');
  define('TEXT_ENTER_QUERY_STRING','Inserire la query <br />da eseguire:&nbsp;&nbsp;<br /><br />Assicurarsi di<br />chiudere con ;');
  define('TEXT_QUERY_FILENAME','Caricare file:');
  define('ERROR_NOTHING_TO_DO','Errore: operazione impossibile - mancata indicazione della query o del file di query.');
  define('TEXT_CLOSE_WINDOW', '[ chiudi finestra ]');
  define('SQLPATCH_HELP_TEXT','Lo strumento SQLPATCH consente di installare patch di sistema incollando codice SQL direttamente nell\'area di testo'.
                              'qui, oppure facendo l\'upload di uno file di script (.SQL) fornito.<br />' .
                              'Quando si preparano script da utilizzare con questo strumento, NON immettere un prefisso di tabella in quanto questo strumento' .
                              'inserir&agrave; automaticamente il prefisso richiesto per il database attivo desumendolo dai settaggi presenti nel file' .
                              'del negozio admin/includes/configure.php (DB_PREFIX definition).<br /><br />' .
                              'I comandi inseriti o caricati possono cominciare solo con le seguenti dichiarazioni, che DEVONO essere in MAIUSCOLE:'.
                              '<br /><ul><li>DROP TABLE IF EXISTS</li><li>CREATE TABLE</li><li>INSERT INTO</li><li>INSERT IGNORE INTO</li><li>ALTER TABLE</li>' .
                              '<li>UPDATE (per una sola tabella)</li><li>UPDATE IGNORE (per una sola tabella)</li><li>DELETE FROM</li><li>DROP INDEX</li><li>CREATE INDEX</li>' .
                              '<br /><li>SELECT </li></ul>' . 
'<h2>Metodi avanzati</h2>I metodi seguenti possono essere utilizzati per emettere dichiarazioni pi&ugrave; complesse del necessario:<br />
Per eseguire insieme alcuni blocchi di codice in modo che vengano considerati come un solo comando dal MySQL, occorre settare il valore "<code>#NEXT_X_ROWS_AS_ONE_COMMAND:xxx</code>". Il parser considerer&agrave; allora il numero X di comandi come fosse uno solo.<br />
Se si sta eseguendo questo file mediante il phpMyAdmin o un equivalente, il commento "#NEXT..." viene ignorato, e lo script viene elaborato correttamente.<br />
<br /><strong>NOTA: </strong>Le dichiarazioni SELECT.... FROM... e LEFT JOIN presuppongono che il "FROM" o "LEFT JOIN" si trovino su di una riga a s&egrave; stante affinch&egrave; lo script di parse possa aggiungere il prefisso della tabella.<br /><br />
<em><strong>Esempi:</strong></em>
<ul><li><code>#NEXT_X_ROWS_AS_ONE_COMMAND:4<br />
SET @t1=0;<br />
SELECT (@t1:=configuration_value) as t1 <br />
FROM configuration <br />
WHERE configuration_key = \'KEY_NAME_HERE\';<br />
UPDATE product_type_layout SET configuration_value = @t1 WHERE configuration_key = \'KEY_NAME_TO_CHECK_HERE\';<br />
DELETE FROM configuration WHERE configuration_key = \'KEY_NAME_HERE\';<br />&nbsp;</li>

<li>#NEXT_X_ROWS_AS_ONE_COMMAND:1<br />
INSERT INTO tablename <br />
(col1, col2, col3, col4)<br />
SELECT col_a, col_b, col_3, col_4<br />
FROM table2;<br />&nbsp;</li>

<li>#NEXT_X_ROWS_AS_ONE_COMMAND:1<br />
INSERT INTO table1 <br />
(col1, col2, col3, col4 )<br />
SELECT p.othercol_a, p.othercol_b, po.othercol_c, pm.othercol_d<br />
FROM table2 p, table3 pm<br />
LEFT JOIN othercol_f po<br />
ON p.othercol_f = po.othercol_f<br />
WHERE p.othercol_f = pm.othercol_f;</li>
</ul></code>' );
  define('REASON_TABLE_ALREADY_EXISTS','Impossibile creare tabella %s in quanto gi&agrave; esistente');
  define('REASON_TABLE_DOESNT_EXIST','Impossibile effettuare drop table %s in quanto non esiste .');
  define('REASON_TABLE_NOT_FOUND','Impossibile eseguire in quanto la tabella %s non esiste.');
  define('REASON_CONFIG_KEY_ALREADY_EXISTS','Impossibile inserire configuration_key "%s" in quanto gi&agrave; esistente');
  define('REASON_COLUMN_ALREADY_EXISTS','Impossibile ADD per colonna %s in quanto gi&agrave; esistente.');
  define('REASON_COLUMN_DOESNT_EXIST_TO_DROP','Impossibile DROP per colonna %s in quanto non esiste.');
  define('REASON_COLUMN_DOESNT_EXIST_TO_CHANGE','Impossibile CHANGE per colonna %s in quanto non esiste.');
  define('REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS','Impossibile inserire prod-type-layout configuration_key "%s" in quanto gi&agrave; esistente');
  define('REASON_INDEX_DOESNT_EXIST_TO_DROP','Impossibile eseguire drop index %s sulla tabella %s in quanto non esiste.');
  define('REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP','Impossibile eseguire drop primary key sulla tabella %s in quanto non esistente.');
  define('REASON_INDEX_ALREADY_EXISTS','Impossibile aggiungere index %s alla tabella %s in quanto gi&agrave; esistente.');
  define('REASON_PRIMARY_KEY_ALREADY_EXISTS','Impossibile aggiungere primary key alla tabella %s inquanto esiste gi&agrave; una primary key.');
  define('REASON_NO_PRIVILEGES','Utente '.DB_SERVER_USERNAME.'@'.DB_SERVER.' non dispone di %s privilegi per il database '.DB_DATABASE.'.');

?>