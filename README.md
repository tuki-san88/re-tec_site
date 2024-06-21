## 仕様について
- 下層ページ・ドロワーメニュー、フッター用のcssは`css/sub.css`を使用しています。 
- 下層ページ・ドロワーメニュー用のjsは`js/sub.js`を使用しています。
- スライダーは「Swiper」を使用しています。
- `_gulp`、`src`フォルダは開発用に作成したものなので本番反映前には削除お願いします。 
- `tmp`フォルダ内に各ページにして使用しているテンプレートパーツを格納しています。
- サイト軽量化のため数箇所で画像をwebpで表示している箇所があります（フォールバックで各拡張子も設定しています）。その際は以下の`tmp/picture.php`のテンプレートを使用しています。 呼び出す際は以下のコードを記載しています。カスタムフィールドなどWordPress設定でややこしなった場合は以下の記載を削除して`img`タグに書き換えてもらって大丈夫です。
```
<?php
    $args = [
      'pictureImg' => 'common/image', //画像パス
      'spImg' => 'true', //trueの場合スマホ用画像を表示する
      'spImgName' => '', //スマホ用画像のファイル名（PC用画像ファイル名の末尾につけたものを記載）
      'alt' => '', //alt属性
      'file' => '.jpg', //ファイル拡張子
      'webp' => 'true', //trueの場合webpで画像を表示
      'pcWidth' => '850', //PC用画像の幅
      'pcHeight' => '567', //PC用画像の高さ
      'spWidth' => '390', //スマホ用画像の幅
      'spHeight' => '260', //スマホ用画像の高さ
      'async' => 'true', //trueの場合画像を非同期で読み込み
      'lazy' => 'true', //trueの場合画像を遅延読み込み
    ];
    get_template_part('tmp/picture', null, $args);
?>
```
- 各ページへのリンクは`functions.php`内の以下の記述にて一括管理しています。 
```
/* 各ページへのリンク */
function get_my_urls()
{
	return array(
        // トップ
        'home' => esc_url(home_url("/")),
		// 会社案内
        'company' => esc_url(home_url("/company/")),
        // 事業案内
        'business' => esc_url(home_url("/business/")),
        // 電気工事事案
        'electrical' => esc_url(home_url("/electrical-construction/")),
        // アパレル事案
        'apparel' => esc_url(home_url("/apparel/")),
        // スイーツ事業
        'sweets' => esc_url(home_url("/sweets/")),
        // 自動車工事事案
        'automotive' => esc_url(home_url("/automotive/")),
        // 採用について
        'careers' => esc_url(home_url("/careers/")),
        // 職人名盤
        'artisans' => esc_url(home_url("/artisans/")),
        // 事業所一覧
        'offices' => esc_url(home_url("/offices/")),
        // 施工実績（一覧）
        'Archive' => esc_url(home_url("/")),
        // プライバシーポリシー
        'privacy' => esc_url(home_url("/")),
        // お問い合わせ
        'contact' => esc_url(home_url("/")),
	);
}
```
以下のコードを各ページの最上部付近にて記載して各リンクに呼び出しております。
```
<!-- 各ページへのリンクfunction呼び出し -->
<?php $urls = get_my_urls(); ?>

各リンクでの設置例
<a href="<?php echo $urls['company']; ?>">会社案内</a>
```
- 各ページで構築効率化のため以下のような配列やテンプレートパーツを多用しています。
```
 <?php
    $args = [
      [
        'item1' => '氏　　名',
        'description1' => $name,
        'item2' => '年　　齢',
        'description2' => '35',
        'item3' => '資　　格',
        'description3' => '第一種電気工事士',
        'image' => $img,
        'alt' => 'ReGroup',
        'title' => '大切にしている事',
      ],
    ];
  get_template_part('tmp/directory', null, $args);
  ?>
```  
以下のように複数配列を使っている箇所は[]を増やせばコンテンツを増やせます。
``` 
<?php
    $args = [
      [
        'item1' => '氏　　名',
        'description1' => $name,
        'item2' => '年　　齢',
        'description2' => '35',
        'item3' => '資　　格',
        'description3' => '第一種電気工事士',
        'image' => $img,
        'alt' => 'ReGroup',
        'title' => '大切にしている事',
      ],
      [
        'item1' => '氏　　名',
        'description1' => $name,
        'item2' => '年　　齢',
        'description2' => '35',
        'item3' => '資　　格',
        'description3' => '第一種電気工事士',
        'image' => $img,
        'alt' => 'ReGroup',
        'title' => '大切にしている事',
      ],
    ];
  get_template_part('tmp/directory', null, $args);
  ?>
``` 
カスタムフィールドなどを組み込む場合は以下のように記載すれば可能です（例はACFの場合） 
``` 
 <?php $img = get_field('img'); ?>

 <?php
    $args = [
      [
        'description1' => $name,
        'image' => $img,
      ],
    ];
  get_template_part('tmp/directory', null, $args);
  ?>
```