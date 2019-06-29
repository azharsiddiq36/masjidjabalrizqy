<?php include "header.php"?>
		<!-- HOME OWL -->
		<div id="home-owl" class="owl-carousel owl-theme">
			<!-- home item -->
            <?php
            foreach ($event->result() as $e){
                ?>
                <div class="home-item">
                    <!-- section background -->
                    <div class="section-bg" style="background-image: url(<?= base_url($e->event_foto)?>);"></div>
                    <!-- /section background -->
                    <!-- home content -->
                    <div class="home">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="home-content">
                                        <h1><?= $e->event_nama?></h1>
                                        <p class="lead"><?php echo substr($e->event_rincian,0,90)."..."?></p>
                                        <a href="#" class="primary-button">Lihat Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /home content -->
                </div>
                <!-- /home item -->
                <?php
            }
            ?>

		</div>
		<!-- /HOME OWL -->
	</header>
	<!-- /HEADER -->

	<!-- ABOUT -->
	<div id="about" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- about content -->
				<div class="col-md-5">
					<div class="section-title">
						<h2 class="title">Selamat Datang di Masjid Jabal Rizqy</h2>
						<p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="about-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<a href="#" class="primary-button">Read More</a>
					</div>
				</div>
				<!-- /about content -->

				<!-- about video -->
				<div class="col-md-offset-1 col-md-6">
					<a href="#" class="about-video">
							<img src="data:image/jpeg;base64,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" alt="">
						</a>
				</div>
				<!-- /about video -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /ABOUT -->

	<!-- NUMBERS -->
	<div id="numbers" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- number -->
				<div class="col-md-6 col-sm-6">
					<div class="number">
						<i class="fa fa-smile-o"></i>
						<h3><?= $kajian->num_rows()?></h3>
						<span>Kajian</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-md-6 col-sm-6">
					<div class="number">
						<i class="fa fa-handshake-o"></i>
						<h3><?= $event->num_rows()?></h3>
						<span>Event</span>
					</div>
				</div>
				<!-- /number -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /NUMBERS -->

	<!-- CAUSESS -->
	<div id="causes" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- section title -->
				<div class="col-md-8 col-md-offset-2">
					<div class="section-title text-center">
						<h2 class="title">Kajian</h2>
						<p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				<!-- section title -->
                <?php
                $content = 0;
                foreach ($kajian->result() as $k){
                    if ($content <6){
                        ?>
                        <!-- causes -->

                        <div class="col-md-4" style="margin-top: 20px">

                            <div class="causes" style="height:440px;">
                                <div class="causes-img">
                                    <a href="single-cause.html">
                                        <img src="<?= $k->kajian_foto?>" height="250px" alt="">
                                    </a>
                                </div>

                                <div class="causes-progress">
                                    <div>

                                        <span class="causes-raised">Tanggal: <strong><?= date_indo($k->kajian_tanggal)?></strong></span>
                                        <span class="causes-goal">Pukul: <strong><?= $k->kajian_jam?></strong></span>
                                    </div>
                                </div>
                                <div class="causes-content">
                                    <h3><a href="single-cause.html"><?= $k->kajian_judul?></a></h3>
                                    <p><?php echo substr($k->kajian_keterangan,0,90)."..."?></p>

                                </div>
                                <span class="causes-raised">Tema : <strong><?= ucfirst($k->tema_nama)?></strong></span>

                            </div>
                            <a href="<?= site_url("donatur/donatur/".$k->kajian_id)?>" class="primary-button causes-donate">Read More</a>

                        </div>
                        <!-- /causes -->
                        <?php
                    }
                    $content++;
                }
                ?>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /CAUSESS -->

	<!-- CTA -->
	<div id="cta" class="section">
		<!-- background section -->
		<div class="section-bg" style="background-image: url(<?= base_url()?>assets/charity2/img/background-1.jpg);" data-stellar-background-ratio="0.5"></div>
		<!-- /background section -->

		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- cta content -->
				<div class="col-md-offset-2 col-md-8">
					<div class="cta-content text-center">
						<h1>Tentang Masjid Jabal Rizqy</h1>
						<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<a href="#" class="primary-button">Join Us Now!</a>
					</div>
				</div>
				<!-- /cta content -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /CTA -->



<?php
    include "footer.php"
?>