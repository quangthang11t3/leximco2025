<?php
function render_info_content($listQuery, $isActivities){ ?>
<div id="mainColumn">
<?php
$the_query = new WP_Query($listQuery);
$m = 0;
$url_components = parse_url($_SERVER['REQUEST_URI']);
$path_without_params = $url_components['path'];
$paged = isset($_GET['pagination']) ? (int)$_GET['pagination'] : 1;
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
		$the_query->the_post();
		$currentDate = get_the_date('Y.m.d');
		$currentMonth = (int)explode(".",$currentDate)[1];
		$isDownload = get_field('use_download_link');
    	$fileDownload = get_field('file_download');
		if ($m !== $currentMonth){
			if ($m !== 0) echo '</ul>';
			$m = $currentMonth;
			echo '<h2 class="date_headline"><span>'.$m.'月</span></h2>';
			echo '<ul class="post_list">';
		}
		echo '<li'.($isActivities ? ' class="activities_link"' : '').'>'.($isActivities ? get_the_post_thumbnail().'<div class="inner">' : '').'
			<ul class="meta clearfix">
				<li class="post_date">'.$currentDate.'</li>
			</ul>
			<h3 class="title"><a href="'.($isDownload && $fileDownload ? $fileDownload : get_permalink()).'">'.get_the_title().'</a></h3>
			'.($isActivities ? '</div>' : '').'
		</li>';
	}
	echo '</ul>';
	if ($the_query->max_num_pages > 1){
		echo '<div class="page_navi clearfix">
				<ul class="page-numbers">';
		if ($paged > 1){
			echo '<li><a class="prev page-numbers" href="'.($paged == 2 ? $path_without_params : '?pagination='.($paged - 1)).'">«</a></li>';
		}
		for ($i=1; $i <= $the_query->max_num_pages; $i++) { 
			echo '<li>';
			if ($paged === $i){
				echo '<span class="page-numbers current">'.$i.'</span>';
			}else{
				echo '<a class="page-numbers" href="'.($i === 1 ? $path_without_params : '?pagination='.$i).'">'.$i.'</a>';
			}
			echo '</li>';
		}
		if ($the_query->max_num_pages > $paged){
			echo '<li><a class="next page-numbers" href="?pagination='.($paged + 1).'">»</a></li>';
		}
		echo '</ul>
			</div>';
	}
	
}else{
	echo '<div class="no_post">現在、記事はまだ投稿されていません。</div>';
}
?>
</div>
<?php }