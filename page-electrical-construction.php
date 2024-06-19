<?php
/*
 * Template Name: 電気工事
 */
?>
<!-- 各ページへのリンクfunction呼び出し -->
<?php $urls = get_my_urls(); ?>
<?php get_header(); ?>
<main>
  <div class="sub">
    <!-- 下層MV mod = st_img_sp_none st_yellow st_pink st_green -->
    <?php
    $args = [
      'mod' => 'st_yellow',
      'img' => 'sub/img_subMv_electrical',
      'title' => '電気工事',
      'text' => '-Electrical construction-',
    ];
    get_template_part('tmp/subMv', null, $args);
    ?>
    <!-- ワンストップ工事とは -->
    <div class="secElectricalTop">
      <p class="secElectricalTop__head"><small>当社が選ばれる理由</small> 電気工事における<span>ワンストップ工事</span>とは</p>
      <div class="secElectricalTop__img">
        <?php
        $args = [
          'pictureImg' => 'sub/img_electricalTop',
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
      <div class="secElectricalTop__body">
        <p class="secElectricalTop__text baseText">
          当社は、下請け業者に依存せず、自社で工事を行うことで、効率性とコスト削減を実現しています。<br>
          このアプローチにより、工事のスケジュールや品質管理について完全なコントロールを維持し、お客様のニーズに迅速にご対応できます。<br>
          さらに、下請け業者に支払う余分な費用を削減することで、コスト効率が向上し、競争力のある価格設定が可能となります。これにより、お客様に高品質なサービスを提供するだけでなく、予算内での工事を実現し、大変ご満足いただいております。<br>
          当社のワンストップ工事のアプローチは、信頼性と利便性が高く、お客様から選ばれている理由の一つとなっています。
        </p>
      </div>
    </div>
    <!-- 取扱工事内容 -->
    <section class="secElectricalWrap secElectricalWrap-l">
      <div class="secElectricalWrap__head">
        <h2 class="secTitle">取扱工事内容</h2>
      </div>
      <div class="secElectricalWrap__body">
        <!-- メディアパーツ mod = st_yellow st_pink st_green reverse -->
        <?php
        $args = [
          'mod' => 'st_yellow reverse',
          [
            'title' => '高圧電気設備<br>(新設・改修工事）',
            'text' => '高圧電気設備の新設および改修工事を通じて、産業用の工場様向けに信頼性と効率性を提供します。私たちは、最新のテクノロジーと高度な技術を駆使し、電力インフラの確保と効率化に焦点を当てています。<br><br>新設工事においては、工場の特定のニーズに合わせたカスタム設計を行い、高圧電気設備を迅速に展開します。また、高度な制御システムを導入することで、設備の遠隔監視と効率的なエネルギー利用を実現します。<br><br>改修工事では、老朽化した設備のアップグレードや環境に配慮したアプローチを採用し、持続可能な電力供給を保証します。工場様との信頼を築くために、高圧電気設備の専門知識と安全性を最優先に考え、プロジェクトの成功と生産性向上を実現します。　',
            'img' => 'sub/img_media_elect1',
          ],
          [
            'title' => '低圧電気設備',
            'text' => '低圧電気設備においても、工場様向けに高い信頼性と効率性を提供し、持続可能なエネルギー供給を実現します。私たちは最新のテクノロジーと専門的な技術を結集し、電力インフラの最適な管理に注力しています。<br><br>新設工事に際しては、工場の独自の要件に合わせてカスタムデザインを行い、低圧電気設備の迅速な展開をサポートします。高度な制御システムを統合することで、リアルタイムのモニタリングとエネルギー効率の最大化を実現します。<br><br>改修工事では、老朽化した設備のアップグレードを行い、エコフレンドリーなソリューションを提供します。私たちは低圧電気設備のスペシャリストとして、専門知識と安全対策を最優先に考慮し、工場様の要求を満たし、生産性向上に貢献します。低圧電気設備における信頼とパフォーマンス向上に、ReGroupがお手伝いいたします。',
            'img' => 'sub/img_media_elect2',
          ],
          [
            'title' => '電気土木工事',
            'text' => '電気土木工事分野において、私たちは電力インフラの効率的な運用と安定供給を実現することに焦点を当てています。高度な技術と経験を駆使し、公共のプロジェクトにおける信頼性と品質を提供します。<br><br>新規プロジェクトでは、地域の特定要件に合わせた独自の設計を行い、電気土木工事を迅速かつ効果的に展開します。また、最新の監視技術とリモート管理システムを導入することで、プロジェクトの進捗状況をリアルタイムで確認し、エネルギー資源の最大活用を実現します。<br><br>既存プロジェクトの改修では、施設のアップデートと環境への配慮を重視し、持続可能な電力供給を確保します。私たちは電気土木工事の専門家として、安全性と効率性を常に最優先に考え、プロジェクトの成功と地域社会への貢献を実現します。信頼性と持続可能性に焦点を当てることで、ReSessionsが電気土木工事分野でのリーダーシップを発揮します。',
            'img' => 'sub/img_media_elect3',
          ],
          [
            'title' => '空調設備工事',
            'text' => '空調設備工事において、私たちは快適な環境と効率的なエネルギー利用を実現します。高度な技術と経験を活かし、建物や施設の空調システムを最適化し、品質と信頼性を提供します。<br><br>新規プロジェクトでは、顧客のニーズに合致するカスタム設計を行い、最新の空調技術を組み込んでいます。さらに、エネルギー効率の向上と環境への配慮を念頭に、設備の効率的な運用を実現します。結果として、快適で持続可能な室内環境を提供し、エネルギーコストを削減します。<br><br>既存プロジェクトの改修においても、老朽化した設備のアップグレードと保守を行い、設備の寿命を延ばします。私たちは空調設備工事の専門家として、安全性と効率性に重点を置き、プロジェクトの成功と施設の運用効率向上を実現します。信頼性と環境への配慮に焦点を当てることで、ReGroupが空調設備工事分野でのリーダーシップを発揮します。',
            'img' => 'sub/img_media_elect4',
          ],
          [
            'title' => '計装工事',
            'text' => '計装工事において、私たちは正確さと効率性を追求します。高度な計測技術と専門知識を活かし、プロセス制御システムや計測装置の設計、設置、保守を提供します。<br><br>新規プロジェクトにおいては、顧客のニーズに合わせた計測装置のカスタム設計を行い、生産プロセスを最適化します。また、遠隔監視とデータ収集のための高度な計測システムを導入することで、プロセスの効率化を図ります。<br><br>既存プロジェクトの改修においても、計測装置のアップグレードと保守を通じて、施設の長寿命化を実現します。私たちは計装工事のエキスパートとして、高精度と信頼性を提供し、プロジェクトの成功と生産性向上を実現します。計装工事の分野で、ReGroupは品質と安全性を確保し、顧客の期待に応えます。',
            'img' => 'sub/img_media_elect5',
          ],
        ];
        get_template_part('tmp/media', null, $args);
        ?>
      </div>
    </section>
    <!-- 関連情報 -->
    <div class="subInfo subInfo-1">
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