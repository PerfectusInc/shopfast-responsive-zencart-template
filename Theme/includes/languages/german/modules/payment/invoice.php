<?php
//Berechnung Zahlungsziel
$tstamp = mktime(0, 0, 0, date("m"), date("d") + MODULE_PAYMENT_INVOICE_PAYDAY, date("Y"));
$tag = date("d.m.Y", $tstamp);
//Ende
define('MODULE_PAYMENT_INVOICE_TEXT_TITLE', 'Rechnung (zahlbar bis zum '. $tag . ')');
define('MODULE_PAYMENT_INVOICE_TEXT_DESCRIPTION', '');

define('MODULE_PAYMENT_INVOICE_TEXT_EMAIL_FOOTER', 
"Bitte verwenden Sie folgende Daten für die Überweisung des Gesamtbetrages:\n" .
"\nName der Bank:  " . MODULE_PAYMENT_INVOICE_BANKNAM .
"\nKontoinhaber: " . MODULE_PAYMENT_INVOICE_ACCNAM . 
"\nKontonummer:   " . MODULE_PAYMENT_INVOICE_ACCNUM . 
"\nBankleitzahl:    " . MODULE_PAYMENT_INVOICE_BLZ .
"\nIBAN:    " . MODULE_PAYMENT_INVOICE_ACCIBAN .
"\nBIC/SWIFT:   " . MODULE_PAYMENT_INVOICE_BANKBIC . 
"\n");