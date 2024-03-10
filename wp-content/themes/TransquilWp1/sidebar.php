<?php ?>
<div class="py-3">
    <h2 class="font-italic">About</h2>
    <p class="pb-0">Wellcome to the official Tranquil Spa blog. Here you will find all the latest news and what's going on here at the spa</p>
</div>
<div class="py-3">
    <h2 class="font-italic">Archieve</h2>
    <ol class="list-unstyled mb-0">
        <!--        <li><a href="">June 2019</a></li>-->
        <!--        <li><a href="">July 2019</a></li>-->
        <!--        <li><a href="">August 2019</a></li>-->
		<?php
		wp_get_archives();
		?>
    </ol>
</div>
<div class="py-3">
    <h2 class="font-italic">Categories</h2>
    <ol class="list-unstyled mb-0">
        <!--        <li><a href="">Mews</a></li>-->
        <!--        <li><a href="">Offers</a></li>-->
		<?php
		wp_list_categories('title_li=');
		?>
    </ol>
</div>
<div class="py-3">
    <h2 class="font-italic">Follow us</h2>
    <i class="fab fa-facebook-square fa-2x"></i>
    <i class="fab fa-twitter-square fa-2x"></i>
    <i class="fab fa-instagram fa-2x"></i>
    <i class="fab fa-pinterest-square fa-2x"></i>
</div>
