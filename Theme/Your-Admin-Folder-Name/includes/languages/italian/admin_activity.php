<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: admin_activity.php 19537 2012-01-12 17:14:44Z LaVale $
 */

define('HEADING_TITLE', 'Gestione Log Attivit&agrave; Amministratore');
define('HEADING_SUB1', 'Consultare o Esportare Log');
define('HEADING_SUB2', 'Svuotare Cronologia Log');
define('TEXT_ACTIVITY_EXPORT_FORMAT', 'Formato File Esportazione:');
define('TEXT_ACTIVITY_EXPORT_FILENAME', 'Nome File Esportazione:');
define('TEXT_ACTIVITY_EXPORT_SAVETOFILE','Salvare su file nel server? (altrimenti verranno visualizzati direttamente in questa pagina)');
define('TEXT_ACTIVITY_EXPORT_DEST','Destinazione: ');
define('TEXT_PROCESSED', ' Elaborato.');
define('SUCCESS_EXPORT_ADMIN_ACTIVITY_LOG', 'Esportazione completata. ');
define('FAILURE_EXPORT_ADMIN_ACTIVITY_LOG', 'ATTENZIONE: Esportazione non riuscita. Non &egrave; stato possibile scrivere nel file ');

define('TEXT_INSTRUCTIONS','<u>ISTRUZIONI</u><br />Usare questa pagina per esportare l\'Attivit&agrave; degli Admin di Zen Cart&reg; in un file CSV per l\'archiviazione.<br />&Egrave; consigliabile salvare questi dati per l\'uso in indagini per frode nel caso in cui il sito sia stato compromesso. Si tratta di un requisito per la conformit&agrave; PCI.<br />
<ol><li>Scegliere se visualizzare o esportare in un file.<li>Inserire un nome file.<li>Premere Salva per procedere.<li>Scegliere se salvare o aprire il file, a seconda di cosa propone la finestra del browser.</ol>');

define('TEXT_INFO_ADMIN_ACTIVITY_LOG', '<strong>Vuota Tabella attivit&agrave; di Admin dal database<br />ATTENZIONE: effettuare backup del database prima di procedere!</strong><br />Activity Log &egrave; un metodo che registra le attivit&agrave; dell\'Admin. <br />Data la sua natura pu&ograve; diventare molto grande in poco tempo e deve essere svuotato di tanto in tanto.<br />Avvertimenti verranno dati a 50,000 registrazioni oppure dopo 60 giorni, a seconda di cosa avvenga prima.<br /><span class="alert">NOTA: Per la Conformit&agrave; PCI, si &egrave; tenuti a mantenere l\'archivio dell\'admin activity log per 12 mesi.<br />Si consiglia di archiviare i log scegliendo di ESPORTARE COME CSV e premere Salva, qui sopra, *PRIMA* di svuotare la tabella dei log dati.</span>');

define('TEXT_ADMIN_LOG_PLEASE_CONFIRM_ERASE', '<strong><span class="alert">ATTENZIONE!: Si stanno per CANCELLARE dal database record *importanti* per tracciare visite ed effettuare verifiche.</span></strong><br />Si deve PRIMA confermare di avere un BACKUP integro e completo del database e poi procedere.<br />Procedendo si conferma di aver accettato di cancellare queste informazioni e di aver preso coscienza delle proprie responsabilit&agrave; giuridiche in merito a questi dati.<br /><br />Conosco le mie responsabilit&agrave; e voglio procedere con la rimozione premendo Resetta:<br />');
define('SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG', 'Cancellazione <strong>Completata</strong> del Log Attivit&agrave; Amministratore');
