<?php if( class_exists( 'WP_Customize_control' ) ){

    class Home_Improvement_Custom_Text extends WP_Customize_Control{
        public $type = 'home-service-custom-text';
        /**
        * Render the content on the theme customizer page
        */
        public function enqueue() {            
            wp_enqueue_style( 'home-improvement-upsell', get_template_directory_uri() . '/inc/upgrade-control/upgrade-customizer-style.css', null );
        }
        public function render_content()
        {
            ?>
            <label>
                <h3 class="customize-text_editor"><?php echo wp_kses_post( $this->label ); ?></h3>
                <br />
                <span class="customize-text_editor_desc">
                    <?php echo wp_kses_post( $this->description ); ?>
                </span>
            </label>
            <?php
        }
    }//editor close
    
}//class close
add_action( 'customize_register', 'Home_Improvement_Custom_Text' );
