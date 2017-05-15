<?php
/**
 * @package templateSystem
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 */
?>
<!--Query to fetch Shopfast values-->
<?php 
$shopfast_query = "SELECT * FROM " . DB_PREFIX.shopfast;
$shopfast_result = $db->Execute($shopfast_query);


$theme_color = $shopfast_result->fields['theme_color'];
$theme_color = (explode(",",$theme_color));

$logo_image = $shopfast_result->fields['logo_image'];

$featured_category = $shopfast_result->fields['featured_category']; 
$featured_category_id = (explode(",",$featured_category));

$store_address = $shopfast_result->fields['store_address'];
$store_contact = $shopfast_result->fields['store_contact'];
$store_email = $shopfast_result->fields['store_email'];
$store_copyright = $shopfast_result->fields['store_copyright'];
$store_skype = $shopfast_result->fields['store_skype'];
$store_map = $shopfast_result->fields['store_map'];
$newsletter_text = $shopfast_result->fields['newsletter_text'];
$newsletter_details = $shopfast_result->fields['newsletter_details'];
$aboutus_text = $shopfast_result->fields['aboutus_text'];

$facebook_link = $shopfast_result->fields['facebook_link'];
$twitter_link = $shopfast_result->fields['twitter_link'];
$skype_link = $shopfast_result->fields['skype_link'];
$google_link = $shopfast_result->fields['google_link'];
$rss_link = $shopfast_result->fields['rss_link'];
$linkedin_link = $shopfast_result->fields['linkedin_link'];
$pinterest_link = $shopfast_result->fields['pinterest_link'];
$youtube_link = $shopfast_result->fields['youtube_link'];
$instagram_link = $shopfast_result->fields['instagram_link'];

$twitter_box = $shopfast_result->fields['twitter_box'];
$facebook_box = $shopfast_result->fields['facebook_box'];

$payment_image = $shopfast_result->fields['payment_image'];

$display_featured_category = $shopfast_result->fields['display_featured_category'];
$display_main_page = $shopfast_result->fields['display_main_page'];
$display_our_brands = $shopfast_result->fields['display_our_brands'];
$display_footer_row_1 = $shopfast_result->fields['display_footer_row_1'];
$display_footer_row_2 = $shopfast_result->fields['display_footer_row_2'];

$product_name_length = $shopfast_result->fields['product_name_length'];
$product_desc_length = $shopfast_result->fields['product_desc_length'];

?>
<?php if($this_is_home_page) { 
	$slideshow_query = "SELECT * from " . DB_PREFIX.shopfast_slideshow;
	$slideshow_query_result = $db->Execute($slideshow_query);
}
?>
<!--Query Ends-->
<style type="text/css">
 body {
	color: <?php echo $theme_color[0]; ?>;
}
/* Theme Color */
a, a:active, a:visited, #checkoutSuccessOrderLink > a, #checkoutSuccessContactLink > a, #checkoutSuccess a.cssButton.button_logoff, #checkoutSuccess a, #checkoutSuccess a:active, #checkoutSuccess a:visited, .product_title h3, .accordian-header.active, #product_name a, #timeoutDefaultContent a, table#cartContentsDisplay tr th, #prevOrders .tableHeading th, #accountHistInfo .tableHeading, #reviewsWriteReviewer, .bold.user_reviewer, .reviews-list span.date, #loginForm .buttonRow.back.important > a, #logoffDefaultMainContent > a span.pseudolink, .buttonRow.back.important > a, .notfound_title, #createAcctDefaultLoginLink > a, #indexDefaultHeading, #siteMapMainContent a, #siteMapMainContent a:active, #siteMapMainContent a:visited, #unsubDefault a .pseudolink, #unsubDefault a .pseudolink:active, #unsubDefault a .pseudolink:visited, .products_more:active, .products_more:visited, .products_more, #centercontent-wrapper h1, span.title, .current-step, .checkout-steps, #productReviewLink > a, #indexCategories #subcategory_names li:first-child, #reviewsWriteProductPageLink > a, #reviewsWriteReviewPageLink > a, .review_content > p, #productReviewsDefaultProductPageLink > a, .gv_faq a, .gv_faq a:visited, .gv_faq a:active, .alert > a, .alert > a:active, .alert > a:visited, .reviews-list blockquote p a, .reviews-list blockquote p a:active, .reviews-list blockquote p a:visited, .reviews-list blockquote h4 a, .reviews-list blockquote h4 a:active, .reviews-list blockquote h4 a:visited, .cssButton.small_edit, a:visited, .sidebox_price .normalprice, .sidebox_price .productSpecialPriceSale, .add_title, .cartTableHeading, .btn.dropdown-toggle.btn-setting, .cart .btn-cart, .nav > li > a, .nav-maincontainer .container .inner a.toggleMenu, .centerBoxWrapper .owl-theme .owl-controls .owl-buttons .owl-next, .centerBoxWrapper .owl-theme .owl-controls .owl-buttons .owl-prev, .brands-slider .owl-theme .owl-controls .owl-buttons .owl-next, .brands-slider .owl-theme .owl-controls .owl-buttons .owl-prev, #featured-slider-inner .cssButton.button_sold_out_sm, #featured-slider-inner .cssButtonHover.button_sold_out_sm.button_sold_out_smHover, #specials-slider .cssButton.button_sold_out_sm, #specials-slider .cssButtonHover.button_sold_out_sm.button_sold_out_smHover, #new-slider .cssButton.button_sold_out_sm, #new-slider .cssButtonHover.button_sold_out_sm.button_sold_out_smHover, #alsopurchased_products .cssButton.button_sold_out, #alsopurchased_products .cssButtonHover.button_sold_out.button_sold_outHover, .specialsListBoxContents .cssButton.button_sold_out_sm, #wishlist .notabene, .cart_contentbox a:active, .cart_contentbox a:visited, .cart_contentbox a:link, .product-grid .product-info .cssButton.button_sold_out_sm {
	color: <?php echo $theme_color[0]; ?>;
}
.add_title {
	border: 1px solid <?php echo $theme_color[0]; ?>;
}
.header-container .header .header-top ul.links li {
    border-right: 1px solid <?php echo $theme_color[0]; ?>;
}
a:hover, #product_name a:hover, #loginForm .buttonRow.back.important > a:hover, .buttonRow.back.important > a:hover, .cartBoxTotal, #checkoutSuccessOrderLink > a:hover, #checkoutSuccessContactLink > a:hover, #checkoutSuccess a.cssButton.button_logoff:hover, #subproduct_name > a:hover, a.table_edit_button span.cssButton.small_edit:hover, #accountDefault a:hover, .allorder_text > a:hover, #reviewsWriteProductPageLink > a:hover, #reviewsWriteReviewPageLink > a:hover, #productReviewLink > a:hover, .buttonRow.product_price > a:hover, #productReviewsDefaultProductPageLink > a:hover, #searchContent a:hover, #siteMapList a:hover, .box_heading_style h1 a:hover, .info-links > li:hover a, #navBreadCrumb li a:hover, .footer-toplinks a:hover, .banner:hover .link:hover, #cartContentsDisplay a.table_edit_button:hover, #timeoutDefaultContent a:hover, #logoffDefaultMainContent > a span.pseudolink:hover, #createAcctDefaultLoginLink > a:hover, #unsubDefault a .pseudolink:hover, .review_content > p i.fa, .gv_faq a:hover, .alert > a:hover, .reviews-list blockquote p a:hover, .reviews-list blockquote h4 a:hover, .header-container .header a:hover, .btn.dropdown-toggle.btn-setting:hover, .nav li > ul > li:hover > a, .section.featured-categories .products-container .product .product-link:hover a, .widget-linklist ul > li > a:hover#featured-slider-inner .cssButton.button_sold_out_sm, #featured-slider-inner .cssButtonHover.button_sold_out_sm.button_sold_out_smHover, #specials-slider .cssButtonHover.button_sold_out_sm.button_sold_out_smHover, #new-slider .cssButtonHover.button_sold_out_sm.button_sold_out_smHover, #alsopurchased_products .cssButtonHover.button_sold_out.button_sold_outHover, .specialsListBoxContents .cssButtonHover.button_sold_out_sm.button_sold_out_smHover, .widget-linklist ul > li > a:hover, #cartSubTotal, .cartTotalDisplay, #checkoutConfirmDefault #orderTotals, .product-list .mix .description .productSpecialPrice, .product-list .mix .description .single_price, .btn-cart .shopping_cart_link:hover, .cart-container .cartBoxTotal, .cart_contentbox a:hover, .product-grid .product-info .cssButtonHover.button_sold_out_sm.button_sold_out_smHover, .dFilterHeading {
	color: <?php echo $theme_color[1]; ?>;
}

.pagination-style a:hover, .pagination-style .current {
    border-bottom-color: <?php echo $theme_color[1]; ?>;
}

.main-slideshow-wrapper .owl-theme .owl-controls .owl-page.active span:before, .addtocart-info .cart_quantity span:hover, #nav > li.tab_active > a:before, #nav > li:hover > a:before, .owl-carousel.owl-theme .productPriceDiscount, .owl-carousel.owl-theme .productSpecialPrice, .owl-carousel.owl-theme .single_price, .owl-carousel.owl-theme .normalprice, .specialsListBoxContents .productPriceDiscount,  .specialsListBoxContents .productSpecialPrice, .specialsListBoxContents .normalprice, .tooltip-inner, .button,input[type="submit"],input[type="reset"],input[type="button"],.readmore,button, .change_address a, .buttonRow.back.change_address > a, .main-slideshow-wrapper .item .caption .btn, .wishlink:hover, .addtocompare:hover, .mix .productPriceDiscount, .mix .normalprice, .mix .productSpecialPrice, .mix .single_price, .product-info .description .add-to-cart > .btn, .cartmain > a.button, .topCartCheckout, #viewCart a {
	background-color:<?php echo $theme_color[1]; ?>;
	transition: all 0.3s ease-in-out 0s;
		-moz-transition: all 0.3s ease-in-out 0s;
		-webkit-transition: all 0.3s ease-in-out 0s;
		-o-transition: all 0.3s ease-in-out 0s;
		-ms-transition: all 0.3s ease-in-out 0s;
}
.cartmain > a.button, .topCartCheckout, #viewCart a {
	background-color:<?php echo $theme_color[1]; ?> !important;
}
.tooltip.top .tooltip-arrow, .social_bookmarks .tooltip.top .tooltip-arrow {
	border-top:5px solid <?php echo $theme_color[1]; ?>;
}
.tooltip.left .tooltip-arrow, .social_bookmarks .tooltip.left .tooltip-arrow {
	border-left:5px solid <?php echo $theme_color[1]; ?>;
}
.social_bookmarks .tooltip.bottom .tooltip-arrow, .tooltip.bottom .tooltip-arrow {
	border-bottom:5px solid <?php echo $theme_color[1]; ?>;
}
.tooltip.right .tooltip-arrow{
	border-right:5px solid <?php echo $theme_color[1]; ?>;
}
#cssmenu ul ul > li.has-sub:hover:before {
	border-left:4px solid <?php echo $theme_color[1]; ?>;
}
#cssmenu ul ul > li.has-sub:before {
	border-left:4px solid <?php echo $theme_color[0]; ?>;
}
#cssmenu > ul > li.has-sub:before {
	border-top: 4px solid <?php echo $theme_color[0]; ?>;
}
/* Button */
.button, input[type="submit"], input[type="reset"], input[type="button"], .readmore, button, .product-details, .billto-shipto .details, span.details-button input.details-button, .control-buttons button.default, #shoppingCartDefault .buttonRow, #indexCategories #subcategory_names li, .change_address > a, #pageThree .buttonRow.back > a, #pageFour .buttonRow.back > a, #pageTwo .buttonRow.back > a, #topbar-wrapper, #discountcouponInfo .content .buttonRow.forward > a, #wishlist .cssButton.button_back, #wishlist .cssButtonHover.button_back.button_backHover {
	background: none repeat scroll 0 0 <?php echo $theme_color[1]; ?>;
	transition: all 0.3s ease-in-out 0s;
		-moz-transition: all 0.3s ease-in-out 0s;
		-webkit-transition: all 0.3s ease-in-out 0s;
		-o-transition: all 0.3s ease-in-out 0s;
		-ms-transition: all 0.3s ease-in-out 0s;
}
.button:hover, input[type="submit"]:hover, input[type="reset"]:hover, input[type="button"]:hover, .readmore:hover, button:hover, .billto-shipto .details:hover , .profile a:hover, #shoppingCartDefault .buttonRow:hover, .change_address:hover, .change_address > a:hover, #pageThree .buttonRow.back > a:hover, #pageFour .buttonRow.back > a:hover, #pageTwo .buttonRow.back > a:hover, #discountcouponInfo .content .buttonRow.forward > a:hover, .main-slideshow-wrapper .item .caption .btn:hover, .topCartCheckout:hover, #viewCart > a:hover, #wishlist .cssButtonHover.button_back.button_backHover:hover, .product-info .description .add-to-cart > .btn:hover {
	box-shadow: 0 -2px 3px rgba(0, 0, 0, 0.3) inset;
	transition: all 0.3s ease-in-out 0s;
		-moz-transition: all 0.3s ease-in-out 0s;
		-webkit-transition: all 0.3s ease-in-out 0s;
		-o-transition: all 0.3s ease-in-out 0s;
		-ms-transition: all 0.3s ease-in-out 0s;
}

.iconlist .media:hover .pull-left > i, .cartQuantity .fff span:hover, .section .section-title:after, .widget .widget-title:after {
	background-color: <?php echo $theme_color[1]; ?> ;
}

/*Sideboxes*/
.rectangle-list a:before, .iconlist .pull-left > i {
	background-color: <?php echo $theme_color[0]; ?> ;
}
#left-column h3:after, #right-column h3:after, #centercontent-wrapper header > h1:after {
    background-color: <?php echo $theme_color[1]; ?> ;
}

.rectangle-list a:hover:before, .checkout-steps, .current-step {
	background-color:<?php echo $theme_color[1]; ?>;
}
.rectangle-list a:hover:after{
	left: -.5em;
	border-left-color: <?php echo $theme_color[1]; ?>;				
}
.navbar .btn-navbar, .addtocart-info .cart_quantity span, .cartQuantity .fff span {
	background-color: <?php echo $theme_color[0]; ?>;
}
.custom_links.topbar_links.grid-40 li.arrow-down {
	background-color:rgba(0, 0, 0, 0.2);
}

a:hover {
    text-decoration: none;
}
/* Menu Colors */

.nav.main-menu > li.tab_active > a {
	background-color: <?php echo $theme_color[1]; ?>;
}
ul.tabs li.selected a {
	color:<?php echo $theme_color[1]; ?>;
	background-color: #DDDDDD;	
}

/*Product Details*/
.product-name-desc .product_name a:hover {
    color: <?php echo $theme_color[1]; ?>;
}
#whatsNew .centerBoxContentsNew.centeredContent .product_price, #featuredProducts .centerBoxContentsFeatured.centeredContent .product_price, #specialsDefault .centerBoxContentsSpecials.centeredContent .product_price, #specialsListing .specialsListBoxContents .product_price, #alsopurchased_products .product_price, #upcomingProducts .product_price, .productListing-data .product_name > a:hover, .newproductlisting .product_name > a:hover, .productlisting_price .productSpecialPriceSale, .productlisting_price .productSalePrice, .productlisting_price .single_price, .productlisting_price .productSpecialPrice, .productlisting_price .productPriceDiscount, .single_price, #productGeneral .productprice-amount .productSpecialPrice, #productGeneral .productprice-amount .productPriceDiscount, .productSpecialPrice,
.productPriceDiscount {
	color: <?php echo $theme_color[1]; ?>;
}
.product-name-desc .product_name > a, .product-name-desc .product_name > a:active, .product_name > a:visited, .productListing-data .product_name > a, .newproductlisting .product_name > a {
	color: <?php echo $theme_color[0]; ?>;
}
.navNextPrevList > a:hover {
	color: <?php echo $theme_color[1]; ?> !important;
}
#additionalimages-slider .owl-controls .owl-prev:hover, #additionalimages-slider .owl-controls .owl-next:hover, .copyright .top:hover, .newsletter #mc_embed_signup input.button, #contactForm-widget input[type="submit"] {
	background-color: <?php echo $theme_color[1]; ?>;
}
.addtocart-info .wishlink, .addtocart-info .addtocompare {
    border: 2px solid <?php echo $theme_color[1]; ?>;
}
.newsletter #mc_embed_signup input.button, #contactForm-widget input[type="submit"]{
	transition: all 0.3s ease-in-out 0s;
		-moz-transition: all 0.3s ease-in-out 0s;
		-webkit-transition: all 0.3s ease-in-out 0s;
		-o-transition: all 0.3s ease-in-out 0s;
		-ms-transition: all 0.3s ease-in-out 0s;
}
.newsletter #mc_embed_signup .button:hover, #contactForm-widget input[type="submit"]:hover, #indexCategories #subcategory_names li:hover {
	box-shadow: 0 -2px 3px rgba(0, 0, 0, 0.3) inset;
}
.mail > a:hover {
	transition: all 0.3s ease-in-out 0s;
		-moz-transition: all 0.3s ease-in-out 0s;
		-webkit-transition: all 0.3s ease-in-out 0s;
		-o-transition: all 0.3s ease-in-out 0s;
		-ms-transition: all 0.3s ease-in-out 0s;
}
.copyright .top:hover {
	background-position: 100% 100%;
}
#navBreadCrumb li, #navBreadCrumb li a, #navBreadCrumb li:last-child a, #navBreadCrumb li:last-child a:active, #navBreadCrumb li:last-child a:visited {
	color: #9D9D9D;
}
.productListing-odd:hover, .productListing-even:hover, .newproductlisting:hover, #wishlist .wishlist-odd:hover, #wishlist .wishlist-even:hover {
	border-bottom:1px solid <?php echo $theme_color[1]; ?>;
}
.review-links > .buttonRow {
    background: none repeat scroll 0 0 <?php echo $theme_color[0]; ?>;
	transition: all 0.3s ease-in-out 0s;
		-moz-transition: all 0.3s ease-in-out 0s;
		-webkit-transition: all 0.3s ease-in-out 0s;
		-o-transition: all 0.3s ease-in-out 0s;
		-ms-transition: all 0.3s ease-in-out 0s;
}
.review-links > .buttonRow:hover {
	background: none repeat scroll 0 0 <?php echo $theme_color[1]; ?>;
	transition: all 0.3s ease-in-out 0s;
		-moz-transition: all 0.3s ease-in-out 0s;
		-webkit-transition: all 0.3s ease-in-out 0s;
		-o-transition: all 0.3s ease-in-out 0s;
		-ms-transition: all 0.3s ease-in-out 0s;
}
/* Topbar Font - Background Color */
.header-container .header {
	background-color: <?php echo $theme_color[2];?>;
}
.header-container .header a {
	color: <?php echo $theme_color[3];?>;
}

/* Footer Top Heading - Font - Background Color */
.footer-top-wrapper {
	background-color: <?php echo $theme_color[4];?>;
}
.footer-top .widget-title {
	color: <?php echo $theme_color[5];?>;	
}
.footer-top-wrapper {
	color: <?php echo $theme_color[6];?>;
}

/* Footer Heading - Font - Background Color */
.footer-wrapper {
	background-color: <?php echo $theme_color[7];?>;
}
.footer-widgets.main .widget-title, .subscribe-title {
	color: <?php echo $theme_color[8];?>;
}
.footer-wrapper .widget-body a {
	color: <?php echo $theme_color[9];?>;
}


/* Copyright Font - Background Color */
.copyright {
    background-color: <?php echo $theme_color[10];?>;
	color: <?php echo $theme_color[11];?>;
}

/*BOF Main Menu New Update*/
#cssmenu.small-screen .submenu-button {
	background:none repeat scroll 0 0 <?php echo $theme_color[1]; ?>;
}
.small-screen .nav a:hover {
    color: <?php echo $theme_color[1]; ?>;
}
#cssmenu.small-screen #menu-button {
	background-color: <?php echo $theme_color[1];?>;
}
/*EOF Main Menu New Update*/

.grid, .grid:hover, .list:hover {
    color: <?php echo $theme_color[1]; ?> !important;
}
.list {
	color: #9D9D9D !important;
}
<?php if((isset($_GET['view'])) && ($_GET['view']=='rows')){ ?>
.grid {
	color: #9D9D9D !important;
}
.list, .list:hover, .grid:hover {
	color: <?php echo $theme_color[1]; ?> !important;
}

<?php } ?>
/* Theme Color Ends*/

<?php if($this_is_home_page) {?>
	.main-breadcrumb{display:none}
	.main-top {padding: 60px 0 0}
<?php } ?>
</style>