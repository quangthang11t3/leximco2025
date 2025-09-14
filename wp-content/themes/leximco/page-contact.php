<?php
/**
 * Template Name: Contact
 *
 * @package WordPress
 */
 ?>
 <?php 
	global $TemplateUrl;
 	get_header();
?>
<?php 	if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php
// Validation
$inquiryType = array(
  "1" => "人材派遣・人材紹介・その他サービスを依頼したい",
  "2" => "見積もりを依頼したい",
  "3" => "サービス内容を詳しく知りたい",
  "4" => "業務提携の内容を詳しく知りたい",
  "5" => "その他",
);
$inquiry_type_radio = (!isset($_POST['inquiry_type_radio']) || !$inquiryType[$_POST['inquiry_type_radio']]) ? '' : $_POST['inquiry_type_radio'];
$inquiry_detail = (isset($_POST['inquiry_detail'])) ? $_POST['inquiry_detail'] : '';
$inquiry_name = (isset($_POST['inquiry_name'])) ? $_POST['inquiry_name'] : '';
$inquiry_furigana = (isset($_POST['inquiry_furigana'])) ? $_POST['inquiry_furigana'] : '';
$inquiry_email = (isset($_POST['inquiry_email'])) ? $_POST['inquiry_email'] : '';
$inquiry_company_name = (isset($_POST['inquiry_company_name'])) ? $_POST['inquiry_company_name'] : '';
$inquiry_telephone = (isset($_POST['inquiry_telephone'])) ? $_POST['inquiry_telephone'] : '';
$inquiry_post_code = (isset($_POST['inquiry_post_code'])) ? $_POST['inquiry_post_code'] : '';
$inquiry_prefectures = (isset($_POST['inquiry_prefectures'])) ? $_POST['inquiry_prefectures'] : '';
$inquiry_city = (isset($_POST['inquiry_city'])) ? $_POST['inquiry_city'] : '';
$inquiry_building = (isset($_POST['inquiry_building'])) ? $_POST['inquiry_building'] : '';
$inquiry_policy = (isset($_POST['inquiry_policy'])) ? $_POST['inquiry_policy'] : '';
$isNeedValidate = false;
if (isset($_POST['check']) && $_POST['check'] === '1'){
  $isNeedValidate = true;
  $errorsArray = array();
  if (empty($inquiry_type_radio)) array_push($errorsArray, "お問い合わせ事項の選択は必須です。");
  if (empty($inquiry_detail)) array_push($errorsArray, "お問い合わせ内容の入力は必須です。");
  if (empty($inquiry_name)) array_push($errorsArray, "お名前の入力は必須です。");
  if (empty($inquiry_furigana)) array_push($errorsArray, "フリガナの入力は必須です。");
  if (empty($inquiry_email)) {
    array_push($errorsArray, "メールアドレスの入力は必須です。");
  }elseif(!(bool)filter_var($inquiry_email, FILTER_VALIDATE_EMAIL)){
    array_push($errorsArray, "メールアドレスが間違っています。");
  }

  if (empty($inquiry_telephone)) {
    array_push($errorsArray, "電話番号の入力は必須です。");
  } elseif ($inquiry_telephone && !!!preg_match('/^[0-9\-.]+$/', $inquiry_telephone)){
    array_push($errorsArray, "電話番号の入力が間違っています。");
  }
  if (empty($inquiry_post_code)){
    array_push($errorsArray, "郵便番号の入力は必須です。");
  } elseif (!!!preg_match('/^\d{3}-?\d{4}$/', $inquiry_post_code)){
    array_push($errorsArray, "郵便番号の入力が間違っています。");
  }
  if (empty($inquiry_prefectures)) array_push($errorsArray, "都道府県の入力は必須です。");
  if (empty($inquiry_city)) array_push($errorsArray, "市区郡・町村県の入力は必須です。");
  if (empty($inquiry_building)) array_push($errorsArray, "番地、建物名の入力は必須です。");
  if ($inquiry_policy !== "1") array_push($errorsArray, "下記規約に関しての選択は必須です。");
}
?>
<div class="pbNested ">
  <div class="pbNested pbNestedWrapper " id="pbBlock1251">
    <section class="topImage_page">
      <div class="topImageWrap">
        <article id="pageIntro">
          <div class="inner">
            <h2 class="serif">お問い合わせ</h2>
            <h1 class="serif"><?php the_title(); ?></h1>
          </div>
        </article>
        <div id="imgContainer">
          <?php the_post_thumbnail('full'); ?>
        </div>
      </div>
      <article id="page_leadTxt">
        <div class="txtCont">
          <h3 class="serif">外国人材不足でお悩みでしたら、ベトナムのスペシャリストであるレーシムコにお任せください。人材派遣、人材紹介、その他各種サービスで人材不足を解消いたします。</h3>
        </div>
      </article>
    </section>
    <!-- / .topImage_page -->
  </div>
  <div class="pbNested pbNestedWrapper pbAnchor pbBaseBlockWrapper pbExcluded" id="pbBlock1584">
    <a name="form" id="form"></a>
  </div>
  <div class="base-section pbNested pbNestedWrapper step_1" id="pbBlock1541">
    <div class="pbNested ">
<?php if (!isset($_POST['check']) || empty($_POST['check']) || ($_POST['check'] === '1' && !empty($errorsArray))) { ?>
      <div class="pbNested pbNestedWrapper " id="pbBlock1249">
        <form id="contact_form" method="post" action="<?php the_permalink() ?>">
          <input type="hidden" name="check" value="1" />
          <div class="pbCorner pbCornerQuery">
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
<?php
if ($isNeedValidate){
  if (!empty($errorsArray)){
    echo '<tr><td colspan="2" class="pbErrorMsg">';
    foreach ($errorsArray as $key => $value) {
      echo '<div class="pbErrorMsg">'.$value.'</div>';
    }
    echo '</td></tr>';
  }
}
?>
              <tr>
                <td class="pbLabel queryOneLineLabel pbLabel" style="width:35%;" colspan="2">
                  <div class="pbCornerQueryLabelOnly">お問い合わせ内容</div>
                </td>
              </tr>
              <tr>
                <td class="pbLabel" style="width:35%;" >
                  お問い合わせ事項<span class="pbCornerQueryLabelRequired">必須</span>
                </td>
                <td>
                  <div>
                    <table border="0" cellspacing="0" cellpadding="0" style="border: none 0px #ffffff;">
                      <tr>
                        <td valign="top" style="white-space:nowrap;border: none 0px #ffffff;"><span class="pbOptionForth"></span></td>
                        <td style="border: none 0px #ffffff;">
                          <div>
                            <input type="radio" <?= $inquiry_type_radio === "1" ? "checked='checked'" : "" ?> name="inquiry_type_radio" value="1" id="query1003-1" />
                            <label for="query1003-1"><?= $inquiryType["1"] ?></label>
                          </div>
                          <div>
                            <input type="radio" <?= $inquiry_type_radio === "2" ? "checked='checked'" : "" ?> name="inquiry_type_radio" value="2" id="query1003-2" />
                            <label for="query1003-2"><?= $inquiryType["2"] ?></label>
                          </div>
                          <div>
                            <input type="radio" <?= $inquiry_type_radio === "3" ? "checked='checked'" : "" ?> name="inquiry_type_radio" value="3" id="query1003-3" />
                            <label for="query1003-3"><?= $inquiryType["3"] ?></label>
                          </div>
                          <div>
                            <input type="radio" <?= $inquiry_type_radio === "4" ? "checked='checked'" : "" ?> name="inquiry_type_radio" value="4" id="query1003-4" />
                            <label for="query1003-4"><?= $inquiryType["4"] ?></label>
                          </div>
                          <div>
                            <input type="radio" <?= $inquiry_type_radio === "5" ? "checked='checked'" : "" ?> name="inquiry_type_radio" value="5" id="query1003-5" />
                            <label for="query1003-5"><?= $inquiryType["5"] ?></label>
                          </div>
                        </td>
                        <td valign="top" style="white-space:nowrap;border: none 0px #ffffff;"><span class="pbOptionForth"></span></td>
                      </tr>
                    </table>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="pbLabel" style="width:35%;" >
                  <label for=query_area_1004>お問い合わせ内容</label><span class="pbCornerQueryLabelRequired">必須</span>
                </td>
                <td>
                  <div>
                    <textarea id="query_area_1004" name="inquiry_detail" cols="35" rows="5" class="pbInputForm queryFormEvent"><?= $inquiry_detail ?></textarea>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="pbLabel queryOneLineLabel pbLabel" style="width:35%;" colspan="2">
                  <div class="pbCornerQueryLabelOnly">お客様情報</div>
                </td>
              </tr>
              <tr>
                <td class="pbLabel" style="width:35%;" >
                  <label for=query_text_1006>お名前</label><span class="pbCornerQueryLabelRequired">必須</span>
                </td>
                <td>
                  <div>      
                    <input id="query_text_1006" type="text" name="inquiry_name" value="<?= $inquiry_name ?>" size="50" class="pbInputForm queryFormEvent" />
                  </div>
                  <div>
                    <span class="pbDescription">例）山田 太郎</span>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="pbLabel" style="width:35%;" >
                  <label for=query_text_1007>フリガナ</label><span class="pbCornerQueryLabelRequired">必須</span>
                </td>
                <td>
                  <div>
                    <input id="query_text_1007" type="text" name="inquiry_furigana" value="<?= $inquiry_furigana ?>" size="50" class="pbInputForm queryFormEvent" />
                    <span class="pbOptionForth">例）ヤマダ タロウ</span>
                  </div>
                  <div>
                    <span class="pbDescription">※必ず全角カタカナで入力して下さい。</span>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="pbLabel" style="width:35%;" >
                  <label for=query_email_1008>メールアドレス</label><span class="pbCornerQueryLabelRequired">必須</span>
                </td>
                <td>
                  <div>
                    <input id="query_email_1008" type="text" name="inquiry_email" value="<?= $inquiry_email ?>" size="35" class="pbInputForm queryFormEvent" />
                    <span class="pbOptionForth">例）yamada@mmm.co.jp（半角英数字）</span>
                  </div>
                  <div>
                    <span class="pbDescription">※携帯電話のアドレスはご登録できません。</span>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="pbLabel" style="width:35%;" >
                  <label for=query_text_1009>会社名</label>
                </td>
                <td>
                  <div>
                    <input id="query_text_1009" type="text" name="inquiry_company_name" value="<?= $inquiry_company_name ?>" size="50" class="pbInputForm queryFormEvent" />
                  </div>
                  <div>
                    <span class="pbDescription">例）株式会社レーシムコ</span>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="pbLabel" style="width:35%;" >
                  <label for=query_tel_1010>電話番号</label><span class="pbCornerQueryLabelRequired">必須</span>
                </td>
                <td>
                  <div class='small'>
                    <input id="query_tel_1010" type="text" name="inquiry_telephone" value="<?= $inquiry_telephone ?>" size="15" maxlength="24" class="pbInputForm queryFormEvent" />
                  </div>
                  <div>
                    <span class="pbDescription">例）06-4862-5760（半角数字）</span>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="pbLabel" style="width:35%;" >
                  <label for=query_post_1011>郵便番号</label><span class="pbCornerQueryLabelRequired">必須</span>
                </td>
                <td>
                  <div class='small'>
                    <input id="query_post_1011" type="text" name="inquiry_post_code" value="<?= $inquiry_post_code ?>" size="9" maxlength="8" class="pbInputForm queryFormEvent" />
                  </div>
                  <div>
                    <span class="pbDescription">例）564-0051（半角英数字）</span>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="pbLabel" style="width:35%;" >
                  <label for=query_text_1012>都道府県</label><span class="pbCornerQueryLabelRequired">必須</span>
                </td>
                <td>
                  <div>
                    <input id="query_text_1012" type="text" name="inquiry_prefectures" value="<?= $inquiry_prefectures ?>" size="50" class="pbInputForm queryFormEvent" />
                  </div>
                  <div>
                    <span class="pbDescription">例）大阪府</span>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="pbLabel" style="width:35%;" >
                  <label for=query_text_1013>市区郡・町村県</label><span class="pbCornerQueryLabelRequired">必須</span>
                </td>
                <td>
                  <div>
                    <input id="query_text_1013" type="text" name="inquiry_city" value="<?= $inquiry_city ?>" size="50" class="pbInputForm queryFormEvent" />
                  </div>
                  <div>
                    <span class="pbDescription">例）吹田市豊津町</span>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="pbLabel" style="width:35%;" >
                  <label for=query_text_1014>番地、建物名</label><span class="pbCornerQueryLabelRequired">必須</span>
                </td>
                <td>
                  <div>
                    <input id="query_text_1014" type="text" name="inquiry_building" value="<?= $inquiry_building ?>" size="50" class="pbInputForm queryFormEvent" />
                  </div>
                  <div>
                    <span class="pbDescription">例）9-15 日本興業ビル801</span>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="pbLabel" style="width:35%;" >
                  下記規約に関して<span class="pbCornerQueryLabelRequired">必須</span>
                </td>
                <td>
                  <table border="0" cellspacing="0" cellpadding="0" style="border: none 0px #ffffff;">
                    <tr>
                      <td valign="top" style="border: none 0px #ffffff;"><span class="pbOptionForth"></span></td>
                      <td style="border: none 0px #ffffff;">
                        <div>
                          <input <?= $inquiry_policy === '1' ? "checked='checked'" : "" ?> type="checkbox" name="inquiry_policy" value="1" id="query1015-1" />
                          <label for="query1015-1">読んだ上で同意する</label>
                        </div>
                      </td>
                      <td valign="top" style="border: none 0px #ffffff;"><span class="pbOptionForth"></span></td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td colspan="2" class="forTdCellCenter">
                  <input type="submit" value="確認画面へ" style="vertical-align:middle" /> &nbsp;
                </td>
              </tr>
            </table>
          </div>
        </form>
      </div>
      <div class="  pbNested pbNestedWrapper " id="pbBlock1595">
        <div class="pbNested ">
          <div class="pbNested pbNestedWrapper " id="pbBlock1594">
            <article class="formSet clf pt0_pc pt0_sp pb0_pc pb0_sp">
              <div class="privacypolicyWindow">
                <dl class="privacypolicyArea">
                  <dt>
                    <p class="articleLead alignCenter">
                      <span class="bold">お問い合わせに関する個人情報の取り扱い</span>
                    </p>
                  </dt>
                  <dd>
                    <div class="contact_privacy">
                      <h1 class="mainH1">下記事項をご確認の上、『同意する』にチェックをして頂き、お問い合わせフォームをご利用下さい。</h1>
                      <div class="kakomi">
                        <h2 class="mainTle serif">個人情報の利用目的</h2>
                        <p class="leadTxt">お客様よりお預かりした個人情報は、以下の目的に限定し利用させていただきます。</p>
                        <div class="privacyContents">
                          <ul class="ul1w">
                            <li style="width:100%; margin:0;">
                              <p class="subTxt">本サービスに関する顧客管理</p>
                            </li>
                            <li style="width:100%; margin:0;">
                              <p class="subTxt">本サービスの運営上必要な事項のご連絡</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="kakomi">
                        <h2 class="mainTle serif">個人情報の提供について</h2>
                        <p class="leadTxt">当社ではお客様の同意を得た場合または法令に定められた場合を除き、取得した個人情報を第三者に提供することはいたしません。</p>
                      </div>
                      <div class="kakomi">
                        <h2 class="mainTle serif">個人情報の委託について</h2>
                        <p class="leadTxt">当社では、利用目的の達成に必要な範囲において、個人情報を外部に委託する場合があります。</p>
                        <p class="leadTxt">これらの委託先に対しては個人情報保護契約等の措置をとり、適切な監督を行います。</p>
                      </div>
                      <div class="kakomi">
                        <h2 class="mainTle serif">個人情報の安全管理</h2>
                        <p class="leadTxt">当社では、個人情報の漏洩等がなされないよう、適切に安全管理対策を実施します。</p>
                      </div>
                      <div class="kakomi">
                        <h2 class="mainTle serif">個人情報を与えなかった場合に生じる結果</h2>
                        <p class="leadTxt">必要な情報を頂けない場合は、それに対応した当社のサービスをご提供できない場合がございますので予めご了承ください。</p>
                      </div>
                      <div class="kakomi">
                        <h2 class="mainTle serif">個人情報の開示･訂正・削除･利用停止の手続について</h2>
                        <p class="leadTxt">当社では、お客様の個人情報の開示･訂正･削除・利用停止の手続を定めさせて頂いております。ご本人である事を確認のうえ、対応させて頂きます。 個人情報の開示･訂正･削除・利用停止の具体的手続きにつきましては、お電話でお問合せ下さい。</p>
                      </div>
                      <div class="kakomi">
                        <h2 class="mainTle serif">お問い合せ</h2>
                        <p class="leadTxt">当社の個人情報の取扱に関するお問い合せは下記までご連絡ください。</p>
                        <p class="txt" style="line-height:1.6em;">株式会社 LEXIMCO（レーシムコ） <br>〒564-0051 大阪府吹田市豊津町9-15 日本興業ビル801 <br>TEL. 06-4862-5760 <br>FAX. 06-4862-5761 <br>月～金曜日（祝日を除く）9:00～18:00 </p>
                      </div>
                    </div>
                  </dd>
                </dl>
              </div>
            </article>
          </div>
        </div>
      </div>
<?php } elseif ($_POST['check'] !== '2'){ ?>
      <div class="pbNested pbNestedWrapper" id="pbBlock1555">
        <p class="base-contact">以下の内容でお間違いなければ、<br />「完了画面へ」ボタンを押してください。</p>
      </div>
<div class="pbNested pbNestedWrapper " id="pbBlock1249">
  <form id="contact-form" method="post" action="<?php the_permalink() ?>">
    <div><input type="hidden" name="check" value="2" /></div>
    <div class="pbCorner pbCornerQuery ">
      <table class="confirm" cellspacing="0" cellpadding="0" border="0">
        <tbody>
          <tr>
            <td class="pbLabel">
              <input type="hidden" name="inquiry_type_radio" value="<?= $inquiry_type_radio ?>">お問い合わせ事項
            </td>
            <td class="pbData"><?= $inquiryType[$inquiry_type_radio] ?></td>
          </tr>
          <tr>
            <td class="pbLabel">
              <input type="hidden" name="inquiry_detail" value="<?= $inquiry_detail ?>">お問い合わせ内容
            </td>
            <td class="pbData"><?= $inquiry_detail ?></td>
          </tr>
          <tr>
            <td class="pbLabel">
              <input type="hidden" name="inquiry_name" value="<?= $inquiry_name ?>">お名前
            </td>
            <td class="pbData"><?= $inquiry_name ?></td>
          </tr>
          <tr>
            <td class="pbLabel">
              <input type="hidden" name="inquiry_furigana" value="<?= $inquiry_furigana ?>">フリガナ
            </td>
            <td class="pbData"><?= $inquiry_furigana ?></td>
          </tr>
          <tr>
            <td class="pbLabel">
              <input type="hidden" name="inquiry_email" value="<?= $inquiry_email ?>">メールアドレス
            </td>
            <td class="pbData"><?= $inquiry_email ?></td>
          </tr>
          <tr>
            <td class="pbLabel">
              <input type="hidden" name="inquiry_company_name" value="<?= $inquiry_company_name ?>">会社名
            </td>
            <td class="pbData"><?= $inquiry_company_name ?></td>
          </tr>
          <tr>
            <td class="pbLabel">
              <input type="hidden" name="inquiry_telephone" value="<?= $inquiry_telephone ?>">電話番号
            </td>
            <td class="pbData"><?= $inquiry_telephone ?></td>
          </tr>
          <tr>
            <td class="pbLabel">
              <input type="hidden" name="inquiry_post_code" value="<?= $inquiry_post_code ?>">郵便番号
            </td>
            <td class="pbData"><?= $inquiry_post_code ?></td>
          </tr>
          <tr>
            <td class="pbLabel">
              <input type="hidden" name="inquiry_prefectures" value="<?= $inquiry_prefectures ?>">都道府県
            </td>
            <td class="pbData"><?= $inquiry_prefectures ?></td>
          </tr>
          <tr>
            <td class="pbLabel">
              <input type="hidden" name="inquiry_city" value="<?= $inquiry_city ?>">市区郡・町村県
            </td>
            <td class="pbData"><?= $inquiry_city ?></td>
          </tr>
          <tr>
            <td class="pbLabel">
              <input type="hidden" name="inquiry_building" value="<?= $inquiry_building ?>">番地、建物名
            </td>
            <td class="pbData"><?= $inquiry_building ?></td>
          </tr>
          <tr>
            <td class="pbLabel">
              <input type="hidden" name="inquiry_policy" value="1">下記規約に関して
            </td>
            <td class="pbData">読んだ上で同意する</td>
          </tr>
          <tr>
            <td colspan="2" class="forTdCellCenter">
              <input type="submit" class="pbQueryOk" value="完了画面へ" style="vertical-align:middle">
              <input type="button" class="pbQueryCancel" value="前画面へ戻る" style="vertical-align:middle">
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </form>
  <script>
    jQuery('#contact-form .pbQueryCancel').on('click', function(){
      jQuery('#contact-form [name="check"]').val("0")
      jQuery('#contact-form').submit();
    })
  </script>
</div>
<?php } else {
  wp_mail($inquiry_email, '【株式会社LEXIMCO】お問い合わせを受け付けました','この度はお問い合わせ頂き、ありがとうございます。<br>お問い合わせ頂きました内容につきましては後日、担当者より回答のご連絡をいたします。<br>
<br>
------------------------------<br>
ご入力内容<br>
------------------------------<br>
<br>
【お問い合わせ事項】：'.$inquiryType[$inquiry_type_radio].'<br>
【お問い合わせ内容】：'.$inquiry_detail.'<br>
【お名前】：'.$inquiry_name.'<br>
【フリガナ】：'.$inquiry_furigana.'<br>
【メールアドレス】：'.$inquiry_email.'<br>
【会社名】：'.$inquiry_company_name.'<br>
【電話番号】：'.$inquiry_telephone.'<br>
【郵便番号】：'.$inquiry_post_code.'<br>
【都道府県】：'.$inquiry_prefectures.'<br>
【市区郡・町村県】：'.$inquiry_city.'<br>
【番地、建物名】：'.$inquiry_building.'<br>
<br>
------------------------------<br>
<br>
運営会社：株式会社LEXIMCO<br>
本社：〒564-0051 大阪府吹田市豊津町9-15 日本興業ビル801<br>
URL：https://leximco.co.jp<br>
TEL：06-4862-5760<br>
FAX：06-4862-5761<br>
<br>
------------------------------', array('Content-Type: text/html; charset=UTF-8'));
wp_mail('info@leximco.co.jp', '【株式会社LEXIMCO】お問い合わせがありました','株式会社LEXIMCOのお問い合わせフォームより以下の内容でお問い合わせがありました。<br>
<br>
━━━━━━　内容　━━━━━━<br>
【お問い合わせ事項】：'.$inquiryType[$inquiry_type_radio].'<br>
【お問い合わせ内容】：'.$inquiry_detail.'<br>
【お名前】：'.$inquiry_name.'<br>
【フリガナ】：'.$inquiry_furigana.'<br>
【メールアドレス】：'.$inquiry_email.'<br>
【会社名】：'.$inquiry_company_name.'<br>
【電話番号】：'.$inquiry_telephone.'<br>
【郵便番号】：'.$inquiry_post_code.'<br>
【都道府県】：'.$inquiry_prefectures.'<br>
【市区郡・町村県】：'.$inquiry_city.'<br>
【番地、建物名】：'.$inquiry_building.'<br>
<br>
------------------------------<br>
<br>
運営会社：株式会社LEXIMCO<br>
本社：〒564-0051 大阪府吹田市豊津町9-15 日本興業ビル801<br>
URL：https://leximco.co.jp<br>
TEL：06-4862-5760<br>
FAX：06-4862-5761<br>
<br>
------------------------------', array('Content-Type: text/html; charset=UTF-8'));

  echo '<div class="pbNested pbNestedWrapper " id="pbBlock1555">
  <p class="base-contact">
    お問い合わせを受け付けました。<br>
    この度は弊社ホームページをご利用いただきまして、<br>
    誠にありがとうございます。<br><br>
    お問い合わせいただきました内容を確認後、<br>
    担当者より改めてご連絡いたします。
  </p>
</div>';
} ?>
    </div>

  </div>
</div>
<?php 	endwhile;?>
<?php 	endif; ?>
<?php get_footer(); ?>

