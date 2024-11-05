{{-- resources/views/dashboard.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <h1>Welcome to Your Dashboard</h1>
        <p>This is a protected area that only authenticated users can access.</p>
    </div>
    {{-- Example in navbar or any Blade layout file --}}
    @auth
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="btn btn-link">Logout</button>
        </form>
    @endauth

</body>

</html>
