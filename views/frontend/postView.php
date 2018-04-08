<?php ob_start(); ?>

<h4><a href="index.php">Retour à l'accueil</a></h4>

<div class="news">
    <h2>
        <?= htmlspecialchars($post['titre']) ?>
        <em>le <?= $post['date_creation'] ?></em>
    </h2>
    
    <p>
        <?= nl2br(htmlspecialchars($post['contenu'])) ?>
    </p>


<h2>Commentaires</h2>

<?php


foreach ($comments as $comment)
{
?>
    <p><strong><?= htmlspecialchars($comment['auteur']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
    <p><?= nl2br(htmlspecialchars($comment['commentaire'])) ?></p>

<?php
}
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
</div>