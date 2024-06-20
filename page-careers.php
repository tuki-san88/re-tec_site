<?php
/*
 * Template Name: 採用情報
 */
?>
<!-- 各ページへのリンクfunction呼び出し -->
<?php $urls = get_my_urls(); ?>
<?php get_header(); ?>
<main>
  <div class="sub">
    <!-- 下層MV mod = img_sp_none(SP時は画像がない) st_yellow st_pink st_green st_green-light -->
    <?php
    $args = [
      'mod' => '',
      'img' => 'sub/img_subMv_careers',
      'title' => '採用情報',
      'text' => '',
    ];
    get_template_part('tmp/subMv', null, $args);
    ?>
    <div class="secCareerHead">
      <div class="inner">
        <p class="secCareerHead__text">
          令和という新しい時代<br>
          若手を中心とした、進化する建設業の在り方で<br>
          活気があり信用に満ちた事業を目指します。
        </p>
      </div>
    </div>
    <section class="secCareerContent1 secCareerContent1-l">
      <div class="inner">
        <h2 class="secCareerContent1__title secTitle">会社からの恩返し</h2>
        <div class="secCareerContent1__img">
          <?php
          $args = [
            'pictureImg' => 'sub/img_content1_career',
            'spImg' => '',
            'spImgName' => '',
            'alt' => '',
            'file' => '.jpg',
            'webp' => 'true',
            'pcWidth' => '',
            'pcHeight' => '',
            'spWidth' => '',
            'spHeight' => '',
            'async' => 'true',
            'lazy' => 'true',
          ];
          get_template_part('tmp/picture', null, $args);
          ?>
        </div>
        <div class="secCareerContent1__body">
          <p class="secCareerContent1__text">
            株式会社 Re-tecの福利厚生は<br>
            普段お仕事を頑張ってくれる従業員への<br>
            恩返しを込めて手厚く対応してます<br>
            お仕事が頑張れるのも家庭があるからこそ!<br>
            と考えており、会社が協力出来る事は<br>
            全力で応援・協力をしよう! と<br>
            心掛けております<br>
            おめでたい事は一緒に祝い<br>
            会社みんなで喜びを分かち合う事が出来る<br>
            会社であり続けたいと思っています
          </p>
        </div>
      </div>
    </section>
    <section class="secCareerContent2 secCareerContent2-l">
      <div class="secCareerContent2__head">
        <h2 class="secCareerContent2__title secTitle">募集職種!</h2>
      </div>
      <div class="secCareerContent2__body1">
        <!-- メディアパーツ mod = st_yellow st_pink st_green reverse(PC時左右反転) ver2(titleが一番上に配置) -->
        <?php
        $args = [
          'mod' => 'st_yellow ver2',
          [
            'title' => '電気設備工事職',
            'text' => '
            業務内容<br>
            高圧電気設備工事（新設・改修工事）<br>
            低圧電気設備工事・電気土木工事<br>
            空調設備工事・計装工事<br>
            <br>
            主に、大規模な老人ホーム・ホテルの新設工事や<br>
            大手工場・大学病院等の改修工事などを行っています。<br>
            <br>
            工事エリア★大津～野洲～八日市・京都・大阪<br>
            <br>
            ★１人１台社用車支給！<br>
            ★入社後、業務に必要な資格取得制度あり（規定による）<br><br>
            ☆増員の為、3名募集
            ',
            'img' => 'sub/img_media_elect1',
          ],
        ];
        get_template_part('tmp/media', null, $args);
        ?>
      </div>
      <div class="secCareerContent2__body2">
        <div class="secCareerContent2__list inner">
          <!-- 求人情報 'mod' => 'st_done'で現在募集は行なっておりませんの表示をする -->
          <?php
          $args = [
            'mod' => '',
            [
              'item' => '給与',
              'description' => '240,000円〜400,000円',
            ],
            [
              'item' => '勤務先',
              'description' => '〒520-2277<br>滋賀県大津市関津3丁目5-6',
            ],
            [
              'item' => '賞与',
              'description' => '業績による　2023年実績　2ヶ月分/2回',
            ],
            [
              'item' => '社員数',
              'description' => '13名',
            ],
            [
              'item' => '資格',
              'description' => '第二種電気工事士（あれば尚可）<br>無資格での応募もお待ちしております',
            ],
            [
              'item' => '休日',
              'description' => '105日',
            ],
            [
              'item' => '学歴・経験',
              'description' => '不問',
            ],
            [
              'item' => '試用期間',
              'description' => '期間　１ヵ月～２ヶ月程度<br>日給制：１０，０００円～',
            ],
            [
              'item' => '雇用形態',
              'description' => '正社員',
            ],
            [
              'item' => 'その他の手当等',
              'description' => '
            資格手当：１０，０００円～<br>
            家族手当：５，０００円～<br>
            子供手当：５，０００円～<br>
            出張手当：２，０００円～
            ',
            ],
          ];
          get_template_part('tmp/overview', null, $args);
          ?>
        </div>
      </div>
      <div class="secCareerContent2__body3">
        <!-- メディアパーツ mod = st_yellow st_pink st_green reverse(PC時左右反転) ver2(titleが一番上に配置) -->
        <?php
        $args = [
          'mod' => 'st_pink reverse ver2',
          [
            'title' => 'スィーツ販売スタッフ',
            'text' => '
            業務内容<br>
            当店では、お客様に美味しいスイーツを提供するために、以下の業務を行います。<br>
            <br>
            スイーツの製造：手作りのスイーツを作成し、品質管理を行います。<br>
            販売業務：お客様への接客や注文の受け付け、商品の販売を行います。<br>
            店舗の清掃：清潔な店内環境を保つための清掃業務を行います。<br>
            <br>
            スイーツやお菓子に興味があり、明るい対人関係が得意な方<br>
            チームワークを大切にできる方<br>
            未経験者歓迎、経験者優遇<br>
            ご応募お待ちしております。
            ',
            'img' => 'sub/img_media_sweets2',
          ],
        ];
        get_template_part('tmp/media', null, $args);
        ?>
      </div>
      <div class="secCareerContent2__body4">
        <div class="secCareerContent2__list inner">
          <!-- 求人情報 'mod' => 'st_done'で現在募集は行なっておりませんの表示をする -->
          <?php
          $args = [
            'mod' => 'st_done',
            [
              'item' => '給与',
              'description' => '240,000円〜400,000円',
            ],
            [
              'item' => '勤務先',
              'description' => '〒520-2277<br>滋賀県大津市関津3丁目5-6',
            ],
            [
              'item' => '賞与',
              'description' => '業績による　2023年実績　2ヶ月分/2回',
            ],
            [
              'item' => '社員数',
              'description' => '13名',
            ],
            [
              'item' => '資格',
              'description' => '第二種電気工事士（あれば尚可）<br>無資格での応募もお待ちしております',
            ],
            [
              'item' => '休日',
              'description' => '105日',
            ],
            [
              'item' => '',
              'description' => '',
            ],
            [
              'item' => '試用期間',
              'description' => '期間　１ヵ月～２ヶ月程度<br>日給制：１０，０００円～',
            ],
            [
              'item' => '雇用形態',
              'description' => '正社員',
            ],
            [
              'item' => 'その他の手当等',
              'description' => '
            資格手当：１０，０００円～<br>
            家族手当：５，０００円～<br>
            子供手当：５，０００円～<br>
            出張手当：２，０００円～
            ',
            ],
          ];
          get_template_part('tmp/overview', null, $args);
          ?>
        </div>
      </div>
    </section>
    <!-- 福利厚生 -->
    <section class="secWelfare secWelfare-l">
      <div class="inner">
        <h2 class="secWelfare__title secTitle">福利厚生</h2>
        <div class="secWelfare__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/sub/img_welfare.jpg" alt="">
        </div>
        <div class="secWelfare__body inner">
          <?php
          $accordionLists = array(
            array(
              "title" => "出産祝い金",
              "text" => "
                お子様が産まれると<br>
                毎月子供手当が支給され<br>
                出産後は会社から出産御祝い金を<br>
                お渡ししています<br>
                とてもおめでたい事なので<br>
                会社としても嬉しい限りです
              ",
            ),
            array(
              "title" => "育児休暇の取得",
              "text" => "
                産休・育休含め<br>
                1年間の休暇取得をしています<br>
                もし、保育園が決まらなかった場合<br>
                1年を超えた休暇になってしまっても<br>
                その都度対応していきます。
              ",
            ),
            array(
              "title" => "男性育児休暇の取得",
              "text" => "
                株式会社Re-Groupでは<br>
                男性育児休暇を100%取得しています 現場や奥様の状況、 <br>
                赤ちゃんの状況 全てを踏まえ、休暇の期間を社長と相談し<br>
                その都度決めていきます<br>
                出産後の奥様は体のダメージも大きく 心のケアも大切です!<br>
                そんな中、 日々小さな命と<br>
                向き合うのが奥様だけなんておかしい<br>
                奥様を支え、協力し合える<br>
                そんな環境作りをしています!
              ",
            ),
            array(
              "title" => "結婚祝い金",
              "text" => "
                とてもおめでたい事なので会社としても<br>
                一緒にお祝いし、 力になりたいと思い 毎月家族手当が支給され<br>
                結婚後は勤続年数に応じて<br>
                5万円~最大10万円の<br>
                御祝い金をお渡ししています
              ",
            ),
          );
          ?>
          <?php foreach ($accordionLists as $accordionList) { ?>
            <div class="accordion">
              <button class="accordion__btn hoverOpacity js-accordion__btn secTitleSub" aria-expanded="false" aria-label="開閉"> <?php echo $accordionList["title"]; ?></button>
              <div class="accordion__body" aria-hidden="true">
                <div>
                  <p class="accordion__text baseText"><?php echo $accordionList["text"]; ?></p>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
        <div class="secWelfare__bottom">
          <div class="secWelfare__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sub/img_welfare2.jpg" alt="">
          </div>
        </div>
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>