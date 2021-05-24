<?php
/**
 * w3layouts Theme  Customizer
 *
 * @package w3layouts
 */

$w3layouts_Blog_settings=new w3layouts_Blog_customizer_settings();

class w3layouts_Blog_customizer_settings {
  // Get our default values
  // private $defaults;

  public function __construct() {
    // add_action( 'customize_register', array( $this, 'w3layouts_Blog_cust_register' ) );
    add_action('customize_register', array($this, 'w3layouts_Blogpage_panels'));

  }

  public function w3layouts_Blogpage_panels($wp_customize) {
    /**
 		 * Add our Header & Navigation Panel
 		 */
    $wp_customize->add_panel('BlogPage_panel',
      array('title'=> __('Blog Customize', 'w3layouts'),
        'priority'=> 30,
        'description'=> esc_html__('Custommize Blog Look and feel.', 'w3layouts')));

    $wp_customize->add_section('BlogPageBannerSection',
      array('title'=> __('Section 1 Blog Banner Section', 'w3layouts'),
        'description'=> esc_html__('', 'w3layouts'),
        'panel'=> 'BlogPage_panel'
      ));

    $wp_customize->add_section('BlogSinglePageBannerSection',
      array('title'=> __('Section 1 Blog Single Banner Section', 'w3layouts'),
        'description'=> esc_html__('', 'w3layouts'),
        'panel'=> 'BlogPage_panel'
      ));

    $wp_customize->add_section('BlogHomePageHeaderSection',
      array('title'=> __('Section 2 Blog Home Page Header', 'w3layouts'),
        'description'=> esc_html__('', 'w3layouts'),
        'panel'=> 'BlogPage_panel'
      ));

    $wp_customize->add_section('BlogHomePageSection',
      array('title'=> __('Section 3 Home Page', 'w3layouts'),
        'description'=> esc_html__('', 'w3layouts'),
        'panel'=> 'BlogPage_panel'
      ));

    $wp_customize->add_section('BlogArticle',
      array('title'=> __('Section 4 Article Page', 'w3layouts'),
        'description'=> esc_html__('', 'w3layouts'),
        'panel'=> 'BlogPage_panel'
      ));

    $wp_customize->add_section('BlogComments',
      array('title'=> __('Section 5 Comments Section', 'w3layouts'),
        'description'=> esc_html__('', 'w3layouts'),
        'panel'=> 'BlogPage_panel'
      ));

    // $wp_customize->add_section( 'BlogPageCounterSection',
    // 	array(
    // 		'title' => __( 'Section 4 Counter', 'w3layouts' ),
    // 		'description' => esc_html__( '', 'w3layouts' ),
    // 		'panel' => 'BlogPage_panel'
    // 	)
    // );
    // $wp_customize->add_section( 'BlogPageTeamSection',
    // 	array(
    // 		'title' => __( 'Section 5 Team', 'w3layouts' ),
    // 		'description' => esc_html__( '', 'w3layouts' ),
    // 		'panel' => 'BlogPage_panel'
    // 	)
    // );
    // $wp_customize->add_section( 'BlogPageTestimonialSection',
    // 	array(
    // 		'title' => __( 'Section 6 Testimonial', 'w3layouts' ),
    // 		'description' => esc_html__( '', 'w3layouts' ),
    // 		'panel' => 'BlogPage_panel'
    // 	)
    // );
    //
    // $wp_customize->add_section( 'BlogPageCertiSection',
    // 	array(
    // 		'title' => __( 'Section 7 Certification', 'w3layouts' ),
    // 		'description' => esc_html__( '', 'w3layouts' ),
    // 		'panel' => 'BlogPage_panel'
    // 	)
    // );


    /** BlogPage Banner section starts **/

    $wp_customize->add_setting('BlogPageBannerBgImage',
      array('default'=> '',
        'transport'=> 'refresh',
        'sanitize_callback'=> 'absint'
      ));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'BlogPageBannerBgImage',
        array('label'=> __('BlogPage Banner Bg Image'),
          'description'=> esc_html__(''),
          'section'=> 'BlogPageBannerSection',
          'flex_width'=> false, // Optional. Default: false
          'flex_height'=> true, // Optional. Default: false
          'width'=> 1760, // Optional. Default: 150
          'height'=> 900, // Optional. Default: 150
          'button_labels'=> array( // Optional.
            'select'=> __('Select Image'),
            'change'=> __('Change Image'),
            'remove'=> __('Remove'),
            'default'=> __('Default'),
            'placeholder'=> __('No image selected'),
            'frame_title'=> __('Select Image'),
            'frame_button'=> __('Choose Image'),
          ))));
    $wp_customize->selective_refresh->add_partial('BlogPageBannerBgImage', array('selector'=> 'div.BlogPageBannerImage', // You can also select a css class
      ));

    /** BlogPage Banner section ends **/


    /** BlogPage Single Banner section starts **/

    $wp_customize->add_setting('BlogSinglePageBannerBgImage',
      array('default'=> '',
        'transport'=> 'refresh',
        'sanitize_callback'=> 'absint'
      ));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'BlogSinglePageBannerBgImage',
        array('label'=> __('BlogSinglePage Banner Bg Image'),
          'description'=> esc_html__(''),
          'section'=> 'BlogSinglePageBannerSection',
          'flex_width'=> false, // Optional. Default: false
          'flex_height'=> true, // Optional. Default: false
          'width'=> 1760, // Optional. Default: 150
          'height'=> 900, // Optional. Default: 150
          'button_labels'=> array( // Optional.
            'select'=> __('Select Image'),
            'change'=> __('Change Image'),
            'remove'=> __('Remove'),
            'default'=> __('Default'),
            'placeholder'=> __('No image selected'),
            'frame_title'=> __('Select Image'),
            'frame_button'=> __('Choose Image'),
          ))));
    $wp_customize->selective_refresh->add_partial('BlogSinglePageBannerBgImage', array('selector'=> 'div.BlogSinglePageBannerImage', // You can also select a css class
      ));

    /** BlogSinglePage Banner section ends **/

    /** Blogpage Home Page Header **/

    $wp_customize->add_setting('BlogHeaderRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'BlogHeaderRequired',
        array('label'=> __('Blog HomePage Header Required', 'w3layouts'),
          'section'=> 'BlogHomePageHeaderSection',
          'settings'=> 'BlogHeaderRequired',
          'priority'=> 1)));
    $wp_customize->selective_refresh->add_partial('BlogHeaderRequired', array('selector'=> 'div.BlogHomeHeaderTitles', // You can also select a css class
      ));

    $wp_customize->add_setting('BlogHeaderTitle1Required',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'BlogHeaderTitle1Required',
        array('label'=> __('Blog HomePage Title 1 Required', 'w3layouts'),
          'section'=> 'BlogHomePageHeaderSection',
          'settings'=> 'BlogHeaderTitle1Required'
        )));

    $wp_customize->add_setting('BlogHomeHeaderTitle1', array('default'=> 'Our Posts',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'BlogHomeHeaderTitle1',
        array('label'=> __('Blog HomePage Title 1', 'w3layouts'),
          'section'=> 'BlogHomePageHeaderSection',
          'settings'=> 'BlogHomeHeaderTitle1'
        )));

    $wp_customize->add_setting('BlogHeaderTitle2Required',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'BlogHeaderTitle2Required',
        array('label'=> __('Blog HomePage Title 2 Required', 'w3layouts'),
          'section'=> 'BlogHomePageHeaderSection',
          'settings'=> 'BlogHeaderTitle2Required'
        )));

    $wp_customize->add_setting('BlogHomeHeaderTitle2', array('default'=> "Latest Blog Posts",
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'BlogHomeHeaderTitle2',
        array('label'=> __('Blog HomePage Title 2', 'w3layouts'),
          'section'=> 'BlogHomePageHeaderSection',
          'settings'=> 'BlogHomeHeaderTitle2'
        )));

    $wp_customize->add_setting('BlogHeaderparaRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'BlogHeaderparaRequired',
        array('label'=> __('Blog HomePage Para Required', 'w3layouts'),
          'section'=> 'BlogHomePageHeaderSection',
          'settings'=> 'BlogHeaderparaRequired'
        )));

    $wp_customize->add_setting('BlogHomeHeaderpara', array('default'=> 'Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
consectetur adipisicing.Nunc id ipsum fringilla, gravida felis vitae.',
'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'BlogHomeHeaderpara',
        array('label'=> __('Blog HomePage Content', 'w3layouts'),
          'section'=> 'BlogHomePageHeaderSection',
          'type'=> 'textarea',
          'input_attrs'=> array('class'=> 'my-custom-class',
            'style'=> 'border: 1px solid #999',
            'placeholder'=> __('Enter message...', 'w3layouts'),
          ),
        )));

    /** Blogpage Home Page Grid **/

    $wp_customize->add_setting('BlogHomePageCategory',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'BlogHomePageCategory',
        array('label'=> __('Post Category Required', 'w3layouts'),
          'section'=> 'BlogHomePageSection',
          'settings'=> 'BlogHomePageCategory'
        )));
    $wp_customize->selective_refresh->add_partial('BlogHomePageCategory', array('selector'=> 'div.BlogHomeLayout', // You can also select a css class
      ));

    $wp_customize->add_setting('BlogHomePageAuthor',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'BlogHomePageAuthor',
        array('label'=> __('Post Author Required', 'w3layouts'),
          'section'=> 'BlogHomePageSection',
          'settings'=> 'BlogHomePageAuthor'
        )));

    $wp_customize->add_setting('BlogHomePageDate',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'BlogHomePageDate',
        array('label'=> __('Posted Date Required', 'w3layouts'),
          'section'=> 'BlogHomePageSection',
          'settings'=> 'BlogHomePageDate'
        )));

    // $wp_customize->add_setting('BlogHomePageTime',
    //   array('default'=> 1,
    //     'transport'=> 'refresh',
    //     'sanitize_callback'=> 'skyrocket_switch_sanitization'
    //   ));
    // $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'BlogHomePageTime',
    //     array('label'=> __('Post Time Required', 'w3layouts'),
    //       'section'=> 'BlogHomePageSection',
    //       'settings'=> 'BlogHomePageTime'
    //     )));

    /** Blog Article single page **/
    $wp_customize->add_setting('BlogTitleBelowDate',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'BlogTitleBelowDate',
        array('label'=> __('Post Date', 'w3layouts'),
          'section'=> 'BlogArticle',
          'settings'=> 'BlogTitleBelowDate'

        )));

    $wp_customize->selective_refresh->add_partial('BlogTitleBelowDate', array('selector'=> 'h2.w3ArticleTitleBelow', // You can also select a css class
      ));

    // $wp_customize->add_setting( 'BlogTitleBelowCategory',
    //  array(
    //    'default' => 1,
    //      'transport' => 'refresh',
    //    'sanitize_callback' => 'skyrocket_switch_sanitization'
    //  )
    // );
    // $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'BlogTitleBelowCategory',
    //  array(
    //    'label' => __( 'Category Below Title', 'w3layouts' ),
    //    'section' => 'BlogArticle',
    //    'settings'   => 'BlogTitleBelowCategory'

    //  )
    // ) );

    $wp_customize->add_setting('BlogDetailsAuthor',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'BlogDetailsAuthor',
        array('label'=> __('Post Author', 'w3layouts'),
          'section'=> 'BlogArticle',
          'settings'=> 'BlogDetailsAuthor'
        )));

    $wp_customize->add_setting('BlogDetailsComments',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'BlogDetailsComments',
        array('label'=> __('Post Comments', 'w3layouts'),
          'section'=> 'BlogArticle',
          'settings'=> 'BlogDetailsComments'
        )));

    // // Artcle Layout Customization
    // $wp_customize->add_setting('w3layoutsArticleLayout',
    //   array('default'=> $this->defaults['w3layoutsArticleLayout'],
    //     'transport'=> 'refresh',
    //     'sanitize_callback'=> 'skyrocket_radio_sanitization'
    //   ));
    // $wp_customize->add_control(new Skyrocket_Image_Radio_Button_Custom_Control($wp_customize, 'w3layoutsArticleLayout',
    //     array('label'=> __('Article Layout settings', 'w3layouts'),
    //       'description'=> esc_html__('with or without sidebar, left or right', 'w3layouts'),
    //       'section'=> 'BlogArticle',
    //       'choices'=> array('sidebarleft'=> array('image'=> trailingslashit(get_template_directory_uri()) . 'inc/customizer/images/sidebar-left.png',
    //           'name'=> __('LeftSidebar', 'w3layouts')),
    //         'sidebarnone'=> array('image'=> trailingslashit(get_template_directory_uri()) . 'inc/customizer/images/sidebar-none.png',
    //           'name'=> __('NoSidebar', 'w3layouts')),
    //         'sidebarright'=> array('image'=> trailingslashit(get_template_directory_uri()) . 'inc/customizer/images/sidebar-right.png',
    //           'name'=> __('RightSidebar', 'w3layouts'))))));
    // $wp_customize->selective_refresh->add_partial('w3layoutsArticleLayout', array('selector'=> 'div.w3BlogLayout', // You can also select a css class
    //   ));


    /** Blogpage breadcrumbs section **/
    $wp_customize->add_setting('PostCommentSectionRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'PostCommentSectionRequired',
        array('label'=> __('Comments Required', 'w3layouts'),
          'section'=> 'BlogComments',
          'settings'=> 'PostCommentSectionRequired',
          'priority'=> 1)));
    $wp_customize->selective_refresh->add_partial('PostCommentSectionRequired', array('selector'=> 'div.w3PostComments', // You can also select a css class
      ));

    // $wp_customize->add_setting( 'sample_default_dropdownpages',
    //    array(
    //       'default' => '1548',
    //       'transport' => 'refresh',
    //       'sanitize_callback' => 'absint'
    //    )
    // );
    //
    // $wp_customize->add_control( 'sample_default_dropdownpages',
    //    array(
    //       'label' => __( 'Default Dropdown Pages Control' ),
    //       'description' => esc_html__( 'Sample description' ),
    //       'section' => 'BlogArticle',
    //       'priority' => 10, // Optional. Order priority to load the control. Default: 10
    //       'type' => 'dropdown-pages',
    //       'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
    //    )
    // );


  }

}