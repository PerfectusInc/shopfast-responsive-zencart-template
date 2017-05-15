<?php
/*
  $Id: recover_cart_sales.php, v4.00.00a 2012/04/23 testuser -> iChoze -> Zen Cart v1.5 $ Exp $
  Recover Cart Sales ENGLISH Language File
  Recover Cart Sales contribution: JM Ivler (c)
  Copyright (c) 2003-2005 JM Ivler
 Released under the GNU General Public License
*/

define('MESSAGE_STACK_CUSTOMER_ID', 'Cart for Customer-ID ');
define('MESSAGE_STACK_CART_CUSTOMER', 'Cart for Customer ');
define('MESSAGE_STACK_DELETE_SUCCESS', ' deleted successfully');
define('MESSAGE_STACK_CUSTOMER', 'Customer ');
define('MESSAGE_STACK_SETCONACTED', ' set conacted successfully');
define('HEADING_TITLE', 'Recover Cart Sales');
define('HEADING_EMAIL_SENT', 'E-mail Sent Report');
define('EMAIL_TEXT_LOGIN', 'Login to your account here:');
define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Inquiry from '.  STORE_NAME );
define('EMAIL_TEXT_SALUTATION', 'Dear ' );
define('EMAIL_TEXT_NEWCUST_INTRO', "\n\n" . 'Thank you for stopping by ' . STORE_NAME .
                                   ' and considering us for your purchase. ');
define('EMAIL_TEXT_CURCUST_INTRO', "\n\n" . 'We would like to thank you for having shopped at ' .
                                   STORE_NAME . ' in the past. ');
define('EMAIL_TEXT_BODY_HEADER',
	'We noticed that during a visit to our store you placed ' .
	'the following item(s) in your shopping cart, but did not complete ' .
	'the transaction.' . "\n\n" .
	'Shopping Cart Contents:' . "\n\n"
	);
	
define('EMAIL_TEXT_BODY_FOOTER',
	'We are always interested in knowing what happened ' .
	'and if there was a reason that you decided not to purchase at ' .
	'this time. If you could be so kind as to let us ' .
	'know if you had any issues or concerns, we would appreciate it.  ' .
	'We are asking for feedback from you and others as to how we can ' .
	'help make your experience at '. STORE_NAME . ' better.'."\n\n".
	'PLEASE NOTE:'."\n".'If you believe you completed your purchase and are ' .
	'wondering why it was not delivered, this email is an indication that ' .
	'your order was NOT completed, and that you have NOT been charged! ' .
	'Please return to the store in order to complete your order.'."\n\n".
	'Our apologies if you already completed your purchase, ' .
	'we try not to send these messages in those cases, but sometimes it is ' .
	'hard for us to tell depending on individual circumstances.'."\n\n".
	'Again, thank you for your time and consideration in helping us ' .
	'improve the ' . STORE_NAME .  " website.\n\nSincerely,\n\n"
	);

define('DAYS_FIELD_PREFIX', 'Show for last ');
define('DAYS_FIELD_POSTFIX', ' days ');
define('DAYS_FIELD_BUTTON', 'Go');
define('TABLE_HEADING_DATE', 'DATE');
define('TABLE_HEADING_CONTACT', 'CONTACTED');
define('TABLE_HEADING_CUSTOMER', 'CUSTOMER NAME');
define('TABLE_HEADING_EMAIL', 'E-MAIL');
define('TABLE_HEADING_PHONE', 'PHONE');
define('TABLE_HEADING_MODEL', 'ITEM');
define('TABLE_HEADING_DESCRIPTION', 'DESCRIPTION');
define('TABLE_HEADING_QUANTY', 'QTY');
define('TABLE_HEADING_PRICE', 'PRICE');
define('TABLE_HEADING_TOTAL', 'TOTAL');
define('TABLE_GRAND_TOTAL', 'Grand Total: ');
define('TABLE_CART_TOTAL', 'Cart Total: ');
define('TEXT_CURRENT_CUSTOMER', 'CUSTOMER');
define('TEXT_SEND_EMAIL', 'Send E-mail');
define('TEXT_RETURN', '[Click Here To Return]');
define('TEXT_NOT_CONTACTED', 'Uncontacted');
define('PSMSG', 'Additional PS Message: ');
define('TEXT_SET_CONTACTED', 'Set Contacted');
define('TEXT_FROM', 'From:');
define('TEXT_SUBJECT', 'Subject:');
?>
