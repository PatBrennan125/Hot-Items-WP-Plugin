<?php
/*
Plugin Name: Top Products
Description: Sidebar list of top products
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
array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'wpb_widget_domain' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
$name =  $instance['name'];
$url =  $instance['url'];
$was =  $instance['was'];
$now =  $instance['now'];
$image =  $instance['image'];

$name_2 =  $instance['name_2'];
$url_2 =  $instance['url_2'];
$was_2 =  $instance['was_2'];
$now_2 =  $instance['now_2'];
$image_2 =  $instance['image_2'];

$name_3 =  $instance['name_3'];
$url_3 =  $instance['url_3'];
$was_3 =  $instance['was_3'];
$now_3 =  $instance['now_3'];
$image_3 =  $instance['image_3'];

$name_4 =  $instance['name_4'];
$url_4 =  $instance['url_4'];
$was_4 =  $instance['was_4'];
$now_4 =  $instance['now_4'];
$image_4 =  $instance['image_4'];

$name_5 =  $instance['name_5'];
$url_5 =  $instance['url_5'];
$was_5 =  $instance['was_5'];
$now_5 =  $instance['now_5'];
$image_5 =  $instance['image_5'];
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) ){
	echo $args['before_title'] . $title . $args['after_title'];
}
echo "<ul class='pat-tab'>";
echo "<li><div class='top-bargains-number'>1</div><a href='$url' target='_blank'><img class='sidebar-product-image' src='$image' alt='$name'></a><div class='product-container'><div class='product-link'><a href='$url' target='_blank'>$name</a></div><div class='old-price'>$was</div><div class='new-price'>$now</div></div></li>";
echo "<li><div class='top-bargains-number'>2</div><a href='$url_2' target='_blank'><img class='sidebar-product-image' src='$image_2' alt='$name_2'></a><div class='product-container'><div class='product-link'><a href='$url_2' target='_blank'>$name_2</a></div><div class='old-price'>$was_2</div><div class='new-price'>$now_2</div></div></li>";
echo "<li><div class='top-bargains-number'>3</div><a href='$url_3' target='_blank'><img class='sidebar-product-image' src='$image_3' alt='$name_3'></a><div class='product-container'><div class='product-link'><a href='$url_3' target='_blank'>$name_3</a></div><div class='old-price'>$was_3</div><div class='new-price'>$now_3</div></div></li>";
echo "<li><div class='top-bargains-number'>4</div><a href='$url_4' target='_blank'><img class='sidebar-product-image' src='$image_4' alt='$name_4'></a><div class='product-container'><div class='product-link'><a href='$url_4' target='_blank'>$name_4</a></div><div class='old-price'>$was_4</div><div class='new-price'>$now_4</div></div></li>";
echo "<li><div class='top-bargains-number'>5</div><a href='$url_5' target='_blank'><img class='sidebar-product-image' src='$image_5' alt='$name_5'></a><div class='product-container'><div class='product-link'><a href='$url_5' target='_blank'>$name_5</a></div><div class='old-price'>$was_5</div><div class='new-price'>$now_5</div></div></li>";
echo "</ul>";
// This is where you run the code and display the output
//echo __( $title, 'wpb_widget_domain' );
echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) && isset ($instance[ 'url' ] ) && isset ($instance[ 'name' ] ) ) {
$title = $instance[ 'title' ];
$name = $instance[ 'name' ];
$url = $instance[ 'url' ];
$was = $instance[ 'was' ];
$now = $instance[ 'now' ];
$image = $instance[ 'image' ];

$name_2 = $instance[ 'name_2' ];
$url_2 = $instance[ 'url_2' ];
$was_2 = $instance[ 'was_2' ];
$now_2 = $instance[ 'now_2' ];
$image_2 = $instance[ 'image_2' ];

$name_3 = $instance[ 'name_3' ];
$url_3 = $instance[ 'url_3' ];
$was_3 = $instance[ 'was_3' ];
$now_3 = $instance[ 'now_3' ];
$image_3 = $instance[ 'image_3' ];

$name_4 = $instance[ 'name_4' ];
$url_4 = $instance[ 'url_4' ];
$was_4 = $instance[ 'was_4' ];
$now_4 = $instance[ 'now_4' ];
$image_4 = $instance[ 'image_4' ];

$name_5 = $instance[ 'name_5' ];
$url_5 = $instance[ 'url_5' ];
$was_5 = $instance[ 'was_5' ];
$now_5 = $instance[ 'now_5' ];
$image_5 = $instance[ 'image_5' ];
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
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
$instance['name'] = ( ! empty( $new_instance['name'] ) ) ? strip_tags( $new_instance['name'] ) : '';
$instance['url'] = ( ! empty( $new_instance['url'] ) ) ? strip_tags( $new_instance['url'] ) : '';
$instance['was'] = ( ! empty( $new_instance['was'] ) ) ? strip_tags( $new_instance['was'] ) : '';
$instance['now'] = ( ! empty( $new_instance['now'] ) ) ? strip_tags( $new_instance['now'] ) : '';
$instance['image'] = ( ! empty( $new_instance['image'] ) ) ? strip_tags( $new_instance['image'] ) : '';

$instance['name_2'] = ( ! empty( $new_instance['name_2'] ) ) ? strip_tags( $new_instance['name_2'] ) : '';
$instance['url_2'] = ( ! empty( $new_instance['url_2'] ) ) ? strip_tags( $new_instance['url_2'] ) : '';
$instance['was_2'] = ( ! empty( $new_instance['was_2'] ) ) ? strip_tags( $new_instance['was_2'] ) : '';
$instance['now_2'] = ( ! empty( $new_instance['now_2'] ) ) ? strip_tags( $new_instance['now_2'] ) : '';
$instance['image_2'] = ( ! empty( $new_instance['image_2'] ) ) ? strip_tags( $new_instance['image_2'] ) : '';

$instance['name_3'] = ( ! empty( $new_instance['name_3'] ) ) ? strip_tags( $new_instance['name_3'] ) : '';
$instance['url_3'] = ( ! empty( $new_instance['url_3'] ) ) ? strip_tags( $new_instance['url_3'] ) : '';
$instance['was_3'] = ( ! empty( $new_instance['was_3'] ) ) ? strip_tags( $new_instance['was_3'] ) : '';
$instance['now_3'] = ( ! empty( $new_instance['now_3'] ) ) ? strip_tags( $new_instance['now_3'] ) : '';
$instance['image_3'] = ( ! empty( $new_instance['image_3'] ) ) ? strip_tags( $new_instance['image_3'] ) : '';

$instance['name_4'] = ( ! empty( $new_instance['name_4'] ) ) ? strip_tags( $new_instance['name_4'] ) : '';
$instance['url_4'] = ( ! empty( $new_instance['url_4'] ) ) ? strip_tags( $new_instance['url_4'] ) : '';
$instance['was_4'] = ( ! empty( $new_instance['was_4'] ) ) ? strip_tags( $new_instance['was_4'] ) : '';
$instance['now_4'] = ( ! empty( $new_instance['now_4'] ) ) ? strip_tags( $new_instance['now_4'] ) : '';
$instance['image_4'] = ( ! empty( $new_instance['image_4'] ) ) ? strip_tags( $new_instance['image_4'] ) : '';

$instance['name_5'] = ( ! empty( $new_instance['name_5'] ) ) ? strip_tags( $new_instance['name_5'] ) : '';
$instance['url_5'] = ( ! empty( $new_instance['url_5'] ) ) ? strip_tags( $new_instance['url_5'] ) : '';
$instance['was_5'] = ( ! empty( $new_instance['was_5'] ) ) ? strip_tags( $new_instance['was_5'] ) : '';
$instance['now_5'] = ( ! empty( $new_instance['now_5'] ) ) ? strip_tags( $new_instance['now_5'] ) : '';
$instance['image_5'] = ( ! empty( $new_instance['image_5'] ) ) ? strip_tags( $new_instance['image_5'] ) : '';
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
