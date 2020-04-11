<!DOCTYPE html>
<html lang="ja"><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <!-- meta description -->
  <meta
      name="description"
      content="design cubits（デザインキュービッツ）は大阪でホームページ・イラストの制作を行うフリーランスの個人事務所です。デザインから構築、公開、運用まで一貫して行います。"
	/>
	<?php wp_head(); ?>

  	<!-- ファビコン設定 -->
	<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/apple-touch-icon-180x180.png" sizes="180×180">
	<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/icon-192x192.png" sizes="192×192" type="image/png">
  <!-- InstanceBeginEditable name="doctitle" -->

  <title>
    <?php if (!is_home()) {
    wp_title('|', true, 'right');
}
    bloginfo('name');
    ?>
  </title>

  <!-- InstanceEndEditable -->
  <!-- InstanceBeginEditable name="head" -->
  <!-- InstanceEndEditable -->
  </head>

  <body <?php my_body_id(); ?>><!-- InstanceParam name="id" type="text" value="top" -->
    <!-- header -->
  <header id="header" class="header">
    <div class="header__container">
      <div class="header-logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <picture>
            <source media="(max-width: 1024px)" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/logo_white.svg" alt="design cubits（デザインキュービッツ）">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/logo_pc.svg" alt="design cubits（デザインキュービッツ）" class="js-logo">
          </picture>
        </a>
      </div>

      <!-- WPCOdexを参考にリンクを貼る　参考：投稿、固定ページ、カテゴリーへのリンク -->
      <nav id="gnav" class="gnav">
        <ul class="gnav__list">
          <li class="gnav__list__item">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>index.php?page_id=67">サービス紹介</a>
          </li>
          <li class="gnav__list__item">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>index.php?page_id=41">design cubitsについて</a>
          </li>
          <li class="gnav__list__item">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>index.php?page_id=30">ブログ</a>
          </li>
          <li class="gnav__list__item">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>index.php?page_id=119">お問い合わせ</a>
          </li>
        </ul>
      </nav>

      <div id="menuBtn">
          <span></span>
          <span></span>
          <span></span>
      </div>

    </div>
	</header>