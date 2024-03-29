<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Masjid Jabal Rizqy</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/jquery-ui.css'?>">
	<script type="text/javascript" src="<?php echo base_url().'assets/js/Chart.min.js'?>"></script>

	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/dropify/css/dropify.min.css">


	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
	<script type="text/javascript" src="<?php echo base_url().'assets/js/Chart.min.js'?>"></script>
</head>
<style type="text/css">
	.row {
		margin-left: 0;
		margin-right: 0;
	}

	.pagination {
		float: right;
	}

	.dataTables_filter {
		float: right;
	}

</style>

<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span
					 class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Masjid  </span> Jabal Rizqy</a>
				<ul class="nav navbar-top-links navbar-right">

					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
							<!-- <em class="fa fa-bell"></em> --><span class="glyphicon glyphicon-option-vertical"></span>
						</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
									<div><em class="fa fa-envelope"></em> Profil
										<span class="pull-right text-muted small"></span></div>
								</a></li>
							<li class="divider"></li>
							<li><a href="#">
									<div><em class="fa fa-heart"></em> Pengaturan
										<span class="pull-right text-muted small"></span></div>
								</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo base_url() ?>Auth/logout" onclick="return confirm('Apakah anda yakin ingin keluar?')">
									<div><em class="fa fa-user"></em> Logout
										<span class="pull-right text-muted small">keluar</span></div>
								</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Admin</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li><a <?php if($this->uri->segment(1)=="Dashboard"){echo 'class="active"';}?> href="
					<?php echo base_url() ?>Dashboard"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>


			<?php if ($this->session->userdata('pengguna_hak_akses')=='administrator'): ?>
				

			<li class="parent ">
                <a data-toggle="collapse" href="#sub-item-1">
					<em class="fa fa-navicon">&nbsp;</em> Data Master <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em
						 class="fa fa-plus"></em></span>
				</a>
				<ul <?php
                        if(
                        $this->uri->segment(1)=="pengguna"|
                        $this->uri->segment(1)=="kajian"|
                        $this->uri->segment(1)=="kategori"|
                        $this->uri->segment(1)=="event"|
                        $this->uri->segment(1)=="lowongan"|
                        $this->uri->segment(1)=="kutipan"|
                        $this->uri->segment(1)=="tema"
                        )
                        {
                            echo 'class="children collapse in"';
                        }
                        else{
                            echo 'class="children collapse"';
                        }
					?>
                    id="sub-item-1">

                    <li><a <?php if($this->uri->segment(1)=="pengguna"){echo 'class="active"';}?> href="
							<?php echo base_url() ?>pengguna">
                            <span class="fa fa-arrow-right">&nbsp;</span> Pengguna
                        </a></li>
                    <li><a <?php if($this->uri->segment(1)=="kajian"){echo 'class="active"';}?> href="
							<?php echo base_url() ?>kajian">
                            <span class="fa fa-arrow-right">&nbsp;</span> Kajian
                        </a></li>
					<li><a <?php if($this->uri->segment(1)=="kategori"){echo 'class="active"';}?> href="
							<?php echo base_url() ?>kategori">
							<span class="fa fa-arrow-right">&nbsp;</span> Kategori
						</a></li>
						<li><a <?php if($this->uri->segment(1)=="event"){echo 'class="active"';}?> href="
							<?php echo base_url() ?>event">
							<span class="fa fa-arrow-right">&nbsp;</span> Event
						</a></li>
                    <li><a <?php if($this->uri->segment(1)=="lowongan"){echo 'class="active"';}?> href="
							<?php echo base_url() ?>lowongan">
                            <span class="fa fa-arrow-right">&nbsp;</span> Lowongan
                        </a></li>
                    <li><a <?php if($this->uri->segment(1)=="kutipan"){echo 'class="active"';}?> href="
							<?php echo base_url() ?>kutipan">
							<span class="fa fa-arrow-right">&nbsp;</span> Kutipan
						</a></li>
                    <li><a <?php if($this->uri->segment(1)=="tema"){echo 'class="active"';}?> href="
							<?php echo base_url() ?>tema">
                            <span class="fa fa-arrow-right">&nbsp;</span> Tema
                        </a></li>

				</ul>
			</li>

			<?php endif ?>


	  <?php if ($this->session->userdata('username')=='root'): ?>
 

					<?php endif ?>
			<li><a href="<?php echo base_url() ?>Auth/logout" onclick="return confirm('Apakah anda yakin ingin keluar?')"><em class="fa fa-power-off">&nbsp;</em>
					Logout</a></li>
		</ul>
	</div>
	<!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div style="width: 100%">
			<?php echo $contents; ?>

		</div>
	</div>
	<!--/.main-->

	<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.3.min.js"></script>

	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

	<script src="<?php echo base_url(); ?>assets/js/chart.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/chart-data.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/easypiechart.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/easypiechart-data.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
    <script src="<?php echo base_url()?>assets/dropify/js/dropify.min.js"></script>


	<script>
		window.onload = function () {
			var chart1 = document.getElementById("line-chart").getContext("2d");
			window.myLine = new Chart(chart1).Line(lineChartData, {
				responsive: true,
				scaleLineColor: "rgba(0,0,0,.2)",
				scaleGridLineColor: "rgba(0,0,0,.05)",
				scaleFontColor: "#c5c7cc"
			});
		};

	</script>
	<script src="<?php echo base_url() ?>/assets/js/dataTables/jquery.dataTables.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/dataTables/dataTables.bootstrap.js">

	</script>
	<script>
		$(document).ready(function () {
			$('#dataTables-example').dataTable();
		});
        $('.dropify').dropify({
            messages: {
                default: 'Drag atau drop untuk memilih gambar',
                replace: 'Ganti',
                remove:  'Hapus',
                error:   'error'
            }
        });

	</script>

</body>

</html>
