<?php
//Template Name: 固定ページのテンプレート
?>
<?php get_header(); ?>

    <!-- main -->
    <main id="main" class="main">
		<!-- InstanceBeginEditable name="main" -->
		<?php if (have_posts()): while (have_posts()):the_post(); ?><!-- ↓WordPressループ。投稿された記事情報が1件以上あれば表示。（p68） -->
		<?php the_content(); ?><!--  the_contentはテンプレートタグ。(p83)-->
		<?php endwhile; endif; ?>

		<!-- InstanceEndEditable -->
    </main>
    <!-- //main -->

<?php get_footer(); ?>