<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'includes/head.php' ?>
</head>

<body>
	<?php include 'includes/navbar.php' ?>

	<main>
		<div id="detail" class="container my-5">
			<div class="row">
				<div class="col-md-4 mb-4">
					<img class="rounded shadow-sm border w-100 lazy" src="<?= base_url('assets/img/empty.svg') ?>" data-src="<?= $book->cover ?>" alt="<?= $book->name ?>">
				</div>

				<div class="col-md-8">
					<h1 class="h6 fw-normal text-muted mb-1"><?= $book->author ?></h1>
					<h2 class="h4"><?= $book->name ?></h2>

					<table class="table table-bordered mt-4 mb-0">
						<tr>
							<th>Publisher</th>
							<td>:</td>
							<td><?= $book->publisher ?: '-' ?></td>
						</tr>
						<tr>
							<th>Publication Year</th>
							<td>:</td>
							<td><?= $book->publication ?: '-' ?></td>
						</tr>
						<tr>
							<th>Owned</th>
							<td>:</td>
							<td><?= $book->is_wishlist ? '❎' : '✅' ?></td>
						</tr>
						<tr>
							<th>Status</th>
							<td>:</td>
							<td>
								<span class="badge text-bg-<?= status_class($book->status) ?>"><?= status_text($book->status) ?></span>
							</td>
						</tr>
						<tr>
							<th>Rating</th>
							<td>:</td>
							<td>
								<?php if ($book->rate) : ?>
									<?php for ($rate = 0; $rate < $book->rate; $rate++) : ?>
										<span class="emoji">&#x2B50;</span>
									<?php endfor ?>
								<?php else : ?>
									Not Rated
								<?php endif ?>
							</td>
						</tr>
					</table>

					<?php if (!$book->is_wishlist && $book->url) : ?>
						<p class="mt-4 mb-1">Where I bought:</p>
						<a href="<?= $book->url ?>" class="btn btn-warning" target="_blank">Buy too ❤️</a>
					<?php endif ?>
				</div>
			</div>
		</div>
	</main>

	<?php include 'includes/script.php' ?>
</body>

</html>
