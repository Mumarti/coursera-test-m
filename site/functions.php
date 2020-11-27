<?php

function curriculum_theme_support(){
	
	
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'f5efe0',
		)
	);
		
	add_theme_support( 'post-thumbnails' );
	
	set_post_thumbnail_size( 1200, 9999 );
	
		add_theme_support(
		'custom-logo',
		array(
			'height'      => 90,
			'width'       => 120,
		)
	);
	
	add_theme_support( 'title-tag' );
	
}

add_action( 'after_setup_theme', 'curriculum_theme_support' );

//funzione per richiamare il file di style
function curriculum_theme_name_scripts() { 
wp_enqueue_style( 'curriculum', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'curriculum_theme_name_scripts');

//MENU
function curriculum_menu() {
	
	$locations = array(
	
	'primary'=>__('Menu Header', 'curriculum'),
	
	);
	register_nav_menus($locations);
}
add_action('init', 'curriculum_menu');

function curriculum_footer_menu() {
	
	$locations = array(
	
	'footer'=>__('Menu Footer', 'curriculum'),
	
	);
	register_nav_menus($locations);
}
add_action('init', 'curriculum_footer_menu');

//areapersonale

function areapersonale($wp_customize){
	//PANNELLO
	$wp_customize -> add_panel(
	'id_opzioni_area_personale', array(
	'title' =>__('Opzioni Area Personale', 'curriculum'),
	'priority' => 40
	));
	
	$wp_customize -> add_section('id_section_personale',
    array(
	'panel' => 'id_opzioni_area_personale',
	'title' => __('Opzioni Area Personale', 'curriculum'),
	'priority' => 10
	));	
    $wp_customize -> add_setting('id_setting_foto_personale',
		array(
		'default' => '',
		'transport' => 'refresh'
		));
	$wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 
		'id_setting_foto_personale', array(
		'label' => 'Inserisci Immagine',
		'description' => 'Descrizione',
        'section' => 'id_section_personale',
        'button_labels' => array(
		'select' => 'Seleziona Immagine',
		'change' => 'Cambia Immagine',
		'remove' => 'Elimina Immagine',
		'default' => 'Defult',
		'placeholder' => 'Nessuna Immagine Selezionata',
		'frame_title' => 'Seleziona Immagine',
		'frame_button'=> 'Scegli Immagine'
		),		
		)));
	$wp_customize -> add_setting('id_setting_nome',
	array(
	'default' => '',
	'transport' => 'refresh'
	));
	
	$wp_customize -> add_control('id_setting_nome',
	array(
	'label' => 'Nome',
	'description' => 'Descrizione',
	'section' => 'id_section_personale',
	'type' => 'text', 
	'priority' => 10
	));
	
	$wp_customize -> add_setting('id_setting_indirizzo',
	array(
	'default' => '',
	'transport' => 'refresh'
	));
	
	$wp_customize -> add_control('id_setting_indirizzo',
	array(
	'label' => 'Indirizzo',
	'description' => 'Descrizione',
	'section' => 'id_section_personale',
	'type' => 'text', 
	'priority' => 20
	));
	
	$wp_customize -> add_setting('id_setting_città',
	array(
	'default' => '',
	'transport' => 'refresh'
	));
	
	$wp_customize -> add_control('id_setting_città',
	array(
	'label' => 'Città',
	'description' => 'Descrizione',
	'section' => 'id_section_personale',
	'type' => 'text', 
	'priority' => 20
	));
	
	$wp_customize -> add_setting('id_setting_cellulare',
	array(
	'default' => '',
	'transport' => 'refresh'
	));
	
	$wp_customize -> add_control('id_setting_cellulare',
	array(
	'label' => 'Cellulare',
	'description' => 'Descrizione',
	'section' => 'id_section_personale',
	'type' => 'text', 
	'priority' => 30
	));
	
	$wp_customize -> add_setting('id_setting_email',
	array(
	'default' => '',
	'transport' => 'refresh'
	));
	
	$wp_customize -> add_control('id_setting_email',
	array(
	'label' => 'Email',
	'description' => 'Descrizione',
	'section' => 'id_section_personale',
	'type' => 'text', 
	'priority' => 40
	));
	
	$wp_customize -> add_setting('id_setting_descrizione',
	array(
	'default' => '',
	'transport' => 'refresh'
	));
	
	$wp_customize -> add_control('id_setting_descrizione',
	array(
	'label' => 'Breve descrizione',
	'description' => 'Descrizione',
	'section' => 'id_section_personale',
	'type' => 'textarea', 
	'priority' => 50
	));
	
//SEZIONE COLORE COLONNA
$wp_customize -> add_section('id_sezione_color_panel',
    array(
	'panel' => 'id_opzioni_area_personale',
	'title' => __('Colore colonna', 'curriculum'),
	'priority' => 30
	));	
$wp_customize -> add_setting('id_setting_color_panel',
array(
'default'=>'#000000',
'transport'=>'refresh'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'id_setting_color_panel',
array(
'label'=>'Colore per il pannello CV',
'description'=>'Descrizione',
'section'=>'id_sezione_color_panel',
'position'=>10
)));
	
	//SEZIONE Icone social
    $wp_customize -> add_section('id_sezione_icone',
    array(
	'panel' => 'id_opzioni_area_personale',
	'title' => __('Icone Social', 'curriculum'),
	'priority' => 20
	));	
    //LINKEDIN
	$wp_customize -> add_setting('id_setting_linkedin',
	array(
	'default' => '',
	'transport' => 'refresh'
	));
	
	$wp_customize -> add_control('linkedin',
	array(
	'label' => 'Linkedin',
	'description' => 'Inserisci link',
	'section' => 'id_sezione_icone',
	'settings' => 'id_setting_linkedin',
	'type' => 'url', 
	'priority' => 10
	));
   
    //GITHUB
	$wp_customize -> add_setting('id_setting_github',
	array(
	'default' => '',
	'transport' => 'refresh'
	));
	
	$wp_customize -> add_control('github',
	array(
	'label' => 'Github',
	'description' => 'Inserisci link',
	'section' => 'id_sezione_icone',
	'settings' => 'id_setting_github',
	'type' => 'url', 
	'priority' => 20
	));
	
	//TWITTER
	$wp_customize -> add_setting('id_setting_twitter',
	array(
	'default' => '',
	'transport' => 'refresh'
	));
	
	$wp_customize -> add_control('twitter',
	array(
	'label' => 'Twitter',
	'description' => 'Inserisci link',
	'section' => 'id_sezione_icone',
	'settings' => 'id_setting_twitter',
	'type' => 'url', 
	'priority' => 30
	));
	
    //FACEBOOK
	$wp_customize -> add_setting('id_setting_facebook',
	array(
	'default' => '',
	'transport' => 'refresh'
	));
	
	$wp_customize -> add_control('facebook',
	array(
	'label' => 'Facebook',
	'description' => 'Inserisci link',
	'section' => 'id_sezione_icone',
	'settings' => 'id_setting_facebook',
	'type' => 'url', //è il type del imput
	'priority' => 40
	));
		
}
add_action('customize_register', 'areapersonale');

//METABOX
function calendario (){
	add_meta_box(
	'calendario_id',
	'Calendario',
	'funzione_grafica',
	'post'
	);
}
add_action('add_meta_boxes','calendario');

function funzione_grafica($post){
	$value_inizio=get_post_meta($post->ID,
	'_calendario_inizio_meta_key', true);
	$value_fine = get_post_meta($post->ID, 
	'_calendario_fine_meta_key',true);
?>
<div>
<label for="calendarioinizio">INIZIO</label><br>
<input type="date" id="calendarioinizio" name="calendarioinizio" value="<?php echo $value_inizio?>" placeholder="<?php echo$value_inizio?>">
</div>
<div>
<label for="calendariofine">FINE</label><br>
<input type="date" id="calendariofine" name="calendariofine" value="<?php echo $value_fine?>" placeholder="<?php echo$value_fine?>">
</div>
<?php
}
function funzione_calendario_save ($post_id){
	if(array_key_exists('calendarioinizio',$_POST)) {update_post_meta($post_id,'_calendario_inizio_meta_key',$_POST['calendarioinizio']
	);
	}
	if(array_key_exists('calendariofine',$_POST)) {update_post_meta($post_id,'_calendario_fine_meta_key',$_POST['calendariofine']
	);
	}
}
add_action('save_post','funzione_calendario_save');

//METABOX TESTO
function boxtesto (){
	add_meta_box(
	'boxtesto_id',
	'Boxtesto',
	'funzione_grafica_boxtesto',
	'page'
	);
}
add_action('add_meta_boxes','boxtesto');

function funzione_grafica_boxtesto($post){
$value_testo=get_post_meta($post->ID,
'_testo_meta_key', true);
	
?>
<div>
<label for="boxtesto">BOXTESTO</label><br>
<textarea id="boxtesto" name="boxtesto" value="<?php echo $value_testo?>" placeholder="<?php echo$value_testo?>" rows="10" cols="50"></textarea>
</div>

<?php
}
function funzione_boxtesto_save ($post_id){
	if(array_key_exists('boxtesto',$_POST)) {update_post_meta($post_id,'_testo_meta_key',$_POST['boxtesto']
	);
	}
}
add_action('save_post','funzione_boxtesto_save');

