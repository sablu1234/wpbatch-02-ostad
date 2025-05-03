<?php

new \Kirki\Panel(
	'techub_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Techub Options', 'kirki' ),
		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
	]
);

// section 01
new \Kirki\Section(
	'techub_header_section',
	[
		'title'       => esc_html__( 'Header Info', 'kirki' ),
		'description' => esc_html__( 'My Header Section Description.', 'kirki' ),
		'panel'       => 'techub_panel',
		'priority'    => 160,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'address_text',
		'label'    => esc_html__( 'Address Text', 'kirki' ),
		'section'  => 'techub_header_section',
		'default'  => esc_html__( ' Manchester 21, Zurich, CH ', 'kirki' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'address_url',
		'label'    => esc_html__( 'Address URL', 'kirki' ),
		'section'  => 'techub_header_section',
		'default'  => esc_html__( '#', 'kirki' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'email_address',
		'label'    => esc_html__( 'Email ID', 'kirki' ),
		'section'  => 'techub_header_section',
		'default'  => esc_html__( 'techub@gmail.com', 'kirki' ),
		'priority' => 10,
	]
);

// social section
new \Kirki\Section(
	'techub_header_social_section',
	[
		'title'       => esc_html__( 'Header Social', 'kirki' ),
		'description' => esc_html__( 'My Header social info.', 'kirki' ),
		'panel'       => 'techub_panel',
		'priority'    => 160,
	]
);


new \Kirki\Field\Text(
	[
		'settings' => 'header_facebook_url',
		'label'    => esc_html__( 'Facebook URL', 'kirki' ),
		'section'  => 'techub_header_social_section',
		'default'  => esc_html__( '#', 'kirki' ),
		'priority' => 10,
	]
);	
new \Kirki\Field\Text(
	[
		'settings' => 'header_instagram_url',
		'label'    => esc_html__( 'Instagrame URL', 'kirki' ),
		'section'  => 'techub_header_social_section',
		'default'  => esc_html__( '#', 'kirki' ),
		'priority' => 10,
	]
);	
new \Kirki\Field\Text(
	[
		'settings' => 'header_twitter_url',
		'label'    => esc_html__( 'Twiter URL', 'kirki' ),
		'section'  => 'techub_header_social_section',
		'default'  => esc_html__( '#', 'kirki' ),
		'priority' => 10,
	]
);	
new \Kirki\Field\Text(
	[
		'settings' => 'header_pinterest_url',
		'label'    => esc_html__( 'Pinterest URL', 'kirki' ),
		'section'  => 'techub_header_social_section',
		'default'  => esc_html__( '#', 'kirki' ),
		'priority' => 10,
	]
);	