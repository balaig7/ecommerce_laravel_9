<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ECOMMERCE</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('css/admin/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('css/admin/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      @include('layouts.admin.header')
      <div class="container-fluid page-body-wrapper">
        @include('layouts.admin.menu')
        <div class="main-panel">
          <div class="content-wrapper">
            @yield('content')
          </div>
          @include('layouts.admin.footer')
