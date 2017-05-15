<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// |									|
// | Developed by Paolo De Dionigi - @friends srl - 		|
// | <paolo.dedionigi@atfriends.net> 				|
//| based on similar (anonymous) module for osCommerce		|
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
// $Id: postepay.php  2005-11-19 18:43:10Z wilt $
//
  
  define('MODULE_PAYMENT_POSTEPAY_TEXT_TITLE', 'Ricarica PostePay');
  define('MODULE_PAYMENT_POSTEPAY_TEXT_INTESTATARIO_CARTA', 'Ricarica da effettuare a: ');
  define('MODULE_PAYMENT_POSTEPAY_TEXT_NUMERO_CARTA', 'Nr. Carta PostePay: ');
  define('MODULE_PAYMENT_POSTEPAY_TEXT_DESCRIPTION', 'Modulo per il pagamento tramite Ricarica PostePay.');
  define('MODULE_PAYMENT_POSTEPAY_TEXT_CONFIRMATION', 'I dati per effettuare la Ricarica PostePay saranno inviati al Suo indirizzo e-mail, insieme al riepilogo dell\'ordine, non appena confermato l\'ordine.');
  define('MODULE_PAYMENT_POSTEPAY_TEXT_DELIVERY', 'Provvederemo alla spedizione della merce acquistata non appena contabilizzata la ricarica.');
  define('MODULE_PAYMENT_POSTEPAY_TEXT_EMAIL_FOOTER', MODULE_PAYMENT_POSTEPAY_TEXT_INTESTATARIO_CARTA . MODULE_PAYMENT_POSTEPAY_INTESTATARIO."\n".MODULE_PAYMENT_POSTEPAY_TEXT_NUMERO_CARTA . MODULE_PAYMENT_POSTEPAY_NUMERO_CARTA."\n\n".MODULE_PAYMENT_POSTEPAY_TEXT_DELIVERY);
?>
