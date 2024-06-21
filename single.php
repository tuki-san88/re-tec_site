<?php
/*
 * Template Name: 実績詳細
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
      'mod' => 'img_sp_none',
      'img' => 'sub/img_subMv_actuarial',
      'title' => '施工実績',
      'text' => '',
    ];
    get_template_part('tmp/subMv', null, $args);
    ?>
    <!-- 実績詳細 -->
    <div class="actualResult">
      <div class="actualResult__head">
        <div class="actualResult__img">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('post-thumbnail', array('class' => 'クラス名', 'alt' => the_title_attribute('echo=0'))); ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="actualResult__content1">
        <div class="actualResult__title secTitle"><?php the_title(); ?></div>
        <div class="actualResult__block">
          <div class="actualResult__title__inner inner">
            <div class="actualResult__lists">
              <div class="actualResult__list"><span>施工開始日</span><span>2023.10.25</span></div>
              <div class="actualResult__list"><span>施工完了日</span><span>2023.10.25</span></div>
              <div class="actualResult__list"><span>電気工事種類</span><span>高圧電気</span></div>
              <div class="actualResult__list"><span>所在地</span><span>草津市</span></div>
              <div class="actualResult__list"><span>テキスト</span><span>テキスト</span></div>
              <div class="actualResult__list"><span>テキスト</span><span>テキスト</span></div>
              <div class="actualResult__list"><span>テキスト</span><span>テキスト</span></div>
              <div class="actualResult__list"><span>テキスト</span><span>テキスト</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="actualResult__content2">
        <div class="media st_yellow sp_color_none">
          <div class="media__item">
            <div class="media__content media__content--1">
              <div class="media__textWrap">
                <p class="media__text baseText">
                  高圧電気設備の新設および改修工事を通じて、産業用の工場様向けに信頼性と効率性を提供します。私たちは、最新のテクノロジーと高度な技術を駆使し、電力インフラの確保と効率化に焦点を当てています。<br>
                  <br>
                  新設工事においては、工場の特定のニーズに合わせたカスタム設計を行い、高圧電気設備を迅速に展開します。また、高度な制御システムを導入することで、設備の遠隔監視と効率的なエネルギー利用を実現します。<br>
                  <br>
                  改修工事では、老朽化した設備のアップグレードや環境に配慮したアプローチを採用し、持続可能な電力供給を保証します。工場様との信頼を築くために、高圧電気設備の専門知識と安全性を最優先に考え、プロジェクトの成功と生産性向上を実現します。
                </p>
              </div>
            </div>
            <div class="media__content media__content--2">
              <div class="media__imgWrap">
                <div class="media__img">
                  <img src="<?php echo get_template_directory_uri() ?>/images/sub/img_media_elect1.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="media__item">
            <div class="media__content media__content--1">
              <div class="media__textWrap">
                <p class="media__text baseText">
                  低圧電気設備においても、工場様向けに高い信頼性と効率性を提供し、持続可能なエネルギー供給を実現します。私たちは最新のテクノロジーと専門的な技術を結集し、電力インフラの最適な管理に注力しています。<br>
                  <br>
                  新設工事に際しては、工場の独自の要件に合わせてカスタムデザインを行い、低圧電気設備の迅速な展開をサポートします。高度な制御システムを統合することで、リアルタイムのモニタリングとエネルギー効率の最大化を実現します。<br>
                  <br>
                  改修工事では、老朽化した設備のアップグレードを行い、エコフレンドリーなソリューションを提供します。私たちは低圧電気設備のスペシャリストとして、専門知識と安全対策を最優先に考慮し、工場様の要求を満たし、生産性向上に貢献します。低圧電気設備における信頼とパフォーマンス向上に、ReGroupがお手伝いいたします。
                </p>
              </div>
            </div>
            <div class="media__content media__content--2">
              <div class="media__imgWrap">
                <div class="media__img">
                  <img src="<?php echo get_template_directory_uri() ?>/images/sub/img_media_elect2.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="media__item">
            <div class="media__content media__content--1">
              <div class="media__textWrap">
                <p class="media__text baseText">
                  電気土木工事分野において、私たちは電力インフラの効率的な運用と安定供給を実現することに焦点を当てています。高度な技術と経験を駆使し、公共のプロジェクトにおける信頼性と品質を提供します。<br>
                  <br>
                  新規プロジェクトでは、地域の特定要件に合わせた独自の設計を行い、電気土木工事を迅速かつ効果的に展開します。また、最新の監視技術とリモート管理システムを導入することで、プロジェクトの進捗状況をリアルタイムで確認し、エネルギー資源の最大活用を実現します。<br>
                  <br>
                  既存プロジェクトの改修では、施設のアップデートと環境への配慮を重視し、持続可能な電力供給を確保します。私たちは電気土木工事の専門家として、安全性と効率性を常に最優先に考え、プロジェクトの成功と地域社会への貢献を実現します。信頼性と持続可能性に焦点を当てることで、ReSessionsが電気土木工事分野でのリーダーシップを発揮します。
                </p>
              </div>
            </div>
            <div class="media__content media__content--2">
              <div class="media__imgWrap">
                <div class="media__img">
                  <img src="<?php echo get_template_directory_uri() ?>/images/sub/img_media_elect3.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="actualResult__content3 baseText">
        <div class="actualResult__content3__inner inner">
          <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
        </div>
      </div>
      <div class="actualResult__pagination">
        <div class="actualResult__paginationItems baseText">
          <div class="actualResult__paginationItem">
            <?php previous_post_link('%link', '前の記事'); ?>
          </div>
          <div class="actualResult__paginationItem">
            <a href="<?php echo $urls['Archive']; ?>">一覧</a>
          </div>
          <div class="actualResult__paginationItem">
            <?php next_post_link('%link', '次の記事'); ?>
          </div>
        </div>
      </div>
    </div>

    <!-- 関連情報 -->
    <div class="subInfo subInfo-2">
      <div class="inner">
        <?php
        $args = [
          [
            'link' => $urls['contact'],
            'img' => 'sub/img_related_contact.jpg',
            'title' => 'お問い合わせ',
            'titleColor' => 'gray',
            'position' => 'positionBottom',
          ],
          [
            'link' => $urls['careers'],
            'img' => 'sub/img_related_recruit.jpg',
            'title' => '採用について',
            'titleColor' => 'white',
            'position' => 'positionTop',
          ],
        ];
        get_template_part('tmp/relatedInfo', null, $args);
        ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>