<?php

/**
 * Template Name: ブログトップページのテンプレート
 */
?>

<?php get_header(); ?>

<!-- main -->
<main id="main" class="main">
  <!-- InstanceBeginEditable name="main" -->
  <div class="pagettl">
    <h1 class="pagettl__ttl">ブログ</h1>
    <p class="pagettl__description">フリーランスとして働くWebデザイナーの備忘録・メモ</p>
  </div>

  <div class="breadcrumbs wrap">
    <ol>
      <li><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
      <li>ブログ</li>
    </ol>
  </div>

  <!-- contents -->
  <div id="contents" class="blog-contents wrap">
    <section class="blog-main">
      <h2 class="heading">全ての記事一覧</h2>
      <div class="articles">

        <!-- メインループ開始 -->
        <?php


        if (have_posts()) : while (have_posts()) : the_post(); ?>

            <!-- 記事データの取得 -->
            <article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
              <a class="blog__linkbox" href="<?php the_permalink(); ?>">
                <div class="article__info">
                  <!-- 以下spanタグをecho -->
                  <?php
                  $this_categories = get_the_category();
                  $this_categories = $this_categories[0];
                  $parent_cat = $this_categories;
                  if ($this_categories->category_parent) { //category_parentは親カテゴリの「ID」
                    $parent_cat = get_category($this_categories->category_parent);
                  }
                  if ($this_categories) {
                    $this_category_color = get_field('catcolor', 'category_' . $parent_cat->term_id);
                    $this_category_name = $parent_cat->name;
                    echo '<span class="article__info__tag" style="' . esc_attr('background:' . $this_category_color) . ';">';
                  }
                  ?>
                  <!-- ↓ spanタグの中の文字 -->
                  <?php $cat = get_the_category();
                  $cat = $cat[0];
                  if ($cat->parent) {
                    $parent = get_category($cat->parent);
                    echo $parent->cat_name;
                  } else {
                    echo $cat->cat_name;
                  } ?>
                  <!--テンプレートタグ the_category();を使うと、ul>li>aが出力されるので、カテゴリータイトルのみを取得。-->
                  </span>
                  <time class="article__info__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                </div>
                <div class="article__contents">
                  <h2 class="article__title"><?php the_title(); ?></h2>
                  <p class="article__exerpt"><?php echo esc_html(get_the_excerpt()); ?></p>
                </div>
              </a>
            </article>

          <?php endwhile; ?>
          <!-- //メインループの記述 -->

      </div><!-- //articles -->


        <!-- wp_pagenaviでない場合my_pagenavi()を適用（funcsions.phpを参照） -->
        <?php if (function_exists('wp_pagenavi')) {
            my_pagenavi();
          } ?>
    <?php endif; ?>

    <div class="pagenation">
      <a href="#" class="first">
        <i class="fas fa-angle-double-left"></i>
      </a>
      <a href="#" class="prev">
        <i class="fas fa-angle-left"></i>
      </a>
      <span class="current">1</span>
      <a href="#" class="inactive">2</a>
      <a href="#" class="inactive">3</a>
      <a href="#" class="inactive">4</a>
      <a href="#" class="inactive">5</a>
      <span class="abbreviation-dots">…</span>
      <a href="#" class="next">
        <i class="fas fa-angle-right"></i>
      </a>
      <a href="#" class="last">
        <i class="fas fa-angle-double-right"></i>
      </a>
    </div><!-- //pagenation -->
    </section><!-- //blog-main -->

    <?php get_sidebar(); ?>
    <!-- //blog-sidebar -->
  </div>
  <!-- //contents -->

  <!-- InstanceEndEditable -->
</main>
<!-- //main -->

<?php get_footer(); ?>