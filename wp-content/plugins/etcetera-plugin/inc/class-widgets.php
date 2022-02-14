<?php

define("PLUGIN_PATH", plugin_dir_path( __FILE__ ));
define("PLUGIN_URL", plugin_dir_url(__FILE__));

class searchPropertyForm extends WP_Widget{

    function __construct()
    {
        parent::__construct(
            "search_property_form",
            "Фильтр объектов",
            array(
                "description" => "Выводит фильтр объектов"
            )
        );
    }

    public function widget($args, $instance)
    {
        require_once PLUGIN_PATH."/content/widgets/search-property-form.php";
    }

    public function form($instance)
    {
        if( isset($instance['title']) ){
            $title = $instance['title'];
        }

        if( isset($instance['posts_per_page']) ){
            $posts_per_page = $instance['posts_per_page'];
        }?>

        <p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Заголовок</label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'posts_per_page' ); ?>">Количество постов:</label> 
			<input id="<?php echo $this->get_field_id( 'posts_per_page' ); ?>" name="<?php echo $this->get_field_name( 'posts_per_page' ); ?>" type="text" value="<?php echo ($posts_per_page) ? esc_attr( $posts_per_page ) : '5'; ?>" size="3" />
		</p>

        <?php
    }

    public function update($new_instance, $old_instance){
        $instance = array();

        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['posts_per_page'] = ( is_numeric( $new_instance['posts_per_page'] ) ) ? $new_instance['posts_per_page'] : '5';
		
        return $instance;
    }
}

function search_property_form_load(){
    register_widget("searchPropertyForm");
}

add_action( "widgets_init", "search_property_form_load");

function elecetera_sidebars(){
    register_sidebar( array(
        'name' => 'Фильтр объектов',
        'id' => 'filter_property',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
    ));
}

add_action( "widgets_init", "elecetera_sidebars");

function elecetera_property_form_shortcode(){?>
    <div>
        <?php dynamic_sidebar("filter_property");?>
    </div>
<?php }

add_shortcode("elecetera_property", "elecetera_property_form_shortcode");