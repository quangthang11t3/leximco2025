<?php get_header(); 
$key = $_GET['s'];
?>
<section id="section-content">
	<section class="banner-childpage banner-news-two">
		<div class="container">
			<h1 class="biggest-heading">探索</h1>
		</div>
	</section>
	<!--end banner-childpage-->
    <section class="section-breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="<?php bloginfo('url') ?>"><span class="icon-home">&nbsp;</span></a></li>
          <li class="active"><?php echo $key; ?></li>
        </ol>
      </div>
    </section>
    <!--end section-breadcrumb-->
    <section class="section-news">
    	<div class="container">
			<section class="section-news-entries">
<?php  
    $the_query = new WP_Query( array( 
    	'post_type' =>array('post','business-post','recuitment-post','services'),
    	'posts_per_page' =>-1,
    	's' => $key
    ) );
    if ( $the_query->have_posts() ) {
    	echo '<ul class="news-entries-list">';
    	while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$img_html = '';
			if (has_post_thumbnail()){
				$image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()));
				$img_html = '<div class="news-image">
								<a href="'.get_permalink().'"><img alt="'.get_post_meta( get_post_thumbnail_id(get_the_ID()), '_wp_attachment_image_alt', true ).'" src="'.$image_attributes[0].'" class="img-news" width="'.$image_attributes[1].'" height="'.$image_attributes[2].'" /></a>
							</div>';
			}
			echo '<li class="news-entries-item">
						<div class="news-inner">
							'.$img_html.'
							<div class="news-body">
								<p class="paragraph-news-date">'.get_the_date().' 　</p>
								<h3 class="heading-h3"><a href="'.get_permalink().'">'.get_the_title().'</a></h3>
								<p class="paragraph-news-info">'.get_the_excerpt().'</p>
							</div>
						</div>
					</li>';
		}
		echo '</ul>';
    }
?>
				<!--end news-entries-list-->
			</section>
		</div>
	</section>
</section>
<!--end main_content-->
<?php get_footer(); ?>



