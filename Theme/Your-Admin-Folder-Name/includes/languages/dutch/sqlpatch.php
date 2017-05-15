<?php
/**
 * @package admin languageDefines Dutch Zen Cart Version 1.5.3
 * @ Maintained by Zen4All (http://zen4all.nl)
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: sqlpatch.php 19537 2011-09-20 17:14:44Z drbyte $
 */

  define('HEADING_TITLE','Uitvoeren SQL Query');
  define('HEADING_WARNING','ZORG VOOR EEN VOLLEDIGE DATABASE BACKUP VOORDAT JE HIER VERDER GAAT!!!!');
  define('HEADING_WARNING2','Installatie van 3rd-party bijdragen zijn voor eigen risico. Zen Cart&trade; geeft op geen enkel manier garantie, ook niet voor de veiligheid van scripts uit 3rd-partij bijdragen. Test uitgebreid voordat je deze scripts gebruikt in je <strong>live database</strong>!');
  define('HEADING_WARNING_INSTALLSCRIPTS', 'Opmerking: Zen Cart database-upgrade scripts mogen NIET vanuit deze pagina worden uitgevoerd.<br />Upload de nieuwe <strong>zc_install</strong> directory en voer daar de upgrade uit voor betere betrouwbaarheid.');
  define('TEXT_QUERY_RESULTS','Query resultaten:');
  define('TEXT_ENTER_QUERY_STRING','Vul de query in <br />die moet worden uitgevoerd:&nbsp;&nbsp;<br /><br />Zorg er voor dat deze query<br />eindigt met ;');
  define('TEXT_QUERY_FILENAME','SQL-bestand ophalen van server of lokale computer:');
  define('ERROR_NOTHING_TO_DO','Foutmelding: niet uitgevoerd - geen query of query-bestand geselecteerd.');
  define('TEXT_CLOSE_WINDOW', '[ sluit venster ]');
  define('SQLPATCH_HELP_TEXT','De SQLPATCH tool maakt het mogelijk om "system patches" te installeren door SQL code direct in het tekstscherm te plakken '.
                            'of door het ophalen van een bijgeleverd script (.SQL) bestand.<br />'.
                              'Bij de voorbereiding van scripts die gebruikt worden door deze SQLPATCH tool is het belangrijk er voor te zorgen dat er geen "tabel prefix" wordt bijgevoegd. De benodigde "tabel prefix" wordt '.
                              'automatisch toegevoegd gebaseerd op de instellingen van het bestand '.
                              'admin/includes/configure.php file (DB_PREFIX definition).<br /><br />' .
                              'De enige commando\'s die gebruikt mogen worden zijn (ALLEEN IN HOOFDLETTERS):'.
                              '<br /><ul><li>DROP TABLE IF EXISTS</li><li>CREATE TABLE</li><li>INSERT INTO</li><li>INSERT IGNORE INTO</li><li>ALTER TABLE</li>' .
                              '<li>UPDATE (just a single table)</li><li>UPDATE IGNORE (just a single table)</li><li>DELETE FROM</li><li>DROP INDEX</li><li>CREATE INDEX</li>' .
                              '<br /><li>SELECT </li></ul>' .
'<h2>Geavanceerde methoden</h2>De volgende methoden kunnen worden gebruikt voor meer complexe "statements" indien nodig:<br />
Om blokken code samen als één commando door MySQL te laten uitvoeren is het noodzakelijk om de volgende code regel uit te voeren: "<code>#NEXT_X_ROWS_AS_ONE_COMMAND:xxx</code>". De parser leest "X number of commands" als één opdracht.<br />
Als je dit commando uitvoert via <strong>phpMyAdmin</strong> of een vergelijkbaar programma,
dan wordt het "#NEXT..." commando genegeerd en het script probleemloos uitgevoerd.<br />
<br /><strong>Opmerking:</strong>"SELECT.... FROM... and LEFT JOIN statements" hebben het "FROM" of "LEFT JOIN" statement nodig op dezelfde regel om de "tabel prefix" te kunnen toevoegen.<br /><br />
<em><strong>Voorbeelden:</strong></em>
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
  define('REASON_TABLE_ALREADY_EXISTS','Maken van tabel %s niet mogelijk omdat deze al bestaat.');
  define('REASON_TABLE_DOESNT_EXIST','"Drop" tabel %s" niet mogelijk omdat deze niet bestaat.');
  define('REASON_TABLE_NOT_FOUND','Uitvoeren opdracht niet mogelijk omdat tabel %s niet bestaat.');
  define('REASON_CONFIG_KEY_ALREADY_EXISTS','Toevoegen "configuration_key" "%s" niet mogelijk omdat deze al bestaat.');
  define('REASON_COLUMN_ALREADY_EXISTS','Toevoegen kolom %s niet mogelijk omdat deze al bestaat.');
  define('REASON_COLUMN_DOESNT_EXIST_TO_DROP',' "Drop" kolom %s niet mogelijk omdat deze niet bestaat.');
  define('REASON_COLUMN_DOESNT_EXIST_TO_CHANGE','Aanpassen kolom %s niet mogelijk omdat deze niet bestaat.');
  define('REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS','Invoegen "prod-type-layout configuration_key" %s niet mogelijk omdat deze al bestaat.');
  define('REASON_INDEX_DOESNT_EXIST_TO_DROP','"Drop" index %s van tabel %s is niet mogelijk omdat deze niet bestaat.');
  define('REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP','"Drop primary key" van tabel %s is niet mogelijk omdat deze niet bestaat.');
  define('REASON_INDEX_ALREADY_EXISTS','Toevoegen index %s aan table %s niet mogelijk omdat deze al bestaat.');
  define('REASON_PRIMARY_KEY_ALREADY_EXISTS','Toevoegen "primary key" aan tabel %s niet mogelijk omdat "primary key" al bestaat.');
  define('REASON_NO_PRIVILEGES','Gebruiker '.DB_SERVER_USERNAME.'@'.DB_SERVER.' heeft geen %s bevoegdheden voor '.DB_DATABASE.'.');

