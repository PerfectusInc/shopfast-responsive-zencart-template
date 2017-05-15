<?php
/**
 * Specials
 *
 * @package page
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: main_template_vars.php 18802 2011-05-25 20:23:34Z drbyte $
 */

if (MAX_DISPLAY_SPECIAL_PRODUCTS > 0 ) {
  /*$specials_query_raw = "SELECT p.products_id, p.products_image, pd.products_name,
                          p.master_categories_id
                         FROM (" . TABLE_PRODUCTS . " p
                         LEFT JOIN " . TABLE_SPECIALS . " s on p.products_id = s.products_id
                         LEFT JOIN " . TABLE_PRODUCTS_DESCRIPTION . " pd on p.products_id = pd.products_id )
                         WHERE p.products_id = s.products_id and p.products_id = pd.products_id and p.products_status = '1'
                         AND s.status = 1
                         AND pd.language_id = :languagesID
                         ORDER BY s.specials_date_added DESC";

  $specials_query_raw = $db->bindVars($specials_query_raw, ':languagesID', $_SESSION['languages_id'], 'integer');
  $specials_split = new splitPageResults($specials_query_raw, MAX_DISPLAY_SPECIAL_PRODUCTS);*/
  $specials = $db->Execute($specials_split->sql_query);
  $row = 0;
  $col = 0;
  $list_box_contents = array();
  $title = '';

  $num_products_count = $specials->RecordCount();
  if ($num_products_count) {
    if ($num_products_count < SHOW_PRODUCT_INFO_COLUMNS_SPECIALS_PRODUCTS || SHOW_PRODUCT_INFO_COLUMNS_SPECIALS_PRODUCTS==0 ) {
      $col_width = floor(100/$num_products_count);
    } else {
      $col_width = floor(100/SHOW_PRODUCT_INFO_COLUMNS_SPECIALS_PRODUCTS);
    }

    $list_box_contents = array();
    while (!$specials->EOF) {

      $products_price = zen_get_products_display_price($specials->fields['products_id']);
	  
	 
	 /*Wishlist Links*/
			if (UN_MODULE_WISHLISTS_ENABLED) { $wishlist_link= '<a class="wishlink" title="Add to Wishlist" href="' . zen_href_link('wishlist', 'products_id=' . $specials->fields['products_id'] . '&action=wishlist_add_product') . '"></a>';}else{ $wishlist_link='';}
	/*Wishlist Links Ends*/ 
	
	$products_description = zen_trunc_string(zen_clean_html(stripslashes(zen_get_products_description($specials->fields['products_id'], $_SESSION['languages_id']))), PRODUCT_LIST_DESCRIPTION); //To Display Product Desc 
	$products_description = ltrim(substr($products_description, 0, 150) . '..'); //Trims and Limits the desc
	
	
	$products_name = $specials->fields['products_name'];
	$products_name = ltrim(substr($products_name, 0, 25) . '');
	$msg_product="<div class='ribbon special' title=''>Special</div>";
	
      $list_box_contents[$row][$col] = 
	  array('params' => 'class="specialsListBoxContents mix col-lg-4 col-md-6 col-sm-4 col-xs-12"',
                                             'text' => '
									<div class="product">
											 <a class="product-link" href="' . zen_href_link(zen_get_info_page($specials->fields['products_id']), 'cPath=' . zen_get_generated_category_path_rev($specials->fields['master_categories_id']) . '&products_id=' . $specials->fields['products_id']) . '">'.$msg_product.
										'<div class="product-thumbnail">' .(($specials->fields['products_image'] == '' and PRODUCTS_IMAGE_NO_IMAGE_STATUS == 0) ? '' : zen_image(DIR_WS_IMAGES . $specials->fields['products_image'], $specials->fields['products_name'], IMAGE_PRODUCT_LISTING_HEIGHT, IMAGE_PRODUCT_LISTING_WIDTH) . '<div class="product_price">' . $products_price . '</div></div></a>
										<div class="product-name-desc">
											<div class="product_name">') .  
												'<a href="' . zen_href_link(zen_get_info_page($specials->fields['products_id']), 'cPath=' . $productsInCategory[$specials->fields['products_id']] . '&products_id=' . $specials->fields['products_id']) . '">' . $products_name . '</a>'.
												zen_get_buy_now_button($specials->fields['products_id'],'<a class="product_cart_image" data-toggle="tooltip" data-original-title="Add to Cart" href="' . zen_href_link($_GET['main_page'], zen_get_all_get_params(array('action')) . 'action=buy_now&products_id=' . $specials->fields['products_id']) . '"></a>').'
											</div>
											<div class="overlay">
										<div class="product-actions">
											'.$wishlist_link.'
												<a class="addtocompare" title="Add to Compare" href="javascript: compareNew('.$specials->fields['products_id'].',\'add\')"></a>
										</div>
									</div>'
										.'</div>
									</div>');
      $col ++;
      if ($col > (SHOW_PRODUCT_INFO_COLUMNS_SPECIALS_PRODUCTS - 1)) {
        $col = 0;
        $row ++;
      }
      $specials->MoveNext();
    }
    require($template->get_template_dir('tpl_specials_default.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_specials_default.php');
  }
}