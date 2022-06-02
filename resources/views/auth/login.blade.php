@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/login.css')}}">
@endsection
@section('content')
<!-- Tawa bech nhezou eli 7ashtna bih mel page login w n7otoha lahna okii ok -->
<!-- 3melnahom hekka bech enajmou nrodou lpage jdida zay hadhii bel merta7 avec une comparaison ok -->
<div class="container" style="position: relative; top: 80%; margin-top: 200px;">
			<div class="login-block w-50 m-auto">
				<div class="row">
					<div class="col-md-12">
						<div class="header-login">
							<h2>Gestion de congé</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="content-login pt-5 pb-5">
							<form action="{{ route('login') }}" method="post">
								@csrf
                                <div class="form-group">
									<input type="email" name="email" value="{{ old('email') }}" class="form-control input-type" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email" required="">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
								<div class="form-group">
									<input type="password" class="form-control input-type" id="exampleInputPassword1" name="password" placeholder="Enter your password" required="">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                     <div class="w-50 m-auto pt-1 pb-3">
                                         {!! NoCaptcha::renderJs() !!}
                                         {!! NoCaptcha::display() !!}
                                         @error('g-recaptcha-response')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                         @enderror
                                     </div>
								<button type="submit" class="btn btn-primary signin">Se connecter</button>
							</form>
						</div>
					</div>
				</div>
				<div class="row pb-5">
					<div class="col-md-12 text-center">
						<p class="no-account">Vous n'avez pas un compte?</p>
						<a href="signup.html" class="signup">S'inscrire'</a>
					</div>
				</div>
			</div>
		</div>
@endsection
