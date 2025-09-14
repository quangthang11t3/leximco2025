<?php
/**
 * Template Name: Contact
 *
 * @package WordPress
 */
 ?>
 <?php get_header(); ?>
<?php 	if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="pbNested " >
<?php render_info_header(get_the_title(), get_the_post_thumbnail(get_the_ID(), 'full'), "最新情報", "最新のサービス情報や新しい取り組み、ベトナム人材に関する最新動向、活用方法に関するセミナー情報などお客様のお役に立つ情報をお届けします。"); ?>
	<div class="pbNested pbNestedWrapper "  id="pbBlock4666">
		<div>
			<section id="topInfo" class="sectionBase">
				<article id="mainColumnClear" class="clf pb0_pc pb0_sp">
<?php
$paged = isset($_GET['pagination']) ? (int)$_GET['pagination'] : 1;
render_info_content(array( 'paged' => $paged, 'posts_per_page' => 10 ), false);
render_info_side(false);
?>
				</article>
			</section><!-- / .sectionBase -->
		</div>
	</div>
</div>
<?php 	endwhile;?>
<?php 	endif; ?>
<?php get_footer(); ?>

