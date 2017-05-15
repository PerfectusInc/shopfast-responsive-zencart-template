<?php
/**
 * Page Template
 *
 * @package templateSystem
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_login_default.php 18695 2011-05-04 05:24:19Z drbyte $
 */
?>
<div class="centerColumn" id="loginDefault">
	<header>
		<h1 id="loginDefaultHeading"><?php echo HEADING_TITLE; ?></h1>
	</header>
	<?php if ($messageStack->size('login') > 0) echo $messageStack->output('login'); ?>
	<?php if ( USE_SPLIT_LOGIN_MODE == 'True' || $ec_button_enabled) { ?>
	<!--BOF PPEC split login- DO NOT REMOVE-->
	<div class="row split-login">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 create-account">
        	<div class="content">
				<h4><?php echo HEADING_NEW_CUSTOMER_SPLIT; ?></h4>
				<?php if ($ec_button_enabled) { ?>
					<div class="information"><?php echo TEXT_NEW_CUSTOMER_INTRODUCTION_SPLIT; ?></div>
  					<div class="center"><?php require(DIR_FS_CATALOG . DIR_WS_MODULES . 'payment/paypal/tpl_ec_button.php'); ?></div>
					<?php echo TEXT_NEW_CUSTOMER_POST_INTRODUCTION_DIVIDER; ?>
				<?php } ?>
					<div class="information"><?php echo TEXT_NEW_CUSTOMER_POST_INTRODUCTION_SPLIT; ?></div>
            </div>
            <div class="buttons-set">
				<?php echo zen_draw_form('create', zen_href_link(FILENAME_CREATE_ACCOUNT, '', 'SSL')); ?>
					<div class="buttonRow forward create-account-button">
						<?php echo zen_image_submit(BUTTON_IMAGE_CREATE_ACCOUNT, BUTTON_CREATE_ACCOUNT_ALT, 'name="registrationButton"'); ?>
               		</div>
				</form>
			</div>
    	</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 login">
    		<div class="content">
                <h4><?php echo HEADING_RETURNING_CUSTOMER_SPLIT; ?></h4>
                <div class="information"><?php echo TEXT_RETURNING_CUSTOMER_SPLIT; ?></div>
                <?php echo zen_draw_form('login', zen_href_link(FILENAME_LOGIN, 'action=process', 'SSL'), 'post', 'id="loginForm"'); ?>
                    <label class="inputLabel" for="login-email-address"><?php echo ENTRY_EMAIL_ADDRESS; ?></label>
                    <?php echo zen_draw_input_field('email_address', '', 'size="30" id="login-email-address"'); ?>
                    <br class="clearBoth" />
                    <label class="inputLabel" for="login-password"><?php echo ENTRY_PASSWORD; ?></label>
                    <?php echo zen_draw_password_field('password', '', 'size="30" id="login-password"'); ?>
                    <br class="clearBoth" />
			</div>
            <div class="buttons-set">
        		<div class="buttonRow forward login-buttons">
					<?php echo zen_image_submit(BUTTON_IMAGE_LOGIN, BUTTON_LOGIN_ALT); ?>
					<?php echo '<a href="' . zen_href_link(FILENAME_PASSWORD_FORGOTTEN, '', 'SSL') . '">' . TEXT_PASSWORD_FORGOTTEN . '</a>'; ?>
        		</div>
			</div>
        		</form>
		</div>
</div>
<br class="clearBoth" />
<!--EOF PPEC split login- DO NOT REMOVE-->
<?php } else { ?>
<!--BOF normal login-->
<?php
  if ($_SESSION['cart']->count_contents() > 0) {
?>
<div class="advisory"><?php //echo TEXT_VISITORS_CART; ?></div>
<?php
  }
?>
<?php echo zen_draw_form('login', zen_href_link(FILENAME_LOGIN, 'action=process', 'SSL'), 'post', 'id="loginForm"'); ?>

<div class="content_box">
	<fieldset>
		<div class="return_customer"> <legend><?php echo HEADING_RETURNING_CUSTOMER; ?></legend></div>
		<div class="login-emailaddress">
			<label class="inputLabel" for="login-email-address"><?php echo ENTRY_EMAIL_ADDRESS; ?></label>
			<?php echo zen_draw_input_field('email_address', '', zen_set_field_length(TABLE_CUSTOMERS, 'customers_email_address', '30') . ' id="login-email-address"'); ?>
		</div>
		<div class="login-password">
			<label class="inputLabel" for="login-password"><?php echo ENTRY_PASSWORD; ?></label>
			<?php echo zen_draw_password_field('password', '', zen_set_field_length(TABLE_CUSTOMERS, 'customers_password','30') . ' id="login-password"'); ?>
		</div>
		<br class="clearBoth" />
		<?php echo zen_draw_hidden_field('securityToken', $_SESSION['securityToken']); ?>
	</fieldset>

	<div class="buttonRow forward"><?php echo zen_image_submit(BUTTON_IMAGE_LOGIN, BUTTON_LOGIN_ALT); ?></div>
	<div class="buttonRow back important"><?php echo '<a href="' . zen_href_link(FILENAME_PASSWORD_FORGOTTEN, '', 'SSL') . '">' . TEXT_PASSWORD_FORGOTTEN . '</a>'; ?></div>
</div>
</form>
<br class="clearBoth" />

<?php echo zen_draw_form('create_account', zen_href_link(FILENAME_CREATE_ACCOUNT, '', 'SSL'), 'post', 'onsubmit="return check_form(create_account);" id="createAccountForm"') . zen_draw_hidden_field('action', 'process') . zen_draw_hidden_field('email_pref_html', 'email_format'); ?>
<fieldset>
	<div class="content_box">
		<legend><?php echo HEADING_NEW_CUSTOMER; ?></legend>
		<div class="information"><?php echo TEXT_NEW_CUSTOMER_INTRODUCTION; ?></div>
		<?php require($template->get_template_dir('tpl_modules_create_account.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_modules_create_account.php'); ?>
    </div>
    
</fieldset>
</form>
<!--EOF normal login-->
<?php } ?>
</div>