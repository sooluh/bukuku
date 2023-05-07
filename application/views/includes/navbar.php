<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
		<a class="navbar-brand" href="<?= base_url() ?>" up-target="main"><?= settings('title') ?></a>

		<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbar" title="Open">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="d-none d-block-md navbar-collapse justify-content-end">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url() ?>" up-target="main">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="https://suluh.my.id" target="_blank">About ↗️</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="https://notes.suluh.my.id" target="_blank">Notes ↗️</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<div class="offcanvas offcanvas-end" tabindex="-1" id="navbar">
	<div class="offcanvas-header">
		<h5 class="offcanvas-title">Menu</h5>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
	</div>

	<div class="offcanvas-body">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link text-dark" href="<?= base_url() ?>" up-target="main">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-dark" href="https://suluh.my.id" target="_blank">About ↗️</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-dark" href="https://notes.suluh.my.id" target="_blank">Notes ↗️</a>
			</li>
		</ul>
	</div>
</div>
