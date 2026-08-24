    <?php get_header(); ?>

    <section class="appointment">
       <h3 class="tit_01">
          オンライン予約
          <br>
          <span>RESERVATION</span>
       </h3> 
       <p>ご希望の日時を選択してください</p>
      <div class="appointment-form">
        <?php echo do_shortcode('[booking_package id=1]'); ?>
      </div>
      
    </section>

    <?php get_footer(); ?>