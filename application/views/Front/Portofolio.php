<?php foreach ($Kepala as $k) : ?>
<section class="site-hero" style="background-image: url(<?= Base_url();?>/gambar/Kepala.jpeg);" id="section-home" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row intro-text align-items-center justify-content-center">
				<div class="col-md-10 text-center pt-5">
					<h1 class="site-heading site-animate"><?= $k->Deskripsi?></h1>
					<?php endforeach; ?>

				</div>
			</div>
		</div>
	</section> <!-- section -->






	<section class="site-section" id="section-portfolio">
		<div class="container">
			<div class="row">
				<div class="section-heading text-center col-md-12">
					<h2>Ini <strong>Project saya</strong></h2>
				</div>
			</div>
			<div class="filters">
				<ul>
					<li class="active" data-filter="*">All</li>
				</ul>
			</div>
		
			    <div class="filters-content">
					<div class="row grid ">
				 <?php foreach ($Project as $j) : ?>
					<div class="single-portfolio col-sm-4 all mockup">
						<div class="relative ">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="<?= Base_url();?>/gambar/<?= $j->Gambar?>" alt="">
							</div>                               
						</div>
						<div class="p-inner">
							<h4><?=$j->Nama_Project?></h4>
							<div class="cat"><a href="<?=$j->Link?>">Linknya</a></div>
						</div>                                         
					</div>
					<?php endforeach; ?>	
					</div>
				</div>
				 
			</div>
		</div>
	</section>
	<!-- .section -->

	
	<section class="site-section " id="section-resume">
		<div class="container">
			<div class="row">
				<div class="col-md-12 mb-4">
					<div class="section-heading text-center">
						<h2> Skills <strong>Saya</strong></h2>
					</div>
				</div>
			

					

				</div>
				<div class="col-md-6">


					<h2 class="mb-5">Pengalaman</h2>
					<?php foreach ($Keahlian as $a) : ?>
					<div class="resume-item mb-4">
						
						<h3><?= $a->Keahlian ?></h3>
						<p><?= $a->Deskripsi ?></p>
						<span class="school">CI3 - PHP - Bootstrap</span>
					</div>
					<?php endforeach ?>
					<h3 class="mb-4">Kemampuan Saya</h3>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">HTML</h6>
                                    <h6 class="font-weight-bold">80%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Bootstrap</h6>
                                    <h6 class="font-weight-bold">85%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">PHP</h6>
                                    <h6 class="font-weight-bold">65%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Javascript</h6>
                                    <h6 class="font-weight-bold">0%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">CodeIgniter3</h6>
                                    <h6 class="font-weight-bold">65%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Wordpress</h6>
                                    <h6 class="font-weight-bold">0%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>


				</div>
			</div>
		</div>
	</section> <!-- .section -->

	<section class="site-section" id="section-about">
		<div class="container">
			<div class="row mb-5 align-items-center">
				<div class="col-lg-7 pr-lg-5 mb-5 mb-lg-0">
					<img src="<?= Base_url();?>/gambar/Kepala.jpeg" alt="Image placeholder" class="img-fluid">
				</div>
				<div class="col-lg-5 pl-lg-5">
					<div class="section-heading">
						<h2>Tentang  <strong>Saya</strong></h2>
					</div>
					<?php foreach ($Tentang as $e) : ?>
					<p class="lead"><?= $e->Deskripsi ?></p>
					<?php endforeach ?>

					<p>
						<a href="#section-contact" class="btn btn-primary px-4 py-2 btn-sm smoothscroll">Hire Me</a>
						
					</p>
				</div>
			</div>


		</div>
	</section>

	

	


	

	

	<section class="site-section" id="section-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12 mb-5">
					<div class="section-heading text-center">
						<h2>Coba <strong>Hubungi Kami</strong></h2>
					</div>
				</div>

				
				<div class="col-md-5 pl-md-5">
					<h3 class="mb-5">Contact Detail Saya</h3>
					<?php foreach ($Kontak as $o) : ?>
					<ul class="site-contact-details">
						<li>
							<span class="text-uppercase">Email</span>
							<?= $o->Email ?>
						</li>
						<li>
							<span class="text-uppercase">Phone</span>
							<?= $o->No_Telp ?>
						</li>
						<li>
							<span class="text-uppercase">IG</span>
							<a href="<?= $o->IG ?>">@aap_5a</a>
						</li>
						<li>
							<span class="text-uppercase">YT</span>
							<a href="<?= $o->YT ?>">@Secondfeast</a>
						</li>
						<li>
							<span class="text-uppercase">Twitter</span>
							<a href="<?= $o->Twitter ?>">@OBraintly</a>
						</li>
					</ul>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</section>