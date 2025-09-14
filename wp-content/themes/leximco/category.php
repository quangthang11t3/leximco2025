<?php get_header();
global $pageId;
?>
<?php
$current_category = get_category(get_queried_object_id()); ?>
<div class="pbNested " >
<?php render_info_header(get_the_title($pageId["info"]), get_the_post_thumbnail($pageId["info"], 'full'),"最新情報","最新のサービス情報や新しい取り組み、ベトナム人材に関する最新動向、活用方法に関するセミナー情報などお客様のお役に立つ情報をお届けします。"); ?>
    <div class="pbNested pbNestedWrapper "  id="pbBlock4666">
		<div>
			<section id="topInfo" class="sectionBase">
				<article id="mainColumnClear" class="clf pb0_pc pb0_sp">
<?php
$paged = isset($_GET['pagination']) ? (int)$_GET['pagination'] : 1;
render_info_content(array( 'paged' => $paged, 'posts_per_page' => 10, 'cat' => $current_category->term_id ), false);
render_info_side(false);
?>
                </article>
            </section>
        </div>
    </div>
</div>
<?php get_footer(); ?>

