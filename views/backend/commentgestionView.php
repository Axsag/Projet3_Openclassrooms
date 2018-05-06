<?php ob_start(); ?>

<tbody>
	<tr>
		<td align="center"><a class="btn btn-warning"
			href="index.php?action=editshow&id=<?= $_GET['id']; ?>"><em
				class="fa fa-pencil"></em></a> <a class="btn btn-danger"
			href="index.php?action=postSuppression&id=<?=$_GET['id'];?>"><em
				class="fa fa-trash"></em></a></td>
		<td class="hidden-xs"><em>le <?= $post['date_creation_fr'] ?></em></td>
		<td><?=  $post['titre']?></td>
		<td><?= nl2br($post['contenu'])?></td>
	</tr>
</tbody>

<?php $adminPost = ob_get_clean(); ?>


<?php

ob_start();
while ($comment = $comments->fetch(PDO::FETCH_ASSOC)) {
    if ($comment['signaler'] == 0)
    {
    ?>
		<tbody>
			<tr>
				<td align="center">					 
					<a class="btn btn-danger" href="index.php?action=commentSuppression&id=<?= $_GET['id']=$comment['id'];?>"><em class="fa fa-times"></em></a>
				</td>
				<td class="hidden-xs"><em>le <?= $comment['comment_date_fr'] ?></em></td>
				<td><?= $comment['auteur'] ?></td>
				<td><?= nl2br($comment['commentaire']) ?></td>
			</tr>
		</tbody>
<?php
	}
	else
	{
		{
?>
		<tbody>
			<tr>
				<td align="center">
					<a class="btn btn-success" href="index.php?action=removereport&id_comment=<?= $comment['id']; ?>"><em class="fa fa-check"></em></a> 
					<a class="btn btn-danger" href="index.php?action=commentSuppression&id=<?= $_GET['id']=$comment['id'];?>"><em class="fa fa-times"></em></a>
					<p class="btn btn-warning" ><em class="fa fa-exclamation-triangle"></em></p>
				</td>
				<td class="hidden-xs"><em>le <?= $comment['comment_date_fr'] ?></em></td>
				<td><?= $comment['auteur'] ?></td>
				<td><?= nl2br($comment['commentaire']) ?></td>
			</tr>
		</tbody> 

<?php 
		}
	}
}
?>

<?php $adminComment = ob_get_clean(); ?>



<?php require('templatecommentgestionView.php'); ?>
