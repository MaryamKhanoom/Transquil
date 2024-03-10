
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
//**   تابعی که بلافاصله که قالب بارگزاری می شود راه می افتد و عملکردها و توابعی را اجرا می کند مانند فهرست ها */
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
        'primary'=>__('Main header Menu','TransquilWP1')
    ) );
}

add_action('after_setup_theme','transquilwp_setup');

    function new_excerp_text(): string
    {
        return '...';
    }
    add_filter('excerpt_more','new_excerp_text');

//    add_theme_support( 'menus' );
//
//function register_my_menus() {
//    register_nav_menus(
//        array(
//            'top-menu' => __( 'منو ناوبری اصلی' ),
//
//        )
//    );
//}
//add_action( 'init', 'register_my_menus' );


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
//*/


//function register_nav()
//{
//
//    register_nav_menu(array('top_menu'=>__('main menu'),'footer_menu'=>__('footer menu')
//        ));
//}

//add_action('init','register_nav');
/*      after_setup_theme  یک قلاب است که بعد از هر بارگزاری صحفه اجرا می شود زمانی که قالب مقدار دهی اولیه می شود قبل از بارگزاری
پایه انجام می شود */
/* wp_enqueue_scripts  یک قلاب است که برای به صف کردن اسکریپت ها و استایل ها استفاده می شود */

?>

<!--developer.wordpress.org/reference-->
<!--hook allows you to hooke in the rest of wordpress alones prone a Action or a filter-->

