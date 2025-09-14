<?php 
function render_info_header($title, $thumb, $lgTitle, $desc){
    ?>
<div class="  pbNested pbNestedWrapper "  id="pbBlock4664">
    <div class="pbNested " >
        <div class="pbNested pbNestedWrapper "  id="pbBlock1226">
            <section class="topImage_page">
                <div class="topImageWrap">
                    <article id="pageIntro">
                        <div class="inner">
                            <h2 class="serif"><?= $lgTitle ?></h2>
                            <h1 class="serif"><?= $title ?></h1>
                        </div>
                    </article>
                    <div id="imgContainer"<?= $desc == "" ? ' class="fix_height_banner"' : '' ?>><?= $thumb ?></div>
                </div>
                <article id="page_leadTxt">
                    <div class="txtCont">
                        <h3 class="serif"><?= $desc ?></h3>
                    </div>
                </article>
            </section><!-- / .topImage_page -->
        </div>
    </div>

</div>
    <?php
}