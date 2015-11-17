<?php
	add_theme_support('post-thumbnails'); 

	add_action( 'after_setup_theme', 'register_main_menu' );
	function register_main_menu() {
  		register_nav_menu( 'primary', __( 'Primary Menu', 'test-theme' ) );
	}

	add_action( 'after_setup_theme', 'register_secondary_menu' );
	function register_secondary_menu() {
  		register_nav_menu( 'secondary', __( 'Secondary Menu', 'test-theme' ) );
	}

	function Test_customize_register( $wp_customize ) {
		$wp_customize->add_section( 'test_logo_section' , array(
    			'title'       => __( 'Logo', 'test' ),
    			'priority'    => 30,
    			'description' => 'Upload a logo to replace the default site name and description in the header',
		) );
		$wp_customize->add_setting( 'test_logo' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'test_logo', array(
    			'label'    => __( 'Logo', 'test' ),
    			'section'  => 'test_logo_section',
    			'settings' => 'test_logo',
		) ) );
	}
	add_action( 'customize_register', 'Test_customize_register' );

	function banner_register( $wp_customize ) {
		$wp_customize->add_section( 'test_banner_section' , array(
    			'title'       => __( 'Banner', 'test-banner' ),
    			'priority'    => 30,
    			'description' => 'Upload a banner for the header',
		) );
		$wp_customize->add_setting( 'test_banner' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'test_banner', array(
    			'label'    => __( 'Banner', 'test-banner' ),
    			'section'  => 'test_banner_section',
    			'settings' => 'test_banner',
		) ) );
	}
	add_action( 'customize_register', 'banner_register' );

	function featured_promo_one_register( $wp_customize ) {
		$wp_customize->add_section( 'featured_promo_one_section' , array(
    			'title'       => __( 'Featured Promo One', 'test' ),
    			'priority'    => 30,
    			'description' => 'Update Featured Promo One',
		) );
		$wp_customize->add_setting( 'featured_promo_one_image' );
		$wp_customize->add_setting( 'featured_promo_one_title' );
		$wp_customize->add_setting( 'featured_promo_one_url' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'featured_promo_one_image', array(
    			'label'    => __( 'Banner', 'featured_promo_one_image' ),
    			'section'  => 'featured_promo_one_section',
    			'settings' => 'featured_promo_one_image',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_promo_one_title', array(
    			'label'    => __( 'Title', 'test' ),
			'type' => 'text',
    			'section'  => 'featured_promo_one_section',
    			'settings' => 'featured_promo_one_title',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_promo_one_url', array(
    			'label'    => __( 'URL', 'test' ),
			'type' => 'text',
    			'section'  => 'featured_promo_one_section',
    			'settings' => 'featured_promo_one_url',
		) ) );
	}
	add_action( 'customize_register', 'featured_promo_one_register' );

	function featured_promo_two_register( $wp_customize ) {
		$wp_customize->add_section( 'featured_promo_two_section' , array(
    			'title'       => __( 'Featured Promo Two', 'test' ),
    			'priority'    => 30,
    			'description' => 'Update Featured Promo Two',
		) );
		$wp_customize->add_setting( 'featured_promo_two_image' );
		$wp_customize->add_setting( 'featured_promo_two_title' );
		$wp_customize->add_setting( 'featured_promo_two_url' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'featured_promo_two_image', array(
    			'label'    => __( 'Banner', 'test' ),
    			'section'  => 'featured_promo_two_section',
    			'settings' => 'featured_promo_two_image',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'featured_promo_two_title', array(
    			'label'    => __( 'Title', 'test' ),
			'type' => 'text',
    			'section'  => 'featured_promo_two_section',
    			'settings' => 'featured_promo_two_title',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'featured_promo_two_url', array(
    			'label'    => __( 'URL', 'test' ),
			'type' => 'text',
    			'section'  => 'featured_promo_two_section',
    			'settings' => 'featured_promo_two_url',
		) ) );
	}
	add_action( 'customize_register', 'featured_promo_two_register' );

	function introduction_register( $wp_customize ) {
		$wp_customize->add_section( 'introduction_section' , array(
    			'title'       => __( 'Introduction', 'test' ),
    			'priority'    => 30,
    			'description' => 'Enter the Introduction on the home page.',
		) );
		$wp_customize->add_setting( 'introduction_title' );
		$wp_customize->add_setting( 'introduction_body' );
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'introduction_title', array(
    			'label'    => __( 'Title', 'test' ),
			'type' => 'text',
    			'section'  => 'introduction_section',
    			'settings' => 'introduction_title',
		) ) );
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'introduction_body', array(
    			'label'    => __( 'Body', 'test' ),
			'type' => 'textarea',
    			'section'  => 'introduction_section',
    			'settings' => 'introduction_body',
		) ) );
	}
	add_action( 'customize_register', 'introduction_register' );

	function free_estimate_register( $wp_customize ) {
		$wp_customize->add_section( 'free_estimate_section' , array(
    			'title'       => __( 'Free Estimate', 'test' ),
    			'priority'    => 30,
    			'description' => 'Enter the URL to Free Estimate Page.',
		) );
		$wp_customize->add_setting( 'free_estimate_url' );
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'free_estimate_url', array(
    			'label'    => __( 'URL', 'test' ),
			'type' => 'text',
    			'section'  => 'free_estimate_section',
    			'settings' => 'free_estimate_url',
		) ) );
	}
	add_action( 'customize_register', 'free_estimate_register' );

	function featured_promotion_url_register( $wp_customize ) {
		$wp_customize->add_section( 'featured_promotion_url_section' , array(
    			'title'       => __( 'Featured Promotion', 'test' ),
    			'priority'    => 30,
    			'description' => 'Enter the URL to Featured Promotion Page.',
		) );
		$wp_customize->add_setting( 'featured_promotion_url' );
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'featured_promotion_url', array(
    			'label'    => __( 'URL', 'test' ),
			'type' => 'text',
    			'section'  => 'featured_promotion_url_section',
    			'settings' => 'featured_promotion_url',
		) ) );
	}
	add_action( 'customize_register', 'featured_promotion_url_register' );

	function footer_register( $wp_customize ) {
		$wp_customize->add_section( 'footer_section' , array(
    			'title'       => __( 'Footer', 'test' ),
    			'priority'    => 30,
    			'description' => 'Update footer information.',
		) );
		$wp_customize->add_setting( 'footer_company_name' );
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'footer_company_name', array(
    			'label'    => __( 'Company Name', 'test' ),
			'type' => 'text',
    			'section'  => 'footer_section',
    			'settings' => 'footer_company_name',
		) ) );
		$wp_customize->add_setting( 'footer_address' );
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'footer_address', array(
    			'label'    => __( 'Address', 'test' ),
			'type' => 'text',
    			'section'  => 'footer_section',
    			'settings' => 'footer_address',
		) ) );
		$wp_customize->add_setting( 'footer_address_page_url' );
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'footer_address_page_url', array(
    			'label'    => __( 'Address Page url', 'test' ),
			'type' => 'text',
    			'section'  => 'footer_section',
    			'settings' => 'footer_address_page_url',
		) ) );
		$wp_customize->add_setting( 'footer_phone_number' );
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'footer_phone_number', array(
    			'label'    => __( 'Phone Number format: xxxxxxxxxx', 'test' ),
			'type' => 'text',
    			'section'  => 'footer_section',
    			'settings' => 'footer_phone_number',
		) ) );
		$wp_customize->add_setting( 'footer_facebook_url' );
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'footer_facebook_url', array(
    			'label'    => __( 'Facebook url', 'test' ),
			'type' => 'text',
    			'section'  => 'footer_section',
    			'settings' => 'footer_facebook_url',
		) ) );
		$wp_customize->add_setting( 'footer_twitter_url' );
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'footer_twitter_url', array(
    			'label'    => __( 'Twitter url', 'test' ),
			'type' => 'text',
    			'section'  => 'footer_section',
    			'settings' => 'footer_twitter_url',
		) ) );
		$wp_customize->add_setting( 'footer_youtube_url' );
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'footer_youtube_url', array(
    			'label'    => __( 'youtube url', 'test' ),
			'type' => 'text',
    			'section'  => 'footer_section',
    			'settings' => 'footer_youtube_url',
		) ) );
		$wp_customize->add_setting( 'footer_google_plus_url' );
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'footer_google_plus_url', array(
    			'label'    => __( 'G+ url', 'test' ),
			'type' => 'text',
    			'section'  => 'footer_section',
    			'settings' => 'footer_google_plus_url',
		) ) );
		$wp_customize->add_setting( 'footer_linkedin_url' );
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'footer_linkedin_url', array(
    			'label'    => __( 'LinkedIn url', 'test' ),
			'type' => 'text',
    			'section'  => 'footer_section',
    			'settings' => 'footer_linkedin_url',
		) ) );
		$wp_customize->add_setting( 'footer_developer_url' );
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'footer_developer_url', array(
    			'label'    => __( 'Developer url', 'test' ),
			'type' => 'text',
    			'section'  => 'footer_section',
    			'settings' => 'footer_developer_url',
		) ) );
		$wp_customize->add_setting( 'footer_copyright' );
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'footer_copyright', array(
    			'label'    => __( 'Copyright', 'test' ),
			'type' => 'text',
    			'section'  => 'footer_section',
    			'settings' => 'footer_copyright',
		) ) );
	}
	add_action( 'customize_register', 'footer_register' );

	add_action( 'init', 'create_project_post_type' );
	function create_project_post_type() {
  		register_post_type( 'project',
    			array(
      				'labels' => array(
        				'name' => __( 'Projects' ),
        				'singular_name' => __( 'Project' ),
					'all_items' => __('All Projects'),
					'add_new' => __('Add New Project'),
					'add_new_item' => __('Add New Project'),
					'edit_item' => __('Edit Project'),
					'new_item' => __('New Project'),
					'view_item' => __('View Project'),
					'search_items' => __('Search Projects')
      				),
				'description' => 'Store information and images of your project to display on your site.',
      				'public' => true,
				'supports' => array(
    					'title',
    					'editor',
    					'author',
    					'thumbnail',
    					'excerpt',
    					'trackbacks',
    					'custom-fields',
    					'comments',
    					'revisions',
    					'page-attributes',
    					'post-formats'
				),
				'taxonomies' => array(
					'category',
					'post_tag'
				),
      				'has_archive' => true,
    			)
  		);
	} 
//////////////////////////////////////////////////////////////////////////////////////////////////////////
// copied the following code to add multiple images for project post					//
// http://snipplr.com/view/100091/wordpress-add-multiple-image-upload-custom-field-to-any-post-type/	//
//////////////////////////////////////////////////////////////////////////////////////////////////////////
add_action( 'admin_init', 'add_post_gallery_so_14445904' );
add_action( 'admin_head-post.php', 'print_scripts_so_14445904' );
add_action( 'admin_head-post-new.php', 'print_scripts_so_14445904' );
add_action( 'save_post', 'update_post_gallery_so_14445904', 10, 2 );
 
/**
 * Add custom Meta Box to Posts post type
*/
function add_post_gallery_so_14445904()
{
	add_meta_box(
	'post_gallery',
	'Slides',
	'post_gallery_options_so_14445904',
	'project',// here you can set post type name
	'normal',
	'core'
			);
}
 
/**
 * Print the Meta Box content
 */
function post_gallery_options_so_14445904()
{
	global $post;
	$gallery_data = get_post_meta( $post->ID, 'gallery_data', true );
 
	// Use nonce for verification
	wp_nonce_field( plugin_basename( __FILE__ ), 'noncename_so_14445904' );
	?>
 
<div id="dynamic_form">
 
    <div id="field_wrap">
    <?php 
    if ( isset( $gallery_data['image_url'] ) ) 
    {
        for( $i = 0; $i < count( $gallery_data['image_url'] ); $i++ ) 
        {
        ?>
 
        <div class="field_row">
 
          <div class="field_left">
            <div class="form_field">
              <label>Image URL</label>
              <input type="text"
                     class="meta_image_url"
                     name="gallery[image_url][]"
                     value="<?php esc_html_e( $gallery_data['image_url'][$i] ); ?>"
              />
            </div>
          </div>
 
          <div class="field_right image_wrap">
            <img src="<?php esc_html_e( $gallery_data['image_url'][$i] ); ?>" height="48" width="48" />
          </div>
 
          <div class="field_right">
            <input class="button" type="button" value="Choose File" onclick="add_image(this)" /><br />
            <input class="button" type="button" value="Remove" onclick="remove_field(this)" />
          </div>
 
          <div class="clear" /></div> 
        </div>
        <?php
        } // endif
    } // endforeach
    ?>
    </div>
 
    <div style="display:none" id="master-row">
    <div class="field_row">
        <div class="field_left">
            <div class="form_field">
                <label>Image URL</label>
                <input class="meta_image_url" value="" type="text" name="gallery[image_url][]" />
            </div>
        </div>
        <div class="field_right image_wrap">
        </div> 
        <div class="field_right"> 
            <input type="button" class="button" value="Choose File" onclick="add_image(this)" />
            <br />
            <input class="button" type="button" value="Remove" onclick="remove_field(this)" /> 
        </div>
        <div class="clear"></div>
    </div>
    </div>
 
    <div id="add_field_row">
      <input class="button" type="button" value="Add Field" onclick="add_field_row();" />
    </div>
 
</div>
 
  <?php
}
 
/**
 * Print styles and scripts
 */
function print_scripts_so_14445904()
{
    // Check for correct post_type
    global $post;
    if( 'project' != $post->post_type )// here you can set post type name
        return;
    ?>  
    <style type="text/css">
      .field_left {
        float:left;
      }
 
      .field_right {
        float:left;
        margin-left:10px;
      }
 
      .clear {
        clear:both;
      }
 
      #dynamic_form {
        width:580px;
      }
 
      #dynamic_form input[type=text] {
        width:300px;
      }
 
      #dynamic_form .field_row {
        border:1px solid #999;
        margin-bottom:10px;
        padding:10px;
      }
 
      #dynamic_form label {
        padding:0 6px;
      }
    </style>
 
    <script type="text/javascript">
        function add_image(obj) {
            var parent=jQuery(obj).parent().parent('div.field_row');
            var inputField = jQuery(parent).find("input.meta_image_url");
 
            tb_show('', 'media-upload.php?TB_iframe=true');
 
            window.send_to_editor = function(html) {
                var url = jQuery(html).find('img').attr('src');
                inputField.val(url);
                jQuery(parent)
                .find("div.image_wrap")
                .html('<img src="'+url+'" height="48" width="48" />');
 
                // inputField.closest('p').prev('.awdMetaImage').html('<img height=120 width=120 src="'+url+'"/><p>URL: '+ url + '</p>'); 
 
                tb_remove();
            };
 
            return false;  
        }
 
        function remove_field(obj) {
            var parent=jQuery(obj).parent().parent();
            //console.log(parent)
            parent.remove();
        }
 
        function add_field_row() {
            var row = jQuery('#master-row').html();
            jQuery(row).appendTo('#field_wrap');
        }
    </script>
    <?php
}
 
/**
 * Save post action, process fields
 */
function update_post_gallery_so_14445904( $post_id, $post_object ) 
{
    // Doing revision, exit earlier **can be removed**
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )  
        return;
 
    // Doing revision, exit earlier
    if ( 'revision' == $post_object->post_type )
        return;
 
    // Verify authenticity
    if ( !wp_verify_nonce( $_POST['noncename_so_14445904'], plugin_basename( __FILE__ ) ) )
        return;
 
    // Correct post type
    if ( 'project' != $_POST['post_type'] ) // here you can set post type name
        return;
 
    if ( $_POST['gallery'] ) 
    {
        // Build array for saving post meta
        $gallery_data = array();
        for ($i = 0; $i < count( $_POST['gallery']['image_url'] ); $i++ ) 
        {
            if ( '' != $_POST['gallery']['image_url'][ $i ] ) 
            {
                $gallery_data['image_url'][]  = $_POST['gallery']['image_url'][ $i ];
            }
        }
 
        if ( $gallery_data ) 
            update_post_meta( $post_id, 'gallery_data', $gallery_data );
        else 
            delete_post_meta( $post_id, 'gallery_data' );
    } 
    // Nothing received, all fields are empty, delete option
    else 
    {
        delete_post_meta( $post_id, 'gallery_data' );
    }
}
//////////////////////////////////////////////////////////////////////////
// end of copied code for adding multiple images to project post	//
//////////////////////////////////////////////////////////////////////////
?>