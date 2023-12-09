<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Syndash - Bootstrap4 Admin Template</title>
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Roboto&display=swap" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="assets/css/icons.css" />
	<!-- App CSS -->
	<link rel="stylesheet" href="assets/css/app.css" />
	<link rel="stylesheet" href="assets/css/dark-sidebar.css" />
	<link rel="stylesheet" href="assets/css/dark-theme.css" />
</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">

		<!--sidebar-wrapper-->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div class="">
					<img src="assets/images/logo-icon.png" class="logo-icon-2" alt="" />
				</div>
				<div>
					<h4 class="logo-text">Dr social</h4>
				</div>
				<a href="javascript:;" class="toggle-btn ms-auto"> <i class="bx bx-menu"></i>
				</a>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>



					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-10"><i class="bx bx-spa"></i>
						</div>
						<div class="menu-title">Components</div>
					</a>
					<ul>

						<li> <a href="{{route('films')}}"><i class="bx bx-right-arrow-alt"></i>Film</a>
						</li>
						<li> <a href="{{route('films.create')}}"><i class="bx bx-right-arrow-alt"></i>Add Films</a>
						</li>
						<li> <a href="component-media-object.html"><i class="bx bx-right-arrow-alt"></i>Media Objects</a>
						</li>
						<li> <a href="component-spinners.html"><i class="bx bx-right-arrow-alt"></i>Spinners</a>
						</li>
						<li> <a href="component-notifications.html"><i class="bx bx-right-arrow-alt"></i>Notifications</a>
						</li>
					</ul>
				</li>
				<li>




				<!--<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-3"><i class="bx bx-lock"></i>
						</div>
						<div class="menu-title">Authentication</div>
					</a>
					<ul>
						<li> <a href="authentication-login.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Login</a>
						</li>
						<li> <a href="authentication-register.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Register</a>
						</li>
						<li> <a href="authentication-forgot-password.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Forgot Password</a>
						</li>
						<li> <a href="authentication-reset-password.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Reset Password</a>
						</li>
						<li> <a href="authentication-lock-screen.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Lock Screen</a>
						</li>
					</ul>
				</li>-->
				<!--<li>
					<a href="user-profile.html">
						<div class="parent-icon icon-color-4"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title">User Profile</div>
					</a>
				</li>-->





			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar-wrapper-->
        <!--header-->
		<header class="top-header">
			<nav class="navbar navbar-expand">
				<div class="left-topbar d-flex align-items-center">
					<a href="javascript:;" class="toggle-btn">	<i class="bx bx-menu"></i>
					</a>
				</div>

				<div class="right-topbar ms-auto">
					<ul class="navbar-nav">
						<li class="nav-item search-btn-mobile">
							<a class="nav-link position-relative" href="javascript:;">	<i class="bx bx-search vertical-align-middle"></i>
							</a>
						</li>


						<li class="nav-item dropdown dropdown-user-profile">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
								<div class="d-flex user-box align-items-center">
									<div class="user-info">
										<p class="user-name mb-0">Jessica Doe</p>
										<p class="designattion mb-0">Available</p>
									</div>
									<img src="assets/images/avatars/avatar-1.png" class="user-img" alt="user avatar">
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-end">

								<div class="dropdown-divider mb-0"></div>	<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-power-off"></i><span>Logout</span></a>
							</div>
						</li>

					</ul>
				</div>
			</nav>
		</header>
		<!--end header-->
        <main class="py-4">
            @yield('content')
        </main>
        <!--end page-wrapper-->
		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<!--footer -->
		<div class="footer">
			<p class="mb-0">Syndash @2020 | Developed By : <a href="https://themeforest.net/user/codervent" target="_blank">codervent</a>
			</p>
		</div>
		<!-- end footer -->
	</div>
	<!-- end wrapper -->
 <!--start switcher-->
 <div class="switcher-body">
    <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bx bx-cog bx-spin"></i></button>
    <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
      <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
      </div>
      <div class="offcanvas-body">
        <h6 class="mb-0">Theme Variation</h6>
        <hr>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="lightmode" value="option1" checked>
          <label class="form-check-label" for="lightmode">Light</label>
        </div>
        <hr>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="darkmode" value="option2">
          <label class="form-check-label" for="darkmode">Dark</label>
        </div>
        <hr>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="darksidebar" value="option3">
            <label class="form-check-label" for="darksidebar">Semi Dark</label>
          </div>
          <hr>
         <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="ColorLessIcons" value="option3">
            <label class="form-check-label" for="ColorLessIcons">Color Less Icons</label>
          </div>
      </div>
    </div>
   </div>
   <!--end switcher-->
   <!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>

	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!-- App JS -->
	<script src="assets/js/app.js"></script>
</body>
</html>
