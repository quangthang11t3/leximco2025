<?php
global $TemplateUrl;
global $pageId;
$telephone = get_option('telephone_number_option');
$telephoneTrim = str_replace(array('.', '-'),'', $telephone);
$email = get_option('email_option');
?>        </div>
        </div>
      </div>
    </div>

    <div id="footerArea" class="pbFooterArea">
      <div id="area4" class="pbArea ">
        <div class="pbNested ">
          <?php if (is_page(array($pageId["index"], $pageId["job"], $pageId["company"]))){ ?>
          <div class="  pbNested pbNestedWrapper "  id="pbBlock1375">
            <div class="pbNested " >
              <div class="pbNested pbNestedWrapper "  id="pbBlock1374">
                <section id="footerContact">
                  <article class="wrap clf">
                    <div class="contactLink">
                      <ul>
                        <li class="l-cv_item liTel">
                          <a href="tel:<?= $telephoneTrim ?>" class="link">
                            <div class="linkInner">
                              <img src="<?= $TemplateUrl ?>/library/images/common/liTel_icon.png" alt="Đăng kí, hỏi đáp qua số điện thoại Tel:<?= $telephone ?> Weekdays / 9:00-18:00" class="contactLinkIcon">
                              <span class="txtSub01 font-Montserrat">Đăng kí, hỏi đáp qua số điện thoại</span>
                              <span class="txtMain font-Montserrat">Tel:<?= $telephone ?></span>
                              <span class="txtSub02 font-Montserrat">Weekdays / 9:00-18:00</span>
                            </div>
                          </a>
                        </li>

                        <li class="l-cv_item liWeb">
                          <a href="mailto:<?= $email ?>" class="link">
                            <div class="linkInner">
                              <img src="<?= $TemplateUrl ?>/library/images/common/liWeb_vn_icon.png" alt="Đăng kí, trao đổi qua địa chỉ mail" class="contactLinkIcon">
                              <span class="txtSub01 font-Montserrat">Đăng kí, trao đổi qua địa chỉ mail</span>
                              <span class="txtMain font-Montserrat"><?= $email ?></span>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </article>
                </section>

                <footer>
                  <div class="footerComapnyBox">
                    <article class="footerWrap clf">
                      <div class="footerLogo">
                        <img src="<?= $TemplateUrl ?>/library/images/common/logo2.png" alt="Công ty cổ phần LEXIMCO">
                      </div>
                      <div class="companyInfoInfo">
                        <p class="tle">Công ty cổ phần LEXIMCO</p>
                        <ul class="clf">
                          <li class="liLeft"><p>Trụ sở chính</p></li>
                          <li class="liRight"><p>Mã bưu điện 564-0051 Osaka, Suita, Toyotsucho, 9−15 Nihon Kougyou phòng 801<br>TEL. 06-4862-5760 / FAX. 06-4862-5761</p></li>
                          <li class="liLeft"><p>Chi nhánh Việt Nam</p></li>
                          <li class="liRight"><p>78-80, Nguyen Duy Hieu, An Hai Dong, Son Tra, Da Nang, Viet Nam</p></li>
                        </ul>
                      </div>
                    </article>
                  </div>
                  <p class="copyRight">&copy; LEXIMCO. All Rights Reserved.</p>
                </footer>
              </div>
            </div>
          </div>
          <?php } else { ?>
          <div class="  pbNested pbNestedWrapper " id="pbBlock1044">
            <div class="pbNested ">
              <div class="pbNested pbNestedWrapper " id="pbBlock1043">
                <section id="footerContact">
                  <div class="footerContactBg parallax-window" data-parallax="scroll" data-speed="0.2" data-position="center center" data-image-src="<?= $TemplateUrl ?>/library/images/common/footerContact_bg.jpg" data-natural-width="1920" data-natural-height="1280"></div>
                  <article class="wrap clf">
                    <p class="txt01 serif">パートナー企業募集中</p>
                    <p class="txt02">クライアントが人材不足でお困りの企業の皆様へ <br>レーシムコが業務提携にて貴社に人材をご提供いたします。 </p>
                    <div class="pagelinkBtn">
                      <div class="btn">
                        <a class="button" href="<?= get_permalink($pageId["contact"]); ?>">
                          <p>お問い合わせはこちら</p>
                        </a>
                      </div>
                    </div>
                    <div class="contactLink">
                      <ul>
                        <li class="l-cv_item liTel">
                          <a href="tel:<?= $telephoneTrim ?>" class="link">
                            <div class="linkInner">
                              <img src="<?= $TemplateUrl ?>/library/images/common/liTel_icon.png" alt="お電話でのお問い合わせ Tel:<?= $telephone ?> 受付時間:平日9:00～18:00" class="contactLinkIcon">
                              <span class="txtSub01 font-Montserrat">お電話でのお問い合わせ</span>
                              <span class="txtMain font-Montserrat">Tel:<?= $telephone ?></span>
                              <span class="txtSub02 font-Montserrat">受付時間:平日9:00～18:00</span>
                            </div>
                          </a>
                        </li>
                        <li class="l-cv_item liWeb">
                          <a href="<?= get_permalink($pageId["contact"]); ?>" class="link">
                            <div class="linkInner">
                              <img src="<?= $TemplateUrl ?>/library/images/common/liWeb_icon.png" alt="Webからの無料相談・お問い合わせ フォームをご利用ください" class="contactLinkIcon">
                              <span class="txtSub01 font-Montserrat">Webからの</span>
                              <span class="txtMain font-Montserrat">無料相談・お問い合わせ</span>
                              <span class="txtSub02 font-Montserrat">フォームをご利用ください</span>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </article>
                </section>
                <footer>
                  <div class="footerNavTop">
                    <article class="footerWrap">
                      <ul class="clf">
                        <li class="li01">
                          <a href="<?php bloginfo('url') ?>">
                            <p>ホーム</p>
                          </a>
                        </li>
                        <li class="li02">
                          <a href="<?= get_permalink($pageId["overview"]) ?>">
                            <p>会社概要</p>
                          </a>
                        </li>
                        <li class="li03">
                          <a href="<?= get_permalink($pageId["faq"]) ?>">
                            <p>よくある質問</p>
                          </a>
                        </li>
                        <li class="li04">
                          <a href="<?= get_permalink($pageId["info"]) ?>">
                            <p>最新情報一覧</p>
                          </a>
                        </li>
                        <li class="li05">
                          <a href="<?= get_permalink($pageId["contact"]) ?>">
                            <p>お問い合わせ</p>
                          </a>
                        </li>
                      </ul>
                    </article>
                  </div>
                  <div class="footerNavBottom clf">
                    <article class="footerWrap clf">
                      <ul class="clf">
                        <li class="li01">
                          <p class="navTle">当社の強み</p>
                          <a href="<?= get_permalink($pageId["reason"]) ?>">
                            <p class="navTxt">レーシムコが選ばれる理由</p>
                          </a>
                          <a href="<?= get_permalink($pageId["orientation"]) ?>">
                            <p class="navTxt">入社オリエンテーション</p>
                          </a>
                          <a href="<?= get_permalink($pageId["strength01"]) ?>">
                            <p class="navTxt">ベトナム人材の国内活用状況と特長</p>
                          </a>
                          <a href="<?= get_permalink($pageId["strength02"]) ?>">
                            <p class="navTxt">ベトナムにおける当社の教育・研修制度</p>
                          </a>
                          <a href="<?= get_permalink($pageId["strength03"]) ?>">
                            <p class="navTxt pb0">ベトナム人材を熟知した当社のサービス</p>
                          </a>
                        </li>
                        <li class="li02">
                          <p class="navTle">人材サービス</p>
                          <a href="<?= get_permalink($pageId["service01"]) ?>">
                            <p class="navTxt">サービス領域</p>
                          </a>
                          <a href="<?= get_permalink($pageId["service02"]) ?>">
                            <p class="navTxt">人材派遣サービス</p>
                          </a>
                          <a href="<?= get_permalink($pageId["service03"]) ?>">
                            <p class="navTxt">人材紹介サービス</p>
                          </a>
                          <a href="<?= get_permalink($pageId["service04"]) ?>">
                            <p class="navTxt pb0">入国管理代行サービス</p>
                          </a>
                        </li>
                        <li class="li03">
                          <p class="navTle">コンサルティング</p>
                          <a href="<?= get_permalink($pageId["consulting01"]) ?>">
                            <p class="navTxt">人材採用コンサルティング</p>
                          </a>
                          <a href="<?= get_permalink($pageId["consulting02"]) ?>">
                            <p class="navTxt">特定技能に関するコンサルティング</p>
                          </a>
                          <a href="<?= get_permalink($pageId["consulting03"]) ?>">
                            <p class="navTxt pb0">技能実習生に関するコンサルティング</p>
                          </a>
                        </li>
                        <li class="li03 type2">
                          <p class="navTle">会社情報</p>
                          <a href="<?= get_permalink($pageId["overview"]) ?>">
                            <p class="navTxt">会社概要</p>
                          </a>
                          <a href="<?= get_permalink($pageId["greeting"]) ?>">
                            <p class="navTxt">代表挨拶</p>
                          </a>
                          <a href="<?= get_permalink($pageId["philosophy"]) ?>">
                            <p class="navTxt">企業理念</p>
                          </a>
                          <a href="<?= get_permalink($pageId["departments"]) ?>">
                            <p class="navTxt">スタッフ紹介</p>
                          </a>
                          <a href="<?= get_permalink($pageId["activities"]) ?>">
                            <p class="navTxt pb0">活動報告</p>
                          </a>
                          <a target="_blank" href="https://th-group.co.jp/">
                            <p class="navTxt pb0">ティーエイチ・グループ</p>
                          </a>
                        </li>
                      </ul>
                    </article>
                  </div>
                  <div class="footerComapnyBox">
                    <article class="footerWrap clf">
                      <div class="footerLogo">
                        <img src="<?= $TemplateUrl ?>/library/images/common/logo2.png" alt="株式会社LEXIMCO（レーシムコ）">
                      </div>
                      <div class="companyInfoInfo">
                        <p class="tle">株式会社LEXIMCO（レーシムコ）</p>
                        <ul class="clf">
                          <li class="liLeft">
                            <p>本　社</p>
                          </li>
                          <li class="liRight">
                            <p>〒564-0051 大阪府吹田市豊津町9-15 日本興業ビル801 <br>TEL. 06-4862-5760 / FAX. 06-4862-5761 </p>
                          </li>
                          <li class="liLeft">
                            <p>埼玉支社</p>
                          </li>
                          <li class="liRight">
                            <p>〒350-1308 埼玉県狭山市中央1丁目46-6-302 <br>TEL. 04-2937-7279 / FAX. 04-2937-7278 </p>
                          </li>
                          <li class="liLeft">
                            <p>山形支社</p>
                          </li>
                          <li class="liRight">
                            <p>〒992-1123 山形県米沢市万世町桑山4066 102号室</p>
                          </li>
                          <li class="liLeft">
                            <p>名古屋支社</p>
                          </li>
                          <li class="liRight">
                            <p>〒456-0012 愛知県名古屋市熱田区沢上1-6-13 FH沢上ビル4階</p>
                          </li>
                          <li class="liLeft">
                            <p>広島支社</p>
                          </li>
                          <li class="liRight">
                            <p>〒720-2410 広島県福山市加茂八軒屋225の4番地</p>
                          </li>
                          <li class="liLeft">
                            <p>ベトナム支社</p>
                          </li>
                          <li class="liRight">
                            <p><?= get_option('address_option') ?></p>
                          </li>
                        </ul>
                      </div>
                    </article>
                  </div>
                  <p class="copyRight">&copy; LEXIMCO. All Rights Reserved.</p>
                </footer>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <?php wp_footer();  ?>
</body>
</html>