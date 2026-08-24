<!DOCTYPE html>
<html>
  <head>
    <title>さわやか歯科クリニック</title>
    <meta charset="UTF-8">
    <meta name="description" content="地域に寄り添うさわやか歯科クリニック。一般歯科から小児歯科、予防歯科、口腔外科まで幅広く対応いたします。丁寧なカウンセリングと安心の医療設備で、お子様からご高齢の方までお口の健康をサポート。WEB・お電話にてご予約受付中。">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <!-- ボディ -->
  <body>
    <!-- ヘッダー -->
    <header>
      <!-- ロゴ -->
      <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img2/logo2.svg" alt="トップページに戻る">
      </a>
      <!-- PC用ナビゲーション -->
      <nav class="nav-pc">
       <ul>
        <li><a href="<?php echo esc_url(home_url('/concept/')); ?>">コンセプト</a></li>
        <li><a href="<?php echo esc_url(home_url('/service/')); ?>">診療内容</a></li>
        <li><a href="<?php echo esc_url(home_url('/appointment/')); ?>">オンライン予約</a></li>
        <li><a href="<?php echo esc_url(home_url('/#access')); ?>">アクセス</a></li>
        <li><a href="<?php echo esc_url(home_url('/#contact')); ?>">お問い合わせ</a></li>
       </ul>
      </nav>

      <!-- スマホ用ハンバーガーメニュー（追加） -->
      <div class="nav-sp">
        <input type="checkbox" id="drawer-checkbox" class="drawer-checkbox">
        <label for="drawer-checkbox" class="drawer-icon">
          <span></span>
          <span></span>
          <span></span>
        </label>
        <div class="drawer-content">
          <ul>
            <li><a href="<?php echo esc_url(home_url('/concept/')); ?>">コンセプト</a></li>
            <li><a href="<?php echo esc_url(home_url('/service/')); ?>">診療内容</a></li>
            <li><a href="<?php echo esc_url(home_url('/appointment/')); ?>">オンライン予約</a></li>
            <li><a href="<?php echo esc_url(home_url('/#access')); ?>">アクセス</a></li>
            <li><a href="<?php echo esc_url(home_url('/#contact')); ?>">お問い合わせ</a></li>
          </ul>
        </div>
      </div>
    </header>