<?php
global $TemplateUrl;
global $pageId;
$isVi = is_page(array($pageId["index"], $pageId["job"], $pageId["company"]));
$telephone = get_option('telephone_number_option');
$telephoneTrim = str_replace(array('.', '-'),'', $telephone);
$email = get_option('email_option');
?><!DOCTYPE html>
<html lang="<?php if ($isVi) echo "vi"; else echo "ja"; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, initial-scale=1" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <title><?php if (is_home() || is_front_page()) echo 'ホーム |'; else wp_title('|', true, 'right'); ?> <?php if ($isVi) echo "Công ty cổ phần LEXIMCO"; else echo bloginfo('name'); ?></title>
  <link rel="shortcut icon" href="<?= $TemplateUrl ?>/favicon.ico" />
  <link rel="apple-touch-icon" href="<?= $TemplateUrl ?>/library/images/apple-icon-114x114.png" />
<?php wp_head(); ?>
</head>
<body>
<noscript style="background-color:rgb(255,255,255)"><p>このページではjavascriptを使用しています。</p></noscript>
<div id="page" class="pbPage">
  <div id="headerArea" class="pbHeaderArea">
    <div id="area1" class="pbArea ">
      <div class="pbNested ">
        <?php if ($isVi){ ?>
          <div class="pbNested pbNestedWrapper "  id="pbBlock1422">
						<!-- Empty Block -->
			</div>
			<div class="  pbNested pbNestedWrapper "  id="pbBlock1372">
								<div class="pbNested " >
			<div class="pbNested pbNestedWrapper "  id="pbBlock1371">
						<div id="globalHeader">

	<div id="gNaviWrap">
	<div id="globalNavHeader">
	
		<header id="header">
			<h1 id="logo"><a href="<?php echo get_permalink($pageId["index"]); ?>"><img src="<?= $TemplateUrl ?>/library/images/common/logo.png" alt="Công ty cổ phần LEXIMCO" class="logoImg"></a></h1>

			<div class="navFix">
				<div id="h_top">
					<div class="h_nav">
						<nav id="gNav">
						<ul>
						<li class="mainNavLi directLink homeBtn"><a href="<?php bloginfo('url') ?>"><p class="mainNavTxt"><img src="<?= $TemplateUrl ?>/library/images/common/navHome_icon.png"><span>HOME</span></p></a></li>
						<li class="mainNavLi directLink"><a href="<?php echo get_permalink($pageId["job"]); ?>"><p class="mainNavTxt">Bản tóm tắt thông tin công việc</p></a></li>
						<li class="mainNavLi directLink"><a href="<?php echo get_permalink($pageId["company"]); ?>"><p class="mainNavTxt">Thông tin công ty</p></a></li>
						<li class="mainNavLi directLink siteLinkImgSub"><a href="<?php bloginfo('url') ?>"><p class="mainNavTxt">企業の方はこちら</p></a></li>
						</ul>
						</nav>
					</div>
				</div>
			</div>

			<div class="headerContactBox">
				<div class="headerContactBoxInner clf">
					<div class="siteLinkImg">
						<div class="pagelinkBtn">
							<div class="btn">
							<a href="<?php bloginfo('url') ?>"><img src="<?= $TemplateUrl ?>/library/images/common/siteLinkImg_vn.png" alt="企業の方はこちら"></a>
							</div>
						</div>
					</div>

					<div class="headerContact clf">
						<div class="contactTel">
						<a href="tel:<?= $telephoneTrim ?>"><p class="telTxt"><span>Tel:</span><?= $telephone ?></p></a>
						<p class="telSupTxt"><span>Weekdays</span> 9:00-18:00</p>
							<div class="pagelinkBtn">
								<div class="btn">
								<a class="button" href="tel:<?= $telephoneTrim ?>"><p>Đăng kí, hỏi đáp qua số điện thoại</p></a>
								</div>
							</div>
						</div>
						<div class="contactMail">
							<div class="pagelinkBtn">
								<div class="btn">
								<a class="button" href="mailto:<?= $email ?>"><p>Đăng kí. Trao đổi</p></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

	</div>
	</div><!-- / #gNaviWrap -->

</div><!-- / #globalHeader -->
			</div>
		</div>

			</div>
        <?php } else { ?>
        <div class="  pbNested pbNestedWrapper " id="pbBlock1039">
          <div class="pbNested ">
            <div class="pbNested pbNestedWrapper " id="pbBlock1038">
              <div id="globalHeader">
                <div id="gNaviWrap">
                  <div id="globalNavHeader">
                    <header id="header">
                      <h1 id="logo">
                        <a href="<?php bloginfo('url') ?>">
                          <img src="<?= $TemplateUrl ?>/library/images/common/logo.png" alt="<?php bloginfo('name'); ?>" class="logoImg">
                        </a>
                      </h1>
                      <div class="navFix">
                        <div id="h_top">
                          <div class="h_nav">
                            <nav id="gNav">
                              <ul>
                                <li class="mainNavLi directLink homeBtn">
                                  <a href="<?php bloginfo('url') ?>">
                                    <p class="mainNavTxt"><img src="<?= $TemplateUrl ?>/library/images/common/navHome_icon.png"><span>ホーム</span></p>
                                  </a>
                                </li>
                                <li class="mainNavLi pullDown">
                                  <p class="mainNavTxt">当社の強み<i class="fa fa-angle-down"></i></p>
                                  <ul class="sub-menu sub-menu02">
                                    <li>
                                      <a href="<?php echo get_permalink($pageId["reason"]); ?>">
                                        <p class="mainTxt"><i class="fas fa-angle-right"></i>レーシムコが選ばれる理由</p>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="<?php echo get_permalink($pageId["orientation"]); ?>">
                                        <p class="mainTxt"><i class="fas fa-angle-right"></i>入社オリエンテーション</p>
                                      </a>
                                    </li>
                                    <li class="override">
                                      <a href="<?php echo get_permalink($pageId["strength01"]); ?>">
                                        <p class="mainTxt"><i class="fas fa-angle-right"></i>ベトナム人材の国内活用状況と特長</p>
                                      </a>
                                    </li>
                                    <li class="override">
                                      <a href="<?php echo get_permalink($pageId["strength02"]); ?>">
                                        <p class="mainTxt"><i class="fas fa-angle-right"></i>ベトナムにおける当社の教育・研修制度</p>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="<?php echo get_permalink($pageId["strength03"]); ?>">
                                        <p class="mainTxt"><i class="fas fa-angle-right"></i>ベトナム人材を熟知した当社のサービス</p>
                                      </a>
                                    </li>
                                  </ul>
                                </li>
                                <li class="mainNavLi pullDown">
                                  <p class="mainNavTxt">人材サービス<i class="fa fa-angle-down"></i></p>
                                  <ul class="sub-menu sub-menu02">
                                    <li>
                                      <a href="<?php echo get_permalink($pageId["service01"]); ?>">
                                        <p class="mainTxt"><i class="fas fa-angle-right"></i>サービス領域</p>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="<?php echo get_permalink($pageId["service02"]); ?>">
                                        <p class="mainTxt"><i class="fas fa-angle-right"></i>人材派遣サービス（特長と派遣までの流れ）</p>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="<?php echo get_permalink($pageId["service03"]); ?>">
                                        <p class="mainTxt"><i class="fas fa-angle-right"></i>人材紹介サービス（特長と紹介までの流れ）</p>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="<?php echo get_permalink($pageId["service04"]); ?>">
                                        <p class="mainTxt"><i class="fas fa-angle-right"></i>入国管理代行サービス</p>
                                      </a>
                                    </li>
                                  </ul>
                                </li>
                                <li class="mainNavLi pullDown">
                                  <p class="mainNavTxt">コンサルティング<i class="fa fa-angle-down"></i></p>
                                  <ul class="sub-menu sub-menu03">
                                    <li>
                                      <a href="<?php echo get_permalink($pageId["consulting01"]); ?>">
                                        <p class="mainTxt"><i class="fas fa-angle-right"></i>人材採用コンサルティング</p>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="<?php echo get_permalink($pageId["consulting02"]); ?>">
                                        <p class="mainTxt"><i class="fas fa-angle-right"></i>特定技能に関するコンサルティング</p>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="<?php echo get_permalink($pageId["consulting03"]); ?>">
                                        <p class="mainTxt"><i class="fas fa-angle-right"></i>技能実習生に関するコンサルティング</p>
                                      </a>
                                    </li>
                                  </ul>
                                </li>
                                <li class="mainNavLi pullDown">
                                  <p class="mainNavTxt">会社情報<i class="fa fa-angle-down"></i></p>
                                  <ul class="sub-menu sub-menu02">
                                    <li>
                                      <a href="<?php echo get_permalink($pageId["overview"]); ?>">
                                        <p class="mainTxt"><i class="fas fa-angle-right"></i>会社概要</p>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="<?php echo get_permalink($pageId["greeting"]); ?>">
                                        <p class="mainTxt"><i class="fas fa-angle-right"></i>代表挨拶</p>
                                      </a>
                                    </li>
                                    <li class="override">
                                      <a href="<?php echo get_permalink($pageId["philosophy"]); ?>">
                                        <p class="mainTxt"><i class="fas fa-angle-right"></i>企業理念</p>
                                      </a>
                                    </li>
                                    <li class="override">
                                      <a href="<?php echo get_permalink($pageId["departments"]); ?>">
                                        <p class="mainTxt"><i class="fas fa-angle-right"></i>スタッフ紹介</p>
                                      </a>
                                    </li>
                                    <li class="no_border">
                                      <a target="_blank" href="https://th-group.co.jp/">
                                        <p class="mainTxt"><i class="fas fa-angle-right"></i>ティーエイチ・グループ</p>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="<?php echo get_permalink($pageId["activities"]); ?>">
                                        <p class="mainTxt"><i class="fas fa-angle-right"></i>活動報告</p>
                                      </a>
                                    </li>
                                  </ul>
                                </li>
                                <li class="mainNavLi directLink">
                                  <a href="<?php echo get_permalink($pageId["faq"]); ?>">
                                    <p class="mainNavTxt">よくある質問</p>
                                  </a>
                                </li>
                                <li class="mainNavLi directLink">
                                  <a href="<?php echo get_permalink($pageId["info"]); ?>">
                                    <p class="mainNavTxt">最新情報</p>
                                  </a>
                                </li>
                                <li class="mainNavLi directLink siteLinkImgSub">
                                  <a href="https://job.leximco.jp/">
                                    <p class="mainNavTxt">Những người đang tìm việc</p>
                                  </a>
                                </li>
                              </ul>
                            </nav>
                          </div>
                        </div>
                      </div>
                      <div class="headerContactBox">
                        <div class="headerContactBoxInner clf">
                          <div class="siteLinkImg">
                            <div class="pagelinkBtn">
                              <div class="btn">
                                <a href="https://job.leximco.jp/">
                                  <img src="<?= $TemplateUrl ?>/library/images/common/siteLinkImg.png" alt="Những người đang tìm việc">
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="headerContact clf">
                            <div class="contactTel">
                              <a href="tel:<?= $telephoneTrim ?>">
                                <p class="telTxt"><span>Tel:</span><?= $telephone ?></p>
                              </a>
                              <p class="telSupTxt"><span>受付時間:</span>平日9:00～18:00</p>
                              <div class="pagelinkBtn">
                                <div class="btn">
                                  <a class="button" href="tel:<?= $telephoneTrim ?>">
                                    <p>電話でのお問い合わせ</p>
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="contactMail">
                              <div class="pagelinkBtn">
                                <div class="btn">
                                  <a class="button" href="<?php echo get_permalink($pageId["contact"]); ?>">
                                    <p>お問い合わせ</p>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </header>
                  </div>
                </div>
                <!-- / #gNaviWrap -->
              </div>
              <!-- / #globalHeader -->
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <div id="areaWrapper1" class="pbAreaWrapper1">
    <div id="areaWrapper2" class="pbAreaWrapper2">
      <div id="mainArea" class="pbMainArea">
        <div id="area0" class="pbArea ">