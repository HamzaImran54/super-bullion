{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Ekka - Admin Dashboard HTML Template.">

		<title>Ekka - Admin Dashboard HTML Template.</title>

		<!-- GOOGLE FONTS -->
		<link rel="preconnect" href="https://fonts.googleapis.com/">
		<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

		{{-- <link href="../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" /> --}}

		<!-- Ekka CSS -->
		<link id="ekka-css" rel="stylesheet" href="{{asset('admin/css/ekka.css')}}" />

		<!-- FAVICON -->
		<link href="{{asset('admin/img/favicon.png')}}" rel="shortcut icon" />
	</head>

	<body class="sign-inup" id="body">
		<div class="container d-flex align-items-center justify-content-center form-height-login pt-24px pb-24px">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-10">
					<div class="card">
						<div class="card-header bg-primary">
							<div class="ec-brand">
								<a href="index.html" title="Ekka">
									<img class="ec-brand-icon" src="assets/img/logo/logo-login.png" alt="" />
								</a>
							</div>
						</div>
						<div class="card-body p-5">
							<h4 class="text-dark mb-5">Sign In</h4>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
								<div class="row">
									<div class="form-group col-md-12 mb-4">
										<input type="email" class="form-control" name="email" placeholder="Username">
									</div>

									<div class="form-group col-md-12 ">
										<input type="password" class="form-control" name="password" placeholder="Password">
									</div>

									<div class="col-md-12">
										<div class="d-flex my-2 justify-content-between">
											<div class="d-inline-block mr-3">
												<div class="control control-checkbox">Remember me
													<input type="checkbox" />
													<div class="control-indicator"></div>
												</div>
											</div>

											<p><a class="text-blue" href="#">Forgot Password?</a></p>
										</div>

										<button type="submit" class="btn btn-primary btn-block mb-4">Sign In</button>

										<p class="sign-upp">Don't have an account yet ?
											<a class="text-blue" href="{{route('register')}}">Sign Up</a>
										</p>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Javascript -->
		<script src="{{asset('admin/plugins/jquery/jquery-3.5.1.min.js')}}"></script>
		<script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('admin/plugins/jquery-zoom/jquery.zoom.min.js')}}"></script>
		<script src="{{asset('admin/plugins/slick/slick.min.js')}}"></script>

		<!-- Ekka Custom -->
		<script src="admin/js/ekka.js"></script>
	</body>

<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-admin/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2023 14:45:02 GMT -->
</html>

