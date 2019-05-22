<?php
/**
 * fonction pour rendre une view
 *
 * @param string $path chemin du fichier à partir du dossier views sans l'extention .html.php
 * @return void
 */
 function view($path)
{
  // Cette function = helper, me permet de faire un include plus rapidement je récupère juste le chemin du fichier à partir du dossier views sans l'extention dans le fichier RecipeDetailsMetabox.php ligne 31 que j'envoi en paramètre,ce chemin est envoyé dans la variable $path, puis je complète le chemin avec ma variable global et l'extention.
  include(RAT_VIEW_DIR . $path . '.html.php');
}
// On créer un helper qui fait plus au moins comme notre autre helper view mais avec nos functon ob_start() et ob_het_clean() on retourne ce qu'a traité ob_get_clean
function mail_template($path,$data = array())
{
 ob_start();
 extract($data);
 include(RAT_VIEW_DIR . $path . '.html.php');
 return ob_get_clean();
}  