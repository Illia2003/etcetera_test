<?php 

function property_filter_handler(){
    if(isset($_POST)){
        $response = array();
        $meta_query = array(
            "relation" => "AND"
        );

        foreach($_POST as $meta_key=>$meta_value){
            if($meta_key != "action" && $meta_key != "posts_per_page" && !empty($meta_value)){
                $meta = array(
                    "key" => $meta_key,
                    "value" => $meta_value,
                    "compare_key" => "LIKE"
                );

                array_push($meta_query, $meta);
            }
        }

        $properties = new WP_Query(array(
            "post_type" => "property",
            "post_status" => "publish",
            "posts_per_page" => $_POST["posts_per_page"],
            "meta_query" => $meta_query
        ));

        if($properties->have_posts()){
            while($properties->have_posts()){
                $properties->the_post();
                
                $property_img = get_field("thumbnail", get_the_ID());
                $property_name = get_field("house_name", get_the_ID());

                $property = '<div class="card">
                <img class="card-img-top" src="'.$property_img.'" alt="'.$property_name.'">
                <div class="card-body">
                  <h5 class="card-title">'.$property_name.'</h5>
                  <p class="card-text">'.get_the_excerpt().'</p>
                  <a href="'.get_the_permalink().'" class="btn btn-primary">Посмотреть</a>
                </div>
              </div>';

              array_push($response, $property);
            }
        }

        echo json_encode($response);
    }

    wp_die();
}

add_action("wp_ajax_property_filter", "property_filter_handler");
add_action("wp_ajax_nopriv_property_filter", "property_filter_handler");