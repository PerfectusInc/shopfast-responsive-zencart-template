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
//  $Id: salemaker_info.php 1105 2005-04-04 22:05:35Z birdbrain $
//
 /*
 * Zen Cart version 1.5.0 -
 * @Swedish Translation 2011 - Signs FrilansReklam, www.frilansreklam.se
 * @Swedish support - www.zencart.nu - Svenska Zen Cart
 */
define('HEADING_TITLE', 'REA Hanterare');
define('SUBHEADING_TITLE', 'REA Hanterings Tips:');
define('INFO_TEXT', '<ul>
                      <li>
                        Anv&auml;nd alltid en \'.\' f&ouml;r decimaltecken i priser.
                      </li>
                      <li>
                        Anv&auml;nd samma valuta som du arbetar i n&auml;r du l&auml;gger till produkter.
                      </li>
                      <li>
                        I Avdrags f&auml;ltet, kan du ange antingen en summa eller en procentsats,
                        eller ett ers&auml;ttningspris. (exempel. Avdrag 5.00 fr&aring;n alla priser, avdrag 10% fr&aring;n
                        alla priser eller &auml;ndra priset till 25.00)
                      </li>
                      <li>
                        Att ange en prisniv&aring; begr&auml;nsar produkter att v&auml;lja p&aring; utifr&aring;n det val som g&ouml;rs. (exempel.
                        produkter fr&aring;n 50.00 till 150.00)
                      </li>
                      <li>
                        Du m&aring;ste v&auml;lja en h&auml;ndelse att utf&ouml;ra om en produkt har ett erbjudande <i>och</i> &auml;r aktuell f&ouml;r denna REA:
						<ul>
                          <li>
                            <strong>Ignorera Erbjudande Priset - Koppla till produkt pris</strong><br>
							Realisationen kommer att dras fr&aring;n det ordinarie priset f&ouml;r produkten.
                            (ex. Ordinarie pris 100.00, Erbjudande pris 95.00, Rean &auml;r 10%.
							Produkten kommer visa  90.00 REA. Erbjudandet ignoreras.)
                          </li>
                          <li>
                            <strong>Ignorera Rea priset - Rea visas inte om erbjudande finns</strong><br>
                            Om det finns ett erbjudande kommer denna produkt inte visas med rea pris. Den kommer att visas som n&auml;r det inte finns n&aring;gon rea. (ex. Ordinarie pris 100.00, Erbjudande &auml;r 95.00,
                            Rean &auml;r 10%. Produktens pris f&ouml;r erbjudande visar 95.00 p&aring; rea.
                            Rean ignoreras.)
                          </li>
                          <li>
                            <strong>Realisation p&aring; erbjudande pris - Annars p&aring; ordinarie pris</strong><br>
                            Rean kommer att baseras p&aring; erbjudande priset. 
                            (ex. Ordinarie pris 100.00, Erbjudane &auml;r 95.00, Rean &auml;r 10%. Produkten visar priset 85.50. En minskning med 10% fr&aring;n Erbjudande priset.)
                          </li>
                        </ul>
                      </li>
                      <li>
                        Om man l&auml;mnar start datum f&auml;ltet tomt, b&ouml;rjar rean omedelbart.
                      </li>
                      <li>
                        Om slut datum &auml;r tomt p&aring;g&aring;r rean tills den tas bort manuellt.</li>
                      <li>
                        Markering av en kategori inkluderar &auml;ven underkategorier.
                      </li>
                    </ul>');
define('TEXT_CLOSE_WINDOW', '[ st&auml;ng f&ouml;nstret ]');
?>