<?php
/**
 * Module Template
 *
 * @package templateSystem
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_modules_upcoming_products.php 6422 2007-05-31 00:51:40Z ajeh $
 */
?>
<!-- bof: upcoming_products -->
<div class="centerBoxWrapper" id="upcomingProducts">
	<div class="box_heading box_heading_upcoming">
    	<span class="centerBoxHeading">
			<h2><?php echo TABLE_HEADING_UPCOMING_PRODUCTS; ?></h2>
        </span>
    </div>
<?php //echo CAPTION_UPCOMING_PRODUCTS; ?>
  
    <!--<div id="upProductsHeading"><?php //echo TABLE_HEADING_PRODUCTS; ?></div>
    <div id="upDateHeading"><?php //echo TABLE_HEADING_DATE_EXPECTED; ?></div>-->
    <ul>
<?php
	$msg = "<span class='label-upcoming' title=''>Coming Soon</span>";
    for($i=0; $i < sizeof($expectedItems); $i++) { ?>
    <li class="centerBoxContentsUpcoming centeredContent back">
    <div class="productinfo-wrapper">
		<div class="product_image">
        	<?php echo  $msg . '<a href="' . zen_href_link(zen_get_info_page($expectedItems[$i]['products_id']), 'cPath=' . $productsInCategory[$expectedItems[$i]['products_id']] . '&products_id=' . $expectedItems[$i]['products_id']) . '">' . zen_image(DIR_WS_IMAGES . $expectedItems[$i]['products_image'], $expectedItems[$i]['products_name'], IMAGE_PRODUCT_NEW_WIDTH, IMAGE_PRODUCT_NEW_HEIGHT) . '</a>' ; ?>
      	</div>
        <div class="product-name-desc">
        	<div class="product_name">
            	<?php
      echo '<a href="' . zen_href_link(zen_get_info_page($expectedItems[$i]['products_id']), 'cPath=' . $productsInCategory[$expectedItems[$i]['products_id']] . '&products_id=' . $expectedItems[$i]['products_id']) . '">' . $expectedItems[$i]['products_name'] . '</a>'; ?>
            </div>
            <div class="product_price">
            	<?php $products_price = zen_get_products_display_price($expectedItems[$i]['products_id']); 
					if($products_price==NULL){ $products_price = 'Price Coming Soon';}
				?>
            	<?php echo $products_price;?>
            </div>
        </div>
    </div>
    <div class="expected-date">
    	<div class="product-date">
        	<?php echo 'Date Expected : ' . zen_date_short($expectedItems[$i]['date_expected']); ?>
        </div>
    </div>
    </li>
	  <?php
    }
?>
	</ul>
</div>
<!-- eof: upcoming_products -->
