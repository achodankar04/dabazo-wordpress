<?php
/**
 * Add widget all-items to Elementor
 *
 * @since   1.3.13
 */
 
class BABE_Elementor_Itemrelated_Widget extends \Elementor\Widget_Base {

    /**
	 * Get widget name.
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'babe-item-related';
	}

	/**
	 * Get widget title.
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Related items', BABE_TEXTDOMAIN );
	}

	/**
	 * Get widget icon.
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-product-related';
	}
    
    /**
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the widget belongs to.
	 *
	 * @return array Widget keywords.
	 */
	public function get_keywords() {
		return [ 'related', 'upsales' ];
	}

	/**
	 * Get widget categories.
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'book-everything-elements' ];
	}

	/**
	 * Register widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 */
	protected function _register_controls() {
       
       /////////////////////

	    $this->start_controls_section(
			'babe_item_related',
			array(
				'label' => __( 'Content', BABE_TEXTDOMAIN ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			)
		);

        $this->add_control(
            'title',
            array(
                'label' => esc_html__( 'Section title', BABE_TEXTDOMAIN ),
                'description' => esc_html__( 'Optional', BABE_TEXTDOMAIN ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'text',
                'placeholder' => '',
            )
        );

		$this->end_controls_section();

	}
    
    /**
     * Create shortcode row
	 * 
	 * @return string
	 */
	public function create_shortcode() {

		$settings = $this->get_settings_for_display();
        
        $args_row = '';

        $args_row .= $settings['title'] ? ' title="'.esc_attr($settings['title']).'"' : '';

        return '[babe-item-related'.$args_row.']';

	}

	/**
	 * Render widget output on the frontend.
	 * Written in PHP and used to generate the final HTML.
	 */
	protected function render() {

		echo do_shortcode( $this->create_shortcode() );

        return;

	}
    
    /**
	 * Render widget as plain content.
	 * Override the default behavior by printing the shortcode instead of rendering it.
	 */
	 public function render_plain_content() {
	   
		// In plain mode, render shortcode name and params
		echo $this->create_shortcode();
        
	 }

}
/////////////////////
