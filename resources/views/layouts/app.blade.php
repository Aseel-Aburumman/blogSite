{{-- resources/views/layouts/auth.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <style>
        /* Custom pastel colors */
        .bg-pastel-blue {
            background-color: #d0e8f2;
        }

        .bg-pastel-green {
            background-color: #d7f3e3;
        }

        .bg-pastel-pink {
            background-color: #f7d5d9;
        }

        .text-muted-dark {
            color: #6c757d;
        }
    </style>

</head>

{{--  <body class="bg-light">  --}}
{{--  <div class="d-flex justify-content-center align-items-center min-vh-100">  --}}
@yield('content')
{{--  </div>  --}}
{{--  </body>  --}}

</html>
