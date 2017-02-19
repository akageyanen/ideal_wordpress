<?php get_header(); ?>
<div class="container">
    <div class="row">
    <div class="col-lg-9">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-lg-6 col-md-7 col-sm-6'">
            <a href="<?php the_permalink() ?>">
            <figure class="id-thumb">
                <?php the_post_thumbnail( 'full', array('class' => 'img-responsive') ); ?>
                <div class="id-thumb mask">
                    <div class="id-thumb caption">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/search_icon.png" alt="">
                        <p>つづきを読む</p>
                    </div>
                </div>
            </figure>
            </a>
            <div class="id-box matchHeight">
                <figcaption class="id-thumb__caption"><?php the_title(); ?></figcaption>
                <ul class="id-box__detail">
                    <li class="id-box__detail--category"><?php the_category(', ') ?></li>
                    <li class="id-box__detail--date"><?php the_date() ?></li>
                </ul>
            </div>
        </div>

        <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>

        <!--ページャー-->
        <nav>
            <?php
                //Pagenation 
                if (function_exists("pagination")) {
                    pagination($additional_loop->max_num_pages);
                }
            ?>
        </nav>
        <!--/ページャー-->
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>