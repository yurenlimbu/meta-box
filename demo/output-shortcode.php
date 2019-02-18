<?php
add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );
function your_prefix_register_meta_boxes( $meta_boxes ) {
	$meta_boxes[] = array (
		'title' => 'demo attribute',
		'id' => 'demo-attribute',
		'post_types' => array(
			0 => 'post',
		),
		'context' => 'normal',
		'priority' => 'high',
		'fields' => array(
			array (
				'id' => 'text_1',
				'type' => 'text',
				'name' => 'Text Field',
			),
			array (
				'id' => 'text_clone',
				'type' => 'text',
				'name' => 'Text Clone',
				'clone' => 1,
			),
			array (
				'id' => 'image_advanced_3',
				'type' => 'image_advanced',
				'name' => 'Image Advanced',
				'max_file_uploads' => 4,
				'image_size' => 'thumbnail',
			),
			array (
				'id' => 'taxonomy_advanced_4',
				'type' => 'taxonomy_advanced',
				'name' => 'Taxonomy Advanced Field',
				'taxonomy' => 'category',
				'field_type' => 'select',
				'clone' => 1,
			),
			array (
				'id' => 'oembed_6',
				'type' => 'oembed',
				'name' => 'oEmbed Field',
				'desc' => 'oEmbed description',
			),
			array (
				'id' => 'autocomplete_7',
				'type' => 'autocomplete',
				'name' => 'Auto Complete Field',
				'options' => array(
					'java' => 'java',
					'javascript' => 'javascript',
					'php' => 'php',
					'cplusplus' => 'C++',
				),
				'multiple' => true,
				'clone' => 1,
			),
			array (
				'id' => 'background_8',
				'type' => 'background',
				'name' => 'Background Field',
				'clone' => 1,
			),
		),
	);
	return $meta_boxes;
}