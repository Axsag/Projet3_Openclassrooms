<?php $title = 'Jean Forteroche'; ?>

<?php ob_start(); ?>

<?php
foreach ($posts as $data)
{
?>
    	  <div class="post-preview">
			<a href="post.html">
              <h2 class="post-title">
                <?= htmlspecialchars($data['titre']) ?>
              </h2>
              <h3 class="post-subtitle">
         	   <?= nl2br(htmlspecialchars($data['contenu'])) ?>
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