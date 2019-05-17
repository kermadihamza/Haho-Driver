<?php
 namespace App\Features\Taxonomies;
 use App\Features\PostTypes\RecipePostType;
 class RecipeTaxonomy
{
  public static $slug = 'recipe_taxonomy';
  /**
   * Enregistrement de la Taxonomie
   * https://developer.wordpress.org/plugins/taxonomies/working-with-custom-taxonomies/
   * @return void
   */
  public static function register()
  {
     $labels = [// les labels pour la taxonomie
      'name' => __('Type de services'),
      'singular_name' => __('Type de service'),
      'search_items' => __('Search Type de services'),
      'all_items' => __('All Type de services'),
      'parent_item' => __('Parent Type de service'),
      'parent_item_colon' => __('Parent Type de service:'),
      'edit_item' => __('Edit Type de service'),
      'update_item' => __('Update Type de service'),
      'add_new_item' => __('Add New Type de service'),
      'new_item_name' => __('New Type de service Name'),
      'menu_name' => __('Type de service'),
    ];
    $args = [
      'hierarchical' => true, // make it hierarchical (like categories)
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => ['slug' => 'service'],
    ];
    // ajout de la taxonomie pour le type de contenu recipe
    register_taxonomy(self::$slug, [RecipePostType::$slug], $args);
   }
} 