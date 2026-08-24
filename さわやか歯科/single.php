<?php get_header(); ?>
<main>
  <article>
    <section class="blog">
      <h3 class="tit_01">
        ブログ
        <br>
        <span>BLOG</span>
      </h3> 
      <div class="blog-container">
        <!-- 左カラム：記事詳細 -->
        <div class="blog-main">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="blog-item">
              <!-- カテゴリー名を表示 -->
              <p class="blog-category">
                <?php 
                  $category = get_the_category();
                  if ( $category ) {
                      echo esc_html( $category[0]->name );
                  }
                ?>
              </p>
              <!-- 記事タイトル -->
              <h1 class="blog-tit"><?php the_title(); ?></h1>
              <!-- 投稿日 -->
              <p class="blog-date"><?php echo get_the_date(); ?></p>
              
              <!-- 記事本文 -->
              <div class="blog-tex-01">
                <?php the_content(); ?>
              </div>
            </div>
          <?php endwhile; endif; ?>
        </div>

        <!-- 右カラム：サイドバー（カテゴリー） -->
        <aside class="blog-sidebar">
          <div class="blog-category-right">
            <p class="blog-category-name">カテゴリー</p>
            <?php
              $categories = get_categories();
              foreach($categories as $category) {
                echo '<p class="blog-category-name-01"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></p>';
              }
            ?>
          </div>
        </aside>
      </div>
    </section>
  </article>
</main>
<?php get_footer(); ?>