<?php
	include 'nav/header.php';
	set_include_path('last_db');
?>
		<main>
			<div class="container py-4">
				<div class="p-5 mb-4 bg-light rounded-3">
					<div class="container-fluid py-5">
						<h1 class="display-5 fw-bold"><?= $info['cont_wlcm_heading'] ?></h1>
						<p class="col-md-8 fs-4">
							<?= $info['cont_wlcm_smg'] ?>
						</p>
					</div>
				</div>
			
				<div class="row align-items-md-stretch">
					<div class="col-md-6">
						<div class="h-100 p-5 text-white bg-dark rounded-3">
							<h2><?= $info['cont_sec_heading'] ?></h2>
							<p><?= $info['cont_number'] ?></p>
							<p><?= $info['cont_address'] ?></p>
							<p><?= $info['cont_email'] ?></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="h-100 p-5 bg-light border rounded-3">
							<h2></h2>
							<p>Welcome to our beautiful destination! We're so excited to have you here and can't wait for you to explore everything our region has to offer. From stunning landscapes to rich cultural heritage, there's something for everyone to enjoy. Whether you're here for adventure, relaxation, or simply to make unforgettable memories, we're confident you'll have an incredible time.
								Feel free to ask for recommendations, share your experiences, and most importantly, enjoy every moment of your visit!</p>
							<button class="btn btn-outline-secondary" type="button">Example button</button>
						</div>
					</div>
				</div>
			</div>

<?php
	include 'nav/footer.php';
?>