<?php get_header();
global $pageId;
?>
<?php
$current_category = get_term( get_queried_object_id(), 'activity-categories' ); ?>
<div class="pbNested " >
<?php render_info_header(get_the_title($pageId["activities"]), get_the_post_thumbnail($pageId["activities"], 'full'),"会社情報",""); ?>
    <div class="pbNested pbNestedWrapper "  id="pbBlock4666">
		<div>
			<section id="topInfo" class="sectionBase">
				<article id="mainColumnClear" class="clf pb0_pc pb0_sp">
<?php
$paged = isset($_GET['pagination']) ? (int)$_GET['pagination'] : 1;
render_info_content(
    array(
        'paged' => $paged,
        'posts_per_page' => 10,
        'post_type' => 'activities',
        'tax_query' => array(
            array(
                'taxonomy' => 'activity-categories',
                'terms' => array($current_category->term_id)
            )
        )
    ), true);
render_info_side(true);
?>
                </article>
            </section>
        </div>
    </div>
</div>
<?php get_footer(); ?>

