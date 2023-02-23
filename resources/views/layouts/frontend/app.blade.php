<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Startup - Startup Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    @include("layouts.frontend.partials.css")
</head>

<body>
   @include('layouts.frontend.partials.header')

    @yield('content')

  @include("layouts.frontend.partials.footer")


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


 @include("layouts.frontend.partials.scripts")
 @stack('style')
</body>

</html>
