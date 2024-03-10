<?php
/*
The template for displaying the footer

*/
?>

<footer>

    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-md-4">
                <h5>Stay Connected</h5>
                <form>
                    <div class="row">
                        <div class="col-md-8">

                            <label>
                                <input type="email" class="form-control" placeholder="Email address">
                            </label>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">Sign up
                                <i class="fas fa-angle-double-right"></i>
                            </button>


                        </div>

                    </div>
                </form>
                <!-- Social media icons -->
                <div class="text-start">
                    <i class="fab fa-facebook-square fa-2x"></i>
                    <i class="fab fa-twitter-square fa-2x"></i>
                    <i class="fab fa-instagram fa-2x"></i>
                    <i class="fab fa-pinterest-square fa-2x"></i>
                </div>

            </div>
            <div class="col-md-4">
                <h5>
                    out setting
                </h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae sit, ducimus nulla placeat
                    necessitatibus eveniet dolorem ut odit aliquam obcaecati, temporibus consequuntur odio, molestiae
                    minima? Totam porro deleniti deserunt dolores!
                </p>
            </div>
            <div class="col-md-4">
                <h5>Navigation</h5>
                <ul class="list-group">
                    <li class="list-group-item"><a href="blog.html">Blog</a></li>
                    <li class="list-group-item"><a href="Contact.html">Contact Us</a></li>
                                     <li class="list-group-item"><a href="Privacy.html">Privacy Policy </a> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="justify-content-center navbar-expand-md">
	<?php

	wp_nav_menu( array(
		'theme_location'  => 'footer',
		'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
		'container'       => 'div',
		'container_class' => 'collapse navbar-collapse justify-content-end',
		'container_id'    => 'navbarNav',
	'menu_class'      => ' navbar-nav' ,
		'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
//        'walker'          => new WP_Bootstrap_Navwalker(),
	) );
	?>
    </div>

</footer>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<!--<script src="--><?php //echo get_template_directory_uri(); ?><!--/Js/bootstrap.bundle.min.js "></script>-->

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src=" https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js " integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p " crossorigin="anonymous "></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js " integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF " crossorigin="anonymous "></script>
-->

<?php wp_footer(); ?>
<!--  این برای تزریق اسگریپت ها و لینک ها به فوتر بکار می رود مانند تابع wp-head() است -->
