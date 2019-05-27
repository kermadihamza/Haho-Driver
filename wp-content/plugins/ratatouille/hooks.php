<?php 
// J'ai copié collé tous les add_action de bootstrap.php et j'ai fait un appel de ce fichier(hooks.php) dans bootstrap.php à la place
use App\Features\PostTypes\RecipePostType as RecipePostType;
use App\Features\Widgets\DishOfTheDayWidget;
use App\Features\Sections\Section;
use App\Features\Pages\Page;
use App\Http\Controllers\MailController;
use App\Setup;
use App\Database\Database;
use App\Features\Roles\Role;

 add_action('init',[RecipePostType::class, 'register']);
 add_action('widgets_init', [DishOfTheDayWidget::class, 'register']);
 add_action('admin_init',[Section::class,'init']);
 add_action('admin_menu',[Page::class,'init']);
 
 add_action('admin_post_send-mail', [MailController::class, 'send']);
 add_action('admin_post_nopriv_send-mail', [MailController::class, 'send']);


 add_action('admin_init', [Setup::class, 'start_session']);
 register_activation_hook(__DIR__ . '/ratatouille.php', [Database::class, 'init']);
 // Nous ajoutons des roles à l'activation du plugin.
register_activation_hook(__DIR__ . '/ratatouille.php', [Role::class, 'init']);
 add_action('admin_enqueue_scripts', [Setup::class, 'enqueue_scripts']);
 // Hook personnalisé, c'est la combinaison du hook 'admin_action_' de wordpress avec mail-delete qui est l'action qu'on envoi dans l'url ligne 27 du fichier show-mail-html.php 
 add_action('admin_action_mail-delete', [MailController::class, 'delete']); 
 add_action('admin_action_mail-update', [MailController::class, 'update']); 