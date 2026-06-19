<?php
/**
 * Template Name: ひすいくんのお部屋
 * Description: 横浜主真理教会 公式マスコット「ひすいくん」専用ページ
 *
 * 設置場所: 使用中テーマ(子テーマ推奨)直下の hisuikun/ フォルダ
 */

$hisui_dir    = get_stylesheet_directory_uri() . '/hisuikun';
$hisui_path   = get_stylesheet_directory() . '/hisuikun';
$hisui_assets = $hisui_dir . '/assets';

add_action(
	'wp_enqueue_scripts',
	function() use ( $hisui_dir, $hisui_path ) {
		$theme_style_handles = array(
			'lightning-design-style',
			'lightning-child-style',
			'lightning-child-custom',
		);

		foreach ( $theme_style_handles as $handle ) {
			wp_dequeue_style( $handle );
			wp_deregister_style( $handle );
		}

		wp_enqueue_style(
			'hisuikun-fonts',
			'https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@400;500;700;900&family=Quicksand:wght@500;600&display=swap',
			array(),
			null
		);
		wp_enqueue_style(
			'hisuikun',
			$hisui_dir . '/hisuikun.css',
			array( 'hisuikun-fonts' ),
			filemtime( $hisui_path . '/hisuikun.css' )
		);
		wp_enqueue_script(
			'hisuikun',
			$hisui_dir . '/hisuikun.js',
			array(),
			filemtime( $hisui_path . '/hisuikun.js' ),
			true
		);
	},
	100
);
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class( 'hisui-standalone-page' ); ?>>
<?php wp_body_open(); ?>

<main class="hisui-page">
<!-- ================= HERO ================= -->
<header class="hisui-hero">
  <div class="hisui-hero-clouds" aria-hidden="true"><span class="hisui-c1"></span><span class="hisui-c2"></span></div>
  <div class="hisui-hero-skyline" aria-hidden="true">
    <svg viewBox="0 0 1440 220" preserveAspectRatio="xMidYMax slice">
      <g fill="#2D6E8E" fill-opacity=".055">
        <!-- ビル群 -->
        <rect x="500" y="150" width="46" height="70" rx="3"/>
        <rect x="560" y="124" width="56" height="96" rx="3"/>
        <rect x="630" y="160" width="38" height="60" rx="3"/>
        <rect x="1330" y="138" width="52" height="82" rx="3"/>
        <rect x="1395" y="164" width="38" height="56" rx="3"/>
      </g>
      <g stroke="#2D6E8E" stroke-opacity=".075" fill="none" stroke-linecap="round">
        <!-- ベイブリッジ -->
        <path d="M10,172 H420" stroke-width="10"/>
        <path d="M104,86 V172 M128,86 V172 M104,112 H128 M296,86 V172 M320,86 V172 M296,112 H320" stroke-width="9"/>
        <path d="M12,166 Q116,88 212,150 Q308,88 416,166" stroke-width="6"/>
      </g>
      <g fill="#2D6E8E" fill-opacity=".085">
        <!-- ランドマークタワー -->
        <path d="M885,220 L905,58 Q920,48 935,58 L955,220 Z"/>
        <!-- 帆形ホテル -->
        <path d="M975,220 Q1000,120 1095,108 L1100,220 Z"/>
      </g>
      <g stroke="#2D6E8E" stroke-opacity=".09" fill="none" stroke-width="7">
        <!-- 観覧車 -->
        <circle cx="1205" cy="128" r="62"/>
        <path d="M1205,66 V190 M1143,128 H1267 M1162,85 L1248,171 M1248,85 L1162,171"/>
        <path d="M1165,220 L1205,130 L1245,220" stroke-width="9"/>
      </g>
    </svg>
  </div>
  <p class="hisui-eyebrow">YOKOHAMA LORD TRUTH CHURCH<br>OFFICIAL MASCOT</p>
  <img class="hisui-hero-logo" src="<?php echo esc_url( $hisui_assets . '/hisui_logo.webp' ); ?>" alt="ひすいくん 公式ロゴ">
  <p class="hisui-hero-lead">横浜主真理教会 公式マスコットキャラクター</p>
  <div class="hisui-hero-figure">
    <div class="hisui-hero-bubble">はじめましてだっぴ！</div>
    <img class="hisui-chara" src="<?php echo esc_url( $hisui_assets . '/hisui_cross.webp' ); ?>" alt="十字架を持ったひすいくん">
  </div>
  <div class="hisui-scroll-hint">SCROLL<svg viewBox="0 0 16 46" fill="none" aria-hidden="true"><path d="M8 1 V36 M2 31 L8 38 L14 31" stroke="#6FB0B8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
</header>

<div class="hisui-wave" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none"><path d="M0,28 C160,52 280,8 440,26 C600,44 700,10 880,26 C1060,42 1180,12 1320,28 C1380,35 1420,30 1440,28 L1440,60 L0,60 Z" fill="#F4FBFC"/></svg>
</div>

<!-- ================= ごあいさつ ================= -->
<section class="hisui-greet">
  <div class="hisui-inner">
    <p class="hisui-eyebrow hisui-fade">GREETING</p>
    <h2 class="hisui-sec-title hisui-fade">ぼく、ひすいくんだっぴ！</h2>
    <div class="hisui-greet-grid">
      <div class="hisui-greet-text hisui-fade">
        <p>ぼくは、きれいな川のそばでくらしている<span class="hisui-accent">かわせみ</span>だっぴ。横浜主真理教会のすぐ横をながれる川で生まれて、いまは牧師さんを目指してるっぴよ。</p>
        <p>ぼくのお仕事は、みんなを<span class="hisui-accent-b">えがお</span>にすることだっぴ。今日も教会から聞こえる<span class="hisui-accent">愛のことば</span>を届けて、みんなの心をぽかぽかにするっぴよー！</p>
        <p>はじめての人も、だいかんげい。このページで、ぼくのことをちょっとだけ知っていってほしいっぴ。</p>
      </div>
      <div class="hisui-greet-img hisui-fade">
        <img src="<?php echo esc_url( $hisui_assets . '/hisui_normal.webp' ); ?>" alt="上を見上げるひすいくん">
      </div>
    </div>
  </div>
</section>

<div class="hisui-wave" style="transform:scaleY(-1)" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none"><path d="M0,28 C160,52 280,8 440,26 C600,44 700,10 880,26 C1060,42 1180,12 1320,28 C1380,35 1420,30 1440,28 L1440,60 L0,60 Z" fill="#F4FBFC"/></svg>
</div>

<!-- ================= プロフィール ================= -->
<section class="hisui-profile">
  <div class="hisui-inner">
    <p class="hisui-eyebrow hisui-fade">PROFILE</p>
    <h2 class="hisui-sec-title hisui-fade">ぼくのこと、紹介するっぴ</h2>
    <div class="hisui-profile-list">
      <div class="hisui-p-item hisui-fade">
        <div class="hisui-p-label"><svg viewBox="0 0 24 24" fill="none"><path d="M12 21c-4.5-3.6-8-7-8-10.5A8 8 0 0 1 12 3a8 8 0 0 1 8 7.5C20 14 16.5 17.4 12 21Z" stroke="#6FB0B8" stroke-width="2.4" stroke-linejoin="round"/></svg>うまれたところ</div>
        <div class="hisui-p-value">教会のとなりの川<small>横浜市瀬谷区在住だっぴ</small></div>
      </div>
      <div class="hisui-p-item hisui-fade">
        <div class="hisui-p-label"><svg viewBox="0 0 24 24" fill="none"><rect x="3.5" y="5" width="17" height="15.5" rx="3" stroke="#6FB0B8" stroke-width="2.4"/><path d="M3.5 10h17M8 3v4M16 3v4" stroke="#6FB0B8" stroke-width="2.4" stroke-linecap="round"/></svg>おたんじょうび</div>
        <div class="hisui-p-value">12月9日<small>いまの教会ができた日だっぴ！</small></div>
      </div>
      <div class="hisui-p-item hisui-fade">
        <div class="hisui-p-label"><svg viewBox="0 0 24 24" fill="none"><path d="M12 3v18M5 9l7-6 7 6" stroke="#6FB0B8" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>しんちょう・たいじゅう</div>
        <div class="hisui-p-value">17cm・31g</div>
        <button class="hisui-tap-btn" data-memo="1" data-src="<?php echo esc_url( $hisui_assets . '/memo1.webp' ); ?>"><img class="hisui-tap-face" src="<?php echo esc_url( $hisui_assets . '/hisui_face.webp' ); ?>" alt="">タップしてみるっぴ！</button>
      </div>
      <div class="hisui-p-item hisui-fade">
        <div class="hisui-p-label"><svg viewBox="0 0 24 24" fill="none"><path d="M12 21s-7.5-4.6-7.5-10A4.5 4.5 0 0 1 12 7.6 4.5 4.5 0 0 1 19.5 11c0 5.4-7.5 10-7.5 10Z" stroke="#6FB0B8" stroke-width="2.4" stroke-linejoin="round"/></svg>せいかく</div>
        <div class="hisui-p-value">ほがらか・社交的<small>みんなとお話しするのがだいすき</small></div>
      </div>
      <div class="hisui-p-item hisui-fade">
        <div class="hisui-p-label"><svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="8.5" stroke="#6FB0B8" stroke-width="2.4"/><path d="M8.5 12.5l2.5 2.5 4.5-5" stroke="#6FB0B8" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>すきなたべもの</div>
        <div class="hisui-p-value">シウマイ弁当<small>横浜名物だっぴ</small></div>
        <button class="hisui-tap-btn" data-memo="2" data-src="<?php echo esc_url( $hisui_assets . '/memo2.webp' ); ?>"><img class="hisui-tap-face" src="<?php echo esc_url( $hisui_assets . '/hisui_face.webp' ); ?>" alt="">タップしてみるっぴ！</button>
      </div>
      <div class="hisui-p-item hisui-fade">
        <div class="hisui-p-label"><svg viewBox="0 0 24 24" fill="none"><path d="M5 19c4-1 5-4 5-7l9-7-2 9c-3 0-6 1-7 5l-5 0Z" stroke="#6FB0B8" stroke-width="2.4" stroke-linejoin="round"/></svg>とくぎ</div>
        <div class="hisui-p-value">川へのダイブ・ピアノ</div>
        <button class="hisui-tap-btn" data-memo="3" data-src="<?php echo esc_url( $hisui_assets . '/memo3.webp' ); ?>"><img class="hisui-tap-face" src="<?php echo esc_url( $hisui_assets . '/hisui_face.webp' ); ?>" alt="">タップしてみるっぴ！</button>
      </div>
      <div class="hisui-p-item hisui-fade">
        <div class="hisui-p-label"><svg viewBox="0 0 24 24" fill="none"><path d="M12 3c1 3 4 4 4 8a4 4 0 1 1-8 0c0-4 3-5 4-8Z" stroke="#6FB0B8" stroke-width="2.4" stroke-linejoin="round"/><path d="M9 17c-2 1-3 2.4-3 4h12c0-1.6-1-3-3-4" stroke="#6FB0B8" stroke-width="2.4" stroke-linecap="round"/></svg>しゅみ</div>
        <div class="hisui-p-value">お花のお世話・ごみひろい<small>川と街をぴかぴかにするっぴ</small></div>
      </div>
      <div class="hisui-p-item hisui-fade">
        <div class="hisui-p-label"><svg viewBox="0 0 24 24" fill="none"><path d="M12 4l2.2 4.6 5 .7-3.6 3.5.9 5-4.5-2.4-4.5 2.4.9-5L4.8 9.3l5-.7L12 4Z" stroke="#6FB0B8" stroke-width="2.4" stroke-linejoin="round"/></svg>しょうらいのゆめ</div>
        <div class="hisui-p-value">牧師さん<small>あたたかな愛をひろめたいっぴ</small></div>
      </div>
    </div>
  </div>
</section>

<div class="hisui-wave" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none"><path d="M0,28 C160,52 280,8 440,26 C600,44 700,10 880,26 C1060,42 1180,12 1320,28 C1380,35 1420,30 1440,28 L1440,60 L0,60 Z" fill="#F4FBFC"/></svg>
</div>

<!-- ================= なまえのひみつ ================= -->
<section class="hisui-name">
  <div class="hisui-inner">
    <p class="hisui-eyebrow hisui-fade">NAME</p>
    <h2 class="hisui-sec-title hisui-fade">なまえのひみつ、おしえるっぴ</h2>
    <div class="hisui-name-card hisui-fade">
      <div class="hisui-name-word">ひすい<small>くん</small></div>
      <div class="hisui-name-formula">
        <span class="hisui-name-chip hisui-chip-jade">翡翠</span>
        <span class="hisui-name-plus">＝</span>
        <span class="hisui-name-chip hisui-chip-blue">青</span>
        <span class="hisui-name-plus">＋</span>
        <span class="hisui-name-chip hisui-chip-green">緑</span>
      </div>
      <p class="hisui-name-note">「ひすい」は、かわせみの別名でもあるっぴ。きれいな川にすむかわせみが、<span class="hisui-accent">教会のそばの川にもいる</span>ことから名前をもらったっぴよ。</p>
      <p class="hisui-name-note" style="margin-top:1em;">体が宝石の翡翠みたいな色だから、というのもあるっぴ。<span class="hisui-accent">清く、命を愛する、あたたかな教会になれるように</span>——そんな想いがこもった名前だっぴ。</p>
    </div>
  </div>
</section>

<div class="hisui-wave" style="transform:scaleY(-1)" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none"><path d="M0,28 C160,52 280,8 440,26 C600,44 700,10 880,26 C1060,42 1180,12 1320,28 C1380,35 1420,30 1440,28 L1440,60 L0,60 Z" fill="#F4FBFC"/></svg>
</div>

<!-- ================= ギャラリー ================= -->
<section class="hisui-gallery">
  <div class="hisui-inner">
    <p class="hisui-eyebrow hisui-fade">GALLERY</p>
    <h2 class="hisui-sec-title hisui-fade">ぼくのアルバムだっぴ</h2>
    <div class="hisui-g-grid">
      <div class="hisui-g-card hisui-fade"><img src="<?php echo esc_url( $hisui_assets . '/hisui_cross.webp' ); ?>" alt="十字架を持つひすいくん"></div>
      <div class="hisui-g-card hisui-fade"><img src="<?php echo esc_url( $hisui_assets . '/hisui_normal.webp' ); ?>" alt="見上げるひすいくん"></div>
      <div class="hisui-g-card hisui-fade"><img src="<?php echo esc_url( $hisui_assets . '/hisui_gorone.webp' ); ?>" alt="ごろごろするひすいくん"></div>
      <div class="hisui-g-card hisui-fade"><img src="<?php echo esc_url( $hisui_assets . '/hisui_broom.webp' ); ?>" alt="ほうきでお掃除するひすいくん"></div>
    </div>
    <p class="hisui-g-note hisui-fade">公式LINEスタンプも、なかまたちが配信中だっぴ🎵</p>
  </div>
</section>

<!-- ================= アウトロ ================= -->
<section class="hisui-outro">
  <div class="hisui-inner">
    <p class="hisui-eyebrow hisui-fade">SEE YOU</p>
    <p class="hisui-outro-msg hisui-fade">教会で、待ってるっぴ！</p>
    <p class="hisui-outro-sub hisui-fade">横浜主真理教会は、毎日をがんばるみんなが<br>明日へのパワーを充電できる、<span class="hisui-accent">最高にあたたかい場所</span>を目指してるっぴ。<br>ぼくと いっしょに、ほっとひと息つきにきてほしいっぴよ。</p>
    <img class="hisui-outro-run hisui-fade" src="<?php echo esc_url( $hisui_assets . '/hisui_running.webp' ); ?>" alt="てくてく歩くひすいくん">
  </div>
  <img class="hisui-outro-temple" src="<?php echo esc_url( $hisui_assets . '/hisui_temple.webp' ); ?>" alt="横浜主真理教会の聖殿" aria-hidden="false">
  <div class="hisui-ground"></div>
</section>

<div class="hisui-footer">© YOKOHAMA LORD TRUTH CHURCH — HISUI-KUN</div>

<button class="hisui-to-top" id="hisuiToTop" aria-label="ページの先頭へ戻る"><img src="<?php echo esc_url( $hisui_assets . '/hisui_totop.webp' ); ?>" alt=""></button>

<!-- ================= かわせみメモ モーダル ================= -->
<div class="hisui-modal" id="hisuiModal" role="dialog" aria-modal="true" aria-label="かわせみメモ">
  <span class="hisui-ripple" aria-hidden="true"></span>
  <span class="hisui-ripple hisui-r2" aria-hidden="true"></span>
  <div class="hisui-modal-box">
    <button class="hisui-modal-close" id="hisuiModalClose" aria-label="とじる">×</button>
    <img id="hisuiModalImg" src="" alt="かわせみメモ">
  </div>
</div>
</main>

<?php wp_footer(); ?>
</body>
</html>
