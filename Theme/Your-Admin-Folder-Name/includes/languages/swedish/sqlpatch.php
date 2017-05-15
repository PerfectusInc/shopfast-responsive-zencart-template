<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2006 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: sqlpatch.php 4138 2006-08-14 05:56:44Z drbyte $
//
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
  define('HEADING_TITLE','SQL Fr&aring;ge Hanterare');
  define('HEADING_WARNING','SE TILL ATT DU HAR BACKUP AV DIN DATABAS INNAN DU K&Ouml;R N&Aring;GRA UPPDATERINGAR H&Auml;R');
  define('HEADING_WARNING2','Om du installerar tredjeparts moduler, notera att du g&ouml;r detta p&aring; egen risk.<br />Zen Cart&trade; ger ingen garanti g&auml;llande dett f&ouml;r eventuella s&auml;kerhetsrisker. Testa f&ouml;re du anv&auml;nder det p&aring; din riktiga shop!');
  define('TEXT_QUERY_RESULTS','Fr&aring;ge Resultat:');
  define('TEXT_ENTER_QUERY_STRING','Ange fr&aring;ga <br />att k&ouml;ras:&nbsp;&nbsp;<br /><br />Se till att det slutar med<br />ett ;');
  define('TEXT_QUERY_FILENAME','Ladda upp fr&aring;n fil:');
  define('ERROR_NOTHING_TO_DO','FEL: Inget att g&ouml;ra -Ingen fr&aring;ga eller fil fanns.');
  define('TEXT_CLOSE_WINDOW', '[ st&auml;ng f&ouml;nstret ]');
  define('SQLPATCH_HELP_TEXT','SQLPATCH verktyget l&aring;ter dig installera system patcher genom att klistra in SQL direkt i textrutan, '.
                              'eller genom att skicka upp en textfil (.SQL).<br />' .
                              'N&auml;r dessa filer skapas, inkludera INTE tabell prefix, eftersom denna g&ouml;r det ' .
                              'automatiskt till databasen, baserat p&aring; inst&auml;llningarna i shoppens ' .
                              'admin/includes/configure.php fil (DB_PREFIX definationen).<br /><br />' .
                              'Kommandon m&aring;ste skrivas med STORA TECKEN:'.
                              '<br /><ul><li>DROP TABLE IF EXISTS</li><li>CREATE TABLE</li><li>INSERT INTO</li><li>INSERT IGNORE INTO</li><li>ALTER TABLE</li>' .
                              '<li>UPDATE (endast en tabell &aring;t g&aring;ngen)</li><li>UPDATE IGNORE (Endast en tabell &aring;t g&aring;ngen)</li><li>DELETE FROM</li><li>DROP INDEX</li><li>CREATE INDEX</li>' .
                              '<br /><li>SELECT </li></ul>' . 
'<h2>Advancerat L&auml;ge</h2>F&ouml;ljande koder kan anv&auml;ndas f&ouml;r mer komplexa koder:<br />
K&ouml;ra kod tillsammans med varandra som en kod i  MySQL, beh&ouml;ver du "<code>#NEXT_X_ROWS_AS_ONE_COMMAND:xxx</code>" v&auml;rde aktivt.  Sedan k&ouml;rs X antal som ett.<br />
Om du k&ouml;r denna kod genom phpMyAdmin eller liknande, "#NEXT..." kommandot blir ignorerat, och scriotet kan k&ouml;ras &auml;nd&aring;.<br />
<br /><strong>NOTERA: </strong>SELECT.... FROM... och LEFT JOIN beh&ouml;ver "FROM" eller "LEFT JOIN" f&ouml;r att bli p&aring; en rad och f&ouml;r att de skall f&aring; prefix r&auml;tt.<br /><br />
<em><strong>Exempel:</strong></em>
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
  define('REASON_TABLE_ALREADY_EXISTS','Kan inte skapa tabell %s den finns redan');
  define('REASON_TABLE_DOESNT_EXIST','Kan inte ta bort tabell %s den finns inte.');
  define('REASON_TABLE_NOT_FOUND','Kan inte k&ouml;ra tabell %s den finns inte.');
  define('REASON_CONFIG_KEY_ALREADY_EXISTS','Kan inte infoga configuration_key "%s" den finns redan');
  define('REASON_COLUMN_ALREADY_EXISTS','Kan INTE l&auml;gga till kolumn %s den finns redan.');
  define('REASON_COLUMN_DOESNT_EXIST_TO_DROP','Kan inte ta bort kolumn %s den finns inte.');
  define('REASON_COLUMN_DOESNT_EXIST_TO_CHANGE','Kan inte &auml;ndra kolumn %s den finns inte.');
  define('REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS','Kan inte infoga prod-type-layout configuration_key "%s" den finns redan');
  define('REASON_INDEX_DOESNT_EXIST_TO_DROP','Kan inte ta bort index %s f&ouml;r tabell %s den finns inte.');
  define('REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP','Kan inte ta bort primary key f&ouml;r tabellen %s den finns inte.');
  define('REASON_INDEX_ALREADY_EXISTS','Kan inte l&auml;gga till index %s till tabell %s den finns redan.');
  define('REASON_PRIMARY_KEY_ALREADY_EXISTS','Kan inte l&auml;gga till primary key till tabellen %s den finns redan.');
  define('REASON_NO_PRIVILEGES','Anv&auml;ndare '.DB_SERVER_USERNAME.'@'.DB_SERVER.' har inte %s privileger till databasen '.DB_DATABASE.'.');

?>