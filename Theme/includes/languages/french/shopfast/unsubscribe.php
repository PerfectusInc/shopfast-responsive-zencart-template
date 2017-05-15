<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @copyright Originally Programmed By: Christopher Bradley (www.wizardsandwars.com) for OsCommerce
 * @copyright Modified by Jim Keebaugh for OsCommerce
 * @copyright Adapted for Zen Cart
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: unsubscribe.php 3159 2006-03-11 01:35:04Z drbyte $
 */

  define('NAVBAR_TITLE', 'Désabonnement');
  define('HEADING_TITLE', 'Désabonnement de notre bulletin');

  define('UNSUBSCRIBE_TEXT_INFORMATION', '<br />Nous sommes désolés d\'apprendre que vous souhaitez vous désabonner de notre bulletin. Si vous avez des inquiétudes concernant votre vie privée, nous vous invitons à prendre connaissance de notre <a href="' . zen_href_link(FILENAME_PRIVACY,'','NONSSL') . '"><u>politique de confidentialité,</u></a>.<br /><br />Les abonnés à notre bulletin sont informés des nouveaux produits, des réductions de prix, ainsi que de l\'actualité du site.<br /><br />Si vous ne souhaitez vraiment plus recevoir votre bulletin, veuillez cliquer sur le bouton ci-dessous.');
  define('UNSUBSCRIBE_TEXT_NO_ADDRESS_GIVEN', '<br />Nous sommes désolés d\'apprendre que vous souhaitez vous désabonner de notre bulletin. Si vous avez des inquiétudes concernant votre vie privée, nous vous invitons à prendre connaissance de notre <a href="' . zen_href_link(FILENAME_PRIVACY,'','NONSSL') . '"><u>politique de confidentialité,</u></a>.<br /><br />Les abonnés à notre bulletin sont informés des nouveaux produits, des réductions de prix, ainsi que de l\'actualité du site.<br /><br />Si vous ne souhaitez vraiment plus recevoir votre bulletin, veuillez cliquer sur le bouton ci-dessous. Vous allez être redirigé vers vos préférences de compte, où vous pourrez modifier votre abonnement. Il pourra vous être demandé de vous connecter d\'abord.');
  define('UNSUBSCRIBE_DONE_TEXT_INFORMATION', '<br />Votre adresse email, indiquée ci-dessous, a été supprimé de notre bulletin, ainsi que vous l\'avez demandé.<br /><br />');
  define('UNSUBSCRIBE_ERROR_INFORMATION', '<br />L\'adresse email que vous avez indiquée ne figure pas dans la base de données de notre bulletin, ou a déjà été effacée de notre liste d\'abonnés au bulletin. <br /><br />');
?>