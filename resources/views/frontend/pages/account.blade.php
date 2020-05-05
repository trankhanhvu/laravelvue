@extends('frontend.layout.index')

@section('breadcrum')
<!-- broadcamp area start-->
<div class="broadcamp-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>My Account</h2>
                <h4><a href="index-1.html">Home </a> / My Account</h4>
            </div>
        </div>
    </div>
</div>
<!-- broadcamp area end-->
@endsection

@section('content')
<!-- order page start -->
<div class="order-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-5 wow fadeInLeft">
                <div class="account-login cta">
                    <h4>Log in </h4>
                    <form action="{{url('login')}}" method="POST" id="login-form">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <label>Email address * </label>
                        <input type="text" name="email" id="login_email">
                        <label>Password *</label>
                        <input type="password" name="password" id="login_password">
                        <span class="check_box22">
                            <input type="checkbox" id="c23" name="remember_me">
                            <label for="c23">Remember me</label>
                            <a href="#">Lost your password?</a>
                            <input type="button" value="Login" id="login">
                        </span>

                        <a class="btn btn-link" href="{{ URL::to('auth/facebook') }}">
                            <i class="fa fa-facebook-official" aria-hidden="true"></i> Đăng nhập bằng Facebook
                        </a>
                        <a class="btn btn-link" href="{{ URL::to('auth/google') }}">
                            <i class="fa fa-google-plus-square" aria-hidden="true"></i> Đăng nhập bằng Google
                        </a>
                    </form>
                    <br>

                    <div class="alert alert-danger login-validate" style="display:none"></div>

                    @if (session('loginfail'))
                    <div class="alert alert-danger">
                        {{session('loginfail')}}
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-md-2 text-center">
                <div class="account-center-table">
                    <div class="account-center">
                        <h4>Or</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-5 wow fadeInRight">
                <div class="account-login">
                    <h4>Register </h4>
                    <form action={{ url('register') }} method="POST" id="register-form">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <label>Name * </label>
                        <input type="text" name="name" id="name_register">
                        <label>Username or email address * </label>
                        <input type="text" name="email" id="email_register">
                        <label>Password *</label>
                        <input type="password" name="password" id="pw_register">
                        <label>Confirm Password *</label>
                        <input type="password" name="password_confirmation" id="confirmpw_register">
                        <span class="check_box22">
                            <input id="register" type="button" value="Register">
                        </span>
                    </form>
                    <br>

                    <div class="alert alert-danger register-validate" style="display:none"></div>

                    @if(isset($_SESSION['success']))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                    @endif
                </div>
            </div>


        </div>
    </div>
</div>
<!-- order page end -->
@endsection

@section('script')
<script type="text/javascript">

    //validate register with ajax
    $('#register').click(function(){
        var _token = $("input[name='_token']").val();
        var name = $('#name_register').val();
        var email = $('#email_register').val();
        var password = $('#pw_register').val();
        var password_confirmation = $('#confirmpw_register').val();

        $.ajax({
                url: "/register_validate",
                type:'POST',
                data: {_token:_token, name:name, email:email, password:password, password_confirmation:password_confirmation},
                success: function(data) {
                    $('.register-validate').html('');
                    if(data)
                    {
                        for(i = 0 ; i< data.error.length ; i++)
                        {
                            $('.register-validate').show();
                            $('.register-validate').append(data.error[i] + "<br>");
                        }
                    }
                    else
                        $('#register-form').submit();
                }
            });
        })

        $('#login').click(function(){
        var _token = $("input[name='_token']").val();
        var email = $('#login_email').val();
        var password = $('#login_password').val();
       
        $.ajax({
                url: "/login_validate",
                type:'POST',
                data: {_token:_token, email:email, password:password},
                success: function(data) {
                    $('.login-validate').html('');
                    if(data)
                    {
                        for(i = 0 ; i< data.error.length ; i++)
                        {
                            $('.login-validate').show();
                            $('.login-validate').append(data.error[i] + "<br>");
                        }
                    }
                    else
                        $('#login-form').submit();
                }
            });
        })
</script>
@endsection