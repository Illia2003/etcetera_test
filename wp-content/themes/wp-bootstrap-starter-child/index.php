<?php get_header(); ?>
<section>
    <div class="row">
        <?php $posts = new WP_Query([
            "post_type" => "post",
            "post_status" => "publish",
            "posts_per_page" => 10
        ]);
        
        if($posts->have_posts()):
            while($posts->have_posts()): $posts->the_post();?>
            <div class="card" style="width: 18rem;">
                <?php the_post_thumbnail( "medium", array(
                    "class" => "card-img-top",
                    "alt" => get_the_title(),
                ));?>
                <div class="card-body">
                    <h5 class="card-title"><?php the_title();?></h5>
                    <p class="card-text"><?php the_excerpt();?></p>
                    <a href="<?php the_permalink();?>" class="btn btn-primary">Посмотреть</a>
                </div>
            </div>
        <?php endwhile; 
    endif;?>
    </div>
</section>
<section>
    <?php do_shortcode("[elecetera_property]");?>
</section>
<?php get_footer(); ?>