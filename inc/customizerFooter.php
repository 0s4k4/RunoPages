<?php
/**
 * w3layouts Theme Footer Customizer
 *
 * @package w3layouts
 */

$w3layouts_Footer_settings=new w3layouts_Footer_customizer_settings();

class w3layouts_Footer_customizer_settings {
  // Get our default values
  // private $defaults;

  public function __construct() {
    // add_action( 'customize_register', array( $this, 'w3layouts_about_cust_register' ) );
    add_action('customize_register', array($this, 'w3layouts_Footer_panels'));



  }

  public function w3layouts_Footer_panels($wp_customize) {
    $wp_customize->add_panel('Footer_panel',
      array('title'=> __('Footer Customize', 'w3layouts'),
        'priority'=> 30,
        'description'=> esc_html__('add and update Footer data.', 'w3layouts')));

    $wp_customize->add_section('Footer',
      array('title'=> __('Footer Settings', 'w3layouts'),
        'description'=> esc_html__('This is to set or update Footer information', 'w3layouts'),
        'panel'=> 'Footer_panel'
      ));

    $wp_customize->add_section('FooterCopyRight',
      array('title'=> __('Footer CopyRight Section', 'w3layouts'),
        'description'=> esc_html__('CopyRight section in footer', 'w3layouts'),
        'panel'=> 'Footer_panel'
      ));

    $wp_customize->add_section('FooterSocialMedia',
      array('title'=> __('Footer Social Media', 'w3layouts'),
        'description'=> esc_html__('Social Media in footer', 'w3layouts'),
        'panel'=> 'Footer_panel'
      ));





    /** Footer Required section **/

    $wp_customize->add_setting('FooterRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'FooterRequired',
        array('label'=> __('Footer Required', 'w3layouts'),
          'section'=> 'Footer',
          'settings'=> 'FooterRequired',
          'priority'=> 1)));
    $wp_customize->selective_refresh->add_partial('FooterRequired', array('selector'=> 'div.AdvisoryFooter', // You can also select a css class
      ));


    /** Footer About starts **/

    $wp_customize->add_setting('FooterLogoText', array('default'=> 'Advisory',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterLogoText',
        array('label'=> __('Footer Logo Text', 'w3layouts'),
          'section'=> 'Footer',
          'settings'=> 'FooterLogoText'
        )));

    $wp_customize->add_setting('FooterAboutPara', array('default'=> 'Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at
tempufddfel. Lorem ipsum dolor sit amet Semper at elit.',
'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterAboutPara',
        array('label'=> __('Footer About Para', 'w3layouts'),
          'section'=> 'Footer',
          'type'=> 'textarea',
          'input_attrs'=> array('class'=> 'my-custom-class',
            'style'=> 'border: 1px solid #999',
            'placeholder'=> __('Enter message...', 'w3layouts'),
          ),
        )));

    /** Footer About ends **/


    /** Useful links starts **/

    // $wp_customize->add_setting('FooterUsefulLinksTitle', array('default'=> 'Useful links',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterUsefulLinksTitle',
    //     array('label'=> __('Footer Useful Links Title', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterUsefulLinksTitle'
    //     )));

    // $wp_customize->add_setting('FooterUsefulLink1Txt', array('default'=> 'About Us',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterUsefulLink1Txt',
    //     array('label'=> __('Usefull Link1 Text', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterUsefulLink1Txt'
    //     )));

    // $wp_customize->add_setting('FooterUsefulLink1URL', array('default'=> 'about.html',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterUsefulLink1URL',
    //     array('label'=> __('Usefull Link1 URL ', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterUsefulLink1URL'
    //     )));

    // $wp_customize->add_setting('FooterUsefulLink2Txt', array('default'=> 'Blog posts',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterUsefulLink2Txt',
    //     array('label'=> __('Usefull Link2 Text', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterUsefulLink2Txt'
    //     )));

    // $wp_customize->add_setting('FooterUsefulLink2URL', array('default'=> 'blog.html',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterUsefulLink2URL',
    //     array('label'=> __('Usefull Link2 URL ', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterUsefulLink2URL'
    //     )));

    // $wp_customize->add_setting('FooterUsefulLink3Txt', array('default'=> 'Pricing plans',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterUsefulLink3Txt',
    //     array('label'=> __('Usefull Link3 Text', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterUsefulLink3Txt'
    //     )));

    // $wp_customize->add_setting('FooterUsefulLink3URL', array('default'=> 'pricing.html',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterUsefulLink3URL',
    //     array('label'=> __('Usefull Link3 URL ', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterUsefulLink3URL'
    //     )));

    // $wp_customize->add_setting('FooterUsefulLink4Txt', array('default'=> 'Careers',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterUsefulLink4Txt',
    //     array('label'=> __('Usefull Link4 Text', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterUsefulLink4Txt'
    //     )));

    // $wp_customize->add_setting('FooterUsefulLink4URL', array('default'=> '#url',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterUsefulLink4URL',
    //     array('label'=> __('Usefull Link4 URL ', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterUsefulLink4URL'
    //     )));

    // $wp_customize->add_setting('FooterUsefulLink5Txt', array('default'=> 'Services',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterUsefulLink5Txt',
    //     array('label'=> __('Usefull Link5 Text', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterUsefulLink5Txt'
    //     )));

    // $wp_customize->add_setting('FooterUsefulLink5URL', array('default'=> 'services.html',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterUsefulLink5URL',
    //     array('label'=> __('Usefull Link5 URL ', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterUsefulLink5URL'
    //     )));

    // $wp_customize->add_setting('FooterUsefulLink6Txt', array('default'=> 'Contact Us',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterUsefulLink6Txt',
    //     array('label'=> __('Usefull Link6 Text', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterUsefulLink6Txt'
    //     )));

    // $wp_customize->add_setting('FooterUsefulLink6URL', array('default'=> 'contact.html',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterUsefulLink6URL',
    //     array('label'=> __('Usefull Link6 URL ', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterUsefulLink6URL'
    //     )));

    /** Useful links ends **/


    /** Resources Links starts **/
    // $wp_customize->add_setting('FooterMoreInfoLinksTitle', array('default'=> 'More Info',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterMoreInfoLinksTitle',
    //     array('label'=> __('Footer Resources Links Title', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterMoreInfoLinksTitle'
    //     )));

    // $wp_customize->add_setting('FooterMoreInfoLink1Txt', array('default'=> 'Group Profile',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterMoreInfoLink1Txt',
    //     array('label'=> __('More Info Link1 Text', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterMoreInfoLink1Txt'
    //     )));

    // $wp_customize->add_setting('FooterMoreInfoLink1URL', array('default'=> '#url',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterMoreInfoLink1URL',
    //     array('label'=> __('More Info Link1 URL ', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterMoreInfoLink1URL'
    //     )));

    // $wp_customize->add_setting('FooterMoreInfoLink2Txt', array('default'=> 'Vision & Values',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterMoreInfoLink2Txt',
    //     array('label'=> __('More Info Link2 Text', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterMoreInfoLink2Txt'
    //     )));

    // $wp_customize->add_setting('FooterMoreInfoLink2URL', array('default'=> '#url',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterMoreInfoLink2URL',
    //     array('label'=> __('More Info Link2 URL ', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterMoreInfoLink2URL'
    //     )));

    // $wp_customize->add_setting('FooterMoreInfoLink3Txt', array('default'=> 'History',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterMoreInfoLink3Txt',
    //     array('label'=> __('More Info Link3 Text', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterMoreInfoLink3Txt'
    //     )));

    // $wp_customize->add_setting('FooterMoreInfoLink3URL', array('default'=> '#url',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterMoreInfoLink3URL',
    //     array('label'=> __('More Info Link3 URL ', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterMoreInfoLink3URL'
    //     )));

    // $wp_customize->add_setting('FooterMoreInfoLink4Txt', array('default'=> 'Leadership',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterMoreInfoLink4Txt',
    //     array('label'=> __('More Info Link4 Text', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterMoreInfoLink4Txt'
    //     )));

    // $wp_customize->add_setting('FooterMoreInfoLink4URL', array('default'=> '#url',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterMoreInfoLink4URL',
    //     array('label'=> __('More Info Link4 URL ', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterMoreInfoLink4URL'
    //     )));

    // $wp_customize->add_setting('FooterMoreInfoLink5Txt', array('default'=> 'Awards',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterMoreInfoLink5Txt',
    //     array('label'=> __('More Info Link5 Text', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterMoreInfoLink5Txt'
    //     )));

    // $wp_customize->add_setting('FooterMoreInfoLink5URL', array('default'=> '#url',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterMoreInfoLink5URL',
    //     array('label'=> __('More Info Link5 URL ', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterMoreInfoLink5URL'
    //     )));

    // $wp_customize->add_setting('FooterMoreInfoLink6Txt', array('default'=> 'Media',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterMoreInfoLink6Txt',
    //     array('label'=> __('More Info Link6 Text', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterMoreInfoLink6Txt'
    //     )));

    // $wp_customize->add_setting('FooterMoreInfoLink6URL', array('default'=> '#url',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterMoreInfoLink6URL',
    //     array('label'=> __('More Info Link6 URL ', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterMoreInfoLink6URL'
    //     )));

    // $wp_customize->add_setting('FooterMoreInfoLink7Txt', array('default'=> 'Spotlight',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterMoreInfoLink7Txt',
    //     array('label'=> __('More Info Link7 Text', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterMoreInfoLink7Txt'
    //     )));

    // $wp_customize->add_setting('FooterMoreInfoLink7URL', array('default'=> '#url',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterMoreInfoLink7URL',
    //     array('label'=> __('More Info Link7 URL ', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterMoreInfoLink7URL'
    //     )));

    // $wp_customize->add_setting('FooterMoreInfoLink8Txt', array('default'=> 'Support',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterMoreInfoLink8Txt',
    //     array('label'=> __('More Info Link8 Text', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterMoreInfoLink8Txt'
    //     )));

    // $wp_customize->add_setting('FooterMoreInfoLink8URL', array('default'=> '#url',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterMoreInfoLink8URL',
    //     array('label'=> __('More Info Link8 URL ', 'w3layouts'),
    //       'section'=> 'Footer',
    //       'settings'=> 'FooterMoreInfoLink8URL'
    //     )));

    /** Resources Links ends **/


    /** Footer Contact starts **/

    $wp_customize->add_setting('FooterContactInfoRequired',
    array('default'=> 1,
      'transport'=> 'refresh',
      'sanitize_callback'=> 'skyrocket_switch_sanitization'
    ));
  $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'FooterContactInfoRequired',
      array('label'=> __('Footer Contact Required', 'w3layouts'),
        'section'=> 'Footer',
        'settings'=> 'FooterContactInfoRequired'
      )));

    $wp_customize->add_setting('FooterContactTitle', array('default'=> 'Contact Info',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterContactTitle',
        array('label'=> __('Footer Contact Title', 'w3layouts'),
          'section'=> 'Footer',
          'settings'=> 'FooterContactTitle'
        )));

    $wp_customize->add_setting('FooterContactAddressRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'FooterContactAddressRequired',
        array('label'=> __('Footer Contact Address Required', 'w3layouts'),
          'section'=> 'Footer',
          'settings'=> 'FooterContactAddressRequired'
        )));

    $wp_customize->add_setting('FooterAddressTitle', array('default'=> 'Address :',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterAddressTitle',
        array('label'=> __('Footer Address Title', 'w3layouts'),
          'section'=> 'Footer',
          'settings'=> 'FooterAddressTitle'
        )));

    $wp_customize->add_setting('FooterContactAddress', array('default'=> 'Advisory Consutancy, 343 Honey Avenue street, NY - 62617.',
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterContactAddress',
        array('label'=> __('Footer Contact Address', 'w3layouts'),
          'section'=> 'Footer',
          'type'=> 'textarea',
          'input_attrs'=> array('class'=> 'my-custom-class',
            'style'=> 'border: 1px solid #999',
            'placeholder'=> __('Enter message...', 'w3layouts'),
          ),
        )));


    // Footer Contact Phone Number starts

    $wp_customize->add_setting('FooterContactNumberRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'FooterContactNumberRequired',
        array('label'=> __('Footer Contact Number Required', 'w3layouts'),
          'section'=> 'Footer',
          'settings'=> 'FooterContactNumberRequired'
        )));

    $wp_customize->add_setting('FooterPhoneNumberTitle', array('default'=> 'Phone :',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterPhoneNumberTitle',
        array('label'=> __('Footer Phone Title', 'w3layouts'),
          'section'=> 'Footer',
          'settings'=> 'FooterPhoneNumberTitle'
        )));

    $wp_customize->add_setting('FooterContactPhone', array('default'=> '+12 23456799',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterContactPhone',
        array('label'=> __('Phone Number', 'w3layouts'),
          'section'=> 'Footer',
          'settings'=> 'FooterContactPhone'
        )));

    $wp_customize->add_setting('FooterContactPhoneURL', array('default'=> 'tel:+12 23456799',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterContactPhoneURL',
        array('label'=> __('Phone Number URL ', 'w3layouts'),
          'section'=> 'Footer',
          'settings'=> 'FooterContactPhoneURL'
        )));

    // Footer Contact Phone Number ends


    // Footer Contact Official Email starts

    $wp_customize->add_setting('FooterOfficialEmailRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'FooterOfficialEmailRequired',
        array('label'=> __('Footer Official Email Required', 'w3layouts'),
          'section'=> 'Footer',
          'settings'=> 'FooterOfficialEmailRequired'
        )));

    $wp_customize->add_setting('FooterOfficialEmailTitle', array('default'=> 'Email :',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterOfficialEmailTitle',
        array('label'=> __('Official Email Title', 'w3layouts'),
          'section'=> 'Footer',
          'settings'=> 'FooterOfficialEmailTitle'
        )));

    $wp_customize->add_setting('FooterOfficialEmail', array('default'=> 'info@example.com',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterOfficialEmail',
        array('label'=> __('Official Email', 'w3layouts'),
          'section'=> 'Footer',
          'settings'=> 'FooterOfficialEmail'
        )));

    $wp_customize->add_setting('FooterOfficialEmailURL', array('default'=> 'mailto:info@example.com',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterOfficialEmailURL',
        array('label'=> __('Official Email URL ', 'w3layouts'),
          'section'=> 'Footer',
          'settings'=> 'FooterOfficialEmailURL'
        )));

    // Footer Contact Official Email ends


    // Footer Contact Map starts 

    $wp_customize->add_setting('FooterMapRequired',
    array('default'=> 1,
      'transport'=> 'refresh',
      'sanitize_callback'=> 'skyrocket_switch_sanitization'
    ));
  $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'FooterMapRequired',
      array('label'=> __('Footer Map Required', 'w3layouts'),
        'section'=> 'Footer',
        'settings'=> 'FooterMapRequired'
      )));   

    $wp_customize->add_setting('FooterContactMapURL', array('default'=> 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterContactMapURL',
        array('label'=> __('Footer Map URL', 'w3layouts'),
          'section'=> 'Footer',
          'settings'=> 'FooterContactMapURL',
        )));

    // Footer Contact Map ends





    /** Social Media Section footer starts **/

    $wp_customize->add_setting('FooterSocialmediaRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'FooterSocialmediaRequired',
        array('label'=> __('Footer Social Media Required', 'w3layouts'),
          'section'=> 'FooterSocialMedia',
          'settings'=> 'FooterSocialmediaRequired'
        )));
    $wp_customize->selective_refresh->add_partial('FooterSocialmediaRequired', array('selector'=> 'div.FooterSocial', // You can also select a css class
      ));

    // Facebook Icon starts
    $wp_customize->add_setting('FooterSocialFacebook',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'FooterSocialFacebook',
        array('label'=> __('FaceBook Required', 'w3layouts'),
          'section'=> 'FooterSocialMedia',
          'settings'=> 'FooterSocialFacebook'

        )));

    $wp_customize->add_setting('FooterSocialFacebookURL', array('default'=> 'https://www.facebook.com/w3layouts/',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterSocialFacebookURL',
        array('label'=> __('FaceBook URL', 'w3layouts'),
          'section'=> 'FooterSocialMedia',
          'settings'=> 'FooterSocialFacebookURL'
        )));
    // Facebook Icon ends

    // twitter Icon starts
    $wp_customize->add_setting('FooterSocialTwitter',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'FooterSocialTwitter',
        array('label'=> __('Twitter Required', 'w3layouts'),
          'section'=> 'FooterSocialMedia',
          'settings'=> 'FooterSocialTwitter'

        )));

    $wp_customize->add_setting('FooterSocialTwitterURL', array('default'=> 'https://twitter.com/W3layouts',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterSocialTwitterURL',
        array('label'=> __('Twitter URL ', 'w3layouts'),
          'section'=> 'FooterSocialMedia',
          'settings'=> 'FooterSocialTwitterURL'
        )));
    // twitter Icon ends


    // Instagram Icon starts
    $wp_customize->add_setting('FooterSocialInstagram',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'FooterSocialInstagram',
        array('label'=> __('Instagram Required', 'w3layouts'),
          'section'=> 'FooterSocialMedia',
          'settings'=> 'FooterSocialInstagram'
        )));

    $wp_customize->add_setting('FooterSocialInstagramURL', array('default'=> 'https://www.instagram.com/w3layouts_/',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterSocialInstagramURL',
        array('label'=> __('Instagram URL ', 'w3layouts'),
          'section'=> 'FooterSocialMedia',
          'settings'=> 'FooterSocialInstagramURL'
        )));
    // Instagram Icon ends

    // Linkedin Icon starts
    $wp_customize->add_setting('FooterSocialLinkedin',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'FooterSocialLinkedin',
        array('label'=> __('Linkedin Required', 'w3layouts'),
          'section'=> 'FooterSocialMedia',
          'settings'=> 'FooterSocialLinkedin'

        )));

    $wp_customize->add_setting('FooterSocialLinkedinURL', array('default'=> 'https://in.linkedin.com/company/w3layouts',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterSocialLinkedinURL',
        array('label'=> __('Linkedin URL ', 'w3layouts'),
          'section'=> 'FooterSocialMedia',
          'settings'=> 'FooterSocialLinkedinURL'
        )));
    // Linkedin Icon ends

    /** Social Media Section footer ends **/




    /** Copyright Section footer**/
    $wp_customize->add_setting('FooterCopyrightRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'FooterCopyrightRequired',
        array('label'=> __('Copyright Section Required', 'w3layouts'),
          'section'=> 'FooterCopyRight',
          'settings'=> 'FooterCopyrightRequired',
          'priority'=> 1)));
    $wp_customize->selective_refresh->add_partial('FooterCopyrightRequired', array('selector'=> 'p.CopyRights', // You can also select a css class
      ));
    $wp_customize->add_setting('FooterCopyrightAllRights', array('default'=> 'All Rights Reserved by',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterCopyrightAllRights',
        array('label'=> __(' Text All rights Reserved', 'w3layouts'),
          'section'=> 'FooterCopyRight',
          'settings'=> 'FooterCopyrightAllRights'
        )));
    $wp_customize->add_setting('FooterCopyrightName', array('default'=> 'W3Layouts.',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterCopyrightName',
        array('label'=> __(' Copyright name', 'w3layouts'),
          'section'=> 'FooterCopyRight',
          'settings'=> 'FooterCopyrightName'
        )));
    $wp_customize->add_setting('FooterCopyrightURL', array('default'=> 'https://w3layouts.com/',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'FooterCopyrightURL',
        array('label'=> __(' Copyright URL', 'w3layouts'),
          'section'=> 'FooterCopyRight',
          'settings'=> 'FooterCopyrightURL'
        )));


    $wp_customize->add_setting('FooterRightMenuRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'FooterRightMenuRequired',
        array('label'=> __('Copyright Right Menu Required', 'w3layouts'),
          'section'=> 'FooterCopyRight',
          'settings'=> 'FooterRightMenuRequired'
        )));

    // $wp_customize->add_setting('FooterRightLink1Txt', array('default'=> 'Careers',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterRightLink1Txt',
    //     array('label'=> __('Copyright Right Menu Link1 Text', 'w3layouts'),
    //       'section'=> 'FooterCopyRight',
    //       'settings'=> 'FooterRightLink1Txt'
    //     )));

    // $wp_customize->add_setting('FooterRightLink1URL', array('default'=> '#url',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterRightLink1URL',
    //     array('label'=> __('Copyright Right Menu Link1 URL ', 'w3layouts'),
    //       'section'=> 'FooterCopyRight',
    //       'settings'=> 'FooterRightLink1URL'
    //     )));

    // $wp_customize->add_setting('FooterRightLink2Txt', array('default'=> 'Privacy Policy',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterRightLink2Txt',
    //     array('label'=> __('Copyright Right Menu Link2 Text', 'w3layouts'),
    //       'section'=> 'FooterCopyRight',
    //       'settings'=> 'FooterRightLink2Txt'
    //     )));

    // $wp_customize->add_setting('FooterRightLink2URL', array('default'=> '#url',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterRightLink2URL',
    //     array('label'=> __('Copyright Right Menu Link2 URL ', 'w3layouts'),
    //       'section'=> 'FooterCopyRight',
    //       'settings'=> 'FooterRightLink2URL'
    //     )));

    // $wp_customize->add_setting('FooterRightLink3Txt', array('default'=> 'Contact us',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterRightLink3Txt',
    //     array('label'=> __('Copyright Right Menu Link3 Text', 'w3layouts'),
    //       'section'=> 'FooterCopyRight',
    //       'settings'=> 'FooterRightLink3Txt'
    //     )));

    // $wp_customize->add_setting('FooterRightLink3URL', array('default'=> '#url',
    //     'transport'=> 'refresh', ));
    // $wp_customize->add_control(new WP_Customize_Control($wp_customize,
    //     'FooterRightLink3URL',
    //     array('label'=> __('Copyright Right Menu Link3 URL ', 'w3layouts'),
    //       'section'=> 'FooterCopyRight',
    //       'settings'=> 'FooterRightLink3URL'
    //     )));

    /** Designed by Section footer**/
    // $wp_customize->add_setting('FooterDesignedByRequired',
    //   array('default'=> 1,
    //     'transport'=> 'refresh',
    //     'sanitize_callback'=> 'skyrocket_switch_sanitization'
    //   ));
    // $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'FooterDesignedByRequired',
    //     array('label'=> __('Designed by Section Required', 'w3layouts'),
    //       'section'=> 'FooterCopyRight',
    //       'settings'=> 'FooterDesignedByRequired'

    //     )));


  }

}