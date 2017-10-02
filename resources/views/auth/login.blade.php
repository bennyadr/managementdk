<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login Digital Kreasi</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet">
        <!-- <link rel="stylesheet" href="/../template-new-ho/asset/css/style.default.css" type="text/css" /> -->
        <link rel="stylesheet" href="{{asset('css/login.css')}}" type="text/css" />
    </head>
    <body>
        <div class="container">
            
            <header>
                <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
                
            </header>
            <section>
                <div id="container_demo" >
                    <br>
                    <br>
                    <br>
                    <br>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <img src="{{asset('img/logo.png')}}" height="70" style="margin-left:30px;">
                            <br>
                            <br>
                         {{--    <p><h3  style="text-align: center;font-family:'Baloo',cursive;font-size: 20px">Selamat Datang di AMPERA</h3></p> --}}
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email"  class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>
                                    <div class="col-md-6">
                                        <input id="password" type="password"  name="password" class="form-control" required>
                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Ingat Saya
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                        Login
                                        </button>
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </section>
        </div>
    </body>
    <script src="{{asset('assets/scripts/frontend.js')}}"></script>
    <!-- <script type="text/javascript" src="/../template-new-ho/asset/js/custom/amandaCustom.js"></script> -->
    <!-- <script type="text/javascript" src="/../template-new-ho/asset/js/custom/index.js"></script> -->
</body>
</html>
