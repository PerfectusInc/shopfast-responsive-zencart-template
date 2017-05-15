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
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
// $Id: gv_faq.php 4155 2006-08-16 17:14:52Z ajeh $
//
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('NAVBAR_TITLE', TEXT_GV_NAME . ' FoS');
define('HEADING_TITLE', TEXT_GV_NAME . ' FoS');

define('TEXT_INFORMATION', '<a name="Top"></a>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=1','NONSSL').'">K&ouml;pa ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=2','NONSSL').'">Hur skicka ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=3','NONSSL').'">K&ouml;pa med ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=4','NONSSL').'">L&ouml;sa in ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=5','NONSSL').'">N&auml;r problem uppst&aring;r</a><br />
');
switch ($_GET['faq_item']) {
  case '1':
define('SUB_HEADING_TITLE','K&ouml;pa ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT', TEXT_GV_NAMES . ' k&ouml;pes precis som alla andra produkter i butiken. Du kan betala f&ouml;r dem md butikens vanliga betalningsmetoder.
  N&auml;r du k&ouml;pt ' . TEXT_GV_NAME . ' kommer dess v&auml;rde l&auml;ggas till i ditt
   ' . TEXT_GV_NAME . ' konto. om du har medel i ditt ' . TEXT_GV_NAME . ' Konto, Kan du nu notera att beloppet syns i kundkorgsrutan, och &auml;ven visa en l&auml;nk
  till sida d&auml;r du kan skicka din ' . TEXT_GV_NAME . ' till n&aring;gon via e-post.');
  break;
  case '2':
define('SUB_HEADING_TITLE','Hur skicka ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT','F&ouml;r att skicka ' . TEXT_GV_NAME . ' M&aring;ste du g&aring; till v&aring;r skicka ' . TEXT_GV_NAME . ' Sida. Du kan
 hitta en l&auml;nk p&aring; kundkorgssidan.
  N&auml;r du skickar ' . TEXT_GV_NAME . ', m&aring;ste du ange f&ouml;ljande information:<br />
  1. Namnet p&aring; personen som ' . TEXT_GV_NAME . ' skickas till.<br />
  2. e-post adressen till den som ' . TEXT_GV_NAME . ' skickas till.<br />
  3. Beloppet som skall skickas. (Notera att du INTE beh&ouml;ver skicka hela det beloppet som 
  &auml;r i ditt ' . TEXT_GV_NAME . ' Konto.)<br />
  4. Ett kort meddelande som skall visas i e-postmeddelandet.<br /><br />
  Se till att du angivit all information korrekt, d&aring; du INTE kan &aring;ngra detta
  n&auml;r meddelandet har skickats.');
  break;
  case '3':
  define('SUB_HEADING_TITLE','K&ouml;pa med ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT','Om du har medel i ditt ' . TEXT_GV_NAME . ' Konto, kan du anv&auml;nda dessa f&ouml;r att
  k&ouml;pa andra produkter i butiken. I kassan, en extra ruta visas
  Ange summan du vill anv&auml;nda fr&aring;n ditt ' . TEXT_GV_NAME . ' Konto.
  V&auml;nligen notera, du m&aring;ste fortfarande v&auml;lja ett annat betalningss&auml;tt om
  det INTE finns medel i ditt ' . TEXT_GV_NAME . ' Konto f&ouml;r att t&auml;cka k&ouml;pet.
  Om du har mer medel i ditt ' . TEXT_GV_NAME . ' Konto &auml;n den totala kostnaden av k&ouml;pet. 
  Den resterade summan kommer finnas kvar p&aring; ditt ' . TEXT_GV_NAME . ' Konto f&ouml;r framtida bruk.');
  break;
  case '4':
  define('SUB_HEADING_TITLE','L&ouml;sa ut ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT','Om du f&aring;tt ett ' . TEXT_GV_NAME . ' med e-post, inneh&aring;ller det ett meddelande om
  vem som skickat dig detta ' . TEXT_GV_NAME . ', tillsammans med ett kort meddelande. Meddelandet inneh&aring;ller ocks&aring; ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . '. Det &auml;r bra att man skriver ut 
  detta meddelande f&ouml;r framtida information. DU kan nu l&ouml;sa ut ditt ' . TEXT_GV_NAME . ' p&aring; tv&aring; s&auml;tt.<br /><br />
  1. genom att klicka p&aring; l&auml;nken i meddelandet. Det tar dig till sidan f&ouml;r att l&ouml;sa ut ditt ' . TEXT_GV_NAME . '. DU kommer d&auml;refter vara tvunget att skapa ett konto, 
  f&ouml;re ditt ' . TEXT_GV_NAME . ' &auml;r godk&auml;nd och placera i ditt
   ' . TEXT_GV_NAME . ' Konto redo f&ouml;r dig att av&auml;nda.<br /><br />
  2. Vid kassan, p&aring; samma sida som valet av betalningsmetod
d&auml;r det finns en ruta f&ouml;r att ange ' . TEXT_GV_REDEEM . '. Skriv in ' . TEXT_GV_REDEEM . ' d&auml;r och klicka p&aring; l&ouml;s in. koden kommer d&aring; att godk&auml;nnas och l&auml;ggas till ditt ' . TEXT_GV_NAME . ' Konto. DU kan sedan anv&auml;nda beloppet f&ouml;r att handla i butiken');
  break;
  case '5':
  define('SUB_HEADING_TITLE','N&auml;r problem uppst&aring;r.');
  define('SUB_HEADING_TEXT','F&ouml;r alla fr&aring;gor om ' . TEXT_GV_NAME . ' Systemet, v&auml;nligen kontakta butiken
  per e-post till '. STORE_OWNER_EMAIL_ADDRESS . '. V&auml;nligen se till att ge tillr&auml;ckligt med information som kr&auml;vs f&ouml;r att ge ett svar. ');
  break;
  default:
  define('SUB_HEADING_TITLE','');
  define('SUB_HEADING_TEXT','V&auml;nligen v&auml;lj fr&aring;n n&aring;gon av fr&aring;gorna ovan.');

  }

  define('TEXT_GV_REDEEM_INFO', 'V&auml;nligen ange din ' . TEXT_GV_NAME . ' inl&ouml;senskod: ');
  define('TEXT_GV_REDEEM_ID', 'Inl&ouml;sens kod:');
?>