<?php ob_start(); ?>
<?php
while ($data = $listcourent->fetch()) {
    ?>

<tbody>
	
		<td><?= $data['titre']?></td>
		<td><a href="index.php?action=postAdmin&id=<?= $data['id']?>"><?= $data['contenu']?></a></td>
	</tr>
</tbody>

<?php
}
$listcourent->closeCursor();
?>
<?php $adminBillet = ob_get_clean(); ?>
<?php require('templateupdatePost.php'); ?>