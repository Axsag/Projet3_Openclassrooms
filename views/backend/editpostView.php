<?php //require('templateeditpostView.php'); ?>
<!DOCTYPE html>
<html>
<head>
<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
<script>
  tinymce.init({
    selector: '#contenu'
  });
  </script>
</head>

<body>
	<h1>Edition de l'article</h1>

	<form action="index.php?action=postEdition&id=<?=$_GET['id']?>"
		method="post">
		<div>
			<label for="title">titre</label><br /> <input type="text" id="titre"
				name="titre" value="<?= $currentPost['titre'] ?>">
		</div>
		<div>
			<label for="contenu">article</label><br />
			<textarea id="contenu" name="contenu"> <?= $currentPost['contenu'] ?></textarea>
		</div>
		<div>
			<input type="submit" />
		</div>
	</form>

</body>
</html>