<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 *  $Id: featured.php 18695 2011-05-04 05:24:19Z drbyte $
 */
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */

define('HEADING_TITLE', 'Utvalda Produkter');

define('TABLE_HEADING_PRODUCTS', 'Produkt');
define('TABLE_HEADING_PRODUCTS_MODEL','Art.nr');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Produkt Pris/Erbjudande/REA');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Procent');
define('TABLE_HEADING_AVAILABLE_DATE', 'Tillg&auml;nglig');
define('TABLE_HEADING_EXPIRES_DATE','Avslutas');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', '&Aring;tg&auml;rd');

define('TEXT_FEATURED_PRODUCT', 'Produkt:');
define('TEXT_FEATURED_EXPIRES_DATE', 'Avslutas Datum:');
define('TEXT_FEATURED_AVAILABLE_DATE', 'Tillg&auml;nglig Datum:');

define('TEXT_INFO_DATE_ADDED', 'Datum inlagd:');
define('TEXT_INFO_LAST_MODIFIED', 'Senast &auml;ndrad:');
define('TEXT_INFO_NEW_PRICE', 'Nytt pris:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Original Pris:');
define('TEXT_INFO_PERCENTAGE', 'Procent:');
define('TEXT_INFO_AVAILABLE_DATE', 'Tillg&auml;nglig den:');
define('TEXT_INFO_EXPIRES_DATE', 'Avslutas den:');
define('TEXT_INFO_STATUS_CHANGE', 'Status &Auml;ndring:');
define('TEXT_IMAGE_NONEXISTENT', 'Ingen bild finns');

define('TEXT_INFO_HEADING_DELETE_FEATURED', 'Radera utvald produkt');
define('TEXT_INFO_DELETE_INTRO', '&Auml;r du s&auml;ker p&aring; att du vill radera denna utvalda produkt?');
define('SUCCESS_FEATURED_PRE_ADD', 'Lyckat: &Aring;teraktivering av utvald produkt ... v&auml;nligen uppdatera datumen ...');
define('WARNING_FEATURED_PRE_ADD_EMPTY', 'Varning: Inget Produkt ID specifierad ... inget har lagts till ...');
define('WARNING_FEATURED_PRE_ADD_DUPLICATE', 'Varning: Produkt ID finns redan som utvald produkt ... inget har lagts till ...');
define('WARNING_FEATURED_PRE_ADD_BAD_PRODUCTS_ID', 'Varning: Produkt ID &auml;r felaktigt ... inget har lagts till ...');
define('TEXT_INFO_HEADING_PRE_ADD_FEATURED', 'Manuellt lagt till ny utvald produkt genom produkt ID');
define('TEXT_INFO_PRE_ADD_INTRO', 'P&aring; stora databaser, du kan Manuellt l&auml;gga till en utvald produkt genom Produkt ID<br /><br />Detta &auml;r b&auml;sta s&auml;ttet n&auml;r sidan tar l&aring;ng tid att ladda och att v&auml;lja fr&aring;n valrutan n&auml;stan &auml;r om&ouml;jligt d&aring; f&ouml;r m&aring;nga produkter finns att v&auml;lja mellan.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'V&auml;nligen ange Produkt ID som skall &aring;teraktiveras: ');
define('TEXT_INFO_MANUAL', 'Produkt ID f&ouml;r Manuellt l&auml;ggas till som utvald produkt');
?>