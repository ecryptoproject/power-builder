<?php
class Tm_Builder_Module_Pricing_Tables_Item extends Tm_Builder_Module {
	function init() {
		$this->name             = esc_html__( 'Pricing Table', 'power-builder' );
		$this->slug             = 'tm_pb_pricing_table';
		$this->main_css_element = '%%order_class%%.tm_pb_pricing';
		$this->type             = 'child';
		$this->child_title_var  = 'title';

		$this->whitelisted_fields = array(
			'featured',
			'sticker',
			'sticker_position',
			'sticker_bg_color',
			'sticker_bg_image',
			'sticker_use_icon',
			'sticker_icon',
			'sticker_icon_color',
			'sticker_icon_font_size',
			'sticker_icon_font_size_laptop',
			'sticker_icon_font_size_tablet',
			'sticker_icon_font_size_phone',
			'sticker_text',
			'title',
			'subtitle',
			'currency',
			'per',
			'sum',
			'button_url',
			'button_text',
			'content_new',
		);

		$tm_accent_color = tm_builder_accent_color();
		$tm_secondary_color = tm_builder_secondary_color();

		$this->fields_defaults = array(
			'featured'           => array( 'off' ),
			'sticker'            => array( 'off' ),
			'sticker_position'   => array( 'top-right' ),
			'sticker_bg_color'   => array( $tm_accent_color, 'add_default_setting' ),
			'sticker_use_icon'   => array( 'on' ),
			'sticker_icon'       => array( 'f164' ),
			'sticker_icon_color' => array( $tm_secondary_color, 'only_default_setting' ),
			'sticker_text'       => array( esc_html__( 'Sale', 'power-builder' ) ),
			'sticker_bg_image'   => array( '' ),
		);

		$this->advanced_setting_title_text = esc_html__( 'New Pricing Table', 'power-builder' );
		$this->settings_text               = esc_html__( 'Pricing Table Settings', 'power-builder' );
		$this->main_css_element = '%%order_class%%';
		$this->advanced_options = array(
			'fonts' => array(
				'header' => array(
					'label'    => esc_html__( 'Header', 'power-builder' ),
					'css'      => array(
						'main' => "{$this->main_css_element} .tm_pb_pricing_heading h2",
					),
					'line_height' => array(
						'range_settings' => array(
							'min'  => '1',
							'max'  => '100',
							'step' => '1',
						),
					),
				),
				'subheader' => array(
					'label'    => esc_html__( 'Subheader', 'power-builder' ),
					'css'      => array(
						'main' => "{$this->main_css_element} .tm_pb_best_value",
					),
					'line_height' => array(
						'range_settings' => array(
							'min'  => '1',
							'max'  => '100',
							'step' => '1',
						),
					),
				),
				'currency_frequency' => array(
					'label'    => esc_html__( 'Currency &amp; Frequency', 'power-builder' ),
					'css'      => array(
						'main' => "{$this->main_css_element} .tm_pb_dollar_sign, {$this->main_css_element} .tm_pb_frequency",
					),
				),
				'price' => array(
					'label'    => esc_html__( 'Price', 'power-builder' ),
					'css'      => array(
						'main' => "{$this->main_css_element} .tm_pb_sum",
					),
					'line_height' => array(
						'range_settings' => array(
							'min'  => '1',
							'max'  => '100',
							'step' => '1',
						),
					),
				),
				'body'   => array(
					'label'    => esc_html__( 'Body', 'power-builder' ),
					'css'      => array(
						'main' => "{$this->main_css_element} .tm_pb_pricing li",
					),
					'line_height' => array(
						'range_settings' => array(
							'min'  => '1',
							'max'  => '100',
							'step' => '1',
						),
					),
				),
				'sticker' => array(
					'label'    => esc_html__( 'Sticker text', 'power-builder' ),
					'css'      => array(
						'main' => "{$this->main_css_element} .tm_pb_pricing_sticker .tm_pb_sticker_text",
					),
				),
			),
			'background' => array(
				'use_background_image' => false,
				'css' => array(
					'main' => "{$this->main_css_element}.tm_pb_pricing_table",
				),
				'settings' => array(
					'color' => 'alpha',
				),
			),
			'button' => array(
				'button' => array(
					'label' => esc_html__( 'Button', 'power-builder' ),
					'css'      => array(
						'main' => "{$this->main_css_element} .tm_pb_button",
					),
				),
			),
		);

		$this->custom_css_options = array(
			'pricing_heading' => array(
				'label'    => esc_html__( 'Pricing Heading', 'power-builder' ),
				'selector' => '.tm_pb_pricing_heading',
			),
			'pricing_title' => array(
				'label'    => esc_html__( 'Pricing Title', 'power-builder' ),
				'selector' => '.tm_pb_pricing_heading h2',
			),
			'pricing_subtitle' => array(
				'label'    => esc_html__( 'Pricing Subtitle', 'power-builder' ),
				'selector' => '.tm_pb_pricing_heading .tm_pb_best_value',
			),
			'pricing_top' => array(
				'label'    => esc_html__( 'Pricing Top', 'power-builder' ),
				'selector' => '.tm_pb_pricing_content_top',
			),
			'price' => array(
				'label'    => esc_html__( 'Price', 'power-builder' ),
				'selector' => '.tm_pb_tm_price',
			),
			'currency' => array(
				'label'    => esc_html__( 'Currency', 'power-builder' ),
				'selector' => '.tm_pb_dollar_sign',
			),
			'frequency' => array(
				'label'    => esc_html__( 'Frequency', 'power-builder' ),
				'selector' => '.tm_pb_frequency',
			),
			'pricing_content' => array(
				'label'    => esc_html__( 'Pricing Content', 'power-builder' ),
				'selector' => '.tm_pb_pricing_content',
			),
			'pricing_item' => array(
				'label'    => esc_html__( 'Pricing Item', 'power-builder' ),
				'selector' => 'ul.tm_pb_pricing li',
			),
			'pricing_item_excluded' => array(
				'label'    => esc_html__( 'Excluded Item', 'power-builder' ),
				'selector' => 'ul.tm_pb_pricing li.tm_pb_not_available',
			),
			'pricing_button' => array(
				'label'    => esc_html__( 'Pricing Button', 'power-builder' ),
				'selector' => '.tm_pb_pricing_table_button',
			),
		);
	}

	function get_fields() {
		$fields = array(
			'featured' => array(
				'label'           => esc_html__( 'Make This Table Featured', 'power-builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'basic_option',
				'options'         => array(
					'off' => esc_html__( 'No', 'power-builder' ),
					'on'  => esc_html__( 'Yes', 'power-builder' ),
				),
				'description' => esc_html__( 'Featuring a table will make it stand out from the rest.', 'power-builder' ),
			),
			'sticker' => array(
				'label'           => esc_html__( 'Use sticker', 'power-builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'basic_option',
				'options'         => array(
					'off' => esc_html__( 'No', 'power-builder' ),
					'on'  => esc_html__( 'Yes', 'power-builder' ),
				),
				'affects'           => array(
					'#tm_pb_sticker_position',
					'#tm_pb_sticker_size',
					'#tm_pb_sticker_bg_color',
					'#tm_pb_sticker_bg_image',
					'#tm_pb_sticker_use_icon',
					'#tm_pb_sticker_icon_color',
					'#tm_pb_sticker_icon_font_size',
				),
				'description' => esc_html__( 'Option determines whether or not to display the sticker', 'power-builder' ),
			),
			'sticker_position' => array(
				'label'           => esc_html__( 'Sticker position', 'power-builder' ),
				'type'            => 'select',
				'option_category' => 'configuration',
				'options'         => array(
					'top-right'  => esc_html__( 'Top right', 'power-builder' ),
					'top-center' => esc_html__( 'Top center', 'power-builder' ),
					'top-left'   => esc_html__( 'Top left', 'power-builder' ),
				),
				'description'     => esc_html__( 'Define sticker position', 'power-builder' ),
			),
			'sticker_bg_color' => array(
				'label'           => esc_html__( 'Background color', 'power-builder' ),
				'type'            => 'color-alpha',
				'description'     => esc_html__( 'Here you can define a custom color for sticker background.', 'power-builder' ),
				'depends_default' => true,
				'tab_slug'        => 'advanced',
			),
			'sticker_bg_image' => array(
				'label'              => esc_html__( 'Sticker background image', 'power-builder' ),
				'type'               => 'upload',
				'option_category'    => 'basic_option',
				'upload_button_text' => esc_attr__( 'Upload an image', 'power-builder' ),
				'choose_text'        => esc_attr__( 'Choose an Image', 'power-builder' ),
				'update_text'        => esc_attr__( 'Set As Image', 'power-builder' ),
				'description'        => esc_html__( 'Upload an image to display at the bg of sticker.', 'power-builder' ),
				'tab_slug'           => 'advanced',
			),
			'sticker_use_icon' => array(
				'label'           => esc_html__( 'Use sticker icon', 'power-builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'basic_option',
				'options'         => array(
					'off' => esc_html__( 'No', 'power-builder' ),
					'on'  => esc_html__( 'Yes', 'power-builder' ),
				),
				'affects'           => array(
					'#tm_pb_sticker_icon',
					'#tm_pb_sticker_text',
				),
				'description' => esc_html__( 'Option determines whether or not to display the sticker icon', 'power-builder' ),
			),
			'sticker_icon' => array(
				'label'               => esc_html__( 'Sticker icon', 'power-builder' ),
				'type'                => 'text',
				'option_category'     => 'basic_option',
				'class'               => array( 'tm-pb-font-icon' ),
				'renderer'            => 'tm_pb_get_font_icon_list',
				'renderer_with_field' => true,
				'description'         => esc_html__( 'Choose an icon to display with table sticker.', 'power-builder' ),
				'depends_show_if'     => 'on',
				'tab_slug'            => 'advanced',
			),
			'sticker_icon_color' => array(
				'label'           => esc_html__( 'Icon or text Color', 'power-builder' ),
				'type'            => 'color-alpha',
				'description'     => esc_html__( 'Here you can define a custom color for your icon or text.', 'power-builder' ),
				'depends_default' => true,
				'tab_slug'        => 'advanced',
			),
			'sticker_icon_font_size' => array(
				'label'           => esc_html__( 'Icon or text font size', 'power-builder' ),
				'type'            => 'range',
				'option_category' => 'basic_option',
				'tab_slug'        => 'advanced',
				'default'         => '30px',
				'range_settings' => array(
					'min'  => '1',
					'max'  => '120',
					'step' => '1',
				),
				'mobile_options'  => true,
			),
			'sticker_icon_font_size_laptop' => array(
				'type' => 'skip',
			),
			'sticker_icon_font_size_tablet' => array(
				'type' => 'skip',
			),
			'sticker_icon_font_size_phone' => array(
				'type' => 'skip',
			),
			'sticker_text' => array(
				'label'           => esc_html__( 'Sticker text', 'power-builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'depends_show_if' => 'off',
				'description'     => esc_html__( 'Define a text for the pricing sticker.', 'power-builder' ),
			),

			'title' => array(
				'label'           => esc_html__( 'Title', 'power-builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Define a title for the pricing table.', 'power-builder' ),
			),
			'subtitle' => array(
				'label'           => esc_html__( 'Subtitle', 'power-builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Define a sub title for the table if desired.', 'power-builder' ),
			),
			'currency' => array(
				'label'           => esc_html__( 'Currency', 'power-builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input your desired currency symbol here.', 'power-builder' ),
			),
			'per' => array(
				'label'           => esc_html__( 'Per', 'power-builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'If your pricing is subscription based, input the subscription payment cycle here.', 'power-builder' ),
			),
			'sum' => array(
				'label'           => esc_html__( 'Price', 'power-builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input the value of the product here.', 'power-builder' ),
			),
			'button_url' => array(
				'label'           => esc_html__( 'Button URL', 'power-builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input the destination URL for the signup button.', 'power-builder' ),
			),
			'button_text' => array(
				'label'           => esc_html__( 'Button Text', 'power-builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Adjust the text used from the signup button.', 'power-builder' ),
			),
			'content_new' => array(
				'label'           => esc_html__( 'Content', 'power-builder' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => sprintf(
					'%1$s<br/> + %2$s<br/> - %3$s',
					esc_html__( 'Input a list of features that are/are not included in the product. Separate items on a new line, and begin with either a + or - symbol: ', 'power-builder' ),
					esc_html__( 'Included option', 'power-builder' ),
					esc_html__( 'Excluded option', 'power-builder' )
				),
			),
		);
		return $fields;
	}

	function shortcode_callback( $atts, $content = null, $function_name ) {

		global $tm_pb_pricing_tables_num, $tm_pb_pricing_tables_icon;

		$this->set_vars(
			array(
				'featured',
				'sticker',
				'sticker_position',
				'sticker_bg_color',
				'sticker_bg_image',
				'sticker_use_icon',
				'sticker_icon',
				'sticker_icon_color',
				'sticker_icon_font_size',
				'sticker_icon_font_size_laptop',
				'sticker_icon_font_size_tablet',
				'sticker_icon_font_size_phone',
				'sticker_text',
				'title',
				'subtitle',
				'currency',
				'per',
				'sum',
				'button_url',
				'button_text',
				'custom_button',
				'button_icon',
				'button_icon_placement',
			)
		);

		$this->_var( 'content', $content );

		$tm_pb_pricing_tables_num++;

		$module_class = TM_Builder_Element::add_module_order_class( '', $function_name );

		$this->_var( 'module_class', $module_class );

		// Use sticker
		if ( 'on' === $this->_var( 'sticker' ) ) {

			// Background type check
			if ( '' === $this->_var( 'sticker_bg_image' ) ) {
				// Define background color
				TM_Builder_Element::set_style( $function_name, array(
					'selector'    => '%%order_class%% .tm_pb_pricing_sticker',
					'declaration' => sprintf(
						'background-color: %1$s;',
						esc_attr( $this->_var( 'sticker_bg_color' ) )
					),
				) );
			} else {
				// Define background image
				TM_Builder_Element::set_style( $function_name, array(
					'selector'    => '%%order_class%% .tm_pb_pricing_sticker',
					'declaration' => sprintf(
						'background-image: url(%1$s);',
						esc_attr( $this->_var( 'sticker_bg_image' ) )
					),
				) );
			}


			if ( 'on' === $this->_var( 'sticker_use_icon' ) ) {
				$sticker_icon = esc_attr( tm_pb_process_font_icon( $this->_var( 'sticker_icon' ) ) );
				$icon_family  = tm_builder_get_icon_family();

				$this->_var( 'sticker_icon', sprintf(
					'<span class="tm-pb-icon" data-icon="%1$s"></span>',
					$sticker_icon
				) );

			} else {
				$this->_var( 'sticker_icon', sprintf(
					'<span class="tm_pb_sticker_text">%1$s</span>',
					esc_html( $this->_var( 'sticker_text' ) )
				) );
			}

			// Icon font size
			$font_size_values = array(
				'desktop' => $this->_var( 'sticker_icon_font_size' ),
				'laptop'  => $this->_var( 'sticker_icon_font_size_laptop' ),
				'tablet'  => $this->_var( 'sticker_icon_font_size_tablet' ),
				'phone'   => $this->_var( 'sticker_icon_font_size_phone' ),
			);

			tm_pb_generate_responsive_css(
				$font_size_values,
				'%%order_class%% .tm-pb-icon, %%order_class%% .tm_pb_sticker_text',
				'font-size',
				$function_name
			);

			// Icon color
			TM_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%% .tm-pb-icon, %%order_class%% .tm_pb_sticker_text',
				'declaration' => sprintf(
					'color: %1$s;',
					esc_attr( $this->_var( 'sticker_icon_color' ) )
				),
			) );
		}

		if ( 'on' === $this->_var( 'custom_button' ) && '' !== $this->_var( 'button_icon' ) ) {
			$custom_table_icon = $this->_var( 'button_icon' );
		} else {
			$custom_table_icon = $tm_pb_pricing_tables_icon;
		}

		if ( '' !== $this->_var( 'button_url' ) && '' !== $this->_var( 'button_text' ) ) {

			$icon        = esc_attr( tm_pb_process_font_icon( $custom_table_icon ) );
			$icon_family = tm_builder_get_icon_family();

			if ( '&#x;' !== $icon && '&amp;#x;' !== $icon ) {
				$this->_var( 'icon', $icon );
			}

			if ( $icon_family ) {
				TM_Builder_Element::set_style( $function_name, array(
					'selector'    => '%%order_class%% .tm_pb_custom_button_icon:before, %%order_class%% .tm_pb_custom_button_icon:after',
					'declaration' => sprintf(
						'font-family: "%1$s" !important;',
						esc_attr( $icon_family )
					),
				) );
			}

		}

		$output = $this->get_template_part( 'pricing-table/item.php' );

		return $output;
	}

	/**
	 * Returns pricing table features list HTML-markup.
	 *
	 * @return string
	 */
	public function pricing_table_features_list() {
		return do_shortcode( tm_pb_fix_shortcodes( tm_pb_extract_items( $this->_var( 'content' ) ) ) );
	}

	/**
	 * Returns pricing table item block classes
	 *
	 * @return string
	 */
	public function pricing_table_item_classes() {

		$classes = array(
			'tm_pb_pricing_table',
			esc_attr( $this->_var( 'module_class' ) )
		);

		if ( 'off' !== $this->_var( 'featured' ) ) {
			$classes[] = 'tm_pb_featured_table';
		}

		return implode( ' ', $classes );
	}

	/**
	 * Returns pricing sticker classes
	 *
	 * @return string
	 */
	public function pricing_sticker_classes() {

		$classes = array(
			'tm_pb_pricing_sticker',
			esc_attr( 'sticker-' . $this->_var( 'sticker_position' ) )
		);

		return implode( ' ', $classes );
	}

}

new Tm_Builder_Module_Pricing_Tables_Item;
