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
// |                                                                      |
// | Norwegian translation by Rune Rasmussen - 2006                       |
// | http://www.syntaxerror.no                                            |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: salemaker_info.php 84 2012-02-16 17:42:27Z syntaxerror.no $
//

define('HEADING_TITLE', 'Salgskampanje');
define('SUBHEADING_TITLE', 'Brukertips for salgskampanje:');
define('INFO_TEXT', '<ul>
                      <li>
                        Bruk alltid en \'.\' som desimalpunkt i avsalg og prisomr�de.
                      </li>
                      <li>
                        Fyll inn bel�p i samme valutta som du ellers gj�r n�r du legger til eller redigerer et produkt.
                      </li>
                      <li>
                        I avslagsfelt kan du fylle inn et bel�p eller en prossent for avslag,
                        eller en erstatningspris. (f.eks. 5.00 kr avslag fra alle priser, 10% fra
                        alle priser eller endre alle priser til 25.00 kr)
                      </li>
                      <li>
                        Innfylling av prisfelt begrenser produktfeltet som vil bli p�virket. (f.eks.
                        produkter fra 50.00 kr til 150.00 kr)
                      </li>
                      <li>
                        Du m� velge handling som skal utf�res om et produkt er p� tilbud <i>og</i> er utsatt for salg:
						<ul>
                          <li>
                            <strong>Ignorer tilbudspris - Legg til produktpris og erstatt tilbud</strong><br>
							Salgsavslag vil bli brukt p� produktets normale pris.
                            (f.eks. Normal pris 10.00 kr, tilbudspris 9.50 kr - Salgsavslag 10%.
							Produktets endelige pris vil bli 9.00 p� salg. Tilbudsprisen blir ignorert.)
                          </li>
                          <li>
                            <strong>Ignorer salgsavslag - Ingen salg brukes n�r tilbud finnes</strong><br>
                            Salgsavslaget vil ikke bli brukt p� tilbud. Tilbudspris vil forbli uendret (f.eks.
                            normal pris 10.00 kr, tilbudspris 9.50 kr - salgsavslag 10%.
                            Produktets endelige pris vil bli 9.50 kr p� salg.
                            Salgsavslag blir ignorert.)
                          </li>
                          <li>
                            <strong>Legg salgsavslag til tilbudspris - Ellers legg til pris</strong><br>
                            Salgsavslag vil bli lagt til tilbudspris, en sammensatt pris vil vises.
                            (f.eks. Normal pris 10.00 kr, tilbudspris 9.50 kr - salgsavslag 10%.
                            Produktets endelige pris vil bli 8.55 kr. Et tillegg p� 10% avslag p� tilbudspris.)
                          </li>
                        </ul>
                      </li>
                      <li>
                        Om startdato ikke fylles ut vil salget starte med det samme.
                      </li>
                      <li>
                        Ikke fyll ut asluttningsdato om salget ikke skal utg�.</li>
                      <li>
                        Valg av en kategori inkluderer automatisk eventuelle underkategorier.
                      </li>
                    </ul>');
define('TEXT_CLOSE_WINDOW', '[ lukk vindu ]');