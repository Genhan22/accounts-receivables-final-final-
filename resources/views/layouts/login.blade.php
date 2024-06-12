<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/login.css') }}" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
        .navbar-brand {
            display: block;
            color: yellow;
        }
        .navbar-brand:nth-child(2) {
            color: black;
        }
        .logo {
            float: left;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
            <a class="navbar-brand" href="#">
                <img src="https://plm.edu.ph/images/ui/plm-logo--with-header.png" width="500" height="100" class="align-top d-inline-block" alt="">
            </a>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="ml-auto navbar-nav">
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ route('login') }}">LOGIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="bg">
        <div class="block">
            <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
                <div class="text-center">
                    <h1 class="display-4" style="color: black;">Accounts Receivables Portal</h1>
                </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
