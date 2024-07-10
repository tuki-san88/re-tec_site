<?php
/*
 * Template Name: 職人名鑑
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
      'img' => 'sub/img_subMv_artisans',
      'title' => '職人名鑑',
      'text' => '',
    ];
    get_template_part('tmp/subMv', null, $args);
    ?>
    <div class="artist artist-l">
      <div class="inner artist__inner">
        <?php
        $args = [
          [
              'item1' => '役　　職',
              'description1' => 'Re Group　<br class="sp-only">代表取締役　社長',
              'item2' => '氏　　名',
              'description2' => '宮本　佳士',
              'item3' => '資　　格',
              'description3' => '第一種電気工事士<br>電気工事作業指揮者<br>高圧ケーブル工事技能認定<br>低圧電気取扱業務<br>特別高圧電気取扱<br>足場組み立て作業従事者<br>石綿作業主任者<br>研削といし<br>巻き上げ機運転<br>酸素欠乏危険作業<br>職長 安全衛生責任者<br>高所作業車運転技能',
              'image' => get_template_directory_uri() . '/images/sub/img_artist1.png',
              'alt' => 'ReGroup',
              'title' => '',
              'text' => '',
          ],
          [
              'item1' => '役　　職',
              'description1' => 'Re Group　<br class="sp-only">取締役・部長',
              'item2' => '氏　　名',
              'description2' => '能勢　紘弥',
              'item3' => '資　　格',
              'description3' => '第一種電気工事士<br>安全運転管理者<br>電気工事作業指揮者<br>高圧ケーブル工事技能認定<br>低圧電気取扱業務<br>特別高圧電気取扱<br>足場組み立て作業従事者<br>石綿作業主任者<br>研削といし<br>巻き上げ機運転<br>酸素欠乏危険作業<br>職長 安全衛生責任者<br>高所作業車運転技能',
              'image' => get_template_directory_uri() . '/images/sub/img_artist2.png?20240710',
              'alt' => 'ReGroup',
              'title' => '',
              'text' => '',
          ],
          [
              'item1' => '役　　職',
              'description1' => 'Re-tec　<br class="sp-only">工事課　主任',
              'item2' => '氏　　名',
              'description2' => '岩切　隆裕',
              'item3' => '資　　格',
              'description3' => '第一種電気工事士<br>電気工事作業指揮者<br>低圧電気取扱業務<br>特別高圧電気取扱<br>足場組み立て作業従事者<br>石綿作業主任者<br>研削といし<br>巻き上げ機運転<br>酸素欠乏危険作業<br>職長 安全衛生責任者<br>高所作業車運転技能',
              'image' => get_template_directory_uri() . '/images/sub/img_artist3.png?20240710',
              'alt' => 'ReGroup',
              'title' => '',
              'text' => '',
          ],
          [
              'item1' => '配　　属',
              'description1' => 'Re-tec　<br class="sp-only">工事課',
              'item2' => '氏　　名',
              'description2' => '鈴木　翔太',
              'item3' => '資　　格',
              'description3' => '第ニ種電気工事士<br>電気工事作業指揮者<br>低圧電気取扱業務<br>特別高圧電気取扱<br>足場組み立て作業従事者<br>石綿使用建築物等解体業務特別教育<br>研削といし<br>小型移動式クレーン運転技能<br>酸素欠乏危険作業<br>職長 安全衛生責任者<br>高所作業車運転技能',
              'image' => get_template_directory_uri() . '/images/sub/img_artist4.png?20240710',
              'alt' => 'ReGroup',
              'title' => '',
              'text' => '',
          ],
          [
              'item1' => '配　　属',
              'description1' => 'Re-tec　<br class="sp-only">工事課',
              'item2' => '氏　　名',
              'description2' => '春木　皓成',
              'item3' => '資　　格',
              'description3' => '第ニ種電気工事士<br>職長 安全衛生責任者<br>フルハーネス型落制止器具特別教育<br>高所作業車運転技能',
              'image' => get_template_directory_uri() . '/images/sub/img_artist5.png?20240710',
              'alt' => 'ReGroup',
              'title' => '',
              'text' => '',
          ],
          [
              'item1' => '配　　属',
              'description1' => 'Re-tec　<br class="sp-only">工事課',
              'item2' => '氏　　名',
              'description2' => '福本　聖也',
              'item3' => '資　　格',
              'description3' => '第ニ種電気工事士<br>職長 安全衛生責任者<br>フルハーネス型落制止器具特別教育<br>石綿使用建築物等解体業務特別教育',
              'image' => get_template_directory_uri() . '/images/sub/img_artist6.png?20240710',
              'alt' => 'ReGroup',
              'title' => '',
              'text' => '',
          ],
          [
              'item1' => '配　　属',
              'description1' => 'Re Group　<br class="sp-only">総務課',
              'item2' => '氏　　名',
              'description2' => '福島　真樹子',
              'item3' => '資　　格',
              'description3' => '日商PC検定 文章作成<br>日商PC検定 データ活用',
              'image' => get_template_directory_uri() . '/images/sub/img_artist7.png?20240710',
              'alt' => 'ReGroup',
              'title' => '',
              'text' => '',
          ],
          [
              'item1' => '役　　職',
              'description1' => 'Re Group　<br class="sp-only">経理課　主任',
              'item2' => '氏　　名',
              'description2' => '古賀　美紅',
              'item3' => '資　　格',
              'description3' => '雇用管理責任者<br>建設業経理事務士<br>PC検定<br>無線従事者 陸上特殊無線技士<br>健康保険委員',
              'image' => get_template_directory_uri() . '/images/sub/img_artist8.png?20240710',
              'alt' => 'ReGroup',
              'title' => '',
              'text' => '',
          ],
          [
            'item1' => '役　　職',
            'description1' => 'Re Group　<br class="sp-only">企画課　主任',
            'item2' => '氏　　名',
            'description2' => '青山　菜津紀',
            'item3' => '資　　格',
            'description3' => '食品衛生責任者',
            'image' => get_template_directory_uri() . '/images/sub/img_artist9.png?20240710',
            'alt' => 'ReGroup',
            'title' => '',
            'text' => '',
        ],
        [
          'item1' => '配　　属',
          'description1' => 'Sessions',
          'item2' => '氏　　名',
          'description2' => '荒木　結衣',
          'item3' => 'アパレル担当',
          'description3' => '',
          'image' => get_template_directory_uri() . '/images/sub/img_artist10.png?20240710',
          'alt' => 'ReGroup',
          'title' => '',
          'text' => '',
      ],
];
      get_template_part('tmp/directory', null, $args);
      ?>
      </div>
    </div>

  </div>
</main>
<?php get_footer(); ?>