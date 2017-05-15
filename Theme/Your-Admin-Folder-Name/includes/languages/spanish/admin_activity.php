<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
/**
 * @package admin
 * @copyright Copyright 2003-2014 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: admin_activity.php drbyte Modified in v1.5.4 $
 */

define('HEADING_TITLE', 'Gestión de los Archivos de Actividad Admin');
define('HEADING_SUB1', 'Examinar o Exportar Archivos');
define('HEADING_SUB2', 'Limpiar el historial de archivos');
define('TEXT_ACTIVITY_EXPORT_FORMAT', 'Formato de archivo de exportación:');
define('TEXT_ACTIVITY_EXPORT_FILENAME', 'Nombre de archivo de exportación:');
define('TEXT_ACTIVITY_EXPORT_SAVETOFILE', '¿Guardar en el servidor? (si no, se descargará directamente desde esta ventana)');
define('TEXT_ACTIVITY_EXPORT_DEST', 'Destino: ');
define('TEXT_PROCESSED', ' Procesado.');
define('SUCCESS_EXPORT_ADMIN_ACTIVITY_LOG', 'Exportación terminada: ');
define('FAILURE_EXPORT_ADMIN_ACTIVITY_LOG', 'AVISO: La exportación falló. No se pudo escribir el archivo');

define('TEXT_INSTRUCTIONS','<u>INSTRUCCIONES</u><br />En esta página se puede exportar el archivo de actividades Admin Zen Cart&reg; a un archivo CSV para guardar.<br />Debe archivar esta información por si acaso es requerida en una investigación de fraude. Es imprescindible para cumplir con la ley PCI.<br />
<ol><li>Elija mostrar o exportar un archivo.<li>Escriba un nombre para el archivo.<li>Pulse en Guardar para seguir.<li>Elija si quiere guardar o abrir el archivo, dependiendo de lo que ofrece el navegador.</ol>');

define('TEXT_INFO_ADMIN_ACTIVITY_LOG', '<strong>Tabla del Archivo de Admin vacío en la base de datos<br />¡AVISO: ASEGÚRESE DE HACER UNA COPIA DE SEGURIDAD DE LA BASE DE DATOS ANTES DE INICIAR ESTA ACTUALIZACIÓN!</strong><br />El Archivo de Actividades Admin es un método para grabar las actividades en el Admin. <br />Puede aumentar en tamaño rápidamente; hay que vaciarlo a menudo.<br />Salen avisos cuando la tabla alcanza 50.000 actividades o han pasado 60 días.<br /><span class="alert">NOTA: Para cumplir con PCI, debe guardar estos datos de actividad durante 12 meses.<br />Recomendamos que guarde un copia - EXPORTAR A CSV, y GUARDAR - antes de limpiar el archivo.</span>');
define('TEXT_ADMIN_LOG_PLEASE_CONFIRM_ERASE', '<strong><span class="alert">¡PRECAUCIÓN! Se dispone a BORRAR entradas *importantes* de las Actividades de Admin de la base de datos.</span></strong><br />Asegúrese de que tiene un backup de estas entradas ANTES de borrarlas.<br />Si continúa, ud. acepta que está borrando las entradas y que entiende sus responsabilidades legales con respecto a estas entradas.<br /><br />Entiendo mis responsabilidades y quiero borrar los datos cuando pincho en Resetear:<br />');
define('SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG', 'El archivo del Actividades de Admin ha sido <strong>borrado</strong>');
define('TEXT_NO_RECORDS_FOUND', 'No se encontró actividades utilizando el filtro que seleccionó.');

define('TEXT_EXPORTFORMAT0', 'Exportar como  HTML (para ver en pantalla)');
define('TEXT_EXPORTFORMAT1', 'Exportar como CSV (para ver como una hoja de cálculo)');
define('TEXT_EXPORTFORMAT2', 'Exportar como TXT');
define('TEXT_EXPORTFORMAT3', 'Exportar como XML');

define('TEXT_ACTIVITY_EXPORT_FILTER', '¿Qué tipo de actividades quiere examinar?');
define('TEXT_EXPORTFILTER0', 'Todos los datos de actividad');
define('TEXT_EXPORTFILTER1', 'INFO – Actividades generales');
define('TEXT_EXPORTFILTER2', 'NOTICE – Actividades para revisar de vez en cuando');
define('TEXT_EXPORTFILTER3', 'WARNING – Actividades para revisar a diario’);
define('TEXT_EXPORTFILTER4', 'NOTICE + WARNING (la combinación más común para revisar).');

define('TEXT_INTERPRETING_LOG_DATA', '<h2>Interpretación de los datos</h2><ul>
<li><strong>Severidad</strong> - Las estándares de historiales suelen definir los niveles de importancia así:<ul>
<li><strong>INFO</strong> - actividades generales de administración.</li>
<li><strong>NOTICE</strong> - actividades que precisa un nivel de acceso mayor; puede incluir la creación de usuarios nuevos o añadir módulos de pago nuevo. También graba el envío de páginas web cuando incluye contenido potencialmente peligroso, como etiquetas script o iframe que puede haber sido añadido por empleados descontentos o intrusos. Debería revisar estos actividades a menudo.</li>
<li><strong>WARNING</strong> - actividades CRíTICAS como cambios en los módulos de pago o el borrado de una cuenta de un administrador que puede significar problemas urgentes. Debería revisarlos a diario.</li>
</ul></li><!-- steve added /li-->
<li><strong>admin_user</strong> - Muestra el número ID de la cuenta del administrador y su nombre de usuario. Si no ha entrado en su cuenta, muestra 0.</li>
<li><strong>page_accessed</strong> - Muestra el nombre de la página visitada, indicado el tipo de actividad.</li>
<li><strong>parameters</strong> - Muestra los parámetros del URI de la página visitada, para ofrecer más información al tipo de actividad.</li>
<li><strong>flagged</strong> - Si este campo está puesto a 1, indica que debería inspeccionar el campo “postdata” para contenido no autorizado como etiquetas script o iframe. Habrá una explicación de contenido sospechoso en el campo “attention”.</li>
<li><strong>attention</strong> - Muestra sugerencias relacionada al campo “postdata”.</li>
<li><strong>logmessage</strong> - Muestra cualquier mensaje generado por el sistema sobre la actividad, como la instalación de un módulo.</li>
<li><strong>postdata</strong> - Muestra los datos POST (sin el contenido sensible) para facilitar la investigación en el caso de sospechar actividad maliciosa.</li>
</ul>');
