<?php
/**
 * @package templateSystem
 * @copyright Copyright 2014 ZenExpert - http://www.zenexpert.com
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: add_prod.php 1 2014-06-05 18:53:26Z ZenExpert $
 */

  require('includes/application_top.php');


//print_r($attributes);

$prod = $_POST['products_id'];

if($prod){

   $alreadyincarttest = 0;

   $products2 = $_SESSION['cart']->get_products();
   for ($j=0, $n=sizeof($products2); $j<$n; $j++) {
//   echo $products2[$j]['id'] . '-' . $new_products->fields['products_id'] . '<br>';
   if($products2[$j]['id']==$prod){
   $alreadyincarttest = 1;
   }
   }



if($alreadyincarttest=='1'){
$_SESSION['cart']->actionAjaxRemoveProduct2($prod);
}
else{
$_SESSION['cart']->add_cart($prod, 1, $attributes, false);
}


  $basket_content ="";


  $basket_content .= '' . "\n";
    $products = $_SESSION['cart']->get_products();
    for ($i=0, $n=sizeof($products); $i<$n; $i++) {

$attributeHiddenField = "";
  $attrArray2 = false;
  $productsName = $products[$i]['name'];
  // Push all attributes information in an array
  if (isset($products[$i]['attributes']) && is_array($products[$i]['attributes'])) {
    if (PRODUCTS_OPTIONS_SORT_ORDER=='0') {
      $options_order_by= ' ORDER BY LPAD(popt.products_options_sort_order,11,"0")';
    } else {
      $options_order_by= ' ORDER BY popt.products_options_name';
    }
    foreach ($products[$i]['attributes'] as $option => $value) {
      $attributes = "SELECT popt.products_options_name, poval.products_options_values_name, pa.options_values_price, pa.price_prefix
                     FROM " . TABLE_PRODUCTS_OPTIONS . " popt, " . TABLE_PRODUCTS_OPTIONS_VALUES . " poval, " . TABLE_PRODUCTS_ATTRIBUTES . " pa
                     WHERE pa.products_id = :productsID
                     AND pa.options_id = :optionsID
                     AND pa.options_id = popt.products_options_id
                     AND pa.options_values_id = :optionsValuesID
                     AND pa.options_values_id = poval.products_options_values_id
                     AND popt.language_id = :languageID
                     AND poval.language_id = :languageID " . $options_order_by;

      $attributes = $db->bindVars($attributes, ':productsID', $products[$i]['id'], 'integer');
      $attributes = $db->bindVars($attributes, ':optionsID', $option, 'integer');
      $attributes = $db->bindVars($attributes, ':optionsValuesID', $value, 'integer');
      $attributes = $db->bindVars($attributes, ':languageID', $_SESSION['languages_id'], 'integer');
      $attributes_values = $db->Execute($attributes);
      //clr 030714 determine if attribute is a text attribute and assign to $attr_value temporarily
      if ($value == PRODUCTS_OPTIONS_VALUES_TEXT_ID) {
        $attributeHiddenField .= zen_draw_hidden_field('id[' . $products[$i]['id'] . '][' . TEXT_PREFIX . $option . ']',  $products[$i]['attributes_values'][$option]);
        $attr_value = $products[$i]['attributes_values'][$option];
      } else {
        $attributeHiddenField .= zen_draw_hidden_field('id[' . $products[$i]['id'] . '][' . $option . ']', $value);
        $attr_value = $attributes_values->fields['products_options_values_name'];
      }

      $attrArray2[$option]['products_options_name'] = $attributes_values->fields['products_options_name'];
      $attrArray2[$option]['options_values_id'] = $value;
      $attrArray2[$option]['products_options_values_name'] = zen_output_string_protected($attr_value) ;
      $attrArray2[$option]['options_values_price'] = $attributes_values->fields['options_values_price'];
      $attrArray2[$option]['price_prefix'] = $attributes_values->fields['price_prefix'];
    }
  } //end foreach [attributes]
    

$prod_attr ='';

  if (isset($attrArray2) && is_array($attrArray2)) {
    reset($attrArray2);
    foreach ($attrArray2 as $option => $value2) {
		$prod_attr .=  '<div class="cartattr">'. $value2['products_options_name'] . ': ' . nl2br($value2['products_options_values_name']) .'</div>';
    }
  }
    

$basket_content .= '<div class="cart_table"><div class="row"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><div class="back cart_image">'. zen_get_products_image($products[$i]['id'], SMALL_IMAGE_WIDTH, SMALL_IMAGE_HEIGHT) .'</div></div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><div class="back cart_contentbox"><div class="cartTopProductName"><a href="' . zen_href_link(zen_get_info_page($products[$i]['id']), 'products_id=' . $products[$i]['id']) . '">';

  $basket_content .= $products[$i]['name'] . '</a></div><br class="clearBoth" />'.TEXT_AJAX_CART_QTY.''. $products[$i]['quantity'] .'<B><span class="forward">'. $currencies->display_price($products[$i]['final_price'], zen_get_tax_rate($products[$i]['tax_class_id']), $products[$i]['quantity']) . ($products[$i]['onetime_charges'] != 0 ? '</span><br />' . $currencies->display_price($products[$i]['onetime_charges'], zen_get_tax_rate($products[$i]['tax_class_id']), 1) : '') .'</B>'. $prod_attr .'</div></div><div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><div class="cartTopProductRemove"><a id="topcartlinkremove" onClick="add_prod(\''. $products[$i]['id'] .'\');"><i class="fa fa-times-circle"></i></a></div></div></div></div>' . "\n";

      if (isset($_SESSION['new_products_id_in_cart']) && ($_SESSION['new_products_id_in_cart'] == $products[$i]['id'])) {
        $_SESSION['new_products_id_in_cart'] = '';
      }
    }


    $cart_top = '<a href="'. zen_href_link(FILENAME_SHOPPING_CART, '', 'NONSSL') .'" class="shopping_cart_link" id="topcartlink" onClick="ajax_cart(); return false"><i class="fa fa-shopping-cart"></i><span> '. $_SESSION['cart']->count_contents() .TEXT_AJAX_CART_ITEMS. $currencies->format($_SESSION['cart']->show_total()) .'</span></a>';    


echo json_encode(array('status'=>'success','message'=>'Your product added','already'=>$alreadyincarttest,'cart'=> utf8_encode($basket_content),'cart_top'=> utf8_encode($cart_top),'total'=> utf8_encode($currencies->format($_SESSION['cart']->show_total()))));


//'. $currencies->format($_SESSION['cart']->show_total()) .'
//
}
else{
echo json_encode(array('status'=>'error','message'=>'Please try again'));
}


?>
<?php require(DIR_WS_INCLUDES . 'application_bottom.php'); ?>
