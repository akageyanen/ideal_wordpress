<?php

add_theme_support( 'menus' );
register_nav_menu( 'header-navi', 'ヘッダーのナビゲーション' );

register_sidebar( array(
     'name' => __( 'Side Widget' ),
     'id' => 'side-widget',
     'before_widget' => '',
     'after_widget' => '',
     'before_title' => '<h4 class="id-box__sidebar__title">',
     'after_title' => '</h4>'
	 
) );

function theme_list_categories( $output, $args ) {
	$replaced_text = preg_replace('/<\/a> \(([0-9,]*)\)/', ' <span class="count">${1}</span></a>', $output);
	if($replaced_text != NULL) {
		return $replaced_text;
	} else {
		return $output;
	}
}

// テーマカスタマイザーにロゴアップロード設定機能追加
define('LOGO_SECTION', 'logo_section'); //セクションIDの定数化
define('LOGO_IMAGE_URL', 'logo_image_url'); //セッティングIDの定数化
function themename_theme_customizer( $wp_customize ) {
 $wp_customize->add_section( LOGO_SECTION , array(
 'title' => 'ロゴ画像', //セクション名
 'priority' => 30, //カスタマイザー項目の表示順
 'description' => 'サイトのロゴ設定。', //セクションの説明
 ) );

 $wp_customize->add_setting( LOGO_IMAGE_URL );
 $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, LOGO_IMAGE_URL, array(
 'label' => 'ロゴ', //設定ラベル
 'section' => LOGO_SECTION, //セクションID
 'settings' => LOGO_IMAGE_URL, //セッティングID
 'description' => '画像をアップロードするとヘッダーにあるデフォルトのサイト名と入れ替わります。',
 ) ) );

}
add_action( 'customize_register', 'themename_theme_customizer' );//カスタマイザーに登録

//ロゴイメージURLの取得
function get_the_logo_image_url(){
 return esc_url( get_theme_mod( LOGO_IMAGE_URL ) );
}

add_filter( 'wp_list_categories', 'theme_list_categories', 10, 2 );
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(475, 225, true ); // 幅 475px、高さ 225px、切り抜きモード

//ページャー
function pagination($pages = '', $range = 2)
{
     $showitems = ($range * 2)+1;//表示するページ数（５ページを表示）

     global $paged;//現在のページ値
     if(empty($paged)) $paged = 1;//デフォルトのページ

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;//全ページ数を取得
         if(!$pages)//全ページ数が空の場合は、１とする
         {
             $pages = 1;
         }
     }

     if(1 != $pages)//全ページが１でない場合はページネーションを表示する
     {
		 echo "<div class=\"id-pager col-lg-12\">\n";
		 echo "<ul class=\"pagination\">\n";
		 //Prev：現在のページ値が１より大きい場合は表示
         if($paged > 1) echo "<li class=\"prev\"><a href='".get_pagenum_link($paged - 1)."'>前へ</a></li>\n";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                //三項演算子での条件分岐
                echo ($paged == $i)? "<li class=\"active\">".$i."</li>\n":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>\n";
             }
         }
		//Next：総ページ数より現在のページ値が小さい場合は表示
		if ($paged < $pages) echo "<li class=\"next\"><a href=\"".get_pagenum_link($paged + 1)."\">次へ</a></li>\n";
		echo "</ul>\n";
		echo "</div>\n";
     }
}

//imgクラスにimg-responsiveを追加
add_filter('the_content', 'imgresponsive_replace');
function imgresponsive_replace ($content){
   global $post;
   $pattern = "/\"alignnone(.*?)\"/i";
   $replacement = 'img-responsive';
   $content = preg_replace($pattern, $replacement, $content);
   return $content;
}

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 720, 480, true );

function iframe_in_div($the_content) {
if ( is_singular() ) {
$the_content = preg_replace('/<iframe/i', '<div class="youtube"><iframe', $the_content);
$the_content = preg_replace('/<\/iframe>/i', '</iframe></div>', $the_content);
}
return $the_content;
}
add_filter('the_content','iframe_in_div');

?>
