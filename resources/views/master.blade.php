<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title') | HShoes</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="source/img/icon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="source/lib/slick/slick.css" rel="stylesheet">
    <link href="source/lib/slick/slick-theme.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="source/css/style.css">
</head>

<body>
    @include('header')
    <main>
        @yield('content')
    </main>
    @include('footer')
    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="source/lib/easing/easing.min.js"></script>
    <script src="source/lib/slick/slick.min.js"></script>

    <!-- Template Javascript -->
    <script src="source/js/main.js"></script>
</body>

</html>