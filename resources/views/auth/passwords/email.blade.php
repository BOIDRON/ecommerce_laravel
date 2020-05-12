@extends('layouts.master')

@section('content')
<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="{{asset('img/login.jpg')}}" alt="">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Nouveau Mot de Passe!</h3>
                        <form class="row login_form" id="contactForm" novalidate="novalidate"
                        method="POST" action="{{ route('password.email') }}">
                        @csrf
                        
							<div class="col-md-12 form-group @error('email') is-invalid @enderror">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Votre adresse Mail" value="{{ old('email') }}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        
							
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Envoyer un nouveau mot de passe</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
@endsection
