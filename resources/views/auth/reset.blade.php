@extends('layout.prelogin')
@section('content')

        <div id="login" class="animate form">
            <section class="login_content">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
						{!! csrf_field() !!}
						<h1>Reset Password</h1>
						<input type="hidden" name="token" value="{{ $token }}">
	                    <div>
	                       <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" required="" />
	                    </div>
	                    <div>
	                        <input type="password" name="password" class="form-control" placeholder="Password" required="" />
	                    </div>
                        <div>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required="" />
                        </div>                                          
                        <div>
                            <button type="submit" class="btn btn-default submit">Reset Password</button>
                        </div>
					</form>
                <!-- form -->
            </section>
            <!-- content -->
        </div>  
@endsection   
@stop