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
						<h1>Reset Password Notification</h1>
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
						{!! csrf_field() !!}

	                    <div>
	                       <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" required="" />
	                    </div>                                        
                        <div>
                            <button type="submit" class="btn btn-default submit">Send Password Reset Link</button>
                        </div>
					</form>
                <!-- form -->
            </section>
            <!-- content -->
        </div>     
@endsection
@stop