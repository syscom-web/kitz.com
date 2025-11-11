<?php
/* アイキャッチ画像 */
add_theme_support('post-thumbnails');

/* 個別ページ抜粋 */
add_post_type_support('page', 'excerpt');

/* アドミンバーを消す */
//add_filter('show_admin_bar', '__return_false');

/* プロフィールから項目を削除 */
function hide_profile_fields($contactmethods)
{
  unset($contactmethods['aim']);
  unset($contactmethods['jabber']);
  unset($contactmethods['yim']);
  return $contactmethods;
}
add_filter('user_contactmethods', 'hide_profile_fields');

/* セルフピンバックの禁止 */
function no_self_ping(&$links)
{
  $home = get_option('home');
  foreach ($links as $l => $link)
    if (0 === strpos($link, $home))
      unset($links[$l]);
}
add_action('pre_ping', 'no_self_ping');

/* moreリンクの#を無効化 */
function custom_content_more_link($output)
{
  $output = preg_replace('/#more-[\d]+/i', '', $output);
  return $output;
}
add_filter('the_content_more_link', 'custom_content_more_link');

/* the_excerpt() [...]を消す */
function new_excerpt_more($more)
{
  return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

/* WordPress のバージョン非表示 */
remove_action('wp_head', 'wp_generator');

/* アップデートのお知らせ非表示 */
// add_filter('pre_site_transient_update_core', '__return_zero');
// remove_action('wp_version_check', 'wp_version_check');
// remove_action('admin_init', '_maybe_update_core');

/* プラグインアップデートのお知らせ非表示 */ /*
remove_action('load-update-core.php', 'wp_update_plugins');
add_filter('pre_site_transient_update_plugins', create_function('$a', "return null;"));
*/

// Gutenberg用CSSを削除
add_action('wp_enqueue_scripts', 'remove_block_library_style');
function remove_block_library_style()
{
  wp_dequeue_style('wp-block-library');
  wp_dequeue_style('wp-block-library-theme');
}

/* エディター */
add_editor_style('editor-style.css');

/* 投稿でPタグを自動挿入させない */
//remove_filter('the_content', 'wpautop');

/* 固定ページでPタグを自動挿入させない */
add_filter('the_content', 'wpautop_filter', 9);
function wpautop_filter($content)
{
  global $post;
  $remove_filter = false;

  $arr_types = array('page'); //自動整形タグを無効にする投稿タイプを指定
  $post_type = get_post_type($post->ID);
  if (in_array($post_type, $arr_types)) $remove_filter = true;

  if ($remove_filter) {
    remove_filter('the_content', 'wpautop');
    remove_filter('the_excerpt', 'wpautop');
  }

  return $content;
}

//管理画面の右上にあるヘルプを非表示
function disable_help_link()
{
  echo '<style type="text/css">6
            #contextual-help-link-wrap {display: none !important;}
          </style>';
}
add_action('admin_head', 'disable_help_link');



//投稿ショートコード
add_shortcode('tp', 'shortcode_tp');
function shortcode_tp($atts, $content = '')
{
  return get_template_directory_uri() . $content;
}

//TOPページ
add_shortcode('hurl', 'shortcode_hurl');
function shortcode_hurl()
{
  return home_url('/');
}

// インクルード用ショートコード
function php_include($params = array())
{
  extract(shortcode_atts(array('file' => 'default'), $params));
  ob_start();
  include(STYLESHEETPATH . "/inc/$file.php");
  return ob_get_clean();
}
add_shortcode('include', 'php_include');

// 自動整形を解除
function shortcode_p_fix($content)
{
  $array = array(
    '<p>[' => '[',
    '"]</p>' => '"]',
    ']<br />' => ']',
    '<p><!--' => '<!--',
    '--></p>' => '-->',
    '<p></a>' => '</a>',
    '</iframe></p>' => '</iframe>'
  );
  $content = strtr($content, $array);
  return $content;
}
add_filter('the_content', 'shortcode_p_fix');

// クラス付加
add_filter('previous_post_link', 'add_prev_post_link_class');
function add_prev_post_link_class($output)
{
  return str_replace('<a href=', '<a class="entry-prev" href=', $output);
}
add_filter('next_post_link', 'add_next_post_link_class');
function add_next_post_link_class($output)
{
  return str_replace('<a href=', '<a class="entry-next" href=', $output);
}

// カテゴリーの順番の設定
function get_the_category_orderby_setting($categories)
{
  usort($categories, '_usort_terms_by_ID');
  return $categories;
}
add_filter('get_the_categories', 'get_the_category_orderby_setting');


//カスタム投稿タイプ定義
add_action('init', 'custum_post_type');
function custum_post_type()
{


  //ニュース
  register_post_type(
    'news',
    array(
      'labels' =>
      array(
        'name' => __('ニュース'),
        'singular_name' => __('ニュース')
      ),
      'supports' => array('title', 'editor', 'thumbnail'),
      'public' => true,
      'menu_position' => 5,
      'hierarchical' => true,
      'has_archive' => true
    )
  );

  //ニュースカテゴリ
  register_taxonomy(
    'news-cat',
    'news',
    array(
      'hierarchical' => true,
      'label' => 'ニュースカテゴリー',
      'singular_label' => 'ニュースカテゴリー',
      'public' => true,
      'hierarchical' => true,
    )
  );
}

//カスタムタクソノミー権限
require_once get_theme_file_path('/func/cptui.php');

//MW WP Form メニュー非表示
function remove_menus()
{
  if (!current_user_can('level_10')) {
    remove_menu_page('edit.php?post_type=mw-wp-form');
  }
}
add_action('admin_menu', 'remove_menus');

//バルブ技術研修のフォームにカスタムフィールド値を代入する
//バルブの基礎 - 集合研修 - 開催日
function add_valvedate($children, $atts)
{
  if ($atts['name'] == 'valvedate') {
    if (have_rows('training-list_date', $_GET['post_id'])) {
      while (have_rows('training-list_date', $_GET['post_id'])) {
        the_row();
        $checkbox = get_sub_field('training-date', $_GET['post_id']);
        $children[$checkbox] = $checkbox;
      }
    }
  }
  return $children;
}
add_filter('mwform_choices_mw-wp-form-4940', 'add_valvedate', 10, 2);

//バルブの基礎 - オンライン研修 - 開催日
function add_valvedate2($children, $atts)
{
  if ($atts['name'] == 'valvedate') {
    if (have_rows('training-list_date', $_GET['post_id'])) {
      while (have_rows('training-list_date', $_GET['post_id'])) {
        the_row();
        $checkbox = get_sub_field('training-date', $_GET['post_id']);
        $children[$checkbox] = $checkbox;
      }
    }
  }
  return $children;
}
add_filter('mwform_choices_mw-wp-form-4945', 'add_valvedate2', 10, 2);

//自動弁の基礎 - 集合研修 - 開催日
function add_valvedate3($children, $atts)
{
  if ($atts['name'] == 'valvedate') {
    if (have_rows('training-list_date', $_GET['post_id'])) {
      while (have_rows('training-list_date', $_GET['post_id'])) {
        the_row();
        $checkbox = get_sub_field('training-date', $_GET['post_id']);
        $children[$checkbox] = $checkbox;
      }
    }
  }
  return $children;
}
add_filter('mwform_choices_mw-wp-form-4942', 'add_valvedate3', 10, 2);

//自動弁の基礎 - オンライン研修 - 開催日
function add_valvedate4($children, $atts)
{
  if ($atts['name'] == 'valvedate') {
    if (have_rows('training-list_date', $_GET['post_id'])) {
      while (have_rows('training-list_date', $_GET['post_id'])) {
        the_row();
        $checkbox = get_sub_field('training-date', $_GET['post_id']);
        $children[$checkbox] = $checkbox;
      }
    }
  }
  return $children;
}
add_filter('mwform_choices_mw-wp-form-4947', 'add_valvedate4', 10, 2);

//バルブの基礎 - 集合研修 - 宿泊施設
function add_valveplace($children, $atts)
{
  if ($atts['name'] == 'valveplace') {
    if (have_rows('training-place_wrap', $_GET['post_id'])) {
      while (have_rows('training-place_wrap', $_GET['post_id'])) {
        the_row();
        if (have_rows('training-place_price-list', $_GET['post_id'])) {
          while (have_rows('training-place_price-list', $_GET['post_id'])) {
            the_row();
            $select = get_sub_field('training-place_price', $_GET['post_id']);
            $children[$select] = $select;
          }
        }
      }
    }
  }
  return $children;
}
add_filter('mwform_choices_mw-wp-form-4940', 'add_valveplace', 10, 2);

//自動弁の基礎 - 集合研修 - 宿泊施設
function add_valveplace2($children, $atts)
{
  if ($atts['name'] == 'valveplace') {
    if (have_rows('training-place_wrap', $_GET['post_id'])) {
      while (have_rows('training-place_wrap', $_GET['post_id'])) {
        the_row();
        if (have_rows('training-place_price-list', $_GET['post_id'])) {
          while (have_rows('training-place_price-list', $_GET['post_id'])) {
            the_row();
            $select = get_sub_field('training-place_price', $_GET['post_id']);
            $children[$select] = $select;
          }
        }
      }
    }
  }
  return $children;
}
add_filter('mwform_choices_mw-wp-form-4942', 'add_valveplace2', 10, 2);


//フォーム送信先分岐
function autoback_my_mail($Mail_raw, $values, $Data)
{
  if ($Data->get('area') == 'korea') {
    $Mail_raw->to = 'kkrsales@kitzkorea.com';
  } elseif ($Data->get('area') == 'canada') {
    $Mail_raw->to = 'info@kitz.com';
  } elseif ($Data->get('area') == 'usa') {
    $Mail_raw->to = 'info@kitz.com, Davido@kitz.com, LaurenU@kitz.com';
  } elseif ($Data->get('area') == 'south-america') {
    $Mail_raw->to = 'info@kitz.com, Davido@kitz.com, LaurenU@kitz.com';
  } elseif ($Data->get('area') == 'china') {
    $Mail_raw->to = 'sales@kitzchina.com';
  } elseif ($Data->get('area') == 'hong-kong') {
    $Mail_raw->to = 'khc.info@kitzhongkong.com';
  } elseif ($Data->get('area') == 'taiwan') {
    $Mail_raw->to = 'ibdtaiwan@kitz.co.jp';
  } elseif ($Data->get('area') == 'europe') {
    $Mail_raw->to = 'europe_ibd@kitz.co.jp';
  } elseif ($Data->get('area') == 'africa') {
    $Mail_raw->to = 'mena_ibd@kitz.co.jp';
  } elseif ($Data->get('area') == 'thailand') {
    $Mail_raw->to = 'sales@kitz-kvt.com';
  } elseif ($Data->get('area') == 'vietnam') {
    $Mail_raw->to = 'kvv-sales@kitz-kvv.com';
  } elseif ($Data->get('area') == 'singapore') {
    $Mail_raw->to = 'sales@kitz-kvs.com.sg';
  } elseif ($Data->get('area') == 'malaysia') {
    $Mail_raw->to = 'kvm-sales@kitz-kvm.com';
  } elseif ($Data->get('area') == 'philippines') {
    $Mail_raw->to = 'sales@kitzasiapacific.com';
  } elseif ($Data->get('area') == 'indonesia') {
    $Mail_raw->to = 'sales@kitzasiapacific.com';
  } elseif ($Data->get('area') == 'oceania') {
    $Mail_raw->to = 'oceania_ibd@kitz.co.jp';
  } elseif ($Data->get('area') == 'south-asia01') {
    $Mail_raw->to = 'info@kitz.in';
  } elseif ($Data->get('area') == 'south-asia02') {
    $Mail_raw->to = 'southasia@kitz.co.jp';
  } elseif ($Data->get('area') == 'middle-east') {
    $Mail_raw->to = 'mena_ibd@kitz.co.jp';
  } elseif ($Data->get('area') == 'other') {
    $Mail_raw->to = 'isd_plan_manage@kitz.co.jp';
  } elseif ($Data->get('area') == 'kitz-vietnam') {
    $Mail_raw->to = 'info@kitzvietnam.com';
  }
  return $Mail_raw;
}
add_filter('mwform_admin_mail_mw-wp-form-6149', 'autoback_my_mail', 10, 3);

function my_mail($Mail_raw, $values, $Data)
{
  if ($Data->get('area') == 'kitz-vietnam') {
    // 件名を変更
    $Mail_raw->subject = ' [ KITZ Corporation of Vietnam Co.,Ltd. ] Thank you for your inquiry.';
    // 本文を変更
    $Mail_raw->body = 'Dear {Name}' . "\n";
    $Mail_raw->body .= "\n";
    $Mail_raw->body .= 'Thank you for your inquiry.' . "\n";
    $Mail_raw->body .= 'KITZ Corporation of Vietnam Co.,Ltd. has received the following inquiry e-mail.' . "\n";
    $Mail_raw->body .= "\n";
    $Mail_raw->body .= '-----Inquiry Information----------------------------------------' . "\n";
    $Mail_raw->body .= "\n";
    $Mail_raw->body .= '[ Country ]：{Country}' . "\n";
    $Mail_raw->body .= '[ Company Name ]：' . "\n";
    $Mail_raw->body .= '{Company_Name}' . "\n";
    $Mail_raw->body .= '[ Type of Business ]：' . "\n";
    $Mail_raw->body .= '{Type_of_Business}' . "\n";
    $Mail_raw->body .= '[ Department ]：{Department}' . "\n";
    $Mail_raw->body .= '[ Title ]：{Title}' . "\n";
    $Mail_raw->body .= '[ Name ]：{Name}' . "\n";
    $Mail_raw->body .= '[ Address ]：{Address}' . "\n";
    $Mail_raw->body .= '[ Telephone ]：{Telephone}' . "\n";
    $Mail_raw->body .= '[ Facsimile ]：{Facsimile}' . "\n";
    $Mail_raw->body .= '[ E-mail address ]：{E-mail}' . "\n";
    $Mail_raw->body .= '[ Contents ]：' . "\n";
    $Mail_raw->body .= '{Contents}' . "\n";
    $Mail_raw->body .= "\n";
    $Mail_raw->body .= '◆─────────────────────────◆' . "\n";
    $Mail_raw->body .= 'KITZ Corporation of Vietnam Co.,Ltd.' . "\n";
    $Mail_raw->body .= 'Plot No. A-1, Thang Long Industrial Park (Vinh Phuc),' . "\n";
    $Mail_raw->body .= 'Thien Ke Commune,Binh Xuyen District, Vinh Phuc Province, Vietnam.' . "\n";
    $Mail_raw->body .= '◆─────────────────────────◆';
  }
  return $Mail_raw;
}
add_filter('mwform_auto_mail_raw_mw-wp-form-6149', 'my_mail', 10, 3);


//フォームの自作バリデーション
function mwform_validation_check_at_sign($validation_rules)
{
  if (!class_exists('MW_Validation_Rule_CheckAtSign')) {
    class MW_Validation_Rule_CheckAtSign extends MW_WP_Form_Abstract_Validation_Rule
    {
      protected $name = 'スペースのみでエラー';
      public function rule($name, array $options = array())
      {
        $value = $this->Data->get($name);

        $str = $value;
        $str = str_replace("　", " ", $str);

        if (!MWF_Functions::is_empty($value)) {
          if (preg_match('/^ +$/', $str)) {
            $defaults = array(
              'message' => __('テキストを入力してください。', 'mw-wp-form'),
            );
            $options  = array_merge($defaults, $options);
            return $options['message'];
          }
        }
      }

      public function admin($key, $value)
      {
?>
        <label>
          <input type="checkbox" <?php checked($value[$this->getName()], 1); ?> name="<?php echo MWF_Config::NAME; ?>[validation][<?php echo $key; ?>][<?php echo esc_attr($this->getName()); ?>]" value="1" />
          <?php esc_html_e('スペースのみ入力でエラー', 'mw-wp-form'); ?>
        </label>
<?php
      }
    }
  }

  $instance = new MW_Validation_Rule_CheckAtSign();
  $validation_rules[$instance->getName()] = $instance;
  return $validation_rules;
}
add_filter('mwform_validation_rules', 'mwform_validation_check_at_sign');


function add_files()
{
  // wp_enqueue_script('cookie', get_template_directory_uri() . '/js/cookie.js', "", "20160608", true);
  wp_enqueue_style('cookie', get_template_directory_uri() . '/css/cookie.css', "", '20160608');

  if (is_page('inquiry')) {
    wp_enqueue_script('form', get_template_directory_uri() . '/js/form.js', "", "20221209", true);
  }
}
add_action('wp_enqueue_scripts', 'add_files');

/************************************************************************
 * 採用ページ
 * 採用情報ページfunction コンフリクト解消のため外部ファイル化
 ************************************************************************/
if (strpos($_SERVER['REQUEST_URI'], 'recruit')) {
  get_template_part('php-recruit/_recruit-functions');
}

// 検索時htmlタグ除外
// add_filter('posts_where', 'exclude_html_search');

// function exclude_html_search($where)
// {
// 	if (is_post_type_archive('faq') || is_post_type_archive('troubleshooting')) {
// 		global $wpdb;
// 		$query = get_search_query();
// 		$query = $wpdb->esc_like($query);

// 		if ($query) {
// 			$where .= " AND {$wpdb->posts}.post_content NOT REGEXP '\<{1}[^\>]*$query*[^\>]*\>{1}' ";
// 		}
// 	}
// 	return $where;
// }

/* メンテナンス - カラム表示 */
function my_add_columns($columns)
{
  $columns['maintenance_top'] = 'TOP表示';
  return $columns;
}
add_filter('manage_edit-maintenance_columns', 'my_add_columns');

function my_add_columns_content($column_name, $post_id)
{
  if ($column_name == 'maintenance_top') {
    $metas = get_field('top', $post_id);
    $stitle = $metas[0];
  }

  if (isset($stitle) && $stitle) {
    echo esc_attr($stitle);
  }
}
add_action('manage_maintenance_posts_custom_column', 'my_add_columns_content', 10, 2);

/* MW カラムフック */
function sv_mwform_custom_data($columns)
{
  $columns = array(
    'Country' => 'Country',
    'Company_Name' => 'Company_Name',
    'Type_of_Business' => 'Type_of_Business',
    'Department' => 'Department',
    'Title' => 'Title',
    'Name' => 'Name',
    'Address' => 'Address',
    'Telephone' => 'Telephone',
    'Facsimile' => 'Facsimile',
    'E-mail' => 'E-mail',
    'Contents' => 'Contents'
  );
  return $columns;
}
add_filter('mwform_inquiry_data_columns-mwf_6079', 'sv_mwform_custom_data');
add_filter('mwform_inquiry_data_columns-mwf_6142', 'sv_mwform_custom_data');
add_filter('mwform_inquiry_data_columns-mwf_6143', 'sv_mwform_custom_data');
add_filter('mwform_inquiry_data_columns-mwf_6144', 'sv_mwform_custom_data');
add_filter('mwform_inquiry_data_columns-mwf_6145', 'sv_mwform_custom_data');
add_filter('mwform_inquiry_data_columns-mwf_6146', 'sv_mwform_custom_data');
add_filter('mwform_inquiry_data_columns-mwf_6147', 'sv_mwform_custom_data');
add_filter('mwform_inquiry_data_columns-mwf_6148', 'sv_mwform_custom_data');
add_filter('mwform_inquiry_data_columns-mwf_6149', 'sv_mwform_custom_data');

/* メニュー */
register_nav_menus([
  'valve' => 'Valve Products',
  'fluid control' => 'Fluid Control Products',
  'company' => 'Corporate Profile',
  'business' => 'Our Businesses',
]);

function description_in_nav_menu($item_output, $item)
{
  if ($item->description) {
    return preg_replace('/(<a.*?>[^<]*?)</', '$1' . "<br class='u-sp'><span>{$item->description}</span><", $item_output);
  } else {
    return $item_output;
  }
}
add_filter('walker_nav_menu_start_el', 'description_in_nav_menu', 10, 4);

/* 不要なページを無効化します。(404扱い)*/
function custom_handle_404()
{ // 検索ページ、作成者ページ、添付ファイルページを無効化
  if ( /*is_search() || */is_author() || is_attachment()) {
    global $wp_query;
    $wp_query->set_404();
    status_header(404);
    nocache_headers();
  }
}
add_action('template_redirect', 'custom_handle_404');

/* RESTAPIのエンドポイントを無効化 */
function my_filter_rest_endpoints($endpoints)
{
  if (isset($endpoints['/wp/v2/users'])) {
    unset($endpoints['/wp/v2/users']);
  }
  if (isset($endpoints['/wp/v2/users/(?P<id>[¥d]+)'])) {
    unset($endpoints['/wp/v2/users/(?P<id>[¥d]+)']);
  }
  return $endpoints;
}
add_filter('rest_endpoints', 'my_filter_rest_endpoints', 10, 1);
remove_action('xmlrpc_rsd_apis', 'rest_output_rsd');
remove_action('template_redirect', 'rest_output_link_header', 11);

/* author／creatorの制御 */
function knockout_author_query()
{
  // disable author rewrite rule
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
  $wp_rewrite->author_base = '';
  $wp_rewrite->author_structure = '/';
  // for author query request
  if (isset($_REQUEST['author']) && !empty($_REQUEST['author'])) {
    $user_info = get_userdata(intval($_REQUEST['author']));
    if ($user_info && array_key_exists('administrator', $user_info->caps) && in_array('administrator', $user_info->roles)) {
      wp_redirect(home_url());
      exit;
    }
  }
}
add_action('init', 'knockout_author_query');

/* ----------------------------------------------------------------------------
　モジュールレイアウト作成
---------------------------------------------------------------------------- */
function custom_layout()
{
  if (have_rows('module')) :
    while (have_rows('module')) : the_row(); // コラム毎

      if (get_row_layout() == 'photo_text_module') :
        echo '<ul class="photo_text_module">';
        if (have_rows('li')) :
          while (have_rows('li')) : the_row(); // li
            echo '<li class="' . get_sub_field('width') . ' ' . get_sub_field('zoom') . '">';
            echo '<p class="photo">';

            $photo_url = get_sub_field('photo');
            $photo_id = attachment_url_to_postid($photo_url);
            $photo_alt = get_post_meta($photo_id, '_wp_attachment_image_alt', true);

            if ($photo_url) {
              echo '<img src="' . esc_url($photo_url) . '" alt="' . esc_attr($photo_alt) . '">';
            }

            if (get_sub_field('text')) {
              echo '<div class="text">' . get_sub_field('text') . '</div>';
            }
            echo '</li>';
          endwhile;
        endif;
        echo '</ul>';
      endif;

      if (get_row_layout() == 'photo_text_row_module') : // 画像テキスト横並びモジュール
        echo '<div class="photo_text_row_module ' . get_sub_field('zoom') . ' ' . get_sub_field('photo_position') . ' ' . get_sub_field('module_width') . '">';
        echo '<p class="photo ' . get_sub_field('width') . '">';

        $photo_url = get_sub_field('photo');
        $photo_id = attachment_url_to_postid($photo_url);
        $photo_alt = get_post_meta($photo_id, '_wp_attachment_image_alt', true);

        echo '<img src="' . esc_url($photo_url) . '" alt="' . esc_attr($photo_alt) . '">';

        echo '</p>';
        echo '<div class="text">' . get_sub_field('text') . '</div>';
        echo '</div>';
      endif;

      if (get_row_layout() == 'photo_text_md_module') : // 画像テキストモジュール（小見出し付）
        echo '<ul class="photo_text_md_module">';
        if (have_rows('li')) :
          while (have_rows('li')) : the_row(); // li
            echo '<li class="' . get_sub_field('width') . ' ' . get_sub_field('zoom') . '">';
            echo '<p class="title">' . get_sub_field('title') . '</p>';

            $photo_url = get_sub_field('photo');

            if ($photo_url) {
              $photo_id = attachment_url_to_postid($photo_url);
              $photo_alt = get_post_meta($photo_id, '_wp_attachment_image_alt', true);
              echo '<p class="photo">';
              echo '<img src="' . esc_url($photo_url) . '" alt="' . esc_attr($photo_alt) . '">';
              echo '</p>';
            }

            echo '<div class="text">' . get_sub_field('text') . '</div>';

            if (get_sub_field('btn_link')) {
              // アンカーリンク判別
              $thisLink = get_sub_field('btn_link');
              $anchorClass = '';
              if (strpos($thisLink, '#') !== false) {
                $anchorClass = 'anchor';
              }
              if (get_sub_field('btn_target') == "blank") {
                echo '<p class="btn ' . get_sub_field('btn_target') . ' ' . $anchorClass . '"><a href="' . get_sub_field('btn_link') . '" target="_' . get_sub_field('btn_target') . '" class="c-btn--type01 link--external">' . get_sub_field('btn_text') . '</a></p>';
              } else {
                echo '<p class="btn ' . get_sub_field('btn_target') . ' ' . $anchorClass . '"><a href="' . get_sub_field('btn_link') . '" target="_' . get_sub_field('btn_target') . '" class="c-btn--type01">' . get_sub_field('btn_text') . '</a></p>';
              }
            }
            echo '</li>';
          endwhile;
        endif;
        echo '</ul>';
      endif;

      if (get_row_layout() == 'explan_module') : // 小見出しテキストモジュール
        echo '<div class="explan_module">';
        if (have_rows('dl')) :
          while (have_rows('dl')) : the_row(); // dl
            echo '<dl class="' . get_sub_field('width') . '">';
            echo '<dt>' . get_sub_field('title') . '</dt>';
            echo '<dd>' . get_sub_field('text') . '</dd>';
            echo '</dl>';
          endwhile;
        endif;
        echo '</div>';
      endif;

      if (get_row_layout() == 'common_title_style01') : // 大見出し
        echo '<div class="common_title_style01">';
        echo '<p class="sub">' . get_sub_field('sub') . '</p>';
        echo '<h2 class="title">' . get_sub_field('title') . '</h2>';
        echo '</div>';
      endif;

      if (get_row_layout() == 'common_title_style02') : // 中見出し
        echo '<h3 class="common_title_style02">' . get_sub_field('title') . '</h3>';
      endif;

      if (get_row_layout() == 'common_title_style03') : // 小見出し
        echo '<h4 class="common_title_style03">' . get_sub_field('title') . '</h4>';
      endif;

      if (get_row_layout() == 'common_title_style04') : // 極小見出し
        echo '<h5 class="common_title_style04">' . get_sub_field('title') . '</h5>';
      endif;

      if (get_row_layout() == 'btn_style01') : // リンクボタン
        if (get_sub_field('pdf')) {
          echo '<p class="btn_style01 pdf"><a href="' . get_sub_field('pdf') . '" target="_blank" class="c-btn--type01 link--pdf">' . get_sub_field('text') . '</a></p>';
        } else {
          if (get_sub_field('target') == "blank") {
            echo '<p class="btn_style01 ' . get_sub_field('target') . '"><a href="' . get_sub_field('link') . '" target="_' . get_sub_field('target') . '" class="c-btn--type01 link--external">' . get_sub_field('text') . '</a></p>';
          } else {
            echo '<p class="btn_style01 ' . get_sub_field('target') . '"><a href="' . get_sub_field('link') . '" target="_' . get_sub_field('target') . '" class="c-btn--type01">' . get_sub_field('text') . '</a></p>';
          }
        }
      endif;

      if (get_row_layout() == 'link_module') : // リンクリスト
        echo '<ul class="link_module ';
        if (get_sub_field('direction') == 'column') {
          echo 'column';
        }
        echo '">';
        if (have_rows('li')) :
          while (have_rows('li')) : the_row(); // dl
            echo '<li>';
            if (get_sub_field('pdf')) {
              echo '<a href="' . get_sub_field('pdf') . '" class="pdf" target="_blank">' . get_sub_field('text') . '<img src="' . esc_url(get_template_directory_uri()) . '/images/common/icon-pdf.svg"></a>';
            } elseif (get_sub_field('target') == "blank") {
              echo '<a href="' . get_sub_field('link') . '" class="' . get_sub_field('target') . '" target="_' . get_sub_field('target') . '">' . get_sub_field('text') . '<img src="' . esc_url(get_template_directory_uri()) . '/images/common/icon-external_blue.svg"></a>';
            } else {
              echo '<a href="' . get_sub_field('link') . '">' . get_sub_field('text') . '</a>';
            }
            echo '</li>';
          endwhile;
        endif;
        echo '</ul>';
      endif;

      if (get_row_layout() == 'text_module') : // テキストモジュール
        echo '<div class="text_module ' . get_sub_field('position') . ' ' . get_sub_field('size') . '">' . get_sub_field('text') . '</div>';
      endif;

      if (get_row_layout() == 'productlist_module') :
        echo '<ul class="productlist_module">';
        if (have_rows('li')) :
          while (have_rows('li')) : the_row();
            echo '<li>';
            if (get_sub_field('link')) {
              echo '<a href="' . get_sub_field('link') . '" target="' . get_sub_field('target') . '">';
            }
            $photo_url = get_sub_field('photo');

            if ($photo_url) {
              $photo_id = attachment_url_to_postid($photo_url);
              $photo_alt = get_post_meta($photo_id, '_wp_attachment_image_alt', true);
            }

            echo '<p class="photo">';
            echo '<img src="' . esc_url($photo_url) . '" alt="' . esc_attr($photo_alt) . '">';
            echo '</p>';
            echo '<p class="title">' . get_sub_field('title') . '</p>';
            echo '<p class="text">' . get_sub_field('text') . '</p>';
            if (get_sub_field('link')) {
              echo '</a>';
            }
            echo '</li>';
          endwhile;
        endif;
        echo '</ul>';
      endif;

      if (get_row_layout() == 'anchorid') : // アンカーリンク用目印ID
        echo '<a id="' . get_sub_field('id') . '" name="' . get_sub_field('id') . '"></a>';
      endif;

      if (get_row_layout() == 'inc_module') : // モジュールをインクルード
        $filename = 'inc/' . get_sub_field('module_name');
        get_template_part($filename);
      endif;

      if (get_row_layout() == 'line_module') : // 水平線モジュール
        echo '<div class="line_module"></div>';
      endif;

      if (get_row_layout() == 'recommend_module') : // 関連動画
        if (have_rows('li')) :
          echo '<ul id="recommend_movie">';
          while (have_rows('li')) : the_row(); // li
            echo '<li>';
            echo '<a href="https://www.youtube.com/watch?v=' . get_sub_field('youtubeid') . '"' . ' data-lity="data-lity">';
            echo '<p class="photo"><img src="https://i.ytimg.com/vi/' . get_sub_field('youtubeid') . '/hqdefault.jpg"></p>';
            echo '<p class="title">' . get_sub_field('youtubetitle') . '</p>';
            echo '</a>';
            echo '</li>';
          endwhile;
        endif;
        echo '</ul>';
      endif;

    endwhile;
  endif;
}

// バルブ関連製品の投稿一覧に順序を追加する関数
function adjust_columns_order($columns)
{
  $new_columns = [
    'menu_order' => '順序',
  ];

  // 既存の列から特定のポイントで分割
  $before = array_slice($columns, 0, 2, true); // 最初の2列を保持
  $after = array_slice($columns, 2, null, true); // 残りの列を保持

  // 新しい列を中間に挿入して配列を再結合
  $columns = array_merge($before, $new_columns, $after);

  return $columns;
}
add_filter('manage_product_posts_columns', 'adjust_columns_order');

// 順序の内容を表示する関数
function product_attributes_column_content($column, $post_id)
{
  switch ($column) {
    case 'menu_order':
      $post = get_post($post_id);
      echo $post->menu_order; // メニューオーダーの値を表示
      break;
  }
}
add_action('manage_product_posts_custom_column', 'product_attributes_column_content', 10, 2);

// リライトルールの順序を変更する関数
function reorder_rewrite_rules($rules)
{
  // 特定のルールを一時的に保存する変数
  $product_rules = [];          // 'product' が含まれるルールを保存
  $product_news_rules = [];     // 'product/news' が含まれるルールを保存
  $new_rules = [];              // その他のルールを保存

  // 各ルールをチェックし、特定のルールを見つけたら保存する
  foreach ($rules as $rule => $query) {
    if (strpos($rule, 'product/news') !== false) {
      // 'product/news' が含まれるルールを保存
      $product_news_rules[$rule] = $query;
    } elseif (strpos($rule, 'product') !== false) {
      // 'product' が含まれるルールを保存
      $product_rules[$rule] = $query;
    } else {
      // それ以外のルールを保存
      $new_rules[$rule] = $query;
    }
  }

  // 新しい順序でルールを再構築する
  $final_rules = [];    // 最終的なルールセット

  // 各ルールを再配置する
  foreach ($rules as $rule => $query) {
    if (strpos($rule, 'product/news') !== false) {
      // 'product/news' が含まれるルールを先に追加
      $final_rules = array_merge($final_rules, $product_rules);
      $final_rules[$rule] = $query;
    } elseif (strpos($rule, 'product') !== false) {
      // 'product' が含まれるルールを次に追加
      $final_rules = array_merge($final_rules, $product_news_rules);
      $final_rules[$rule] = $query;
    } else {
      // その他のルールを最後に追加
      $final_rules[$rule] = $query;
    }
  }

  return $final_rules;    // 最終的なルールセットを返す
}

// rewrite_rules_array フィルタに関数をフック
add_filter('rewrite_rules_array', 'reorder_rewrite_rules');
