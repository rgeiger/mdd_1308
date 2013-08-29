<div class="container">
<h3>User Blog</h3>

<?php foreach($posts as $post) : ?>
	<article class="well">
		<h2>			
                    <a href="_Views/single.php?id=<?= $post['id']; ?>">
                        <?= $post['title']; ?>
                    </a>		
		</h2>
		<div class="body"><?= $post['body']; ?></div>
	</article>
<?php endforeach; ?>
</div>