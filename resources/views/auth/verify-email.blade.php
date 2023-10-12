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
                            <h3>Email Verification</h3>
                        </div>
                        <div class="common_author_form">
                                @csrf
                            <div class="mb-4 text-sm text-gray-600">
                            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                            </div>
                            @if (session('status') == 'verification-link-sent')
                            <div class="alert alert-success" role="alert">
                                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                </div>
                            @endif
                            <form method="POST" class="text-center" action="{{ route('verification.send') }}">
                                @csrf

                                <div>
                                <button type="submit" class="btn btn_theme btn_md">
                                        {{ __('Resend Verification Email') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection