<?php
/**
* テーマのセットアップ
* 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5.
**/
function my_setup()
{
    // add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
add_theme_support('title-tag'); // タイトルタグ自動生成
add_theme_support(
'html5',
array( //HTML5でマークアップ
'search-form',
'comment-form',
'comment-list',
'gallery',
'caption',
)
);
}

add_action('after_setup_theme', 'my_setup');

// セットアップの書き方の型
// function custom_theme_setup() {
// add_theme_support( $feature, $arguments );
// }
// add_action( 'after_setup_theme', 'custom_theme_setup' );
?>

<?php
/**
* CSSとJavaScriptの読み込み
*
* @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
*/
function my_script_init()
{
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
    wp_enqueue_style('my', get_template_directory_uri().'/css/style.css', array(), '1.0.0', 'all');
    wp_enqueue_script('my', get_template_directory_uri().'/js/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');
?>

<?php
add_theme_support('title-tag'); // タイトルを付ける
add_filter('document_title_separator', function () { return '|'; }); // タイトルの区切り文字を「|」にする (必要な場合)
?>


<?php
function my_body_id()
{
    $post_obj = $GLOBALS['wp_the_query']->get_queried_object();
    $slug = '';
    // ↓もしfront-pageのスラッグがtop
    if (is_front_page()) {
        $slug = 'top';
        if (is_page() && get_post(get_the_ID())->post_name) {
            $slug = $post_obj->post_name;
        }
    } elseif (is_home()) {
        $slug = 'blog';
        if (is_page() && get_post(get_the_ID())->post_name) {
            $slug = $post_obj->post_name;
        }
    } elseif (is_page()) {
        $slug = 'page';
        if (is_page() && get_post(get_the_ID())->post_name) {
            $slug = $post_obj->post_name;
        }
    } elseif (is_single()) {
        $slug = 'blog';
        if (is_page() && get_post(get_the_ID())->post_name) {
            $slug = $post_obj->post_name;
        }
    }

    $body_id = esc_attr($slug);
    echo ($body_id) ? 'id="'.$body_id.'"' : '';
}


/*
==================================================
** ページャー設定
==================================================
*/
$paged = get_query_var('paged') ? get_query_var('paged') : 1;    //pagedに渡す変数
query_posts($query_string . '&posts_per_page=1&paged=' . $paged);  //pagedとposts_per_pageの指定。表示数は全てposts_per_pageで指定する（WP管理画面では行わない）

function my_pagenavi($args = array())
{
    if (!function_exists('wp_pagenavi')) return;

    $defaults = array(
        'before' => '<div class="pagenation">',
        'after' => '</div>',
    );
    $args = is_array($args) ? array_merge($defaults, $args) : $args;
    wp_pagenavi($args);
}