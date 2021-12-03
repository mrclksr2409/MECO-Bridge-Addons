<?php
// Create Shortcode meco-site-box
// Use the shortcode: [meco-site-box bild="" titel="" beschreibung="" link=""]
function create_mecositebox_shortcode($atts) {
	// Attributes
	$atts = shortcode_atts(
		array(
			'bild' => '',
			'titel' => '',
			'beschreibung' => '',
			'link' => '',
		),
		$atts,
		'meco-site-box'
	);
	// Attributes in var
	$bild = $atts['bild'];
	$titel = $atts['titel'];
	$beschreibung = $atts['beschreibung'];
	$link = $atts['link'];


	// Output Code
?>
	<div class="ahksdfasdkf wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">
    <div class="vc_column-inner">
        <div class="wpb_wrapper">
            <div class="wpb_single_image wpb_content_element vc_align_left">
                <div class="wpb_wrapper">
                    <a href="<?php echo $link; ?>" target="_self">
                    	<div class="vc_single_image-wrapper vc_box_border_grey">
                    		<img width="1920" height="674" src="<?php echo $bild; ?>" class="vc_single_image-img attachment-full" alt="<?php echo $titel; ?>" title="<?php echo $titel; ?>">
                    	</div>
                  	</a>
                </div>
            </div>
            <div class="wpb_text_column wpb_content_element">
                <div class="wpb_wrapper">
                    <h3><?php echo $titel; ?></h3>
                </div>
            </div>
            <div class="wpb_text_column wpb_content_element">
                <div class="wpb_wrapper">
                    <p><?php echo $beschreibung; ?></p>
                </div>
            </div>
            <a itemprop="url" href="<?php echo $link; ?>" target="_self" class="qbutton default" title="<?php echo $titel; ?>" style="margin: 0 0 20px 20px; "><?php echo __( 'Mehr erfahren', 'meco-text' ); ?></a>
        </div>
    </div>
</div>
<?php

//	return $output;
}
add_shortcode( 'meco-site-box', 'create_mecositebox_shortcode' );

// Create Seiten Box element for Visual Composer
add_action( 'vc_before_init', 'mecositebox_integrateWithVC' );
function mecositebox_integrateWithVC() {
	vc_map( array(
		'name' => __( 'Seiten Box', 'meco-text' ),
		'description' => __( 'Zeigt eine Box mit Bild, Text und Button.', 'meco-text' ),
		'base' => 'meco-site-box',
		'show_settings_on_create' => true,
		'category' => __( 'MECO', 'meco-text'),
		'params' => array(
			array(
				'type' => 'attach_image',
				'holder' => 'div',
				'class' => '',
				'admin_label' => true,
				'heading' => __( 'Bild', 'meco-text' ),
				'param_name' => 'bild',
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'admin_label' => true,
				'heading' => __( 'Titel', 'meco-text' ),
				'param_name' => 'titel',
			),
			array(
				'type' => 'textarea_html',
				'holder' => 'div',
				'class' => '',
				'admin_label' => true,
				'heading' => __( 'Beschreibung', 'meco-text' ),
				'param_name' => 'beschreibung',
			),
			array(
				'type' => 'vc_link',
				'holder' => 'div',
				'class' => '',
				'admin_label' => true,
				'heading' => __( 'Link', 'meco-text' ),
				'param_name' => 'link',
			),
		)
	) );
}
