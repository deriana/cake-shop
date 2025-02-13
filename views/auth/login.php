<?php 
require_once ("authLogin.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Azia Responsive Bootstrap 4 Dashboard Template</title>

    <!-- vendor css -->
    <link href="../../assets/lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../../assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../../assets/lib/typicons.font/typicons.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="../../assets/css/azia.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  </head>
  <body class="az-body">

    <div class="az-signin-wrapper">
      <div class="az-card-signin">
        <h1 class="az-logo">az<span>i</span>a</h1>
        <div class="az-signin-header">
          <h2>Welcome back!</h2>
          <h4>Please sign in to continue</h4>

          <form action="index.html">
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" placeholder="Enter your username">
            </div><!-- form-group -->
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Enter your password">
            </div><!-- form-group -->
            <button class="btn btn-az-primary btn-block">Sign In</button>
          </form>
        </div><!-- az-signin-header -->
        <div class="az-signin-footer">
          <p>Don't have an account? <a href="page-signup.html">Create an Account</a></p>
        </div><!-- az-signin-footer -->
      </div><!-- az-card-signin -->
    </div><!-- az-signin-wrapper -->

    <script src="../../assets/lib/jquery/jquery.min.js"></script>
    <script src="../../assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/lib/ionicons/ionicons.js"></script>
    <script src="../../assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="../../assets/js/jquery.cookie.js" type="text/javascript"></script>

    <script src="../../assets/js/azia.js"></script>
    <script>
      $(function(){
        'use strict'

      });
    </script>
  </body>
</html>