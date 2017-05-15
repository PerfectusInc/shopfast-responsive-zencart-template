<?php
/**
 * pop up image additional
 *
 * @package page
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: header_php.php 18697 2011-05-04 14:35:20Z wilt $
 */
// This should be first line of the script:
  $zco_notifier->notify('NOTIFY_HEADER_START_POPUP_IMAGES_ADDITIONAL');

  $_SESSION['navigation']->remove_current_page();

  $products_values_query = "SELECT pd.products_name, p.products_image
                            FROM " . TABLE_PRODUCTS . " p
                            left join " . TABLE_PRODUCTS_DESCRIPTION . " pd
                            on p.products_id = pd.products_id
                            WHERE p.products_status = 1
                            and p.products_id = :productsID
                            and pd.language_id = :languagesID ";

  $products_values_query = $db->bindVars($products_values_query, ':productsID', $_GET['pID'], 'integer');
  $products_values_query = $db->bindVars($products_values_query, ':languagesID', $_SESSION['languages_id'], 'integer');

  $products_values = $db->Execute($products_values_query);


  $products_image = $products_values->fields['products_image'];

  $products_image_extension = substr($products_image, strrpos($products_image, '.'));
  $products_image_base = preg_replace('|'.$products_image_extension.'$|', '', $products_image);
  $products_image_medium = $products_image_base . IMAGE_SUFFIX_MEDIUM . $products_image_extension;
  $products_image_large = $products_image_base . IMAGE_SUFFIX_LARGE . $products_image_extension;

  $_GET['products_image_large_additional'] = str_replace(' ', '+', stripslashes($_REQUEST['products_image_large_additional']));


  // This should be last line of the script:
  $zco_notifier->notify('NOTIFY_HEADER_END_POPUP_IMAGES_ADDITIONAL');
