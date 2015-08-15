@extends('layout.prelogin')
@section('content')

         <div id="registers" class="animate form">
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
                    <form method="POST" action="/auth/register">
                        {!! csrf_field() !!}
                        <h1>Create Account</h1>
                        <div>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Username" required="">                        
                        </div>
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
                            <button type="submit" class="btn btn-default submit">Register</button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">Already a member ?
                                <a href="/auth/login" class="to_register"> Log in </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <p>©2015 All Rights Reserved. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
@endsection
@stop