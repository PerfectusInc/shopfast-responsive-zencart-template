<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: sqlpatch.php 19537 2011-09-20 17:14:44Z drbyte $
 */

  define('HEADING_TITLE','Ejecutor de consultas SQL');
  define('HEADING_WARNING','ASEGÚRESE DE HACER UNA COPIA DE SEGURIDAD COMPLETA DE SU BASE DE DATOS ANTES DE EJECUTAR SCRIPTS AQUÍ');
  define('HEADING_WARNING2','Si está instalando una contribución de terceros, tenga en cuenta que lo hace bajo su propia responsabilidad.<br />Zen Cart&reg; no ofrece ninguna garantía sobre la seguridad de los scripts suministrados por terceros. ¡Pruébelos antes de instalarlos en su Tienda!');
  define('HEADING_WARNING_INSTALLSCRIPTS', 'AVISO: No debe ejecutar scripts para actualizar la base de datos Zen Cart desde esta página.<br />Para asegurar un proceso lo más fiable suba la nueva carpeta <strong>zc_install</strong> al servidor y ejecute la actualización desde esa ubicación.');
  define('TEXT_QUERY_RESULTS','Resultados de la consulta:');
  define('TEXT_ENTER_QUERY_STRING','Escriba la consulta <br />a ser ejecutada:&nbsp;&nbsp;<br /><br />Asegúrese de<br />terminar con ;');
  define('TEXT_QUERY_FILENAME','Subir archivo:');
  define('ERROR_NOTHING_TO_DO','Error: Nada que hacer - no se especifió consulta o archivo de consulta.');
  define('TEXT_CLOSE_WINDOW', '[ cerrar ventana ]');
  define('SQLPATCH_HELP_TEXT','La herramienta SQLPATCH le permite instalar parches del sistema pegando código SQL directamente en la zona de texto '.
                              'de aquí, o subiendo un archivo de script suministrado (.SQL).<br />' .
                              'Al preparar scripts para ser utilizados con esta herramienta, NO incluya un prefijo de tabala, ya que esta herramienta ' .
                              'insertará automáticamente el prefijo requerido para la base de datos activa, basado en los parámetros en el archivo ' .
                              'admin/includes/configure.php de la tienda (definición DB_PREFIX).<br /><br />' .
                              'Los comandos introducidos o subidos sólo pueden empezar con las siguientes sentencia, y DEBEN estar en MAYÚSCULAS:'.
                              '<br /><ul><li>DROP TABLE IF EXISTS</li><li>CREATE TABLE</li><li>INSERT INTO</li><li>ALTER TABLE</li>' .
                              '<li>UPDATE (sólo una tabla)</li><li>DELETE FROM</li><li>DROP INDEX</li><li>CREATE INDEX</li>' .
                              '<br /><li>SELECT </li></ul>' . 
'<h2>Advanced Methods</h2>Los siguientes métodos se ueden utilizar para sentencias más complejas si es necesario::<br />
Para ejecutar algunos bloques de código juntos, para que sean tratados como un sólo comando por MySQL, necesita configurar el valor "<code>#NEXT_X_ROWS_AS_ONE_COMMAND:xxx</code>" . El parser tratará X número de comandos como uno solo.<br />
Si está ejecutando este archivo a través de phpMyAdmin o equivalente, el comentario "#NEXT..." es ignorado, y el script se procesará correctamente.<br />
<br /><strong>NOTA: </strong>Las sentencias SELECT.... FROM... y LEFT JOIN necesitan que el "FROM" o "LEFT JOIN" estén en una línea por sí mismos para que el parser pueda añadir el prefijo de tabla.<br /><br />
<em><strong>Ejemplos:</strong></em>
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
  define('REASON_TABLE_ALREADY_EXISTS','No se puede crear la tabla %s porque ya existe');
  define('REASON_TABLE_DOESNT_EXIST','No se puede borrar la tabla %s porque no existe.');
  define('REASON_TABLE_NOT_FOUND','No se puede ejecutar porque la tabla %s no existe.');
  define('REASON_CONFIG_KEY_ALREADY_EXISTS','No se puede introducir configuration_key "%s" porque ya existe');
  define('REASON_COLUMN_ALREADY_EXISTS','No se pudo AÑADIR columna %s porque ya existe.');
  define('REASON_COLUMN_DOESNT_EXIST_TO_DROP','No se pudo BORRAR la columna %s porque no existe.');
  define('REASON_COLUMN_DOESNT_EXIST_TO_CHANGE','No se pudo CAMBIAR la columna %s porque no existe.');
  define('REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS','No se pudo insertar prod-type-layout configuration_key "%s" porque ya existe');
  define('REASON_INDEX_DOESNT_EXIST_TO_DROP','No se pudo borrar %s en la tabla %s porque no existe.');
  define('REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP','No se pudo borrar la clave primaria en la tabla %s porque no existe.');
  define('REASON_INDEX_ALREADY_EXISTS','No se pudo añadir el índice %s a la tabla %s porque ya existe.');
  define('REASON_PRIMARY_KEY_ALREADY_EXISTS','No se pudo añadir la clave primaria a la tabla %s porque ya existe la clave primaria.');
  define('REASON_NO_PRIVILEGES','Usuario '.DB_SERVER_USERNAME.'@'.DB_SERVER.' no tiene privilegios de %s para la base de datos '.DB_DATABASE.'.');

?>