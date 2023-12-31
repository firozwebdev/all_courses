<!doctype html>
<html lang="en" class="h-100">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
{{--    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">--}}

    <title>List of User</title>

</head>
<body class="d-flex flex-column h-100">

<div class="container pt-4 pb-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
        <a class="navbar-brand" href="#">HTML CRUD Template</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create.html">Create</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-md-0">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </nav>
</div>

<main role="main" class="flex-shrink-0">
    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
    @yield('content')
</main>

<footer class="footer mt-auto py-3">
    <div class="container pb-5">
        <hr>
        <span class="text-muted">
                    Copyright &copy; 2024 | <a href="#">By FRS</a>
            </span>
    </div>
</footer>


<script src="{{ asset('assets/js/jquery-3.3.1.slim.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<script>

    <?php

    if (isset($_SESSION['message'])) {
        echo "<script type=\"text/javascript\">toastr.success(\"{$_SESSION['message']}\")</script>";
        //echo '<script type="text/javascript">toastr.success("{$_SESSION[\'message\']}")</script>';
        unset($_SESSION['message']);
    }


    ?>
</script>
</body>
</html>
