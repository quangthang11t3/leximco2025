<?php
/**
 * Template Name: Activities
 *
 * @package WordPress
 */
 ?>
 <?php get_header(); ?>
<?php 	if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="pbNested " >
<?php render_info_header(get_the_title(), get_the_post_thumbnail(get_the_ID(), 'full'), "会社情報", "社内活動や社会貢献プログラム、会社が取り組むさまざまなイニシアチブやイベントについて最新情報を発信します。本ページを通じて、チームのつながりや地域社会への貢献、そして当社が大切にしている価値観を定期的にお届けします。"); ?>
	<div class="pbNested pbNestedWrapper "  id="pbBlock4666">
		<div>
			<section id="topInfo" class="sectionBase">
				<article id="mainColumnClear" class="clf pb0_pc pb0_sp">
<?php
$paged = isset($_GET['pagination']) ? (int)$_GET['pagination'] : 1;
render_info_content(array( 'paged' => $paged, 'posts_per_page' => 10, 'post_type' => 'activities' ), true);
render_info_side(true);
?>
				</article>
			</section><!-- / .sectionBase -->
		</div>
	</div>
</div>
<?php 	endwhile;?>
<?php 	endif; ?>
<?php get_footer(); ?>

