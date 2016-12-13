<?php
/**
 * acf-setup.php
 *
 * @package _s
 */

if ( WP_LOCAL_DEV ) {
  return;
}

// hide field group menu from users
if ( wp_get_current_user()->user_login !== 'sean' ) {
  define( 'ACF_LITE' , true );
}

/*
ACF field groups
 */
// export field export code here:
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_5839e7a01c990',
	'title' => 'FAQs Page Fields',
	'fields' => array (
		array (
			'sub_fields' => array (
				array (
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'key' => 'field_584ff9fd2c365',
					'label' => 'Section Title',
					'name' => 'section_title',
					'type' => 'text',
					'instructions' => 'Enter a title for the FAQs section.',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
				),
				array (
					'tabs' => 'all',
					'toolbar' => 'basic',
					'media_upload' => 0,
					'default_value' => '',
					'delay' => 0,
					'key' => 'field_584ffa352c366',
					'label' => 'Section Text',
					'name' => 'section_text',
					'type' => 'wysiwyg',
					'instructions' => 'Add some intro text for the section.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
				),
				array (
					'sub_fields' => array (
						array (
							'default_value' => '',
							'maxlength' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'key' => 'field_584ff9b02c363',
							'label' => 'Question',
							'name' => 'question',
							'type' => 'text',
							'instructions' => 'Add question text here.',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
						),
						array (
							'default_value' => '',
							'new_lines' => 'wpautop',
							'maxlength' => '',
							'placeholder' => '',
							'rows' => '',
							'key' => 'field_584ff9c42c364',
							'label' => 'Answer',
							'name' => 'answer',
							'type' => 'textarea',
							'instructions' => 'Add answer text here.',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
						),
					),
					'min' => 0,
					'max' => 0,
					'layout' => 'row',
					'button_label' => 'Add FAQ',
					'collapsed' => '',
					'key' => 'field_584ff97f2c362',
					'label' => 'FAQs',
					'name' => 'faqs',
					'type' => 'repeater',
					'instructions' => 'Add a question and answer by clicking "Add FAQ" below.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
				),
			),
			'min' => 1,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Add Section',
			'collapsed' => '',
			'key' => 'field_584ff9402c361',
			'label' => 'FAQ Sections',
			'name' => 'faq_sections',
			'type' => 'repeater',
			'instructions' => 'Add FAQ sections by clicking "Add Section" below.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-templates/faqs-page.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_585027767e951',
	'title' => 'Highlight Page Fields',
	'fields' => array (
		array (
			'sub_fields' => array (
				array (
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'key' => 'field_5850277681c7f',
					'label' => 'Section Title',
					'name' => 'section_title',
					'type' => 'text',
					'instructions' => 'Enter a title for the FAQs section.',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
				),
				array (
					'tabs' => 'all',
					'toolbar' => 'basic',
					'media_upload' => 0,
					'default_value' => '',
					'delay' => 0,
					'key' => 'field_5850277681d49',
					'label' => 'Section Text',
					'name' => 'section_text',
					'type' => 'wysiwyg',
					'instructions' => 'Add some intro text for the section.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
				),
				array (
					'sub_fields' => array (
						array (
							'default_value' => '',
							'maxlength' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'key' => 'field_585027768812c',
							'label' => 'Highlight Headline',
							'name' => 'highlight_headline',
							'type' => 'text',
							'instructions' => 'Add highlight headline here.',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
						),
						array (
							'default_value' => '',
							'new_lines' => 'wpautop',
							'maxlength' => '',
							'placeholder' => '',
							'rows' => '',
							'key' => 'field_58502776881ee',
							'label' => 'Highlight Text',
							'name' => 'highlight_text',
							'type' => 'textarea',
							'instructions' => 'Add headline text here.',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
						),
					),
					'min' => 0,
					'max' => 0,
					'layout' => 'row',
					'button_label' => 'Add Highlight',
					'collapsed' => '',
					'key' => 'field_5850277681e08',
					'label' => 'Highlights',
					'name' => 'highlights',
					'type' => 'repeater',
					'instructions' => 'Add highlight headline and paragraphs by clicking "Add Highlight" below.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
				),
			),
			'min' => 1,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Add Section',
			'collapsed' => '',
			'key' => 'field_5850277680cb7',
			'label' => 'Highlight Sections',
			'name' => 'highlight_sections',
			'type' => 'repeater',
			'instructions' => 'Add highlight sections by clicking "Add Section" below.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-templates/highlights-page.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_5831dde590eee',
	'title' => 'Home Page Fields',
	'fields' => array (
		array (
			'layouts' => array (
				array (
					'key' => '5831ddf93bf7a',
					'name' => 'hero_section',
					'label' => 'Hero Section',
					'display' => 'block',
					'sub_fields' => array (
						array (
							'return_format' => 'array',
							'preview_size' => 'thumbnail',
							'library' => 'all',
							'min_width' => 1200,
							'min_height' => 480,
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => 'jpg,jpeg,gif,webp',
							'key' => 'field_5831de0a16386',
							'label' => 'Hero Image',
							'name' => 'hero_image',
							'type' => 'image',
							'instructions' => 'Upload an image to use for in the hero area.',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
						),
						array (
							'default_value' => '',
							'maxlength' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'key' => 'field_5831df5716387',
							'label' => 'Hero Text',
							'name' => 'hero_text',
							'type' => 'text',
							'instructions' => 'Enter some text to appear on top of the hero image. This can be a title, tagline, etc.',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
						),
					),
					'min' => '',
					'max' => '',
				),
				array (
					'key' => '5831ecbb9164b',
					'name' => 'message_section',
					'label' => 'Message Section',
					'display' => 'block',
					'sub_fields' => array (
						array (
							'default_value' => '',
							'new_lines' => 'wpautop',
							'maxlength' => '',
							'placeholder' => '',
							'rows' => 4,
							'key' => 'field_5831ecc79164c',
							'label' => 'Message Text',
							'name' => 'message_text',
							'type' => 'textarea',
							'instructions' => 'Enter message text here. This could be some welcome text, a mission statement, etc.',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
						),
					),
					'min' => '',
					'max' => '',
				),
				array (
					'key' => '583200f792312',
					'name' => 'cta_section',
					'label' => 'CTA Section',
					'display' => 'block',
					'sub_fields' => array (
						array (
							'default_value' => '',
							'maxlength' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'key' => 'field_583200ff92313',
							'label' => 'CTA Headline',
							'name' => 'cta_headline',
							'type' => 'text',
							'instructions' => 'Enter a headline for the CTA section.',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
						),
						array (
							'default_value' => '',
							'new_lines' => 'wpautop',
							'maxlength' => '',
							'placeholder' => '',
							'rows' => 5,
							'key' => 'field_5832010992314',
							'label' => 'CTA Text',
							'name' => 'cta_text',
							'type' => 'textarea',
							'instructions' => 'Add some text to appear below the headline and above the CTA links.',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
						),
						array (
							'sub_fields' => array (
								array (
									'default_value' => '',
									'maxlength' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'key' => 'field_5832014a92316',
									'label' => 'Link Text',
									'name' => 'link_text',
									'type' => 'text',
									'instructions' => 'Enter the link text.',
									'required' => 1,
									'conditional_logic' => 0,
									'wrapper' => array (
										'width' => '',
										'class' => '',
										'id' => '',
									),
								),
								array (
									'post_type' => array (
										0 => 'page',
									),
									'taxonomy' => array (
									),
									'allow_null' => 0,
									'multiple' => 0,
									'return_format' => 'object',
									'ui' => 1,
									'key' => 'field_5832016a92317',
									'label' => 'Link Page',
									'name' => 'link_page',
									'type' => 'post_object',
									'instructions' => 'Select page for CTA link to link to.',
									'required' => 1,
									'conditional_logic' => 0,
									'wrapper' => array (
										'width' => '',
										'class' => '',
										'id' => '',
									),
								),
							),
							'min' => 1,
							'max' => 3,
							'layout' => 'row',
							'button_label' => 'Add Link',
							'collapsed' => '',
							'key' => 'field_5832011d92315',
							'label' => 'CTA Links',
							'name' => 'cta_links',
							'type' => 'repeater',
							'instructions' => 'Add CTA links by clicking "Add Link" below.',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
						),
					),
					'min' => '',
					'max' => '',
				),
			),
			'min' => '',
			'max' => '',
			'button_label' => 'Add Section',
			'key' => 'field_5831dded16385',
			'label' => 'Home Sections',
			'name' => 'home_sections',
			'type' => 'flexible_content',
			'instructions' => 'Add home sections by clicking "Add Section" below.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-templates/home-page.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
	),
	'active' => 1,
	'description' => '',
	'local' => 'php',
));

acf_add_local_field_group(array (
	'key' => 'group_58327ae16f4d9',
	'title' => 'Page Title Field',
	'fields' => array (
		array (
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'field_58327af6869ce',
			'label' => 'Custom Page Title',
			'name' => 'custom_page_title',
			'type' => 'text',
			'instructions' => 'Enter a custom page title. Helpful if, for example, you want the title of the page to be "Contact" in the WordPress dashboard, but you want the page\'s <strong>h1</strong> tag to be different.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
			array (
				'param' => 'page_template',
				'operator' => '!=',
				'value' => 'page-templates/home-page.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
	'local' => 'php',
));

acf_add_local_field_group(array (
	'key' => 'group_583a569cbcc5e',
	'title' => 'Salon Page Fields',
	'fields' => array (
		array (
			'sub_fields' => array (
				array (
					'return_format' => 'array',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
					'key' => 'field_583a5d548cd1a',
					'label' => 'Bio Photo',
					'name' => 'bio_photo',
					'type' => 'image',
					'instructions' => 'Upload the bio photo here.',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
				),
				array (
					'default_value' => '',
					'new_lines' => 'wpautop',
					'maxlength' => '',
					'placeholder' => '',
					'rows' => 5,
					'key' => 'field_583a5d7d8cd1c',
					'label' => 'Bio Text',
					'name' => 'bio_text',
					'type' => 'textarea',
					'instructions' => 'Add the bio text here.',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
				),
				array (
					'library' => 'all',
					'min' => 2,
					'max' => 2,
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
					'insert' => 'append',
					'key' => 'field_583cd34b782b4',
					'label' => 'Accent Images',
					'name' => 'accent_images',
					'type' => 'gallery',
					'instructions' => 'Add accent images to appear on either side of the bio photo.',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
				),
			),
			'min' => 1,
			'max' => 1,
			'layout' => 'row',
			'button_label' => 'Add Row',
			'collapsed' => '',
			'key' => 'field_583a5d398cd19',
			'label' => 'Bio Area',
			'name' => 'bio_area',
			'type' => 'repeater',
			'instructions' => 'Add the salon owner\'s bio here.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'sub_fields' => array (
				array (
					'return_format' => 'array',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
					'key' => 'field_583cd1e7ccb1f',
					'label' => 'Stylist Photo',
					'name' => 'stylist_photo',
					'type' => 'image',
					'instructions' => 'Upload the stylist\'s photo.',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
				),
				array (
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'key' => 'field_583cd1f5ccb20',
					'label' => 'Stylist Name',
					'name' => 'stylist_name',
					'type' => 'text',
					'instructions' => 'Enter the stylist\'s name.',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
				),
			),
			'min' => 1,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Add Stylist',
			'collapsed' => '',
			'key' => 'field_583a5d9b258b3',
			'label' => 'Salon Stylists',
			'name' => 'salon_stylists',
			'type' => 'repeater',
			'instructions' => 'Add the salon\'s stylists by clicking "Add Stylist" below.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-templates/salon-page.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
	'local' => 'php',
));

acf_add_local_field_group(array (
	'key' => 'group_5839eb70b499f',
	'title' => 'Services Page Fields',
	'fields' => array (
		array (
			'sub_fields' => array (
				array (
					'return_format' => 'array',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => 250,
					'min_height' => 250,
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
					'key' => 'field_5839ecc7bc16a',
					'label' => 'Service Photo',
					'name' => 'service_photo',
					'type' => 'image',
					'instructions' => 'Upload a photo for the service.',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
				),
				array (
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'key' => 'field_5839ecabbc169',
					'label' => 'Service Name',
					'name' => 'service_name',
					'type' => 'text',
					'instructions' => 'Enter the name of the service.',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
				),
				array (
					'post_type' => array (
						0 => 'page',
					),
					'taxonomy' => array (
					),
					'allow_null' => 0,
					'multiple' => 0,
					'return_format' => 'object',
					'ui' => 1,
					'key' => 'field_583a4e76dcc82',
					'label' => 'Service Link',
					'name' => 'service_link',
					'type' => 'post_object',
					'instructions' => 'Select a page for the service to link to.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
				),
			),
			'min' => 1,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Add Row',
			'collapsed' => '',
			'key' => 'field_5839ec97bc168',
			'label' => 'Services',
			'name' => 'services',
			'type' => 'repeater',
			'instructions' => 'Add services by clicking "Add Service" below.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-templates/services-page.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
	),
	'active' => 1,
	'description' => '',
	'local' => 'php',
));

acf_add_local_field_group(array (
	'key' => 'group_58321cc4be5b9',
	'title' => 'Widget: CTA',
	'fields' => false,
	'location' => array (
		array (
			array (
				'param' => 'widget',
				'operator' => '==',
				'value' => 'cta_widget',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
	'local' => 'php',
));

acf_add_local_field_group(array (
	'key' => 'group_58321cb6e9d4c',
	'title' => 'Widget: Map',
	'fields' => false,
	'location' => array (
		array (
			array (
				'param' => 'widget',
				'operator' => '==',
				'value' => 'map_widget',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
	'local' => 'php',
));

acf_add_local_field_group(array (
	'key' => 'group_58321ca3f08c5',
	'title' => 'Widget: Social',
	'fields' => false,
	'location' => array (
		array (
			array (
				'param' => 'widget',
				'operator' => '==',
				'value' => 'social_widget',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
	'local' => 'php',
));

acf_add_local_field_group(array (
	'key' => 'group_58327ad07fafd',
	'title' => 'Page / Post Fields',
	'fields' => array (
		array (
			'tabs' => 'all',
			'toolbar' => 'basic',
			'media_upload' => 0,
			'default_value' => '',
			'delay' => 0,
			'key' => 'field_583296ec9bd50',
			'label' => 'Text CTA',
			'name' => 'text_cta',
			'type' => 'wysiwyg',
			'instructions' => 'Add CTA text in this field.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 10,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
	'local' => 'php',
));

endif;