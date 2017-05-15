<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: modules.php 19287 2011-07-28 15:51:25Z drbyte $
 */
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('HEADING_TITLE_MODULES_PAYMENT', 'Betalnings Moduler');
define('HEADING_TITLE_MODULES_SHIPPING', 'Frakt Moduler');
define('HEADING_TITLE_MODULES_ORDER_TOTAL', 'Order Total Moduler');
define('HEADING_TITLE_MODULES_PRODUCT_TYPES', 'Produkt Typ Moduler');

define('TABLE_HEADING_MODULES', 'Moduler');
define('TABLE_HEADING_SORT_ORDER', 'Sorteringsordning');
define('TABLE_HEADING_ORDERS_STATUS','Order Status');
define('TABLE_HEADING_ACTION', 'Funktion');

define('TEXT_MODULE_DIRECTORY', 'Modul Katalog:');
define('WARNING_MODULES_SORT_ORDER','VARNING: DU HAR DUBBLETTER P&Aring; SORTERINGSORDNING VILKET GER R&Auml;KNEFEL<br />V&Auml;NLIGEN R&Auml;TTA TILL DETTA NU!');
define('ERROR_MODULE_FILE_NOT_FOUND', 'FEL: modulen inaktiverades p&aring;grund av att ingen spr&aring;kfil hittades: ');
define('TEXT_EMAIL_SUBJECT_ADMIN_SETTINGS_CHANGED', 'VARNING: Dina Administrations inst�llningar har blivit �ndrade i din online butik.');
define('TEXT_EMAIL_MESSAGE_ADMIN_SETTINGS_CHANGED', 'Detta �r ett automatiskt e-postmeddelande fr�n din Zen Cart butik f�r att varna dig om en f�r�ndring som bara gjordes f�r dina administrativa inst�llningar: ' . "\n\n" . 'NOTERA: Admin inst�llningarna har �ndrats f�r [%s] modulen, av din Zen Cart admin anv�ndare %s.' . "\n\n" . 'Om du inte har gjort dessa �ndringar, �r det rekommenderat att du kontrollerar dina inst�llningar.' . "\n\n" . '�r du redan medveten om dessa �ndringar, kan du ignorera detta automatiska meddelande.');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_INSTALLED', 'Detta �r ett automatiskt e-postmeddelande fr�n din Zen Cart butik f�r att varna dig om en f�r�ndring som bara gjordes f�r dina administrativa inst�llningar: ' . "\n\n" . 'NOTERA: Admin inst�llningarna har �ndrats. [%s] modulen har INSTALLERATS av din Zen Cart admin anv�ndare %s.' . "\n\n" . 'Om du inte har gjort dessa �ndringar, �r det rekommenderat att du kontrollerar dina inst�llningar.' . "\n\n" . '�r du redan medveten om dessa �ndringar, kan du ignorera detta automatiska meddelande.');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_REMOVED', 'Detta �r ett automatiskt e-postmeddelande fr�n din Zen Cart butik f�r att varna dig om en f�r�ndring som bara gjordes f�r dina administrativa inst�llningar: ' . "\n\n" . 'NOTERA: Admin inst�llningarna har �ndrats. [%s] modulen har RADERATS av din Zen Cart admin anv�ndare %s.' . "\n\n" . 'Om du inte har gjort dessa �ndringar, �r det rekommenderat att du kontrollerar dina inst�llningar.' . "\n\n" . '�r du redan medveten om dessa �ndringar, kan du ignorera detta automatiska meddelande.');
define('TEXT_DELETE_INTRO', '&Auml;r du s&auml;ker p&aring; att du vill radera denna modul?');
define('TEXT_WARNING_SSL_EDIT', 'VARNING: <a href="http://tutorials.zen-cart.com/index.php?article=14" target="_blank">F&ouml;r s&auml;kerhets skull, &Auml;ndringar av denna modul &auml;r inaktiverade tills Admin &auml;r konfigurerad f&ouml;r SSL</a>.');
define('TEXT_WARNING_SSL_INSTALL', 'VARNING: <a href="http://tutorials.zen-cart.com/index.php?article=14" target="_blank">F&ouml;r s&auml;kerhets skull, Installering av denna modul &auml;r inaktiverade tills Admin &auml;r konfigurerad f&ouml;r SSL</a>.');