# ひすいくんのお部屋 — WordPress組み込みパッケージ

横浜主真理教会 公式マスコット「ひすいくん」専用ページの
WordPressテーマ組み込み用ファイル一式です。

## フォルダ構成

```
hisuikun/
├── page-hisuikun.php   … 固定ページ用テンプレート(Template Name: ひすいくんのお部屋)
├── hisuikun.css        … ページ専用スタイル(全クラスに hisui- 接頭辞付き)
├── hisuikun.js         … フェードイン / かわせみメモ / トップへ戻る の動作
└── assets/             … 画像12点(WebP形式)
    ├── hisui_logo.webp      公式ロゴ
    ├── hisui_cross.webp     十字架ひすいくん
    ├── hisui_normal.webp    上向きひすいくん
    ├── hisui_gorone.webp    ごろ寝
    ├── hisui_broom.webp     お掃除
    ├── hisui_running.webp   向かってます
    ├── hisui_face.webp      丸顔アイコン(ボタン用)
    ├── hisui_totop.webp     トップへ戻るボタン
    ├── hisui_temple.webp    聖殿
    └── memo1〜3.webp        かわせみメモ その1〜3
```

## インストール手順

1. この `hisuikun` フォルダを **まるごと**、使用中テーマの直下にアップロードします。
   - 例: `wp-content/themes/お使いのテーマ名/hisuikun/`
   - テーマ更新で消えないよう、**子テーマの利用を推奨**します
     (子テーマの場合も子テーマフォルダ直下に置けばOK。
     パスは `get_stylesheet_directory_uri()` で解決されます)。
2. WordPress管理画面 → 固定ページ → 新規追加。
3. タイトルを付け(例:「ひすいくんのお部屋」)、ページ設定の
   「テンプレート」から **「ひすいくんのお部屋」** を選択します。
4. 公開して表示を確認してください。

※ 本文(ブロックエディタの内容)は使用しません。
   ページの中身はすべてテンプレート側に記述されています。

## 仕様メモ

- CSS/JS/Webフォント(Zen Maru Gothic, Quicksand)は
  このテンプレートを使うページでのみ読み込まれます。
- テーマとの衝突対策として、クラスはすべて `hisui-` 接頭辞付き、
  スタイルは `.hisui-page` 配下にスコープしています。
  テーマのヘッダー/フッターはそのまま表示されます。
- ダークモード環境での黒帯対策(`color-scheme: only light`)を含みます。
- `prefers-reduced-motion` 設定時はアニメーションを停止します。

## よくあるカスタマイズ

- **色の変更**: `hisukun.css` 冒頭の `.hisui-page{ --sora: ... }` の
  CSS変数を編集してください。
- **文言の変更**: `page-hisuikun.php` 内のテキストを直接編集してください。
- **フォントをキアロ等に変更**: フォント読み込みを差し替えた上で、
  `hisuikun.css` 内の `font-family:'Zen Maru Gothic'` を変更してください。
- **ヒーローの上余白**: テーマのヘッダーが固定(オーバーレイ)型の場合は、
  `.hisui-hero` の `padding` 上側を調整してください。

## 動作要件

- WordPress 5.8 以降を推奨(WebP画像のため)
- PHP 7.4 以降
