<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: email_extras.php 18698 2012-01-12 14:50:06Z LaVale $
 */

// office use only
  define('OFFICE_FROM','Da:');
  define('OFFICE_EMAIL','Email:');

  define('OFFICE_SENT_TO','A:');
  define('OFFICE_EMAIL_TO','Email:');
  define('OFFICE_USE','Solo per uso interno:');
  define('OFFICE_LOGIN_NAME','Nome di login:');
  define('OFFICE_LOGIN_EMAIL','Login Email:');
  define('OFFICE_LOGIN_PHONE','<strong>Telefono:</strong>');
  define('OFFICE_IP_ADDRESS','Indirizzo IP:');
  define('OFFICE_HOST_ADDRESS','Indirizzo Host:');
  define('OFFICE_DATE_TIME','Data e Ora:');

// email disclaimer
  define('EMAIL_DISCLAIMER', 'Questo indirizzo Email ci è stato fornito da uno dei nostri Clienti. Se il presente messaggio è stato ricevuto per errore, inviare una Email a %s');
define('EMAIL_SPAM_DISCLAIMER','Email inviata in ossequio alle vigenti norme e disposizioni in materia, non desiderando più ricevere email è possibile richiedere la rimozione a questo indirizzo.');
  define('EMAIL_FOOTER_COPYRIGHT','Copyright &copy; ' . date('Y') . ' <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>. Powered by <a href="http://www.zencart-italia.it" target="_blank">Zen Cart Italia</a>');
  define('SEND_EXTRA_GV_ADMIN_EMAILS_TO_SUBJECT','[GV ADMIN SENT]');
  define('SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO_SUBJECT','[DISCOUNT COUPONS]');
  define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT','[ORDERS STATUS]');
   define('TEXT_UNSUBSCRIBE', "\n\nPer rinunciare a future newsletter e offerte promozionali, basta cliccare il seguente link: \n");

// for whos_online when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', 'Disabilitato');

define('TEXT_EMAIL_SUBJECT_ADMIN_USER_ADDED', 'Avviso Amministrazione: Inserito nuovo amministratore.');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_ADDED', 'Avviso Amministrativo: un nuovo amministratore (%s) è stato AGGIUNTO al negozio da %s.' . "\n\n" . 'Se questa modifica non è stata decisa da te o da un altro amministratore autorizzato è consigliabile verificare immediatamente la sicurezza del sito.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_DELETED', 'Avviso Amministrazione: Un amministratore è stato cancellato.');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_DELETED', 'Avviso Amministrativo: un amministratore (%s) è stato RIMOSSO dal negozio da %s.' . "\n\n" . 'Se questa modifica non è stata decisa da te o da un altro amministratore autorizzato è consigliabile verificare immediatamente la sicurezza del sito.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_CHANGED', 'Avviso Amministrazione: Sono stati modificati i dettagli di un Amministratore.');
define('TEXT_EMAIL_ALERT_ADM_EMAIL_CHANGED', 'Avviso Amministrazione: L\'indirizzo email dell\'amministratore (%s) è stato modificato da (%s) a (%s) da parte di (%s)');
define('TEXT_EMAIL_ALERT_ADM_NAME_CHANGED', 'Avviso Amministrazione: il Nome Admin dell\'amministratore (%s) è stato modificato da (%s) a (%s) da parte di (%s)');
define('TEXT_EMAIL_ALERT_ADM_PROFILE_CHANGED', 'Avviso Amministrazione: il profilo di sicurezza dell\'amministratore (%s) è stato modificato da (%s) a (%s) da parte di (%s)');
