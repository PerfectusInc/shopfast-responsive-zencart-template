<div class="footer-wrapper">
<div class="footer-bottom">
<div class="container">
<div class="row">
<div class="footer-container footer-widgets main">

<!-- Footer Row 2 Column 1 -->
<div class="col-xs-12 col-sm-12 col-lg-4">
<div class="widget widget-subscribe newsletter">
<div class="widget-body">
<?php echo $newsletter_text; ?>
<span class="subscribe-title"><?php echo HEADER_TITLE_FOOTER_SUBSCRIBE_NEWS; ?> </span>
<div class="newsletter-details">
<?php echo $newsletter_details; ?>
</div>
<ul class="credit-cards">
<li>
<a href="<?php echo $bottom_banner3_link; ?>"><img alt="payment-image" src="<?php echo $template->get_template_dir
('',DIR_WS_TEMPLATE, $current_page_base,'images').'/banners/'.$payment_image; ?>" />
</a>
</li>
</ul>
</div>
</div>
<div class="space40 hidden-lg"></div>
</div>
<!-- Footer Row 2 Column 1 Ends -->

<!-- Footer Row 2 Column 2 -->
<div class="col-xs-6 col-sm-3 col-lg-2">
<div class="widget widget-linklist">
<div class="widget-body">
<h4 class="widget-title"><?php echo HEADER_TITLE_FOOTER_CUSTOMER_CARE; ?></h4>
<ul>
<li><a href="#">› <?php echo HEADER_TITLE_FOOTER_PRODUCTS; ?></a></li>
<li><a href="#">› <?php echo HEADER_TITLE_FOOTER_DOWNLOAD; ?></a></li>
<li><a href="#">› <?php echo HEADER_TITLE_FOOTER_MAC; ?></a></li>
<li><a href="#">› <?php echo HEADER_TITLE_FOOTER_MOBILE; ?></a></li>
<li><a href="#">› <?php echo HEADER_TITLE_FOOTER_VIDEO; ?> </a></li>
<li><a href="#">› <?php echo HEADER_TITLE_FOOTER_FILES; ?></a></li>
<li><a href="#">› <?php echo HEADER_TITLE_FOOTER_DESKTOP; ?></a></li>
<li><a href="#">› <?php echo HEADER_TITLE_FOOTER_SHARING; ?></a></li>
</ul>
</div>
</div>
</div>
<!-- Footer Row 2 Column 2 Ends -->

<!-- Footer Row 2 Column 3 -->
<div class="col-xs-6 col-sm-3 col-lg-2">
<div class="widget widget-linklist">
<div class="widget-body">
<h4 class="widget-title"><?php echo HEADER_TITLE_FOOTER_ACCOUNT; ?></h4>
<ul>
<li>
<a href="<?php echo zen_href_link(FILENAME_ACCOUNT_HISTORY, '', 'SSL'); ?>">
› <?php echo HEADER_TITLE_FOOTER_ORDER_HISTORY; ?>
</a>
</li>
<li>
<a href="<?php echo zen_href_link(FILENAME_ADDRESS_BOOK, '', 'SSL'); ?>">
› <?php echo HEADER_TITLE_FOOTER_ADDRESS_BOOK; ?>
</a>
</li>
<li>
<a href="<?php echo zen_href_link(FILENAME_ACCOUNT, '', 'SSL'); ?>">
› <?php echo HEADER_TITLE_MY_ACCOUNT; ?>
</a>
</li>
<li>
<a href="<?php echo zen_href_link(FILENAME_ACCOUNT_PASSWORD, '', 'SSL'); ?>">
› <?php echo HEADER_TITLE_FOOTER_CHANGE_PASSWORD; ?>
</a>
</li>
<li>
<?php if ($_SESSION['customer_id']) { ?>
<a href="<?php echo zen_href_link(FILENAME_LOGOFF, '', 'SSL'); ?>">
› <?php echo HEADER_TITLE_LOGOFF; ?>
</a>
<?php } else { ?>
<a href="<?php echo zen_href_link(FILENAME_CREATE_ACCOUNT, '', 'SSL'); ?>">
› <?php echo HEADER_TITLE_FOOTER_CREATE_ACCOUNT; ?>
</a>
<?php } ?>
</li>

</ul>
</div>
</div>
</div>
<!-- Footer Row 2 Column 3 Ends -->

<div class="space40 col-xs-12 col-sm-12 visible-xs"></div>

<!-- Footer Row 2 Column 4 -->
<div class="col-xs-6 col-sm-3 col-lg-2">
<div class="widget widget-linklist">
<div class="widget-body">
<h4 class="widget-title"><?php echo HEADER_TITLE_FOOTER_COMPANY; ?></h4>
<ul>
<li><a href="#">› <?php echo HEADER_TITLE_FOOTER_SPOTLIGHT; ?></a></li>
<li><a href="#">› <?php echo HEADER_TITLE_FOOTER_VIDEO; ?></a></li>
<li><a href="#">› <?php echo HEADER_TITLE_FOOTER_IMAGE_GALLERY; ?></a></li>
<li><a href="#">› <?php echo HEADER_TITLE_FOOTER_PRESS_KIT; ?></a></li>
<li><a href="#">› <?php echo HEADER_TITLE_FOOTER_MEDIA_CONTACTS; ?></a></li>
<li><a href="#">› <?php echo HEADER_TITLE_FOOTER_FACEBOOK; ?></a></li>
<li><a href="#">› <?php echo HEADER_TITLE_FOOTER_TWITTER; ?></a></li>
<li><a href="#">› <?php echo HEADER_TITLE_FOOTER_YOUTUBE; ?></a></li>
<li><a href="#">› <?php echo HEADER_TITLE_FOOTER_PRESS_RELEASE; ?></a></li>
</ul>
</div>
</div>
</div>
<!-- Footer Row 2 Column 4 Ends -->

<!-- Footer Row 2 Column 5 -->
<div class="col-xs-6 col-sm-3 col-lg-2">
<div class="widget widget-linklist">
<div class="widget-body">
<h4 class="widget-title"><?php echo HEADER_TITLE_FOOTER_INFORMATION; ?></h4>
<ul>
<?php if (DEFINE_SHIPPINGINFO_STATUS <= 1) { ?>
<li>
<a href="<?php echo zen_href_link(FILENAME_SHIPPING."&pg=information"); ?>">
› <?php echo HEADER_TITLE_SHIPPING_INFO; ?>
</a>
</li>
<?php } ?>
<?php if (DEFINE_PRIVACY_STATUS <= 1)  { ?>
<li>
<a href="<?php echo zen_href_link(FILENAME_PRIVACY."&pg=information"); ?>">
› <?php echo HEADER_TITLE_PRIVACY_POLICY; ?>
</a>
</li>
<?php } ?>
<?php if (DEFINE_CONDITIONS_STATUS <= 1) { ?>
<li>
<a href="<?php echo zen_href_link(FILENAME_CONDITIONS."&pg=information"); ?>">
› <?php echo HEADER_TITLE_CONDITIONS_OF_USE; ?>
</a>
</li>
<?php } ?>
<?php if (DEFINE_SITE_MAP_STATUS <= 1) { ?>
<li>
<a href="<?php echo zen_href_link(FILENAME_SITE_MAP."&pg=information"); ?>">
› <?php echo HEADER_TITLE_SITE_MAP; ?>
</a>
</li>
<?php } ?>
<?php if (MODULE_ORDER_TOTAL_GV_STATUS == 'true') { ?>
<li>
<a href="<?php echo zen_href_link(FILENAME_GV_FAQ."&pg=information", '', 'NONSSL'); ?>">
› <?php echo HEADER_TITLE_GV_FAQ; ?>
</a>
</li>
<?php } ?>
</ul>
</div>
</div>
</div>
<!-- Footer Row 2 Column 5 Ends -->

</div>
</div>
</div>        
</div>
</div>