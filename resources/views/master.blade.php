<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
    
    <title>hard graft</title>
  </head>
  <body>

    <div class="container-fluid">
      <header class="row">
        <nav class="navigation col-4">
          <a href="">
            <div></div>
            <div></div>
            <div></div>
          </a>
        </nav>
        <div class="logo-group col-4">
            <div class="logo">
              <a href=""><h2>hard</h2></a>
              <a href=""><h2>graft</h2></a>
            </div>
        </div>
        <div class="menu col-4">
            <div class="language">
              <a href="">English <i class="fas fa-chevron-down"></i></a>
            </div>
            <div class="links">
              <a href="{{ route('login')}}"><i class="far fa-user"></i></a>
              <a href=""><i class="fas fa-search"></i></a>
              <a href=""><i class="fas fa-shopping-bag"></i></a>
            </div>
        </div>
      </header>
      <main>

        @yield('content')
        
      </main>
      <footer>

      
      </footer>
      
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/09fb3fd06b.js" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>