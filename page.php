<?php get_header(); ?>
<div class="container">
    <div class="row">
    <div class="col-lg-9">
    <div class="breadcrumbs">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <div class="id-content">
            <p class="id-content__meta">
                <span class="id-content__meta --isDate"><?php the_time('Y年m月j日') ?></span>
                <span class="id-content__meta --isCat"><?php the_category(', ') ?></span>
            </p>
            <h1 class="id-content__headline"><?php the_title(); ?></h1>
        </div>

        <div class="id-content">
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>