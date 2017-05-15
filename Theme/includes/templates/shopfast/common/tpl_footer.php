<?php
/**
 * @package templateSystem
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_footer.php 3183 2006-03-14 07:58:59Z birdbrain $
 */
require(DIR_WS_MODULES . zen_get_module_directory('footer.php'));
?>

<?php
if (!$flag_disable_footer) {
	$cat_slide = "select * from ".DB_PREFIX."manufacturers ORDER BY RAND()";
	$manufactureimage = $db->Execute($cat_slide);
	if ($this_is_home_page)
		{
?>

<!-- Brands Slider Wrapper -->
<?php if($display_our_brands=="yes") { ?>
<div class="brands-wrapper section">
	<div class="container">
    	<div class="brands-slider">
           	<div class="row">
               	<div class="col-lg-12 wow fadeInUp animated" data-wow-duration="2s">
            	    <h4 class="section-title"><?php echo HEADER_TITLE_FOOTER_OUR_PARTNERS; ?></h4>
                    	<div class="row">
                            <div class="brands owl-carousel owl-theme">
                                <?php 
                                    while (!$manufactureimage->EOF) {
                                    //print_r($manufactureimage);
                                        $manufacturers_image = $manufactureimage->fields['manufacturers_image'];
                                        $manufacturers_id = $manufactureimage->fields['manufacturers_id'];
                                ?>
                                <div class="item">
                                    <img src="images/<?php echo $manufacturers_image;?>" alt="" width="<?php echo SMALL_IMAGE_WIDTH; 	
                                    ?>" height="<?php echo SMALL_IMAGE_HEIGHT; ?>"/>
                                </div>
                                <?php $manufactureimage->MoveNext();
                                } ?>
                            </div>
                    	</div>
            	</div>
           	</div>
       	</div>
	</div>
</div>
<?php } ?>
<!-- Brands Slider Wrapper Ends -->
<?php } ?>

<!-- Footer Row 1 -->
<?php if($display_footer_row_1=="yes") { ?>
<?php
include zen_get_file_directory(DIR_WS_LANGUAGES . $_SESSION['language'] . '/html_includes/', FILENAME_DEFINE_FOOTER_ROW_1, 'false');
?>
<?php } ?>
<!-- Footer Row 1 Ends -->

<!-- Footer Row 2 -->
<?php if($display_footer_row_1=="yes") { ?>
<?php
include zen_get_file_directory(DIR_WS_LANGUAGES . $_SESSION['language'] . '/html_includes/', FILENAME_DEFINE_FOOTER_ROW_2, 'false');
?>
<?php } ?>
<!-- Footer Row 2 Ends -->
<!--Copyright Row -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <?php if($store_copyright != NULL) { ?>
            <div class="copyright-wrapper col-lg-12">
                <div class="copyright-text">
                    <p>&copy; <?php echo $store_copyright; ?></p>
                </div>
            </div>
            <?php } ?>
            <a id="w2b-StoTop" class="top" style="display: block;">Back to Top</a>
        </div>
    </div>
</div>
<!--CopyRight Row Ends -->

<?php
} // flag_disable_footer
?>


<!-- Shopfast JS Files -->
<!-- Google Jquery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Google Jquery Ends -->
<?php if ($this_is_home_page) { ?>
	<script src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'jscript').'/jquery.easing.1.3.js'?>" type="text/javascript"></script>
<?php }?>

<!-- BOF Mainmenu JS New Update-->
<script src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'jscript').'/menumaker.js'?>" type="text/javascript"></script>
<!-- EOF Mainmenu JS New Update-->

<!-- Select Dropdown JS -->
<script src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'jscript').'/select2.js'?>" type="text/javascript"></script>
<!-- Select Dropdown JS Ends -->
<!-- Bootstrap JS -->
<script src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'jscript').'/bootstrap.js'?>" type="text/javascript"></script>
<!-- Bootstrap JS Ends -->
<!-- Browser Selector JS -->
<script src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'jscript').'/css_browser_selector.js'?>" type="text/javascript"></script>
<!-- Browser Selector JS Ends -->
<!-- Nice Scroll JS -->
<script src="<?php echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'jscript').'/jquery.nicescroll.min.js'?>" type="text/javascript"></script>
<!-- Nice Scroll JS Ends -->
<!-- Shopfast Custom JS -->
<script src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'jscript').'/shopfast_custom.js'?>" type="text/javascript">
</script>
<!-- Shopfast Custom JS Ends -->
<!-- Tab JS -->
<script src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'jscript').'/tabcontent.js'?>" type="text/javascript"></script>
<!-- Tab JS Ends -->
<!--Owl Slider-->
<script src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'jscript').'/owl.carousel.js'?>" type="text/javascript"></script>
<!--Owl Slider Ends-->
<!-- WOW JS -->
<script src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'jscript').'/wow.min.js'?>" type="text/javascript"></script>
<script type="text/javascript">
    var wow = new WOW(
		{
			boxClass: 'wow', // animated element css class (default is wow)
			animateClass: 'animated', // animation css class (default is animated)
			offset: 0, // distance to the element when triggering the animation (default is 0)
			mobile: false // trigger animations on mobile devices (true is default)
		}
	);
		wow.init(); 
</script>
<!-- WOW JS Ends -->
<!-- JQuery Lightbox JS and Cloud Zoom JS-->  
<?php if (in_array($current_page_base,explode(",",'product_info,product_reviews_info,product_reviews,product_reviews_write'))) { ?>
<script src="<?php echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'jscript').'/jscript_jquery_1-4-4.js'?>" type="text/javascript"></script>
<script src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'jscript').'/cloud-zoom.1.0.3.js'?>" type="text/javascript"></script>
<script type="text/javascript">
//Cloud Zoom
var cld = jQuery.noConflict();
cld('#zoom01, .cloud-zoom-gallery').CloudZoom();
</script>
<?php } ?>
<!-- JQuery Lightbox JS and Cloud Zoom JS Ends--> 