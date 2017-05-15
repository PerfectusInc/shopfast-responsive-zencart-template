<!-- Slideshow-Container-->	
   			<div class="slideshow-container">
                <div class="main-slideshow-wrapper">
                    <div id="main-slideshow" class="owl-carousel owl-theme">
                    	<?php
	                    	while(!$slideshow_query_result->EOF) {
                            	$slider_image = $slideshow_query_result->fields['slideshow_image'];
								$slider_caption = $slideshow_query_result->fields['slideshow_caption'];
                        ?>
                        	<div class="item">
                            	<div class="overlay-1"></div>
                            	<img alt="slideshow-images" src="<?php echo $template->get_template_dir
                                ('',DIR_WS_TEMPLATE, $current_page_base,'images').'/slideshow/'.$slider_image;?>" />
                                <div class="content caption">
                                	<div class="container">
                                    	<div class="row">
											<div class="col-xs-12 col-sm-8 col-lg-6 caption-body hidden-xs">
                                    			<?php echo $slider_caption; ?>
                                  			</div>
                                    	</div>
                                    </div>	
                                </div>
                            </div>
                       	<?php
                           		$slideshow_query_result->MoveNext();
                       		}
                       	?>
                	</div>
            	</div>
			</div>
<!-- Slideshow-Container Ends-->

