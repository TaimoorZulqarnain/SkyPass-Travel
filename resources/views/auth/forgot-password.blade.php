@extends('layouts.app')
@section('content')
<!-- Common Banner Area -->
<section id="common_banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common_bannner_text">
                    <h2>Login</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><span><i class="fas fa-circle"></i></span> Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
 <!--  Common Author Area -->
@if(Session::has('message'))
<script>
    let Settings = {
        duration:  8000,
        showProgress: true,
        toastLocation: 'top'
    };
    Toast.success("Success! {{Session::get('message')}}.", Settings);
</script>
@endif

@if ($errors->any())    
<script>
    let Settings = {
        duration:  8000,
        showProgress: true,
        toastLocation: 'top'
    };
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            Toast.danger("Error! {{$error}}.", Settings);
        @endforeach
    @endif
</script>
@endif
@if (session('status'))
<script>
    let Settings = {
        duration:  8000,
        showProgress: true,
        toastLocation: 'top'
    };
    Toast.success("{{ session('status') }}", Settings);
</script>
@endif
 <section id="common_author_area" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="common_author_boxed">
                        <div class="common_author_heading">
                            <h3>Forgot Password</h3>
                        </div>
                        <div class="common_author_form">
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="mb-4 text-sm text-gray-600">
                                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" value="{{old('name')}}" required autofocus autocomplete="username" />
                                </div>
                                <div class="common_form_submit">
                                    <button type="submit" class="btn btn_theme btn_md">{{ __('Email Password Reset Link') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cta Area -->
    <section id="cta_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="cta_left">
                        <div class="cta_icon">
                            <img src="assets/img/common/email.png" alt="icon">
                        </div>
                        <div class="cta_content">
                            <h4>Get the latest news and offers</h4>
                            <h2>Subscribe to our newsletter</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="cat_form">
                        <form id="cta_form_wrappper">
                            <div class="input-group"><input type="text" class="form-control"
                                    placeholder="Enter your mail address"><button class="btn btn_theme btn_md"
                                    type="button">Subscribe</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection