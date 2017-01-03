<?php
new theme_customizer();

class theme_customizer
{
    public function __construct()
    {
        add_action( 'customize_register', array(&$this, 'customize_manager_demo' ));
    }

    /**
     * Add the Customize link to the admin menu
     * @return void
     */
    public function customizer_admin() {
        add_theme_page( 'Customize', 'Customize', 'edit_theme_options', 'customize.php' );
    }

    /**
     * Customizer manager demo
     * @param  WP_Customizer_Manager $wp_manager
     * @return void
     */
    public function customize_manager_demo( $wp_manager )
    {
        $this->custom_sections( $wp_manager );
    }

    /**
     * Adds a new section to use custom controls in the WordPress customiser
     *
     * @param  Obj $wp_manager - WP Manager
     *
     * @return Void
     */
    private function custom_sections( $wp_manager )
    {
		//
		// UPDATED SECTION BELOW
		// The below codes are the actual codes for
		// Clarity theme
		//
		//
				
        // LOGO IMAGE UPLOAD
        $wp_manager->add_setting( 'logo', array(
            'default'        => '',
        ) );

        $wp_manager->add_control( new WP_Customize_Image_Control( $wp_manager, 'logo', array(
            'label'   => 'Logo Upload',
            'section' => 'title_tagline',
            'settings'   => 'logo',
            'priority' => 1
        ) ) ); // END logo
				
		//
		// General Settings
		// for items that don't belong elsewhere
		//
		
        $wp_manager->add_section( 'customiser_general', array(
            'title'          => 'General Settings',
            'priority'       => 27,
        ) );

        // Checkbox control
        $wp_manager->add_setting( 'clarity_stickynav', array(
            'default'        => '',
        ) );

        $wp_manager->add_control( 'clarity_stickynav', array(
            'label'   => 'Sticky Navigation?',
            'section' => 'customiser_general',
            'type'    => 'checkbox',
            'priority' => 2
        ) );
		
        // Checkbox control
        $wp_manager->add_setting( 'clarity_centernav', array(
            'default'        => '',
        ) );

        $wp_manager->add_control( 'clarity_centernav', array(
            'label'   => 'Center Navigation?',
            'section' => 'customiser_general',
            'type'    => 'checkbox',
            'priority' => 2
        ) );
		
        // Add a textarea control
        require_once dirname(__FILE__) . '/text/textarea-custom-control.php';
        $wp_manager->add_setting( 'clarity_copyright', array(
            'default'        => '',
        ) );
        $wp_manager->add_control( new Textarea_Custom_Control( $wp_manager, 'clarity_copyright', array(
            'label'   => 'Footer Copyright',
            'section' => 'customiser_general',
            'settings'   => 'clarity_copyright',
            'priority' => 10
        ) ) );
		
		
		//
		// Color Settings
		// change theme colors
		//
		
		$wp_manager->add_setting(
			'clarity_main_color',
			array(
				'default'     => '#21759b'
			)
		);

		$wp_manager->add_control(
			new WP_Customize_Color_Control(
				$wp_manager,
				'link_color',
				array(
					'label'      => __( 'Main Color', 'clarity-theme' ),
					'section'    => 'colors',
					'settings'   => 'clarity_main_color'
				)
			)
		);
		//
		// Post Settings
		// items that are editable for the posts
		//
		
        $wp_manager->add_section( 'customiser_posts', array(
            'title'          => 'Post Settings',
            'priority'       => 26,
        ) );
		
        $wp_manager->add_setting( 'clarity_thumbnails', array(
			'default' => 'none'
		) );
		
        $wp_manager->add_control( 'clarity_thumbnails', array(
			'section' => 'customiser_posts',
			'label' => 'Thumbnail size',
			'type' => 'select',
			'choices' => array(
				'thumb' => 'Thumbnail',
				'large' => 'Large',
				'none' => 'None'
			)
		) );
		
        $wp_manager->add_setting( 'clarity_length', array(
			'default' => 'excerpt'
		) );
		
        $wp_manager->add_control( 'clarity_length', array(
			'section' => 'customiser_posts',
			'label' => 'Full content or Excerpt?',
			'type' => 'radio',
			'choices' => array(
				'excerpt' => 'Excerpt',
				'full' => 'Full'
			)
		) );
		
		//
		// Script Settings
		// for header and footer scripts
		//
		
        $wp_manager->add_section( 'customiser_scripts', array(
            'title'          => 'Extra Scripts',
            'priority'       => 200,
			'description'	 => 'Add in your analytics or other tracking / advertisement scripts in this section',
        ) );
		
        // Add a textarea control
        require_once dirname(__FILE__) . '/text/textarea-custom-control.php';
        $wp_manager->add_setting( 'script_header', array(
            'default'        => '',
        ) );
        $wp_manager->add_control( new Textarea_Custom_Control( $wp_manager, 'script_header', array(
            'label'   => 'Header Scripts',
            'section' => 'customiser_scripts',
            'settings'   => 'script_header',
            'priority' => 10
        ) ) );

        // Add a textarea control
        require_once dirname(__FILE__) . '/text/textarea-custom-control.php';
        $wp_manager->add_setting( 'script_footer', array(
            'default'        => '',
        ) );
        $wp_manager->add_control( new Textarea_Custom_Control( $wp_manager, 'script_footer', array(
            'label'   => 'Footer Scripts',
            'section' => 'customiser_scripts',
            'settings'   => 'script_footer',
            'priority' => 10
        ) ) );
		
    }

}

function clarity_customizer_css() {
    ?>
    <style type="text/css">
        a,
		a:visited,
		.logowrap a:hover,
		.logowrap h1 a:hover,
		.logowrap h2 a:hover,
		div.post h1.title,
		div.post h2.title,
		div.page h1.title,
		div.page h2.title,
		div.post h1.title a,
		div.post h2.title a,
		div.page h1.title a,
		div.page h2.title a,
		div.post h1.title a:visited,
		div.post h2.title a:visited,
		div.page h1.title a:visited,
		div.page h2.title a:visited,
		.guerrillatext h4 a:hover,
		.comment-author a,
		.comment-author a:visited,
		.wp-pagenavi a:hover {
			color: <?php echo get_theme_mod( 'clarity_main_color' ); ?>;
		}
		
		a.btn,
		a.btn:visited,
		input#submit,
		a.comment-reply-link:hover,
		.wpcf7-submit {
			background: <?php echo get_theme_mod( 'clarity_main_color' ); ?>;
		}
    </style>
    <?php
}
add_action( 'wp_head', 'clarity_customizer_css' );

?>