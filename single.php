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
        if (have_posts()):
            while (have_posts()):the_post();
        ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('single-article'); ?>>

            <header class="single-article__header">
              <div class="article__header__info article__info">
              <!-- カテゴリーは配列で返ってくる。
                  まずget_the_category();で投稿が分類されているカテゴリーを配列で取得。
                  $this_categories[0];で、返ってきたカテゴリー情報の「1番目の情報」を取得している。
                  カテゴリー情報の「1番目の情報」

                    

-->
              <?php
                $this_categories = get_the_category();
                $this_categories = $this_categories[0];
                $parent_cat = get_category($this_categories->category_parent);
                if ($this_categories) {
                    $this_category_color = get_field('catcolor', 'category_'.$parent_cat->term_id);
                    $this_category_name = $parent_cat->name; ?>

                <a class="article__info__tag" style="<?php echo esc_attr('background:'.$this_category_color); ?>">
                <!-- ↓if文の終了タグをaタグの後に持ってくることで、if文の処理はaタグにもかかっていることになっている。 -->
                <?php
                } ?>

                <?php $cat = get_the_category();
                  $cat = $cat[0];
                  if ($cat->parent) {
                      $parent = get_category($cat->parent);
                      echo $parent->cat_name;
                  } else {
                      echo $cat->cat_name;
                  }
                ?>
                </a>

                <time class="article__info__date">2000.00.00</time>
              </div>
              <h1 class="single-article__header__heading">
                <?php the_title(); ?>
                <?php the_field('catcolor'); ?><!--投稿画面でタグ色を設定しているが、項目が出ない-->
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

        <!-- blog-sidebar -->
        <aside class="blog-sidebar">
          <section class="widget category">
            <h4 class="widget__ttl category__ttl">カテゴリー</h4>
            <ul class="category__lists">
              <li class="category__lists__item">
                <a class="category__name">Illustrator<span class="entry-count">0</span></a>
                <ul class="category__contents">
                  <li class="category__contents__item">
                    <a href="#">Illustrator<span class="entry-count">0</span></a>
                  </li>
                  <li class="category__contents__item">
                    <a href="#">超初心者のためのイラストレーター講座<span class="entry-count">0</span></a>
                  </li>
                </ul>
              </li>
              <li class="category__lists__item">
                <a class="category__name">WordPress<span class="entry-count">0</span></a>
              </li>
              <li class="category__lists__item">
                <a class="category__name">サイト構築<span class="entry-count">0</span></a>
                <ul class="category__contents">
                  <li class="category__contents__item">
                    <a href="#">HTML<span class="entry-count">0</span></a>
                  </li>
                  <li class="category__contents__item">
                    <a href="#">CSS<span class="entry-count">0</span></a>
                  </li>
                  <li class="category__contents__item">
                    <a href="#">JavaScript<span class="entry-count">0</span></a>
                  </li>
                </ul>
              </li>
              <li class="category__lists__item">
                <a class="category__name">Others<span class="entry-count">0</span></a>
              </li>
              <li class="category__lists__item">
                <a class="category__name">フリーランス<span class="entry-count">0</span></a>
              </li>
              <li class="category__lists__item">
                <a class="category__name">Days<span class="entry-count">0</span></a>
              </li>
            </ul><!-- //category__lists -->
          </section><!-- //widget category -->
  
          <section class="widget recent-posts">
            <h4 class="widget__ttl recent-posts__ttl">新着記事</h4>
            <div class="recent-posts__container">
              <article class="recent-posts__article">
                <a href="#">
                  <span class="recent-posts__article__info tag--illustrator">Illustrator</span>
                  <p class="recent-posts__article__title">タイトル入ります テキストテキストテキストテキストテキストテキスト</p>
                  <time class="recent-posts__article__date">2000.00.00</p>
                </a>
              </article>
              <article class="recent-posts__article">
                <a href="#">
                  <span class="recent-posts__article__info tag--illustrator">Illustrator</span>
                  <p class="recent-posts__article__title">タイトル入ります テキストテキストテキストテキストテキストテキスト</p>
                  <time class="recent-posts__article__date">2000.00.00</p>
                </a>
              </article>
              <article class="recent-posts__article">
                <a href="#">
                  <span class="recent-posts__article__info tag--illustrator">Illustrator</span>
                  <p class="recent-posts__article__title">タイトル入ります テキストテキストテキストテキストテキストテキスト</p>
                  <time class="recent-posts__article__date">2000.00.00</p>
                </a>
              </article>
            </div><!-- //recent-posts__container-->
          </section><!-- //widget recent-posts -->
  
          <section class="widget search">
            <h4 class="widget__ttl search__ttl">検索</h4>
            <form action="#" class="search-box" role="search">
              <input type="search" class="search-box__text" name="search-box__text">
              <button type="submit" class="search-box__submit" id="search-box__submit">
                <i class="fas fa-search"></i>
              </button>
            </form>
          </section><!-- //widget search -->
  
          <section class="widget tags">
            <h4 class="widget__ttl tags__ttl">タグ</h4>
            <div class="tags__container">
              <a href="#" class="tags__container__link">Illustrator</a>
              <a href="#" class="tags__container__link">タグ名入る</a>
              <a href="#" class="tags__container__link">タグ名入る</a>
              <a href="#" class="tags__container__link">タグ名入る</a>
              <a href="#" class="tags__container__link">タグ名入る</a>
            </div>
          </section><!-- //widget tags -->
  
        </aside><!-- //blog-sidebar -->
	</div>
	<!-- //contents -->
</main>
<!-- //main -->



<?php get_footer(); ?>