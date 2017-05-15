<?php
/* @package templateSystem
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_main_page.php 7085 2007-09-22 04:56:31Z ajeh $
 */
?>
</head>
<?php
// the following IF statement can be duplicated/modified as needed to set additional flags
// Code to Disable the Left and Right Column from Page
  if (in_array($current_page_base,explode(",",'product_info,products_new,products_all,specials,featured_products,checkout_shipping_address,checkout_payment,checkout_shipping,checkout_payment_address,checkout_confirmation,advanced_search_result,password_forgotten,account,account_history,account_history_info,account_edit,address_book,address_book_process,account_password,account_newsletters,account_notifications,gv_faq,gv_redeem,discount_coupon')) ) {
	$flag_disable_left = true;
  }
  if (in_array($current_page_base,explode(",",'login,create_account,shopping_cart,compare'))) {
		$flag_disable_left = true;
		$flag_disable_right = true;
	}
  if (in_array($current_page_base,explode(",",'advanced_search,checkout_success,time_out,page_not_found,product_reviews_write,reviews,product_reviews,product_reviews_info,contact_us,logoff,create_account_success,wishlist')) ) {
    $flag_disable_right = true;
  }
	if ($current_page_base == 'index' and $_GET['cPath'] != '' ) {
		$flag_disable_left = true;
	}
	if ($current_page_base == 'index' and $_GET['manufacturers_id'] != '' ) {
		$flag_disable_left = true;
	}
  $header_template = 'tpl_header.php';
  $footer_template = 'tpl_footer.php';
  $left_column_file = 'column_left.php';
  $right_column_file = 'column_right.php';
  
  $category_query = "select ca.categories_id, ca.categories_image, ca.parent_id, ca.date_added, ca.last_modified, ca.categories_status, cad.categories_id, cad.categories_name from " .TABLE_CATEGORIES . " ca, " .TABLE_CATEGORIES_DESCRIPTION . " cad where ca.categories_id = cad.categories_id and ca.categories_status='1' and cad.language_id='".(int)$_SESSION['languages_id']."'";
		$categories = $db->Execute($category_query);
?>

<?php
 /**
  * prepares and displays header output
  *
  */
  if (CUSTOMERS_APPROVAL_AUTHORIZATION == 1 && CUSTOMERS_AUTHORIZATION_HEADER_OFF == 'true' and ($_SESSION['customers_authorization'] != 0 or $_SESSION['customer_id'] == '')) {
    $flag_disable_header = true;
  }
  require($template->get_template_dir('tpl_header.php',DIR_WS_TEMPLATE, $current_page_base,'common'). '/tpl_header.php');?>
  <!-- Code to Display Home Page  -->
  		<?php if ($this_is_home_page) { 
			$flag_disable_right = true;
			$flag_disable_left = true;
		?>		
   			
        <!-- Main Slideshow -->
        <?php require($template->get_template_dir('tpl_main_slideshow.php',DIR_WS_TEMPLATE, $current_page_base,'common'). '/tpl_main_slideshow.php');?>
        <!-- Main Slideshow Ends -->
        
        <!-- Featured Categories Container -->
        <?php if($display_featured_category=="yes") { ?>
        <div id="categories-content-wrapper" class="section featured-categories">
            <div class="container">
                <div class="brands-slider">
                    <div class="row">
                        <div class="col-lg-12 wow fadeInUp animated" data-wow-duration="2s">
                            <h4 class="section-title"><?php echo HEADER_TITLE_MAIN_FEATURED_CATEGORIES;?></h4>
                            <div class="row">
                                <div class="categories owl-carousel owl-theme products-container landscape ">
                                    <?php
                                        while(!$categories->EOF) {
                                        $category_id=$categories->fields['categories_id'];
                                        $category_image=$categories->fields['categories_image'];
                                        $category_name=$categories->fields['categories_name'];
                                        $category_name=ltrim(substr($category_name, 0, 30) . '');
                                        if(in_array($category_id, $featured_category_id, TRUE)) {
                                    ?> 
                                    <div class="col-lg-12">
                                        <div class="product">
                                            <div class="product-link">
                                                 <div class="product-thumbnail">
                                                     <span class='ribbon hot' title=''>Featured</span>
                                                     <?php echo '<a href="' .zen_href_link(FILENAME_DEFAULT, 'cPath=' .
                                                     zen_get_generated_category_path_rev
                                                     ($category_id).'&pg=categories') . '">'?> 
                                                     <img src="images/<?php echo $category_image; ?>" 
                                                     alt="<?php echo $category_name; ?>"/> 
                                                     </a>
                                                 </div>
                                                 <div class="category-name title">
                                                     <?php echo '<a href="' .zen_href_link(FILENAME_DEFAULT, 'cPath=' .
                                                     zen_get_generated_category_path_rev
                                                     ($category_id).'&pg=categories') . '">'?> 
                                                     <?php echo $category_name; ?>
                                                     </a>
                                                 </div>
                                            </div>         
                                        </div>
                                    </div>
                                    <?php }
                                        $categories->MoveNext();
                                        }  ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- Featured Categories Container Ends -->
        
		<?php } ?>
		<?php if (DEFINE_BREADCRUMB_STATUS == '1' || (DEFINE_BREADCRUMB_STATUS == '2' && !$this_is_home_page) ) { ?>
        	<!-- Breadcrumb Container -->
            <div class="main-breadcrumb">
                <div class="container">
                    <div class="main">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="breadcrumbs">
                                    <div id="navBreadCrumb">
                                        <ul><?php echo $breadcrumb->trail(BREAD_CRUMBS_SEPARATOR); ?></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		<?php } ?>
       	<!-- Breadcrumb Container Ends -->
       	<!-- Main Content Wrapper -->
        <div class="main-top">
            <div class="container">
                <div class="main">
                    <div class="row">
                        <div class="main-content">
                            <div id="contentarea-wrapper">
                                <?php if($flag_disable_left == true && $flag_disable_right == true ) { ?>
                                <div id="centercontent-wrapper" class="single-column col-lg-12">
                                        <?php } elseif($flag_disable_left == true) { ?> 
                                        <div id="centercontent-wrapper" class="col-lg-9 col-md-8 col-sm-12 col-xs-12 columnwith-right"> 
                                                <?php } elseif($flag_disable_right == true) { ?> 
                                            <div id="centercontent-wrapper" class="col-lg-9 col-md-8 col-sm-12 col-xs-12 columnwith-left">
                                                <?php }else { 
                                                    $class_name = 'three-columns';
                                                ?> 
                                                <div id="centercontent-wrapper" class="col-lg-6 col-md-4 col-sm-12 col-xs-12 noleft-margin two-column">
                                                    <?php } ?>
                                                    <?php
                                                      if (SHOW_BANNERS_GROUP_SET1 != '' && $banner = zen_banner_exists('dynamic', SHOW_BANNERS_GROUP_SET1)) {
                                                        if ($banner->RecordCount() > 0) {
                                                    ?>
                                                    <div id="bannerOne" class="banners"><?php echo zen_display_banner('static', $banner); ?></div>
                                                    <?php
                                                        }
                                                      }
                                                    ?>
                                                    <!-- bof upload alerts -->
                                                    <?php if ($messageStack->size('upload') > 0) echo $messageStack->output('upload'); ?>
                                                    <!-- eof upload alerts -->
                                                    <?php
                                                     /**
                                                      * prepares and displays center column
                                                      *
                                                      */ ?>
                                                    <?php require($body_code); ?>
                                                    <?php
                                                      if (SHOW_BANNERS_GROUP_SET4 != '' && $banner = zen_banner_exists('dynamic', SHOW_BANNERS_GROUP_SET4)) {
                                                        if ($banner->RecordCount() > 0) {
                                                    ?>
                                                    <div id="bannerFour" class="banners"><?php echo zen_display_banner('static', $banner); ?></div>
                                                    <?php
                                                        }
                                                      } ?> 
                                                </div>
                                                <?php
                                                    if (COLUMN_LEFT_STATUS == 0 || (CUSTOMERS_APPROVAL == '1' and $_SESSION['customer_id'] == '') || (CUSTOMERS_APPROVAL_AUTHORIZATION == 1 && CUSTOMERS_AUTHORIZATION_COLUMN_LEFT_OFF == 'true' and ($_SESSION['customers_authorization'] != 0 or $_SESSION['customer_id'] == ''))) {
                                          // global disable of column_left
                                                    $flag_disable_left = true;
                                                }?>
                                                <?php
                                                    if (!isset($flag_disable_left) || !$flag_disable_left) {
                                                        if($flag_disable_right == true) { 
                                                ?>
                                                    <div id="left-column" class="col-lg-3 col-md-4 col-sm-12 col-xs-12 <?php echo $class_name; ?>">	
                                                    <?php } else { ?>
                                                    <div id="left-column" class="col-lg-3 col-md-4 col-sm-6 col-xs-12 <?php echo $class_name; ?>">	
                                                    <?php } ?>
                                                    <?php
                                                        /**
                                                        * prepares and displays left column sideboxes
                                                        *
                                                        */
                                                    ?>
                                                    <?php require(DIR_WS_MODULES . zen_get_module_directory('column_left.php')); ?>
                                                    </div>
                                                <?php
                                                    }
                                                ?>
                                                        
                                                <?php
                                                    if (COLUMN_RIGHT_STATUS == 0 || (CUSTOMERS_APPROVAL == '1' and $_SESSION['customer_id'] == '') || (CUSTOMERS_APPROVAL_AUTHORIZATION == 1 && CUSTOMERS_AUTHORIZATION_COLUMN_RIGHT_OFF == 'true' and ($_SESSION['customers_authorization'] != 0 or $_SESSION['customer_id'] == ''))) {
                                                      // global disable of column_right
                                                      $flag_disable_right = true;
                                                    }
                                                        if (!isset($flag_disable_right) || !$flag_disable_right) {
                                                            if($flag_disable_left == true) { 
                                                        ?>
                                                        <div id="right-column" class="col-lg-3 col-md-4 col-sm-12 col-xs-12 rightcolumn">
                                                        <?php
                                                            } else {
                                                        ?>
                                                        <div id="right-column" class="col-lg-3 col-md-4 col-sm-6 col-xs-12 rightcolumnwl">
                                                            <?php
                                                                }
                                                             /**
                                                              * prepares and displays right column sideboxes
                                                              *
                                                              */
                                                            ?>
                                                            <?php require(DIR_WS_MODULES . zen_get_module_directory('column_right.php')); ?>
                                                        </div>
                                                    <?php
                                                    }
                                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
    		</div>
    	</div>                                            

<?php

 /**
  * prepares and displays footer output
  *
  */
  if (CUSTOMERS_APPROVAL_AUTHORIZATION == 1 && CUSTOMERS_AUTHORIZATION_FOOTER_OFF == 'true' and ($_SESSION['customers_authorization'] != 0 or $_SESSION['customer_id'] == '')) {
    $flag_disable_footer = true;
  }
  require($template->get_template_dir('tpl_footer.php',DIR_WS_TEMPLATE, $current_page_base,'common'). '/tpl_footer.php');
?>
<!--bof- parse time display -->
<?php
  if (DISPLAY_PAGE_PARSE_TIME == 'true') {
?>
<div class="smallText center">Parse Time: <?php echo $parse_time; ?> - Number of Queries: <?php echo $db->queryCount(); ?> - Query Time: <?php echo $db->queryTime(); ?></div>
<?php
  }
?>
<!--eof- parse time display -->
<!--bof- banner #6 display -->
<?php
  if (SHOW_BANNERS_GROUP_SET6 != '' && $banner = zen_banner_exists('dynamic', SHOW_BANNERS_GROUP_SET6)) {
    if ($banner->RecordCount() > 0) {
?>
<?php
    }
  }
?>
<!--eof- banner #6 display -->
</body>
