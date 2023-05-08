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
					<div class="book-cover sticky-top">
						<div class="thumbnail">
							<img class="rounded shadow-sm border w-100 lazy" src="<?= base_url('assets/img/empty.svg') ?>" data-src="<?= $book->cover ?>" alt="<?= $book->name ?>">
							<?php if ($book->is_pdf) : ?>
								<span class="pdf">PDF</span>
							<?php endif ?>
						</div>
					</div>
				</div>

				<div class="col-md-8">
					<h1 class="h6 fw-normal text-muted mb-1"><?= $book->author ?></h1>
					<h2 class="h4"><?= $book->name ?></h2>

					<table class="table table-bordered my-4">
						<tr>
							<th>Publisher</th>
							<td>:</td>
							<td>
								<?= $book->publisher ?: '<span class="badge bg-secondary rounded-pill" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Maybe the author is an Indie Writer!"><i class="fa-duotone fa-question"></i></span>' ?>
							</td>
						</tr>
						<tr>
							<th>Publication Year</th>
							<td>:</td>
							<td><?= $book->publication ?: 'Unknown' ?></td>
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
						<?php if (!$book->is_wishlist && $book->url) : ?>
							<tr>
								<th>Where I Bought</th>
								<td>:</td>
								<td>
									<a href="<?= $book->url ?>" class="text-decoration-none" target="_blank">Buy too ❤️</a>
								</td>
							</tr>
						<?php endif ?>
					</table>

					<article>
						<div id="synopsis" class="mb-3">
							<h3 class="h5 mb-3">Synopsis</h3>
							<div class="border border-4 border-top-0 border-bottom-0 border-end-0 my-1 me-2">
								<div class="ps-2 py-1">
									<?= $book->synopsis ?: 'Coming Soon' ?>
								</div>
							</div>
						</div>

						<div id="review" class="mb-3">
							<h3 class="h5 mb-3">Review</h3>
							<div class="border border-4 border-top-0 border-bottom-0 border-end-0 my-1 me-2">
								<div class="ps-2 py-1">
									<?= $book->review ?: 'Coming Soon' ?>
								</div>
							</div>
						</div>
					</article>

					<div id="giscus" class="mt-4"></div>
				</div>
			</div>
		</div>
	</main>

	<?php include 'includes/footer.php' ?>
	<?php include 'includes/script.php' ?>
</body>

</html>
