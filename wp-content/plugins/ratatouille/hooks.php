<?php 
// J'ai copié collé tous les add_action de bootstrap.php et j'ai fait un appel de ce fichier(hooks.php) dans bootstrap.php à la place
use App\Features\PostTypes\RecipePostType as RecipePostType;
use App\Features\Widgets\DishOfTheDayWidget;
use App\Features\Sections\Section;
use App\Features\Pages\Page;
use App\Features\Pages\SendMail;
use App\Setup;

 add_action('init',[RecipePostType::class, 'register']);
 add_action('widgets_init', [DishOfTheDayWidget::class, 'register']);
 add_action('admin_init',[Section::class,'init']);
 add_action('admin_menu',[Page::class,'init']);
 add_action('admin_action_send-mail', [SendMail::class, 'send_mail']); 
 add_action('admin_init', [Setup::class, 'start_session']); 

