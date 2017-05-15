<?php //Spanish Language Pack for Zen Cart 1.5: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
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
// $Id: ssl_check.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('NAVBAR_TITLE', 'Comprobación de seguridad');
define('HEADING_TITLE', 'Comprobación de Seguridad');

define('TEXT_INFORMATION', 'Detectamos que su navegador generó un ID de sesión SSL diferente al que fue usado en nuestras páginas seguras.');
define('TEXT_INFORMATION_2', 'Por motivos de seguridad, necesitará identificarse de nuevo para continuar comprando online.');
define('TEXT_INFORMATION_3', 'Algunos navegadores, como el Konqueror 3.1, no tienen la capacidad de generar el ID de sesión SSL automáticamente. Si usted es usuario de este navegador, le recordamos que haga uso de otro para continuar con su compra online. Si no tiene otro navegador instalado en su ordenador, puede descargar uno compatible: <a http://www.firefox.com/" target="_blank">Firefox</a>.');
define('TEXT_INFORMATION_4', 'Se ha tomado esta medida de seguridad por su bien, le pedimos disculpas por cualquier inconveniente que le haya sido causado.');
define('TEXT_INFORMATION_5', 'Por favor, contacte con la administración de la tienda si tiene cualquier cuestión relacionada con estos requerimientos, o para comprar productos de manera offline.');

define('BOX_INFORMATION_HEADING', 'Privacidad y Seguridad');
define('BOX_INFORMATION', 'Validamos el ID de sesión SSL generado automáticamente por su navegador en cada petición de página segura a este servidor.<br /><br />Esta validación nos asegura de que es usted realmente quien navega con su cuenta de usuario y no otra persona.');
?>