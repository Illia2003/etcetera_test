<?php get_header(); ?>

<section class="row">
    <h1 class="col-4"><?= get_the_title();?></h1>
    <div class="col-8">
        <?= get_the_content();?>

        <a href="<?= home_url();?>" class="btn btn-primary">Вернуться на главную</a>
    </div>
</section>

<?php get_footer(); ?>