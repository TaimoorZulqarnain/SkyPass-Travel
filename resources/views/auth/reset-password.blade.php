@extends('layouts.app')
@section('content')
 <!-- Common Banner Area -->
 <section id="common_banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common_bannner_text">
                    <h2>Register</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><span><i class="fas fa-circle"></i></span> Register</li>
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
    Toast.success("Success! {{Session::get('message')}}", Settings);
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
            Toast.danger("Error! {{$error}}", Settings);
        @endforeach
    @endif
</script>
@endif

<!--  Common Author Area -->
<section id="common_author_area" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="common_author_boxed">
                        <div class="common_author_heading">
                            <h3>Reset Password</h3>
                        </div>
                        <div class="common_author_form">
                            <form id="main_author_form" method="POST" action="{{ route('password.store') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                <div class="form-group">
                                    <input  type="email" name="email" value="{{old('email', $request->email)}}" class="form-control" placeholder="Email address*" required autocomplete="email"/>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password*" required autocomplete="new-password"/>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password*" required autocomplete="new-password"/>
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                                <div class="common_form_submit">
                                    <button class="btn btn_theme btn_md" type="submit"> {{ __('Reset Password') }}</button>
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