<?php
/**
 * @package admin
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @copyright Copyright Translation 2006 - 2010 Rune Rasmussen - syntaxerror.no
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: mail.php 84 2012-02-16 17:42:27Z syntaxerror.no $
 */

define('HEADING_TITLE', 'E-post til kunder');

define('TEXT_CUSTOMER', 'Kunde:');
define('TEXT_SUBJECT', 'Emne:');
define('TEXT_FROM', 'Fra:');
define('TEXT_MESSAGE', 'Ren tekst <br />Melding:');
define('TEXT_MESSAGE_HTML','Rik tekst <br />Melding');
define('TEXT_SELECT_CUSTOMER', 'Velg kunde');
define('TEXT_ALL_CUSTOMERS', 'Alle kunder');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Til alle nyhetsbrevabonnenter');
define('TEXT_ATTACHMENTS_LIST','Valgt vedlegg: ');
define('TEXT_SELECT_ATTACHMENT','Vedlegg<br />på server: ');
define('TEXT_SELECT_ATTACHMENT_TO_UPLOAD','Vedlegg<br />for opplastning<br />&amp; vedlagt:: ');
define('TEXT_ATTACHMENTS_DIR','Mappe for opplastning: ');

define('NOTICE_EMAIL_SENT_TO', 'Merk: E-post sendt til: %s');
define('NOTICE_EMAIL_FAILED_SEND', 'Merk: Kunne ikke sende e-post til alle mottakere: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Feil: Ingen kunde har blitt valgt.');
define('ERROR_NO_SUBJECT', 'Feil: Emne mangler.');
define('ERROR_ATTACHMENTS', 'Feil: Du kan ikke velge å både laste opp og legge til atskilt vedlegg . Velg bare en av delene.');