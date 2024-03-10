
<?php
/*
 The template for displaying all blog posts
 */
?>
<?php get_header(); ?>

<main class="container-fluid py-5">
    <div class="row">
        <div class="col-md-8">
			<?php if ( have_posts() ) : while ( have_posts() ):
				the_post(); ?>

                <div>
                    <h2><?php the_title(); ?></h2>

                    <p><?php get_the_date( 'F J,Y' ); ?> by
                        <a href=""><?php the_author() ?></a></p>
                    <div class="pb-2">
                        <i class="fas fa-tags"> </i>
                        <p class="d-inline"><?php the_tags( 'tagged: ', '~' ); ?></p>
                    </div>
                    <p><?php the_content();?></p>
                   <?php wp_link_pages();  ?>




                </div>
			<?php endwhile; else : ?>
                <p> <?php _e( 'Sorry,no post matched your criteria' ) ?></p>

			<?php
			endif;
			?>
	        <?php
	        //  چک می کند که آیا کامنت ها باز است یا حداقل یک کامنت وجود دارد
	        if (comments_open() || get_comments_number()):
		        //  اگر این شروط درست بود آن وقت محتوایی که می خواهیم نشان می دهد که این محتوا در comments_template است که بطور پیش فرض در فایل comments.php   می باشد
		        comments_template();
	        endif;

	        ?>
<!--            --><?php
//            //  چک می کند که آیا کامنت ها باز است یا حداقل یک کامنت وجود دارد
//            if (comments_open() || get_comments_number()):
//            //  اگر این شروط درست بود آن وقت محتوایی که می خواهیم نشان می دهد که این محتوا در comments_template است که بطور پیش فرض در فایل comments.php   می باشد
//            comments_template();
//            endif;
//
//            ?>

                <nav>
                    <ul class="nav">
                        <li><?php next_post_link(); ?>&nbsp;</li>&nbsp;
                        <li><?php previous_post_link(); ?></li>
                    </ul>
                </nav>

        </div>

        <!-- /row -->
            <aside class="col-sm-4">
                <!--sidebar  -->
		        <?php get_sidebar(); ?>
            </aside>
        </div>



</main>
<!-- /container -->
<!-- FOOTER SECTION -->
<?php get_footer(); ?>


