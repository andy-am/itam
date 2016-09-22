<!DOCTYPE html>
<html class="bg-black">
<head>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <link href="/css/myStyles.css" rel="stylesheet">
    <meta charset="UTF-8">

    <title>AdminLTE | Log in</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <!-- font Awesome -->
    <link href="/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Theme style -->
    <link href="/css/AdminLTE.css" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="bg-black">
<div class="form-box" id="login-box">
    <div class="header">Prihlásenie</div>
    <form action="{{URL::to('user/doLogin')}}" method="post">
        <div class="body bg-gray">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group has-error">
                <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email"/>
                <span class="help-block">
                    {{ $errors->first('email') }}
                </span>
            </div>
            <div class="form-group has-error">
                <input type="password" name="password" value="{{ old('password') }}" class="form-control" placeholder="Password"/>
                <span class="help-block">
                    {{ $errors->first('password') }}
                    {{ $errors->first('credentials') }}
                </span>
            </div>
            <div class="form-group">
                <input type="checkbox" name="remember_me"/> Zpamätaj si ma
            </div>
        </div>
        <div class="footer">
            <button type="submit" class="btn bg-olive btn-block">Prihlás ma :)</button>

            {{--<p><a href="#">I forgot my password</a></p>--}}

            {{--<a href="register.html" class="text-center">Register a new membership</a>--}}
        </div>
    </form>


   {{-- <div class="margin text-center">
        <span>Sign in using social networks</span>
        <br/>
        <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
        <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
        <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

    </div>--}}
</div>



<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>