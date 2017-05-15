<?php 
/**
 * Shopfast - Premium Zencart Template
 *
 * @package Shopfast Admin File
 * @author Perfectus Web Designs
 * @author website www.elegantdesignhub.com
 * @copyright Copyright 2013-2014 Perfectus Web Designs
 * @license http://www.gnu.org/copyleft/gpl.html   GNU Public License V2.0
 * @version $Id: shopfast.php 1.0
 */
 
require('includes/application_top.php');
require(DIR_WS_MODULES . 'prod_cat_header_code.php');	
	$query = "SELECT * from " . DB_PREFIX.shopfast;
			$query_result = $db->Execute($query);
			$theme_color_result = $query_result->fields['theme_color'];
			$theme_color_result = (explode(",",$theme_color_result));
			
			$logo_image_result = $query_result->fields['logo_image'];
			
			$store_address_result = $query_result->fields['store_address'];
			$store_map_result = $query_result->fields['store_map'];
			$store_contact_result = $query_result->fields['store_contact'];
			$store_email_result = $query_result->fields['store_email'];
			$store_copyright_result = $query_result->fields['store_copyright'];
			$store_skype_result = $query_result->fields['store_skype'];
			$newsletter_text_result = $query_result->fields['newsletter_text'];
			$newsletter_details_result = $query_result->fields['newsletter_details'];
			$aboutus_text_result = $query_result->fields['aboutus_text'];
			
			$facebook_link_result = $query_result->fields['facebook_link'];
			$twitter_link_result = $query_result->fields['twitter_link'];
			$skype_link_result = $query_result->fields['skype_link'];
			$google_link_result = $query_result->fields['google_link'];
			$rss_link_result = $query_result->fields['rss_link'];
			$linkedin_link_result = $query_result->fields['linkedin_link'];
			$pinterest_link_result = $query_result->fields['pinterest_link'];
			$youtube_link_result = $query_result->fields['youtube_link'];
			$instagram_link_result = $query_result->fields['instagram_link'];
			
			$twitter_box_result = $query_result->fields['twitter_box'];
			$facebook_box_result = $query_result->fields['facebook_box'];
	
			$payment_image_result = $query_result->fields['payment_image'];
			$featured_category_result = $query_result->fields['featured_category'];
			
			$display_featured_category_result = $query_result->fields['display_featured_category'];
			$display_main_page_result = $query_result->fields['display_main_page'];
			$display_our_brands_result = $query_result->fields['display_our_brands'];
			$display_footer_row_1_result = $query_result->fields['display_footer_row_1'];
			$display_footer_row_2_result = $query_result->fields['display_footer_row_2'];
			
			$product_name_length_result = $query_result->fields['product_name_length'];
			$product_desc_length_result = $query_result->fields['product_desc_length'];
			
	
			//Insert slideshow details
			if(isset($_POST['add_slideshow'])) {
					$slideshow_image = $_FILES['slideshow_image']['name'];
					$file_tmp =$_FILES['slideshow_image']['tmp_name'];
					$slideshow_caption = trim($_POST['slideshow_caption']);
					if($slideshow_image != NULL) {
						$slideshow_insert = "INSERT INTO " . DB_PREFIX.shopfast_slideshow . " (id, slideshow_image, slideshow_caption) VALUES ('','$slideshow_image','$slideshow_caption')";
						$slideshow_result = $db->Execute($slideshow_insert);
						move_uploaded_file( $file_tmp,"../includes/templates/" . $template_dir . "/images/slideshow/" . $slideshow_image);
					}
			}
	
	if(! isset($_POST['shopfast_settings']))
	{
		$theme_color = $theme_color_result;
		
		$logo_image = $logo_image_result;
		
		$store_address = $store_address_result;
		$store_map = $store_map_result;
		$store_contact = $store_contact_result;
		$store_email = $store_email_result;
		$store_copyright = $store_copyright_result;
		$store_skype = $store_skype_result;
		$newsletter_text = $newsletter_text_result;		
		$newsletter_details = $newsletter_details_result;
		$aboutus_text = $aboutus_text_result;
		
		$facebook_link = $facebook_link_result;
		$twitter_link = $twitter_link_result;
		$skype_link = $skype_link_result;
		$google_link = $google_link_result;
		$rss_link = $rss_link_result;
		$linkedin_link = $linkedin_link_result;
		$pinterest_link = $pinterest_link_result;
		$youtube_link = $youtube_link_result;
		$instagram_link = $instagram_link_result;
		
		$twitter_box = $twitter_box_result;
		$facebook_box = $facebook_box_result;
		
		$payment_image = $payment_image_result;
		$featured_category = $featured_category_result;
		
		$display_featured_category = $display_featured_category_result;
		$display_main_page = $display_main_page_result;
		$display_our_brands = $display_our_brands_result;
		$display_footer_row_1 = $display_footer_row_1_result;
		$display_footer_row_2 = $display_footer_row_2_result;
		
		$product_name_length = $product_name_length_result;
		$product_desc_length = $product_desc_length_result;
	}
	
	if(isset($_POST['shopfast_settings']))
	{
		header('Location: '.$_SERVER['PHP_SELF']); /* Important */
		
		$theme_color = $_POST['theme_color'] . ',' . $_POST['theme_color_2']. ',' . $_POST['theme_color_3']. ',' . $_POST['theme_color_4']. ',' . $_POST['theme_color_5']. ',' . $_POST['theme_color_6']. ',' . $_POST['theme_color_7']. ',' . $_POST['theme_color_8']. ',' . $_POST['theme_color_9']. ',' . $_POST['theme_color_10']. ',' . $_POST['theme_color_11']. ',' . $_POST['theme_color_12'];
		$theme_color = trim($theme_color);
		if($theme_color == NULL){
			$theme_color = $theme_color_result;	
		}
		$logo_image = $_FILES["file_logoimage"]["name"];
		if($logo_image == NULL){
			$logo_image = $logo_image_result;
		}
		$store_address = trim($_POST['store_address']);
		$store_map = trim($_POST['store_map']);
		$store_contact = trim($_POST['store_contact']);
		$store_email = trim($_POST['store_email']);
		$store_copyright = trim($_POST['store_copyright']);
		$store_skype = trim($_POST['store_skype']);
		$newsletter_text = trim($_POST['newsletter_text']);
		$newsletter_details = trim($_POST['newsletter_details']);
		$aboutus_text = trim($_POST['aboutus_text']);
		
		$facebook_link = trim($_POST['facebook_link']);
		$twitter_link = trim($_POST['twitter_link']);
		$skype_link = trim($_POST['skype_link']);
		$google_link = trim($_POST['google_link']);
		$rss_link = trim($_POST['rss_link']);
		$linkedin_link = trim($_POST['linkedin_link']);
		$pinterest_link = trim($_POST['pinterest_link']);
		$youtube_link = trim($_POST['youtube_link']);
		$instagram_link = trim($_POST['instagram_link']);
		
		$twitter_box = trim($_POST['twitter_box']);
		$facebook_box = trim($_POST['facebook_box']);
		$featured_category = trim($_POST['featured_category']);
		
		$display_featured_category = trim($_POST['display_featured_category']);
		$display_main_page = trim($_POST['display_main_page']);
		$display_our_brands = trim($_POST['display_our_brands']);
		$display_footer_row_1 = trim($_POST['display_footer_row_1']);
		$display_footer_row_2 = trim($_POST['display_footer_row_2']);
		
		$product_name_length = trim($_POST['product_name_length']);
		$product_desc_length = trim($_POST['product_desc_length']);		
		
		$payment_image = $_FILES["payment_image"]["name"];
		if($payment_image == NULL){
			$payment_image = $payment_image_result;
		}
		
							
		$shopfast_query = "UPDATE " . DB_PREFIX.shopfast. " SET theme_color='$theme_color', logo_image='$logo_image', store_address='$store_address', store_skype='$store_skype', store_map='$store_map', newsletter_text='$newsletter_text', newsletter_details='$newsletter_details', aboutus_text='$aboutus_text', store_contact='$store_contact', store_email='$store_email', store_copyright='$store_copyright', facebook_link='$facebook_link', twitter_link='$twitter_link', skype_link='$skype_link', google_link='$google_link', rss_link='$rss_link', linkedin_link='$linkedin_link', pinterest_link='$pinterest_link', youtube_link='$youtube_link', instagram_link='$instagram_link', payment_image='$payment_image', facebook_box='$facebook_box',twitter_box='$twitter_box',featured_category='$featured_category',display_featured_category='$display_featured_category',display_our_brands='$display_our_brands',display_main_page='$display_main_page',display_footer_row_1='$display_footer_row_1',display_footer_row_2='$display_footer_row_2',product_name_length='$product_name_length',product_desc_length='$product_desc_length' WHERE id=1";
		
		$shopfast_result = $db->Execute($shopfast_query);
		
		//Delete selected Slideshow details
		if(isset($_POST['slideshow_image_id'])){
			foreach($_POST['slideshow_image_id'] as $key => $del_id ) {
				if(isset($_POST['slideshow_image_id'])){
					$checkboxAll = $_POST['slideshow_image_id'];
					$slideshow_image_delete = "DELETE FROM " . DB_PREFIX.shopfast_slideshow . " where id='$del_id'";
					$slideshow_delete_result = $db->Execute($slideshow_image_delete);
				}
			}
		}
		
		//Update selected Slideshow details
		$k=0;
		if(isset($_POST['slideshow_caption_edit'][$k]) || isset($_POST['slideshow_image_update'][$k])) {
			foreach($_POST['slideshow_image_id_update'] as $k => $update_id) {
				$slideshow_caption_edit = trim(($_POST['slideshow_caption_edit'][$k]));
				$slideshow_image_update = $_FILES['slideshow_image_update']['name'][$k];
				$file_tmp_update =$_FILES['slideshow_image_update']['tmp_name'][$k];
				
				
				
				if(isset($_POST['slideshow_caption_edit'][$k])) {
					$slideshow_update = "UPDATE " . DB_PREFIX.shopfast_slideshow . " SET slideshow_caption='$slideshow_caption_edit' where id='$update_id'";
					$slideshow_update_result = $db->Execute($slideshow_update);
				}
				
				if(($slideshow_image_update != NULL)) {
				/* process for old file remove */
				$shopfast_result = $db->Execute("SELECT slideshow_image FROM " . DB_PREFIX.shopfast_slideshow . " where id='$update_id'");
				$shopfast_result_img=$shopfast_result->fields['slideshow_image'];
				if(file_exists("../includes/templates/" . $template_dir . "/images/slideshow/" . $shopfast_result_img))
				{
				   unlink("../includes/templates/" . $template_dir . "/images/slideshow/" . $shopfast_result_img);
				}
				/* eof  process for old file remove */
				
				$slideshow_update = "UPDATE " . DB_PREFIX.shopfast_slideshow . " SET slideshow_image='$slideshow_image_update' where id='$update_id'";
				$slideshow_update_result = $db->Execute($slideshow_update);
				move_uploaded_file($file_tmp_update,"../includes/templates/" . $template_dir . "/images/slideshow/" . $slideshow_image_update);
				}
			}
			$k++;
		}
		
		move_uploaded_file($_FILES["file_logoimage"]["tmp_name"],"../includes/templates/" . $template_dir . "/images/logo/" . $_FILES["file_logoimage"]["name"]);
		move_uploaded_file($_FILES["payment_image"]["tmp_name"],"../includes/templates/" . $template_dir . "/images/banners/" . $_FILES["payment_image"]["name"]);

	}
?>


<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">
<html <?php echo HTML_PARAMS; ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET; ?>">
<title><?php echo TITLE; ?></title>

<link rel="stylesheet" type="text/css" href="includes/stylesheet.css">
<link rel="stylesheet" type="text/css" href="../includes/templates/<?php echo $template_dir; ?>/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../includes/templates/<?php echo $template_dir; ?>/css/templatecss.css">
<link rel="stylesheet" type="text/css" href="../includes/templates/<?php echo $template_dir; ?>/css/mcColorPicker.css">
<link rel="stylesheet" type="text/css" href="includes/cssjsmenuhover.css" media="all" id="hoverJS">
<link href='http://fonts.googleapis.com/css?family=Telex|Muli|Quattrocento+Sans|Exo+2|Alef|Carme|PT+Sans' rel='stylesheet' type='text/css'>
<style type="text/css">
.accordian-header{
	color:#404040;
}
.accordian-header.active, h3.product_head_admin{
	color: <?php echo $theme_color; ?>;	
}
input[type="submit"]{
	background-color: <?php echo $theme_color[1]; ?>;
	transition: all 0.3s ease-in 0s;
		-moz-transition: all 0.3s ease-in 0s;
		-webkit-transition: all 0.3s ease-in 0s;
		-o-transition: all 0.3s ease-in 0s;
		-ms-transition: all 0.3s ease-in 0s;	
}
input[type="submit"]:hover {
	box-shadow: 0 -2px 3px rgba(0, 0, 0, 0.3) inset;
	transition: all 0.3s ease-in-out 0s;
		-moz-transition: all 0.3s ease-in-out 0s;
		-webkit-transition: all 0.3s ease-in-out 0s;
		-o-transition: all 0.3s ease-in-out 0s;
		-ms-transition: all 0.3s ease-in-out 0s;
}
</style>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
<script src="../includes/templates/<?php echo $template_dir; ?>/jscript/mcColorPicker.js" type="text/javascript"></script>
<script type="text/javascript">
 var acc = jQuery.noConflict();
acc(document).ready(function(){

//Set default open/close settings
acc('.accordian-content').hide(); //Hide/close all containers
acc('.accordian-header:first').addClass('active').next().show(); //Add "active" class to first trigger, then show/open the immediate next container

//On Click
acc('.accordian-header').click(function(){
if( acc(this).next().is(':hidden') ) { //If immediate next container is closed...
acc('.accordian-header').removeClass('active').next().slideUp(); //Remove all .accordian-header classes and slide up the immediate next container
acc(this).toggleClass('active').next().slideDown(); //Add .accordian-header class to clicked trigger and slide down the immediate next container
}
return false; //Prevent the browser jump to the link anchor
});

});
</script>
<script language="javascript" src="includes/menu.js"></script>
<script language="javascript" src="includes/general.js"></script>
<script type="text/javascript">
  <!--
	function init()
	{
		cssjsmenu('navbar');
		if (document.getElementById)
		{
		  var kill = document.getElementById('hoverJS');
		  kill.disabled = true;
		}
		if (typeof _editor_url == "string")
		{
			HTMLArea.replaceAll();
		}
	}
  // -->
</script>
<?php if ($editor_handler != '') include ($editor_handler); ?>
</head>

<!-- body //-->
<body onLoad="init()">
<div id="spiffycalendar" class="text"></div>
<!-- header //-->
<?php require(DIR_WS_INCLUDES . 'header.php'); ?>
<!-- header_eof //-->

<!-- body //-->
<div id="maincontent-wrapper" class="shopfast_admin">
	<div class="container">
    	<div class="msadmin_options">
            <div class="product_info_accordian row">
            	<h3 class="product_head_admin">Shopfast Theme Settings</h3>
				<form name="shopfast_settings" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
				<div class="bg_color_setting">
					<h4 class="accordian-header">Choose your Theme Color :</h4>
					<div class="accordian-content">
                    	<p>
                            <label for="color">Primary Color :</label>
                            <input type="text" class="color" size="60" name="theme_color" value="<?php echo $theme_color[0]; ?>" /> 
                            <span class="admin-text" style="color:#FF4444"></span>
						</p>
                        <p>
                            <label for="color">Secondary Color :</label>
                            <input type="text" class="color" size="60" name="theme_color_2" value="<?php echo $theme_color[1]; ?>" /> 
                            <span class="admin-text" style="color:#FF4444"></span>
						</p>
                        <p>
                            <label for="color">Topbar Background Color :</label>
                            <input type="text" class="color" size="60" name="theme_color_3" value="<?php echo $theme_color[2]; ?>" /> 
                            <span class="admin-text" style="color:#FF4444"></span>
						</p>
                        <p>
                            <label for="color">Topbar Font Color :</label>
                            <input type="text" class="color" size="60" name="theme_color_4" value="<?php echo $theme_color[3]; ?>" /> 
                            <span class="admin-text" style="color:#FF4444"></span>
						</p>
                        <p>
                            <label for="color">Footer Top Background Color :</label>
                            <input type="text" class="color" size="60" name="theme_color_5" value="<?php echo $theme_color[4]; ?>" /> 
                            <span class="admin-text" style="color:#FF4444"></span>
						</p>
                        <p>
                            <label for="color">Footer Top Heading Font Color :</label>
                            <input type="text" class="color" size="60" name="theme_color_6" value="<?php echo $theme_color[5]; ?>" /> 
                            <span class="admin-text" style="color:#FF4444"></span>
						</p>
                        <p>
                            <label for="color">Footer Top Font Color :</label>
                            <input type="text" class="color" size="60" name="theme_color_7" value="<?php echo $theme_color[6]; ?>" /> 
                            <span class="admin-text" style="color:#FF4444"></span>
						</p>
                        <p>
                            <label for="color">Footer Background Color :</label>
                            <input type="text" class="color" size="60" name="theme_color_8" value="<?php echo $theme_color[7]; ?>" /> 
                            <span class="admin-text" style="color:#FF4444"></span>
						</p>
                        <p>
                            <label for="color">Footer Heading Font Color :</label>
                            <input type="text" class="color" size="60" name="theme_color_9" value="<?php echo $theme_color[8]; ?>" /> 
                            <span class="admin-text" style="color:#FF4444"></span>
						</p>
                        <p>
                            <label for="color">Footer Font Color :</label>
                            <input type="text" class="color" size="60" name="theme_color_10" value="<?php echo $theme_color[9]; ?>" /> 
                            <span class="admin-text" style="color:#FF4444"></span>
						</p>
                        <p>
                            <label for="color">Copyright Background Color :</label>
                            <input type="text" class="color" size="60" name="theme_color_11" value="<?php echo $theme_color[10]; ?>" /> 
                            <span class="admin-text" style="color:#FF4444"></span>
						</p>
                        <p>
                            <label for="color">Copyright Font Color :</label>
                            <input type="text" class="color" size="60" name="theme_color_12" value="<?php echo $theme_color[11]; ?>" /> 
                            <span class="admin-text" style="color:#FF4444"></span>
						</p>
                    </div>
               	</div>
				<div class="logo_setting">
					<h4 class="accordian-header">Store Logo :</h4>
            		<div class="accordian-content">
                    	<p>
        					<label for="file_logoimage" style="vertical-align:middle">Select Logo :</label>
							<input type="file" size="30" name="file_logoimage" id="file" value="<?php echo $logo_image; ?>"/><br/><br/> 
							<?php if($logo_image != NULL) { 
								echo "<label style='vertical-align:top'>Current Image : </label>";?> 
                                <img height="auto" width="200px" src="../includes/templates/<?php echo $template_dir; ?>/images/logo/<?php echo $logo_image; ?>"/>
							<?php }?>
        				</p>
    				</div>
              	</div>
                <div class="slideshow">
                	<h4 class="accordian-header">Add Slideshow Images :</h4>
                    <div class="accordian-content">
                    	<p>
                        	<label for="slideshow_image">Slideshow Image:</label>
                            <input type="file" name="slideshow_image" id="file" />
                        </p>
                        <p>
                        	<label for="slideshow_caption">Slideshow Captions :</label>
                            <textarea rows="4" cols="3" name="slideshow_caption" style="width:30%;"></textarea>
                        </p>
                        <p>
                        	<input type="submit" name="add_slideshow" value="Add Slideshow" />
                        </p>
                	</div>
              	</div>
              	<div class="slideshow">
                	<h4 class="accordian-header">Delete/Edit Slideshow Details :</h4>
                   	<div class="accordian-content">
                       	Current Slideshow Images: 
                    	<span class="admin-text" style="color:#FF4444">
                        	&nbsp; &nbsp; Select Image from below to Delete it.
                      	</span>
                        <br/> <br/>
                        <?php 
							$slideshow_query = "SELECT * from " . DB_PREFIX.shopfast_slideshow;
							$slideshow_query_result = $db->Execute($slideshow_query);
							$i=0;
							while(!$slideshow_query_result->EOF) {
								
								$slideshow_image_name = $slideshow_query_result->fields['slideshow_image'];
								$slideshow_image_id = $slideshow_query_result->fields['id'];
								$slideshow_image_id_update=$slideshow_image_id;
								$slideshow_caption_added = trim($slideshow_query_result->fields['slideshow_caption']);
						?>
                        <div class="row">
                            <div class="slideshow_image">
                                <div class="col-lg-2">
                                    <input type="checkbox" name="slideshow_image_id[]" value="<?php echo $slideshow_image_id; ?>" />
                                    <label for="slideshow_delete">Delete</label>&nbsp;
                                </div>
                                <div class="col-lg-3">
                                    <input type="hidden" name="slideshow_image_id_update[]" value="<?php echo $slideshow_image_id_update; ?>"/>
                                    <label for="slideshow_image_update">Slideshow Image:</label>
                            		<input type="file" name="slideshow_image_update[<?php echo $i; ?>]" id="file" value="<?php echo $slideshow_image_id_update; ?>"/>
                                </div>
                                <div class="col-lg-2">
                                    <img height="auto" width="120px" src="../includes/templates/<?php echo $template_dir; ?>/images/slideshow/<?php echo $slideshow_image_name; ?>"/>
                                </div>
                                <div class="col-lg-5">
                                    <textarea rows="4" cols="3" name="slideshow_caption_edit[<?php echo $i; ?>]" value="<?php echo $slideshow_image_id_update; ?>"><?php echo $slideshow_caption_added; ?></textarea>
                                </div>
                            </div>
						</div>
                        <?php $i++; $slideshow_query_result->MoveNext(); } ?>
                	</div>
                </div>
                <div class="featured_category">            
					<h4 class="accordian-header">Featured Categories :</h4>
    				<div class="accordian-content">
                        <p>
                            <label for="store_skype">Featured Category Id :</label>
                        	<input type="text" size="60" name="featured_category" value="<?php echo $featured_category; ?>" />
                        </p>
                    </div>
                </div>
                <div class="contact_details">            
					<h4 class="accordian-header">Store Contact Details :</h4>
    				<div class="accordian-content">
                    	<p>
                    		<span class="admin-text" style="color:#FF4444">
                        		Leave empty to remove the detail from template.
                        	</span>
                    	</p>
                    	<p>
                        	<label for="store_address">Address :</label>
                            <textarea rows="3" cols="2" name="store_address" style="width:30%;"><?php echo $store_address; ?></textarea>
                        </p>
                        <p>
                            <label for="store_contact">Contact Number :</label>
                        	<input type="text" size="60" name="store_contact" value="<?php echo $store_contact; ?>" />
                        </p>
                        <p>
                            <label for="store_email">Store Email Address :</label>
                            <input type="text" size="60" name="store_email" value="<?php echo $store_email; ?>" />
                        </p>
                        <p>
                            <label for="store_skype">Skype Id :</label>
                        	<input type="text" size="60" name="store_skype" value="<?php echo $store_skype; ?>" />
                        </p>
                    </div>
                </div>
                <div class="sociallinks_details">            
					<h4 class="accordian-header">Store Social Links :</h4>
    				<div class="accordian-content">
                        <p>
                        	<label for="twitter_link">Twitter Page Link :</label>
                            <input type="text" size="60" name="twitter_link" value="<?php echo $twitter_link; ?>" />
                            <span class="admin-text" style="color:#FF4444">
                                <br/><br/>(e.g : envato). Leave text-box empty to hide the Twitter Icon.
                            </span>
                        </p>
                        <p>
                        	<label for="facebook_link">Facebook Page Link :</label>
                            <input type="text" size="60" name="facebook_link" value="<?php echo $facebook_link; ?>" />
                            <span class="admin-text" style="color:#FF4444">
                                <br/><br/>(e.g : envato). Leave text-box empty to hide the Facebook Icon.
                            </span>
                        </p>
                        <p>
                        	<label for="skype_link">Skype Link :</label>
                            <input type="text" size="60" name="skype_link" value="<?php echo $skype_link; ?>" />
                            <span class="admin-text" style="color:#FF4444">
                                <br/><br/>(e.g : envato). Leave text-box empty to hide the Skype Icon.
                            </span>
                        </p>
                        <p>
                        	<label for="linkedin_link">LinkedIn Page Link :</label>
                            <input type="text" size="60" name="linkedin_link" value="<?php echo $linkedin_link; ?>" />
                            <span class="admin-text" style="color:#FF4444">
                                <br/><br/>Leave text-box empty to hide the LinkedIn Icon.
                            </span>
                        </p>
                        <p>
                        	<label for="rss_link">RSS Page Link :</label>
                            <input type="text" size="60" name="rss_link" value="<?php echo $rss_link; ?>" />
                            <span class="admin-text" style="color:#FF4444">
                                <br/><br/>(e.g : https://www.rss.com/). Leave text-box empty to hide the RSS Icon.
                            </span>
                        </p>
                        <p>
                        	<label for="pinterest_link">Pinterest Page Link :</label>
                            <input type="text" size="60" name="pinterest_link" value="<?php echo $pinterest_link; ?>" />
                            <span class="admin-text" style="color:#FF4444">
                                <br/><br/>Leave text-box empty to hide the Pinterest Icon.
                            </span>
                        </p>
                        <p>
                        	<label for="youtube_link">Youtube Page Link :</label>
                            <input type="text" size="60" name="youtube_link" value="<?php echo $youtube_link; ?>" />
                            <span class="admin-text" style="color:#FF4444">
                                <br/><br/>Leave text-box empty to hide the Youtube Icon.
                            </span>
                        </p>
                        <p>
                        	<label for="instagram_link">Instagram Page Link :</label>
                            <input type="text" size="60" name="instagram_link" value="<?php echo $instagram_link; ?>" />
                            <span class="admin-text" style="color:#FF4444">
                                <br/><br/>Leave text-box empty to hide the Instagram Icon.
                            </span>
                        </p>
                        <p>
                        	<label for="google_link">Google Plus Link :</label>
                            <input type="text" size="60" name="google_link" value="<?php echo $google_link; ?>" />
                            <span class="admin-text" style="color:#FF4444">
                                <br/><br/>(e.g : https://plus.google.com/yourpage). Leave text-box empty to hide the Google Plus Icon.
                            </span>
                        </p>
                    </div>
                </div>
                <div class="newsletter_text">            
					<h4 class="accordian-header">Text Above Newsletter :</h4>
    				<div class="accordian-content">
                        <p>
                        	<label for="newsletter_text">Text Above Newsletter :</label>
            				<textarea rows="5" cols="2" name="newsletter_text" style="width:44.5%;"><?php echo $newsletter_text; ?></textarea>
                        </p>
                     </div>
                </div>
                <div class="newsletter_details">            
					<h4 class="accordian-header">Newsletter Subscribe Details :</h4>
    				<div class="accordian-content">
                        <p>
                        	<label for="newsletter_details">Newsletter Subcribe Code for your Store (Mail Chimp Account) :</label>
            				<textarea rows="5" cols="2" name="newsletter_details" style="width:44.5%;"><?php echo $newsletter_details; ?></textarea>
            				<span class="admin-text" style="color:#FF4444;">
            					Get this code from your Mail Chimp Account. Follow instructions in Documentation to get the code.
            				</span>
                        </p>
                     </div>
                </div>
                <div class="footer_details">            
					<h4 class="accordian-header">Footer Details :</h4>
    				<div class="accordian-content">
                        <p>
                        	<label for="footer_details">Footer Column 1 :</label>
            				<textarea rows="5" cols="2" name="footer_column_1" style="width:44.5%;"><?php echo $footer_column_1; ?></textarea>
                        </p>
                     </div>
                </div>
                <div class="payment_image">
                	<h4 class="accordian-header">Payment Method Image : </h4>
                    <div class="accordian-content">
                    	<p>
                        	<label for="payment_image">Select Payment Method Image :</label>
                            <input type="file" size="30" name="payment_image" id="file" value="<?php echo $payment_image; ?>"/>
                        </p>
                        <p>
                        	<?php if($payment_image != NULL) { 
							echo "<label style='vertical-align:top'>Current Image : </label>";?> 
                            <img height="auto" width="100px" 
                            	src="../includes/templates/<?php echo $template_dir; ?>/images/banners/<?php echo $payment_image; ?>"/>
							<?php } ?>
                        </p>
                	</div>
                </div>
                <div class="googlemap_details">            
					<h4 class="accordian-header">Google Map :</h4>
    				<div class="accordian-content">
                        <p>
                        	<label for="store_map">Google Map iframe code for your Store :</label>
            				<textarea rows="5" cols="2" name="store_map" style="width:44.5%;"><?php echo $store_map; ?></textarea>
            				<span class="admin-text" style="color:#FF4444;">
            					Get this iframe code from Google Maps. Leave blank to remove Google Map from Contact Us page.
            				</span>
                        </p>
                     </div>
                </div>
                <div class="aboutus_text">            
					<h4 class="accordian-header">About Us Text in Footer :</h4>
    				<div class="accordian-content">
                        <p>
                        	<label for="aboutus_text">About Us Text :</label>
            				<textarea rows="5" cols="2" name="aboutus_text" style="width:44.5%;"><?php echo $aboutus_text; ?></textarea>
                        </p>
                     </div>
                </div>
                <div class="copyright_details">            
					<h4 class="accordian-header">Copyright Bar (Bottom of Page):</h4>
    				<div class="accordian-content">
                        <p>
                        	<label for="store_copyright">Copy Right Information :</label>
                            <input type="text" size="60" name="store_copyright" value="<?php echo $store_copyright; ?>" />
                        </p>
    				</div>
                </div>
                <div class="socialmedia">            
					<h4 class="accordian-header">Social Media Boxes :</h4>
    				<div class="accordian-content">
                    	<span class="admin-text" style="color:#FF4444">
                         	Leave text-box empty to hide the Social Media Box.
                        </span>
                        <p>
                        	<label for="facebook_box">Facebook Page :</label>
                            <input type="text" size="60" name="facebook_box" value="<?php echo $facebook_box; ?>" />
                        </p>
                        <p>
                        	<label for="twitter_box">Twitter :</label>
                            <textarea rows="5" cols="2" name="twitter_box" style="width:44.5%;"><?php echo $twitter_box; ?>
                            </textarea>
                        </p>
    				</div>
                </div>
                 <div class="socialmedia">            
					<h4 class="accordian-header">Enable/Disable Content :</h4>
    				<div class="accordian-content">
                		<p>
        					<label for="display_featured_category" style="vertical-align:middle">Display Featured Categories : 
                            </label>
							<input type="radio" name="display_featured_category" value="yes" 
							<?php if($display_featured_category=="yes")
							{echo "checked";} ?>/>
                            &nbsp; Yes  &nbsp; &nbsp;
							<input type="radio" name="display_featured_category" value="no" <?php if($display_featured_category=="no")
							{echo "checked";} ?>/>
                            &nbsp; No
        				</p>
                        <p>
        					<label for="display_main_page" style="vertical-align:middle">Display Main Page Content : </label>
							<input type="radio" name="display_main_page" value="yes" <?php if($display_main_page=="yes")
							{echo "checked";} ?>/>
                            &nbsp; Yes  &nbsp; &nbsp;
							<input type="radio" name="display_main_page" value="no" <?php if($display_main_page=="no")
							{echo "checked";} ?>/>
                            &nbsp; No
        				</p>
                        <p>
        					<label for="display_our_brands" style="vertical-align:middle">Display Our Partners : </label>
							<input type="radio" name="display_our_brands" value="yes" <?php if($display_our_brands=="yes")
							{echo "checked";} ?>/>
                            &nbsp; Yes  &nbsp; &nbsp;
							<input type="radio" name="display_our_brands" value="no" <?php if($display_our_brands=="no")
							{echo "checked";} ?>/>
                            &nbsp; No
        				</p>
                        <p>
        					<label for="display_footer_row_1" style="vertical-align:middle">Display Footer Row 1 : </label>
							<input type="radio" name="display_footer_row_1" value="yes" <?php if($display_footer_row_1=="yes")
							{echo "checked";} ?>/>
                            &nbsp; Yes  &nbsp; &nbsp;
							<input type="radio" name="display_footer_row_1" value="no" <?php if($display_footer_row_1=="no")
							{echo "checked";} ?>/>
                            &nbsp; No
        				</p>
                        <p>
        					<label for="display_footer_row_2" style="vertical-align:middle">Display Footer Row 2 : </label>
							<input type="radio" name="display_footer_row_2" value="yes" <?php if($display_footer_row_2=="yes")
							{echo "checked";} ?>/>
                            &nbsp; Yes  &nbsp; &nbsp;
							<input type="radio" name="display_footer_row_2" value="no" <?php if($display_footer_row_2=="no")
							{echo "checked";} ?>/>
                            &nbsp; No
        				</p>
                        <p>
                        	<label for="product_name_length">Product Name Character Length :</label>
                            <input type="text" size="60" name="product_name_length" value="<?php echo $product_name_length; ?>" />
                        </p>
                        <p>
                        	<label for="product_desc_length">Product Description Character Length :</label>
                            <input type="text" size="60" name="product_desc_length" value="<?php echo $product_desc_length; ?>" />
                        </p>
    				</div>
                </div>
        		<p style="text-align:center"><input type="submit" name="shopfast_settings" value="Save Changes" /></p>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- body_eof //-->

<!-- footer //-->
<?php require(DIR_WS_INCLUDES . 'footer.php'); ?>
<!-- footer_eof //-->

</body>
</html>
<?php require(DIR_WS_INCLUDES . 'application_bottom.php'); ?>