@extends('layouts.master')

@section('content')

<head>
	<title>Profile Siswa</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{ ('admin/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ ('admin/assets/vendor/linearicons/style.css') }}">
	<link rel="stylesheet" href="{{ ('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{ ('admin/assets/css/demo.css') }}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{ ('admin/assets/img/apple-icon.png"') }}>
	<link rel="icon" type="image/png" sizes="96x96" href="{{ ('admin/assets/img/apple-icon.png"') }}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>

				<div class="brand">
					<a href="index.html">SISWAKU</a>
				</div>
				
				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ ('admin/assets/img/user.png') }}" class="img-circle" alt="Avatar"> <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="/profile{id}"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="/dashboard" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="/siswa" class=""><i class="lnr lnr-user"></i> <span>Siswa</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img src="{{ ('admin/assets/img/login.png') }}" width="40" class="img-circle" alt="Avatar">
										<h3 class="name">lulu</h3>
										<span class="online-status status-available">Available</span>
									</div>
									<div class="profile-stat">
										<div class="row">
											<div class="col-md-4 stat-item">
												45 <span>Mata Pelajaran</span>
											</div>
											<div class="col-md-4 stat-item">
												15 <span>Awards</span>
											</div>
											<div class="col-md-4 stat-item">
												2174 <span>Points</span>
											</div>
										</div>
									</div>
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h3>Siswa</h3>
										<div class="profile-details">
											<p><strong>Email:</strong></p>
											<p><strong>Jenis Kelamin:</strong></p>
											<p><strong>Alamat:</strong></p>
										</div>
										<div class="profile-actions">
											<a href="/proqile/{id}/edit" class="btn btn-primary">Edit Profile</a>
											<form action="#" method="POST" style="display:inline;">
												@csrf
												@method('DELETE')
												<button type="submit" class="btn btn-danger">Delete Profile</button>
											</form>
										</div>
										
									</div>
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								<div class="class-panel">
									<div class="panel-heading">
										<h3 class="panel-title">Mata Pelajaran</h3>
									</div>
									<div class="panel-body">
										<table class="table table-striped">
											<thead>
												<tr>
													<th>KODE</th>
													<th>NAMA</th>
													<th>SEMESTER</th>
													<th>NILAI</th>
												</tr>
											</thead>
											<tbody>
												
												<tr>
													<td>Matematika</td>
													<td>50</td>
													<td>GANJIL</td>
													<TD>90</TD>
												</tr>
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{ ('admin/assets/vendor/jquery/jquery.min.js') }}"></script>
	<script src="{{ ('admin/assets/vendor/jquery/jquery.min.js') }}"></script>
	<script src="{{ ('admin/assets/vendor/jquery/jquery.min.js') }}"></script>
	<script src="{{ ('admin/assets/vendor/jquery/jquery.min.js') }}"></script>
</body>

@endsection