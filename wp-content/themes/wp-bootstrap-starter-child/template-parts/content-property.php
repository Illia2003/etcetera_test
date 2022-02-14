<?php 
$post = get_post();
?>

<section class="row">
    <h1 class="col-12"><?= $post->post_title;?></h1>
    <?php 
    $image = get_field("thumbnail", $post->ID);
    $name = get_field("house_name", $post->ID);
    
    if(!empty($image)):?>
        <img src="<?= $image?>" alt="<?= $name?>" class="img-fluid col-12">
    <?php endif;?>

    <?php if(!empty($name)):?>
        <div class="col-4">
            <h2><?= $name?></h2>
            <?php 
            $post_parent = get_post_parent();
            if($post_parent):
                $parent_name = get_field("house_name", $post_parent->ID);?>

                <a href="<?= get_permalink($post_parent->ID)?>" class="badge badge-primary"><?= (!empty($parent_name))?$parent_name:$post_parent->post__title;?></a>

            <?php endif;?>  
            
            <?php 
            $post_children = get_children([
                'post_parent' => $post->ID,
                'post_type'   => 'property',
                'numberposts' => -1,
                'post_status' => 'publish'
            ]);

            if(count($post_children)):
                foreach($post_children as $post_child):
                $child_name = get_field("house_name", $post_child->ID);?>

                <a href="<?= get_permalink($post_child->ID)?>" class="badge badge-primary"><?= (!empty($child_name))?$child_name:$post_child->post__title;?></a>

            <?php endforeach;
        endif;?>
        </div>
    <?php endif;?>    

    <ul class="list-group list-group-flush">
    <?php
        $address = get_field("address", $post->ID);

        if(!empty($address)):?>
            <li class="list-group-item">
                <h3>Адресс:</h3>
                <p class="text-muted"><?= $address;?></p>
            </li>
        <?php endif;?>

        <?php
            $floors_number = get_field("count_of_floors", $post->ID);

            if(!empty($floors_number)):?>
                <li class="list-group-item">
                    <h3>Колчество этажей:</h3>
                    <p class="text-muted"><?= $floors_number;?></p>
                </li>
        <?php endif;?>

        <?php
            $type = get_field("type", $post->ID);

            if(!empty($type)):?>
                <li class="list-group-item">
                    <h3>Тип строения:</h3>
                    <p class="text-muted"><?= $type;?></p>
                </li>
        <?php endif;?>

        <?php
            $environmental_friendliness = get_field("environmental_friendliness", $post->ID);

            if(!empty($environmental_friendliness)):?>
                <li class="list-group-item">
                    <h3>Экологичность:</h3>
                    <p class="text-muted"><?= $environmental_friendliness;?></p>
                </li>
        <?php endif;?>
    </ul>
</section>

<section class="row">
    <?php $room = get_field("room", $post->ID);?>

    <?php if(!empty($room)):?>
        <div class="col-4">
            <h2>Помещение</h2>
        </div>

        <div class="col-8">
            <?php if(!empty($room['image'])):?>
                <img src="<?= $room['image']?>" alt="Room">
            <?php endif;?>

            <ul class="list-group list-group-flush">
                <?php
                    if(!empty($room['square'])):?>
                        <li class="list-group-item">
                            <h3>Площадь:</h3>
                            <p class="text-muted"><?= $room['square'];?></p>
                        </li>
                    <?php endif;?>

                    <?php
                        if(!empty($room['count_of_rooms'])):?>
                            <li class="list-group-item">
                                <h3>Колчество комнат:</h3>
                                <p class="text-muted"><?= $room['count_of_rooms'];?></p>
                            </li>
                    <?php endif;?>

                    <?php
                        if(!empty($room['balcone'])):?>
                            <li class="list-group-item">
                                <h3>Балкон:</h3>
                                <p class="text-muted"><?= $room['balcone'];?></p>
                            </li>
                    <?php endif;?>

                    <?php
                        if(!empty($room['bathroom'])):?>
                            <li class="list-group-item">
                                <h3>Ванная:</h3>
                                <p class="text-muted"><?= $room['bathroom'];?></p>
                            </li>
                <?php endif;?>
            </ul>

            <a href="<?= home_url();?>" class="btn btn-primary">
                Вернуться на главную
            </a>
        </div>

    <?php endif;?>
</section>