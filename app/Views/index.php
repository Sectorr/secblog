<?php include 'partials/header.php'; ?>

<?php if(empty($posts)): ?>
	<div class="panel panel-default post">
		<div class="panel-body no-items">
			<h2>No posts yet</h2>
			<p>Have a little bit more patience, posts will come soon :)</p>
		</div>
	</div>
<?php endif; ?>

<?php foreach($posts as $post): ?>
	<div class="panel panel-default post" href="#">
		<div class="panel-body">
			<a href="<?= route('post', ['slug' => $post->slug]) ?>" class="title"><?= $post->title; ?></a>
			<p><?= $post->shortContent(100); ?></p>
			<div class="published-at">
				Posted by <?= $post->user()->name; ?> on <?= $post->created_at; ?>
			</div>
		</div>
	</div>
<?php endforeach; ?>

<?php include 'partials/footer.php'; ?>