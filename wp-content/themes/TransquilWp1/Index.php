<?php
/*
The main template file
*/

?>
<?php get_header(); ?>

<main class="container-fluid py-5">
    <div class="row">
        <div class="col-md-8">
			<?php if ( have_posts() ) : while ( have_posts() ):
			the_post(); ?>

            <div>
                <a href="<?php the_permalink(); ?>"> <!--  permalinke  پیوندهای پست ها را نشان می دهد  -->
                    <h2><?php the_title(); ?></h2>
                </a>
                <p><?php get_the_date( 'F J,Y' ); ?> by
                    <a href=""><?php the_author() ?></a></p>
                <div class="pb-2">
                    <i class="fas fa-tags"> </i>
                    <p class="d-inline"><?php the_tags( 'tagged: ', '~' ); ?></p>
                </div>
                <p><?php the_excerpt(); ?></p>

                <div class="mb-3">
                </div>
                <a href="<?php the_permalink(); ?>">
				<?php _e( "Read more...." ); ?>
                </a>
            </div>


		<?php endwhile; else : ?>

            <p> <?php _e( 'Sorry,no post matched your criteria' ) ?></p>

		<?php
		endif;
		?>
       <div>
            <nav>
                <ul class="nav">
                    <li><?php next_post_link(); ?></li>&nbsp;
                    <li><?php previous_post_link(); ?></li>
                </ul>
            </nav>
        </div>
        </div>
<!--        class="col-md-8">-->


        <!--sidebar  -->
        <aside class="col-sm-4">
		    <?php get_sidebar(); ?>
        </aside>

    </div>
    <!-- /row -->
</main>

<!-- /container -->
<!-- FOOTER SECTION -->
<?php get_footer(); ?>


<!--     علامت کولن در شرط  به معنای درست بودن شرط و قرار گرفتن کامنت  بعدی است-->

<!--the_permalink  is what wordpress called the current  URl.in Our case it will be a URl for each blogpost-->

