<?php
/*
* Function definition for Tranquil spa theme

*/
?>
<?php

/*   این ویژگی ماکزیمم مقدار محتوا را برای قالب ما چک می کند  مثلا اندازه عکس در پست ها بر حسب پیکسل*/
if(! isset($content_width))
{
    $content_width=660;
    /* content_width همچننین یک روش دسترسی به پلاگین هاست که کمک می کند که قالب ما با هر پلاگینی که نصب می شود متمرکز شود */

}
function transquilwp_setup()
{
    add_theme_support('automatic-feed-links');
    /*    برای تبت توابع مثلا تعذیه خودکار پیوندها */
    add_theme_support('title-tag');
    /**
     * Register Custom Navigation Walker
     */
    require_once get_template_directory() .'/class-wp-bootstrap-navwalker.php';
    register_nav_menus(array(
        'primary'=>__('Main header Menu','TransquilWP1'),
        'top'=>__('Top Menu','TransquilWP1'),
        'footer'=>__('Footer Menu','TransquilWP1')
    ) );
}

add_action('after_setup_theme','transquilwp_setup');


function Transquil_script()
{
    /* Add Style */
    wp_enqueue_style('Bootstrap-core',get_template_directory_uri().'/Css/bootstrap.min.css',false);
    wp_enqueue_style('fontawesome',get_template_directory_uri().'/Css/fontawesome-free-5.15.3-web/css/all.min.css',false);
    wp_enqueue_style('custom',get_template_directory_uri().'/style.css',false);

    wp_enqueue_script('bootstrap_js',get_template_directory_uri().'/Js/bootstrap.min.js',array('Jquery'),null,true);
    wp_enqueue_script('bundle_js',get_template_directory_uri().'/Js/bootstrap.bundle.min.js',array('Jquery'),null,true);

}
add_action('wp_enqueue_scripts','Transquil_script');


function new_excerp_text(): string
{
    return '...';
}
add_filter('excerpt_more','new_excerp_text');

function featuretxt() {
	if ( is_front_page() ) {
		_e( "FULL RESPONSIVE<br> PAPREMIUM SPA THEME<br> FOR WORDPRESS" );
	} elseif (is_home() || is_single()) {  // home means index.php
		_e( "TRANSQUIL SPA <br> OFFICE BLOG" );
	}
	else
	{
		_e( "FULL RESPONSIVE<br> PAPREMIUM SPA THEME<br> FOR WORDPRESS" );
	}
}
///index.php/%year%/%monthnum%/%day%/%postname%/

