<aside class="blog-sidebar">
	<section class="widget category">
		<h4 class="widget__ttl category__ttl">カテゴリー</h4>
		<ul class="category__lists">
			<li class="category__lists__item">
				<a class="category__name">Illustrator<span class="entry-count">
				#
				</a>
				<ul class="category__contents">
					<li class="category__contents__item">
						<a href="#">Illustrator<span class="entry-count">
						<?php
							$chosen_id = 11; // カテゴリID
							$thisCat = get_category($chosen_id);
							echo $thisCat->count;
						?></span>
					</a>
					</li>
					<li class="category__contents__item">
						<a href="#">超初心者のためのイラストレーター講座<span class="entry-count">
							<?php
								$chosen_id = 12; // カテゴリID
								$thisCat = get_category($chosen_id);
								echo $thisCat->count;
							?>
						</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="category__lists__item">
				<a class="category__name">WordPress<span class="entry-count">
				<?php
					$chosen_id = 5; // カテゴリID
					$thisCat = get_category($chosen_id);
					echo $thisCat->count;
				?>
				</span>
				</a>
			</li>
			<li class="category__lists__item">
				<a class="category__name">サイト構築<span class="entry-count">
				<?php
					$chosen_id = 7; // カテゴリID
					$thisCat = get_category($chosen_id);
					echo $thisCat->count;
					?>
					</span>
				<ul class="category__contents">
					<li class="category__contents__item">
						<a href="#">HTML<span class="entry-count">
						<?php
							$chosen_id = 13; // カテゴリID
							$thisCat = get_category($chosen_id);
							echo $thisCat->count;
						?>
						</span>
					</li>
					<li class="category__contents__item">
						<a href="#">CSS<span class="entry-count">
						<?php
							$chosen_id = 14; // カテゴリID
							$thisCat = get_category($chosen_id);
							echo $thisCat->count;
						?>
						</span>
					</li>
					<li class="category__contents__item">
						<a href="#">JavaScript<span class="entry-count">
						<?php
							$chosen_id = 15; // カテゴリID
							$thisCat = get_category($chosen_id);
							echo $thisCat->count;
						?>
						</span>
					</li>
				</ul>
			</li>
			<li class="category__lists__item">
				<a class="category__name">Others<span class="entry-count">
				<?php
					$chosen_id = 8; // カテゴリID
					$thisCat = get_category($chosen_id);
					echo $thisCat->count;
				?>
				</span>
			</li>
			<li class="category__lists__item">
				<a class="category__name">フリーランス<span class="entry-count">
				<?php
					$chosen_id = 9; // カテゴリID
					$thisCat = get_category($chosen_id);
					echo $thisCat->count;
				?>
				</span>
			</li>
			<li class="category__lists__item">
				<a class="category__name">Days<span class="entry-count">
				<?php
					$chosen_id = 10; // カテゴリID
					$thisCat = get_category($chosen_id);
					echo $thisCat->count;
				?>
					</span>
			</li>
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