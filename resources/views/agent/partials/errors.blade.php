 
@if($errors ->any() > 0)
<div class="alert alert-danger">
    <ul class="pl-15">
        @foreach($errors ->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif        


@if(Session::has('message'))
    <script>
        let Settings = {
            duration:  3000,
            showProgress: true,
            toastLocation: 'top'
        };
        Toast.success("Success! {{Session::get('message')}}.", Settings);
    </script>
@endif

@if(Session::has('error'))
    <script>
        let Settings = {
            duration:  3000,
            showProgress: true,
            toastLocation: 'top'
        };
        Toast.error("Error! {{Session::get('error')}}.", Settings);
    </script>
@endif

@if(Session::has('warning'))
<script>
    let Settings = {
        duration:  3000,
        showProgress: true,
        toastLocation: 'top'
    };
    Toast.warning("Warning! {{Session::get('warning')}}.", Settings);
</script>
@endif