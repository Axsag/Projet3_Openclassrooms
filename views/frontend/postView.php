<?php ob_start(); ?>



<div class="news">
    <h1>
        <?= $post['titre'] ?>
       
    </h1>
    <em class="post-meta">publié le <?= $post['date_creation_fr'] ?></em>
    
    <p>
        <?= nl2br($post['contenu']) ?>
    </p>
    <hr>

<h4>Commentaires</h4>

<?php


foreach ($comments as $comment)
{
?>
    <p><strong><?= $comment['auteur'] ?></strong>  le <?= $comment['comment_date_fr'] ?></p>
    <p><?= nl2br($comment['commentaire']) ?></p>
    <a href="index.php?action=reportcomment&id=<?=$_GET['id']?>&report=<?=$comment['id']?>"><p class="btn btn-outline-danger" ><em class="fa fa-exclamation-triangle"></em></p></a>


<?php
}
?>

    <hr>
    <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
    <div>
        <label for="auteur">Auteur</label><br />
        <input type="text" id="auteur" name="auteur" />
    </div>
    <div>
        <label for="commentaire">Commentaire</label><br />
        <textarea id="commentaire" name="commentaire"></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>
<?php

$content = ob_get_clean(); ?>

<?php require('template.php'); ?>
</div>