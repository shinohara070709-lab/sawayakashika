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
        <!-- 左カラム：記事一覧（全件） -->
        <div class="blog-main">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="blog-item">
              <!-- カテゴリー -->
              <p class="blog-category">
                <?php
                  $categories = get_the_category();
                  if (!empty($categories)) {
                    echo esc_html($categories[0]->name);
                  }
                ?>
              </p>

              <!-- タイトル（クリックで詳細ページ single.php へ飛ぶ） -->
              <h2 class="blog-tit">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>

              <!-- 記事本文 -->
              <div class="blog-tex-01">
                <?php the_content(); ?>
              </div>
            </article>
          <?php endwhile; endif; ?>
        </div>

        <!-- 右カラム：サイドバー -->
        <aside class="blog-sidebar">
          <div class="blog-category-right">
            <p class="blog-category-name">カテゴリー</p>
            <?php
              $categories = get_categories();
              foreach ($categories as $category) :
            ?>
              <p class="blog-category-name-01">
                <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
                  <?php echo esc_html($category->name); ?>
                </a>
              </p>
            <?php endforeach; ?>
          </div>
        </aside>
      </div>
    </section>
  </article>
</main>
<?php get_footer(); ?>