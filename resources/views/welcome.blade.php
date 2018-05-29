<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <title>Report</title>

        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('style.css')}}">

    </head>
    <body>

    <section id="menu" class="navbar-fixed-top">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="assets/images/logo.png" class="nav-img" alt="">
                    </a>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li></li>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>

                    </ul>

                        <form class="navbar-form navbar-right" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


                                <div >
                                    <input id="email" type="email" class="form-control" name="email" placeholder="Email/User Name" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


                                <div>
                                    <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        <strong style="color:white">Forgot Your Password?</strong>
                                    </a>
                                </div>
                            </div>


                    </form>



                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->

        </nav>
    </section>

    <section id="main-content" >
        <div class="content-overlay">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="card">
                            <div class="text1">
                                <h3 class="text-center">Wellcome to Daily Report</h3>

                            </div>

                            <div class="text2">

                                <p class="text-center">"Read your record. <br>
                                    Sufficient is yourself against you <br>
                                    this Day as accountant." [Surah: Al- Isra: 14]
                                </p>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form">
                                <form  method="POST" action="{{ route('register') }}">

                                        {{ csrf_field() }}

                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">


                                            <div >
                                                <input id="name" type="text" class="form-control" name="name" placeholder="Full Name" value="{{ old('name') }}" required autofocus>

                                                @if ($errors->has('name'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


                                            <div>
                                                <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>

                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">


                                            <div >
                                                <input id="phone" type="text" class="form-control" name="phone" placeholder="Phone" value="{{ old('phone') }}" required autofocus>

                                                @if ($errors->has('phone'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('user_name') ? ' has-error' : '' }}">


                                            <div >
                                                <input id="user_name" type="text" class="form-control" name="user_name" placeholder="User Name" value="{{ old('user_name') }}" required autofocus>

                                                @if ($errors->has('user_name'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_name') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


                                            <div >
                                                <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group">


                                            <div >
                                                <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
                                            </div>
                                        </div>

                                    <br>
                                        {{--<a href="">--}}
                                            {{--<p class="text-center">--}}
                                            {{--Sign Up--}}
                                            {{--</p>--}}
                                        {{--</a>--}}

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Register
                                            </button>
                                        </div>
                                    </div>
                                    <br>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="footer">
        <div class="container">

        </div>

    </section>
    <section id="footer" class="navbar-fixed-bottom">
        <p class="text-center">
            Copyright © ReportApp 2017

        </p>

    </section>


    <script type="text/javascript" src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    </body>
</html>
