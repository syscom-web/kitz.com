<?php
function cptui_register_my_taxes_keywords()
{

  /**
   * Taxonomy: 質問検索キーワード.
   */

  $labels = [
    "name" => esc_html__("質問検索キーワード", "custom-post-type-ui"),
    "singular_name" => esc_html__("質問検索キーワード", "custom-post-type-ui"),
  ];


  $args = [
    "label" => esc_html__("質問検索キーワード", "custom-post-type-ui"),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => false,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => ['slug' => 'keywords', 'with_front' => true,],
    "show_admin_column" => true,
    "show_in_rest" => true,
    "show_tagcloud" => false,
    "rest_base" => "keywords",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "rest_namespace" => "wp/v2",
    "show_in_quick_edit" => true,
    "sort" => false,
    "show_in_graphql" => false,
    "capabilities" => array(
      "manage_terms" => "manage_keywords",
      "edit_terms" => "edit_keywords",
      "delete_terms" => "delete_keywords",
      "assign_terms" => "assign_keywords"
    )
  ];
  register_taxonomy("keywords", ["faq"], $args);
}
add_action('init', 'cptui_register_my_taxes_keywords');

function cptui_register_my_taxes_faq_cat()
{

  /**
   * Taxonomy: 質問カテゴリー.
   */

  $labels = [
    "name" => esc_html__("質問カテゴリー", "custom-post-type-ui"),
    "singular_name" => esc_html__("質問カテゴリー", "custom-post-type-ui"),
  ];


  $args = [
    "label" => esc_html__("質問カテゴリー", "custom-post-type-ui"),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => true,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => ['slug' => 'faq_cat', 'with_front' => true,],
    "show_admin_column" => true,
    "show_in_rest" => true,
    "show_tagcloud" => false,
    "rest_base" => "faq_cat",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "rest_namespace" => "wp/v2",
    "show_in_quick_edit" => true,
    "sort" => false,
    "show_in_graphql" => false,
    "capabilities" => array(
      "manage_terms" => "manage_faq_cat",
      "edit_terms" => "edit_faq_cat",
      "delete_terms" => "delete_faq_cat",
      "assign_terms" => "assign_faq_cat"
    )
  ];
  register_taxonomy("faq_cat", ["faq"], $args);
}
add_action('init', 'cptui_register_my_taxes_faq_cat');

function cptui_register_my_taxes_faq_dialect()
{

  /**
   * Taxonomy: 質問製品.
   */

  $labels = [
    "name" => esc_html__("質問製品", "custom-post-type-ui"),
    "singular_name" => esc_html__("質問製品", "custom-post-type-ui"),
  ];


  $args = [
    "label" => esc_html__("質問製品", "custom-post-type-ui"),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => true,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => ['slug' => 'faq_dialect', 'with_front' => true,],
    "show_admin_column" => true,
    "show_in_rest" => true,
    "show_tagcloud" => false,
    "rest_base" => "faq_dialect",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "rest_namespace" => "wp/v2",
    "show_in_quick_edit" => true,
    "sort" => false,
    "show_in_graphql" => false,
    "capabilities" => array(
      "manage_terms" => "manage_faq_dialect",
      "edit_terms" => "edit_faq_dialect",
      "delete_terms" => "delete_faq_dialect",
      "assign_terms" => "assign_faq_dialect"
    )
  ];
  register_taxonomy("faq_dialect", ["faq"], $args);
}
add_action('init', 'cptui_register_my_taxes_faq_dialect');

function cptui_register_my_taxes_keywords02()
{

  /**
   * Taxonomy: トラブル検索キーワード.
   */

  $labels = [
    "name" => esc_html__("トラブル検索キーワード", "custom-post-type-ui"),
    "singular_name" => esc_html__("トラブル検索キーワード", "custom-post-type-ui"),
  ];


  $args = [
    "label" => esc_html__("トラブル検索キーワード", "custom-post-type-ui"),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => false,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => ['slug' => 'keywords02', 'with_front' => true,],
    "show_admin_column" => true,
    "show_in_rest" => true,
    "show_tagcloud" => false,
    "rest_base" => "keywords02",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "rest_namespace" => "wp/v2",
    "show_in_quick_edit" => true,
    "sort" => false,
    "show_in_graphql" => false,
    "capabilities" => array(
      "manage_terms" => "manage_keywords02",
      "edit_terms" => "edit_keywords02",
      "delete_terms" => "delete_keywords02",
      "assign_terms" => "assign_keywords02"
    )
  ];
  register_taxonomy("keywords02", ["troubleshooting"], $args);
}
add_action('init', 'cptui_register_my_taxes_keywords02');

function cptui_register_my_taxes_troubleshooting_dialect()
{

  /**
   * Taxonomy: トラブル製品.
   */

  $labels = [
    "name" => esc_html__("トラブル製品", "custom-post-type-ui"),
    "singular_name" => esc_html__("トラブル製品", "custom-post-type-ui"),
  ];


  $args = [
    "label" => esc_html__("トラブル製品", "custom-post-type-ui"),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => true,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => ['slug' => 'troubleshooting_dialect', 'with_front' => true,],
    "show_admin_column" => true,
    "show_in_rest" => true,
    "show_tagcloud" => false,
    "rest_base" => "troubleshooting_dialect",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "rest_namespace" => "wp/v2",
    "show_in_quick_edit" => true,
    "sort" => false,
    "show_in_graphql" => false,
    "capabilities" => array(
      "manage_terms" => "manage_troubleshooting_dialect",
      "edit_terms" => "edit_troubleshooting_dialect",
      "delete_terms" => "delete_troubleshooting_dialect",
      "assign_terms" => "assign_troubleshooting_dialect"
    )
  ];
  register_taxonomy("troubleshooting_dialect", ["troubleshooting"], $args);
}
add_action('init', 'cptui_register_my_taxes_troubleshooting_dialect');

function cptui_register_my_taxes_troubleshooting_cat()
{

  /**
   * Taxonomy: トラブル現象.
   */

  $labels = [
    "name" => esc_html__("トラブル現象", "custom-post-type-ui"),
    "singular_name" => esc_html__("トラブル現象", "custom-post-type-ui"),
  ];


  $args = [
    "label" => esc_html__("トラブル現象", "custom-post-type-ui"),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => true,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => ['slug' => 'troubleshooting_cat', 'with_front' => true,],
    "show_admin_column" => true,
    "show_in_rest" => true,
    "show_tagcloud" => false,
    "rest_base" => "troubleshooting_cat",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "rest_namespace" => "wp/v2",
    "show_in_quick_edit" => true,
    "sort" => false,
    "show_in_graphql" => false,
    "capabilities" => array(
      "manage_terms" => "manage_troubleshooting_cat",
      "edit_terms" => "edit_troubleshooting_cat",
      "delete_terms" => "delete_troubleshooting_cat",
      "assign_terms" => "assign_troubleshooting_cat"
    )
  ];
  register_taxonomy("troubleshooting_cat", ["troubleshooting"], $args);
}
add_action('init', 'cptui_register_my_taxes_troubleshooting_cat');

function cptui_register_my_taxes_news_cat2()
{

  /**
   * Taxonomy: ニュースカテゴリー.
   */

  $labels = [
    "name" => esc_html__("ニュースカテゴリー", "custom-post-type-ui"),
    "singular_name" => esc_html__("ニュースカテゴリー", "custom-post-type-ui"),
  ];


  $args = [
    "label" => esc_html__("ニュースカテゴリー", "custom-post-type-ui"),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => true,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => ['slug' => 'news_cat2', 'with_front' => true,],
    "show_admin_column" => true,
    "show_in_rest" => true,
    "show_tagcloud" => false,
    "rest_base" => "news_cat2",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "rest_namespace" => "wp/v2",
    "show_in_quick_edit" => false,
    "sort" => false,
    "show_in_graphql" => false,
    "capabilities" => array(
      "manage_terms" => "manage_news_cat2",
      "edit_terms" => "edit_news_cat2",
      "delete_terms" => "delete_news_cat2",
      "assign_terms" => "assign_news_cat2"
    )
  ];
  register_taxonomy("news_cat2", ["sustainability-news"], $args);
}
add_action('init', 'cptui_register_my_taxes_news_cat2');

function cptui_register_my_taxes_news_cate() {

  /**
   * Taxonomy: カテゴリ.
   */

  $labels = [
    "name" => esc_html__( "カテゴリ", "custom-post-type-ui" ),
    "singular_name" => esc_html__( "カテゴリ", "custom-post-type-ui" ),
  ];

  
  $args = [
    "label" => esc_html__( "カテゴリ", "custom-post-type-ui" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => true,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'news_cate', 'with_front' => true, ],
    "show_admin_column" => true,
    "show_in_rest" => true,
    "show_tagcloud" => false,
    "rest_base" => "news_cate",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "rest_namespace" => "wp/v2",
    "show_in_quick_edit" => true,
    "sort" => false,
    "show_in_graphql" => false,
    "capabilities" => array(
      "manage_terms" => "manage_news_cate",
      "edit_terms" => "edit_news_cate",
      "delete_terms" => "delete_news_cate",
      "assign_terms" => "assign_news_cate"
    )

  ];
  register_taxonomy( "news_cate", [ "fluid-control", "product" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_news_cate' );

function cptui_register_my_taxes_top_service_line() {

  /**
   * Taxonomy: トップ一覧表示.
   */

  $labels = [
    "name" => esc_html__( "トップ一覧表示", "custom-post-type-ui" ),
    "singular_name" => esc_html__( "トップ一覧表示", "custom-post-type-ui" ),
  ];

  
  $args = [
    "label" => esc_html__( "トップ一覧表示", "custom-post-type-ui" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => true,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'top_service_line', 'with_front' => true, ],
    "show_admin_column" => true,
    "show_in_rest" => true,
    "show_tagcloud" => false,
    "rest_base" => "top_service_line",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "rest_namespace" => "wp/v2",
    "show_in_quick_edit" => true,
    "sort" => false,
    "show_in_graphql" => false,
    "capabilities" => array(
      "manage_terms" => "manage_top_service_line",
      "edit_terms" => "edit_top_service_line",
      "delete_terms" => "delete_top_service_line",
      "assign_terms" => "assign_top_service_line"
    )
  ];
  register_taxonomy( "top_service_line", [ "product" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_top_service_line' );
