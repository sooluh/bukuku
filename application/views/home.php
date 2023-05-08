<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'includes/head.php' ?>
</head>

<body>
	<?php include 'includes/navbar.php' ?>

	<main>
		<div id="owned" class="container my-5 books">
			<div class="d-flex align-items-center mb-3 section-title">
				<img src="<?= base_url('assets/img/course-assign.webp') ?>" width="32" height="32" class="me-2" alt="Owned Books">
				<h1 class="h4 mb-0">Owned Books</h1>
			</div>

			<div class="row" data-masonry='{}'>
				<?php foreach ($owned as $book) : ?>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2">
						<a href="<?= base_url('book/' . $book->uuid) ?>" class="card book-item" up-target="main">
							<div class="shine">
								<img src="<?= base_url('assets/img/empty.svg') ?>" width="100" height="100" class="card-img-top lazy" data-src="<?= $book->cover ?>" alt="<?= $book->name ?>">
							</div>

							<div class="card-body">
								<h2 class="h5 card-title"><?= $book->name ?></h2>
								<p class="card-text text-muted mb-2"><?= $book->author ?></p>
								<span class="badge text-bg-<?= status_class($book->status) ?>"><?= status_text($book->status) ?></span>
							</div>
						</a>
					</div>
				<?php endforeach ?>
			</div>
		</div>

		<div id="whishlist" class="container my-5 books">
			<div class="d-flex align-items-center mb-3 section-title">
				<img src="<?= base_url('assets/img/bookmark.webp') ?>" width="32" height="32" class="me-2" alt="Whishlisted Books">
				<h1 class="h4 mb-0">Wishlisted Books</h1>
			</div>

			<div class="row" data-masonry='{}'>
				<?php foreach ($whishlist as $book) : ?>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2">
						<a href="<?= base_url('book/' . $book->uuid) ?>" class="card book-item" up-target="main">
							<div class="shine">
								<img src="<?= base_url('assets/img/empty.svg') ?>" width="100" height="100" class="card-img-top lazy" data-src="<?= $book->cover ?>" alt="<?= $book->name ?>">
							</div>

							<div class="card-body">
								<h2 class="h5 card-title"><?= $book->name ?></h2>
								<p class="card-text text-muted"><?= $book->author ?></p>
							</div>
						</a>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</main>

	<?php include 'includes/footer.php' ?>
	<?php include 'includes/script.php' ?>
</body>

</html>
