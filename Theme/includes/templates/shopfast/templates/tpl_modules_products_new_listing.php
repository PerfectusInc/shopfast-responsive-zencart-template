<?php
/**
 * Module Template
 *
 * Loaded automatically by index.php?main_page=products_new.<br />
 * Displays listing of All Products
 *
 * @package templateSystem
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_modules_products_new_listing.php 6096 2007-04-01 00:43:21Z ajeh $
 */
?>
<?php
 ?>
 <?php  if((isset($_GET['view'])) && ($_GET['view']=='rows')){ 
 echo '<div id="product-area" class="section offer products-container portrait product-list" data-layout="list">';
}else{
 echo '<div id="product-area" class="section offer products-container portrait product-grid" data-layout="grid">';
} ?>
<div class="row" style=" transform: ">
<?php
  $group_id = zen_get_configuration_key_value('PRODUCT_NEW_LIST_GROUP_ID');

  if ($products_new_split->number_of_rows > 0) {
	  
	 
    $products_new = $db->Execute($products_new_split->sql_query);

    while (!$products_new->EOF) {

	$products_name = $products_new->fields['products_name'];
	$products_name = ltrim(substr($products_name, 0, $product_name_length) . '');

      if (PRODUCT_NEW_LIST_IMAGE != '0') {
        if ($products_new->fields['products_image'] == '' and PRODUCTS_IMAGE_NO_IMAGE_STATUS == 0) {
          $display_products_image = str_repeat('', substr(PRODUCT_NEW_LIST_IMAGE, 3, 1));
        } else {
			
		  $product_img_src=mb_getbaseimg_effects($products_new->fields['products_image']);
    $second_img_src=mb_gethoverimg_effects($products_new->fields['products_image']);
		  
          $display_products_image =  zen_image(DIR_WS_IMAGES . $products_new->fields['products_image'], $products_name, IMAGE_PRODUCT_NEW_LISTING_WIDTH, IMAGE_PRODUCT_NEW_LISTING_HEIGHT) . str_repeat('', substr(PRODUCT_NEW_LIST_IMAGE, 3, 1));
        }
      } else {
        $display_products_image = '';
		$product_img_src='';
		$second_img_src='';
      }
	 
      if (PRODUCT_NEW_LIST_IMAGE != '0') {
        $display_products_name = '<a href="' . zen_href_link(zen_get_info_page($products_new->fields['products_id']), 'cPath=' . zen_get_generated_category_path_rev($products_new->fields['master_categories_id']) . '&products_id=' . $products_new->fields['products_id']) . '">' . $products_name . '</a>' . str_repeat('', substr(PRODUCT_NEW_LIST_NAME, 3, 1));
      } else {
        $display_products_name = '';
      }

      if (PRODUCT_NEW_LIST_WEIGHT != '0' and zen_get_show_product_switch($products_new->fields['products_id'], 'weight')) {
        $display_products_weight = TEXT_PRODUCTS_WEIGHT . $products_new->fields['products_weight'] . TEXT_SHIPPING_WEIGHT . str_repeat('', substr(PRODUCT_NEW_LIST_WEIGHT, 3, 1));
      } else {
        $display_products_weight = '';
      }

      if (PRODUCT_NEW_LIST_QUANTITY != '0' and zen_get_show_product_switch($products_new->fields['products_id'], 'quantity')) {
        if ($products_new->fields['products_quantity'] <= 0) {
          $display_products_quantity = TEXT_OUT_OF_STOCK . str_repeat('', substr(PRODUCT_NEW_LIST_QUANTITY, 3, 1));
        } else {
          $display_products_quantity = TEXT_PRODUCTS_QUANTITY . $products_new->fields['products_quantity'] . str_repeat('', substr(PRODUCT_NEW_LIST_QUANTITY, 3, 1));
        }
      } else {
        $display_products_quantity = '';
      }

      if (PRODUCT_NEW_LIST_DATE_ADDED != '0' and zen_get_show_product_switch($products_new->fields['products_id'], 'date_added')) {
        $display_products_date_added = TEXT_DATE_ADDED . ' ' . zen_date_long($products_new->fields['products_date_added']) . str_repeat('', substr(PRODUCT_NEW_LIST_DATE_ADDED, 3, 1));
      } else {
        $display_products_date_added = '';
      }

       if (PRODUCT_NEW_LIST_MANUFACTURER != '0' and zen_get_show_product_switch($products_new->fields['products_id'], 'manufacturer')) {
        $display_products_manufacturers_name = ($products_new->fields['manufacturers_name'] != '' ? TEXT_MANUFACTURER . ' ' . $products_new->fields['manufacturers_name'] . str_repeat('', substr(PRODUCT_NEW_LIST_MANUFACTURER, 3, 1)) : '');
      } else {
        $display_products_manufacturers_name = '';
      }

      if ((PRODUCT_NEW_LIST_PRICE != '0' and zen_get_products_allow_add_to_cart($products_new->fields['products_id']) == 'Y')  and zen_check_show_prices() == true) {
        $products_price = zen_mb_get_products_display_price($products_new->fields['products_id']);
        $display_products_price = TEXT_PRICE . ' ' . $products_price . str_repeat('', substr(PRODUCT_NEW_LIST_PRICE, 3, 1)) . (zen_get_show_product_switch($products_new->fields['products_id'], 'ALWAYS_FREE_SHIPPING_IMAGE_SWITCH') ? (zen_get_product_is_always_free_shipping($products_new->fields['products_id']) ? TEXT_PRODUCT_FREE_SHIPPING_ICON . '<br />' : '') : '');
      } else {
        $display_products_price = '';
		$products_price='';
      }
	

// more info in place of buy now
      if (PRODUCT_NEW_BUY_NOW != '0' and zen_get_products_allow_add_to_cart($products_new->fields['products_id']) == 'Y') {
        if (zen_has_product_attributes($products_new->fields['products_id'])) {
          $link = '<a href="' . zen_href_link(zen_get_info_page($products_new->fields['products_id']), 'cPath=' . zen_get_generated_category_path_rev($products_new->fields['master_categories_id']) . '&products_id=' . $products_new->fields['products_id']) . '">' . MORE_INFO_TEXT . '</a>';
        } else {
          if (PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART > 0 && $products_new->fields['products_qty_box_status'] != 0) {
//            $how_many++;
            $link = '<span>'.TEXT_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART . "</span><input class='input-text' type=\"text\" name=\"products_id[" . $products_new->fields['products_id'] . "]\" value=\"0\" size=\"4\" />";
          } else {
            $link = '<a href="' . zen_href_link(FILENAME_NEW_PRODUCTS, zen_get_all_get_params(array('action')) . 'action=buy_now&products_id=' . $products_new->fields['products_id']) . '">' . zen_image_button(BUTTON_IMAGE_BUY_NOW, BUTTON_BUY_NOW_ALT) . '</a>&nbsp;';
          }
        }

        $the_button = $link;
        $products_link = '<a href="' . zen_href_link(zen_get_info_page($products_new->fields['products_id']), 'cPath=' . zen_get_generated_category_path_rev($products_new->fields['master_categories_id']) . '&products_id=' . $products_new->fields['products_id']) . '">' . MORE_INFO_TEXT . '</a>';
        $display_products_button = zen_get_buy_now_button($products_new->fields['products_id'], $the_button, $products_link) . zen_get_products_quantity_min_units_display($products_new->fields['products_id']) . str_repeat('', substr(PRODUCT_NEW_BUY_NOW, 3, 1));
      } else {
        $link = '<a href="' . zen_href_link(zen_get_info_page($products_new->fields['products_id']), 'cPath=' . zen_get_generated_category_path_rev($products_new->fields['master_categories_id']) . '&products_id=' . $products_new->fields['products_id']) . '">' . MORE_INFO_TEXT . '</a>';
        $the_button = $link;
        $products_link = '<a href="' . zen_href_link(zen_get_info_page($products_new->fields['products_id']), 'cPath=' . zen_get_generated_category_path_rev($products_new->fields['master_categories_id']) . '&products_id=' . $products_new->fields['products_id']) . '">' . MORE_INFO_TEXT . '</a>';
        $display_products_button = zen_get_buy_now_button($products_new->fields['products_id'], $the_button, $products_link) . zen_get_products_quantity_min_units_display($products_new->fields['products_id']) . str_repeat('', substr(PRODUCT_NEW_BUY_NOW, 3, 1));
      }

      if (PRODUCT_NEW_LIST_DESCRIPTION > '0') {
        $disp_text = zen_get_products_description($products_new->fields['products_id']);
        $disp_text = zen_clean_html($disp_text);

		$display_products_description = ltrim(substr($disp_text, 0, $product_desc_length) . '..');
		
      } else {
        $display_products_description = '';
      }
 
      
	$addtocartbtn = zen_get_buy_now_button($products_new->fields['products_id'],'<a class="add-to-cart product_cart_image" data-toggle="tooltip" data-original-title="Add to Cart" href="' . zen_href_link($_GET['main_page'], zen_get_all_get_params(array('action')) . 'action=buy_now&products_id=' . $products_new->fields['products_id']) . '"></a>');

	$listview_addtocartbtn = zen_get_buy_now_button($products_new->fields['products_id'],'<a class="btn btn-primary btn-iconed" href="' . zen_href_link($_GET['main_page'], zen_get_all_get_params(array('action')) . 'action=buy_now&products_id=' . $products_new->fields['products_id']) . '"><i class="icon-shopcart"></i><span>Add to Cart</span></a>');
			
	if (UN_MODULE_WISHLISTS_ENABLED) { $wishlist_link= '<a class="wishlink" title="Add to Wishlist" href="' . zen_href_link('wishlist', 'products_id=' . $products_new->fields['products_id'] . '&action=wishlist_add_product') . '">+ Add to Wishlist</a>';}else{ $wishlist_link='';}
	
	     $get_discount_prod=mb_discount_product($products_new->fields['products_id']);
	     $products_discount=($get_discount_prod==1)? '<div class="sale-product-icon" style="top:10px;">'.HEADER_SALE_LEFT_CORNER.'</div>' : '';
		 $new_top_position=($get_discount_prod==1)?'40px':'10px';
		if(mb_new_product($products_new->fields['products_id'])==1){
			$ribbon='<div class="ribbon new"></div>';
		}
		else if(mb_special_product($products_new->fields['products_id'])==1){
			$ribbon='<div class="ribbon special"></div>';
		}
		else {
		}
 ?>
 <?php 
 if((isset($_GET['view'])) && ($_GET['view']=='rows')){ $pos_list='style="display: block; opacity: 1;"';}else{ $pos_list='style="display: inline-block; opacity: 1;"'; }
 ?>
 <div class="mix col-xs-12 col-sm-6 col-lg-4 mix_all" <?php echo $pos_list; ?>>
    	<div data-filter="all products" data-name="<?php echo $products_name; ?>" data-discount="0" data-price="110" class="product">
        	<a class="product-link clearfix" href="<?php echo zen_href_link(zen_get_info_page($products_new->fields['products_id']), 'cPath=' . zen_get_generated_category_path_rev($products_new->fields['master_categories_id']) . '&products_id=' . $products_new->fields['products_id']); ?>">
                <?php echo $ribbon;?>
                <div class="product-thumbnail">
                     <?php echo $display_products_image; ?>
					 <div class="caption bottom-left"><?php echo $products_price; ?></div>
                </div>
            </a>
            <div class="product-info clearfix">
                <h4 class="title">
                    <?php echo  $display_products_name; ?>
                </h4>
                <div class="description">
					<div class="prices"><?php echo $products_price; ?></div>
                    <div class="text"><?php echo $display_products_description; ?></div>
                    <div class="add-to-cart">
                        <?php echo $listview_addtocartbtn; ?>
                    </div>
                    <div class="overlay">
                        <div class="product-actions">
                        	<?php echo $wishlist_link; ?>
                            <a class="addtocompare" title="<?php echo 'Add to Compare'; ?>" href="javascript: compareNew(<?php echo $products_new->fields['products_id']; ?>, 'add')"><?php echo '+ Add to Compare'; ?></a>
                        </div>
                    </div>
                </div>
                <?php echo $addtocartbtn; ?>
            </div>
            </div>
        </div>
<?php
      $products_new->MoveNext();
    }
  } else {
?>
<div class="col-xs-12"><div class="alert alert-info"><?php echo TEXT_NO_NEW_PRODUCTS; ?></div></div>
<?php
  }
?>
</div>
</div>