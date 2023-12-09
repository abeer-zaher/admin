
@extends('layouts.auth')
@section('content')
<body class="bg-forgot">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="authentication-forgot d-flex align-items-center justify-content-center">
			<div class="card shadow-lg forgot-box">
				<div class="card-body p-md-5">
					<div class="text-center">
						<img src="assets/images/icons/forgot-2.png" width="140" alt="" />
					</div>
					<h4 class="mt-5 font-weight-bold">Forgot Password?</h4>
					<p class="text-muted">Enter your registered email ID to reset the password</p>
					<div class="mb-3 mt-4">
						<label class="form-label">Email id</label>
						<input type="text" class="form-control form-control-lg radius-30" placeholder="example@user.com" />
					</div>
					<div class="d-grid gap-2">
						<button type="button" class="btn btn-primary btn-lg radius-30">Send</button>
						 <a href="authentication-login.html" class="btn btn-light radius-30"><i class='bx bx-arrow-back mr-1'></i>Back to Login</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
</body>
@endsection
