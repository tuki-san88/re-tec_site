## 仕様について
- `_gulp`、`src`フォルダは開発用に作成したものなので本番反映前には削除お願いします。 
- `tmp`フォルダ内に各ページにして使用しているテンプレートパーツを格納しています。
- 数箇所で画像をwebpで表示している箇所があります。その際は以下の`tmp/picture.php`のテンプレートを使用しています。 呼び出す際は以下のコードを記載しています。カスタムフィールドなどWordPress設定でややこしなった場合は`img`タグに書き換えてもらって大丈夫です。
```
<?php
    $args = [
      'pictureImg' => 'common/image',
      'spImg' => 'true',
      'spImgName' => '',
      'alt' => '',
      'file' => '.jpg',
      'webp' => 'true',
      'pcWidth' => '850',
      'pcHeight' => '567',
      'spWidth' => '390',
      'spHeight' => '260',
      'async' => 'true',
      'lazy' => 'true',
    ];
    get_template_part('tmp/picture', null, $args);
?>
```
