<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * $Id: discount_coupon.php 14712 2009-10-28 22:05:08Z ajeh $
 */

define('NAVBAR_TITLE', 'Buono Sconto');
define('HEADING_TITLE', 'Buono Sconto');

define('TEXT_INFORMATION', '');
define('TEXT_COUPON_FAILED', '<span class="alert important">%s</span> Il Codice di Riscossione del Buono non sembra essere valido. Per favore prova a inserirlo nuovamente.');

define('HEADING_COUPON_HELP', 'Aiuto Buono Sconto');
define('TEXT_CLOSE_WINDOW', 'Chiudi');
define('TEXT_COUPON_HELP_HEADER', '<p class="bold">Il Codice di Riscossione del Buono Sconto che hai inserito &egrave; per ');
define('TEXT_COUPON_HELP_NAME', '\'%s\'. </p>');
define('TEXT_COUPON_HELP_FIXED', '');
define('TEXT_COUPON_HELP_MINORDER', '<p>Per poter usare questo buono devi spendere almeno %s, scegliendo tra i prodotti interessati.</p>');
define('TEXT_COUPON_HELP_FREESHIP', '');
define('TEXT_COUPON_HELP_DESC', '<p><span class="bold">Offerta Sconto:</span> %s</p><p class="smallText">Alcune limitazioni possono essere applicate. Per favore esamina qui sotto per ulteriori dettagli.</p>');
define('TEXT_COUPON_HELP_DATE', '<p>Il Buono &egrave; valido tra %s e %s</p>');
define('TEXT_COUPON_HELP_RESTRICT', '<p class="biggerText bold">Limitazione del Buono Sconto</p>');
define('TEXT_COUPON_HELP_CATEGORIES', '<p class="bold">Limitazioni dir Categoria:</p>');
define('TEXT_COUPON_HELP_PRODUCTS', '<p class="bold">Limitazioni di Prodotto:</p>');
define('TEXT_ALLOW', 'Consenti');
define('TEXT_DENY', 'Nega');
define('TEXT_NO_CAT_RESTRICTIONS', '<p>Questo buono &egrave; valido per tutte le categorie.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>Questo buono &egrave; valido per tutti i prodotti.</p>');
define('TEXT_CAT_ALLOWED', ' (Valido per questa categoria)');
define('TEXT_CAT_DENIED', ' (Non disponibile per questa categoria)');
define('TEXT_PROD_ALLOWED', ' (Valido per questo prodotto)');
define('TEXT_PROD_DENIED', ' (Non disponibile per questo prodotto)');
// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','<p class="smallText">I buoni di sconto non possono essere applicati per l\'acquisto di  ' . TEXT_GV_NAMES . '. Il limite &egrave; di 1 buono per ordine.</p>');

define('TEXT_DISCOUNT_COUPON_ID_INFO', 'Ricerca Buono Sconto ... ');
define('TEXT_DISCOUNT_COUPON_ID', 'Il tuo Codice: ');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Si applicano le limitazioni all\'indirizzo di fatturazione.');

?>