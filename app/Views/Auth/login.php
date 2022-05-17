<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container">
	<!-- Outer Row -->
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">

					<!-- Nested Row within Card Body -->
					<div class="row">
						<div class="col-lg">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">Selamat Datang di Web Monitoring Sales Force BGES</h1>
								</div>

								<?= view('Myth\Auth\Views\_message_block') ?>

								<!-- email/username -->
								<form action="<?= route_to('login') ?>" method="post">
									<?= csrf_field() ?>

									<div class="form-group">
										<label for="login">User ID</label>
										<input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="User ID">
										<div class="invalid-feedback">
											<?= session('errors.login') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="password"><?= lang('Auth.password') ?></label>
										<input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
										<div class="invalid-feedback">
											<?= session('errors.password') ?>
										</div>
									</div>

									<?php if ($config->allowRemembering) : ?>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
												<?= lang('Auth.rememberMe') ?>
											</label>
										</div>
									<?php endif; ?>

									<br>

									<button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.loginAction') ?> </button>
									<p><a href="<?= base_url('login'); ?>"></a></p>
								</form>

								<hr>

								<?php if ($config->activeResetter) : ?>
									<p><a class="small" href="<?= route_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
								<?php endif; ?>

								<?php if ($config->allowRegistration) : ?>
									<p><a class="small" href="<?= route_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></p>
								<?php endif; ?>
							</div>
						</div>

					</div>
				</div>
			</div>

			<?= $this->endSection() ?>