<?php 
        function home_improvement_customize_register( $wp_customize ) {
            // Load custom control functions.
            require get_template_directory() . '/inc/upgrade-control/upgrade-control.php';
            require get_template_directory() . '/inc/upgrade-control/upgrade-custom-text-control.php';

            // Register custom section types.
            $wp_customize->register_section_type( 'Home_Improvement_Customize_Section_Ugrade' );
            $wp_customize->add_section( 'home_improvement_upsell_options_section', array(
                'title'          => esc_html__( 'View Pro Features', 'home-improvement' ),
                'description'    => '',
                'priority'       => 1,
                'capability'     => 'edit_theme_options',
            ) );

            $wp_customize->add_section('home_improvement_upsell_mobile_options', array(
                'title'=>esc_html('Mobile Optimization', 'home-improvement'),
                'description' => '',
                'priority' => '21',
                'capability' => '',
            ));
            $wp_customize->add_section('home_improvement_upsell_footer_options', array(
                'title'=>esc_html('Footer Options', 'home-improvement'),
                'description' => '',
                'priority' => '20',
                'capability' => '',
            ));
            //Appearance section Upsell Message
            $appreance_section_upsell_notice= '';
            $appreance_section_upsell_notice .= '<ul class="upsell-features"> <li>'.esc_html('Container Width','home-improvement').'</li><li>'.esc_html('Form Setting','home-improvement').'</li>'.'</ul>';
            $appreance_section_upsell_notice .='<span class="home-improvement-upgrade-pro"><a class="button" href="' . esc_url( 'https://alleythemes.com/home-improvement-pro/?utm_source=Customizer+&utm_medium=Upsell&utm_campaign=customizer+upsell&utm_id=C_upsell' ) . '" target="_blank">' . esc_html__( 'Upgrade to Pro', 'home-improvement' ) . '</a></span>';

            $wp_customize->add_section(
                new Home_Improvement_Customize_Section_Ugrade(
                    $wp_customize,
                    'home_service_appearance_pro_features_notices',
                    array(
                        'title'    => esc_html__( 'Get more features on Pro Version', 'home-improvement' ),
                        'description' => $appreance_section_upsell_notice,
                        'priority'  => 40,
                        'panel' => 'home_service_appearance_settings',
                    )
                )
            );

            //Header setting Upsell Message
            $header_section_upsell_notice= '';
            $header_section_upsell_notice .= '<ul class="upsell-features"><li>'.esc_html('Display CTA Buttons on Mobile Devices','home-improvement').'</li><li>'.esc_html('Additional Header Layouts','home-improvement').'</li>'.'</ul>';
            $header_section_upsell_notice .='<span class="home-improvement-upgrade-pro"><a class="button" href="' . esc_url( 'https://alleythemes.com/home-improvement-pro/?utm_source=Customizer+&utm_medium=Upsell&utm_campaign=customizer+upsell&utm_id=C_upsell' ) . '" target="_blank">' . esc_html__( 'Upgrade to Pro', 'home-improvement' ) . '</a></span>';

            $wp_customize->add_section(
                new Home_Improvement_Customize_Section_Ugrade(
                    $wp_customize,
                    'home_service_header_pro_features_notices',
                    array(
                        'title'    => esc_html__( 'Get more features on Pro Version', 'home-improvement' ),
                        'description' => $header_section_upsell_notice,
                        'priority'  => 40,
                        'panel' => 'home_service_header_settings',
                    )
                )
            );

            //Blog section Upsell Message
            $blog_section_upsell_notice= '';
            $blog_section_upsell_notice .= '<ul class="upsell-features"> <li>'.esc_html('Single Post Layouts','home-improvement').'</li></ul>';
            $blog_section_upsell_notice .='<span class="home-improvement-upgrade-pro"><a class="button" href="' . esc_url( 'https://alleythemes.com/home-improvement-pro/?utm_source=Customizer+&utm_medium=Upsell&utm_campaign=customizer+upsell&utm_id=C_upsell' ) . '" target="_blank">' . esc_html__( 'Upgrade to Pro', 'home-improvement' ) . '</a></span>';

            $wp_customize->add_section(
                new Home_Improvement_Customize_Section_Ugrade(
                    $wp_customize,
                    'home_service_blog_pro_features_notices',
                    array(
                        'title'    => esc_html__( 'Get more features on Pro Version', 'home-improvement' ),
                        'description' => $blog_section_upsell_notice,
                        'priority'  => 40,
                        'panel' => 'home_service_blog_settings',

                    )
                )
            );

            //Front page section Upsell Message
            $frontpage_section_upsell_notice= '';
            $frontpage_section_upsell_notice .= '<ul class="upsell-features"> <li>'.esc_html('Reorder Sections','home-improvement').'</li><li>'.esc_html('Promotion Section','home-improvement').'</li><li>'.esc_html('Testimonial Section','home-improvement').'</li><li>'.esc_html('Team Section','home-improvement').'</li><li>'.esc_html('Newsletter Section','home-improvement').'</li><li>'.esc_html('Recent Post Section','home-improvement').'</li></ul>';
            $frontpage_section_upsell_notice .='<span class="home-improvement-upgrade-pro"><a class="button" href="' . esc_url( 'https://alleythemes.com/home-improvement-pro/?utm_source=Customizer+&utm_medium=Upsell&utm_campaign=customizer+upsell&utm_id=C_upsell' ) . '" target="_blank">' . esc_html__( 'Upgrade to Pro', 'home-improvement' ) . '</a></span>';

            $wp_customize->add_section(
                new Home_Improvement_Customize_Section_Ugrade(
                    $wp_customize,
                    'home_service_frontpage_pro_features_notices',
                    array(
                        'title'    => esc_html__( 'Get more features on Pro Version', 'home-improvement' ),
                        'description' => $frontpage_section_upsell_notice,
                        'priority'  => 40,
                        'panel' => 'home_service_frontpage_settings',
                    )
                )
            );

            $wp_customize->add_setting( 'home_service_mobile_optiimization_pro_features_notices', 
                array(
                   'sanitize_callback' => 'sanitize_text_field',
                ) 
            );
            //Mobile optimization Upsale MEssage
            $mobile_optimization_section_upsell_notice= '';
            $mobile_optimization_section_upsell_notice .= '<ul class="upsell-features"> <li>'.esc_html('Mobile CTA','home-improvement').'</li><li>'.esc_html('Mobile Sidebar Management','home-improvement').'</li></li></ul>';
            $mobile_optimization_section_upsell_notice .='<span class="home-improvement-upgrade-pro"><a class="button" href="' . esc_url( 'https://alleythemes.com/home-improvement-pro/?utm_source=Customizer+&utm_medium=Upsell&utm_campaign=customizer+upsell&utm_id=C_upsell' ) . '" target="_blank">' . esc_html__( 'Upgrade to Pro', 'home-improvement' ) . '</a></span>';

            $wp_customize->add_control(
                new Home_Servcies_Custom_Text(
                    $wp_customize,
                    'home_service_mobile_optiimization_pro_features_notices',
                    array(
                        'title'    => esc_html__( 'Get more features on Pro Version', 'home-improvement' ),
                        'description' => $mobile_optimization_section_upsell_notice,
                        'priority'  => 1,
                        'section' => 'home_improvement_upsell_mobile_options',
                    )
                )
            );



            //Inside setting  for header upsell message 
            $header_setting_description ='';
            $header_setting_description .= '<ul class="upsell-features"> <li>'.esc_html('Display CTA Buttons on Mobile Devices','home-improvement').'</li><li>'.esc_html('Additional Header Layouts','home-improvement').'</li>'.'</ul>';
            $header_setting_description .='<span class="home-improvement-upgrade-pro"><a class="button" href="' . esc_url( 'https://alleythemes.com/home-improvement-pro/?utm_source=Customizer+&utm_medium=Upsell&utm_campaign=customizer+upsell&utm_id=C_upsell' ) . '" target="_blank">' . esc_html__( 'Upgrade to Pro', 'home-improvement' ) . '</a></span>';

            $wp_customize->add_setting( 'header_layout_upsell_message_setting', 
                array(
                   'sanitize_callback' => 'sanitize_text_field',
                ) 
            );

            $wp_customize->add_control( new Home_Servcies_Custom_Text( $wp_customize, 'header_layout_upsell_message_setting', 
                array(
                    'label' => esc_html__( 'Get more features on Pro Version', 'home-improvement' ),
                    'section' => 'home_improvement_header_options_section',
                    'settings' => 'header_layout_upsell_message_setting',
                    'description' => $header_setting_description,
                    'type' => 'home-service-custom-text',
                    'priority' => 120,
                    
                ) )
            );

            $blog_setting_description = '';
            $blog_setting_description .= '<ul class="upsell-features"> <li>'.esc_html('Sidebar Management on Mobile Device','home-improvement').'</li></ul>';
            $blog_setting_description .='<span class="home-improvement-upgrade-pro"><a class="button" href="' . esc_url( 'https://alleythemes.com/home-improvement-pro/?utm_source=Customizer+&utm_medium=Upsell&utm_campaign=customizer+upsell&utm_id=C_upsell' ) . '" target="_blank">' . esc_html__( 'Upgrade to Pro', 'home-improvement' ) . '</a></span>';
            $wp_customize->add_setting( 'blog_layout_upsell_message_setting', 
                array(
                   'sanitize_callback' => 'sanitize_text_field',
                ) 
            );

            $wp_customize->add_control( new Home_Servcies_Custom_Text( $wp_customize, 'blog_layout_upsell_message_setting', 
                array(
                    'label' => esc_html__( 'Get more features on Pro Version', 'home-improvement' ),
                    'section' => 'home_improvement_customize_blog_option',
                    'settings' => 'blog_layout_upsell_message_setting',
                    'description' => $blog_setting_description,
                    'type' => 'home-service-custom-text',
                    'priority' => 120,
                    
                ) )
            );

            /*Footer Upsell message*/
            $footer_setting_description='';
            $footer_setting_description .= '<ul class="upsell-features"> <li>'.esc_html('Footer Copyright','home-improvement').'</li><li>'.esc_html('Social Media Widget','home-improvement').'</li><li>'.esc_html('Footer Color Options','home-improvement').'</li></ul>';
            $footer_setting_description .='<span class="home-improvement-upgrade-pro"><a class="button" href="' . esc_url( 'https://alleythemes.com/home-improvement-pro/?utm_source=Customizer+&utm_medium=Upsell&utm_campaign=customizer+upsell&utm_id=C_upsell' ) . '" target="_blank">' . esc_html__( 'Upgrade to Pro', 'home-improvement' ) . '</a></span>';

            $wp_customize->add_setting( 'footer_layout_upsell_message_setting', 
                array(
                   'sanitize_callback' => 'sanitize_text_field',
                ) 
            );

            $wp_customize->add_control( new Home_Servcies_Custom_Text( $wp_customize, 'footer_layout_upsell_message_setting', 
                array(
                    'label' => esc_html__( 'Get more features on Pro Version', 'home-improvement' ),
                    'section' => 'home_improvement_upsell_footer_options',
                    'settings' => 'footer_layout_upsell_message_setting',
                    'description' => $footer_setting_description,
                    'type' => 'home-service-custom-text',
                    'priority' => 120,
                ) )
            );

            /*Footer color Upsell message*/
            $footer_color_setting_description='';
            $footer_color_setting_description .= '<ul class="upsell-features"><li>'.esc_html('Footer Color Options','home-improvement').'</li></ul>';
            $footer_color_setting_description .='<span class="home-improvement-upgrade-pro"><a class="button" href="' . esc_url( 'https://alleythemes.com/home-improvement-pro/?utm_source=Customizer+&utm_medium=Upsell&utm_campaign=customizer+upsell&utm_id=C_upsell' ) . '" target="_blank">' . esc_html__( 'Upgrade to Pro', 'home-improvement' ) . '</a></span>';

            $wp_customize->add_setting( 'footer_color_upsell_message_setting', 
                array(
                   'sanitize_callback' => 'sanitize_text_field',
                ) 
            );

            $wp_customize->add_control( new Home_Servcies_Custom_Text( $wp_customize, 'footer_color_upsell_message_setting', 
                array(
                    'label' => esc_html__( 'Get more features on Pro Version', 'home-improvement' ),
                    'section' => 'colors',
                    'settings' => 'footer_color_upsell_message_setting',
                    'description' => $footer_color_setting_description,
                    'type' => 'home-service-custom-text',
                    'priority' => 120,
                    
                ) )
            );

            /*info upsell message*/
            $home_improvement_pro_info_setting_description='';
            $home_improvement_pro_info_setting_description .= '<ul class="upsell-features"> <li>'.esc_html('10 Home Page Sections','home-improvement').'</li><li>'.esc_html('Reorder Home Page Section','home-improvement').'</li><li>'.esc_html('Multiple Starter Sites','home-improvement').'</li><li>'.esc_html('Mobile CTA Buttons','home-improvement').'</li><li>'.esc_html('Additional Header Layouts','home-improvement').'</li><li>'.esc_html('Single Post Layout Options','home-improvement').'</li><li>'.esc_html('Multiple Sidebar Option','home-improvement').'</li><li>'.esc_html('Footer Copyright','home-improvement').'</li><li>'.esc_html('Footer Color Options','home-improvement').'</li><li>'.esc_html('Pre-built Page Templates','home-improvement').'</li><li>'.esc_html('Promotion Post Type','home-improvement').'</li><li>'.esc_html('Testimonial Post Type','home-improvement').'</li><li>'.esc_html('Team Post Type','home-improvement').'</li><li>'.esc_html('Container Width Setting','home-improvement').'</li><li>'.esc_html('Form Display Settings','home-improvement').'</li><li>'.esc_html('Header Script Area','home-improvement').'</li><li>'.esc_html('Footer Script Area','home-improvement').'</li></ul>';

            $home_improvement_pro_info_setting_description .='<span class="home-improvement-upgrade-pro"><a class="button" href="' . esc_url( 'https://alleythemes.com/home-improvement-pro/?utm_source=Customizer+&utm_medium=Upsell&utm_campaign=customizer+upsell&utm_id=C_upsell' ) . '" target="_blank">' . esc_html__( 'Upgrade to Pro', 'home-improvement' ) . '</a></span>';

            $wp_customize->add_setting( 'site_info_upsell_message_setting', 
                array(
                   'sanitize_callback' => 'sanitize_text_field',
                ) 
            );

            $wp_customize->add_control( new Home_Servcies_Custom_Text( $wp_customize, 'site_info_upsell_message_setting', 
                array(
                    'label' => esc_html__( 'What features do you get with Pro upgrade?', 'home-improvement' ),
                    'section' => 'home_improvement_upsell_options_section',
                    'settings' => 'site_info_upsell_message_setting',
                    'description' => $home_improvement_pro_info_setting_description,
                    'type' => 'home-service-custom-text',
                    'priority' => 120,
                    
                ) )
            );

           
        }
        add_action( 'customize_register', 'home_improvement_customize_register' );
