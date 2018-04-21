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
    <p><a href="index.php?action=editComment&amp;id=<?= $post['id'] ?>&amp;commentId=<?= $comment['id'] ?>"> (edit)</a>
    <p><?= nl2br(htmlspecialchars($comment['commentaire'])) ?></p>

<?php
}


if (isset($commentId))
{

   foreach ($comments as $comment)
    {
    if ($comment['id'] == $commentId)
        {
         ?>  
         <form action="index.php?action=editComment&amp;id=<?= $post['id'] ?>&amp;commentId=<?= $commentId ?>" method="post">
            <div>
                <label for="auteur">Auteur</label><br />
                <input type="text" id="auteur" name="auteur" value="<?= $comment['auteur'] ?>" />
             </div>
            <div>
                <label for="comment">Commentaire</label><br />
                <textarea id="comment" name="comment" value="<?= $comment['comment'] ?>"></textarea>
            </div>
            <div>
                <input type="submit" />
            </div>
        </form> 
    <?php
        }
    }
    
} else { ?>

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
}
$content = ob_get_clean(); ?>

<?php require('template.php'); ?>
</div>