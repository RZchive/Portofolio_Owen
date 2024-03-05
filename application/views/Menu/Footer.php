<footer class="site-footer">
		<div class="container">

			<div class="row mb-5">
				<p class="col-12 text-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true" ></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>
			
			<div class="row mb-5">
				<div class="col-md-12 text-center">
					<p>
					<?php foreach ($Kontak as $o) : ?>
						<a href="<?= $o->YT ?>" class="social-item"><span class="icon-youtube"></span></a>
						<a href="<?= $o->Twitter ?>" class="social-item"><span class="icon-twitter"></span></a>
						<a href="<?= $o->IG ?>" class="social-item"><span class="icon-instagram2"></span></a>
						<?php endforeach ?>
					</p>
				</div>
			</div>
			
		</div>
	</footer>



	<script type="text/javascript" src="<?= Base_url();?>/ckeditor/ckeditor.js"></script>
	<script src="<?= Base_url();?>/assets2/js/vendor/jquery.min.js"></script>
	<script src="<?= Base_url();?>/assets2/js/vendor/jquery-migrate-3.0.1.min.js"></script>
	<script src="<?= Base_url();?>/assets2/js/vendor/popper.min.js"></script>
	<script src="<?= Base_url();?>/assets2/js/vendor/bootstrap.min.js"></script>

	<script src="<?= Base_url();?>/assets2/js/vendor/jquery.easing.1.3.js"></script>

	<script src="<?= Base_url();?>/assets2/js/vendor/jquery.stellar.min.js"></script>
	<script src="<?= Base_url();?>/assets2/js/vendor/jquery.waypoints.min.js"></script>

	<script src="<?= Base_url();?>/assets2/https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
	<script src="<?= Base_url();?>/assets2/https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
	<script src="<?= Base_url();?>/assets2/js/custom.js"></script>

	<!-- Google Map -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    	<script src="js/google-map.js"></script> -->

    </body>
    </html>