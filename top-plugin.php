<?php
/*
Plugin Name: Top Products
Description: Sidebar list of top products including previous and current prices, image and link.
*/
/* Start Adding Functions Below this Line */


// Creating the widget 
class wpb_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'wpb_widget', 

// Widget name will appear in UI
__('WPBeginner Widget', 'wpb_widget_domain'), 

// Widget description
array( 'description' => __( 'Sidebar list of top products including previous and current prices, image and link.', 'wpb_widget_domain' ), ) 
);
}

// Creating widget front-end
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );

// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) ){
	echo $args['before_title'] . $title . $args['after_title'];
}

$counter = 1;
echo "<ul class='pat-tab'>";
foreach ($instance as $value) {
	$current_url = $value['url'];
	$current_image = $value['image'];
	$current_name = $value['name'];
	$current_was = $value['was'];
	$current_now = $value['now'];


    echo "<li><div class='top-bargains-number'>$counter</div><a href='$current_url' target='_blank'><img class='sidebar-product-image' src='$current_image' alt='$current_name'></a><div class='product-container'><div class='product-link'><a href='$current_url' target='_blank'>$current_name</a></div><div class='old-price'>$current_was</div><div class='new-price'>$current_now</div></div></li>";
    $counter++;
}
echo "</ul>";
// This is where you run the code and display the output
//echo __( $title, 'wpb_widget_domain' );
echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance['item_1']) && isset ($instance['item_2'] ) && isset ($instance['item_3'] ) && isset ($instance['item_4'] ) && isset ($instance['item_5'] ) ) {
$title = $instance['item_1'][ 'title' ];
$name = $instance['item_1'][ 'name' ];
$url = $instance['item_1'][ 'url' ];
$was = $instance['item_1'][ 'was' ];
$now = $instance['item_1'][ 'now' ];
$image = $instance['item_1'][ 'image' ];

$name_2 = $instance['item_2'][ 'name' ];
$url_2 = $instance['item_2'][ 'url' ];
$was_2 = $instance['item_2'][ 'was' ];
$now_2 = $instance['item_2'][ 'now' ];
$image_2 = $instance['item_2'][ 'image' ];

$name_3 = $instance['item_3'][ 'name' ];
$url_3 = $instance['item_3'][ 'url' ];
$was_3 = $instance['item_3'][ 'was' ];
$now_3 = $instance['item_3'][ 'now' ];
$image_3 = $instance['item_3'][ 'image' ];

$name_4 = $instance['item_4'][ 'name' ];
$url_4 = $instance['item_4'][ 'url' ];
$was_4 = $instance['item_4'][ 'was' ];
$now_4 = $instance['item_4'][ 'now' ];
$image_4 = $instance['item_4'][ 'image' ];

$name_5 = $instance['item_5'][ 'name' ];
$url_5 = $instance['item_5'][ 'url' ];
$was_5 = $instance['item_5'][ 'was' ];
$now_5 = $instance['item_5'][ 'now' ];
$image_5 = $instance['item_5'][ 'image' ];
}
else {
$title = __( 'New title', 'wpb_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'name' ); ?>"><?php _e( 'Name:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'name' ); ?>" name="<?php echo $this->get_field_name( 'name' ); ?>" type="text" value="<?php echo esc_attr( $name ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'url' ); ?>"><?php _e( 'URL:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'url' ); ?>" name="<?php echo $this->get_field_name( 'url' ); ?>" type="text" value="<?php echo esc_attr( $url ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'was' ); ?>"><?php _e( 'Was:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'was' ); ?>" name="<?php echo $this->get_field_name( 'was' ); ?>" type="text" value="<?php echo esc_attr( $was ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'now' ); ?>"><?php _e( 'Now:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'now' ); ?>" name="<?php echo $this->get_field_name( 'now' ); ?>" type="text" value="<?php echo esc_attr( $now ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'image' ); ?>"><?php _e( 'Image URL:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'image' ); ?>" name="<?php echo $this->get_field_name( 'image' ); ?>" type="text" value="<?php echo esc_attr( $image ); ?>" />
</p>

<hr>
<!-- Item 2 -->
<h4>Item 2</h4>

<p>
<label for="<?php echo $this->get_field_id( 'name_2' ); ?>"><?php _e( 'Name:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'name_2' ); ?>" name="<?php echo $this->get_field_name( 'name_2' ); ?>" type="text" value="<?php echo esc_attr( $name_2 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'url_2' ); ?>"><?php _e( 'URL:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'url_2' ); ?>" name="<?php echo $this->get_field_name( 'url_2' ); ?>" type="text" value="<?php echo esc_attr( $url_2 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'was_2' ); ?>"><?php _e( 'Was:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'was_2' ); ?>" name="<?php echo $this->get_field_name( 'was_2' ); ?>" type="text" value="<?php echo esc_attr( $was_2 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'now_2' ); ?>"><?php _e( 'Now:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'now_2' ); ?>" name="<?php echo $this->get_field_name( 'now_2' ); ?>" type="text" value="<?php echo esc_attr( $now_2 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'image_2' ); ?>"><?php _e( 'Image URL:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'image_2' ); ?>" name="<?php echo $this->get_field_name( 'image_2' ); ?>" type="text" value="<?php echo esc_attr( $image_2 ); ?>" />
</p>

<hr>
<!-- Item 3 -->
<h4>Item 3</h4>

<p>
<label for="<?php echo $this->get_field_id( 'name_3' ); ?>"><?php _e( 'Name:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'name_3' ); ?>" name="<?php echo $this->get_field_name( 'name_3' ); ?>" type="text" value="<?php echo esc_attr( $name_3 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'url_3' ); ?>"><?php _e( 'URL:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'url_3' ); ?>" name="<?php echo $this->get_field_name( 'url_3' ); ?>" type="text" value="<?php echo esc_attr( $url_3 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'was_3' ); ?>"><?php _e( 'Was:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'was_3' ); ?>" name="<?php echo $this->get_field_name( 'was_3' ); ?>" type="text" value="<?php echo esc_attr( $was_3 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'now_3' ); ?>"><?php _e( 'Now:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'now_3' ); ?>" name="<?php echo $this->get_field_name( 'now_3' ); ?>" type="text" value="<?php echo esc_attr( $now_3 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'image_3' ); ?>"><?php _e( 'Image URL:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'image_3' ); ?>" name="<?php echo $this->get_field_name( 'image_3' ); ?>" type="text" value="<?php echo esc_attr( $image_3 ); ?>" />
</p>

<hr>
<!-- Item 4 -->
<h4>Item 4</h4>

<p>
<label for="<?php echo $this->get_field_id( 'name_4' ); ?>"><?php _e( 'Name:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'name_4' ); ?>" name="<?php echo $this->get_field_name( 'name_4' ); ?>" type="text" value="<?php echo esc_attr( $name_4 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'url_4' ); ?>"><?php _e( 'URL:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'url_4' ); ?>" name="<?php echo $this->get_field_name( 'url_4' ); ?>" type="text" value="<?php echo esc_attr( $url_4 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'was_4' ); ?>"><?php _e( 'Was:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'was_4' ); ?>" name="<?php echo $this->get_field_name( 'was_4' ); ?>" type="text" value="<?php echo esc_attr( $was_4 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'now_4' ); ?>"><?php _e( 'Now:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'now_4' ); ?>" name="<?php echo $this->get_field_name( 'now_4' ); ?>" type="text" value="<?php echo esc_attr( $now_4 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'image_4' ); ?>"><?php _e( 'Image URL:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'image_4' ); ?>" name="<?php echo $this->get_field_name( 'image_4' ); ?>" type="text" value="<?php echo esc_attr( $image_4 ); ?>" />
</p>

<hr>
<!-- Item 5 -->
<h4>Item 5</h4>

<p>
<label for="<?php echo $this->get_field_id( 'name_5' ); ?>"><?php _e( 'Name:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'name_5' ); ?>" name="<?php echo $this->get_field_name( 'name_5' ); ?>" type="text" value="<?php echo esc_attr( $name_5 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'url_5' ); ?>"><?php _e( 'URL:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'url_5' ); ?>" name="<?php echo $this->get_field_name( 'url_5' ); ?>" type="text" value="<?php echo esc_attr( $url_5 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'was_5' ); ?>"><?php _e( 'Was:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'was_5' ); ?>" name="<?php echo $this->get_field_name( 'was_5' ); ?>" type="text" value="<?php echo esc_attr( $was_5 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'now_5' ); ?>"><?php _e( 'Now:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'now_5' ); ?>" name="<?php echo $this->get_field_name( 'now_5' ); ?>" type="text" value="<?php echo esc_attr( $now_5 ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'image_5' ); ?>"><?php _e( 'Image URL:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'image_5' ); ?>" name="<?php echo $this->get_field_name( 'image_5' ); ?>" type="text" value="<?php echo esc_attr( $image_5 ); ?>" />
</p>

<?php
}	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['item_1']['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
$instance['item_1']['name'] = ( ! empty( $new_instance['name'] ) ) ? strip_tags( $new_instance['name'] ) : '';
$instance['item_1']['url'] = ( ! empty( $new_instance['url'] ) ) ? strip_tags( $new_instance['url'] ) : '';
$instance['item_1']['was'] = ( ! empty( $new_instance['was'] ) ) ? strip_tags( $new_instance['was'] ) : '';
$instance['item_1']['now'] = ( ! empty( $new_instance['now'] ) ) ? strip_tags( $new_instance['now'] ) : '';
$instance['item_1']['image'] = ( ! empty( $new_instance['image'] ) ) ? strip_tags( $new_instance['image'] ) : '';

$instance['item_2']['name'] = ( ! empty( $new_instance['name_2'] ) ) ? strip_tags( $new_instance['name_2'] ) : '';
$instance['item_2']['url'] = ( ! empty( $new_instance['url_2'] ) ) ? strip_tags( $new_instance['url_2'] ) : '';
$instance['item_2']['was'] = ( ! empty( $new_instance['was_2'] ) ) ? strip_tags( $new_instance['was_2'] ) : '';
$instance['item_2']['now'] = ( ! empty( $new_instance['now_2'] ) ) ? strip_tags( $new_instance['now_2'] ) : '';
$instance['item_2']['image'] = ( ! empty( $new_instance['image_2'] ) ) ? strip_tags( $new_instance['image_2'] ) : '';

$instance['item_3']['name'] = ( ! empty( $new_instance['name_3'] ) ) ? strip_tags( $new_instance['name_3'] ) : '';
$instance['item_3']['url'] = ( ! empty( $new_instance['url_3'] ) ) ? strip_tags( $new_instance['url_3'] ) : '';
$instance['item_3']['was'] = ( ! empty( $new_instance['was_3'] ) ) ? strip_tags( $new_instance['was_3'] ) : '';
$instance['item_3']['now'] = ( ! empty( $new_instance['now_3'] ) ) ? strip_tags( $new_instance['now_3'] ) : '';
$instance['item_3']['image'] = ( ! empty( $new_instance['image_3'] ) ) ? strip_tags( $new_instance['image_3'] ) : '';

$instance['item_4']['name'] = ( ! empty( $new_instance['name_4'] ) ) ? strip_tags( $new_instance['name_4'] ) : '';
$instance['item_4']['url'] = ( ! empty( $new_instance['url_4'] ) ) ? strip_tags( $new_instance['url_4'] ) : '';
$instance['item_4']['was'] = ( ! empty( $new_instance['was_4'] ) ) ? strip_tags( $new_instance['was_4'] ) : '';
$instance['item_4']['now'] = ( ! empty( $new_instance['now_4'] ) ) ? strip_tags( $new_instance['now_4'] ) : '';
$instance['item_4']['image'] = ( ! empty( $new_instance['image_4'] ) ) ? strip_tags( $new_instance['image_4'] ) : '';

$instance['item_5']['name'] = ( ! empty( $new_instance['name_5'] ) ) ? strip_tags( $new_instance['name_5'] ) : '';
$instance['item_5']['url'] = ( ! empty( $new_instance['url_5'] ) ) ? strip_tags( $new_instance['url_5'] ) : '';
$instance['item_5']['was'] = ( ! empty( $new_instance['was_5'] ) ) ? strip_tags( $new_instance['was_5'] ) : '';
$instance['item_5']['now'] = ( ! empty( $new_instance['now_5'] ) ) ? strip_tags( $new_instance['now_5'] ) : '';
$instance['item_5']['image'] = ( ! empty( $new_instance['image_5'] ) ) ? strip_tags( $new_instance['image_5'] ) : '';
return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widget() {
	register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );

/* Stop Adding Functions Below this Line */
?>
