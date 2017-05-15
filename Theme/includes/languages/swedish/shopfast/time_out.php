<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: time_out.php 3027 2006-02-13 17:15:51Z drbyte $
 */
  /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('NAVBAR_TITLE', 'Inloggnings Time Out');
define('HEADING_TITLE', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Hoppsan! Din session har g&aring;tt ut.');
define('HEADING_TITLE_LOGGED_IN', 'Hoppsan! Ledsen, men du har inte till&aring;telse att utf&ouml;ra beg&auml;rda &aring;tg&auml;rden. ');
define('TEXT_INFORMATION', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><p>Om du h&ouml;ll p&aring; med en best&auml;llning, v&auml;nligen logga in och din varukorg kommer att &aring;terst&auml;llas. Du kan sedan g&aring; tillbaka till kassan och slutf&ouml;ra ditt k&ouml;p. </ p> Om du hade avslutat en order och vill granska den ' . (DOWNLOAD_ENABLED == 'true' ? ', eller hade en nerladdning och ville h&auml;mta den' : '') . ', v&auml;nligen g&aring; till <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Mitt Konto</a> sidan f&ouml;r att visa din order.</p>');

define('TEXT_INFORMATION_LOGGED_IN', 'Du &auml;r fortfarande inloggad p&aring; ditt konto och kan forts&auml;tta handla. V&auml;lj en destination fr&aring;n menyn.');

define('HEADING_RETURNING_CUSTOMER', 'Logga in');
define('TEXT_PASSWORD_FORGOTTEN', 'Gl&ouml;mt ditt l&ouml;senord?')
?>