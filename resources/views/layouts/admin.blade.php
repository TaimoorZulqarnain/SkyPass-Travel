<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from andit.co/projects/html/and-tour/super-admin/db-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Sep 2023 09:39:57 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('/font-awesome/6.3.0/css/all.min.css') }}" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
  <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('/admin-assets/css/vendors.css')}}">
  <link rel="stylesheet" href="{{asset('/admin-assets/css/main.css')}}" rel="stylesheet"/>
  <link rel="stylesheet" href="{{asset('/toast/css/sh_toaster.css')}}">
  <script src=" {{asset('/toast/js/sh_toaster.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>  
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
  <title>{{env('APP_Name')}}</title>
  </head>
  <body data-barba="wrapper">
    <div class="sh-toast-container" id="shToastContainerTop"></div>

    @yield('content')


  <!-- JavaScript -->
  <script src="{{asset('/admin-assets/js/chart.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
  <script src=" {{asset('/admin-assets/js/vendors.js')}}"></script>
  <script src=" {{asset('/admin-assets/js/main.js')}}"></script>

 
  
  <!-- End Script -->
  
    </body>
<!-- Mirrored from andit.co/projects/html/and-tour/super-admin/db-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Sep 2023 09:40:06 GMT -->
</html>
