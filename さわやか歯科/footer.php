 <!-- フッター -->
    <footer>
      <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img2/logo2.svg" alt="トップページに戻る">
      </a>
      <div class="footer-link">
        <a href="<?php echo esc_url(home_url('/concept/')); ?>">コンセプト</a>
        <a href="<?php echo esc_url(home_url('/service/')); ?>">診療内容</a>
        <a href="<?php echo esc_url(home_url('/appointment/')); ?>">オンライン予約</a>
        <a href="<?php echo esc_url(home_url('/#access')); ?>">アクセス</a>
        <a href="<?php echo esc_url(home_url('/#contact')); ?>">お問い合わせ</a>
      </div>
      <p class="copyright">COPYRIGHT&copy;さわやか歯科クリニック All Rights Reserved.</p>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>