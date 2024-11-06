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
             background-color: #D9D9D5;
         }

         .bg-pastel-pinkbtn {
             background-color: #CBBAB2;
         }

         .text-muted-dark {
             color: #6c757d;
         }

         /* Navbar styling */
         .navbar {
             background-color: #C7B7AE;
         }

         .navbar-brand,
         .nav-link {
             color: #6c757d !important;
         }

         .navbar-brand:hover,
         .nav-link:hover {
             color: #343a40 !important;
         }

         /* Button styling */
         .btn-pastel-green {
             background-color: #d7f3e3;
             color: #6c757d;
             border: none;
         }

         .btn-pastel-green:hover {
             background-color: #c0e9d3;
             color: #343a40;
         }
     </style>
 </head>

 <body class="bg-light">
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-light bg-pastel-blue">
         <a class="navbar-brand" href="/">Dardos Tech Blog Website
         </a>
         <div class="collapse navbar-collapse justify-content-end">
             <ul class="navbar-nav">
                 @guest
                     <!-- Show Sign Up and Log In buttons for guests -->
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('login') }}">Log In</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
                     </li>
                 @elseif ($user->role_id == 1)
                     <li class="nav-item mr-3 ">
                         <form action="{{ route('admin.posts.index') }}" method="POST">
                             @csrf
                             <button type="submit" class="btn btn-pastel-green">Manage Posts</button>
                         </form>
                     </li>
                     <li class="nav-item">
                         <form action="{{ route('logout') }}" method="POST">
                             @csrf
                             <button type="submit" class="btn btn-pastel-green">Log Out</button>
                         </form>
                     </li>
                 @else
                     <li class="nav-item">
                         <form action="{{ route('logout') }}" method="POST">
                             @csrf
                             <button type="submit" class="btn btn-pastel-green">Log Out</button>
                         </form>
                     </li>
                 @endguest
             </ul>
         </div>
     </nav>

     <!-- Main Content -->
     <div class="d-flex justify-content-center align-items-center min-vh-100">
         @yield('content')
     </div>
 </body>

 </html>
