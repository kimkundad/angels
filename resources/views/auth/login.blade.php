@extends('layouts.template')

@section('ga')
window.gaTitle = 'หน้าแรก';
@endsection

@section('stylesheet')

@stop('stylesheet')

@section('content')

<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				

			</div>
		</div>
	</div>
</div>

<div class="clearfix"></div>
<!-- Map Container / End -->

<!-- Container / Start -->
<div class="container">

	<div class="row justify-content-around">


		<!-- Contact Form -->
		<div class="col-lg-8 col-lg-offset-2">

			<section id="contact ">
				<h4 class="headline margin-bottom-35">เข้าสู่ระบบ</h4>

				<div id="contact-message"></div> 

                <div class="sign-in-form style-1">
                <form method="POST" action="{{ url('/login') }}" class="login">
                @csrf
                    <p class="form-row form-row-wide">
                        <label for="username">Email:
                            <i class="im im-icon-Male"></i>
                            <input type="text" class="input-text" name="email" placeholder="Email Address" />
                        </label>
                    </p>

                    <p class="form-row form-row-wide">
                        <label for="password">Password:
                            <i class="im im-icon-Lock-2"></i>
                            <input class="input-text" type="password" name="password" placeholder="Password" />
                        </label>
                        <span class="lost_password">
                            <a href="{{ route('password.request') }}" >ลืมพาสเวิร์ด</a>
                        </span>
                    </p>

                    <div class="form-row">
                        
                        <div class="checkboxes margin-top-10">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember-me">จดจำฉันไว้ในระบบ</label>
                        </div>
                        <br>
                        <input type="submit" class="button border margin-top-5" name="login" value="เข้าสู่ระบบ" />
                    </div>

                    </form>
                    </div>
			</section>
		</div>
		<!-- Contact Form / End -->

	</div>

</div>
<!-- Container / End -->



@endsection

@section('scripts')


@stop('scripts')