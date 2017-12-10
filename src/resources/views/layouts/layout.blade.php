<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dash Auth</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css">
</head>

<style>
    .button {
        border-radius: 30px;
    }

    p {
        font-size: 16px;
    }


    .form-control {
        border-radius: 0;
    }

    .hide {
        display: none;
    }

    .btn {
        border-radius: 20px;
    }

    footer {
        padding: 50px 0;
    }

</style>
@stack('styles')
@stack('inline-styles')
</head>

<body>
    <div class="container">
    <div class="section">
        <p class="title is-2">DashAuth</p>
    </div>
    </div>
    @yield('content')
    <footer class="container"
    <div class="section">
        <p class="text-center">Footer </p>
</div>
    </footer>
</body>

@stack('scripts')
@stack('inline_scripts')

</html>
