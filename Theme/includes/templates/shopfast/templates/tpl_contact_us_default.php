<head><title>Contact Us</title></head>

<span class="breadcrumb-title"><?php echo $var_pageDetails->fields['pages_title']; ?></span>
<?php
/**
 * Page Template
 *
 * Loaded automatically by index.php?main_page=contact_us.<br />
 * Displays contact us page form.
 *
 * @package templateSystem
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_contact_us_default.php 18695 2011-05-04 05:24:19Z drbyte $
 */
?>
<div class="centerColumn" id="contactUsDefault">
	<?php echo zen_draw_form('contact_us', zen_href_link(FILENAME_CONTACT_US, 'action=send')); ?>
    <header>
		<h1 id="contactus-heading"><?php echo HEADING_TITLE; ?></h1>
	</header>
    <?php
  		if (isset($_GET['action']) && ($_GET['action'] == 'success')) {
	?>
		<div class="alert alert-success alert-dismissable"><?php echo TEXT_SUCCESS; ?></div>
	<?php
  		} 
	?>
    <?php if ($messageStack->size('contact') > 0) echo $messageStack->output('contact'); ?>
    
	<div class="content">
    	<div class="row address-content">
        	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 store-address">
				<?php //if (CONTACT_US_STORE_NAME_ADDRESS== '1') { ?>
                	<h4>Store Address</h4>
					<address><?php echo nl2br(STORE_NAME_ADDRESS); ?></address>
				<?php //} ?>
			</div>
            <div class="static-content col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<?php if (DEFINE_CONTACT_US_STATUS >= '1' and DEFINE_CONTACT_US_STATUS <= '2') { ?>
				<?php
				/**
				 * require html_define for the contact_us page
				 */
				  require($define_page);
				?>
			</div>
		</div>
	</div>
	<div class="content">
		<?php
		// show dropdown if set
    		if (CONTACT_US_LIST !=''){
		?>
		<label class="inputLabel" for="send-to"><?php echo SEND_TO_TEXT; ?></label>
		<?php echo zen_draw_pull_down_menu('send_to',  $send_to_array, 0, 'id="send-to"') . '<span class="alert-text">' . ENTRY_REQUIRED_SYMBOL . '</span>'; ?>
		<br class="clearBoth" />
		<?php
    		}
		?>
        <div class="row sender-name-email">
        	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 sender-name">
        		<label><?php echo ENTRY_NAME . '<span class="alertrequired">' . ENTRY_REQUIRED_SYMBOL . '</span>'; ?></label>
        		<?php echo zen_draw_input_field('contactname', $name, ' size="40" id="contactname"') ; ?>
        	</div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 sender-email" for="email-address">
        		<label><?php echo ENTRY_EMAIL . '<span class="alertrequired">' . ENTRY_REQUIRED_SYMBOL . '</span>'; ?></label>
                <?php echo zen_draw_input_field('email', ($email_address), ' size="40" id="email-address"') ; ?>
        	</div>
		</div>
        <br class="clearBoth" />
        <div class="row message-detail">
			<div class="col-lg-12 contactus-message" for="enquiry">
        		<label><?php echo ENTRY_ENQUIRY . '<span class="alertrequired">' . ENTRY_REQUIRED_SYMBOL . '</span>'; ?></label>
				<?php echo zen_draw_textarea_field('enquiry', '30', '7', $enquiry, ' id="enquiry"'); ?>
        	</div>
		</div>
        <div class="row contactus-sendbutton">
        	<div class="col-lg-12">
            	<div class="alert-text forward"><?php echo FORM_REQUIRED_INFORMATION; ?></div>
				<?php echo zen_image_submit(BUTTON_IMAGE_SEND, BUTTON_SEND_ALT); ?>
        	</div>
        </div>
	</div>
<?php 
$shopfast_query = "SELECT * FROM " . DB_PREFIX.shopfast;
$shopfast_result = $db->Execute($shopfast_query);
$store_map = $shopfast_result->fields['store_map'];
?>
<?php if($store_map != NULL) { ?>
	<div class="content">
    	<h4>Find Us on Map</h4>
        <?php echo $store_map; ?>	
		<!--<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Auburn+Grove,+Hawthorn+East,+Victoria,+Australia&amp;aq=0&amp;oq=Auburn+Groove,+Vict&amp;sll=23.223279,72.657137&amp;sspn=0.081085,0.169086&amp;ie=UTF8&amp;hq=&amp;hnear=Auburn+Grove,+Hawthorn+East+Victoria+3123,+Australia&amp;t=m&amp;z=14&amp;ll=-37.825635,145.04805&amp;output=embed"></iframe><br /><small><a href="http://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Auburn+Grove,+Hawthorn+East,+Victoria,+Australia&amp;aq=0&amp;oq=Auburn+Groove,+Vict&amp;sll=23.223279,72.657137&amp;sspn=0.081085,0.169086&amp;ie=UTF8&amp;hq=&amp;hnear=Auburn+Grove,+Hawthorn+East+Victoria+3123,+Australia&amp;t=m&amp;z=14&amp;ll=-37.825635,145.04805" style="color:#0000FF;text-align:left" target="_blank">View Larger Map</a></small>-->
	</div>
<!--<div class="buttonRow back"><?php //echo zen_back_link() . zen_image_button(BUTTON_IMAGE_BACK, BUTTON_BACK_ALT) . '</a>'; ?></div>-->
<?php
	}
  }
?>
</form>
</div>