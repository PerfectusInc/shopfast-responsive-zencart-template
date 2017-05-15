<div class="footer-top-wrapper">
<div class="container"> 
<div class="row">
<div class="footer-top">

<!-- Footer Row 1 Column 1 -->
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
<div class="widget widget-text widget">
<h4 class="widget-title"><?php echo HEADER_TITLE_FOOTER_ABOUT_US; ?></h4>
<div class="widget-body">
<?php if($aboutus_text != NULL) {?>
<?php echo $aboutus_text; ?>
<?php } ?>
</div>
</div>
</div>
<!-- Footer Row 1 Column 1 Ends -->

<!-- Footer Row 1 Column 2 -->
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="widget widget-contact">
<h4 class="widget-title"><?php echo HEADER_TITLE_FOOTER_CONTACT_US; ?></h4>
<div class="widget-body iconlist">
<div class="media">
<div class="pull-left">
<i class="fa fa-map-marker"></i>
</div>
<div class="media-body">
<p><?php echo $store_address; ?></p>
</div>
</div>
<!-- BOF Store Contact Change New Update -->
<div class="media phone single">
<div class="pull-left">
<i class="fa fa-phone"></i>
</div>
<div class="media-body">
<p><?php echo $store_contact; ?></p>
</div>
</div>
<!-- EOF Store Contact Change New Update -->
<!-- BOF Store Email Change New Update -->
<div class="media email single">
<div class="pull-left">
<i class="fa fa-envelope"></i>
</div>
<div class="media-body">
<p><?php echo $store_email; ?></p>
</div>
</div>
<!-- EOF Store Email Change New Update -->
<!-- BOF Store Skype Change New Update -->
<div class="media skype-contact single">
<div class="pull-left">
<i class="fa fa-skype"></i>
</div>
<div class="media-body">
<p><?php echo $store_skype; ?></p>
</div>
</div>
<!-- EOF Store Skype Change New Update -->
</div>
</div>                
</div>
<!-- Footer Row 1 Column 2 Ends -->

<!-- Footer Row 1 Column 3 -->
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="widget widget-twitter">
<h4 class="widget-title"><?php echo HEADER_TITLE_FOOTER_LATEST_TWEETS; ?></h4>
<?php if($twitter_box != NULL) { ?>
<!-- Twitter Box -->
<div class="twitter_widget">
<div class="twitter-content">
<?php echo $twitter_box; ?>
</div>
</div>
<!-- Twitter Box Ends -->
<?php } ?>
</div>        
</div>
<!-- Footer Row 1 Column 3 Ends -->

<!-- Footer Row 1 Column 4 -->
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="widget widget-facebook">
<h4 class="widget-title"><?php echo HEADER_TITLE_FOOTER_FACEBOOK_WIDGET; ?></h4>
<?php if($facebook_box != NULL) { ?>
<!-- Facebook Like Box -->
<div class="facebook_widget">
<div class="facebook-content">
<div class="fb-like-box" data-href="https://www.facebook.com/<?php echo $facebook_box; ?>" 
data-width="250" data-height="250" data-colorscheme="light" data-show-faces="true" data-header="false" 
data-stream="false" data-show-border="false">
</div>
</div>
</div>
<!-- Facebook Like Box Ends -->
<?php } ?>
</div>	
</div>
<!-- Footer Row 1 Column 4 Ends -->

</div>
</div>
</div>
</div>