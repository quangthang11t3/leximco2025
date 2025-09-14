<?php 
// Register and load the widget
function customer_load_widget() {
    register_widget( 'customer_widget' );
}
add_action( 'widgets_init', 'customer_load_widget' );

class customer_widget extends WP_Widget {
 
	function __construct() {
		parent::__construct(
 
			// Base ID of your widget
			'customer_widget', 
			// Widget name will appear in UI
			__('Our Customers', 'ou_widget_widget_domain'), 
 
			// Widget description
			array( 'description' => __( 'Add Customer Comment', 'ou_widget_widget_domain' ), ) 
		);
	}
 
	// Creating widget front-end
 
	public function widget( $args, $instance ) {
		if (isset($instance[ 'link' ])){
			$text = $instance[ 'link' ];
		}
 		global $id_idx;
 		$customers = get_field('customer_comment',$id_idx);
 		$html = '';
 		if (count($customers)){
	 		foreach ($customers as $key => $customer) {
	 			$html .= '
	 				<div class="idea_customer">
						<p>'.$customer['content'].'</p>
						<div class="media">
							<div class="media-left">
								<span>
									'.wp_get_attachment_image($customer['author'],'author').'
								</span>
							</div>
							<div class="media-body">
								<h4 class="media-heading">'.$customer['name'].'</h4>
								<p>'.$customer['from'].'</p>
							</div>
						</div>
					</div>
	 			';
	 		}
	 	}
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		// This is where you run the code and display the output ?>
		<a class="effect_sadie" href="<?php echo $text; ?>">
			<?php echo wp_get_attachment_image(get_field('our_story_main_image',$id_idx),'full',"",array('class' => 'circle_radius')); ?>
		</a>
		<div class="customers_say">
			<div class="customers_inner">
				<?php  echo $html; ?>
			</div>
		</div>
<?php	echo $args['after_widget'];
	}
         
	// Widget Backend 
	public function form( $instance ) {
		$link = '/';
		if ( isset( $instance[ 'link' ] ) && !empty($instance[ 'link' ]) ) {
			$link = $instance[ 'link' ];
		}

?>
		<p>
			<label for="<?php echo $this->get_field_id( 'link' ); ?>"><?php _e( 'Link:' ); ?></label> 
			<textarea class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" placeholder="Add new link here" rows="2" ><?php echo esc_attr( $link ); ?></textarea>
		</p>
<?php 
	}
     
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['link'] = ( ! empty( $new_instance['link'] ) ) ? strip_tags( $new_instance['link'] ) : '';
		return $instance;
	}
} 
// Class btn_app_widget ends here
?>