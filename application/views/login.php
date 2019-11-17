<section class="login p-fixed d-flex text-center bg-primary common-img-bg">
	<!-- Container-fluid starts -->
	<div class="container-fluid">
		<div class="row">

			<div class="col-sm-12">
				<div class="login-card card-block">
					<form class="md-float-material" type="POST" action="<?php echo base_url(); ?>index.php/Authentication/login">
						<div class="text-center">
							<a href="<?php echo base_url(); ?>index.php/Home"><img src="<?php echo base_url(); ?>assets/images/favicon.png" alt="logo"></a>
						</div>
						<h3 class="text-center txt-primary">
							Login ke akun anda
						</h3>
						<div class="md-input-wrapper">
							<input type="text" class="md-form-control" />
							<label>NIM/NIDN</label>
						</div>
						<div class="md-input-wrapper">
							<input type="password" class="md-form-control" />
							<label>Kata sandi</label>
						</div>
						<div class="row">
							<div class="col-xs-10 offset-xs-1">
								<button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
							</div>
						</div>
						<!-- <div class="card-footer"> -->
						<div class="col-sm-12 col-xs-12 text-center">
							<span class="text-muted">Belum membaca panduan?</span>
							<a href="<?php echo base_url(); ?>index.php/Home" class="f-w-600 p-l-5">Baca disini</a>
						</div>
						<!-- </div> -->
					</form>
					<!-- end of form -->
				</div>
				<!-- end of login-card -->
			</div>
			<!-- end of col-sm-12 -->
		</div>
		<!-- end of row -->
	</div>
	<!-- end of container-fluid -->
</section>