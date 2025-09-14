<?php
function render_info_side($isActivities){ ?>
<?php
$the_query = new WP_Query(array( 'posts_per_page' => 5, 'post_type' => $isActivities ? 'activities' : 'post' ));
$categories = $isActivities ? get_terms( array('taxonomy' => 'activity-categories') ) : get_categories();
if ($the_query->have_posts() || !empty($categories)){
echo '<div id="sideColumn">';
if ( $the_query->have_posts() ) {?>
	<div class="side_widget clearfix">
        <h3 class="side_headline">最近の記事</h3>
        <ul class="news_widget_list">
<?php
    while ( $the_query->have_posts() ) {
		$the_query->the_post();
        if (!$isActivities){
            $isDownload = get_field('use_download_link');
            $fileDownload = get_field('file_download');
        }
		echo '<li>
			<p class="news_date">'.get_the_date('Y.m.d').'</p>
			<a class="news_title" href="'.(!$isActivities && $isDownload && $fileDownload ? $fileDownload : get_permalink()).'">'.get_the_title().'</a>
		</li>';
	} ?>
		</ul>
    </div>
<?php } ?>
<?php
if (!empty($categories)){
?>
	<div class="side_widget clearfix">
        <h3 class="side_headline">カテゴリー</h3>
        <ul>
<?php
foreach ($categories as $category){
	echo '<li class="cat-item cat-item-4 current-cat"><a href="'.esc_url( get_category_link( $category->term_id ) ).'">'.$category->name.'</a></li>';
}
?>
        </ul>
    </div>
<?php } ?>
<?php 
	echo '</div>';
  }
} ?>