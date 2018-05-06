<?php $title = 'Jean Forteroche'; ?>
<?php ob_start(); ?>

<?php
foreach ($posts as $data)
{
  $content_strip=strip_tags($data['contenu']);
  $content_strip=nl2br($content_strip);
?>
  <div class="post-preview">
		<a href="index.php?action=post&amp;id=<?= $data['id'] ?>">
      <h2 class="post-title">
        <?= ($data['titre']) ?>
      </h2>
      <h3 class="post-subtitle">
        <?= subMyString($content_strip, 150, "..."); ?>
      </h3>
    </a>
    <p class="post-meta">
      Posté le <?= $data['creation_date_fr'] ?>
    </p>
  </div>
  <hr>
<?php
}
?>
<?php $content = ob_get_clean(); ?>

<?php require ('template.php'); ?>