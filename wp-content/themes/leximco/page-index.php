<?php
/**
 * Template Name: Index
 *
 * @package WordPress
 */
 ?>
 <?php 
	global $TemplateUrl;
 	get_header();
?>
<?php 	if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="pbNested ">
  <div class="pbNested pbNestedWrapper " id="pbBlock1051">
    <div id="first-view">
      <img src="<?= $TemplateUrl ?>/library/images/top/copyImg_pc.png" class="topCopyImg pcCopy" alt="アジアと日本の成長の架け橋になる “補充”から“活用”へ。 優秀な外国人材は、事業成長の鍵です。">
      <img src="<?= $TemplateUrl ?>/library/images/top/copyImg_tab.png" class="topCopyImg tabCopy" alt="アジアと日本の成長の架け橋になる “補充”から“活用”へ。 優秀な外国人材は、事業成長の鍵です。">
      <img src="<?= $TemplateUrl ?>/library/images/top/copyImg_sp.png" class="topCopyImg spCopy" alt="アジアと日本の成長の架け橋になる “補充”から“活用”へ。 優秀な外国人材は、事業成長の鍵です。">
      <!-- Swiper -->
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="slide-img slideImg01"></div>
            <div class="swiper-inner-left"></div>
            <div class="swiper-inner-right">
              <img src="<?= $TemplateUrl ?>/library/images/top/r_corners_w_top.png" alt="" class="r_corners_w_top">
              <img src="<?= $TemplateUrl ?>/library/images/top/r_corners_w_bottom.png" alt="" class="r_corners_w_bottom">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slide-img slideImg02"></div>
            <div class="swiper-inner-left"></div>
            <div class="swiper-inner-right">
              <img src="<?= $TemplateUrl ?>/library/images/top/r_corners_w_top.png" alt="" class="r_corners_w_top">
              <img src="<?= $TemplateUrl ?>/library/images/top/r_corners_w_bottom.png" alt="" class="r_corners_w_bottom">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slide-img slideImg03"></div>
            <div class="swiper-inner-left"></div>
            <div class="swiper-inner-right">
              <img src="<?= $TemplateUrl ?>/library/images/top/r_corners_w_top.png" alt="" class="r_corners_w_top">
              <img src="<?= $TemplateUrl ?>/library/images/top/r_corners_w_bottom.png" alt="" class="r_corners_w_bottom">
            </div>
          </div>
        </div>
        <!-- Add Pagination 
		<div class="swiper-pagination swiper-pagination-white"></div>
													<!-- Add Arrows 
		<div class="swiper-button-next swiper-button-white"></div><div class="swiper-button-prev swiper-button-white"></div-->
      </div>
      <div id="contentsLink">
        <a href="<?php bloginfo('url') ?>#contents">
          <img src="<?= $TemplateUrl ?>/library/images/top/page-down.png" alt="" class="page-down">
        </a>
      </div>
    </div>
    <!-- / .first-view -->
  </div>
  <div class="pbNested pbNestedWrapper pbAnchor pbBaseBlockWrapper pbExcluded" id="pbBlock1056">
    <a name="contents" id="contents"></a>
  </div>
  <div class="pbNested pbNestedWrapper " id="pbBlock1020">
    <section id="topContact">
      <div class="topContactBg parallax-window" data-parallax="scroll" data-speed="0.2" data-position="center center" data-image-src="<?= $TemplateUrl ?>/library/images/top/topContact_bg.jpg" data-natural-width="1920" data-natural-height="1280"></div>
      <article class="clf">
        <p class="txt03 serif">相談無料</p>
        <p class="txt01 serif">まずはお気軽に<br>ご相談ください </p>
        <p class="txt02">優秀なベトナム人材のことでしたら<br>ベトナム人材のスペシャリスト、レーシムコにお任せください。 </p>
        <div class="serviceList">
          <div class="inner">
            <ul class="clf">
              <li>
                <img src="<?= $TemplateUrl ?>/library/images/top/icon_achievements.png" alt="Achievements">
                <p class="tle">Achievements</p>
                <p class="txt">日本全国の工場・オフィスで多くの実績</p>
              </li>
              <li>
                <img src="<?= $TemplateUrl ?>/library/images/top/icon_talentedperson.png" alt="Talented Person">
                <p class="tle">Talented Person</p>
                <p class="txt">日本基準の労働スキルを持つベトナム人が多数在籍</p>
              </li>
              <li>
                <img src="<?= $TemplateUrl ?>/library/images/top/icon_education.png" alt="Education">
                <p class="tle">Education</p>
                <p class="txt">貴社での就労ルールや慣習を当社担当者が指導</p>
              </li>
              <li>
                <img src="<?= $TemplateUrl ?>/library/images/top/icon_support.png" alt="Support">
                <p class="tle">Support</p>
                <p class="txt">在留資格（ビザ）の申請、変更、更新も代行手続き有</p>
              </li>
              <li>
                <img src="<?= $TemplateUrl ?>/library/images/top/icon_onestop.png" alt="One-Stop">
                <p class="tle">One-Stop</p>
                <p class="txt">求人～入国手続き・住居探しもワンストップ対応</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="topContactMessage">
          <div class="inner">
            <ul class="clf">
              <li class="liLeft">
                <p>人材不足でお困りの企業様はもちろん、 <br>クライアントが人材不足でお困りの企業様もご相談ください。 <br>レーシムコが業務提携にて貴社に人材をご提供いたします。
              </li>
              <li class="liRight">
                <img src="<?= $TemplateUrl ?>/library/images/top/topContactMessage.png" alt="">
              </li>
            </ul>
          </div>
        </div>
        <div class="topContactLink">
          <div class="pagelinkBtn">
            <div class="btn">
              <a class="button" href="<?= get_permalink($pageId["contact"]) ?>">
                <p>お問い合わせはこちら</p>
              </a>
            </div>
          </div>
        </div>
      </article>
    </section>
  </div>
  <div class="pbNested pbNestedWrapper " id="pbBlock1052">
    <section id="topMessage">
      <div class="inner">
        <article class="messageCont">
          <div class="sectionTle">
            <p class="tle_subEN serif">Message</p>
            <h1 class="serif">優秀なベトナム人材の採用は <br>レーシムコにお任せください </h1>
          </div>
          <p class="sectionLead">日本の製造業などでベトナム人材の採用にレーシムコが選ばれている理由は、日本国内にいる3万人以上のベトナム人ネットワークを抱えているだけではありません。</p>
          <p class="sectionLead">長年ベトナムのダナンにて日本語学校を運営し、日本語はもちろん日本におる仕事の慣習や、日本基準のスキル習得の研修を行うだけでなく、日本での就労に関しては、ビザの申請から入国、住宅手配までワンストップでサービスを提供してきたノウハウと実績が、企業様とベトナム人の両方から高く評価、信頼されているからです。</p>
        </article>
      </div>
    </section>
  </div>
  <div class="pbNested pbNestedWrapper " id="pbBlock1053">
    <section id="topService">
      <div class="inner">
        <article class="serviceCont clf">
          <div class="contLeft cont01Left">
            <img src="<?= $TemplateUrl ?>/library/images/top/flag_vietnam.png" alt="ベトナム" class="countryFlag">
            <p class="countryName">ベトナム</p>
          </div>
          <div class="contRight cont01Right">
            <div class="sectionTle">
              <p class="tle_subEN serif">Service</p>
              <h1 class="serif">レーシムコのサービス</h1>
            </div>
          </div>
          <div class="contLeft cont02Left">
            <img src="<?= $TemplateUrl ?>/library/images/top/topService_img01.jpg" alt="教育・研修" class="contLeft_tag">
          </div>
          <div class="contRight cont02Right">
            <p class="tle">日本基準の語学・スキル・仕事品質を習得したベトナム人材の育成</p>
          </div>
          <div class="contLeft cont03Left">
            <img src="<?= $TemplateUrl ?>/library/images/top/topService_img04.png" alt="認定入国" class="contLeft_tag3">
          </div>
          <div class="contRight cont03Right clf">
            <p class="articleTxt">ベトナムのダナンで日本語学校を運営し、充実した教育・研修制度を実施しています。</p>
            <ul class="photoBox clf">
              <li>
                <img src="<?= $TemplateUrl ?>/library/images/top/topService_img02.jpg" alt="">
              </li>
              <li>
                <img src="<?= $TemplateUrl ?>/library/images/top/topService_img03.jpg" alt="">
              </li>
            </ul>
            <div class="pagelinkBtn">
              <div class="btn">
                <a class="button" href="<?= get_permalink($pageId["strength02"]) ?>">
                  <p>詳しくはこちら</p>
                </a>
              </div>
            </div>
          </div>
          <div class="contLeft cont04Left"></div>
          <div class="contRight cont04Right">
            <p class="tle">入国管理代行サービス</p>
          </div>
          <div class="contLeft cont05Left"></div>
          <div class="contRight cont05Right">
            <p class="articleTxt">はじめての外国人雇用が簡単にできるよう入国管理についてもお任せいただけます。</p>
            <div class="pagelinkBtn">
              <div class="btn">
                <a class="button" href="<?= get_permalink($pageId["service04"]) ?>">
                  <p>詳しくはこちら</p>
                </a>
              </div>
            </div>
          </div>
          <div class="contLeft cont06Left">
            <img src="<?= $TemplateUrl ?>/library/images/top/topService_arrow.jpg" alt="" class="topService_arrow">
          </div>
          <div class="contRight cont06Right"></div>
          <div class="contLeft cont07Left">
            <img src="<?= $TemplateUrl ?>/library/images/top/flag_japan.png" alt="日本" class="countryFlag">
            <p class="countryName">日　本</p>
          </div>
          <div class="contRight cont07Right"></div>
          <div class="contLeft cont08Left">
            <img src="<?= $TemplateUrl ?>/library/images/top/topService_img05.jpg" alt="コンサルティング" class="contLeft_tag">
          </div>
          <div class="contRight cont08Right">
            <p class="tle">コンサルティング</p>
          </div>
          <div class="contLeft cont09Left"></div>
          <div class="contRight cont09Right clf">
            <p class="articleTxt">外国人雇用についての法的問題をクリア、福利厚生のアドバイスはもちろん、人材不足について最適な解消方法をご提案いたします。</p>
            <div class="btnBox">
              <div class="pagelinkBtn">
                <div class="btn">
                  <a class="button" href="<?= get_permalink($pageId["consulting01"]) ?>">
                    <p>人材採用コンサルティングの詳細はこちら</p>
                  </a>
                </div>
              </div>
              <div class="pagelinkBtn">
                <div class="btn">
                  <a class="button" href="<?= get_permalink($pageId["consulting02"]) ?>">
                    <p>特定技能に関するコンサルティングの詳細はこちら</p>
                  </a>
                </div>
              </div>
              <div class="pagelinkBtn">
                <div class="btn">
                  <a class="button" href="<?= get_permalink($pageId["consulting03"]) ?>">
                    <p>技能実習生に関するコンサルティングの詳細はこちら</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="contLeft cont10Left">
            <img src="<?= $TemplateUrl ?>/library/images/top/topService_img06.png" alt="面接" class="contLeft_tag2">
          </div>
          <div class="contRight cont10Right">
            <p class="tle">レーシムコの国内ベトナムネットワーク（3万人以上）からも人選可能</p>
          </div>
          <div class="contLeft cont11Left"></div>
          <div class="contRight cont11Right clf">
            <ul class="photoBox clf">
              <li>
                <img src="<?= $TemplateUrl ?>/library/images/top/topService_img07.jpg" alt="">
              </li>
              <li>
                <img src="<?= $TemplateUrl ?>/library/images/top/topService_img08.jpg" alt="">
              </li>
            </ul>
          </div>
          <div class="contLeft cont12Left">
            <img src="<?= $TemplateUrl ?>/library/images/top/topService_img09.jpg" alt="人材サービス" class="contLeft_tag">
          </div>
          <div class="contRight cont12Right">
            <p class="tle">人材派遣と紹介の両方で人材不足問題を解決</p>
          </div>
          <div class="contLeft cont13Left"></div>
          <div class="contRight cont13Right clf">
            <p class="articleTxt">人材派遣、人材紹介の両方で短期、季節的、長期的な視点での人材不足の解消、育成サービスを提供できるのがレーシムコの強みです。</p>
            <div class="btnBox clf">
              <div class="pagelinkBtn">
                <div class="btn">
                  <a class="button" href="<?= get_permalink($pageId["service02"]) ?>">
                    <p>人材派遣サービスの詳細はこちら</p>
                  </a>
                </div>
              </div>
              <div class="pagelinkBtn">
                <div class="btn">
                  <a class="button" href="<?= get_permalink($pageId["service03"]) ?>">
                    <p>人材紹介サービスの詳細はこちら</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="contLeft cont14Left">
            <img src="<?= $TemplateUrl ?>/library/images/top/topService_img10.jpg" alt="フォロー" class="contLeft_tag">
          </div>
          <div class="contRight cont14Right">
            <p class="tle">ベトナム人材を熟知した当社のサービス</p>
          </div>
          <div class="contLeft cont15Left"></div>
          <div class="contRight cont15Right clf">
            <p class="articleTxt">ベトナム人材が、日本でその優秀さを発揮するためには、ベトナム人のメンタリティを理解したコミュニケーションが欠かせません。レーシムコでは、当社ベトナム人担当者が、企業担当者様とベトナム人スタッフとの間に立って労務管理をさせていただきます。</p>
            <div class="pagelinkBtn">
              <div class="btn">
                <a class="button" href="<?= get_permalink($pageId["strength03"]) ?>">
                  <p>詳しくはこちら</p>
                </a>
              </div>
            </div>
          </div>
        </article>
      </div>
    </section>
    <div class="topDecoBg parallax-window" data-parallax="scroll" data-speed="0.2" data-position="center center" data-image-src="<?= $TemplateUrl ?>/library/images/top/sliderImage03.jpg" data-natural-width="2048" data-natural-height="1367"></div>
  </div>
  <div class="pbNested pbNestedWrapper " id="pbBlock2320">
    <div>
      <section id="topInfo" class="clf">
        <div class="inner">
          <article class="infoCont">
            <div class="sectionTle">
              <p class="tle_subEN serif">Information</p>
              <h1 class="serif">最新情報</h1>
            </div>
            <ul class="infoBox clf">
<?php
$the_query = new WP_Query(array( 'posts_per_page' => 3 ));
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
    $the_query->the_post();
    $isDownload = get_field('use_download_link');
    $fileDownload = get_field('file_download');
    echo '<li class="clf">
        <p class="date">'.get_the_date('Y.m.d').'</p>
        <div class="infoCate">
          <ul class="cat	eBox clf">
            <li class="cateNews">
              <p>お知らせ</p>
            </li>
          </ul>
        </div>
        <p class="infoTle">
          <a href="'.($isDownload && $fileDownload ? $fileDownload : get_permalink()).'">'.get_the_title().'</a>
        </p>
      </li>';
  }
} 
?>
            </ul>
            <div class="pagelinkBtn">
              <div class="btn">
                <a class="button" href="<?= get_permalink($pageId["info"]) ?>">
                  <p>一覧はこちら</p>
                </a>
              </div>
            </div>
          </article>
        </div>
      </section>
    </div>
  </div>
</div>
<?php 	endwhile;?>
<?php 	endif; ?>
<?php get_footer(); ?>

