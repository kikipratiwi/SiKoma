<section class="login p-fixed d-flex text-center bg-primary common-img-bg">
	<!-- Container-fluid starts -->
	<div class="container-fluid">
		<div class="row">

			<div class="col-sm-12">
				<div class="login-card card-block">
					<form class="md-float-material" type="POST" action="<?php echo base_url(); ?>index.php/Authentication/act_change_password">
						<div class="text-center">
							<img src="<?php echo base_url(); ?>assets/images/favicon.png" alt="logo">
						</div>
						<h3 class="text-center txt-primary">
							Ubah Kata Sandi
						</h3>
						<div class="md-input-wrapper">
							<input type="password" name="current_password" class="md-form-control" />
							<label>Kata sandi saat ini</label>
						</div>
						<div class="md-input-wrapper">
							<input type="password" name="new_password" class="md-form-control" />
							<label>Kata sandi baru</label>
						</div>
						<div class="row">
							<div class="col-xs-10 offset-xs-1">
								<button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">SIMPAN</button>
							</div>
						</div>
						<!-- <div class="card-footer"> -->

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