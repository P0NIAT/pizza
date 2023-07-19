<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<meta
			name="description"
			content="Responsive HTML Admin Dashboard Template based on Bootstrap 5"
		/>
		<meta name="author" content="NobleUI" />
		<meta
			name="keywords"
			content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web"
		/>

		<title>403 Page</title>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
			rel="stylesheet"
		/>
		<link rel="stylesheet" href="{{ asset('backend/assets/vendors/core/core.css') }}" />
		<link
			rel="stylesheet"
			href="{{ asset('backend/assets/fonts/feather-font/css/iconfont.css') }}"
		/>
		<link
			rel="stylesheet"
			href="{{ asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}"
		/>
		<link rel="stylesheet" href="{{ asset('backend/assets/css/demo2/style.css') }}" />
		<link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" />
	</head>
	<body>
		<div class="main-wrapper">
			<div class="page-wrapper full-page">
				<div
					class="page-content d-flex align-items-center justify-content-center"
				>
					<div class="row w-100 mx-0 auth-page">
						<div
							class="col-md-8 col-xl-6 mx-auto d-flex flex-column align-items-center"
						>
							<img
								src="{{ asset('backend/assets/images/others/404.svg') }}"
								class="img-fluid mb-2"
								alt="404"
							/>
							<h1 class="fw-bolder mb-22 mt-2 tx-80 text-muted">403</h1>
							<h4 class="mb-2">USER DOES NOT HAVE THE RIGHT PERMISSIONS</h4>
                            <br>
							<a href="{{ route('welcome') }}">Back to home</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="{{ asset('backend/assets/vendors/core/core.js') }}"></script>
		<script src="{{ asset('backend/assets/vendors/feather-icons/feather.min.js') }}"></script>
		<script src="{{ asset('backend/assets/js/template.js') }}"></script>
	</body>
</html>