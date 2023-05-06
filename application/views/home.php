<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?></title>

	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>"><?= $title ?></a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbar">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="https://suluh.my.id" target="_blank">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="https://notes.suluh.my.id" target="_blank">Notes</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div id="books" class="container mt-5 mb-4">
		<div class="row mt-3" data-masonry='{}'>
			<?php foreach ($books as $book) : ?>
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<div class="card book-item mb-3">
						<img src="<?= $book->cover ?>" class="card-img-top " alt="<?= $book->name ?>">

						<div class="card-body">
							<h5 class="card-title"><?= $book->name ?></h5>
							<p class="card-text text-muted">Publisher: <?= $book->publisher ?></p>
							<p class="card-text text-muted">Publication Year: <?= $book->publication ?></p>
							<p class="card-text text-muted">Author: <?= $book->author ?></p>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>

	<script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/masonry.pkgd.min.js') ?>"></script>
</body>

</html>
