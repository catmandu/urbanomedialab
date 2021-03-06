<?php if(!isset($content_width)) $content_width = 640;
define('CPOTHEME_ID', 'allegiantpro');
define('CPOTHEME_NAME', 'Allegiant Pro');
define('CPOTHEME_VERSION', '1.2.2');
//Other constants
define('CPOTHEME_LOGO_WIDTH', '215');
define('CPOTHEME_USE_SLIDES', true);
define('CPOTHEME_USE_TAGLINE', true);
define('CPOTHEME_USE_FEATURES', true);
define('CPOTHEME_USE_PORTFOLIO', true);
define('CPOTHEME_USE_PRODUCTS', true);
define('CPOTHEME_USE_SERVICES', true);
define('CPOTHEME_USE_TESTIMONIALS', true);
define('CPOTHEME_USE_TEAM', true);
define('CPOTHEME_USE_CLIENTS', true);

//Load Core; check existing core or load development core
$core_path = get_template_directory().'/core/';
if(defined('CPOTHEME_CORE')) $core_path = CPOTHEME_CORE;
require_once $core_path.'init.php';

$include_path = get_template_directory().'/includes/';

//Main components
require_once($include_path.'setup.php');

// Add epsilon framework
require get_template_directory() . '/includes/libraries/epsilon-framework/class-epsilon-autoloader.php';

$epsilon_framework_settings = array(
		'controls' => array( 'toggle' ), // array of controls to load
		'sections' => array( 'recommended-actions' ), // array of sections to load
		'path'     => '/includes/libraries'
	);
new Epsilon_Framework( $epsilon_framework_settings );

// Add welcome screen
require get_template_directory() . '/core/welcome-screen/welcome-page-setup.php';