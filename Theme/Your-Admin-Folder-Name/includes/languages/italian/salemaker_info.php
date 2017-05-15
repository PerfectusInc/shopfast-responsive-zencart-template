<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                 |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers     |
// |    |
// | http://www.zen-cart.com/index.php              |
// |    |
// | Portions Copyright (c) 2003 osCommerce         |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.       |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: salemaker_info.php 1105 2005-04-04 22:05:35Z Albigin $
//

define('HEADING_TITLE', 'Fare Saldi');
define('SUBHEADING_TITLE', 'Consigli per utilizzo di Fare Saldi:');
define('INFO_TEXT', '<ul><li>Utilizzare sempre un \'.\' come punto decimale per sconti e ventaglio prezzi.</li>
<li>Inserire l\'ammontare nella stessa valuta usata nel creare/modificare un Prodotto.</li>
<li>Nel campo \'Saldi\', puoi inserire una cifra o una percentuale da sottrarre, o un nuovo prezzo. (es. sottrai &euro;5.00 da tutti i prezzi, sottrai il 10% da tutti i prezzi o imposta tutti i prezzi a &euro;25.00)</li>
<li>Inserendo un range di prezzi riduce il range del prodotto che sar&agrave; influenzato. (es. prodotti da &euro;50.00 a &euro;150.00)</li>
<li>Devi scegliere come agire se il prodotto &egrave; in promozione <i>e</i> fa parte di questi saldi:<ul><li><strong>Ignora il prezzo della promozione - Applica al prezzo del prodotto e sostituisci il prezzo della promozione.</strong><br>La riduzione del prezzo (saldi) verr&agrave; applicata al prezzo normale del prodotto. (es. Prezzo normale &euro;10.00, Prezzo promozionale &euro;9.50, Riduzione (saldo) applicata 10%.
Il prezzo finale risulter&agrave; essere &euro;9.00. Il prezzo promozionale &egrave; ignorato).</li>
    <li><strong>Ignora  i saldi - Non applicare le riduzioni dei saldi se il prodotto &egrave; in offerta promozionale.</strong><br>
      I saldi non sono applicati ai prodotti in offerta promozionale. Il prezzo dell\'offerta promozionale verr&agrave; visualizzato come se non esistessero i saldi. (es. Prezzo normale &euro;10.00, Prezzo in offerta &euro;9.50, Riduzione (saldo) applicata 10%. Il prezzo finale risulter&agrave; essere &euro;9.50. Le condizioni impostate nei saldi sono ignorate).</li>
    <li><strong>Applica le condizioni impostate nei saldi al prezzo promozionale - Altrimenti applica al prezzo normale.</strong><br>
      Le condizioni dei saldi saranno applicate ai prezzi promozionali. Viene mostrato un prezzo derivante dalle due condizioni. (es. Prezzo normale &euro;10.00, Prezzo in offerta &euro;9.50, Riduzione (saldo) applicata 10%. Il prezzo finale risulter&agrave; essere &euro;8.55 . E\' stata applicata una riduzione del 10% al prezzo promozionale).</li></ul></li>
<li>Se non specifichi una data di inizio, i saldi inizieranno immediatamente.</li>
<li>Se non vuoi far terminare i saldi, lascia vuota la data di termine.</li>
<li>Se si include una categoria, automaticamente vengono incluse anche tutte le sue sottocategorie.</li></ul>');
define('TEXT_CLOSE_WINDOW', '[ chiudi finestra ]');

?>