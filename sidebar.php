<aside class="blog-sidebar">
	<section class="widget category">
		<h4 class="widget__ttl category__ttl">カテゴリー</h4>


		<ul class="category__lists">			
		<?php // タームの一覧を表示
			$catlist = wp_list_categories(array(
				'title_li' => '', // リストの外側に表示されるタイトルを非表示
				'show_count' => 1, // カテゴリの投稿数を表示
				'echo' => 0 // 設定した値を返す
			));
			$catlist = preg_replace('/<\/a> (\([0-9]*\))/', ' <span class="entry-count">$1</span></a>', $catlist); // 投稿数をタグで囲う
			$catlist = str_replace(array('(',')'), '', $catlist); // 投稿数を囲う（）を削除
			echo $catlist; // タームの一覧を表示
		?>
		</ul><!-- //category__lists -->
	</section><!-- //widget category -->

	<section class="widget recent-posts">
		<h4 class="widget__ttl recent-posts__ttl">新着記事</h4>
		<div class="recent-posts__container">

			<?php
			$args = array('posts_per_page' => 3);
			$postslist = get_posts($args);
			foreach ($postslist as $post) :  /* ループ開始 */
				setup_postdata($post); ?>
				<article class="recent-posts__article">
					<a href="<?php the_permalink(); ?>">
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
							echo '<span class="recent-posts__article__info" style="' . esc_attr('background:' . $this_category_color) . ';">';
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
						</span>
						<p class="recent-posts__article__title"><?php the_title(); ?></p>
						<time class="recent-posts__article__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></p>
					</a>
				</article>

			<?php
			endforeach;
			wp_reset_postdata();
			?>

			<article class="recent-posts__article">
				<a href="#">
					<span class="recent-posts__article__info tag--illustrator">Illustrator</span>
					<p class="recent-posts__article__title">タイトル入ります テキスト</p>
					<time class="recent-posts__article__date">2000.00.00</p>
				</a>
			</article>
		</div><!-- //recent-posts__container-->
	</section><!-- //widget recent-posts -->

	<section class="widget search">
		<h4 class="widget__ttl search__ttl">検索</h4>
		<?php get_search_form(); ?>
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