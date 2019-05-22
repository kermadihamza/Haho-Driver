<h1>Elias el grande rey</h1>

<div class="wrap">

    <!-- Ici nous ajoutons une partie d'html qui prendra en charge les notifications. On met cela dans un fichier à part afin de pouvoir réutiliser les notifications ailleurs -->
    <?php view('partials/notice'); ?>

    <!-- nous utilisons la fonction get_admin_page_title() pour récupérer le titre de la page admin que l'on a défini lors de l'enregistrement -->
    <h1><?= get_admin_page_title(); ?></h1>
    <p>Ce formulaire vous permet de nous contacter pour une réservation.</p>
    <form action="<?= get_admin_url() . '?action=send-mail'; ?>" method="post">
    <!-- Cette fonction créer des inputs cachés qui contiennent des informations qui vont nous permetre de savoir si le formulaire est authentique et si il est bien executé via notre site web et pas via une autre source. -->
    <?php wp_nonce_field('send-mail'); ?>

        <table class="form-table">
            <tr>
                <th>e-mail</th>
                <td><input type="email" name="email" id="email"></td>
            </tr>
            <tr>
                <th>Nom</th>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <th>Prénom</th>
                <td><input type="text" name="firstname" id="firstname"></td>
            </tr>
            <tr>
                <th>Message</th>
                <td><textarea name="message" id="message" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <th></th>
                <td><button type="submit" class="button-primary">Envoyer</button></td>
            </tr>

         </table>
    </form>
</div>   