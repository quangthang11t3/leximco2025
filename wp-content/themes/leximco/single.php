<?php get_header();
global $pageId;
?>
<?php 	if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php
$isNewsPost = get_post_type(get_the_ID()) == 'post';
$parentPageId = $isNewsPost ? $pageId['info'] : $pageId['activities'];
?>
<div class="pbNested " >
	<?php render_info_header(get_the_title($parentPageId), get_the_post_thumbnail($parentPageId, 'full'), $isNewsPost ? "最新情報" : "会社情報", ""); ?>
	<div class="pbNested pbNestedWrapper "  id="pbBlock4666">
		<div>
			<section id="topInfo" class="sectionBase">
				<article class="clf pb0_pc pb0_sp">
					<div id="mainColumn">
						<div id="post-wrapper">
							<h1 class="articleTle alignCenter"><?php the_title() ?></h1>
							<div class="post">
								<div id="post_meta" class="clearfix">
									<ul id="single_meta" class="clearfix meta">
										<li class="date_sm"><?= get_the_date('Y.m.d') ?></li>
										<?php
										$categories = $isNewsPost ? get_the_category() :  get_the_terms(get_the_ID(), 'activity-categories');
								        if (!empty($categories)){
										foreach ($categories as $key => $category) {
											echo '<li class="post_category"><a href="'.esc_url(get_category_link($category->term_id)).'" rel="category tag">'.$category->name.'</a></li>';
										}}
										?>
									</ul>
								</div>
								<?php if (has_post_thumbnail()){
									echo '<div class="post_image">';
									the_post_thumbnail('full');
									echo '</div>';
								} ?>
								<div class="editor-styles-wrapper"><?php the_content();?></div>
								<div id="post-share">
									<div class="post-share-ttl"><h2>シェアする：</h2></div>
									<div class="post-share-cnt">
										<div class="post-share-btn">
											<a class="facebook-sns" href="https://www.facebook.com/sharer.php?u=<?= get_permalink() ?>" target="_blank">
												<svg class="e-font-icon-svg e-fab-facebook" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg>
											</a>
										</div>
										<div class="post-share-btn">
											<a class="mail-sns" href="mailto:?subject=<?= urlencode(get_the_title()) ?>&body=<?= urlencode('\n'.get_permalink()) ?>">
												<svg class="e-font-icon-svg e-fas-envelope" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path></svg>
											</a>
										</div>
									</div>
								</div>
							</div>
<?php
$next_post = get_next_post();
$prev_post = get_previous_post();
if ( is_a( $prev_post , 'WP_Post' ) || is_a( $next_post , 'WP_Post' ) ){
?>
							<div id="previous_next_post" class="clearfix">
								<?php
								if (is_a( $prev_post , 'WP_Post' )) { 
									if ($isNewsPost){
										$isDownload = get_field('use_download_link', $prev_post->ID);
										$fileDownload = get_field('file_download', $prev_post->ID);
									}
									echo '<p id="previous_post"><a href="'.($isNewsPost && $isDownload && $fileDownload ? $fileDownload : get_permalink( $prev_post->ID )).'" rel="prev">'.get_the_title($prev_post->ID).'</a></p>';
								}
								if (is_a( $next_post , 'WP_Post' )) {
									if ($isNewsPost){
										$isDownload = get_field('use_download_link', $next_post->ID);
										$fileDownload = get_field('file_download', $next_post->ID);
									}
									echo '<p id="next_post"><a href="'.($isNewsPost && $isDownload && $fileDownload ? $fileDownload : get_permalink( $next_post->ID )).'" rel="next">'.get_the_title($next_post->ID).'</a></p>';
								}
								?>
							</div>
<?php } ?>
						</div>
					</div>
					<?php render_info_side(!$isNewsPost); ?>
				</article>
			</section>
		</div>
	</div>
</div>
<?php 	endwhile;?>
<?php 	endif; ?>
<?php get_footer(); ?>