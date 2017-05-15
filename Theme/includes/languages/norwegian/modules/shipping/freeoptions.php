<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: freeoptions.php 107 2012-04-15 12:04:10Z syntaxerror.no $
 */

define('MODULE_SHIPPING_FREEOPTIONS_TEXT_TITLE', 'Gratis leveringsvalg');
define('MODULE_SHIPPING_FREEOPTIONS_TEXT_DESCRIPTION', '
\'Gratis leveringsvalg\' blir brukt til å vise et gratis leveringsvalg samtidig som andre leveringsvalg vises.
Dette kan baseres på: Alltid vises, Ordretotal, Ordrevekt eller antall produkter i ordre.
\'Gratis leveringsvalg\'-modulen vises ikke samtidig som \'Gratis levering\'-modulen.<br /><br />
Ved å sette \'Total\' til >= 0.00 og <= ingenting (la stå tomt) vil man aktivere denne modulen til å vises med alle leveringsmoduler, med unntak av \'Gratis levering - freeshipper\'.<br /><br />
Merk: Ved å la alle felt stå tomme deaktiverer man denne modulen.<br /><br />
Merk: \'Gratis leveringsvalg\' vises ikke dersom \'Gratis levering\' blir brukt basert på 0 vekt er gratis levering.
Se: freeshipper
');
define('MODULE_SHIPPING_FREEOPTIONS_TEXT_WAY', 'Gratis levering');
