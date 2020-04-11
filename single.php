<?php get_header(); ?>

<!-- main -->
<main id="main" class="main">
  <div class="pagettl">
    <p class="pagettl__ttl">ブログ</p>
    <p class="pagettl__description">フリーランスとして働くWebデザイナーの備忘録・メモ</p>
  </div>

  <div class="breadcrumbs wrap">
    <ol>
      <li><a href="#">HOME</a></li>
      <li><span>ページタイトル</span></li>
    </ol>
  </div>

  <!-- contents -->
  <div id="contents" class="blog-contents wrap">
    <section class="blog-main">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
      ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class('single-article'); ?>>

            <header class="single-article__header">
              <div class="article__header__info article__info">
                <!-- カテゴリーは配列で返ってくる。
                  まずget_the_category();で投稿が分類されているカテゴリーを配列で取得。
                  $this_categories[0];で、返ってきたカテゴリー情報の「1番目の情報」を取得している。
                  -->
                <?php $this_categories = get_the_category();
                $this_categories = $this_categories[0];
                // ↓$this_categoriesの中のcategory_parentという変数の値を取り出そうとしている。category_parentは(整数) 親カテゴリーの ID - 親がなければ 0 が入る（parent にも同じ値が入る）。
                $parent_cat = $this_categories;
                if ($this_categories->category_parent) { //category_parentは親カテゴリの「ID」
                  $parent_cat = get_category($this_categories->category_parent);
                }
                if ($this_categories) {
                  $this_category_color = get_field('catcolor', 'category_' . $parent_cat->term_id);
                  $this_category_name = $parent_cat->name;
                  echo '<a class="article__info__tag" style="' . esc_attr('background:' . $this_category_color) . ';">';
                }
                ?>
                <?php $cat = get_the_category();
                $cat = $cat[0];
                if ($cat->parent) {
                  $parent = get_category($cat->parent);
                  echo $parent->cat_name;
                } else {
                  echo $cat->cat_name;
                } ?>
                <!--テンプレートタグ the_category();を使うと、ul>li>aが出力されるので、カテゴリータイトルのみを取得。-->
                </a>

                <time class="article__info__date">2000.00.00</time>
              </div>
              <h1 class="single-article__header__heading">
                <?php the_title(); ?>
                <?php the_field('catcolor'); ?>
                <!--投稿画面でタグ色を設定しているが、項目が出ない-->
              </h1>
            </header>
            <div class="single-article__contents">
              <?php the_content(); ?>
              <h2>H2 見出し 26PX MT100PX テキストテキストテキストテキストテキストテキストテキスト</h2>
              <p>16PX MT60PX 本文が入ります　テキストテキストテキストテキストテキストテキストテトテキストテキストテキストテキストテキストテキストテキストテキストテトテキストテキスト。</p>
              <p>本文が入ります　テキストテキストテキストテキストテキストテキストテトテキストテキストテキストテキストテキストテキストテキストテキストテトテキストテキスト。</p>
              <h3>H3 見出し 20PX MT 80PX テキストテキストテキストテキストテキストテキストテキスト</h3>
              <p>16PX MT50PX 本文が入ります　テキストテキストテキストテキストテキストテキストテトテキストテキストテキストテキストテキストテキストテキストテキストテトテキストテキスト。</p>
              <p>本文が入ります　テキストテキストテキストテキストテキストテキストテトテキストテキストテキストテキストテキストテキストテキストテキストテトテキストテキスト。</p>
              <h4>H4 見出し 18PX MT70PX</h4>
              <p>15PX MT30PX 本文が入ります　テキストテキストテキストテキストテキストテキストテトテキストテキストテキストテキストテキストテキストテキストテキストテトテキストテキスト。</p>
              <p>本文が入ります　テキストテキストテキストテキストテキストテキストテトテキストテキストテキストテキストテキストテキストテキストテキストテトテキストテキスト。</p>
              <h5>H5 見出し 16PX MT50PX</h5>
              <p>14PX MT26PX 本文が入ります　テキストテキストテキストテキストテキストテキストテトテキストテキストテキストテキストテキストテキストテキストテキストテトテキストテキスト。</p>
              <p>テキストテキストテキストテキストテキストテキストテトテキストテキストテキストテキストテキストテキストテキストテキストテトテキストテキスト。</p>
              <ul></ul><!-- ulのHTML -->
              <table></table><!-- tableのHTML -->
            </div>
            <footer class="single-article__footer">
              <ul class="pager noicon">
                <li class="pager__item prev"><?php previous_post_link(); ?>前へ</li>
                <li class="pager__item next"><a href="#">次へ</a></li>
              </ul>
            </footer>
          </article>
      <?php
        endwhile;
      endif;
      ?>

    </section><!-- //blog-main -->

    <?php get_sidebar(); ?>
    <!-- //blog-sidebar -->
  </div>
  <!-- //contents -->
</main>
<!-- //main -->



<?php get_footer(); ?>