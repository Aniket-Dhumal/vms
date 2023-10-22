<body class="app sidebar-mini">

		<!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="<?=base_url();?>template/assets/images/loader.svg" class="loader-img" alt="Loader">
		</div>

		<div class="page">
			<div class="page-main">
				<!-- HEADER -->
				<div class="app-header header">
					<div class="container-fluid">
						<div class="d-flex">
							<a class="header-brand" href="index.html">
								<img src="<?=base_url();?>template/logo.PNG" class="header-brand-img desktop-logo" alt="Amtos logo">
								<img src="<?=base_url();?>template/logo.PNG" class="header-brand-img mobile-view-logo" alt="Amtos logo">
							</a><!-- LOGO -->
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a><!-- sidebar-toggle-->
							<div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">
									<div class="">
									<form class="form-inline">
										<div class="search-element">
											<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
											<button class="btn btn-primary-color" type="submit"><i class="ion ion-search"></i></button>
										</div>
									</form>
								</div><!-- SEARCH -->
								<div class="dropdown d-md-flex">
									<a class="nav-link icon full-screen-link nav-link-bg" id="fullscreen-button">
										<i class="fe fe-maximize-2" ></i>
									</a>
								</div><!-- FULL-SCREEN -->
								<div class="dropdown text-center selector profile-1">
									<a href="#" data-toggle="dropdown" class="nav-link leading-none d-flex">
										<span><img src="<?=base_url();?>template/assets/images/faces/female/16.jpg" alt="profile-user" class="avatar avatar-sm brround cover-image mb-1 ml-0"></span>
										<span class=" ml-3 d-none d-lg-block ">
											<span class="text-white "><?=@$user->name;?></span>
										</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="text-center bg-image p-4 text-white">
											<a href="#" class="dropdown-item text-white text-center font-weight-sembold user" data-toggle="dropdown"><?=@$user->name;?></a>
									
										</div>
										<a class="dropdown-item" href="<?=base_url()."Admin/user/".@$user->id;?>">
											<i class="dropdown-icon mdi mdi-account-outline"></i> Profile
										</a>
										<a class="dropdown-item" href="<?=base_url()."Welcome/logout";?>">
											<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
										</a>
									</div>
								</div><!-- PROFILE -->
								
							</div>
							<a href="#" class="header-toggler d-lg-none ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
								<span class="header-toggler-icon"></span>
							</a>
						</div>
					</div>
				</div>
				<!-- HEADER END -->

				<!--aside open-->
				<aside class="app-sidebar">
					<div class="app-sidebar__user">
						<div class="dropdown user-pro-body text-center">
							<div class="user-pic">
								<img src="<?=base_url();?>template/assets/images/faces/female/16.jpg" alt="user-img" class="avatar-xl rounded-circle mb-1">
							</div>
							<div class="user-info">
								<h6 class=" mb-1 text-dark"><?=@$user->name;?></h6>
						
							</div>
						</div>
					</div>
					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item" href="<?=base_url();?>Admin"><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Dashboard</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-cogs"></i><span class="side-menu__label">User</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="<?=base_url();?>Admin/User" class="slide-item"> Add</a></li>
								<li><a href="<?=base_url();?>Admin/UserList" class="slide-item">List</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-cogs"></i><span class="side-menu__label">नोंदणी करा.</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
						
							   <li><a href="<?=base_url();?>Admin/BirthRegistration" class="slide-item">कुटुंब नोंदणी.</a></li>
								<li><a href="<?=base_url();?>Admin/BirthRegistration" class="slide-item">जन्म नोंदणी.</a></li>
								<li><a href="<?=base_url();?>Admin/DeathRegistration" class="slide-item">मृत्यू नोंदणी.</a></li>
								<li><a href="<?=base_url();?>Admin/MerriageRegistration" class="slide-item">विवाह नोंदणी.</a></li>

							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-cogs"></i><span class="side-menu__label">दाखले.</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
						
							   <li><a href="<?=base_url();?>Admin/BirthRegistration" class="slide-item">कुटुंब दाखला.</a></li>
								<li><a href="<?=base_url();?>Admin/BirthRegistration" class="slide-item">जन्म दाखला.</a></li>
								<li><a href="<?=base_url();?>Admin/DeathRegistration" class="slide-item">मृत्यू दाखला.</a></li>
								<li><a href="<?=base_url();?>Admin/MerriageRegistration" class="slide-item">विवाह नोंदणी दाखला.</a></li>

							</ul>
						</li>

                  <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-cogs"></i><span class="side-menu__label">कर संकलन.</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="<?=base_url();?>Admin/Gharpatti" class="slide-item">घरपट्टी.</a></li>
								<li><a href="<?=base_url();?>Admin/DeathRegistration" class="slide-item">पाणीपट्टी.</a></li>
								<li><a href="<?=base_url();?>Admin/MerriageRegistration" class="slide-item">दिवाबत्ती कर.</a></li>

							</ul>
						</li>		
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-cogs"></i><span class="side-menu__label"> परवाने .</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="<?=base_url();?>Admin/BirthRegistration" class="slide-item">घरपट्टी.</a></li>
								<li><a href="<?=base_url();?>Admin/DeathRegistration" class="slide-item">पाणीपट्टी.</a></li>
								<li><a href="<?=base_url();?>Admin/MerriageRegistration" class="slide-item">दिवाबत्ती कर.</a></li>

							</ul>
						</li>		
						
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-cogs"></i><span class="side-menu__label">Master</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="<?=base_url();?>Admin/loantypes" class="slide-item">Loan Types</a></li>
							</ul>
						</li>
                  

						<li class="slide">
							<a class="side-menu__item" href="<?=base_url();?>Admin/loan"><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Loan Entry</span></a>
						</li>
					
					</ul>
				</aside>
				<!--aside closed-->

				  <!--app-content open-->
				  <div class="app-content">
					<div class="side-app">
				
					<!-- PAGE-HEADER -->
					<div class="page-header">
						<h4 class="page-title"><?=@$title;?></h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?=@$title;?></li>
						</ol>
					</div>
					<!-- PAGE-HEADER END -->