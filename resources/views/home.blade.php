@extends('layout.prelogin')
@section('content')
        <!-- resources/views/auth/login.blade.php -->
            <div id="login" class="animate form">
                <section class="login_content">
                        <h1>You are logged in</h1>
                        <div class="clearfix"></div>
                        <div class="loginclick"><a class="btn btn-default submit" href="/auth/logout">Logout</a></div>
                        <div class="separator">
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <p>©2015 All Rights Reserved. Privacy and Terms</p>
                            </div>
                        </div>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>            
@endsection
@stop