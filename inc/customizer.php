<?php
/**
 * cosmetic Theme Customizer
 *
 * @package cosmetic
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function cosmetic_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'cosmetic_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'cosmetic_customize_partial_blogdescription',
			)
		);
	}
//-------------------------------------
	/*
Добавляем секцию в настройки темы
*/
$wp_customize->add_section(
    // ID
    'data_site_section',
    // Arguments array
    array(
        'title' => 'Все контактные данные магазина',
        'capability' => 'edit_theme_options',
        'description' => "Тут можно указать контактные данные магазина"
    )
);
/*
Добавляем поле локации магазина
*/
$wp_customize->add_setting(
    // ID
    'shop_location',
    // Arguments array
    array(
        'default' => '',
        'type' => 'option'
    )
);
$wp_customize->add_control(
    // ID
    'shop_location_control',
    // Arguments array
    array(
        'type' => 'text',
        'label' => "Расположение магазина",
        'section' => 'data_site_section',
        // This last one must match setting ID from above
        'settings' => 'shop_location'
    )
);
/*
Добавляем поле время работы 
*/
$wp_customize->add_setting(
    // ID
    'shop_time',
    // Arguments array
    array(
        'default' => '',
        'type' => 'option'
    )
);
$wp_customize->add_control(
    // ID
    'shop_time_control',
    // Arguments array
    array(
        'type' => 'text',
        'label' => "Время работы магазина",
        'section' => 'data_site_section',
        // This last one must match setting ID from above
        'settings' => 'shop_time'
    )
);

/*
Добавляем поле телефона site_telephone
*/
$wp_customize->add_setting(
    // ID
    'site_telephone',
    // Arguments array
    array(
        'default' => '',
        'type' => 'option'
    )
);
$wp_customize->add_control(
    // ID
    'site_telephone_control',
    // Arguments array
    array(
        'type' => 'text',
        'label' => "Телефон",
        'section' => 'data_site_section',
        // This last one must match setting ID from above
        'settings' => 'site_telephone'
    )
);
/*
Добавляем поле почты site_mail
*/
$wp_customize->add_setting(
    // ID
    'site_mail',
    // Arguments array
    array(
        'default' => '',
        'type' => 'option'
    )
);
$wp_customize->add_control(
    // ID
    'site_email_control',
    // Arguments array
    array(
        'type' => 'text',
        'label' => "email",
        'section' => 'data_site_section',
        // This last one must match setting ID from above
        'settings' => 'site_mail'
    )
);
}
add_action( 'customize_register', 'cosmetic_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function cosmetic_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function cosmetic_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function cosmetic_customize_preview_js() {
	wp_enqueue_script( 'cosmetic-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'cosmetic_customize_preview_js' );
