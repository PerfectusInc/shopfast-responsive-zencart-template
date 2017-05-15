<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: products_price_manager.php 18695 2011-05-04 05:24:19Z drbyte $
 */
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('HEADING_TITLE', 'Produkt Pris Hanteraren');
define('HEADING_TITLE_PRODUCT_SELECT','V&auml;lj en Kategori med Produkter f&ouml;r att visa pris informationen om ...');

define('TABLE_HEADING_PRODUCTS', 'Produkt');
define('TABLE_HEADING_PRODUCTS_MODEL','Art.nr');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Produkt Pris/Erbjudande/Rea');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Procent');
define('TABLE_HEADING_AVAILABLE_DATE', 'Tillg&auml;nglig');
define('TABLE_HEADING_EXPIRES_DATE','Avslutas');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', '&Aring;tg&auml;rd');

define('TEXT_PRODUCT_INFO', 'Produkt Info:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Produkt Pris Info:');
define('TEXT_PRODUCTS_MODEL','Art.nr:');
define('TEXT_PRICE', 'Pris');
define('TEXT_PRODUCT_AVAILABLE_DATE', 'Tillg&auml;nglig den:');
define('TEXT_PRODUCTS_STATUS', 'Produkt Status:');
define('TEXT_PRODUCT_AVAILABLE', 'I Lager');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Ej I Lager');

define('TEXT_PRODUCT_INFO_NONE', 'V&auml;lj en produkt fr&aring;n ovan ...');
  define('TEXT_PRODUCT_IS_FREE','Produkt &auml;r Gratis:');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','<br />*Produkt markerad Gratis');
  define('TEXT_PRODUCT_IS_CALL','Ring F&ouml;r Pris:');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','<br />*Produkten m&auml;rkt RING F&Ouml;R PRIS');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','Pris efter alternativ:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','Ja');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','Nej');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','<br />*Visa Pris inkluderar l&auml;gsta grupp alternativ pris plus pris');
  define('TEXT_PRODUCTS_MIXED','Antal Min/Enhet Mix:');
  define('TEXT_PRODUCTS_MIXED_DISCOUNT_QUANTITY', 'R&auml;kna av Antal Efter Mixat Alternativ');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','Min Antal:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','Antal Enheter:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','Max Antal:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0= Obegr&auml;nsat<br />1= Ingen antal ruta/Max V&auml;rde');

define('TEXT_FEATURED_PRODUCT_INFO', 'Utvalda Produkter Info:');
define('TEXT_FEATURED_PRODUCT', 'Produkt:');
define('TEXT_FEATURED_EXPIRES_DATE', 'Slut Datum:');
define('TEXT_FEATURED_AVAILABLE_DATE', 'Start Datum:');
define('TEXT_FEATURED_PRODUCTS_STATUS', 'Status:');
define('TEXT_FEATURED_PRODUCT_AVAILABLE', 'Aktiv');
define('TEXT_FEATURED_PRODUCT_NOT_AVAILABLE', 'Inaktiv');
define('TEXT_FEATURED_DISABLED', '<strong>NOTERA: Utvalda Produkter Info &auml;r avst&auml;ngt, Avslutat eller inte aktivt</strong>');
define('TEXT_FEATURED_CONFIRM_DELETE', 'V&auml;nligen bekr&auml;fta att du vill radera statusen f&ouml;r utvalda produkter associerade med denna produkt');


define('TEXT_SPECIALS_PRODUCT', 'Produkt:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Erbjudande Pris:');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Slut Datum:');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Start Datum:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Erbjudande Noteringar:</b><ul><li>Du kan ange procent i erbjudande pris f&auml;ltet, f&ouml;r exempel: <b>20%</b></li><li>Om du anger ett nytt pris, m&aring;ste decimaltecknet vara \'.\' (decimal-punkt), exempel: <b>49.99</b></li><li>L&auml;mna SLut Dautm tomt om den skall forts&auml;tta tills den tas bort manuellt</li></ul>');
define('TEXT_SPECIALS_PRODUCT_INFO', 'Erbjudande Pris Info:');
define('TEXT_SPECIALS_PRODUCTS_STATUS', 'Erbjudande Status:');
define('TEXT_SPECIALS_PRODUCT_AVAILABLE', 'Aktiv');
define('TEXT_SPECIALS_PRODUCT_NOT_AVAILABLE', 'Inaktiv');
define('TEXT_SPECIALS_NO_GIFTS','Inga Erbjudanden p&aring; Presentkort (GV)');
define('TEXT_SPECIAL_DISABLED', '<strong>NOTERA: Erbjudande Produkt Info &auml;r avst&auml;ngt, avslutat eller inte aktivt</strong>');
define('TEXT_SPECIALS_CONFIRM_DELETE', 'V&auml;nligen bekr&auml;fta att du vill radera statusen f&ouml;r erbjudande associerade med denna produkt');


define('TEXT_INFO_DATE_ADDED', 'Datum Skapad:');
define('TEXT_INFO_LAST_MODIFIED', 'Senast &Auml;ndrad:');
define('TEXT_INFO_NEW_PRICE', 'Nytt Pris:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Original Pris:');
define('TEXT_INFO_PERCENTAGE', 'Procent:');
define('TEXT_INFO_AVAILABLE_DATE', 'Tillg&auml;nglig:');
define('TEXT_INFO_EXPIRES_DATE', 'Avslutas:');
define('TEXT_INFO_STATUS_CHANGE', 'Status &Auml;ndring:');
define('TEXT_IMAGE_NONEXISTENT', 'Ingen Bild Finns');

define('TEXT_INFO_HEADING_DELETE_FEATURED', 'Radera Utvald Produkt');
define('TEXT_INFO_DELETE_INTRO', '&Auml;r du s&auml;ker p&aring; att du vill radera den utvalda produkten?');

  define('TEXT_ATTRIBUTES_INSERT_INFO', '<strong>&Auml;ndra Alternativ inst&auml;llningarna och klicka p&aring; Infoga f&ouml;r att l&auml;gga till</strong>');
  define('TEXT_PRICED_BY_ATTRIBUTES', 'Pris efter alternativ');
  define('TEXT_PRODUCTS_PRICE', 'Produkt Pris: ');
  define('TEXT_SPECIAL_PRICE', 'Erbjudande Pris: ');
  define('TEXT_SALE_PRICE', 'REA Pris: ');
  define('TEXT_FREE', 'Gratis');
  define('TEXT_CALL_FOR_PRICE', 'Ring F&ouml;r Pris');

define('TEXT_ADD_ADDITIONAL_DISCOUNT', 'L&auml;gg till ' . DISCOUNT_QTY_ADD . ' Blanka Antal Rabatt rader:');
define('TEXT_BLANKS_INFO','Alla 0 Antal rabatter raderas vid uppdatering');
define('TEXT_INFO_NO_DISCOUNTS', 'Inga Antal rabatter har angivits');
define('TEXT_PRODUCTS_DISCOUNT_QTY_TITLE', 'Rabatt Niv&aring;');
define('TEXT_PRODUCTS_DISCOUNT','Rabatt');
define('TEXT_PRODUCTS_DISCOUNT_QTY','Minsta Antal');
define('TEXT_PRODUCTS_DISCOUNT_PRICE','Rabatt V&auml;rde');
define('TEXT_PRODUCTS_DISCOUNT_TYPE','Typ');

define('TEXT_PRODUCTS_DISCOUNT_PRICE_EACH','Ber&auml;kna Pris:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED','Ut&ouml;kat Pris:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EACH_TAX','Ber&auml;kna<br />Pris: &nbsp; inkl moms:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED_TAX','Ut&ouml;kat<br />Pris: &nbsp; inkl moms:');

define('TEXT_EACH','st.');
define('TEXT_EXTENDED','total');

define('TEXT_DISCOUNT_TYPE_INFO', 'Produkt Rabatt Info');
define('TEXT_DISCOUNT_TYPE','Rabatt Typ:');
define('TEXT_DISCOUNT_TYPE_FROM', 'Rabatt Pris fr&aring;n:');

define('DISCOUNT_TYPE_DROPDOWN_0','Inget');
define('DISCOUNT_TYPE_DROPDOWN_1','Procent');
define('DISCOUNT_TYPE_DROPDOWN_2','Aktuellt pris');
define('DISCOUNT_TYPE_DROPDOWN_3','Summa av');

define('DISCOUNT_TYPE_FROM_DROPDOWN_0','Pris');
define('DISCOUNT_TYPE_FROM_DROPDOWN_1','Erbjudande');

define('TEXT_UPDATE_COMMIT','Uppdatera och Bekr&auml;fta alla fr&aring;n aktuell sk&auml;rmbild');

define('TEXT_PRODUCTS_TAX_CLASS', 'Skatteklass:');

define('TEXT_INFO_MASTER_CATEGORIES_ID_WARNING', '<strong>Varning:</strong> Produkt Huvudkategori ID# %s matchar inte aktuellt Kategori ID# %s och Produkt &auml;r Inte l&auml;nkad!');
define('TEXT_INFO_MASTER_CATEGORIES_CURRENT', ' Aktuellt Kategori ID# %s matchar Huvudkategori ID# %s');
define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE_TO_CURRENT', 'Uppdatera Huvudkategori ID# %s att matcha AKtuellt Kategori ID# %s');

define('PRODUCT_WARNING_UPDATE', 'Utf&ouml;r dina &auml;ndringar och klicka p&aring; Uppdatera f&ouml;r att');
define('PRODUCT_UPDATE_SUCCESS', 'Uppdateringen av Produktens &auml;ndringar lyckades!');
define('PRODUCT_WARNING_UPDATE_CANCEL', '&Auml;ndringar avbr&ouml;ts och sparades inte ...');
define('TEXT_INFO_EDIT_CAUTION', '<strong>Klicka p&aring; starta f&ouml;r att b&ouml;rja ...</strong>');
define('TEXT_INFO_PREVIEW_ONLY', 'Visa Endast ... Aktuellt Pris Status ... Preview Only');
define('TEXT_INFO_UPDATE_REMINDER', '<strong>&Auml;ndra Produkt Information klicka sedan p&aring; Uppdatera f&ouml;r att spara</strong>');