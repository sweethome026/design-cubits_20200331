<?php

/**
 * Template Name: 検索結果ページのテンプレート
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
      <h2 class="heading">検索結果</h2>
      <?php if (have_posts()): ?>
      <?php
        if (isset($_GET['s']) && empty($_GET['s'])) {
        echo '検索キーワード未入力'; // 検索キーワードが未入力の場合のテキストを指定
        } else {
        echo '“'.$_GET['s'] .'”の検索結果：'.$wp_query->found_posts .'件'; // 検索キーワードと該当件数を表示
        }
        ?>
        <ul>
        <?php while(have_posts()): the_post(); ?>
        <li>
        <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
        </li>
        <?php endwhile; ?>
        </ul>
        <?php else: ?>
        検索されたキーワードにマッチする記事はありませんでした
      <?php endif; ?>
    </section><!-- //blog-main -->

    <?php get_sidebar(); ?>
    <!-- //blog-sidebar -->
  </div>
  <!-- //contents -->

  <!-- InstanceEndEditable -->
</main>
<!-- //main -->

<?php get_footer(); ?>