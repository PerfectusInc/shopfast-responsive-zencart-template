<?php
/**
 * Page Template
 *
 * Loaded automatically by index.php?main_page=shopping_cart.<br />
 * Displays shopping-cart contents
 *
 * @package templateSystem
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_shopping_cart_default.php 15881 2010-04-11 16:32:39Z wilt $
 */
?>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<div class="centerColumn" id="shoppingCartDefault">
<?php
  if ($flagHasCartContents) {
?>

<?php
  if ($_SESSION['cart']->count_contents() > 0) {
?>
<!--<div class="forward"><?php //echo TEXT_VISITORS_CART; ?></div>-->
<?php
  }
?>
<?php	$title = str_replace('Your Shopping Cart Contents', 'Cart', 'Your Shopping Cart Contents'); ?>

<header>
	<h1 id="cartDefaultHeading"><?php echo $title; ?></h1>
</header>

<?php if ($messageStack->size('shopping_cart') > 0) echo $messageStack->output('shopping_cart'); ?>

<?php echo zen_draw_form('cart_quantity', zen_href_link(FILENAME_SHOPPING_CART, 'action=update_product', $request_type)); ?>
<!--<div id="cartInstructionsDisplay" class="content"><?php //echo TEXT_INFORMATION; ?></div>-->
<?php if (!empty($totalsDisplay)) { ?>
  <!--<div class="cartTotalsDisplay important"><?php //echo $totalsDisplay; ?></div>-->

<?php } ?>

<?php  if ($flagAnyOutOfStock) { ?>

<?php    if (STOCK_ALLOW_CHECKOUT == 'true') {  ?>

<div class="alert alert-danger alert-dismissable"><?php echo OUT_OF_STOCK_CAN_CHECKOUT; ?></div>

<?php    } else { ?>
<div class="alert alert-danger alert-dismissable"><?php echo OUT_OF_STOCK_CANT_CHECKOUT; ?></div>

<?php    } //endif STOCK_ALLOW_CHECKOUT ?>
<?php  } //endif flagAnyOutOfStock ?>
<div class="table-responsive">
<table class="table table-hover"  border="0" width="100%" cellspacing="0" cellpadding="0" id="cartContentsDisplay">
     <tr class="tableHeading">
        <th scope="col" id="scProductsHeading"><?php echo TABLE_HEADING_PRODUCTS; ?></th>
        <th scope="col" id="scUnitHeading"><?php echo TABLE_HEADING_PRICE; ?></th>
        <th scope="col" id="scQuantityHeading"><?php echo TABLE_HEADING_QUANTITY; ?></th>
        <th scope="col" id="scUpdateQuantity"><?php echo TABLE_HEADING_UPDATE; ?></th>
        <th scope="col" id="scRemoveHeading"><?php echo TABLE_HEADING_DELETE; ?></th>
        <th scope="col" id="scTotalHeading"><?php echo TABLE_HEADING_TOTAL; ?></th>
     </tr>
         <!-- Loop through all products /-->
	<?php
  		foreach ($productArray as $product) {
	?>
     <tr class="<?php echo $product['rowClass']; ?>">
     	<td class="cartProductDisplay" valign="middle" width="30%">
        	<span id="cartImage" class="back"><?php echo $product['productsImage']; ?></span>
			<!-- BOF Shoppong Cart Page Changes New Update -->
            <span id="product_name">
            	<a href="<?php echo $product['linkProductsName']; ?>"><?php echo $product['productsName']; ?></a>
            	<?php
				  echo $product['attributeHiddenField'];
				  if (isset($product['attributes']) && is_array($product['attributes'])) {
				  //echo '<div>';
				  echo '<ul class="cartAttribsList">';
					reset($product['attributes']);
					foreach ($product['attributes'] as $option => $value) {
				?>
				<li><?php echo $value['products_options_name'] . TEXT_OPTION_DIVIDER . nl2br($value['products_options_values_name']); ?></li>
				<?php
					}
				  echo '</ul>';
				  //echo '</div>';
				  }
				?>
            </span>
            <!-- EOF Shoppong Cart Page Changes New Update -->
			<span class="alert-text bold"> <?php echo $product['flagStockCheck']; ?> </span>
       </td>
	   <td class="cartUnitDisplay"><?php echo $product['productsPriceEach']; ?></td>
       <td class="cartQuantity">
		<?php
          if ($product['flagShowFixedQuantity']) {
            echo $product['showFixedQuantityAmount'] . '<span class="alert-text bold">' . $product['flagStockCheck'] . '</span>' . $product['showMinUnits'];
          } else {
            echo $product['quantityField'] . '<span class="alert-text bold">' . $product['flagStockCheck'] . '</span>' . $product['showMinUnits'];
          }
        ?>
       </td>
	  <td class="cartQuantityUpdate">
		<?php
          if ($product['buttonUpdate'] == '') {
           echo '' ;
          } else {
            echo $product['buttonUpdate'];
          }
        ?>
       </td>
       <td class="cartRemoveItemDisplay">
		<?php
          if ($product['buttonDelete']) {
        ?>
                   <a href="<?php echo zen_href_link(FILENAME_SHOPPING_CART, 'action=remove_product&product_id=' . $product['id']); ?>"><?php echo zen_image($template->get_template_dir(ICON_IMAGE_TRASH, DIR_WS_TEMPLATE, $current_page_base,'images/icons'). '/' . ICON_IMAGE_TRASH, ICON_TRASH_ALT); ?></a>
        <?php
          }
          /*if ($product['checkBoxDelete'] ) {
            echo zen_draw_checkbox_field('cart_delete[]', $product['id']);
          }*/
        ?>
		</td>
       <td class="cartTotalDisplay"><?php echo $product['productsPrice']; ?></td>
     </tr>
		<?php
          } // end foreach ($productArray as $product)
        ?>
       <!-- Finished loop through all products /-->
	 </table>
</div>
<div id="cartSubTotal"><?php echo SUB_TITLE_SUB_TOTAL; ?> <?php echo $cartShowTotal; ?></div>
<br class="clearBoth" />

<!--bof shopping cart buttons-->

<div class="buttonRow back"><?php echo zen_back_link() . zen_image_button(BUTTON_IMAGE_CONTINUE_SHOPPING, BUTTON_CONTINUE_SHOPPING_ALT) . '</a>'; ?></div>
<?php
    if (SHOW_SHIPPING_ESTIMATOR_BUTTON == '1') {
?>

<div class="buttonRow back"><?php echo '<a href="javascript:popupWindow(\'' . zen_href_link(FILENAME_POPUP_SHIPPING_ESTIMATOR) . '\')">' .
 zen_image_button(BUTTON_IMAGE_SHIPPING_ESTIMATOR, BUTTON_SHIPPING_ESTIMATOR_ALT) . '</a>'; ?></div>
<?php
    }
?>

<div class="buttonRow forward checkout_button"><?php echo '<a href="' . zen_href_link(FILENAME_CHECKOUT_SHIPPING, '', 'SSL') . '">' . zen_image_button(BUTTON_IMAGE_CHECKOUT, BUTTON_CHECKOUT_ALT) . '</a>'; ?></div>

<?php
// show update cart button
 // if (SHOW_SHOPPING_CART_UPDATE == 2 or SHOW_SHOPPING_CART_UPDATE == 3) {
?>
<!--<div class="buttonRow back"><?php //echo zen_image_submit(ICON_IMAGE_UPDATE, ICON_UPDATE_ALT); ?></div>-->
<?php
 // } else { // don't show update button below cart
?>
<?php
 // } // show update button
?>

<!--eof shopping cart buttons-->
</form>

<!-- ** BEGIN PAYPAL EXPRESS CHECKOUT ** -->
<?php  // the tpl_ec_button template only displays EC option if cart contents >0 and value >0
if (defined('MODULE_PAYMENT_PAYPALWPP_STATUS') && MODULE_PAYMENT_PAYPALWPP_STATUS == 'True') {
  include(DIR_FS_CATALOG . DIR_WS_MODULES . 'payment/paypal/tpl_ec_button.php');
}
?>
<!-- ** END PAYPAL EXPRESS CHECKOUT ** -->

<?php
      if (SHOW_SHIPPING_ESTIMATOR_BUTTON == '2') {
/**
 * load the shipping estimator code if needed
 */
?>
      <?php require(DIR_WS_MODULES . zen_get_module_directory('shipping_estimator.php')); ?>

<?php
      }
?>
<?php
  } else {
?>

<h2 id="cartEmptyText"><?php echo TEXT_CART_EMPTY; ?></h2>

<?php
  }
?>

</div>
