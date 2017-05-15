<?php
/**
 * @package templateSystem
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 @version $Id: tpl_header.php 3392 2006-04-08 15:17:37Z birdbrain $
 */
?>


<?php
	// Display all header alerts via messageStack:
  	if ($messageStack->size('header') > 0) {
    	echo $messageStack->output('header');
  	}
  	if (isset($_GET['error_message']) && zen_not_null($_GET['error_message'])) {
  		echo htmlspecialchars(urldecode($_GET['error_message']));
  	}
  	if (isset($_GET['info_message']) && zen_not_null($_GET['info_message'])) {
   		echo htmlspecialchars($_GET['info_message']);
	} else {
	}
?>

<!--bof-header logo and navigation display-->
<?php
if (!isset($flag_disable_header) || !$flag_disable_header) {
?>
<!-- Header Container -->
<header class="header-container">
    <div class="header">
    	<div class="container">
        	<div class="row">
                <!-- Top Links -->
                <div class="header-top col-lg-6 col-md-6 col-sm-6 col-xs-12 center-sm">
                    <div class="top-link">
                        <ul class="links">
                            <li>
                                <a href="<?php echo zen_href_link(FILENAME_ACCOUNT, '', 'SSL'); ?>">
                                    <?php echo HEADER_TITLE_MY_ACCOUNT; ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo zen_href_link(compare, '', 'SSL'); ?>">
                                    <?php echo HEADER_TITLE_COMPARE; ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo zen_href_link(wishlist, '', 'SSL'); ?>">
                                    <?php echo HEADER_TITLE_WISHLIST; ?>
                                </a>
                            </li>
                            <?php 
                                if (STORE_STATUS == '0') 
                                    {
                                    if ($_SESSION['cart']->count_contents() != 0) {
                            ?>
                            <li>
                                <a href="<?php echo zen_href_link(FILENAME_CHECKOUT_SHIPPING, '', 'SSL'); ?>">
                                    <?php echo HEADER_TITLE_CHECKOUT; ?>
                                </a>
                            </li>
                            <?php } else { ?>
                            <li>
                                <a href="<?php echo HTTP_SERVER . DIR_WS_CATALOG ?>index.php?main_page=shopping_cart">
                                    <?php echo HEADER_TITLE_CHECKOUT; ?>
                                </a>
                            </li>
                            <?php } } ?>
                            <li>
								<?php if ($_SESSION['customer_id']) { ?>
                                   <a href="<?php echo zen_href_link(FILENAME_LOGOFF, '', 'SSL'); ?>">
                                        <?php echo HEADER_TITLE_LOGOFF; ?>
                                   </a>
                                <?php } else { ?>
                                   <a href="<?php echo zen_href_link(FILENAME_LOGIN, '', 'SSL'); ?>">
                                        <?php echo HEADER_TITLE_LOGIN; ?>
                                   </a>
                                   <li>
                                       <a href="<?php echo zen_href_link(FILENAME_CREATE_ACCOUNT, '', 'SSL'); ?>">
                                            <?php echo HEADER_TITLE_CREATE_ACCOUNT; ?>
                                        </a>
                                   	</li>
                                <?php } ?>
                            </li>                       
                        </ul>
                    </div>
                </div>
                <!-- Top Links Ends -->
                
                <!-- BOF Top Social Links Changes New Update -->
                <div class="header-social-icons col-lg-6 col-md-6 col-sm-6 col-xs-12 center-sm">
                    <ul>
                        <?php if($twitter_link != NULL) {?>
                        <li>
                        	<a data-original-title="Twitter" data-toggle="tooltip" href="http://www.twitter.com/<?php echo $twitter_link;?>" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
                        </li>
                        <?php } ?>
                        
						<?php if($facebook_link != NULL) {?>
                        <li>
                        	<a data-original-title="Facebook" data-toggle="tooltip" href="http://www.facebook.com/<?php echo $facebook_link;?>" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                        </li>
                        <?php } ?>
                        
                        <?php if($google_link != NULL) {?>
                        <li>
                        	<a data-original-title="Google Plus" data-toggle="tooltip" href="<?php echo $google_link; ?>" target="_blank" class="googleplus"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <?php } ?>
                        
                        <?php if($instagram_link != NULL) {?>
                        <li>
                        	<a data-original-title="Instagram" data-toggle="tooltip" href="<?php echo $instagram_link;?>" 
                        	target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                        </li>
                        <?php } ?>
                        
                        <?php if($pinterest_link != NULL) {?>
                        <li>
                        	<a data-original-title="Pinterest" data-toggle="tooltip" href="<?php echo $pinterest_link; ?>" target="_blank" class="pinterest"><i class="fa fa-pinterest"></i></a>
                        </li>
                        <?php } ?>
                        
                        <?php if($skype_link != NULL) {?>
                        <li>
                        	<a data-original-title="Skype" data-toggle="tooltip" href="<?php echo $skype_link; ?>" target="_blank" class="skype"><i class="fa fa-skype"></i></a>
                        </li>
                        <?php } ?>
                        
                        <?php if($youtube_link != NULL) {?>
                        <li>
                        	<a data-original-title="Youtube" data-toggle="tooltip" href="<?php echo $youtube_link; ?>" target="_blank" class="youtube"><i class="fa fa-youtube-play"></i></a>
                        </li>
                        <?php } ?>
                        
						<?php if($linkedin_link != NULL) {?>
                        <li>
                        	<a data-original-title="Linkedin" data-toggle="tooltip" href="<?php echo $linkedin_link; ?>" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </li>
                        <?php } ?>
                        
                        <?php if($rss_link != NULL) {?>
                        <li><a data-original-title="RSS" data-toggle="tooltip" href="<?php echo $rss_link; ?>" target="_blank" class="rss"><i class="fa fa-rss"></i></a></li>
                        <?php } ?>
                        
                    </ul>
                </div>
                <!-- EOF Top Social Links Changes New Update -->
        	</div>
    	</div>
    </div>
    <div class="header-content-center">
    	<div class="container">
        	<div class="row">    		
                <!-- Logo Container -->
                <div class="logo col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <a href="index.php?main_page=index">
                        <img alt="<?php if($logo_image!=NULL){ echo "logo"; } ?>" src="<?php echo $template->get_template_dir
                        ('',DIR_WS_TEMPLATE, $current_page_base,'images').'/logo/'.$logo_image;?>" />
                    </a>
                </div>
        		<!-- Logo Container -->
                <div class="settings col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <div class="cart header-settings">
						<div class="btn-cart">
                            <!-- BOF ZX AJAX Add to Cart -->
							<?php
                            // BOF AJAX Cart 
                                if (ZX_AJAX_CART_STATUS == 'true') {
                                    echo '<div id="carttopcontainer"></div>';
                                    require(DIR_WS_MODULES. 'sideboxes/'.$template_dir. '/zx_ajax_shopping_cart.php');
                                } 
                            // EOF AJAX Cart
                            ?>
							<!-- EOF ZX AJAX Add to Cart -->
                    	</div>    
                    </div>
                    <div class="btn-group header-settings">
                        <button class="btn dropdown-toggle btn-setting" data-toggle="dropdown" type="button">
                            <i class="fa fa-cog"></i>
                            <span class="text-label"><?php echo HEADER_TITLE_MAIN_SETTING ;?></span>
                            <span class="fa fa-angle-down"></span>
                        </button>
                        <div class="quick-setting dropdown-menu">
                            <!-- Language Container -->
                            <div class="language-switcher">
                                <label><?php echo HEADER_TITLE_MAIN_LANGUAGE; ?> : </label>
                                <?php include(DIR_WS_MODULES . zen_get_module_directory('header_languages.php')); ?>
                            </div>
                            <!-- Language Container ends -->
                            <!-- Currency Container -->
                            <div class="currency_top">
                                <label><?php echo HEADER_TITLE_MAIN_CURRENCY; ?> : </label>
                                <?php include(DIR_WS_MODULES . zen_get_module_directory('header_currencies.php')); ?>
                            </div>
                            <!-- Currency Container Ends -->
                    	</div>
                    </div>
                </div>
			</div>
        </div>
    </div>
    <!-- Main Menu -->
    <div class="nav-maincontainer">
        <div class="container">
            <div class="inner">
            	<!--BOF Menu Change New Update -->
                <div id="cssmenu">
                	<?php require($template->get_template_dir
                	('tpl_drop_menu.php',DIR_WS_TEMPLATE, $current_page_base,'common'). '/tpl_drop_menu.php');?>
                </div>
                <!--EOF Menu Change New Update -->
                
                <div class="search-box">
                    <!--Search Bar-->
                    <?php
                    $text = str_replace("ENTER SEARCH KEYWORDS HERE", "Search here", "ENTER SEARCH KEYWORDS HERE");
                    $content = "";
                    $content .= zen_draw_form('quick_find_header', zen_href_link
                          (FILENAME_ADVANCED_SEARCH_RESULT, '', 'NONSSL', false), 'get');
                    $content .= zen_draw_hidden_field('main_page',FILENAME_ADVANCED_SEARCH_RESULT);
                    $content .= zen_draw_hidden_field('search_in_description', '1') . zen_hide_session_id();
                    $content .= '' . 
                    zen_draw_input_field('keyword', '', 'class="query" maxlength="30" value="'.$text.'" onfocus="if(this.value == \''.$text.'\') this.value = \'\';" onblur="if (this.value == \'\') this.value = \'' . $text . '\';"') . '<button class="btn-search" type="submit"><i class="fa fa-search"></i></button>';
                    $content .= "</form>";
                    echo($content);
                    ?>
                    <!--Search Bar Ends-->
                </div>
            </div>
        </div>
    </div>
    <!--Main Menu ends -->
</header><!-- header-container End-->

<?php if (!$this_is_home_page) { ?>
	<div id="headerpic">
		<?php
        	if (SHOW_BANNERS_GROUP_SET3 != '' && $banner = zen_banner_exists('dynamic', SHOW_BANNERS_GROUP_SET3)) {
            	if ($banner->RecordCount() > 0) {
        ?>
		<div id="bannerThree" class="banners"><?php echo zen_display_banner('static', $banner); ?></div>
		<?php
            }
          }
        ?>
	</div>
		<?php } ?>
    <?php } ?>