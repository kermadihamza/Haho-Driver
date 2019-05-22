<?php
/*
 * Plugin Name: myPlugin
 * Author: Plugin Author
 * Text Domain: recipe
 * Domain Path: /languages
 */
namespace App\Features\PostTypes;
 // On à Couper Coller notre function du fichier Ratatouille.php pour l'englobé avec une class
class RecipePostType
{
  public static function register()
  {
// info sur la fonction https://developer.wordpress.org/reference/functions/register_post_type/
    register_post_type(
      'recipe', 
      [
    // labels contient un tableau avec plein de paramètre par defaut en anglais comme : Add Post, Edit Post etc, on fait référence aux clefs et on y introduit une nouvelle valeur en français pour que dans notre back office on ait les messages en français. Vous pouvez aller verifier en allant sur une de vos recettes et en allant sur la page de modification de cette recette, vous pourrez constater que le titre sera : Modifier la recette
        'labels' => [
            'name' => __('Recettes'),
            'singular_name' => __('Recette'),
            'add_new' => __('Ajouter'),
            'add_new_item' => __('Ajouter une recette'),
            'edit_item' => __('Modifier la recette'),
            'new_item' => __('Nouvelle recette'),
            'view_item' => __('Voir la recette'),
            'view_items' => __('Voir les recettes'),
            'search_items' => __('Rechercher des recettes'),
            'not_found' => __('Pas de recette trouvées.'),
            'not_found_in_trash' =>('Pas de recettes dans la corbeille.'),
            'all_items' => __('Toutes les recettes'),
            'archives' => __('Recettes archivées'),        
            'filter_items_list' => __('Filtre de recette'),
            'items_list_navigation' => __('Navigation de recette'),
            'items_list' =>__('Liste recette'),
            'item_published' => __('Recette publiée.'),
            'item_published_privately' =>__('Recette publiée en privé.'),
            'item_reverted_to_draft' =>__('La recette est retournée au brouillon.'),
            'item_scheduled' => __('Recette planifiée.'),
            'item_updated' =>__('Recette mise à jours.'), 
            
          'name' => 'myPlugin',
          'singular_name' => 'myPlugin',
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => [
            'slug' => 'recette'
        ],
        // On active la possibilité d'assigner une catégorie à notre Recette grâce à la taxonomie 'category', rajoutez là puis allez voir,une fois fait essayez de rajouter un second arguement dans le tableau 'post_tag' et voyez ce que cela fait.
        'taxonomies' => ['category','post_tag'],
        'menu_icon' => 'dashicons-book',
        // On choisis dans supports ce qu'on veut rendre accessible dans notre post-type, un titre,un textarea,un extrait et la possibilité de rajouter une image mise en avant.
        'supports' =>  ['title', 'editor', 'excerpt', 'thumbnail'],
        ]
    );
   }
} 