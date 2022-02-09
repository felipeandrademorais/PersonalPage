<?php 

function wp_portifolio_customizer( $wp_customize ) {

    $wp_customize->add_panel('home_panel',array(
		'title' => 'Portifolio',
		'description' => 'Alterar conteúdo da pagina',
		'priority' => 10,
	));
 	
	/**
	 * 
	 * 	Seção Home
	 * 
	 */
    $wp_customize->add_section(
		'set_home_section',
		array(
			'title' => __('Home'),
			'panel' => 'home_panel'
        ),
	);

	//Primeira Linha
	$wp_customize->add_setting(
		'set_primeira_linha',
		array(
			'type' => 'theme_mod',
			'default' => "Hi, I'm"
		)
	);

	$wp_customize->add_control(
		'set_primeira_linha',
		  array(
			'label' => ('Informe o texto da primeira linha da seção Home'),
			'section' => 'set_home_section',
			'type' => 'text'
		)
	);

	//Segunda Linha
	$wp_customize->add_setting(
		'set_segunda_linha',
		array(
			'type' => 'theme_mod',
			'default' => "Felipe Morais."
		)
	);

	$wp_customize->add_control(
		'set_segunda_linha',
		  array(
			'label' => ('Informe o texto da segunda linha da seção Home'),
			'section' => 'set_home_section',
			'type' => 'text'
		)
	);

	//Terceira Linha
	$wp_customize->add_setting(
		'set_terceira_linha',
		array(
			'type' => 'theme_mod',
			'default' => "Full Stack Developer."
		)
	);

	$wp_customize->add_control(
		'set_terceira_linha',
		  array(
			'label' => ('Informe o texto da terceira linha da seção Home'),
			'section' => 'set_home_section',
			'type' => 'text'
		)
	);

	/**
	 * 
	 * 	Seção About
	 * 
	 */
    $wp_customize->add_section(
		'set_about_section',
		array(
			'title' => __('About'),
			'panel' => 'home_panel'
        ),
	);

	//Titulo
	$wp_customize->add_setting(
		'set_about_title',
		array(
			'type' => 'theme_mod',
			'default' => "Olá, Tudo Bem?"
		)
	);

	$wp_customize->add_control(
		'set_about_title',
		  array(
			'label' => ('Informe o título da seção About'),
			'section' => 'set_about_section',
			'type' => 'text'
		)
	);

	//Descrição
	$wp_customize->add_setting(
		'set_about_description',
		array(
			'type' => 'theme_mod',
			'default' => "Me chamo Felipe Morais, sou formado em Engenharia da Computação desde 2021. Atualmente trabalho como programador Full Stack PHP. Apaixonado por tecnologia, sempre gostei de aprender coisas novas e de criar projetos aprimorando minha criatividade. Hoje, utilizo a programação como uma forma de criar, inovar e melhorar a vida das pessoas."
		)
	);

	$wp_customize->add_control(
		'set_about_description',
		  array(
			'label' => ('Informe o texto da seção About'),
			'section' => 'set_about_section',
			'type' => 'textarea'
		)
	);

	//About Image
	$wp_customize->add_setting(
		'set_about_img',
		array(
			//default value
		)
	);

	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control(
		$wp_customize,
		'set_about_img',
		array(
			'label' => __('Imagem Sobre'),
			'settings' => 'set_about_img',
			'section'   => 'set_about_section',
            'width'=>300,
			'height'=>400, 
		)
	));

	/**
	 * 
	 * 	Seção Projects
	 * 
	 */
    $wp_customize->add_section(
		'set_projects_section',
		array(
			'title' => __('Projects'),
			'panel' => 'home_panel'
        ),
	);

	//Titulo
	$wp_customize->add_setting(
		'set_projects_title',
		array(
			'type' => 'theme_mod',
			'default' => "Projetos que desenvolvi"
		)
	);

	$wp_customize->add_control(
		'set_projects_title',
		  array(
			'label' => ('Informe o título da seção Projects'),
			'section' => 'set_projects_section',
			'type' => 'text'
		)
	);

	/**
	 * 
	 * 	Seção Skills
	 * 
	 */
    $wp_customize->add_section(
		'set_skills_section',
		array(
			'title' => __('Skills'),
			'panel' => 'home_panel'
        ),
	);

	//Titulo
	$wp_customize->add_setting(
		'set_skills_title',
		array(
			'type' => 'theme_mod',
			'default' => "Meus Conhecimentos"
		)
	);

	$wp_customize->add_control(
		'set_skills_title',
		  array(
			'label' => ('Informe o título da seção skills'),
			'section' => 'set_skills_section',
			'type' => 'text'
		)
	);

	/**
	 * 
	 * 	Seção Footer
	 * 
	 */
    $wp_customize->add_section(
		'set_footer_section',
		array(
			'title' => __('Footer'),
			'panel' => 'home_panel'
        ),
	);

	//copyright
	$wp_customize->add_setting(
		'set_copyright',
		array(
			'type' => 'theme_mod',
			'default' => "© 2022 felipemorais.info"
		)
	);

	$wp_customize->add_control(
		'set_copyright',
		  array(
			'label' => ('Informe copyright a ser exibido no footer'),
			'section' => 'set_footer_section',
			'type' => 'text'
		)
	);

	//Logo
	$wp_customize->add_setting(
		'set_logo',
		array(
			//default value
		)
	);

	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control(
		$wp_customize,
		'set_logo',
		array(
			'label' => __('Logo'),
			'settings'  => 'set_logo',
			'section'   => 'set_footer_section',
			'height'=>60, 
            'width'=>60
		)
	));

	/**
	 * 
	 * 	Seção Contact
	 * 
	 */
    $wp_customize->add_section(
		'set_contact_section',
		array(
			'title' => __('Contact'),
			'panel' => 'home_panel'
        ),
	);

	//Contact ID
	$wp_customize->add_setting(
		'set_contact_title',
		array(
			'type' => 'theme_mod',
			'default' => "Vamos Conversar?"
		)
	);

	$wp_customize->add_control(
		'set_contact_title',
		  array(
			'label' => __('Titulo da seção Contato'),
			'section' => 'set_contact_section',
			'type' => 'text'
		)
	);

	//Contact ID
	$wp_customize->add_setting(
		'set_contact_form',
		array(
			'type' => 'theme_mod',
			'default' => "93"
		)
	);

	$wp_customize->add_control(
		'set_contact_form',
		  array(
			'label' => __('Informe o ID do formulário de contato'),
			'section' => 'set_contact_section',
			'type' => 'text'
		)
	);

	//Logo
	$wp_customize->add_setting(
		'set_contact_img',
		array(
			//default value
		)
	);

	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control(
		$wp_customize,
		'set_contact_img',
		array(
			'label' => __('Imagem Contato'),
			'settings'  => 'set_contact_img',
			'section'   => 'set_contact_section',
            'width'=>300,
			'height'=>400, 
		)
	));



}

add_action( 'customize_register', 'wp_portifolio_customizer' );