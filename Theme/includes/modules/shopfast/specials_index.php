<?php
/**
 * specials_index module
 *
 * @package modules
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: specials_index.php 6424 2007-05-31 05:59:21Z ajeh $
 */
if (!defined('IS_ADMIN_FLAG')) {
  die('Illegal Access');
}

// initialize vars
$categories_products_id_list = '';
$list_of_products = '';
$specials_index_query = '';
$display_limit = '';

if ( (($manufacturers_id > 0 && $_GET['filter_id'] == 0) || $_GET['music_genre_id'] > 0 || $_GET['record_company_id'] > 0) || (!isset($new_products_category_id) || $new_products_category_id == '0') ) {
  $specials_index_query = "select p.products_id, p.products_image, pd.products_name, p.master_categories_id
                           from (" . TABLE_PRODUCTS . " p
                           left join " . TABLE_SPECIALS . " s on p.products_id = s.products_id
                           left join " . TABLE_PRODUCTS_DESCRIPTION . " pd on p.products_id = pd.products_id )
                           where p.products_id = s.products_id
                           and p.products_id = pd.products_id
                           and p.products_status = '1' and s.status = 1
                           and pd.language_id = '" . (int)$_SESSION['languages_id'] . "'";
} else {
  // get all products and cPaths in this subcat tree
  $productsInCategory = zen_get_categories_products_list( (($manufacturers_id > 0 && $_GET['filter_id'] > 0) ? zen_get_generated_category_path_rev($_GET['filter_id']) : $cPath), false, true, 0, $display_limit);

  if (is_array($productsInCategory) && sizeof($productsInCategory) > 0) {
    // build products-list string to insert into SQL query
    foreach($productsInCategory as $key => $value) {
      $list_of_products .= $key . ', ';
    }
    $list_of_products = substr($list_of_products, 0, -2); // remove trailing comma
    $specials_index_query = "select distinct p.products_id, p.products_image, pd.products_name, p.master_categories_id
                             from (" . TABLE_PRODUCTS . " p
                             left join " . TABLE_SPECIALS . " s on p.products_id = s.products_id
                             left join " . TABLE_PRODUCTS_DESCRIPTION . " pd on p.products_id = pd.products_id )
                             where p.products_id = s.products_id
                             and p.products_id = pd.products_id
                             and p.products_status = '1' and s.status = '1'
                             and pd.language_id = '" . (int)$_SESSION['languages_id'] . "'
                             and p.products_id in (" . $list_of_products . ")";
  }
}
if ($specials_index_query != '') $specials_index = $db->ExecuteRandomMulti($specials_index_query, MAX_DISPLAY_SPECIAL_PRODUCTS_INDEX);

$row = 0;
$col = 0;
$list_box_contents = array();
$title = '';

$num_products_count = ($specials_index_query == '') ? 0 : $specials_index->RecordCount();

// show only when 1 or more
if ($num_products_count > 0) {
  if ($num_products_count < SHOW_PRODUCT_INFO_COLUMNS_SPECIALS_PRODUCTS || SHOW_PRODUCT_INFO_COLUMNS_SPECIALS_PRODUCTS == 0 ) {
    $col_width = floor(100/$num_products_count);
  } else {
    $col_width = floor(100/SHOW_PRODUCT_INFO_COLUMNS_SPECIALS_PRODUCTS);
  }

  $list_box_contents = array();
  while (!$specials_index->EOF) {
    $products_price = zen_get_products_display_price($specials_index->fields['products_id']);
	
	$msg_product="<div class='ribbon special' title=''>Special</div>";
	
	$products_description = zen_trunc_string(zen_clean_html(stripslashes(zen_get_products_description($specials_index->fields['products_id'], $_SESSION['languages_id']))), PRODUCT_LIST_DESCRIPTION); //To Display Product Desc 
	$products_description = ltrim(substr($products_description, 0, $product_desc_length) . '..'); //Trims and Limits the desc
		
	$products_name = $specials_index->fields['products_name'];
	$products_name = ltrim(substr($products_name, 0, $product_name_length) . '');
	
    if (!isset($productsInCategory[$specials_index->fields['products_id']])) $productsInCategory[$specials_index->fields['products_id']] = zen_get_generated_category_path_rev($specials_index->fields['master_categories_id']);

    $specials_index->fields['products_name'] = zen_get_products_name($specials_index->fields['products_id']);
	if (UN_MODULE_WISHLISTS_ENABLED) { $wishlist_link= '<div class="overlay"><div class="product-actions"><a data-original-title="Add to Wishlist" data-toggle="tooltip" class="wishlink" href="' . zen_href_link(UN_FILENAME_WISHLIST, 'products_id=' . $specials_index->fields['products_id'] . '&action=wishlist_add_product') . '"></a><a data-original-title="Add to Compare" data-toggle="tooltip" class="addtocompare" href="javascript: compareNew('.$specials_index->fields['products_id'].', \'add\')"></a></div></div>';}else{ $wishlist_link='';}
    $list_box_contents[$row][$col] = array('params' => 'class="item centerBoxContentsSpecials centeredContent back wow fadeInUp animated" data-wow-duration="2s"' . ' ',
    'text' => (($specials_index->fields['products_image'] == '' and PRODUCTS_IMAGE_NO_IMAGE_STATUS == 0) ? '' : 
	'<div class="product">
			<a class="product-link" href="' . zen_href_link(zen_get_info_page($specials_index->fields['products_id']), 'cPath=' . $productsInCategory[$specials_index->fields['products_id']] . '&products_id=' . (int)$specials_index->fields['products_id']) . '">' .$msg_product.'
			<div class="product-thumbnail">'.zen_image(DIR_WS_IMAGES . $specials_index->fields['products_image'], $specials_index->fields['products_name'], IMAGE_PRODUCT_LISTING_HEIGHT, IMAGE_PRODUCT_LISTING_WIDTH).'<div class="product_price">' . $products_price . '</div></div></a>
		'.$wishlist_link.'
		<div class="product-name-desc">
			<div class="product_name">') .  
				'<a href="' . zen_href_link(zen_get_info_page($specials_index->fields['products_id']), 'cPath=' . $productsInCategory[$specials_index->fields['products_id']] . '&products_id=' . $specials_index->fields['products_id']) . '">' . $products_name . '</a>'.
			zen_get_buy_now_button($specials_index->fields['products_id'],'<a class="product_cart_image" data-toggle="tooltip" data-original-title="Add to Cart" href="' . zen_href_link($_GET['main_page'], zen_get_all_get_params(array('action')) . 'action=buy_now&products_id=' . $specials_index->fields['products_id']) . '"></a>').'
			</div>
		</div>
	</div>');

    $col ++;
    if ($col > (SHOW_PRODUCT_INFO_COLUMNS_SPECIALS_PRODUCTS - 1)) {
      $col = 0;
      $row ++;
    }
    $specials_index->MoveNextRandom();
  }

  if ($specials_index->RecordCount() > 0) {
    $title = '<div class="box_heading box_heading_specials section">
			  	  <h4 class="section-title">'. sprintf(TABLE_HEADING_SPECIALS_INDEX, strftime('%B')) .'</h4>
			 </div>';
    $zc_show_specials = true;
  }
}
?>